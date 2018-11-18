<?php
    require_once 'keys.php';
    require_once 'Comment.php';
    session_start();
    $filename = __DIR__ . '/'.$_SESSION[PAGE].'comments';
    $comments = explode(";\n", file_get_contents($filename));
    file_put_contents($filename, "");
    for ($i = 0 ; $i < count($comments); $i++) {
        $comment = unserialize($comments[$i]);
        if($comment instanceof Comment && $_POST[COMMENT_ID] == $comment->getID()){
            $comment->delete();
        }
        file_put_contents($filename, serialize($comment) . CHAT_ENTRY_DELIMITER, FILE_APPEND);
    }
    include $_SESSION[PAGE].".php";
