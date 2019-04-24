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
        <?php include 'inc/header.php'; ?>
    <!-- ##### Header Area End ##### -->
    <hr style="background-color:black;">
    <!--logs file here -->
    <?php include 'logsFile.php'; ?>
    <!--end of log file-->
    <!-- ##### Course Area Start ##### -->
    <div class="cryptos-feature-area ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <h4><span>Please Select a task | an activity</span></h4>
                        <hr style="background-color:black;">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-feature-area mb-100 text-center">
                        <i class="fa fa-cogs"></i>
                        <h4>Report a Fault To MIS</h4>
                        <a href="activity/fault/index" class="btn cryptos-btn fa fa-arrow-circle-right">GO</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-feature-area mb-100 text-center">
                        <i class="fa fa-file"></i>
                        <h4>Submit | Request From Records</h4>
                        <a href="activity/records/index" class="btn cryptos-btn fa-arrow-circle-right">GO</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-feature-area mb-100 text-center">
                        <i class="fa fa-houzz"></i>
                        <h4> Request From  Stores</h4>
                        <a href="#" class="btn cryptos-btn fa fa-arrow-circle-right">GO</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->


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