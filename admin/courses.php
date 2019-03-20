<?php

include "../db/Session.php";
Session::checkSession();
include "../class/Courses.php";

$course = new Courses();
if(isset($_POST['submit'])){

    $courseStatus = $course->addCourse($_POST);

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>UniPair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="index.html">UniPair Admin</a></h1>
                </div>
            </div>
            <div class="col-md-5">
                <!--    space   space       -->
            </div>
            <?php
            if(isset($_GET['action']) && $_GET['action'] == 'logout'){
                Session::destroy();
            }
            ?>
            <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <?php echo Session::get('adminName'); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="?action=logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li ><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> University </a></li>
                    <li class="current"><a href="courses.php"><i class="glyphicon glyphicon-calendar"></i> Add Program </a></li>
                    <li><a href="subjects.php"><i class="glyphicon glyphicon-stats"></i> Add Subjects</a></li>
                    <li><a href="details.php"><i class="glyphicon glyphicon-list"></i> Details</a></li>

                </ul>
            </div>
        </div>




        <div class="col-md-8 col-md-offset-1">
            <?php
            if (isset($courseStatus)){
                echo $courseStatus;
            }
            ?>
            <div class="content-box-large ">

                <div class="panel-heading">
                    <div class="panel-title">Add Courses: </div>

                </div>
                <div class="panel-body">
                    <form name="form1" action="courses.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Course Name:</label>
                            <input class="form-control" name="courseName" placeholder="Course Name">
                        </div>
                        <div class="form-group">
                            <label>Course Code:</label>
                            <input class="form-control" name="c_code">
                        </div>







                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="submit" name="submit" value="submit" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>




        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>