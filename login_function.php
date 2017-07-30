<?php
include('header2.php');
echo '<br><br><br><br><br><br>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//connect to database
require ('mysqli_connect.php');

// Validate the email address
if (!empty($_POST['login_email'])) {
$e = mysqli_real_escape_string($dbcon, $_POST['login_email']);
} else {
$e = FALSE;
echo '<p class="error">You forgot to enter your email address.</p>';
}

// Validate the password
if (!empty($_POST['login_psword'])) {
$p = mysqli_real_escape_string($dbcon, $_POST['login_psword']);
} else {
$p = FALSE;
echo '<p class="error">You forgot to enter your password.</p>';
}

if ($e && $p){//if no problems #2
// Retrieve the user_id, first_name and user_level for that email/password combination
$q = "SELECT * FROM users WHERE (email='$e' AND psword=SHA1('$p'))";

// Run the query and assign it to the variable $result
$result = mysqli_query ($dbcon, $q);

// Count the number of rows that match the email/password combination
if (@mysqli_num_rows($result) == 1) {//if one database row (record) matches the input:-
// Start the session, fetch the record and insert the three values in an array

session_start();
$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
// Ensure that the user level is an integer.
$_SESSION['currentUser'] = $_POST['email'];
$_SESSION['currentpsword'] =$_POST['login_psword'];
// Use a ternary operation to set the URL

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$url = 'tst.php';
header("Location: https://$host$uri/$url"); // Make the browser load either the members’ or the admin page
exit(); // Cancel the rest of the script
mysqli_free_result($result);
mysqli_close($dbcon);echo 'user found';
} else { // No match was made.

echo '<p class="error" style="text-align: center;">The e-mail address and password entered do not match our records
<br>Perhaps you need to register, just click the <a href="register">Register</a> button</p>';
    include('footer.php');
} else { // If there was a problem.
echo '<p class="error">Please try again.</p>';
header("location:login.php?=invaild credential");
}
mysqli_close($dbcon);
} // End of SUBMIT conditional.
?>
