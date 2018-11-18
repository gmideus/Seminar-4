<?php

class User{

    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function compare(User $user){
        if($this->username == $user->getUsername() && $this->password == $user->getPassword()){
            return true;
        } else {
            return false;
        }
    }

}