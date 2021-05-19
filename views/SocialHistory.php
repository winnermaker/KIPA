<!doctype html>
<html lang="en">
  <head>
  <?php require 'inputForm.php' ?>

    <title>Social History</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-3">Social History</h1>

      <form action="" class="needs-validation" novalidate>

          <div class="row mt-5">
            <div class ="form-group col-2 ">
                  <label for="dateOfInvestigation" class="form-label">Date of Investigation</label>
                  <input class="form-control" type="date" value="2021-04-12" id="dateOfInvestigation" required>
                  <div class="invalid-feedback">
                    Please enter a Date
                    </div>      
            </div>
            <div class="form-group col">
            <label for="LivedWithWho" class="form-label">Lived with who?</label>
            <textarea class="form-control" id="LivedWithWho" rows="1"></textarea>
            </div>
          </div>
          <div class="form-group form-row mt-3">
            <label for="LivedWhere" class="form-label">Lived where?</label>
            <textarea class="form-control" id="LivedWhere" rows="2"></textarea>
          </div>

          <div class="form-group form-row mt-3">
            <label for="parentsAliveDiedWhen" class="form-label">Parents alive? Died when?</label>
            <textarea class="form-control" id="parentsAliveDiedWhen" rows="2"></textarea>
          </div>

          <div class="form-group form-row mt-3">
            <label for="parentslivetogetherPeacefully" class="form-label">Parents live together? Peacefully?</label>
            <textarea class="form-control" id="parentslivetogetherPeacefully" rows="2"></textarea>
          </div>
  
          <div class="form-group form-row mt-3">
            <label for="ProfessSourceIncome" class="form-label">ProfessSourceIncome</label>
            <textarea class="form-control" id="ProfessSourceIncome" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="IncomeForHowMany" class="form-label">Income for how many</label>
            <textarea class="form-control" id="IncomeForHowMany" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="HowManySiblings" class="form-label">How many Siblings?</label>
            <textarea class="form-control" id="HowManySiblings" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="SiblingsGender" class="form-label">Siblings Gender</label>
            <textarea class="form-control" id="SiblingsGender" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="SiblingsAge" class="form-label">Siblings Age</label>
            <textarea class="form-control" id="SiblingsAge" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="SibAliveHealthy" class="form-label">Siblings Alive Healthy</label>
            <textarea class="form-control" id="SibAliveHealthy" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="OneFatherOneMother" class="form-label">One Father one Mother</label>
            <textarea class="form-control" id="OneFatherOneMother" rows="2"></textarea>
          </div>
      
          <div class="form-group form-row mt-3">
            <label for="Abuse" class="form-label">Abuse</label>
            <textarea class="form-control" id="Abuse" rows="2"></textarea>
          </div>
          <div class="form-group form-row mt-3">
            <label for="SexuallyActive" class="form-label">Sexually Active</label>
            <textarea class="form-control" id="SexuallyActive" rows="2"></textarea>
          </div>
        
          <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>

      </form>

    </div>

    <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>
  </body>
</html>