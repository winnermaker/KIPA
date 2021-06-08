<?php
    class visit{
        private $visitID;
        private $visitDate;
        private $visitType;
        private $examLocation;
        private $reviewDate;
        private $excause;
        private $presentComplaint;
        private $historyOfPresentComplaint;
        private $pe;
        private $plan;
        private $medication;
        private $diagnosis;
        private $remarks;
        private  $arrayVisit = array();

        public function __construct(){
            $this->visitID = isset($_POST['visitID']) ? $_POST['visitID'] : null;
            $this->visitDate = isset($_POST['visitDate']) ? $_POST['visitDate'] : null;
            $this->visitType = isset($_POST['visitType']) ? $_POST['visitType'] : null;
            $this->examLocation = isset($_POST['examLocation']) ? $_POST['examLocation'] : null;
            $this->reviewDate = isset($_POST['reviewDate']) ? $_POST['reviewDate'] : null;
            $this->excause = isset($_POST['excause']) ? $_POST['excause'] : null;
            $this->presentComplaint = isset($_POST['presentComplaint']) ? $_POST['presentComplaint'] : null;
            $this->historyOfPresentComplaint = isset($_POST['historyOfPresentComplaint']) ? $_POST['historyOfPresentComplaint'] : null;
            $this->pe = isset($_POST['pe']) ? $_POST['pe'] : null;
            $this->plan = isset($_POST['plan']) ? $_POST['plan'] : null;
            $this->medication = isset($_POST['medication']) ? $_POST['medication'] : null;
            $this->diagnosis = isset($_POST['diagnosis']) ? $_POST['diagnosis'] : null;
            $this->remarks = isset($_POST['remarks']) ? $_POST['remarks'] : null;

            $this->paramsToArray();

        }

        public function paramsToArray(){
            $this->arrayVisit['visitID'] = $this->visitID;
            $this->arrayVisit['VisitDate'] = $this->visitDate;
            $this->arrayVisit['VisitType'] = $this->visitType;
            $this->arrayVisit['ExLocation'] = $this->examLocation;
            $this->arrayVisit['RVD'] = $this->reviewDate;
            $this->arrayVisit['ExCause'] = $this->excause;
            $this->arrayVisit['PresComplaint'] = $this->presentComplaint;
            $this->arrayVisit['HistPresComplaint'] = $this->historyOfPresentComplaint;
            $this->arrayVisit['PE'] = $this->pe;
            $this->arrayVisit['Plan'] = $this->plan;
            $this->arrayVisit['Medication'] = $this->medication;
            $this->arrayVisit['Diagnosis'] = $this->diagnosis;
            $this->arrayVisit['Remarks'] = $this->remarks;
        }

        public function printParams(){
            foreach ($this->arrayVisit as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayVisit;
        }

        public function checkVisitID(){
            if($this->visitID === ""){
                return false;
            } else {
                return true;
            }
        }
    }
?>
