<?php
session_start();
//Open Connection to the Database
$con = mysql_connect('localhost', 'root', '', 'jQuery') or die(mysql_error());

if (!$con) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("DATABASENAME")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$email = $_POST['email'];
$pWord = md5($_POST['password']);
$qry = "SELECT usrid, email, oauth FROM users WHERE email='" . $email . "' AND password='" . $pWord . "' AND status='active'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row = mysql_fetch_assoc($res);
if ($num_row == 1) {
    echo 'true';
    //Get User Email
    $_SESSION['email'] = $row['email'];
    //Get user name
    $_SESSION['name'] = $row['name'];
    $_SESSION['oId'] = $row['orgid'];
    //Get authentification
    $_SESSION['auth'] = $row['oauth'];
} else {
    echo 'false';
}
?>
