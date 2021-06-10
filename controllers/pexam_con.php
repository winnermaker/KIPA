<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $pexamdata = $pexamObj->getParams();
        $gendata = array();

        if (!$pexamObj->checkPexamID()) {
          $pexamdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
          $controller -> prepared_insert('medicalpexam',$pexamdata);

          if($pexamObj->checkGenitals() == 0){
              //female
              $gendata = $pexamObj->getParamsFemale();
              $gendata['fk_PEXAMID']=$_COOKIE["pexamIDCookie"];
              $controller -> prepared_insert('MedicalGenFemale',$gendata);

          } elseif($pexamObj->checkGenitals() == 1){
              //male
              $gendata = $pexamObj->getParamsMale();
              $gendata['fk_PEXAMID']=$_COOKIE["pexamIDCookie"];
              $controller -> prepared_insert('MedicalGenMale',$gendata);

          } elseif($pexamObj->checkGenitals() == 2){
              //other
              $gendata = $pexamObj->getParamsFemale();
              $gendata['fk_PEXAMID']=$_COOKIE["pexamIDCookie"];
              $controller -> prepared_insert('MedicalGenFemale',$gendata);

              $gendata = $pexamObj->getParamsMale();
              $gendata['fk_PEXAMID']=$_COOKIE["pexamIDCookie"];
              $controller -> prepared_insert('MedicalGenMale',$gendata);
          }
        }else {
          $controller -> prepared_update('medicalpexam',$pexamdata);

          if($pexamObj->checkGenitals() === 0){
              //female
              $pexamdata = $pexamObj->getParamsFemale();
              $controller -> prepared_update('MedicalGenFemale',$pexamdata);

          } elseif($pexamObj->checkGenitals() === 1){
              //male
              $pexamdata = $pexamObj->getParamsMale();
              $controller -> prepared_update('MedicalGenMale',$pexamdata);

          } elseif($pexamObj->checkGenitals() === 2){
              //other
              $pexamdata = $pexamObj->getParamsFemale();
              $controller -> prepared_update('MedicalGenFemale',$pexamdata);
              $pexamdata = $pexamObj->getParamsMale();
              $controller -> prepared_update('MedicalGenMale',$pexamdata);
          }
        }

    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
?>
