<?php
session_start();
if (!empty($_SESSION['login_username']))
{
$user = $_SESSION['login_username'];
$status = $_SESSION['login_status'];

include 'admin_header.php';

$sql = "SELECT ip,browser,os,tgl_akses from
        (SELECT ip_address ip, browser, os, date_format(created_at,'%d/%m/%Y')tgl_akses 
        from statistic)log_akses";
$log = mysqli_query($conn,$sql);
$total_akses = mysqli_num_rows($log);

$sql = "SELECT count(created_at)bulan_ini from statistic 
        where date_format(created_at,'%m') = DATE_FORMAT(SYSDATE(), '%m')";
$result = mysqli_query($conn,$sql);
$akses=mysqli_fetch_assoc($result);

$sql = "SELECT total_kontak,kontak_mtd from
        (SELECT count(id)total_kontak from contacts)total,
        (select count(id)kontak_mtd from contacts 
        where  date_format(created_at,'%m') = DATE_FORMAT(SYSDATE(), '%m') )mtd";
$result2=mysqli_query($conn,$sql);
$kontak=mysqli_fetch_assoc($result2);
?>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

    <?php include 'sidebar_menu.php'; ?>

        <div class="content-inner">
          <H3>Selamat Datang di Halaman Admin</H3>
            <!--***** REPORT-1 *****-->     
            <div class="row" id="report1">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> <?php echo $total_akses?></h2>
                                <span class="text-muted">Total Hit Access</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Total jumlah hit akses</small></p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-danger"></i> <?php echo $akses['bulan_ini'];?></h2>
                                <span class="text-muted">Akses Bulan Ini</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Jumlah hit Month To Date</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block"> 
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-warning"></i> <?php echo $kontak['total_kontak'];?></h2>
                                <span class="text-muted">Total Kontak </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Total yang menghubungi kontak</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block"> 
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> <?php echo $kontak['kontak_mtd'];?></h2>
                                <span class="text-muted">Kontak Bulan Ini</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Yang menghubungi Month To Date</small></p>
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