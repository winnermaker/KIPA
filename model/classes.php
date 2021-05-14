<?php
  /**
   * class to connect to the database
   */
  class db_connection{
    private $servername;
    private $username;
    private $password;
    private $databasename;

    public function connectToDB(){
      $servername = "localhost";
      $username = "admin";
      $password = "admin";
      $databasename = "kipa";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      }
      catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

    }
  }

  /**
   * class childeren to crate an children object from table ChildernMain of database
   */
  class children
  {

    function __construct(argument)
    {
      // code...
    }
  }

?>
