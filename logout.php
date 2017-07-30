<?php
session_start();//access the current session.
// if no session variable exists then redirect the user
if (!isset($_SESSION['currentUser'])) {
header("location:login.php");
exit();
//cancel the session and redirect the user:
}else{ //cancel the session
$_SESSION = array(); // Destroy the variables.
header("location:login.php?remark=session-closed");
exit();
}
?>