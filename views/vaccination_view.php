<!doctype html>
<html lang="en">
  <head>
    <?php require 'formsNavbar.php' ?>
    
    <title>Vaccination</title>
  </head>
  <body>
  <div class="container">
        <h1 class="mt-3 ">Vaccination</h1>

        <div class="form-row sticky-top mt-3">   
            <table class="table table-striped table-hover table-bordered mt-5">
              <thead class="table-dark">
                <tr>
                  <th scope="col" class="sticky-top">Vaccine</th>
                  <th scope="col" class="sticky-top">Date</th>
                  <th scope="col" class="sticky-top">Add Date</th>
                  <th scope="col" class="sticky-top">Next vaccination Date</th>
                  <th scope="col" class="sticky-top">Add new row</th>
                </tr>
              </thead>
              
              <tbody>
                <td><input class="form-control" list="vaccinedatalistOptions" id="vaccineDataList" placeholder="Type to search...">
                    <datalist id="vaccinedatalistOptions">
                        <option value="CSM">
                        <option value="ATS">
                        <option value="BCG">
                    </datalist>
                </td>
                <td><input class="form-control" type="date" value="" id="VaccDate"></td>
                <td><input type="button" value="Add Date" class="btn btn-primary"></td>
                <td><input class="form-control" type="date" value="" id="nextVaccDate"></td>
                <td><input type="button" value="Add row" class="AddNew btn btn-primary"></td>
              </tbody> 
          </table>

          <div class="row mt-3">
                <div class="form-group form-row">
                    <label for="VaccRemarks" class="form-label">Vaccination Remarks</label>
                    <textarea class="form-control" id="VaccRemarks" rows="3"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>
        </div>
    </div>

        <script>
            $('.AddNew').click(function(){
            var row = $(this).closest('tr').clone();
            row.find('input').val('');
            $(this).closest('tr').after(row);
            $('input[type="button"]', row).removeClass('AddNew')
                                            .addClass('RemoveRow').val('Remove row');
            });

            $('table').on('click', '.RemoveRow', function(){
            $(this).closest('tr').remove();
            });
        </script>
  </body>
  <script>
    $('input,textarea,select').addClass('border border-dark');
  </script>
</html>