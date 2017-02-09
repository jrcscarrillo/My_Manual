<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class ArreglosController extends ControllerBase
{
        public function initialize()
    {
        $this->tag->setTitle('Manage your Manual');
        parent::initialize();
    }

    public function indexAction()
    {
        $this->session->conditions = null;
        $this->view->form = new ArreglosForm;
    }

    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Arreglos', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $arreglos = Arreglos::find($parameters);
        if (count($arreglos) == 0) {
            $this->flash->notice("The search did not find any arreglos");

            $this->dispatcher->forward([
                "controller" => "arreglos",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $arreglos,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
        $this->view->arreglos = $arreglos;
    }

    public function newAction()
    {
        $this->view->form = new ArreglosForm(null, array('edit' => true));
    }

    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $arreglo = Arreglos::findFirstByid($id);
            if (!$arreglo) {
                $this->flash->error("arreglo was not found");

                return $this->dispatcher->forward([
                    'controller' => "arreglos",
                    'action' => 'index'
                ]);
            }

        $this->view->form = new ArreglosForm($arreglo, array('edit' => true));            
        }
    }

    public function createAction()
    {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'index'
            ]);
        }
        $form = new ArreglosForm;
        $arreglo = new Arreglos();
        
        $data = $this->request->getPost();
        if (!$form->isValid($data, $arreglo)) {
            foreach ($form->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "arreglos",
                    "action"     => "new",
                ]
            );
        }
        if (!$arreglo->save()) {
            foreach ($arreglo->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'new'
            ]);
        }
        $form->clear();
        $this->flash->success("arreglo was created successfully");

        return $this->dispatcher->forward([
            'controller' => "arreglos",
            'action' => 'index'
        ]);
    }

    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'index'
            ]);
        }

        $id = $this->request->getPost("id");
        $arreglo = Arreglos::findFirstByid($id);

        if (!$arreglo) {
            $this->flash->error("arreglo does not exist " . $id);

            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'index'
            ]);
        }

        $form = new ArreglosForm;

        $data = $this->request->getPost();
        if (!$form->isValid($data, $arreglo)) {
            foreach ($form->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                [
                    "controller" => "arreglos",
                    "action"     => "new",
                ]
            );
        }        

        if (!$arreglo->save()) {

            foreach ($arreglo->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'new'
            ]);
        }
        $form->clear();
        $this->flash->success("arreglo was updated successfully");

        return $this->dispatcher->forward([
            'controller' => "arreglos",
            'action' => 'index'
        ]);
    }

    public function deleteAction($id)
    {
        $arreglo = Arreglos::findFirstByid($id);
        if (!$arreglo) {
            $this->flash->error("arreglo was not found");

            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'index'
            ]);
        }

        if (!$arreglo->delete()) {

            foreach ($arreglo->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward([
                'controller' => "arreglos",
                'action' => 'search'
            ]);
        }

        $this->flash->success("arreglo was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "arreglos",
            'action' => "index"
        ]);
    }

}
