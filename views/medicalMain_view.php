<!doctype html>
<html lang="en">
  <head>
    <?php 
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
      ?>
  <style>
    .table{
    
    }
  </style>

    <title>Medical Main</title>
  </head>
  <body>
    
    <div class="container">
      <h1 class="mt-3">Medical Main</h1>
      <?php require 'formsHeadline.php' ?>

      <form action="medicalMain_con.php" method="post">
        <input type="hidden" id="medicalMainID" name="medicalMainID">
        <div class="row mt-5">
          <fieldset class="col-2">
            <legend class="col-form-label">NHI Registration</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nhiRadios" id="nhiRadioYes" value="option1">
              <label class="form-check-label" for="nhiRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nhiRadios" id="nhiRadioNo" value="option2">
              <label class="form-check-label" for="nhiRadioNo">No</label>
            </div>
          </fieldset>

            <div class="form-group col-4">
              <label class="form-label" for="nhiNumber">NHI Number</label>
              <input type="text" class="form-control" name="nhiNumber" id="nhiNumber">
            </div>

            <div class ="form-group col">
                    <label for="reviewOn" class="form-label">Review on</label>
                    <input class="form-control" type="date" name="reviewOn" id="reviewOn">        
            </div>

            <div class ="form-group col">
                    <label for="nextVaccDate" class="form-label">Next Vaccination Date</label>
                    <input class="form-control" type="date"  id="nextVaccDate" disabled>        
            </div>
          
          
        </div>

        <div class="form-group form-row mt-3">
            <label for="conditions" class="form-label">Conditions</label>
            <textarea class="form-control" name="conditions" id="conditions" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="permanentPrescription" class="form-label">Permanent Prescription</label>
            <textarea class="form-control" name="permanentPrescription" id="permanentPrescription" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="plan" >Plan</label>
            <textarea class="form-control" name="plan" id="plan" rows="2"></textarea>
        </div> 

        <div class="form-group form-row mt-3">
            <label for="otherInformation" class="form-label">Other Information</label>
            <textarea class="form-control" name="otherInformation" id="otherInformation" rows="3"></textarea>
        </div>

        <div class="row mt-5">
          <fieldset class="col">
            <legend class="col-form-label">Pregnancy History</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PregnancyHistRadios" id="PregnancyHistRadioYes" value="option1">
              <label class="form-check-label" for="PregnancyHistRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PregnancyHistRadios" id="PregnancyHistRadioNo" value="option2">
              <label class="form-check-label" for="PregnancyHistRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Immunis. completed</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="immuniComplRadios" id="immuniComplRadioYes" value="option1">
              <label class="form-check-label" for="immuniComplRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="immuniComplRadios" id="immuniComplRadioNo" value="option2">
              <label class="form-check-label" for="immuniComplRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Physical abuse</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="physicalAbuseRadios" id="physicalAbuseRadioYes" value="option1">
              <label class="form-check-label" for="physicalAbuseRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="physicalAbuseRadios" id="physicalAbuseRadioNo" value="option2">
              <label class="form-check-label" for="physicalAbuseRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Sexual abuse/active</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexualAbuseRadios" id="sexualAbuseRadioYes" value="option1">
              <label class="form-check-label" for="sexualAbuseRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexualAbuseRadios" id="sexualAbuseRadioNo" value="option2">
              <label class="form-check-label" for="sexualAbuseRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Substance abuse</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="substanceAbuseRadios" id="substanceAbuseRadioYes" value="option1">
              <label class="form-check-label" for="substanceAbuseRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="substanceAbuseRadios" id="substanceAbuseRadioNo" value="option2">
              <label class="form-check-label" for="substanceAbuseRadioNo">No</label>
            </div>
          </fieldset>

          <div class="form-group col-3">
              <label class="form-label" for="menstrualHistory">Menstrual History</label>
              <input type="text" class="form-control" name="menstrualHistory" id="menstrualHistory">
          </div>

        </div>

        <h3 class="mt-5">Tests</h3>

        <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">Hep.B pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioYes" value="option1">
                    <label class="form-check-label" for="HepBPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioNo" value="option2">
                    <label class="form-check-label" for="HepBPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioNotDone" value="option3" checked>
                    <label class="form-check-label" for="HepBPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="HepBPosCheckDate" class="form-label">Hep.B Check Date</label>
                    <input class="form-control" type="date" name="HepBPosCheckDate"  id="HepBPosCheckDate" disabled>        
            </div>

            <fieldset class="col-2 offset-1" id="hepBtreated" disabled>
              <legend class="col-form-label">Hep.B treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="HepBTreatedRadios" id="HepBtreatedRadioYes" value="option1">
                  <label class="form-check-label" for="HepBtreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="HepBTreatedRadios" id="HepBtreatedRadioNo" value="option2">
                  <label class="form-check-label" for="HepBtreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>

        <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">HIV pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioYes" value="option1">
                    <label class="form-check-label" for="hivPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioNo" value="option2">
                    <label class="form-check-label" for="hivPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioNotDone" value="option3" checked>
                    <label class="form-check-label" for="hivPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="hivCheckDate" class="form-label">HIV Check Date</label>
                    <input class="form-control" type="date" name="hivCheckDate"  id="hivCheckDate" disabled>        
            </div>

            <fieldset class="col-2 offset-1" id="hivTreated" disabled>
              <legend class="col-form-label">HIV treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hivTreatedRadios" id="hivtreatedRadioYes" value="option1">
                  <label class="form-check-label" for="hivtreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hivTreatedRadios" id="hivtreatedRadioNo" value="option2">
                  <label class="form-check-label" for="hivtreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>

          <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">Tb pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TbposRadios" id="TbPosRadioYes" value="option1">
                    <label class="form-check-label" for="TbPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TbposRadios" id="TbPosRadioNo" value="option2">
                    <label class="form-check-label" for="TbPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TbposRadios" id="TbPosRadioNotDone" value="option3" checked>
                    <label class="form-check-label" for="TbPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="TbposCheckDate" class="form-label">Tb Check Date</label>
                    <input class="form-control" type="date" name="TbposCheckDate" id="TbposCheckDate" disabled>        
            </div>

            <fieldset class="col-2 offset-1" id="tbTreated" disabled>
              <legend class="col-form-label">Tb treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TposTreatedRadios" id="TPosTreatedRadioYes" value="option1">
                  <label class="form-check-label" for="TPosTreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TposTreatedRadios" id="TPosTreatedRadioNo" value="option2">
                  <label class="form-check-label" for="TPosTreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">STD pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioYes" value="option1">
                    <label class="form-check-label" for="STDposRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioNo" value="option2">
                    <label class="form-check-label" for="STDposRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioNotDone" value="option3" checked>
                    <label class="form-check-label" for="STDposRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="STDposCheckDate" class="form-label">STD Check Date</label>
                    <input class="form-control" type="date" name="stdposCheckDate" id="STDposCheckDate" disabled>        
            </div>

            <fieldset class="col-2 offset-1" id="stdTreated" disabled>
              <legend class="col-form-label">STD treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="STDPosTreatedRadios" id="STDposTreatedRadioYes" value="option1">
                  <label class="form-check-label" for="STDposTreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="STDPosTreatedRadios" id="STDposTreatedRadioNo" value="option2">
                  <label class="form-check-label" for="STDposTreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">Pregnancy Test pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioYes" value="option1">
                    <label class="form-check-label" for="pregPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioNo" value="option2">
                    <label class="form-check-label" for="pregPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioNotDone" value="option3" checked>
                    <label class="form-check-label" for="pregPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="PregTestDate" class="form-label">Pregnancy Test Date</label>
                    <input class="form-control" type="date" name="pregTestDate"  id="PregTestDate" disabled>        
            </div>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
                <legend class="col-form-label">Sickle Cell pos.</legend>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickleCellPosRadios" id="SickleCellRadioYes" value="option1">
                      <label class="form-check-label" for="SickleCellRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickleCellPosRadios" id="SickleCellRadioNo" value="option2">
                      <label class="form-check-label" for="SickleCellRadioNo">No</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickleCellPosRadios" id="SickleCellRadioNotDone" value="option3" checked>
                      <label class="form-check-label" for="SickleCellRadioNotDone">Not done</label>
                    </div>
              </fieldset>

              <div class="form-group col-3">
                <label for="sickleCellType" class="form-label">Sickle Cell Type</label>
                <input type="text" class="form-control" name="sickleCellType" id="sickleCellType" disabled>
              </div>
          </div>

          <div class="row mt-4">
            <fieldset class="col-4">
                <legend class="col-form-label">G6P Deficiency</legend>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioYes" value="option1">
                      <label class="form-check-label" for="G6DPRadiosRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioNo" value="option2">
                      <label class="form-check-label" for="G6DPRadiosRadioNo">No</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioNotDone" value="option3" checked>
                      <label class="form-check-label" for="G6DPRadiosRadioNotDone">Not done</label>
                    </div>
              </fieldset>
          </div>

          <button type="submit" class="btn btn-primary mt-5 mb-3">Submit</button>
      </form>
    </div>

    <script>
        $('input,textarea,select').addClass('border border-dark');

        var gender = document.getElementById( "gender" ).innerText;
        if(gender == "Male"){
            document.getElementById("menstrualHistory").disabled = true;
        } else if(gender == "Female"){
            document.getElementById("menstrualHistory").disabled = false;
        }

        $(function () {
        $("input[name='nhiRadios']").click(function () {
            if ($("#nhiRadioYes").is(":checked")) {
                $("#nhiNumber").removeAttr("disabled");
            } else {
                $("#nhiNumber").attr("disabled", "disabled");
            }
        });
    });

      $('#HepBPosRadioYes').click(function()
      {
        $('#HepBPosCheckDate').removeAttr("disabled");
        $('#hepBtreated').removeAttr("disabled");
      });

      $('#HepBPosRadioNo').click(function()
      {
        $('#HepBPosCheckDate').removeAttr("disabled");
        $('#hepBtreated').attr("disabled","disabled");
      });

      $('#HepBPosRadioNotDone').click(function()
      {
        $('#HepBPosCheckDate').attr("disabled","disabled");
        $('#hepBtreated').attr("disabled","disabled");
      });



      $('#hivPosRadioYes').click(function()
      {
        $('#hivCheckDate').removeAttr("disabled");
        $('#hivTreated').removeAttr("disabled");
      });

      $('#hivPosRadioNo').click(function()
      {
        $('#hivCheckDate').removeAttr("disabled");
        $('#hivTreated').attr("disabled","disabled");
      });

      $('#hivPosRadioNotDone').click(function()
      {
        $('#hivCheckDate').attr("disabled","disabled");
        $('#hivTreated').attr("disabled","disabled");
      });


      $('#TbPosRadioYes').click(function()
      {
        $('#TbposCheckDate').removeAttr("disabled");
        $('#tbTreated').removeAttr("disabled");
      });

      $('#TbPosRadioNo').click(function()
      {
        $('#TbposCheckDate').removeAttr("disabled");
        $('#tbTreated').attr("disabled","disabled");
      });

      $('#TbPosRadioNotDone').click(function()
      {
        $('#TbposCheckDate').attr("disabled","disabled");
        $('#tbTreated').attr("disabled","disabled");
      });


      $('#STDposRadioYes').click(function()
      {
        $('#STDposCheckDate').removeAttr("disabled");
        $('#stdTreated').removeAttr("disabled");
      });

      $('#STDposRadioNo').click(function()
      {
        $('#STDposCheckDate').removeAttr("disabled");
        $('#stdTreated').attr("disabled","disabled");
      });

      $('#STDposRadioNotDone').click(function()
      {
        $('#STDposCheckDate').attr("disabled","disabled");
        $('#stdTreated').attr("disabled","disabled");
      });


      $('#pregPosRadioYes').click(function()
      {
        $('#PregTestDate').removeAttr("disabled");
      });

      $('#pregPosRadioNo').click(function()
      {
        $('#PregTestDate').removeAttr("disabled");
      });

      $('#pregPosRadioNotDone').click(function()
      {
        $('#PregTestDate').attr("disabled","disabled");
      });


      $('#SickleCellRadioYes').click(function()
      {
        $('#sickleCellType').removeAttr("disabled");
      });

      $('#SickleCellRadioNo').click(function()
      {
        $('#sickleCellType').attr("disabled","disabled");
      });

      $('#SickleCellRadioNotDone').click(function()
      {
        $('#sickleCellType').attr("disabled","disabled");
      });


      document.getElementById("investigator").hidden = true;
      document.getElementById("investigatorName").hidden = true;
    </script>
   
  </body>
</html>