<!doctype html>
<html lang="en">
  <head>
    <title>Children</title>
  
  </head>
  <body>

    <form action="" class="needs-validation" novalidate>

        <div class="container">
            <h1 class="mt-3">Children</h1>

            <div class="form-row mt-5">
                <fieldset>
                <legend class="col-form-label">Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="masculineRadio" value="option1">
                        <label class="form-check-label" for="masculineRadio">Masculine</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderRadios" id="feminineRadio" value="option2">
                        <label class="form-check-label" for="feminineRadio">Feminine</label>
                    </div>
                </fieldset>
            </div>

            <div class="form-row mt-3">
                <div class ="form-group col">
                    <label for="firstName" class="form-label">First name</label>
                    <div>
                    <input type="text" class="form-control" id="firstName" pattern="[A-Za-z]" placeholder="Max" required>
                    </div>
                    <div class="invalid-feedback">
                    Please choose a First name/ Only Text will accept
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
                    <input type="text" class="form-control" id="callName" placeholder="Mike" >
                    <div class="invalid-feedback">
                    Please choose a Call name
                    </div>  
                </div>
            </div>

            <div class="row mt-3">
                <div class ="form-group col">
                    <label for="dayofBirth" class="col-form-label">Day of Birth</label>
                    <input class="form-control " type="date"  id="dayofBirth" required>        
                </div>

                <div class="form-group col">
                    <label for="EDOB" class="col-form-label">Estaminated day of birth</label>
                    <input class="form-control " type="date" id="EDOB" required>
                
                </div>

                <div class ="form-group col">
                    <label for="admDate" class="col-form-label">AdmDate</label>
                    <input class="form-control " type="date"  id="admDate" required>        
                </div>

                <div class="form-group col">
                    <label for="disDate" class="col-form-label">DisDate</label>
                    <input class="form-control" type="date"  id="disDate" required>
                
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="pictureTaken" class="form-label">PictureTaken</label>
                    <input class="form-control" type="date"  id="pictureTaken" required>
                </div>

                <div class="form-group col">
                    <label class="form-label" for="customFile">Upload Picture</label>
                    <input type="file" class="form-control" id="customFile" required />
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


  </body>
</html>