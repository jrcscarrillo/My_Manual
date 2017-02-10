<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Welcome');
        parent::initialize();
    }

    public function indexAction()
    {
        if (!$this->request->isPost()) {
            $this->flash->notice('This is a modified application of the Phalcon Framework INVO.
                Please use it and share your adds. Thanks');
        }
    }
}
