<?php 
session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';

  //get data edit layanan
  $id = $_GET['id'];
  $action = $_GET['action'];

  if($id != '') 
  {
    //echo 'include query';
    include 'model/portofolios/model_portofolios.php';
  }
?>
<!-- Core stylesheets -->
<link rel="stylesheet" href="css/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "img-thumbnail"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Hanya support file dengan extension png, jpg, jpg dan gif.");
          }
        });
      });
</script>
<!--====================================================
                    PAGE CONTENT
======================================================-->
<div class="page-content d-flex align-items-stretch">
  <!--***** SIDE NAVBAR *****-->
  <?php include 'sidebar_menu.php'; ?>

  <div class="content-inner form-cont">
    <div class="row">
      <div class="col-md-12">
      <!--***** BASIC FORM *****-->
        <div class="card form" id="form1">
            <div class="card-header">
                <h3>Portofolio Form</h3>
            </div>
            <br>
            <?php 
              if($action == 'edit'){
              /* fetch object array */
              while ($obj = $result->fetch_object()) {
            ?>
            <form method="post" action="model/portofolios/update-portofolios" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                      <br>
                        <div class="form-group">
                            <label for="judulLayanan">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="tempat" maxlength="100" value="<?php echo $obj->tempat ?>">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $obj->id ?>">

                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Deskripsi Layanan</label>
                            <textarea class="form-control" id="exampleTextarea" rows="5" name="deskripsi" maxlength="300"><?php echo $obj->deskripsi ?></textarea>
                            <small id="fileHelp" class="form-text text-muted">Maksimal 300 karakter.</small>
                        </div>
                        <fieldset class="form-group">
                            <label>Jasa Layanan</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="mb-2 mr-sm-1 mb-sm-0" name="jasa_layanan" id="optionsRadios1" value="Strauss Pile" <?php if($obj->jasa_layanan == 'Strauss Pile'){?> checked <?php } else { }?>> Strauss Pile &emsp;
                                    <input type="radio" class="mb-2 mr-sm-1 mb-sm-0" name="jasa_layanan" id="optionsRadios2" value="Bore Pile" <?php if($obj->jasa_layanan == 'Bore Pile'){?> checked <?php } else {}?>> Bore Pile
                                </label>
                            </div>
                        </fieldset>        
                    </div>
                    <div class="col-md-6">
                      <br>
                        <div class="form-group">
                            <label for="exampleInputFile">Gambar Profile Portofolio</label>
                            <input id="fileUpload"  class="form-control-file" multiple="multiple" name="file" type="file"/> 
                            <small id="fileHelp" class="form-text text-muted">Maksimal size 2 Mb. (Kosongkan jika tidak ingin mengganti gambar.)</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Preview Gambar</label><br>
                            <div id="image-holder"><img src="<?php echo $obj->url_image;?>" class="img-thumbnail"></div>
                        </div>
                     </div>
                </div> 
                <?php } }
                else { ?>
                <form method="post" action="model/portofolios/add-portofolios" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                      <br>
                        <div class="form-group">
                            <label for="judulLayanan">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="tempat" maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Deskripsi Layanan</label>
                            <textarea class="form-control" id="exampleTextarea" rows="5" name="deskripsi" maxlength="300"></textarea>
                            <small id="fileHelp" class="form-text text-muted">Maksimal 300 karakter.</small>
                        </div>
                        <fieldset class="form-group">
                            <label>Jasa Layanan</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="mb-2 mr-sm-1 mb-sm-0" name="jasa_layanan" id="optionsRadios1" value="Strauss Pile" checked> Strauss Pile &emsp;
                                    <input type="radio" class="mb-2 mr-sm-1 mb-sm-0" name="jasa_layanan" id="optionsRadios2" value="Bore Pile"> Bore Pile
                                </label>
                            </div>
                        </fieldset>        
                    </div>
                    <div class="col-md-6">
                      <br>
                        <div class="form-group">
                            <label for="exampleInputFile">Gambar Profile Portofolio</label>
                            <input id="fileUpload"  class="form-control-file" multiple="multiple" name="file" type="file"/> 
                            <small id="fileHelp" class="form-text text-muted">Maksimal size 2 Mb.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Preview Gambar</label><br>
                            <div id="image-holder"></div>
                        </div>
                     </div>
                </div> 
                <?php } ?>
                <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                <button type="reset" class="btn btn-general btn-white">Cancel</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include 'admin_footer.php';
} 
else { ?>
  <script> alert('Anda tidak mempunyai hak akses! Hubungi Administrator.')
  document.location="http://<?php echo $_SERVER['HTTP_HOST']?>/berkahsantoso/"
  </script>
<?php } ?>