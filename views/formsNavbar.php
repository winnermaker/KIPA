<!doctype html>
<html lang="en">
  <body>
    <div class="container mt-3">
      <ul class="nav nav-pills nav-fill border border-dark " id="pills-tab" role="tablist">
        <li class="nav-item">
          <a  href="patient_con.php" class="nav-link text-dark" role="tab" >Patients</a>
        </li>
        <li class="nav-item">
          <a href="medicalMain_con.php" onclick="addParamsToUrl(this)" class="nav-link text-dark"  role="tab" >Medical Main</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visits
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="visitData_con.php">Visit Data</a></li>
            <li><a class="dropdown-item text-dark" href="visitDiagnostic_con.php">Diagnostic Data</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="socialHistory_con.php" class="nav-link text-dark"  role="tab"  >Social History</a>
        </li>
        <li class="nav-item">
          <a href="pexam_con.php" class="nav-link text-dark"  role="tab" >Physical Examination</a>
        </li>
        <li class="nav-item">
          <a href="pregnancy_con.php" class="nav-link text-dark"  role="tab" >Pregnancy</a>
        </li>
        <li class="nav-item">
          <a href="vaccination_con.php" class="nav-link text-dark"  role="tab">Vaccination</a>
        </li>
      </ul>
    </div>
    
    <script>
      function addParamsToUrl(element)
          {
            $(element).attr('href', function() {
              var childrenID = $(this).closest("tr").find('td[name="childrenID"]').html();
              var reviewOn = $(this).closest("tr").find('td[name="reviewOn"]').html();
              var nextVaccDate = $(this).closest("tr").find('td[name="nextVaccDate"]').html();
              var medicalID = $(this).closest("tr").find('td[name="medicalID"]').html();
              return this.href + '?childrenID=' + childrenID  +  '&medicalID='+ medicalID + '&reviewOn=' + reviewOn + '&nextVaccDate=' + nextVaccDate;
            });
          }
    </script>
      
  </body>
</html>