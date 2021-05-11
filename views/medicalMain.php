<!doctype html>
<html lang="en">
  <head>

    <title>MedicalMain</title>
  </head>
  <body>
    
    <div class="container">
      <h1 class="mt-3">MedicalMain</h1>

      <form action="">
        <div class="row mt-5">
          <fieldset class="col-2 ">
              <legend class="col-form-label">NHIReg</legend>
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
              <label class="form-label" for="NHIReg">NHINr</label>
              <input type="text" class="form-control" placeholder="86245236" id="NHIReg">
            </div>

            <div class ="form-group col-3">
                    <label for="ReviewOn" class="form-label">Review on</label>
                    <input class="form-control" type="date" value="2021-04-12" id="ReviewOn">        
            </div>

            <div class ="form-group col-3">
                    <label for="NextVaccDate" class="form-label">NextVaccDate</label>
                    <input class="form-control" type="date"  id="NextVaccDate">        
            </div>
          
          
        </div>

        <div class="form-group form-row mt-3">
            <label for="conditions" class="form-label">Conditions</label>
            <textarea class="form-control" id="conditions" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="permMedication" class="form-label">PermMedication</label>
            <textarea class="form-control" id="permMedication" rows="2"></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="plan" >Plan</label>
            <textarea class="form-control" id="plan" rows="2"></textarea>
        </div> 

        <div class="form-group form-row mt-3">
            <label for="menarche" class="form-label">Menarche</label>
            <textarea class="form-control" id="menarche" rows="2"></textarea>
        </div>

        <h3 class="mt-4">Tests</h3>

        <div class="row mt-4 mb-5">
            <fieldset class="col-4">
              <legend class="col-form-label">HepBPos</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioYes" value="option1">
                    <label class="form-check-label" for="HepBPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadiosRadioNo" value="option2">
                    <label class="form-check-label" for="HepBPosRadiosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioNotDone" value="option2">
                    <label class="form-check-label" for="HepBPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="HepBPosCheckDate" class="form-label">HepB Check Date</label>
                    <input class="form-control" type="date"  id="pregTestDate">        
            </div>

            <fieldset class="col-2 offset-1">
              <legend class="col-form-label">HepB treated</legend>
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

        <div class="row mt-4 mb-5">
            <fieldset class="col-4">
              <legend class="col-form-label">HIVPos</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioYes" value="option1">
                    <label class="form-check-label" for="hivPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioNo" value="option2">
                    <label class="form-check-label" for="hivPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioNotDone" value="option2">
                    <label class="form-check-label" for="hivPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="hivCheckDate" class="form-label">HIV Check Date</label>
                    <input class="form-control" type="date"  id="pregTestDate">        
            </div>

            <fieldset class="col-2 offset-1">
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

          <div class="row mt-4 mb-5">
            <fieldset class="col-4">
              <legend class="col-form-label">TPos</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TposRadios" id="TPosRadioYes" value="option1">
                    <label class="form-check-label" for="TPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TposRadios" id="TPosRadioNo" value="option2">
                    <label class="form-check-label" for="TPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TposRadios" id="TPosRadioNotDone" value="option2">
                    <label class="form-check-label" for="TPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="TposCheckDate" class="form-label">Tpos Check Date</label>
                    <input class="form-control" type="date"  id="TposCheckDate">        
            </div>

            <fieldset class="col-2 offset-1">
              <legend class="col-form-label">TPos treated</legend>
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


          <div class="row mt-4 mb-5">
            <fieldset class="col-4">
              <legend class="col-form-label">STDPos</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioYes" value="option1">
                    <label class="form-check-label" for="STDposRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioNo" value="option2">
                    <label class="form-check-label" for="STDposRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioNotDone" value="option2">
                    <label class="form-check-label" for="STDposRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="STDposCheckDate" class="form-label">STDPosCheckDate</label>
                    <input class="form-control" type="date"  id="STDposCheckDate">        
            </div>

            <fieldset class="col-2 offset-1">
              <legend class="col-form-label">STDPosTreated</legend>
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


          <div class="row mt-4 mb-5">
            <fieldset class="col-4">
              <legend class="col-form-label">PregnanyTestPos</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioYes" value="option1">
                    <label class="form-check-label" for="pregPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioNo" value="option2">
                    <label class="form-check-label" for="pregPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioNotDone" value="option2">
                    <label class="form-check-label" for="pregPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="PregTestDate" class="form-label">PregTestDate</label>
                    <input class="form-control" type="date"  id="PregTestDate">        
            </div>

            <fieldset class="col-2 offset-1">
              <legend class="col-form-label">PregnancyHist</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PregnancyHistRadios" id="PregnancyHistRadioYes" value="option1">
                  <label class="form-check-label" for="PregnancyHistRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PregnancyHistRadios" id="PregnancyHistRadioNo" value="option2">
                  <label class="form-check-label" for="PregnancyHistRadioNo">No</label>
                </div>
            </fieldset>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
                <legend class="col-form-label">SickelCellPos</legend>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickelCellPosRadios" id="SickelCellRadioYes" value="option1">
                      <label class="form-check-label" for="SickelCellRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickelCellPosRadios" id="SickelCellRadioNo" value="option2">
                      <label class="form-check-label" for="SickelCellRadioNo">No</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickelCellPosRadios" id="SickelCellRadioNotDone" value="option2">
                      <label class="form-check-label" for="SickelCellRadioNotDone">Not done</label>
                    </div>
              </fieldset>

              <div class="form-group col-3">
                <label for="SickelCellType" class="form-label">SickelCell Type</label>
                <input type="text" class="form-control" id="SickelCellType">
              </div>
          </div>

          <div class="row mt-4">
            <fieldset class="col-4">
                <legend class="col-form-label">G6DP</legend>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioYes" value="option1">
                      <label class="form-check-label" for="G6DPRadiosRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioNo" value="option2">
                      <label class="form-check-label" for="G6DPRadiosRadioNo">No</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioNotDone" value="option2">
                      <label class="form-check-label" for="G6DPRadiosRadioNotDone">Not done</label>
                    </div>
              </fieldset>
          </div>

          <button type="submit" class="btn btn-primary mt-5 mb-3">Submit</button>
      </form>
    </div>
   
  </body>
</html>