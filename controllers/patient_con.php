<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<script> alert('POST-METHOD'); </script>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        echo "<script> alert('GET-METHOD'); </script>";
    }
?>