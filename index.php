<?php


require_once './Resources/fragments/init.php';

if(isset($_GET[PAGE])){
    include VIEWS . $_GET[PAGE].'.php';
} else {
    include VIEWS . 'home.php';
}