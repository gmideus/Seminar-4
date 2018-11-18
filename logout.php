<?php
require_once 'keys.php';

session_start();

unset($_SESSION[USERNAME]);
include $_SESSION[PAGE]. '.php';