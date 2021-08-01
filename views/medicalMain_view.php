<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="/kipa/views/img/logo2.png">
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
      require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
      ?>

    <title>Medical Main</title>
  </head>
  <body>

    <div class="container mt-4">
      <div class="form-group row" id="feedbackMessage">
          <div class="col">
            <?php echo (isset($result))?$result:''; ?>
          </div>
      </div>

      <h1>Medical Main</h1>
      <?php require 'formsHeadline.php' ?>

      <form action="medicalMain_con.php" method="post" class="needs-validation" novalidate>
        <input type="hidden" id="medicalMainID" name="medicalMainID" value="<?php echo (!empty($medicalData['MedicalID']))?$medicalData['MedicalID']:null;?>">
        <div class="row mt-5">
          <fieldset class="col-2">
            <legend class="col-form-label">NHI Registration</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nhiRadios" id="nhiRadioYes" value="option1" <?php echo (isset($medicalData['NHIReg']) && $medicalData['NHIReg'] == 1 )?'checked':'' ?>>
              <label class="form-check-label" for="nhiRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nhiRadios" id="nhiRadioNo" value="option2" <?php echo (isset($medicalData['NHIReg']) && $medicalData['NHIReg'] == 0 )?'checked':'' ?>>
              <label class="form-check-label" for="nhiRadioNo">No</label>
            </div>
          </fieldset>

            <div class="form-group col-4">
              <label class="form-label" for="nhiNumber">NHI Number</label>
              <input type="number" class="form-control" name="nhiNumber" id="nhiNumber" min="0" value="<?php echo (isset($medicalData['NHINr']))?$medicalData['NHINr']:'';?>">
            </div>

            <div class ="form-group col">
                    <label for="reviewOn" class="form-label">Review on</label>
                    <input class="form-control" type="date" name="reviewOn" id="reviewOn" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($medicalData['ReviewOn']))?$medicalData['ReviewOn']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
            </div>

            <div class ="form-group col">
                    <label for="nextVaccDate" class="form-label">Next Vaccination Date</label>
                    <input class="form-control" type="date"  id="nextVaccDate" value="<?php echo (isset($medicalData['nextVaccDate']))?$medicalData['nextVaccDate']:'';?>" disabled>
            </div>


        </div>

        <div class="form-group form-row mt-3">
            <label for="conditions" class="form-label">Conditions</label>
            <textarea class="form-control" name="conditions" id="conditions" rows="2"><?php echo (isset($medicalData['Conditions'])) ? htmlspecialchars($medicalData['Conditions']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="permanentPrescription" class="form-label">Permanent Prescription</label>
            <textarea class="form-control" name="permanentPrescription" id="permanentPrescription" rows="2"><?php echo (isset($medicalData['PermMedication'])) ? htmlspecialchars($medicalData['PermMedication']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="plan" class="form-label" >Plan</label>
            <textarea class="form-control" name="plan" id="plan" rows="2"><?php echo (isset($medicalData['Plan'])) ? htmlspecialchars($medicalData['Plan']):'';?></textarea>
        </div>

        <div class="form-group form-row mt-3">
            <label for="otherInformation" class="form-label">Other Information</label>
            <textarea class="form-control" name="otherInformation" id="otherInformation" rows="3"><?php echo (isset($medicalData['OtherInfo'])) ? htmlspecialchars($medicalData['OtherInfo']):'';?></textarea>
        </div>

        <div class="row mt-5">
          <fieldset class="col">
            <legend class="col-form-label">Pregnancy History</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PregnancyHistRadios" id="PregnancyHistRadioYes" value="option1" <?php echo (isset($medicalData['PregnancyHist']) && $medicalData['PregnancyHist'] == 1 )?'checked':'' ?> >
              <label class="form-check-label" for="PregnancyHistRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PregnancyHistRadios" id="PregnancyHistRadioNo" value="option2" <?php echo (isset($medicalData['PregnancyHist']) && $medicalData['PregnancyHist'] == 0 )?'checked':'' ?> >
              <label class="form-check-label" for="PregnancyHistRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Immunis. completed</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="immuniComplRadios" id="immuniComplRadioYes" value="option1" <?php echo (isset($medicalData['ImmuniCompl']) && $medicalData['ImmuniCompl'] == 1 )?'checked':'' ?> >
              <label class="form-check-label" for="immuniComplRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="immuniComplRadios" id="immuniComplRadioNo" value="option2" <?php echo (isset($medicalData['ImmuniCompl']) && $medicalData['ImmuniCompl'] == 0 )?'checked':'' ?> >
              <label class="form-check-label" for="immuniComplRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Physical abuse</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="physicalAbuseRadios" id="physicalAbuseRadioYes" value="option1" <?php echo (isset($medicalData['PhysicalAbuse']) && $medicalData['PhysicalAbuse'] == 1 )?'checked':'' ?> >
              <label class="form-check-label" for="physicalAbuseRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="physicalAbuseRadios" id="physicalAbuseRadioNo" value="option2" <?php echo (isset($medicalData['PhysicalAbuse']) && $medicalData['PhysicalAbuse'] == 0 )?'checked':'' ?> >
              <label class="form-check-label" for="physicalAbuseRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Sexual abuse/active</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexualAbuseRadios" id="sexualAbuseRadioYes" value="option1" <?php echo (isset($medicalData['SexualAbuse']) && $medicalData['SexualAbuse'] == 1 )?'checked':'' ?> >
              <label class="form-check-label" for="sexualAbuseRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexualAbuseRadios" id="sexualAbuseRadioNo" value="option2" <?php echo (isset($medicalData['SexualAbuse']) && $medicalData['SexualAbuse'] == 0 )?'checked':'' ?> >
              <label class="form-check-label" for="sexualAbuseRadioNo">No</label>
            </div>
          </fieldset>

          <fieldset class="col">
            <legend class="col-form-label">Substance abuse</legend>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="substanceAbuseRadios" id="substanceAbuseRadioYes" value="option1" <?php echo (isset($medicalData['SubstanceAbuse']) && $medicalData['SubstanceAbuse'] == 1 )?'checked':'' ?> >
              <label class="form-check-label" for="substanceAbuseRadioYes">Yes</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="substanceAbuseRadios" id="substanceAbuseRadioNo" value="option2" <?php echo (isset($medicalData['SubstanceAbuse']) && $medicalData['SubstanceAbuse'] == 0 )?'checked':'' ?> >
              <label class="form-check-label" for="substanceAbuseRadioNo">No</label>
            </div>
          </fieldset>

          <div class="form-group col-3">
              <label class="form-label" for="menstrualHistory">Menstrual History</label>
              <input type="text" class="form-control" name="menstrualHistory" id="menstrualHistory" value="<?php echo (isset($medicalData['MenstrualHist']))?$medicalData['MenstrualHist']:'';?>" >
          </div>

        </div>

        <h3 class="mt-5">Tests</h3>

        <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">Hep.B pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioYes" value="option1" <?php echo (isset($medicalData['HepBPos']) && $medicalData['HepBPos'] == 1 )?'checked':'' ?> >
                    <label class="form-check-label" for="HepBPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioNo" value="option2" <?php echo (isset($medicalData['HepBPos']) && $medicalData['HepBPos'] == 0 )?'checked':'' ?> >
                    <label class="form-check-label" for="HepBPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="HepBPosRadios" id="HepBPosRadioNotDone" value="option3" <?php echo (isset($medicalData['HepBPos']) && $medicalData['HepBPos'] == 2 )?'checked':'' ?> >
                    <label class="form-check-label" for="HepBPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="HepBPosCheckDate" class="form-label">Hep.B Check Date</label>
                    <input class="form-control" type="date" name="HepBPosCheckDate"  id="HepBPosCheckDate" min="1900-04-01" max="2300-04-20" disabled value="<?php echo (isset($medicalData['HepBPosCheckDate']))?$medicalData['HepBPosCheckDate']:'';?>" >
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
            </div>

            <fieldset class="col-2 offset-1" id="hepBtreated" disabled>
              <legend class="col-form-label">Hep.B treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="HepBTreatedRadios" id="HepBtreatedRadioYes" value="option1" <?php echo (isset($medicalData['HepBPosTreated']) && $medicalData['HepBPosTreated'] == 1 )?'checked':''?> >
                  <label class="form-check-label" for="HepBtreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="HepBTreatedRadios" id="HepBtreatedRadioNo" value="option2" <?php echo (isset($medicalData['HepBPosTreated']) && $medicalData['HepBPosTreated'] == 0 )?'checked':''?> >
                  <label class="form-check-label" for="HepBtreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>

        <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">HIV pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioYes" value="option1" <?php echo (isset($medicalData['HIVPos']) && $medicalData['HIVPos'] == 1 )?'checked':'' ?> >
                    <label class="form-check-label" for="hivPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioNo" value="option2" <?php echo (isset($medicalData['HIVPos']) && $medicalData['HIVPos'] == 0 )?'checked':'' ?> >
                    <label class="form-check-label" for="hivPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hivRadios" id="hivPosRadioNotDone" value="option3" <?php echo (isset($medicalData['HIVPos']) && $medicalData['HIVPos'] == 2 )?'checked':'' ?> >
                    <label class="form-check-label" for="hivPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="hivCheckDate" class="form-label">HIV Check Date</label>
                    <input class="form-control" type="date" name="hivCheckDate"  id="hivCheckDate" min="1900-04-01" max="2300-04-20" disabled value="<?php echo (isset($medicalData['HIVCheckDate']))?$medicalData['HIVCheckDate']:'';?>" >
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
            </div>

            <fieldset class="col-2 offset-1" id="hivTreated" disabled>
              <legend class="col-form-label">HIV treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hivTreatedRadios" id="hivtreatedRadioYes" value="option1" <?php echo (isset($medicalData['HIVTreated']) && $medicalData['HIVTreated'] == 1 )?'checked':'' ?> >
                  <label class="form-check-label" for="hivtreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hivTreatedRadios" id="hivtreatedRadioNo" value="option2" <?php echo (isset($medicalData['HIVTreated']) && $medicalData['HIVTreated'] == 0 )?'checked':'' ?> >
                  <label class="form-check-label" for="hivtreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>

          <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">Tb pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TbposRadios" id="TbPosRadioYes" value="option1" <?php echo (isset($medicalData['TPos']) && $medicalData['TPos'] == 1 )?'checked':'' ?> >
                    <label class="form-check-label" for="TbPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TbposRadios" id="TbPosRadioNo" value="option2" <?php echo (isset($medicalData['TPos']) && $medicalData['TPos'] == 0 )?'checked':'' ?> >
                    <label class="form-check-label" for="TbPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TbposRadios" id="TbPosRadioNotDone" value="option3" <?php echo (isset($medicalData['TPos']) && $medicalData['TPos'] == 2 )?'checked':'' ?> >
                    <label class="form-check-label" for="TbPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="TbposCheckDate" class="form-label">Tb Check Date</label>
                    <input class="form-control" type="date" name="TbposCheckDate" id="TbposCheckDate" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($medicalData['HIVCheckDate']))?$medicalData['HIVCheckDate']:'';?>" disabled>
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
            </div>

            <fieldset class="col-2 offset-1" id="tbTreated" disabled>
              <legend class="col-form-label">Tb treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TposTreatedRadios" id="TPosTreatedRadioYes" value="option1" <?php echo (isset($medicalData['TPosTreated']) && $medicalData['TPosTreated'] == 1 )?'checked':'' ?> >
                  <label class="form-check-label" for="TPosTreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TposTreatedRadios" id="TPosTreatedRadioNo" value="option2" <?php echo (isset($medicalData['TPosTreated']) && $medicalData['TPosTreated'] == 0 )?'checked':'' ?> >
                  <label class="form-check-label" for="TPosTreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">STD pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioYes" value="option1" <?php echo (isset($medicalData['STDPos']) && $medicalData['STDPos'] == 1 )?'checked':'' ?> >
                    <label class="form-check-label" for="STDposRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioNo" value="option2" <?php echo (isset($medicalData['STDPos']) && $medicalData['STDPos'] == 0 )?'checked':'' ?> >
                    <label class="form-check-label" for="STDposRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stdposRadios" id="STDposRadioNotDone" value="option3" <?php echo (isset($medicalData['STDPos']) && $medicalData['STDPos'] == 2 )?'checked':'' ?> >
                    <label class="form-check-label" for="STDposRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="STDposCheckDate" class="form-label">STD Check Date</label>
                    <input class="form-control" type="date" name="stdposCheckDate" id="STDposCheckDate" min="1900-04-01" max="2300-04-20" disabled value="<?php echo (isset($medicalData['STDPosCheckDate']))?$medicalData['STDPosCheckDate']:'';?>" >
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
            </div>

            <fieldset class="col-2 offset-1" id="stdTreated" disabled>
              <legend class="col-form-label">STD treated</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="STDPosTreatedRadios" id="STDposTreatedRadioYes" value="option1" <?php echo (isset($medicalData['STDPosTreated']) && $medicalData['STDPosTreated'] == 1 )?'checked':'' ?> >
                  <label class="form-check-label" for="STDposTreatedRadioYes">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="STDPosTreatedRadios" id="STDposTreatedRadioNo" value="option2" <?php echo (isset($medicalData['STDPosTreated']) && $medicalData['STDPosTreated'] == 0 )?'checked':'' ?> >
                  <label class="form-check-label" for="STDposTreatedRadioNo">No</label>
                </div>
            </fieldset>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
              <legend class="col-form-label">Pregnancy Test pos.</legend>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioYes" value="option1" <?php echo (isset($medicalData['PregTestPos']) && $medicalData['PregTestPos'] == 1 )?'checked':'' ?> >
                    <label class="form-check-label" for="pregPosRadioYes">Yes</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioNo" value="option2" <?php echo (isset($medicalData['PregTestPos']) && $medicalData['PregTestPos'] == 0 )?'checked':'' ?> >
                    <label class="form-check-label" for="pregPosRadioNo">No</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pregPosRadios" id="pregPosRadioNotDone" value="option3" <?php echo (isset($medicalData['PregTestPos']) && $medicalData['PregTestPos'] == 2)?'checked':'' ?> >
                    <label class="form-check-label" for="pregPosRadioNotDone">Not done</label>
                  </div>
            </fieldset>

            <div class ="form-group col-3">
                    <label for="PregTestDate" class="form-label">Pregnancy Test Date</label>
                    <input class="form-control" type="date" name="pregTestDate"  id="PregTestDate" min="1900-04-01" max="2300-04-20" disabled value="<?php echo (isset($medicalData['PregTestDate']))?$medicalData['PregTestDate']:'';?>" >
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
            </div>
          </div>


          <div class="row mt-4">
            <fieldset class="col-4">
                <legend class="col-form-label">Sickle Cell pos.</legend>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickleCellPosRadios" id="SickleCellRadioYes" value="option1" <?php echo (isset($medicalData['SickelCellPos']) && $medicalData['SickelCellPos'] == 1 )?'checked':'' ?> >
                      <label class="form-check-label" for="SickleCellRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickleCellPosRadios" id="SickleCellRadioNo" value="option2" <?php echo (isset($medicalData['SickelCellPos']) && $medicalData['SickelCellPos'] == 0 )?'checked':'' ?> >
                      <label class="form-check-label" for="SickleCellRadioNo">No</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="SickleCellPosRadios" id="SickleCellRadioNotDone" value="option3" <?php echo (isset($medicalData['SickelCellPos']) && $medicalData['SickelCellPos'] == 2)?'checked':'' ?> >
                      <label class="form-check-label" for="SickleCellRadioNotDone">Not done</label>
                    </div>
              </fieldset>

              <div class="form-group col-3">
                <label for="sickleCellType" class="form-label">Sickle Cell Type</label>
                <input type="text" class="form-control" name="sickleCellType" id="sickleCellType" maxlength="2" value="<?php echo (isset($medicalData['SickelCellType']))?$medicalData['SickelCellType']:'';?>"  disabled>
              </div>
          </div>

          <div class="row mt-4">
            <fieldset class="col-4">
                <legend class="col-form-label">G6P Deficiency</legend>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioYes" value="option1" <?php echo (isset($medicalData['G6DP']) && $medicalData['G6DP'] == 1 )?'checked':'' ?> >
                      <label class="form-check-label" for="G6DPRadiosRadioYes">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioNo" value="option2" <?php echo (isset($medicalData['G6DP']) && $medicalData['G6DP'] == 0 )?'checked':'' ?> >
                      <label class="form-check-label" for="G6DPRadiosRadioNo">No</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="G6DPRadios" id="G6DPRadiosRadioNotDone" value="option3" <?php echo (isset($medicalData['G6DP']) && $medicalData['G6DP'] == 2)?'checked':'' ?>>
                      <label class="form-check-label" for="G6DPRadiosRadioNotDone">Not done</label>
                    </div>
              </fieldset>
          </div>

          <button type="submit" class="btn btn-primary mt-5 mb-3">Submit</button>
      </form>
    </div>

    <script>
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()

          $(document).ready(function() {
            $('input,textarea,select').addClass('border border-dark');

            var gender = document.getElementById( "gender" ).innerText;
            if(gender == "Male"){
                document.getElementById("menstrualHistory").disabled = true;
            } else if(gender == "Female"){
                document.getElementById("menstrualHistory").disabled = false;
            }

            if (!$("input[name='HepBPosRadios']:checked").val()) {
              $("#HepBPosRadioNotDone").prop('checked', true);
            }

            if (!$("input[name='hivRadios']:checked").val()) {
              $("#hivPosRadioNotDone").prop('checked', true);
            }

            if (!$("input[name='TbposRadios']:checked").val()) {
              $("#TbPosRadioNotDone").prop('checked', true);
            }

            if (!$("input[name='stdposRadios']:checked").val()) {
              $("#STDposRadioNotDone").prop('checked', true);
            }

            if (!$("input[name='pregPosRadios']:checked").val()) {
              $("#pregPosRadioNotDone").prop('checked', true);
            }

            if (!$("input[name='SickleCellPosRadios']:checked").val()) {
              $("#SickleCellRadioNotDone").prop('checked', true);
            }

            if (!$("input[name='G6DPRadios']:checked").val()) {
              $("#G6DPRadiosRadioNotDone").prop('checked', true);
            }



            if($('#HepBPosRadioYes').prop('checked')){
              $('#HepBPosCheckDate').removeAttr("disabled");
              $('#hepBtreated').removeAttr("disabled");
            }

            if($('#HepBPosRadioNo').prop('checked')){
              $('#HepBtreatedRadioYes').prop('checked', false);
              $('#HepBtreatedRadioNo').prop('checked', false);
              $('#HepBPosCheckDate').removeAttr("disabled");
              $('#hepBtreated').attr("disabled","disabled");
            }

            if($('#HepBPosRadioNotDone').prop('checked')){
              $('#HepBtreatedRadioYes').prop('checked', false);
              $('#HepBtreatedRadioNo').prop('checked', false);
              $('#HepBPosCheckDate').val("");
              $('#HepBPosCheckDate').attr("disabled","disabled");
              $('#hepBtreated').attr("disabled","disabled");
            }

            if($('#hivPosRadioYes').prop('checked')){
              $('#hivCheckDate').removeAttr("disabled");
              $('#hivTreated').removeAttr("disabled");
            }

            if($('#hivPosRadioNo').prop('checked')){
              $('#hivtreatedRadioYes').prop('checked', false);
              $('#hivtreatedRadioNo').prop('checked', false);
              $('#hivCheckDate').removeAttr("disabled");
              $('#hivTreated').attr("disabled","disabled");
            }

            if($('#hivPosRadioNotDone').prop('checked')){
              $('#hivtreatedRadioYes').prop('checked', false);
              $('#hivtreatedRadioNo').prop('checked', false);
              $('#hivCheckDate').val("");
              $('#hivCheckDate').attr("disabled","disabled");
              $('#hivTreated').attr("disabled","disabled");
            }

            if($('#TbPosRadioYes').prop('checked')){
              $('#TbposCheckDate').removeAttr("disabled");
              $('#tbTreated').removeAttr("disabled");
            }

            if($('#TbPosRadioNo').prop('checked')){
              $('#TPosTreatedRadioYes').prop('checked', false);
              $('#TPosTreatedRadioNo').prop('checked', false);
              $('#TbposCheckDate').removeAttr("disabled");
              $('#tbTreated').attr("disabled","disabled");
            }

            if($('#TbPosRadioNotDone').prop('checked')){
              $('#TPosTreatedRadioYes').prop('checked', false);
              $('#TPosTreatedRadioNo').prop('checked', false);
              $('#TbposCheckDate').val("");
              $('#TbposCheckDate').attr("disabled","disabled");
              $('#tbTreated').attr("disabled","disabled");
            }

            if($('#STDposRadioYes').prop('checked')){
              $('#STDposCheckDate').removeAttr("disabled");
              $('#stdTreated').removeAttr("disabled");
            }

            if($('#STDposRadioNo').prop('checked')){
              $('#STDposTreatedRadioYes').prop('checked', false);
              $('#STDposTreatedRadioNo').prop('checked', false);
              $('#STDposCheckDate').removeAttr("disabled");
              $('#stdTreated').attr("disabled","disabled");
            }

            if($('#STDposRadioNotDone').prop('checked')){
              $('#STDposTreatedRadioYes').prop('checked', false);
              $('#STDposTreatedRadioNo').prop('checked', false);
              $('#STDposCheckDate').val("");
              $('#STDposCheckDate').attr("disabled","disabled");
              $('#stdTreated').attr("disabled","disabled");
            }

            if($('#pregPosRadioYes').prop('checked')){
              $('#PregTestDate').removeAttr("disabled");
            }

            if($('#pregPosRadioNo').prop('checked')){
              $('#PregTestDate').removeAttr("disabled");
            }

            if($('#pregPosRadioNotDone').prop('checked')){
              $('#PregTestDate').val("");
              $('#PregTestDate').attr("disabled","disabled");
            }

            if($('#SickleCellRadioYes').prop('checked')){
              $('#sickleCellType').removeAttr("disabled");
            }

            if($('#SickleCellRadioNo').prop('checked')){
              $('#sickleCellType').val("");
              $('#sickleCellType').attr("disabled","disabled");
            }

            if($('#SickleCellRadioNotDone').prop('checked')){
              $('#sickleCellType').val("");
              $('#sickleCellType').attr("disabled","disabled");
            }


          });


        $(function () {
        $("input[name='nhiRadios']").click(function () {
            if ($("#nhiRadioYes").is(":checked")) {
                $("#nhiNumber").removeAttr("disabled");
            } else {
                $("#nhiNumber").attr("disabled", "disabled");
                $("#nhiNumber").val("");
            }
        });
    });


      $('#HepBPosRadioYes').click(function()
      {
        $('#HepBPosCheckDate').removeAttr("disabled");
        $('#hepBtreated').removeAttr("disabled");
      });

      $('#HepBPosRadioNo').click(function()
      {
        $('#HepBtreatedRadioYes').prop('checked', false);
        $('#HepBtreatedRadioNo').prop('checked', false);
        $('#HepBPosCheckDate').removeAttr("disabled");
        $('#hepBtreated').attr("disabled","disabled");
      });

      $('#HepBPosRadioNotDone').click(function()
      {
        $('#HepBtreatedRadioYes').prop('checked', false);
        $('#HepBtreatedRadioNo').prop('checked', false);
        $('#HepBPosCheckDate').val("");
        $('#HepBPosCheckDate').attr("disabled","disabled");
        $('#hepBtreated').attr("disabled","disabled");
      });



      $('#hivPosRadioYes').click(function()
      {
        $('#hivCheckDate').removeAttr("disabled");
        $('#hivTreated').removeAttr("disabled");
      });

      $('#hivPosRadioNo').click(function()
      {
        $('#hivtreatedRadioYes').prop('checked', false);
        $('#hivtreatedRadioNo').prop('checked', false);
        $('#hivCheckDate').removeAttr("disabled");
        $('#hivTreated').attr("disabled","disabled");
      });

      $('#hivPosRadioNotDone').click(function()
      {
        $('#hivtreatedRadioYes').prop('checked', false);
        $('#hivtreatedRadioNo').prop('checked', false);
        $('#hivCheckDate').val("");
        $('#hivCheckDate').attr("disabled","disabled");
        $('#hivTreated').attr("disabled","disabled");
      });


      $('#TbPosRadioYes').click(function()
      {
        $('#TbposCheckDate').removeAttr("disabled");
        $('#tbTreated').removeAttr("disabled");
      });

      $('#TbPosRadioNo').click(function()
      {
        $('#TPosTreatedRadioYes').prop('checked', false);
        $('#TPosTreatedRadioNo').prop('checked', false);
        $('#TbposCheckDate').removeAttr("disabled");
        $('#tbTreated').attr("disabled","disabled");
      });

      $('#TbPosRadioNotDone').click(function()
      {
        $('#TPosTreatedRadioYes').prop('checked', false);
        $('#TPosTreatedRadioNo').prop('checked', false);
        $('#TbposCheckDate').val("");
        $('#TbposCheckDate').attr("disabled","disabled");
        $('#tbTreated').attr("disabled","disabled");
      });


      $('#STDposRadioYes').click(function()
      {
        $('#STDposCheckDate').removeAttr("disabled");
        $('#stdTreated').removeAttr("disabled");
      });

      $('#STDposRadioNo').click(function()
      {
        $('#STDposTreatedRadioYes').prop('checked', false);
        $('#STDposTreatedRadioNo').prop('checked', false);
        $('#STDposCheckDate').removeAttr("disabled");
        $('#stdTreated').attr("disabled","disabled");
      });

      $('#STDposRadioNotDone').click(function()
      {
        $('#STDposTreatedRadioYes').prop('checked', false);
        $('#STDposTreatedRadioNo').prop('checked', false);
        $('#STDposCheckDate').val("");
        $('#STDposCheckDate').attr("disabled","disabled");
        $('#stdTreated').attr("disabled","disabled");
      });


      $('#pregPosRadioYes').click(function()
      {
        $('#PregTestDate').removeAttr("disabled");
      });

      $('#pregPosRadioNo').click(function()
      {
        $('#PregTestDate').removeAttr("disabled");
      });

      $('#pregPosRadioNotDone').click(function()
      {
        $('#PregTestDate').val("");
        $('#PregTestDate').attr("disabled","disabled");
      });


      $('#SickleCellRadioYes').click(function()
      {
        $('#sickleCellType').removeAttr("disabled");
      });

      $('#SickleCellRadioNo').click(function()
      {
        $('#sickleCellType').val("");
        $('#sickleCellType').attr("disabled","disabled");
      });

      $('#SickleCellRadioNotDone').click(function()
      {
        $('#sickleCellType').val("");
        $('#sickleCellType').attr("disabled","disabled");
      });


      document.getElementById("investigator").hidden = true;
      document.getElementById("investigatorName").hidden = true;
    </script>

  </body>
</html>
