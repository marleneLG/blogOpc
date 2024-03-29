<?php

namespace Marle\BlogOpc\controllers;

use Marle\BlogOpc\models\ModelComment;
use Marle\BlogOpc\models\ModelPost;
use Marle\BlogOpc\models\ModelUser;
use Marle\BlogOpc\controllers\UserController;
use DateTime;
use IntlDateFormatter;

class CommentController
{
    private $twig;
    private $datetime;
    private const MAX_MESSAGE_SIZE = 300;

    function __construct(mixed $twig)
    {
        $this->datetime = (new \DateTime('now'))->format('Y/m/d H:i:s');
        $this->twig = $twig;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index(int $postId, string $validMessage = null, string $errorMessage = null): void
    {
        $comment = new ModelComment();
        $allComments = $comment->getCommentsIsApprovedFromPostId($postId);
        $postContent = $this->getPostById($postId);
        $user = new ModelUser();
        $allUsers = $user->getUsers();
        $formatter = IntlDateFormatter::create(
            'fr_FR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
        );

        $dateStringPost = $postContent['created_at'];
        $datePost = new DateTime(($dateStringPost));
        $postContent['created_at'] = $formatter->format($datePost);

        for ($i = 0; $i < count($allComments); $i++) {
            $dateStringComment = $allComments[$i]['created_at'];
            $dateComment = new DateTime(($dateStringComment));
            $allComments[$i]['created_at'] = $formatter->format($dateComment);
        }

        echo $this->twig->render('post.twig', ['comments' => $allComments, 'post' => $postContent, 'users' => $allUsers, 'validMessage' => $validMessage, 'errorMessage' => $errorMessage]);
    }

    public function isAuthorized(): bool
    {
        $userInstance = new UserController($this->twig);
        return $userInstance->hasRole();
    }

    public function displayCommentForm(int $postId, string $errorMessage = null): void
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        echo $this->twig->render('createComment.twig', [
            'postId' => $post['id'],
            'errorMessage' => $errorMessage
        ]);
    }

    public function createComment(): void
    {
        if (isset($_POST['message'])) {
            $postMessage = $_POST['message'];
        }
        $postId = $_POST['postId'];

        $isValidComment = isset($postMessage)
            && trim($postMessage) != ''
            && strlen($postMessage) < self::MAX_MESSAGE_SIZE
            && isset($postId);

        if (!$isValidComment) {
            $errorMessage = 'Champ mal rempli';
            $this->displayCommentForm($postId, $errorMessage);
            return;
        };

        $message = htmlspecialchars($postMessage);
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        $modelUser = new ModelUser();
        $userId = $modelUser->getUserByEmail($_SESSION['logged_user_email'])['id'];

        if ($post === false) {
            $errorMessage = 'Pas de post associé existant';
            $this->displayCommentForm($postId, $errorMessage);
            return;
        }

        $postIdFromDb = $post['id'];
        $commentContent = [
            'message' => $message,
            'created_at' => $this->datetime,
            'updated_at' => $this->datetime,
            'post_id' => $postIdFromDb,
            'user_id' => $userId
        ];
        $comment = new ModelComment();
        $comment->createCommentModel($commentContent);
        $validMessage = 'Commentaire bien créé, merci de patienter avant qu\'un administrateur le valide';

        $this->index($postIdFromDb, $validMessage);
    }

    public function displayManagementComment(string $errorMessage = null, string $validMessage = null): void
    {
        if ($this->isAuthorized() === false) return;

        $comment = new ModelComment();
        $user = new ModelUser();
        $allUsers = $user->getUsers();
        $allComments = $comment->getCommentsIsNotApproved();
        $numberComments = count($allComments);
        echo $this->twig->render('admin.twig', ['comments' => $allComments, 'users' => $allUsers, 'number' => $numberComments, 'validMessage' => $validMessage, 'errorMessage' => $errorMessage]);
    }

    public function updateComment(int $commentId): void
    {
        if ($this->isAuthorized() === false) return;

        $comment = new ModelComment();
        $comment->validationCommentModel($commentId);
        $this->displayManagementComment();
    }

    public function deleteComment(int $commentId): void
    {
        if ($this->isAuthorized() === false) return;

        $commentInstance = new ModelComment();
        $errorMessage = 'Commentaire non supprimé';
        $validMessage = 'Commentaire supprimé avec succès';
        if ($commentInstance->deleteCommentModel($commentId) === true) {
            $this->displayManagementComment($validMessage);
        } else {
            $this->displayManagementComment($errorMessage);
        }
    }
    public function getPostById(int $postId): array
    {
        $postInstance = new ModelPost();
        $post = $postInstance->getPostById($postId);
        return $post;
    }
}
