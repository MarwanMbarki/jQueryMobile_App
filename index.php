<!DOCTYPE html>
<!--suppress ALL -->
<html>
<?php
//Call the API
require("api.php");
insert_film();
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Title -->
    <title>Weekly Blog/title>
    <!-- Page Description -->
    <!-- jQuerry stylesheet>  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/npmm.js"></script>
    <script src="js/functions.js"></script>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!---navbar-->
<div class="container">
   <!-- Ajax code deleted from this section -->
    
    <!-- Ajax code deleted from this section -->
    <!-- Sidebar -->
    <!-- Static navbar -->
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" id="collbtn" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="index.php">RIA</a>

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container">
    <div class="container">
        <div class="content-header">
            <h1 id="home">
                RIA - BLOG
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-content inset" data-spy="scroll" data-target="#spy">
        <div class="row">
            <div class="col-md-12 well">
                <div id="txtHint">
                    <h3>MARWAN MBARKI - Jquery Login Application</h3><br>
                    <hr>
                    <h4>Jquery Login Application.
                    </h4>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="navbar navbar-default navbar-static-bottom">
                <p class="navbar-text pull-left">
                    CopyRight 2017 - MARWAN MBARKI
                </p>
            </div>
        </div>
    </div>
</footer>
</html>
<!-- Connect to database -->

<?php
include ("hiddenData.php");
	$dbcon = new mysqli($servername,$username,$password,$database);
	// Check connection
	if ($dbcon->connect_error) {
		die("Connection failed: " . $dbcon->connect_error);
	}

?>
