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
        private $arrayMedical = array();

        public function __construct(){

            $this->medicalMainID = !empty($_POST['medicalMainID']) ? $_POST['medicalMainID'] : null;
            $this->nhiRegistration = !empty($_POST['nhiRadios']) ? $_POST['nhiRadios'] : null;
            $this->getRadioButtonValue($this->nhiRegistration);

            $this->nhiNumber = !empty($_POST['nhiNumber']) ? trim($_POST['nhiNumber']) : null;
            $this->reviewOn = !empty($_POST['reviewOn']) ? $_POST['reviewOn'] : null;
            $this->conditions = !empty($_POST['conditions']) ? trim($_POST['conditions']) : null;
            $this->permanentPrescription = !empty($_POST['permanentPrescription']) ? trim($_POST['permanentPrescription']) : null;
            $this->plan = !empty($_POST['plan']) ? trim($_POST['plan']) : null;
            $this->otherInformation = !empty($_POST['otherInformation']) ? trim($_POST['otherInformation']) : null;

            $this->PregnancyHistory = !empty($_POST['PregnancyHistRadios']) ? $_POST['PregnancyHistRadios'] : null;
            $this->getRadioButtonValue($this->PregnancyHistory);
            $this->immuniComplRadios = !empty($_POST['immuniComplRadios']) ? $_POST['immuniComplRadios'] : null;
            $this->getRadioButtonValue($this->immuniComplRadios);
            $this->physicalAbuse = !empty($_POST['physicalAbuseRadios']) ? $_POST['physicalAbuseRadios'] : null;
            $this->getRadioButtonValue($this->physicalAbuse);
            $this->sexualAbuse = !empty($_POST['sexualAbuseRadios']) ? $_POST['sexualAbuseRadios'] : null;
            $this->getRadioButtonValue($this->sexualAbuse);
            $this->substanceAbuse = !empty($_POST['substanceAbuseRadios']) ? $_POST['substanceAbuseRadios'] : null;
            $this->getRadioButtonValue($this->substanceAbuse);
            $this->menstrualHistory = !empty($_POST['menstrualHistory']) ? trim($_POST['menstrualHistory']) : null;
            $this->hepBPos = !empty($_POST['HepBPosRadios']) ? $_POST['HepBPosRadios'] : null;
            $this->getRadioButtonValue($this->hepBPos);
            $this->hepBPosCheckDate = !empty($_POST['HepBPosCheckDate']) ? $_POST['HepBPosCheckDate'] : null;
            $this->hepBTreated = !empty($_POST['HepBTreatedRadios']) ? $_POST['HepBTreatedRadios'] : null;
            $this->getRadioButtonValue($this->hepBTreated);
            $this->hivPos = !empty($_POST['hivRadios']) ? $_POST['hivRadios'] : null;
            $this->getRadioButtonValue($this->hivPos);
            $this->hivCheckDate = !empty($_POST['hivCheckDate']) ? $_POST['hivCheckDate'] : null;
            $this->hivTreated = !empty($_POST['hivTreatedRadios']) ? $_POST['hivTreatedRadios'] : null;
            $this->getRadioButtonValue($this->hivTreated);
            $this->tbPos = !empty($_POST['TbposRadios']) ? $_POST['TbposRadios'] : null;
            $this->getRadioButtonValue($this->tbPos);
            $this->tbposCheckDate = !empty($_POST['TbposCheckDate']) ? $_POST['TbposCheckDate'] : null;
            $this->tbposTreated = !empty($_POST['TposTreatedRadios']) ? $_POST['TposTreatedRadios'] : null;
            $this->getRadioButtonValue($this->tbposTreated);
            $this->stdPos = !empty($_POST['stdposRadios']) ? $_POST['stdposRadios'] : null;
            $this->getRadioButtonValue($this->stdPos);
            $this->stdPosCheckDate = !empty($_POST['stdposCheckDate']) ? $_POST['stdposCheckDate'] : null;
            $this->stdPosTreated = !empty($_POST['STDPosTreatedRadios']) ? $_POST['STDPosTreatedRadios'] : null;
            $this->getRadioButtonValue($this->stdPosTreated);
            $this->pregnancyPos = !empty($_POST['pregPosRadios']) ? $_POST['pregPosRadios'] : null;
            $this->getRadioButtonValue($this->pregnancyPos);
            $this->pregnancyTestDate = !empty($_POST['pregTestDate']) ? $_POST['pregTestDate'] : null;
            $this->sickleCellPos = !empty($_POST['SickleCellPosRadios']) ? $_POST['SickleCellPosRadios'] : null;
            $this->getRadioButtonValue($this->sickleCellPos);
            $this->sickleCellType = !empty($_POST['sickleCellType']) ? trim($_POST['sickleCellType']) : null;
            $this->G6PDeficiency = !empty($_POST['G6DPRadios']) ? $_POST['G6DPRadios'] : null;
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
            $this->arrayMedical['NHIReg'] = $this->nhiRegistration;
            $this->arrayMedical['NHINr'] = $this->nhiNumber;
            $this->arrayMedical['ReviewOn'] =  $this->reviewOn;
            $this->arrayMedical['Conditions'] = $this->conditions;
            $this->arrayMedical['PermMedication'] = $this->permanentPrescription;
            $this->arrayMedical['Plan'] = $this->plan;
            $this->arrayMedical['OtherInfo'] = $this->otherInformation;
            $this->arrayMedical['PregnancyHist'] = $this->PregnancyHistory;
            $this->arrayMedical['ImmuniCompl'] = $this->immuniComplRadios;
            $this->arrayMedical['PhysicalAbuse'] = $this->physicalAbuse;
            $this->arrayMedical['SexualAbuse'] = $this->sexualAbuse;
            $this->arrayMedical['SubstanceAbuse'] = $this->substanceAbuse;
            $this->arrayMedical['MenstrualHist'] = $this->menstrualHistory;
            $this->arrayMedical['HepBPos'] = $this->hepBPos;
            $this->arrayMedical['HepBPosCheckDate'] = $this->hepBPosCheckDate;
            $this->arrayMedical['HepBPosCheckDate'] = $this->hepBTreated;
            $this->arrayMedical['HIVPos'] = $this->hivPos;
            $this->arrayMedical['HIVCheckDate'] = $this->hivCheckDate;
            $this->arrayMedical['HIVTreated'] = $this->hivTreated;
            $this->arrayMedical['TPos'] = $this->tbPos;
            $this->arrayMedical['TposCheckDate'] = $this->tbposCheckDate;
            $this->arrayMedical['TPosTreated'] = $this->tbposTreated;
            $this->arrayMedical['STDPos'] = $this->stdPos;
            $this->arrayMedical['STDPosCheckDate'] = $this->stdPosCheckDate;
            $this->arrayMedical['STDPosTreated'] = $this->stdPosTreated;
            $this->arrayMedical['PregTestPos'] = $this->pregnancyPos;
            $this->arrayMedical['PregTestDate'] = $this->pregnancyTestDate;
            $this->arrayMedical['SickelCellPos'] = $this->sickleCellPos;
            $this->arrayMedical['SickelCellType'] = $this->sickleCellType;
            $this->arrayMedical['G6DP'] = $this->G6PDeficiency;
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
            if(is_null($this->medicalMainID)){
                return false;
            } else {
                return true;
            }
        }
    }
?>
