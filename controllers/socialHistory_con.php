<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/socialHistory_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

    if(!isset($_SESSION["user_login"])){
      header("location: login_con.php");
    }
    if(isset($_COOKIE["childIDCookie"])){
      $socialData = $controller->getSocialHist($_COOKIE["childIDCookie"]);
      if(isset($socialData['siblings']) && $socialData['siblings']){
        $socialSibsData = $controller->getSocialSibling($socialData['SocialID']);
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $socialHistoryObj = new socialhistory();
        $socialdata = $socialHistoryObj->getParams();

        if(!$socialHistoryObj->checkSocialHistoryID()){
          $check = $controller->checkIfEntryExsits('socialhistory', $_COOKIE["childIDCookie"],'fk_ChildrenID');
          if(!$check){
            $socialdata['fk_ChildrenID']=$_COOKIE["childIDCookie"];
            $res = $controller -> prepared_insert('socialhistory',$socialdata);
            $socialID = $res['lastID'];
            $result['social'] = $res['insert'];
            if ($socialHistoryObj->checkSiblings()){
              $sibsData = $socialHistoryObj->getAllSiblings();
              for($i=0; $i < count($sibsData); $i++) {
                $sibsData[$i]['fk_SocialID'] = $socialID;
                $res[$i] = $controller->prepared_insert('socialsiblings',$sibsData[$i]);
                $result['socialSibs'.$i] = $res[$i]['insert'];
              }
            }
          }else {
            $result['error'] ='<div class="alert alert-danger">There is already a Social History Entry for this Patient.</div>';
          }
        }
        else {
          $result['social'] = $controller -> prepared_update('socialhistory',$socialdata);
          if ($socialHistoryObj->checkSiblings()) {
            $sibsData = $socialHistoryObj->getAllSiblings();
            $insertorupdate[0] = false;
            for($a=0; $a < count($sibsData); $a++) {
              $insertorupdate[$a] = false;
            }
            $count = (int) $controller->getCountSocialSibling($socialdata['SocialID']);
            for ($k=0; $k < $count; $k++) {
              $insertorupdate[$k] = true;
            }
            for($i=0; $i < count($sibsData); $i++) {
              if ($insertorupdate[$i]) {
                $result['socialSibs'.$i] = $controller->prepared_update('socialsiblings',$sibsData[$i]);
              }else {
                $sibsData[$i]['fk_SocialID'] = $socialdata['SocialID'];
                $res[$i] = $controller->prepared_insert('socialsiblings',$sibsData[$i]);
                $result['socialSibs'.$i] = $res[$i]['insert'];
              }
            }
          }
        }
        if(isset($_COOKIE["childIDCookie"])){
          $socialData = $controller->getSocialHist($_COOKIE["childIDCookie"]);
          if(isset($socialData['siblings']) && $socialData['siblings']){
            $socialSibsData = $controller->getSocialSibling($socialData['SocialID']);
          }
        }
      }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET['childrenID']) && $_GET['childrenID'] !== "false" && $_GET['childrenID'] != "undefined"){
          $socialData = $controller->getSocialHist($_GET['childrenID']);
          if(isset($socialData['siblings']) && $socialData['siblings']){
            $socialSibsData = $controller->getSocialSibling($socialData['SocialID']);
          }
        }
      }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/socialHistory_view.php";
?>
