<?php

// error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
// $con=@mysql_pconnect('localhost','root','Sachin@123')or die("cannot connect to server");
// mysql_select_db('pharmacyms')or die("cannot connect to database");

define('SITEURL', 'http://localhost/Pharmacy/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Sachin@123');
define('DB_NAME', 'pharmacyms');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die("cannot connect to database"); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die("cannot connect to database");
?>