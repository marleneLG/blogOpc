<?php

namespace Marle\BlogOpc\controllers;
/*
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
*/
class Homepage
{
    protected $twig;

    public function showHome(): void
    {
        echo $this->twig->render('homepage.twig');
    }
}

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Routing\Annotation\Route;

// class Homepage
// {
//     // methode magique symphony pur configurer une route:
//     /**
//      * @Route("/homepage", name="homepage")
//      */
//     public function index()
//     {
//       return $this->render('index.html.twig', [
        // 'firstname' => 'John',
    // ]);
//     }
// }
