<?php
/**
 * Created by PhpStorm.
 * User: mideus
 * Date: 16/12/18
 * Time: 13:47
 */

namespace Model;


class Authenticator{

    public function authenticateUser($password, $DBPassword){
        return password_verify($password, $DBPassword);
    }

}