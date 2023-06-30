<?php

namespace Marle\BlogOpc\models;

// use Marle\BlogOpc\src\model\SPDO;

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

    public function getCommentsIsApprovedFromPostId($postId)
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM comments WHERE is_approved=1 AND posts_id = "' . $postId . '";'); // TODO : prepare
        $statement->execute();
        $comments = $statement->fetchAll();

        //var_dump($comments);
        return $comments;
    }

    public function getCommentsIsNotApproved()
    {
        $statement = SPDO::getInstance()->query('SELECT * FROM comments WHERE is_approved=0');
        $statement->execute();
        $comments = $statement->fetchAll();
        return $comments;
    }
}
