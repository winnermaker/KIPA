<?php
  /**
   * controller of the application
   */
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/models/patient_class.php";


  //$patient = new patient();

  class DBCon{
      private $pdo;
      private $currentChildID


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

    function insertChilderenMain($patientObj){
      $patient = $patientObj->getParams();
      $sql = "INSERT INTO childrenmain (FirstName, LastName, CallNames, DOB, EDOB, Gender, AdmDate, DisDate, PicTaken, Picture) values (?,?,?,?,?,?,?,?,?,?)";
      $this->pdo->prepare($sql)->execute([$patient["firstName"],$patient["lastName"],$patient["callName"],$patient["dateOfBirth"],$patient["estDateOfBirth"],$patient["gender"],$patient["admissionDate"],$patient["dischargeDate"],$patient["pictureTakenOn"],$patient["customFile"]]);
      $currentChildID = $this->pdo->lastInsertId();
      return  $this->pdo->lastInsertId();
    }

    function insertSocialHistory($socialObj){
      $social = $socialObj -> getParams();
      $sql = "INSERT INTO SocialHistory (fk_ChildrenID, SocialDate, LivedWithWho, LivedWhere, ParentsAlive, ParentsDiedWhen, ParentsLiveTogether, ParentsLivePeace, ProfessSourceIncome, IncomeForHowMany, HowManySiblings, SiblingsGender, SiblingsAge, SibAliveHealthy, OneFatherOneMother, NxtOfKin_Caretaker, Abuse, SexuallyActive, FamilyPlanning) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $this->pdo->prepare($sql)->execute([]);
    }

    function insertMedicalMain($medicalObj){
      $medical = $medicalObj->getParams();
      $sql = "INSERT INTO MedicalMain (fk_ChildrenID, ImmuniCompl, Plan, HIVPos, HIVCheckDate, HIVTreated, NHIReg, NHINr, TPos, TposCheckDate, TPosTreated, STDPos, STDPosCheckDate, STDPosTreated, HepBPos, HepBPosCheckDate, HepBPosTreated, SickelCellPos, SickelCellType, G6DP, Allergies, PregnancyHist, PregTestPos, PregTestDate, PhysicalAbuse, SexualAnuse, Conditions, PermMedication, NextVaccDate, ReviewOn, OtherInfo, MenarcheHist) values ()";
      $this->pdo->prepare($sql)->execute([]);

    }

    function insertMedicalVisits($visitsObj){
      $visits = $visitsObj->getParams();
      $sql = "INSERT INTO MedicalVisits (fk_MedicalID, VisitDate, VisitType, ExLocation, ExCause, PresComplaint, HistPresComplaint, PE, Plan, RVD, Medication, Remarks, Therapy, Diagnosis) values ()";
      $this->pdo->prepare($sql)->execute([]);

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
      $sql = "";
      $this->pdo->prepare($sql)->execute([]);

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
      $id = $patient.id;
      $sql = "SELECT * FROM ChildernMain WHERE ChilderenID = ?";
      $pdo->prepare($sql)->execute([$id]);

    }
  }


 ?>
