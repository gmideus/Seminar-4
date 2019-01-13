<?php

use Controller\Controller;
use Model\Comment;

require_once './Resources/fragments/init.php';

$contr = new Controller();
echo \json_encode($contr->getComments($_SESSION[PAGE]));