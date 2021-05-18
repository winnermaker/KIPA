<!doctype html>
<html lang="en">
  <head>
  

    <title>Pregnancy</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3">Pregnancy</h1>
        

        <form action="" class="needs-validation" novalidate>

            <div class="row mt-5">
                <div class ="form-group col-2">
                    <label for="entryDate" class="form-label">Entry Date</label>
                    <input class="form-control" type="date"  id="entryDate" required>
                    <div class="invalid-feedback">
                    Please enter a Date
                    </div>       
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
                    <label class="form-label" for="alive">Alive</label>
                    <input type="number" class="form-control" placeholder="" id="alive">
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="dead">Dead</label>
                    <input type="number" class="form-control" placeholder="" id="dead">
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="top">TOP</label>
                    <input type="number" class="form-control" placeholder="" id="top">
                </div>
            </div>

            <h3 class="mt-5">Present Pregnancy</h3>

            <div class="row mt-4">
                <div class="form-group col-3">
                <label class="form-label" for="gestationalAge">Gestational Age</label>
                <input type="text" class="form-control" placeholder="" id="gestationalAge">
                </div>

                <div class ="form-group offset-1 col-2">
                    <label for="estimatedDateOfDelivery" class="form-label">Estimated Date of Delivery</label>
                    <input class="form-control" type="date"  id="estimatedDateOfDelivery">        
                </div>

                <fieldset class="offset-1 col-4">
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


            <h3 class="mt-5">Previous Pregnancies</h3>

            <div id="childs">
                <div class="row mt-4">
                    <fieldset class="col-3">
                    <legend class="col-form-label">Gender</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genderpregnancyRadios" id="malepregnancyRadio" value="option1">
                            <label class="form-check-label" for="malepregnancyRadio">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genderpregnancyRadios" id="femalepregnancyRadio" value="option2">
                            <label class="form-check-label" for="femalepregnancyRadio">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genderpregnancyRadios" id="otherpregnancyRadio" value="option2">
                            <label class="form-check-label" for="otherpregnancyRadio">Other</label>
                        </div>
                    </fieldset>

                    
                        <div class="form-group col">
                            <label class="form-label" for="Name">Name</label>
                            <input type="text" class="form-control" placeholder="Max" id="Name">
                        </div>

                        <div class ="form-group col-3">
                            <label for="dateofBirth" class="form-label">Date of Birth</label>
                            <input class="form-control " type="text"  id="dateofBirth">        
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
                        <label for="spont_CS_forceps" class="form-label">Spontaneous/CS/forceps ?</label>
                        <textarea class="form-control" id="spont_CS_forceps" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <fieldset class="col-2">
                    <legend class="col-form-label">Healthy?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="healthyRadios" id="healthyRadioYes" value="option1">
                            <label class="form-check-label" for="healthyRadioYes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="healthyRadios" id="healthyRadioNo" value="option2">
                            <label class="form-check-label" for="healthyRadioNo">No</label>
                        </div>
                    </fieldset>

                    <div class="form-group col">
                        <label for="childrenProblems" class="form-label">Problems</label>
                        <textarea class="form-control" id="childrenProblems" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col">
                        <label for="Remarks" class="form-label">Remarks</label>
                        <textarea class="form-control" id="Remarks" rows="4"></textarea>
                    </div>
                </div>

                <button type="button" onClick="duplicate()" class="btn btn-secondary mt-4">Add a new children</button>
                
            </div>


            <button type="submit" class="btn btn-primary mt-5 mb-3">Submit</button>

        </form>
    </div>

    <script>
        var i = 0;
        var original = document.getElementById('childs');

        function duplicate() {
            var clone = original.cloneNode(true); // "deep" clone
            clone.id = "childs" + ++i;
            // or clone.id = ""; if the divs don't need an ID
            original.parentNode.appendChild(clone);
}
    </script>

  </body>
</html>