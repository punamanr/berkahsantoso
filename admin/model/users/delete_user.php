<?php
//delete user
include '../../../config/configuration_prod.php';

$id = $_GET['id'];
$username = $_GET['username'];

// echo "id = ".$id;
// echo "username = ".$username;

$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) { ?>
       <script> alert('Account admin berhasil dihapus!')
       document.location="http://<?php echo $_SERVER['HTTP_HOST']?>/berkahsantoso/admin/user"
       </script> 
   <?php } 
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
