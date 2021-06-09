<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pregnancyObj = new pregnancy();
        $pregnancyObj->checkPresentPregnancy();
        //$pregnancyObj->printPresentPregnancy();

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
