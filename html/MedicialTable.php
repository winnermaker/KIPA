<?php
    $connectionFile = 'C:\xampp\htdocs\kipa\backend\db_connection.php';
    include($connectionFile);
    db_connection();
 ?>
 
<!doctype html>
<html lang="en">
  <head>
      <?php require 'navbar.html' ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Medical Table</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3">Medical Table</h1>

        <div class="table-responsive-lg">
            <table class="table table-striped table-hover table-bordered mt-4">
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
                        <th scope="col">Children</th>
                        <th scope="col">MedicalMain</th>
                        <th scope="col">Pexam</th>
                        <th scope="col">MedicalVisits</th>
                        <th scope="col">SocialHistory</th>
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
                        <td>
                            <div style="">
                                <a href="childrenEingabe.php" target="_blank"> <button class="btn btn-primary">Children</button> </a>
                            </div>
                        </td>
                        <td>
                            <div style="">
                                <a href="medicalMain.php" target="_blank"> <button class="btn btn-primary">MedicalMain</button> </a>
                            </div>
                        </td>
                        <td>
                            <div style="">
                                <a href="MedicalPexam.php"> <button class="btn btn-primary">Pexam</button> </a>
                            </div>
                        </td>
                        <td>
                            <div style="">
                                <a href="MedicalVisits.php"> <button class="btn btn-primary">MedicalVisits</button> </a>
                            </div>
                        </td>
                        <td>
                            <div style="">
                                <a href="SocialHistory.php"> <button class="btn btn-primary">SocialHistory</button> </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

     <!-- O  ptional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
