<?php
include "clientClass/ClientUniversity.php";

$client = new ClientUniversity();
$getuniv = $client->getUniversity();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- START: header -->

    <div class="probootstrap-loader"></div>

    <header role="banner" class="probootstrap-header">
        <div class="container">
            <a href="index.php" class="probootstrap-logo">Unipare<span>.</span></a>

            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="cost.php">Cost</a></li>
                    <li><a href="waiver.php">Waiver</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="details.php">Details</a></li>
                    <li><a href="findbest.php">Best for me</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>


                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    <h5>Connect</h5>
                    <ul class="social-buttons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END: header -->

    <!-- Card section with University Logo -->
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <!-- Individual Card start here -->
                <?php

                if($getuniv) {

                    while ($result = $getuniv->fetch_assoc()) {
                        $count = 0;
                        if($count != 3) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate"
                                 data-animate-effect="fadeIn">
                                <div class="product-item">
                                    <figure><img src="admin/img/<?php echo $result['image']; ?>" alt="Free"
                                                 class="img-responsive"></figure>
                                    <div class="text">
                                    <h2 class="heading"><?php echo $result['unvname']; ?></h2>
                                        <h2 class="heading">
                                            <?php
                                            $str = $result['details'];
                                            $snip = substr($str, 0,50);
                                            echo $snip;
                                            ?>
                                        </h2>
                                        <p><a href="single_detail.php?uniId=<?php echo $result['uni_id'] ?>" class="btn btn-primary btn-sm">View Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }else {
                            ?>
                            <!-- Individual Card ends here -->
                            <div class="clearfix visible-lg-block visible-md-block"></div>

                            <?php
                            $count = 0;
                        }
                    }
                }

?>










                <div class="clearfix visible-lg-block visible-md-block"></div>


            </div>
        </div>
    </section>

    <!-- Card section with University Logo Ends here -->

    <footer class="probootstrap-bg">
        <div class="container">

            <div class="row copyright">
                <div class="col-md-6">
                    <div class="probootstrap-footer-widget">
                        <p>&copy; 2017 <a href="https://Unipare.com/">Unipare</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="probootstrap-footer-widget right">
                        <ul class="probootstrap-footer-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
    </div>


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>