<?php
session_start();
$dbHost = 'localhost';
$dbName = 'userdb';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>
