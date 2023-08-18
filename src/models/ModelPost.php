<?php

namespace Marle\BlogOpc\models;

// use Marle\BlogOpc\src\model\SPDO;
require_once('src/model.php');

use SPDO;

class ModelPost
{
    public function getPosts()
    {
        $query = 'SELECT p.*, u.username
        FROM posts p
            JOIN users u on u.id = p.users_id';
        $statement = SPDO::getInstance()->query($query);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public function getPostById($idPost)
    {
        $statement = SPDO::getInstance()->prepare(
            'SELECT p.*, u.username
             FROM posts p 
                JOIN users u on u.id = p.users_id 
             WHERE p.id = ?;'
        );
        $statement->execute([$idPost]);

        return $statement->fetch();
    }

    public function createPostModel($postContent)
    {

        // Ecriture de la requête
        // https://www.php.net/manual/fr/pdo.prepare.php
        $sqlQuery = 'INSERT INTO posts(title, message, created_at, updated_at, users_id) VALUES (:title, :message, :created_at, :updated_at, :users_id)';

        // Préparation insertion en base
        $insertPost = SPDO::getInstance()->prepare($sqlQuery);

        // Exécution
        $isInserted = $insertPost->execute($postContent);

        if ($isInserted === false) {
            var_dump('oops', $insertPost->errorCode(), $insertPost->errorInfo());
        }
    }

    public function updatePostModel($postContent)
    {
        $sqlQuery = 'UPDATE posts SET title = :title, message = :message, updated_at = :updated_at  WHERE id = :id';
        $insertPost = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertPost->execute($postContent);
        if ($isInserted === false) {
            var_dump('oops', $insertPost->errorCode(), $insertPost->errorInfo());
        }
    }

    public function deletePostModel($postId)
    {
        $statement = SPDO::getInstance()->prepare('DELETE FROM posts WHERE id="' . $postId . '";');
        $statement->execute([
            $postId
        ]);
    }
}
