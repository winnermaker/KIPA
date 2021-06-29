<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/registration_class.php";


  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $regObj = new registration();
    $data = $regObj->getParams();

    if($regObj->checkSamePassword()){
      try {
        $result = $controller->registration("userdetails",$data);
        if(isset($result['registerMsg'])){
          $message = $result['registerMsg'];
          echo "<script type='text/javascript'>alert('$message');</script>";
          header("location:login_con.php"); //return to login page
        }elseif (isset($result['error'])) {
          $message = $result['error'];
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
      } catch (Exception $e) {

      }

    }else {
      $message = "the passwords are not the same";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

  }

  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/registration_view.php";

?>
