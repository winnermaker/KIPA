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
        private $numberSiblings;
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
            $this->getRadioValue($this->siblings);
            $this->siblingsGender = isset($_POST['gender']) ? $_POST['gender'] : null;
            $this->siblingsAge = isset($_POST['age']) ? $_POST['age'] : null;
            $this->siblingsHealthy = isset($_POST['healthy']) ? $_POST['healthy'] : null;
            $this->siblingsAlive = isset($_POST['alive']) ? $_POST['alive'] : null;
            $this->siblingsParents = isset($_POST['sameFatherMother']) ? $_POST['sameFatherMother'] : null;


            $this->paramsToArray();
            $this->siblingsToArray();
        }

        private function getRadioValue(&$radioValue){
            if($radioValue === "option1"){
                $radioValue = true;
            } elseif($radioValue === "option2"){
                $radioValue = false;
            } else{
                $radioValue = null;
            }
        }

        public function siblingsToArray(){
            for ($i=0; $i < count($this->siblingsGender) ; $i++) {
                if($this->siblingsGender[$i] !== "" || $this->siblingsAge[$i] !== "" || $this->siblingsHealthy[$i] !== "" || $this->siblingsAlive[$i] !== "" || $this->siblingsParents[$i] !== "" ){

                    $this->allSiblings[] = [
                    'gender' => $this->siblingsGender[$i],
                    'age' => $this->siblingsAge[$i],
                    'healthy' => $this->siblingsHealthy[$i],
                    'alive' => $this->siblingsAlive[$i],
                    'parents' => $this->siblingsParents[$i],
                ];
                }
            }
        }

        public function paramsToArray(){
            $this->arrayParams['DateOfInvestigation'] = $this->dateOfInvestigation;
            $this->arrayParams['LivedWithWho'] = $this->livedWithWho;
            $this->arrayParams['LivedWhere'] =  $this->livedWhere;
            $this->arrayParams['parentsAlive'] = $this->parentsAlive;
            $this->arrayParams['ParentsLiveTogether'] = $this->parentslivetogether;
            $this->arrayParams['AmountAndSourceOfIncome'] = $this->amountAndSourceOfIncome;
            $this->arrayParams['IncomeForHowMany'] = $this->incomeForHowMany;
            $this->arrayParams['Abuse'] = $this->abuse;
            $this->arrayParams['SexuallyActive'] = $this->sexuallyActive;
            $this->arrayParams['Siblings'] = $this->siblings;
        }

        public function printParams(){
            foreach ($this->arrayParams as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }

        }

        public function getParams(){
            return $this->arrayParams;
        }


        public function printAllSiblings(){
            foreach($this->allSiblings as $index => $row){
                echo "Sibling Number:".  " ". $index +1 . "</br>";
                foreach ($row as $key => $value) {
                    echo $key . ": " . $value . "</br>";
                }
                echo "</br>";
            }
        }

        public function getAllSiblings(){
            return $this->allSiblings;
        }

        public function checkSocialHistoryID(){
            if($this->socialHistoryID === ""){
                return false;
            } else {
                return true;
            }
        }

        public function checkSiblings(){
            if(empty($this->allSiblings) || $this->siblings === false){
                return false;
            } else {
                return true;
            }
        }

        public function getNumberSiblings(){
            return count($this->allSiblings);
        }
    }
?>
