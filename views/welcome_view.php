<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="/kipa/views/img/logo2.png">
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbarWelcome.php";
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
        
        .text{
          color: #c96120;
        }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <img src="/kipa/views/img/loginImg.png" class="logoImage" alt="" width="330" height="150" >
      <h2 class="text mt-3 col">Welcome to Kinder Paradise Database Application</h2>
    </div>
  </body>
</html>
