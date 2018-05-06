<?php
//delete user
include '../../../config/configuration.php';

$id = $_GET['id'];
$nama = $_GET['nama'];

$sql = "UPDATE contacts
    		set dihapus = 1 
    		WHERE id=$id";

if ($conn->query($sql) === TRUE) { 
        echo "<script>alert('Email $nama berhasil dihapus!')
        location.replace('../../../../../admin/email')</script>";
} 
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
