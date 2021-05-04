<!doctype html>
<html lang="en">
  <head>

    <title>Medical Visits</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-3 mb-5">Medical Visits</h1>

      <div class="row">
        <div class ="form-group col-2">
          <label for="VisitDate" class="form-label">VisitDate</label>
          <input class="form-control" type="date" value="2021-04-12" id="VisitDate">        
        </div>

        <div class="form-group col-5">
          <label for="dropdownVisitType" class="form-label"> Visit Type</label>
          <select class="form-select" id="dropdownVisitType" aria-label="Default select example">
            <option selected>Choose ! One of this options</option>
            <option value="Dentist">Dentist</option>
            <option value="Urologist">Urologist</option>
            <option value="Ultrasound">Ultrasound</option>
          </select>
        </div>

        <div class="form-group col-5">
            <label for="dropdownExlocation" class="form-label">Exlocation</label>
            <select class="form-select" id="dropdownExlocation" aria-label="Default select example">
              <option selected>Choose ! One of this options</option>
              <option value="La Polyclinic">La Polyclinic</option>
              <option value="LDS">LDS</option>
              <option value="La General Hospital">La General Hospital</option>
            </select>
        </div>
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
  </body>
</html>