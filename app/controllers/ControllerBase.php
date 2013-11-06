<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        Phalcon\Tag::prependTitle('Foundation | ');
        // Javascripts in the header
        $this->assets
            ->collection('header')
            //->addJs('js/jquery.js')
            //->addJs('js/bootstrap.min.js');
            ->addJs('js/vendor/custom.modernizr.js')
            //->addJs('js/vendor/zepto.js')
            //->addJs('js/foundation/foundation.js')
            ;
        $this->assets
            ->collection('headerCss')
            ->addCss('css/normalize.css')
            ->addCss('css/foundation.min.css');

        //Javascripts in the footer
        $this->assets
            ->collection('footer')
            ->addJs('js/vendor/jquery.js')
            ->addJs('js/foundation.min.js');
            

    }
}
