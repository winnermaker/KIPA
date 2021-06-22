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
              $pexamdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
              $pexamID = $controller -> prepared_insert('medicalpexam',$pexamdata);

              if($pexamObj->checkGenitals() == 0){
                  //female
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenFemale',$gendata);

              } elseif($pexamObj->checkGenitals() == 1){
                  //male
                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenMale',$gendata);

              } elseif($pexamObj->checkGenitals() == 2){
                  //other
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenFemale',$gendata);

                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $controller -> prepared_insert('MedicalGenMale',$gendata);
              }
            }else {
              echo "There already is a Physical Examination Entry for this Patient.";
            }
          }else {
            $controller -> prepared_update('medicalpexam',$pexamdata);

            if($pexamObj->checkGenitals() === 0){
              //female
              $pexamdataF = $pexamObj->getParamsFemale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $controller -> prepared_update('MedicalGenFemale',$pexamdataF);
              }else {
                $pexamdataF['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $controller -> prepared_insert('MedicalGenFemale',$pexamdataF);
              }
            }elseif($pexamObj->checkGenitals() === 1){
              //male
              $pexamdataM = $pexamObj->getParamsMale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $controller -> prepared_update('MedicalGenMale',$pexamdataM);
              }else {
                $pexamdataM['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $controller -> prepared_insert('MedicalGenMale',$pexamdataM);
              }

            } elseif($pexamObj->checkGenitals() === 2){
              //other
              $pexamdataF = $pexamObj->getParamsFemale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $controller -> prepared_update('MedicalGenFemale',$pexamdataF);
              }else {
                $pexamdataF['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $controller -> prepared_insert('MedicalGenFemale',$pexamdataF);
              }
              $pexamdataM = $pexamObj->getParamsMale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $controller -> prepared_update('MedicalGenMale',$pexamdataM);
              }else {
                $pexamdataM['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $controller -> prepared_insert('MedicalGenMale',$pexamdataM);
              }
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
