<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <?php 
    require 'navbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; 
    
    ?>
    <style>
    </style>

    <title>Medical Tab</title>
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-pills nav-fill mt-2 mb-2 border border-dark " id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" role="tab"  href="patient.php">Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  role="tab"  href="medicalMain.php" >Medical Main</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  role="tab"  href="MedicalVisits.php" > Visits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  role="tab"  href="SocialHistory.php" >Social History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  role="tab"  href="medicalPexam.php" >Physical Examination</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  role="tab"  href="medicalPregnancy.php" >Pregnancy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  role="tab"  href="medicalVaccination.php" >Vaccination</a>
        </li>
      </ul>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



        <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>

  </body>
</html>