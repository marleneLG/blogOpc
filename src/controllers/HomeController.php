<?php

namespace Marle\BlogOpc\controllers;

class HomeController
{
    private $twig;


    function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        echo $this->twig->render('home.twig');
    }
}
