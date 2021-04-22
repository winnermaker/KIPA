<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require 'navbar.html' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Social History</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mb-3 mt-3">Social History</h1>

      <form action="">

          <div class="row">
            <div class ="form-group col-6 ">
                  <label for="socialDate" class="form-label">SocialDate</label>
                  <input class="form-control" type="date" value="2021-04-12" id="socialDate">        
            </div>
            <div class="col-6">
            <label for="LivedWithWho" class="form-label">LivedWithWho</label>
            <textarea class="form-control" id="LivedWithWho" rows="1"></textarea>
            </div>
          </div>
          <div class="form-group row mt-3">
            <label for="LivedWhere" class="form-label">LivedWhere</label>
            <textarea class="form-control" id="LivedWhere" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="ParentsAlive" class="form-label">ParentsAlive</label>
            <textarea class="form-control" id="ParentsAlive" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="ParentsDiedWhen" class="form-label">ParentsDiedWhen</label>
            <textarea class="form-control" id="ParentsDiedWhen" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="ParentsLiveTogether" class="form-label">ParentsLiveTogether</label>
            <textarea class="form-control" id="ParentsLiveTogether" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="ParentsLivePeace" class="form-label">ParentsLivePeace</label>
            <textarea class="form-control" id="ParentsLivePeace" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="ProfessSourceIncome" class="form-label">ProfessSourceIncome</label>
            <textarea class="form-control" id="ProfessSourceIncome" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="IncomeForHowMany" class="form-label">IncomeForHowMany</label>
            <textarea class="form-control" id="IncomeForHowMany" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="HowManySiblings" class="form-label">HowManySiblings</label>
            <textarea class="form-control" id="HowManySiblings" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="SiblingsGender" class="form-label">SiblingsGender</label>
            <textarea class="form-control" id="SiblingsGender" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="SiblingsAge" class="form-label">SiblingsAge</label>
            <textarea class="form-control" id="SiblingsAge" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="SibAliveHealthy" class="form-label">SibAliveHealthy</label>
            <textarea class="form-control" id="SibAliveHealthy" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="OneFatherOneMother" class="form-label">OneFatherOneMother</label>
            <textarea class="form-control" id="OneFatherOneMother" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="NxtOfKin_Caretaker" class="form-label">NxtOfKin_Caretaker</label>
            <textarea class="form-control" id="NxtOfKin_Caretaker" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="Abuse" class="form-label">Abuse</label>
            <textarea class="form-control" id="Abuse" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="SexuallyActive" class="form-label">SexuallyActive</label>
            <textarea class="form-control" id="SexuallyActive" rows="2"></textarea>
          </div>
          <div class="form-group row mt-3">
            <label for="FamilyPlanning" class="form-label">FamilyPlanning</label>
            <textarea class="form-control" id="FamilyPlanning" rows="2"></textarea>
          </div>
        
          <button type="submit" class="btn btn-primary mt-3 mb-4">Submit</button>

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