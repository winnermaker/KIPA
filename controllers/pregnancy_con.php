<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }
    if (isset($_COOKIE["medicalIDCookie"])) {
      $pregnancyData = $controller->getPregnancyMainData($_COOKIE["medicalIDCookie"]);
      if(!empty($pregnancyData)){
        $presentPregnancy = $controller->getPregnancyPresentData($pregnancyData['MotherID']);
        $previousData = $controller->getPregnancyPreviousData($pregnancyData['MotherID']);
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_COOKIE["medicalIDCookie"])){
        $pregnancyObj = new pregnancy();
        $pregdata = $pregnancyObj->getPregnancyMain();
        if (!$pregnancyObj->checkPregnancyID()) {
          $check = $controller->checkIfEntryExsits('medicalpregnancymain',$_COOKIE["medicalIDCookie"],'fk_MedicalID');
          if(!$check){
            $pregdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
            $res = $controller -> prepared_insert('medicalpregnancymain',$pregdata);
            $motherID = $res['lastID'];
            $result['preg'] = $res['insert'];
            if ($pregnancyObj->checkPresentPregnancy()) {
              $pregdataPres = $pregnancyObj->getPresentPregnancy();
              $pregdataPres['fk_MotherID'] = $motherID;
              $res = $controller -> prepared_insert('medicalpresentpregnancy',$pregdataPres);
              $result['present'] = $res['insert'];
            }
            if ($pregnancyObj->checkPreviousPregnancy()) {
              $pregdataP = $pregnancyObj->getPreviousPregnancy();
              for($i=0;$i<count($pregdataP);$i++){
                $pregdataP[$i]['fk_MotherID'] = $motherID;
                $res[$i] = $controller -> prepared_insert('medicalpregnancychilddata',$pregdataP[$i]);
                $result['previous'.$i] = $res[$i]['insert'];
              }
            }
          }else {
            $result['error'] = '<div class="alert alert-danger">There already is a Pregnancy Entry for this Patient.<br></div>';
          }
        }else {
          $result['preg'] = $controller -> prepared_update('medicalpregnancymain',$pregdata);
          if ($pregnancyObj->checkPresentPregnancy()) {
            $pregdataPres = $pregnancyObj->getPresentPregnancy();
            $count = (int) $controller->getCountPregnancyPresentData($pregdata['MotherID']);
            if($count){
              $result['present'] = $controller -> prepared_update('medicalpresentpregnancy',$pregdataPres);
            }else {
              $pregdataPres['fk_MotherID'] =  $pregdata['MotherID'];
              $res = $controller -> prepared_insert('medicalpresentpregnancy',$pregdataPres);
              $result['present'] = $res['insert'];
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
                $result['previous'.$i] = $controller -> prepared_update('medicalpregnancychilddata',$pregdataP[$i]);
              }else{
                $pregdataP[$i]['fk_MotherID'] =  $pregdata['MotherID'];
                $res[$i] = $controller -> prepared_insert('medicalpregnancychilddata',$pregdataP[$i]);
                $result['previous'.$i] = $res[$i]['insert'];
              }
            }
          }
        }
      }else {
        $result = '<div class="alert alert-danger"> You need to enter a Medical Main Record before submitting a Pregnancy Record.<br></div>';
      }
      if (isset($_COOKIE["medicalIDCookie"])) {
        $pregnancyData = $controller->getPregnancyMainData($_COOKIE["medicalIDCookie"]);
        if(!empty($pregnancyData)){
          $presentPregnancy = $controller->getPregnancyPresentData($pregnancyData['MotherID']);
          $previousData = $controller->getPregnancyPreviousData($pregnancyData['MotherID']);
        }
      }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_GET['medicalID']) && isset($_GET['childrenID']) && $_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $pregnancyData = $controller->getPregnancyMainData($_GET['medicalID']);
        if(!empty($pregnancyData)){
          $presentPregnancy = $controller->getPregnancyPresentData($pregnancyData['MotherID']);
          $previousData = $controller->getPregnancyPreviousData($pregnancyData['MotherID']);
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
