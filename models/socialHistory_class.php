<?php
    class socialhistory{
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
        private $arrayParams = array();

        public function __construct(){
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
                $this->siblings = "Male";
            } elseif($this->siblings === "option2"){
                $this->siblings = "Female";
            } else{
                $this->siblings = null;
            }
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
        }

        public function printParams(){
            foreach ($this->arrayParams as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }
    }
?>