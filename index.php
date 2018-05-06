<?php 
@session_start();
include 'app/header.php';
include 'config/configuration.php';
include 'app/log_access.php';
include 'app/function_readmore.php';
?>   


<!--====================================================
                         HOME
======================================================-->
    <section id="home">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active slides">
              <div class="overlay"></div>
              <div class="slide-1"></div>
                <div class="hero ">
                  <hgroup class="wow fadeInUp">
                      <h1>JASA <span ><a href="" class="typewrite" data-period="2000" data-type='[ " STRAUSS PILE", " BORE PILE"]'>
                        <span class="wrap"></span></a></span> </h1>        
                      <h3>Kontruksi tiang pancang untuk Rumah, Gedung, Tower, Apartemen dan lain-lain.</h3>
                  </hgroup>
                  <a href="contact" class="btn btn-general btn-green wow fadeInUp">Hubungi Kami</a>
                </div>           
            </div> 
        </div> 
      </div> 
    </section> 

<!--====================================================
                        ABOUT
======================================================-->
    <section id="about" class="about">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp">Tentang Kami</h1>
            <div class="heading-border"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Berkah Santoso adalah Jasa Pondasi Perorangan yang bergerak dibidang jasa konstruksi dan sipil khususnya pekerjaan pondasi tiang pancang untuk rumah, gedung-gedung, tower, apartemen dan lain-lain dengan metoda Straus Pile dan Bore Pile. Dengan dukungan oleh Tenaga Ahli yang berpengalaman dan peralatan workshop modern yang lengkap.</p>
            <!--div class="title-but"><a href="about" class="btn btn-general btn-green">Read More</a></div-->
          </div>
        </div>
      </div>  
      <!-- About right side withBG parallax -->
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-md-3 bg-starship">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.3s">
              <i class="fa fa-snowflake-o"></i>
              <h5>Profesional</h5>
              <p class="desc">Memberikan kualitas pengerjaan proyek yang terbaik dan hasil yang maksimal. Serta dukungan dari tim ahli yang berpengalaman.</p>
            </div>
          </div> 
          <div class="col-md-3 bg-chathams">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">
              <i class="fa fa-circle-o-notch"></i>
              <h5>Service Maksimal</h5>
              <p class="desc">Memberikan pelayanan dan pengerjaan yang terbaik dan cepat untuk kepuasaan pelanggan dengan peralatan yang modern.</p>
            </div>
          </div> 
          <div class="col-md-3 bg-matisse">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
              <i class="fa fa-handshake-o"></i>
              <h5>Mitra Terbaik</h5> 
              <p class="desc">Selalu menjadi mitra terbaik dan terpercaya dengan mengutamakan pelayanan dan kepuasan pelanggan dimanapun dan kapanpun.</p>
            </div>
          </div> 
          <div class="col-md-3 bg-green-yellow">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
              <i class="fa fa-money"></i>
              <h5>Harga Bersahabat</h5> 
              <p class="desc">Konsultasikan dengan kami untuk mendapatkan penawaran dan harga yang bersahabat.</p>
            </div>
          </div> 
        </div> 
      </div>       
    </section> 

<!--====================================================
                        OFFER
======================================================-->
    <section id="comp-offer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
            <h2>Layanan Kami</h2>
            <div class="heading-border-light"></div> 
            <a href="contact"><button class="btn btn-general btn-white" role="button">Hubungi Kami</button></a>
          </div>
          <?php 
          $sql = "SELECT * FROM  services where publish = 'ya' limit 2";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-md-4 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="admin/<?php echo $row['url_gambar'];?>" class="img-thumbnail" alt="...">
              </div>
              <h3><?php echo $row['judul']; ?></h3>
              <p style="text-align: justify; text-indent: 0.3in;" class="desc"><?php echo $row['deskripsi'];?> </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Lanjut...</a>
            </div>
          </div> 
          <?php } ?>
        </div>
      </div>
    </section>

<!--====================================================
                     WHAT WE DO
======================================================-->
    <section class="what-we-do bg-gradiant">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <h3>Mengapa memilih kami</h3>
            <div class="heading-border-light"></div> 
            <p class="desc">Kami bermitra dengan klien untuk menerapkan rekomendasi terbaik dalam praktik pengerjaan proyek. </p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-briefcase"></i>
                  <h6>Gedung Kantor</h6>
                  <p class="desc">Pembuatan pondasi tiang pancang perkantoran kecil sampai dengan perkantoran besar.  </p>
                </div>
              </div>
              <!--div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-shopping-bag"></i>
                  <h6>Warehouse</h6>
                  <p class="desc">Pembuatan pondasi tiang pancang untuk warehouse atau gudang. </p>
                </div>
              </div-->
              <div class="col-md-6  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-building-o"></i>
                  <h6>Apartemen</h6>
                  <p class="desc">Pembuatan kontruksi pondasi tiang pancang untuk pembangunan gedung dan apartemen. </p>
                </div>
              </div>
              <!--div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-bed"></i>
                  <h6>Hotel</h6>
                  <p class="desc">Pembuatan kontruksi pondasi tiang pancang untuk Hotel dan Cottage. </p>
                </div>
              </div-->
              <div class="col-md-6  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-hourglass-2"></i>
                  <h6>Konsep</h6>
                  <p class="desc">Konsultasi konsep pembangunan sebelum pengerjaan tiang pancang. </p>
                </div>
              </div>
              <div class="col-md-6  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-home"></i>
                  <h6>Perumahan</h6>
                  <p class="desc">Pembuatan pondasi tiang pancang untuk perumahan sederhana maupun perumahan elit. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3>Wilayah Jangkauan Kami</h3>
            <div class="heading-border-light"></div> 
            <p class="desc">Free biaya akomodasi untuk wilayah : <font style="font-weight: bold">Tangerang, Jakarta, Bekasi</font>. 
            <br/><br/>Untuk daerah lainnya akan dikenakan biaya transportasi sesuai dengan jarak dan kesepakatan bersama. Kami siap melayani diseluruh wilayah Indonesia.</p>
          </div>
        </div>
      </div>      
    </section> 

<!--====================================================
                      STORY
======================================================--> 
    <section id="story">
        <div class="container">
          <br>
          <div class="row">
            <div class="col-md-12">
              <center><h1 class="wow fadeInUp">Portofolio</h1></center>
              <div class="heading-border"></div> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"> 
              <div class="story-descb">
                  <img src="img/tamansari.jpg" class="img-fluid" alt="...">
                  <h6>The Hill Tamansari Recidence</h6>
                  <p>Jasa kontruksi tiang pancang dengan Bored Pile untuk perumahan The Hill Tamansari Residence di daerah Tembalang, Mangunharjo, Kota Semarang.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"> 
              <div class="story-descb">
                  <img src="img/chalcedony.jpg" class="img-fluid" alt="...">
                  <h6>Chalcedony Residence</h6>
                  <p>Jasa kontruksi tiang pancang dengan Bored Pile untuk perumahan Summarecon Serpong Cluster Chalcedony Residence, Tangerang - Banten.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"> 
              <div class="story-descb">
                  <img src="img/jababeka.jpg" class="img-fluid" alt="...">
                  <h6>Jababeka Residence</h6>
                  <p>Jasa kontruksi tiang pancang menggunakan Strauss Pile untuk perumahan Jababeka Residence, Cikarang - Bekasi, Jawa Barat.</p>
              </div>
            </div> 
            <div class="title-but">
              <a href="about"><button class="btn btn-general btn-green" role="button"> Selengkapnya</button></a>
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
              <a href="article-details/<?php echo $row['id']?>/<?php echo $row['judul']?>"><i class="fa fa-arrow-circle-o-right"></i> Lanjut baca</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

<?php 
include 'app/footer.php';
?>
