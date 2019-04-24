<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

<!-- Top Header Area -->
<div class="top-header">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                    <!-- Top Headline -->
                    <div class="top-headline">
                        <p>Welcome to <span>Weija-Gbawe Portal</span></p>
                    </div>
                    <!-- Top Login & Faq & Earn Monery btn -->
                    <div class="login-faq-earn-money">
                        <a href="index">Back</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-50 ">
        <div class="container">
            <div class="row">
                <!-- ********** Progress Bars & Accordions ********** -->
                <div class="col-12 col-lg-3">
                </div>
                <!--php codes here -->
                <?php
                    if (isset($_POST['register'])) 
                    {
                        $fname = $_POST['fname'];
                        $email = $_POST['email'];
                        $depart = $_POST['depart'];
                        $positon = $_POST['position'];
                        $password = $_POST['password'];

                        $hashed = password_hash($password,PASSWORD_DEFAULT);

                        $fields = [
                           'fname' => $fname,
                           'email' => $email,
                           'department' => $depart,
                           'position' => $positon,
                           'password' => $hashed,
                           'password_reset' => $email 
                        ];

                        $check = new users();
                        $email_id = $check->checking($email);
    
                      if ($email_id == $email)
                      {
                        ?>
                        <script type="text/javascript">
                          swal("", "<?php echo "Issue Already Reported"; ?>", "error");
                        </script>
                        <?php
                      }else {
    
    
                        $insert = new users();
    
                        $insert->insert($fields);
    
                         header('location: login');
    
                      }
                    }
                ?>
                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <h6 class="text-center">Register</h6>
                    <hr style="background-color:black;">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Single Accordian Area -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="my-input">Fullname</label>
                                <input id="my-input" name="fname" class="form-control" type="text" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Email</label>
                                <input id="my-input" name="email" class="form-control" type="email" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Department</label>
                                <input id="my-input" name="depart" class="form-control" type="text" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Position</label>
                                <input id="my-input" name="position" class="form-control" type="text" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Password</label>
                                <input id="my-input" name="password" class="form-control" type="password" required>
                            </div>

                            <div class="form-group">
                                <input id="my-input" type="submit" name="register" class="form-control btn btn-md btn-primary" value="Register" type="text">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                </div>

                


    </section>
    <!-- ***** Elements Area End ***** -->

    <!-- ##### Footer Area Start ##### -->
    <?php include 'inc/footer.php'; ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>