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
          <a class="nav-link text-white" href="listOfPatients_con.php">List of Patients</a>
          <a class="nav-link text-white" href="patient_con.php">Forms</a>
        </div>
      </div>

        <form onsubmit="return validateForm();" class="d-flex float-end" method="get" id="searchbarForm">
          <div class="input-group">
            <input class="form-control me-2" list="patientsdatalistOptions" size="40px;" id="namesDataList" placeholder="Type to search...">
            <datalist id='patientsdatalistOptions'>
            <?php
              if(isset($arrayNames)){
                foreach($arrayNames as $key => $value){
                  foreach ($value as $row) {
                    echo  "<option data-value='$key' value='$row'></option> ";
                    } 
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
          var value2send = document.querySelector("#patientsdatalistOptions option[value='"+shownVal+"']").dataset.value;
   
          value = escape(value2send);
          location.href = 'patient_con.php?childrenID=' + value;
          return false;
      }
  </script>
  </body>
  </nav>
</html>
