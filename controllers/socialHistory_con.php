<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/socialHistory_view.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/socialHistory_class.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $socialhxObj = new socialhistory();
        $socialhxObj->printParams();
        
    }
?>