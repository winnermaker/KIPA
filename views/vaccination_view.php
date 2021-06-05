<!doctype html>
<html lang="en">
  <head>
    <?php 
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php"; 
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
    ?>
    <title>Vaccination</title>
  </head>
  <body onload="removeCssClass();">
    <div class="container">
        <h1 class="mt-3 ">Vaccination</h1>
        <?php require 'formsHeadline.php' ?>

        <form action="vaccination_con.php" method="post">
          <div class="">
              <table class="table table-striped table-hover table-bordered mt-5" id="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col" class="sticky-top">Vaccine</th>
                    <th scope="col" class="sticky-top">Vacc. Date</th>
                    <th scope="col" class="sticky-top">Vacc. Date</th>
                    <th scope="col" class="sticky-top">Vacc. Date</th>
                    <th scope="col" class="sticky-top">Vacc. Date</th>
                    <th scope="col" class="sticky-top">Vacc. Date</th>
                    <th scope="col" class="sticky-top">Next vacc. Date</th>
                    <th scope="col" class="sticky-top"><input type="button" onclick="createRow()" value="Add row" class="AddNew btn btn-primary"></th>
                  </tr>
                </thead>
                
                <tbody id="tableBody">
                <tr id="row">
                  <td><input style="width:160px;" class="form-control" list="vaccinedatalistOptions" name="vaccineDataList[]" id="vaccineDataList" placeholder="Type to search...">
                      <datalist id="vaccinedatalistOptions">
                          <option value="CSM">
                          <option value="ATS">
                          <option value="BCG">
                      </datalist>
                  </td>
                  <td><input style="width:150px;" class="form-control" type="date" name="vaccDate1[]" id="VaccDate1"></td>
                  <td><input style="width:150px;" class="form-control" type="date" name="vaccDate2[]" id="VaccDate2"></td>
                  <td><input style="width:150px;" class="form-control" type="date" name="vaccDate3[]" id="VaccDate3"></td>
                  <td><input style="width:150px;" class="form-control" type="date" name="vaccDate4[]" id="VaccDate4"></td>
                  <td><input style="width:150px;" class="form-control" type="date" name="vaccDate5[]" id="VaccDate5"></td>
                  <td><input style="width:150px;" class="form-control" type="date" name="nextVaccDate[]" id="nextVaccDate"></td>
                  <td><input type="button" style="width:110px;" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)"></td>
                
                </tr>
                </tbody> 
            </table>
          </div>

            <div class="row mt-3">
                  <div class="form-group form-row">
                      <label for="vaccinationRemarks" class="form-label">Vaccination Remarks</label>
                      <textarea class="form-control" name="vaccinationRemarks" id="vaccinationRemarks" rows="4"></textarea>
                  </div>
            </div>

              <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>
        </form>
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
              var cell8 = row.insertCell(7);
              
              cell1.innerHTML = '<input type="text" style="width:160px;" class="form-control" name="vaccineDataList[]">';
              cell2.innerHTML = '<input type="date" style="width:150px;" class="form-control" name="vaccDate1[]"> ';
              cell3.innerHTML = '<input type="date" style="width:150px;" class="form-control" name="vaccDate2[]"> ';
              cell4.innerHTML = '<input type="date" style="width:150px;" class="form-control" name="vaccDate3[]"> ';
              cell5.innerHTML = '<input type="date" style="width:150px;" class="form-control" name="vaccDate4[]"> ';
              cell6.innerHTML = '<input type="date" style="width:150px;" class="form-control" name="vaccDate5[]"> ';
              cell7.innerHTML = '<input type="date" style="width:150px;" class="form-control" name="nextVaccDate[]">';
              cell8.innerHTML = '<input type="button" style="width:110px;" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)">';

              $('input').addClass('border border-dark'); 
        }

        function createCell(row){ 
          var i=row.parentNode.parentNode.rowIndex;
          var table = document.getElementById("table");
          var cell = table.rows[i].insertCell(2);
          var cell1 = table.rows[0].insertCell(2);
          cell.innerHTML = '<input type="date" class="form-control" name="vaccinationDate[]"> <input type="button" onclick="deleteCell(this)" value="-"  class="btn btn-danger"> ';
          cell1.innerHTML = "Vaccination Date";

          TD.innerHTML = 'This is a new cell added'; //Set some thing
          row.appendChild (TD); //Add it to row
        }

        function deleteCell(row){
          var i=row.parentNode.parentNode.rowIndex;
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
        </script>
  </body>
  <script>
    $('input,textarea,select').addClass('border border-dark');

    document.getElementById("investigator").hidden = true;
    document.getElementById("investigatorName").hidden = true;
  </script>
</html>