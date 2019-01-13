<?php

namespace Integration;

use Model\Comment;


class DBHandler{

    public function __construct(){

    }

    private function SQLConnect(){
        return new \mysqli("localhost", "tasty", "abc123", "tasty", 3306);

    }

    public function addComment(Comment $comment, $page){
        $mysqli = $this->SQLConnect();
        $stmt = $mysqli->prepare("INSERT INTO ". $page."comments (author, posttime, content, deleted) VALUES (?,?,?, false)");
        $datetime = new \DateTime();
        $startTime = $datetime->format('Y-m-d H:i:s');
        $stmt->bind_param("sss", $comment->getAuthor(), $startTime, $comment->getContent());
        $stmt->execute();

    }

    public function deleteComment($id, $page){
        $mysqli = $this->SQLConnect();
        $stmt = $mysqli->prepare("UPDATE ". $page. "comments SET deleted = true WHERE id = (?)" );
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }


    public function getComments($page){
        $comments = array();
        $mysqli = $this->SQLConnect();
        $query = "SELECT id, author, posttime, content, deleted FROM ".$page."comments";
        $entries = $mysqli->query($query);
        while ($entry = $entries->fetch_assoc()) {
            if(!$entry["deleted"]) {
                $comment = new Comment($entry['author'], $entry['content']);
                $comment->setID($entry['id']);
                $comment->setPosttime($entry['posttime']);
                array_unshift($comments, $comment);
            }
        }
        return $comments;
    }

    public function getPassword($username){
        $mysqli = $this->SQLConnect();
        $stmt = $mysqli->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->bind_result($DBPassword);
        $stmt->fetch();
        return $DBPassword;

    }

    public function createUser($username, $password){
        $mysqli = $this->SQLConnect();
        $hashed = password_hash($password, PASSWORD_DEFAULT);


        $query = "INSERT INTO users (username, password) VALUES ('".$username."', '".$hashed."')";
        $mysqli->query($query);

    }

}