<?php
session_start();
if (!empty($_SESSION['login_username']))
{
$user = $_SESSION['login_username'];
$status = $_SESSION['login_status'];

include 'admin_header.php';
?>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

    <?php include 'sidebar_menu.php'; ?>

        <div class="content-inner">

            <!--***** REPORT-1 *****-->     
            <div class="row" id="report1">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> $9,220</h2>
                                <span class="text-muted">Todays Income</span>
                            </div>
                            <span class="text-success">80%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Last month 10% Growth</small></p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-danger"></i> $5,530</h2>
                                <span class="text-muted">Gross Profit</span>
                            </div>
                            <span class="text-danger">43%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 43%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Last month 10% Growth</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block"> 
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-warning"></i> $3,620</h2>
                                <span class="text-muted">Interest Expenses </span>
                            </div>
                            <span class="text-warning">53%</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 53%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Last month 10% Growth</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block"> 
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> $82,600</h2>
                                <span class="text-muted">Net Profit</span>
                            </div>
                            <span class="text-info">70%</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p><small>Last month 10% Growth</small></p>
                        </div>
                    </div>
                </div>                
            </div>
 
            <!--***** REPORT-2 *****-->     
            <div class="row" id="report2">
                <div class="col-md-4">
                    <div class="card card-c1">
                        <div class="card-header card-chart" data-background-color="green">
                            <canvas class="ct-chart" id="myChart1" height="250"></canvas>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Daily Sales</h4>
                            <p class="category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-c1">
                        <div class="card-header card-chart" data-background-color="orange">
                            <canvas class="ct-chart" id="myChart2" height="250"></canvas>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Email Subscriptions</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-c1">
                        <div class="card-header card-chart" data-background-color="red">
                            <canvas class="ct-chart" id="myChart3" height="250"></canvas>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Completed Tasks</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> campaign sent 2 days ago
                            </div>
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