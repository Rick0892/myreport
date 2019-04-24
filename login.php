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
                        <p>Welcome <span>User</span></p>
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
                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                <?php 
                $error = '';
                if (isset($_POST['login']))
                {
                $email = $_POST['email'];
                $password = $_POST['password'];
              
                $loginUsers = new users;
                $loginUsers->loginUsers($email, $password);
                    
                $error = $loginUsers->loginUsers($email,$password);
                
                }

                if (isset($_GET['error'])) 
                      {
                          $sessionOut = $_GET['error'];
                          
                          ?>
                          <div class="alert alert-danger" role="alert">
                       <?php echo $sessionOut; ?>
                             </div>
                          <?php
                      } 
                ?>
                    <h6 class="text-center">Student Login</h6>
                    <hr style="background-color:black;">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Single Accordian Area -->
                        <form action="" method="post">
                            <div class="form-group">
                                <input id="my-input" class="form-control" name="stuId" placeholder="Your ID" type="text">
                            </div>

                            <div class="form-group">
                                <input id="my-input" class="form-control" name="password" placeholder="Password" type="password">
                                <span class="text-danger"><strong><?php echo $error; ?></strong></span>
                            </div>

                            <div class="form-group hover hover-info">
                                <div class="row">
                                    <div class="col-md-6">
                                    <h6 class="pull-left "> <a href="register" class="text-danger">Forgotten Password</a></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input id="my-input" type="submit" name="login" class="form-control btn btn-md btn-success" value="Login" type="text">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                </div>
                


    </section>
    <!-- ***** Elements Area End ***** -->

    <!-- ##### Footer Area Start ##### -->
    <br><br><br><br><br><br>
    <?php include 'inc/footer.php'; ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <?php include 'inc/script.php'; ?>
</body>

</html>