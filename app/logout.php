<?php  
//memulai session
session_start(); 

//cek adanya session, jika session ada maka akan di unset dan dilanjutkan dengan destroy session
if(ISSET($_SESSION['login_username'])) { 
UNSET($_SESSION['login_username']); 
} 
header("location:http://".$_SERVER['HTTP_HOST']."/berkahsantoso/"); 
session_destroy(); 
?>