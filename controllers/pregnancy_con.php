<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pregnancyObj = new pregnancy();
        $pregdata = $pregnancyObj->getPregnancyMain();
        if (!$pregnancyObj->checkPregnancyID()) {
          $pregdata['fk_MedicalID']=$_COOKIE["medicalIDCookie"];
          $motherID = $controller -> prepared_insert('medicalpregnancymain',$pregdata);
          echo "present";
          var_dump($pregnancyObj->checkPresentPregnancy());
          echo "previous";
          var_dump($pregnancyObj->checkPreviousPregnancy());
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
        }


    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
