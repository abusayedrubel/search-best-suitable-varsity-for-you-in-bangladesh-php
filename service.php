<?php
include "clientClass/ClientUniversity.php";

$client = new ClientUniversity();
$getservice = $client->getService();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

    <style>

    </style>
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



    <!-- Table  -->
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <!-- search bar -->
                <!-- search bar -->
<!--                <form name="form1" action="cost.php" method="post">-->
<!--                    <div class="col-md-10">-->
<!--                        <div class="form-group col-md-8">-->
<!--                            <label for="exampleFormControlSelect1">Select a Course:</label>-->
<!--                            <select class="form-control" name="srs" id="exampleFormControlSelect1">-->
<!--                                <option>Choose:</option>-->
<!---->
<!---->
<!--                                --><?php
//
//                                if ($getservice){
//                                    while ($result = $getservice->fetch_assoc()) {
//                                        ?>
<!--                                        <option value="--><?php //echo $result['uni_id']; ?><!--">--><?php //echo $result['unvname']; ?><!--</option>-->
<!--                                        --><?php
//                                    }
//                                }
//
//                                ?>
<!---->
<!--                            </select>-->
<!---->
<!--                        </div>-->
<!--                        <div class="form-group col-md-2 btnClass">-->
<!--                            <div class="col-sm-10">-->
<!--                                <input type="submit" name="submit" value="submit" class="btn btn-success">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </form>-->
                <!-- end of search -->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#Rank</th>
                            <th scope="col">University</th>
                            <th scope="col">Percentage of Service</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #fff;">

                    <?php
                    $count = 0;
                    if($getservice){

                            while ($result = $getservice->fetch_assoc()){


                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count += 1 ?></th>
                                    <td><?php echo $result['unvname']; ?></td>
                                    <td><?php echo $result['service'].'%';
                                        if(($result['service'])>=90){
                                            echo "--Good";
                                        }elseif (($result['service'])<90){
                                            echo "--Average";
                                        } ?></td>
                                </tr>

                                <?php

                            }
                        }
                   ?>

                    </tbody>
                </table>

            </div>
        </div>
		<div class="container">
		
	<h4> Here in this catagory we have count the value as percentage.
we decided this value depending on some facility factor of universities</br>
.librery fecility</br>
.classroom facility</br>
.Elevator service</br>
.Genarator</br>
.multimedia system</br>
.canteen</br>
.commonroom</br>
.Computer lab</br>
.Auditorium</br>
.lounge</br>
.Air condition</br>
.sports room</br>
.newspaper facility	</h4>
		
		</div>
    </section>

    <!-- End Table -->

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