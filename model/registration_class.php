<?php
  class registration
  {
    private $userID;
    private $password;
    private $passwordRepeat;
    private $username;

    private $regArray = array();

    function __construct()
    {
        $this->userID = !empty($_POST['userID']) ? $_POST['userID'] : null;
        $this->password = !empty($_POST['password']) ? $_POST['password'] : null;
        $this->passwordRepeat = !empty($_POST['passwordRepeat']) ? $_POST['passwordRepeat'] : null;
        $this->username = !empty($_POST['username']) ? $_POST['username'] : null;

        $this->paramsToArray();
    }
    public function paramsToArray(){
        $this->regArray['userID'] = $this->userID;
        $this->regArray['username'] = $this->username;
        $this->regArray['password'] = $this->password;
    }

    public function getParams(){
      return $this->regArray;
    }

    public function checkSamePassword(){
      if(strcmp ($this->password, $this->passwordRepeat)==0){
        return true;
      }else {
        return false;
      }
    }
  }

 ?>
