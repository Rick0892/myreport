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
                        <p>Welcome to <span>My Report Platform</span></p>
                    </div>
                    <!-- Top Login & Faq & Earn Monery btn -->
                    <div class="login-faq-earn-money">
                        <!-- <a href="login">Login</a> -->
                        <a href="#">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Area -->
<div class="cryptos-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cryptosNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/dg.jpg" alt="Logo Here" width="100"></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="login">Students</a></li>
                            <li><a href="loginTeacher">Teachers</a></li>
                            <li><a href="loginAdmin">Admin</a></li>
                        </ul>

                        <!-- Newsletter Form -->
                        <div class="header-newsletter-form">
                           <!-- <h6><i class="fa fa-user"></i> Welcome Young Coder Rick | <a href="" class="btn btn-sm btn-danger" style="color:white;">Logout</a></h6>  -->
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### --> 
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-7">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Something Here <span>....</span></h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">Other services or news post</h6>
                                <a href="#" class="btn cryptos-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="hero-slides-thumb" data-animation="fadeInUp" data-delay="1000ms">
                                <img src="img/dg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-7">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Something Sweet <span> Here</span></h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">blah blah blah.</h6>
                                <a href="#" class="btn cryptos-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="hero-slides-thumb" data-animation="fadeInUp" data-delay="1000ms">
                                <img src="img/dg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
        <?php include 'inc/footer.php'; ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <?php include 'inc/script.php'; ?>
</body>

</html>