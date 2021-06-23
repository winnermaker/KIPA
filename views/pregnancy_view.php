<!doctype html>
<html lang="en">
  <head>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
    ?>
    <title>Pregnancy</title>
  </head>
  <body onload="createButton()">
    <div class="container mt-4">

        <div class="form-group row" id="feedbackMessage">
            <div class="col">
                <?php echo (isset($result))?$result:''; ?>    
            </div>
        </div>
        <h1>Pregnancy</h1>
        <?php require 'formsHeadline.php' ?>


        <form action="pregnancy_con.php" method="post" class="needs-validation" novalidate>
            <input type="hidden" id="motherID" name="motherID" value="<?php echo (isset($pregnancyData['MotherID']))?$pregnancyData['MotherID']:'';?>">

            <div class="row mt-5">
                <div class ="form-group col-2">
                    <label for="entryDate" class="form-label">Entry Date</label>
                    <input class="form-control" type="date" name="entryDate" id="entryDate" min="1900-04-01" max="2300-04-20"  value="<?php echo (isset($pregnancyData['EntryDate']))?$pregnancyData['EntryDate']:'';?>" required>
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="gravida">Gravida</label>
                    <input type="number" class="form-control" name="gravida" id="gravida" value="<?php echo (isset($pregnancyData['Gravida']))?$pregnancyData['Gravida']: null;?>">
                    <div class="invalid-feedback">
                        Please only enter whole numbers
                    </div>
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="para">Para</label>
                    <input type="number" class="form-control" name="para" id="para" value="<?php echo (isset($pregnancyData['Para']))?$pregnancyData['Para']: null;?>">
                    <div class="invalid-feedback">
                        Please only enter whole numbers
                    </div>
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="alive">Alive</label>
                    <input type="number" class="form-control" name="alive" id="alive" value="<?php echo (isset($pregnancyData['alive']))?$pregnancyData['alive']:null;?>">
                    <div class="invalid-feedback">
                        Please only enter whole numbers
                    </div>
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="dead">Dead</label>
                    <input type="number" class="form-control" name="dead" id="dead" value="<?php echo (isset($pregnancyData['dead']))?$pregnancyData['dead']:null;?>">
                    <div class="invalid-feedback">
                        Please only enter whole numbers
                    </div>
                </div>

                <div class="form-group col-2">
                    <label class="form-label" for="top">TOP</label>
                    <input type="number" class="form-control" name="top" id="top" value="<?php echo (isset($pregnancyData['top']))?$pregnancyData['top']:null;?>">
                    <div class="invalid-feedback">
                        Please only enter whole numbers
                    </div>
                </div>
            </div>

            <h3 class="mt-5">Present Pregnancy</h3>

            <input type="hidden" id="presentPregnancyID" name="presentPregnancyID" value="<?php echo (isset($presentPregnancy['PresPreagnancyID']))?$presentPregnancy['PresPreagnancyID']:'';?>">

            <div class="row mt-4">
                <div class="form-group col-3">
                <label class="form-label" for="gestationalAge">Gestational Age</label>
                <input type="text" class="form-control" name="gestationalAge" id="gestationalAge" value="<?php echo (isset($presentPregnancy['GestationalAge']))?$presentPregnancy['GestationalAge']:'';?>">
                </div>

                <div class ="form-group offset-1 col-2">
                    <label for="estimatedDateOfDelivery" class="form-label">Estimated Date of Delivery</label>
                    <input class="form-control" type="date" name="estimatedDateOfDelivery" id="estimatedDateOfDelivery" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($presentPregnancy['EstDelivery']))?$presentPregnancy['EstDelivery']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

                <fieldset class="offset-1 col-4">
                <legend class="col-form-label">Antenatal Clinic attendance</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="antenatalClinikAttendanceRadios" id="antenatalRadioYes" value="option1" <?php echo (isset($presentPregnancy['AntClinicAttend']) && $presentPregnancy['AntClinicAttend'] == 1 )?'checked':'' ?>>
                        <label class="form-check-label" for="antenatalRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="antenatalClinikAttendanceRadios" id="antenatalRadioNo" value="option2" <?php echo (isset($presentPregnancy['AntClinicAttend']) && $presentPregnancy['AntClinicAttend'] == 0 )?'checked':'' ?> >
                        <label class="form-check-label" for="antenatalRadioNo">No</label>
                    </div>
                </fieldset>

            </div>


            <div class="form-group form-row mt-3">
                <label for="problems" class="form-label">Any problems during this pregnancy ?</label>
                <textarea class="form-control" name="problems" id="problems" rows="2"><?php echo (isset($presentPregnancy['Problems'])) ? htmlspecialchars($presentPregnancy['Problems']):''; ?></textarea>
            </div>

            <div class="form-group form-row mt-3">
                <label for="pregnancyRemarks" class="form-label">Remarks</label>
                <textarea class="form-control" name="pregnancyRemarks" id="pregnancyRemarks" rows="3"><?php echo (isset($presentPregnancy['Remarks'])) ? htmlspecialchars($presentPregnancy['Remarks']):''; ?></textarea>
            </div>


            <h3 class="mt-5">Previous Pregnancies</h3>

            <div id="childs">

              <?php

                      $index = 0;
                      if(!empty($previousData)){
                      foreach($previousData as $row){
                          var_dump($row);

                ?>
                <input type="iput" id="childID" name="presentPregnancyID" value="<?php echo (isset($row['ChildID']))?$row['ChildID']:'';?>">
                <div class="row mt-4">
                        <div class="form-group col-2">
                            <label class="form-label" for="gender">Gender</label>
                            <input type="text" class="form-control" name="gender[]" id="gender" value="<?php echo (isset($row['Gender']))?$row['Gender']:'';?>">
                        </div>


                        <div class="form-group col">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name[]" id="name" value="<?php echo (isset($row['Name']))?$row['Name']:'';?>">
                        </div>

                        <div class ="form-group col-3">
                            <label for="dateofBirth" class="form-label">Date of Birth</label>
                            <input class="form-control " type="text" name="dateofBirth[]"  id="dateofBirth" value="<?php echo (isset($row['DOB']))?$row['DOB']:'';?>">
                        </div>

                </div>

                <div class="row mt-3">
                    <div class="form-group col">
                        <label for="eventsDuringPregnancy" class="form-label">Events during pregnancy ?</label>
                        <textarea class="form-control" name="eventsDuringPregnancy[]" id="eventsDuringPregnancy" rows="2"><?php echo (isset($row['EvDurP'])) ? htmlspecialchars($row['EvDurP']):''; ?></textarea>
                    </div>

                    <div class="form-group col">
                        <label for="durationOfLabor" class="form-label">Duration of labor ?</label>
                        <textarea class="form-control" name="durationOfLabor[]" id="durationOfLabor" rows="2"><?php echo (isset($row['durLabor'])) ? htmlspecialchars($row['durLabor']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col">
                        <label for="spont_CS_forceps" class="form-label">Spontaneous/CS/forceps ?</label>
                        <textarea class="form-control" name="spont_CS_forceps[]" id="spont_CS_forceps" rows="2"><?php echo (isset($row['spont_CS_forceps'])) ? htmlspecialchars($row['spont_CS_forceps']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-2">
                        <label class="form-label" for="healthy">Healthy</label>
                        <textarea class="form-control" name="healthy[]" id="healthy" rows="2"><?php echo (isset($row['Healthy'])) ? htmlspecialchars($row['Healthy']):''; ?></textarea>
                    </div>

                    <div class="form-group col">
                        <label for="childrenProblems" class="form-label">Problems</label>
                        <textarea class="form-control" name="childrenProblems[]" id="childrenProblems" rows="2"><?php echo (isset($row['Problems'])) ? htmlspecialchars($row['Problems']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col">
                        <label for="Remarks" class="form-label">Remarks</label>
                        <textarea class="form-control" name="Remarks[]" id="Remarks" rows="4"><?php echo (isset($row['Remarks'])) ? htmlspecialchars($row['Remarks']):''; ?></textarea>
                    </div>
                </div>

                <div class="form-row mt-5">
                    <button type="button" id="addChild" class="btn btn-secondary col-2 me-2">Add new Child</button>
                    <button type="button" id='removeButton' class='remove btn btn-danger col-2'>Remove Child</button>
                </div>


          <?php $index++; }}else { ?>
            <div class="row mt-4">
                <div class="form-group col-2">
                    <label class="form-label" for="gender">Gender</label>
                    <input type="text" class="form-control" name="gender[]" id="gender">
                </div>


                    <div class="form-group col">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" name="name[]" id="name" >
                    </div>

                    <div class ="form-group col-3">
                        <label for="dateofBirth" class="form-label">Date of Birth</label>
                        <input class="form-control " type="text" name="dateofBirth[]"  id="dateofBirth">
                    </div>

            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="eventsDuringPregnancy" class="form-label">Events during pregnancy ?</label>
                    <textarea class="form-control" name="eventsDuringPregnancy[]" id="eventsDuringPregnancy" rows="2"></textarea>
                </div>

                <div class="form-group col">
                    <label for="durationOfLabor" class="form-label">Duration of labor ?</label>
                    <textarea class="form-control" name="durationOfLabor[]" id="durationOfLabor" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="spont_CS_forceps" class="form-label">Spontaneous/CS/forceps ?</label>
                    <textarea class="form-control" name="spont_CS_forceps[]" id="spont_CS_forceps" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-2">
                    <label class="form-label" for="healthy">Healthy</label>
                    <textarea class="form-control" name="healthy[]" id="healthy" rows="2"><?php echo (isset($row['Healthy'])) ? htmlspecialchars($row['Healthy']):''; ?></textarea>
                </div>

                <div class="form-group col">
                    <label for="childrenProblems" class="form-label">Problems</label>
                    <textarea class="form-control" name="childrenProblems[]" id="childrenProblems" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="Remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" name="Remarks[]" id="Remarks" rows="4"></textarea>
                </div>
            </div>

            <div class="form-row mt-5">
                <button type="button" id="addChild" class="btn btn-secondary col-2 me-2">Add new Child</button>
                <button type="button" id='removeButton' class='remove btn btn-danger col-2'>Remove Child</button>
            </div>

            <?php } ?>
          </div>
          <div name="newChild" id="newChild">
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
       var cloneId = 1;

        $(document).ready(function()
        {
            $("#addChild").click(function()
            {
                var clone = $("#childs").clone(true);
                clone.find("input[name=gender]").prop("name", "gender[]");
                clone.find("input[name=healthy]").prop("name", "healthy[]");
                clone.find("input[name=name]").prop("name", "name[]");
                clone.find("input[name=dateofBirth]").prop("name", "dateofBirth[]");
                clone.find("textarea[name=durationOfLabor]").prop("name", "durationOfLabor[]");
                clone.find("textarea[name=eventsDuringPregnancy]").prop("name", "eventsDuringPregnancy[]");
                clone.find("textarea[name=spont_CS_forceps]").prop("name", "spont_CS_forceps[]");
                clone.find("textarea[name=childrenProblems]").prop("name", "childrenProblems[]");
                clone.find("textarea[name=Remarks]").prop("name", "Remarks[]");

                clone.find("input[id=gender]").prop("id", "gender" + cloneId);
                clone.find("label[for=gender]").prop("for", "gender" + cloneId);

                clone.find("input[id=healthy]").prop("id", "healthy" + cloneId);
                clone.find("label[for=healthy]").prop("for", "healthy" + cloneId);

                clone.find("input[id=name]").prop("id", "name" + cloneId);
                clone.find("label[for=name]").prop("for", "name" + cloneId);

                clone.find("input[id=dateofBirth]").prop("id", "dateofBirth" + cloneId);
                clone.find("label[for=dateofBirth]").prop("for", "dateofBirth" + cloneId);

                clone.find("textarea[id=durationOfLabor]").prop("id", "durationOfLabor" + cloneId);
                clone.find("label[for=durationOfLabor]").prop("for", "durationOfLabor" + cloneId);

                clone.find("textarea[id=eventsDuringPregnancy]").prop("id", "eventsDuringPregnancy" + cloneId);
                clone.find("label[for=eventsDuringPregnancy]").prop("for", "eventsDuringPregnancy" + cloneId);

                clone.find("textarea[id=spont_CS_forceps]").prop("id", "spont_CS_forceps" + cloneId);
                clone.find("label[for=spont_CS_forceps]").prop("for", "spont_CS_forceps" + cloneId);

                clone.find("textarea[id=childrenProblems]").prop("id", "childrenProblems" + cloneId);
                clone.find("label[for=childrenProblems]").prop("for", "childrenProblems" + cloneId);

                clone.find("textarea[id=Remarks]").prop("id", "Remarks" + cloneId);
                clone.find("label[for=Remarks]").prop("for", "Remarks" + cloneId);

                clone.find("input,textarea").val("");

                cloneId++;
                clone.appendTo("#newChild");

            });

            $( "body" ).on('click', '.remove', function(){
                var elements = document.getElementsByClassName("remove");
                if(elements.length > 1){
                    $(this).closest('#childs').remove();
                }
            });
        });
    </script>

    <script>
        $('input,textarea,select').addClass('border border-dark');

        document.getElementById("investigator").hidden = true;
        document.getElementById("investigatorName").hidden = true;
    </script>

  </body>
</html>
