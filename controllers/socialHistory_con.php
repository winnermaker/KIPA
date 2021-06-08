<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/socialHistory_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/socialHistory_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $socialHistoryObj = new socialhistory();
        $socialHistoryObj->printParams();
        $socialHistoryObj->printAllSiblings();
        var_dump($socialHistoryObj->checkSiblings());
        echo $socialHistoryObj->getNumberSiblings();
        $controller -> insertSocialHistory($socialHistoryObj);
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){}


?>
