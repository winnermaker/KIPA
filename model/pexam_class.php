<?php

    class pexam{

        private $pexamID;
        private $examinationDate;
        private $weight;
        private $height;
        private $headcircumference;
        private $generalCondition;
        private $nutritcondition;
        private $bmi;
        private $muac;
        private $temperature;
        private $edema;
        private $jaundice;
        private $pallor;
        private $clubbing;
        private $dactylitis;
        private $hydration;
        private $lymphaden;
        private $fontanel;
        private $eyes;
        private $pupilreact;
        private $ears;
        private $eardrums;
        private $pharynx;
        private $tonsils;
        private $oral;
        private $thyroid;
        private $chest_RR;
        private $chest_AE;
        private $chest_BS;
        private $chest_AS;
        private $chest_Percussion;
        private $chest_Flaring;
        private $chest_subInterCostal;
        private $cvs_heartrate;
        private $cvs_BP;
        private $cvs_pulse;
        private $cvs_Murmurs;
        private $cvs_ApexBeat;
        private $cvs_HSII;
        private $cns_cgs;
        private $cns_neck;
        private $cns_reflexes;
        private $cns_orientation;
        private $cns_speech;
        private $cns_sensation;
        private $cns_milestones;
        private $gas_tenderness;
        private $gas_rebound;
        private $gas_hernia;
        private $gas_distension;
        private $gas_bowelsounds;
        private $gas_liver;
        private $gas_spleen;
        private $gas_bm;
        private $gas_stool;
        private $gas_anus;
        private $gas_sphincter;
        private $urin_kidneys;
        private $urin_frequency;
        private $urin_nycturia;
        private $urin_urgency;
        private $urin_haematuria;
        private $urin_dysuria;
        private $urin_enuresis;
        private $investigator;

        private $male_ID;
        private $male_CircumsisedRadio;
        private $male_tannerStage;
        private $male_descensusOfTestes;
        private $male_remarks;

        private $female_ID;
        private $female_circumcisedRadios;
        private $female_tannerStage;
        private $female_hymen;
        private $female_introitus;
        private $female_discharge;
        private $female_breasts;
        private $female_mastodynia;
        private $female_period;
        private $female_dysmenorrhoea;
        private $female_dyspareunia;
        private $female_menarche;
        private $female_pregnancy;
        private $musc_tone;
        private $musc_gait;
        private $musc_remarks;
        private $skin_turgor;
        private $skin_scars;
        private $skin_remarks;
        private $generalRemarks;
        private $arrayPexam = array();
        private $arrayPexamMale = array();
        private $arrayPexamFemale = array();


        public function __construct(){

            $this->pexamID = !empty($_POST['pexamID']) ? $_POST['pexamID'] : null;
            $this->examinationDate = !empty($_POST['examinationDate']) ? $_POST['examinationDate'] : null;
            $this->investigator = !empty($_POST['investigator']) ? $_POST['investigator'] : null;
            $this->weight = !empty($_POST['weight']) ? trim($_POST['weight']) : null;
            $this->height = !empty($_POST['height']) ? trim($_POST['height']) : null;
            $this->headcircumference = !empty($_POST['headcircumference']) ? trim($_POST['headcircumference']) : null;
            $this->generalCondition = !empty($_POST['generalCondition']) ? trim($_POST['generalCondition']) : null;
            $this->nutritcondition = !empty($_POST['nutritcondition']) ? trim($_POST['nutritcondition']) : null;
            $this->bmi = !empty($_POST['bmi']) ? trim($_POST['bmi']) : null;
            $this->muac = !empty($_POST['muac']) ? trim($_POST['muac']) : null;
            $this->temperature = !empty($_POST['temperature']) ? trim($_POST['temperature']) : null;
            $this->edema = !empty($_POST['edema']) ? trim($_POST['edema']) : null;
            $this->jaundice = !empty($_POST['jaundice']) ? trim($_POST['jaundice']) : null;
            $this->pallor = !empty($_POST['pallor']) ? trim($_POST['pallor']) : null;
            $this->clubbing = !empty($_POST['clubbing']) ? trim($_POST['clubbing']) : null;
            $this->dactylitis = !empty($_POST['dactylitis']) ? trim($_POST['dactylitis']) : null;
            $this->hydration = !empty($_POST['hydration']) ? trim($_POST['hydration']) : null;
            $this->lymphaden = !empty($_POST['lymphaden']) ? trim($_POST['lymphaden']) : null;
            $this->fontanel = !empty($_POST['fontanel']) ? trim($_POST['fontanel']) : null;
            $this->eyes = !empty($_POST['eyes']) ? trim($_POST['eyes']) : null;
            $this->pupilreact = !empty($_POST['pupilreact']) ? trim($_POST['pupilreact']) : null;
            $this->ears = !empty($_POST['ears']) ? trim($_POST['ears']) : null;
            $this->eardrums = !empty($_POST['eardrums']) ? trim($_POST['eardrums']) : null;
            $this->pharynx = !empty($_POST['pharynx']) ? trim($_POST['pharynx']) : null;
            $this->tonsils = !empty($_POST['tonsils']) ? trim($_POST['tonsils']) : null;
            $this->oral = !empty($_POST['oral']) ? trim($_POST['oral']) : null;
            $this->thyroid = !empty($_POST['thyroid']) ? trim($_POST['thyroid']) : null;
            $this->chest_RR = !empty($_POST['chest_RR']) ? trim($_POST['chest_RR']) : null;
            $this->chest_AE = !empty($_POST['chest_AE']) ? trim($_POST['chest_AE']) : null;
            $this->chest_BS = !empty($_POST['chest_BS']) ? trim($_POST['chest_BS']) : null;
            $this->chest_AS = !empty($_POST['chest_AS']) ? trim($_POST['chest_AS']) : null;
            $this->chest_Percussion = !empty($_POST['chest_Percussion']) ? trim($_POST['chest_Percussion']) : null;
            $this->chest_Flaring = !empty($_POST['chest_Flaring']) ? trim($_POST['chest_Flaring']) : null;
            $this->chest_subInterCostal = !empty($_POST['chest_subInterCostal']) ? trim($_POST['chest_subInterCostal']) : null;
            $this->cvs_heartrate = !empty($_POST['cvs_heartrate']) ? trim($_POST['cvs_heartrate']) : null;
            $this->cvs_BP = !empty($_POST['cvs_BP']) ? trim($_POST['cvs_BP']) : null;
            $this->cvs_pulse = !empty($_POST['cvs_pulse']) ? trim($_POST['cvs_pulse']) : null;
            $this->cvs_Murmurs = !empty($_POST['cvs_Murmurs']) ? trim($_POST['cvs_Murmurs']) : null;
            $this->cvs_ApexBeat = !empty($_POST['cvs_ApexBeat']) ? trim($_POST['cvs_ApexBeat']) : null;
            $this->cvs_HSII = !empty($_POST['cvs_HSII']) ? trim($_POST['cvs_HSII']) : null;
            $this->cns_cgs = !empty($_POST['cns_cgs']) ? trim($_POST['cns_cgs']) : null;
            $this->cns_neck = !empty($_POST['cns_neck']) ? trim($_POST['cns_neck']) : null;
            $this->cns_reflexes = !empty($_POST['cns_reflexes']) ? trim($_POST['cns_reflexes']) : null;
            $this->cns_orientation = !empty($_POST['cns_orientation']) ? trim($_POST['cns_orientation']) : null;
            $this->cns_speech = !empty($_POST['cns_speech']) ? trim($_POST['cns_speech']) : null;
            $this->cns_sensation = !empty($_POST['cns_sensation']) ? trim($_POST['cns_sensation']) : null;
            $this->cns_milestones = !empty($_POST['cns_milestones']) ? trim($_POST['cns_milestones']) : null;
            $this->gas_tenderness = !empty($_POST['gas_tenderness']) ? trim($_POST['gas_tenderness']) : null;
            $this->gas_rebound = !empty($_POST['gas_rebound']) ? trim($_POST['gas_rebound']) : null;
            $this->gas_hernia = !empty($_POST['gas_hernia']) ? trim($_POST['gas_hernia']) : null;
            $this->gas_distension = !empty($_POST['gas_distension']) ? trim($_POST['gas_distension']) : null;
            $this->gas_bowelsounds = !empty($_POST['gas_bowelsounds']) ? trim($_POST['gas_bowelsounds']) : null;
            $this->gas_liver = !empty($_POST['gas_liver']) ? trim($_POST['gas_liver']) : null;
            $this->gas_spleen = !empty($_POST['gas_spleen']) ? trim($_POST['gas_spleen']) : null;
            $this->gas_bm = !empty($_POST['gas_bm']) ? trim($_POST['gas_bm']) : null;
            $this->gas_stool = !empty($_POST['gas_stool']) ? trim($_POST['gas_stool']) : null;
            $this->gas_anus = !empty($_POST['gas_anus']) ? trim($_POST['gas_anus']) : null;
            $this->gas_sphincter = !empty($_POST['gas_sphincter']) ? trim($_POST['gas_sphincter']) : null;
            $this->urin_kidneys = !empty($_POST['urin_kidneys']) ? trim($_POST['urin_kidneys']) : null;
            $this->urin_frequency = !empty($_POST['urin_frequency']) ? trim($_POST['urin_frequency']) : null;
            $this->urin_nycturia = !empty($_POST['urin_nycturia']) ? trim($_POST['urin_nycturia']) : null;
            $this->urin_urgency = !empty($_POST['urin_urgency']) ? trim($_POST['urin_urgency']) : null;
            $this->urin_haematuria = !empty($_POST['urin_haematuria']) ? trim($_POST['urin_haematuria']) : null;
            $this->urin_dysuria = !empty($_POST['urin_dysuria']) ? trim($_POST['urin_dysuria']) : null;
            $this->urin_enuresis = !empty($_POST['urin_enuresis']) ? trim($_POST['urin_enuresis']) : null;
            $this->musc_tone = !empty($_POST['musc_tone']) ? trim($_POST['musc_tone']) : null;
            $this->musc_gait = !empty($_POST['musc_gait']) ? trim($_POST['musc_gait']) : null;
            $this->musc_remarks = !empty($_POST['musc_remarks']) ? trim($_POST['musc_remarks']) : null;
            $this->skin_turgor = !empty($_POST['skin_turgor']) ? trim($_POST['skin_turgor']) : null;
            $this->skin_scars = !empty($_POST['skin_scars']) ? trim($_POST['skin_scars']) : null;
            $this->skin_remarks = !empty($_POST['skin_remarks']) ? trim($_POST['skin_remarks']) : null;
            $this->generalRemarks = !empty($_POST['generalRemarks']) ? trim($_POST['generalRemarks']) : null;

            $this->male_ID = !empty($_POST['genMaleID']) ? $_POST['genMaleID'] : null;
            $this->male_CircumsisedRadio = !empty($_POST['male_CircumsisedRadio']) ? $_POST['male_CircumsisedRadio'] : null;
            $this->getRadioValue($this->male_CircumsisedRadio);
            $this->male_tannerStage = !empty($_POST['male_tannerStage']) ? trim($_POST['male_tannerStage']) : null;
            $this->male_descensusOfTestes = !empty($_POST['male_descensusOfTestes']) ? trim($_POST['male_descensusOfTestes']) : null;
            $this->male_remarks = !empty($_POST['male_remarks']) ? trim($_POST['male_remarks']) : null;
            $this->female_circumcisedRadios = !empty($_POST['female_circumcisedRadios']) ? $_POST['female_circumcisedRadios'] : null;
            $this->getRadioValue($this->female_circumcisedRadios);

            $this->female_ID = !empty($_POST['genFemaleID']) ? $_POST['genFemaleID'] : null;
            $this->female_tannerStage = !empty($_POST['female_tannerStage']) ? trim($_POST['female_tannerStage']) : null;
            $this->female_hymen = !empty($_POST['female_hymen']) ? trim($_POST['female_hymen']) : null;
            $this->female_introitus = !empty($_POST['female_introitus']) ? trim($_POST['female_introitus']) : null;
            $this->female_discharge = !empty($_POST['female_discharge']) ? trim($_POST['female_discharge']) : null;
            $this->female_breasts = !empty($_POST['female_breasts']) ? trim($_POST['female_breasts']) : null;
            $this->female_mastodynia = !empty($_POST['female_mastodynia']) ? trim($_POST['female_mastodynia']) : null;
            $this->female_period = !empty($_POST['female_period']) ? trim($_POST['female_period']) : null;
            $this->female_dysmenorrhoea = !empty($_POST['female_dysmenorrhoea']) ? trim($_POST['female_dysmenorrhoea']) : null;
            $this->female_dyspareunia = !empty($_POST['female_dyspareunia']) ? trim($_POST['female_dyspareunia']) : null;
            $this->female_menarche = !empty($_POST['female_menarche']) ? trim($_POST['female_menarche']) : null;
            $this->female_pregnancy = !empty($_POST['female_pregnancy']) ? trim($_POST['female_pregnancy']) : null;

            $this->paramsToArray();
            $this->paramsMaleToArray();
            $this->paramsFemaleToArray();


        }

        private function getRadioValue(&$radioValue){
            if($radioValue === "option1"){
                $radioValue = true;
            } elseif($radioValue === "option2"){
                $radioValue = false;
            } else{
                $radioValue = null;
            }
        }

        public function paramsToArray(){
            $this->arrayPexam['PEXAMID'] = $this->pexamID;
            $this->arrayPexam['ExaminationDate'] = $this->examinationDate;
            $this->arrayPexam['investigator'] = $this->investigator;
            $this->arrayPexam['weight'] = $this->weight;
            $this->arrayPexam['height'] = $this->height;
            $this->arrayPexam['headcircumfrence'] = $this->headcircumference;
            $this->arrayPexam['generalCond'] = $this->generalCondition;
            $this->arrayPexam['nutritcondition'] = $this->nutritcondition;
            $this->arrayPexam['bmi'] = $this->bmi;
            $this->arrayPexam['muac'] = $this->muac;
            $this->arrayPexam['temperature'] = $this->temperature;
            $this->arrayPexam['edema'] = $this->edema;
            $this->arrayPexam['jaundice'] = $this->jaundice;
            $this->arrayPexam['pallor'] = $this->pallor;
            $this->arrayPexam['clubbing'] = $this->clubbing;
            $this->arrayPexam['dactylitis'] = $this->dactylitis;
            $this->arrayPexam['hydration'] = $this->hydration;
            $this->arrayPexam['lymphaden'] = $this->lymphaden;
            $this->arrayPexam['fontanel'] = $this->fontanel;
            $this->arrayPexam['eyes'] = $this->eyes;
            $this->arrayPexam['pupilreact'] = $this->pupilreact;
            $this->arrayPexam['ears'] = $this->ears;
            $this->arrayPexam['eardrums'] = $this->eardrums;
            $this->arrayPexam['pharynx'] = $this->pharynx;
            $this->arrayPexam['tonsils'] = $this->tonsils;
            $this->arrayPexam['oral'] = $this->oral;
            $this->arrayPexam['thyroid'] = $this->thyroid;

            $this->arrayPexam['chest_RR'] = $this->chest_RR;
            $this->arrayPexam['chest_AE'] = $this->chest_AE;
            $this->arrayPexam['chest_BS'] = $this->chest_BS;
            $this->arrayPexam['chest_AS'] = $this->chest_AS;
            $this->arrayPexam['chest_percussion'] = $this->chest_Percussion;
            $this->arrayPexam['chest_flaring'] = $this->chest_Flaring;
            $this->arrayPexam['chest_subInterCosta'] = $this->chest_subInterCostal;

            $this->arrayPexam['cvs_heartrate'] = $this->cvs_heartrate;
            $this->arrayPexam['cvs_BP'] = $this->cvs_BP;
            $this->arrayPexam['cvs_pulse'] = $this->cvs_pulse;
            $this->arrayPexam['cvs_Murmurs'] = $this->cvs_Murmurs;
            $this->arrayPexam['cvs_ApexBeat'] = $this->cvs_ApexBeat;
            $this->arrayPexam['cvs_HSII'] = $this->cvs_HSII;

            $this->arrayPexam['cns_cgs'] = $this->cns_cgs;
            $this->arrayPexam['cns_neck'] = $this->cns_neck;
            $this->arrayPexam['cns_reflexes'] = $this->cns_reflexes;
            $this->arrayPexam['cns_orientation'] = $this->cns_orientation;
            $this->arrayPexam['cns_speech'] = $this->cns_speech;
            $this->arrayPexam['cns_sensation'] = $this->cns_sensation;
            $this->arrayPexam['cns_milestone'] = $this->cns_milestones;

            $this->arrayPexam['gas_tenderness'] = $this->gas_tenderness;
            $this->arrayPexam['gas_rebound'] = $this->gas_rebound;
            $this->arrayPexam['gas_hernia'] = $this->gas_hernia;
            $this->arrayPexam['gas_distension'] = $this->gas_distension;
            $this->arrayPexam['gas_bowel'] = $this->gas_bowelsounds;
            $this->arrayPexam['gas_liver'] = $this->gas_liver;
            $this->arrayPexam['gas_spleen'] = $this->gas_spleen;
            $this->arrayPexam['gas_bm'] = $this->gas_bm;
            $this->arrayPexam['gas_stool'] = $this->gas_stool;
            $this->arrayPexam['gas_anus'] = $this->gas_anus;
            $this->arrayPexam['gas_sphincter'] = $this->gas_sphincter;

            $this->arrayPexam['urin_kidneys'] = $this->urin_kidneys;
            $this->arrayPexam['urin_frequency'] = $this->urin_frequency;
            $this->arrayPexam['urin_nycturia'] = $this->urin_nycturia;
            $this->arrayPexam['urin_urgency'] = $this->urin_urgency;
            $this->arrayPexam['urin_haematuria'] = $this->urin_haematuria;
            $this->arrayPexam['urin_dysuria'] = $this->urin_dysuria;
            $this->arrayPexam['urin_enuresis'] = $this->urin_enuresis;

            $this->arrayPexam['musc_tone'] = $this->musc_tone;
            $this->arrayPexam['musc_gait'] = $this->musc_gait;
            $this->arrayPexam['musc_remarks'] = $this->musc_remarks;

            $this->arrayPexam['skin_turgor'] = $this->skin_turgor;
            $this->arrayPexam['skin_scars'] = $this->skin_scars;
            $this->arrayPexam['skin_remarks'] = $this->skin_remarks;

            $this->arrayPexam['generalRemarks'] = $this->generalRemarks;
        }

        public function paramsMaleToArray(){
            $this->arrayPexamMale['fk_PEXAMID'] = $this->pexamID;
            $this->arrayPexamMale['genMaleID'] = $this->male_ID;
            $this->arrayPexamMale['circumcised'] = $this->male_CircumsisedRadio;
            $this->arrayPexamMale['TannerSt'] = $this->male_tannerStage;
            $this->arrayPexamMale['Descensus'] = $this->male_descensusOfTestes;
            $this->arrayPexamMale['remarks'] = $this->male_remarks;
        }

        public function paramsFemaleToArray(){
            $this->arrayPexamFemale['fk_PEXAMID'] = $this->pexamID;
            $this->arrayPexamFemale['genFemaleID'] = $this->female_ID;
            $this->arrayPexamFemale['circumcised'] = $this->female_circumcisedRadios;
            $this->arrayPexamFemale['TannerSt'] = $this->female_tannerStage;
            $this->arrayPexamFemale['Hymen'] = $this->female_hymen;
            $this->arrayPexamFemale['Introitus'] = $this->female_introitus;
            $this->arrayPexamFemale['Discharge'] = $this->female_discharge;
            $this->arrayPexamFemale['Breasts'] = $this->female_breasts;
            $this->arrayPexamFemale['Mastodynia'] = $this->female_mastodynia;
            $this->arrayPexamFemale['Period'] = $this->female_period;
            $this->arrayPexamFemale['Dysmenorrhoea'] = $this->female_dysmenorrhoea;
            $this->arrayPexamFemale['Dyspareunia'] = $this->female_dyspareunia;
            $this->arrayPexamFemale['Menarche'] = $this->female_menarche;
            $this->arrayPexamFemale['Pregnancy'] = $this->female_pregnancy;
        }

        public function printParams(){
            foreach ($this->arrayPexam as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }
        public function printParamsFemale(){
            foreach ($this->arrayPexamFemale as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }
        public function printParamsMale(){
            foreach ($this->arrayPexamMale as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayPexam;
        }

        public function getParamsMale(){
            return $this->arrayPexamMale;
        }

        public function getParamsFemale(){
            return $this->arrayPexamFemale;
        }

        public function checkPexamID(){
            if(is_null($this->pexamID)){
                return false;
            } else {
                return true;
            }
        }

        public function checkGenitals(){
            if(( !is_null($this->male_CircumsisedRadio) || !is_null($this->male_tannerStage) || !is_null($this->male_descensusOfTestes) || !is_null($this->male_remarks))
                    &&
                    (!is_null($this->female_circumcisedRadios) || !is_null($this->female_tannerStage) ||
                    !is_null($this->female_hymen) || !is_null($this->female_introitus) || !is_null($this->female_discharge) ||
                    !is_null($this->female_breasts) || !is_null($this->female_mastodynia) ||
                    !is_null($this->female_period) || !is_null($this->female_dysmenorrhoea) || !is_null($this->female_dyspareunia) ||
                    !is_null($this->female_menarche) || !is_null($this->female_pregnancy))){
                        // Genitals Male and Female => Other
                        return 2;
                    }

            elseif( !is_null($this->male_CircumsisedRadio) || !is_null($this->male_tannerStage) || !is_null($this->male_descensusOfTestes) || !is_null($this->male_remarks)){
                // GenitalsMale
                return 1;
            }
            elseif(
                !is_null($this->female_circumcisedRadios) || !is_null($this->female_tannerStage) ||
                !is_null($this->female_hymen) || !is_null($this->female_introitus) || !is_null($this->female_discharge) ||
                !is_null($this->female_breasts) || !is_null($this->female_mastodynia) ||
                !is_null($this->female_period) || !is_null($this->female_dysmenorrhoea) || !is_null($this->female_dyspareunia) ||
                !is_null($this->female_menarche) || !is_null($this->female_pregnancy)) {
                    //Genitals Female
                    return 0;
            }
             else{
                    // No Input for GenitalsMale and GenitalsFemale
                    return null;
                }
        }

    }

?>
