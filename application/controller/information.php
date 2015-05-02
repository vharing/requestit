<?php

/**
 * Class Information
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Information extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/information/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        //require APP . 'view/_templates/header.php';
        //require APP . 'view/requests/index.php';
        //require APP . 'view/_templates/footer.php';
        $this->render('index');
    }

}






//Brian, this is the controller file
	
	