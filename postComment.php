<?php


require_once 'Comment.php';
require_once 'keys.php';



session_start();
$filename = __DIR__ . '/'.$_SESSION[PAGE].'comments';

$author = $_SESSION[USERNAME];
$content = $_POST[COMMENT_KEY];

$comment = new Comment($author, $content);
file_put_contents($filename, serialize($comment) . CHAT_ENTRY_DELIMITER, FILE_APPEND);

include $_SESSION[PAGE].'.php';
