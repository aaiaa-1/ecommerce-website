<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ecomm"; 


$conn = mysqli_connect( $serverName, $dbUsername, $dbPassword, $dbName );

if (!$conn){  //if the connection fails 
    die("Connection failed :" . mysqli_connect_error());
} 