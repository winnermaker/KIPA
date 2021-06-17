<?php
    class patient{
        private $patientID;
        private $gender;
        private $firstName;
        private $lastName;
        private $callName;
        private $dateOfBirth;
        private $estDateOfBirth;
        private $admissionDate;
        private $dischargeDate;
        private $pictureTakenOn;
        private $customFile;
        private $picName;
        private $picType;
        private $arrayChild = array();


        public function __construct() {
            $this->patientID = !empty($_POST['patientID']) ? $_POST['patientID'] : null;
            $this->gender = !empty($_POST['genderRadios']) ? $_POST['genderRadios'] : null;
            $this->getGenderRadioValue($this->gender);
            $this->firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;
            $this->lastName =  !empty($_POST['lastName']) ? trim($_POST['lastName']) : null;
            $this->callName =  !empty($_POST['callName']) ? trim($_POST['callName']) : null;
            $this->dateOfBirth =  !empty($_POST['dateOfBirth']) ? $_POST['dateOfBirth'] : null;
            $this->estDateOfBirth =  !empty($_POST['estDateOfBirth']) ? $_POST['estDateOfBirth'] : null;
            $this->admissionDate =  !empty($_POST['admissionDate']) ? $_POST['admissionDate'] : null;
            $this->dischargeDate =  !empty($_POST['dischargeDate']) ? $_POST['dischargeDate'] : null;
            $this->pictureTakenOn =  !empty($_POST['pictureTakenOn']) ? $_POST['pictureTakenOn'] : null;
            $this->customFile =  !empty($_POST['customFile']) ? $_POST['customFile'] : null;
            $this->picName = !empty($_POST['PicName']) ? $_POST['PicName'] : null;
            $this->picName = !empty($_POST['PicType']) ? $_POST['PicType'] : null;

            $this->paramsToArray();
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

        public function paramsToArray(){
            $this->arrayChild['childrenID'] = $this->patientID;
            $this->arrayChild['gender'] = $this->gender;
            $this->arrayChild['firstName'] = $this->firstName;
            $this->arrayChild['lastName'] =  $this->lastName;
            $this->arrayChild['callNames'] = $this->callName;
            $this->arrayChild['DOB'] = $this->dateOfBirth;
            $this->arrayChild['EDOB'] = $this->estDateOfBirth;
            $this->arrayChild['AdmDate'] = $this->admissionDate;
            $this->arrayChild['DisDate'] = $this->dischargeDate;
            $this->arrayChild['PicTaken'] = $this->pictureTakenOn;
            $this->arrayChild['Picture'] = $this->customFile;
            $this->arrayChild['PicName'] = $this->PicName;
            $this->arrayChild['PicType'] = $this->PicType;
        }

        public function printParams(){
            foreach ($this->arrayChild as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayChild;
        }

        public function checkPatientID(){
            if(is_null($this->patientID)){
                return false;
            } else {
                return true;
            }
        }
    }
?>
