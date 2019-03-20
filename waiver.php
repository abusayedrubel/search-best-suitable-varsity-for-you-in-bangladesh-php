<?php
include "clientClass/ClientUniversity.php";

$client = new ClientUniversity();
$getwaiver = $client->getWaiver();

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

    <!-- Search Bar  -->


    <!-- End Search bar -->


    <!-- Table  -->
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#Rank</th>
                            <th scope="col">University</th>
                            <th scope="col">Waiver</th>

                        </tr>
                    </thead>

                    </tbody>
                        <tr>
                            <td>1</td>
                            <td>Brac</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#brac">waiver</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>North South</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#northsouth">waiver</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>IUB</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#iub">waiver</button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>East West</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eastwest">waiver</button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>AUST</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aust">waiver</button></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>AIUB</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aiub">waiver</button></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>UIU</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uiu">waiver</button></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>ULAB</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ulab">waiver</button></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Asia Pacific</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#asiapacific">waiver</button></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>DIU</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#diu">waiver</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>

    <!-- End Table -->

    <!-- Modal -->
    <div class="modal fade" id="brac" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Brac University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="northsouth" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">North South University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="iub" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">IUB University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="eastwest" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">East West University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="aust" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AUST University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="aiub" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AIUB University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uiu" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UIU University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ulab" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ULAB University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="asiapacific" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asia Pacific University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="diu" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DIU University</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SSC</th>
                            <th scope="col">HSC</th>
                            <th scope="col">Waiver</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>GPA: 5.00</td>
                            <td>GPA: 5.00</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.50</td>
                            <td>GPA: 4.50</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>GPA: 4.00</td>
                            <td>GPA: 4.00</td>
                            <td>50%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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