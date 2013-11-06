<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        Phalcon\Tag::appendTitle('Bienvenue ');
       /* $this->assets
            ->collection('footer')
            ->addJs('js/foundation/foundation.orbit.js');*/
        $orbit=array(
            "http://lorempixel.com/1000/400/sports/1"=>"",
            "http://lorempixel.com/1000/400/sports/2"=>"Vous avez effectué une commande sur notre site le 31/10/2013 à 18h49  et nous vous en remercions.  Vous trouverez ci-dessous le détail de votre commande ainsi que la démarche à suivre pour la suite de votre voyage.",
            "http://lorempixel.com/1000/400/sports/3"=>"Vous avez effectué une commande sur notre site le 31/10/2013 à 18h49  et nous vous en remercions.  Vous trouverez ci-dessous le détail de votre commande ainsi que la démarche à suivre pour la suite de votre voyage.",
            "http://lorempixel.com/1000/400/sports/4"=>"Vous avez effectué une commande sur notre site le 31/10/2013 à 18h49  et nous vous en remercions.  Vous trouverez ci-dessous le détail de votre commande ainsi que la démarche à suivre pour la suite de votre voyage.",
        );
        $this->view->setVar("orbit", $orbit);
    }

    public function contactAction()
    {
        Phalcon\Tag::appendTitle('Contact ');
       /* $this->assets
            ->collection('footer')
            ->addJs('js/foundation/foundation.orbit.js');*/
            
    }
}

