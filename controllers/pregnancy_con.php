<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    $controller = new DBCon();
    $controller -> connectToDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pregnancyObj = new pregnancy();
        $pregnancyObj->printParams();

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
