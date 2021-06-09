<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/medicalMain_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $medicalObj = new medicalmain();
        $medicalData = $medicalObj->getParams();
        $medicalData['fk_ChildrenID'] = $_COOKIE["ChildIDCookie"];
        $controller -> prepared_insert('medicalmain',$medicalData);
        $child = $controller->getChildData((int)$_COOKIE["ChildIDCookie"]);
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/medicalMain_view.php";
?>
