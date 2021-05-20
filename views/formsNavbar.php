<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; 
    require 'navbar.php';
    
    ?>
    
  </head>
  <body>
    <div class="container mt-3">
      <ul class="nav nav-pills nav-fill border border-dark " id="pills-tab" role="tablist">
        <li class="nav-item">
          <a  href="patient_view.php" class="nav-link text-dark" role="tab" >Patients</a>
        </li>
        <li class="nav-item">
          <a href="medicalMain_view.php" class="nav-link text-dark"  role="tab" >Medical Main</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visits
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="visitData_view.php">Visit Data</a></li>
            <li><a class="dropdown-item text-dark" href="visitDiagnostic_view.php">Diagnostic Data</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="socialHistory_view.php" class="nav-link text-dark"  role="tab"  >Social History</a>
        </li>
        <li class="nav-item">
          <a href="pexam_view.php" class="nav-link text-dark"  role="tab" >Physical Examination</a>
        </li>
        <li class="nav-item">
          <a href="pregnancy_view.php" class="nav-link text-dark"  role="tab" >Pregnancy</a>
        </li>
        <li class="nav-item">
          <a href="vaccination_view.php" class="nav-link text-dark"  role="tab">Vaccination</a>
        </li>
      </ul>
    </div>
      
  </body>
</html>