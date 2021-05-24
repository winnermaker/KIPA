<!doctype html>
<html lang="en">

  <head>
    <?php require 'formsNavbar.php' ?>

    <title>Visit Data</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3 ">Visit Data</h1>
        <?php require 'formsHeadline.php' ?>

        <div class="form-row sticky-top mt-3">   
            <table class="table table-striped table-hover table-bordered mt-5" id="table">
              <thead class="table-dark">
                <tr>
                  
                  <th scope="col" class="sticky-top">Visit Date</th>
                  <th scope="col" class="sticky-top">Visit Type</th>
                  <th scope="col" class="sticky-top">Exam. Location</th>
                  <th scope="col" class="sticky-top">Review Date</th>
                  <th scope="col" class="sticky-top">Exam. Cause</th>
                  <th scope="col" class="sticky-top">Forms</th>
                  <th scope="col" class="sticky-top"><input type="button" onclick="createRow()" value="Add row" class="AddNew btn btn-primary"></th>
                </tr>
              </thead>
              
              <tbody>
                <td><input type="date" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="date" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><a href="visitDiagnostic_view.php"> <button class="btn btn-success">Diagnostic</button> </a></td>
                <td><input type="button" onclick="deleteRow(this)" value="Remove row" class="AddNew btn btn-danger"></td>
              </tbody> 
          </table>  
        </div>
    </div>

        <script>
            function createRow(){
              var table = document.getElementById("table");
              var row = table.insertRow(-1);

              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);  
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3); 
              var cell5 = row.insertCell(4);
              var cell6 = row.insertCell(5);
              var cell7 = row.insertCell(6);

              cell1.innerHTML = '<input type="date" class="form-control" name="visitDate[]">';
              cell2.innerHTML = '<input type="text" class="form-control" name="visitType[]">';
              cell3.innerHTML = '<input type="text" class="form-control" name="examLocation[]">';
              cell4.innerHTML = '<input type="date" class="form-control" name="reviewDate[]">';
              cell5.innerHTML = '<input type="text" class="form-control" name="examCause[]">';
              cell6.innerHTML = '<a href="visitDiagnostic_view.php"> <button class="btn btn-success">Diagnostic</button> </a>'; 
              cell7.innerHTML = '<input type="button" class="btn btn-danger" value="Remove row"  onclick="deleteRow(this)">';

        }

          function deleteRow(row)
          {
              var i=row.parentNode.parentNode.rowIndex;
              document.getElementById('table').deleteRow(i);
          }
        </script>


  </body>
</html>
