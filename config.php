<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

define('DBHOST', 'sandrawara.se.mysql');
define('DBUSER', 'sandrawara_se_api');
define('DBPASS', 'restApi');
define('DBDATABASE', 'sandrawara_se_api');


//Starta session
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

function __autoload($class) {
    include $class . '.php';
}

?>