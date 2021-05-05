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

            <div class="form-group col-5">
              <label class="form-label" for="NHIReg">NHINr</label>
              <input type="text" class="form-control" placeholder="86245236" id="NHIReg">
            </div>

            <div class ="form-group col-5">
                    <label for="reviewDate" class="form-label">ReviewDate</label>
                    <input class="form-control" type="date" value="2021-04-12" id="reviewDate">        
            </div>
          
          
        </div>

        <div class="form-group row mt-3">
            <label for="conditions" class="form-label">Conditions</label>
            <textarea class="form-control" id="conditions" rows="2"></textarea>
        </div>

        <div class="form-group row mt-3">
            <label for="permMedication" class="form-label">PermMedication</label>
            <textarea class="form-control" id="permMedication" rows="2"></textarea>
        </div>

        <div class="form-group row mt-3">
            <label for="plan" >Plan</label>
            <textarea class="form-control" id="plan" rows="2"></textarea>
        </div> 

        <div class="form-group row mt-3">
            <label for="menarche" class="form-label">Menarche</label>
            <textarea class="form-control" id="menarche" rows="2"></textarea>
        </div>


        <div class="row mt-3 mb-5">
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





        <div class="row mt-3 mb-5">
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

          <div class="row mt-3 mb-5">
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


          <div class="row mt-3 mb-5">
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


          <div class="row">
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

          <button type="submit" class="btn btn-primary mt-3 mb-4">Submit</button>
      </form>
    </div>
   
  </body>
</html>