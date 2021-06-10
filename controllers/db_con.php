<?php
  /**
   * controller of the application
   */
  //require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";

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
      $keys = array_keys($data);
      $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
      $fields = implode(",", $keys);
      $table = $this ->escape_mysql_identifier($table);
      $placeholders = str_repeat('?,', count($keys) - 1) . '?';

      $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
      $this->pdo->prepare($sql)->execute(array_values($data));

      if($table == $this ->escape_mysql_identifier('childrenmain')){
        $ID = $this->pdo->lastInsertId();
        setcookie ("childIDCookie" , (int)$ID);
      }elseif($table == $this ->escape_mysql_identifier('medicalmain')){
        $ID = $this->pdo->lastInsertId();
        setcookie ("medicalIDCookie" , (int)$ID);
      }elseif ($table == $this ->escape_mysql_identifier('socialhistory')) {
        $ID = $this->pdo->lastInsertId();
        setcookie ("socialIDCookie" , (int)$ID);
      }elseif ($table == $this ->escape_mysql_identifier('medicalpexam')) {
        $ID = $this->pdo->lastInsertId();
        setcookie ("pexamIDCookie" , (int)$ID);
      }elseif ($table == $this ->escape_mysql_identifier('medicalvacc')) {
        $ID = $this->pdo->lastInsertId();
        setcookie ("vaccIDCookie" , (int)$ID);
      }elseif ($table == $this ->escape_mysql_identifier('medicalpregnancymain')) {
        $ID = $this->pdo->lastInsertId();
        setcookie ("pregnancyIDCookie" , (int)$ID);
      }elseif ($table == $this ->escape_mysql_identifier('medicalvisits')) {
        $ID = $this->pdo->lastInsertId();
        setcookie ("visitIDCookie" , (int)$ID);
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
      $dataAllCildren = $this->pdo->query("SELECT * FROM childrenmain")->fetchAll();
      // and somewhere later:
      foreach ($data as $row) {
        //do something
      }
    }


    function getAllChildernReviewSoon(){
        $sql = "SELECT * FROM childrenmain NATURAL JOIN MedicalMain WHERE MedicalMain.reviewOn BETWEEN CURRENT_DATE() AND DATE_ADD(CURRENT_DATE(), INTERVAL 14 DAY)";
        $stmt =  $this->pdo->query($sql)-fetchAll();
        /*while ($row = $stmt->fetch()) {
          echo $row['name']."<br />\n";
        }*/
    }

    function getChildData($patientID){
      // select a particular child by id
      $stmt = $this->pdo->prepare("SELECT * FROM childrenmain WHERE ChildrenID=?");
      $stmt->execute([$patientID]);
      $child = $stmt->fetch();
    }

    function getChildDataForHeadline($patientID){
      // select a particular child by id
      $stmt = $this->pdo->prepare("SELECT ChildrenID, FirstName, LastName, CallNames,DOB,EDOB FROM childrenmain WHERE ChildrenID=?");
      $stmt->execute([$patientID]);
      $child = $stmt->fetch();
    }

    function getChildDataForSearch (){
      // select a particular childdata
      $dataAllCildren = $this->pdo->query("SELECT ChildrenID, FirstName, LastName, CallNames FROM ChildernMain")->fetchAll();
    }
}

  $controller = new DBCon();
  $controller -> connectToDB();


 ?>
