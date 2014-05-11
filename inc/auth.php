<?php 
session_start();
require_once('lib/PHP-MySQLi-Database-Class-master/MysqliDb.php');
$db = new Mysqlidb('localhost', 'root', 'stockmania', 'project'); 
?>