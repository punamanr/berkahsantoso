<?php
//edit medsos
include '../../../config/configuration.php';

for ($i=0; $i < 3; $i++) { 
  $id = $_POST['id'.$i];
  $link = $_POST['link'.$i];


  $sql = "UPDATE mediasosial
          SET link = '$link'
          where id = '$id'";

  if ($conn->query($sql) === TRUE) {
  // echo "Record updated successfully";
  echo "<script>alert('Edit link berhasil!')
  location.replace('../../medsos')</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
    
}

?>