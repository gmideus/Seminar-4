<?php
namespace Model;

class Comment implements \JsonSerializable{
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

    public function jsonSerialize()
    {
        $json_obj = new \stdClass;
        $json_obj->author = \json_encode($this->author);
        $json_obj->content = \json_encode($this->content, JSON_UNESCAPED_UNICODE);
        $json_obj->posttime = \json_encode($this->posttime);
        $json_obj->ID = \json_encode($this->ID);
        return $json_obj;
    }


}