<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    $controller = new DBCon();
    $controller -> connectToDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $patientObj = new patient();
        $patientObj->printParams();
        $childID = $controller -> insertChilderenMain($patientObj);


    }

   if ($_SERVER["REQUEST_METHOD"] == "GET"){

  }
?>
