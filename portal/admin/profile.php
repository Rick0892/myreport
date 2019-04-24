<?php
function __autoload($class)
{
  require_once "functions/$class.php";
}

include('connection/check-login.php');


$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/head.php'; ?>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <?php include 'inc/header.php'; ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php include 'inc/navbar.php'; ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
          <!--php here-->
          <?php
          if (isset($_POST['save'])) {
            $opassword =$_POST['opassword'];
            $npassword =$_POST['npassword'];
            $cpassword =$_POST['cpassword'];
            $rpassword =$_POST['rpassword'];


            $changePwd = new users();
            $changePwd->changePassword($opassword,$npassword,$cpassword,$rpassword,$email);
          }

           ?>
          <!--end of php -->
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
              <h5><b>User Profile Section</b></h5>
              <hr>

                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table table-responsive table-striped table-bordered table-hover"  cellspacing="0" width="100%">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>#</th>
                                  <th>user</th>
                                  <th>Email</th>
                                  <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                              <tr>
                                <td>#</td>
                                  <td><?php echo $view_user['fname']; ?></td>
                                  <td><?php echo $view_user['email']; ?> </td>
                                  <td>
                                    <a href="" data-toggle="modal" data-target="#myDelete" class="btn btn-xs btn-danger"><i class="" title="delete" aria-hidden="true">Update Password</i></a>
                                  </td>
                              </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <?php include 'inc/footer.php'; ?>
            </footer>
        </div>
    </div>


<!-- The Modal questions Delete -->
<div class="modal fade" id="myDelete">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Password</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
              <p>
              <form class="form-group"  method="post">
            <?php

                                ?>
              <input class="form-control" type="password" name="opassword" placeholder="Old Password"  autofocus /><br>
              <input class="form-control" type="password" name="npassword" placeholder="New Password" /><br>
              <input class="form-control" type="password" name="cpassword" placeholder="Confrim Password"  /> <br/>
              <label for="password_rest" class="text-danger">Change Password Reset code[Optional]</label>
              <input class="form-control" type="email" name="rpassword" value="<?php echo $view_user['password_reset']; ?>" placeholder="reset"  /> <br/>

              <input class="btn btn-info" name="save" type="submit" value="Change Password"/>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </form>
              </p>
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-info" >login</button>
                    </div> -->

        </div>
    </div>
</div>
<!-- The Modal end -->


    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include 'inc/config.php'; ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
  <?php include 'inc/script.php'; ?>


    <script type="text/javascript">
    $(function() {
        $('#summernote').summernote();
        $('#summernote_air').summernote({
            airMode: true
        });
    });

        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>
