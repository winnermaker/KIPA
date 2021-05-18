<!doctype html>
<html lang="en">
  <head>
    <?php require 'inputForm.php' ?>
    
    <title>Vaccination</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3">Vaccination</h1>

        <form action="">
            <div class="row mt-5">
                <div class="form-group col-2">
                    <label for="vaccineDataList" class="form-label">Vaccine</label>
                    <input class="form-control" list="vaccinedatalistOptions" id="vaccineDataList" placeholder="Type to search...">
                    <datalist id="vaccinedatalistOptions">
                        <option value="CSM">
                        <option value="ATS">
                        <option value="BCG">
                    </datalist>
                </div>

                <div class ="form-group col-2">
                    <label for="VaccDate" class="form-label">Date</label>
                    <input class="form-control" type="date" value="" id="VaccDate">        
                </div>
                
                <div class="col-2">
                    <button type="button" class="btn btn-primary">Add new Data</button>
                </div>

                <div class ="form-group col-2">
                    <label for="nextVaccDate" class="form-label">Next vaccination date</label>
                    <input class="form-control" type="date" value="" id="nextVaccDate">        
                </div>


            </div>

            <div class="row mt-3">
                <div class="form-group form-row">
                    <label for="VaccRemarks" class="form-label">Vaccination Remarks</label>
                    <textarea class="form-control" id="VaccRemarks" rows="3"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>

        
        </form>

    </div>

  </body>
</html>