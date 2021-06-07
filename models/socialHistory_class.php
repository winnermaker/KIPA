<?php
    class socialhistory{
        private $socialHistoryID;
        private $dateOfInvestigation;
        private $livedWithWho;
        private $livedWhere;
        private $parentsAlive;
        private $parentslivetogether;
        private $amountAndSourceOfIncome;
        private $incomeForHowMany;
        private $abuse;
        private $sexuallyActive;
        private $siblings;
        public  $siblingsGender = array();
        private $siblingsAge = array();
        private $siblingsHealthy = array();
        private $siblingsAlive = array();
        private $siblingsParents = array();
        private $arrayParams = array();
        public  $allSiblings = array();

        public function __construct(){
            $this->socialHistoryID = isset($_POST['socialHistoryID']) ? $_POST['socialHistoryID'] : null;
            $this->dateOfInvestigation = isset($_POST['dateOfInvestigation']) ? $_POST['dateOfInvestigation'] : null;
            $this->livedWithWho = isset($_POST['livedWithWho']) ? $_POST['livedWithWho'] : null;
            $this->livedWhere = isset($_POST['livedWhere']) ? $_POST['livedWhere'] : null;
            $this->parentsAlive = isset($_POST['parentsAlive']) ? $_POST['parentsAlive'] : null;
            $this->parentslivetogether = isset($_POST['parentslivetogether']) ? $_POST['parentslivetogether'] : null;
            $this->amountAndSourceOfIncome = isset($_POST['amountAndSourceOfIncome']) ? $_POST['amountAndSourceOfIncome'] : null;
            $this->incomeForHowMany = isset($_POST['incomeForHowMany']) ? $_POST['incomeForHowMany'] : null;
            $this->abuse = isset($_POST['abuse']) ? $_POST['abuse'] : null;
            $this->sexuallyActive = isset($_POST['sexuallyActive']) ? $_POST['sexuallyActive'] : null;
            $this->siblings = isset($_POST['siblings']) ? $_POST['siblings'] : null;
            if($this->siblings === "option1"){
                $this->siblings = "Yes";
            } elseif($this->siblings === "option2"){
                $this->siblings = "No";
            } else{
                $this->siblings = null;
            }

            $this->siblingsGender = isset($_POST['gender']) ? $_POST['gender'] : null;
            $this->siblingsAge = isset($_POST['age']) ? $_POST['age'] : null;
            $this->siblingsHealthy = isset($_POST['healthy']) ? $_POST['healthy'] : null;
            $this->siblingsAlive = isset($_POST['alive']) ? $_POST['alive'] : null;
            $this->siblingsParents = isset($_POST['sameFatherMother']) ? $_POST['sameFatherMother'] : null;
            
            for ($i=0; $i < count($this->siblingsGender) ; $i++) { 
                array_push($this->allSiblings,$this->siblingsGender[$i]);
                array_push($this->allSiblings,$this->siblingsAge[$i]);
                array_push($this->allSiblings,$this->siblingsHealthy[$i]);
                array_push($this->allSiblings,$this->siblingsAlive[$i]);
                array_push($this->allSiblings,$this->siblingsParents[$i]);
            }

            $this->paramsToArray();
        }

        public function paramsToArray(){
            $this->arrayParams['dateOfInvestigation'] = $this->dateOfInvestigation;
            $this->arrayParams['livedWithWho'] = $this->livedWithWho;
            $this->arrayParams['livedWhere'] =  $this->livedWhere;
            $this->arrayParams['parentsAlive'] = $this->parentsAlive;
            $this->arrayParams['parentslivetogether'] = $this->parentslivetogether;
            $this->arrayParams['amountAndSourceOfIncome'] = $this->amountAndSourceOfIncome;
            $this->arrayParams['incomeForHowMany'] = $this->incomeForHowMany;
            $this->arrayParams['abuse'] = $this->abuse;
            $this->arrayParams['sexuallyActive'] = $this->sexuallyActive;
            $this->arrayParams['siblings'] = $this->siblings;
            $this->arrayParams['allSiblings'] = $this->allSiblings;
        }

        public function printParams(){
            foreach ($this->arrayParams as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
       
        }

        public function getParams(){
            return $this->arrayParams;
        }

        public function checkSocialHistoryID(){
            if($this->socialHistoryID === ""){
                return false;
            } else {
                return true;
            }
        }
    }
?>