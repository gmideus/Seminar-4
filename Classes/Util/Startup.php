<?php
namespace Util;

class Startup{

    public static function initRequest() {
        self::createConstants();
        session_start();
        self::createClassLoader();
    }

    public static function createConstants(){

        self::createConstant('COMMENT_KEY', 'content');
        self::createConstant('USERNAME', 'userName');
        self::createConstant('PASSWORD', 'password');
        self::createConstant('PAGE', 'page');
        self::createConstant('CHAT_TIMESTAMP_KEY', 'timestamp');
        self::createConstant('CHAT_ENTRY_DELIMITER', ";\n");
        self::createConstant('LOGIN_ERROR', 'login-error_message');
        self::createConstant('COMMENT_ID', 'commentID');
        self::createConstant('VIEWS', './Resources/views/');
        self::createConstant('FRAGMENTS', './Resources/fragments/');
        self::createConstant('CONTENT', './Resources/pagecontent/');
        self::createConstant('CONTR_KEY', 'controller');


    }

    private static function createConstant($name, $value) {
        define($name, $value);
    }

    private static function createClassLoader() {
        spl_autoload_register(function ($className) {
            require_once 'Classes/' . \str_replace('\\', '/', $className) . '.php';
        });
    }


}