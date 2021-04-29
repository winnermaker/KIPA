<!doctype html>
<html lang="en">
  <head>
  <?php 
    require 'navbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
    
    ?>

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
                                <a href="children.php" target="_blank"> <button class="btn btn-primary">Children</button> </a>
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
    
  
  </body>
</html>