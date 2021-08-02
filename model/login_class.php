<?php
  class login
  {
    private $userID;
    private $password;
    private $userame;

    private $loginArray = array();

    function __construct()
    {
      $this->userID = !empty($_POST['userID']) ? $_POST['userID'] : null;
      $this->password = !empty($_POST['password']) ? $_POST['password'] : null;
      $this->username = !empty($_POST['username']) ? $_POST['username'] : null;

      $this->paramsToArray();        
    }

    public function paramsToArray(){
        $this->loginArray['userID'] = $this->userID;
        $this->loginArray['username'] = $this->username;
        $this->loginArray['password'] = $this->password;
    }

    public function getParams(){
      return $this->loginArray;
    }
  }

 ?>
