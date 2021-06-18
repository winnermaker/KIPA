<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $patientObj = new patient();
      $controller->getAllChildern();
      $data = $patientObj->getParams();
      if(isset($_FILES['customFile'])){
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
        $controller -> prepared_insert('childrenmain',$data);
      }else {
        $controller -> prepared_update('childrenmain',$data);
      }

    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_GET['childrenID'])){
        $childData = $controller->getChildData($_GET['childrenID']);
        setcookie ("childIDCookie" , (int)$_GET['childrenID']);
        if(isset($_GET['medicalID'])){
          setcookie ("medicalIDCookie" , (int)$_GET['medicalID']);
        }
        if(isset($childData['Picture'])){
          $path = $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/img";
          $image = $childData['Picture'];
          $name = $childData['PicName'];
         // option 2 (oneliner)
         //file_put_contents($path."/".$name, base64_decode($image));
        }
    }
  }

  function fileUploadCheck($data){
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/img/";
    $target_file = $target_dir . basename($_FILES['customFile']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['customFile']['tmp_name']);
    if($check !== false) {
      //echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      //echo "File is not an image.";
      $uploadOk = 0;
    }
    define('KB', 1024);
    define('MB', 1048576);
    // Check file size
    if ($_FILES["customFile"]["size"] > 16*MB) {
    //  echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    return $uploadOk;
  }

  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/patient_view.php";

?>
