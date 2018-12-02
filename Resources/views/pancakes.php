<!DOCTYPE html>
<html>
<head>
    <title><?php include FRAGMENTS.'title.php' ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="Resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="Resources/css/style.css" />
</head>
<body>

<?php

$selected = "pancakes";
$_SESSION[PAGE]  = $selected;
include FRAGMENTS.'header.php';
include FRAGMENTS.'sidemenu.php';
include CONTENT.'pancakescontent.php';
include 'loadCommentSection.php';
?>
</body>