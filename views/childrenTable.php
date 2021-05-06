<?php
  require 'navbar.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
  require '..\backend\db_connection.php';
  require '..\backend\db_controller.php';

  $conn = new db_connection();
  $conn->connectToDB();

  ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Medical Table</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-2 ">Medical Table</h1>

        <div class="table-responsive-lg">
            <table class="table table-striped table-hover table-bordered mt-5">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Call name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Day of Birth</th>
                        <th scope="col">Est. Day of Birth</th>
                        <th scope="col">AdmDate</th>
                        <th scope="col">DisDate</th>
                        <th scope="col">Review Date</th>
                        <th scope="col">Input Form</th>

                    </tr>
                </thead>

                <tbody>
                <?php  for($i=0;$i<100;$i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td>Max</td>
                        <td>Mustermann</td>
                        <td>Mike</td>
                        <td>m </td>
                        <td>10.12.1998</td>
                        <td>01.01.2000</td>
                        <td>05.01.2021</td>
                        <td>18.04.2021</td>
                        <td><b>18.04.2021</b></td>
                        <td>
                            <div style="">
                                <a href="inputForm.php" target="_blank"> <button class="btn btn-primary">Input Form</button> </a>
                            </div>
                        </td>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


  </body>
</html>
