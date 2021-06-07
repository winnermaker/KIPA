<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/listOfPatients_view.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient.php";

    $controller = new DBCon();
    $controller -> connectToDB();
?>
