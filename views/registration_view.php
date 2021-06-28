<!doctype html>
<html lang="en">
  <head>
    <?php
         require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
         require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbarLogin.php";
    ?>


    <title>Registration</title>

    <style>
        .container{
            margin: auto;
            width: 70%;
            padding: 30px;
            text-align: center;
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
    <form action="registration_con.php" method="post">
            <div class="container mt-5">
                    <img src="/kipa/views/img/loginImg.png" class="logoImage" alt="" width="330" height="150" >
                    <h2 class="mt-3 col">Registration</h2>
                    <input type="hidden" id="userID" name="userID">

                <div class="form-row">
                    <div class="form-group username mt-5 col-4">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group password mt-3 col-4">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group password mt-3 col-4">
                        <label for="password" class="form-label">Repeat Password</label>
                        <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" required>
                    </div>
                </div>

                <div class="form-row mt-4 ">
                      <button class="btn btn-primary col-4" type="submit">Registration</button>
                </div>

                <div class="form-row">
        				      <div class="form-group password mt-3 col-4">
        				            You already have an account login here? <a href="login_con.php"><p class="text-info">Go to Login</p></a>
        				      </div>
        				</div>

            </div>
    </form>

    <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>

  </body>
</html>
