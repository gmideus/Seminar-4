<?php
require_once './Resources/fragments/init.php';

unset($_SESSION[USERNAME]);
include VIEWS.$_SESSION[PAGE]. '.php';