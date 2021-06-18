<?php
    class vaccination{

        private $vaccinationID = array();
        private $vaccDateID = array();
        private $vaccineDataList = array();
        private $firstVaccDate = array();
        private $secondVaccDate = array();
        private $thirdVaccDate = array();
        private $fourthVaccDate = array();
        private $nextVaccDate = array();

        private $allVaccination = array();
        private $allVaccinationDates = array();

        private $vaccinationRemarks;


        public function __construct(){
            $this->vaccinationID = isset($_POST['vaccinationID']) ? $_POST['vaccinationID'] : null;
            $this->vaccDateID = isset($_POST['vaccDateID']) ? $_POST['vaccDateID'] : null;
            $this->vaccineDataList = isset($_POST['vaccineDataList']) ? $_POST['vaccineDataList'] : null;
            $this->firstVaccDate = isset($_POST['vaccDate1']) ? $_POST['vaccDate1'] : null;
            $this->secondVaccDate = isset($_POST['vaccDate2']) ? $_POST['vaccDate2'] : null;
            $this->thirdVaccDate = isset($_POST['vaccDate3']) ? $_POST['vaccDate3'] : null;
            $this->fourthVaccDate = isset($_POST['vaccDate4']) ? $_POST['vaccDate4'] : null;
            $this->nextVaccDate = isset($_POST['nextVaccDate']) ? $_POST['nextVaccDate'] : null;
            $this->vaccinationRemarks = isset($_POST['vaccinationRemarks']) ? $_POST['vaccinationRemarks'] : null;

            $this->validateParams();
        }

        public function validateParams(){
          for ($i=0; $i < count($this->vaccineDataList); $i++) {

            $this->vaccineDataList[$i] = !empty($this->vaccineDataList[$i]) ? trim($this->vaccineDataList[$i]) : null;
            $this->nextVaccDate[$i] = !empty($this->nextVaccDate[$i]) ? $this->nextVaccDate[$i] : null;
            $this->vaccinationRemarks = !empty($this->vaccinationRemarks) ? trim($this->vaccinationRemarks) : null;

            $this->firstVaccDate[$i] = !empty($this->firstVaccDate[$i]) ? $this->firstVaccDate[$i] : null;
            $this->secondVaccDate[$i] = !empty($this->secondVaccDate[$i]) ? $this->secondVaccDate[$i] : null;
            $this->thirdVaccDate[$i] = !empty($this->thirdVaccDate[$i]) ? $this->thirdVaccDate[$i] : null;
            $this->fourthVaccDate[$i] = !empty($this->fourthVaccDate[$i]) ? $this->fourthVaccDate[$i] : null;

            if(!is_null($this->vaccineDataList[$i]) || !is_null($this->nextVaccDate[$i]) || !is_null($this->vaccinationRemarks)){

              $this->allVaccination[] = [
                  'vaccID'=>$this->vaccinationID[$i],
                  'vaccine' => $this->vaccineDataList[$i],
                  'nextVaccDate' => $this->nextVaccDate[$i],
                  'VaccRemarks' => $this->vaccinationRemarks
              ];
            }


            if(!is_null($this->firstVaccDate[$i]) || !is_null($this->secondVaccDate[$i]) || !is_null($this->thirdVaccDate[$i]) ||
               !is_null($this->fourthVaccDate[$i])){
              $this->allVaccinationDates[] = [
                'vaccDateID' => $this->vaccDateID[$i],
                'fk_VaccID'=>$this->vaccinationID[$i],
                'firstVaccDate' => $this->firstVaccDate[$i],
                'secondVaccDate' => $this->secondVaccDate[$i],
                'thirdVaccDate' => $this->thirdVaccDate[$i],
                'fourthVaccDate' => $this->fourthVaccDate[$i]
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

        public function checkDates(){
          for ($i=0; $i < count($this->allVaccinationDates); $i++) {
            if(!is_null($this->allVaccinationDates[$i]['firstVaccDate'])){
              $returnlist[$i]['first'] = true;
            }
            if(!is_null($this->allVaccinationDates[$i]['secondVaccDate'])){
              $returnlist[$i]['second'] = true;
            }
            if(!is_null($this->allVaccinationDates[$i]['thirdVaccDate'])){
              $returnlist[$i]['third'] = true;
            }
            if(!is_null($this->allVaccinationDates[$i]['fourthVaccDate'])){
              $returnlist[$i]['fourth'] = true;
            }
          }
          return $returnlist;
        }
    }
?>
