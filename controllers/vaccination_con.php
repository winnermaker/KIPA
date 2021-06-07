<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/vaccination_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/vaccination_class.php";
    $controller = new DBCon();
    $controller -> connectToDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vaccinationObj = new vaccination();


    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
