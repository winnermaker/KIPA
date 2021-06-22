<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/medicalMain_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $medicalObj = new medicalmain();
        $data = $medicalObj->getParams();
        if (!$medicalObj->checkMedicalMainID()) {
          $check = $controller->checkIfEntryExsits('medicalmain', $_COOKIE["childIDCookie"], 'fk_ChildrenID');
          $data['fk_ChildrenID'] = $_COOKIE["childIDCookie"];
          if(!$check){
            $controller -> prepared_insert('medicalmain',$data);
          }else {
            echo "There already is a Medical Main Entry for this Patient.";
          }

        }else {
          $controller -> prepared_update('medicalmain',$data);
        }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $medicalData = $controller->getmedicaldata($_GET['childrenID']);
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/medicalMain_view.php";
?>
