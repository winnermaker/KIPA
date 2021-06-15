<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/medicalMain_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $medicalObj = new medicalmain();
        $medicalData = $medicalObj->getParams();
        if (!$medicalObj->checkMedicalMainID()) {
          $medicalData['fk_ChildrenID'] = $_COOKIE["childIDCookie"];
          $controller -> prepared_insert('medicalmain',$medicalData);
        }else {
          $controller -> prepared_update('medicalmain',$medicalData);
        }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/medicalMain_view.php";
?>
