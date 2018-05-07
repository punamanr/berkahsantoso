<?php 
include 'header.php';
?>
<!-- Core Stylesheets -->
<link rel="stylesheet" href="css/about.css"> 
<!--====================================================
                       HOME-P
======================================================-->
    <div id="home" class="home-p pages-head5 text-center">
        <div class="container">

        </div>
        <!--/end container-->
    </div>

<!--====================================================
                        ABOUT-P1
======================================================-->
    <section id="about-p1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-p1-cont">
                        <h1>Berkah Santoso  </h1>
                        <p>Kami adalah Jasa Pondasi Perorangan yang bergerak dibidang jasa konstruksi dan sipil khususnya pekerjaan pondasi tiang pancang untuk rumah, gedung-gedung, tower, apartemen dan lain-lain dengan metoda Straus Pile dan Bore Pile. Dengan dukungan oleh Tenaga Ahli yang berpengalaman dan peralatan workshop modern yang lengkap.</p>
                        <p>Kami mempunyai Visi dan Misi yang jelas. Serta komitmen untuk berkembang dan maju bersama dengan mengutamakan kualitas dan kepuasan pelanggan. Tujuan kami memberikan layanan yang terbaik kepada pelanggan dimanapun dan kapanpun. Serta menjadi mitra yang terbaik. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-p1-img">
                        <img src="img/pile_m.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="...">
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
                <div class="col-md-12 col-sm-6  desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Portofolio</h2>
                    <div class="heading-border-light"></div>
                    <!--button class="btn btn-general btn-green" role="button">See More</button-->
                </div>
                <div class="row">
                <?php
                include '../config/configuration.php';
                $sql = "SELECT *from portofolios";
                $result = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"> 
                  <div class="story-descb">
                      <img src="admin/<?php echo $row['url_image'];?>" class="img-fluid" alt="...">
                      <h6><?php echo $row['tempat'];?></h6>
                      <p><?php echo $row['deskripsi'];?></p>
                      <p class="text-right" style="font-style: italic; font-weight: 700;"><a href="#"><?php echo $row['jasa_layanan']?></a></p>
                  </div>
                </div>
                <?php } ?>       
                </div>
            </div>
        </div>
    </section>

<!--====================================================
                      FOOTER
======================================================-->
<?php 
include 'footer.php';
?>