<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/visit_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $visitObj = new visit();
        $visitData = $visitObj->getParams();

        if (!$visitObj->checkVisitID()) {
          $visitData['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
          $controller -> prepared_insert('medicalvisits',$visitData);
        }else {
          $controller -> prepared_update('medicalvisits',$visitData);
        }


    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitDiagnostic_view.php";
?>
