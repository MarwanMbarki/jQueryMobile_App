<?php
session_start();
//Database Connection
$con = mysqli_connect('localhost', 'root', '', 'userTable') or die(mysqli_error());

if (!$con) {
    echo "Unable to connect to DB: " . mysqli_error();
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
$res = mysqli_query($qry);
$num_row = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
if ($num_row == 1) {
    echo 'true';
    //Create Session for those three variable
    $_SESSION['email'] = $row['email'];
    //Get The user ID
    $_SESSION['oId'] = $row['orgid'];
    $_SESSION['auth'] = $row['oauth'];
} else {
    echo 'false';
}
?>
