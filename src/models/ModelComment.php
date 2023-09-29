<?php

namespace Marle\BlogOpc\models;

require_once('src/model.php');

use SPDO;

class ModelComment
{
    public function getComments()
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM comments');
        $statement->execute();
        $comments = $statement->fetchAll();
        return $comments;
    }

    public function getCommentById(int $idComment)
    {
        $statement = SPDO::getInstance()->prepare('SELECT * FROM comments WHERE id = ?');
        $statement->execute([$idComment]);
        $comment = $statement->fetch();
        return $comment;
    }

    public function getCommentsIsApprovedFromPostId(int $postId)
    {
        $statement = SPDO::getInstance()->prepare('SELECT * FROM comments WHERE is_approved=1 AND post_id = ?');
        $statement->execute([$postId]);
        $comments = $statement->fetchAll();
        return $comments;
    }

    public function getCommentsIsNotApproved()
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM comments WHERE is_approved=0');
        $statement->execute();
        $comments = $statement->fetchAll();
        return $comments;
    }

    public function createCommentModel(array $commentContent)
    {
        $sqlQuery = 'INSERT INTO comments(message, created_at, updated_at, post_id) VALUES (:message, :created_at, :updated_at, :post_id)';

        $insertComment = SPDO::getInstance()->prepare($sqlQuery);
        $result = $insertComment->execute($commentContent);

        if ($result === false) {
            echo 'oops', $insertComment->errorCode(), $insertComment->errorInfo();
        }
    }

    public function validationCommentModel(int $commentId)
    {
        $sqlQuery = 'UPDATE comments SET is_approved = 1 WHERE id = :id';
        $insertComment = SPDO::getInstance()->prepare($sqlQuery);
        $isInserted = $insertComment->execute([':id' => $commentId]);
        if ($isInserted === false) {
            echo 'oops', $insertComment->errorCode(), $insertComment->errorInfo();
        }
    }

    public function deleteCommentModel(int $commentId)
    {
        $statement = SPDO::getInstance()->prepare('DELETE FROM comments WHERE id= ?');
        return $statement->execute([$commentId]);
    }
}
