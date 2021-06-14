<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    $childData = $controller->getChildDataForListOfPatients();
    $childDataVacc = $controller->getAllChildernVaccSoon();
    $childDataReview = $controller->getAllChildernReviewSoon();




    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/listOfPatients_view.php";
?>
