<?php
    class vaccination{

        private $vaccinationID;
        private $vaccineDataList = array();
        private $firstVaccDate = array();
        private $secondVaccDate = array();
        private $thirdVaccDate = array();
        private $fourthVaccDate = array();
        private $fifthVaccDate = array();
        private $nextVaccDate = array();

        private $allVaccination = array();
        private $allVaccinationDates = array();

        private $vaccinationRemarks;


        public function __construct(){
            $this->vaccinationID = !empty($_POST['vaccinationID']) ? $_POST['vaccinationID'] : null;
            $this->vaccineDataList = !empty($_POST['vaccineDataList']) ? $_POST['vaccineDataList'] : null;
            $this->firstVaccDate = !empty($_POST['vaccDate1']) ? $_POST['vaccDate1'] : null;
            $this->secondVaccDate = !empty($_POST['vaccDate2']) ? $_POST['vaccDate2'] : null;
            $this->thirdVaccDate = !empty($_POST['vaccDate3']) ? $_POST['vaccDate3'] : null;
            $this->fourthVaccDate = !empty($_POST['vaccDate4']) ? $_POST['vaccDate4'] : null;
            $this->fifthVaccDate = !empty($_POST['vaccDate5']) ? $_POST['vaccDate5'] : null;
            $this->nextVaccDate = !empty($_POST['nextVaccDate']) ? $_POST['nextVaccDate'] : null;
            $this->vaccinationRemarks = !empty($_POST['vaccinationRemarks']) ? $_POST['vaccinationRemarks'] : null;

            $this->validateParams();
        }

        public function validateParams(){
          for ($i=0; $i < count($this->vaccineDataList); $i++) {

            $this->vaccineDataList[$i] = !empty($this->vaccineDataList[$i]) ? trim($this->vaccineDataList[$i]) : null;
            $this->nextVaccDate[$i] = !empty($this->nextVaccDate[$i]) ? $this->nextVaccDate[$i] : null;
            $this->vaccinationRemarks[$i] = !empty($this->vaccinationRemarks[$i]) ? trim($this->vaccinationRemarks[$i]) : null;

            $this->firstVaccDate[$i] = !empty($this->firstVaccDate[$i]) ? $this->firstVaccDate[$i] : null;
            $this->secondVaccDate[$i] = !empty($this->secondVaccDate[$i]) ? $this->secondVaccDate[$i] : null;
            $this->thirdVaccDate[$i] = !empty($this->thirdVaccDate[$i]) ? $this->thirdVaccDate[$i] : null;
            $this->fourthVaccDate[$i] = !empty($this->fourthVaccDate[$i]) ? $this->fourthVaccDate[$i] : null;
            $this->fifthVaccDate[$i] = !empty($this->fifthVaccDate[$i]) ? $this->fifthVaccDate[$i] : null;

            if(!is_null($this->vaccineDataList[$i]) || !is_null($this->nextVaccDate[$i]) || !is_null($this->vaccinationRemarks[$i])){

              $this->allVaccination[] = [
                  'vaccID'=>$this->vaccinationID,
                  'vaccine' => $this->vaccineDataList[$i],
                  'nextVaccDate' => $this->nextVaccDate[$i],
                  'VaccRemarks' => $this->vaccinationRemarks
              ];
            }


            if(!is_null($this->firstVaccDate[$i]) || !is_null($this->secondVaccDate[$i]) || !is_null($this->thirdVaccDate[$i]) ||
               !is_null($this->fourthVaccDate[$i]) || !is_null($this->fifthVaccDate[$i])){
              $this->allVaccinationDates[] = [
                'firstVaccDate' => $this->firstVaccDate[$i],
                'secondVaccDate' => $this->secondVaccDate[$i],
                'thirdVaccDate' => $this->thirdVaccDate[$i],
                'fourthVaccDate' => $this->fourthVaccDate[$i],
                'fifthVaccDate' => $this->fifthVaccDate[$i]
              ];
          }
        }
    }

        public function getParams(){
          return $this->allVaccination;
        }

        public function getParamsDates(){
          return $this->allVaccinationDates;
        }

        public function printParams(){
            foreach($this->allVaccination as $index => $row){
                foreach ($row as $key => $value) {
                    echo $key . ": " . $value . "</br>";
                }
                echo "</br>";
            }
            foreach($this->allVaccinationDates as $index => $row){
                foreach ($row as $key => $value) {
                    echo $key . ": " . $value . "</br>";
                }
                echo "</br>";
            }
        }

        public function checkVaccinationID(){
            if(is_null($this->vaccinationID)){
                return false;
            } else {
                return true;
            }
        }

        public function checkParams(){
            if(!empty($this->allVaccination)){
                return true;
            } else {
                return false;
            }
        }

        public function checkParamsDates(){
            if(!empty($this->allVaccinationDates)){
                return true;
            } else {
                return false;
            }
        }
    }
?>
