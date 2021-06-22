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
              $res = $controller -> prepared_insert('medicalpexam',$pexamdata);
              $pexamID = $res['lastID'];
              $result = $res['insert'];

              if($pexamObj->checkGenitals() == 0){
                  //female
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('MedicalGenFemale',$gendata);
                  $result = $res['insert'];

              } elseif($pexamObj->checkGenitals() == 1){
                  //male
                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('MedicalGenMale',$gendata);
                  $result = $res['insert'];

              } elseif($pexamObj->checkGenitals() == 2){
                  //other
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('MedicalGenFemale',$gendata);
                  $result = $res['insert'];

                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('MedicalGenMale',$gendata);
                  $result = $res['insert'];
              }
            }else {
              echo "There already is a Physical Examination Entry for this Patient.";
            }
          }else {
            $result = $controller -> prepared_update('medicalpexam',$pexamdata);

            if($pexamObj->checkGenitals() === 0){
              //female
              $pexamdataF = $pexamObj->getParamsFemale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $result = $controller -> prepared_update('MedicalGenFemale',$pexamdataF);
              }else {
                $pexamdataF['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('MedicalGenFemale',$pexamdataF);
                $result = $res['insert'];
              }
            }elseif($pexamObj->checkGenitals() === 1){
              //male
              $pexamdataM = $pexamObj->getParamsMale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $result = $controller -> prepared_update('MedicalGenMale',$pexamdataM);
              }else {
                $pexamdataM['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('MedicalGenMale',$pexamdataM);
                $result = $res['insert'];
              }

            } elseif($pexamObj->checkGenitals() === 2){
              //other
              $pexamdataF = $pexamObj->getParamsFemale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $result = $controller -> prepared_update('MedicalGenFemale',$pexamdataF);
              }else {
                $pexamdataF['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('MedicalGenFemale',$pexamdataF);
                $result = $res['insert'];
              }
              $pexamdataM = $pexamObj->getParamsMale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $result = $controller -> prepared_update('MedicalGenMale',$pexamdataM);
              }else {
                $pexamdataM['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('MedicalGenMale',$pexamdataM);
                $result = $res['insert'];
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
