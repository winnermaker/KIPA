<!doctype html>
<html lang="en">
  <head>
      <?php require 'navbar.html' ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Children</title>

    <div class="container">
            <h1>Children</h1>
        </div>
  </head>
  <body>

    <form action="">

        <div class="container">
            <div class="row">
                <div class ="form-group col-6">
                    <label for="firstName" class="form-label">FirstName</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Max">  
                </div>

                <div class="form-group col-6">
                    <label for="lastName" class="form-label">LastName</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Mustermann"> 
                </div>
                
            </div>

            <div class="row mt-3">
                <div class ="form-group col-6">
                    <label for="callName" class="form-label">CallName</label>
                    <input type="text" class="form-control" id="callName" placeholder="Mike">  
                </div>

                <div class="form-group col-6">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="lastName" placeholder="m/f"> 
                </div>
            </div>

            <div class="row mt-3">
                <div class ="form-group col-6">
                    <label for="dayofBirth" class="col-2 col-form-label">Day of Birth</label>
                    <input class="form-control col-4" type="date" value="2021-04-12" id="dayofBirth">        
                </div>

                <div class="form-group col-6">
                    <label for="EDOB" class="col-3 col-form-label">Est. Day of Birth</label>
                    <input class="form-control col-3" type="date" value="2021-04-12" id="EDOB">
                
                </div>
                
            </div>


            <div class="row mt-3">
                <div class ="form-group col-6">
                    <label for="admDate" class="col-2 col-form-label">AdmDate</label>
                    <input class="form-control col-4" type="date" value="2021-04-12" id="admDate">        
                </div>

                <div class="form-group col-6">
                    <label for="disDate" class="col-3 col-form-label">DisDate</label>
                    <input class="form-control col-3" type="date" value="2021-04-12" id="disDate">
                
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="pictureTaken" class="form-label">PictureTaken</label>
                    <input class="form-control" type="date" value="2021-04-12" id="pictureTaken">
                </div>

                <div class="form-group col-6">
                    <label class="form-label" for="customFile">Upload Picture</label>
                    <input type="file" class="form-control" id="customFile" />
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </div>
    </form>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>