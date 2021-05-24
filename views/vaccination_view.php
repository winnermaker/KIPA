<!doctype html>
<html lang="en">
  <head>
    <?php require 'formsNavbar.php' ?>
    
    <title>Vaccination</title>
  </head>
  <body>
  <div class="container">
        <h1 class="mt-3 ">Vaccination</h1>

        <div class="">
            <table class="table table-striped table-hover table-bordered mt-5" id="table">
              <thead class="table-dark">
                <tr>
                  <th scope="col" class="sticky-top">Vaccine</th>
                  <th scope="col" class="sticky-top">Vaccination Date</th>
                  <th scope="col" class="sticky-top">Next vaccination Date</th>
                  <th scope="col" class="sticky-top"><input type="button" onclick="createRow()" value="Add row" class="AddNew btn btn-primary"></th>
                </tr>
              </thead>
              
              <tbody>
              <tr id="row">
                <td><input class="form-control" list="vaccinedatalistOptions" value="<?php echo "Der text ist hier"?>" id="vaccineDataList" placeholder="Type to search...">
                    <datalist id="vaccinedatalistOptions">
                        <option value="CSM">
                        <option value="ATS">
                        <option value="BCG">
                    </datalist>
                </td>
                <td><input class="form-control" type="date" value="" id="VaccDate"> <input type="button" onclick="createCell(this)" value="+"  class="AddNew btn btn-primary"></td>
                <td><input class="form-control" type="date" value="" id="nextVaccDate"></td>
                <td><input type="button" onclick="deleteRow(this)" value="Remove row" class="AddNew btn btn-danger"></td>
              </tr>
              </tbody> 
          </table>
        </div>

          <div class="row mt-3">
                <div class="form-group form-row">
                    <label for="VaccRemarks" class="form-label">Vaccination Remarks</label>
                    <textarea class="form-control" id="VaccRemarks" rows="4"></textarea>
                </div>
          </div>

            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>
    </div>

        <script>
            function createRow(){
              var table = document.getElementById("table");
              var row = table.insertRow(-1);
              

              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);  
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3);
        
              
              cell1.innerHTML = '<input type="text" class="form-control" name="vaccine[]">';
              cell2.innerHTML = '<input type="date" class="form-control" name="vaccinationDate[]"> <input type="button" onclick="createCell(this)" value="+"  class="AddNew btn btn-primary"> ';
              cell3.innerHTML = '<input type="date" class="form-control" name="nextVaccinationDate[]">';
              cell4.innerHTML = '<input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)">';

              

        }

        function createCell(row){ 
          var i=row.parentNode.parentNode.rowIndex;
          var x = document.getElementById("table").insertCell(-1);
          x.innerHTML = '<input type="date" class="form-control" name="nextVaccinationDate[]">';
        }

          function deleteRow(row)
          {
              var i=row.parentNode.parentNode.rowIndex;
              document.getElementById('table').deleteRow(i);
          }
        </script>
  </body>
  <script>
    $('input,textarea,select').addClass('border border-dark');
  </script>
</html>