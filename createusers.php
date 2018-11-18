<?php

require_once 'User.php';
require_once 'keys.php';

$filename = __DIR__ . '/users';

session_start();

    $user = new User("User", "abc123");
    file_put_contents($filename, serialize($user) . CHAT_ENTRY_DELIMITER, FILE_APPEND);

