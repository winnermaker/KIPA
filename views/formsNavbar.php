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
              var medicalID = getUrlParameter('medicalID');
              var childrenID = getUrlParameter('childrenID');
        
              return this.href + '?childrenID=' + childrenID  +  '&medicalID='+ medicalID;
            });
          }


          var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };
    </script>
      
  </body>
</html>