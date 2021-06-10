<!doctype html>
<html lang="en">
  <head>

    <?php
         require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
         require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
    ?>
    

    <title>Login</title>
  </head>
  <body>
    <form action="login_con.php" method="post">
        <div class="d-flex align-items-center justify-content-center mt-5">
            <div class="container">
                <img src="/kipa/views/img/med.png" alt="" width="250" height="100" >

                <div class="row">
                    <div class="form-group mt-5 col-6">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group mt-3 col-6">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                </div>

                <button class="btn btn-primary mt-4" type="submit">Login</button>

            </div>

        </div>
    
    </form>

    <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>

  </body>
</html>