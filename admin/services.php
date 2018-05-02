<?php 
session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';
  include 'model/services/model_services.php';
?>
  <!-- Core stylesheets -->
  <link rel="stylesheet" href="css/pages/search.css"> 
  <style type="text/css">
    .label-new {
        color: white;
        padding: 5px;
        font-family: Times New Roman;
        font-size: 50%;
        border-radius: 20px;
    }
    .success {background-color: #7CFC00;} /* Green */
    .info {background-color: #2196F3;} /* Blue */
    .warning {background-color: #ff9800;} /* Orange */
    .danger {background-color: #f44336;} /* Red */ 
    .other {background-color: #e7e7e7; color: black;} /* Gray */ 
  </style>
<!--====================================================
                        PAGE CONTENT
======================================================-->
  <div class="page-content d-flex align-items-stretch">

    <?php include 'sidebar_menu.php'; ?>

      <div class="content-inner chart-cont">

            <!--***** CONTENT *****--> 
            <div class="card p-4">    
                <div class="row">   
                        <div class="card-header">
                            <h3><i class="fa fa-archive"></i> Layanan Jasa</h3>
                        </div>
                        
                        <!--h1>Layanan Jasa <right><a href="services-form"><font size="2">Tambah</font></a></right></h1-->                            
                    <section class="col-xs-12 col-sm-6 col-md-12">
                        <h6><span class="pull-right"><a href="services-form" class="btn btn-sm btn-info" ><font size="2"><i class="fa fa-plus"></i> Tambah</font></a></span></h6>
                        <br>
                        <?php while($row = mysqli_fetch_assoc($result)){ 
                          if($row['publish'] == 'ya') 
                          {
                            $status = 'Published';
                            $label = 'success';
                          }
                          else 
                          {
                            $status = 'Unpublish';
                            $label = 'warning';
                          }
                        ?>
                        <article class="search-result row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="<?php echo $row['url_gambar'];?>" class="img-fluid" alt="Lorem ipsum" /></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <ul class="meta-search">
                                    <li><i class="fa fa-calendar"></i> <span><?php $date = date_create($row['created_at']);
                                        echo date_format($date, 'd-m-Y');?></span></li>
                                    <li><i class="fa fa-clock-o"></i> <span><?php echo date_format($date, 'H:i');?></span></li>
                                    <li><a href="services-form/<?php echo $row['id']?>/edit"><i class="fa fa-edit"></i> <span>Edit</span></a></li>
                                    <li><a href="model/services/delete-services/<?php echo $row['id']?>/<?php echo $row['judul']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus layanan ini?')"><i class="fa fa-trash"></i> <span>Hapus</span></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h3><a href="#" title=""><?php echo $row['judul'];?></a> <span class="label-new <?php echo $label ?>"><?php echo $status ?></span></h3>
                                <p><?php echo $row['deskripsi'];?></p> 
                            </div>
                            <span class="clearfix borda"></span>
                        </article>
                        <?php } ?>   
                    </section>
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