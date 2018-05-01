<?php
// get data layanan
if($action != '')
{
  $sql = "SELECT * FROM services where id = $id";
  // $result = mysqli_query($conn, $sql);
  $result = $conn->query($sql);
}
else 
{
  $sql = "SELECT * FROM  services";
  $result = mysqli_query($conn, $sql);
}
?>