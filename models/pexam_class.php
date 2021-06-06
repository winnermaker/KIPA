<?php

    class pexam{
        
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
        private $male_CircumsisedRadio;
        private $male_tannerStage;
        private $male_descensusOfTestes;
        private $male_remarks;
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
        public  $arrayPexam = array();


        public function __construct(){
            $this->examinationDate = isset($_POST['examinationDate']) ? $_POST['examinationDate'] : null;
            $this->weight = isset($_POST['weight']) ? $_POST['weight'] : null;
            $this->height = isset($_POST['height']) ? $_POST['height'] : null;
            $this->headcircumference = isset($_POST['headcircumference']) ? $_POST['headcircumference'] : null;
            $this->generalCondition = isset($_POST['generalCondition']) ? $_POST['generalCondition'] : null;
            $this->nutritcondition = isset($_POST['nutritcondition']) ? $_POST['nutritcondition'] : null;
            $this->bmi = isset($_POST['bmi']) ? $_POST['bmi'] : null;
            $this->muac = isset($_POST['muac']) ? $_POST['muac'] : null;
            $this->temperature = isset($_POST['temperature']) ? $_POST['temperature'] : null;
            $this->edema = isset($_POST['edema']) ? $_POST['edema'] : null;
            $this->jaundice = isset($_POST['jaundice']) ? $_POST['jaundice'] : null;
            $this->pallor = isset($_POST['pallor']) ? $_POST['pallor'] : null;
            $this->clubbing = isset($_POST['clubbing']) ? $_POST['clubbing'] : null;
            $this->dactylitis = isset($_POST['dactylitis']) ? $_POST['dactylitis'] : null;
            $this->hydration = isset($_POST['hydration']) ? $_POST['hydration'] : null;
            $this->lymphaden = isset($_POST['lymphaden']) ? $_POST['lymphaden'] : null;
            $this->fontanel = isset($_POST['fontanel']) ? $_POST['fontanel'] : null;
            $this->eyes = isset($_POST['eyes']) ? $_POST['eyes'] : null;
            $this->pupilreact = isset($_POST['pupilreact']) ? $_POST['pupilreact'] : null;
            $this->ears = isset($_POST['ears']) ? $_POST['ears'] : null;
            $this->eardrums = isset($_POST['eardrums']) ? $_POST['eardrums'] : null;
            $this->pharynx = isset($_POST['pharynx']) ? $_POST['pharynx'] : null;
            $this->tonsils = isset($_POST['tonsils']) ? $_POST['tonsils'] : null;
            $this->oral = isset($_POST['oral']) ? $_POST['oral'] : null;
            $this->thyroid = isset($_POST['thyroid']) ? $_POST['thyroid'] : null;
            $this->chest_RR = isset($_POST['chest_RR']) ? $_POST['chest_RR'] : null;
            $this->chest_AE = isset($_POST['chest_AE']) ? $_POST['chest_AE'] : null;
            $this->chest_BS = isset($_POST['chest_BS']) ? $_POST['chest_BS'] : null;
            $this->chest_AS = isset($_POST['chest_AS']) ? $_POST['chest_AS'] : null;
            $this->chest_Percussion = isset($_POST['chest_Percussion']) ? $_POST['chest_Percussion'] : null;
            $this->chest_Flaring = isset($_POST['chest_Flaring']) ? $_POST['chest_Flaring'] : null;
            $this->chest_subInterCostal = isset($_POST['chest_subInterCostal']) ? $_POST['chest_subInterCostal'] : null;
            $this->cvs_heartrate = isset($_POST['cvs_heartrate']) ? $_POST['cvs_heartrate'] : null;
            $this->cvs_BP = isset($_POST['cvs_BP']) ? $_POST['cvs_BP'] : null;
            $this->cvs_pulse = isset($_POST['cvs_pulse']) ? $_POST['cvs_pulse'] : null;
            $this->cvs_Murmurs = isset($_POST['cvs_Murmurs']) ? $_POST['cvs_Murmurs'] : null;
            $this->cvs_ApexBeat = isset($_POST['cvs_ApexBeat']) ? $_POST['cvs_ApexBeat'] : null;
            $this->cvs_HSII = isset($_POST['cvs_HSII']) ? $_POST['cvs_HSII'] : null;
            $this->cns_cgs = isset($_POST['cns_cgs']) ? $_POST['cns_cgs'] : null;
            $this->cns_neck = isset($_POST['cns_neck']) ? $_POST['cns_neck'] : null;
            $this->cns_reflexes = isset($_POST['cns_reflexes']) ? $_POST['cns_reflexes'] : null;
            $this->cns_orientation = isset($_POST['cns_orientation']) ? $_POST['cns_orientation'] : null;
            $this->cns_speech = isset($_POST['cns_speech']) ? $_POST['cns_speech'] : null;
            $this->cns_sensation = isset($_POST['cns_sensation']) ? $_POST['cns_sensation'] : null;
            $this->cns_milestones = isset($_POST['cns_milestones']) ? $_POST['cns_milestones'] : null;
            $this->gas_tenderness = isset($_POST['gas_tenderness']) ? $_POST['gas_tenderness'] : null;
            $this->gas_rebound = isset($_POST['gas_rebound']) ? $_POST['gas_rebound'] : null;
            $this->gas_hernia = isset($_POST['gas_hernia']) ? $_POST['gas_hernia'] : null;
            $this->gas_distension = isset($_POST['gas_distension']) ? $_POST['gas_distension'] : null;
            $this->gas_bowelsounds = isset($_POST['gas_bowelsounds']) ? $_POST['gas_bowelsounds'] : null;
            $this->gas_liver = isset($_POST['gas_liver']) ? $_POST['gas_liver'] : null;
            $this->gas_spleen = isset($_POST['gas_spleen']) ? $_POST['gas_spleen'] : null;
            $this->gas_bm = isset($_POST['gas_bm']) ? $_POST['gas_bm'] : null;
            $this->gas_stool = isset($_POST['gas_stool']) ? $_POST['gas_stool'] : null;
            $this->gas_anus = isset($_POST['gas_anus']) ? $_POST['gas_anus'] : null;
            $this->gas_sphincter = isset($_POST['gas_sphincter']) ? $_POST['gas_sphincter'] : null;
            $this->urin_kidneys = isset($_POST['urin_kidneys']) ? $_POST['urin_kidneys'] : null;
            $this->urin_frequency = isset($_POST['urin_frequency']) ? $_POST['urin_frequency'] : null;
            $this->urin_nycturia = isset($_POST['urin_nycturia']) ? $_POST['urin_nycturia'] : null;
            $this->urin_urgency = isset($_POST['urin_urgency']) ? $_POST['urin_urgency'] : null;
            $this->urin_haematuria = isset($_POST['urin_haematuria']) ? $_POST['urin_haematuria'] : null;
            $this->urin_dysuria = isset($_POST['urin_dysuria']) ? $_POST['urin_dysuria'] : null;
            $this->urin_enuresis = isset($_POST['urin_enuresis']) ? $_POST['urin_enuresis'] : null;
            $this->male_CircumsisedRadio = isset($_POST['male_CircumsisedRadio']) ? $_POST['male_CircumsisedRadio'] : null;
            if($this->male_CircumsisedRadio === "option1"){
                $this->male_CircumsisedRadio = "Yes";
            } elseif($this->male_CircumsisedRadio ==="option2"){
                $this->male_CircumsisedRadio = "No";
            } else {
                $this->male_CircumsisedRadio = null;
            }

            $this->male_tannerStage = isset($_POST['male_tannerStage']) ? $_POST['male_tannerStage'] : null;
            $this->male_descensusOfTestes = isset($_POST['male_descensusOfTestes']) ? $_POST['male_descensusOfTestes'] : null;
            $this->male_remarks = isset($_POST['male_remarks']) ? $_POST['male_remarks'] : null;
            $this->female_circumcisedRadios = isset($_POST['female_circumcisedRadios']) ? $_POST['female_circumcisedRadios'] : null;
            if($this->female_circumcisedRadios === "option1"){
                $this->female_circumcisedRadios = "Yes";
            } elseif($this->female_circumcisedRadios ==="option2"){
                $this->female_circumcisedRadios = "No";
            } else {
                $this->female_circumcisedRadios = null;
            }

            $this->female_tannerStage = isset($_POST['female_tannerStage']) ? $_POST['female_tannerStage'] : null;
            $this->female_hymen = isset($_POST['female_hymen']) ? $_POST['female_hymen'] : null;
            $this->female_introitus = isset($_POST['female_introitus']) ? $_POST['female_introitus'] : null;
            $this->female_discharge = isset($_POST['female_discharge']) ? $_POST['female_discharge'] : null;
            $this->female_breasts = isset($_POST['female_breasts']) ? $_POST['female_breasts'] : null;
            $this->female_mastodynia = isset($_POST['female_mastodynia']) ? $_POST['female_mastodynia'] : null;
            $this->female_period = isset($_POST['female_period']) ? $_POST['female_period'] : null;
            $this->female_dysmenorrhoea = isset($_POST['female_dysmenorrhoea']) ? $_POST['female_dysmenorrhoea'] : null;
            $this->female_dyspareunia = isset($_POST['female_dyspareunia']) ? $_POST['female_dyspareunia'] : null;
            $this->female_menarche = isset($_POST['female_menarche']) ? $_POST['female_menarche'] : null;
            $this->female_pregnancy = isset($_POST['female_pregnancy']) ? $_POST['female_pregnancy'] : null;
            $this->musc_tone = isset($_POST['musc_tone']) ? $_POST['musc_tone'] : null;
            $this->musc_gait = isset($_POST['musc_gait']) ? $_POST['musc_gait'] : null;
            $this->musc_remarks = isset($_POST['musc_remarks']) ? $_POST['musc_remarks'] : null;
            $this->skin_turgor = isset($_POST['skin_turgor']) ? $_POST['skin_turgor'] : null;
            $this->skin_scars = isset($_POST['skin_scars']) ? $_POST['skin_scars'] : null;
            $this->skin_remarks = isset($_POST['skin_remarks']) ? $_POST['skin_remarks'] : null;
            $this->generalRemarks = isset($_POST['generalRemarks']) ? $_POST['generalRemarks'] : null;

            $this->paramsToArray();

        }

        public function paramsToArray(){
            $this->arrayPexam['examinationDate'] = $this->examinationDate;
            $this->arrayPexam['weight'] = $this->weight;
            $this->arrayPexam['height'] = $this->height;
            $this->arrayPexam['headcircumference'] = $this->headcircumference;
            $this->arrayPexam['generalCondition'] = $this->generalCondition;
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
            $this->arrayPexam['chest_Percussion'] = $this->chest_Percussion;
            $this->arrayPexam['chest_Flaring'] = $this->chest_Flaring;
            $this->arrayPexam['chest_subInterCostal'] = $this->chest_subInterCostal;
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
            $this->arrayPexam['cns_milestones'] = $this->cns_milestones;
            $this->arrayPexam['gas_tenderness'] = $this->gas_tenderness;
            $this->arrayPexam['gas_rebound'] = $this->gas_rebound;
            $this->arrayPexam['gas_hernia'] = $this->gas_hernia;
            $this->arrayPexam['gas_distension'] = $this->gas_distension;
            $this->arrayPexam['gas_bowelsounds'] = $this->gas_bowelsounds;
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
            $this->arrayPexam['male_CircumsisedRadio'] = $this->male_CircumsisedRadio;
            $this->arrayPexam['male_tannerStage'] = $this->male_tannerStage;
            $this->arrayPexam['male_descensusOfTestes'] = $this->male_descensusOfTestes;
            $this->arrayPexam['male_remarks'] = $this->male_remarks;
            $this->arrayPexam['female_circumcisedRadios'] = $this->female_circumcisedRadios;
            $this->arrayPexam['female_tannerStage'] = $this->female_tannerStage;
            $this->arrayPexam['female_hymen'] = $this->female_hymen;
            $this->arrayPexam['female_introitus'] = $this->female_introitus;
            $this->arrayPexam['female_discharge'] = $this->female_discharge;
            $this->arrayPexam['female_breasts'] = $this->female_breasts;
            $this->arrayPexam['female_mastodynia'] = $this->female_mastodynia;
            $this->arrayPexam['female_period'] = $this->female_period;
            $this->arrayPexam['female_dysmenorrhoea'] = $this->female_dysmenorrhoea;
            $this->arrayPexam['female_dyspareunia'] = $this->female_dyspareunia;
            $this->arrayPexam['female_menarche'] = $this->female_menarche;
            $this->arrayPexam['female_pregnancy'] = $this->female_pregnancy;
            $this->arrayPexam['musc_tone'] = $this->musc_tone;
            $this->arrayPexam['musc_gait'] = $this->musc_gait;
            $this->arrayPexam['musc_remarks'] = $this->musc_remarks;
            $this->arrayPexam['skin_turgor'] = $this->skin_turgor;
            $this->arrayPexam['skin_scars'] = $this->skin_scars;
            $this->arrayPexam['skin_remarks'] = $this->skin_remarks;
            $this->arrayPexam['generalRemarks'] = $this->generalRemarks;
        }

        public function printParams(){
            foreach ($this->arrayPexam as $key => $value) {
                echo $key . ": ". $value . "</br>";
            }
        }

        public function getParams(){
            return $this->arrayPexam;
        }

    }

?>