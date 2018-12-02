<?php

require_once './Resources/fragments/init.php';

include 'SQLConnect.php';
$username = 'Admin';
$password = password_hash('password', PASSWORD_DEFAULT);


$query = "INSERT INTO users (username, password) VALUES ('".$username."', '".$password."')";
$mysqli->query($query);


