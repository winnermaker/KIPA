<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $patientObj = new patient();
        $controller->getAllChildern();
        if(!$patientObj->checkPatientID()){
         $childID  = $controller -> prepared_insert('childrenmain',$patientObj->getParams());
          if(!empty($childID)){
            echo "<script>";
            echo "alert('Datensatz wurde eingespeichert')";
            echo "</script>";
          }
        }else {
          $controller -> prepared_update('childrenmain',$patientObj->getParams());
        }

    } elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_GET['childrenID'])){
        $childData = $controller->getChildData($_GET['childrenID']);
        setcookie ("childIDCookie" , (int)$_GET['childrenID']);
        setcookie ("medicalIDCookie" , (int)$_GET['medicalID']);
      }
    }

  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";
?>
