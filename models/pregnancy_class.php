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

        private  $arrayPregnancy = array();
        private  $arrayPresentPregnancy = array();
        private  $arrayPreviousPregnancy = array();

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

            $this->arrayName = isset($_POST['name']) ? $_POST['name'] : null;
            $this->arrayDateOfBirth = isset($_POST['dateofBirth']) ? $_POST['dateofBirth'] : null;
            $this->arrayEventsPregnancy = isset($_POST['eventsDuringPregnancy']) ? $_POST['eventsDuringPregnancy'] : null;
            $this->arrayDurationOfLabor = isset($_POST['durationOfLabor']) ? $_POST['durationOfLabor'] : null;
            $this->arraySpontCSforceps = isset($_POST['spont_CS_forceps']) ? $_POST['spont_CS_forceps'] : null;
            $this->arrayChildrenProblems = isset($_POST['childrenProblems']) ? $_POST['childrenProblems'] : null;
            $this->arrayRemarks = isset($_POST['Remarks']) ? $_POST['Remarks'] : null;

            for ($i=0; $i < count($this->arrayName); $i++) { 
                $gender = "genderpregnancyRadios" . $i;
                $healthy = "healthyRadios" . $i;

                $this->genderpregnancyRadios = isset($_POST[$gender]) ? $_POST[$gender] : null;
                $this->getGenderRadioValue($this->genderpregnancyRadios);

                $this->healthyRadios = isset($_POST[$healthy]) ? $_POST[$healthy] : null;
                $this->getRadioValue($this->healthyRadios);
                
                $this->arrayName[$i] = isset($this->arrayName[$i]) ? $this->arrayName[$i] : null;
                $this->arrayDateOfBirth[$i] = isset($this->arrayDateOfBirth[$i]) ? $this->arrayDateOfBirth[$i] : null;
                $this->arrayEventsPregnancy[$i] = isset($this->arrayEventsPregnancy[$i]) ? $this->arrayEventsPregnancy[$i] : null;
                $this->arrayDurationOfLabor[$i] = isset($this->arrayDurationOfLabor[$i]) ? $this->arrayDurationOfLabor[$i] : null;
                $this->arraySpontCSforceps[$i] = isset($this->arraySpontCSforceps[$i]) ? $this->arraySpontCSforceps[$i] : null;
                $this->arrayChildrenProblems[$i] = isset($this->arrayChildrenProblems[$i]) ? $this->arrayChildrenProblems[$i] : null;
                $this->arrayRemarks[$i] = isset($this->arrayRemarks[$i]) ? $this->arrayRemarks[$i] : null;

                $this->arrayAllChilds[] = [
                    'genderRadio' => $this->genderpregnancyRadios,
                    'name' => $this->arrayName[$i],
                    'dateOfBirth' => $this->arrayDateOfBirth[$i],
                    'eventsDuringPregnancy' => $this->arrayEventsPregnancy[$i],
                    'durationOfLabor' => $this->arrayDurationOfLabor[$i],
                    'spontCsForceps' => $this->arraySpontCSforceps[$i],
                    'healthy' => $this->healthyRadios,
                    'problems' => $this->arrayChildrenProblems[$i],
                    'remarks' => $this->arrayRemarks[$i],
                ];
            }


            $this->pregnancyMainToArray();
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
            $this->arrayPregnancy['pregnancyID'] = $this->pregnancyID;
            $this->arrayPregnancy['entryDate'] = $this->entryDate;
            $this->arrayPregnancy['gravida'] = $this->gravida;
            $this->arrayPregnancy['para'] = $this->para;
            $this->arrayPregnancy['alive'] = $this->alive;
            $this->arrayPregnancy['dead'] = $this->dead;
            $this->arrayPregnancy['top'] = $this->top;

        }

        public function presentPregnancyToArray(){
            $this->arrayPresentPregnancy['gestationalAge'] = $this->gestationalAge;
            $this->arrayPresentPregnancy['estimatedDateOfDelivery'] = $this->estimatedDateOfDelivery;
            $this->arrayPresentPregnancy['antenatalClinikAttendanceRadios'] = $this->antenatalClinikAttendanceRadios;
            $this->arrayPresentPregnancy['problems'] = $this->problems;
            $this->arrayPresentPregnancy['pregnancyRemarks'] = $this->pregnancyRemarks;
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
            return $this->arrayPreviousPregnancy;
        }

        public function checkPregnancyID(){
            if($this->pregnancyID === ""){
                return false;
            } else {
                return true;
            }
        }

        public function checkPregnancyMain(){
            if($this->entryDate !== "" || $this->gravida !== "" || $this->para !== "" || $this->alive !== "" || $this->dead !== "" || $this->top !== ""){
                return true;
            } else {
                return false;
            }
        }

        public function checkPresentPregnancy(){
            if($this->gestationalAge !== "" || $this->estimatedDateOfDelivery !== "" || $this->antenatalClinikAttendanceRadios !== null || $this->problems !== "" || $this->pregnancyRemarks !== ""){
                echo "Mindestens eine Eingabe";
            } else {
                echo "Keine Eingabe";
            }
        }

        public function printChilds(){
            var_dump($_POST['genderpregnancyRadios1']);
            echo $_POST['name1'] . "</br>";
            echo $_POST['dateofBirth1'] . "</br>";
            echo $_POST['eventsDuringPregnancy1'] . "</br>";
            echo $_POST['durationOfLabor1'] . "</br>";
            echo $_POST['spont_CS_forceps1'] . "</br>";
            echo $_POST['healthyRadios1'] . "</br>";
            echo $_POST['childrenProblems1'] . "</br>";
            echo $_POST['Remarks1'] . "</br>";


        }
    }
?>
