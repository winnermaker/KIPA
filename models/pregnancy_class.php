<?php
    class pregnancy{

        private $motherID;

        private $entryDate;
        private $gravida;
        private $para;
        private $alive;
        private $dead;
        private $top;

        private $presentPregnancyID;
        private $gestationalAge;
        private $estimatedDateOfDelivery;
        private $antenatalClinikAttendanceRadios;
        private $problems;
        private $pregnancyRemarks;

        private $arrayChildID = array();
        private $arrayGender = array();
        private $arrayHealthy = array();
        private $arrayName = array();
        private $arrayDateOfBirth = array();
        private $arrayEventsPregnancy = array();
        private $arrayDurationOfLabor = array();
        private $arraySpontCSforceps = array();
        private $arrayChildrenProblems = array();
        private $arrayRemarks = array();

        private $arrayPreviousPregnancy = array();
        private $arrayPregnancy = array();
        private $arrayPresentPregnancy = array();

        public function __construct(){
            $this->motherID = !empty($_POST['motherID']) ? $_POST['motherID'] : null;
            $this->entryDate = !empty($_POST['entryDate']) ? $_POST['entryDate'] : null;
            $this->gravida = !empty($_POST['gravida']) ? trim($_POST['gravida']) : null;
            $this->para = !empty($_POST['para']) ? trim($_POST['para']) : null;
            $this->alive = !empty($_POST['alive']) ? trim($_POST['alive']) : null;
            $this->dead = !empty($_POST['dead']) ? trim($_POST['dead']) : null;
            $this->top = !empty($_POST['top']) ? trim($_POST['top']) : null;

            $this->presentPregnancyID = !empty($_POST['presentPregnancyID']) ? $_POST['presentPregnancyID'] : null;
            $this->gestationalAge = !empty($_POST['gestationalAge']) ? trim($_POST['gestationalAge']) : null;
            $this->estimatedDateOfDelivery = !empty($_POST['estimatedDateOfDelivery']) ? $_POST['estimatedDateOfDelivery'] : null;
            $this->antenatalClinikAttendanceRadios = !empty($_POST['antenatalClinikAttendanceRadios']) ? $_POST['antenatalClinikAttendanceRadios'] : null;
            $this->getRadioValue($this->antenatalClinikAttendanceRadios);
            $this->problems = !empty($_POST['problems']) ? trim($_POST['problems']) : null;
            $this->pregnancyRemarks = !empty($_POST['pregnancyRemarks']) ? trim($_POST['pregnancyRemarks']) : null;

            $this->arrayChildID = isset($_POST['childID']) ? $_POST['childID'] : null;
            $this->arrayGender = isset($_POST['gender']) ? $_POST['gender'] : null;
            $this->arrayHealthy = isset($_POST['healthy']) ? $_POST['healthy'] : null;
            $this->arrayName = isset($_POST['name']) ? $_POST['name'] : null;
            $this->arrayDateOfBirth = isset($_POST['dateofBirth']) ? $_POST['dateofBirth'] : null;
            $this->arrayEventsPregnancy = isset($_POST['eventsDuringPregnancy']) ? $_POST['eventsDuringPregnancy'] : null;
            $this->arrayDurationOfLabor = isset($_POST['durationOfLabor']) ? $_POST['durationOfLabor'] : null;
            $this->arraySpontCSforceps = isset($_POST['spont_CS_forceps']) ? $_POST['spont_CS_forceps'] : null;
            $this->arrayChildrenProblems = isset($_POST['childrenProblems']) ? $_POST['childrenProblems'] : null;
            $this->arrayRemarks = isset($_POST['Remarks']) ? $_POST['Remarks'] : null;


            $this->pregnancyMainToArray();
            $this->validatePreviousPregnancy();
            $this->presentPregnancyToArray();

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
            $this->arrayPregnancy['MotherID'] = $this->motherID;
            $this->arrayPregnancy['entryDate'] = $this->entryDate;
            $this->arrayPregnancy['gravida'] = $this->gravida;
            $this->arrayPregnancy['para'] = $this->para;
            $this->arrayPregnancy['alive'] = $this->alive;
            $this->arrayPregnancy['dead'] = $this->dead;
            $this->arrayPregnancy['top'] = $this->top;

        }

        public function validatePreviousPregnancy(){
            for ($i=0; $i < count($this->arrayName); $i++) {

                $this->arrayChildID = !empty($this->arrayChildID[$i]) ? trim($this->arrayChildID[$i]) : null;
                $this->arrayGender = !empty($this->arrayGender[$i]) ? trim($this->arrayGender[$i]) : null;
                $this->arrayHealthy = !empty($this->arrayHealthy[$i]) ? trim($this->arrayHealthy[$i]) : null;
                $this->arrayName[$i] = !empty($this->arrayName[$i]) ? trim($this->arrayName[$i]) : null;
                $this->arrayDateOfBirth[$i] = !empty($this->arrayDateOfBirth[$i]) ? trim($this->arrayDateOfBirth[$i]) : null;
                $this->arrayEventsPregnancy[$i] = !empty($this->arrayEventsPregnancy[$i]) ? trim($this->arrayEventsPregnancy[$i]) : null;
                $this->arrayDurationOfLabor[$i] = !empty($this->arrayDurationOfLabor[$i]) ? trim($this->arrayDurationOfLabor[$i]) : null;
                $this->arraySpontCSforceps[$i] = !empty($this->arraySpontCSforceps[$i]) ? trim($this->arraySpontCSforceps[$i]) : null;
                $this->arrayChildrenProblems[$i] = !empty($this->arrayChildrenProblems[$i]) ? trim($this->arrayChildrenProblems[$i]) : null;
                $this->arrayRemarks[$i] = !empty($this->arrayRemarks[$i]) ? trim($this->arrayRemarks[$i]) : null;

                if(!is_null($this->arrayName[$i]) || !is_null($this->arrayDateOfBirth[$i]) ||
                    !is_null($this->arrayEventsPregnancy[$i]) || !is_null($this->arrayDurationOfLabor[$i]) ||
                    !is_null($this->arraySpontCSforceps[$i]) || !is_null($this->arrayChildrenProblems[$i]) ||
                    !is_null($this->arrayRemarks[$i]) || !is_null($this->arrayGender[$i]) || !is_null($this->arrayHealthy[$i]))
                {
                $this->arrayPreviousPregnancy[] = [
                  'ChildID' => $this->arrayChildID[$i],
                  'fk_MotherID' => $this->motherID,
                  'gender' => $this->arrayGender[$i],
                  'name' => $this->arrayName[$i],
                  'DOB' => $this->arrayDateOfBirth[$i],
                  'EvDurP' => $this->arrayEventsPregnancy[$i],
                  'durLabor' => $this->arrayDurationOfLabor[$i],
                  'spont_CS_forceps' => $this->arraySpontCSforceps[$i],
                  'healthy' => $this->arrayHealthy[$i],
                  'problems' => $this->arrayChildrenProblems[$i],
                  'remarks' => $this->arrayRemarks[$i],
                ];
            }
          }
        }

        public function presentPregnancyToArray(){
          $this->arrayPresentPregnancy['PresPreagnancyID'] = $this->presentPregnancyID;
          $this->arrayPresentPregnancy['fk_MotherID'] = $this->motherID;
          $this->arrayPresentPregnancy['GestationalAge'] = $this->gestationalAge;
          $this->arrayPresentPregnancy['EstDelivery'] = $this->estimatedDateOfDelivery;
          $this->arrayPresentPregnancy['AntClinicAttend'] = $this->antenatalClinikAttendanceRadios;
          $this->arrayPresentPregnancy['Problems'] = $this->problems;
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
            foreach($this->arrayPreviousPregnancy as $key => $row){
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
            if(is_null($this->motherID)){
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

        public function checkPresentPregnancy(){
            if( !is_null($this->gestationalAge) || !is_null($this->estimatedDateOfDelivery)  || !is_null($this->problems) || !is_null($this->pregnancyRemarks)){
                return true;
            } else {
                return false;
            }
        }

        public function checkPreviousPregnancy(){
            if(!is_null($this->arrayName[0]) || !is_null($this->arrayDateOfBirth[0]) || !is_null($this->arrayEventsPregnancy[0]) || !is_null($this->arrayDurationOfLabor[0]) || !is_null($this->arraySpontCSforceps[0]) || !is_null($this->arrayChildrenProblems[0]) || !is_null($this->arrayRemarks[0])){
                return true;
            } else {
                return false;
            }
    }
  }
?>
