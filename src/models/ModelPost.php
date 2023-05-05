<?php

namespace Marle\BlogOpc\models;

require_once('src/model.php');

use SPDO;

class ModelPost
{
    public function getPosts()
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM posts');
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }
}
