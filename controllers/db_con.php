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

      function prepared_insert($table, $data,&$insert) {
        //generic insert function $table = the name of the table to insert data in, $data = the date that should be inserted in DB
        try{
          $keys = array_keys($data);
          $keys = array_map( array( $this, 'escape_mysql_identifier' ), $keys );
          $fields = implode(",", $keys);
          $table = $this ->escape_mysql_identifier($table);
          $placeholders = str_repeat('?,', count($keys) - 1) . '?';

          $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
          $insert = $this->pdo->prepare($sql)->execute(array_values($data));

          if($table == $this ->escape_mysql_identifier('childrenmain')){
            $ID = $this->pdo->lastInsertId();
            setcookie ("childIDCookie" , (int)$ID);
          }elseif($table == $this ->escape_mysql_identifier('medicalmain')){
            $ID = $this->pdo->lastInsertId();
            setcookie ("medicalIDCookie" , (int)$ID);
          }
<<<<<<< HEAD
=======

          if($insert){
            $result['insert'] ='<div class="alert alert-success">The record was successfully inserted.<br></div>';
          }
          else{
            $result['insert'] ='<div class="alert alert-danger"> The record was not inserted.<br></div>';
          }
>>>>>>> 0115c6fec9da3d53d84f42789cc3553b9530ea39
        }catch(PDOException $e){
          $result['insert'] = "The record was not inserted.".$e->getMessage()."<br>";

        }
        $result['lastID'] = $this->pdo->lastInsertId();
        return $result;
      }

      function prepared_update($table, $data) {
        try {
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
          $update = $this->pdo->prepare($sql)->execute($values);

          if($update){
            $result='<div class="alert alert-success">The record was successfully updated.<br></div>';
          }
          else{
            $result='<div class="alert alert-danger"> The record was not updated.<br></div>';
          }
        } catch (PDOException $e) {
          $result = "The record was not updated.".$e->getMessage()."<br>";
        }
        return $result;
      }

      function unique_multidim_array($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
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
          $sql = "SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames, childrenmain.Gender, childrenmain.DOB, childrenmain.EDOB, childrenmain.AdmDate, childrenmain.DisDate FROM childrenmain ORDER BY childrenmain.ChildrenID DESC";
          $data = $this->pdo->query($sql)->fetchAll();
          return $data;
      }
      function getMedicalDataForListOfPatients(){
        $sql = "SELECT DISTINCT childrenmain.ChildrenID, medicalmain.MedicalID FROM childrenmain JOIN medicalmain ON medicalmain.fk_CHildrenID = childrenmain.ChildrenID ORDER BY childrenmain.ChildrenID DESC";
        $data = $this->pdo->query($sql)->fetchAll();
        return $data;
      }

      function getChildDataForHeadline($childrenID){
        // select childata for headlines
        $stmt = $this->pdo->prepare("SELECT ChildrenID, FirstName, LastName, CallNames,Gender,DOB,EDOB FROM childrenmain WHERE ChildrenID=?");
        $stmt->execute([$childrenID]);
        $child = $stmt->fetch();
        return $child;
      }

      function getChildDataForSearch (){
        // select childdata for searchbar
        $arrayPatientNames = array();
        $dataAllCildren = $this->pdo->query("SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames ,medicalmain.MedicalID FROM childrenmain JOIN medicalmain ON medicalmain.fk_CHildrenID = childrenmain.ChildrenID ORDER BY childrenmain.ChildrenID DESC")->fetchAll();
        foreach ($dataAllCildren as $key => $row) {
          $string = $row['FirstName'] . " " . $row['LastName'] . " " . $row['CallNames'];
          $childID = $row['ChildrenID'];
          $medicalID = $row['MedicalID'];

          $arrayPatientNames[$childID] = [
            'names' => $string,
            'medicalID' => $medicalID,
        ];

        }
        return $arrayPatientNames;
      }

      function getMedicalData($childrenID){
        $sql = "SELECT medicalmain.*, medicalvacc.nextVaccDate FROM medicalmain JOIN medicalvacc ON medicalmain.MedicalID = medicalvacc.fk_MedicalID WHERE medicalmain.fk_CHildrenID = ? ORDER BY medicalvacc.nextVaccDate LIMIT 1";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$childrenID]);
        $medical = $smt->fetch();

        if(empty($medical)){
          $sql = "SELECT * FROM medicalmain WHERE fk_CHildrenID = ?";
          $smt = $this->pdo->prepare($sql);
          $smt->execute([$childrenID]);
          $medical = $smt->fetch();
        }
        return $medical;
      }

      function getAllChildernReviewSoon(){
          $sql = "SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames, childrenmain.Gender, childrenmain.DOB, childrenmain.EDOB, childrenmain.AdmDate, childrenmain.DisDate, medicalmain.ReviewOn FROM childrenmain JOIN medicalmain ON medicalmain.fk_CHildrenID = childrenmain.ChildrenID WHERE medicalmain.reviewOn BETWEEN CURRENT_DATE() AND DATE_ADD(CURRENT_DATE(), INTERVAL 14 DAY) ORDER BY medicalmain.reviewOn";
          $data =  $this->pdo->query($sql)->fetchAll();
          return $data;
      }

      function getAllChildernVaccSoon(){
          $sql = "SELECT DISTINCT childrenmain.ChildrenID, childrenmain.FirstName, childrenmain.LastName, childrenmain.CallNames, childrenmain.Gender, childrenmain.DOB, childrenmain.EDOB, childrenmain.AdmDate, childrenmain.DisDate, medicalmain.MedicalID, medicalvacc.nextVaccDate FROM childrenmain JOIN medicalmain ON childrenmain.ChildrenID = medicalmain.fk_CHildrenID JOIN medicalvacc ON medicalvacc.fk_MedicalID = medicalmain.MedicalID WHERE medicalvacc.nextVaccDate BETWEEN CURRENT_DATE() AND DATE_ADD(CURRENT_DATE(), INTERVAL 28 DAY) ORDER BY medicalvacc.nextVaccDate";
          $data =  $this->pdo->query($sql)->fetchAll();
          $dataTest = $this->unique_multidim_array($data,'ChildrenID');
          return $dataTest;
      }

      function getSocialHist($childrenID){
        $sql = "SELECT * FROM socialhistory WHERE fk_childrenID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$childrenID]);
        $data = $smt->fetch();

        return $data;
      }

      function getSocialSibling($socialID){
        $sql = "SELECT * FROM socialsiblings WHERE fk_SocialID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$socialID]);
        $data = $smt->fetchAll();

        return $data;
      }

      function getCountSocialSibling($socialID){
        $sql = "SELECT COUNT(SiblingID) FROM socialsiblings WHERE fk_SocialID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$socialID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function getVisits($medicalID){
        $sql = "SELECT visitID, fk_MedicalID, visitDate, visitType, exLocation, exCause, RVD FROM medicalvisits WHERE fk_MedicalID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$medicalID]);
        $data = $smt->fetchAll();

        return $data;
      }

      function getVisitDiagnosticData($visitID){
        $sql = "SELECT * FROM medicalvisits WHERE visitID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$visitID]);
        $data = $smt->fetch();

        return $data;
      }

      function getPexamData($medicalID){
        $sql = "SELECT * FROM medicalpexam WHERE fk_MedicalID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$medicalID]);
        $data = $smt->fetch();

        return $data;
      }

      function getGenMData($pexamID){
        $sql = "SELECT * FROM medicalgenmale WHERE fk_PEXAMID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$pexamID]);
        $data = $smt->fetch();

        return $data;
      }

      function getCountGenMData($pexamID){
        $sql = "SELECT COUNT(GenMaleID) FROM medicalgenmale WHERE fk_PEXAMID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$pexamID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function getGenFData($pexamID){
        $sql = "SELECT * FROM medicalgenfemale WHERE fk_PEXAMID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$pexamID]);
        $data = $smt->fetch();

        return $data;
      }

      function getCountGenFData($pexamID){
        $sql = "SELECT COUNT(GenFemaleID) FROM medicalgenfemale WHERE fk_PEXAMID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$pexamID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function getPregnancyMainData($medicalID){
        $sql = "SELECT * FROM medicalpregnancymain WHERE fk_MedicalID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$medicalID]);
        $data = $smt->fetch();

        return $data;
      }

      function getPregnancyPresentData($motherID){
        $sql = "SELECT * FROM medicalpresentpregnancy WHERE fk_MotherID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$motherID]);
        $data = $smt->fetch();

        return $data;
      }

      function getCountPregnancyPresentData($motherID){
        $sql = "SELECT COUNT(PresPregnancyID) FROM medicalpresentpregnancy WHERE fk_MotherID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$motherID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function getPregnancyPreviousData($motherID){
        $sql = "SELECT * FROM medicalpregnancychilddata WHERE fk_MotherID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$motherID]);
        $data = $smt->fetchAll();

        return $data;
      }

      function getCountPregnancyPreviousData($motherID){
        $sql = "SELECT COUNT(ChildID) FROM medicalpregnancychilddata WHERE fk_MotherID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$motherID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function getVacc($medicalID){
        $sql = "SELECT * FROM medicalvacc WHERE fk_MedicalID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$medicalID]);
        $data = $smt->fetchAll();

        return $data;
      }

      function getCountVacc($medicalID){
        $sql = "SELECT COUNT(VaccID) FROM medicalvacc WHERE fk_MedicalID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$medicalID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function getVaccDates($vaccID){
        $sql = "SELECT VaccDateID, VaccDate FROM medicalvaccdate WHERE fk_VaccID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$vaccID]);
        $data = $smt->fetchAll();

        return $data;
      }

      function getCountVacDates($vaccID){
        $sql = "SELECT COUNT(VaccDate) FROM medicalvaccdate WHERE fk_VaccID = ?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$vaccID]);
        $data = $smt->fetch();

        return $data[0];
      }

      function login($table, $data){
        $username = $data['username'];
        $password = $data['password'];

        $returnArray = array();
        try
    		{
    			$select_stmt=$this->pdo->prepare("SELECT * FROM $table WHERE username=?");
    			$select_stmt->execute([$username]);
    			$row=$select_stmt->fetch();

    			if($select_stmt->rowCount() > 0)
    			{
    				if($username==$row["username"])
    				{
    					if(password_verify($password, $row["password"])){
    						$_SESSION["user_login"] = $row["UserID"];
                $_SESSION['time'] = time();
                $returnArray['loginMsg'] = "Successfully Login...";
    					}
    					else
    					{
    						$returnArray['error']="wrong password";
    					}
    				}
    				else
    				{
    					$returnArray['error']="wrong username";
    				}
    			}
    			else
    			{
    				$returnArray['error']="wrong username";
    			}
    		}
    		catch(PDOException $e)
    		{
    			$e->getMessage();
    		}
        return $returnArray;

      }

      function welcome($table, $id){

				$smt = $this->pdo->prepare("SELECT * FROM $table WHERE UserID=?");
				$smt->execute([$id]);
				$row=$smt->fetch();
        return $row;
      }

      function registration($table, $data){
        try {
            $username = $data['username'];
            $password = $data['password'];
            $returnArray = array();

            $sql = "SELECT username FROM userdetails WHERE username=?";
            $smt = $this->pdo->prepare($sql);
            $smt->execute([$data['username']]);
            $row=$smt->fetch();
            if($row){
              $returnArray['error'] = "Sorry username already exists";
            }
            else if(!isset($returnArray['error']))
            {
              $data['password'] = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()

              $id = $this->prepared_insert($table, $data);
              $returnArray['ID'] = $id;

              if($id){
                $returnArray['registerMsg'] = "Register Successfully..... Please Click On Login Account Link";
              }
            }
            return $returnArray;

        } catch (PDOException $e) {

        }
      }

      function checkIfEntryExsits($table, $IDValue, $IDKey) {
        $sql = "SELECT * FROM $table WHERE $IDKey=?";
        $smt = $this->pdo->prepare($sql);
        $smt->execute([$IDValue]);
        $row=$smt->fetch();

        return $row;
      }
}
  $controller = new DBCon();
  $controller -> connectToDB();
 ?>
