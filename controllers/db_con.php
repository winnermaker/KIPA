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
          //echo "Connected successfully";
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

    function prepared_insert($pdo, $table, $data) {
      $keys = array_keys($data);
      $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
      $fields = implode(",", $keys);
      $table = $this ->escape_mysql_identifier($table);
      $placeholders = str_repeat('?,', count($keys) - 1) . '?';
      $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
      $pdo->prepare($sql)->execute(array_values($data));
    }

    function insertChilderenMain($patientObj){
      $patient = $patientObj->getParams();
      $sql = "INSERT INTO childrenmain (FirstName, LastName, CallNames, DOB, EDOB, Gender, AdmDate, DisDate, PicTaken, Picture) values (?,?,?,?,?,?,?,?,?,?)";
      $this->pdo->prepare($sql)->execute([$patient["firstName"],$patient["lastName"],$patient["callName"],$patient["dateOfBirth"],$patient["estDateOfBirth"],$patient["gender"],$patient["admissionDate"],$patient["dischargeDate"],$patient["pictureTakenOn"],$patient["customFile"]]);
      $this->currentChildID = $this->pdo->lastInsertId();
      $childID = $this->pdo->lastInsertId();
      $this->setCurrentChildID($childID);
      return  $childID;
    }

    function insertSocialHistory($socialObj){
      $social = $socialObj -> getParams();
      $social['fk_ChildrenID'] = 15;
      $this->prepared_insert($this->pdo, 'SocialHistory', $social);
    }

    function insertMedicalMain($medicalObj){
      $medical = $medicalObj->getParams();
      $medical['fk_ChildrenID'] = 15;
      $this->prepared_insert($this->pdo, 'MedicalMain', $medical);
    }

    function insertMedicalVisits($visitsObj){
      $visits = $visitsObj->getParams();
      $visits['fk_MedicalID'] = 1;
      $this->prepared_insert($this->pdo, 'MedicalVisits', $visits);

    }

    function insertMedicalVacc($vaccObj){
      $vacc = $vaccObj->getParams();
      $sql = "INSERT INTO MedicalVacc (fk_MedicalID, VaccRemarks, Vaccine, nxtVaccDate) values (?, ?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }

    function insertMedicalVaccDate($vaccObj){
      $vaccDate = $vaccObj->getParams();
      $sql = "INSERT INTO MedicalVaccDate (fk_VaccID, VaccDate) values (?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }

    function insertMedicalPregnancyMain($pregnancyObj){
      $pregnancy = $pregnancyObj->getParams();
      $sql = "INSERT INTO MedicalPregnancyMain (fk_MedicalID, EntryDate, Gravida, Para, alive, dead, top) values (?,?,?,?,?,?,?)";
      $this->pdo->prepare($sql)->execute([]);

    }

    function insertMedicalPregnancyChildData($pregnancyObj){
      $childData = $pregnancyObj->getParams();
      $sql = "INSERT INTO MedicalPregnancyChildData (fk_MotherID, DOB, Name, EvDurP, durLabor, spont_CS_forceps, Gender, Healthy, Problems, Remarks) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }
    function insertMedicalPresentPregnancy($pregnancyObj){
      $presentPreg = $pregnancyObj->getParams();
      $sql = "INSERT INTO MedicalPresentPregnancy (fk_MotherID, preg, GestationalAge, EstDelivery, AntClinicAttend, Problems, Remarks) values (?, ?, ?, ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }
    function insertPEXAM($PEXAMObj){
      $pexam = $PEXAMObj->getParams();
      $pexam['fk_MedicalID'] = 1;
      $this->prepared_insert($this->pdo, 'PEXAM', $visits);

    }
    function insertMedicalGenMale($PEXAMObj){
      $genMale = $PEXAMObj->getParams();
      $sql = "INSERT INTO MedicalGenMale (fk_PEXAMID, circumcised, TannerSt, Descensus) values (?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }
    function insertMedicalGenFemale($PEXAMObj){
      $genFemale = $PEXAMObj->getParams();
      $sql = "INSERT INTO MedicalGenFemale (fk_PEXAMID, circumcised, TannerSt, Introitus, Discharge, Breasts, Mastodynia, Period, Dysmenorrhoea, Dyspareunia, Menarche, Pregnancy) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute([]);

    }

    function getAllChildern(){
      $sql = "SELECT * FROM ChildernMain";
      $data = $pdo->query($sql)->fetchAll();
      }


    function getAllChildernReviewSoon(){
        $sql = "SELECT ChildernMain.Name FROM ChildernMain NATURAL JOIN MedicalMain WHERE MedicalMain.reviewOn BETWEEN ? AND ?";
        $stmt = $pdo->query($sql);
        /*while ($row = $stmt->fetch()) {
          echo $row['name']."<br />\n";
        }*/
    }

    function getChildData ($patient){
      //$id = $patient.id;
      $sql = "SELECT * FROM ChildernMain WHERE ChilderenID = ?";
      $pdo->prepare($sql)->execute([$id]);

    }
  }

  $controller = new DBCon();
  $controller -> connectToDB();


 ?>
