<?php 
include '../../../config/configuration.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$desc = $_POST['deskripsi'];
$publish = $_POST['publish'];
$sumber = $_POST['sumber_artikel'];

$file = $_FILES['file'];
$filename = explode(".", $file["name"]); 
$file_name = $file['name']; // file original name
$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
$file_extension = $filename[count($filename)-1];
$fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;

if(!empty($file_name))
{
  $target_dir = "../../uploads/articles/";
  $target_file = $target_dir . $fileNewName;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["file"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["file"]["size"] > 200000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
          // echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
          // echo 'nama file setelah di enkripsi = '.$fileNewName;
          $location = "uploads/articles/".$fileNewName; 
          mysqli_query($conn,"UPDATE articles 
                      set judul = '$judul', deskripsi = '$desc', publish = '$publish',sumber_artikel = '$sumber',
                      url_image = '$location',updated_at = now()
                      where id = $id");
          $conn->close();

          echo "<script>alert('Edit artikel $judul berhasil!')
          location.replace('../../articles')</script>";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
} //jika file gambar kosong
else 
{
  // hanya update data saja tanpa mengubah gambar
  $sql = "UPDATE articles 
          SET judul='$judul', deskripsi = '$desc', publish = '$publish', sumber_artikel= '$sumber', updated_at = now()
          WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
      // echo "Record updated successfully";
      echo "<script>alert('Edit artikel $judul berhasil!')
      location.replace('../../articles')</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}

?>