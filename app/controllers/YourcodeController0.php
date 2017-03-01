<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class YourcodeController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Manage your code');
        parent::initialize();
    }

    public function indexAction()
    {
//        $this->session->conditions = null;
//        console.log("index action I");
//        $this->view->form = new YourcodeForm;
//        if ($this->request->isPost()){
//            print_r($this->request());
//        }
//    
//        console.log("index action F");
        }

    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Yourcode", $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = array();
        if ($this->persistent->searchParams) {
            $parameters = $this->persistent->searchParams;
        }

        $yourcode = Yourcode::find($parameters);
        if (count($yourcode) == 0) {
            $this->flash->notice("The search did not find any code");

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "index",
                ]
            );
        }

        $paginator = new Paginator(array(
            "data"  => $yourcode,
            "limit" => 10,
            "page"  => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
        $this->view->yourcode = $yourcode;
    }

    public function newAction()
    {
        $this->view->form = new YourcodeForm(null, array('edit' => true));
    }

    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $yourcode = Yourcode::findFirstById($id);
            if (!$yourcode) {
                $this->flash->error("Your code was not found");

                return $this->dispatcher->forward(
                    [
                        "controller" => "yourcode",
                        "action"     => "index",
                    ]
                );
            }

            $this->view->form = new YourcodeForm($yourcode, array('edit' => true));
        }
    }

    public function createAction()
    {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "index",
                ]
            );
        }

        $form = new YourcodeForm;
        $yourcode = new Yourcode();

        $data = $this->request->getPost();
        if (!$form->isValid($data, $yourcode)) {
            foreach ($form->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "new",
                ]
            );
        }

        if ($yourcode->save() == false) {
            foreach ($yourcode->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "new",
                ]
            );
        }

        $form->clear();

        $this->flash->success("Your Code was created successfully");

        return $this->dispatcher->forward(
            [
                "controller" => "yourcode",
                "action"     => "index",
            ]
        );
    }

    public function saveAction()
    {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "index",
                ]
            );
        }

        $id = $this->request->getPost("id", "int");
        $yourcode = Yourcode::findFirstById($id);
        if (!$yourcode) {
            $this->flash->error("Your Code does not exist");

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "index",
                ]
            );
        }

        $form = new YourcodeForm;

        $data = $this->request->getPost();
        if (!$form->isValid($data, $yourcode)) {
            foreach ($form->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "new",
                ]
            );
        }

        if ($yourcode->save() == false) {
            foreach ($yourcode->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "new",
                ]
            );
        }

        $form->clear();

        $this->flash->success("Your Code was updated successfully");

        return $this->dispatcher->forward(
            [
                "controller" => "yourcode",
                "action"     => "index",
            ]
        );
    }

    public function deleteAction($id)
    {

        $yourcode = Yourcode::findFirstById($id);
        if (!$yourcode) {
            $this->flash->error("Your Code was not found");

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "index",
                ]
            );
        }

        if (!$yourcode->delete()) {
            foreach ($yourcode->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "yourcode",
                    "action"     => "search",
                ]
            );
        }

        $this->flash->success("Your Code was deleted");

        return $this->dispatcher->forward(
            [
                "controller" => "yourcode",
                "action"     => "index",
            ]
        );
    }
}
