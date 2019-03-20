<?php
include "clientClass/ClientUniversity.php";

$client = new ClientUniversity();


if (isset($_POST['submit'])) {
    if( !empty($_POST['g']) && !empty($_POST['g1'])){
        $g1 = $_POST['g'];
        $g2 = $_POST['g1'];
        $g3 = $_POST['g2'];
        $cost = $g1[0];
        $service = $g2[0];
        $faculty = $g3[0];

        $get_best_choice = $client->getBestChoice($cost,$service,$faculty);
        if(!empty($get_best_choice)){
            $result = $get_best_choice->fetch_assoc();
        }else{
            $result[0] = '<b style="color:red;">'.'No Result'.'</b>';
        }
        
        
    }else{
    echo "select something";
}


}
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
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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

    <!-- section with university details and name -->
    <div class="container">
        <div class="row jumbotron">

            <div class="contenct-section">
                <!-- Search Query start -->
                <h3>Choose your option:</h3>
                <hr>
                    <form role="form" action="" method="post">
                        <fieldset id="group1">
                            <h4>Cost: </h4>
                            <input type="radio" value="high" name="g[]">
                            <label for="">12-14 (lacs)</label>
                            <input type="radio" value="medium" name="g[]">
                            <label for="">9-12 (lacs)</label>
                            <input type="radio" value="low" name="g[]">
                            <label for="">6-9 (lacs)</label>
                        </fieldset>
                        <fieldset id="group2">
                            <h4>Subjects: </h4>
                            <input type="radio" value="high" name="g1[]">
                            <label for="">Science & Information Technology</label>
                            <input type="radio" value="medium" name="g1[]">
                            <label for="">Business & Entrepreneurship</label>
                            <input type="radio" value="low" name="g1[]">
                            <label for="">Engineering</label>
                        </fieldset>
                        <fieldset id="group3">
                            <h4>Academic Result: </h4>
                            <input type="radio" value="high" name="g2[]">
                            <label for="">SSC: 5.00 & HSC: 5.00</label>
                            <input type="radio" value="medium" name="g2[]">
                            <label for="">SSC: 5.00 & HSC: 4.50</label>
                            <input type="radio" value="low" name="g2[]">
                            <label for="">SSC: 4.50 & HSC: 4.50</label>
                        </fieldset>
                        <br>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </form>

                <br>
                <hr>
                <!-- Search Query ends -->
                <div class="query-result">
                    <p>
                           <?php
                            if (isset($result)){
                                foreach($result as $r){
                                    echo 'Best Choice: '.$r. ' Thank You :)';
                                }
                            }
                            ?>
                     </p>
                </div>
            </div>
            

        </div>
    </div>

    <!-- end section -->

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

    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
    </script>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>

