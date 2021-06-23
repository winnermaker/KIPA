<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_COOKIE["medicalIDCookie"])){
        $pregnancyObj = new pregnancy();
        $pregdata = $pregnancyObj->getPregnancyMain();
        if (!$pregnancyObj->checkPregnancyID()) {
          $check = $controller->checkIfEntryExsits('medicalpregnancymain',$_COOKIE["medicalIDCookie"],'fk_MedicalID');
          if(!$check){
            $insertMain = false;
            $insertPresent = false;
            $insertPrevious = false;
            $pregdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
            $motherID = $controller -> prepared_insert('medicalpregnancymain',$pregdata,$insertMain);
            if ($pregnancyObj->checkPresentPregnancy()) {
              $pregdata = $pregnancyObj->getPresentPregnancy();
              $pregdata['fk_MotherID'] = $motherID;
              $controller -> prepared_insert('medicalpresentpregnancy',$pregdata,$insertPresent);
            }
            if ($pregnancyObj->checkPreviousPregnancy()) {
              $pregdata = $pregnancyObj->getPreviousPregnancy();
              for($i=0;$i<count($pregdata);$i++){
                $pregdata[$i]['fk_MotherID'] = $motherID;
                $controller -> prepared_insert('medicalpregnancychilddata',$pregdata[$i],$insertPrevious);
              }
            }

            if(!$insertMain && !$insertPresent && !$insertPrevious){
              $result='<div class="alert alert-danger">Wrong!!! The record could not be inserted</div>';
            } elseif($insertMain || $insertPresent || $insertPrevious){
              $result='<div class="alert alert-success">Perfect !!! The record was successfully inserted</div>';
            }
          }else {
            $result='<div class="alert alert-danger">There already is a Pregnancy Entry for this Patient.</div>';
          }
        }else {
          $controller -> prepared_update('medicalpregnancymain',$pregdata);
          if ($pregnancyObj->checkPresentPregnancy()) {
            $pregdataP = $pregnancyObj->getPresentPregnancy();
            $count = (int) $controller->getCountPregnancyPresentData($pregdata['MotherID']);
            if($count){
              $controller -> prepared_update('medicalpresentpregnancy',$pregdataP);
            }else {
              $pregdataP['fk_MotherID'] =  $pregdata['MotherID'];
              $controller -> prepared_insert('medicalpresentpregnancy',$pregdataP);
            }
          }
          if ($pregnancyObj->checkPreviousPregnancy()) {
            $pregdataP = $pregnancyObj->getPreviousPregnancy();
            $insertorupdate[0] = false;
            for($a=0; $a < count($pregdataP); $a++) {
              $insertorupdate[$a] = false;
            }
            $count = (int) $controller->getCountPregnancyPreviousData($pregdata['MotherID']);
            for ($k=0; $k < $count; $k++) {
              $insertorupdate[$k] = true;
            }
            for($i=0;$i<count($pregdataP);$i++){
              if($insertorupdate[$i]){
                $controller -> prepared_update('medicalpregnancychilddata',$pregdataP[$i]);
              }else{
                $pregdataP[$i]['fk_MotherID'] =  $pregdata['MotherID'];
                $controller -> prepared_insert('medicalpregnancychilddata',$pregdataP[$i]);
              }
            }
          }
        }
      }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $pregnancyData = $controller->getPregnancyMainData($_GET['medicalID']);
        if(!empty($pregnancyData)){
          $presentPregnancy = $controller->getPregnancyPresentData($pregnancyData['MotherID']);
          $previousData = $controller->getPregnancyPreviousData($pregnancyData['MotherID']);
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
