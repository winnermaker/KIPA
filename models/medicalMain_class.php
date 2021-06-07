<?php
    class medicalmain{

        private $nhiRegistration;
        private $nhiNumber;
        private $reviewOn;
        private $conditions;
        private $permanentPrescription;
        private $plan;
        private $otherInformation;
        private $PregnancyHistory;
        private $immuniCompleted;
        private $physicalAbuse;
        private $sexualAbuse;
        private $substanceAbuse;
        private $menstrualHistory;
        private $hepBPos;
        private $hepBPosCheckDate;
        private $hepBTreated;
        private $hivPos;
        private $hivCheckDate;
        private $hivTreated;
        private $tbPos;
        private $tbposCheckDate;
        private $tbposTreated;
        private $stdPos;
        private $stdPosCheckDate;
        private $stdPosTreated;
        private $pregnancyPos;
        private $pregnancyTestDate;
        private $sickleCellPos;
        private $sickleCellType;
        private $G6PDeficiency;

        public function __construct(){
            $this->nhiRegistration = isset($_POST['nhiRadios']) ? $_POST['nhiRadios'] : null;
            $this->getRadioButtonValue($this->nhiRegistration);
            
            $this->nhiNumber = isset($_POST['nhiNumber']) ? $_POST['nhiNumber'] : null;
            $this->reviewOn = isset($_POST['reviewOn']) ? $_POST['reviewOn'] : null;
            $this->conditions = isset($_POST['conditions']) ? $_POST['conditions'] : null;
            $this->permanentPrescription = isset($_POST['permanentPrescription']) ? $_POST['permanentPrescription'] : null;
            $this->plan = isset($_POST['plan']) ? $_POST['plan'] : null;
            $this->otherInformation = isset($_POST['otherInformation']) ? $_POST['otherInformation'] : null;

            $this->PregnancyHistory = isset($_POST['PregnancyHistRadios']) ? $_POST['PregnancyHistRadios'] : null;
            $this->getRadioButtonValue($this->PregnancyHistory);
            $this->immuniCompleted = isset($_POST['immuniComplRadios']) ? $_POST['immuniComplRadios'] : null;
            $this->getRadioButtonValue($this->immuniCompleted);
            $this->physicalAbuse = isset($_POST['physicalAbuseRadios']) ? $_POST['physicalAbuseRadios'] : null;
            $this->getRadioButtonValue($this->physicalAbuse);
            $this->sexualAbuse = isset($_POST['sexualAbuseRadios']) ? $_POST['sexualAbuseRadios'] : null;
            $this->getRadioButtonValue($this->sexualAbuse);
            $this->substanceAbuse = isset($_POST['substanceAbuseRadios']) ? $_POST['substanceAbuseRadios'] : null;
            $this->getRadioButtonValue($this->substanceAbuse);
            $this->menstrualHistory = isset($_POST['menstrualHistory']) ? $_POST['menstrualHistory'] : null;
            $this->hepBPos = isset($_POST['HepBPosRadios']) ? $_POST['HepBPosRadios'] : null;
            $this->getRadioButtonValue($this->hepBPos);
            $this->hepBPosCheckDate = isset($_POST['HepBPosCheckDate']) ? $_POST['HepBPosCheckDate'] : null;
            $this->hepBTreated = isset($_POST['HepBTreatedRadios']) ? $_POST['HepBTreatedRadios'] : null;
            $this->getRadioButtonValue($this->hepBTreated);
            $this->hivPos = isset($_POST['hivRadios']) ? $_POST['hivRadios'] : null;
            $this->getRadioButtonValue($this->hivPos);
            $this->hivCheckDate = isset($_POST['hivCheckDate']) ? $_POST['hivCheckDate'] : null;
            $this->hivTreated = isset($_POST['hivTreatedRadios']) ? $_POST['hivTreatedRadios'] : null;
            $this->getRadioButtonValue($this->hivTreated);
            $this->tbPos = isset($_POST['TbposRadios']) ? $_POST['TbposRadios'] : null;
            $this->getRadioButtonValue($this->tbPos);
            $this->tbposCheckDate = isset($_POST['TbposCheckDate']) ? $_POST['TbposCheckDate'] : null;
            $this->tbposTreated = isset($_POST['TposTreatedRadios']) ? $_POST['TposTreatedRadios'] : null;
            $this->getRadioButtonValue($this->tbposTreated);
            $this->stdPos = isset($_POST['stdposRadios']) ? $_POST['stdposRadios'] : null;
            $this->getRadioButtonValue($this->stdPos);
            $this->stdPosCheckDate = isset($_POST['stdposCheckDate']) ? $_POST['stdposCheckDate'] : null;
            $this->stdPosTreated = isset($_POST['STDPosTreatedRadios']) ? $_POST['STDPosTreatedRadios'] : null;
            $this->getRadioButtonValue($this->stdPosTreated);
            $this->pregnancyPos = isset($_POST['pregPosRadios']) ? $_POST['pregPosRadios'] : null;
            $this->getRadioButtonValue($this->pregnancyPos);
            $this->pregnancyTestDate = isset($_POST['pregTestDate']) ? $_POST['pregTestDate'] : null;
            $this->sickleCellPos = isset($_POST['SickleCellPosRadios']) ? $_POST['SickleCellPosRadios'] : null;
            $this->getRadioButtonValue($this->sickleCellPos);
            $this->sickleCellType = isset($_POST['sickleCellType']) ? $_POST['sickleCellType'] : null;
            $this->G6PDeficiency = isset($_POST['G6DPRadios']) ? $_POST['G6DPRadios'] : null;
            $this->getRadioButtonValue($this->G6PDeficiency);

            $this->paramsToArray();
        }

        private function getRadioButtonValue(&$radioValue){
            if($radioValue === "option1"){
                $radioValue = true;
            } elseif($radioValue === "option2"){
                $radioValue = false;
            } elseif($radioValue === "option3")
                $radioValue = "Not Done";
            else{
                $radioValue = null;
            }  
        }

        public function paramsToArray(){
            $this->arrayChild['nhiRegistration'] = $this->nhiRegistration;
            $this->arrayChild['nhiNumber'] = $this->nhiNumber;
            $this->arrayChild['reviewOn'] =  $this->reviewOn;
            $this->arrayChild['conditions'] = $this->conditions;
            $this->arrayChild['permanentPrescription'] = $this->permanentPrescription;
            $this->arrayChild['plan'] = $this->plan;
            $this->arrayChild['otherInformation'] = $this->otherInformation;
            $this->arrayChild['PregnancyHistory'] = $this->PregnancyHistory;
            $this->arrayChild['immuniCompleted'] = $this->immuniCompleted;
            $this->arrayChild['physicalAbuse'] = $this->physicalAbuse;
            $this->arrayChild['sexualAbuse'] = $this->sexualAbuse;
            $this->arrayChild['substanceAbuse'] = $this->substanceAbuse;
            $this->arrayChild['menstrualHistory'] = $this->menstrualHistory;
            $this->arrayChild['hepBPos'] = $this->hepBPos;
            $this->arrayChild['hepBPosCheckDate'] = $this->hepBPosCheckDate;
            $this->arrayChild['hepBTreated'] = $this->hepBTreated;
            $this->arrayChild['hivPos'] = $this->hivPos;
            $this->arrayChild['hivCheckDate'] = $this->hivCheckDate;
            $this->arrayChild['hivTreated'] = $this->hivTreated;
            $this->arrayChild['tbPos'] = $this->tbPos;
            $this->arrayChild['tbposCheckDate'] = $this->tbposCheckDate;
            $this->arrayChild['tbposTreated'] = $this->tbposTreated;
            $this->arrayChild['stdPos'] = $this->stdPos;
            $this->arrayChild['stdPosCheckDate'] = $this->stdPosCheckDate;
            $this->arrayChild['stdPosTreated'] = $this->stdPosTreated;
            $this->arrayChild['pregnancyPos'] = $this->pregnancyPos;
            $this->arrayChild['pregnancyTestDate'] = $this->pregnancyTestDate;
            $this->arrayChild['sickleCellPos'] = $this->sickleCellPos;
            $this->arrayChild['sickleCellType'] = $this->sickleCellType;
            $this->arrayChild['G6PDeficiency'] = $this->G6PDeficiency;
        }

        public function printParams(){
            foreach ($this->arrayChild as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }
    }
?>