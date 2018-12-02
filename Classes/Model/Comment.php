<?php
namespace Model;

class Comment{
    private $author;
    private $content;
    private $posttime;
    private $deleted;
    private $ID;

    public function __construct($author, $content){
        $this->author = $author;
        $this->content = $content;
        $this->deleted = false;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getContent(){
        return $this->content;
    }

    public function deleted(){
        return $this->deleted;
    }

    public function getPosttime(){
        return $this->posttime;
    }

    public function setPosttime($posttime){
        $this->posttime = $posttime;
    }

    public function getID(){
        return $this->ID;
    }

    public function setID($ID){
        $this->ID = $ID;
    }

    public function delete(){
        $this->deleted = true;
    }


}