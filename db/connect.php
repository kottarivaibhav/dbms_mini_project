<?php

$servername = "localhost";
$username = "root";
$password = "Vaibhav@@2104";
$db = "eventmgmt";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
