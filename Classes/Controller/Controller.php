<?php

namespace Controller;

use Integration\DBHandler;
use Model\Authenticator;
use Model\Comment;

class Controller{

    private const CONTR_KEY = "controller";
    private $handler;
    private $authenticator;


    public function __construct(){
        $this->handler = new DBHandler();
        $this->authenticator = new Authenticator();
    }

    public static function getController(){
        //if(!isset($_SESSION[self::CONTR_KEY])){
            return new Controller();
        //}
        //return unserialize($_SESSION[self::CONTR_KEY]);
    }


    public function addComment(Comment $comment, string $page){
        $this->handler->addComment($comment, $page);
    }

    public function deleteComment($id, $page){
        $this->handler->deleteComment($id, $page);
    }

    public function getComments($page){
        $comments = $this->handler->getComments($page);
        $result = array();
        foreach($comments as $comment){
            $result[$comment->getID()][] = array(
                'id' => $comment->getID(),
                'author' => $comment->getAuthor(),
                'content' => $comment->getContent(),
                'posttime' => $comment->getPosttime()

            );
        }
        return $comments;
    }

    public function authenticateUser($username, $password){
        $DBPassword = $this->handler-> getPassword($username);
        return $this->authenticator->authenticateUser($password, $DBPassword);
    }

    public function __destruct() {
        $_SESSION[self::CONTR_KEY] = serialize($this);
    }

    public function createUser($username, $password){

        $this->handler->createUser($username, $password);
    }
}