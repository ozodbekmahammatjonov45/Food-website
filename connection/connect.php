<?php

$servername = "localhost"; //server
$username = "id21554639_root"; //username
$password = "Food_045"; //password
$dbname = "id21554639_root";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
