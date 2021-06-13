<!doctype html>
<html lang="en">
  <head>
    <?php
         require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
         require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbarLogin.php";
    ?>
    

    <title>Login</title>

    <style>
        .container{
            margin: auto;
            width: 70%;
            padding: 30px;
            text-align: center;
        }

        .logoImage{
            width:36%;
        }

        .username{
            margin:auto;
        }

        .password{
            margin:auto;
        }

    </style>
  </head>
  <body>
    <form action="login_con.php" method="post">
            <div class="container mt-5">
          
                
                    <img src="/kipa/views/img/loginImg.png" class="logoImage" alt="" width="330" height="150" >
                    <h2 class="mt-3 col">Login</h2>     

                <div class="form-row">
                    <div class="form-group username mt-5 col-4">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group password mt-3 col-4">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                </div>

                <div class="form-row mt-4 ">
                    <button class="btn btn-primary col-4" type="submit">Login</button>
                </div>

            </div>
    </form>

    <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>

  </body>
</html>