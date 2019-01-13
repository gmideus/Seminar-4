<?php



use Controller\Controller;

require_once './Resources/fragments/init.php';

$contr = Controller::getController();
$contr->createUser('User', 'abc123');

