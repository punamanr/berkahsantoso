<?php
//edit medsos
include '../../../config/configuration.php';
$id = $_POST['id'];
$nama_medsos = $_POST['nama_medsos'];
$link = $_POST['link'];

echo 'id = '.$id;
echo ' nama medsos = '.$nama_medsos;
echo ' link = '.$link;

$sql = "UPDATE mediasosial
		    SET link = '$link'
        where id = $id";
$result = mysqli_query($conn,$sql);

echo "<script>alert('Edit $nama_medsos berhasil!')
location.replace('../../medsos')</script>";
?>