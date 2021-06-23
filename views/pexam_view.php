<!doctype html>
<html lang="en">
  <head>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/navbar.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/formsNavbar.php";
    ?>
    <title>Physical Examination</title>
  </head>
  <body>
    <div class="container mt-4">

        <div class="form-group row" id="feedbackMessage">
            <div class="col">
                <?php echo (isset($result))?$result:''; ?>    
            </div>
        </div>

        <h1>Physical Examination</h1>


        <form action="pexam_con.php" method="post" class="needs-validation" novalidate>
            <?php require 'formsHeadline.php' ?>
            <input type="hidden" id="pexamID" name="pexamID" value="<?php echo (isset($pexamData['PEXAMID']))?$pexamData['PEXAMID']:'';?>">

            <div class="row mt-5">
                <div class ="form-group col">
                    <label for="examinationDate" class="form-label">Examination Date</label>
                    <input class="form-control" type="date" name="examinationDate" id="examinationDate" min="1900-04-01" max="2300-04-20" value="<?php echo (isset($pexamData['ExaminationDate']))?$pexamData['ExaminationDate']:'';?>">
                    <div class="invalid-feedback">
                    Please pick a valid Date
                    </div>
                </div>

                <div class="form-group col">
                    <label for="Weight" class="form-label">Weight (kg)</label>
                    <input type="number" step="0.01"  min="0" placeholder="" class="form-control" name="weight" id="Weight" value="<?php echo (isset($pexamData['weight']))?$pexamData['weight']:'';?>">
                </div>

                <div class="form-group col">
                    <label for="Height" class="form-label">Height (cm)</label>
                    <input type="number" step="0.01" min="0" placeholder="" class="form-control" name="height" id="Height" value="<?php echo (isset($pexamData['height']))?$pexamData['height']:'';?>">
                </div>

                <div class="form-group col">
                    <label for="headcircumference" class="form-label">Head circumference (cm)</label>
                    <input type="number" step="0.01" min="0" class="form-control" name="headcircumference" id="headcircumference" value="<?php echo (isset($pexamData['headcircumfrence']))?$pexamData['headcircumfrence']:'';?>">
                </div>
            </div>

            <div class="form-row mt-3 col-12">
                <div class="form-group">
                    <label for="generalCondition" class="form-label">General Condition</label>
                    <textarea class="form-control" name="generalCondition" id="generalCondition" rows="2"><?php echo (isset($pexamData['generalCond'])) ? htmlspecialchars($pexamData['generalCond']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">

                <div class="form-group col ">
                    <label for="nutritcondition" class="form-label">Nutritional Condition</label>
                    <input type="text" placeholder="" class="form-control" name="nutritcondition" id="nutritcondition" value="<?php echo (isset($pexamData['nutritcondition']))?$pexamData['nutritcondition']:'';?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="BMI" class="form-label">BMI</label>
                    <input type="number" step="0.01" min="0" placeholder="" class="form-control" name="bmi" id="BMI" value="<?php echo (isset($pexamData['bmi']))?$pexamData['bmi']:'';?>">
                </div>

                <div class="form-group col-3">
                    <label for="MUAC" class="form-label">MUAC (cm)</label>
                    <input type="number" step="0.01" min="0" placeholder="" class="form-control" name="muac" id="MUAC" value="<?php echo (isset($pexamData['muac']))?$pexamData['muac']:'';?>">
                </div>

                <div class="form-group col-3">
                    <label for="temperature" class="form-label">Temperature (Celsius)</label>
                    <input type="number" step="any" placeholder="" class="form-control" name="temperature" id="temperature" value="<?php echo (isset($pexamData['temperature']))?$pexamData['temperature']:'';?>">
                </div>

                <div class="form-group col-3">
                    <label for="edema" class="form-label">Edema</label>
                    <input type="text" placeholder="" class="form-control" name="edema" id="edema" value="<?php echo (isset($pexamData['edema']))?$pexamData['edema']:'';?>">
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="jaundice" class="form-label">Jaundice</label>
                    <input type="text" placeholder="" class="form-control" name="jaundice" id="jaundice" value="<?php echo (isset($pexamData['jaundice']))?$pexamData['jaundice']:'';?>">
                </div>

                <div class="form-group col-3">
                    <label for="pallor" class="form-label">Pallor</label>
                    <input type="text" placeholder="" class="form-control" name="pallor" id="pallor" value="<?php echo (isset($pexamData['pallor']))?$pexamData['pallor']:'';?>">
                </div>

                <div class="form-group col-3">
                    <label for="clubbing" class="form-label">Clubbing</label>
                    <input type="text" placeholder="" class="form-control" name="clubbing" id="clubbing" value="<?php echo (isset($pexamData['clubbing']))?$pexamData['clubbing']:'';?>">
                </div>

                <div class="form-group col-3">
                    <label for="dactylitis" class="form-label">Dactylitis</label>
                    <input type="text" placeholder="" class="form-control" name="dactylitis" id="dactylitis" value="<?php echo (isset($pexamData['dactylitis']))?$pexamData['dactylitis']:'';?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Hydration" class="form-label">Hydration</label>
                    <textarea class="form-control" name="hydration" id="Hydration" rows="2"><?php echo (isset($pexamData['hydration'])) ? htmlspecialchars($pexamData['hydration']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="Lymphaden" class="form-label">Lymphadenopathy</label>
                    <textarea class="form-control" name="lymphaden" id="Lymphaden" rows="2"><?php echo (isset($pexamData['lymphaden'])) ? htmlspecialchars($pexamData['lymphaden']):''; ?></textarea>
                </div>

            </div>


            <div class="row mt-3">
                <div class="form-group col">
                    <label for="fontanel" class="form-label">Fontanel</label>
                    <textarea class="form-control" name="fontanel" id="fontanel" rows="2"><?php echo (isset($pexamData['fontanel'])) ? htmlspecialchars($pexamData['fontanel']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="eyes" class="form-label">Eyes</label>
                    <textarea class="form-control" name="eyes" id="eyes" rows="2"><?php echo (isset($pexamData['eyes'])) ? htmlspecialchars($pexamData['eyes']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="pupilreact" class="form-label">Pupil reaction to light</label>
                    <textarea class="form-control" name="pupilreact" id="pupilreact" rows="2"><?php echo (isset($pexamData['pupilreact'])) ? htmlspecialchars($pexamData['pupilreact']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="ears" class="form-label">Ears</label>
                    <textarea class="form-control" name="ears" id="ears" rows="2"><?php echo (isset($pexamData['ears'])) ? htmlspecialchars($pexamData['ears']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="eardrums" class="form-label">Eardrums</label>
                    <textarea class="form-control" name="eardrums" id="eardrums" rows="2"><?php echo (isset($pexamData['eardrums'])) ? htmlspecialchars($pexamData['eardrums']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="pharynx" class="form-label">Pharynx</label>
                    <textarea class="form-control" name="pharynx" id="pharynx" rows="2"><?php echo (isset($pexamData['pharynx'])) ? htmlspecialchars($pexamData['pharynx']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="tonsils" class="form-label">Tonsils</label>
                    <textarea class="form-control" name="tonsils" id="tonsils" rows="2"><?php echo (isset($pexamData['tonsils'])) ? htmlspecialchars($pexamData['tonsils']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Oral" class="form-label">Oral</label>
                    <textarea class="form-control" name="oral" id="Oral" rows="2"><?php echo (isset($pexamData['oral'])) ? htmlspecialchars($pexamData['oral']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="thyroid" class="form-label">Thyroid</label>
                    <textarea class="form-control" name="thyroid" id="thyroid" rows="2"><?php echo (isset($pexamData['thyroid'])) ? htmlspecialchars($pexamData['thyroid']):''; ?></textarea>
                </div>
            </div>


            <h3 class="mt-5"> Chest</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="chest_RR" class="form-label">R/R</label>
                    <textarea class="form-control" name="chest_RR" id="chest_RR" rows="2"><?php echo (isset($pexamData['chest_RR'])) ? htmlspecialchars($pexamData['chest_RR']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="chest_AE" class="form-label">A/E</label>
                    <textarea class="form-control" name="chest_AE" id="chest_AE" rows="2"><?php echo (isset($pexamData['chest_AE'])) ? htmlspecialchars($pexamData['chest_AE']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="chest_BS" class="form-label">B/S</label>
                    <textarea class="form-control" name="chest_BS" id="chest_BS" rows="2"><?php echo (isset($pexamData['chest_BS'])) ? htmlspecialchars($pexamData['chest_BS']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="chest_AS" class="form-label">A/S</label>
                    <textarea class="form-control" name="chest_AS" id="chest_AS" rows="2"><?php echo (isset($pexamData['chest_AS'])) ? htmlspecialchars($pexamData['chest_AS']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="chest_Percussion" class="form-label">Percussion</label>
                    <textarea class="form-control" name="chest_Percussion" id="chest_Percussion" rows="2"><?php echo (isset($pexamData['chest_percussion'])) ? htmlspecialchars($pexamData['chest_percussion']):''; ?></textarea>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="chest_Flaring" class="form-label">Flaring</label>
                    <textarea class="form-control" name="chest_Flaring" id="chest_Flaring" rows="2"><?php echo (isset($pexamData['chest_flaring'])) ? htmlspecialchars($pexamData['chest_flaring']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="chest_subInterCostal" class="form-label">Sub-/intercostal recession</label>
                    <textarea class="form-control" name="chest_subInterCostal" id="chest_subInterCostal" rows="2"><?php echo (isset($pexamData['chest_subInterCosta'])) ? htmlspecialchars($pexamData['chest_subInterCosta']):''; ?></textarea>
                </div>
            </div>


            <h3 class="mt-5">CVS</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cvs_heartrate" class="form-label">Heart Rate</label>
                    <input type="text" class="form-control" name="cvs_heartrate" id="cvs_heartrate" value="<?php echo (isset($pexamData['cvs_heartrate']))?$pexamData['cvs_heartrate']:'';?>" >
                </div>

                <div class="form-group col-6">
                    <label for="cvs_BP" class="form-label">BP (mmHg)</label>
                    <input type="text" class="form-control" name="cvs_BP" id="cvs_BP" value="<?php echo (isset($pexamData['cvs_BP']))?$pexamData['cvs_BP']:'';?>" >
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cvs_pulse" class="form-label">Pulse</label>
                    <textarea class="form-control" name="cvs_pulse" id="cvs_pulse" rows="2"><?php echo (isset($pexamData['cvs_pulse'])) ? htmlspecialchars($pexamData['cvs_pulse']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cvs_Murmurs" class="form-label">Murmurs</label>
                    <textarea class="form-control" name="cvs_Murmurs" id="cvs_Murmurs" rows="2"><?php echo (isset($pexamData['cvs_Murmurs'])) ? htmlspecialchars($pexamData['cvs_Murmurs']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cvs_ApexBeat" class="form-label">ApexBeat</label>
                    <textarea class="form-control" name="cvs_ApexBeat" id="cvs_ApexBeat" rows="2"><?php echo (isset($pexamData['cvs_ApexBeat'])) ? htmlspecialchars($pexamData['cvs_ApexBeat']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cvs_HSII" class="form-label">HS I+II</label>
                    <textarea class="form-control" name="cvs_HSII" id="cvs_HSII" rows="2"><?php echo (isset($pexamData['cvs_HSII'])) ? htmlspecialchars($pexamData['cvs_HSII']):''; ?></textarea>
                </div>
            </div>

            <h3 class="mt-5">CNS</h3>

            <div class="row mt-3">
                <div class="form-group col-4">
                    <label for="cns_cgs" class="form-label">CGS</label>
                    <textarea class="form-control" name="cns_cgs" id="cns_cgs" rows="2"><?php echo (isset($pexamData['cns_cgs'])) ? htmlspecialchars($pexamData['cns_cgs']):''; ?></textarea>
                </div>

                <div class="form-group col-4">
                    <label for="cns_neck" class="form-label">Neck</label>
                    <textarea class="form-control" name="cns_neck" id="cns_neck" rows="2"><?php echo (isset($pexamData['cns_neck'])) ? htmlspecialchars($pexamData['cns_neck']):''; ?></textarea>
                </div>

                <div class="form-group col-4">
                    <label for="cns_reflexes" class="form-label">Reflexes</label>
                    <textarea class="form-control" name="cns_reflexes" id="cns_reflexes" rows="2"><?php echo (isset($pexamData['cns_reflexes'])) ? htmlspecialchars($pexamData['cns_reflexes']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cns_orientation" class="form-label">Orientation</label>
                    <textarea class="form-control" name="cns_orientation" id="cns_orientation" rows="2"><?php echo (isset($pexamData['cns_orientation'])) ? htmlspecialchars($pexamData['cns_orientation']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cns_speech" class="form-label">Speech</label>
                    <textarea class="form-control" name="cns_speech" id="cns_speech" rows="2"><?php echo (isset($pexamData['cns_speech'])) ? htmlspecialchars($pexamData['cns_speech']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cns_sensation" class="form-label">Sensation</label>
                    <textarea class="form-control" name="cns_sensation" id="cns_sensation" rows="2"><?php echo (isset($pexamData['cns_sensation'])) ? htmlspecialchars($pexamData['cns_sensation']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cns_milestones" class="form-label">Milestones</label>
                    <textarea class="form-control" name="cns_milestones" id="cns_milestones" rows="2"><?php echo (isset($pexamData['cns_milestone'])) ? htmlspecialchars($pexamData['cns_milestone']):''; ?></textarea>
                </div>
            </div>


            <h3 class="mt-5">Gastrointestinal</h3>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="gas_tenderness" class="form-label">Tenderness</label>
                    <textarea class="form-control" name="gas_tenderness" id="gas_tenderness" rows="2"><?php echo (isset($pexamData['gas_tenderness'])) ? htmlspecialchars($pexamData['gas_tenderness']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_rebound" class="form-label">Rebound</label>
                    <textarea class="form-control" name="gas_rebound" id="gas_rebound" rows="2"><?php echo (isset($pexamData['gas_rebound'])) ? htmlspecialchars($pexamData['gas_rebound']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_hernia" class="form-label">Hernia</label>
                    <textarea class="form-control" name="gas_hernia" id="gas_hernia" rows="2"><?php echo (isset($pexamData['gas_hernia'])) ? htmlspecialchars($pexamData['gas_hernia']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_distension" class="form-label">Distension</label>
                    <textarea class="form-control" name="gas_distension" id="gas_distension" rows="2"><?php echo (isset($pexamData['gas_distension'])) ? htmlspecialchars($pexamData['gas_distension']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_bowelsounds" class="form-label">Bowelsounds</label>
                    <textarea class="form-control" name="gas_bowelsounds" id="gas_bowelsounds" rows="2"><?php echo (isset($pexamData['gas_bowel'])) ? htmlspecialchars($pexamData['gas_bowel']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_liver" class="form-label">Liver</label>
                    <textarea class="form-control" name="gas_liver" id="gas_liver" rows="2"><?php echo (isset($pexamData['gas_liver'])) ? htmlspecialchars($pexamData['gas_liver']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_spleen" class="form-label">Spleen</label>
                    <textarea class="form-control" name="gas_spleen" id="gas_spleen" rows="2"><?php echo (isset($pexamData['gas_spleen'])) ? htmlspecialchars($pexamData['gas_spleen']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_bm" class="form-label">B.M</label>
                    <textarea class="form-control" name="gas_bm" id="gas_bm" rows="2"><?php echo (isset($pexamData['gas_bm'])) ? htmlspecialchars($pexamData['gas_bm']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_stool" class="form-label">Stool</label>
                    <textarea class="form-control" name="gas_stool" id="gas_stool" rows="2"><?php echo (isset($pexamData['gas_stool'])) ? htmlspecialchars($pexamData['gas_stool']):''; ?></textarea>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_anus" class="form-label">Anus</label>
                    <textarea class="form-control" name="gas_anus" id="gas_anus" rows="2"><?php echo (isset($pexamData['gas_anus'])) ? htmlspecialchars($pexamData['gas_anus']):''; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_sphincter" class="form-label">Sphincter</label>
                    <textarea class="form-control" name="gas_sphincter" id="gas_sphincter" rows="2"><?php echo (isset($pexamData['gas_sphincter'])) ? htmlspecialchars($pexamData['gas_sphincter']):''; ?></textarea>
                </div>
            </div>


            <h3 class="mt-5">Urinary Tract</h3>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="urin_kidneys" class="form-label">Kidneys</label>
                    <input type="text" placeholder="" class="form-control" name="urin_kidneys" id="urin_kidneys" value="<?php echo (isset($pexamData['urin_kidneys']))?$pexamData['urin_kidneys']:'';?>" >
                </div>

                <div class="form-group col-3">
                    <label for="urin_frequency" class="form-label">Frequency</label>
                    <input type="text" placeholder="" class="form-control" name="urin_frequency" id="urin_frequency" value="<?php echo (isset($pexamData['urin_frequency']))?$pexamData['urin_frequency']:'';?>" >
                </div>

                <div class="form-group col-3">
                    <label for="urin_nycturia" class="form-label">Nycturia</label>
                    <input type="text" placeholder="" class="form-control" name="urin_nycturia" id="urin_nycturia" value="<?php echo (isset($pexamData['urin_nycturia']))?$pexamData['urin_nycturia']:'';?>" >
                </div>

                <div class="form-group col-3">
                    <label for="urin_urgency" class="form-label">Urgency</label>
                    <input type="text" placeholder="" class="form-control" name="urin_urgency" id="urin_urgency" value="<?php echo (isset($pexamData['urin_urgency']))?$pexamData['urin_urgency']:'';?>" >
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="urin_haematuria" class="form-label">Haematuria</label>
                    <textarea class="form-control" name="urin_haematuria" id="urin_haematuria" rows="2"><?php echo (isset($pexamData['urin_haematuria'])) ? htmlspecialchars($pexamData['urin_haematuria']):''; ?></textarea>
                </div>

                <div class="form-group col">
                    <label for="urin_dysuria" class="form-label">Dysuria</label>
                    <textarea class="form-control" name="urin_dysuria" id="urin_dysuria" rows="2"><?php echo (isset($pexamData['urin_dysuria'])) ? htmlspecialchars($pexamData['urin_dysuria']):''; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="urin_enuresis" class="form-label">Enuresis</label>
                    <textarea class="form-control" name="urin_enuresis" id="urin_enuresis" rows="2"><?php echo (isset($pexamData['urin_enuresis'])) ? htmlspecialchars($pexamData['urin_enuresis']):''; ?></textarea>
                </div>
            </div>

            <div id="maleGenitals" name="maleGenitalsForm">
                <h3 class="mt-5">Genitals male</h3>

                <div class="row mt-3">
                <input type="hidden" id="genMaleID" name="genMaleID" value="<?php echo (isset($pexamDataM['GenMaleID']))?$pexamDataM['GenMaleID']:'';?>" >
                    <fieldset class="col-2">
                        <legend class="col-form-label">Circumcised</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="male_CircumsisedRadio" id="circumcisedRadioYes" value="option1" <?php echo (isset($pexamDataM['circumcised']) && $pexamDataM['circumcised'] == 1 )?'checked':'' ?> >
                            <label class="form-check-label" for="circumcisedRadioYes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="male_CircumsisedRadio" id="circumcisedRadioNo" value="option2" <?php echo (isset($pexamDataM['circumcised']) && $pexamDataM['circumcised'] == 0 )?'checked':'' ?> >
                            <label class="form-check-label" for="circumcisedRadioNo">No</label>
                        </div>
                    </fieldset>

                    <div class="form-group offset-1 col">
                        <label for="male_tannerStage" class="form-label">Tanner stage</label>
                        <input type="text" class="form-control" name="male_tannerStage" id="male_tannerStage" value="<?php echo (isset($pexamDataM['TannerSt']))?$pexamDataM['TannerSt']:'';?>" >
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="male_descensusOfTestes" class="form-label">Descensus of testes</label>
                        <textarea class="form-control" name="male_descensusOfTestes" id="male_descensusOfTestes" rows="2"><?php echo (isset($pexamDataM['Descensus'])) ? htmlspecialchars($pexamDataM['Descensus']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="male_remarks" class="form-label">Remarks</label>
                        <textarea class="form-control" name="male_remarks" id="male_remarks" rows="3"><?php echo (isset($pexamDataM['remarks'])) ? htmlspecialchars($pexamDataM['remarks']):''; ?></textarea>
                    </div>
                </div>
            </div>

            <div id="femaleGenitals" name="femaleGenitalsForm">
                <h3 class="mt-5">Genitals female</h3>

                <div class="row mt-3">
                    <input type="hidden" id="genFemaleID" name="genFemaleID" value="<?php echo (isset($pexamDataF['GenFemaleID']))?$pexamDataF['GenFemaleID']:'';?>" >
                    <fieldset class="col-2">
                        <legend class="col-form-label">Circumcised</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="female_circumcisedRadios" id="femalecircumcisedRadioYes" value="option1" <?php echo (isset($pexamDataF['circumcised']) && $pexamDataF['circumcised'] == 1 )?'checked':'' ?> >
                            <label class="form-check-label" for="femalecircumcisedRadioYes">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="female_circumcisedRadios" id="femalecircumcisedRadioNo" value="option2" <?php echo (isset($pexamDataF['circumcised']) && $pexamDataF['circumcised'] == 0 )?'checked':'' ?> >
                            <label class="form-check-label" for="femalecircumcisedRadioNo">No</label>
                        </div>
                    </fieldset>

                    <div class="form-group offset-1 col">
                        <label for="female_tannerStage" class="form-label">Tanner stage</label>
                        <input type="text" class="form-control" name="female_tannerStage" id="female_tannerStage" value="<?php echo (isset($pexamDataF['TannerSt']))?$pexamDataF['TannerSt']:'';?>">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_hymen" class="form-label">Hymen</label>
                        <textarea class="form-control" name="female_hymen" id="female_hymen" rows="2"><?php echo (isset($pexamDataF['Hymen'])) ? htmlspecialchars($pexamDataF['Hymen']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_introitus" class="form-label">Introitus</label>
                        <textarea class="form-control" name="female_introitus" id="female_introitus" rows="2"><?php echo (isset($pexamDataF['Introitus'])) ? htmlspecialchars($pexamDataF['Introitus']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_discharge" class="form-label">Discharge</label>
                        <textarea class="form-control" name="female_discharge" id="female_discharge" rows="2"><?php echo (isset($pexamDataF['Discharge'])) ? htmlspecialchars($pexamDataF['Discharge']):''; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_breasts" class="form-label">Breasts</label>
                        <textarea class="form-control" name="female_breasts" id="female_breasts" rows="2"><?php echo (isset($pexamDataF['Breasts'])) ? htmlspecialchars($pexamDataF['Breasts']): '' ; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_mastodynia" class="form-label">Mastodynia</label>
                        <textarea class="form-control" name="female_mastodynia" id="female_mastodynia" rows="2"><?php echo (isset($pexamDataF['Mastodynia'])) ? htmlspecialchars($pexamDataF['Mastodynia']): '' ; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_period" class="form-label">Period</label>
                        <textarea class="form-control" name="female_period" id="female_period" rows="2"><?php echo (isset($pexamDataF['Period'])) ? htmlspecialchars($pexamDataF['Period']): '' ; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_dysmenorrhoea" class="form-label">Dysmenorrhoea</label>
                        <textarea class="form-control" name="female_dysmenorrhoea" id="female_dysmenorrhoea" rows="2"><?php echo (isset($pexamDataF['Dysmenorrhoea'])) ? htmlspecialchars($pexamDataF['Dysmenorrhoea']): '' ; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_dyspareunia" class="form-label">Dyspareunia</label>
                        <textarea class="form-control" name="female_dyspareunia" id="female_dyspareunia" rows="2"><?php echo (isset($pexamDataF['Dyspareunia'])) ? htmlspecialchars($pexamDataF['Dyspareunia']): '' ; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_menarche" class="form-label">Menarche</label>
                        <textarea class="form-control" name="female_menarche" id="female_menarche" rows="2"><?php echo (isset($pexamDataF['Menarche'])) ? htmlspecialchars($pexamDataF['Menarche']): '' ; ?></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_pregnancy" class="form-label">Pregnancy</label>
                        <textarea class="form-control" name="female_pregnancy" id="female_pregnancy" rows="2"><?php echo (isset($pexamDataF['Pregnancy'])) ? htmlspecialchars($pexamDataF['Pregnancy']): '' ; ?></textarea>
                    </div>
                </div>


            </div>



            <h3 class="mt-5">Musculosceletal</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="musc_tone" class="form-label">Tone</label>
                    <textarea class="form-control" name="musc_tone" id="musc_tone" rows="2"><?php echo (isset($pexamData['musc_tone'])) ? htmlspecialchars($pexamData['musc_tone']): '' ; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="musc_gait" class="form-label">Gait</label>
                    <textarea class="form-control" name="musc_gait" id="musc_gait" rows="2"><?php echo (isset($pexamData['musc_gait'])) ? htmlspecialchars($pexamData['musc_gait']): '' ; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="musc_remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" name="musc_remarks" id="musc_remarks" rows="2"><?php echo (isset($pexamData['musc_remarks'])) ? htmlspecialchars($pexamData['musc_remarks']): '' ; ?></textarea>
                </div>
            </div>


            <h3 class="mt-5">Skin</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="skin_turgor" class="form-label">Turgor</label>
                    <textarea class="form-control" name="skin_turgor" id="skin_turgor" rows="2"><?php echo (isset($pexamData['skin_turgor'])) ? htmlspecialchars($pexamData['skin_turgor']): '' ; ?></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="skin_scars" class="form-label">Scars</label>
                    <textarea class="form-control" name="skin_scars" id="skin_scars" rows="2"><?php echo (isset($pexamData['skin_scars'])) ? htmlspecialchars($pexamData['skin_scars']): '' ; ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="skin_remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" name="skin_remarks" id="skin_remarks" rows="2"><?php echo (isset($pexamData['skin_remarks'])) ? htmlspecialchars($pexamData['skin_remarks']): '' ; ?></textarea>
                </div>
            </div>


            <h3 class="mt-5">General Remarks</h3>

            <div class="row mt-3 mb-4">
                <div class="form-group">
                    <textarea class="form-control" name="generalRemarks" id="generalRemarks" rows="5"><?php echo (isset($pexamData['generalRemarks'])) ? htmlspecialchars($pexamData['generalRemarks']): '' ; ?></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>



        </form>
    </div>
    <script>
        var gender = document.getElementById( "gender" ).innerText;

        if(gender == "m"){
            document.getElementById("maleGenitals").style.display = "block";
            document.getElementById("femaleGenitals").style.display = "none";
        } else if(gender == "f"){
            document.getElementById("femaleGenitals").style.display = "block";
            document.getElementById("maleGenitals").style.display = "none";
        } else if(gender === "x"){
            document.getElementById("maleGenitals").style.display = "block";
            document.getElementById("femaleGenitals").style.display = "block";
        } else {
            document.getElementById("maleGenitals").style.display = "block";
            document.getElementById("femaleGenitals").style.display = "block";
        }
    </script>

    <script>
        $('input,textarea,select').addClass('border border-dark');

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
    </script>
  </body>
</html>
