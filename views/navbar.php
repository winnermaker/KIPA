<!doctype html>
<html lang="en">
  <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

      $arrayNames = $controller->getChildDataForSearch();
      
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="navbar-brand" href="login_con.php">
            <img src="/kipa/views/img/logo2.png" class="pb-1"  alt="logo" width="50" height="35">
          </a>
          <a class="nav-link text-white" href="listOfPatients_con.php">List of Patients</a>
          <a class="nav-link text-white" href="patient_con.php">Forms</a>
        </div>
      </div>

        <form class="d-flex float-end" method="get" id="form"  action="patient_con.php" onsubmit="addParamsToUrl(this)" >
          <div class="input-group">
            <input class="form-control me-2" list="patientsdatalistOptions" size="40px;" id="namesDataList" placeholder="Type to search...">
            <datalist id='patientsdatalistOptions'>
            <?php
              if(isset($arrayNames)){
                foreach($arrayNames as $key => $value){
                  foreach ($value as $row) {
                  echo  "<option value='$row' . '['names']' . />";
                    } 
                  }
                }
            ?>
            </datalist>

              <input type="submit" class="btn btn-success" value="Submit">
        </div>
        </form>

    </div>
    <script>

    function addParamsToUrl(this)
          {
            $(element).attr('href', function() {
              var medicalID = getUrlParameter('medicalID');
              var childrenID = getUrlParameter('childrenID');
        
              return this.href + '?childrenID=' + childrenID  +  '&medicalID='+ medicalID;
            });
          }


  </script>
  </nav>
</html>


