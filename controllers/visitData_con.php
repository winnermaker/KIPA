<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false"){
        $visitData = $controller->getVisits();
      }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/visitData_view.php";
?>
