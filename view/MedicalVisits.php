<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Medical Visits</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-3 mb-3">Medical Visits</h1>

      <div class="row">
        <div class ="form-group col-4">
          <label for="VisitDate" class="form-label">VisitDate</label>
          <input class="form-control" type="date" value="2021-04-12" id="VisitDate">        
        </div>

        <div class="form-group col-6">
          <label for="dropdownVisitType" class="form-label"> Visit Type</label>
          <select class="form-select" id="dropdownVisitType" aria-label="Default select example">
            <option selected>Choose ! One of this options</option>
            <option value="Dentist">Dentist</option>
            <option value="Urologist">Urologist</option>
            <option value="Ultrasound">Ultrasound</option>
          </select>
        </div>

      </div>

      <div class="form-group row mt-3">
          <label for="dropdownExlocation" class="form-label">Exlocation</label>
          <select class="form-select" id="dropdownExlocation" aria-label="Default select example">
            <option selected>Choose ! One of this options</option>
            <option value="La Polyclinic">La Polyclinic</option>
            <option value="LDS">LDS</option>
            <option value="La General Hospital">La General Hospital</option>
          </select>
      </div>

      <div class="form-group row mt-3">
        <label for="Excause" class="form-label">Excause</label>
        <input type="text" class="form-control" id="Excause" placeholder="" >
      </div>

      <div class="form-group row mt-3">
        <label for="PresComplaint" class="form-label">PresComplaint</label>
        <input type="text" class="form-control" id="PresComplaint" placeholder="" >
      </div>

      <div class="form-group row mt-3">
        <label for="HistPresComplaint" class="form-label">HistPresComplaint</label>
        <input type="text" class="form-control" id="HistPresComplaint" placeholder="" >
      </div>

    <div class="row mt-3">
      <div class ="form-group col-6">
          <label for="RVD" class="form-label">RVD</label>
          <input class="form-control" type="date" value="2021-04-12" id="RVD">        
      </div>

      <div class ="form-group col-6">
          <label for="DateAdd" class="form-label">DateAdd</label>
          <input class="form-control" type="date" value="2021-04-12" id="DateAdd">        
      </div>
    </div>

      <div class="form-group row mt-4">
            <label for="PE" class="form-label">PE</label>
            <textarea class="form-control" id="PE" rows="2"></textarea>
      </div>

      <div class="form-group row mt-3">
            <label for="Plan" class="form-label">Plan</label>
            <textarea class="form-control" id="Plan" rows="2"></textarea>
      </div>

      <div class="form-group row mt-3">
            <label for="Medication" class="form-label">Medication</label>
            <textarea class="form-control" id="Medication" rows="2"></textarea>
      </div>

      <div class="form-group row mt-3">
            <label for="Remarks" class="form-label">Remarks</label>
            <textarea class="form-control" id="Remarks" rows="2"></textarea>
      </div>

      <div class="form-group row mt-3">
            <label for="Therapy" class="form-label">Therapy</label>
            <textarea class="form-control" id="Therapy" rows="2"></textarea>
      </div>

      <div class="form-group row mt-3">
            <label for="Diagnosis" class="form-label">Diagnosis</label>
            <textarea class="form-control" id="Diagnosis" rows="2"></textarea>
      </div>

      <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>

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