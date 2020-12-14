<?php
$_SERVER['HTTPS']= 'on';
define('DB_NAME', $_SERVER['bloodbank']);
define('DB_USER', $_SERVER['RaufBBMS']);
define('DB_PASSWORD', $_SERVER['RaufBBMS']);
define('DB_HOST', $_SERVER['database-1.c7apijsslqfc.us-east-1.rds.amazonaws.com']);
define('DB_TABLE', $_SERVER['bloodinfo']);
define('DB_TABLE', $_SERVER['bloodrequest']);
define('DB_TABLE', $_SERVER['hospitals']);
define('DB_TABLE', $_SERVER['receivers']);
?>
