<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['filterRadios'])){
            $filterRadios = $_POST['filterRadios'];

            if($filterRadios === "option1"){
                $childData = $controller->getChildDataForListOfPatients();
            } else if($filterRadios === "option3"){
                $childData = $controller->getAllChildernVaccSoon();
            } else if($filterRadios === "option2"){
                $childData = $controller->getAllChildernReviewSoon();
            }
        }
    }




    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/listOfPatients_view.php";
?>
