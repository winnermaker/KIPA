<!doctype html>
<html lang="en">
  <head>
    <title>Children</title>

    <div class="container">
            <h1 class="mt-3">Children</h1>
        </div>
  </head>
  <body>

    <form action="" class="needs-validation" novalidate>

        <div class="container">
            <div class="row mt-5">
                <div class ="form-group col-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control border border-dark" id="firstName" pattern="[A-Za-z]" placeholder="Max" required>
                    <div class="invalid-feedback">
                    Please choose a First name/ Only Text will accept
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Mustermann" required>
                    <div class="invalid-feedback">
                    Please choose a Last name
                    </div> 
                </div>
                
            </div>

            <div class="row mt-3">
                <div class ="form-group col-6">
                    <label for="callName" class="form-label">Call name</label>
                    <input type="text" class="form-control" id="callName" placeholder="Mike" >
                    <div class="invalid-feedback">
                    Please choose a Call name
                    </div>  
                </div>

                <div class="form-group col-6">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="lastName" placeholder="m/f" required>
                    <div class="invalid-feedback">
                    Please choose a Gender
                    </div>  
                </div>
            </div>

            <div class="row mt-3">
                <div class ="form-group col-6">
                    <label for="dayofBirth" class="col-2 col-form-label">Day of Birth</label>
                    <input class="form-control col-4" type="date"  id="dayofBirth" required>        
                </div>

                <div class="form-group col-6">
                    <label for="EDOB" class="col-3 col-form-label">Est. Day of Birth</label>
                    <input class="form-control col-3" type="date" id="EDOB" required>
                
                </div>
                
            </div>


            <div class="row mt-3">
                <div class ="form-group col-6">
                    <label for="admDate" class="col-2 col-form-label">AdmDate</label>
                    <input class="form-control col-4" type="date"  id="admDate" required>        
                </div>

                <div class="form-group col-6">
                    <label for="disDate" class="col-3 col-form-label">DisDate</label>
                    <input class="form-control col-3" type="date"  id="disDate" required>
                
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="pictureTaken" class="form-label">PictureTaken</label>
                    <input class="form-control" type="date"  id="pictureTaken" required>
                </div>

                <div class="form-group col-6">
                    <label class="form-label" for="customFile">Upload Picture</label>
                    <input type="file" class="form-control" id="customFile" required />
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>

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