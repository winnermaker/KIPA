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

      function moveElement(&$array, $a, $b) {
          //helper function to switch two elements in an array
          $p1 = array_splice($array, $a, 1);
          $p2 = array_splice($array, 0, $b);
          $array = array_merge($p2,$p1,$array);
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

        $this->moveElement($values,0,count($values)-1);

       $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
       $IDKey = $this ->escape_mysql_identifier($IDKey);

        $keys = implode(" = ?, ", $keys);
        $keys = $keys." = ?";
        $IDKey = $IDKey." = ?";
        $table = $this ->escape_mysql_identifier($table);

        $sql = "UPDATE $table SET $keys WHERE $IDKey";

        $test = $this->pdo->prepare($sql)->execute($values);
      }

      function getAllChildern(){
        $dataAllCildren = $this->pdo->query("SELECT * FROM childrenmain ORDER BY ChildrenID DESC")->fetchAll();
        return $dataAllCildren;
      }

      function getChildData($childrenID){
        // select a particular child by id
        $sql = $this->pdo->prepare("SELECT * FROM childrenmain WHERE ChildrenID=?");
        $sql->execute([$childrenID]);
        $child = $sql->fetch();
        return $child;
      }

      function getChildDataForListOfPatients(){
          $sql = "SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames, childrenmain.Gender, childrenmain.DOB, childrenmain.EDOB, childrenmain.AdmDate, childrenmain.DisDate, medicalmain.ReviewOn, medicalmain.MedicalID, medicalmain.nextVaccDate FROM childrenmain JOIN medicalmain ON medicalmain.fk_CHildrenID = childrenmain.ChildrenID ORDER BY childrenmain.ChildrenID";
          $data = $this->pdo->query($sql)->fetchAll();
          return $data;
      }

      function getChildDataForHeadline($childrenID){
        // select childata for headlines
        $stmt = $this->pdo->prepare("SELECT ChildrenID, FirstName, LastName, CallNames,DOB,EDOB FROM childrenmain WHERE ChildrenID=?");
        $stmt->execute([$childrenID]);
        $child = $stmt->fetch();
        return $child;
      }

      function getChildDataForSearch (){
        // select childdata for searchbar
        $dataAllCildren = $this->pdo->query("SELECT ChildrenID, FirstName, LastName, CallNames FROM ChildernMain")->fetchAll();
        return $dataAllCildren;
      }

      function getMedicalData($childrenID){
        $sql = "SELECT medicalmain.*, medicalvacc.nextVaccDate FROM medicalmain JOIN medicalvacc ON medicalmain.MedicalID = medicalvacc.fk_MedicalID WHERE medicalmain.fk_CHildrenID = ? ORDER BY medicalvacc.nextVaccDate LIMIT 1";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$childrenID]);
        $medical = $smt->fetchAll();

        if(empty($medical)){
          $sql = "SELECT * FROM medicalmain WHERE fk_CHildrenID = ?";
          $smt = $this->pdo->prepare($sql);
          $smt->execute([$childrenID]);
          $medical = $smt->fetchAll();
        }
        return $medical;
      }

      function getAllChildernReviewSoon(){
          $sql = "SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames, childrenmain.Gender, childrenmain.DOB, childrenmain.EDOB, childrenmain.AdmDate, childrenmain.DisDate, medicalmain.ReviewOn FROM childrenmain JOIN medicalmain ON medicalmain.fk_CHildrenID = childrenmain.ChildrenID WHERE medicalmain.reviewOn BETWEEN CURRENT_DATE() AND DATE_ADD(CURRENT_DATE(), INTERVAL 14 DAY)";
          $data =  $this->pdo->query($sql)->fetchAll();
          return $data;
      }

      function getAllChildernVaccSoon(){
          $sql = "SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames, childrenmain.Gender, childrenmain.DOB, childrenmain.EDOB, childrenmain.AdmDate, childrenmain.DisDate, medicalvacc.nextVaccDate FROM childrenmain JOIN medicalmain ON childrenmain.ChildrenID = medicalmain.fk_CHildrenID JOIN medicalvacc ON medicalvacc.fk_MedicalID = medicalmain.MedicalID WHERE medicalvacc.nextVaccDate BETWEEN CURRENT_DATE() AND DATE_ADD(CURRENT_DATE(), INTERVAL 28 DAY)";
          $data =  $this->pdo->query($sql)->fetchAll();
          return $data;
      }
}

  $controller = new DBCon();
  $controller -> connectToDB();
 ?>
