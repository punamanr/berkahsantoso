<?php
include 'header.php';
include '../config/configuration.php';
include 'log_access.php';
include 'function_readmore.php';

$id = $_GET['id'];
$judul = $_GET['judul'];
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
                      NEWS DETAILS
======================================================--> 
    <section id="single-news-p1" class="single-news-p1">
      <div class="container">
        <div class="row">

        	<?php 
        	$sql = "SELECT * from articles where id = $id";
        	$result = $conn->query($sql);

        	while ($row=mysqli_fetch_object($result)) {
        		
        	?>
          <!-- left news details -->
          <div class="col-md-8">
            <div class="single-news-p1-cont">
              <div class="single-news-img">
                <img src="admin/<?php echo $row->url_image;?>" alt="" class="img-fluid img-thumbnail">
              </div>
              <div class="single-news-desc">
                <h3><?php echo $row->judul;?></h3>
                <ul class="list-inline">
                  <li>Posted: <span class="text-theme-colored2"> <?php $date = date_create($row->created_at);
                  echo date_format($date, 'd/m/Y');?></span></li>
                  <li>By: <span class="text-theme-colored2">Admin</span></li>
                </ul>
                <hr>
                <div class="bg-light-gray">
                  <p><?php echo $row->deskripsi;?></p>  
                </div>
              </div>
            </div>  
            <hr>
          </div>
          <?php } ?>

          <!-- Right news details -->
          <div class="col-md-4">
            <div class="ad-box-sn"> 
              <h3 class="pb-2">Artikel Lainnya</h3>
              <?php 
              	$sql = "SELECT *from articles where id <> $id limit 5";
            		$result = $conn->query($sql);

            		while ($obj = mysqli_fetch_object($result)) {
            	?>
              <div class="card">
                <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <div class="caption">
                      <i class="fa fa-chain"></i>
                    </div>
                    <img src="admin/<?php echo $obj->url_image;?>" class="img-fluid" alt="...">
                </div>
                <h3><?php echo $obj->judul;?></h3>
                <p class="desc"><?php echo readmore($obj->deskripsi); ?></p>
                <a href="article-details/<?php echo $obj->id?>/<?php echo $obj->judul?>"><i class="fa fa-arrow-circle-o-right"></i> Lanjut baca</a>
                </div>
              </div>
              <?php } ?>
            </div>
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