<!doctype html>
<html lang="en">
  <head>

    <title>Medical Visits</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-3">Medical Visits</h1>

      <div class="row mt-5">
        <div class ="form-group col-2">
          <label for="VisitDate" class="form-label">Visit Date</label>
          <input class="form-control" type="date" value="2021-04-12" id="VisitDate">        
        </div>

        <div class="form-group col-4">
          <label for="dropdownVisitType" class="form-label"> Visit Type</label>
          <select class="form-select" id="dropdownVisitType" aria-label="Default select example">
            <option selected>Choose ! One of these options</option>
            <option value="Dentist">Dentist</option>
            <option value="Urologist">Urologist</option>
            <option value="Ultrasound">Ultrasound</option>
          </select>
        </div>

        <div class="form-group col-4">
            <label for="dropdownExlocation" class="form-label">Exam. Location</label>
            <select class="form-select" id="dropdownExlocation" aria-label="Default select example">
              <option selected>Choose ! One of these options</option>
              <option value="La Polyclinic">La Polyclinic</option>
              <option value="LDS">LDS</option>
              <option value="La General Hospital">La General Hospital</option>
            </select>
        </div>

        <div class ="form-group col-2">
          <label for="RVD" class="form-label">Review Date</label>
          <input class="form-control" type="date" value="2021-04-12" id="RVD">        
        </div>

      </div>

      <div class="form-group form-row mt-3">
        <label for="Excause" class="form-label">Exam. Cause</label>
        <input type="text" class="form-control" id="Excause" placeholder="" >
      </div>

      <div class="form-group form-row mt-3">
        <label for="presentComplaint" class="form-label">Present Complaint</label>
        <input type="text" class="form-control" id="presentComplaint" placeholder="" >
      </div>

      <div class="form-group form-row mt-3">
            <label for="HxOfPresentComplaint" class="form-label">Hx. of Present Complaint</label>
            <textarea class="form-control" id="HxOfPresentComplaint" rows="2"></textarea>
      </div>

      <div class="form-group form-row mt-3">
            <label for="PE" class="form-label">PE</label>
            <textarea class="form-control" id="PE" rows="2"></textarea>
      </div>

      <div class="form-group form-row mt-3">
            <label for="Plan" class="form-label">Plan</label>
            <textarea class="form-control" id="Plan" rows="2"></textarea>
      </div>

      <div class="form-group form-row mt-3">
            <label for="Medication" class="form-label">Medication</label>
            <textarea class="form-control" id="Medication" rows="2"></textarea>
      </div>

      <div class="form-group form-row mt-3">
            <label for="Diagnosis" class="form-label">Diagnosis</label>
            <textarea class="form-control" id="Diagnosis" rows="2"></textarea>
      </div>

      <div class="form-group form-row mt-3">
            <label for="Remarks" class="form-label">Remarks</label>
            <textarea class="form-control" id="Remarks" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>

    </div>
  </body>
</html>