<?php 
include 'header.php';
include '../config/configuration.php';
include 'log_access.php';
include 'function_readmore.php';
?>
 <!-- Core Stylesheets -->
<link rel="stylesheet" href="css/services.css"> 
<!--====================================================
                       HOME-P
======================================================-->
    <div id="home" class="home-p pages-head2 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Jasa Strauss Pile dan Bore Pile</h1>
        <p>Konstruksi Tiang Pancang</p>
      </div><!--/end container-->
    </div> 

<!--====================================================
                      BUSINESS-GROWTH-P1
======================================================-->
    <section id="business-growth-p2" class="business-growth-p2 bg-gray">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp">Profesional dan Terpercaya</h1>
            <div class="heading-border"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Kami perusahaan yang Profesional dan Spesialis dibidang konstruksi tiang pancang dengan metoda Strauss Pile dan Bore Pile.</p>
          </div>
        </div>
      </div>  
    </section>     

<!--====================================================
                    FINANCIAL-P1
======================================================-->    
<?php 
$sql = "SELECT *from services where publish = 'ya'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
?> 

      <!--section id="financial-p1" class="bg-parallax financial-p3-bg">
        <div class="overlay-financial-p1"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 financial-p1-pos">
              <div class="financial-p1-cont">    
                <a href="#"> <b>Richtech Technology</b></a>  
                <h3><?php //echo $row['judul']; ?> </h3>
                <p><?php// echo $row['deskripsi'];?></p>     
                <button class="btn btn-general btn-white" role="button">Contact Us</button>
              </div>
            </div>
            <div class="col-md-6 financial-p1-emp-img"></div>
          </div>
        </div>
      </section> 

      <section id="financial-p1" class="bg-parallax financial-p3-bg">
        <div class="overlay-financial-p1"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 financial-p1-pos">
              <div class="financial-p1-cont">    
                <a href="#"> <b>Richtech Technology</b></a>  
                <h3>Excellent Strategies For </h3>
                <p>Businessbox will deliver value to all the stakeholders and will attain excellence and leadership through such delivery of value. We will strive to support the stakeholders in all activities related to us. Businessbox provide great things.Everyone defines success differently – as much as there are people, there are different opinions. Number one in our priority list is the success of our students, alumni and their employers.</p>     
                <button class="btn btn-general btn-white" role="button">Contact Us</button>
              </div>
            </div>
            <div class="col-md-6 financial-p1-emp-img"></div>
          </div>
        </div>
      </section> 
      <section id="financial-p1" class="bg-parallax financial-p2-bg">
        <div class="overlay-financial-p1"></div>
        <div class="container-fluid">
          <div class="row"> 
            <div class="col-md-6 financial-p1-emp-img"></div>
            <div class="col-md-6 financial-p1-pos financial-p1-emp-desc-d">
              <div class="financial-p1-cont">    
                <a href="#"> <b>Richtech Technology</b></a>  
                <h3>Transfer Financial Services</h3>
                <p>Businessbox will deliver value to all the stakeholders and will attain excellence and leadership through such delivery of value. We will strive to support the stakeholders in all activities related to us. Businessbox provide great things.Everyone defines success differently – as much as there are people, there are different opinions. Number one in our priority list is the success of our students, alumni and their employers.</p>     
                <button class="btn btn-general btn-white" role="button">Contact Us</button>
              </div>
            </div>
          </div>
        </div>
      </section>  

   
    <section class="what-we-do bg-gradiant financial-p5">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp cl-white">Global Business Services</h1>
            <div class="heading-border bg-white"></div> 
          </div>
        </div>
        <div class="row"> 
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc wow fadeInUp" data-wow-delay="0.1s">
                  <i class="fa fa-bar-chart"></i>
                  <h6>Professional Growth</h6>
                  <p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc wow fadeInUp" data-wow-delay="0.1s">
                  <i class="fa fa-bullseye"></i>
                  <h6>Research &amp; Development </h6>
                  <p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc wow fadeInUp" data-wow-delay="0.1s">
                  <i class="fa fa-star-o"></i>
                  <h6>Valuable Services</h6>
                  <p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>      
    </section--> 

<!--====================================================
                      FINANCIAL-P6
======================================================-->
    <section id="financial-p6" class="financial-p6"> 
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="financial-p6-img">
                  <img src="admin/<?php echo $row['url_gambar']; ?>" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="...">
                <img src="" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="financial-p6-cont">
                <h2 class="wow fadeInUp"><?php echo $row['judul'];?> </h2>
                <div class="heading-border-light"></div>
                <p> <?php echo $row['deskripsi'];?> </p>
                <button class="btn btn-general btn-white" role="button">Hubungi Kami</button>
              </div>
            </div>
          </div>
        </div>
    </section>   

<?php } ?> 

<!--====================================================
                    CONTACT HOME
======================================================-->
    <div class="overlay-contact-h"></div>
    <section id="contact-h" class="bg-parallax contact-h-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-h-cont">
              <h3 class="cl-white">Hubungi Kami</h3><br>
               <form id="login-form" action="add-contact" method="post">
                <div class="form-group cl-white">
                  <label for="name">Nama Anda</label>
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" aria-describedby="nameHelp" placeholder="Enter name" maxlength="50" required> 
                </div>  
                <div class="form-group cl-white">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" maxlength="50" required> 
                </div>  
                <div class="form-group cl-white">
                  <label for="exampleInputEmail1">Telepon </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="telepon" aria-describedby="emailHelp" placeholder="Enter Phone Number" maxlength="12" required>  
                </div>  
                <div class="form-group cl-white">
                  <label for="subject">Subjek</label>
                  <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectHelp" placeholder="Enter subject" maxlength="100" required> 
                </div>  
                <div class="form-group cl-white">
                  <label for="message">Pesan</label>
                  <textarea class="form-control" id="message" name="isi_email" rows="3" maxlength="2000" required></textarea>
                </div>  
                <button class="btn btn-general btn-white" role="button"><i fa fa-right-arrow></i>Kirim Pesan</button>
              </form>
            </div>
          </div>
        </div>
      </div>         
    </section> 

<!--====================================================
                       NEWS
======================================================-->
    <section id="comp-offer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6  desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
            <h2>Artikel Terbaru</h2>
            <div class="heading-border-light"></div> 
            <a href="articles"><button class="btn btn-general btn-green" role="button">Selengkapnya</button></a>
          </div>
          <?php 
          $sql = "SELECT * from articles where publish = 'ya'";
          $hasil = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($hasil)) {
          ?>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="admin/<?php echo $row['url_image'];?>" class="img-fluid" alt="...">
              </div>
              <h3><?php echo $row['judul']; ?></h3>
              <p class="desc"><?php echo readmore($row['deskripsi']);?></p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

<!--====================================================
                      FOOTER
======================================================--> 
<?php
include 'footer.php';
?>
