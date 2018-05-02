<?php 
@session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';
?>
  <!-- Core stylesheets -->
  <link rel="stylesheet" href="css/pages/gallery.css">
  <!--====================================================
                          PAGE CONTENT
  ======================================================-->
  <div class="page-content d-flex align-items-stretch">

        <?php include 'sidebar_menu.php'; ?>
        <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
            <div class="row">
                <div class="col-md-4 col-sm-6 mt-1">
                    <div class="box-4">
                        <img src="img/gallery/g-2.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-1">
                    <div class="box-4">
                        <img src="img/gallery/g-1.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-1">
                    <div class="box-4">
                        <img src="img/gallery/g-3.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-4.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-5.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-6.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-7.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-1.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-4">
                    <div class="box-4">
                        <img src="img/gallery/g-2.jpg">
                        <div class="box-4-content">
                            <h3 class="title">Williamson</h3>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
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
