<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/vaccination_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vaccinationObj = new vaccination();

        $vaccdata = $vaccinationObj->getParams();
        $vaccdates = $vaccinationObj->getParamsDates();
        $data = Array();

        if (!$vaccinationObj->checkVaccinationID()) {
          $fk_VaccID = array();
          for($i=0; $i < count($vaccdata); $i++) {
            $vaccdata[$i]['fk_MedicalID'] = $_COOKIE["medicalIDCookie"];
            $fk_VaccID[$i] = $controller->prepared_insert('medicalvacc',$vaccdata[$i]);
          }

          for($i=0; $i < count($vaccdates); $i++) {
            $data['fk_VaccID'] = $fk_VaccID[$i];
            $data['VaccDate'] = $vaccdates[$i]['firstVaccDate'];
            $controller->prepared_insert('medicalvaccdate',$data);
            
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
            if ($vaccdates[$i]['fifthVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['fifthVaccDate'];
              $controller->prepared_insert('medicalvaccdate',$data);
            }
          }
        }
        else {
          for($i=0; $i < count($vaccdata); $i++) {
            $fk_VaccID[$i] = $controller->prepared_update('medicalvacc',$vaccdata[$i]);
          }

          for($i=0; $i < count($vaccdates); $i++) {
            $data['fk_VaccID'] = $fk_VaccID[$i];
            $data['VaccDate'] = $vaccdates[$i]['firstVaccDate'];
            $controller->prepared_update('medicalvaccdate',$data);
            if ($vaccdates[$i]['secondVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['secondVaccDate'];
              $controller->prepared_update('medicalvaccdate',$data);
            }
            if ($vaccdates[$i]['thirdVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['thirdVaccDate'];
              $controller->prepared_update('medicalvaccdate',$data);
            }
            if ($vaccdates[$i]['fourthVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['fourthVaccDate'];
              $controller->prepared_update('medicalvaccdate',$data);
            }
            if ($vaccdates[$i]['fifthVaccDate'] != "") {
              $data['VaccDate'] = $vaccdates[$i]['fifthVaccDate'];
              $controller->prepared_update('medicalvaccdate',$data);
            }
          }

        }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/vaccination_view.php";
?>
