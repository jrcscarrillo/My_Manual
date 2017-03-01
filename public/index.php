<?php

error_reporting(E_ALL);

use Phalcon\Mvc\Application;
use Phalcon\Config\Adapter\Ini as ConfigIni;
use Phalcon\Events\Manager as eventos;
use Phalcon\Logger\Adapter\File as adaptador;
use Phalcon\Logger\Formatter\Line as formato;

try {
    define('APP_PATH', realpath('..') . '/');

    /** Read the configuration from the config.ini and generate de class Phalcon\Config */
    $config = new ConfigIni(APP_PATH . 'app/config/config.ini');
    if (is_readable(APP_PATH . 'app/config/config.ini.dev')) {
        $override = new ConfigIni(APP_PATH . 'app/config/config.ini.dev');
        $config->merge($override);
    }

    /** Include the instantiation of the \Phalcon\Loader: set directories, files, name spaces, and classes */
    require APP_PATH . 'app/config/loader.php';
    /** instantiate the \Phalcon\Mvc\Application class with all the services needed in the application using the DI FactoryDefaulr class */
//    $application = new Application(new Services($config));
    $di = new Services($config);
    $di->set('dbListener', [
       'className' => 'DBListener',
       'arguments' => [
          ['type' => 'service', 'name' => 'logger']
       ]
       ]);
    $eventsManager = new eventos;
    $di->set('logger', function($file = 'main', $format = NULL) use ($config)
    {
        $config = $config->get('logger')->toArray();
        $date = $config['dateFormat'];
        $format = $format ?: $config['format'];
        $logger = new adaptador(APP_PATH . $config['path'] . $file . '.log');
        $formatter = new formato($format, $date);
        $logger->setFormatter($formatter);
        return $logger;
        
    });
    $di->setShared('db', function() use($config, $eventsManager, $di){
        $dbListener = $di->get('dbListener');
        $eventsManager->attach('db', $dbListener);
        $dbConfig = $config->database->toArray();
        $adapter = $dbConfig['adapter'];
        unset($dbConfig['adapter']);
        $class = 'Phalcon\Db\Adapter\Pdo\\' . $adapter;
        $connection = new $class($dbConfig);
        $connection->setEventsManager($eventsManager);
        return $connection;
    });
    $application = new Application($di);
    /**  */
    echo $application->handle(!empty($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null)->getContent();
} catch (Exception $e){
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
