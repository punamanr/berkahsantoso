<?php
// get data layanan
if($action != '')
{
  $sql = "SELECT * FROM portofolios where id = $id";
  // $result = mysqli_query($conn, $sql);
  $result = $conn->query($sql);
}
else 
{
  $sql = "SELECT * FROM  portofolios";
  $result = mysqli_query($conn, $sql);
}
?>