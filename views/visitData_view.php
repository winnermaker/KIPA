<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="/kipa/views/img/logo2.png">
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
     ?>
    <title>Visit Data</title>
  </head>
  <body onload="removeCssClass();">
    <div class="container">
        <h1 class="mt-3 ">Visit Data</h1>
        <?php require 'formsHeadline.php' ?>

        <div class="form-row sticky-top mt-3">
            <table class="table table-striped table-hover table-bordered mt-5" id="table">
              <thead class="table-dark">
                <tr>
                  <th scope="col" class="sticky-top" hidden>Visit ID</th>
                  <th scope="col" class="sticky-top">Visit Date</th>
                  <th scope="col" class="sticky-top">Visit Type</th>
                  <th scope="col" class="sticky-top">Exam. Location</th>
                  <th scope="col" class="sticky-top">Exam. Cause</th>
                  <th scope="col" class="sticky-top">Review Date</th>
                  <th scope="col" class="sticky-top">Forms</th>
             <!-- <th scope="col" class="sticky-top"><input type="button" onclick="createRow()" value="Add row" class="AddNew btn btn-primary"></th> -->
                </tr>
              </thead>

              <tbody id="tableBody">
              <?php if(!empty($visitData)){
                      $index = 1;
                      foreach($visitData as $key => $row){

                ?>
                <tr>
                  <td style="display:none"><input type="text" name="visitID" value ="<?php echo (isset($row['visitID']))?$row['visitID']:'';?>" ></input></td>
                  <td style="display:none"><input type="text" name="childrenID" value ="<?php echo (isset($row['childrenID']))?$row['childrenID']:'';?>" ></input></td>
                  <td style="display:none"><input type="text" name="medicalID" value="<?php echo (isset($row['fk_MedicalID']))?$row['fk_MedicalID']:'';?>" ></input></td>
                  <td><input type="date" class="form-control" name="visitDate" value="<?php echo (isset($row['visitDate']))?$row['visitDate']:'';?>" disabled></input></td>
                  <td><input type="text" class="form-control" name="visitType" value="<?php echo (isset($row['visitType']))?$row['visitType']:'';?>" disabled></input></td>
                  <td><input type="text" class="form-control" name="examLocation" value="<?php echo (isset($row['exLocation']))?$row['exLocation']:'';?>" disabled></td>
                  <td><input type="text" class="form-control" name="examCause" value="<?php echo (isset($row['exCause']))?$row['exCause']:'';?>" disabled></td>
                  <td><input type="date" class="form-control" name="reviewDate" value="<?php echo (isset($row['RVD']))?$row['RVD'] :'';?>" disabled></td>
                  <td><a href="visitDiagnostic_con.php" onclick="addParamsToUrl(this)"> <button class="btn btn-success">Diagnostic</button> </a></td>
                <!-- <td><input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)"></td>  -->
                </tr>
                <?php $index++; } } else { ?>

                  <tr>
                  <td style="display:none"><input type="text" name="visitID" ></input></td>
                  <td style="display:none"><input type="text" name="childrenID"></input></td>
                  <td style="display:none"><input type="text" name="medicalID" ></input></td>
                  <td><input type="date" class="form-control" name="visitDate" disabled></input></td>
                  <td><input type="text" class="form-control" name="visitType" disabled></input></td>
                  <td><input type="text" class="form-control" name="examLocation" disabled></td>
                  <td><input type="text" class="form-control" name="examCause" disabled></td>
                  <td><input type="date" class="form-control" name="reviewDate" disabled></td>
                  <td><a href="visitDiagnostic_con.php" onclick="addParamsToUrl(this)" disabled> <button disabled class="btn btn-success">Diagnostic</button> </a></td>
                <!-- <td><input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)"></td>  -->
                </tr>

                <?php } ?>
              </tbody>
          </table>
        </div>
    </div>

        <script>
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

              cell1.innerHTML = '<input type="date" class="form-control" name="visitDate">';
              cell2.innerHTML = '<input type="text" class="form-control" name="visitType">';
              cell3.innerHTML = '<input type="text" class="form-control" name="examLocation">';
              cell4.innerHTML = '<input type="text" class="form-control" name="examCause">';
              cell5.innerHTML = '<input type="date" class="form-control" name="reviewDate">';
              cell6.innerHTML = '<a href="visitDiagnostic_con.php" onclick="addParamsToUrl(this)"> <button class="btn btn-success">Diagnostic</button> </a>';
              cell7.innerHTML = '<input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)">';

              $('input,textarea,select').addClass('border border-dark');

        }

          function deleteRow(row)
          {
              var i=row.parentNode.parentNode.rowIndex;
              document.getElementById('table').deleteRow(i);
          }

          function removeCssClass()
        {
          var element = document.getElementById("formsTable");
          element.classList.remove("sticky-top");
        }

          function addParamsToUrl(element)
              {
                $(element).attr('href', function() {
                  var visitID = $(this).closest("tr").find('input[name=visitID]').val();
                  var medicalID = getUrlParameter('medicalID');
                  var childrenID = getUrlParameter('childrenID');
                  return this.href + '?visitID='+ visitID + '&childrenID=' + childrenID  +  '&medicalID='+ medicalID;
                });
              }





        document.getElementById("investigator").hidden = true;
        document.getElementById("investigatorName").hidden = true;

        $('input,textarea,select').addClass('border border-dark');
        </script>


  </body>
</html>
