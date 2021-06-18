<?php
    session_start();

    header("location:login_con.php");
    
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();

?>
