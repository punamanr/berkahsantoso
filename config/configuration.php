<?php 
$host = "localhost";
$database = "db_berkahsantoso";
$username = "root";
$password = "";

// Create connection (OOP)
$conn = new mysqli($host, $username, $password, $database);// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>