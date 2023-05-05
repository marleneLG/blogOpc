<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelPost;

class PostController
{
    private $twig;

    function __construct($twig)
    {
        $this->twig = $twig;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $post = new ModelPost();
        $allPosts = $post->getPosts();
        echo $this->twig->render('post.twig', ['posts' => $allPosts]);
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
}
