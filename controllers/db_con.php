<?php
  /**
   * controller of the application
   */
  //require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";

  class DBCon{
      private $pdo;
      private $currentChildID;


      public function connectToDB(){
        $servername = "localhost";
        $username = "admin";
        $password = "admin";
        $databasename = "kipa";

        try {
          $this->pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
          // set the PDO error mode to exception
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $this->pdo;
        }
        catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
          return $e->getMessage();
        }

      }

    function setCurrentChildID($ID){
      $this->currentChildID = $ID;
    }

    function getCurrentChildID(){
      return  $this->currentChildID;
    }

    function escape_mysql_identifier($field){
      return "`".str_replace("`", "``", $field)."`";
    }

    function prepared_insert($table, $data) {
      $keys = array_keys($data);
      $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
      $fields = implode(",", $keys);
      $table = $this ->escape_mysql_identifier($table);
      $placeholders = str_repeat('?,', count($keys) - 1) . '?';

      $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
      $this->pdo->prepare($sql)->execute(array_values($data));

      if($table == $this ->escape_mysql_identifier('childrenmain')){
        $childID = $this->pdo->lastInsertId();
        $this->setCurrentChildID($childID);
      }
    }

    function prepared_update($table, $data) {
      $values = array_values($data);
      $keys = array_keys($data);

      $IDKey = $keys[0];
      unset($keys[0]);

      $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
      $IDKey = $this ->escape_mysql_identifier($IDKey);

      $keys = implode("=?, ", $keys);
      $keys = $keys."=?";
      $IDKey = $IDKey."=?";
      $table = $this ->escape_mysql_identifier($table);


      $sql = "UPDATE $table SET $keys WHERE $IDKey";
      $this->pdo->prepare($sql)->execute($values);
    }

    function insertMedicalVaccDate($table, $vaccDateArray){
      $vaccDate = $vaccObj->getParams();
      prepared_insert($table, $data);
      $sql = "INSERT INTO MedicalVaccDate (fk_VaccID, VaccDate) values (?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }

    function insertMedicalPregnancyChildData($table, $childrenArray){
      prepared_insert($table, $data);
      $childData = $pregnancyObj->getParams();
      $sql = "INSERT INTO MedicalPregnancyChildData (fk_MotherID, DOB, Name, EvDurP, durLabor, spont_CS_forceps, Gender, Healthy, Problems, Remarks) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }

    function insertSocialSiblings($table, $siblingArray){
      prepared_insert($table, $data);
    }

    function getAllChildern(){
      $sql = "SELECT * FROM ChildernMain";
      $data = $this->pdo->query($sql)->fetchAll();
      }


    function getAllChildernReviewSoon(){
        $sql = "SELECT ChildernMain.Name FROM ChildernMain NATURAL JOIN MedicalMain WHERE MedicalMain.reviewOn BETWEEN ? AND ?";
        $stmt = $pdo->query($sql);
        /*while ($row = $stmt->fetch()) {
          echo $row['name']."<br />\n";
        }*/
    }

    function getChildData ($patientID){
      $sql = "SELECT * FROM ChildernMain WHERE ChilderenID = ?";
      $pdo->prepare($sql)->execute([$patientID]);
    }
  }

  $controller = new DBCon();
  $controller -> connectToDB();


 ?>
