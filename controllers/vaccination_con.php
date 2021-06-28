<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/vaccination_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_COOKIE["medicalIDCookie"])){
        $vaccinationObj = new vaccination();
        $vaccdata = $vaccinationObj->getParams();
        $vaccdates = $vaccinationObj->getParamsDates();
        if (!$vaccinationObj->checkVaccinationID()){
          for($i=0; $i < count($vaccdata); $i++) {
            $vaccdata[$i]['fk_MedicalID'] = $_COOKIE["medicalIDCookie"];
            $res[$i] = $controller->prepared_insert('medicalvacc',$vaccdata[$i]);
            $fk_VaccID[$i] = $res[$i]['lastID'];
            $result['vacc'] = $res[$i]['insert'];
          }
          for($i=0; $i < count($vaccdates); $i++) {
            $data['fk_VaccID'] = $fk_VaccID[$i];
            if($vaccdates[$i]['firstVaccDate'] != ""){
              $data['VaccDate'] = $vaccdates[$i]['firstVaccDate'];
              $controller->prepared_insert('medicalvaccdate',$data);
            }
            if ($vaccdates[$i]['secondVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['secondVaccDate'];
              $controller->prepared_insert('medicalvaccdate',$data);
            }
            if ($vaccdates[$i]['thirdVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['thirdVaccDate'];
              $controller->prepared_insert('medicalvaccdate',$data);
            }
            if ($vaccdates[$i]['fourthVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['fourthVaccDate'];
              $controller->prepared_insert('medicalvaccdate',$data);
            }
          }
        }
        else {
          $index = 0;
          $insertorupdateVacc[0] = false;
          for($a=0; $a < count($vaccdata); $a++) {
            $insertorupdateVacc[$a] = false;
          }
          $count = (int) $controller->getCountVacc($_COOKIE["medicalIDCookie"]);
          for ($k=0; $k < $count; $k++) {
            $insertorupdateVacc[$k] = true;
          }
          for($i=0; $i < count($vaccdata); $i++) {
            if($insertorupdateVacc[$i]){
              $controller->prepared_update('medicalvacc',$vaccdata[$i]);
            }else {
              $vaccdata[$i]['fk_MedicalID'] = $_COOKIE["medicalIDCookie"];
              $fk_VaccIDUpdate[$index] = $controller->prepared_insert('medicalvacc',$vaccdata[$i]);
              $index++;
            }
          }
          $index = 0;
          $used = false;
          for($i=0; $i < count($vaccdates); $i++) {
            $insertorupdate = array("0"  => false, "1" => false, "2" => false, "3" => false);
            $count = (int) $controller->getCountVacDates($vaccdates[$i]['fk_VaccID']);
            for ($k=0; $k < $count; $k++) {
                $insertorupdate[$k] = true;
            }
            $data['fk_VaccID'] = $vaccdates[$i]['fk_VaccID'];
            if ($vaccdates[$i]['firstVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['firstVaccDate'];
              if($insertorupdate[0]){
                $data = array('VaccDateID' => $vaccdates[$i]['vaccDateID'])+$data;
                $controller->prepared_update('medicalvaccdate',$data);
              }else {
                unset($data['VaccDateID']);
                if(!empty($fk_VaccIDUpdate)){
                  $data['fk_VaccID'] = $fk_VaccIDUpdate[$index];
                  $used = true;
                }
                $controller->prepared_insert('medicalvaccdate',$data);
              }
            }
            if ($vaccdates[$i]['secondVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['secondVaccDate'];
              if($insertorupdate[1]){
                $data = array('VaccDateID' => $vaccdates[$i]['vaccDateID'])+$data; //add VaccDatID to top of array
                $controller->prepared_update('medicalvaccdate',$data);
              }else {
                unset($data['VaccDateID']);
                if(!empty($fk_VaccIDUpdate)){
                  $data['fk_VaccID'] = $fk_VaccIDUpdate[$index];
                  $used = true;
                }
                $controller->prepared_insert('medicalvaccdate',$data);
              }
            }
            if ($vaccdates[$i]['thirdVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['thirdVaccDate'];
              if($insertorupdate[2]){
                $data = array('VaccDateID' => $vaccdates[$i]['vaccDateID'])+$data;
                $controller->prepared_update('medicalvaccdate',$data);
              }else {
                unset($data['VaccDateID']);
                if(!empty($fk_VaccIDUpdate)){
                  $data['fk_VaccID'] = $fk_VaccIDUpdate[$index];
                  $used = true;
                }
                $controller->prepared_insert('medicalvaccdate',$data);
              }
            }
            if ($vaccdates[$i]['fourthVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['fourthVaccDate'];
              if($insertorupdate[3]){
                $data = array('VaccDateID' => $vaccdates[$i]['vaccDateID'])+$data;
                $controller->prepared_update('medicalvaccdate',$data);
              }else {
                unset($data['VaccDateID']);
                if(!empty($fk_VaccIDUpdate)){
                  $data['fk_VaccID'] = $fk_VaccIDUpdate[$index];
                  $used = true;
                }
                $controller->prepared_insert('medicalvaccdate',$data);
              }
              if($used){
                $index++;
                $used = false;
              }
            }
          }
        }
      }
      else {
        $result['error'] = '<div class="alert alert-danger"> You need to enter a Medical Main Record before submitting a Vaccination Record.<br></div>';
      }
      if (isset($_COOKIE["medicalIDCookie"])) {
        $vaccData = $controller->getVacc($_COOKIE["medicalIDCookie"]);
        for ($i=0; $i < count($vaccData); $i++) {
          $vaccDates = $controller->getVaccDates($vaccData[$i]['VaccID']);
          for ($k=0; $k < count($vaccDates); $k++) {
            $vaccData[$i]['VaccDateID'] = $vaccDates[$k]['VaccDateID'];
            $vaccData[$i]['VaccDate'.$k+1] = $vaccDates[$k]['VaccDate'];
          }
      }
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_GET['medicalID']) && isset($_GET['childrenID']) && $_GET['medicalID'] != "false" && $_GET['childrenID'] != "false" &&  $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $vaccData = $controller->getVacc($_GET['medicalID']);
        for ($i=0; $i < count($vaccData); $i++) {
          $vaccDates = $controller->getVaccDates($vaccData[$i]['VaccID']);
          for ($k=0; $k < count($vaccDates); $k++) {
            $vaccData[$i]['VaccDateID'] = $vaccDates[$k]['VaccDateID'];
            $vaccData[$i]['VaccDate'.$k+1] = $vaccDates[$k]['VaccDate'];
          }
        }
      }
    }
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/vaccination_view.php";
?>
