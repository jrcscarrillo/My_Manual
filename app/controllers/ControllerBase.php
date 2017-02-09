<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    protected function initialize()
    {
        $this->tag->prependTitle('My Manual | ');
//        $this->view->setTemplateAfter('main');
    }
}
