<?php 
@session_start();
if (!empty($_SESSION['login_username']))
{
  $user = $_SESSION['login_username'];
  $status = $_SESSION['login_status'];
  include 'admin_header.php';
  include 'model/users/model_user.php';

?>
  <!-- Core stylesheets -->
  <link rel="stylesheet" href="css/form.css">

    <section id="login">
      <div class="modal fade" id="login-modal" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header" align="center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span class="fa fa-times" aria-hidden="true"></span>
                      </button>
                  </div>
                  <div id="div-forms">
                      <form id="login-form" action="model/users/add_user.php" method="post">
                          <h3 class="text-center">Tambah Admin</h3>
                          <div class="modal-body">
                              <label for="username">Username</label> 
                              <input id="username" name="username" class="form-control" type="text" placeholder="Enter username " required>
                              <label for="username">Password</label> 
                              <input id="password" name="password" class="form-control" type="password" placeholder="Enter password" required>
                              <label for="username">Confirm Password</label> 
                              <input id="confirm_password" name="confirm_password" class="form-control" type="password" placeholder="Confirm password" required>
                              <label for="status">Status</label> 
                              <select class="form-control" name="status" required>
                                  <option value="">Select status</option>
                                  <option value="superadmin">Superadmin</option>
                                  <option value="administrator">Administrator</option>
                              </select>
                          </div>
                          <div class="modal-footer text-center">
                              <div>
                                  <button type="submit" class="btn btn-sm btn-white">Save</button>
                              </div>
                              <div>
                                  <button type="button" class="btn btn-sm btn-link" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section>  
<!--====================================================
                        PAGE CONTENT
======================================================-->
  <div class="page-content d-flex align-items-stretch">

    <?php include 'sidebar_menu.php'; ?>

      <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->     
            <div class="row">
              <div class="col-md-12">
                <!--***** ADMIN USER *****-->
                <div class="card form" id="form1">
                  <div class="card-header">
                    <h3>Admin User</h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <a href="#" class="log-top btn float-right btn-sm" data-toggle="modal" data-target="#login-modal">Tambah Admin</a>
                      <!--a href="admin_form.php" class="btn float-right btn-sm">Tambah Admin</a-->
                      <table class="table table-hover responsive">
                        <thead>
                          <tr class="bg-info text-white">
                            <th>#</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th style="text-align: center;" ">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;   
                            while($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <th scope="row"><?php echo $no++;?></th>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td>                     
                              <center>
                                <a href="model/users/delete-user/<?php echo $row['id']?>/<?php echo $row['username']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus account ini?')">Hapus</a>
                               </center>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
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