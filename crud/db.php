<?php

$servername = "db";
$username = "app1";
$password = "HAMK@31011999";
$dbname = "app1";

//creating connection
$connection = new mysqli($servername, $username, $password, $dbname);

//check the connection

if($connection->connect_error){
    die("connection fail:" .$connection->connect_error);
}

?>