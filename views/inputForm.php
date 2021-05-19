<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; 
    require 'navbar.php';
    
    ?>
    <style>
    </style>

    <title>Medical Tab</title>
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-pills nav-fill mt-2 mb-2 border border-dark " id="pills-tab" role="tablist">
        <li class="nav-item">
          <a  href="patient.php" class="nav-link"  role="tab" >Patients</a>
        </li>
        <li class="nav-item">
          <a href="medicalMain.php" class="nav-link"  >Medical Main</a>
        </li>
        <li class="nav-item">
          <a href="MedicalVisits.php" class="nav-link"  role="tab" > Visits</a>
        </li>
        <li class="nav-item">
          <a href="SocialHistory.php" class="nav-link"  role="tab"  >Social History</a>
        </li>
        <li class="nav-item">
          <a href="medicalPexam.php" class="nav-link"  role="tab" >Physical Examination</a>
        </li>
        <li class="nav-item">
          <a href="medicalPregnancy.php" class="nav-link"  role="tab" >Pregnancy</a>
        </li>
        <li class="nav-item">
          <a href="medicalVaccination.php" class="nav-link"  role="tab">Vaccination</a>
        </li>
      </ul>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script>
          $('input,textarea,select').addClass('border border-dark');
    </script>
  </body>
</html>