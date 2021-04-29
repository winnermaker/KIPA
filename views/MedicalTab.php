<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <?php 
    require 'navbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
    
    ?>

    <title>Medical Tab</title>
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Children</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">MedicalMain</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">MedicalVisits</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social" type="button" role="tab" aria-controls="pills-social" aria-selected="false">SocialHistory</button>
      </li>
      
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php require 'childrenEingabe.php' ?></div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php require 'medicalMain.php' ?></div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><?php require 'MedicalVisits.php' ?></div>
      <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab"><?php require 'SocialHistory.php' ?></div>
    </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->
    

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <style>
      body {
        background-image: url('img/med3.png');
      }
  </style>
  </body>
</html>