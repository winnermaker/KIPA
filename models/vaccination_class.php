<?php
    class vaccination{

        private $vaccineDataList = array();
        private $firstVaccDate = array();
        private $secondVaccDate = array();
        private $thirdVaccDate = array();
        private $fourthVaccDate = array();
        private $fifthVaccDate = array();
        private $nextVaccDate = array();

        public $allVaccination = array();

        private $vaccinationRemarks;


        public function __construct(){
            $this->vaccineDataList = isset($_POST['vaccineDataList']) ? $_POST['vaccineDataList'] : null;
            $this->firstVaccDate = isset($_POST['vaccDate1']) ? $_POST['vaccDate1'] : null;
            $this->secondVaccDate = isset($_POST['vaccDate2']) ? $_POST['vaccDate2'] : null;
            $this->thirdVaccDate = isset($_POST['vaccDate3']) ? $_POST['vaccDate3'] : null;
            $this->fourthVaccDate = isset($_POST['vaccDate4']) ? $_POST['vaccDate4'] : null;
            $this->fifthVaccDate = isset($_POST['vaccDate5']) ? $_POST['vaccDate5'] : null;
            $this->nextVaccDate = isset($_POST['nextVaccDate']) ? $_POST['nextVaccDate'] : null;
            $this->vaccinationRemarks = isset($_POST['vaccinationRemarks']) ? $_POST['vaccinationRemarks'] : null;

            for ($i=0; $i < count($this->vaccineDataList); $i++) {
                array_push($this->allVaccination,$this->vaccineDataList[$i]);
                array_push($this->allVaccination,$this->firstVaccDate[$i]);
                array_push($this->allVaccination,$this->secondVaccDate[$i]);
                array_push($this->allVaccination,$this->thirdVaccDate[$i]);
                array_push($this->allVaccination,$this->fourthVaccDate[$i]);
                array_push($this->allVaccination,$this->fifthVaccDate[$i]);
                array_push($this->allVaccination,$this->nextVaccDate[$i]);


            }

            var_dump($this->allVaccination);


        }

    }
?>