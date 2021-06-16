<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";



    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['filterRadios'])){
            $filterRadios = $_POST['filterRadios'];
            if($filterRadios === "option1"){
                $childData = $controller->getChildDataForListOfPatients();
                $medical = $controller->getMedicalDataForListOfPatients();
                foreach($childData as $key => $value){
                  foreach($medical as $value2){
                    if($value['ChildrenID'] === $value2['ChildrenID']){
                      $childData[$key]['MedicalID'] = $value2['MedicalID'];
                    }
                  }
                }
                $check = 1;
            } else if($filterRadios === "option3"){
                $childDataVaccSoon = $controller->getAllChildernVaccSoon();
                $check = 3;
            } else if($filterRadios === "option2"){
                $childDataReviewSoon = $controller->getAllChildernReviewSoon();
                $check = 2;
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $childData = $controller->getChildDataForListOfPatients();
    }





    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/listOfPatients_view.php";
?>
