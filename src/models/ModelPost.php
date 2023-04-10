<?php

namespace Marle\BlogOpc\models;

class ModelPost
{
    public function test()
    {

        $post = [
            'auteur' => 'jo',
            'title' => 'Hey!',
            'message' => "Bonjour à tous",
        ];

        return $post;
    }
}
