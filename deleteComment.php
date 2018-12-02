<?php

use Controller\Controller;

require_once './Resources/fragments/init.php';

$contr = Controller::getController();
$contr->deleteComment($_POST[COMMENT_ID], $_SESSION[PAGE]);
include VIEWS.$_SESSION[PAGE].'.php';


