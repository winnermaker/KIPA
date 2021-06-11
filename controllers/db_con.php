<?php
  /**
   * database controller of the application
   */
  class DBCon{
      private $pdo;

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

    function escape_mysql_identifier($field){
      return "`".str_replace("`", "``", $field)."`";
    }

    function prepared_insert($table, $data) {
      //generic insert function $table = the name of the table to insert data in, $data = the date that should be inserted in DB
      $keys = array_keys($data);
      $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
      $fields = implode(",", $keys);
      $table = $this ->escape_mysql_identifier($table);
      $placeholders = str_repeat('?,', count($keys) - 1) . '?';

      $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
      $this->pdo->prepare($sql)->execute(array_values($data));

      //cookies to save ChildrenID ar MedicalID to use for foreign key inserts later
      if($table == $this ->escape_mysql_identifier('childrenmain')){
        $ID = $this->pdo->lastInsertId();
        setcookie ("childIDCookie" , (int)$ID);
      }elseif($table == $this ->escape_mysql_identifier('medicalmain')){
        $ID = $this->pdo->lastInsertId();
        setcookie ("medicalIDCookie" , (int)$ID);
      }
      return $this->pdo->lastInsertId();
    }

    function prepared_update($table, $data) {
      //generic update function $table = the name of the table to update data in, $data = the date that should be updated in DB
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
      $dataAllCildren = $this->pdo->query("SELECT * FROM childrenmain")->fetchAll();
      // and somewhere later:
      foreach ($dataAllCildren as $row) {
        //do something
      }
    }

    function getMedicalData($childrenID){
      $sql = $this->pdo->prepare("SELECT * FROM medicalmain JOIN medicalvacc ON medicalmain.MedicalID = medicalvacc.fk_MedicalID WHERE fk_ChildrenID = ?");
      $sql->execute([$childrenID]);
      $medical = $sql->fetchAll();
      return $medical;
    }


    function getAllChildernReviewSoon(){
        $sql = "SELECT * FROM childrenmain JOIN medicalmain ON medicalmain.fk_CHildrenID = childrenmain.ChildrenID WHERE MedicalMain.reviewOn BETWEEN CURRENT_DATE() AND DATE_ADD(CURRENT_DATE(), INTERVAL 14 DAY)";
        $stmt =  $this->pdo->query($sql)-fetchAll();
        /*while ($row = $stmt->fetch()) {
          echo $row['name']."<br />\n";
        }*/
    }

    function getChildData($childrenID){
      // select a particular child by id
      $sql = $this->pdo->prepare("SELECT * FROM childrenmain WHERE ChildrenID=?");
      $sql->execute([$childrenID]);
      $child = $stmt->fetch();
    }

    function getChildDataForHeadline($childrenID){
      // select a particular child by id
      $stmt = $this->pdo->prepare("SELECT ChildrenID, FirstName, LastName, CallNames,DOB,EDOB FROM childrenmain WHERE ChildrenID=?");
      $stmt->execute([$patientID]);
      $child = $stmt->fetch();
    }

    function getChildDataForSearch (){
      // select a particular childdata
      $dataAllCildren = $this->pdo->query("SELECT ChildrenID, FirstName, LastName, CallNames FROM ChildernMain")->fetchAll();
      return $dataAllCildren;
    }
}

  $controller = new DBCon();
  $controller -> connectToDB();


 ?>
