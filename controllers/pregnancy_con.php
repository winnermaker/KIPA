<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pregnancyObj = new pregnancy();
        $pregdata = $pregnancyObj->getPregnancyMain();
        var_dump($pregnancyObj->checkPreviousPregnancy());
        if (!$pregnancyObj->checkPregnancyID()) {
          $pregdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
          $motherID = $controller -> prepared_insert('medicalpregnancymain',$pregdata);
          if ($pregnancyObj->checkPresentPregnancy()) {
            $pregdata = $pregnancyObj->getPresentPregnancy();
            $pregdata['fk_MotherID'] = $motherID;
            $controller -> prepared_insert('medicalpresentpregnancy',$pregdata);
          }
          if ($pregnancyObj->checkPreviousPregnancy()) {
            $pregdata = $pregnancyObj->getPreviousPregnancy();
            for($i=0;$i<count($pregdata);$i++){
              $pregdata[$i]['fk_MotherID'] = $motherID;
              $controller -> prepared_insert('medicalpregnancychilddata',$pregdata[$i]);
            }
          }
        }else {
          $controller -> prepared_update('medicalpregnancymain',$pregdata);
          if ($pregnancyObj->checkPresentPregnancy()) {
            $pregdata = $pregnancyObj->getPresentPregnancy();
            $controller -> prepared_update('medicalpresentpregnancy',$pregdata);
          }
          if ($pregnancyObj->checkPreviousPregnancy()) {
            $pregdata = $pregnancyObj->getPreviousPregnancy();
            for($i=0;$i<count($pregdata);$i++){
              $controller -> prepared_update('medicalpregnancychilddata',$pregdata[$i]);
            }
          }
        }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      if($_GET['medicalID'] !== "false" && $_GET['childrenID'] !== "false" && $_GET['medicalID'] != "undefined" && $_GET['childrenID'] != "undefined"){
        $pregnancyData = $controller->getPregnancyMainData($_GET['medicalID']);
        $presentPregnancy = $controller->getPregnancyPresentData($pregnancyData['MotherID']);
        $previousData = $controller->getPregnancyPreviousData($pregnancyData['MotherID']);
      }
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
