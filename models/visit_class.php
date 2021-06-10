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
        private $arrayVisit = array();

        public function __construct(){
            $this->visitID = !empty($_POST['visitID']) ? $_POST['visitID'] : null;
            $this->visitDate = !empty($_POST['visitDate']) ? $_POST['visitDate'] : null;
            $this->visitType = !empty($_POST['visitType']) ? $_POST['visitType'] : null;
            $this->examLocation = !empty($_POST['examLocation']) ? $_POST['examLocation'] : null;
            $this->reviewDate = !empty($_POST['reviewDate']) ? $_POST['reviewDate'] : null;
            $this->excause = !empty($_POST['excause']) ? $_POST['excause'] : null;
            $this->presentComplaint = !empty($_POST['presentComplaint']) ? $_POST['presentComplaint'] : null;
            $this->historyOfPresentComplaint = !empty($_POST['historyOfPresentComplaint']) ? $_POST['historyOfPresentComplaint'] : null;
            $this->pe = !empty($_POST['pe']) ? $_POST['pe'] : null;
            $this->plan = !empty($_POST['plan']) ? $_POST['plan'] : null;
            $this->medication = !empty($_POST['medication']) ? $_POST['medication'] : null;
            $this->diagnosis = !empty($_POST['diagnosis']) ? $_POST['diagnosis'] : null;
            $this->remarks = !empty($_POST['remarks']) ? $_POST['remarks'] : null;

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
            if(is_null($this->visitID)){
                return false;
            } else {
                return true;
            }
        }
    }
?>
