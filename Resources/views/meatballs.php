<!DOCTYPE html>
<html>
<head>
    <title><?php include FRAGMENTS.'title.php' ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="Resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="Resources/css/style.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="Resources/js/commentsection.js"></script>
    <script type="text/javascript" src="Resources/js/login.js"></script>
</head>
<body>

<?php

$selected = "meatballs";
$_SESSION[PAGE]  = $selected;
include FRAGMENTS.'header.php';
include FRAGMENTS.'sidemenu.php';
include CONTENT.'meatballscontent.php';
include 'loadCommentSection.php';
?>
</body>