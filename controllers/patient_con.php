<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

  if(!isset($_SESSION["user_login"])){
    header("location: login_con.php");
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $patientObj = new patient();
    $controller->getAllChildern();
    $data = $patientObj->getParams();
    if($_FILES['customFile']['name'] != ""){
      $upload = fileUploadCheck($data);
      if($upload){
        $pic = file_get_contents($_FILES["customFile"]["tmp_name"]);
        $data['Picture'] = $pic;
        $data['PicName'] = $_FILES["customFile"]["name"];
        $data['PicType'] = strtolower(pathinfo($_FILES['customFile']['name'],PATHINFO_EXTENSION));
      }else {
        $data['PicTaken'] = null;
        $data['Picture'] = null;
        $data['PicName'] = null;
        $data['PicType'] = null;
      }
    }
    if(!$patientObj->checkPatientID()){
      if (isset($_COOKIE['medicalIDCookie'])) {
          setcookie('medicalIDCookie',"" ,time() - 3600);
      }
      $res = $controller -> prepared_insert('childrenmain',$data);
      $result = $res['insert'];
    }
    else{
        $result = $controller -> prepared_update('childrenmain',$data);
      }
    if(isset($_COOKIE["childIDCookie"])){
      $childData = $controller->getChildData($_COOKIE["childIDCookie"]);
    }

  }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET['childrenID']) && $_GET['childrenID'] != 'false' && $_GET['childrenID'] != "undefined"){
      $childData = $controller->getChildData($_GET['childrenID']);
      setcookie ("childIDCookie" , (int)$_GET['childrenID']);
      if($_GET['medicalID'] !== "false" && $_GET['medicalID'] != "undefined" && isset($_GET['medicalID'])){
        setcookie ("medicalIDCookie" , (int)$_GET['medicalID']);
      }
    }
  }

  function fileUploadCheck($data){
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES['customFile']['name'],PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['customFile']['tmp_name']);
    if($check !== false) {
      //echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $result = '<div class="alert alert-danger"> The File you are trying to upload is not an image.<br></div>';
      $uploadOk = 0;
    }
    define('MB', 1048576);
    // Check file size
    if ($_FILES["customFile"]["size"] > 16*MB) {
        $result = '<div class="alert alert-danger"> The File you are trying to upload is to large. It can not be bigger than 16 MB<br></div>';
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $result = '<div class="alert alert-danger"> Only JPG, JPEG, PNG & GIF files are allowed.<br></div>';
      $uploadOk = 0;
    }
    return $uploadOk;
  }


  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";

?>
