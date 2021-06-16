<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/medicalMain_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $medicalObj = new medicalmain();
        $data = $medicalObj->getParams();
        if (!$medicalObj->checkMedicalMainID()) {
          $data['fk_ChildrenID'] = $_COOKIE["childIDCookie"];
          $controller -> prepared_insert('medicalmain',$data);
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
