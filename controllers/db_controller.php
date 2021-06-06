<?php
  /**
   * controller of the application
   */

  require '..\backend\db_connection.php';
  require '..\model\patient_class.php';

  $pdo = new db_connection();
  $pdo->connectToDB();
  $patient = new patient();

  class KipaController{

    function __construct(argument)
    {
      // code...
    }

    function insertChilderenMain(){
      $patient->getParams();
      $sql = "INSERT INTO ChilderenMain (ChildrenID, FirstName, LastName, CallNames, DOB, EDOB, Gender, AdmDate, DisDate, PicTaken, Picture) values (?, ?, ? ?, ?, ?, ?, ?, ?, ?, ?)";
      $pdo->prepare($sql)->execute([$patient["firstName"],$patient["lastName"],$patient["callName"],$patient["dateOfBirth"],$patient["estDateOfBirth"],$patient["gender"],$patient["admissionDate"],$patient["dischargeDate"],$patient["pictureTakenOn"],$patient["customFile"]]);

    }

    function insertSocialHistory(){
      $sql = "INSERT INTO SocialHistory (SocialID, fk_ChildrenID, SocialDate, LivedWithWho, LivedWhere, ParentsAlive, ParentsDiedWhen, ParentsLiveTogether, ParentsLivePeace, ProfessSourceIncome, IncomeForHowMany, HowManySiblings, SiblingsGender, SiblingsAge, SibAliveHealthy, OneFatherOneMother, NxtOfKin_Caretaker, Abuse, SexuallyActive, FamilyPlanning) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $pdo->prepare($sql)->execute([]);
    }

    function insertMedicalMain(){
      $sql = "INSERT INTO MedicalMain (MedicalID, fk_ChildrenID, ImmuniCompl, Plan, HIVPos, HIVCheckDate, HIVTreated, NHIReg, NHINr, TPos, TposCheckDate, TPosTreated, STDPos, STDPosCheckDate, STDPosTreated, HepBPos, HepBPosCheckDate, HepBPosTreated, SickelCellPos, SickelCellType, G6DP, Allergies, PregnancyHist, PregTestPos, PregTestDate, PhysicalAbuse, SexualAnuse, Conditions, PermMedication, NextVaccDate, ReviewOn, OtherInfo, MenarcheHist) values ()";
      $pdo->prepare($sql)->execute([]);

    }

    function insertMedicalVisits(){
      $sql = "INSERT INTO MedicalVisits (VisitID, fk_MedicalID, VisitDate, VisitType, ExLocation, ExCause, PresComplaint, HistPresComplaint, PE, Plan, RVD, Medication, Remarks, Therapy, Diagnosis) values ()";
      $pdo->prepare($sql)->execute([]);

    }

    function insertMedicalVacc(){
      $sql = "INSERT INTO MedicalVacc (VaccID, fk_MedicalID, VaccRemarks, Vaccine, nxtVaccDate) values (?, ?, ?, ?, ?)";
      $pdo->prepare($sql)->execute([]);

    }

    function insertMedicalVaccDate(){
      $sql = "INSERT INTO MedicalVaccDate (VaccDateID, fk_VaccID, VaccDate) values (?, ?, ?)";
      $pdo->prepare($sql)->execute([]);

    }

    function insertMedicalPregnancyMain(){
      $sql = "INSERT INTO MedicalPregnancyMain (MotherID, fk_MedicalID, EntryDate, Gravida, Para, alive, dead, top) values (?,?,?,?,?,?,?,?)";
      $pdo->prepare($sql)->execute([]);

    }

    function insertMedicalPregnancyChildData(){
      $sql = "INSERT INTO MedicalPregnancyChildData (ChildID, fk_MotherID, DOB, Name, EvDurP, durLabor, spont_CS_forceps, Gender, Healthy, Problems, Remarks) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $pdo->prepare($sql)->execute([]);

    }
    function insertMedicalPresentPregnancy(){
      $sql = "INSERT INTO MedicalPresentPregnancy (PresPreagnancyID, fk_MotherID, preg, GestationalAge, EstDelivery, AntClinicAttend, Problems, Remarks) values (?, ?, ?, ?, ?, ?, ?, ?)";
      $pdo->prepare($sql)->execute([]);

    }
    function insert(){
      $sql = "";
      $pdo->prepare($sql)->execute([]);

    }
    function insertMedicalGenMale(){
      $sql = "INSERT INTO MedicalGenMale (GenMaleID, fk_PEXAMID, circumcised, TannerSt, Descensus) values (?, ?, ?, ?, ?)";
      $pdo->prepare($sql)->execute([]);

    }
    function insertMedicalGenFemale(){
      $sql = "INSERT INTO MedicalGenFemale (GenFemaleID, fk_PEXAMID, circumcised, TannerSt, Introitus, Discharge, Breasts, Mastodynia, Period, Dysmenorrhoea, Dyspareunia, Menarche, Pregnancy) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $pdo->prepare($sql)->execute([]);

    }

    /*function insert(){
      $sql = "";
      $pdo->prepare($sql)->execute([]);

    }*/


    function getAllChildern(){
      $sql = "SELECT * FROM ChildernMain";
      $data = $pdo->query($sql)->fetchAll();
      }
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
