<!doctype html>
<html lang="en">
  <head>
  <?php require 'inputForm.php' ?>
    <title>Physical Examination</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3">Physical Examination</h1>
        <div class="form-row sticky-top mt-3">   
          <table class="table table-striped">
              <thead class="">
                <tr>
                  <th scope="col" class="sticky-top">First name</th>
                  <th scope="col" class="sticky-top">Last name</th>
                  <th scope="col" class="sticky-top">Call name</th>
                  <th scope="col" class="sticky-top">Gender</th>
                  <th scope="col" class="sticky-top">Date of Birth</th>
                  <th scope="col" class="sticky-top">Est. Date of Birth</th>
                  <th scope="col" class="sticky-top">Date of Examination</th>
                  <th scope="col" class="sticky-top">Investigator</th>
                </tr>
              </thead>
              
              <tbody>
                <td>Mustermann</td>
                <td>Mike</td>
                <td>Mustermann</td>
                <td id="gender">Male</td>
                <td>29.10.1997</td>
                <td>29.10.1997</td>
                <td><?php echo date('d.m.y'); ?></td>
                <td>Drechsel-Atta</td>
              </tbody> 
          </table>  
        </div>

        <form action="">
            <div class="form-row mt-5 col-12">
                <div class="form-group">
                    <label for="generalCondition" class="form-label">General Condition</label>
                    <textarea class="form-control" id="generalCondition" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-2">
                    <label for="Weight" class="form-label">Weight</label>
                    <input type="text" placeholder="" class="form-control" id="Weight">
                </div>

                <div class="form-group col-2">
                    <label for="Height" class="form-label">Height</label>
                    <input type="text" placeholder="" class="form-control" id="Height">
                </div>

                <div class="form-group col-2">
                    <label for="headcircumference" class="form-label">Head circumference</label>
                    <input type="text" class="form-control" id="headcircumference">
                </div>

                <div class="form-group col ">
                    <label for="nutritcondition" class="form-label">Nutritional Condition</label>
                    <input type="text" placeholder="" class="form-control" id="nutritcondition">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="BMI" class="form-label">BMI</label>
                    <input type="text" placeholder="" class="form-control" id="BMI">
                </div>

                <div class="form-group col-3">
                    <label for="MUAC" class="form-label">MUAC</label>
                    <input type="text" placeholder="" class="form-control" id="MUAC">
                </div>

                <div class="form-group col-3">
                    <label for="temp" class="form-label">Temperature</label>
                    <input type="text" placeholder="" class="form-control" id="temp">
                </div>

                <div class="form-group col-3">
                    <label for="edema" class="form-label">Edema</label>
                    <input type="text" placeholder="" class="form-control" id="edema">
                </div>
            </div>

            
            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="jaundice" class="form-label">Jaundice</label>
                    <input type="text" placeholder="" class="form-control" id="jaundice">
                </div>

                <div class="form-group col-3">
                    <label for="pallor" class="form-label">Pallor</label>
                    <input type="text" placeholder="" class="form-control" id="pallor">
                </div>

                <div class="form-group col-3">
                    <label for="clubbing" class="form-label">Clubbing</label>
                    <input type="text" placeholder="" class="form-control" id="clubbing">
                </div>

                <div class="form-group col-3">
                    <label for="dactylitis" class="form-label">Dactylitis</label>
                    <input type="text" placeholder="" class="form-control" id="dactylitis">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Hydration" class="form-label">Hydration</label>
                    <textarea class="form-control" id="Hydration" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="Lymphaden" class="form-label">Lymphadenopathy</label>
                    <textarea class="form-control" id="Lymphaden" rows="2"></textarea>
                </div>

            </div>


            <div class="row mt-3">
                <div class="form-group col">
                    <label for="Fontanel" class="form-label">Fontanel</label>
                    <textarea class="form-control" id="Fontanel" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Eyes" class="form-label">Eyes</label>
                    <textarea class="form-control" id="Eyes" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="pupilreact" class="form-label">Pupil reaction to light</label>
                    <textarea class="form-control" id="pupilreact" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Ears" class="form-label">Ears</label>
                    <textarea class="form-control" id="Ears" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="Eardrums" class="form-label">Eardrums</label>
                    <textarea class="form-control" id="Eardrums" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Pharynx" class="form-label">Pharynx</label>
                    <textarea class="form-control" id="Pharynx" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="Tonsils" class="form-label">Tonsils</label>
                    <textarea class="form-control" id="Tonsils" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="Oral" class="form-label">Oral</label>
                    <textarea class="form-control" id="Oral" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="Thyroid" class="form-label">Thyroid</label>
                    <textarea class="form-control" id="Thyroid" rows="2"></textarea>
                </div>
            </div>


            <h3 class="mt-5"> Chest</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="chest_R/R" class="form-label">R/R</label>
                    <textarea class="form-control" id="chest_R/R" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="chest_A/E" class="form-label">A/E</label>
                    <textarea class="form-control" id="chest_A/E" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="chest_B/S" class="form-label">B/S</label>
                    <textarea class="form-control" id="chest_B/S" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="chest_A/S" class="form-label">A/S</label>
                    <textarea class="form-control" id="chest_A/S" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="chest_Percussion" class="form-label">Percussion</label>
                    <textarea class="form-control" id="chest_Percussion" rows="2"></textarea>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="chest_Flaring" class="form-label">Flaring</label>
                    <textarea class="form-control" id="chest_Flaring" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="chest_subInterCostalRecession" class="form-label">Sub-/intercostal recession</label>
                    <textarea class="form-control" id="chest_subInterCostalRecession" rows="2"></textarea>
                </div>
            </div>


            <h3 class="mt-5">CVS</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cvs_heartrate" class="form-label">Heart Rate</label>
                    <input type="text" class="form-control" id="cvs_heartrate">
                </div>
                
                <div class="form-group col-6">
                    <label for="cvs_BP" class="form-label">BP</label>
                    <input type="text" class="form-control" id="cvs_BP">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cvs_pulse" class="form-label">Pulse</label>
                    <textarea class="form-control" id="cvs_pulse" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cvs_Murmurs" class="form-label">Murmurs</label>
                    <textarea class="form-control" id="cvs_Murmurs" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cvs_ApexBeat" class="form-label">ApexBeat</label>
                    <textarea class="form-control" id="cvs_ApexBeat" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cvs_HS_1_2" class="form-label">HS I+II</label>
                    <textarea class="form-control" id="cvs_HS_1_2" rows="2"></textarea>
                </div>
            </div>

            <h3 class="mt-5">CNS</h3>

            <div class="row mt-3">
                <div class="form-group col-4">
                    <label for="cns_cgs" class="form-label">CGS</label>
                    <textarea class="form-control" id="cns_cgs" rows="2"></textarea>
                </div>

                <div class="form-group col-4">
                    <label for="cns_neck" class="form-label">Neck</label>
                    <textarea class="form-control" id="cns_neck" rows="2"></textarea>
                </div>

                <div class="form-group col-4">
                    <label for="cns_reflexes" class="form-label">Reflexes</label>
                    <textarea class="form-control" id="cns_reflexes" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cns_orientation" class="form-label">Orientation</label>
                    <textarea class="form-control" id="cns_orientation" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cns_speech" class="form-label">Speech</label>
                    <textarea class="form-control" id="cns_speech" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="cns_sensation" class="form-label">Sensation</label>
                    <textarea class="form-control" id="cns_sensation" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="cns_milestones" class="form-label">Milestones</label>
                    <textarea class="form-control" id="cns_milestones" rows="2"></textarea>
                </div>
            </div>


            <h3 class="mt-5">Gastrointestinal</h3>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="gas_tenderness" class="form-label">Tenderness</label>
                    <textarea class="form-control" id="gas_tenderness" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_rebound" class="form-label">Rebound</label>
                    <textarea class="form-control" id="gas_rebound" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_hernia" class="form-label">Hernia</label>
                    <textarea class="form-control" id="gas_hernia" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_distension" class="form-label">Distension</label>
                    <textarea class="form-control" id="gas_distension" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_bowelsounds" class="form-label">Bowelsounds</label>
                    <textarea class="form-control" id="gas_bowelsounds" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_liver" class="form-label">Liver</label>
                    <textarea class="form-control" id="gas_liver" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_spleen" class="form-label">Spleen</label>
                    <textarea class="form-control" id="gas_spleen" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_bm" class="form-label">B.M</label>
                    <textarea class="form-control" id="gas_bm" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_stool" class="form-label">Stool</label>
                    <textarea class="form-control" id="gas_stool" rows="2"></textarea>
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="gas_anus" class="form-label">Anus</label>
                    <textarea class="form-control" id="gas_anus" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="gas_sphincter" class="form-label">Sphincter</label>
                    <textarea class="form-control" id="gas_sphincter" rows="2"></textarea>
                </div>
            </div>


            <h3 class="mt-5">Urinary Tract</h3>

            <div class="row mt-3">
                <div class="form-group col-3">
                    <label for="Kidneys" class="form-label">Kidneys</label>
                    <input type="text" placeholder="" class="form-control" id="Kidneys">
                </div>

                <div class="form-group col-3">
                    <label for="Haematuria" class="form-label">Haematuria</label>
                    <input type="text" placeholder="" class="form-control" id="Haematuria">
                </div>

                <div class="form-group col-3">
                    <label for="Nycturia" class="form-label">Nycturia</label>
                    <input type="text" placeholder="" class="form-control" id="Nycturia">
                </div>

                <div class="form-group col-3">
                    <label for="Urgency" class="form-label">Urgency</label>
                    <input type="text" placeholder="" class="form-control" id="Urgency">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="urin_frequency" class="form-label">Frequency</label>
                    <textarea class="form-control" id="urin_frequency" rows="2"></textarea>
                </div>

                <div class="form-group col">
                    <label for="urin_dysuria" class="form-label">Dysuria</label>
                    <textarea class="form-control" id="urin_dysuria" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col">
                    <label for="urin_enuresis" class="form-label">Enuresis</label>
                    <textarea class="form-control" id="urin_enuresis" rows="2"></textarea>
                </div>
            </div>

            <div style="display:block" id="maleGenitals">
                <h3 class="mt-5">Genitals male</h3>

                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label for="male_circumcised" class="form-label">Circumcised</label>
                        <textarea class="form-control" id="male_circumcised" rows="2"></textarea>
                    </div>

                    <div class="form-group col-6">
                        <label for="male_tannerStage" class="form-label">Tanner stage</label>
                        <textarea class="form-control" id="male_tannerStage" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="male_descensusOfTestes" class="form-label">Descensus of testes</label>
                        <textarea class="form-control" id="male_descensusOfTestes" rows="2"></textarea>
                    </div>
                </div>
            </div>

            <div style="display:block" id="femaleGenitals">
                <h3 class="mt-5">Genitals female</h3>

                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label for="female_circumcised" class="form-label">Circumcised</label>
                        <textarea class="form-control" id="female_circumcised" rows="2"></textarea>
                    </div>

                    <div class="form-group col-6">
                        <label for="female_tannerStage" class="form-label">Tanner stage</label>
                        <textarea class="form-control" id="female_tannerStage" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_hymen" class="form-label">Hymen</label>
                        <textarea class="form-control" id="female_hymen" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_introitus" class="form-label">Introitus</label>
                        <textarea class="form-control" id="female_introitus" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_discharge" class="form-label">Discharge</label>
                        <textarea class="form-control" id="female_discharge" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_breasts" class="form-label">Breasts</label>
                        <textarea class="form-control" id="female_breasts" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_mastodynia" class="form-label">Mastodynia</label>
                        <textarea class="form-control" id="female_mastodynia" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_period" class="form-label">Period</label>
                        <textarea class="form-control" id="female_period" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_dysmenorrhoea" class="form-label">Dysmenorrhoea</label>
                        <textarea class="form-control" id="female_dysmenorrhoea" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_dyspareunia" class="form-label">Dyspareunia</label>
                        <textarea class="form-control" id="female_dyspareunia" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_menarche" class="form-label">Menarche</label>
                        <textarea class="form-control" id="female_menarche" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="female_pregnancy" class="form-label">Pregnancy</label>
                        <textarea class="form-control" id="female_pregnancy" rows="2"></textarea>
                    </div>
                </div>


            </div>



            <h3 class="mt-5">Musculosceletal</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="musc_tone" class="form-label">Tone</label>
                    <textarea class="form-control" id="musc_tone" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="musc_gait" class="form-label">Gait</label>
                    <textarea class="form-control" id="musc_gait" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="musc_remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" id="musc_remarks" rows="2"></textarea>
                </div>
            </div>


            <h3 class="mt-5">Skin</h3>

            <div class="row mt-3">
                <div class="form-group col-6">
                    <label for="skin_turgor" class="form-label">Turgor</label>
                    <textarea class="form-control" id="skin_turgor" rows="2"></textarea>
                </div>

                <div class="form-group col-6">
                    <label for="skin_scars" class="form-label">Scars</label>
                    <textarea class="form-control" id="skin_scars" rows="2"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group">
                    <label for="skin_remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" id="skin_remarks" rows="2"></textarea>
                </div>
            </div>


            <h3 class="mt-5">General Remarks</h3>

            <div class="row mt-3 mb-4">
                <div class="form-group">
                    <textarea class="form-control" id="remarks" rows="5"></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>



        </form>
    </div>
    <script>
        var gender = document.getElementById( "gender" ).innerText;

        if(gender == "Male"){
            document.getElementById("maleGenitals").style.display = "block";
        } else if(gender == "Female"){
            document.getElementById("femaleGenitals").style.display = "block";
        }
    </script>

    <script>
        $('input,textarea,select').addClass('border border-dark');
    </script>
  </body>
</html>