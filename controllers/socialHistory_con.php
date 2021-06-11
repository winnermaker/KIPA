<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/socialHistory_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $socialHistoryObj = new socialhistory();
        $socialData = $socialHistoryObj->getParams();

        if(!$socialHistoryObj->checkSocialHistoryID()){
          $socialData['fk_ChildrenID']=$_COOKIE["childIDCookie"];
          $socialID = $controller -> prepared_insert('socialhistory',$socialData);
          $socialSibsData = $socialHistoryObj->getAllSiblings();

          if ($socialHistoryObj->checkSiblings()) {
            for($i=0; $i < count($socialSibsData); $i++) {
              $socialSibsData[$i]['fk_SocialID'] = $socialID;
              $controller->prepared_insert('socialsiblings',$socialSibsData[$i]);
            }
          }
        }
        else {
          $controller -> prepared_update('socialhistory',$socialData);
          if ($socialHistoryObj->checkSiblings()) {
            for($i=0; $i < count($socialSibsData); $i++) {
              $controller->prepared_update('socialsiblings',$socialSibsData[$i]);
            }
          }
        }

    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/socialHistory_view.php";
?>
