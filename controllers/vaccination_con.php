<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/vaccination_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/vaccination_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vaccinationObj = new vaccination();


    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
