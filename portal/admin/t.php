<?php
session_start();
function __autoload($class)
{
  require_once "connection/$class.php";
}

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>User | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="./assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="./assets/css/pages/auth-light.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/logo@2x.png">
    <script src="assets/js/sweetalert.min.js"></script>
    <style media="screen">
    .me {
        background-color: darkgreen;

        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>

<body class="me">
  <?php
  if (isset($_POST['submit']))
  {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $loginUsers = new users;
  $loginUsers->loginUsers($email, $password);


  }

if (isset($_GET['error']))
{
  $session_error = $_GET['error'];
  ?>
  <script type="text/javascript">
    swal("", "<?php echo $session_error; ?>", "info");
  </script>
  <?php
}
   ?>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <br>
              <br>
              <br>
              <!-- <h3 class="text-center"><b style="color:white;">MIS</b> <b style="color:white">Dashboard</b></h3> -->
                 <img src="images/logo.png" alt="images/logo.png" style="width:100; height:4em;">
                 <hr>
            </div>
            <form id="login-form" method="post">
                <h2 class="login-title">WELCOME</h2>
                <div class="form-group">
                    <div class="input-group-icon right">
                        <div class="input-icon"><i class="fa fa-user font-16"></i></div>
                        <input class="form-control" type="email" name="email" placeholder="email" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-icon right">
                        <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <!-- <div class="form-group d-flex justify-content-between">
                    <label class="ui-checkbox ui-checkbox-info">
                        <input type="checkbox">
                        <span class="input-span"></span>Remember me</label>
                    <a href="forgot_password.html">Forgot password?</a>
                </div> -->
                <div class="form-group">
                    <button class="btn btn-success btn-block" name="submit" type="submit">Login</button>
                </div>

            </form>
            <br>
            <?php
            $fromYear = 2018;

            $fromYear = 2018;

            $thisYear = (int)date('Y');
            ?>
            <div class="text-center">
              <footer class="footer" style="margin-top: 0px;padding: 0px;color: #fff; width:100%;">
                          <p class="text-center">&copy; <?php echo $thisYear ;   ?> <a href="#">FRS</a> | Powered By  <a href="https://youngcoderrick.epizy.com" title="call or whatsapp @ (050) 255 9131" target="_blank">Young Coder Rick</a></p>
                  </footer>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="./assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>
