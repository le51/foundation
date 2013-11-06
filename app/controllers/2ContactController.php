<?php

use Phalcon\Mvc\Model\Criteria,
    Phalcon\Paginator\Adapter\Model as Paginator;

class ContactController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for contact
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Contact", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");            
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $contact = Contact::find($parameters);
        if (count($contact) == 0) {
            $this->flash->notice("The search did not find any contact");
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $contact,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a contact
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $contact = Contact::findFirstById($id);
            if (!$contact) {
                $this->flash->error("contact was not found");
                return $this->dispatcher->forward(array(
                    "controller" => "contact",
                    "action" => "index"
                ));
            }

            $this->view->id = $contact->id;

            $this->tag->setDefault("id", $contact->id);
            $this->tag->setDefault("name", $contact->name);
            $this->tag->setDefault("email", $contact->email);
            $this->tag->setDefault("content", $contact->content);
            $this->tag->setDefault("created_at", $contact->created_at);
            
        }
    }

    /**
     * Creates a new contact
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }

        $contact = new Contact();

        //$contact->id = $this->request->getPost("id");
        $contact->name = $this->request->getPost("name");
        $contact->email = $this->request->getPost("email", "email");
        $contact->content = $this->request->getPost("content");

        

        if (!$contact->save()) {
            foreach ($contact->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "new"
            ));
        }

        $this->flash->success("contact was created successfully");
        return $this->dispatcher->forward(array(
            "controller" => "contact",
            "action" => "index"
        ));

    }

    /**
     * Saves a contact edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $contact = Contact::findFirstByid($id);
        if (!$contact) {
            $this->flash->error("contact does not exist " . $id);
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }

        $contact->id = $this->request->getPost("id");
        $contact->name = $this->request->getPost("name");
        $contact->email = $this->request->getPost("email", "email");
        $contact->content = $this->request->getPost("content");
        $contact->created_at = $this->request->getPost("created_at");
        

        if (!$contact->save()) {

            foreach ($contact->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "edit",
                "params" => array($contact->id)
            ));
        }

        $this->flash->success("contact was updated successfully");
        return $this->dispatcher->forward(array(
            "controller" => "contact",
            "action" => "index"
        ));

    }

    /**
     * Deletes a contact
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $contact = Contact::findFirstByid($id);
        if (!$contact) {
            $this->flash->error("contact was not found");
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }

        if (!$contact->delete()) {

            foreach ($contact->getMessages() as $message){
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "search"
            ));
        }

        $this->flash->success("contact was deleted successfully");
        return $this->dispatcher->forward(array(
            "controller" => "contact",
            "action" => "index"
        ));
    }

}
