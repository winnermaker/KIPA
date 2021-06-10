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


      <form class="d-flex float-end" action="<?php substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  ?>">
        <div class="input-group">
          <input class="form-control me-2" list="patientsdatalistOptions" size="40px;" id="exampleDataList" placeholder="Type to search...">
          <datalist id="patientsdatalistOptions">
            <option value="Max Mustermann Mike">
            <option value="Maximilian Müller Thomas">
            <option value="Karin Müller Kari">
          </datalist>

            <button class="btn btn-success" type="submit">Search</button>
       </div>
      </form>

  </div>
</nav>
