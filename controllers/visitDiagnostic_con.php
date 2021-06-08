<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitDiagnostic_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/visit_class.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $visitObj = new visit();
        $visitObj->printParams();

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
