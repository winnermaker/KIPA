<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $patientObj = new patient();
        //$patientObj->printParams();
        $childID = $controller -> insertChilderenMain($patientObj);
        $controller -> setCurrentChildID($childID);


    }

   if ($_SERVER["REQUEST_METHOD"] == "GET"){

  }
?>
