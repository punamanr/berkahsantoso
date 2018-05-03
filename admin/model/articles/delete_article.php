<?php
//delete user
include '../../../config/configuration.php';

$id = $_GET['id'];
$judul = $_GET['judul'];

$sql = "DELETE FROM articles WHERE id=$id";


if ($conn->query($sql) === TRUE) { 
        echo "<script>alert('Artikel $judul berhasil dihapus!')
        location.replace('../../../../../admin/articles')</script>";
} 
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
