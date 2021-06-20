<!doctype html>
<html lang="en">
  <head>
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
    ?>
    <title>Social History</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-3">Social History</h1>
      <?php require 'formsHeadline.php' ?>

      <form action="socialHistory_con.php" method="post" class="needs-validation" novalidate>

        <input type="hidden" id="socialHistoryID" name="socialHistoryID" value="<?php echo (isset($socialData['SocialID']))?$socialData['SocialID']:'';?>">

          <div class="row mt-5">
            <div class ="form-group col-2 ">
                  <label for="dateOfInvestigation" class="form-label">Date of Investigation</label>
                  <input class="form-control" type="date" name="dateOfInvestigation" id="dateOfInvestigation" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($socialData['DateOfInvestigation']))?$socialData['DateOfInvestigation']:'';?>" required>
                  <div class="invalid-feedback">
                    Please chose a valid Date
                    </div>
            </div>
            <div class="form-group col">
            <label for="livedWithWho" class="form-label">Lived with who?</label>
            <textarea class="form-control" name="livedWithWho" id="livedWithWho" rows="1"><?php echo (isset($socialData['LivedWithWho']))?htmlspecialchars($socialData['LivedWithWho']):'';?></textarea>
            </div>
          </div>
          <div class="form-group form-row mt-3">
            <label for="livedWhere" class="form-label">Lived where?</label>
            <textarea class="form-control" name="livedWhere" id="livedWhere" rows="2"><?php echo (isset($socialData['LivedWhere'])) ? htmlspecialchars($socialData['LivedWhere']):''; ?></textarea>
          </div>

          <div class="form-group form-row mt-3">
            <label for="parentsAlive" class="form-label">Parents alive? Died when?</label>
            <textarea class="form-control" name="parentsAlive" id="parentsAlive" rows="2"><?php echo (isset($socialData['ParentsAlive'])) ? htmlspecialchars($socialData['ParentsAlive']):''; ?></textarea>
          </div>

          <div class="form-group form-row mt-3">
            <label for="parentslivetogether" class="form-label">Parents live together? Peacefully?</label>
            <textarea class="form-control" name="parentslivetogether" id="parentslivetogether" rows="2"><?php echo (isset($socialData['ParentsLiveTogether'])) ? htmlspecialchars($socialData['ParentsLiveTogether']):''; ?></textarea>
          </div>

          <div class="form-group form-row mt-3">
            <label for="amountAndSourceOfIncome" class="form-label">Amount and Source of Income?</label>
            <textarea class="form-control" name="amountAndSourceOfIncome" id="amountAndSourceOfIncome" rows="2"><?php echo (isset($socialData['AmountAndSourceOfIncome'])) ? htmlspecialchars($socialData['AmountAndSourceOfIncome']):''; ?></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="incomeForHowMany" class="form-label">Income for how many?</label>
            <textarea class="form-control" name="incomeForHowMany" id="incomeForHowMany" rows="2"><?php echo (isset($socialData['IncomeForHowMany'])) ? htmlspecialchars($socialData['IncomeForHowMany']):''; ?></textarea>
          </div>


          <div class="form-group form-row mt-3">
            <label for="abuse" class="form-label">Abuse?</label>
            <textarea class="form-control" name="abuse" id="abuse" rows="2"><?php echo (isset($socialData['Abuse'])) ? htmlspecialchars($socialData['Abuse']):''; ?></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="sexuallyActive" class="form-label">Sexually Active?</label>
            <textarea class="form-control" name="sexuallyActive" id="sexuallyActive" rows="2"><?php echo (isset($socialData['SexuallyActive'])) ? htmlspecialchars($socialData['SexuallyActive']):''; ?></textarea>
          </div>

          <div class="row mt-3">
            <fieldset class="col-2">
              <legend class="col-form-label">Siblings?</legend>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="siblings" id="siblingsYes" value="option1" <?php echo (isset($socialData['siblings']) && $socialData['siblings'] == 1 )?'checked':'' ?> >
                <label class="form-check-label" for="siblingsYes">Yes</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="siblings" id="siblingsNo" value="option2" <?php echo (isset($socialData['siblings']) && $socialData['siblings'] == 0 )?'checked':'' ?> >
                <label class="form-check-label" for="siblingsNo">No</label>
              </div>
            </fieldset>
          </div>

          <div class="form-row sticky-top mt-3" id="siblingsTable">
            <table class="table table-striped table-hover table-bordered mt-5" name="table" id="table">
              <thead class="table-dark">
                <tr>
                  <th style="display:none;" scope="col" class="sticky-top" >ID</th>
                  <th scope="col" class="sticky-top" >#</th>
                  <th scope="col" class="sticky-top">Gender</th>
                  <th scope="col" class="sticky-top">Age</th>
                  <th scope="col" class="sticky-top">Healthy?</th>
                  <th scope="col" class="sticky-top">Alive?</th>
                  <th scope="col" class="sticky-top">Same father/mother?</th>
                  <th scope="col" class="sticky-top"><input type="button" onclick="createRow()" value="Add row" class="AddNew btn btn-primary"></th>
                </tr>
              </thead>

              <tbody name="tableBody" id="tableBody">
              <?php

                      $index = 1;
                      if(!empty($socialSibsData)){
                      foreach($socialSibsData as $row){

                ?>
                <tr>
                  <td style="display:none;"><input type="text" name="SiblingID[]" class="form-control" value="<?php echo (isset($row['SiblingID']))?$row['SiblingID']:'';?>" ></td>
                  <td name="tableIndex[]">1</td>
                  <td><input type="text" name="gender[]" class="form-control" value="<?php echo (isset($row['Gender']))?$row['Gender']:'';?>"></td>
                  <td><input type="text" name="age[]" class="form-control" value="<?php echo (isset($row['Age']))?$row['Age']:'';?>"></td>
                  <td><input type="text" name="healthy[]" class="form-control" value="<?php echo (isset($row['Healthy']))?$row['Healthy']:'';?>"></td>
                  <td><input type="text" name="alive[]" class="form-control" value="<?php echo (isset($row['Alive']))?$row['Alive']:'';?>"></td>
                  <td><input type="text" name="sameFatherMother[]" class="form-control" value="<?php echo (isset($row['SameParents']))?$row['SameParents']:'';?>"></td>
                  <td><input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)"></td>
                </tr>
                <?php  } } else { ?>

                <tr>
                <td style="display:none;"><input type="text" name="SiblingID[]" class="form-control"></td>
                  <td name="tableIndex[]">1</td>
                  <td><input type="text" name="gender[]" class="form-control"></td>
                  <td><input type="text" name="age[]" class="form-control" ></td>
                  <td><input type="text" name="healthy[]" class="form-control" ></td>
                  <td><input type="text" name="alive[]" class="form-control" ></td>
                  <td><input type="text" name="sameFatherMother[]" class="form-control" ></td>
                  <td><input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)"></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>

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
      $(document).ready(function() {
          $('input[name="siblings"]').click(function() {
          if($(this).attr('value') == 'option1') {
                $('#siblingsTable').show();
          }
          else {
                $('#siblingsTable').hide();
          }
        });

          if($('#siblingsNo').prop('checked')){
              $('#siblingsTable').hide();
          }

          if($('#siblingsYes').prop('checked')){
            $('#siblingsTable').show();
          }

          if (!$("input[name='siblings']:checked").val()) {
              $("#siblingsNo").prop('checked', true);
              $('#siblingsTable').hide();
            }
      });

        function createRow(){
              var table = document.getElementById("tableBody");
              var row = table.insertRow(-1);

              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3);
              var cell5 = row.insertCell(4);
              var cell6 = row.insertCell(5);
              var cell7 = row.insertCell(6);

              cell1.innerHTML = '<td name="tableIndex[]">' + row.rowIndex + '</td>' ;
              cell2.innerHTML = '<input type="text" class="form-control bg-black" name="gender[]">';
              cell3.innerHTML = '<input type="text" class="form-control" name="age[]">';
              cell4.innerHTML = '<input type="text" class="form-control" name="healthy[]">';
              cell5.innerHTML = '<input type="text" class="form-control" name="alive[]">';
              cell6.innerHTML = '<input type="text" class="form-control" name="sameFatherMother[]">';
              cell7.innerHTML = '<input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)">';

              $('input').addClass('border border-dark');

        }

        function deleteRow(row)
          {
              var table = document.getElementById("table");
              var i=row.parentNode.parentNode.rowIndex;
              document.getElementById('table').deleteRow(i);

              for (var i = 1; i< table.rows.length; i++){
                table.rows[i].cells[0].innerHTML = i;
            }
          }

          $('input,textarea,select').addClass('border border-dark');
    </script>
  </body>
</html>
