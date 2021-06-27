<!doctype html>
<html lang="en">
  <head>
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
     ?>

    <style>
      .dropdown{ display: inline;}
    </style>

    <title>Diagnostic Data</title>
  </head>
  <body>
    <form action="visitDiagnostic_con.php" method="post" class="needs-validation" novalidate>
      <input type="hidden" id="visitID" name="visitID" value="<?php echo (isset($visitData['VisitID']))?$visitData['VisitID']:'';?>" >
      <div class="container mt-4">
        <div class="form-group row" id="feedbackMessage">
            <div class="col">
              <?php echo (isset($result))?$result:''; ?>
            </div>
        </div>
        <h1 class="mt-3">Diagnostic Data</h1>
        <?php require 'formsHeadline.php' ?>



        <div class="row mt-5">
          <div class ="form-group col-2">
            <label for="visitDate" class="form-label">Visit Date</label>
            <input class="form-control" type="date" name="visitDate" id="visitDate" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($visitData['VisitDate']))?$visitData['VisitDate']:'';?>" required>
            <div class="invalid-feedback">
              Please chose a valid Date
            </div>
          </div>

          <div class="form-group col-4">
            <label for="visitType" class="form-label">Visit Type</label>
            <input class="form-control" list="datalistOptions" name="visitType" id="visitType" placeholder="Type to search..." value="<?php echo (isset($visitData['VisitType']))?$visitData['VisitType']:'';?>">

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
            <input class="form-control" list="examLocationdatalistOptions" name="examLocation" id="examLocation" placeholder="Type to search..." value="<?php echo (isset($visitData['ExLocation']))?$visitData['ExLocation']:'';?>">

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
            <label for="reviewDate" class="form-label">Review Date</label>
            <input class="form-control" type="date" name="reviewDate" id="reviewDate" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($visitData['RVD']))?$visitData['RVD']:'';?>">
            <div class="invalid-feedback">
              Please chose a valid Date
            </div>
          </div>

        </div>

        <div class="form-group form-row mt-3">
          <label for="excause" class="form-label">Exam. Cause</label>
          <input type="text" class="form-control" name="excause" id="excause" required value="<?php echo (isset($visitData['ExCause']))?$visitData['ExCause']:'';?>">
          <div class="invalid-feedback">
                    Please enter a Exam. Cause
            </div>
        </div>

        <div class="form-group form-row mt-3">
          <label for="presentComplaint" class="form-label">Present Complaint</label>
          <input type="text" class="form-control" name="presentComplaint" id="presentComplaint" value="<?php echo (isset($visitData['PresComplaint']))?$visitData['PresComplaint']:'';?>">
        </div>

        <div class="form-group form-row mt-3">
              <label for="historyOfPresentComplaint" class="form-label">Hx. of Present Complaint</label>
              <textarea class="form-control" name="historyOfPresentComplaint" id="historyOfPresentComplaint" rows="2"><?php echo (isset($visitData['HistPresComplaint'])) ? htmlspecialchars($visitData['HistPresComplaint']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="pe" class="form-label">PE</label>
              <textarea class="form-control" name="pe" id="pe" rows="2"><?php echo (isset($visitData['PE'])) ? htmlspecialchars($visitData['PE']): '' ;?></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="plan" class="form-label">Plan</label>
              <textarea class="form-control" name="plan" id="plan" rows="2"><?php echo (isset($visitData['Plan'])) ? htmlspecialchars($visitData['Plan']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="medication" class="form-label">Medication</label>
              <textarea class="form-control" name="medication" id="medication" rows="2"><?php echo (isset($visitData['Medication'])) ? htmlspecialchars($visitData['Medication']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="diagnosis" class="form-label">Diagnosis</label>
              <textarea class="form-control" name="diagnosis" id="diagnosis" rows="2"><?php echo (isset($visitData['Diagnosis'])) ? htmlspecialchars($visitData['Diagnosis']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
              <label for="remarks" class="form-label">Remarks</label>
              <textarea class="form-control" name="remarks" id="remarks" rows="3"><?php echo (isset($visitData['Remarks'])) ? htmlspecialchars($visitData['Remarks']): '' ; ?></textarea>
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

        document.getElementById("investigator").hidden = true;
        document.getElementById("investigatorName").hidden = true;

        function GetUrlParameter(sParam)
        {
            var sPageURL = window.location.search.substring(1);

            var sURLVariables = sPageURL.split('&');

            for (var i = 0; i < sURLVariables.length; i++)
            {
                var sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] == sParam)

                {
                    return sParameterName[1];
                }
            }
        }

    </script>
  </body>
</html>
