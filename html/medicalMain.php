<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require 'navbar.html' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>MedicalMain</title>
  </head>
  <body>
    
    <div class="container">
      <h1>MedicalMain</h1>

      <form action="">
        <div class="row mt-2">
          <fieldset class="col-2 ">
              <legend class="col-form-label">NHIReg</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">No</label>
                  </div>
            </fieldset>

            <div class="form-group col-5">
              <label class="form-label" for="NHIReg">NHINr</label>
              <input type="text" class="form-control" placeholder="86245236" id="NHIReg">
            </div>

            <div class ="form-group col-5">
                    <label for="reviewDate" class="form-label">ReviewDate</label>
                    <input class="form-control" type="date" value="2021-04-12" id="reviewDate">        
            </div>
          
          
        </div>

        <div class="form-group row mt-3">
            <label for="conditions" class="form-label">Conditions</label>
            <textarea class="form-control" id="conditions" rows="2"></textarea>
        </div>

        <div class="form-group row mt-3">
            <label for="permMedication" class="form-label">PermMedication</label>
            <textarea class="form-control" id="permMedication" rows="2"></textarea>
        </div>

        <div class="form-group row mt-3">
            <label for="plan" >Plan</label>
            <textarea class="form-control" id="plan" rows="2"></textarea>
        </div> 

        <div class="form-group row mt-3">
            <label for="menarche" class="form-label">Menarche</label>
            <textarea class="form-control" id="menarche" rows="2"></textarea>
        </div>

        <div class="row mt-3">
            <fieldset class="col-4">
              <legend class="col-form-label">Pregnancy History</legend>
                <div class="">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">No</label>
                  </div>
                </div>
            </fieldset>

            <fieldset class="col-4">
              <legend class="col-form-label">PregnanyTestPos</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                  <label class="form-check-label" for="gridRadios1">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">No</label>
                </div>
            </fieldset>

            <div class ="form-group col-4">
                    <label for="pregTestDate" class="form-label">PregnancyTestDate</label>
                    <input class="form-control" type="date" value="2021-04-12" id="pregTestDate">        
            </div>
          </div>


          <div class="row mt-3 mb-5">
            <fieldset class="col-4">
              <legend class="col-form-label">HIV</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="HIV" value="option1">
                    <label class="form-check-label" for="HIV">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">No</label>
                  </div>
            </fieldset>

            <fieldset class="col-4">
              <legend class="col-form-label">HIV treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="HIVtreated" value="option1">
                  <label class="form-check-label" for="HIVtreated">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">No</label>
                </div>
            </fieldset>

            <div class ="form-group col-4">
                    <label for="hivCheckDate" class="form-label">HIV Check Date</label>
                    <input class="form-control" type="date" value="2021-04-12" id="pregTestDate">        
            </div>
          </div>



      </form>
    </div>
   



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>