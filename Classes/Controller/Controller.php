<?php

namespace Controller;

use Integration\DBHandler;
use Model\Comment;

class Controller{

    private const CONTR_KEY = "controller";
    private $handler;


    public function __construct(){
        $this->handler = new DBHandler();
    }

    public static function getController(){
        if(!isset($_SESSION[self::CONTR_KEY])){
            return new Controller();
        }
        return unserialize($_SESSION[self::CONTR_KEY]);
    }


    public function addComment(Comment $comment, string $page){
        $this->handler->addComment($comment, $page);
    }

    public function deleteComment($id, $page){
        $this->handler->deleteComment($id, $page);
    }

    public function getComments($page){
        return $this->handler->getComments($page);
    }

    public function authenticateUser($username, $password){
        return $this->handler->authenticateUser($username, $password);
    }

    public function __destruct() {
        $_SESSION[self::CONTR_KEY] = serialize($this);
    }
}