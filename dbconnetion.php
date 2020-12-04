<?php
$_SERVER['HTTPS']= 'on';
define('DB_NAME', $_SERVER['bloodbank']);
define('DB_USER', $_SERVER['admin']);
define('DB_PASSWORD', $_SERVER['12345678']);
define('DB_HOST', $_SERVER['rdbapp.c7apijsslqfc.us-east-1.rds.amazonaws.com']);
define('DB_TABLE', $_SERVER['bloodinfo']);
define('DB_TABLE', $_SERVER['bloodrequest']);
define('DB_TABLE', $_SERVER['hospitals']);
define('DB_TABLE', $_SERVER['receivers']);
?>
