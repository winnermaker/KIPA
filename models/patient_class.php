<?php
    class patient{
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
            $this->gender = isset($_POST['genderRadios']) ? $_POST['genderRadios'] : null;
            if($this->gender === "option1"){
                $this->gender = "m";
            } elseif($this->gender === "option2"){
                $this->gender = "f";
            } elseif($this->gender === "option3"){
                $this->gender = "x";
            } else{
                $this->gender = null;
            }

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

        public function paramsToArray(){
            $this->arrayChild['gender'] = $this->gender;
            $this->arrayChild['First Name'] = $this->firstName;
            $this->arrayChild['Last Name'] =  $this->lastName;
            $this->arrayChild['Call Name'] = $this->callName;
            $this->arrayChild['Date of Birth'] = $this->dateOfBirth;
            $this->arrayChild['Est. Date of Birth'] = $this->estDateOfBirth;
            $this->arrayChild['Admission Date'] = $this->admissionDate;
            $this->arrayChild['Discharge Date'] = $this->dischargeDate;
            $this->arrayChild['Picture taken on'] = $this->pictureTakenOn;
            $this->arrayChild['Custom File'] = $this->customFile;
        }

        public function printParams(){
            foreach ($this->arrayChild as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayChild;
        }
    }
?>