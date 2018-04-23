<?php 
$host = "us-cdbr-iron-east-05.cleardb.net";
$database = "heroku_58aec591222702d";
$username = "bcbb5fbcd91d77";
$password = "a1232cea";

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