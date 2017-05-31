<?php
//Open Session
session_start();
//Call the varianle Email from the login page
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<!-- CopyRight Marwan Mbarki 2017 -->
<html>
<head>
    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include jQuery Mobile stylesheets -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>Jquery Login Application</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>Welcome to Dashboard, tou have successfully logged in.</p>
        <!-- Print the Email -->
        <p>Your Email: <?php  echo $email; ?></p>
    </div>


    <div data-role="footer">
        <h1>Footer - CopyRight 2017</h1>
    </div>
</div>

</body>
</html>
