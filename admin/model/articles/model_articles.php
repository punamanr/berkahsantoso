<?php
// get data artikel
	if($action != '')
	{
	  $sql = "SELECT * FROM articles where id = $id";
	  // $result = mysqli_query($conn, $sql);
	  $result = $conn->query($sql);
	}
	else 
	{
	  $sql = "SELECT * FROM  articles";
	  $result = mysqli_query($conn, $sql);
	}
?>