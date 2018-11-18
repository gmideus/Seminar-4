<?php

/**
 * Saves the user's nick name for the session.
 */

require_once 'keys.php';
require_once  'User.php';

session_start();

$attempt = new User($_POST[USERNAME], $_POST[PASSWORD]);

$filename = __DIR__ . '/users';
$users = explode(";\n", file_get_contents($filename));
for($i = 0; $i < count($users); $i++){
        $user = unserialize($users[$i]);
        if($user instanceof User && $attempt->compare($user)){
            $_SESSION[USERNAME] = $_POST[USERNAME];
            include $_SESSION[PAGE].'.php';
            return;
        }
}
$_SESSION[LOGIN_ERROR] = "Incorrect username or password. Please try again";
include 'loginpage.php';

