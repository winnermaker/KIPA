<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/visit_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $visitObj = new visit();
        $visitObj->printParams();
        $controller -> prepared_insert('medicalvisits',$visitObj->getParams());

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitDiagnostic_view.php";
?>
