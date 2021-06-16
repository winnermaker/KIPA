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

        <form action="listOfPatients_con.php" method="post">
            <div class="row mt-5">
                <fieldset class="col-4">
                    <legend class="col-form-label">Filter Options:</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="filterRadios" id="allPatients" value="option1" <?php echo (isset($check) && $check === 1 )?'checked':'' ?> checked>
                            <label class="form-check-label" for="allPatients">All Patients</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="filterRadios" id="patientsReviewDate" value="option2" <?php echo (isset($check) && $check === 2 )?'checked':'' ?>>
                            <label class="form-check-label" for="patientsReviewDate">Review Date</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="filterRadios" id="patientsNextVaccDate" value="option3" <?php echo (isset($check) && $check === 3 )?'checked':'' ?>>
                            <label class="form-check-label" for="patientsNextVaccDate">Vaccination Date</label>
                        </div>

                </fieldset>

                <div class="form-group col-1">
                    <label for="submit"></label>
                    <button type="submit" id="submit" style="font-size:15px;"  class="btn btn-success form-control mt-1">Filter</button>
                </div>

                <div class="form-group offset-2 col ">
                    <label for="searchInput"></label>
                    <input type="text" placeholder="Search" id="searchInput" class="form-control">
                </div>
            </div>
        </form>
        <div class="table-responsive-lg mt-4">
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
                        foreach($childData as $row){
                ?>
                    <tr>
                        <th scope="row"><?php echo $index; ?></th>
                        <td name="childrenID" hidden><?php echo (isset($row['ChildrenID']))?$row['ChildrenID']:'';?></td>
                        <td name="medicalID" hidden><?php echo (isset($row['MedicalID']))?$row['MedicalID']:'';?></td>
                        <td name="firstName"><?php echo (isset($row['FirstName']))?$row['FirstName']:'';?></td>
                        <td name="lastName"><?php echo (isset($row['LastName']))?$row['LastName']:'';?></td>
                        <td name="callNames"><?php echo (isset($row['CallNames']))?$row['CallNames']:'';?></td>
                        <td name="gender"><?php echo (isset($row['Gender']))?$row['Gender']:'';?></td>
                        <td name="DOB"><?php echo (isset($row['DOB']))? date("d-m-Y", strtotime($row['DOB'])) :'';?></td>
                        <td name="EDOB"><?php echo (isset($row['EDOB']))? date("d-m-Y", strtotime($row['EDOB'])) :'';?></td>
                        <td name="admDate"><?php echo (isset($row['AdmDate'])) ? date("d-m-Y", strtotime($row['AdmDate'])) :'';?></td>
                        <td name="disDate"><?php echo (isset($row['DisDate'])) ? date("d-m-Y", strtotime($row['DisDate'])) :'';?></td>
                        <td name="reviewOn"><?php echo (isset($row['ReviewOn']))? date("d-m-Y", strtotime($row['ReviewOn'])) :'';?></td>
                        <td name="nextVaccDate"><?php echo (isset($row['nextVaccDate'])) ? date("d-m-Y", strtotime($row['nextVaccDate'])) :'';?></td>
                        <td>
                            <div style="">
                                <a href="patient_con.php" onclick="addParamsToUrl(this)"> <button class="btn btn-primary">Forms</button> </a>
                            </div>
                        </td>
                        <script>
                            $('td:nth-child(13),th:nth-child(13)').hide();
                            $('td:nth-child(11),th:nth-child(11)').hide();
                        </script>
                        </td>
                    </tr>
                    <?php $index++; } 
                    } else if(isset($childDataReviewSoon)){
                        $index = 1;
                        foreach($childDataReviewSoon as $row){   
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
                        <td name="nextVaccDate"><?php echo (isset($row['nextVaccDate'])) ? date("d-m-Y", strtotime($row['nextVaccDate'])) :'';?></td>
                        <td>
                            <div style="">
                                <a href="patient_con.php" onclick="addParamsToUrl(this)"> <button class="btn btn-primary">Forms</button> </a>
                            </div>
                        </td>
                        </td>
                        <script>
                            $('td:nth-child(13),th:nth-child(13)').hide();
                        </script>
                    </tr>

                    <?php $index++; } 
                        } else if(isset($childDataVaccSoon)) {
                            $index = 1;
                            foreach($childDataVaccSoon as $row){
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
                        <td name="nextVaccDate"><?php echo (isset($row['nextVaccDate'])) ? date("d-m-Y", strtotime($row['nextVaccDate'])) :'';?></td>
                        <td>
                            <div style="">
                                <a href="patient_con.php" onclick="addParamsToUrl(this)"> <button class="btn btn-primary">Forms</button> </a>
                            </div>
                        </td>
                        </td>
                        <script>
                            $('td:nth-child(11),th:nth-child(11)').hide();
                        </script>
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


        var showHide = function(){
            if($('#allPatients').is(':checked')){
                $('#allPatients').prop('checked', true);
                $('#patientsReviewDate').prop('checked', false);
                $('#patientsNextVaccDate').prop('checked', false);
            }

            if($('#patientsReviewDate').is(':checked')){
                $('#allPatients').prop('checked', false);
                $('#patientsReviewDate').prop('checked', true);
                $('#patientsNextVaccDate').prop('checked', false); 
            }

            if($('#patientsNextVaccDate').is(':checked')){
                $('#allPatients').prop('checked', false);
                $('#patientsReviewDate').prop('checked', false);
                $('#patientsNextVaccDate').prop('checked', true); 
            }
        };

        $(document).ready(showHide);
        $('input[name="filterRadios"]').click(showHide);


        function addParamsToUrl(element)
          {
            $(element).attr('href', function() {
              var childrenID = $(this).closest("tr").find('td[name="childrenID"]').html();
              var medicalID = $(this).closest("tr").find('td[name="medicalID"]').html();
              return this.href + '?childrenID=' + childrenID  +  '&medicalID='+ medicalID;
            });
          }
</script>

  </body>
</html>
