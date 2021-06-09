<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $pexamdata = $pexamObj->getParams();
        $pexamdata['fk_MedicalID']=$_COOKIE["MedicalIDCookie"];
        $controller -> prepared_insert('medicalpexam',$pexamdata);

        if($pexamObj->checkGenitals() === 0){
            //female
            $pexamdata = $pexamObj->getParamsFemale();
            $pexamdata['fk_PEXAMID']=$_COOKIE["pexamID"];
            $controller -> prepared_insert('MedicalGenFemale',$pexamdata);

        } elseif($pexamObj->checkGenitals() === 1){
            //male
            $controller -> prepared_insert('MedicalGenMale',$pexamObj->getParamsMale());

        } elseif($pexamObj->checkGenitals() === 2){
            //other
            $pexamdata = $pexamObj->getParamsFemale();
            $pexamdata['fk_PEXAMID']=$_COOKIE["pexamIDCookie"];
            $controller -> prepared_insert('MedicalGenFemale',$pexamdata);
            $pexamdata = $pexamObj->getParamsMale();
            $pexamdata['fk_PEXAMID']=$_COOKIE["pexamIDCookie"];
            $controller -> prepared_insert('MedicalGenMale',$pexamdata);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
?>
