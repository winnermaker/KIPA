<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/medicalMain_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/medicalMain_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $medicalObj = new medicalmain();
        //$medicalObj->printParams();
        $controller -> insertMedicalMain($medicalObj);
        $childID = $controller->getCurrentChildID();
        echo "ChildID medMain_con = $childID";


    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
