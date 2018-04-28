<?php
//delete user
include '../../../config/configuration.php';

$id = $_GET['id'];
$username = $_GET['username'];

// echo "id = ".$id;
// echo "username = ".$username;

$sql = "DELETE FROM user WHERE id=$id";


if ($conn->query($sql) === TRUE) { 
        echo "<script>alert('Account $username berhasil dihapus!')
        location.replace('../../../../../admin/user')</script>";
} 
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
