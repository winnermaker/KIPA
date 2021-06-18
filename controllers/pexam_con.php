<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pexam_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pexamObj = new pexam();
        $pexamdata = $pexamObj->getParams();
        if(isset($_COOKIE["medicalIDCookie"])){
          if (!$pexamObj->checkPexamID()) {
            $pexamdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
            $pexamID = $controller -> prepared_insert('medicalpexam',$pexamdata);

            if($pexamObj->checkGenitals() == 0){
                //female
                $gendata = $pexamObj->getParamsFemale();
                $gendata['fk_PEXAMID']=$pexamID;
                $controller -> prepared_insert('MedicalGenFemale',$gendata);

            } elseif($pexamObj->checkGenitals() == 1){
                //male
                $gendata = $pexamObj->getParamsMale();
                $gendata['fk_PEXAMID']=$pexamID;
                $controller -> prepared_insert('MedicalGenMale',$gendata);

            } elseif($pexamObj->checkGenitals() == 2){
                //other
                $gendata = $pexamObj->getParamsFemale();
                $gendata['fk_PEXAMID']=$pexamID;
                $controller -> prepared_insert('MedicalGenFemale',$gendata);

                $gendata = $pexamObj->getParamsMale();
                $gendata['fk_PEXAMID']=$pexamID;
                $controller -> prepared_insert('MedicalGenMale',$gendata);
            }
          }else {
            $controller -> prepared_update('medicalpexam',$pexamdata);

            if($pexamObj->checkGenitals() === 0){
                //female
                $pexamdata = $pexamObj->getParamsFemale();
                $controller -> prepared_update('MedicalGenFemale',$pexamdata);

            } elseif($pexamObj->checkGenitals() === 1){
                //male
                $pexamdata = $pexamObj->getParamsMale();
                $controller -> prepared_update('MedicalGenMale',$pexamdata);

            } elseif($pexamObj->checkGenitals() === 2){
                //other
                $pexamdata = $pexamObj->getParamsFemale();
                $controller -> prepared_update('MedicalGenFemale',$pexamdata);
                $pexamdata = $pexamObj->getParamsMale();
                $controller -> prepared_update('MedicalGenMale',$pexamdata);
            }
          }
        }
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $pexamData = $controller->getPexamData($_GET['medicalID']);
        if(!empty($pexamData)){
          $pexamDataM = $controller->getGenMData($pexamData['PEXAMID']);
          $pexamDataF = $controller->getGenFData($pexamData['PEXAMID']);
        }
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pexam_view.php";
?>
