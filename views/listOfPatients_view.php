<!doctype html>
<html lang="en">

  <head>
  <?php
    require 'navbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";


    ?>

    <title>Children table</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3 ">List of Patients</h1>

        <div class="table-responsive-lg">
            <table class="table table-striped table-hover table-bordered mt-5">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="sticky-top">#</th>
                        <th scope="col" class="sticky-top">First name</th>
                        <th scope="col" class="sticky-top">Last name</th>
                        <th scope="col" class="sticky-top">Call name</th>
                        <th scope="col" class="sticky-top">Gender</th>
                        <th scope="col" class="sticky-top">Date of Birth</th>
                        <th scope="col" class="sticky-top">Est. Date of Birth</th>
                        <th scope="col" class="sticky-top">Admission Date</th>
                        <th scope="col" class="sticky-top">Discharge Date</th>
                        <th scope="col" class="sticky-top">Review Date</th>
                        <th scope="col" class="sticky-top">Next Vaccination Date</th>
                        <th scope="col" class="sticky-top">Forms</th>

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
                        <td><b>30.05.2021</b></td>
                        <td>
                            <div style="">
                                <a href="patient_view.php" target="_blank"> <button class="btn btn-primary">Forms</button> </a>
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
