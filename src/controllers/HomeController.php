<?php

namespace Marle\BlogOpc\controllers;

class HomeController
{
    private $twig;


    function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index($errorMessage = null)
    {
        echo $this->twig->render('home.twig', [$errorMessage]);
    }
}
