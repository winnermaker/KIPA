<!doctype html>
<html lang="en">

  <head>
    <?php require 'formsNavbar.php' ?>

    <title>Visit Data</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3 ">Visit Data</h1>

        <div class="form-row sticky-top mt-3">   
            <table class="table table-striped table-hover table-bordered mt-5">
              <thead class="table-dark">
                <tr>
                  <th scope="col" class="sticky-top">Visit Date</th>
                  <th scope="col" class="sticky-top">Visit Type</th>
                  <th scope="col" class="sticky-top">Exam. Location</th>
                  <th scope="col" class="sticky-top">Review Date</th>
                  <th scope="col" class="sticky-top">Exam. Cause</th>
                  <th scope="col" class="sticky-top"></th>
                </tr>
              </thead>
              
              <tbody>
                <td><input type="date" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="date" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="button" value="Add row" class="AddNew btn btn-primary"></td>
              </tbody> 
          </table>  
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
</html>
