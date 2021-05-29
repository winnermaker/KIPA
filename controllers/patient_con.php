<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $patientObj = new patient();
        $patientObj->printParams();
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      
    }
?>