<?php
//edit alamat kantor
include '../../../config/configuration.php';

$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat_kantor'];

$sql = "UPDATE address
      SET email = '$email', telepon = '$telepon', alamat = '$alamat', updated_at = now()
      where id = '1'";

if ($conn->query($sql) === TRUE) {
// echo "Record updated successfully";
echo "<script>alert('Edit Company Address berhasil!')
location.replace('../../medsos')</script>";
} else {
  echo "Error updating record: " . $conn->error;
}
?>