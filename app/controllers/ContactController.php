<?php

class ContactController extends ControllerBase
{

    public function indexAction()
    {
        Phalcon\Tag::appendTitle('Contact ');
       /* $this->assets
            ->collection('footer')
            ->addJs('js/foundation/foundation.orbit.js');*/
            
    }

    public function sendAction()
    {
        //Phalcon\Tag::appendTitle('Contact ');
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }

        $contact = new Contact();

        //$contact->id = $this->request->getPost("id");
        $contact->name = $this->request->getPost("name");
        $contact->email = $this->request->getPost("email");
        $contact->content = $this->request->getPost("content");
        //$contact->updated = $this->request->getPost("updated");
        //$contact->status = $this->request->getPost("status");
        

        if (!$contact->save()) {
            foreach ($contact->getMessages() as $message) {
                $this->flash->error($message);
            }
            //return "<h1>Error</h1>";
            return $this->dispatcher->forward(array(
                "controller" => "contact",
                "action" => "index"
            ));
        }
        //echo "<h1>OK/h1>";
        $this->flash->success("contact was created successfully");
        return $this->dispatcher->forward(array(
            "controller" => "contact",
            "action" => "index"
        ));
       /* $this->assets
            ->collection('footer')
            ->addJs('js/foundation/foundation.orbit.js');*/
            
    }
}

