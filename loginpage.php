<!DOCTYPE html>
<html>
<head>
    <title><?php include 'title.php' ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="reset.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
require_once 'keys.php';
session_start();
$selected = "login";
include 'header.php';
include 'sidemenu.php';
include 'loginpagecontent.php';
?>
</body>