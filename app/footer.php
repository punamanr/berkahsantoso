
<!--====================================================
                      FOOTER
======================================================--> 
    <footer> 
        <div id="footer-s1" class="footer-s1">
          <div class="footer">
            <div class="container">
              <div class="row">
                <!-- About Us -->
                <div class="col-md-3 col-sm-6 ">
                  <div><img src="img/bs-w.png" alt="" class="img-fluid"></div>
                  <ul class="list-unstyled comp-desc-f">
                     <li><p>Berkah Santoso adalah Jasa Pondasi Perorangan yang bergerak dibidang jasa konstruksi dan sipil khususnya pekerjaan pondasi tiang pancang untuk rumah, gedung-gedung, tower, dan lain-lain dengan metoda Straus Pile dan Bore Pile. </p></li> 
                  </ul><br> 
                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Useful Links</h2></div>
                  <ul class="list-unstyled link-list">
                    <li><a href="about">Tentang Kami</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="contact">Kontak</a><i class="fa fa-angle-right"></i></li> 
                  </ul>
                </div>
                <!-- End Recent list -->

                <!-- Recent Blog Entries -->
                <div class="col-md-3 col-sm-6 ">
                  <!--div class="heading-footer"><h2>Recent Post Entries</h2></div>
                  <ul class="list-unstyled thumb-list">
                    <li>
                      <div class="overflow-h">
                        <a href="#">Praesent ut consectetur diam.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                    <li>
                      <div class="overflow-h">
                        <a href="#">Maecenas pharetra tellus et fringilla.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                  </ul-->
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-3 col-sm-6">
                  <?php 
                  $sql = "SELECT * from address";
                  $result = mysqli_query($conn,$sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <div class="heading-footer"><h2>Alamat Kantor</h2></div>
                  <address class="address-details-f">
                    <?php echo $row['alamat'];?><br>
                    Phone: <?php echo $row['telepon'];?> <br>
                    Email: <a href="mailto:<?php echo $row['email'];?>" class=""><?php echo $row['email'];?></a>
                  </address>  
                  <?php } ?> 
                  <?php 
                  $sql = "SELECT link FROM mediasosial where nama_medsos = 'Facebook'";
                  $result2=mysqli_query($conn,$sql);
                  $facebook=mysqli_fetch_assoc($result2);
                  $sql = "SELECT link FROM mediasosial where nama_medsos = 'Google Plus'";
                  $result2=mysqli_query($conn,$sql);
                  $google=mysqli_fetch_assoc($result2);
                  $sql = "SELECT link FROM mediasosial where nama_medsos = 'Twitter'";
                  $result2=mysqli_query($conn,$sql);
                  $twitter=mysqli_fetch_assoc($result2);
                  ?>
                  <ul class="list-inline social-icon-f top-data">

                    <li><a href="<?php echo $facebook['link'];?>" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                    <li><a href="<?php echo $twitter['link'];?>" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                    <li><a href="<?php echo $google['link'];?>" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 

                  </ul>

                </div>
                <!-- End Latest Tweets -->
              </div>
            </div><!--/container -->
          </div> 
        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2018 All Rights Reserved by Berkah Santoso.</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="js/custom.js"></script> 
  </body>

</html>