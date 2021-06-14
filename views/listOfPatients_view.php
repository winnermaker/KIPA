<!doctype html>
<html lang="en">

  <head>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbarListOfPatients.php";
    ?>

    <title>Children table</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-4 ">List of Patients</h1>

        <div class="row mt-5">
            <fieldset class="col">
                <legend class="col-form-label">Filter Options:</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="filterRadios" id="maleRadio" value="option1" checked>
                        <label class="form-check-label" for="maleRadio">All Patients</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="filterRadios" id="femaleRadio" value="option2">
                        <label class="form-check-label" for="femaleRadio">Review Date</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="filterRadios" id="genderOtherRadio" value="option3">
                        <label class="form-check-label" for="genderOtherRadio">Vaccination Date</label>
                    </div>
            </fieldset>

            <div class="form-group offset-4 col ">
                <label for="searchInput"></label>
                <input type="text" placeholder="Search" id="searchInput" class="form-control">
            </div>
        </div>
        <div class="table-responsive-lg mt-3">
            <table class="table table-striped table-hover table-bordered" id="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="sticky-top">#</th>
                        <th scope="col" class="sticky-top" hidden>ChildrenID</th>
                        <th scope="col" class="sticky-top">First name</th>
                        <th scope="col" class="sticky-top">Last name</th>
                        <th scope="col" class="sticky-top">Call name</th>
                        <th scope="col" class="sticky-top">Gender</th>
                        <th scope="col" class="sticky-top">Date of Birth</th>
                        <th scope="col" class="sticky-top">Est. Date of Birth</th>
                        <th scope="col" class="sticky-top">Admission Date</th>
                        <th scope="col" class="sticky-top">Discharge Date</th>
                        <th scope="col" class="sticky-top">Review Date</th>
                        <th scope="col" class="sticky-top" hidden>MedicalID</th>
                        <th scope="col" class="sticky-top">Next Vaccination Date</th>
                        <th scope="col" class="sticky-top">Forms</th>

                    </tr>
                </thead>

                <tbody id="tableBody">
                <?php
                    if(isset($childData)){
                    $index = 1;
                    foreach($childData as $key => $row){
                ?>
                    <tr>
                        <th scope="row"><?php echo $index; ?></th>
                        <td name="childrenID" hidden><?php echo (isset($row['ChildrenID']))?$row['ChildrenID']:'';?></td>
                        <td name="firstName"><?php echo (isset($row['FirstName']))?$row['FirstName']:'';?></td>
                        <td name="lastName"><?php echo (isset($row['LastName']))?$row['LastName']:'';?></td>
                        <td name="callNames"><?php echo (isset($row['CallNames']))?$row['CallNames']:'';?></td>
                        <td name="gender"><?php echo (isset($row['Gender']))?$row['Gender']:'';?></td>
                        <td name="DOB"><?php echo (isset($row['DOB']))? date("d-m-Y", strtotime($row['DOB'])) :'';?></td>
                        <td name="EDOB"><?php echo (isset($row['EDOB']))? date("d-m-Y", strtotime($row['EDOB'])) :'';?></td>
                        <td name="admDate"><?php echo (isset($row['AdmDate'])) ? date("d-m-Y", strtotime($row['AdmDate'])) :'';?></td>
                        <td name="disDate"><?php echo (isset($row['DisDate'])) ? date("d-m-Y", strtotime($row['DisDate'])) :'';?></td>
                        <td name="reviewOn"><?php echo (isset($row['ReviewOn']))? date("d-m-Y", strtotime($row['ReviewOn'])) :'';?></td>
                        <td name="medicalID" hidden><?php echo (isset($row['MedicalID']))?$row['MedicalID']:'';?></td>
                        <td name="nextVaccDate"><?php echo (isset($row['NextVaccDate'])) ? date("d-m-Y", strtotime($row['NextVaccDate'])) :'';?></td>
                        <td>
                            <div style="">
                                <a href="patient_con.php" onclick="addParamsToUrl(this)"> <button class="btn btn-primary">Forms</button> </a>
                            </div>
                        </td>
                        </td>
                    </tr>
                    <?php $index++; } } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $('input,textarea,select').addClass('border border-dark');

        var $rows = $('#tableBody tr');
        $('#searchInput').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });


        function addParamsToUrl(element)
          {
            $(element).attr('href', function() {
              var childrenID = $(this).closest("tr").find('td[name="childrenID"]').html();
              var reviewOn = $(this).closest("tr").find('td[name="reviewOn"]').html();
              var nextVaccDate = $(this).closest("tr").find('td[name="nextVaccDate"]').html();
              var medicalID = $(this).closest("tr").find('td[name="medicalID"]').html();
              return this.href + '?childrenID=' + childrenID  +  '&medicalID='+ medicalID + '&reviewOn=' + reviewOn + '&nextVaccDate=' + nextVaccDate;
            });
          }
</script>

  </body>
</html>
