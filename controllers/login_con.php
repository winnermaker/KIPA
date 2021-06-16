<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/login_class.php";

  session_start();

  if(isset($_SESSION["user_login"]))	//check condition user login not direct back to index.php page
  {
    header("location: welcome.php");
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $loginObj = new login();
    $data = $loginObj->getParams();
    try {
      $result = $controller->login('userdetails',$data);
      if(isset($result[''])){
        header("refresh:2; welcome.php");
      }
    } catch (\Exception $e) {

    }




  }


  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/login_view.php";

?>
