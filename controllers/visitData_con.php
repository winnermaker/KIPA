<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false"){
        $visitData = $controller->getVisits($_GET['medicalID']);
        for ($i=0; $i < count($visitData); $i++) {
            $visitData[$i]['childrenID'] =  $_GET['childrenID'];
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitData_view.php";
?>
