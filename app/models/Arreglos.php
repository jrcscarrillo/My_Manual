<?php

class Arreglos extends \Phalcon\Mvc\Model
{
    public $id;
    public $function_name;
    public $function_description;
    public $function_version;
    public $function_code;
    public $flag_datos;
    public $get_datos;
    public $include_exec;

    public function initialize()
    {
        $this->setSchema("paraphp");
    }

    public function getSource()
    {
        return 'arreglos';
    }

    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
