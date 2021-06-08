<?php
    class medicalmain{

        private $medicalMainID;
        private $nhiRegistration;
        private $nhiNumber;
        private $reviewOn;
        private $conditions;
        private $permanentPrescription;
        private $plan;
        private $otherInformation;
        private $PregnancyHistory;
        private $immuniComplRadios;
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
        private  $arrayMedical = array();

        public function __construct(){

            $this->medicalMainID = isset($_POST['medicalMainID']) ? $_POST['medicalMainID'] : null;
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
            $this->immuniComplRadios = isset($_POST['immuniComplRadios']) ? $_POST['immuniComplRadios'] : null;
            $this->getRadioButtonValue($this->immuniComplRadios);
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
            $this->arrayChild['NHIReg'] = $this->nhiRegistration;
            $this->arrayChild['NHINr'] = $this->nhiNumber;
            $this->arrayChild['ReviewOn'] =  $this->reviewOn;
            $this->arrayChild['Conditions'] = $this->conditions;
            $this->arrayChild['PermMedication'] = $this->permanentPrescription;
            $this->arrayChild['Plan'] = $this->plan;
            $this->arrayChild['OtherInfo'] = $this->otherInformation;
            $this->arrayChild['PregnancyHist'] = $this->PregnancyHistory;
            $this->arrayChild['ImmuniCompl'] = $this->immuniCompleted;
            $this->arrayChild['PhysicalAbuse'] = $this->physicalAbuse;
            $this->arrayChild['SexualAbuse'] = $this->sexualAbuse;
            $this->arrayChild['SubstanceAbuse'] = $this->substanceAbuse;
            $this->arrayChild['MenstrualHist'] = $this->menstrualHistory;
            $this->arrayChild['HepBPos'] = $this->hepBPos;
            $this->arrayChild['HepBPosCheckDate'] = $this->hepBPosCheckDate;
            $this->arrayChild['HepBPosCheckDate'] = $this->hepBTreated;
            $this->arrayChild['HIVPos'] = $this->hivPos;
            $this->arrayChild['HIVCheckDate'] = $this->hivCheckDate;
            $this->arrayChild['HIVTreated'] = $this->hivTreated;
            $this->arrayChild['TPos'] = $this->tbPos;
            $this->arrayChild['TposCheckDate'] = $this->tbposCheckDate;
            $this->arrayChild['TPosTreated'] = $this->tbposTreated;
            $this->arrayChild['STDPos'] = $this->stdPos;
            $this->arrayChild['STDPosCheckDate'] = $this->stdPosCheckDate;
            $this->arrayChild['STDPosTreated'] = $this->stdPosTreated;
            $this->arrayChild['PregTestPos'] = $this->pregnancyPos;
            $this->arrayChild['PregTestDate'] = $this->pregnancyTestDate;
            $this->arrayChild['SickelCellPos'] = $this->sickleCellPos;
            $this->arrayChild['SickelCellType'] = $this->sickleCellType;
            $this->arrayChild['G6DP'] = $this->G6PDeficiency;
        }

        public function printParams(){
            foreach ($this->arrayMedical as $key => $value) {
                if($value === false){
                    echo $key . ": " . "false" . "</br>";
                } elseif($value === true){
                    echo $key . ": " . "true" . "</br>";
                } else{
                    echo $key . ": ". $value . "</br>";
                }

            }
        }

        public function getParams(){
            return $this->arrayMedical;
        }

        public function checkMedicalMainID(){
            if($this->medicalMainID === ""){
                return false;
            } else {
                return true;
            }
        }

        public function getParams(){
            return $this->arrayChild;
        }
    }
?>
