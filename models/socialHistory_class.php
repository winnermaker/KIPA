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
        private $tableIndex = array();
        public  $siblingsGender = array();
        private $siblingsAge = array();
        private $siblingsHealthy = array();
        private $siblingsAlive = array();
        private $siblingsParents = array();
        private $arrayParams = array();
        private $allSiblings = array();

        public function __construct(){
            $this->socialHistoryID = !empty($_POST['socialHistoryID']) ? $_POST['socialHistoryID'] : null;
            $this->dateOfInvestigation = !empty($_POST['dateOfInvestigation']) ? $_POST['dateOfInvestigation'] : null;
            $this->livedWithWho = !empty($_POST['livedWithWho']) ? trim($_POST['livedWithWho']) : null;
            $this->livedWhere = !empty($_POST['livedWhere']) ? trim($_POST['livedWhere']) : null;
            $this->parentsAlive = !empty($_POST['parentsAlive']) ? trim($_POST['parentsAlive']) : null;
            $this->parentslivetogether = !empty($_POST['parentslivetogether']) ? trim($_POST['parentslivetogether']) : null;
            $this->amountAndSourceOfIncome = !empty($_POST['amountAndSourceOfIncome']) ? trim($_POST['amountAndSourceOfIncome']) : null;
            $this->incomeForHowMany = !empty($_POST['incomeForHowMany']) ? trim($_POST['incomeForHowMany']) : null;
            $this->abuse = !empty($_POST['abuse']) ? trim($_POST['abuse']) : null;
            $this->sexuallyActive = !empty($_POST['sexuallyActive']) ? trim($_POST['sexuallyActive']) : null;

            $this->tableIndex = isset($_POST['tableIndex']) ? $_POST['tableIndex'] : null;
            $this->siblings = !empty($_POST['siblings']) ? $_POST['siblings'] : null;
            $this->getRadioValue($this->siblings);
            $this->siblingsGender = !empty($_POST['gender']) ? $_POST['gender'] : null;
            $this->siblingsAge = !empty($_POST['age']) ? $_POST['age'] : null;
            $this->siblingsHealthy = !empty($_POST['healthy']) ? $_POST['healthy'] : null;
            $this->siblingsAlive = !empty($_POST['alive']) ? $_POST['alive'] : null;
            $this->siblingsParents = !empty($_POST['sameFatherMother']) ? $_POST['sameFatherMother'] : null;


            $this->paramsToArray();
            $this->validateSiblings();
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

        public function validateSiblings(){
            for ($i=0; $i < count($this->tableIndex) ; $i++) {
                $this->siblingsGender[$i] = !empty($this->siblingsGender[$i])  ? trim($this->siblingsGender[$i]) : null;
                $this->siblingsAge[$i] = !empty($this->siblingsAge[$i]) ? trim($this->siblingsAge[$i]) : null;
                $this->siblingsHealthy[$i] = !empty($this->siblingsHealthy[$i]) ? trim($this->siblingsHealthy[$i]) : null;
                $this->siblingsAlive[$i] = !empty($this->siblingsAlive[$i]) ? trim($this->siblingsAlive[$i]) : null;
                $this->siblingsParents[$i] = !empty($this->siblingsParents[$i]) ? trim($this->siblingsParents[$i]) : null;

                if(!is_null($this->siblingsGender[$i]) || !is_null($this->siblingsAge[$i]) || !is_null($this->siblingsHealthy[$i]) || !is_null($this->siblingsAlive[$i]) || !is_null($this->siblingsParents[$i])){

                    $this->allSiblings[] = [
                    'gender' => $this->siblingsGender[$i],
                    'age' => $this->siblingsAge[$i],
                    'healthy' => $this->siblingsHealthy[$i],
                    'alive' => $this->siblingsAlive[$i],
                    'SameParents' => $this->siblingsParents[$i],
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
            $this->arrayParams['siblings'] = $this->siblings;
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
            if(is_null($this->socialHistoryID)){
                return false;
            } else {
                return true;
            }
        }

        public function checkSiblings(){
            if($this->siblings === false){
                return false;
            } else {
                return true;
            }
        }
    }
?>
