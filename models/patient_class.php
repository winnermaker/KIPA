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
        private $arrayChild = array();


        public function __construct() {
            $this->patientID = isset($_POST['patientID']) ? $_POST['patientID'] : null;
            $this->gender = isset($_POST['genderRadios']) ? $_POST['genderRadios'] : null;
            $this->getGenderRadioValue($this->gender);

            $this->firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
            $this->lastName =  isset($_POST['lastName']) ? $_POST['lastName'] : null;
            $this->callName =  isset($_POST['callName']) ? $_POST['callName'] : null;
            $this->dateOfBirth =  isset($_POST['dateOfBirth']) ? $_POST['dateOfBirth'] : null;
            $this->estDateOfBirth =  isset($_POST['estDateOfBirth']) ? $_POST['estDateOfBirth'] : null;
            $this->admissionDate =  isset($_POST['admissionDate']) ? $_POST['admissionDate'] : null;
            $this->dischargeDate =  isset($_POST['dischargeDate']) ? $_POST['dischargeDate'] : null;
            $this->pictureTakenOn =  isset($_POST['pictureTakenOn']) ? $_POST['pictureTakenOn'] : null;
            $this->customFile =  isset($_POST['customFile']) ? $_POST['customFile'] : null;

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
            if($this->patientID === ""){
                return false;
            } else {
                return true;
            }
        }
    }
?>
