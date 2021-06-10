<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pregnancyObj = new pregnancy();
        var_dump($pregnancyObj->checkPregnancyMain());
        var_dump($pregnancyObj->checkPresentPregnancy());
        var_dump($pregnancyObj->checkPreviousPregnancy());
        $pregnancyObj->printPreviousPregnancy();

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
