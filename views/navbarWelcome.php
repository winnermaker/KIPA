<style>
        .logout{
          margin: auto;
          padding-right: 5px;
          font-size: 25px;
        }

        .logoutBtn {
          border-radius: 10px;
          display: inline-block;
          background-color: #0d6efd;
          color: #FFFFFF;
          padding: 14px 25px;
          text-align: center;
          text-decoration: none;
          font-size: 16px;
          margin-left: 20px;
          float: right;
        }

        a:hover {
          color: #FFFFFF;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="navbar-brand" href="login_con.php">
          <img src="/kipa/views/img/logo2.png" class="pb-1" alt="logo" width="50" height="35">
        </a>
        <a class="nav-link text-white" href="listOfPatients_con.php" onclick="clearCookies()">List of Patients</a>
        <a class="nav-link text-white" href="patient_con.php" onclick="clearCookies()">Forms</a>
      </div>
    </div>
  </div>
  <div class="float-end">
  <div class="logout">
      <a href="logout_con.php" class="logoutBtn">Logout</a>
    </div>
</div>
  <script>
        function clearCookies(){
          document.cookie = 'childIDCookie' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
          document.cookie = 'medicalIDCookie' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
         }

  </script>
</nav>
