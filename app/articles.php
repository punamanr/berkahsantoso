<?php 
include 'header.php';
include '../config/configuration.php';
include 'log_access.php';
include 'function_readmore.php';
?>       
  <!-- Core Stylesheets -->
  <link rel="stylesheet" href="css/news.css"> 
<!--====================================================
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head1 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Artikel Konstruksi Tiang Pancang</h1>
        <p>News</p>
      </div><!--/end container-->
    </div> 

<!--====================================================
                        news-p1
======================================================--> 
    <section id="news-p1" class="news-p1">
      <div class="container">
        <div class="row">
          <div class="card-columns">
            <?php
              $sql = "SELECT *FROM articles where publish = 'ya'";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
              <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="admin/<?php echo $row['url_image'];?>" class="img-fluid" alt="...">
              </div>
              <h3><?php echo $row['judul']?></h3>
              <p class="desc"><?php echo readmore($row['deskripsi']);?> </p>
              <a href="article-details/<?php echo $row['id']?>/<?php echo $row['judul']?>"><i class="fa fa-arrow-circle-o-right"></i> Lanjut baca</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
 
 
<?php 
include 'footer.php';
?>
