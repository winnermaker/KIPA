<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/pregnancy_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $pregnancyObj = new pregnancy();
        $pregdata = $pregnancyObj->getPregnancyMain();
        $pregnancyObj->printPreviousPregnancy();
        var_dump($pregnancyObj->checkPreviousPregnancy());
        if (!$pregnancyObj->checkPregnancyID()) {
          $pregdata['fk_MedicalID']=$_COOKIE["MedicalIDCookie"];
          $controller -> prepared_insert('MedicalPregnancyMain',$pregdata);
        }else {
          $controller -> prepared_update('MedicalPregnancyMain',$pregdata);
        }


    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/pregnancy_view.php";
?>
