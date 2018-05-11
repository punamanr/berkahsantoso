<?php 
@session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';
  include 'model/medsos/model_medsos.php';

?>
  <!-- Core stylesheets -->
  <link rel="stylesheet" href="css/form.css">
 
<!--====================================================
                        PAGE CONTENT
======================================================-->
  <div class="page-content d-flex align-items-stretch">

    <?php include 'sidebar_menu.php'; ?>

      <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
            <div class="row">
              <div class="col-md-12">
                <!--***** ADMIN USER *****-->
                <div class="card form" id="form1">
                  <div class="card-header">
                    <h3>Alamat Perusahaan</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <!--a href="admin_form.php" class="btn float-right btn-sm">Tambah Admin</a-->
                      <form  action="model/medsos/edit-address" method="POST">
                        <div class="row">
                            <?php 
                            $sql = "SELECT * from address";
                            $result2 = mysqli_query($conn,$sql);

                            while ( $row = mysqli_fetch_assoc ($result2)) {
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['email'];?>" placeholder="Alamat email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" id="exampleInputPassword1" placeholder="Nomor Telepon" value="<?php echo $row['telepon'];?>">
                                </div>  
                                <div class="form-group">
                                    <label for="exampleTextarea">Alamat Kantor</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="alamat_kantor"><?php echo $row['alamat']; ?></textarea>
                                </div>
                            </div>
                            <?php } ?>
                        </div> 
                        <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                        <button type="reset" class="btn btn-general btn-white">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> 

            <div class="row">
              <div class="col-md-12">
                <!--***** ADMIN USER *****-->
                <div class="card form" id="form1">
                  <div class="card-header">
                    <h3>Media Sosial</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <!--a href="admin_form.php" class="btn float-right btn-sm">Tambah Admin</a-->
                      <form  action="model/medsos/edit-medsos" method="POST">
                      <table class="table table-hover responsive">
                        <thead>
                          <tr class="bg-info text-white">
                            <th>#</th>
                            <th>Media Sosial</th>
                            <th>Link</th>
                            <th style="text-align: center;" ">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;   
                            $no_id = 0;
                            $no_link = 0;
                            while($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <th scope="row"><?php echo $no++;?></th>
                            <td><?php echo strtoupper($row['nama_medsos']);?></td>
                            <td><input type="text" name="link<?php echo $no_link++;?>" class="form-control" value="<?php echo $row['link'];?>">
                                <input type="hidden" name="nama_medsos[]" value="<?php echo $row['nama_medsos'];?>">
                                <input type="hidden" name="id<?php echo $no_id++; ?>" value="<?php echo $row['id'];?>">
                            </td>
                            <td>                     
                              <center>
                                <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                               </center>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </form>
                    </div>
                  </div>
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