<?php
    session_start();

    header("location:login_con.php");
    setcookie(childIDCookie, time() - 3600);
    setcookie(medicalIDCookie, time() - 3600);
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();

?>
