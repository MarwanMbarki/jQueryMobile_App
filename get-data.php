<?php
session_start();
//Database Connection
$con = mysql_connect('localhost', 'root', '', 'jQuery') or die(mysql_error());

if (!$con) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("DATABASENAME")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}
//Fetch email and Password and compare them
$email = $_POST['email'];
$pWord = md5($_POST['password']);
$qry = "SELECT usrid, email, oauth FROM users WHERE email='" . $email . "' AND password='" . $pWord . "' AND status='active'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row = mysql_fetch_assoc($res);
if ($num_row == 1) {
    echo 'true';
    $_SESSION['email'] = $row['email'];
    $_SESSION['oId'] = $row['orgid'];
    $_SESSION['auth'] = $row['oauth'];
} else {
    echo 'false';
}
?>
