<?php

use Phalcon\Mvc\Model\Criteria,
    Phalcon\Paginator\Adapter\Model as Paginator;

class ImageController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for image
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Image", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");            
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $image = Image::find($parameters);
        if (count($image) == 0) {
            $this->flash->notice("The search did not find any image");
            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $image,
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
        $this->assets
            ->collection('footer')
            ->addJs('js/vendor/ajaxupload.js');
            
    }

    /**
     * Edits a image
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $image = Image::findFirstById($id);
            if (!$image) {
                $this->flash->error("image was not found");
                return $this->dispatcher->forward(array(
                    "controller" => "image",
                    "action" => "index"
                ));
            }

            $this->view->id = $image->id;

            $this->tag->setDefault("id", $image->id);
            $this->tag->setDefault("title", $image->title);
            $this->tag->setDefault("description", $image->description);
            $this->tag->setDefault("location", $image->location);
            $this->tag->setDefault("created_at", $image->created_at);
            
        }
    }

    /**
     * Creates a new image
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "index"
            ));
        }

        $image = new Image();

        $image->id = $this->request->getPost("id");
        $image->title = $this->request->getPost("title");
        $image->description = $this->request->getPost("description");
        $image->location = $this->request->getPost("location");
        $image->created_at = $this->request->getPost("created_at");
        

        if (!$image->save()) {
            foreach ($image->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "new"
            ));
        }

        $this->flash->success("image was created successfully");
        return $this->dispatcher->forward(array(
            "controller" => "image",
            "action" => "index"
        ));

    }

    /**
     * Saves a image edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $image = Image::findFirstByid($id);
        if (!$image) {
            $this->flash->error("image does not exist " . $id);
            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "index"
            ));
        }

        $image->id = $this->request->getPost("id");
        $image->title = $this->request->getPost("title");
        $image->description = $this->request->getPost("description");
        $image->location = $this->request->getPost("location");
        $image->created_at = $this->request->getPost("created_at");
        

        if (!$image->save()) {

            foreach ($image->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "edit",
                "params" => array($image->id)
            ));
        }

        $this->flash->success("image was updated successfully");
        return $this->dispatcher->forward(array(
            "controller" => "image",
            "action" => "index"
        ));

    }

    /**
     * Deletes a image
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $image = Image::findFirstByid($id);
        if (!$image) {
            $this->flash->error("image was not found");
            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "index"
            ));
        }

        if (!$image->delete()) {

            foreach ($image->getMessages() as $message){
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "image",
                "action" => "search"
            ));
        }

        $this->flash->success("image was deleted successfully");
        return $this->dispatcher->forward(array(
            "controller" => "image",
            "action" => "index"
        ));
    }

}
