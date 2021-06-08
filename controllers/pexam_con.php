<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        //$pexamObj->printParams();

        if($pexamObj->checkGenitals() === 0){
            $pexamObj->printParamsFemale();

        } elseif($pexamObj->checkGenitals() === 1){
            $pexamObj->printParamsMale();
        } elseif($pexamObj->checkGenitals() === 2){
            $pexamObj->printParamsMale();
            $pexamObj->printParamsFemale();
        } else{
            echo "NO INPUT FOR GENITALS";
        }
        //$controller->insertPEXAM($pexamObj);

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
