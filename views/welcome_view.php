<!doctype html>
<html lang="en">
  <head>
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
    ?>


    <title>	Welcome</title>

    <style>
        .container{
            margin: auto;
            padding: 30px;
            text-align: center;
        }

        .logoImage{
            width:36%;
        }

        .logout{
          margin: auto;
          padding: 20px;
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

        .text{
          color: #c96120;
        }
    </style>
  </head>
  <body>
    <div class="logout">
      <a href="logout_con.php" class="logoutBtn">Logout</a>
    </div>

    <div class="container mt-5">
      <img src="/kipa/views/img/loginImg.png" class="logoImage" alt="" width="330" height="150" >
      <h2 class="text mt-3 col">Welcome to Kinder Paradise Database Application</h2>
    </div>
  </body>
</html>
