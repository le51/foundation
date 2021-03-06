<?php

error_reporting(E_ALL);
$debug = new \Phalcon\Debug();
$debug->listen();

	/**
	 * Read the configuration
	 */
	$config = include __DIR__ . "/../app/config/config.php";

	/**
	 * Read auto-loader
	 */
	include __DIR__ . "/../app/config/loader.php";

	/**
	 * Read services
	 */
	include __DIR__ . "/../app/config/services.php";

        /*$translate = new Phalcon\Translate\Adapter\Gettext(array(
            'locale' => 'fr_FR',
            'file' => 'messages',
            'directory' => '../app/lang'
        ));*/

	/**
	 * Handle the request
	 */
	$application = new \Phalcon\Mvc\Application($di);
	
	echo $application->handle()->getContent();


