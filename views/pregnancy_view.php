<!doctype html>
<html lang="en">
  <head>
  <?php require 'formsNavbar.php' ?>
  

    <title>Pregnancy</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3">Pregnancy</h1>
        <?php require 'formsHeadline.php' ?>
        

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

                <button type="button" id="addChild" class="btn btn-secondary mt-4">Add a new children</button>
                
            </div>

            <div id="newChild">
            </div>


            <button type="submit" class="btn btn-primary mt-5 mb-3">Submit</button>

        </form>
    </div>

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
       var cloneId = 0;

        $(document).ready(function()
        {
            $("#addChild").click(function()
            {
                var clone = $("#childs").clone(true);
                clone.find("input[name=genderpregnancyRadios]").prop("name", "newgnderRadioName" + cloneId);
                clone.find("input[id=malepregnancyRadio]").prop("id", "malepregnancyRadio" + cloneId);
                clone.find("label[for=malepregnancyRadio]").prop("for", "malepregnancyRadio" + cloneId);

                clone.find("input[id=femalepregnancyRadio]").prop("id", "femalepregnancyRadio" + cloneId);
                clone.find("label[for=femalepregnancyRadio]").prop("for", "femalepregnancyRadio" + cloneId);

                clone.find("input[id=otherpregnancyRadio]").prop("id", "otherpregnancyRadio" + cloneId);
                clone.find("label[for=otherpregnancyRadio]").prop("for", "otherpregnancyRadio" + cloneId);

                clone.find("input[name=healthyRadios]").prop("name", "healthyRadios" + cloneId);
                clone.find("input[id=healthyRadioYes]").prop("id", "healthyRadioYes" + cloneId);
                clone.find("label[for=healthyRadioYes]").prop("for", "healthyRadioYes" + cloneId);

                clone.find("input[id=healthyRadioNo]").prop("id", "healthyRadioNo" + cloneId);
                clone.find("label[for=healthyRadioNo]").prop("for", "healthyRadioNo" + cloneId);

                
                clone.find("input,textarea").val("");
                cloneId++;
                clone.appendTo("#newChild");

                $("#newChild").append("<input type='button' id='removeButton' value='Remove Child' class='btn btn-danger'>");
               
            });

           
           
        });

        $(document).on("click", "#removeButton", function() {
            alert("hallo");
            $(this).closest("#childs").remove();
        });


    </script>

    <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>

  </body>
</html>