<?php

/**
 * Class Patron
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Patron extends Controller
{
    /**
     * PAGE: Public Patron Request Form
     * This method handles the form data the patron completes the request form
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
