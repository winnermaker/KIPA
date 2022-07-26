<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="/kipa/views/img/logo2.png">
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";

        $image = isset($childData['Picture'])?'data:image/'.$childData['PicType'].';base64,'.base64_encode($childData['Picture']):'';
?>
    <title>Patient</title>

  </head>
  <body>
    <style>
        .imgPic{
          max-width: 200px;
          max-height: 200px;
        }
    </style>

    <form action="patient_con.php"  method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
        <div class="container mt-4">
            <div class="form-group row" id="feedbackMessage">
                <div class="col">
                    <?php echo (isset($result))?$result:''; ?>    
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <h1>Patient</h1>
                </div>

                <?php if(isset($childData['Picture'])){  ?>
                <div class="form-group col">
                <input class="imgPic rounded float-end" type="image" id="imgPic" name="imgPic" alt="Patient Image" onclick="this.disabled = true" src="<?php echo $image; ?>">
                </div>
                <?php } ?>

            </div>
                <input type="hidden" id="patientID" name="patientID" value="<?php echo (isset($childData['ChildrenID']))?$childData['ChildrenID']:'';?>">


                <input type="hidden" id="PicName" name="PicName" value="<?php echo (isset($childData['PicName']))?$childData['PicName']:'';?>">

                <input type="hidden" id="PicType" name="PicType" value="<?php echo (isset($childData['PicType']))?$childData['PicType']:'';?>">




            <div class="form-row">
                <fieldset>
                <legend class="col-form-label">Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="maleRadio" value="option1" required <?php echo (isset($childData['Gender']) && $childData['Gender'] == 'm')?'checked':'' ?>>
                        <label class="form-check-label" for="maleRadio">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="femaleRadio" value="option2" <?php echo (isset($childData['Gender']) && $childData['Gender'] == 'f')?'checked':'' ?>>
                        <label class="form-check-label" for="femaleRadio">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="genderOtherRadio" value="option3" <?php echo (isset($childData['Gender']) && $childData['Gender'] == 'x')?'checked':'' ?>>
                        <label class="form-check-label" for="genderOtherRadio">Other</label>
                    </div>

        
                </fieldset>
            </div>

            <div class="form-row mt-3">
                <div class ="form-group col">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control"  name="firstName" id="firstName" value="<?php echo (isset($childData['FirstName']))?$childData['FirstName']:'';?>" required>
                    <div class="invalid-feedback">
                    Please enter a First name
                    </div>
                </div>
            </div>

            <div class="form-row mt-3">
                <div class="form-group col">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo (isset($childData['LastName']))?$childData['LastName']:'';?>" required>
                    <div class="invalid-feedback">
                    Please enter a Last name
                    </div>
                </div>
            </div>

            <div class="form-row mt-3">
                <div class ="form-group col">
                    <label for="callName" class="form-label">Call name</label>
                    <input type="text" class="form-control" name="callName" id="callName" value="<?php echo (isset($childData['CallNames']))?$childData['CallNames']:'';?>" required >
                    <div class="invalid-feedback">
                    Please enter a Call name
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class ="form-group col">
                    <label for="dateOfBirth" class="col-form-label">Date of Birth</label>
                    <input class="form-control " type="date" name="dateOfBirth" id="dateOfBirth" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($childData['DOB']))?$childData['DOB']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

                <div class="form-group col">
                    <label for="estDateOfBirth" class="col-form-label">Est. Date of Birth</label>
                    <input class="form-control " type="date" name="estDateOfBirth" id="estDateOfBirth" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($childData['EDOB']))?$childData['EDOB']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>


                <div class ="form-group col">
                    <label for="admissionDate" class="col-form-label">Admission Date</label>
                    <input class="form-control " type="date" name="admissionDate" id="admissionDate" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($childData['AdmDate']))?$childData['AdmDate']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

                <div class="form-group col">
                    <label for="dischargeDate" class="col-form-label">Discharge Date</label>
                    <input class="form-control" type="date" name="dischargeDate"  id="dischargeDate" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($childData['DisDate']))?$childData['DisDate']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

            </div>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="pictureTakenOn" class="form-label">Picture taken on</label>
                    <input class="form-control" type="date" name="pictureTakenOn" id="pictureTakenOn" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($childData['PicTaken']))?$childData['PicTaken']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

                <div class="form-group col">
                    <label class="form-label" for="customFile">Upload Picture</label>
                    <input type="file" class="form-control" name="customFile" id="customFile"/>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>

        </div>
    </form>


    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>

    <script>
        $('input,textarea,select').addClass('border border-dark');

        $(document).ready(function() {
            var isChecked = $('#maleRadio').prop('checked');

            if(isChecked){
                $('#pregnancLink').hide();
            } else{
                $('#pregnancLink').show();
            }

          $('input[name="genderRadios"]').click(function() {
          if($(this).attr('value') == 'option1') {
                $('#pregnancLink').hide();
          }
          else {
                $('#pregnancLink').show();
          }
        });
      });

    </script>
  </body>
</html>
