<!doctype html>
<html lang="en">
  <head>
  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
  ?>

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
                  <th scope="col" class="">Children ID</th>
                  <th scope="col" class="">First name</th>
                  <th scope="col" class="">Last name</th>
                  <th scope="col" class="">Call name</th>
                  <th scope="col" class="">Gender</th>
                  <th scope="col" class="">Date of Birth</th>
                  <th scope="col" class="">Est. Date of Birth</th>
                  <th id="investigator" scope="col" class="">Investigator</th>
                </tr>
              </thead>

              <?php
                if(isset($_GET['childrenID'])){
                    $headData = $controller->getChildDataForHeadline($_GET['childrenID']);                  
                } else if(isset($_COOKIE["childIDCookie"])){
                    $headData = $controller->getChildDataForHeadline($_COOKIE["childIDCookie"]);
                }
                 ?>
              
              <tbody>
                <td><?php echo (isset($headData['ChildrenID']))?$headData['ChildrenID']:'';?></td>
                <td><?php echo (isset($headData['FirstName']))?$headData['FirstName']:'';?></td>
                <td><?php echo (isset($headData['LastName']))?$headData['LastName']:'';?></td>
                <td><?php echo (isset($headData['CallNames']))?$headData['CallNames']:'';?></td>
                <td id="gender"><?php echo (isset($headData['Gender']))?$headData['Gender']:'';?></td>
                <td><?php echo (isset($headData['DOB']))? date("d-m-Y", strtotime($headData['DOB'])) :'';?></td>
                <td><?php echo (isset($headData['EDOB']))? date("d-m-Y", strtotime($headData['EDOB'])) :'';?></td>
                <td id="investigatorName"></td>
              </tbody>
          </table>
        </div>
        <script>
           var gender = $('#gender').text();
          if(gender === "m"){
            $("#pregnancLink").hide();
          }
        </script>
  </body>
</html>
