<?php 
//insert konten layanan
include '../config/configuration.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$telp = $_POST['telepon'];
$subject = $_POST['subject'];
$isi_email = $_POST['isi_email'];

  $sql = "INSERT into contacts (nama_lengkap, email, telepon, subject, isi_email, created_at)
          values ('$nama','$email','$telp','$subject','$isi_email',now())";

  if ($conn->query($sql) === TRUE) { 
      echo "<script>alert('Terima kasih sudah menghubungi kami. Pesan Anda akan kami balas secepatnya.')
      location.replace('contact')</script>";
  } 
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>