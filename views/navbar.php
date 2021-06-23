<!doctype html>
<html lang="en">
  <head>
  <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";

      $arrayNames = $controller->getChildDataForSearch();
  ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="navbar-brand" href="login_con.php">
              <img src="/kipa/views/img/logo2.png" class="pb-1"  alt="logo" width="50" height="35">
            </a>
            <a class="nav-link text-white" href="listOfPatients_con.php" onclick="clearCookies()">List of Patients</a>
            <a class="nav-link text-white" href="patient_con.php" onclick="clearCookies()">Forms</a>
          </div>
        </div>

          <form onsubmit="return validateForm();" class="d-flex float-end" method="get" id="searchbarForm">
            <div class="input-group">
              <input class="form-control me-2" list="patientsdatalistOptions" size="40px;" id="namesDataList" placeholder="Type to search...">
              <datalist id='patientsdatalistOptions'>
              <?php
                if(isset($arrayNames)){
                  foreach($arrayNames as $key => $value){
              ?>
                      <option data-value="<?php echo $key;?>" data-id="<?php echo $value['medicalID'];?>" value="<?php echo $value['names']; ?>"></option>

                <?php
                      }
                  }
                ?>
                </datalist>


              <button type="submit" class="btn btn-success">Search</button>
            </div>
          </form>

      </div>
        <script>
          function validateForm() {
              //alert('Validating form...');
              var shownVal = document.getElementById("namesDataList").value;
              var childrenID = document.querySelector("#patientsdatalistOptions option[value='"+shownVal+"']").dataset.value;

              var medicalID = document.querySelector("#patientsdatalistOptions option[value='"+shownVal+"']").dataset.id;

              value = escape(childrenID);
              location.href = 'patient_con.php?childrenID=' + value + '&medicalID=' + medicalID;
              return false;
          }
        </script>
        <script>
        function clearCookies(){
          document.cookie = 'childIDCookie' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
          document.cookie = 'medicalIDCookie' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
         }

        </script>
    </nav>
  </body>
</html>
