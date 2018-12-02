<?php

use Controller\Controller;
use Model\Comment;

require_once './Resources/fragments/init.php';

$contr = new Controller();
$content = htmlentities($_POST[COMMENT_KEY]);
$contr->addComment(new Comment($_SESSION[USERNAME], $content), $_SESSION[PAGE]);
include VIEWS.$_SESSION[PAGE].'.php';

