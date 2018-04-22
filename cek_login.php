<?php 
session_start();
include 'configuration.php';

$username=$_POST['login_username'];
$password=$_POST['login_password'];

$sql = "SELECT * FROM  user where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["status"]. "<br>";
    // }
    $_SESSION['login_username'] = $username;
    header("location: admin/index.php");
} else {
     echo "Gagal login! Silahkan cek kembali username dan password Anda.";
}

// $sql = mysqli_query($success, "select * from user where username='$username' and password='$password'");
// $xxx = mysqli_num_rows($sql);


// if($xxx==TRUE)
// {
//   // Initializing Session with value of PHP Variable and redirect page if condition is true
//   $_SESSION['login_username'] = $username;
//   header("location: admin/index.php");
// }
// else
// {
//   echo "gagal login";
// } 
?>