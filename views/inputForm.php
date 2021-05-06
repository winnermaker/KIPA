<?php
  require 'navbar.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
  require '..\backend\db_connection.php';
  require '..\backend\db_controller.php';

  $conn = new db_connection();
  $conn->connectToDB();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <?php 
    require 'navbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
    
    ?>
    <style>
      
    </style>

    <title>Medical Tab</title>
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Children</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Medical Main</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Visits</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social" type="button" role="tab" aria-controls="pills-social" aria-selected="false">Social History</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-pexam-tab" data-bs-toggle="pill" data-bs-target="#pills-pexam" type="button" role="tab" aria-controls="pills-pexam" aria-selected="false">Pexam</button>
      </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php require 'children.php' ?></div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php require 'medicalMain.php' ?></div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><?php require 'medicalVisits.php' ?></div>
      <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab"><?php require 'socialHistory.php' ?></div>
      <div class="tab-pane fade" id="pills-pexam" role="tabpanel" aria-labelledby="pills-pexam-tab"><?php require 'medicalPexam.php' ?></div>
    </div>
        </div>

<<<<<<< HEAD
    <!-- Optional JavaScript; choose one of the two! -->

=======
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
>>>>>>> 71908cc620e3fce56cffdf8d236fdcc3aa1810c1



<<<<<<< HEAD
    <style>

  </style>
=======
        <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>

>>>>>>> 71908cc620e3fce56cffdf8d236fdcc3aa1810c1
  </body>
</html>
