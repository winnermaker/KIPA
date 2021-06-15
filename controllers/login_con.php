<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/login_class.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $loginObj = new login();
    $data = $loginObj->getParams();

  }


  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/login_view.php";

?>
