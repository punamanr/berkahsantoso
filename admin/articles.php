<?php 
@session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';
  include 'model/articles/model_articles.php';
  include 'function_readmore.php';
?>
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
                    <h3>Artikel</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <a href="articles-form" class="btn float-right btn-sm">Tambah</a>
                      <table class="table table-hover responsive">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Publikasi</th>
                            <th>Sumber Artikel</th>
                            <th>Tgl Buat</th>
                            <th>Tgl Update</th>
                            <th style="text-align: center;" ">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;   
                            while($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <th scope="row"><?php echo $no++;?></th>
                            <td><?php echo $row['judul'];?></td>
                            <td><?php echo readmore2($row['deskripsi']);?></td>
                            <td><?php echo strtoupper($row['publish']);?></td>
                            <td><?php echo strtoupper($row['sumber_artikel']);?></td>
                            <td><?php echo strtoupper($row['created_at']);?></td>
                            <td><?php echo strtoupper($row['updated_at']);?></td>
                            <td>                     
                              <center>
                                <a href="model/articles/delete-artikel/<?php echo $row['id']?>/<?php echo $row['judul']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus artikel ini?')">Hapus</a>
                               </center>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
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