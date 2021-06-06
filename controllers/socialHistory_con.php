<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/socialHistory_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/socialHistory_class.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $socialHistoryObj = new socialhistory();
        $socialHistoryObj->printParams();
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      
    }
?>