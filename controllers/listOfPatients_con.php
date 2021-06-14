<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    $childData = $controller->getChildDataForListOfPatients();




    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/listOfPatients_view.php";
?>
