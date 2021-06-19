<?php
// 2 hours 7200, 1 hour 3600 , 30 min 1800 (in seconds)
$inactive = 1800;
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

session_start();
if (isset($_SESSION['time']) && (time() - $_SESSION['time'] > $inactive)) {
  setcookie(childIDCookie, time() - 3600);
  setcookie(medicalIDCookie, time() - 3600);
  session_unset();     // unset $_SESSION variable for this page
  session_destroy();   // destroy session data
  header("location:login_con.php"); //return to login page
}
$_SESSION['time'] = time();

 ?>
