<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'rumahsakit';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysql = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>