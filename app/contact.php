<?php
include 'header.php';
?>      
<!-- Core Stylesheets -->
<link rel="stylesheet" href="css/contact.css"> 
<!--====================================================
                       HOME-P
======================================================-->
    <div id="home" class="home-p pages-head4 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Kontak</h1>
      </div><!--/end container-->
    </div> 

<!--====================================================
                        CONTACT-P1  
======================================================--> 
    <section id="contact-p1" class="contact-p1">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="contact-p1-cont">
              <h3>Jangan Sungkan Untuk Hubungi Kami </h3>
              <div class="heading-border-light"></div> 
              <p>Silahkan hubungi kami untuk diskusi masalah harga ataupun konsultasi pengerjaan kontruksi pondasi tiang pancang. Tim Ahli kami akan siap membantu Anda.</p>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="contact-p1-cont2"> 
              <address class="address-details-f">
                Jl. Bona Timur III No 4 <br>
                Cikokol, Tangerang <br>
                Phone: 0857 4024 6283 <br>
                Email: <a href="mailto:info@berkahsantoso.com" class="">info@berkahsantoso.com</a>
              </address>
              <ul class="list-inline social-icon-f top-data">
                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="height: 35px; width:35px; line-height: 35px;"></i></a></li> 
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </section>

<!--====================================================
                        CONTACT-P2 
======================================================--> 
    <service class="contact-p2" id="contact-p2">
      <div class="container">
        <form id="login-form" action="add-contact" method="post">
          <div class="row con-form">
            <div class="col-md-4">
              <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required max="50">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" placeholder="Email : example@gmail.com" class="form-control" required>
            </div>
            <div class="col-md-4">
              <input type="text" name="telepon" placeholder="Telepon / Handphone" class="form-control" required maxlength="12">
            </div>
            &nbsp;
            <div class="col-md-12">
              <input type="text" name="subject" placeholder="Subject" class="form-control" required maxlength="100">
            </div>
            <div class="col-md-12"><textarea name="isi_email" id="" required></textarea></div>
            <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" type="submit">Send</button></div>
          </div>
        </form>
      </div>
    </service>
<br>


<?php
include 'footer.php';
?>   
