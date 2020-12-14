<?php
$servername = "database-1.c7apijsslqfc.us-east-1.rds.amazonaws.com";
$username = "abdul";
$password = "12345678";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>