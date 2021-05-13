<!doctype html>
<html lang="en">
  <head>
  

    <title>Pregnancy</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3">Pregnancy</h1>
        

        <form action="">

            <div class="row mt-5">
                <div class ="form-group col-2">
                    <label for="entryDate" class="form-label">Entry Date</label>
                    <input class="form-control" type="date"  id="entryDate">        
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="Gravida">Gravida</label>
                    <input type="number" class="form-control" placeholder="" id="Gravida">
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="Para">Para</label>
                    <input type="number" class="form-control" placeholder="" id="Para">
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="alive">alive</label>
                    <input type="number" class="form-control" placeholder="" id="alive">
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="dead">dead</label>
                    <input type="number" class="form-control" placeholder="" id="dead">
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="top">top</label>
                    <input type="number" class="form-control" placeholder="" id="top">
                </div>
            </div>

            <h3 class="mt-5">Pregnancy child data</h3>

            <div class="row mt-4">
                <fieldset class="col-3">
                <legend class="col-form-label">Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderpregnancyRadios" id="masculinepregnancyRadio" value="option1">
                        <label class="form-check-label" for="masculinepregnancyRadio">Masculine</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genderpregnancyRadios" id="femininepregnancyRadio" value="option2">
                        <label class="form-check-label" for="femininepregnancyRadio">Feminine</label>
                    </div>
                </fieldset>

                
                    <div class="form-group col">
                        <label class="form-label" for="Name">Name</label>
                        <input type="text" class="form-control" placeholder="Max" id="Name">
                    </div>

                    <div class ="form-group col-3">
                        <label for="dayofBirth" class="form-label">Day of Birth</label>
                        <input class="form-control " type="date"  id="dayofBirth">        
                    </div>

            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="eventsDuringPregnancy" class="form-label">Events during pregnancy ?</label>
                    <textarea class="form-control" id="eventsDuringPregnancy" rows="2"></textarea>
                </div>

                <div class="form-group col">
                    <label for="durationOfLabor" class="form-label">Duration of labor ?</label>
                    <textarea class="form-control" id="durationOfLabor" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="spont_CS_forceps" class="form-label">spontaneous/CS/forceps ?</label>
                    <textarea class="form-control" id="spont_CS_forceps" rows="2"></textarea>
                </div>

                <div class="form-group col">
                    <label for="Healthy" class="form-label">Healthy</label>
                    <textarea class="form-control" id="Healthy" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="childrenProblems" class="form-label">Problems</label>
                    <textarea class="form-control" id="childrenProblems" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="Remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" id="Remarks" rows="3"></textarea>
                </div>
            </div>

            <button type="button" class="btn btn-primary mt-4">Add a new children</button>

            

            <h3 class="mt-5">Present Pregnancy</h3>

            <div class="row mt-4">
                <div class="form-group col-3">
                <label class="form-label" for="gestationalAge">Gestational Age</label>
                <input type="text" class="form-control" placeholder="" id="gestationalAge">
                </div>

                <div class ="form-group offset-1 col-3">
                    <label for="EstDelivery" class="form-label">EstDelivery</label>
                    <input class="form-control" type="date"  id="EstDelivery">        
                </div>

                <fieldset class="offset-1 col-3">
                <legend class="col-form-label">Antenatal Clinic attendance</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="antenatalClinikAttendanceRadios" id="antenatalRadioYes" value="option1">
                        <label class="form-check-label" for="antenatalRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="antenatalClinikAttendanceRadios" id="antenatalRadioNo" value="option2">
                        <label class="form-check-label" for="antenatalRadioNo">No</label>
                    </div>
                </fieldset>

            </div>

            
            <div class="form-group form-row mt-3">
                <label for="Problems" class="form-label">Any problems during this pregnancy ?</label>
                <textarea class="form-control" id="Problems" rows="2"></textarea>
            </div>

            <div class="form-group form-row mt-3">
                <label for="pregnancyRemarks" class="form-label">Remarks</label>
                <textarea class="form-control" id="pregnancyRemarks" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5 mb-3">Submit</button>

        </form>
    </div>

  </body>
</html>