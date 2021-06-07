<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $patientObj = new patient();
        $patientObj->printParams();
        var_dump($patientObj->checkPatientID());
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      
    }
?>