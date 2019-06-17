<?php

use Illuminate\Database\Seeder;
use App\Models\Tariff;

class TariffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Tariff::create( [
    		'tariff_code'=>'NHIS-010-000',
    		'description'=>'GENERAL DESCRIPTION',
    		'parent_id'=>NULL,
    		'amount'=> 0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-010-001',
    		'description'=>'Specialist Initial Consultation',
    		'parent_id'=>'NHIS-010-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-010-002',
    		'description'=>'Specialist Review ( Per visit)',
    		'parent_id'=>'NHIS-010-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-010-003',
    		'description'=>'Nursing Care (per day)',
    		'parent_id'=>'NHIS-010-000',
    		'amount'=>'700.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-010-004',
    		'description'=>'Special Nursing Care (e.g. Intensive care, SCBU, Paediatric Emergency
    		etc)',
    		'parent_id'=>'NHIS-010-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-010-005',
    		'description'=>'Hospital Bed Occupancy',
    		'parent_id'=>'NHIS-010-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-002000',
    		'description'=>'E.N.T/MAXILOFACIAL SURGERY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-000',
    		'description'=>'Minor Procedures/Surgeries',
    		'parent_id'=>'NHIS-002000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-001',
    		'description'=>'Antral Washout',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-002',
    		'description'=>'Aseptic Destruction of Labyrinth For Meniere\'s Disease',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-003',
    		'description'=>'Audiometry',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-004',
    		'description'=>'Electrocautery of Nose',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-005',
    		'description'=>'Foreign Body Removal From Ear',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-006',
    		'description'=>'Foreign Body Removal From Nose',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-007',
    		'description'=>'I&D of quinsy/retropharyngeal abscess/ludwig angina',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-008',
    		'description'=>'Indirect Laryngoscopy',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-009',
    		'description'=>'Myringoplasty',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-010',
    		'description'=>'Myringostomy; bilat, unilat, with grommet',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-011',
    		'description'=>'Preauricular Sinus',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-012',
    		'description'=>'Release of tongue tie',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-013',
    		'description'=>'Sinus Antroscopy',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-014',
    		'description'=>'Staples Mobilisation',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-021-015',
    		'description'=>'Tympanometry',
    		'parent_id'=>'NHIS-021-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-000',
    		'description'=>'Intermediate Procedures/Surgeries',
    		'parent_id'=>'NHIS-002000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-001',
    		'description'=>'Adenoidectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-002',
    		'description'=>'Antrostomy - Nasal Sinus Surgery (e.g. middle/inferior meatal/
    		Caldwell Luc)',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-003',
    		'description'=>'Aural Polypectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-004',
    		'description'=>'Cleft Lip Repairs.',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-005',
    		'description'=>'cortical mastoidectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-006',
    		'description'=>'Cryosurgery',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-007',
    		'description'=>'Direct Laryngoscopy ( Under GA)',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-008',
    		'description'=>'EUA Nasopharynx + biopsy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-009',
    		'description'=>'Excision of Nasomaxillary mass',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-010',
    		'description'=>'Lateral rhinotomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-011',
    		'description'=>'Meatoplasty (for Traumatic Meatus Atresia)',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-012',
    		'description'=>'Nasal Polypectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-013',
    		'description'=>'Oesophagoscopy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-014',
    		'description'=>'Partial Amputation of the pinna',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-015',
    		'description'=>'Septoplasty',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-016',
    		'description'=>'Submandibular gland excision',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-017',
    		'description'=>'superficial parotidectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-018',
    		'description'=>'Thyroglossal cyst/fistula excision',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-019',
    		'description'=>'Tonsillectomy/Adenotonsilectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-020',
    		'description'=>'Tracheostomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-021',
    		'description'=>'Turbinectomy',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-022-022',
    		'description'=>'Young\'s Operation',
    		'parent_id'=>'NHIS-022-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-000',
    		'description'=>'Major Procedures/surgeries',
    		'parent_id'=>'NHIS-002000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-001',
    		'description'=>'Ant Ethmoidal Artery ligation',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-002',
    		'description'=>'Aryteniodectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-003',
    		'description'=>'Autogenous Bone Graft To Mastoid Cavity',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-004',
    		'description'=>'Cleft Palate Repairs.',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-005',
    		'description'=>'Dacrocystorhinostomy (DCR)',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-006',
    		'description'=>'Ethmoidectomy; Fronto, External',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-007',
    		'description'=>'Fenestration',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-008',
    		'description'=>'Fracture Reduction of the Nose',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-009',
    		'description'=>'Internal Auditory Meatus Surgery',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-010',
    		'description'=>'Intranasal ethmoidectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-011',
    		'description'=>'Labyrinthotomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-012',
    		'description'=>'Laryngeal Stenosis, Laryngocele, Abductor Paralysis, Laryngo-Fissure',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-013',
    		'description'=>'Laryngectomy (All types)',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'150000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-014',
    		'description'=>'Laryngoplasty',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-015',
    		'description'=>'Mastoid  Surgery/Mastoidectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-016',
    		'description'=>'Maxilectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-017',
    		'description'=>'Muscle Grafting To Mastoid Cavity',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-018',
    		'description'=>'Neck exploration for penetrating neck Injury',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'200000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-019',
    		'description'=>'Parapharyngeal Excission/I&D/Tumour excission',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-020',
    		'description'=>'Pharyngoplasty',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-021',
    		'description'=>'Posterior Canal Reconstruction After Radical Mastoidectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-022',
    		'description'=>'Reduction and fixation of Jaw fractures',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-023',
    		'description'=>'Reduction and fixation of maxillary fractures',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-024',
    		'description'=>'Rhinoplasty',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-025',
    		'description'=>'Sequestrectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-026',
    		'description'=>'Stapedial Surgery For Otosclerosis/Stapedectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-027',
    		'description'=>'Styloidectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-028',
    		'description'=>'Total parotidectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-029',
    		'description'=>'Tympanoplasty',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-023-030',
    		'description'=>'Vidian Neurectomy',
    		'parent_id'=>'NHIS-023-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-030-000',
    		'description'=>'GYNAECOLOGY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-030-001',
    		'description'=>'Antenatal care (General)',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'7500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-030-002',
    		'description'=>'Normal Delivery (General)',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'7000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-030-003',
    		'description'=>'Delivery of Multiple Pregnancy (General)',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'10000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-001',
    		'description'=>'Minor Procedures/surgeries - Cervical  Polypectomy',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-002',
    		'description'=>'Minor Procedures/surgeries - Cervical Cone Biopsy',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-003',
    		'description'=>'Minor Procedures/surgeries - Colposcopy',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-004',
    		'description'=>'Minor Procedures/surgeries - D&C / Evacuation Of Retained Products Of Conception',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-005',
    		'description'=>'Minor Procedures/surgeries - Destructive delivery (cranioembrayotomy)',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-006',
    		'description'=>'Minor Procedures/surgeries - Excision / Diathermy Of Warts',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-007',
    		'description'=>'Minor Procedures/surgeries - Excision Of Vaginal Septum',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-008',
    		'description'=>'Minor Procedures/surgeries - Hysteroscopy',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-009',
    		'description'=>'Minor Procedures/surgeries - Labial Cyst',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-010',
    		'description'=>'Minor Procedures/surgeries - Laparascopy + Dye Test',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-011',
    		'description'=>'Minor Procedures/surgeries - Marsupialisation ( Bartholin\'s Cyst )',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-012',
    		'description'=>'Minor Procedures/surgeries - Pap Smear Procedure',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-013',
    		'description'=>'Minor Procedures/surgeries - Perineal Warts',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-014',
    		'description'=>'Minor Procedures/surgeries - Repair of Episiotomy',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-015',
    		'description'=>'Minor Procedures/surgeries - Uterine Evacuation',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-031-016',
    		'description'=>'Minor Procedures/surgeries - Vaginal Cyst Enucleation',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'20000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-000',
    		'description'=>'Intermediate Procedures/surgeries',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-001',
    		'description'=>'Cervical Circlage/Shirodkar Suture',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-002',
    		'description'=>'Colporrhaphy - Vaginal wall repair/Colpoperineorrhaphy',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-003',
    		'description'=>'Diagnostic Laparoscopy',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-004',
    		'description'=>'Hydrotubation',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-005',
    		'description'=>'Hymenectomy and repair of Hymen',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-006',
    		'description'=>'Instrumental Delivery (Forceps, Vacuum Extraction)',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-007',
    		'description'=>'Mini Laparotomy',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-032-008',
    		'description'=>'Repair Of Third Degree Tear',
    		'parent_id'=>'NHIS-032-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-000',
    		'description'=>'Major  Procedures/surgeries',
    		'parent_id'=>'NHIS-030-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-001',
    		'description'=>'Amputation of the Cervix',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-002',
    		'description'=>'Bilateral tubal ligation',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-003',
    		'description'=>'Broad ligament Haematoma',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-004',
    		'description'=>'Caesarean Section, elective, emergency, single live born, twin etc',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-005',
    		'description'=>'Cervical Cautery',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-006',
    		'description'=>'Edge Resection Of The Ovary',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-007',
    		'description'=>'Examination Under Anaesthesia',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-008',
    		'description'=>'Hysterectomy And Bilateral Salpingo-Oophorectomy',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-009',
    		'description'=>'Hysterectomy/Manchester Repair (all types)',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-010',
    		'description'=>'Laparotomy Diagnostic / Therapeutic , Inter- Sex',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-011',
    		'description'=>'Myomectomy',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-012',
    		'description'=>'Ovarian  Biopsy',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-013',
    		'description'=>'Ovarectomy/Oophrectomy',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-014',
    		'description'=>'Pelvic Haematocoele',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-015',
    		'description'=>'Pelvic Haematocoele',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-016',
    		'description'=>'Pelvic/Abdominal Abscess Drainage',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-017',
    		'description'=>'Reconstruction Of Vagina (e.g. Secondary to vaginal Atresia)',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-018',
    		'description'=>'Reconstruction Surgery E.G Straussman Operation',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-019',
    		'description'=>'Rectovaginal Fistula Repair',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-020',
    		'description'=>'Removal of Ovaries',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-021',
    		'description'=>'Repair Of Inverted Uterus',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-022',
    		'description'=>'Repair Of Perforated Uterus',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-023',
    		'description'=>'Repair Of Ruptured Uterus',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-024',
    		'description'=>'Salpingectomy ( e.g for Ectopic Pregnancy)',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-025',
    		'description'=>'Salpingo-Oophoreictomy',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-026',
    		'description'=>'Tubal Reconstruction',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-027',
    		'description'=>'Ureterovaginal Fistula Repair',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-028',
    		'description'=>'Uterovesical Fistula Repair',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-029',
    		'description'=>'Vaginoclesis',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-030',
    		'description'=>'Ventrosuspension Of The Bladder',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-031',
    		'description'=>'Ventrosuspension Procedures Of Correction Of Uterine Prolapse',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-032',
    		'description'=>'Vesicovaginal Fistula Repair',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-033-033',
    		'description'=>'Vulvectomy',
    		'parent_id'=>'NHIS-033-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-000',
    		'description'=>'INTERNAL MEDICINE:',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-001',
    		'description'=>'Aspirations/Paracentesis',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-002',
    		'description'=>'Critical Care In I.C.U (per day)',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'6000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-003',
    		'description'=>'Echocardiography',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-004',
    		'description'=>'Electrocardiography ( ECG)',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-005',
    		'description'=>'Electro-Encephalography (EEG)',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-006',
    		'description'=>'Gastric Lavage',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-007',
    		'description'=>'Lumbar Puncture',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-008',
    		'description'=>'Lung Function Test',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-009',
    		'description'=>'Nebulisation (per day)',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-010',
    		'description'=>'Oxygen Therapy (per day)',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-040-011',
    		'description'=>'Tissue Biopsy (e.g. Liver, Kidney etc)',
    		'parent_id'=>'NHIS-040-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-000',
    		'description'=>'ORTHOPAEDICS',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-001',
    		'description'=>'Above Knee Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-002',
    		'description'=>'Cylinder Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-003',
    		'description'=>'Below Knee Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-004',
    		'description'=>'Boot Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-005',
    		'description'=>'Above Knee Back Slab (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-006',
    		'description'=>'Below Knee Back Slab (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-007',
    		'description'=>'Above Elbow Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-008',
    		'description'=>'Below Elbow Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-009',
    		'description'=>'U- Shaped Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-010',
    		'description'=>'U- Shaped Pop Back Slap (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-011',
    		'description'=>'Hanging Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-012',
    		'description'=>'Hip Spica Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-013',
    		'description'=>'Mineaur Jacket Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-014',
    		'description'=>'Thoracolumbar Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-015',
    		'description'=>'Lumber Pop Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-016',
    		'description'=>'Full Arm Casts (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-017',
    		'description'=>'Full Leg Casts (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-050-018',
    		'description'=>'Scotch Cast (MUA & POP Application)',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-000',
    		'description'=>'Minor Procedures/surgeries',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-001',
    		'description'=>'Amputation - Fingers',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-002',
    		'description'=>'Amputation - Toes',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-003',
    		'description'=>'Chondromectomy',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-004',
    		'description'=>'Excision Biopsy',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-005',
    		'description'=>'Knee Effusion Tap',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-006',
    		'description'=>'Pollicisation Of The Index Finger',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-007',
    		'description'=>'Release Of Chordae',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-008',
    		'description'=>'Surgical Release In Stenosing Tenosynovitis',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-051-009',
    		'description'=>'Synovectomy',
    		'parent_id'=>'NHIS-051-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-000',
    		'description'=>'Intermediate Procedures/surgeries',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-001',
    		'description'=>'Closed Reduction Of Fracture',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-002',
    		'description'=>'Drainage Of Septic Arthritis',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-003',
    		'description'=>'Exostectomy',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-004',
    		'description'=>'Saucerisation Of Chronically Infected Bone',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-005',
    		'description'=>'Sequestrectomy',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-006',
    		'description'=>'Simple Congenital Talipes Repair',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-007',
    		'description'=>'Skin Traction',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-008',
    		'description'=>'Subperiosteal Drainage Of Acute Osteomyelitis',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-009',
    		'description'=>'Surgical Correction Of Dupuytren\'s Contracture',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-052-010',
    		'description'=>'Syndactlysis',
    		'parent_id'=>'NHIS-052-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-000',
    		'description'=>'Major  Procedures/surgeries',
    		'parent_id'=>'NHIS-050-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-001',
    		'description'=>'Amputation and Disarticulation Of Joints',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-002',
    		'description'=>'Amputation and Limb Substitution',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-003',
    		'description'=>'Anterior and posterior spine fixation',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-004',
    		'description'=>'Arthrodesis',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-005',
    		'description'=>'Arthroplasty',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-006',
    		'description'=>'Arthorotomy (+synevectomy)',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-007',
    		'description'=>'Bone Grafting',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-008',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of Foot',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-009',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Fore- Arm',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-010',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Hand',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-011',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Leg',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-012',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Pectoral Girdle',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-013',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Pelvic Girdle',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-014',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Ribs',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-015',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Thigh',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-016',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Upper Arm',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-017',
    		'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Spinal Column',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-018',
    		'description'=>'Osteoclasis, Internal Fixation Of Mal-union',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-019',
    		'description'=>'Reconstruction Surgeries: Acromium, head of femur etc',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-020',
    		'description'=>'Surgical Repair Of Congenital Talipes Equanovarus/ Valgus',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-021',
    		'description'=>'Tendon Grafting',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-022',
    		'description'=>'Tendon Transplant',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-023',
    		'description'=>'Decompression of carpal tunnel syndrome',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-053-024',
    		'description'=>'Tenoplasty',
    		'parent_id'=>'NHIS-053-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-060-000',
    		'description'=>'GENERAL SURGERY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-000',
    		'description'=>'Minor Procedures/surgeries',
    		'parent_id'=>'NHIS-060-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-001',
    		'description'=>'Adventious Burse - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-002',
    		'description'=>'Bakers Cyst - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-003',
    		'description'=>'Biopsy Of Oesophageal Mass',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-004',
    		'description'=>'Biopsy of Prostate',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-005',
    		'description'=>'Biopsy Of Tumour  Of Abdominal Wall',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-006',
    		'description'=>'Bursa - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-007',
    		'description'=>'Catheterization Of Urinary Bladder per session (up to three sessions
    		annually)',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-008',
    		'description'=>'Cervial Lymphnodes - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-009',
    		'description'=>'Circumcision of the Grown Up',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-010',
    		'description'=>'Debridement And Toilet of Wounds',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-011',
    		'description'=>'Dermoid Cyst Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-012',
    		'description'=>'Dissection Of Inguinal Nodes',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-013',
    		'description'=>'Dorsal Slit and Reduction of Paraphimosis',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-014',
    		'description'=>'Electrofulgaration of Condylomata Acuminata',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-015',
    		'description'=>'Excision Of Breast Lump',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-016',
    		'description'=>'Excision Of Intrascrostal Mass',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-017',
    		'description'=>'Excision of Neurofibroma',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-018',
    		'description'=>'Excision Of Tophi',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-019',
    		'description'=>'Fibrodenoma - Unilateral',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-020',
    		'description'=>'Ganglion - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-021',
    		'description'=>'Ganglion - Small - Excision D ,',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-022',
    		'description'=>'Ganglion (Dorsum of Both Wrist) - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-023',
    		'description'=>'Ganglionectectomy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-024',
    		'description'=>'Gastroduodenoscopy/ Endoscopies',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-025',
    		'description'=>'Granuloma - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-026',
    		'description'=>'Granuloma Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-027',
    		'description'=>'Herniotomy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-028',
    		'description'=>'Incision And Drainage Of Abscess',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-029',
    		'description'=>'Infected Bunion Foot - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-030',
    		'description'=>'In-growing Toe Nail ( Excision )',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-031',
    		'description'=>'Intercostals Drainage Insertion',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-032',
    		'description'=>'Lipectomy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-033',
    		'description'=>'Liver/ Kidney/ Bone Marrow Biopsy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-034',
    		'description'=>'Lords Procedure (haemorrhoids)',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-035',
    		'description'=>'Lumpectomy - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-036',
    		'description'=>'Oeshophagoscopy for foreign body removal',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-037',
    		'description'=>'Paracentesis ( A/C Wash Out )',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-038',
    		'description'=>'Pericardiocentesis',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-039',
    		'description'=>'Pollicisation of Index Finger',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-040',
    		'description'=>'Priapism, Shunt Procedure All Types',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-041',
    		'description'=>'Proctoscopy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-042',
    		'description'=>'Punch Biopsy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-043',
    		'description'=>'Rectal Dilation',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-044',
    		'description'=>'Release of Chordae',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-045',
    		'description'=>'Sebaceous Cyst - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-046',
    		'description'=>'Sigmoidoscopy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-047',
    		'description'=>'Sinus - Excision',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-048',
    		'description'=>'Surgical Drainage In Haematoma Of Rectus Abdominis',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-049',
    		'description'=>'Surgical Drainage of Anal Abscess',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-050',
    		'description'=>'Surgical Drainage Of Galactocoele',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-051',
    		'description'=>'Surgical release of Stenosing tenosinovitis',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-052',
    		'description'=>'Suture Of Major Wounds',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-053',
    		'description'=>'Syndactysis',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-054',
    		'description'=>'Synovectomy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-055',
    		'description'=>'Testicular Biopsy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-061-056',
    		'description'=>'Varicocoelectomy',
    		'parent_id'=>'NHIS-061-000',
    		'amount'=>'20000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-000',
    		'description'=>'Intermediate Procedures/surgeries',
    		'parent_id'=>'NHIS-060-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-001',
    		'description'=>'Adenoidectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-002',
    		'description'=>'Anal Fistulectomy Repair',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-003',
    		'description'=>'Anal Sphincteroplasty',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-004',
    		'description'=>'Anorectoplasty',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-005',
    		'description'=>'Appendicetomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-006',
    		'description'=>'Bilateral Cutaneous Ureterostomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-007',
    		'description'=>'Bilateral Ureteoenterostomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-008',
    		'description'=>'Branchial Fistula',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-009',
    		'description'=>'Bronchial Cyst',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-010',
    		'description'=>'Bronchoscopy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-011',
    		'description'=>'Cystic Hygroma Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-012',
    		'description'=>'Cystourethroscopy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-013',
    		'description'=>'Dissection Of Femoral Triangle',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-014',
    		'description'=>'Drainage of Ischio Rectal Abscess',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-015',
    		'description'=>'Drainage of Psoas Abscess',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-016',
    		'description'=>'Enterocele Or Vault Prolapse Repair',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-017',
    		'description'=>'Epidedectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-018',
    		'description'=>'Evacuation of Scrotal Hematoma',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-019',
    		'description'=>'Excision Bronchial Sinus',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-020',
    		'description'=>'Excision Mammary Fistula',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-022',
    		'description'=>'Excision of Urethral Carbuncle',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-021',
    		'description'=>'Excision Pilonidal Sinus',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-023',
    		'description'=>'Excission of Haemangiomas',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-024',
    		'description'=>'Facial Decompression',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-025',
    		'description'=>'Fibroadenoma - Bilateral',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-026',
    		'description'=>'Fibroma - Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-027',
    		'description'=>'Fissurectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-028',
    		'description'=>'Fistula In - Ano Repair',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-029',
    		'description'=>'Fistula Repair',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-030',
    		'description'=>'Fistulectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-031',
    		'description'=>'Fulguration',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-032',
    		'description'=>'Haemangioma - Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-033',
    		'description'=>'Haemorhoidectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-034',
    		'description'=>'Herniorhaphies (all types)',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-035',
    		'description'=>'Hiatus Herniorrphaphy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-036',
    		'description'=>'Hydrocoelectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-037',
    		'description'=>'Inguinal Node (bulk dissection) axial',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-038',
    		'description'=>'Injection Sclerotherapy Of Varicose Veins (minor)',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-039',
    		'description'=>'Low Fistulectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-040',
    		'description'=>'Macindoe Procedure',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-041',
    		'description'=>'Oesophagoscopy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-042',
    		'description'=>'Orchidectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-043',
    		'description'=>'Orchidopexy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-044',
    		'description'=>'Papilloma Rectum - Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-045',
    		'description'=>'Polypectomy (Cervical )',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-046',
    		'description'=>'Rectal polyp',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-047',
    		'description'=>'Scrotal Swelling (Multiple) - Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-048',
    		'description'=>'Skin Grafting',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-049',
    		'description'=>'Submandibular Lymphs - Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-050',
    		'description'=>'Suprapubic Cystostomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-051',
    		'description'=>'Surgery Of Torsion Of Spermatic Cord',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-052',
    		'description'=>'Surgical corrections of Duputytren\'s contracture',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-053',
    		'description'=>'Umbilical Sinus - Excision',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-062-054',
    		'description'=>'Vasectomy',
    		'parent_id'=>'NHIS-062-000',
    		'amount'=>'35000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-000',
    		'description'=>'Major Procedures/surgeries',
    		'parent_id'=>'NHIS-060-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-001',
    		'description'=>'Abdominal Rectopexy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-002',
    		'description'=>'Abdomino Perineal Resection',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-003',
    		'description'=>'Abdominoperineal Rectum Resection',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-004',
    		'description'=>'Abdomino-Perineal Resection',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-005',
    		'description'=>'Adrenalectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-006',
    		'description'=>'Anal Pull Through',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-007',
    		'description'=>'Appendicular Abscess - Drainage',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-008',
    		'description'=>'Appendicular Perforation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-009',
    		'description'=>'Axillary Dissection Of Breast',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-010',
    		'description'=>'Biopsy Of Retroperitoneal Tumor',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-011',
    		'description'=>'Broad Ligament Haematoma',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-012',
    		'description'=>'Burst Abdomen Obstruction',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-013',
    		'description'=>'Caecopexy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-014',
    		'description'=>'Cavernospongiosum Shunt',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-015',
    		'description'=>'Cholecystectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-016',
    		'description'=>'Cholecystectomy & exploration',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-017',
    		'description'=>'Choledochal Cystojejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-018',
    		'description'=>'Choledocho Jejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-019',
    		'description'=>'Choledochostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-020',
    		'description'=>'Closure of Hollow Viscus Perforation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-021',
    		'description'=>'Colectomy-Partial Or Total',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-022',
    		'description'=>'Colon Reconstruction After Hartmann\'s Procedure',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-023',
    		'description'=>'Colostomy Construction/Closure',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-024',
    		'description'=>'Commando Operation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-025',
    		'description'=>'Condilectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-026',
    		'description'=>'Continent Ileostomy Pouch',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-027',
    		'description'=>'Corporosavenous Shunt',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-028',
    		'description'=>'Craniotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-029',
    		'description'=>'Cricopharyngeal Myotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-030',
    		'description'=>'Cystectomy Partial/Total',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-031',
    		'description'=>'Cystic/Fibrous Dysplasia',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-032',
    		'description'=>'Cystolithotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-033',
    		'description'=>'Decortication',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-034',
    		'description'=>'Diaphragmatic Hernia Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-035',
    		'description'=>'Dissection of The Mediastinium',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-036',
    		'description'=>'Diverticulectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-037',
    		'description'=>'Drainage of Gastric Abscess',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-038',
    		'description'=>'Drainage Of Hepatic Abscess',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-039',
    		'description'=>'Drainage of Subdiaphramatic Abscess',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-040',
    		'description'=>'Drainage pericardial effusion',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-041',
    		'description'=>'Duodenal Diverticulum',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-042',
    		'description'=>'DuodenalJejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-043',
    		'description'=>'Duodenectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-044',
    		'description'=>'Ectopic Parathyroidectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-045',
    		'description'=>'Encephalocoele Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-046',
    		'description'=>'Enterostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-047',
    		'description'=>'Enterostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-048',
    		'description'=>'Excision Meckel\'s Diverticulum',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-049',
    		'description'=>'Excision of liver Abscess',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-050',
    		'description'=>'Excision Of Lymphoedematous Lymph Tissues',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-051',
    		'description'=>'Excision Of Pelvi-Rectal Fistula',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-052',
    		'description'=>'Exploratory Laparatomy/Lysis Of Adhesions',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-053',
    		'description'=>'Extensive (Small and Large) Bowel Resection and Anastomoses',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-054',
    		'description'=>'Fissurectomy and Haemorrhoidectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-055',
    		'description'=>'Fissurectomy with Eversion of Sac -',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-056',
    		'description'=>'Foreign Body Removal in Deep Region',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-057',
    		'description'=>'Fundoplication',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-058',
    		'description'=>'Gastrectomy- Partial/Total',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-059',
    		'description'=>'Gastroenterostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-060',
    		'description'=>'Gastrojejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );


    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-061',
    		'description'=>'Gastrotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-062',
    		'description'=>'Glossectomy-Partial/Total',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-063',
    		'description'=>'Grahams Operation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-064',
    		'description'=>'Haemorrage of Small Intestine',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-065',
    		'description'=>'Haemorroidectomy+ Fistulectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-066',
    		'description'=>'Heler\'s Procedure',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-067',
    		'description'=>'Hemi Glossectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-068',
    		'description'=>'Hemi Mandibulectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-069',
    		'description'=>'Hemicolectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-070',
    		'description'=>'Heminephrectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-071',
    		'description'=>'Hemithyroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-072',
    		'description'=>'Hepatic Resection (lobectomy)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-073',
    		'description'=>'Hepatic Segmentectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-074',
    		'description'=>'Herniorraphy and Hydrocelectomy Sac Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-075',
    		'description'=>'Hydatid Cyst of Liver',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-076',
    		'description'=>'Hydrocelectomy + Orchidectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-077',
    		'description'=>'Hydrocelectomy+Hernioplasty - Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-078',
    		'description'=>'Hypospadiacs Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-079',
    		'description'=>'Ileostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-080',
    		'description'=>'Ileostomy Pouch Revison',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-081',
    		'description'=>'Ilieo Sigmoidostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-082',
    		'description'=>'Instestinal perforation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-083',
    		'description'=>'Intestinal Obstruction',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-084',
    		'description'=>'Intestinal Perforation (Resection Anastomosis)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-085',
    		'description'=>'Intussusception Operation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-086',
    		'description'=>'Jejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-087',
    		'description'=>'Laparascopic  Cholecystectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-088',
    		'description'=>'Laparotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-089',
    		'description'=>'Laryngectomy & Pharyngeal Diverticulum   (Throat)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-090',
    		'description'=>'Laryngectomy with Block Dissection (Throat)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-091',
    		'description'=>'Laryngo Fissure (Throat)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-092',
    		'description'=>'Laryngopharyngectomy (Throat)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-093',
    		'description'=>'Ligation Of Hepatic/Left Gastric Splenic Artery',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-094',
    		'description'=>'Local Resection Of Pelvic Tumour',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-095',
    		'description'=>'Longitudinal Pancreaticojejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-096',
    		'description'=>'Lymphatic Channel Transplantation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-097',
    		'description'=>'Mastectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-098',
    		'description'=>'Meckel\'s Diverticulectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-099',
    		'description'=>'Mesenteric Caval Anastomosis',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-100',
    		'description'=>'Mesenteric Cyst - Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-101',
    		'description'=>'Microlaryngoscopic Surgery (microlaryngoscopy)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-102',
    		'description'=>'Nephrectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-103',
    		'description'=>'Nephrolithotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-104',
    		'description'=>'Oddis Sphincteroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-105',
    		'description'=>'Oesophageal , 2 & 3 Stage, Thoraco-Abdominal, Fistula Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-106',
    		'description'=>'Oesophageal Atresia And Tracheo-Oesophageal Fistula Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-107',
    		'description'=>'Oesophageal Substitution, Diverticulum Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-108',
    		'description'=>'Oesophageal Transection',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-109',
    		'description'=>'Oesophagectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-110',
    		'description'=>'Oesophagogastrectomy With Interposition Of Colonic/Jejunal
    		Segment',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-111',
    		'description'=>'Oesophagostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-112',
    		'description'=>'Oophorectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-113',
    		'description'=>'Orchidectomy + Herniorraphy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-114',
    		'description'=>'Orchidopexy, with Circumsion, With Eversion of Sac, with Herniotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-115',
    		'description'=>'Pancreatic Cystectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-116',
    		'description'=>'Pancreaticoduodenectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-117',
    		'description'=>'Pancreaticojejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-118',
    		'description'=>'Parathyroidectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-119',
    		'description'=>'Parodectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-120',
    		'description'=>'Partial Pancreatectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-121',
    		'description'=>'Pelvic Abscess - Open Drainage',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-122',
    		'description'=>'Pelvic Evisceration',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-123',
    		'description'=>'Penectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-124',
    		'description'=>'Penoplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-125',
    		'description'=>'Pericardiectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-126',
    		'description'=>'Pharyngectomy & Reconstruction - Total',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-127',
    		'description'=>'Phytomatous Growth in the Scalp - Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-128',
    		'description'=>'Plastic Repair Of Bladder Neck',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-129',
    		'description'=>'Pleurectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-130',
    		'description'=>'Pleuropneumonectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-131',
    		'description'=>'Pneumonectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-132',
    		'description'=>'Portocaval Shunt/Anastomosis',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-133',
    		'description'=>'Proctocolectomy , Ileostomy & Ileosttomy Pouch',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-134',
    		'description'=>'Prolapsed Rectum Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-135',
    		'description'=>'Prostatectomy (all types incl TURP)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-136',
    		'description'=>'Pulmonary Embolectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-137',
    		'description'=>'Pulmonary Resection',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-138',
    		'description'=>'Pyelolithotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-139',
    		'description'=>'Pyeloromyotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-140',
    		'description'=>'Pyeloroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-141',
    		'description'=>'Pyelotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-142',
    		'description'=>'Pyloroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-143',
    		'description'=>'Radical Cystectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-144',
    		'description'=>'Radical Mastectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-145',
    		'description'=>'Radical Mastectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-146',
    		'description'=>'Radical Neck Dissection - Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-147',
    		'description'=>'Radical Pancreatectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-148',
    		'description'=>'Radical Prostatectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-149',
    		'description'=>'Reconstruction Of The Ureter',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-150',
    		'description'=>'Rectopexy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-151',
    		'description'=>'Recto-Urethral Fistula Closure',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-152',
    		'description'=>'Rectovesical Fistula Closure',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-153',
    		'description'=>'Renal Aneurysmectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-154',
    		'description'=>'Renal Cystectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-155',
    		'description'=>'Renal Decapsulation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-156',
    		'description'=>'Renopelvic Lymphatectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-157',
    		'description'=>'Repair Of Bochidalek Diaphragmatic Congenital Defect',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-158',
    		'description'=>'Repair Of Bowel Perforations',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-159',
    		'description'=>'Repair of Common Bile Duct',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-160',
    		'description'=>'Repair Of Gastric Lacerations',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-161',
    		'description'=>'Repair Of Oesophageal Lacerations',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-162',
    		'description'=>'Repair Of Splenic Laceration',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-163',
    		'description'=>'Resection Anastomosis (Large Intestine)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-164',
    		'description'=>'Resection Anastomosis (Small Intestine)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-165',
    		'description'=>'Resection Of Median Bar Obstruction',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-166',
    		'description'=>'Retroperitoneal Drainage Of Perinephric Abscess',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-167',
    		'description'=>'Retroperitoneal Tumor - Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-168',
    		'description'=>'Roux-En-Y Pancreatic Jejunostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-169',
    		'description'=>'Salivary Gland - Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-170',
    		'description'=>'Segmental Resection Of Bladder Lesion',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-171',
    		'description'=>'Selective Vagotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-172',
    		'description'=>'Sigmoid Diverticulum',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-173',
    		'description'=>'Simple closure - Peptic perforation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-174',
    		'description'=>'Splenectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-175',
    		'description'=>'Splenic Artery Aneurysmectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-176',
    		'description'=>'Splenorhaphy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-177',
    		'description'=>'Stripping And Ligation Of Veins',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-178',
    		'description'=>'Subcutaneous Venous Omphalo Saphenous Shunt',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-179',
    		'description'=>'Submandibular Mass Excision + Reconstruction',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-180',
    		'description'=>'Submandibular Sialoadenectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-181',
    		'description'=>'Subtotal Thyroidectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-182',
    		'description'=>'Super Selective Vagotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-183',
    		'description'=>'Surgery Of Acute Intra Abdominal Vascular Disease',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-184',
    		'description'=>'Surgery Of Complications Of Diverticular Disease',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-185',
    		'description'=>'Surgery Of Complications Of Pancreatitis',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-186',
    		'description'=>'Surgery Of Hepatic Trauma',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-187',
    		'description'=>'Surgery Of Intestinal Obstruction',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-188',
    		'description'=>'Surgery Of Seminal Vessicle',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-189',
    		'description'=>'Surgery Ofcomplications Of Appendicitis',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-190',
    		'description'=>'Surgical Exploration For Anorchism',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-191',
    		'description'=>'Sympathectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-192',
    		'description'=>'Thoracectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-193',
    		'description'=>'Thoracoplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-194',
    		'description'=>'Thoracotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-195',
    		'description'=>'Thrombectomy By Forarty\'s Catheterisation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-196',
    		'description'=>'Thyroglossal Cysts And Fistula Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-197',
    		'description'=>'Thyroid Lobectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-198',
    		'description'=>'Thyroidectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-199',
    		'description'=>'Thyroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-200',
    		'description'=>'Total Pancreatectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-201',
    		'description'=>'Total Proctocolectomy & Ileostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-202',
    		'description'=>'Tracheal Resection',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-203',
    		'description'=>'Tracheal Stenosis (End to end Anastamosis) (Throat)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-204',
    		'description'=>'Tracheoplasty (Throat)',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-205',
    		'description'=>'Transcystotomy Excision',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-206',
    		'description'=>'Transcystotomy Fulgaration',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-207',
    		'description'=>'Transcystotomy Lithotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-208',
    		'description'=>'Transduodenal Choledochal Cystectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-209',
    		'description'=>'Transduodenal Sphincteroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-210',
    		'description'=>'Transoesophageal Variceligation',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-211',
    		'description'=>'Transurethral Dessication Of Congenital Meatal Stenoses',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-212',
    		'description'=>'Transurethral Excision Of Bladder Lesion',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-213',
    		'description'=>'Transurethral Fulguration Of Bladder Lesion',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-214',
    		'description'=>'Urerthra-Reconstruction/ Repair Of Prostatic/Membraneous Urethra',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-215',
    		'description'=>'Ureteral Reinplantation Into The Bladder',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-216',
    		'description'=>'Ureterolithotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-217',
    		'description'=>'Ureterosigmoidostomy With Rectal Bladder/Colostomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-218',
    		'description'=>'Uretherectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-219',
    		'description'=>'Urethroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-220',
    		'description'=>'Urethrotomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-221',
    		'description'=>'Urethro-Vesicopexy, Combined Abdominal And Vaginal Approach',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-222',
    		'description'=>'Uretro Vaginal Fistula Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-223',
    		'description'=>'Uretro Vesical Fistula Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-224',
    		'description'=>'Vagoplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-225',
    		'description'=>'Vagotomy/Pyloroplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-226',
    		'description'=>'Vasoplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-227',
    		'description'=>'Vein Patch Angioplasty',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-228',
    		'description'=>'Vesical Diverticulectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-229',
    		'description'=>'Vesicovaginal Fistula Repair',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-230',
    		'description'=>'Volvous of Large Bowel',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-231',
    		'description'=>'Vulvectomy',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-232',
    		'description'=>'Warrens Shunt',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-063-233',
    		'description'=>'Wound Debridement ( Under GA )',
    		'parent_id'=>'NHIS-063-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-070-000',
    		'description'=>'ENDOSCOPIC PROCEDURES',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-001',
    		'description'=>'Ablation of Endometriotic Spot',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-002',
    		'description'=>'Adhesolysis',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'100000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-003',
    		'description'=>'Appendectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-004',
    		'description'=>'Cholecystectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-005',
    		'description'=>'Cholecystectomy and Drainage of Liver abscess',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-006',
    		'description'=>'Cholecystectomy with Excision of TO Mass',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-007',
    		'description'=>'Cyst Aspiration',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-008',
    		'description'=>'Endometria to Endometria Anastomosis',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-009',
    		'description'=>'Fimbriolysis',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-010',
    		'description'=>'Hemicolectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-011',
    		'description'=>'Hysterectomy with bilateral SalpingoOperectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-012',
    		'description'=>'Incisional Hernia - Repair',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-013',
    		'description'=>'Inguinal Hernia - Bilateral',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-014',
    		'description'=>'Inguinal hernia - Unilateral',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-015',
    		'description'=>'Intestinal resection',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-016',
    		'description'=>'Myomectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-017',
    		'description'=>'Oophrectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-018',
    		'description'=>'Ovarian Cystectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-019',
    		'description'=>'Perotionities',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-020',
    		'description'=>'Repair of Ureterocele',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-021',
    		'description'=>'Salpingo Ophrectomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-022',
    		'description'=>'Salpingostomy',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'30000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-023',
    		'description'=>'Uterine septum',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-024',
    		'description'=>'Varicocele - Bilateral',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'55000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-071-025',
    		'description'=>'Varicocele - Unilateral',
    		'parent_id'=>'NHIS-070-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-080-000',
    		'description'=>'OPTOMETRY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-000',
    		'description'=>'Minor',
    		'parent_id'=>'NHIS-080-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-001',
    		'description'=>'Refraction',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-002',
    		'description'=>'Tonometry (Pulsair/Goldmann Applanation)',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-003',
    		'description'=>'Pupillary Dilation',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-004',
    		'description'=>'Indirect Ophthalmoscopy',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-005',
    		'description'=>'Indirect Ophthalmoscopy',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-006',
    		'description'=>'Visual Field Assessment',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-007',
    		'description'=>'4 Minor ( Superfield Lenses ) Examination',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-081-008',
    		'description'=>'Subconjuctival Injection',
    		'parent_id'=>'NHIS-081-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-090-000',
    		'description'=>'OPHTHALMOLOGY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-000',
    		'description'=>'Intermediate Procedures/surgeries',
    		'parent_id'=>NULL,
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-001',
    		'description'=>'Abscess Drainage of Lid',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-002',
    		'description'=>'Anterior Chamber Reconstruction',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-003',
    		'description'=>'Bowman\'s Cautery',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-004',
    		'description'=>'Buckle Removal',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-005',
    		'description'=>'Canaliculo Dacryocysto Rhinostomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-006',
    		'description'=>'Capsulotomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-002',
    		'description'=>'Cataract + Pterygium',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-003',
    		'description'=>'Cataract Removal - Bilateral',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-001',
    		'description'=>'Cataract Removal - Unilateral',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'55000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-007',
    		'description'=>'Chalazion Excision',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-004',
    		'description'=>'Combined Cataract Extraction with Trabeculectomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-008',
    		'description'=>'Conjuctival Laceration Repair',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-005',
    		'description'=>'Conjuctivectomy And Cryoapplication',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-006',
    		'description'=>'Corneal Grafting',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-007',
    		'description'=>'Cryoretinopexy - Closed',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-008',
    		'description'=>'Cxyoretinopexy - Open',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-009',
    		'description'=>'Cyclocryoablation/Cyclocryotherapy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-009',
    		'description'=>'Dacrocystectomy With Pterygium - Excision',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-010',
    		'description'=>'Dacrocystorhinostomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-010',
    		'description'=>'Dacryocystectomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-011',
    		'description'=>'Diode Laser Cycloablation',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-012',
    		'description'=>'Diode Laser Panretinal Photocoagulation',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-013',
    		'description'=>'Ectropion Correction',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-014',
    		'description'=>'Endoscopic Optic Nerve Decompression',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-015',
    		'description'=>'Endoscopic Optic Orbital Decompression',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-016',
    		'description'=>'Entropion And Ectropion Repairs',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-011',
    		'description'=>'Evisceration/Enucleation/Extenteration',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-012',
    		'description'=>'Extracapsular Cataract Extraction',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-017',
    		'description'=>'Granuloma Excision (the eye)',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-018',
    		'description'=>'Intraocular Foreign Body Removal',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-019',
    		'description'=>'Iridectomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-020',
    		'description'=>'IRIS Prolapse - Repair',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-013',
    		'description'=>'Keratoplasty',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-021',
    		'description'=>'Lacrimal probing and Syringing',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-014',
    		'description'=>'Lensectomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-022',
    		'description'=>'Limbal Dermoid Removal',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-000',
    		'description'=>'Major Procedures/surgeries',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-023',
    		'description'=>'Membranectomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-015',
    		'description'=>'Paracentesis (A/C Washout)',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-016',
    		'description'=>'Penetrating Keratoplasty',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-017',
    		'description'=>'Perforating corneo - Scleral Injury',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-024',
    		'description'=>'Pterigium + Conjunctival Autograft',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-025',
    		'description'=>'Pterygium Excision',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-018',
    		'description'=>'Ptosis Repair',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-019',
    		'description'=>'Radial Keratotomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-026',
    		'description'=>'Removal Of Foreign Bodies From Conjuctiva And Cornea',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-020',
    		'description'=>'Retinal Detachment Surgery',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-021',
    		'description'=>'Scleral Buckling Procedures',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-022',
    		'description'=>'Socket Reconstruction',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-023',
    		'description'=>'Squint Surgery',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-027',
    		'description'=>'Syringing And Probing',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-024',
    		'description'=>'Trabeculectomy With Antimetabolites',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-025',
    		'description'=>'Traumatic Cannalicular Repair',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-026',
    		'description'=>'Traumatic Corneal And/Or Scleral Laceration Repair',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'75000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-028',
    		'description'=>'Traumatic Lid Laceration Repair',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-029',
    		'description'=>'Tumor Excision From Lid',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-030',
    		'description'=>'Tumours of IRIS',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-091-031',
    		'description'=>'Vitrectomy',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'30000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-027',
    		'description'=>'Vitrectomy + Retinal Detachment',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-092-027',
    		'description'=>'Vitrectomy + Retinal Detachment',
    		'parent_id'=>'NHIS-090-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-100-000',
    		'description'=>'PSYCHIATRIC SERVICES',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-001',
    		'description'=>'Electroconvulsive Therapy (Course of 6 sessions)',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'5000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-002',
    		'description'=>'Electro-Narcosis (Course of 10 sessions)',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'5000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-003',
    		'description'=>'Abreaction (Diagnostic and Forensic)',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'4000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-004',
    		'description'=>'Comprehensive Psychiatric Assessment',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-005',
    		'description'=>'Psychometric Assessment, Scoring & Interpretation',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-006',
    		'description'=>'Psychotherapies (Brief and others - Max: 10 sessions)',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-007',
    		'description'=>'Behaviour Modifications',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-008',
    		'description'=>'Sleep (REM) Deprivation Therapy',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'4000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-101-009',
    		'description'=>'Electroencephalography',
    		'parent_id'=>'NHIS-100-000',
    		'amount'=>'15000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-110-000',
    		'description'=>'PAEDIATRICS',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-001',
    		'description'=>'Critical Care (In ICU per day)',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-002',
    		'description'=>'Oxygen Therapy per day',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-003',
    		'description'=>'Nebulistation per day',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-004',
    		'description'=>'Gastric Lavage',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-005',
    		'description'=>'Aspirations/Paracentesis',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-006',
    		'description'=>'Tissue Biopsies',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-007',
    		'description'=>'Lumbar Puncture',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-008',
    		'description'=>'Phototherapy per day',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-009',
    		'description'=>'Incubator Care per day',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-010',
    		'description'=>'Exchange Blood Transfusion',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-111-011',
    		'description'=>'Subdural Tap',
    		'parent_id'=>'NHIS-110-000',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-000',
    		'description'=>'Paediatric Surgery',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-001',
    		'description'=>'Anal Dilatation',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-002',
    		'description'=>'Rectal Polyp',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-003',
    		'description'=>'Anal Transposition for Ectopic Anus',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-004',
    		'description'=>'Hernia - Epigastric',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-005',
    		'description'=>'Hernia - Umbilical',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-006',
    		'description'=>'Hernia-Inguinal - Bilateral',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-007',
    		'description'=>'Hernia-Inguirial -Unilateral',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-008',
    		'description'=>'Orchidopexy - Unilateral)',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'25000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-009',
    		'description'=>'Abdomino Perioneal (Exomphalos)',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-010',
    		'description'=>'Chordee Correction',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-011',
    		'description'=>'Closure Colostomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-012',
    		'description'=>'Colectomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-013',
    		'description'=>'Colon Transplant',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-014',
    		'description'=>'Cystolithotomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-015',
    		'description'=>'Oesophageal Atresia (Fistula)',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-016',
    		'description'=>'Gastrostomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-017',
    		'description'=>'Hernia - Diaphragmatic',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-018',
    		'description'=>'Meckels Diverticulectomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-019',
    		'description'=>'Meniscectomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-020',
    		'description'=>'Nephrolithotomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-021',
    		'description'=>'Orchidopexy - Bilateral',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-022',
    		'description'=>'Pyelolithotomy',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-023',
    		'description'=>'Pyeloplasty',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-112-024',
    		'description'=>'Pyloric Stenosis (Ramsted OP)',
    		'parent_id'=>'NHIS-112-000',
    		'amount'=>'50000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-120-000',
    		'description'=>'DENTAL SURGERY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-121-000',
    		'description'=>'X-Ray',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-121-001',
    		'description'=>'-Periapical',
    		'parent_id'=>'NHIS-121-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-121-002',
    		'description'=>'-Bitewings',
    		'parent_id'=>'NHIS-121-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-121-003',
    		'description'=>'-Panoramic View',
    		'parent_id'=>'NHIS-121-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-001',
    		'description'=>'Simple Extraction',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-002',
    		'description'=>'Amalgam Restoration',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-003',
    		'description'=>'Amalgam Restoration (Class II)',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-004',
    		'description'=>'Composite Restoration',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-005',
    		'description'=>'Pulpal Treatment For Children',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-006',
    		'description'=>'Surgical Extraction',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'8000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-007',
    		'description'=>'Periodontal Gum Treatment',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-008',
    		'description'=>'Fissure Selant',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'2000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-009',
    		'description'=>'Forcep Extraction',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-010',
    		'description'=>'Fistulectomy',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-011',
    		'description'=>'Fixation of fracture of the jaw',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-012',
    		'description'=>'Squestrectomy',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'45000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-122-013',
    		'description'=>'Tumour Excission',
    		'parent_id'=>'NHIS-120-000',
    		'amount'=>'25000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-130-000',
    		'description'=>'PHYSIOTHERAPY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-000',
    		'description'=>'Medical/Neurological Conditions',
    		'parent_id'=>'NHIS-130-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-001',
    		'description'=>'Cerebro-vascular Accident  per visit',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-002',
    		'description'=>'Chest Conditions per visit',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-003',
    		'description'=>'Diabetic Neuropathy',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-004',
    		'description'=>'Facial/Bell\'s Palsy',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-005',
    		'description'=>'Spinal Cord Lesion',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-006',
    		'description'=>'Parkinsonism',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-007',
    		'description'=>'Peripheral Nerve Injuries',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-008',
    		'description'=>'Sciatica',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-009',
    		'description'=>'Incontinence',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-131-010',
    		'description'=>'nerve root compression',
    		'parent_id'=>'NHIS-131-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-000',
    		'description'=>'Paediatric conditions',
    		'parent_id'=>'NHIS-130-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-001',
    		'description'=>'Erbs Palsy per visit',
    		'parent_id'=>'NHIS-132-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-002',
    		'description'=>'Talipes Manupulation per visit',
    		'parent_id'=>'NHIS-132-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-003',
    		'description'=>'Injection trauma/palsy per visit',
    		'parent_id'=>'NHIS-132-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-004',
    		'description'=>'congenital hip dislocation per visit',
    		'parent_id'=>'NHIS-132-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-005',
    		'description'=>'Fractures per visit',
    		'parent_id'=>'NHIS-132-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-132-006',
    		'description'=>'Polio deformities per visit',
    		'parent_id'=>'NHIS-132-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-000',
    		'description'=>'Surgical/Orthopaedic Conditions',
    		'parent_id'=>'NHIS-130-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-001',
    		'description'=>'ARTHRITIS  per visit',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-002',
    		'description'=>'SLIPPED DISC/LOW BACK PAIN  per visit',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-003',
    		'description'=>'Mouth Fracture',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-004',
    		'description'=>'Burns',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-005',
    		'description'=>'chest physiotherapy',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-006',
    		'description'=>'post surgical rehabilitation',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-007',
    		'description'=>'Fractures/dislocations/subluxation',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-133-008',
    		'description'=>'Spondylosis/scoliosis',
    		'parent_id'=>'NHIS-133-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-134-000',
    		'description'=>'O & G Conditions',
    		'parent_id'=>'NHIS-130-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-134-001',
    		'description'=>'P.I.D.',
    		'parent_id'=>'NHIS-134-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-134-002',
    		'description'=>'Obstetrics trauma/paresis/paralysis',
    		'parent_id'=>'NHIS-134-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-134-003',
    		'description'=>'Uterine Prolapse',
    		'parent_id'=>'NHIS-134-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-140-000',
    		'description'=>'HYSTEROSCOPIC PROCEDURES',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-140-001',
    		'description'=>'Ablation of Endometrium',
    		'parent_id'=>'NHIS-140-000',
    		'amount'=>'3000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-140-002',
    		'description'=>'Hysteroscopic Tubal Cannulation',
    		'parent_id'=>'NHIS-140-000',
    		'amount'=>'35000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-140-003',
    		'description'=>'Polypectomy',
    		'parent_id'=>'NHIS-140-000',
    		'amount'=>'35000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-140-004',
    		'description'=>'Uterine Synechia - Cutting',
    		'parent_id'=>'NHIS-140-000',
    		'amount'=>'35000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-150-000',
    		'description'=>'NEUROSURGERY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-151-001',
    		'description'=>'Repair & Transposition Nerve',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-151-002',
    		'description'=>'Skull Traction',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-151-003',
    		'description'=>'Subdural aspiration',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-151-004',
    		'description'=>'Ventricular Puncture',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-001',
    		'description'=>'Carpal Tunnel Release',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-002',
    		'description'=>'Cervical Ribs',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-003',
    		'description'=>'Cranio Ventrical',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-004',
    		'description'=>'Cranioplasty',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-005',
    		'description'=>'Cerebrospinal Fluid (CSF) Rhinorrohea',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-006',
    		'description'=>'Duroplasty',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-007',
    		'description'=>'Local Neurectomy',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-008',
    		'description'=>'Lumbar Disc',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-009',
    		'description'=>'Microdiscectomy - Cervical/Lumbar',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-010',
    		'description'=>'Neurolysis',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-011',
    		'description'=>'Peripheral Nerve Surgery',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-012',
    		'description'=>'Shunt',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-013',
    		'description'=>'Spine - Canal Stenosis',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-014',
    		'description'=>'Spine - Disc Cervical/Lumber',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );


    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-015',
    		'description'=>'Spine - Extradural Tumour',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-016',
    		'description'=>'Spine - Intradural Tumour',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-017',
    		'description'=>'Spine - Intramedullar Tumour',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-018',
    		'description'=>'Temporal Rhizotomy',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-019',
    		'description'=>'Trans Sphenoidal',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-020',
    		'description'=>'Vagotomy - Selective',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-021',
    		'description'=>'Vagotomy with Gastrojejunostomy',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-022',
    		'description'=>'Vagotomy with Pyeloroplasty',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-152-023',
    		'description'=>'Vagotomy - Highly Selective',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-001',
    		'description'=>'Burr hole',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-002',
    		'description'=>'Carotid Endartrectomy',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-003',
    		'description'=>'Craniostenosis',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-004',
    		'description'=>'Haematoma - Brain (head injuries)',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-005',
    		'description'=>'Haematoma - Brain (hypertensive)',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-006',
    		'description'=>'Haematoma (Child irritable subdural)',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-007',
    		'description'=>'Laminectomy with Fusion',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-008',
    		'description'=>'Meningocele - Anterior',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-009',
    		'description'=>'Posterior Fossa - Decompression',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-010',
    		'description'=>'Brachial Plexus - Repair',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-011',
    		'description'=>'Spina Bifida - Large - Repair',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-012',
    		'description'=>'Spina Bifida - Small - Repair',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-013',
    		'description'=>'Spine - Anterior Decompression',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-014',
    		'description'=>'Spine - Decompression & Fusion',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-015',
    		'description'=>'Tumours - Supratentorial',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-016',
    		'description'=>'Tumours Meninges - Gocussa',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-153-017',
    		'description'=>'Tumours Meninges - Posterior',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'85000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-154-001',
    		'description'=>'Anneurysm',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-154-002',
    		'description'=>'Anterior Encephalocele',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-154-003',
    		'description'=>'Meningocele - Lumbar',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-154-004',
    		'description'=>'Meningococle – Ocipital',
    		'parent_id'=>'NHIS-150-000',
    		'amount'=>'100000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-170-000',
    		'description'=>'RADIOGRAPHIC AND ULTRA SONOGRAPHIC INVESTIGATIONS
    		PRICE LIST',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-000',
    		'description'=>'UPPER LIMB',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-001',
    		'description'=>'Hand/Finger',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-002',
    		'description'=>'Wrist',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-003',
    		'description'=>'Forearm',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-004',
    		'description'=>'Elbow',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-005',
    		'description'=>'Humerus',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-006',
    		'description'=>'Shoulder',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-171-007',
    		'description'=>'Clavicle',
    		'parent_id'=>'NHIS-171-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-000',
    		'description'=>'LOWER LIMB',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-001',
    		'description'=>'Foot/Toe',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-002',
    		'description'=>'Ankle',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-003',
    		'description'=>'Leg (Tibia/Fibula)',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-004',
    		'description'=>'Knee',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-005',
    		'description'=>'Hip',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-006',
    		'description'=>'Femur Or Thigh',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-172-007',
    		'description'=>'Pelvic',
    		'parent_id'=>'NHIS-172-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-000',
    		'description'=>'THORAX',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-001',
    		'description'=>'Chest (PA/AP)',
    		'parent_id'=>'NHIS-173-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-002',
    		'description'=>'Chest (PA/Lateral)',
    		'parent_id'=>'NHIS-173-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-003',
    		'description'=>'Chest For Ribs (Oblique)',
    		'parent_id'=>'NHIS-173-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-004',
    		'description'=>'Apical/Lordotic',
    		'parent_id'=>'NHIS-173-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-005',
    		'description'=>'Sternum',
    		'parent_id'=>'NHIS-173-000',
    		'amount'=>'1200.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-173-006',
    		'description'=>'Thoracic Inlet',
    		'parent_id'=>'NHIS-173-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-000',
    		'description'=>'VERTEBRAE',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-001',
    		'description'=>'Cervical Spine',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-002',
    		'description'=>'Lateral Neck (Soft Tissue)',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-003',
    		'description'=>'Thoracic Spine',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-004',
    		'description'=>'Thoraco Lumber Spine',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-005',
    		'description'=>'Lumbar Spine',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-006',
    		'description'=>'Lumbo Sacral Spine',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-007',
    		'description'=>'Sacrum',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-008',
    		'description'=>'Sacro Illiac Joint (S.I.J.)',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-009',
    		'description'=>'Cervical Spine  (Oblique)',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-174-010',
    		'description'=>'Sacro-Coccxy',
    		'parent_id'=>'NHIS-174-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-175-000',
    		'description'=>'ABDOMEN',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-175-001',
    		'description'=>'Abdomen (Plain)',
    		'parent_id'=>'NHIS-175-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-175-002',
    		'description'=>'Abdomen (Erect/Supine)',
    		'parent_id'=>'NHIS-175-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-175-003',
    		'description'=>'Abdomen (Pregnancy)',
    		'parent_id'=>'NHIS-175-000',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-000',
    		'description'=>'SKULL SERIES',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-001',
    		'description'=>'Skull (AP/Lat)',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-002',
    		'description'=>'Skull (Pa/Lat/Townes)',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-003',
    		'description'=>'Mastoids',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-004',
    		'description'=>'Sinuses  AP/LNT/OM',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-005',
    		'description'=>'Mandibles (Jaw)',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-006',
    		'description'=>'Temporo-Mandibular Joints  (TMJ)',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-007',
    		'description'=>'Sella Turcica',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-008',
    		'description'=>'Tagential',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-176-009',
    		'description'=>'Occipito-Mental (OM)',
    		'parent_id'=>'NHIS-176-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-177-000',
    		'description'=>'DENTAL X-RAY',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-177-001',
    		'description'=>'Periapical',
    		'parent_id'=>'NHIS-177-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-177-002',
    		'description'=>'Bitewings',
    		'parent_id'=>'NHIS-177-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-177-003',
    		'description'=>'Panoramic View',
    		'parent_id'=>'NHIS-177-000',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-000',
    		'description'=>'SPECIAL INVESTIGATIONS',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-001',
    		'description'=>'Barium Swallow',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-002',
    		'description'=>'Barium Meal/Follow Through',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-003',
    		'description'=>'Barium Enema',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'13000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-004',
    		'description'=>'Intravenous Urography (IVU)',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'15000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-005',
    		'description'=>'Hysterosalpingogram  (HSG)',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-006',
    		'description'=>'Cysto-Urethrogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-007',
    		'description'=>'Fistulogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'9000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-008',
    		'description'=>'Myelogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'40000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-009',
    		'description'=>'Skeletal Survey (Adult)',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-010',
    		'description'=>'Electrocardiography (E C G)',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-011',
    		'description'=>'Echocardiography',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-012',
    		'description'=>'Electroencephalography',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'7000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-013',
    		'description'=>'Micturating Cyto-Urethrogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'7000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-014',
    		'description'=>'Phlebogram-One Leg',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-015',
    		'description'=>'Venogram-One Leg',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'12000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-016',
    		'description'=>'Arthrogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'9500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-017',
    		'description'=>'Sialogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'6000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-018',
    		'description'=>'Sinogram',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'6000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-019',
    		'description'=>'MRI Scan',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'70000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-020',
    		'description'=>'CTScan',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'60000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-178-021',
    		'description'=>'Mammography',
    		'parent_id'=>'NHIS-178-000',
    		'amount'=>'6000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-000',
    		'description'=>'ULTRASOUND SCANNING',
    		'parent_id'=>'NHIS-170-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-001',
    		'description'=>'Obstetric Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-002',
    		'description'=>'Abdominal Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-003',
    		'description'=>'Pelvic Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-004',
    		'description'=>'Breast Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-005',
    		'description'=>'Bladder Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-006',
    		'description'=>'Abdominal Pelvic Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-007',
    		'description'=>'Prostate Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-008',
    		'description'=>'Thyroid Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-009',
    		'description'=>'Testes/Scrotal Scan (Each)',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-010',
    		'description'=>'Ovulometry/TV Scan',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'3500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-179-011',
    		'description'=>'Trans-Fontanellar (Children)',
    		'parent_id'=>'NHIS-179-000',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-000',
    		'description'=>'CLINICAL CHEMISTRY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-001',
    		'description'=>'Full Electrolytes-(a-d)',
    		'parent_id'=>'NHIS-181-001',
    		'amount'=>'1600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-002',
    		'description'=>'a) Sodium',
    		'parent_id'=>'NHIS-181-001',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-003',
    		'description'=>'b) Potassium',
    		'parent_id'=>'NHIS-181-001',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-004',
    		'description'=>'c) Chloride',
    		'parent_id'=>'NHIS-181-001',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-005',
    		'description'=>'d) Bicarbonate',
    		'parent_id'=>'NHIS-181-001',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-006',
    		'description'=>'Urea',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-007',
    		'description'=>'Creatinine',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-008',
    		'description'=>'Liver Function Tests-(a-e)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'2300.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-009',
    		'description'=>'a) Total Bilirubin',
    		'parent_id'=>'NHIS-181-008',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-010',
    		'description'=>'b) Direct Bilirubin',
    		'parent_id'=>'NHIS-181-008',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-011',
    		'description'=>'c) Alkaline Phosphatase',
    		'parent_id'=>'NHIS-181-008',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-012',
    		'description'=>'d) Alanine Aminotransferase (SGPT)',
    		'parent_id'=>'NHIS-181-008',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-013',
    		'description'=>'e) Aspartate Aminotransferase (SGOT)',
    		'parent_id'=>'NHIS-181-008',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-014',
    		'description'=>'Total Protein',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-015',
    		'description'=>'Albumin',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-016',
    		'description'=>'Globulin',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-017',
    		'description'=>'Acid Phosphatase (Total & Prostatic)Each',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'900.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-018',
    		'description'=>'Cholesterol',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-019',
    		'description'=>'Triglyceride',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'900'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-020',
    		'description'=>'Amylase',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'650'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-021',
    		'description'=>'Fasting Blood Sugar',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-022',
    		'description'=>'Random Blood Sugar',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-023',
    		'description'=>'2-Hr Post Prandial Blood Sugar',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'700'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-024',
    		'description'=>'Oral Glucose Tolerence Test ( GTT)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'1500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-025',
    		'description'=>'Uric Acid',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-026',
    		'description'=>'Iron',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'600'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-027',
    		'description'=>'Magnesium',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'600'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-028',
    		'description'=>'Creatine Phosphokinase (CPK)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'1000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-029',
    		'description'=>'Phosphate',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'450'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-030',
    		'description'=>'Lactate Dehydrogenase (LDH)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'700'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-031',
    		'description'=>'CSF: Chloride',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'450'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-032',
    		'description'=>'CSF: Protein ( Total)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'450'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-033',
    		'description'=>'CSF: Glucose',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'450'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-034',
    		'description'=>'Urinalysis',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'350'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-035',
    		'description'=>'Urea Clearance',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'700'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-036',
    		'description'=>'Inorganic Phosphorus',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-037',
    		'description'=>'Prostatic Specific Antigen (PSA)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-038',
    		'description'=>'a) Total',
    		'parent_id'=>'NHIS-181-037',
    		'amount'=>'5000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-039',
    		'description'=>'b) Free',
    		'parent_id'=>'NHIS-181-037',
    		'amount'=>'1500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-040',
    		'description'=>'Creatinine Clearance',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'700'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-041',
    		'description'=>'Glycocylated Heamoglobin',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'1000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-042',
    		'description'=>'Pregnancy Test (a-b)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-043',
    		'description'=>'a) Urine',
    		'parent_id'=>'NHIS-181-042',
    		'amount'=>'450.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-044',
    		'description'=>'b) Blood',
    		'parent_id'=>'NHIS-181-042',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-045',
    		'description'=>'calcium',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-046',
    		'description'=>'Hormonal Profiles (A –F )',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-047',
    		'description'=>'a) Follicle Stimulating Hormone ( FSH)',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-048',
    		'description'=>'b) Luteinizing Hormone (LH)',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-049',
    		'description'=>'c) Prolactin',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-050',
    		'description'=>'d) Progesterone',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-051',
    		'description'=>'e) Testosterone',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-052',
    		'description'=>'f) Oestradiol (E2)',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-053',
    		'description'=>'Molar Pregnancy (HCG-B )',
    		'parent_id'=>'NHIS-181-046',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-054',
    		'description'=>'Thyroid Screening (a-c)',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-055',
    		'description'=>'a) Triiodothyronine (T3)',
    		'parent_id'=>'NHIS-181-054',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-056',
    		'description'=>'b) Thyroxine (T4)',
    		'parent_id'=>'NHIS-181-054',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-057',
    		'description'=>'c) Thyroid Stimulating Hormones(TSH)',
    		'parent_id'=>'NHIS-181-054',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-058',
    		'description'=>'Cardiac/Hypertensive Profile',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-059',
    		'description'=>'Kidney Profile',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-060',
    		'description'=>'Hepatic Profile',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-061',
    		'description'=>'Gamma-GT',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>'900.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-100',
    		'description'=>'HAEMATOLOGY & BLOOD GROUP SEROLOGY',
    		'parent_id'=>'NHIS-181-000',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-101',
    		'description'=>'Full Blood Count',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-102',
    		'description'=>'Haemoglobin (HB)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-103',
    		'description'=>'Packed Cell Volume (PCV)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-104',
    		'description'=>'White Cell Count (WBC)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-105',
    		'description'=>'Differential White Cell Count (WBC-DIFF)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'450.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-106',
    		'description'=>'Mean Corp. Hb Conc. (MCHC)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'250.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-107',
    		'description'=>'Mean Cell Volume (MCV)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'250.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-108',
    		'description'=>'Mean Cell Haemoglobin (MCH)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'250.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-109',
    		'description'=>'Red Cell Count (RBC)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-110',
    		'description'=>'Reticulocyte Count',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-111',
    		'description'=>'Platelets Count',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-112',
    		'description'=>'Erythrocyte Sedimentation Rate (ESR)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-113',
    		'description'=>'Bleeding Time',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-114',
    		'description'=>'Clotting Time',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-115',
    		'description'=>'Prothrombin Time (PT)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'1000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-116',
    		'description'=>'Kaolin-Cephalin Clotting Time',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'1200'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-117',
    		'description'=>'Partial Prothrombin Time (PTT)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'1000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-118',
    		'description'=>'HB Genotype',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-119',
    		'description'=>'Blood Grouping (ABO & RH)',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-120',
    		'description'=>'Sickling Test',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'400'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-121',
    		'description'=>'Direct Coomb\'s Test',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-122',
    		'description'=>'Indirect Coomb\'s Test',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'800.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-123',
    		'description'=>'Screening Of Donor Blood',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'3000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-124',
    		'description'=>'Unit Of Screened   Rh-Positive Blood',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'7000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-125',
    		'description'=>'Unit Of Screened Rh- Negative Blood',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'10000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-126',
    		'description'=>'Cross Match',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-127',
    		'description'=>'Le Cells',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-128',
    		'description'=>'G-6-PD Screening',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-129',
    		'description'=>'Osmotic Fragility',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'800.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-130',
    		'description'=>'Coagulation Profile',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-131',
    		'description'=>'Bone Marrow Examination',
    		'parent_id'=>'NHIS-181-100',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-200',
    		'description'=>'MICROBIOLOGY/PARASITOLOGY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-201',
    		'description'=>'URINE:',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-202',
    		'description'=>'a) Microscopy',
    		'parent_id'=>'NHIS-181-201',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-203',
    		'description'=>'b) Urinalysis',
    		'parent_id'=>'NHIS-181-201',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-204',
    		'description'=>'c) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-201',
    		'amount'=>'650.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-205',
    		'description'=>'STOOL:',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-206',
    		'description'=>'a) Microscopy R/E only',
    		'parent_id'=>'NHIS-181-205',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-207',
    		'description'=>'b) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-205',
    		'amount'=>'650.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-208',
    		'description'=>'c) Occult Blood-Fecal',
    		'parent_id'=>'NHIS-181-205',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-209',
    		'description'=>'BLOOD:',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-210',
    		'description'=>'a) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-209',
    		'amount'=>'1500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-211',
    		'description'=>'b) Malaria Parasites',
    		'parent_id'=>'NHIS-181-209',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-212',
    		'description'=>'c) Microfilaria',
    		'parent_id'=>'NHIS-181-209',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-213',
    		'description'=>'d) Trypanosomes',
    		'parent_id'=>'NHIS-181-209',
    		'amount'=>'400.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-214',
    		'description'=>'SEMINAL FLUID:',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-215',
    		'description'=>'a) Analysis',
    		'parent_id'=>'NHIS-181-214',
    		'amount'=>'1000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-216',
    		'description'=>'b) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-214',
    		'amount'=>'650'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-217',
    		'description'=>'SPUTUM:',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-218',
    		'description'=>'a) Gram Stain',
    		'parent_id'=>'NHIS-181-217',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-219',
    		'description'=>'b) Z.N stain for AFB',
    		'parent_id'=>'NHIS-181-217',
    		'amount'=>'1000'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-220',
    		'description'=>'c) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-217',
    		'amount'=>'650'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-221',
    		'description'=>'C.S.F',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-222',
    		'description'=>'a) Microscopy & Count',
    		'parent_id'=>'NHIS-181-221',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-223',
    		'description'=>'b) Gram Stain',
    		'parent_id'=>'NHIS-181-221',
    		'amount'=>'500'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-224',
    		'description'=>'c) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-221',
    		'amount'=>'650'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-225',
    		'description'=>'SWABS- Pus, Wound, Throat, Eye, Ear, Urethral, Aspirates, HVS,
    		Endo-cervical e.t.c.',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-226',
    		'description'=>'a) Microscopy',
    		'parent_id'=>'NHIS-181-225',
    		'amount'=>'350.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-227',
    		'description'=>'b) Gram stain (where applicable)',
    		'parent_id'=>'NHIS-181-225',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-228',
    		'description'=>'c) Culture & Sensitivity',
    		'parent_id'=>'NHIS-181-225',
    		'amount'=>'650.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-229',
    		'description'=>'SKIN:',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-230',
    		'description'=>'a) Snip (microfilaria)',
    		'parent_id'=>'NHIS-181-229',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-231',
    		'description'=>'b) Microscopy (KOH mount)',
    		'parent_id'=>'NHIS-181-229',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-232',
    		'description'=>'c) Scraping For Fungal Element (culture)',
    		'parent_id'=>'NHIS-181-229',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-233',
    		'description'=>'c) Heaf\'s Mantoux test',
    		'parent_id'=>'NHIS-181-229',
    		'amount'=>'800.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-300',
    		'description'=>'OTHER SEROLOGICAL TESTS',
    		'parent_id'=>'NHIS-181-200',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-300',
    		'description'=>'Widal Test',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-301',
    		'description'=>'VDRL',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-302',
    		'description'=>'Rheumatiod Factor',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-303',
    		'description'=>'Anti-Streptolysin O Titre (ASO Titre)',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-304',
    		'description'=>'Hepatitis B Surface Antigen (HbsAg)',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'800.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-305',
    		'description'=>'Hepatitis Confirmatory Test (Core Antigen)',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-306',
    		'description'=>'HIV Screening',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'1600.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-307',
    		'description'=>'HIV Confirmatory Test',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'4800.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-308',
    		'description'=>'AIDS Screening:',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-309',
    		'description'=>'a) CD4 Count',
    		'parent_id'=>'NHIS-181-308',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-310',
    		'description'=>'b) Viral load',
    		'parent_id'=>'NHIS-181-308',
    		'amount'=>'5000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-311',
    		'description'=>'Hepatitis C Antigen (HbcAg)',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'800.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-312',
    		'description'=>'Serum Tuberculosis Antigen',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-313',
    		'description'=>'Chlamydia Antigen',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-314',
    		'description'=>'Herpes Simplex 1 & 11 Antigen',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'3000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-315',
    		'description'=>'Toxoplasma Gondii',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2750.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-316',
    		'description'=>'Rubella',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-317',
    		'description'=>'Helicobacter Pylori',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2750.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-318',
    		'description'=>'Infectious Mononucleosis',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2750.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-319',
    		'description'=>'C-Reactive Protein',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-320',
    		'description'=>'Alpha-Feto Protein (AFP)',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'3000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-321',
    		'description'=>'Rhesus Factor Determination',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'1000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-322',
    		'description'=>'Vanilyl Mandellic Acid (VMA)',
    		'parent_id'=>'NHIS-181-300',
    		'amount'=>'2750.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-400',
    		'description'=>'HISTOLOGY/CYTOLOGY',
    		'parent_id'=>NULL,
    		'amount'=>0
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-401',
    		'description'=>'Tissue Biopsy',
    		'parent_id'=>'NHIS-181-400',
    		'amount'=>'4500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-402',
    		'description'=>'Lymph Nodes Biopsy',
    		'parent_id'=>'NHIS-181-400',
    		'amount'=>'4500.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-403',
    		'description'=>'Pap Smear',
    		'parent_id'=>'NHIS-181-400',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-404',
    		'description'=>'Fine Needle Aspiration',
    		'parent_id'=>'NHIS-181-400',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-403',
    		'description'=>'Pap Smear',
    		'parent_id'=>'NHIS-181-400',
    		'amount'=>'4000.00'
    	] );



    	Tariff::create( [
    		'tariff_code'=>'NHIS-181-404',
    		'description'=>'Fine Needle Aspiration',
    		'parent_id'=>'NHIS-181-400',
    		'amount'=>'4000.00'
    	] );
    }
}
