create table if not exists ChildrenMain
(
   ChildrenID			int auto_increment	not null primary key,
   FirstName			varchar(200),
   LastName				varchar(200),
   CallNames			varchar(200),
   DOB					date,
   EDOB					date,
   Gender				char,
   AdmDate				date,
   DisDate				date,
   PicTaken				date,
   PicName      text,
   PicType    text,
   Picture		  mediumblob
   );

create table if not exists SocialHistory
(
	SocialID			int auto_increment	not null primary key,
	fk_ChildrenID		int not null,
    DateOfInvestigation			date,
    LivedWithWho		text,
    LivedWhere			text,
    ParentsAlive		text,
    ParentsLiveTogether	text,
    ParentsLivePeace	text,
    AmountAndSourceOfIncome	text,
    IncomeForHowMany	text,
    Abuse				text,
    SexuallyActive		text,
    siblings    boolean,
    foreign key (fk_ChildrenID) references childrenmain(ChildrenID) on delete no action
    );

    create table if not exists SocialSiblings
    (
       SiblingID			int auto_increment	not null primary key,
       	fk_SocialID		int not null,
       Age					text,
       Gender				text,
       Alive				text,
       Healthy				text,
       SameParents				text,
       foreign key (fk_SocialID) references SocialHistory(SocialID) on delete no action
       );

create table if not exists MedicalMain
 (
	MedicalID			int auto_increment	not null primary key,
    fk_CHildrenID		int not null,
    ImmuniCompl			boolean,
    Plan				text,
    HIVPos				boolean,
    HIVCheckDate		date,
    HIVTreated			boolean,
    NHIReg				boolean,
    NHINr				int,
    TPos				boolean,
    TposCheckDate		date,
    TPosTreated			boolean,
    STDPos				boolean,
    STDPosCheckDate		date,
    STDPosTreated		boolean,
    HepBPos				boolean,
    HepBPosCheckDate	date,
    HepBPosTreated		boolean,
    SickelCellPos		boolean,
    SickelCellType		char(2),
    G6DP				boolean,
    PregnancyHist		boolean,
    PregTestPos			boolean,
    PregTestDate		date,
    PhysicalAbuse		boolean,
    SexualAbuse			boolean,
    SubstanceAbuse  boolean,
    Conditions			text,
    PermMedication		text,
    ReviewOn			date,
    OtherInfo   text,
    MenstrualHist			text,
	foreign key (fk_CHildrenID) references ChildrenMain(ChildrenID) on delete no action
    );

create table if not exists MedicalVisits
 (
	VisitID				int auto_increment	not null primary key,
    fk_MedicalID		int not null,
    VisitDate			date,
	VisitType			varchar(200),
    ExLocation			varchar(200),
    ExCause				varchar(200),
    PresComplaint		varchar(200),
    HistPresComplaint	varchar(200),
    PE					text,
    Plan				text,
    RVD					date,
    Medication			text,
    Remarks				text,
    Diagnosis			text,
    foreign key (fk_MedicalID) references MedicalMain(MedicalID) on delete no action
    );

create table if not exists MedicalVacc
(
  VaccID				int auto_increment	not null primary key,
  fk_MedicalID			int not null,
  VaccRemarks			text,
  Vaccine				varchar(100),
  nextVaccDate			date,
  foreign key (fk_MedicalID) references MedicalMain(MedicalID) on delete no action
  );

create table if not exists MedicalVaccDate
(
	VaccDateID			int auto_increment	not null primary key,
    fk_VaccID			int not null,
	VaccDate			date,
    foreign key (fk_VaccID) references MedicalVacc(VaccID) on delete no action
    );

 create table if not exists MedicalPregnancyMain
 (
	MotherID			int auto_increment 	not null primary key,
    fk_MedicalID		int not null,
	EntryDate			date,
    Gravida				int,
    Para				int,
    alive				int,
    dead				int,
    top					int,
    foreign key (fk_MedicalID) references medicalmain(MedicalID) on delete no action
    );

create table if not exists MedicalPregnancyChildData
(
	ChildID				int auto_increment	not null primary key,
    fk_MotherID 		int not null,
    DOB					text,
    Name				text,
    EvDurP				text,
    durLabor			text,
    spont_CS_forceps	text,
    Gender				char(1),
    Healthy				boolean,
    Problems			text,
    Remarks 			text,
    foreign key (fk_MotherID) references medicalpregnancymain(MotherID) on delete no action
    );

create table if not exists MedicalPresentPregnancy
(
	PresPreagnancyID 	int auto_increment	not null primary key,
    fk_MotherID 		int not null,
    GestationalAge		text,
    EstDelivery			date,
    AntClinicAttend		boolean,
    Problems			text,
    Remarks				text,
	foreign key (fk_MotherID) references medicalpregnancymain(MotherID) on delete no action
    );

create table if not exists MedicalPEXAM
(
	PEXAMID				int auto_increment	not null primary key,
    fk_MedicalID		int not null,
    ExaminationDate			date,
    generalCond			text,
    weight				decimal,
    height				decimal,
    nutritcondition		text,
    temperature			decimal,
    edema				text,
    bmi					decimal,
    muac				decimal,
    hydration			text,
    pallor				text,
    jaundice			text,
    lymphaden			text,
    clubbing 			text,
    dactylitis 			text,
    fontanel 			text,
    headcircumfrence    decimal,
    eyes 				text,
    pupilreact			text,
    ears 				text,
    eardrums			text,
    pharynx 			text,
    tonsils 			text,
    oral 				text,
    thyroid 			text,

    chest_RR 			text,
    chest_AE 			text,
    chest_BS 			text,
    chest_AS 			text,
    chest_percussion	text,
    chest_flaring 		text,
    chest_subInterCosta	text,

    cvs_heartrate		text,
    cvs_pulse			text,
    cvs_HSII			text,
    cvs_Murmurs			text,
    cvs_ApexBeat		text,
    cvs_BP				text,

    cns_cgs				text,
    cns_neck			text,
    cns_reflexes		text,
    cns_orientation 		text,
    cns_speech  		text,
    cns_sensation 		text,
    cns_milestone 		text,

    gas_tenderness 		text,
    gas_rebound 		text,
    gas_hernia			text,
    gas_distension		text,
    gas_bowel			text,
    gas_liver 			text,
    gas_spleen 			text,
    gas_bm 				text,
    gas_stool  			text,
    gas_anus				text,
    gas_sphincter			text,

    urin_kidneys 		text,
    urin_frequency		text,
    urin_dysuria		text,
    urin_haematuria		text,
    urin_nycturia 		text,
    urin_enuresis		text,
    urin_urgency 		text,

    musc_tone			text,
    musc_gait			text,
    musc_remarks		text,

    skin_turgor 		text,
    skin_scars 			text,
    skin_remarks		text,

    generalRemarks				text,
    foreign key (fk_MedicalID) references MedicalMain(MedicalID) on delete no action
    );

create table if not exists MedicalGenMale
(
	GenMaleID			int auto_increment	not null primary key,
    fk_PEXAMID			int not null,
    circumcised			boolean,
    TannerSt 			text,
    Descensus 			text,
    remarks       text,
	foreign key (fk_PEXAMID) references medicalpexam(PEXAMID) on delete no action
    );

create table if not exists MedicalGenFemale
(
	GenFemaleID			int auto_increment	not null primary key,
    fk_PEXAMID			int not null,
    circumcised			boolean,
    TannerSt 			text,
    Hymen       text,
    Introitus			text,
    Discharge 			text,
    Breasts 			text,
    Mastodynia 			text,
    Period 				text,
    Dysmenorrhoea 		text,
    Dyspareunia 		text,
    Menarche 			text,
    Pregnancy 			text,
	foreign key (fk_PEXAMID) references medicalpexam(PEXAMID) on delete no action
    );

    create table if not exists UserDetails
    (
    	UserID			int auto_increment	not null primary key,
      username    varchar(50) not null,
      password    varchar(100) not null
    );
