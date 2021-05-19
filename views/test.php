<?php 
    require 'navbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; 
    
    ?>

<div class=navbar navbar-light bg-faded>
  <ul class=nav navbar-nav>
    <a class=nav-item nav-link active data-toggle=tab href="patient_view.php">Start</a>
    <a class=nav-item nav-link data-toggle=tab href="medicalMain_view.php">Form</a>
    <a class=nav-item nav-link data-toggle=tab href=#status>Status</a>
    <a class=nav-item nav-link data-toggle=tab href=#reports>Reports</a>
  </ul>
</div>