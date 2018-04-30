<?php 
  //get data admin
  if($status == 'superadmin')
  {
    $sql = "SELECT * FROM  user";
    $result = mysqli_query($conn, $sql);
  }
  else 
  {
    $sql = "SELECT * from user where status = 'administrator'";
    $result = mysqli_query($conn,$sql);
  }

?>