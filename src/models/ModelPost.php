<?php

namespace Marle\BlogOpc\models;

// use Marle\BlogOpc\src\model\SPDO;
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

    public function getPostById($idPost)
    {
        $statement = SPDO::getInstance()->prepare('SELECT * FROM posts WHERE id = ?');
        $statement->execute([$idPost]);
        return $statement->fetchAll();
    }

    public function createPostModel($postContent)
    {
        // var_dump('je passe ici');
        // Ecriture de la requête
        // https://www.php.net/manual/fr/pdo.prepare.php
        $sqlQuery = 'INSERT INTO posts(title, message, created_at, updated_at, users_id) VALUES (:title, :message, :created_at, :updated_at, :users_id)';

        // Préparation insertion en base
        $insertPost = $postContent->prepare($sqlQuery);

        // Exécution
        $insertPost->execute($postContent);

        var_dump($insertPost);
    }
}
