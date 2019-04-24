<?php
$fullname = $_SESSION['fullname'];
?>
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
                <a class="nav-brand" href="index.html"><img src="img/custom/logo.png" alt="" width="350"></a>

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
                            <li><a href="home">Home</a></li>
                            <li><a href="about-us">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            
                        </ul>

                        <!-- Newsletter Form -->
                        <div class="header-newsletter-form">
                           <h6><i class="fa fa-user"></i> Welcome <?php echo $fullname ?></h6>
                           <h6><a href="logout" class="btn btn-sm btn-danger" style="color:white;">Logout</a></h6>  
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>