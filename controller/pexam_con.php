<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/model/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }
    if (isset($_COOKIE["medicalIDCookie"])) {
      $pexamData = $controller->getPexamData($_COOKIE["medicalIDCookie"]);
      if(!empty($pexamData)){
        $pexamDataM = $controller->getGenMData($pexamData['PEXAMID']);
        $pexamDataF = $controller->getGenFData($pexamData['PEXAMID']);
      }
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
              $res = $controller -> prepared_insert('medicalpexam',$pexamdata);
              $pexamID = $res['lastID'];
              $result['pexam'] = $res['insert'];

              if($pexamObj->checkGenitals() == 0){
                  //female
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('medicalgenfemale',$gendata);
                  $result['genf'] = $res['insert'];

              } elseif($pexamObj->checkGenitals() == 1){
                  //male
                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('medicalgenmale',$gendata);
                  $result['genm'] = $res['insert'];

              } elseif($pexamObj->checkGenitals() == 2){
                  //other
                  $gendata = $pexamObj->getParamsFemale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('medicalgenfemale',$gendata);
                  $result['genf'] = $res['insert'];

                  $gendata = $pexamObj->getParamsMale();
                  $gendata['fk_PEXAMID']=$pexamID;
                  $res = $controller -> prepared_insert('medicalgenmale',$gendata);
                  $result['genm'] = $res['insert'];
              }
            }else {
              $result['error'] = '<div class="alert alert-danger"> There already is a Physical Examination Entry for this Patient.<br></div>';
            }
          }else {
            $result['pexam'] = $controller -> prepared_update('medicalpexam',$pexamdata);

            if($pexamObj->checkGenitals() === 0){
              //female
              $pexamdataF = $pexamObj->getParamsFemale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $result['genf'] = $controller -> prepared_update('medicalgenfemale',$pexamdataF);
              }else {
                $pexamdataF['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('medicalgenfemale',$pexamdataF);
                $result['genf'] = $res['insert'];
              }
            }elseif($pexamObj->checkGenitals() === 1){
              //male
              $pexamdataM = $pexamObj->getParamsMale();
              $count = (int) $controller->getCountGenMData($pexamdata['PEXAMID']);
              if($count){
                $result['genm'] = $controller -> prepared_update('medicalgenmale',$pexamdataM);
              }else {
                $pexamdataM['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('medicalgenmale',$pexamdataM);
                $result['genm'] = $res['insert'];
              }

            } elseif($pexamObj->checkGenitals() === 2){
              //other
              $pexamdataF = $pexamObj->getParamsFemale();
              $count = (int) $controller->getCountGenFData($pexamdata['PEXAMID']);
              if($count){
                $result['genf'] = $controller -> prepared_update('medicalgenfemale',$pexamdataF);
              }else {
                $pexamdataF['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('medicalgenfemale',$pexamdataF);
                $result['genf'] = $res['insert'];
              }
              $pexamdataM = $pexamObj->getParamsMale();
              $count = (int) $controller->getCountGenMData($pexamdata['PEXAMID']);
              if($count){
                $result['genm'] = $controller -> prepared_update('medicalgenmale',$pexamdataM);
              }else {
                $pexamdataM['fk_PEXAMID'] = $pexamdata['PEXAMID'];
                $res = $controller -> prepared_insert('medicalgenmale',$pexamdataM);
                $result['genm'] = $res['insert'];
              }
            }
          }
        }else {
          $result['error'] = '<div class="alert alert-danger"> You need to enter a Medical Main Record before submitting a Physical Examination Record.<br></div>';
        }
        if (isset($_COOKIE["medicalIDCookie"])) {
          $pexamData = $controller->getPexamData($_COOKIE["medicalIDCookie"]);
          if(!empty($pexamData)){
            $pexamDataM = $controller->getGenMData($pexamData['PEXAMID']);
            $pexamDataF = $controller->getGenFData($pexamData['PEXAMID']);
          }
        }
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
      if(isset($_GET['medicalID']) && isset($_GET['childrenID']) && $_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $pexamData = $controller->getPexamData($_GET['medicalID']);
        if(!empty($pexamData)){
          $pexamDataM = $controller->getGenMData($pexamData['PEXAMID']);
          $pexamDataF = $controller->getGenFData($pexamData['PEXAMID']);
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
?>
