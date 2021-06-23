<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/visit_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_COOKIE["medicalIDCookie"])){
        $visitObj = new visit();
        $arrayVisitData = $visitObj->getParams();

        if (!$visitObj->checkVisitID()) {
          $insert = false;
          $arrayVisitData['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
          $controller -> prepared_insert('medicalvisits',$arrayVisitData,$insert);

          if($insert){    
            $result='<div class="alert alert-success">Perfect !!! The record was successfully inserted</div>';
          }
          else {
            $result='<div class="alert alert-danger">Wrong!!! The record could not be inserted</div>';
          }
          
        }else {
          $controller -> prepared_update('medicalvisits',$arrayVisitData);
        }
      }
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
      if($_GET['medicalID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['visitID'] != "undefined" ){
        $visitData = $controller->getVisitDiagnosticData($_GET['visitID']);
      }
    }
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitDiagnostic_view.php";
?>
