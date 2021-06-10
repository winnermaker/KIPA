<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $patientObj = new patient();
        $controller->getAllChildern();
        if(!$patientObj->checkPatientID()){
          $controller -> prepared_insert('childrenmain',$patientObj->getParams());
        }else {
          $controller -> prepared_update('childrenmain',$patientObj->getParams());
        }

    }

  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";
?>
