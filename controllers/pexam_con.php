<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $pexamdata = $pexamObj->getParams();
        if(isset($_COOKIE["medicalIDCookie"])){
          if (!$pexamObj->checkPexamID()) {
            $check = $controller->checkIfEntryExsits('medicalpexam',$_COOKIE["medicalIDCookie"],'fk_MedicalID');
            if(!$check){
              $insert = false;
              $insertMale = false;
              $insertFemale = false;
              $pexamdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
              $pexamID = $controller -> prepared_insert('medicalpexam',$pexamdata,$insert);

              if($pexamObj->checkGenitals() == 0){
                  //female
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenFemale',$gendata,$insertFemale);

              } elseif($pexamObj->checkGenitals() == 1){
                  //male
                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenMale',$gendata,$insertMale);

              } elseif($pexamObj->checkGenitals() == 2){
                  //other
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenFemale',$gendata,$insertFemale);

                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenMale',$gendata,$insertMale);
              }

                if(($insert) && ($insertMale || $insertFemale)){
                  $result='<div class="alert alert-success">Perfect !!! The record was successfully inserted</div>';
                } elseif(!$insert){
                  $result='<div class="alert alert-danger">Wrong!!! The record could not be inserted</div>';
                } elseif($insert){
                  $result='<div class="alert alert-success">Perfect !!! The record was successfully inserted</div>';
                }

            }else {
              $result='<div class="alert alert-danger">There already is a Physical Examination Entry for this Patient.</div>';
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
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $pexamData = $controller->getPexamData($_GET['medicalID']);
        if(!empty($pexamData)){
          $pexamDataM = $controller->getGenMData($pexamData['PEXAMID']);
          $pexamDataF = $controller->getGenFData($pexamData['PEXAMID']);
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
?>
