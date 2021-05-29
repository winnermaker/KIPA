<!doctype html>
<html lang="en">
  <head>
    <title>Patient</title>
  
  </head>
  <body>
    
    <form action="patient_con.php"  method="post" class="needs-validation" novalidate>

        <div class="container" >
            <h1 class="mt-3">Patient</h1>
            
            <input type="text" id="childID" hidden>

            <div class="form-row mt-5">
                <fieldset>
                <legend class="col-form-label">Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="maleRadio" value="option1" required>
                        <label class="form-check-label" for="maleRadio">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="femaleRadio" value="option2">
                        <label class="form-check-label" for="femaleRadio">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="genderOtherRadio" value="option3">
                        <label class="form-check-label" for="genderOtherRadio">Other</label>
                    </div>

                    <div class="invalid-feedback">
                    Please choose a Gender
                    </div>
                </fieldset>
            </div>

            <div class="form-row mt-3">
                <div class ="form-group col">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Max" required>
                    <div class="invalid-feedback">
                    Please choose a Call name
                    </div>  
                </div>
            </div>

            <div class="form-row mt-3">
                <div class="form-group col">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Mustermann" required>
                    <div class="invalid-feedback">
                    Please choose a Last name
                    </div> 
                </div>
            </div>

            <div class="form-row mt-3">
                <div class ="form-group col">
                    <label for="callName" class="form-label">Call name</label>
                    <input type="text" class="form-control" id="callName" placeholder="Mike" required >
                    <div class="invalid-feedback">
                    Please choose a Call name
                    </div>  
                </div>
            </div>

            <div class="row mt-3">
                <div class ="form-group col">
                    <label for="dateOfBirth" class="col-form-label">Date of Birth</label>
                    <input class="form-control " type="date"  id="dateOfBirth">        
                </div>

                <div class="form-group col">
                    <label for="estDateOfBirth" class="col-form-label">Est. Date of Birth</label>
                    <input class="form-control " type="date" id="estDateOfBirth">
                </div>

                <div class ="form-group col">
                    <label for="admissionDate" class="col-form-label">Admission Date</label>
                    <input class="form-control " type="date"  id="admissionDate">        
                </div>

                <div class="form-group col">
                    <label for="dischargeDate" class="col-form-label">Discharge Date</label>
                    <input class="form-control" type="date"  id="dischargeDate">
                
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="pictureTakenOn" class="form-label">Picture taken on</label>
                    <input class="form-control" type="date"  id="pictureTakenOn">
                </div>

                <div class="form-group col">
                    <label class="form-label" for="customFile" >Upload Picture</label>
                    <input type="file" class="form-control" id="customFile" id="choose-file" />
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
    </script>
  </body>
</html>