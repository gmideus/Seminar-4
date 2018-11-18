<?php

class Comment{
    private $author;
    private $content;
    private $date;
    private $deleted;
    private $ID;

    public function __construct($author, $content){
        $this->author = $author;
        $this->content = $content;
        $this->date = date('Y-m-d');
        $this->deleted = false;
        $this->ID = uniqid();
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

    public function getDate(){
        return $this->date;
    }

    public function getID(){
        return $this->ID;
    }

    public function delete(){
        $this->deleted = true;
    }


}