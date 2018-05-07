<?php
//delete user
include '../../../config/configuration.php';

$id = $_GET['id'];
$tempat = $_GET['tempat'];

$sql = "DELETE FROM portofolios WHERE id=$id";


if ($conn->query($sql) === TRUE) { 
        echo "<script>alert('Portofolio $tempat berhasil dihapus!')
        location.replace('../../../../../admin/portofolios')</script>";
} 
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
