<?php 
$host = "localhost";
$database = "db_berkahsantoso";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi 
// $conn = mysqli_connect($host, $username, $password, $database);
// // mengecek koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

//echo "Koneksi berhasil";

?>