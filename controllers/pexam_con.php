<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $controller -> prepared_insert('medicalpexam',$pexamObj->getParams());

        if($pexamObj->checkGenitals() === 0){
            //female
            $pexamObj->printParamsFemale();
            $controller -> prepared_insert('MedicalGenFemale',$pexamObj->getParamsFemale());

        } elseif($pexamObj->checkGenitals() === 1){
            //male
            $pexamObj->printParamsMale();
            $controller -> prepared_insert('MedicalGenMale',$pexamObj->getParamsMale());

        } elseif($pexamObj->checkGenitals() === 2){
            //other
            $pexamObj->printParamsMale();
            $pexamObj->printParamsFemale();
            $controller -> prepared_insert('MedicalGenMale',$pexamObj->getParamsMale());
            $controller -> prepared_insert('MedicalGenFemale',$pexamObj->getParamsFemale());
        } else{
            echo "NO INPUT FOR GENITALS";
        }
        //$controller->insertPEXAM($pexamObj);

    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }
?>
