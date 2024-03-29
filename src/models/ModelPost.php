<?php

namespace Marle\BlogOpc\models;

require_once('src/model.php');

use SPDO;

class ModelPost
{
    public function getPosts(): array
    {
        $query = 'SELECT p.*, u.username
        FROM posts p
        JOIN users u on u.id = p.user_id
        ORDER BY updated_at DESC';
        $statement = SPDO::getInstance()->query($query);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public function getPostById(int $idPost): array
    {
        $statement = SPDO::getInstance()->prepare(
            'SELECT p.*, u.username
             FROM posts p 
                JOIN users u on u.id = p.user_id 
             WHERE p.id = ?;'
        );
        $statement->execute([$idPost]);

        return $statement->fetch();
    }

    public function createPostModel(array $postContent): void
    {

        // Ecriture de la requête
        $sqlQuery = 'INSERT INTO posts(title, message, created_at, updated_at, user_id) VALUES (:title, :message, :created_at, :updated_at, :user_id)';

        // Préparation insertion en base
        $insertPost = SPDO::getInstance()->prepare($sqlQuery);

        // Exécution
        $isInserted = $insertPost->execute($postContent);

        if ($isInserted === false) {
            echo 'oops', $insertPost->errorCode(), $insertPost->errorInfo();
        }
    }

    public function updatePostModel(array $postContent): void
    {
        $sqlQuery = 'UPDATE posts SET title = :title, message = :message, updated_at = :updated_at  WHERE id = :id';
        $insertPost = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertPost->execute($postContent);
        if ($isInserted === false) {
            echo 'oops', $insertPost->errorCode(), $insertPost->errorInfo();
        }
    }

    public function deletePostModel(int $postId): bool
    {
        $statement = SPDO::getInstance()->prepare('DELETE FROM posts WHERE id= ?');
        return $statement->execute([$postId]);
    }
}
