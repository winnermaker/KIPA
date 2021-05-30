<?php
  /**
   * controller of the application
   */

  require '..\backend\db_connection.php';
  require '..\model\classes.php';

  $pdo = new db_connection();
  $pdo->connectToDB();

  class KipaController{

    function __construct(argument)
    {
      // code...
    }

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

    function getChildData (childern child){
      $id = child.ChilderenID;
      $sql = "SELECT * FROM ChildernMain WHERE ChilderenID = ?";
      $pdo->prepare($sql)->execute([$id]);

    }
  }


 ?>
