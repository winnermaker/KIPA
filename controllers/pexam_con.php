<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    $controller = new DBCon();
    $controller -> connectToDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $pexamObj->printParams();

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
