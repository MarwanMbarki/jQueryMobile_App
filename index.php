<!DOCTYPE html>
<!--suppress ALL -->
<html>
<?php
require("api/api.php");
insert_film();
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Title -->
    <title>Weekly Blog - Bcs Web Dev - Year 3</title>
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
<!-----navbar------>
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
                    <a onclick="showUser(1); return false;" href="#">WEEK 1</a>
                </li>
                <li>
                    <a onclick="showUser(2); return false;" href="#">WEEK 2</a>
                </li>
                <li>
                    <a onclick="showUser(3); return false;" href="#">WEEK 3</a>
                </li>
                <li>
                    <a onclick="showUser(4); return false;" href="#">WEEK 4</a>
                </li>
                <li>
                    <a onclick="showUser(5); return false;" href="#">WEEK 5</a>
                </li>
                <li>
                    <a onclick="showUser(6); return false;" href="#">WEEK 6</a>
                </li>
                <li>
                    <a onclick="showUser(7); return false;" href="#">WEEK 7</a>
                </li>
                <li>
                    <a onclick="showUser(8); return false;" href="#">WEEK 8</a>
                </li>
                <li>
                    <a onclick="showUser(9); return false;" href="#">WEEK 9</a>
                </li>
                <li>
                    <a onclick="showUser(10); return false;" href="#">WEEK 10</a>
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
                    <h3>MARWAN MBARKI - ABERTAY UNIVESITY - YEAR 3</h3><br>
                    <hr>
                    <h4>Welcome to RIA weekly blog, I in this blog I will share best practice about "Rich Internet
                        Application",
                        I'll describe and introduce almost of the programming languages used to built a "Rich Internet
                        Application".
                    </h4>
                    <br>
                    <ul class="a">
                        <li>RIA</li>
                        <li>JSON vs XML</li>
                        <li>AJAX</li>
                        <li>jQuery</li>
                        <li>Firebase</li>
                        <li>Angular JS</li>
                        <li>Mobile Revolution</li>
                    </ul>
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
                    Built by - MARWAN MBARKI
                </p>
            </div>
        </div>
    </div>
</footer>
</html>
