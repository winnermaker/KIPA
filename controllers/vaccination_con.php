<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/vaccination_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/vaccination_class.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vaccinationObj = new vaccination();
        $vaccinationObj->printParams();
       
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      
    }
?>