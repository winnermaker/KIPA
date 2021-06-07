<?php
    class visit{
        private $visitDate;
        private $visitType;
        private $reviewDate;
        private $excause;
        private $presentComplaint;
        private $historyOfPresentComplaint;
        private $pe;
        private $plan;
        private $medication;
        private $diagnosis;
        private $remarks;
        public  $arrayVisit = array();

        public function __construct(){
            $this->visitDate = isset($_POST['visitDate']) ? $_POST['visitDate'] : null;
            $this->visitType = isset($_POST['visitType']) ? $_POST['visitType'] : null;
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
            $this->arrayVisit['visitDate'] = $this->visitDate;
            $this->arrayVisit['visitType'] = $this->visitType;
            $this->arrayVisit['reviewDate'] = $this->reviewDate;
            $this->arrayVisit['excause'] = $this->excause;
            $this->arrayVisit['presentComplaint'] = $this->presentComplaint;
            $this->arrayVisit['historyOfPresentComplaint'] = $this->historyOfPresentComplaint;
            $this->arrayVisit['pe'] = $this->pe;
            $this->arrayVisit['plan'] = $this->plan;
            $this->arrayVisit['medication'] = $this->medication;
            $this->arrayVisit['diagnosis'] = $this->diagnosis;
            $this->arrayVisit['remarks'] = $this->remarks;
        }

        public function printParams(){
            foreach ($this->arrayVisit as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayVisit;
        }
    }
?>