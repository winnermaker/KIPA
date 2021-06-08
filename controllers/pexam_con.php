<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $controller -> prepared_insert('medicalpexam',$pexamObj->getParams());

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
