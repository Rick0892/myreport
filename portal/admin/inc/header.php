<?php

$email = $_SESSION['email'];

$userId = new users;
$view_user = $userId->userId($email);
?>
<header class="header" style="background-color:darkblue;">
            <div class="page-brand" style="background-color:darkblue;">
                <a class="link" href="home.php">
                    <span class="brand">
                      <b  style="color:white;">Backend</b> <b style="color:white;"> Center</b>
                      <!-- <img src="images/logo.jpg" alt="images/logo.jpg" style="width:100%; height:4em;"> -->
                    </span>
                    <span class="brand-mini" style="color:gold;">BEC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                <!-- <li class="dropdown dropdown-user">
                        <a href="../../home" class="nav-link dropdown-toggle link">
                            <span class="brand-mini "><i class="fa fa-home" style="color:white;"> </i></span>&nbsp;<b style="color:white;">Home</b></a>
                       
                    </li> -->
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <!-- <img src="images/logo.jpg" style="width:100;" alt="image here" /> -->
                            <span class="brand-mini "><i class="fa fa-user" style="color:white;">  &nbsp;<?php echo $view_user['fname']; ?></i></span>
                            <span style="color:white;"></span><i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile"><i class="fa fa-user"></i>Profile</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="logout"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
