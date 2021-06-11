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
        private $healthyRadios;
        private $arrayName = array();
        private $arrayDateOfBirth = array();
        private $arrayEventsPregnancy = array();
        private $arrayDurationOfLabor = array();
        private $arraySpontCSforceps = array();
        private $arrayChildrenProblems = array();
        private $arrayRemarks = array();

        private $arrayAllChilds = array();
        private $arrayPregnancy = array();
        private $arrayPresentPregnancy = array();

        public function __construct(){
            $this->pregnancyID = !empty($_POST['pregnancyID']) ? $_POST['pregnancyID'] : null;
            $this->entryDate = !empty($_POST['entryDate']) ? $_POST['entryDate'] : null;
            $this->gravida = !empty($_POST['gravida']) ? $_POST['gravida'] : null;
            $this->para = !empty($_POST['para']) ? $_POST['para'] : null;
            $this->alive = !empty($_POST['alive']) ? $_POST['alive'] : null;
            $this->dead = !empty($_POST['dead']) ? $_POST['dead'] : null;
            $this->top = !empty($_POST['top']) ? $_POST['top'] : null;

            $this->gestationalAge = !empty($_POST['gestationalAge']) ? $_POST['gestationalAge'] : null;
            $this->estimatedDateOfDelivery = !empty($_POST['estimatedDateOfDelivery']) ? $_POST['estimatedDateOfDelivery'] : null;
            $this->antenatalClinikAttendanceRadios = !empty($_POST['antenatalClinikAttendanceRadios']) ? $_POST['antenatalClinikAttendanceRadios'] : null;
            $this->getRadioValue($this->antenatalClinikAttendanceRadios);
            $this->problems = !empty($_POST['problems']) ? $_POST['problems'] : null;
            $this->pregnancyRemarks = !empty($_POST['pregnancyRemarks']) ? $_POST['pregnancyRemarks'] : null;

            $this->arrayName = isset($_POST['name']) ? $_POST['name'] : null;
            $this->arrayDateOfBirth = !empty($_POST['dateofBirth']) ? $_POST['dateofBirth'] : null;
            $this->arrayEventsPregnancy = !empty($_POST['eventsDuringPregnancy']) ? $_POST['eventsDuringPregnancy'] : null;
            $this->arrayDurationOfLabor = !empty($_POST['durationOfLabor']) ? $_POST['durationOfLabor'] : null;
            $this->arraySpontCSforceps = !empty($_POST['spont_CS_forceps']) ? $_POST['spont_CS_forceps'] : null;
            $this->arrayChildrenProblems = !empty($_POST['childrenProblems']) ? $_POST['childrenProblems'] : null;
            $this->arrayRemarks = !empty($_POST['Remarks']) ? $_POST['Remarks'] : null;


            $this->pregnancyMainToArray();
            $this->validatePreviousPregnancy();
            $this->presentPregnancyToArray();

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

        public function pregnancyMainToArray(){
            $this->arrayPregnancy['MotherID'] = $this->pregnancyID;
            $this->arrayPregnancy['entryDate'] = $this->entryDate;
            $this->arrayPregnancy['gravida'] = $this->gravida;
            $this->arrayPregnancy['para'] = $this->para;
            $this->arrayPregnancy['alive'] = $this->alive;
            $this->arrayPregnancy['dead'] = $this->dead;
            $this->arrayPregnancy['top'] = $this->top;

        }

        public function validatePreviousPregnancy(){
            for ($i=0; $i < count($this->arrayName); $i++) {
                $gender = "genderpregnancyRadios" . $i;
                $healthy = "healthyRadios" . $i;

                $this->genderpregnancyRadios = !empty($_POST[$gender]) ? $_POST[$gender] : null;
                $this->getGenderRadioValue($this->genderpregnancyRadios);

                $this->healthyRadios = !empty($_POST[$healthy]) ? $_POST[$healthy] : null;
                $this->getRadioValue($this->healthyRadios);

                $this->arrayName[$i] = !empty($this->arrayName[$i]) ? $this->arrayName[$i] : null;
                $this->arrayDateOfBirth[$i] = !empty($this->arrayDateOfBirth[$i]) ? $this->arrayDateOfBirth[$i] : null;
                $this->arrayEventsPregnancy[$i] = !empty($this->arrayEventsPregnancy[$i]) ? $this->arrayEventsPregnancy[$i] : null;
                $this->arrayDurationOfLabor[$i] = !empty($this->arrayDurationOfLabor[$i]) ? $this->arrayDurationOfLabor[$i] : null;
                $this->arraySpontCSforceps[$i] = !empty($this->arraySpontCSforceps[$i]) ? $this->arraySpontCSforceps[$i] : null;
                $this->arrayChildrenProblems[$i] = !empty($this->arrayChildrenProblems[$i]) ? $this->arrayChildrenProblems[$i] : null;
                $this->arrayRemarks[$i] = !empty($this->arrayRemarks[$i]) ? $this->arrayRemarks[$i] : null;

                if(!is_null($this->arrayName[$i]) || !is_null($this->arrayDateOfBirth[$i]) ||
                    !is_null($this->arrayEventsPregnancy[$i]) || !is_null($this->arrayDurationOfLabor[$i]) ||
                    !is_null($this->arraySpontCSforceps[$i]) || !is_null($this->arrayChildrenProblems[$i]) ||
                    !is_null($this->arrayRemarks[$i]) || !is_null($this->genderpregnancyRadios) || !is_null($this->healthyRadios))
                {
                $this->arrayAllChilds[] = [
                    'gender' => $this->genderpregnancyRadios,
                    'name' => $this->arrayName[$i],
                    'DOB' => $this->arrayDateOfBirth[$i],
                    'EvDurP' => $this->arrayEventsPregnancy[$i],
                    'durLabor' => $this->arrayDurationOfLabor[$i],
                    'spont_CS_forceps' => $this->arraySpontCSforceps[$i],
                    'healthy' => $this->healthyRadios,
                    'problems' => $this->arrayChildrenProblems[$i],
                    'remarks' => $this->arrayRemarks[$i],
                ];
            }
          }
        }

        public function presentPregnancyToArray(){
            $this->arrayPresentPregnancy['gestationalAge'] = $this->gestationalAge;
            $this->arrayPresentPregnancy['EstDelivery'] = $this->estimatedDateOfDelivery;
            $this->arrayPresentPregnancy['AntClinicAttend'] = $this->antenatalClinikAttendanceRadios;
            $this->arrayPresentPregnancy['problems'] = $this->problems;
            $this->arrayPresentPregnancy['Remarks'] = $this->pregnancyRemarks;
        }

        public function printPregnancyMain(){
            foreach ($this->arrayPregnancy as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function printPresentPregnancy(){
            foreach ($this->arrayPresentPregnancy as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function printPreviousPregnancy(){
            foreach($this->arrayAllChilds as $key => $row){
                foreach ($row as $index => $value){
                    echo $index . ": " . $value . "</br>";
                }
                echo "</br>";
            }
        }

        public function getPregnancyMain(){
            return $this->arrayPregnancy;
        }

        public function getPresentPregnancy(){
            return $this->arrayPresentPregnancy;
        }

        public function getPreviousPregnancy(){
            return $this->arrayAllChilds;
        }

        public function checkPregnancyID(){
            if(is_null($this->pregnancyID)){
                return false;
            } else {
                return true;
            }
        }

        public function checkPregnancyMain(){
            if( !is_null($this->entryDate) || !is_null($this->gravida) || !is_null($this->para) || !is_null($this->alive) || !is_null($this->dead) || !is_null($this->top)){
                return true;
            } else {
                return false;
            }
        }

        /*public function checkPresentPregnancy(){
            if( !is_null($this->gestationalAge) || !is_null($this->estimatedDateOfDelivery) || !is_null($this->antenatalClinikAttendanceRadios) || !is_null($this->problems) || !is_null($this->pregnancyRemarks)){
                return true;
            } else {
                return false;
            }
        }

        public function checkPreviousPregnancy(){
            if(empty($this->arrayAllChilds)){
                return false;
            } else {
                return true;
            }
        }*/
        public function checkPresentPregnancy(){
          var_dump($this->problems);
            if( !is_null($this->gestationalAge) || !is_null($this->estimatedDateOfDelivery)  || !is_null($this->problems) || !is_null($this->pregnancyRemarks)){
                return true;
            } else {
                return false;
            }
        }

        public function checkPreviousPregnancy(){
          var_dump($this->arrayName[0]);
            if(!is_null($this->arrayName[0]) || !is_null($this->arrayDateOfBirth[0]) || !is_null($this->arrayEventsPregnancy[0]) || !is_null($this->arrayDurationOfLabor[0]) || !is_null($this->arraySpontCSforceps[0]) || !is_null($this->arrayChildrenProblems[0]) || !is_null($this->arrayRemarks[0])){
                return true;
            } else {
                return false;
            }
    }
  }
?>
