<?php
//delete user
include '../../../config/configuration.php';

$id = $_GET['id'];
$judul = $_GET['judul'];

$sql = "DELETE FROM services WHERE id=$id";


if ($conn->query($sql) === TRUE) { 
        echo "<script>alert('Jasa $judul berhasil dihapus!')
        location.replace('../../../../../admin/service')</script>";
} 
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
