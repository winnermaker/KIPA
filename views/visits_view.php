<!doctype html>
<html lang="en">
  <head>
    <?php require 'formsNavbar.php' ?>
  <style>
    .dropdown{
    display: inline;
}
  </style>

    <title>Visits</title>
  </head>
  <body>
    <form action="" class="needs-validation" novalidate>
      <div class="container">
        <h1 class="mt-3">Visits</h1>
        <div class="form-row sticky-top mt-3">   
          <table class="table table-striped">
              <thead class="">
                <tr>
                  <th scope="col" class="sticky-top">First name</th>
                  <th scope="col" class="sticky-top">Last name</th>
                  <th scope="col" class="sticky-top">Call name</th>
                  <th scope="col" class="sticky-top">Gender</th>
                  <th scope="col" class="sticky-top">Date of Birth</th>
                  <th scope="col" class="sticky-top">Est. Date of Birth</th>
                  <th scope="col" class="sticky-top">Date of Examination</th>
                  <th scope="col" class="sticky-top">Investigator</th>
                </tr>
              </thead>
              
              <tbody>
                <td>Mustermann</td>
                <td>Mike</td>
                <td>Mustermann</td>
                <td>Male</td>
                <td>29.10.1997</td>
                <td>29.10.1997</td>
                <td><?php echo date('d.m.y'); ?></td>
                <td>Drechsel-Atta</td>
              </tbody> 
          </table>  
        </div>
        
        

        <div class="row mt-5">
          <div class ="form-group col-2">
            <label for="VisitDate" class="form-label">Visit Date</label>
            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>"  id="VisitDate" required>
            <div class="invalid-feedback">
                    Please enter a Date
            </div>        
          </div>

          <div class="form-group col-4">
            <label for="visitType" class="form-label">Visit Type</label>
            <input class="form-control" list="datalistOptions" id="visitType" placeholder="Type to search...">
            
            <datalist id="datalistOptions">
              <option value="Visit">
              <option value="Investigation">
              <option value="First examination">
              <option value="Screening">
              <option value="Laboratory">
              <option value="OPD">
              <option value="Admission">
              <option value="Psychologist">
              <option value="Psychiatrist">
              <option value="Surgical">
              <option value="Surgery">
              <option value="ENT">
              <option value="Dentist">
              <option value="Dermatology">
              <option value="Ophthalmology">
              <option value="Radiology">
              <option value="Neurology">
              <option value="Gynecology">
              <option value="Urology">
              <option value="Physiotherapy">
              <option value="Cardiology">
              <option value="Orthopedy">
            </datalist>
          </div>




          <div class="form-group col-4">
            <label for="examLocation" class="form-label">Exam. Location</label>
            <input class="form-control" list="examLocationdatalistOptions" id="examLocation" placeholder="Type to search...">

            <datalist id="examLocationdatalistOptions">
              <option value="Accra Psychiatric Hospital">
              <option value="Crystal Eye Clinic">
              <option value="Egon German Clinic">
              <option value="Greenville Hospital">
              <option value="KBTH">
              <option value="KBTH Dental School">
              <option value="KP(m)">
              <option value="KP(tel.)">
              <option value="KP(caregiver)">
              <option value="MDS Lancet">
              <option value="Synlab">
              <option value="Police Hospital">
              <option value="Prampram Polyclinic">
              <option value="Sunshine">
              <option value="Trust Hospital">
            </datalist>
          </div>

          <div class ="form-group col-2">
            <label for="RVD" class="form-label">Review Date</label>
            <input class="form-control" type="date" value="2021-04-12" id="RVD">        
          </div>

        </div>

        <div class="form-group form-row mt-3">
          <label for="Excause" class="form-label">Exam. Cause</label>
          <input type="text" class="form-control" id="Excause" placeholder="" required>
          <div class="invalid-feedback">
                    Please enter a Exam. Cause
            </div> 
        </div>

        <div class="form-group form-row mt-3">
          <label for="presentComplaint" class="form-label">Present Complaint</label>
          <input type="text" class="form-control" id="presentComplaint" placeholder="" >
        </div>

        <div class="form-group form-row mt-3">
              <label for="HxOfPresentComplaint" class="form-label">Hx. of Present Complaint</label>
              <textarea class="form-control" id="HxOfPresentComplaint" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="PE" class="form-label">PE</label>
              <textarea class="form-control" id="PE" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="Plan" class="form-label">Plan</label>
              <textarea class="form-control" id="Plan" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="Medication" class="form-label">Medication</label>
              <textarea class="form-control" id="Medication" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="Diagnosis" class="form-label">Diagnosis</label>
              <textarea class="form-control" id="Diagnosis" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="Remarks" class="form-label">Remarks</label>
              <textarea class="form-control" id="Remarks" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>

      </div>
    </form>

    <script>
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