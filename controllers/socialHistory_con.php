<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/socialHistory_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $socialHistoryObj = new socialhistory();
        $data = $socialHistoryObj->getParams();
        $socialHistoryObj->printAllSiblings();

        if(!$socialHistoryObj->checkSocialHistoryID()){
          $data['fk_ChildrenID']=$_COOKIE["childIDCookie"];
          $socialID = $controller -> prepared_insert('socialhistory',$data);
          $sibsData = $socialHistoryObj->getAllSiblings();

          if ($socialHistoryObj->checkSiblings()) {
            for($i=0; $i < count($socialSibsData); $i++) {
              $sibsData[$i]['fk_SocialID'] = $socialID;
              $controller->prepared_insert('socialsiblings',$sibsData[$i]);
            }
          }
        }
        else {
          $controller -> prepared_update('socialhistory',$data);
          if ($socialHistoryObj->checkSiblings()) {
            for($i=0; $i < count($sibsData); $i++) {
              $controller->prepared_update('socialsiblings',$sibsData[$i]);
            }
          }
        }
      }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_GET['childrenID'] !== "false"){
          $socialData = $controller->getSocialHist($_GET['childrenID']);
          if((int)$socialData['siblings']){
            $socialSibsData = $controller->getSocialSibling($socialData['SocialID']);
            echo "Test";
          }
        }
      }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/socialHistory_view.php";
?>
