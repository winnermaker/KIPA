<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/model/medicalMain_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/autologout_con.php";


    if(isset($_COOKIE["childIDCookie"])){
      $medicalData = $controller->getmedicaldata($_COOKIE["childIDCookie"]);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $medicalObj = new medicalmain();
        $data = $medicalObj->getParams();
        if (!$medicalObj->checkMedicalMainID()){
          $check = $controller->checkIfEntryExsits('medicalmain', $_COOKIE["childIDCookie"], 'fk_ChildrenID');
          $data['fk_ChildrenID'] = $_COOKIE["childIDCookie"];
          if(!$check){
            $res = $controller -> prepared_insert('medicalmain',$data);
            $result = $res['insert'];
          }else {
            $result = '<div class="alert alert-danger">There already is a Medical Main Entry for this Patient.<br></div>';
          }

        }else {
          $result = $controller -> prepared_update('medicalmain',$data);
        }
        if(isset($_COOKIE["childIDCookie"])){
          $medicalData = $controller->getmedicaldata($_COOKIE["childIDCookie"]);
        }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_GET['medicalID']) && isset($_GET['childrenID']) && $_GET['medicalID'] !== "false" && 
      $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $medicalData = $controller->getmedicaldata($_GET['childrenID']);
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/medicalMain_view.php";
?>
