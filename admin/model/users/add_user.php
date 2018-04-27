<?php 
//proses add user admin
include '../../../config/configuration.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$status = $_POST['status'];

if($password == $confirm_password){
  $sql = "INSERT into user (username, password, status, date_create, date_update)
          values ('$username','$password','$status',now(),now())";

  if ($conn->query($sql) === TRUE) { ?>
      <script> alert('Sukses! Username <?php echo $username; ?> berhasil ditambahkan sebagai Admin.')
      document.location="http://<?php echo $_SERVER['HTTP_HOST']?>/berkahsantoso/admin/user"
      </script>
  <?php } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else { ?>
	    <script> alert('Gagal! Password dan Confirm Password tidak sama!')
      document.location="http://<?php echo $_SERVER['HTTP_HOST']?>/berkahsantoso/admin/user"
      </script>
<?php } ?>