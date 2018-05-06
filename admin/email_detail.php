<?php 
@session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';
  $id = $_GET['id'];
  $total = $_GET['total'];

  $sql2 = "SELECT *from contacts where id = $id";
  $result2 = mysqli_query($conn,$sql2);
  $row2 = mysqli_fetch_assoc($result2);

  if($row2['dibaca'] == 0) 
  {
   mysqli_query($conn,"UPDATE contacts
                set dibaca = 1
                where id = $id");
  }
?>
<!-- Core stylesheets -->
<link rel="stylesheet" href="css/apps/email.css">
<!--link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"-->
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

    <!--***** SIDE NAVBAR *****-->
    <?php include 'sidebar_menu.php'; ?>

        <div class="content-inner calendar-cont">

            <!--***** MAILBOX *****-->     
            <div class="row" id="emails-cont">
                <div class="mail-box">
                    <aside class="sm-side"> 
                        <div class="inbox-body">
                            <!--a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose"> Compose </a-->
                            <!-- Modal -->
                            <h2>Email</h2>
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title">Compose</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal">
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">To</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Cc/Bcc</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="cc" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Subject</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-lg-2 control-label">Message</label>
                                                    <div class="col-lg-10">
                                                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="offset-lg-2 col-lg-10">
                                                        <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                        </span>
                                                        <button class="btn btn-send ml-3" type="submit">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <ul class="inbox-nav inbox-divider">
                            <li class="active">
                                <a href="email"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right"><?php echo $total; ?></span></a>
                            </li>
                            <!--li>
                                <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                            </li>
                            <li>
                                <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                            </li-->
                            <li>
                                <a href="trash-email"><i class=" fa fa-trash-o"></i> Trash</a>
                            </li>
                        </ul>  
                    </aside>
                    <aside class="lg-side"> 
                        <div class="inbox-body">
                            <!--div class="mail-option"> 
                                <div class="btn-group hidden-phone">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                         <input type="checkbox" class="mail-checkbox mail-group-checkbox"> All 
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                    <ul class="dropdown-menu drop-inbox">
                                        <li><a href="#"><i class="fa fa-pencil"></i> All</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> None</a></li>
                                        <li><a href="#"><i class="fa fa-book"></i> Read</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Unread</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                                </div>
                                <div class="btn-group hidden-phone">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                     More
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                    <ul class="dropdown-menu drop-inbox">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                                     Move to
                                         <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu drop-inbox">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-50 of 234</span></li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                    </li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                    </li>
                                </ul>
                            </div-->
                            <br>
                            <!--***** FORM VALIDATION *****-->
                            <div class="card form" id="form3">
                                <div class="card-header">
                                    <h3>Detail Kontak</h3>
                                </div>
                                <br>
                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly id="inputHorizontalSuccess" value="<?php echo $row2['nama_lengkap'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" readonly id="inputHorizontalWarning" value="<?php echo $row2['email'];?>">
                                        </div>
                                    </div> 
                                    <div class="form-group row ">
                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" readonly id="inputHorizontalWarning" value="<?php echo $row2['telepon'];?>">
                                        </div>
                                    </div> 
                                    <div class="form-group row ">
                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="6" readonly><?php echo $row2['isi_email']?></textarea>
                                        </div>
                                    </div> 
                                <hr> 
                            </div>
                        </div>
                    </aside>
                </div>
            </div> 

        </div>
    </div> 
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
    <!--script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script-->
<?php 
  include 'admin_footer.php';
} 
else { ?>
  <script> alert('Anda tidak mempunyai hak akses! Hubungi Administrator.')
  document.location="http://<?php echo $_SERVER['HTTP_HOST']?>/berkahsantoso/"
  </script>
<?php } ?>