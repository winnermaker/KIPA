<?php
    class pregnancy{
        private $pregnancyID;
        private $entryDate;
        private $gravida;
        private $para;
        private $alive;
        private $dead;
        private $top;

        private $gestationalAge;
        private $estimatedDateOfDelivery;
        private $antenatalClinikAttendanceRadios;
        private $problems;
        private $pregnancyRemarks;

        private $genderpregnancyRadios;
        private $name;
        private $dateofBirth;
        private $eventsDuringPregnancy;
        private $durationOfLabor;
        private $spont_CS_forceps;
        private $healthyRadios;
        private $childrenProblems;
        private $Remarks;

        public  $arrayPregnancy = array();

        public function __construct(){
            $this->pregnancyID = isset($_POST['pregnancyID']) ? $_POST['pregnancyID'] : null;
            $this->entryDate = isset($_POST['entryDate']) ? $_POST['entryDate'] : null;
            $this->gravida = isset($_POST['gravida']) ? $_POST['gravida'] : null;
            $this->para = isset($_POST['para']) ? $_POST['para'] : null;
            $this->alive = isset($_POST['alive']) ? $_POST['alive'] : null;
            $this->dead = isset($_POST['dead']) ? $_POST['dead'] : null;
            $this->top = isset($_POST['top']) ? $_POST['top'] : null;
            $this->gestationalAge = isset($_POST['gestationalAge']) ? $_POST['gestationalAge'] : null;
            $this->estimatedDateOfDelivery = isset($_POST['estimatedDateOfDelivery']) ? $_POST['estimatedDateOfDelivery'] : null;
            $this->antenatalClinikAttendanceRadios = isset($_POST['antenatalClinikAttendanceRadios']) ? $_POST['antenatalClinikAttendanceRadios'] : null;
            $this->getRadioValue($this->antenatalClinikAttendanceRadios);

            $this->problems = isset($_POST['problems']) ? $_POST['problems'] : null;
            $this->pregnancyRemarks = isset($_POST['pregnancyRemarks']) ? $_POST['pregnancyRemarks'] : null;
            $this->genderpregnancyRadios = isset($_POST['genderpregnancyRadios']) ? $_POST['genderpregnancyRadios'] : null;
            $this->getGenderRadioValue($this->genderpregnancyRadios);

            $this->name = isset($_POST['name']) ? $_POST['name'] : null;
            $this->dateofBirth = isset($_POST['dateofBirth']) ? $_POST['dateofBirth'] : null;
            $this->eventsDuringPregnancy = isset($_POST['eventsDuringPregnancy']) ? $_POST['eventsDuringPregnancy'] : null;
            $this->durationOfLabor = isset($_POST['durationOfLabor']) ? $_POST['durationOfLabor'] : null;
            $this->spont_CS_forceps = isset($_POST['spont_CS_forceps']) ? $_POST['spont_CS_forceps'] : null;
            $this->healthyRadios = isset($_POST['healthyRadios']) ? $_POST['healthyRadios'] : null;
            $this->getRadioValue($this->healthyRadios);
            $this->childrenProblems = isset($_POST['childrenProblems']) ? $_POST['childrenProblems'] : null;
            $this->Remarks = isset($_POST['Remarks']) ? $_POST['Remarks'] : null;

            $this->paramsToArray();

        }

        private function getGenderRadioValue(&$radioValue){
            if($radioValue === "option1"){
                $radioValue = "m";
            } elseif($radioValue === "option2"){
                $radioValue = "f";
            } elseif($radioValue === "option3")
                $radioValue = "x";
            else{
                $radioValue = null;
            }
        }

        private function getRadioValue(&$radioValue){
            if($radioValue === "option1"){
                $radioValue = "Yes";
            } elseif($radioValue === "option2"){
                $radioValue = "No";
            } else{
                $radioValue = null;
            }
        }

        public function paramsToArray(){
            $this->arrayPregnancy['pregnancyID'] = $this->pregnancyID;
            $this->arrayPregnancy['entryDate'] = $this->entryDate;
            $this->arrayPregnancy['gravida'] = $this->gravida;
            $this->arrayPregnancy['para'] = $this->para;
            $this->arrayPregnancy['alive'] = $this->alive;
            $this->arrayPregnancy['dead'] = $this->dead;
            $this->arrayPregnancy['top'] = $this->top;
            $this->arrayPregnancy['gestationalAge'] = $this->gestationalAge;
            $this->arrayPregnancy['estimatedDateOfDelivery'] = $this->estimatedDateOfDelivery;
            $this->arrayPregnancy['antenatalClinikAttendanceRadios'] = $this->antenatalClinikAttendanceRadios;
            $this->arrayPregnancy['problems'] = $this->problems;
            $this->arrayPregnancy['pregnancyRemarks'] = $this->pregnancyRemarks;
            $this->arrayPregnancy['genderpregnancyRadios'] = $this->genderpregnancyRadios;
            $this->arrayPregnancy['name'] = $this->name;
            $this->arrayPregnancy['dateofBirth'] = $this->dateofBirth;
            $this->arrayPregnancy['eventsDuringPregnancy'] = $this->eventsDuringPregnancy;
            $this->arrayPregnancy['durationOfLabor'] = $this->durationOfLabor;
            $this->arrayPregnancy['spont_CS_forceps'] = $this->spont_CS_forceps;
            $this->arrayPregnancy['healthyRadios'] = $this->healthyRadios;
            $this->arrayPregnancy['childrenProblems'] = $this->childrenProblems;
            $this->arrayPregnancy['Remarks'] = $this->Remarks;

        }

        public function printParams(){
            foreach ($this->arrayPregnancy as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayPregnancy;
        }

        public function checkPregnancyID(){
            if($this->pregnancyID === ""){
                return false;
            } else {
                return true;
            }
        }
    }
?>
