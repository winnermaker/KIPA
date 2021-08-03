<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }
    if (isset($_COOKIE["medicalIDCookie"]) && isset($_COOKIE["childIDCookie"])) {
      $visitData = $controller->getVisits($_COOKIE["medicalIDCookie"]);
      for ($i=0; $i < count($visitData); $i++) {
          $visitData[$i]['childrenID'] =  $_COOKIE["childIDCookie"];
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_GET['medicalID']) && isset($_GET['childrenID']) && $_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $visitData = $controller->getVisits($_GET['medicalID']);
        for ($i=0; $i < count($visitData); $i++) {
            $visitData[$i]['childrenID'] =  $_GET['childrenID'];
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitData_view.php";
?>
