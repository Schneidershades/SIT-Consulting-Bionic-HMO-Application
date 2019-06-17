<?php

use Illuminate\Database\Seeder;
use App\Models\Drug;

class DrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Drug::create( [
    		'drug_name'=>'Methylene blue',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5ml',
    		'presentation'=>'Amp.',
    		'amount'=>400.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methylene blue',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50 ml',
    		'presentation'=>'Amp.',
    		'amount'=>2500.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Naloxone',
    		'dosage_form'=>'Injection (HCL)',
    		'strengths'=>'400mcg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>3500.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phytomenadione (Vitamin K1)',
    		'dosage_form'=>'Ampoule',
    		'strengths'=>'10mg/ml in 1ml',
    		'presentation'=>'Amp.',
    		'amount'=>180.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Potassium ferric hexacyanoferrate(11) (Prussian blue)',
    		'dosage_form'=>'Powder for oral administration',
    		'strengths'=>'',
    		'presentation'=>'Powder',
    		'amount'=>0,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Protamine sulphate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10mg/ml in 5 ml',
    		'presentation'=>'Amp.',
    		'amount'=>750.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium calcium edetate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'200mg/ml in 5 ml',
    		'presentation'=>'Amp.',
    		'amount'=>500.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium nitrite',
    		'dosage_form'=>'Injection',
    		'strengths'=>'30mg/ml in 10 ml vial',
    		'presentation'=>'Vial',
    		'amount'=>330.00,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium thiosulphate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500mg/ml',
    		'presentation'=>'Amp',
    		'amount'=>0,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'NON-SPECIFIC ANTIDOTES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Activated charcoal',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Tablet',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'NON-SPECIFIC ANTIDOTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Activated charcoal',
    		'dosage_form'=>'Granule',
    		'strengths'=>'Powder for',
    		'presentation'=>'5g/satchet',
    		'amount'=>0,
    		'parent_id'=>'50 g pack'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbamazepine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbamazepine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mg SR',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbamazepine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'100ml',
    		'amount'=>1500.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Diazepam',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5mg/ml in 2ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ethosuximide',
    		'dosage_form'=>'Caps/tablets',
    		'strengths'=>'250 mg',
    		'presentation'=>'Caps.',
    		'amount'=>55.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ethosuximide',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'250mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>0,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Magnesium sulphate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50% (500 mg/ml) in 2 ml',
    		'presentation'=>'Amp.',
    		'amount'=>400.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Paraldehyde',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10ml',
    		'presentation'=>'5 mls',
    		'amount'=>0,
    		'parent_id'=>'200.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenobarbital',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'15mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenobarbital',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'30mg',
    		'presentation'=>'60mg',
    		'amount'=>0,
    		'parent_id'=>'10.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenobarbital',
    		'dosage_form'=>'Elixir',
    		'strengths'=>'Syrup',
    		'presentation'=>'15mg/5ml',
    		'amount'=>0,
    		'parent_id'=>'250.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenobarbital',
    		'dosage_form'=>'Injection',
    		'strengths'=>'200mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenytoin Sodium',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'100mg',
    		'presentation'=>'50 mg',
    		'amount'=>25,
    		'parent_id'=>'mg'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium valproate',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium valproate',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'500mg SR',
    		'presentation'=>'Tab',
    		'amount'=>140.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium valproate',
    		'dosage_form'=>'Elixir/syrup',
    		'strengths'=>'200mg/5ml',
    		'presentation'=>'200mls',
    		'amount'=>3500.00,
    		'parent_id'=>'ANTI-CONVULSANTS (ANTI-EPILEPTICS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-INFECTIVE DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'AMOEBICIDES/ANTIFLAGELLATE',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mg',
    		'presentation'=>'Tab.',
    		'amount'=>6.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'200mg/5ml',
    		'presentation'=>'60mls',
    		'amount'=>100.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'IV Injection',
    		'strengths'=>'500mg in 100ml bottle',
    		'presentation'=>'100mls',
    		'amount'=>100.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Suppository',
    		'strengths'=>'500mg',
    		'presentation'=>'supp/ovule',
    		'amount'=>100.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Secnidazole',
    		'dosage_form'=>'4 Tablets (single dose)',
    		'strengths'=>'500mg',
    		'presentation'=>'4 tabs',
    		'amount'=>360.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tinidazole',
    		'dosage_form'=>'4 Tablets (Single dose)',
    		'strengths'=>'500mg',
    		'presentation'=>'4 tabs',
    		'amount'=>100.00,
    		'parent_id'=>'AMOEBICIDES/ANTIFLAGELLATE'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTHELMINTICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Albendazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'2 tabs',
    		'amount'=>150.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Albendazole',
    		'dosage_form'=>'Suspension Oral',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'30mls',
    		'amount'=>180.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levamisole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levamisole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'40mg/5ml',
    		'presentation'=>'30mls',
    		'amount'=>150.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mebendazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'350.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mebendazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500 mg',
    		'presentation'=>'x 1',
    		'amount'=>350.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mebendazole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'30mls',
    		'amount'=>900.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pyrantel Pamoate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'125mg (pamoate)',
    		'presentation'=>'6`s',
    		'amount'=>250.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pyrantel Pamoate',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'125mg/5ml',
    		'presentation'=>'15mls',
    		'amount'=>250.00,
    		'parent_id'=>'ANTHELMINTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTISCHISTOSOMAL     DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Praziquantel',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'600mg',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTISCHISTOSOMAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIFILARIAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ivermectin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'6mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIFILARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-MALARIAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'a-B–Artemether Injection',
    		'dosage_form'=>'Ampoules',
    		'strengths'=>'150mg/2ml',
    		'presentation'=>'Amp x 3s',
    		'amount'=>1350.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter',
    		'dosage_form'=>'Injection (Phosphate)',
    		'strengths'=>'80mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter',
    		'dosage_form'=>'Injection (Phosphate)',
    		'strengths'=>'40mg/ml in 1ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter + Lumefantrine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg/120mg',
    		'presentation'=>'Tab x 12s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter + Lumefantrine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'80mg/480mg',
    		'presentation'=>'Tab x 6s',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter + Lumefantrine',
    		'dosage_form'=>'Paediatric Dispersible Tabet',
    		'strengths'=>'10mg/60mg',
    		'presentation'=>'Tab x 24s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter + Lumefantrine',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'180mg/1080mg',
    		'presentation'=>'60mls',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artemeter + Lumefantrine',
    		'dosage_form'=>'Suppossitory',
    		'strengths'=>'20mg/120mg',
    		'presentation'=>'x 6s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artesunate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg/tab',
    		'presentation'=>'Tablet',
    		'amount'=>40.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artesunate',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'80mg/5ml',
    		'presentation'=>'100ml',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate  + Sulfadoxine+ Pyrimethamine',
    		'dosage_form'=>'Tablet (Adult)',
    		'strengths'=>'200mg/500mg/25mg',
    		'presentation'=>'Tab.x3s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate  + Sulfadoxine + Pyrimethamine',
    		'dosage_form'=>'(Paed)',
    		'strengths'=>'100mg/250mg/12.5mg',
    		'presentation'=>'Tab.x3s',
    		'amount'=>400.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate + Amodiaquine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg/200mg',
    		'presentation'=>'Tab x 12s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate + Amodiaquine',
    		'dosage_form'=>'DS',
    		'strengths'=>'200mg/600mg',
    		'presentation'=>'6s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate + Amodiaquine',
    		'dosage_form'=>'Paediatric Powder',
    		'strengths'=>'25mg/75mg',
    		'presentation'=>'Sachet x 6s',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate + Mefloquine',
    		'dosage_form'=>'Tablet (Adult)',
    		'strengths'=>'200mg/250mg',
    		'presentation'=>'Tab x 6s',
    		'amount'=>1000.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atersunate + Mefloquine',
    		'dosage_form'=>'(Paed)',
    		'strengths'=>'100mg/125mg',
    		'presentation'=>'Tab x 6s',
    		'amount'=>350.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloroquine (restricted)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Capsule',
    		'presentation'=>'300 mg',
    		'amount'=>0,
    		'parent_id'=>'Tab/ Caps.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloroquine (restricted)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'200mg/5ml',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'30.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloroquine (restricted)',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'75mg/5ml',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'120.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dihydroartemisinin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'60mg/Tablet',
    		'presentation'=>'8s',
    		'amount'=>640.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dihydroartemisinin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'160mg/80mls',
    		'presentation'=>'80mls',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dihydroartemisinin  + Piperaquine phosphate',
    		'dosage_form'=>'Tab',
    		'strengths'=>'40mg/320mg',
    		'presentation'=>'Tabx8s',
    		'amount'=>650.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dihydroartemisinin  + Piperaquine phosphate',
    		'dosage_form'=>'',
    		'strengths'=>'30mg/225mg',
    		'presentation'=>'Tabx8s',
    		'amount'=>550.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dihydroartemisinin  + Piperaquine phosphate',
    		'dosage_form'=>'DS',
    		'strengths'=>'62.5mg/375mg',
    		'presentation'=>'Tabx8s',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dihydroartemisinin  + Piperaquine phosphate',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'80/640mg',
    		'presentation'=>'80mls Bottle',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Proguanil',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg (HC1)',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pyrimethamine + Sulphadoxine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg  Pyrimethamine +500mg Sulphadoxine',
    		'presentation'=>'3s',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pyrimethamine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg  Pyrimethamine',
    		'presentation'=>'Tab',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Quinine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'300mg',
    		'presentation'=>'Tab',
    		'amount'=>45.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Quinine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'300mg (dihydrochloride)/ml in 2ml amp',
    		'presentation'=>'Amp.',
    		'amount'=>100.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Quinine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'',
    		'presentation'=>'100ml',
    		'amount'=>450.00,
    		'parent_id'=>'ANTI-MALARIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTITRYPANOSOMAL',
    		'dosage_form'=>'ANTILEISHMANIASIS   DRUGS',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Meglumine antimonate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'',
    		'presentation'=>'30% equiv to 8.5% of total antimony in 5ml amp',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Meglumine antimonate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'',
    		'presentation'=>'300mg (isethionate)/ vial',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Melarsoprol',
    		'dosage_form'=>'Injection',
    		'strengths'=>'3.6% solution in propylene glycol',
    		'presentation'=>'Vial',
    		'amount'=>0,
    		'parent_id'=>'ANTITRYPANOSOMAL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pentamidine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'10% of total antimony',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium stibogluconate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1gm/vial',
    		'presentation'=>'Amp',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Suramin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIBACTERIAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'250mg',
    		'presentation'=>'Caps.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'500 mg',
    		'presentation'=>'Caps.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin',
    		'dosage_form'=>'Powder for oral  suspension',
    		'strengths'=>'125mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500mg in vials',
    		'presentation'=>'Vial',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin plus Clavulanic Acid (Co-amoxiclav)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Capsules',
    		'presentation'=>'250 mg amoxycillin (Trihydrate) +125 mg clavulanic Acid (Potassium Salt)',
    		'amount'=>0,
    		'parent_id'=>'60.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin plus Clavulanic Acid (Co-amoxiclav)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Capsules',
    		'presentation'=>'500mg     amoxycillin (Trihydrate) +        125mg clvulanic acid(potassium salt)',
    		'amount'=>0,
    		'parent_id'=>'100.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin plus Clavulanic Acid (Co-amoxiclav)',
    		'dosage_form'=>'Powder for oral suspension',
    		'strengths'=>'200 mg Amoxycillin (trihydrate) + 28 mg Clavulanic acid (Potassium salt)/5 ml',
    		'presentation'=>'100mls',
    		'amount'=>1150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin plus Clavulanic Acid (Co-amoxiclav)',
    		'dosage_form'=>'Powder for oral suspension',
    		'strengths'=>'400 mg Amoxycillin (trihydrate) + 57 mg Clavulanic acid (Potassium salt)/5 ml',
    		'presentation'=>'100mls',
    		'amount'=>1500.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin plus Clavulanic Acid (Co-amoxiclav)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500 mg Amoxycillin (Sodium salt) + 100 mg Clavulanic acid (Potassium salt) in vial',
    		'presentation'=>'Vial',
    		'amount'=>450.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amoxycillin plus Clavulanic Acid (Co-amoxiclav)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1g Amoxycillin (Sodium salt) + 200 mg Clavulanic acid (Potassium salt) in vial',
    		'presentation'=>'Vial',
    		'amount'=>700.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ampicillin + Cloxacillin',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'250mg of each constituent',
    		'presentation'=>'Caps.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ampicillin + Cloxacillin',
    		'dosage_form'=>'Powder for oral suspension',
    		'strengths'=>'125mg of each/5ml',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ampicillin + Cloxacillin',
    		'dosage_form'=>'Neonatal Drops',
    		'strengths'=>'Ampicillin  60mg + Cloxacillin 30mg/0.6mls',
    		'presentation'=>'8mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ampicillin + Cloxacillin',
    		'dosage_form'=>'Neonatal injection',
    		'strengths'=>'Ampicillin 50mg + cloxacillin 25 mg',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ampicillin + Cloxacillin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Ampicillin 250mg+Cloxacillin 250mg per vial (sodium salt of each)',
    		'presentation'=>'Amp.',
    		'amount'=>120.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Azithromycin',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'250mg',
    		'presentation'=>'Caps.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Azithromycin',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'500mg',
    		'presentation'=>'Caps.',
    		'amount'=>350.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Azithromycin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'200mg/ 5ml',
    		'presentation'=>'30mls',
    		'amount'=>1000.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzathine- Benzylepenicillin',
    		'dosage_form'=>'Injections',
    		'strengths'=>'2.4 M.U. of benzylpenicillin',
    		'presentation'=>'Vial',
    		'amount'=>400.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzylepenicillin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'1.0 MU Vial',
    		'amount'=>0,
    		'parent_id'=>'50.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzylepenicillin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'5 MU Vial',
    		'amount'=>0,
    		'parent_id'=>'100.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefixime',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mg',
    		'presentation'=>'Tab',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefixime',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefixime',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'100ml',
    		'amount'=>750.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefotaxime',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500mg',
    		'presentation'=>'Vial',
    		'amount'=>300.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ceftazidime',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1gm',
    		'presentation'=>'Vial',
    		'amount'=>800.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ceftriaxone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'250mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'500.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ceftriaxone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500mg I.M.',
    		'presentation'=>'Vial',
    		'amount'=>500.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ceftriaxone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1g IV',
    		'presentation'=>'Vial',
    		'amount'=>700.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefuroxime',
    		'dosage_form'=>'Tablets (axetil)',
    		'strengths'=>'250mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'100.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefuroxime',
    		'dosage_form'=>'Tablets (axetil)',
    		'strengths'=>'500 mg',
    		'presentation'=>'Tab.',
    		'amount'=>160.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefuroxime',
    		'dosage_form'=>'Suspension (axetil)',
    		'strengths'=>'125mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>1200.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefuroxime',
    		'dosage_form'=>'Injection (sodium salt)',
    		'strengths'=>'750mg',
    		'presentation'=>'Vial',
    		'amount'=>500.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cefuroxime',
    		'dosage_form'=>'Injection (sodium salt)',
    		'strengths'=>'250 mg',
    		'presentation'=>'Vial',
    		'amount'=>400.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cephalexin',
    		'dosage_form'=>'Capsules/Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Caps/Tab',
    		'amount'=>35.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cephalexin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'125mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>480.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cephalexin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'250mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>650.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloramphenicol (restricted)',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'250mg',
    		'presentation'=>'Caps.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloramphenicol (restricted)',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'Oral',
    		'presentation'=>'125mg/5ml (Palmitate)',
    		'amount'=>0,
    		'parent_id'=>'200.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloramphenicol (restricted)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1g (sodium succinate) in vial',
    		'presentation'=>'Vial',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ciprofloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg (HC1)',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ciprofloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500 mg (Hcl)',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ciprofloxacin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'I.V. 2mg/ml (lactate) in 50 and 100ml vials',
    		'presentation'=>'Vial',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clarithromycin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg',
    		'presentation'=>'Tab.',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clarithromycin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Tab.',
    		'amount'=>120.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clarithromycin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'125mg',
    		'presentation'=>'100ml',
    		'amount'=>880.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clindamycin',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'HCL 150mg',
    		'presentation'=>'Cap',
    		'amount'=>120.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clindamycin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Phosphate 150mg/ml',
    		'presentation'=>'Amp',
    		'amount'=>180.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cloxacillin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'250mg',
    		'amount'=>0,
    		'parent_id'=>'Vial'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cloxacillin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'500 mg in vial',
    		'amount'=>0,
    		'parent_id'=>'70.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cloxacillin',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'250mg',
    		'presentation'=>'Caps.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cloxacillin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'oral',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'100mls'
    	] );



    	Drug::create( [
    		'drug_name'=>'Co-trimoxazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mg Sulphamethoxazole  +80mg  Trimethoprim',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Co-trimoxazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'800mg Sulphamethoxazole  +160mg Trimethoprim',
    		'presentation'=>'Tab.(DS)',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Co-trimoxazole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'Sulphamethoxazole   200 mg +40mg Trimethoprim /5ml.',
    		'presentation'=>'60mls',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Doxycycline',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'100mg',
    		'presentation'=>'Caps.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Erythromycin',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'capsules',
    		'presentation'=>'enteric',
    		'amount'=>0,
    		'parent_id'=>'250mg stearate or ethylsuccinate)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Erythromycin',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'capsules',
    		'presentation'=>'enteric',
    		'amount'=>0,
    		'parent_id'=>'500mg (stearate or ethylsuccinate)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Erythromycin',
    		'dosage_form'=>'Suspension oral',
    		'strengths'=>'125mg/5ml (stearate or Ethylsuccinate)',
    		'presentation'=>'60mls',
    		'amount'=>400.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentamycin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'80mg/mls',
    		'presentation'=>'40 mg/2mls (Sulphate)',
    		'amount'=>0,
    		'parent_id'=>'20.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentamycin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'20mg/2ml',
    		'presentation'=>'Amp.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levofloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levofloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Tab.',
    		'amount'=>80.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levofloxacin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500mg/100mls Infusion',
    		'presentation'=>'100mls',
    		'amount'=>500.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lincomycin',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'500 mg',
    		'presentation'=>'Caps.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lincomycin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'250mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>1150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lincomycin',
    		'dosage_form'=>'injection (Phosphate)',
    		'strengths'=>'150 mg/ml in 2 ml',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mg',
    		'presentation'=>'Tab.',
    		'amount'=>6.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'200mg/5ml',
    		'presentation'=>'60mls',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metronidazole',
    		'dosage_form'=>'IV Injection',
    		'strengths'=>'500mg in 100ml bottle',
    		'presentation'=>'100mls',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nitrofurantoin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nitrofurantoin',
    		'dosage_form'=>'',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ofloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>50.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ofloxacin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'200mg/100ml Infusion',
    		'presentation'=>'100mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pefloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mg',
    		'presentation'=>'Tab.',
    		'amount'=>80.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenoxymethyl- Penicillin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenoxymethyl- Penicillin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'250mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rifampicin',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'150mg',
    		'presentation'=>'300mg',
    		'amount'=>0,
    		'parent_id'=>'15.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Secnidazole',
    		'dosage_form'=>'4 Tablets (single dose)',
    		'strengths'=>'See section 6.1',
    		'presentation'=>'NULL',
    		'amount'=>360.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sparfloxacin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tetracycline',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'250mg (Hydrochloride)',
    		'presentation'=>'Caps.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tinidazole',
    		'dosage_form'=>'4 Tablets (Single dose)',
    		'strengths'=>'See section 6.1',
    		'presentation'=>'NULL',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIBACTERIAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTILEPROSY    DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clofazimine',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'50 mg',
    		'presentation'=>'100 mg',
    		'amount'=>0,
    		'parent_id'=>'15.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dapsone',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'50mg',
    		'presentation'=>'100 mg',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rifampicin',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'300 mg',
    		'presentation'=>'Caps.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTILEPROSY    DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rifampicin',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'150 mg',
    		'presentation'=>'NULL',
    		'amount'=>15.00,
    		'parent_id'=>'ANTILEPROSY    DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'SYSTEMIC ANTIFUNGAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amphotericin B',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'50 mg/vial',
    		'amount'=>0,
    		'parent_id'=>'3465.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluconazole',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'50 mg',
    		'presentation'=>'Caps.',
    		'amount'=>60.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluconazole',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'150 mg',
    		'presentation'=>'Caps.',
    		'amount'=>450.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluconazole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'50mg/5ml',
    		'presentation'=>'35mls',
    		'amount'=>900.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluconazole',
    		'dosage_form'=>'Injection',
    		'strengths'=>'I.V. 2 mg/ml in 0.9 % sodium chloride',
    		'presentation'=>'Vial',
    		'amount'=>500.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Griseofulvin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Griseofulvin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'125mg/ 5ml',
    		'presentation'=>'100mls',
    		'amount'=>450.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Itraconazole',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'100mg',
    		'presentation'=>'Cap.',
    		'amount'=>150.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Itraconazole',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'10mg/ml',
    		'presentation'=>'Suspension',
    		'amount'=>340.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ketoconazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250 mg',
    		'presentation'=>'Tab.',
    		'amount'=>500.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nystatin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500000 units',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'40.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nystatin',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'100000 units/ml',
    		'presentation'=>'30mls',
    		'amount'=>500.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nystatin',
    		'dosage_form'=>'lozenges',
    		'strengths'=>'100000 units/ml',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nystatin',
    		'dosage_form'=>'Pessary',
    		'strengths'=>'100000 units',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Terbinafine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg',
    		'presentation'=>'Tab.',
    		'amount'=>150.00,
    		'parent_id'=>'SYSTEMIC ANTIFUNGAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIVIRAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aciclovir',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>50.00,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aciclovir',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'400 mg',
    		'presentation'=>'Tab.',
    		'amount'=>75.00,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aciclovir',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'200 mg/5 ml',
    		'presentation'=>'125mls',
    		'amount'=>620.00,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aciclovir',
    		'dosage_form'=>'Cream',
    		'strengths'=>'5%',
    		'presentation'=>'Tube',
    		'amount'=>600.00,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aciclovir',
    		'dosage_form'=>'Injection',
    		'strengths'=>'IV Sodium salt 250mg/vial',
    		'presentation'=>'Vial',
    		'amount'=>200.00,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150 mg',
    		'presentation'=>'Tab',
    		'amount'=>50.00,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine *',
    		'dosage_form'=>'Solution',
    		'strengths'=>'50mg/5ml',
    		'presentation'=>'240 mls',
    		'amount'=>0,
    		'parent_id'=>'ANTIVIRAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI RETROVIRAL (ARV) DRUGS (EXCLUSION LIST)',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'1. Protease inhibitors',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI RETROVIRAL (ARV) DRUGS (EXCLUSION LIST)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Indinavir    (IDV)  *',
    		'dosage_form'=>'Capsule (Sulphate)',
    		'strengths'=>'200 mg',
    		'presentation'=>'333mg',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nelfinavir   (NFV)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250 mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ritonavir   (RTV)  *',
    		'dosage_form'=>'Oral liqiud',
    		'strengths'=>'400mg/5ml',
    		'presentation'=>'bottle',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Saquinavir  (SQV)  *',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'100mg',
    		'presentation'=>'Capsule',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Saquinavir  (SQV)  *',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'200mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lopinavir + ritonavir  LPV/r)  *',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'133.3mg+33.3mg',
    		'presentation'=>'Capsule',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lopinavir + ritonavir  LPV/r)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg/25mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lopinavir + ritonavir  LPV/r)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg/50mg',
    		'presentation'=>'inch',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lopinavir + ritonavir  LPV/r)  *',
    		'dosage_form'=>'Oral liquid',
    		'strengths'=>'400mg/100mg/ 5ml',
    		'presentation'=>'Bottle',
    		'amount'=>0,
    		'parent_id'=>'Protease inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nucleoside Reverse Transcriptase Inhibitors',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine (3TC)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150 mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine (3TC)  *',
    		'dosage_form'=>'Solution',
    		'strengths'=>'5mg/ml',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zidovudine (ZDV)  *',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'100 mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zidovudine (ZDV)  *',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'250 mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zidovudine (ZDV)  *',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'50 mg/5ml',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Abacavir (ABC)  *',
    		'dosage_form'=>'Tablet  (sulfate)',
    		'strengths'=>'300mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Abacavir (ABC)  *',
    		'dosage_form'=>'Liquid      ',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );

    	Drug::create( [
    		'drug_name'=>'Stavudine (d4T)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zalcitabine (ddC)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'750ug',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'125mg',
    		'presentation'=>'Cap',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'200mg',
    		'presentation'=>'250mg',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'400mg',
    		'presentation'=>'inch',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'50mg',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'150mg',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg',
    		'presentation'=>'inch',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Powder for oral dosage',
    		'strengths'=>'100mg167mg',
    		'presentation'=>'Packets',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Didanosine  (ddI)  *',
    		'dosage_form'=>'Powder for oral dosage',
    		'strengths'=>'200mg',
    		'presentation'=>'Packets',
    		'amount'=>0,
    		'parent_id'=>'Nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Non-nucleoside Reverse Transcriptase Inhibitors',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nevirapine  (NVP)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200 mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nevirapine  (NVP)  *',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'50 mg/5ml',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Efavirenz  (EFV or EFZ)  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'600mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Efavirenz  (EFV or EFZ)  *',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'50mg',
    		'presentation'=>'Caps',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Efavirenz  (EFV or EFZ)  *',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'100mg',
    		'presentation'=>'200mg',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Efavirenz  (EFV or EFZ)  *',
    		'dosage_form'=>'Oral liquid',
    		'strengths'=>'150mg/5ml',
    		'presentation'=>'Bottle',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'4. Fixed dose combinations',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + nevirapine + stavudine  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150mg+200mg+30mg',
    		'presentation'=>'Tab x60s',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + nevirapine + stavudine  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150mg+200mg+30mg',
    		'presentation'=>'Tab x60s',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + nevirapine + stavudine  *',
    		'dosage_form'=>'Tablet(Dispersible',
    		'strengths'=>'30mg+50mg+6mg',
    		'presentation'=>'Tab x60s',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + nevirapine + stavudine  *',
    		'dosage_form'=>'Tablet(Dispersible',
    		'strengths'=>'60mg+100mg+12mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + nevirapine + Zidovudine  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'30mg+50mg+60mg/',
    		'presentation'=>'Tab x 60s',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + nevirapine + Zidovudine  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150mg+200mg+300mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + Zidovudine  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'30mg + 60mg',
    		'presentation'=>'Tab x 60s',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lamivudine + Zidovudine  *',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150mg + 300mg',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'Non-nucleoside Reverse Transcriptase Inhibitors'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-MIGRAINE DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ergotamine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Tartrate',
    		'presentation'=>'2g',
    		'amount'=>0,
    		'parent_id'=>'50.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ergotamine Tartrate + Caffeine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1mg / 100mg',
    		'presentation'=>'Tablet',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI-MIGRAINE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pizotifen',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'0.5mg',
    		'presentation'=>'1.5 mg',
    		'amount'=>0,
    		'parent_id'=>'35.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pizotifen',
    		'dosage_form'=>'Elixir',
    		'strengths'=>'0.25 mg/ml',
    		'presentation'=>'100mls',
    		'amount'=>2000.00,
    		'parent_id'=>'ANTI-MIGRAINE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propranolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'40mg/',
    		'presentation'=>'Tab',
    		'amount'=>9.00,
    		'parent_id'=>'ANTI-MIGRAINE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'IMMUNO SUPPRESIVE DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Azathioprine (Restricted)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50 mg',
    		'presentation'=>'Tablet',
    		'amount'=>0,
    		'parent_id'=>'IMMUNO SUPPRESIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Azathioprine (Restricted)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'50 mg/vial',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.5 mg',
    		'presentation'=>'4 mg',
    		'amount'=>0,
    		'parent_id'=>'10.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Sodium PO4',
    		'presentation'=>'4 mg/ml',
    		'amount'=>0,
    		'parent_id'=>'20.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methotrexate (restricted)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2.5 mg',
    		'presentation'=>'Tab',
    		'amount'=>40.00,
    		'parent_id'=>'IMMUNO SUPPRESIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methotrexate (restricted)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50 mg/vial sodium salt',
    		'presentation'=>'Vial',
    		'amount'=>500.00,
    		'parent_id'=>'IMMUNO SUPPRESIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prednisolone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5 mg',
    		'presentation'=>'Tab',
    		'amount'=>5.00,
    		'parent_id'=>'IMMUNO SUPPRESIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DRUGS FOR PARKINONSIM AND OTHER NEUROLOGICAL  DISORDERS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIPARKINSONISM  DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DRUGS FOR PARKINONSIM AND OTHER NEUROLOGICAL  DISORDERS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzhexol',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'2mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIPARKINSONISM  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzhexol',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'5 mg (as HCl)',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIPARKINSONISM  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Biperiden',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2mg   (as HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>3.00,
    		'parent_id'=>'ANTIPARKINSONISM  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Biperiden',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5mg/ml (as lactate) in 1ml ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIPARKINSONISM  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levodopa + Carbidopa',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Levodopa250mg + Carbidopa 25mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'80.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levodopa + Carbidopa',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Levodopa100 mg + Carbidopa 10 mg',
    		'presentation'=>'Tab.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTIPARKINSONISM  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DRUGS FOR MYASTHENIA GRAVIS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DRUGS FOR PARKINONSIM AND OTHER NEUROLOGICAL  DISORDERS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Neostigmine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'(Bromide) 15mg/ml',
    		'presentation'=>'Inj',
    		'amount'=>250.00,
    		'parent_id'=>'DRUGS FOR MYASTHENIA GRAVIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Neostigmine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'15mg (Bromide)',
    		'presentation'=>'Tab.',
    		'amount'=>140.00,
    		'parent_id'=>'DRUGS FOR MYASTHENIA GRAVIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pyridostigmine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'60 mg (Bromide)',
    		'presentation'=>'Tab.',
    		'amount'=>150.00,
    		'parent_id'=>'DRUGS FOR MYASTHENIA GRAVIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DRUGS FOR SUBARACHOID HAEMORRHAGE',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DRUGS FOR PARKINONSIM AND OTHER NEUROLOGICAL  DISORDERS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amino caporic acid (AA)  plus lipid thromboplastin (LT)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 mg AA + 2 mg/ml LT in 5 ml',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DRUGS FOR SUBARACHOID HAEMORRHAGE'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTISEPTICS AND DISINFECTANTS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorhexidine',
    		'dosage_form'=>'Solution',
    		'strengths'=>'5%   (Gluconate) for dilution',
    		'presentation'=>'500mls',
    		'amount'=>500.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorhexidine + Cetrimide',
    		'dosage_form'=>'Solution',
    		'strengths'=>'Cetrimide 15% + 1.5% chlorhexidine gluconate for dilution',
    		'presentation'=>'500mls',
    		'amount'=>400.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloroxylenol',
    		'dosage_form'=>'Solution',
    		'strengths'=>'5% for dilution',
    		'presentation'=>'250mls',
    		'amount'=>400.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloroxylenol',
    		'dosage_form'=>'Solution',
    		'strengths'=>'5% for dilution',
    		'presentation'=>'125mls',
    		'amount'=>400.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Coal tar',
    		'dosage_form'=>'Solution',
    		'strengths'=>'5%',
    		'presentation'=>'Solution',
    		'amount'=>200.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Compound Tincture of Benzoin (TBC)',
    		'dosage_form'=>'Liquid',
    		'strengths'=>'2%',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dichloroxylenol + Chlorophenol',
    		'dosage_form'=>'Soap solution',
    		'strengths'=>'',
    		'presentation'=>'125mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Iodine',
    		'dosage_form'=>'Solution',
    		'strengths'=>'Different Preparations   1%',
    		'presentation'=>'30mls',
    		'amount'=>100.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methylated spirit',
    		'dosage_form'=>'Solution',
    		'strengths'=>'Alcohol vol/vol',
    		'presentation'=>'200mls',
    		'amount'=>100.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Potassium Permanganate',
    		'dosage_form'=>'Solution',
    		'strengths'=>'0.10%',
    		'presentation'=>'15mls',
    		'amount'=>100.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Povidone – iodine',
    		'dosage_form'=>'Solution',
    		'strengths'=>'10%',
    		'presentation'=>'Solution',
    		'amount'=>200.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium hypochlorite',
    		'dosage_form'=>'Solution',
    		'strengths'=>'1-10% (chlorine in different preparations)',
    		'presentation'=>'500mls',
    		'amount'=>150.00,
    		'parent_id'=>'ANTISEPTICS AND DISINFECTANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Trichlorophenol',
    		'dosage_form'=>'Cream',
    		'strengths'=>'Liquid',
    		'presentation'=>'ointment',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'DRUGS AFFECTING THE BLOOD',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-ANEAMIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DRUGS AFFECTING THE BLOOD'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cyanocobalamin/ Hydroxocobalamin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.05mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTI-ANEAMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cyanocobalamin/ Hydroxocobalamin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.25 and 1mg/ml  (injection',
    		'presentation'=>'Hydroxocobalamin preferred)',
    		'amount'=>0,
    		'parent_id'=>'100.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ferric Ammonium Citrate',
    		'dosage_form'=>'Mixture',
    		'strengths'=>'400mg/5ml of Ferric Ammonium citrate',
    		'presentation'=>'200mls',
    		'amount'=>250.00,
    		'parent_id'=>'ANTI-ANEAMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ferrous Sulphate',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'Capsule',
    		'presentation'=>'200 mg equivalent to 60mg of Iron',
    		'amount'=>0,
    		'parent_id'=>'3.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Folic Acid',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>3.00,
    		'parent_id'=>'ANTI-ANEAMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Iron dextran',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Equiv to 50mg/iron/ml in 2ml amp',
    		'presentation'=>'Amp.',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-ANEAMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Erythropoeitin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'4000 I.U (prefilled syringe)',
    		'presentation'=>'NULL',
    		'amount'=>4000.00,
    		'parent_id'=>'ANTI-ANEAMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTICOAGULANTS',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>''
    	] );



    	Drug::create( [
    		'drug_name'=>'Enoxaparin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 mg/ml in 0.4ml (40mg)',
    		'presentation'=>'prefilled Syringe',
    		'amount'=>1200.00,
    		'parent_id'=>'ANTICOAGULANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Enoxaparin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 mg/ml in 0.2ml (20mg)',
    		'presentation'=>'prefilled Syringe',
    		'amount'=>850.00,
    		'parent_id'=>'ANTICOAGULANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Heparin Sodium',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5000 units/ml in Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>620.00,
    		'parent_id'=>'ANTICOAGULANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Heparin Sodium',
    		'dosage_form'=>'Injection',
    		'strengths'=>'25000 units/ml in Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>1200.00,
    		'parent_id'=>'ANTICOAGULANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Warfarin Sodium',
    		'dosage_form'=>'Tablets (as sodium)',
    		'strengths'=>'3mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'30.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Warfarin Sodium',
    		'dosage_form'=>'Tablets (as sodium)',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTICOAGULANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI PLATELETS',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>''
    	] );



    	Drug::create( [
    		'drug_name'=>'Acetylsalicylic acid',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'75 mg',
    		'presentation'=>'Tab',
    		'amount'=>3.00,
    		'parent_id'=>'ANTI PLATELETS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clopidogrel',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'75mg',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI PLATELETS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dipyridamole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTI PLATELETS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI FIBRINOLYTIC AND HAEMOSTATIC DRUGS',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aminocaproic acid',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500 mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTI FIBRINOLYTIC AND HAEMOSTATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aminocaproic acid (With/without – lipid thromboplastin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'AA 100 mg/ml + TPT 2mg/ml in 5 ml',
    		'presentation'=>'10 ml',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'PLASMA SUBSTITUTES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dextran 70',
    		'dosage_form'=>'Injection I.V.',
    		'strengths'=>'6% in 5% glucose or normal saline solution (in bottles of 500ml)',
    		'presentation'=>'500ml',
    		'amount'=>1000.00,
    		'parent_id'=>'PLASMA SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Human Albumin (Plasma Protein fraction)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'20% in 100ml  vials',
    		'presentation'=>'Vial',
    		'amount'=>9765.00,
    		'parent_id'=>'PLASMA SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Polygeline',
    		'dosage_form'=>'Injection IV',
    		'strengths'=>'3.5% solution in 500 mls',
    		'presentation'=>'500ml',
    		'amount'=>3500.00,
    		'parent_id'=>'PLASMA SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'CARDIOVASCULAR  DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI ANGINAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'CARDIOVASCULAR  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'Tab',
    		'amount'=>8.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab',
    		'amount'=>12.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.5mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>90.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glyceryl Trinitrate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Sublingual',
    		'presentation'=>'0.5mg',
    		'amount'=>0,
    		'parent_id'=>'30.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Isosorbide dinitrate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'OralSublingual 5 mg',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Isosorbide dinitrate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab',
    		'amount'=>70.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propranolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'40 mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propranolol',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1mg/ml in Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI ANGINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-ARRHYTHMIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'CARDIOVASCULAR  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amiodarone',
    		'dosage_form'=>'Tab',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>55.00,
    		'parent_id'=>'ANTI-ARRHYTHMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lidocaine',
    		'dosage_form'=>'injection',
    		'strengths'=>'20mg/ml (HCL) in 5ml Ampoule',
    		'presentation'=>'50ml Vial',
    		'amount'=>400.00,
    		'parent_id'=>'ANTI-ARRHYTHMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Procainamide',
    		'dosage_form'=>'Tab',
    		'strengths'=>'250mg (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTI-ARRHYTHMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Disopyramide',
    		'dosage_form'=>'Tab',
    		'strengths'=>'100 mg',
    		'presentation'=>'150 mg',
    		'amount'=>0,
    		'parent_id'=>'150.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Procainamide',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100mg in 10mls ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-ARRHYTHMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propranolol',
    		'dosage_form'=>'Tab',
    		'strengths'=>'40mg (Hydrochloride)',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-ARRHYTHMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propranolol',
    		'dosage_form'=>'INJECTION',
    		'strengths'=>'1mg/ml in Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-ARRHYTHMIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DIURETICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'CARDIOVASCULAR  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amiloride+Hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg+ 50mg',
    		'presentation'=>'Tab',
    		'amount'=>7.50,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bendrofluazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Furosemide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Furosemide',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10mgmi in 2ml ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>140.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab.',
    		'amount'=>8.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Spironolactone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Spironolactone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Spironolactone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab',
    		'amount'=>30.00,
    		'parent_id'=>'DIURETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIHYPERTENSIVES DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'CARDIOVASCULAR  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amiloride  + hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.5mg/25mg',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amlodipine',
    		'dosage_form'=>'Tablet  (Besylate)',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amlodipine',
    		'dosage_form'=>'Tablet  (Besylate)',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>60.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amlodipine + Valsartan + Hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5 mg + 160mg + 12.5mg',
    		'presentation'=>'Tab',
    		'amount'=>260.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amlodipine + Valsartan',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5 mg + 160mg',
    		'presentation'=>'Tab',
    		'amount'=>250.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'Tab.',
    		'amount'=>8.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50 mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atenolol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab.',
    		'amount'=>12.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Candesartan cilexetil',
    		'dosage_form'=>'Tab',
    		'strengths'=>'8mg',
    		'presentation'=>'NULL',
    		'amount'=>200,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Candesartan cilexetil',
    		'dosage_form'=>'Tab',
    		'strengths'=>'16mg',
    		'presentation'=>'NULL',
    		'amount'=>250,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Candesartan cilexetil/hydrochlothiazide',
    		'dosage_form'=>'Tab',
    		'strengths'=>'16/12.5mg',
    		'presentation'=>'NULL',
    		'amount'=>260,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Captopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'12.5 mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'15.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Captopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25 mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Captopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab',
    		'amount'=>25.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Enalapril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>25.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Enalapril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Felodipine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>80.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Felodipine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydralazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'20.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydralazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab',
    		'amount'=>30.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydralazine',
    		'dosage_form'=>'Injection powder',
    		'strengths'=>'20mg in 1ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>300.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Isradipine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2.5mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Isradipine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Labetalol',
    		'dosage_form'=>'Tablet (HCL)',
    		'strengths'=>'100mg',
    		'presentation'=>'200mg',
    		'amount'=>0,
    		'parent_id'=>'30.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Labetalol',
    		'dosage_form'=>'Injection powder Tablet (HCL)',
    		'strengths'=>'5mg/ml in 20ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>1400.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lacidipine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lisinopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2.5mg',
    		'presentation'=>'Tab.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lisinopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lisinopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>25.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lisinopril + hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg/12.5mg',
    		'presentation'=>'Tab.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methyldopa',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'15.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methyldopa',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nifedipine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'',
    		'presentation'=>'20mg',
    		'amount'=>0,
    		'parent_id'=>'15.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nifedipine',
    		'dosage_form'=>'slow release',
    		'strengths'=>'30mg',
    		'presentation'=>'Tab.',
    		'amount'=>35.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prazosin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prazosin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2mg',
    		'presentation'=>'Tab.',
    		'amount'=>25.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prazosin + Polythiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.5mg + 0.25mg (respectively)',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propranolol (Hydrochloride)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Resperpine + Dihydroergocristine + Clopamide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Reserpine  0.1mg + Dihydroergocristine 0.5mg + Clopamide 5.0mg',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Resperpine + Dihydroergocristine +Hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Resperpine 0.1mg+ Dihydroergocristine 0.6mg+',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Resperpine + Dihydroergocristine +Hydrochlorothiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Hydrochlorothiazide 10mg',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Telmisartan',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Telmisartan 40mg',
    		'presentation'=>'Tab',
    		'amount'=>130.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Telmisartan',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Telmisartan 80mg',
    		'presentation'=>'Tab',
    		'amount'=>135.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Telmisartan + Hydrochlorthiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Telmisartan 40mg/HCTZ 12.5mg',
    		'presentation'=>'Tab',
    		'amount'=>130.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Telmisartan + Hydrochlorthiazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Telmisartan 80mg/HCTZ 12.5mg',
    		'presentation'=>'Tab',
    		'amount'=>135.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valsatan',
    		'dosage_form'=>'Tab',
    		'strengths'=>'80mg',
    		'presentation'=>'Tab',
    		'amount'=>170,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valsatan',
    		'dosage_form'=>'Tab',
    		'strengths'=>'160mg',
    		'presentation'=>'Tab',
    		'amount'=>190,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valsatan /Hydrochlothiazide',
    		'dosage_form'=>'Tab',
    		'strengths'=>'80/12.5mg',
    		'presentation'=>'Tab',
    		'amount'=>170,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valsatan /Hydrochlothiazide',
    		'dosage_form'=>'Tab',
    		'strengths'=>'160/12.5mg',
    		'presentation'=>'Tab',
    		'amount'=>200,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valsatan /Hydrochlothiazide',
    		'dosage_form'=>'Tab',
    		'strengths'=>'160/25mg',
    		'presentation'=>'Tab',
    		'amount'=>235,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'CARDIAC GLYCOSIDE AND CARDIOTONICS',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'CARDIOVASCULAR  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Captopril',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'12.5 mg',
    		'presentation'=>'25 mg',
    		'amount'=>0,
    		'parent_id'=>'15.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Digoxin',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'0.0625mg',
    		'presentation'=>'0.125mg',
    		'amount'=>0,
    		'parent_id'=>'Tab.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Digoxin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.25mg/ml in 2ml Ampoule',
    		'presentation'=>'and 0.1mg/ml in 1ml Ampoule',
    		'amount'=>0,
    		'parent_id'=>'150.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Digoxin',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'50mg/ml',
    		'presentation'=>'100mls',
    		'amount'=>280.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dopamine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'40mg/ml in 5mls',
    		'presentation'=>'Vial',
    		'amount'=>400.00,
    		'parent_id'=>'ANTIHYPERTENSIVES DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'LIPID – REGULATING DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'CARDIOVASCULAR  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artovastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>50.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Artovastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>200.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clofibrate',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>30.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>50.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>190.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rosuvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>250.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rosuvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>190.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rosuvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>200.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rosuvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>160.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Simvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'40mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>250.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Simvastatin',
    		'dosage_form'=>'Tab/Caps',
    		'strengths'=>'500mg',
    		'presentation'=>'Tab/ Cap.',
    		'amount'=>550.00,
    		'parent_id'=>'LIPID – REGULATING DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DENTAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'LOCAL ANAESTHETICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DENTAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzocaine',
    		'dosage_form'=>'Lozenges',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>40.00,
    		'parent_id'=>'LOCAL   ANAESTHETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lidocaine',
    		'dosage_form'=>'Injections',
    		'strengths'=>'2% + epinephrine 1 in 80000 in dental catridge',
    		'presentation'=>'Catridge',
    		'amount'=>400.00,
    		'parent_id'=>'LOCAL   ANAESTHETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lidocaine',
    		'dosage_form'=>'Spray',
    		'strengths'=>'',
    		'presentation'=>'Tin',
    		'amount'=>2000.00,
    		'parent_id'=>'LOCAL   ANAESTHETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prilocaine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'3% with Felypressin  0.03 units/mls',
    		'presentation'=>'Amp.',
    		'amount'=>300.00,
    		'parent_id'=>'LOCAL   ANAESTHETICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'MOUTHWASHES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DENTAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chorhexetidine',
    		'dosage_form'=>'Solution',
    		'strengths'=>'0.10%',
    		'presentation'=>'100mls',
    		'amount'=>500.00,
    		'parent_id'=>'MOUTHWASHES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glycerin thymol',
    		'dosage_form'=>'Solution',
    		'strengths'=>'',
    		'presentation'=>'200mls',
    		'amount'=>360.00,
    		'parent_id'=>'MOUTHWASHES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hexetidine',
    		'dosage_form'=>'Solution',
    		'strengths'=>'0.10%',
    		'presentation'=>'100mls',
    		'amount'=>500.00,
    		'parent_id'=>'MOUTHWASHES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nystatin',
    		'dosage_form'=>'Solution',
    		'strengths'=>'100000 unit/ml',
    		'presentation'=>'30mls',
    		'amount'=>500.00,
    		'parent_id'=>'MOUTHWASHES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zinc Chloride Plus Zinc sulphate',
    		'dosage_form'=>'Solution',
    		'strengths'=>'1% Zncl + 2% Zn2 SO4',
    		'presentation'=>'Solution',
    		'amount'=>240.00,
    		'parent_id'=>'MOUTHWASHES'
    	] );



    	Drug::create( [
    		'drug_name'=>'13.3 ANTI INFLAMMATORY DENTAL DRUGS',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DENTAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Triamcinolone',
    		'dosage_form'=>'Paste (accetonide)',
    		'strengths'=>'0.10%',
    		'presentation'=>'Tube',
    		'amount'=>700.00,
    		'parent_id'=>'ANTI INFLAMMATORY DENTAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DERMATOLOGICAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'14.1.   ANTI-INFECTIVE DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aciclovir',
    		'dosage_form'=>'Cream',
    		'strengths'=>'5%',
    		'presentation'=>'Tube',
    		'amount'=>450.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Framycetin',
    		'dosage_form'=>'gauze dressing',
    		'strengths'=>'1%',
    		'presentation'=>'Gauze',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentamicin',
    		'dosage_form'=>'Ointment',
    		'strengths'=>'0.30%',
    		'presentation'=>'Tube',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentian Violet',
    		'dosage_form'=>'Aqueous Solution',
    		'strengths'=>'0.50%',
    		'presentation'=>'60mls',
    		'amount'=>80.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentian Violet',
    		'dosage_form'=>'Tincture',
    		'strengths'=>'',
    		'presentation'=>'60mls',
    		'amount'=>80.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mupiricon',
    		'dosage_form'=>'Ointment',
    		'strengths'=>'2% w/w',
    		'presentation'=>'Tube',
    		'amount'=>1000.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Neomycin-Bacitracin',
    		'dosage_form'=>'Ointment and Cream',
    		'strengths'=>'Containing:     Neomycin Sulphate   5mg  plus Bacitracin zinc 500 units/g in 5g & 30g tubes',
    		'presentation'=>'Tube',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Neomycin-Bacitracin',
    		'dosage_form'=>'Powder',
    		'strengths'=>'Containing:  Neomycin Sulphate 5mg plus  Bacitracin zinc 250 units/g',
    		'presentation'=>'Tin',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Neomycin-Bacitracin',
    		'dosage_form'=>'Spray',
    		'strengths'=>'Containing:  Bacitracin',
    		'presentation'=>'12500 units & Neomycin Sulphate',
    		'amount'=>0,
    		'parent_id'=>'Bottle'
    	] );



    	Drug::create( [
    		'drug_name'=>'Silver Sulphadiazine',
    		'dosage_form'=>'Cream',
    		'strengths'=>'1%',
    		'presentation'=>'Tube',
    		'amount'=>400.00,
    		'parent_id'=>'ANTI-INFECTIVE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betamethasone',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.1% (Valerate)',
    		'presentation'=>'Tube',
    		'amount'=>250.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betamethasone + Clioquinol',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.1% + 0.3%',
    		'presentation'=>'Tube',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betamethasone +Neomycin',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.1% + 0.5%',
    		'presentation'=>'Tube',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Calamine Lotion',
    		'dosage_form'=>'Lotion',
    		'strengths'=>'',
    		'presentation'=>'120mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clobetasol propionate',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.05%',
    		'presentation'=>'Tube',
    		'amount'=>850.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clobetasone',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.05%',
    		'presentation'=>'Tube',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluocinolone',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.03%',
    		'presentation'=>'Tube',
    		'amount'=>900.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluocinolone',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.025% +3% clioquinol',
    		'presentation'=>'Tube',
    		'amount'=>900.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone',
    		'dosage_form'=>'Cream',
    		'strengths'=>'1%',
    		'presentation'=>'Tube',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone (Plus) Neomycin',
    		'dosage_form'=>'Cream',
    		'strengths'=>'0.5 – 1% hydrocortisone  + 0.25 – 0.5% Neomycin',
    		'presentation'=>'Tube',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methyl Salicylate',
    		'dosage_form'=>'Oitment',
    		'strengths'=>'4 – 20% methyl salicylate)',
    		'presentation'=>'Tube',
    		'amount'=>250.00,
    		'parent_id'=>'ANTI-INFLAMATORY & ANTI-PRURITIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ASTRINGENT DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium diacetate',
    		'dosage_form'=>'Solution',
    		'strengths'=>'13% for dilution',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ASTRINGENT DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Calamine + Zinc oxide',
    		'dosage_form'=>'Lotion',
    		'strengths'=>'plaster',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'200.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-ACNE DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzoyl Peroxide',
    		'dosage_form'=>'Cream',
    		'strengths'=>'10%',
    		'presentation'=>'5%',
    		'amount'=>0,
    		'parent_id'=>'Tube'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzoyl Peroxide',
    		'dosage_form'=>'Gel',
    		'strengths'=>'10%',
    		'presentation'=>'5%',
    		'amount'=>0,
    		'parent_id'=>'Tube'
    	] );



    	Drug::create( [
    		'drug_name'=>'SCABICIDES AND PEDICULICIDES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzyl Benzoate',
    		'dosage_form'=>'Emulsion and lotion',
    		'strengths'=>'25%',
    		'presentation'=>'100mls',
    		'amount'=>220.00,
    		'parent_id'=>'SCABICIDES AND PEDICULICIDES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Crotamiton',
    		'dosage_form'=>'Cream',
    		'strengths'=>'10%',
    		'presentation'=>'Tube',
    		'amount'=>660.00,
    		'parent_id'=>'SCABICIDES AND PEDICULICIDES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Crotamiton',
    		'dosage_form'=>'Lotion',
    		'strengths'=>'10%',
    		'presentation'=>'50mls',
    		'amount'=>550.00,
    		'parent_id'=>'SCABICIDES AND PEDICULICIDES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Monosulfiram',
    		'dosage_form'=>'Soap',
    		'strengths'=>'5%',
    		'presentation'=>'Soap',
    		'amount'=>150.00,
    		'parent_id'=>'SCABICIDES AND PEDICULICIDES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Permethrine',
    		'dosage_form'=>'Cream',
    		'strengths'=>'Lotion',
    		'presentation'=>'5%',
    		'amount'=>0,
    		'parent_id'=>'lotion'
    	] );



    	Drug::create( [
    		'drug_name'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clotrimazole',
    		'dosage_form'=>'Cream',
    		'strengths'=>'1%',
    		'presentation'=>'Tube',
    		'amount'=>200.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clotrimazole',
    		'dosage_form'=>'Aerosol',
    		'strengths'=>'spray',
    		'presentation'=>'1%',
    		'amount'=>0,
    		'parent_id'=>'250.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clotrimazole',
    		'dosage_form'=>'Dusting Powder',
    		'strengths'=>'1%',
    		'presentation'=>'Tin',
    		'amount'=>200.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clotrimazole',
    		'dosage_form'=>'Pesssary',
    		'strengths'=>'NULL',
    		'presentation'=>'6\'s',
    		'amount'=>350.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clotrimazole',
    		'dosage_form'=>'Vaginal Cream',
    		'strengths'=>'NULL',
    		'presentation'=>'Tube',
    		'amount'=>500.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ketoconazole',
    		'dosage_form'=>'Cream',
    		'strengths'=>'2%',
    		'presentation'=>'Tube',
    		'amount'=>550.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Oral Gel',
    		'strengths'=>'2 – 2.5%',
    		'presentation'=>'Tube',
    		'amount'=>1000.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Cream',
    		'strengths'=>'2%',
    		'presentation'=>'Tube',
    		'amount'=>400.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Lotion',
    		'strengths'=>'2%',
    		'presentation'=>'Tin',
    		'amount'=>500.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Ovule',
    		'strengths'=>'',
    		'presentation'=>'Ovules',
    		'amount'=>700.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Pessary',
    		'strengths'=>'',
    		'presentation'=>'Pessaries',
    		'amount'=>500.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole + Hydrocortisone',
    		'dosage_form'=>'Cream',
    		'strengths'=>'2%  +  1%',
    		'presentation'=>'Tube',
    		'amount'=>1200.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nystatin',
    		'dosage_form'=>'Cream/Oint',
    		'strengths'=>'100000 units',
    		'presentation'=>'Tube',
    		'amount'=>500.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sulphur + Mesulphen',
    		'dosage_form'=>'Ointment',
    		'strengths'=>'Sulphur 10-20% + Mesulphen 64%',
    		'presentation'=>'Tube',
    		'amount'=>250.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tioconazole',
    		'dosage_form'=>'Cream',
    		'strengths'=>'1%',
    		'presentation'=>'Tube',
    		'amount'=>400.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tioconazole',
    		'dosage_form'=>'ovule',
    		'strengths'=>'3s',
    		'presentation'=>'Tube',
    		'amount'=>600.00,
    		'parent_id'=>'FUNGICIDES WITH ANTIBACTERIAL/ANTI-INFLAMMATORY AGENTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'KERATOLYTIC/ PSORIASIS  DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DERMATOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzoic acid + salicylic acid',
    		'dosage_form'=>'Cream ointment',
    		'strengths'=>'6% + 3%',
    		'presentation'=>'Tube',
    		'amount'=>200.00,
    		'parent_id'=>'KERATOLYTIC/ PSORIASIS  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Coal Tar',
    		'dosage_form'=>'Solution/Cream',
    		'strengths'=>'1-10%',
    		'presentation'=>'NULL',
    		'amount'=>1000.00,
    		'parent_id'=>'KERATOLYTIC/ PSORIASIS  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dithranol',
    		'dosage_form'=>'Ointment',
    		'strengths'=>'0.1 - 2%',
    		'presentation'=>'Tube',
    		'amount'=>1000.00,
    		'parent_id'=>'KERATOLYTIC/ PSORIASIS  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Podophyllum resin',
    		'dosage_form'=>'Topical solution',
    		'strengths'=>'10- 25%',
    		'presentation'=>'NULL',
    		'amount'=>1500.00,
    		'parent_id'=>'KERATOLYTIC/ PSORIASIS  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salicylic acid',
    		'dosage_form'=>'Topical solution',
    		'strengths'=>'',
    		'presentation'=>'12% in flexible collodion',
    		'amount'=>0,
    		'parent_id'=>'150.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salicylic acid',
    		'dosage_form'=>'Ointment',
    		'strengths'=>'2-5%',
    		'presentation'=>'NULL',
    		'amount'=>180.00,
    		'parent_id'=>'KERATOLYTIC/ PSORIASIS  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Urea',
    		'dosage_form'=>'Cream/ointment',
    		'strengths'=>'10%',
    		'presentation'=>'Tube',
    		'amount'=>0,
    		'parent_id'=>'KERATOLYTIC/ PSORIASIS  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'EAR',
    		'dosage_form'=>' NOSE   &   THROAT   DRUGS',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'EAR   DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'EAR'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti-infective   Drugs',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'EAR   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloramphenicol',
    		'dosage_form'=>'Ear Drops',
    		'strengths'=>'5%',
    		'presentation'=>'10mls',
    		'amount'=>150.00,
    		'parent_id'=>'Anti-infective   Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentamicin',
    		'dosage_form'=>'Eye/Ear Drops',
    		'strengths'=>'0.3%  (Sulphate)',
    		'presentation'=>'10mls',
    		'amount'=>150.00,
    		'parent_id'=>'Anti-infective   Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti-inflammatory Drugs',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'EAR   DRUGS'
    	] );


    	Drug::create( [
    		'drug_name'=>'Betamethasone',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>250.00,
    		'parent_id'=>'Anti-inflammatory Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Combined   Anti-infective   &   Anti-inflammatory Drugs',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'EAR   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone + Neomycin',
    		'dosage_form'=>'Ear Drops',
    		'strengths'=>'Hydrocortisone       1.5% (Acetate)      +  Neomycin 0.5% (Sulphate)',
    		'presentation'=>'5mls',
    		'amount'=>360.00,
    		'parent_id'=>'Combined   Anti-infective   &   Anti-inflammatory Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bethamethasone + Neomycin',
    		'dosage_form'=>'Ear drops',
    		'strengths'=>'0.1% + 0.5%',
    		'presentation'=>'10mls',
    		'amount'=>250.00,
    		'parent_id'=>'Combined   Anti-infective   &   Anti-inflammatory Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone + Neomycin',
    		'dosage_form'=>'Ear drops',
    		'strengths'=>'0.1% + 3200 unit/ml',
    		'presentation'=>'10mls',
    		'amount'=>350.00,
    		'parent_id'=>'Combined   Anti-infective   &   Anti-inflammatory Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Flumethasone plus clioquinol',
    		'dosage_form'=>'Ear drops',
    		'strengths'=>'0.02% + 1% clioquinol',
    		'presentation'=>'7.5mls',
    		'amount'=>700.00,
    		'parent_id'=>'Combined   Anti-infective   &   Anti-inflammatory Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone + Neomycin + polymyxin B',
    		'dosage_form'=>'Ear Drops',
    		'strengths'=>'Hydrocortisone 1.0% (Acetate)      + Neomycin 3400 units (Sulphate) + polymyxin B 10000 units/10mls',
    		'presentation'=>'10mls',
    		'amount'=>500.00,
    		'parent_id'=>'Combined   Anti-infective   &   Anti-inflammatory Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Preparations  for  Removal   of   Ear wax',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'EAR   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glycerol plus sodium bicarbonate',
    		'dosage_form'=>'Ear drops',
    		'strengths'=>'NULL',
    		'presentation'=>'10mls',
    		'amount'=>650.00,
    		'parent_id'=>'Preparations  for  Removal   of   Ear wax'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorbutanol +Paradichlorobenzine+ Arachis oil + Turpentine oil',
    		'dosage_form'=>'Ear drops',
    		'strengths'=>'NULL',
    		'presentation'=>'10mls',
    		'amount'=>800.00,
    		'parent_id'=>'Preparations  for  Removal   of   Ear wax'
    	] );



    	Drug::create( [
    		'drug_name'=>'NOSE   DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'EAR'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NOSE DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Antazoline + Nephazoline',
    		'dosage_form'=>'Nasal drops',
    		'strengths'=>'0.5% + 0.025%',
    		'presentation'=>'10mls',
    		'amount'=>0,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Beclomethasone Dipropionate',
    		'dosage_form'=>'Nasal Spray',
    		'strengths'=>'(aerosol)  0.05mg / metered spray',
    		'presentation'=>'Spray',
    		'amount'=>1500.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ephedrine',
    		'dosage_form'=>'Nasal drops (Hcl)',
    		'strengths'=>'0.50%',
    		'presentation'=>'',
    		'amount'=>400.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pseudoephedrine (HCL)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'60mg',
    		'presentation'=>'Tab',
    		'amount'=>5.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pseudoephedrine (HCL)',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'30mg/5ml',
    		'presentation'=>'60mls',
    		'amount'=>300.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tripolidine (HCL)  + Pseudoephedrine (HCL)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'60mg + 2.5mg',
    		'presentation'=>'Tab.',
    		'amount'=>50.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tripolidine (HCL)  + Pseudoephedrine (HCL)',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'30mg  +  1.2mg',
    		'presentation'=>'60mks',
    		'amount'=>350.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Xylomethazoline',
    		'dosage_form'=>'Nasal drops',
    		'strengths'=>'0.25%',
    		'presentation'=>'10mls',
    		'amount'=>750.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Xylomethazoline',
    		'dosage_form'=>'Nasal drops',
    		'strengths'=>'0.50%',
    		'presentation'=>'10mls',
    		'amount'=>750.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Xylomethazoline + Antazoline',
    		'dosage_form'=>'Nasal drops',
    		'strengths'=>'0.25% + 0.5%  (paed)',
    		'presentation'=>'10mls',
    		'amount'=>300.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Xylomethazoline + Antazoline',
    		'dosage_form'=>'Nasal drops',
    		'strengths'=>'Adult',
    		'presentation'=>'',
    		'amount'=>400.00,
    		'parent_id'=>'Anti allergic  &   Nasal Decongestants  (Topical & Systemic)'
    	] );



    	Drug::create( [
    		'drug_name'=>'CAUTERIZATION OF NOSE',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'15.2  NOSE   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Silver nitrate',
    		'dosage_form'=>'Sticks',
    		'strengths'=>'crystals',
    		'presentation'=>'solution',
    		'amount'=>0,
    		'parent_id'=>'Sticks'
    	] );



    	Drug::create( [
    		'drug_name'=>'THROAT DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'15.2  NOSE   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dequalinium',
    		'dosage_form'=>'Lozenges',
    		'strengths'=>'250mg',
    		'presentation'=>'lozenges',
    		'amount'=>10.00,
    		'parent_id'=>'THROAT DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dequalinium',
    		'dosage_form'=>'Paint',
    		'strengths'=>'250mg (HCL)',
    		'presentation'=>'10ml',
    		'amount'=>450.00,
    		'parent_id'=>'THROAT DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dichlrobenzyl alchohol + Amylmetacresol',
    		'dosage_form'=>'Lozenges',
    		'strengths'=>'NULL',
    		'presentation'=>'Lozenges',
    		'amount'=>40.00,
    		'parent_id'=>'THROAT DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'GASTRO-INTESTINAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>''
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTACID  DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium hydroxide',
    		'dosage_form'=>'Suspension',
    		'strengths'=>'320mg/5ml',
    		'presentation'=>'200mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium hydroxide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Tablet',
    		'amount'=>5.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium hydroxide +Magnesium Hydroxide +Simethicone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'200mg+200mg +30mg',
    		'presentation'=>'Tablet',
    		'amount'=>5.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium hydroxide +Magnesium Hydroxide +Simethicone',
    		'dosage_form'=>'Mixture (with or without diglycirrhizinnated Liquarice)-',
    		'strengths'=>'6gm+80mg+100mg+/- 400mg',
    		'presentation'=>'200ml',
    		'amount'=>400.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium hydroxide +Magnesium trisilicate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'120 mg + 250 mg',
    		'presentation'=>'Tab',
    		'amount'=>5.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium hydroxide +Magnesium trisilicate',
    		'dosage_form'=>'Mixture',
    		'strengths'=>'BP',
    		'presentation'=>'200mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Magnesium Trisilicate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Magnesium Trisilicate',
    		'dosage_form'=>'Mixtures',
    		'strengths'=>'250mg/ml',
    		'presentation'=>'200mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTACID  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-EMETIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metoclopramide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg  (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>7,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metoclopramide',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'5mg/5ml  (HCL)',
    		'presentation'=>'100mls',
    		'amount'=>200,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metoclopramide',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5mg/ml  (HCL)',
    		'presentation'=>'Amp.',
    		'amount'=>30,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prochlorperazine',
    		'dosage_form'=>'Tablet (Maleate)',
    		'strengths'=>'5 mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prochlorperazine',
    		'dosage_form'=>'Tablet (Maleate)',
    		'strengths'=>'25 mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prochlorperazine',
    		'dosage_form'=>'Syrup (Mesilate)',
    		'strengths'=>'5 mg/ 5 ml',
    		'presentation'=>'100mls',
    		'amount'=>350.00,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prochlorperazine',
    		'dosage_form'=>'Injection (Mesilate)',
    		'strengths'=>'12.5 mg/ml in 1 ml & 2 ml Ampoules',
    		'presentation'=>'Amp.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Promethazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10 and 25 mg (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>5,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Promethazine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'5mg/5ml   (HCL)',
    		'presentation'=>'60mls',
    		'amount'=>120,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Promethazine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'25mg/ml  (HCL) in 2ml Ampoules',
    		'presentation'=>'Amp.',
    		'amount'=>20,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Promethazine theoclate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'NULL',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTI-EMETIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-SPASMODIC DRUGS & SMOOTH MUSCLE STIMULANT',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Homatrropine methyl bromide',
    		'dosage_form'=>'Drop',
    		'strengths'=>'2mg/ml',
    		'presentation'=>'15ml',
    		'amount'=>460.00,
    		'parent_id'=>'ANTI-SPASMODIC DRUGS & SMOOTH MUSCLE STIMULANT'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hysocine N-butylbro-Mide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-SPASMODIC DRUGS & SMOOTH MUSCLE STIMULANT'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hysocine N-butylbro-Mide',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'1mg/ml',
    		'presentation'=>'100mls',
    		'amount'=>400.00,
    		'parent_id'=>'ANTI-SPASMODIC DRUGS & SMOOTH MUSCLE STIMULANT'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hysocine N-butylbro-Mide',
    		'dosage_form'=>'Injection',
    		'strengths'=>'20mg/ml in 1ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>50.00,
    		'parent_id'=>'ANTI-SPASMODIC DRUGS & SMOOTH MUSCLE STIMULANT'
    	] );



    	Drug::create( [
    		'drug_name'=>'PURGATIVES / LAXATIVES AND LUBRICANTS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bisacodyl',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'PURGATIVES / LAXATIVES AND LUBRICANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bisacodyl',
    		'dosage_form'=>'Suppositories',
    		'strengths'=>'5 & 10mg',
    		'presentation'=>'Supp.',
    		'amount'=>130.00,
    		'parent_id'=>'PURGATIVES / LAXATIVES AND LUBRICANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Liquid Paraffin',
    		'dosage_form'=>'Emulsion',
    		'strengths'=>'oral',
    		'presentation'=>'5mg/10ml of emulsion',
    		'amount'=>0,
    		'parent_id'=>'220.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Senna',
    		'dosage_form'=>'Tablet & granule',
    		'strengths'=>'NULL',
    		'presentation'=>'Tablet',
    		'amount'=>30.00,
    		'parent_id'=>'PURGATIVES / LAXATIVES AND LUBRICANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-DIARRHOEAL  DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Antimotility Drugs',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-DIARRHOEAL  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Diphenoxylate hydrochloride + Atropine sulphate',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2.5mg + 0.025mg',
    		'presentation'=>'Tablet',
    		'amount'=>10.00,
    		'parent_id'=>'Antimotility Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'Loperamide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2mg',
    		'presentation'=>'Tablet',
    		'amount'=>16.50,
    		'parent_id'=>'Antimotility Drugs'
    	] );



    	Drug::create( [
    		'drug_name'=>'REPLACEMENT FLUID  (ORAL  REHYDRATION  THERAPY)',
    		'dosage_form'=>'',
    		'strengths'=>'',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'ANTI-DIARRHOEAL  DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Oral Rehydration Salt',
    		'dosage_form'=>'Salts',
    		'strengths'=>'Glucose 13.5 g',
    		'presentation'=>'Potassium  Cl.  1.5g',
    		'amount'=>0,
    		'parent_id'=>'Sodium  Chloride  2.6g'
    	] );



    	Drug::create( [
    		'drug_name'=>'PREPARATIONS FOR HEAMORRHOID',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aluminium Actate +Hydrocortisone+ Lidocaine +Zinc oxide',
    		'dosage_form'=>'Suppository',
    		'strengths'=>'50mg +5mg + 60mg',
    		'presentation'=>'supp',
    		'amount'=>110.00,
    		'parent_id'=>'PREPARATIONS FOR HEAMORRHOID'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzyl benzoate + bismuth Oxide + Bismuth subgallate+ Hydrocortisone',
    		'dosage_form'=>'Suppository',
    		'strengths'=>'33mg + 24mg + 59mg',
    		'presentation'=>'supp',
    		'amount'=>110.00,
    		'parent_id'=>'PREPARATIONS FOR HEAMORRHOID'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzyl benzoate + bismuth Oxide + Bismuth subgallate+ Hydrocortisone + Peru balsam',
    		'dosage_form'=>'Suppository',
    		'strengths'=>'33mg + 24mg + 59mg',
    		'presentation'=>'supp',
    		'amount'=>110.00,
    		'parent_id'=>'PREPARATIONS FOR HEAMORRHOID'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cinchocaine hydrochloride +Prednisolone hexanoate',
    		'dosage_form'=>'Suppository',
    		'strengths'=>'1mg + 1.3mg',
    		'presentation'=>'supp',
    		'amount'=>110.00,
    		'parent_id'=>'PREPARATIONS FOR HEAMORRHOID'
    	] );



    	Drug::create( [
    		'drug_name'=>'PEPTIC  ULCER DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'GASTRO-INTESTINAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cimetidine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cimetidine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'400mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cimetidine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100mg/ml in 2 ml Ampoules',
    		'presentation'=>'Amp.',
    		'amount'=>100.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Esomeprazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg',
    		'presentation'=>'Tabl',
    		'amount'=>35.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lansoperazole',
    		'dosage_form'=>'capsule',
    		'strengths'=>'30mg',
    		'presentation'=>'capsule',
    		'amount'=>40.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Omeprazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'20 mg',
    		'amount'=>0,
    		'parent_id'=>'33.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rabeprazole',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab',
    		'amount'=>70.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ranitidine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'150mg',
    		'presentation'=>'Tab.',
    		'amount'=>16.50,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ranitidine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'300 mg  (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ranitidine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'25mg/ml in 2 ml Ampoules',
    		'presentation'=>'Amp.',
    		'amount'=>220.00,
    		'parent_id'=>'PEPTIC  ULCER DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'HORMONES',
    		'dosage_form'=>'& SYNTHETIC  SUBSTITUTES',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'CORTICOSTEROIDS & SYNTHETIC  SUBSTITUTES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'0.5mg and 4mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'CORTICOSTEROIDS & SYNTHETIC  SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'2mg/ml',
    		'presentation'=>'4mg/ml in 2ml Ampoule',
    		'amount'=>0,
    		'parent_id'=>'20.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fludrocortisone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.1mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'CORTICOSTEROIDS & SYNTHETIC  SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'powder',
    		'presentation'=>'100mg/vial',
    		'amount'=>0,
    		'parent_id'=>'150.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methyl prednisolone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'40mg/ml I 2ml ampule',
    		'presentation'=>'Amp',
    		'amount'=>1200.00,
    		'parent_id'=>'CORTICOSTEROIDS & SYNTHETIC  SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Predinsolone',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'1mg',
    		'presentation'=>'5mg',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Triamcinolone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10mg/40mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>1000.00,
    		'parent_id'=>'CORTICOSTEROIDS & SYNTHETIC  SUBSTITUTES'
    	] );



    	Drug::create( [
    		'drug_name'=>'OESTROGEN',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ethinyloestradiol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.01mg',
    		'presentation'=>'0.05mg',
    		'amount'=>0,
    		'parent_id'=>'50.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'PROGESTOGENS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydroxyprogesterone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Hexanoate 250mg/ml in 1ml',
    		'presentation'=>'2ml Ampoules',
    		'amount'=>0,
    		'parent_id'=>'250.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Norethisterone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'200mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>200.00,
    		'parent_id'=>'PROGESTOGENS'
    	] );



    	Drug::create( [
    		'drug_name'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bromocriptine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1mg',
    		'presentation'=>'2.5mg (Mesylate)',
    		'amount'=>0,
    		'parent_id'=>'100.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clomiphene',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'50mg (Citrate)',
    		'presentation'=>'10s',
    		'amount'=>500.00,
    		'parent_id'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chorionic gonadotropin',
    		'dosage_form'=>'Injection powder',
    		'strengths'=>'500 units  in Ampoule',
    		'presentation'=>'Amp',
    		'amount'=>4000.00,
    		'parent_id'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chorionic gonadotropin',
    		'dosage_form'=>'Injection powder',
    		'strengths'=>'1000 units in Ampoule',
    		'presentation'=>'Amp',
    		'amount'=>4000.00,
    		'parent_id'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Danazol',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'100mg/200mg',
    		'presentation'=>'Cap',
    		'amount'=>300.00,
    		'parent_id'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Epimestrol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Follicle-stimulating hormone  (FSH)) + luteinizing hormone (LH)',
    		'dosage_form'=>'Injection powder',
    		'strengths'=>'75 units +75 units',
    		'presentation'=>'Amp',
    		'amount'=>0,
    		'parent_id'=>'DRUGS ACTING ON PITUITARY- OVARIAN AXIS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIDIURETIC HORMONES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Desmopressin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'4mcg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>0,
    		'parent_id'=>'ANTIDIURETIC HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Desmopressin',
    		'dosage_form'=>'Inhalaton',
    		'strengths'=>'10mcg metered spray',
    		'presentation'=>'Spray',
    		'amount'=>0,
    		'parent_id'=>'ANTIDIURETIC HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vasopressin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'20units/ml in 1ml ampoule',
    		'presentation'=>'Amp',
    		'amount'=>0,
    		'parent_id'=>'ANTIDIURETIC HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-DIABETIC       DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Injectible      Anti-Diabetics',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-DIABETIC       DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Biphasic Isophane Insulin',
    		'dosage_form'=>'injection',
    		'strengths'=>'Human Soluble Insulin 30%+isophane Insulin 70%',
    		'presentation'=>'Vial',
    		'amount'=>1800.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Insulin Soluble',
    		'dosage_form'=>'Injection',
    		'strengths'=>'40 units/ml',
    		'presentation'=>'Vial',
    		'amount'=>1800.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Insulin Soluble',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 units/ml',
    		'presentation'=>'Vial',
    		'amount'=>3700.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Insulin Zinc Suspension  (I.Z.S)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'40 units/ml',
    		'presentation'=>'Vial',
    		'amount'=>1800.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Insulin Zinc Suspension  (I.Z.S)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 units/ml',
    		'presentation'=>'Vial',
    		'amount'=>3700.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Isophane Insulin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 units/ml',
    		'presentation'=>'Vial',
    		'amount'=>3700.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Protamine Zinc Insulin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100 units/ml',
    		'presentation'=>'Vial',
    		'amount'=>3700.00,
    		'parent_id'=>'Injectible      Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Oral Anti-Diabetics',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-DIABETIC       DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorpropamide',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'250mg',
    		'presentation'=>'Tab.',
    		'amount'=>25.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metformin',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'500mg (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glibenclamide',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab',
    		'amount'=>15.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gliclazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'80mg',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gliclazide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'30mg',
    		'presentation'=>'NULL',
    		'amount'=>25.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glimepiride',
    		'dosage_form'=>'Tab',
    		'strengths'=>'1mg',
    		'presentation'=>'NULL',
    		'amount'=>45.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glimepiride',
    		'dosage_form'=>'Tab',
    		'strengths'=>'2mg',
    		'presentation'=>'NULL',
    		'amount'=>20.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glimepiride',
    		'dosage_form'=>'Tab',
    		'strengths'=>'4mg',
    		'presentation'=>'NULL',
    		'amount'=>140.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glucagon',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>0,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metformin',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'1000mg',
    		'presentation'=>'NULL',
    		'amount'=>20.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metformin',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'850mg',
    		'presentation'=>'NULL',
    		'amount'=>16.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Metformin + Glabenclamide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'500mg (HCL) +2.5mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pioglitazone Hydrochloride',
    		'dosage_form'=>'Tab',
    		'strengths'=>'15mg',
    		'presentation'=>'NULL',
    		'amount'=>70.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pioglitazone Hydrochloride',
    		'dosage_form'=>'Tab',
    		'strengths'=>'30mg',
    		'presentation'=>'NULL',
    		'amount'=>80.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rosiglitazone',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'4mg',
    		'presentation'=>'Tab.',
    		'amount'=>210.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vildagliptin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab',
    		'amount'=>220.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vidagliptin + Metformin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg/500mg',
    		'presentation'=>'Tab',
    		'amount'=>220.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vidagliptin + Metformin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg/1000mg',
    		'presentation'=>'Tab',
    		'amount'=>220.00,
    		'parent_id'=>'Oral Anti-Diabetics'
    	] );



    	Drug::create( [
    		'drug_name'=>'THYROID    HORMONES   AND   ANTITHYROID   DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbimazole',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab',
    		'amount'=>10.00,
    		'parent_id'=>'THYROID    HORMONES   AND   ANTITHYROID   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levothyroxine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'0.05 mg (sodium salt)',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'THYROID    HORMONES   AND   ANTITHYROID   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Levothyroxine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'0.1mg (sodium salt)',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'THYROID    HORMONES   AND   ANTITHYROID   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lugols solution',
    		'dosage_form'=>'Solution',
    		'strengths'=>'oral',
    		'presentation'=>'iodine 5%',
    		'amount'=>0,
    		'parent_id'=>'sol.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Propylthiouracil',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50 mg',
    		'presentation'=>'Tab.',
    		'amount'=>300.00,
    		'parent_id'=>'THYROID    HORMONES   AND   ANTITHYROID   DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'BENINGN PROSTATIC HYPERPLASIA DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'HORMONES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dutasteride',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'NULL',
    		'presentation'=>'Tab',
    		'amount'=>200.00,
    		'parent_id'=>'BENINGN PROSTATIC HYPERPLASIA DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Finasteride',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab',
    		'amount'=>100.00,
    		'parent_id'=>'BENINGN PROSTATIC HYPERPLASIA DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tamsulosin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'400mcg',
    		'presentation'=>'Tab',
    		'amount'=>100.00,
    		'parent_id'=>'BENINGN PROSTATIC HYPERPLASIA DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'IMMUNOLOGICALS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'SERA AND IMMUNOGLOBULINS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'IMMUNOLOGICALS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Alpha interferon',
    		'dosage_form'=>'Injection',
    		'strengths'=>'4.5mu',
    		'presentation'=>'Vial',
    		'amount'=>6000.00,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti Gas – gangrene',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10000',
    		'presentation'=>'30000 units in vial',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti Scorpion serum',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1 ml in Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>0,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti snake bite serum',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Polyvalent',
    		'presentation'=>'10 ml',
    		'amount'=>0,
    		'parent_id'=>'Amp.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti tetanus immunoglobin (human)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1500 units/amp',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'150.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti tetanus immunoglobin (human)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10000 units / ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>1200.00,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Anti-D (Rhesus) immunoglobulin (Humans)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'300microgram (1500 I.U)/ml',
    		'presentation'=>'Prefilled Syringe',
    		'amount'=>13000.00,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gas gangrene anti toxin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'4000 units in vial',
    		'presentation'=>'10000 units in vial',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hepatitis B Anti-serum',
    		'dosage_form'=>'inj',
    		'strengths'=>'200iu',
    		'presentation'=>'Amp.',
    		'amount'=>78750.00,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hepatitis B Anti-serum',
    		'dosage_form'=>'inj',
    		'strengths'=>'400iu',
    		'presentation'=>'Amp.',
    		'amount'=>94500.00,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Normal immunoglobulin',
    		'dosage_form'=>'IV Injection',
    		'strengths'=>'',
    		'presentation'=>'30mg/ml',
    		'amount'=>0,
    		'parent_id'=>'Vial'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rabies immunoglobin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'150 unit in  ml in vial',
    		'presentation'=>'Vial .',
    		'amount'=>2500.00,
    		'parent_id'=>'SERA AND IMMUNOGLOBULINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'VACCINES FOR UNIVERSAL IMMUNIZATION',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'IMMUNOLOGICALS'
    	] );



    	Drug::create( [
    		'drug_name'=>'BCG Vaccines dried **',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Powder for reconstitution in multidose amp 1ml',
    		'presentation'=>'5 ml',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Diptheria',
    		'dosage_form'=>'Tetanus and Pertussis Vaccine **',
    		'strengths'=>'Injection',
    		'presentation'=>'0.5ml',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hepatitis B vaccines',
    		'dosage_form'=>'Liquid for injection',
    		'strengths'=>'10 doses/vial',
    		'presentation'=>'Vial',
    		'amount'=>3000.00,
    		'parent_id'=>'VACCINES FOR UNIVERSAL IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Measeles',
    		'dosage_form'=>'Mumps & Rubella vaccine **',
    		'strengths'=>'Injection',
    		'presentation'=>'0.5 ml',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Measles vaccine **',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.5ml',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'VACCINES FOR UNIVERSAL IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pentavelent Vaccine **',
    		'dosage_form'=>'Injection',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'VACCINES FOR UNIVERSAL IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Poliomyelitis vaccine **',
    		'dosage_form'=>'Oral suspension',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'VACCINES FOR UNIVERSAL IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tetanus vaccine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Formoltoxoid',
    		'presentation'=>'0.5 ml',
    		'amount'=>0,
    		'parent_id'=>'0.5ml'
    	] );



    	Drug::create( [
    		'drug_name'=>'VACCINES FOR SPECIFIC IMMUNIZATION',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'IMMUNOLOGICALS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cholera vaccine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1.5ml – 50 ml in Ampoule or vial',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'VACCINES FOR SPECIFIC IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hepatitis B Vaccine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.02 mg/ml in 0.5 ml',
    		'presentation'=>'1 ml vial',
    		'amount'=>0,
    		'parent_id'=>'3000.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'HPV Vaccine (Quadrivalent)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.5mls single dose vial or prefilled inj',
    		'presentation'=>'NULL',
    		'amount'=>12000.00,
    		'parent_id'=>'VACCINES FOR SPECIFIC IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Meningococcal vaccine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Powder for reconstitution in multidose vial of 0.5mg ',
    		'presentation'=>'2.5 mg',
    		'amount'=>0,
    		'parent_id'=>'6450.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pneumococcal Vaccine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'55mcg/0.5ml',
    		'presentation'=>'NULL',
    		'amount'=>15450.00,
    		'parent_id'=>'VACCINES FOR SPECIFIC IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Rabies vaccine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1 ml',
    		'presentation'=>'NULL',
    		'amount'=>3050.00,
    		'parent_id'=>'VACCINES FOR SPECIFIC IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Typhoid vaccine (TAB)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1.5ml/vial',
    		'presentation'=>'NULL',
    		'amount'=>450.00,
    		'parent_id'=>'VACCINES FOR SPECIFIC IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'Typhoid vaccine (VI antigen)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10 ml vial (20 doses)',
    		'presentation'=>'25ml/vial (50 doses)',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Yellow fever vaccine **',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Powder for reconstitution 15 and 10 dose vial',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'VACCINES FOR SPECIFIC IMMUNIZATION'
    	] );



    	Drug::create( [
    		'drug_name'=>'OPTHALMOLOGICAL DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-INFECTIVE',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'OPTHALMOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Acyclovir',
    		'dosage_form'=>'Eye ointment',
    		'strengths'=>'3.00%',
    		'presentation'=>'5gms',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloramphenicol',
    		'dosage_form'=>'Eye Ointment',
    		'strengths'=>'1%',
    		'presentation'=>'5gm',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chloramphenicol',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.50%',
    		'presentation'=>'10mls',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ciprofloxacin',
    		'dosage_form'=>'Drops',
    		'strengths'=>'0.30%',
    		'presentation'=>'10mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluconsazole',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.30%',
    		'presentation'=>'NULL',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gentamicin',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.3%  (Sulphate)',
    		'presentation'=>'10mls',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Idoxuridine',
    		'dosage_form'=>'Eye ointment',
    		'strengths'=>'0.10%',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Miconazole',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Natamycin',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'50mg/ml',
    		'presentation'=>'5mls',
    		'amount'=>0,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ofloxacin',
    		'dosage_form'=>'Drops',
    		'strengths'=>'0.30%',
    		'presentation'=>'10mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Oxytetracycline plus Polymyxin B',
    		'dosage_form'=>'Eye ointment',
    		'strengths'=>'5mg + 10000 unit',
    		'presentation'=>'5gms',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'Neomycin sulfate+Polymyxin B + Dexamethasone',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'3500 IU/6000iu/0.1%',
    		'presentation'=>'5mls',
    		'amount'=>700.00,
    		'parent_id'=>'ANTI-INFECTIVE'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI ALLERGIC',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'OPTHALMOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Antazoline HCL',
    		'dosage_form'=>'Tetrazoline HCL',
    		'strengths'=>'Methylhydroxy Propyl cellulose.',
    		'presentation'=>'Eye Drops',
    		'amount'=>0,
    		'parent_id'=>'5mls'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tetrahydrozoline(HCl)',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.05%',
    		'presentation'=>'10mls',
    		'amount'=>600.00,
    		'parent_id'=>'ANTI ALLERGIC'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI INFLAMMATORY',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'OPTHALMOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amethocaine',
    		'dosage_form'=>'NULL',
    		'strengths'=>'Eye Drop',
    		'presentation'=>'0.5%',
    		'amount'=>0,
    		'parent_id'=>'500.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betamethasone',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'010%',
    		'presentation'=>'10mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betamethasone + Neomycin',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'010% +0.5%',
    		'presentation'=>'10mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.10%',
    		'presentation'=>'10mls',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dexamethasone + Chloramphenicol + Tetrahydrozolina',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'NULL',
    		'presentation'=>'10mls',
    		'amount'=>650.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone + Neomycin',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'1.5% + 0.5%',
    		'presentation'=>'10mls',
    		'amount'=>300.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ketotifen',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'250mcg/ml',
    		'presentation'=>'5mls',
    		'amount'=>1600.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lodoxamide',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.10%',
    		'presentation'=>'10mls',
    		'amount'=>0,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Prednisolone',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'1% (Acetate) 5% (Sodium phosphate)',
    		'presentation'=>'5mls',
    		'amount'=>500.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ringers Lactate',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI INFLAMMATORY'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-GLAUCOMA AND MIOTICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'OPTHALMOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Acetazolamide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Acetazolamide',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500 mg/vial',
    		'presentation'=>'Vial',
    		'amount'=>0,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betaxolol Hydrocloride',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.50%',
    		'presentation'=>'5mls',
    		'amount'=>900.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Betaxolol Hydrocloride + Neomycin',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'',
    		'presentation'=>'5mls',
    		'amount'=>900.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Brinzolamide',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'10mg/ml',
    		'presentation'=>'5mls',
    		'amount'=>4000.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dorzolamide',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'2%',
    		'presentation'=>'5mls',
    		'amount'=>4000.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dorzolamide Hcl + Timolol',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'2% + 0.5%',
    		'presentation'=>'5mls',
    		'amount'=>6000.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Latanoprost',
    		'dosage_form'=>'Eye Drps',
    		'strengths'=>'500mcg',
    		'presentation'=>'5mls',
    		'amount'=>5200.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pilocarpine',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'2% & 4% (HCL)',
    		'presentation'=>'5mls',
    		'amount'=>550.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Timolol',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.25',
    		'presentation'=>'0.5% (Maleate)',
    		'amount'=>0,
    		'parent_id'=>'600.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Travoprost',
    		'dosage_form'=>'Eye Drps',
    		'strengths'=>'40mcg/ml',
    		'presentation'=>'2.5mls',
    		'amount'=>9000.00,
    		'parent_id'=>'ANTI-GLAUCOMA AND MIOTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'MYDRIATICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'OPTHALMOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Atropine',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.5%',
    		'presentation'=>'1%  (Sulphate)',
    		'amount'=>0,
    		'parent_id'=>'550.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Homatropine',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'2%',
    		'presentation'=>'1% (Hydrobromide)',
    		'amount'=>0,
    		'parent_id'=>'300.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Phenylephrine',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'2.5%',
    		'presentation'=>'10% (HCL)',
    		'amount'=>0,
    		'parent_id'=>'500.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tropicamide',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.5%',
    		'presentation'=>'1%',
    		'amount'=>0,
    		'parent_id'=>'650.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'DIAGNOSTIC EYE DRUGS & MISCELLANEOUS PREPARATIONS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'OPTHALMOLOGICAL DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cyclopentolate',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'0.5%',
    		'presentation'=>'0.1% (Hydrochloride)',
    		'amount'=>0,
    		'parent_id'=>'750.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Flourescein sodium',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'1%',
    		'presentation'=>'2%',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Methylcellulose',
    		'dosage_form'=>'Eye Drops',
    		'strengths'=>'1%',
    		'presentation'=>'2%',
    		'amount'=>0,
    		'parent_id'=>'850.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'OXYTOCICS AND TOCOLYTICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ergometrine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.5mg (Maleate)',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'OXYTOCICS AND TOCOLYTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ergometrine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.5mg/ml  (Maleate)',
    		'presentation'=>'Amp.',
    		'amount'=>50.00,
    		'parent_id'=>'OXYTOCICS AND TOCOLYTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Oxytocin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10 units/ml',
    		'presentation'=>'5 units/ml in Ampoules',
    		'amount'=>0,
    		'parent_id'=>'50.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Misoprostol',
    		'dosage_form'=>'Pessary',
    		'strengths'=>'3mg',
    		'presentation'=>'Pessary',
    		'amount'=>90.00,
    		'parent_id'=>'OXYTOCICS AND TOCOLYTICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'PREPARATIONS FOR CORRECTING WATER',
    		'dosage_form'=>'ELECTROLYTE & ACID-BASE DISTURBANCES',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'ORAL PREPARATIONS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'PREPARATIONS FOR CORRECTING WATER'
    	] );



    	Drug::create( [
    		'drug_name'=>'Oral Rehydration Salt',
    		'dosage_form'=>'Powder',
    		'strengths'=>'(See 18.5.2)',
    		'presentation'=>'Sachet',
    		'amount'=>50.00,
    		'parent_id'=>'ORAL PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Potassium Chloride (slow release)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'600mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ORAL PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Potassium Chloride (slow release)',
    		'dosage_form'=>'Oral solution',
    		'strengths'=>'5%',
    		'presentation'=>'10%',
    		'amount'=>0,
    		'parent_id'=>'Sol.'
    	] );



    	Drug::create( [
    		'drug_name'=>'PARENTERAL  PREPARATIONS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'PREPARATIONS FOR CORRECTING WATER'
    	] );



    	Drug::create( [
    		'drug_name'=>'Darrows Solution',
    		'dosage_form'=>'Injection',
    		'strengths'=>'BP',
    		'presentation'=>'½ & full strength',
    		'amount'=>0,
    		'parent_id'=>'200.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dextrose + Sodium Chloride',
    		'dosage_form'=>'Infusion',
    		'strengths'=>'5% + 0.9%',
    		'presentation'=>'500ml IVF',
    		'amount'=>200.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glucose (Dextrose)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5% & 10%',
    		'presentation'=>'500ml IVF',
    		'amount'=>200.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glucose (Dextrose)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50% in water',
    		'presentation'=>'500ml IVF',
    		'amount'=>200.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Glucose + Sodium Chloride (Paediatric)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'4.3% + 0.18%',
    		'presentation'=>'500ml IVF',
    		'amount'=>200.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Isoplasma',
    		'dosage_form'=>'Infusion',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>1300.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mannitol',
    		'dosage_form'=>'Infusion',
    		'strengths'=>'10%',
    		'presentation'=>'NULL',
    		'amount'=>250.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mannitol',
    		'dosage_form'=>'Infusion',
    		'strengths'=>'20%',
    		'presentation'=>'NULL',
    		'amount'=>300.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Potassium Chloride',
    		'dosage_form'=>'Injection Strong',
    		'strengths'=>'15% in 10ml Ampoule',
    		'presentation'=>'10mls',
    		'amount'=>200.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ringers Lactate',
    		'dosage_form'=>'solution',
    		'strengths'=>'NULL',
    		'presentation'=>'100mls',
    		'amount'=>150.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium   Lactate Compound solution',
    		'dosage_form'=>'Injection',
    		'strengths'=>'Solution',
    		'presentation'=>'BP',
    		'amount'=>0,
    		'parent_id'=>'200.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium Bicarbonate',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1.4% in 10ml (isotonic)',
    		'presentation'=>'10mls',
    		'amount'=>250.00,
    		'parent_id'=>'PARENTERAL  PREPARATIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium chloride',
    		'dosage_form'=>'Infusion',
    		'strengths'=>'0.9%',
    		'presentation'=>'0.45%',
    		'amount'=>0,
    		'parent_id'=>'200.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Water for injection',
    		'dosage_form'=>'Injection',
    		'strengths'=>'10ml',
    		'presentation'=>'per amp/vial',
    		'amount'=>0,
    		'parent_id'=>'10.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'DIALYSIS SOLUTIONS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Intraperitoneal Dialysis fluid B.P.C.',
    		'dosage_form'=>'Parenteral; solution',
    		'strengths'=>'CaCl 0.22gm',
    		'presentation'=>'dextrose 17g',
    		'amount'=>0,
    		'parent_id'=>'Na acetate 4.76g'
    	] );



    	Drug::create( [
    		'drug_name'=>'Haemodialysis fluid',
    		'dosage_form'=>'NULL',
    		'strengths'=>'Heamodialysis fluid B.P.',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'DIALYSIS SOLUTIONS'
    	] );



    	Drug::create( [
    		'drug_name'=>'PSYCHOTHERAPEUTIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );


    	Drug::create( [
    		'drug_name'=>'HYPNOTICS   &   SEDATIVES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'PSYCHOTHERAPEUTIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bromazepam',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1.5mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'HYPNOTICS   &   SEDATIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bromazepam',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'3mg',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'HYPNOTICS   &   SEDATIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Diazepam',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'5mg',
    		'presentation'=>'2mg',
    		'amount'=>0,
    		'parent_id'=>'Tab.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Diazepam',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5mg/ml in 2ml',
    		'presentation'=>'Amp.',
    		'amount'=>150.00,
    		'parent_id'=>'HYPNOTICS   &   SEDATIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Flunitrazepam',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1mg',
    		'presentation'=>'Tab.',
    		'amount'=>110.00,
    		'parent_id'=>'HYPNOTICS   &   SEDATIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lorazepam',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'1mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'10.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lorazepam',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'2mg',
    		'presentation'=>'NULL',
    		'amount'=>15.00,
    		'parent_id'=>'HYPNOTICS   &   SEDATIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nitrazepam',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'HYPNOTICS   &   SEDATIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIDEPRESSANTS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'PSYCHOTHERAPEUTIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amitriptyline',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'25mg (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Amitriptyline',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clomipramine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>66.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Clomipramine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg',
    		'presentation'=>'Tab.',
    		'amount'=>66.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Citalopram',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab.',
    		'amount'=>50.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gabapentin + Methylcobalamin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'300mg + 50 mg',
    		'presentation'=>'Tab.',
    		'amount'=>50.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Imipramine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'10mg',
    		'presentation'=>'',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Imipramine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'25mg  (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Moclobemide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'150mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Olanzepine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>50.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Paroxetine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab.',
    		'amount'=>100.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Paroxetine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'30mg',
    		'presentation'=>'Tab.',
    		'amount'=>150.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sertraline',
    		'dosage_form'=>'Capsule',
    		'strengths'=>'50mg',
    		'presentation'=>'Caps.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTIDEPRESSANTS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'PSYCHOTHERAPEUTIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbamazepine',
    		'dosage_form'=>'Tablet (scored)',
    		'strengths'=>'200mg',
    		'presentation'=>'NULL',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbamazepine',
    		'dosage_form'=>'Tablet (scored)',
    		'strengths'=>'400mg',
    		'presentation'=>'NULL',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Carbamazepine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'NULL',
    		'amount'=>1500.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorpromazine',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'25mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorpromazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorpromazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg  (HCL)',
    		'presentation'=>'Tab.',
    		'amount'=>10.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorpromazine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'25mg/5ml (HCL)',
    		'presentation'=>'100mls',
    		'amount'=>1000.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chlorpromazine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'25mg/ml (HCL) in 2ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluoxethine',
    		'dosage_form'=>'Capsules',
    		'strengths'=>'20mg',
    		'presentation'=>'Cap.',
    		'amount'=>90.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluoxethine',
    		'dosage_form'=>'Injection  (oily)',
    		'strengths'=>'25mg/ml in 1ml Ampoule (decanoate or enanthate)',
    		'presentation'=>'Amp.',
    		'amount'=>350.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Flupenthixol',
    		'dosage_form'=>'Injection (depot)',
    		'strengths'=>'20mg (decanoate  or enanthate) in 1ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>900.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Flupenthixol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1.5mg',
    		'presentation'=>'3mg',
    		'amount'=>0,
    		'parent_id'=>'10.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Flupenthixol',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50mg/ml',
    		'presentation'=>'100mg/ml',
    		'amount'=>0,
    		'parent_id'=>'Amp.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Fluphenazine',
    		'dosage_form'=>'injection',
    		'strengths'=>'25mg',
    		'presentation'=>'NULL',
    		'amount'=>150.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Haloperidol',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2mg',
    		'presentation'=>'5mg.10mg',
    		'amount'=>0,
    		'parent_id'=>'7.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Haloperidol',
    		'dosage_form'=>'injection',
    		'strengths'=>'5mg/ml',
    		'presentation'=>'injection',
    		'amount'=>630.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Lithium Carbonate',
    		'dosage_form'=>'Capsules/ Tablets',
    		'strengths'=>'300mg',
    		'presentation'=>'Cap./ Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pimozide',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'4mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pimozide',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'10mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Thioridazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab.',
    		'amount'=>80.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Thioridazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'Tab.',
    		'amount'=>70.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Thioridazine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'25mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>0,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Trifluoperazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1mg',
    		'presentation'=>'Tab',
    		'amount'=>5.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Trifluoperazine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>7.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valproic acid (sodium valproate)',
    		'dosage_form'=>'Tablet (enteric-coated)',
    		'strengths'=>'200mg',
    		'presentation'=>'Tab',
    		'amount'=>60.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'Valproic acid (sodium valproate)',
    		'dosage_form'=>'Tablet (enteric-coated)',
    		'strengths'=>'500mg',
    		'presentation'=>'NULL',
    		'amount'=>140.00,
    		'parent_id'=>'ANTI PSYCHOTICS    (MAJOR TRANQUILIZERS)'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTIDOTES TO ANTI-PSYCHOTIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'PSYCHOTHERAPEUTIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Benzhexol (triehexylphenidyl)',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'2mg',
    		'presentation'=>'5mg (HCL)',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Biperidem',
    		'dosage_form'=>'Tablet (Hcl)',
    		'strengths'=>'2mg',
    		'presentation'=>'5mg (Hcl)',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Biperidem',
    		'dosage_form'=>'Injection',
    		'strengths'=>'5mg/ml',
    		'presentation'=>'Amp.',
    		'amount'=>0,
    		'parent_id'=>'ANTIDOTES TO ANTI-PSYCHOTIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'RESPIRATORY SYSTEM DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI ASTHMATIC DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'RESPIRATORY SYSTEM DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Aminophylline',
    		'dosage_form'=>'Injection',
    		'strengths'=>'25mg/ml  in 10ml  Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>220.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Beclomethasone',
    		'dosage_form'=>'Aerosol inhalation',
    		'strengths'=>'0.050mg/metered dose',
    		'presentation'=>'Spray',
    		'amount'=>1500.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ephedrine + Theophyline',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'11mg + 20 mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Epinephrine (Adrenaline)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1mg/ml  (1 in 1000) in 1ml Ampoule',
    		'presentation'=>'Amp.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Hydrocortisone',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100mg/vial',
    		'presentation'=>'Vial',
    		'amount'=>120.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ipratropium bromide',
    		'dosage_form'=>'Inhalation (aerosol)',
    		'strengths'=>'20 micrograms per metered dose',
    		'presentation'=>'Spray',
    		'amount'=>1000.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salbutamol',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'2mg',
    		'presentation'=>'4mg (Sulphate)',
    		'amount'=>0,
    		'parent_id'=>'10.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salbutamol',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'2mg/5ml  (Sulphate)',
    		'presentation'=>'100mls',
    		'amount'=>400.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salbutamol',
    		'dosage_form'=>'Aerosol',
    		'strengths'=>'0.1mg/metered dose',
    		'presentation'=>'Spray',
    		'amount'=>700.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salbutamol',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500ug/ml',
    		'presentation'=>'Amp',
    		'amount'=>350.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salmeterol',
    		'dosage_form'=>'Inhalation',
    		'strengths'=>'100mcg/dose',
    		'presentation'=>'Spray',
    		'amount'=>4200.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salmeterol',
    		'dosage_form'=>'Inhalation',
    		'strengths'=>'250mcg/dose',
    		'presentation'=>'Spray',
    		'amount'=>4200.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Salmeterol + Fluticasone',
    		'dosage_form'=>'Inhalation',
    		'strengths'=>'250mcg /100mcg',
    		'presentation'=>'Spray',
    		'amount'=>4000.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Theophylline',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'125mg',
    		'presentation'=>'Tab.',
    		'amount'=>15.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Theophylline',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'250mg (SR)',
    		'presentation'=>'Tab.',
    		'amount'=>30.00,
    		'parent_id'=>'ANTI ASTHMATIC DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'ANTI-TUSSIVES',
    		'dosage_form'=>'EXPECTORANT AND MUCOLYTICS',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'0'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bromhexine',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'8mg',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'ANTI-TUSSIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bromhexine',
    		'dosage_form'=>'Elixir',
    		'strengths'=>'4mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>230.00,
    		'parent_id'=>'ANTI-TUSSIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cough Mixtures containing Codeine',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'NULL',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-TUSSIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cough Mixtures containing Guaphenesin',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'NULL',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-TUSSIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Dextromethorphan hydrobromide',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'15mg/5ml',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-TUSSIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Diphenyl hydramine Mixtures',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>200.00,
    		'parent_id'=>'ANTI-TUSSIVES'
    	] );



    	Drug::create( [
    		'drug_name'=>'VITAMINS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Alpha tocopheryl acetate( Vitamin E)',
    		'dosage_form'=>'Capsules/ Tablet',
    		'strengths'=>'100mg',
    		'presentation'=>'Cap./Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Alpha tocopheryl acetate( Vitamin E)',
    		'dosage_form'=>'Capsules/ Tablet',
    		'strengths'=>'1000 I.U',
    		'presentation'=>'Cap./Tab.',
    		'amount'=>25.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ascorbic Acid',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'100mg',
    		'presentation'=>'Tab.',
    		'amount'=>2.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ascorbic Acid',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'100mg/5ml',
    		'presentation'=>'200mg/5ml',
    		'amount'=>0,
    		'parent_id'=>'100mls'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ascorbic Acid',
    		'dosage_form'=>'Effervescent tablets',
    		'strengths'=>'1g',
    		'presentation'=>'Tab.',
    		'amount'=>750.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cyanocobalamin (B12)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'0.25mg in 1ml',
    		'presentation'=>'1mg/ml',
    		'amount'=>0,
    		'parent_id'=>'100.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cyanocobalamin (B12)',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'0.05 mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ergocalciferol (Vit. D)',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'capsules',
    		'presentation'=>'0.25mg',
    		'amount'=>0,
    		'parent_id'=>'Tab.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Folic acid',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5 mg',
    		'presentation'=>'Tab.',
    		'amount'=>3.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Multivitamin',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'NULL',
    		'presentation'=>'100mls',
    		'amount'=>200.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Multivitamin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'NULL',
    		'presentation'=>'Caps.',
    		'amount'=>5.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Multivitamin',
    		'dosage_form'=>'Drops',
    		'strengths'=>'NULL',
    		'presentation'=>'10mls',
    		'amount'=>200.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Pyridoxine (Vitamin B6)',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'102050',
    		'presentation'=>'mg  (HCL)',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Retinol (Vitamin A)',
    		'dosage_form'=>'Tablets/Capsules',
    		'strengths'=>'1.5mg',
    		'presentation'=>'7.5mg ',
    		'amount'=>0,
    		'parent_id'=>'50 000 units) respectively.'
    	] );



    	Drug::create( [
    		'drug_name'=>'Retinol (Vitamin A)',
    		'dosage_form'=>'Tablets/Capsules',
    		'strengths'=>'10000iu(5.5mg)/5ml',
    		'presentation'=>'Caps.',
    		'amount'=>20.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Retinol (Vitamin A)',
    		'dosage_form'=>'Syrup/Emulsion',
    		'strengths'=>'NULL',
    		'presentation'=>'60mls',
    		'amount'=>300.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Retinol (Vitamin A)',
    		'dosage_form'=>'Syrup/Emulsion',
    		'strengths'=>'NULL',
    		'presentation'=>'200mls',
    		'amount'=>310.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Riboflavine (Vitamin B2)',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Thiamine (Vitamin B1)',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'25',
    		'presentation'=>'50mg (HCL)',
    		'amount'=>0,
    		'parent_id'=>'5.00'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vitamin  B Complex',
    		'dosage_form'=>'Tablets/Capsules',
    		'strengths'=>'NULL',
    		'presentation'=>'Tab.',
    		'amount'=>2.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vitamin  B Complex',
    		'dosage_form'=>'Syrup',
    		'strengths'=>'NULL',
    		'presentation'=>'100mls',
    		'amount'=>150.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vitamin  B Complex',
    		'dosage_form'=>'Injection',
    		'strengths'=>'NULL',
    		'presentation'=>'Vial',
    		'amount'=>80.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vitamins B1+B6+B12',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'100mg+200mg+200mcg',
    		'presentation'=>'Tab',
    		'amount'=>20.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vitamins B1+B6+B12',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100mg+100mg+1000mcg',
    		'presentation'=>'Amp.',
    		'amount'=>200.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Yeast BPC',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'300mg',
    		'presentation'=>'Tab.',
    		'amount'=>2.00,
    		'parent_id'=>'VITAMINS'
    	] );



    	Drug::create( [
    		'drug_name'=>'MINERALS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Calcium Gluconate',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'600mg',
    		'presentation'=>'Tab.',
    		'amount'=>3.00,
    		'parent_id'=>'MINERALS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Calcium Lactate',
    		'dosage_form'=>'Tablets',
    		'strengths'=>'300mg',
    		'presentation'=>'Tab.',
    		'amount'=>5.00,
    		'parent_id'=>'MINERALS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Sodium Fluoride',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2.2 mg',
    		'presentation'=>'Tab.',
    		'amount'=>0,
    		'parent_id'=>'MINERALS'
    	] );



    	Drug::create( [
    		'drug_name'=>'CYTOTOXICS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'5 Fluorouracil (5FU)',
    		'dosage_form'=>'Injection',
    		'strengths'=>'500mg',
    		'presentation'=>'NULL',
    		'amount'=>500,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Doxorubicin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50mg',
    		'presentation'=>'NULL',
    		'amount'=>4000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Bicalutamide',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'50mg',
    		'presentation'=>'NULL',
    		'amount'=>5500,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cisplatinium',
    		'dosage_form'=>'',
    		'strengths'=>'50mg',
    		'presentation'=>'NULL',
    		'amount'=>3000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cyclophosphamides',
    		'dosage_form'=>'Tablet/ Injection',
    		'strengths'=>'500mg',
    		'presentation'=>'vial',
    		'amount'=>1000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Docetaxel',
    		'dosage_form'=>'Injection',
    		'strengths'=>'80mg',
    		'presentation'=>'vial',
    		'amount'=>55000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Epirubicin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50mg',
    		'presentation'=>'vial',
    		'amount'=>8500,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Gemcitabine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'1gm',
    		'presentation'=>'vial',
    		'amount'=>16000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Granisetron',
    		'dosage_form'=>'Injection',
    		'strengths'=>'3mg',
    		'presentation'=>'vial',
    		'amount'=>3000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Granisetron',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'2mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Leucovorin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'50mg',
    		'presentation'=>'vial',
    		'amount'=>1500,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Leucovorin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'5mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ondansetron',
    		'dosage_form'=>'Injection',
    		'strengths'=>'8mg',
    		'presentation'=>'vial',
    		'amount'=>2000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Ondansetron',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'4mg',
    		'presentation'=>'Tab',
    		'amount'=>0,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Oxaliplatin',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100mg',
    		'presentation'=>'vial',
    		'amount'=>40000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Paclitaxel',
    		'dosage_form'=>'Injection',
    		'strengths'=>'100mg',
    		'presentation'=>'vial',
    		'amount'=>20000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Tamoxifen',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'20mg',
    		'presentation'=>'Tab',
    		'amount'=>1000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Vincristine',
    		'dosage_form'=>'Injection',
    		'strengths'=>'2mg',
    		'presentation'=>'Ampoule',
    		'amount'=>4500,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Xeloda',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'1 pack',
    		'presentation'=>'Tab',
    		'amount'=>50000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zoladex Inj',
    		'dosage_form'=>'Injection',
    		'strengths'=>'3.6mg',
    		'presentation'=>'Prefilled syringe',
    		'amount'=>24000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Zoledronic acid',
    		'dosage_form'=>'Solution',
    		'strengths'=>'5mg/100ml',
    		'presentation'=>'Solution',
    		'amount'=>20000,
    		'parent_id'=>'CYTOTOXICS'
    	] );



    	Drug::create( [
    		'drug_name'=>'MISCELLANEOUS DRUGS',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'ENZYMES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'MISCELLANEOUS DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Trypsin + Chymotrypsin',
    		'dosage_form'=>'Tablet',
    		'strengths'=>'Trypsin 50000 Armour units + Chymotrypsin 50000 Armour units',
    		'presentation'=>'Tab.',
    		'amount'=>20.00,
    		'parent_id'=>'ENZYMES'
    	] );



    	Drug::create( [
    		'drug_name'=>'CONSUMABLES',
    		'dosage_form'=>'NULL',
    		'strengths'=>'NULL',
    		'presentation'=>'NULL',
    		'amount'=>0,
    		'parent_id'=>'NULL'
    	] );



    	Drug::create( [
    		'drug_name'=>'Blood giving set',
    		'dosage_form'=>'Unit',
    		'strengths'=>'Unit',
    		'presentation'=>'Unit',
    		'amount'=>100.00,
    		'parent_id'=>'MISCELLANEOUS DRUGS'
    	] );



    	Drug::create( [
    		'drug_name'=>'Chromic  catgut',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>250.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Cotton wool',
    		'dosage_form'=>'Roll',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>100.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Crepe bandage',
    		'dosage_form'=>'Roll',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>150.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Folleys Catether',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>150.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Infusion set',
    		'dosage_form'=>'Unit',
    		'strengths'=>'Unit',
    		'presentation'=>'Unit',
    		'amount'=>50.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'IV Cannula',
    		'dosage_form'=>'Size',
    		'strengths'=>'14G16G18G20G-23G25G',
    		'presentation'=>'Unit',
    		'amount'=>100.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Mucus extractor',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>130.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Needle',
    		'dosage_form'=>'Unit',
    		'strengths'=>'Unit',
    		'presentation'=>'Unit',
    		'amount'=>10.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'NG Tube',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>100.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Nylon',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>250.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'plaster',
    		'dosage_form'=>'Roll',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>250.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Scalp vein needle',
    		'dosage_form'=>'Size',
    		'strengths'=>'20G21G22G23G25G',
    		'presentation'=>'Unit',
    		'amount'=>50.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Soluset',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>1400.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Surgical blade',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>20.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Surgical Gloves',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>70.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Syringe/Needle',
    		'dosage_form'=>'Unit',
    		'strengths'=>'2ml',
    		'presentation'=>'Unit',
    		'amount'=>20.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Syringe/Needle',
    		'dosage_form'=>'Unit',
    		'strengths'=>'5ml',
    		'presentation'=>'Unit',
    		'amount'=>20.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Syringe/Needle',
    		'dosage_form'=>'Unit',
    		'strengths'=>'10ml',
    		'presentation'=>'Unit',
    		'amount'=>20.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Syringe/Needle',
    		'dosage_form'=>'Unit',
    		'strengths'=>'20ml',
    		'presentation'=>'Unit',
    		'amount'=>40.00,
    		'parent_id'=>'CONSUMABLES'
    	] );



    	Drug::create( [
    		'drug_name'=>'Urine Bag',
    		'dosage_form'=>'Size',
    		'strengths'=>'All sizes',
    		'presentation'=>'Unit',
    		'amount'=>200.00,
    		'parent_id'=>'CONSUMABLES'
    	] );




    }
}
