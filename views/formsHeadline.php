<!doctype html>
<html lang="en">
  <head>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; ?>

  <style>
    .table {
      background: rgba(252, 252, 252, 1) !important;
    }
  </style>
    
  </head>
  <body>
  <div id="formsTable" class="form-row sticky-top mt-3">
          <table class="table table-striped">
              <thead class="">
                <tr>
                  <th scope="col" class="">First name</th>
                  <th scope="col" class="">Last name</th>
                  <th scope="col" class="">Call name</th>
                  <th scope="col" class="">Gender</th>
                  <th scope="col" class="">Date of Birth</th>
                  <th scope="col" class="">Est. Date of Birth</th>
                  <th scope="col" class="">Date of Examination</th>
                  <th scope="col" class="">Investigator</th>
                </tr>
              </thead>
              
              <tbody>
                <td>Mustermann</td>
                <td>Mike</td>
                <td>Mustermann</td>
                <td id="gender">Male</td>
                <td>29.10.1997</td>
                <td>29.10.1997</td>
                <td><?php echo date('d.m.y'); ?></td>
                <td>Drechsel-Atta</td>
              </tbody> 
          </table>  
        </div>
  </body>
</html>