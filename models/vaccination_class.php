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


            for ($i=0; $i < count($this->vaccineDataList); $i++) {
                $this->allVaccination[$i] = [
                    'vaccine' => $this->vaccineDataList[$i],
                    'firstVaccDate' => $this->firstVaccDate[$i],
                    'secondvaccDate' => $this->secondVaccDate[$i],
                    'thirdVaccDate' => $this->thirdVaccDate[$i],
                    'fourthVaccDate' => $this->fourthVaccDate[$i],
                    'fifthVaccDate' => $this->fifthVaccDate[$i],
                    'nextVaccDate' => $this->nextVaccDate[$i],
                    'Remarks' => $this->vaccinationRemarks
                ];
            }

        }

        public function printParams(){
            foreach($this->allVaccination as $index => $row){
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
    }
?>
