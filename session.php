<?php
session_start();
require ('mysqli_connect.php');
$user_check = $_SESSION['email'];
$user_pass = $_SESSION['psword'];

$q = "SELECT * FROM users WHERE (email='$user_check' AND psword='$user_pass')";
$result = mysqli_query ($dbcon, $q);
$_SESSION= mysqli_fetch_array ($result, MYSQLI_ASSOC);

if ($_SESSION['email'] == ''){
header("Location: login.php?sesion_closed&start=0");
}

?>