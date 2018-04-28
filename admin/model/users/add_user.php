<?php 
//proses add user admin
include '../../../config/configuration.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$status = $_POST['status'];

if($password == $confirm_password){
  $sql = "INSERT into user (username, password, status, date_create, date_update)
          values ('$username','$password','$status',now(),now())";

  if ($conn->query($sql) === TRUE) { 
      echo "<script>alert('Sukses! Username $username berhasil ditambahkan sebagai Admin.')
      location.replace('admin/user')</script>";
  } 
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else { 
      echo "<script>alert('Gagal! Password dan Confirm Password tidak sama!')
      location.replace('admin/user')</script>";
} ?>