<?php
    session_start();
    if (isset($_COOKIE['childIDCookie'])) {
        setcookie('childIDCookie',"" ,time() - 3600);
    }
    if (isset($_COOKIE['medicalIDCookie'])) {
        setcookie('medicalIDCookie',"" ,time() - 3600);
    }

    session_unset();     // unset $_SESSION variable for this page
    session_destroy();  // destroy session data
    
    header("location:login_con.php");
?>

