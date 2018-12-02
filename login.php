<?php

use Controller\Controller;

require_once './Resources/fragments/init.php';

$contr = Controller::getController();
$username = htmlentities($_POST[USERNAME]);
$password = htmlentities($_POST[PASSWORD]);
if($contr->authenticateUser($username, $password)){
    $_SESSION[USERNAME] = $username;
    include VIEWS.$_SESSION[PAGE].'.php';
} else {
    $_SESSION[LOGIN_ERROR] = "Incorrect username or password. Please try again";
    include VIEWS.'loginpage.php';
}
