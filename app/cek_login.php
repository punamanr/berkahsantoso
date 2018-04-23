<?php 
session_start();
include 'configuration.php';

$username=$_POST['login_username'];
$password=$_POST['login_password'];

$sql = "SELECT * FROM  user where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['login_username'] = $row["username"];
      $_SESSION['login_status'] = $row["status"];
    }
    header("location: admin/home"); //redirect ke halaman admin
} else {
     // echo "Gagal login! Silahkan cek kembali username dan password Anda.";
  header("location: admin/access_denied.html");
  ?>

    <script> alert('Gagal login! Silahkan cek kembali username dan password Anda.')
    document.location="http://<?php echo $_SERVER['HTTP_HOST']?>/berkahsantoso/"
    </script>
    
<?php }

?>