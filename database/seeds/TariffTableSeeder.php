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
            'id'=>1,
            'identifier'=>'tAriFf-aCt15cdbb6ab54990',
            'tariff_code'=>'NHIS-010-001',
            'description'=>'GENERAL DESCRIPTION',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:19',
            'updated_at'=>'2019-05-15 05:50:19'
        ] );



        Tariff::create( [
            'id'=>2,
            'identifier'=>'tAriFf-aCt15cdbb6ac06e07',
            'tariff_code'=>'NHIS-010-001',
            'description'=>'Specialist Initial Consultation',
            'parent_id'=>1,
            'amount'=>'1500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:20',
            'updated_at'=>'2019-05-15 05:50:20'
        ] );



        Tariff::create( [
            'id'=>3,
            'identifier'=>'tAriFf-aCt15cdbb6ae2b374',
            'tariff_code'=>'NHIS-010-002',
            'description'=>'Specialist Review ( Per visit)',
            'parent_id'=>1,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:22',
            'updated_at'=>'2019-05-15 05:50:22'
        ] );



        Tariff::create( [
            'id'=>4,
            'identifier'=>'tAriFf-aCt15cdbb6afe83d6',
            'tariff_code'=>'NHIS-010-003',
            'description'=>'Nursing Care (per day)',
            'parent_id'=>1,
            'amount'=>'700.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:23',
            'updated_at'=>'2019-05-15 05:50:23'
        ] );



        Tariff::create( [
            'id'=>5,
            'identifier'=>'tAriFf-aCt15cdbb6b048ddf',
            'tariff_code'=>'NHIS-010-004',
            'description'=>'Special Nursing Care (e.g. Intensive care, SCBU, Paediatric Emergency\n etc)',
            'parent_id'=>1,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>6,
            'identifier'=>'tAriFf-aCt15cdbb6b065f7b',
            'tariff_code'=>'NHIS-010-005',
            'description'=>'Hospital Bed Occupancy',
            'parent_id'=>1,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>7,
            'identifier'=>'tAriFf-aCt15cdbb6b09d8b7',
            'tariff_code'=>'NHIS-002000',
            'description'=>'E.N.T/MAXILOFACIAL SURGERY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>8,
            'identifier'=>'tAriFf-aCt15cdbb6b0b1d53',
            'tariff_code'=>'NHIS-021-000',
            'description'=>'Minor Procedures/Surgeries',
            'parent_id'=>7,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>9,
            'identifier'=>'tAriFf-aCt15cdbb6b0c2403',
            'tariff_code'=>'NHIS-021-001',
            'description'=>'Antral Washout',
            'parent_id'=>8,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>10,
            'identifier'=>'tAriFf-aCt15cdbb6b0d2614',
            'tariff_code'=>'NHIS-021-002',
            'description'=>'Aseptic Destruction of Labyrinth For Meniere\'s Disease',
            'parent_id'=>8,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>11,
            'identifier'=>'tAriFf-aCt15cdbb6b0eda85',
            'tariff_code'=>'NHIS-021-003',
            'description'=>'Audiometry',
            'parent_id'=>8,
            'amount'=>'10000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:24',
            'updated_at'=>'2019-05-15 05:50:24'
        ] );



        Tariff::create( [
            'id'=>12,
            'identifier'=>'tAriFf-aCt15cdbb6b10f167',
            'tariff_code'=>'NHIS-021-004',
            'description'=>'Electrocautery of Nose',
            'parent_id'=>8,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>13,
            'identifier'=>'tAriFf-aCt15cdbb6b12642d',
            'tariff_code'=>'NHIS-021-005',
            'description'=>'Foreign Body Removal From Ear',
            'parent_id'=>8,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>14,
            'identifier'=>'tAriFf-aCt15cdbb6b1392b1',
            'tariff_code'=>'NHIS-021-006',
            'description'=>'Foreign Body Removal From Nose',
            'parent_id'=>8,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>15,
            'identifier'=>'tAriFf-aCt15cdbb6b1519b9',
            'tariff_code'=>'NHIS-021-007',
            'description'=>'I&D of quinsy/retropharyngeal abscess/ludwig angina',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>16,
            'identifier'=>'tAriFf-aCt15cdbb6b1689a2',
            'tariff_code'=>'NHIS-021-008',
            'description'=>'Indirect Laryngoscopy',
            'parent_id'=>8,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>17,
            'identifier'=>'tAriFf-aCt15cdbb6b17bc47',
            'tariff_code'=>'NHIS-021-009',
            'description'=>'Myringoplasty',
            'parent_id'=>8,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>18,
            'identifier'=>'tAriFf-aCt15cdbb6b1b4b03',
            'tariff_code'=>'NHIS-021-010',
            'description'=>'Myringostomy; bilat, unilat, with grommet',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>19,
            'identifier'=>'tAriFf-aCt15cdbb6b1d7fc4',
            'tariff_code'=>'NHIS-021-011',
            'description'=>'Preauricular Sinus',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:25',
            'updated_at'=>'2019-05-15 05:50:25'
        ] );



        Tariff::create( [
            'id'=>20,
            'identifier'=>'tAriFf-aCt15cdbb6b20615a',
            'tariff_code'=>'NHIS-021-012',
            'description'=>'Release of tongue tie',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>21,
            'identifier'=>'tAriFf-aCt15cdbb6b228e79',
            'tariff_code'=>'NHIS-021-013',
            'description'=>'Sinus Antroscopy',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>22,
            'identifier'=>'tAriFf-aCt15cdbb6b23ff41',
            'tariff_code'=>'NHIS-021-014',
            'description'=>'Staples Mobilisation',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>23,
            'identifier'=>'tAriFf-aCt15cdbb6b259bc0',
            'tariff_code'=>'NHIS-021-015',
            'description'=>'Tympanometry',
            'parent_id'=>8,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>24,
            'identifier'=>'tAriFf-aCt15cdbb6b273a4c',
            'tariff_code'=>'NHIS-022-000',
            'description'=>'Intermediate Procedures/Surgeries',
            'parent_id'=>7,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>25,
            'identifier'=>'tAriFf-aCt15cdbb6b28bff3',
            'tariff_code'=>'NHIS-022-001',
            'description'=>'Adenoidectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>26,
            'identifier'=>'tAriFf-aCt15cdbb6b2997c3',
            'tariff_code'=>'NHIS-022-002',
            'description'=>'Antrostomy - Nasal Sinus Surgery (e.g. middle/inferior meatal/\n Caldwell Luc)',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>27,
            'identifier'=>'tAriFf-aCt15cdbb6b2b08e7',
            'tariff_code'=>'NHIS-022-003',
            'description'=>'Aural Polypectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>28,
            'identifier'=>'tAriFf-aCt15cdbb6b2cfc17',
            'tariff_code'=>'NHIS-022-004',
            'description'=>'Cleft Lip Repairs.',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>29,
            'identifier'=>'tAriFf-aCt15cdbb6b2e6d04',
            'tariff_code'=>'NHIS-022-005',
            'description'=>'cortical mastoidectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:26',
            'updated_at'=>'2019-05-15 05:50:26'
        ] );



        Tariff::create( [
            'id'=>30,
            'identifier'=>'tAriFf-aCt15cdbb6b302f29',
            'tariff_code'=>'NHIS-022-006',
            'description'=>'Cryosurgery',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>31,
            'identifier'=>'tAriFf-aCt15cdbb6b326c77',
            'tariff_code'=>'NHIS-022-007',
            'description'=>'Direct Laryngoscopy ( Under GA)',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>32,
            'identifier'=>'tAriFf-aCt15cdbb6b335173',
            'tariff_code'=>'NHIS-022-008',
            'description'=>'EUA Nasopharynx + biopsy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>33,
            'identifier'=>'tAriFf-aCt15cdbb6b344146',
            'tariff_code'=>'NHIS-022-009',
            'description'=>'Excision of Nasomaxillary mass',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>34,
            'identifier'=>'tAriFf-aCt15cdbb6b355b4a',
            'tariff_code'=>'NHIS-022-010',
            'description'=>'Lateral rhinotomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>35,
            'identifier'=>'tAriFf-aCt15cdbb6b36a032',
            'tariff_code'=>'NHIS-022-011',
            'description'=>'Meatoplasty (for Traumatic Meatus Atresia)',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>36,
            'identifier'=>'tAriFf-aCt15cdbb6b37fbd3',
            'tariff_code'=>'NHIS-022-012',
            'description'=>'Nasal Polypectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>37,
            'identifier'=>'tAriFf-aCt15cdbb6b3aca92',
            'tariff_code'=>'NHIS-022-013',
            'description'=>'Oesophagoscopy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>38,
            'identifier'=>'tAriFf-aCt15cdbb6b3c25c9',
            'tariff_code'=>'NHIS-022-014',
            'description'=>'Partial Amputation of the pinna',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>39,
            'identifier'=>'tAriFf-aCt15cdbb6b3dbfa9',
            'tariff_code'=>'NHIS-022-015',
            'description'=>'Septoplasty',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>40,
            'identifier'=>'tAriFf-aCt15cdbb6b3f18ff',
            'tariff_code'=>'NHIS-022-016',
            'description'=>'Submandibular gland excision',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:27',
            'updated_at'=>'2019-05-15 05:50:27'
        ] );



        Tariff::create( [
            'id'=>41,
            'identifier'=>'tAriFf-aCt15cdbb6b417373',
            'tariff_code'=>'NHIS-022-017',
            'description'=>'superficial parotidectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>42,
            'identifier'=>'tAriFf-aCt15cdbb6b447207',
            'tariff_code'=>'NHIS-022-018',
            'description'=>'Thyroglossal cyst/fistula excision',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>43,
            'identifier'=>'tAriFf-aCt15cdbb6b46083a',
            'tariff_code'=>'NHIS-022-019',
            'description'=>'Tonsillectomy/Adenotonsilectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>44,
            'identifier'=>'tAriFf-aCt15cdbb6b478f4c',
            'tariff_code'=>'NHIS-022-020',
            'description'=>'Tracheostomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>45,
            'identifier'=>'tAriFf-aCt15cdbb6b4a9e6b',
            'tariff_code'=>'NHIS-022-021',
            'description'=>'Turbinectomy',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>46,
            'identifier'=>'tAriFf-aCt15cdbb6b4be1e5',
            'tariff_code'=>'NHIS-022-022',
            'description'=>'Young\'s Operation',
            'parent_id'=>24,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>47,
            'identifier'=>'tAriFf-aCt15cdbb6b4cfcc5',
            'tariff_code'=>'NHIS-023-000',
            'description'=>'Major Procedures/surgeries',
            'parent_id'=>7,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>48,
            'identifier'=>'tAriFf-aCt15cdbb6b4e82fe',
            'tariff_code'=>'NHIS-023-001',
            'description'=>'Ant Ethmoidal Artery ligation',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:28',
            'updated_at'=>'2019-05-15 05:50:28'
        ] );



        Tariff::create( [
            'id'=>49,
            'identifier'=>'tAriFf-aCt15cdbb6b50c9c7',
            'tariff_code'=>'NHIS-023-002',
            'description'=>'Aryteniodectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>50,
            'identifier'=>'tAriFf-aCt15cdbb6b524de0',
            'tariff_code'=>'NHIS-023-003',
            'description'=>'Autogenous Bone Graft To Mastoid Cavity',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>51,
            'identifier'=>'tAriFf-aCt15cdbb6b54c993',
            'tariff_code'=>'NHIS-023-004',
            'description'=>'Cleft Palate Repairs.',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>52,
            'identifier'=>'tAriFf-aCt15cdbb6b565fee',
            'tariff_code'=>'NHIS-023-005',
            'description'=>'Dacrocystorhinostomy (DCR)',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>53,
            'identifier'=>'tAriFf-aCt15cdbb6b57e6e1',
            'tariff_code'=>'NHIS-023-006',
            'description'=>'Ethmoidectomy; Fronto, External',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>54,
            'identifier'=>'tAriFf-aCt15cdbb6b5b2fa9',
            'tariff_code'=>'NHIS-023-007',
            'description'=>'Fenestration',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>55,
            'identifier'=>'tAriFf-aCt15cdbb6b5deab8',
            'tariff_code'=>'NHIS-023-008',
            'description'=>'Fracture Reduction of the Nose',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:29',
            'updated_at'=>'2019-05-15 05:50:29'
        ] );



        Tariff::create( [
            'id'=>56,
            'identifier'=>'tAriFf-aCt15cdbb6b6043f0',
            'tariff_code'=>'NHIS-023-009',
            'description'=>'Internal Auditory Meatus Surgery',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>57,
            'identifier'=>'tAriFf-aCt15cdbb6b60f3da',
            'tariff_code'=>'NHIS-023-010',
            'description'=>'Intranasal ethmoidectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>58,
            'identifier'=>'tAriFf-aCt15cdbb6b6221f9',
            'tariff_code'=>'NHIS-023-011',
            'description'=>'Labyrinthotomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>59,
            'identifier'=>'tAriFf-aCt15cdbb6b63805d',
            'tariff_code'=>'NHIS-023-012',
            'description'=>'Laryngeal Stenosis, Laryngocele, Abductor Paralysis, Laryngo-Fissure',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>60,
            'identifier'=>'tAriFf-aCt15cdbb6b667c29',
            'tariff_code'=>'NHIS-023-013',
            'description'=>'Laryngectomy (All types)',
            'parent_id'=>47,
            'amount'=>'150000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>61,
            'identifier'=>'tAriFf-aCt15cdbb6b68578c',
            'tariff_code'=>'NHIS-023-014',
            'description'=>'Laryngoplasty',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>62,
            'identifier'=>'tAriFf-aCt15cdbb6b6ec443',
            'tariff_code'=>'NHIS-023-015',
            'description'=>'Mastoid  Surgery/Mastoidectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:30',
            'updated_at'=>'2019-05-15 05:50:30'
        ] );



        Tariff::create( [
            'id'=>63,
            'identifier'=>'tAriFf-aCt15cdbb6b7086b1',
            'tariff_code'=>'NHIS-023-016',
            'description'=>'Maxilectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>64,
            'identifier'=>'tAriFf-aCt15cdbb6b718ae8',
            'tariff_code'=>'NHIS-023-017',
            'description'=>'Muscle Grafting To Mastoid Cavity',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>65,
            'identifier'=>'tAriFf-aCt15cdbb6b728f10',
            'tariff_code'=>'NHIS-023-018',
            'description'=>'Neck exploration for penetrating neck Injury',
            'parent_id'=>47,
            'amount'=>'200000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>66,
            'identifier'=>'tAriFf-aCt15cdbb6b7393d3',
            'tariff_code'=>'NHIS-023-019',
            'description'=>'Parapharyngeal Excission/I&D/Tumour excission',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>67,
            'identifier'=>'tAriFf-aCt15cdbb6b742bc6',
            'tariff_code'=>'NHIS-023-020',
            'description'=>'Pharyngoplasty',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>68,
            'identifier'=>'tAriFf-aCt15cdbb6b751adb',
            'tariff_code'=>'NHIS-023-021',
            'description'=>'Posterior Canal Reconstruction After Radical Mastoidectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>69,
            'identifier'=>'tAriFf-aCt15cdbb6b77d755',
            'tariff_code'=>'NHIS-023-022',
            'description'=>'Reduction and fixation of Jaw fractures',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>70,
            'identifier'=>'tAriFf-aCt15cdbb6b79edb4',
            'tariff_code'=>'NHIS-023-023',
            'description'=>'Reduction and fixation of maxillary fractures',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>71,
            'identifier'=>'tAriFf-aCt15cdbb6b7b352a',
            'tariff_code'=>'NHIS-023-024',
            'description'=>'Rhinoplasty',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>72,
            'identifier'=>'tAriFf-aCt15cdbb6b7c6595',
            'tariff_code'=>'NHIS-023-025',
            'description'=>'Sequestrectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>73,
            'identifier'=>'tAriFf-aCt15cdbb6b7e2b62',
            'tariff_code'=>'NHIS-023-026',
            'description'=>'Stapedial Surgery For Otosclerosis/Stapedectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:31',
            'updated_at'=>'2019-05-15 05:50:31'
        ] );



        Tariff::create( [
            'id'=>74,
            'identifier'=>'tAriFf-aCt15cdbb6b8003e9',
            'tariff_code'=>'NHIS-023-027',
            'description'=>'Styloidectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>75,
            'identifier'=>'tAriFf-aCt15cdbb6b819fba',
            'tariff_code'=>'NHIS-023-028',
            'description'=>'Total parotidectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>76,
            'identifier'=>'tAriFf-aCt15cdbb6b83816c',
            'tariff_code'=>'NHIS-023-029',
            'description'=>'Tympanoplasty',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>77,
            'identifier'=>'tAriFf-aCt15cdbb6b84ad13',
            'tariff_code'=>'NHIS-023-030',
            'description'=>'Vidian Neurectomy',
            'parent_id'=>47,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>78,
            'identifier'=>'tAriFf-aCt15cdbb6b85c91e',
            'tariff_code'=>'NHIS-030-000',
            'description'=>'GYNAECOLOGY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>79,
            'identifier'=>'tAriFf-aCt15cdbb6b88950d',
            'tariff_code'=>'NHIS-030-001',
            'description'=>'Antenatal care (General)',
            'parent_id'=>78,
            'amount'=>'7500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>80,
            'identifier'=>'tAriFf-aCt15cdbb6b8a1a13',
            'tariff_code'=>'NHIS-030-002',
            'description'=>'Normal Delivery (General)',
            'parent_id'=>78,
            'amount'=>'7000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>81,
            'identifier'=>'tAriFf-aCt15cdbb6b8d295e',
            'tariff_code'=>'NHIS-030-003',
            'description'=>'Delivery of Multiple Pregnancy (General)',
            'parent_id'=>78,
            'amount'=>'10000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>82,
            'identifier'=>'tAriFf-aCt15cdbb6b8e2bcc',
            'tariff_code'=>'NHIS-031-001',
            'description'=>'Minor Procedures/surgeries - Cervical  Polypectomy',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:32',
            'updated_at'=>'2019-05-15 05:50:32'
        ] );



        Tariff::create( [
            'id'=>83,
            'identifier'=>'tAriFf-aCt15cdbb6b910ec2',
            'tariff_code'=>'NHIS-031-002',
            'description'=>'Minor Procedures/surgeries - Cervical Cone Biopsy',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:33',
            'updated_at'=>'2019-05-15 05:50:33'
        ] );



        Tariff::create( [
            'id'=>84,
            'identifier'=>'tAriFf-aCt15cdbb6b9278ea',
            'tariff_code'=>'NHIS-031-003',
            'description'=>'Minor Procedures/surgeries - Colposcopy',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:33',
            'updated_at'=>'2019-05-15 05:50:33'
        ] );



        Tariff::create( [
            'id'=>85,
            'identifier'=>'tAriFf-aCt15cdbb6b94ca4e',
            'tariff_code'=>'NHIS-031-004',
            'description'=>'Minor Procedures/surgeries - D&C / Evacuation Of Retained Products Of Conception',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:33',
            'updated_at'=>'2019-05-15 05:50:33'
        ] );



        Tariff::create( [
            'id'=>86,
            'identifier'=>'tAriFf-aCt15cdbb6b96a1a6',
            'tariff_code'=>'NHIS-031-005',
            'description'=>'Minor Procedures/surgeries - Destructive delivery (cranioembrayotomy)',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:33',
            'updated_at'=>'2019-05-15 05:50:33'
        ] );



        Tariff::create( [
            'id'=>87,
            'identifier'=>'tAriFf-aCt15cdbb6b97911d',
            'tariff_code'=>'NHIS-031-006',
            'description'=>'Minor Procedures/surgeries - Excision / Diathermy Of Warts',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:33',
            'updated_at'=>'2019-05-15 05:50:33'
        ] );



        Tariff::create( [
            'id'=>88,
            'identifier'=>'tAriFf-aCt15cdbb6b99b44d',
            'tariff_code'=>'NHIS-031-007',
            'description'=>'Minor Procedures/surgeries - Excision Of Vaginal Septum',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:33',
            'updated_at'=>'2019-05-15 05:50:33'
        ] );



        Tariff::create( [
            'id'=>89,
            'identifier'=>'tAriFf-aCt15cdbb6ba6c898',
            'tariff_code'=>'NHIS-031-008',
            'description'=>'Minor Procedures/surgeries - Hysteroscopy',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:34',
            'updated_at'=>'2019-05-15 05:50:34'
        ] );



        Tariff::create( [
            'id'=>90,
            'identifier'=>'tAriFf-aCt15cdbb6bae9950',
            'tariff_code'=>'NHIS-031-009',
            'description'=>'Minor Procedures/surgeries - Labial Cyst',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:34',
            'updated_at'=>'2019-05-15 05:50:34'
        ] );



        Tariff::create( [
            'id'=>91,
            'identifier'=>'tAriFf-aCt15cdbb6bb16658',
            'tariff_code'=>'NHIS-031-010',
            'description'=>'Minor Procedures/surgeries - Laparascopy + Dye Test',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>92,
            'identifier'=>'tAriFf-aCt15cdbb6bb2cf60',
            'tariff_code'=>'NHIS-031-011',
            'description'=>'Minor Procedures/surgeries - Marsupialisation ( Bartholin\'s Cyst )',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>93,
            'identifier'=>'tAriFf-aCt15cdbb6bb394d5',
            'tariff_code'=>'NHIS-031-012',
            'description'=>'Minor Procedures/surgeries - Pap Smear Procedure',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>94,
            'identifier'=>'tAriFf-aCt15cdbb6bb5a3b2',
            'tariff_code'=>'NHIS-031-013',
            'description'=>'Minor Procedures/surgeries - Perineal Warts',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>95,
            'identifier'=>'tAriFf-aCt15cdbb6bb676df',
            'tariff_code'=>'NHIS-031-014',
            'description'=>'Minor Procedures/surgeries - Repair of Episiotomy',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>96,
            'identifier'=>'tAriFf-aCt15cdbb6bb77c15',
            'tariff_code'=>'NHIS-031-015',
            'description'=>'Minor Procedures/surgeries - Uterine Evacuation',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>97,
            'identifier'=>'tAriFf-aCt15cdbb6bb98a5d',
            'tariff_code'=>'NHIS-031-016',
            'description'=>'Minor Procedures/surgeries - Vaginal Cyst Enucleation',
            'parent_id'=>78,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>98,
            'identifier'=>'tAriFf-aCt15cdbb6bba904f',
            'tariff_code'=>'NHIS-032-000',
            'description'=>'Intermediate Procedures/surgeries',
            'parent_id'=>78,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>99,
            'identifier'=>'tAriFf-aCt15cdbb6bbe2dba',
            'tariff_code'=>'NHIS-032-001',
            'description'=>'Cervical Circlage/Shirodkar Suture',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>100,
            'identifier'=>'tAriFf-aCt15cdbb6bbf06cf',
            'tariff_code'=>'NHIS-032-002',
            'description'=>'Colporrhaphy - Vaginal wall repair/Colpoperineorrhaphy',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:35',
            'updated_at'=>'2019-05-15 05:50:35'
        ] );



        Tariff::create( [
            'id'=>101,
            'identifier'=>'tAriFf-aCt15cdbb6bc192d5',
            'tariff_code'=>'NHIS-032-003',
            'description'=>'Diagnostic Laparoscopy',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>102,
            'identifier'=>'tAriFf-aCt15cdbb6bc2511c',
            'tariff_code'=>'NHIS-032-004',
            'description'=>'Hydrotubation',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>103,
            'identifier'=>'tAriFf-aCt15cdbb6bc2fb32',
            'tariff_code'=>'NHIS-032-005',
            'description'=>'Hymenectomy and repair of Hymen',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>104,
            'identifier'=>'tAriFf-aCt15cdbb6bc3ab10',
            'tariff_code'=>'NHIS-032-006',
            'description'=>'Instrumental Delivery (Forceps, Vacuum Extraction)',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>105,
            'identifier'=>'tAriFf-aCt15cdbb6bc54bfc',
            'tariff_code'=>'NHIS-032-007',
            'description'=>'Mini Laparotomy',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>106,
            'identifier'=>'tAriFf-aCt15cdbb6bc60aae',
            'tariff_code'=>'NHIS-032-008',
            'description'=>'Repair Of Third Degree Tear',
            'parent_id'=>98,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>107,
            'identifier'=>'tAriFf-aCt15cdbb6bc70d45',
            'tariff_code'=>'NHIS-033-000',
            'description'=>'Major  Procedures/surgeries',
            'parent_id'=>78,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>108,
            'identifier'=>'tAriFf-aCt15cdbb6bc8db8d',
            'tariff_code'=>'NHIS-033-001',
            'description'=>'Amputation of the Cervix',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>109,
            'identifier'=>'tAriFf-aCt15cdbb6bc9983b',
            'tariff_code'=>'NHIS-033-002',
            'description'=>'Bilateral tubal ligation',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>110,
            'identifier'=>'tAriFf-aCt15cdbb6bca47c4',
            'tariff_code'=>'NHIS-033-003',
            'description'=>'Broad ligament Haematoma',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>111,
            'identifier'=>'tAriFf-aCt15cdbb6bcdac31',
            'tariff_code'=>'NHIS-033-004',
            'description'=>'Caesarean Section, elective, emergency, single live born, twin etc',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>112,
            'identifier'=>'tAriFf-aCt15cdbb6bce8553',
            'tariff_code'=>'NHIS-033-005',
            'description'=>'Cervical Cautery',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:36',
            'updated_at'=>'2019-05-15 05:50:36'
        ] );



        Tariff::create( [
            'id'=>113,
            'identifier'=>'tAriFf-aCt15cdbb6bd16f31',
            'tariff_code'=>'NHIS-033-006',
            'description'=>'Edge Resection Of The Ovary',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>114,
            'identifier'=>'tAriFf-aCt15cdbb6bd2502a',
            'tariff_code'=>'NHIS-033-007',
            'description'=>'Examination Under Anaesthesia',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>115,
            'identifier'=>'tAriFf-aCt15cdbb6bd2fd31',
            'tariff_code'=>'NHIS-033-008',
            'description'=>'Hysterectomy And Bilateral Salpingo-Oophorectomy',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>116,
            'identifier'=>'tAriFf-aCt15cdbb6bd3b80f',
            'tariff_code'=>'NHIS-033-009',
            'description'=>'Hysterectomy/Manchester Repair (all types)',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>117,
            'identifier'=>'tAriFf-aCt15cdbb6bd457fc',
            'tariff_code'=>'NHIS-033-010',
            'description'=>'Laparotomy Diagnostic / Therapeutic , Inter- Sex',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>118,
            'identifier'=>'tAriFf-aCt15cdbb6bd50cab',
            'tariff_code'=>'NHIS-033-011',
            'description'=>'Myomectomy',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>119,
            'identifier'=>'tAriFf-aCt15cdbb6bd62124',
            'tariff_code'=>'NHIS-033-012',
            'description'=>'Ovarian  Biopsy',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>120,
            'identifier'=>'tAriFf-aCt15cdbb6bd6b5df',
            'tariff_code'=>'NHIS-033-013',
            'description'=>'Ovarectomy/Oophrectomy',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>121,
            'identifier'=>'tAriFf-aCt15cdbb6bd76599',
            'tariff_code'=>'NHIS-033-014',
            'description'=>'Pelvic Haematocoele',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>122,
            'identifier'=>'tAriFf-aCt15cdbb6bd9a771',
            'tariff_code'=>'NHIS-033-015',
            'description'=>'Pelvic Haematocoele',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>123,
            'identifier'=>'tAriFf-aCt15cdbb6bdb2039',
            'tariff_code'=>'NHIS-033-016',
            'description'=>'Pelvic/Abdominal Abscess Drainage',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>124,
            'identifier'=>'tAriFf-aCt15cdbb6bdd7d84',
            'tariff_code'=>'NHIS-033-017',
            'description'=>'Reconstruction Of Vagina (e.g. Secondary to vaginal Atresia)',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:37',
            'updated_at'=>'2019-05-15 05:50:37'
        ] );



        Tariff::create( [
            'id'=>125,
            'identifier'=>'tAriFf-aCt15cdbb6be0c6d4',
            'tariff_code'=>'NHIS-033-018',
            'description'=>'Reconstruction Surgery E.G Straussman Operation',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>126,
            'identifier'=>'tAriFf-aCt15cdbb6be2fff7',
            'tariff_code'=>'NHIS-033-019',
            'description'=>'Rectovaginal Fistula Repair',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>127,
            'identifier'=>'tAriFf-aCt15cdbb6be458e2',
            'tariff_code'=>'NHIS-033-020',
            'description'=>'Removal of Ovaries',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>128,
            'identifier'=>'tAriFf-aCt15cdbb6be667a3',
            'tariff_code'=>'NHIS-033-021',
            'description'=>'Repair Of Inverted Uterus',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>129,
            'identifier'=>'tAriFf-aCt15cdbb6be7d3b6',
            'tariff_code'=>'NHIS-033-022',
            'description'=>'Repair Of Perforated Uterus',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>130,
            'identifier'=>'tAriFf-aCt15cdbb6be9e12c',
            'tariff_code'=>'NHIS-033-023',
            'description'=>'Repair Of Ruptured Uterus',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>131,
            'identifier'=>'tAriFf-aCt15cdbb6beb7805',
            'tariff_code'=>'NHIS-033-024',
            'description'=>'Salpingectomy ( e.g for Ectopic Pregnancy)',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>132,
            'identifier'=>'tAriFf-aCt15cdbb6bed1c23',
            'tariff_code'=>'NHIS-033-025',
            'description'=>'Salpingo-Oophoreictomy',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:38',
            'updated_at'=>'2019-05-15 05:50:38'
        ] );



        Tariff::create( [
            'id'=>133,
            'identifier'=>'tAriFf-aCt15cdbb6bf28d6a',
            'tariff_code'=>'NHIS-033-026',
            'description'=>'Tubal Reconstruction',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:39',
            'updated_at'=>'2019-05-15 05:50:39'
        ] );



        Tariff::create( [
            'id'=>134,
            'identifier'=>'tAriFf-aCt15cdbb6bf57831',
            'tariff_code'=>'NHIS-033-027',
            'description'=>'Ureterovaginal Fistula Repair',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:39',
            'updated_at'=>'2019-05-15 05:50:39'
        ] );



        Tariff::create( [
            'id'=>135,
            'identifier'=>'tAriFf-aCt15cdbb6bf78fc8',
            'tariff_code'=>'NHIS-033-028',
            'description'=>'Uterovesical Fistula Repair',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:39',
            'updated_at'=>'2019-05-15 05:50:39'
        ] );



        Tariff::create( [
            'id'=>136,
            'identifier'=>'tAriFf-aCt15cdbb6bf9187d',
            'tariff_code'=>'NHIS-033-029',
            'description'=>'Vaginoclesis',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:39',
            'updated_at'=>'2019-05-15 05:50:39'
        ] );



        Tariff::create( [
            'id'=>137,
            'identifier'=>'tAriFf-aCt15cdbb6bfa70eb',
            'tariff_code'=>'NHIS-033-030',
            'description'=>'Ventrosuspension Of The Bladder',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:39',
            'updated_at'=>'2019-05-15 05:50:39'
        ] );



        Tariff::create( [
            'id'=>138,
            'identifier'=>'tAriFf-aCt15cdbb6bfda195',
            'tariff_code'=>'NHIS-033-031',
            'description'=>'Ventrosuspension Procedures Of Correction Of Uterine Prolapse',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:39',
            'updated_at'=>'2019-05-15 05:50:39'
        ] );



        Tariff::create( [
            'id'=>139,
            'identifier'=>'tAriFf-aCt15cdbb6c0201a7',
            'tariff_code'=>'NHIS-033-032',
            'description'=>'Vesicovaginal Fistula Repair',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>140,
            'identifier'=>'tAriFf-aCt15cdbb6c04bd29',
            'tariff_code'=>'NHIS-033-033',
            'description'=>'Vulvectomy',
            'parent_id'=>107,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>141,
            'identifier'=>'tAriFf-aCt15cdbb6c0588dd',
            'tariff_code'=>'NHIS-040-000',
            'description'=>'INTERNAL MEDICINE:',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>142,
            'identifier'=>'tAriFf-aCt15cdbb6c06deff',
            'tariff_code'=>'NHIS-040-001',
            'description'=>'Aspirations/Paracentesis',
            'parent_id'=>141,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>143,
            'identifier'=>'tAriFf-aCt15cdbb6c07bdf5',
            'tariff_code'=>'NHIS-040-002',
            'description'=>'Critical Care In I.C.U (per day)',
            'parent_id'=>141,
            'amount'=>'6000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>144,
            'identifier'=>'tAriFf-aCt15cdbb6c0868a2',
            'tariff_code'=>'NHIS-040-003',
            'description'=>'Echocardiography',
            'parent_id'=>141,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>145,
            'identifier'=>'tAriFf-aCt15cdbb6c0918d0',
            'tariff_code'=>'NHIS-040-004',
            'description'=>'Electrocardiography ( ECG)',
            'parent_id'=>141,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>146,
            'identifier'=>'tAriFf-aCt15cdbb6c09c47b',
            'tariff_code'=>'NHIS-040-005',
            'description'=>'Electro-Encephalography (EEG)',
            'parent_id'=>141,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>147,
            'identifier'=>'tAriFf-aCt15cdbb6c0a5eaf',
            'tariff_code'=>'NHIS-040-006',
            'description'=>'Gastric Lavage',
            'parent_id'=>141,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>148,
            'identifier'=>'tAriFf-aCt15cdbb6c0af3df',
            'tariff_code'=>'NHIS-040-007',
            'description'=>'Lumbar Puncture',
            'parent_id'=>141,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>149,
            'identifier'=>'tAriFf-aCt15cdbb6c0dd618',
            'tariff_code'=>'NHIS-040-008',
            'description'=>'Lung Function Test',
            'parent_id'=>141,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>150,
            'identifier'=>'tAriFf-aCt15cdbb6c0e8570',
            'tariff_code'=>'NHIS-040-009',
            'description'=>'Nebulisation (per day)',
            'parent_id'=>141,
            'amount'=>'2000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>151,
            'identifier'=>'tAriFf-aCt15cdbb6c0f30db',
            'tariff_code'=>'NHIS-040-010',
            'description'=>'Oxygen Therapy (per day)',
            'parent_id'=>141,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:40',
            'updated_at'=>'2019-05-15 05:50:40'
        ] );



        Tariff::create( [
            'id'=>152,
            'identifier'=>'tAriFf-aCt15cdbb6c109e87',
            'tariff_code'=>'NHIS-040-011',
            'description'=>'Tissue Biopsy (e.g. Liver, Kidney etc)',
            'parent_id'=>141,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>153,
            'identifier'=>'tAriFf-aCt15cdbb6c12ed9d',
            'tariff_code'=>'NHIS-050-000',
            'description'=>'ORTHOPAEDICS',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>154,
            'identifier'=>'tAriFf-aCt15cdbb6c13ab8c',
            'tariff_code'=>'NHIS-050-001',
            'description'=>'Above Knee Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>155,
            'identifier'=>'tAriFf-aCt15cdbb6c145780',
            'tariff_code'=>'NHIS-050-002',
            'description'=>'Cylinder Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>156,
            'identifier'=>'tAriFf-aCt15cdbb6c1506f8',
            'tariff_code'=>'NHIS-050-003',
            'description'=>'Below Knee Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>157,
            'identifier'=>'tAriFf-aCt15cdbb6c15b2aa',
            'tariff_code'=>'NHIS-050-004',
            'description'=>'Boot Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>158,
            'identifier'=>'tAriFf-aCt15cdbb6c166245',
            'tariff_code'=>'NHIS-050-005',
            'description'=>'Above Knee Back Slab (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>159,
            'identifier'=>'tAriFf-aCt15cdbb6c170dd7',
            'tariff_code'=>'NHIS-050-006',
            'description'=>'Below Knee Back Slab (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>160,
            'identifier'=>'tAriFf-aCt15cdbb6c17be7d',
            'tariff_code'=>'NHIS-050-007',
            'description'=>'Above Elbow Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>161,
            'identifier'=>'tAriFf-aCt15cdbb6c186948',
            'tariff_code'=>'NHIS-050-008',
            'description'=>'Below Elbow Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>162,
            'identifier'=>'tAriFf-aCt15cdbb6c191967',
            'tariff_code'=>'NHIS-050-009',
            'description'=>'U- Shaped Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>163,
            'identifier'=>'tAriFf-aCt15cdbb6c19c491',
            'tariff_code'=>'NHIS-050-010',
            'description'=>'U- Shaped Pop Back Slap (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>164,
            'identifier'=>'tAriFf-aCt15cdbb6c1a7413',
            'tariff_code'=>'NHIS-050-011',
            'description'=>'Hanging Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>165,
            'identifier'=>'tAriFf-aCt15cdbb6c1b1fe7',
            'tariff_code'=>'NHIS-050-012',
            'description'=>'Hip Spica Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>166,
            'identifier'=>'tAriFf-aCt15cdbb6c1ca6b4',
            'tariff_code'=>'NHIS-050-013',
            'description'=>'Mineaur Jacket Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>167,
            'identifier'=>'tAriFf-aCt15cdbb6c1d7fb3',
            'tariff_code'=>'NHIS-050-014',
            'description'=>'Thoracolumbar Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>168,
            'identifier'=>'tAriFf-aCt15cdbb6c1e2f56',
            'tariff_code'=>'NHIS-050-015',
            'description'=>'Lumber Pop Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>169,
            'identifier'=>'tAriFf-aCt15cdbb6c1edaa3',
            'tariff_code'=>'NHIS-050-016',
            'description'=>'Full Arm Casts (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:41',
            'updated_at'=>'2019-05-15 05:50:41'
        ] );



        Tariff::create( [
            'id'=>170,
            'identifier'=>'tAriFf-aCt15cdbb6c204824',
            'tariff_code'=>'NHIS-050-017',
            'description'=>'Full Leg Casts (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>171,
            'identifier'=>'tAriFf-aCt15cdbb6c20f363',
            'tariff_code'=>'NHIS-050-018',
            'description'=>'Scotch Cast (MUA & POP Application)',
            'parent_id'=>153,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>172,
            'identifier'=>'tAriFf-aCt15cdbb6c21a3be',
            'tariff_code'=>'NHIS-051-000',
            'description'=>'Minor Procedures/surgeries',
            'parent_id'=>0,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>173,
            'identifier'=>'tAriFf-aCt15cdbb6c239b18',
            'tariff_code'=>'NHIS-051-001',
            'description'=>'Amputation - Fingers',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>174,
            'identifier'=>'tAriFf-aCt15cdbb6c245a05',
            'tariff_code'=>'NHIS-051-002',
            'description'=>'Amputation - Toes',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>175,
            'identifier'=>'tAriFf-aCt15cdbb6c2505c4',
            'tariff_code'=>'NHIS-051-003',
            'description'=>'Chondromectomy',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>176,
            'identifier'=>'tAriFf-aCt15cdbb6c25b55b',
            'tariff_code'=>'NHIS-051-004',
            'description'=>'Excision Biopsy',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>177,
            'identifier'=>'tAriFf-aCt15cdbb6c2660fe',
            'tariff_code'=>'NHIS-051-005',
            'description'=>'Knee Effusion Tap',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>178,
            'identifier'=>'tAriFf-aCt15cdbb6c272634',
            'tariff_code'=>'NHIS-051-006',
            'description'=>'Pollicisation Of The Index Finger',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>179,
            'identifier'=>'tAriFf-aCt15cdbb6c27bc9a',
            'tariff_code'=>'NHIS-051-007',
            'description'=>'Release Of Chordae',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>180,
            'identifier'=>'tAriFf-aCt15cdbb6c286bf6',
            'tariff_code'=>'NHIS-051-008',
            'description'=>'Surgical Release In Stenosing Tenosynovitis',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>181,
            'identifier'=>'tAriFf-aCt15cdbb6c2932a6',
            'tariff_code'=>'NHIS-051-009',
            'description'=>'Synovectomy',
            'parent_id'=>172,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>182,
            'identifier'=>'tAriFf-aCt15cdbb6c29f0b8',
            'tariff_code'=>'182',
            'description'=>'Intermediate Procedures/surgeries',
            'parent_id'=>153,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>183,
            'identifier'=>'tAriFf-aCt15cdbb6c2a9c46',
            'tariff_code'=>'NHIS-052-001',
            'description'=>'Closed Reduction Of Fracture',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>184,
            'identifier'=>'tAriFf-aCt15cdbb6c2b4c22',
            'tariff_code'=>'NHIS-052-002',
            'description'=>'Drainage Of Septic Arthritis',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>185,
            'identifier'=>'tAriFf-aCt15cdbb6c2bf790',
            'tariff_code'=>'NHIS-052-003',
            'description'=>'Exostectomy',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>186,
            'identifier'=>'tAriFf-aCt15cdbb6c2dc4d7',
            'tariff_code'=>'NHIS-052-004',
            'description'=>'Saucerisation Of Chronically Infected Bone',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>187,
            'identifier'=>'tAriFf-aCt15cdbb6c2eadf1',
            'tariff_code'=>'NHIS-052-005',
            'description'=>'Sequestrectomy',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:42',
            'updated_at'=>'2019-05-15 05:50:42'
        ] );



        Tariff::create( [
            'id'=>188,
            'identifier'=>'tAriFf-aCt15cdbb6c301b2c',
            'tariff_code'=>'NHIS-052-006',
            'description'=>'Simple Congenital Talipes Repair',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>189,
            'identifier'=>'tAriFf-aCt15cdbb6c30c6ca',
            'tariff_code'=>'NHIS-052-007',
            'description'=>'Skin Traction',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>190,
            'identifier'=>'tAriFf-aCt15cdbb6c317702',
            'tariff_code'=>'NHIS-052-008',
            'description'=>'Subperiosteal Drainage Of Acute Osteomyelitis',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>191,
            'identifier'=>'tAriFf-aCt15cdbb6c322241',
            'tariff_code'=>'NHIS-052-009',
            'description'=>'Surgical Correction Of Dupuytren\'s Contracture',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>192,
            'identifier'=>'tAriFf-aCt15cdbb6c32d22a',
            'tariff_code'=>'NHIS-052-010',
            'description'=>'Syndactlysis',
            'parent_id'=>182,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>193,
            'identifier'=>'tAriFf-aCt15cdbb6c337d55',
            'tariff_code'=>'NHIS-053-000',
            'description'=>'Major  Procedures/surgeries',
            'parent_id'=>153,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>194,
            'identifier'=>'tAriFf-aCt15cdbb6c354d4a',
            'tariff_code'=>'NHIS-053-001',
            'description'=>'Amputation and Disarticulation Of Joints',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>195,
            'identifier'=>'tAriFf-aCt15cdbb6c3608e5',
            'tariff_code'=>'NHIS-053-002',
            'description'=>'Amputation and Limb Substitution',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>196,
            'identifier'=>'tAriFf-aCt15cdbb6c36b863',
            'tariff_code'=>'NHIS-053-003',
            'description'=>'Anterior and posterior spine fixation',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>197,
            'identifier'=>'tAriFf-aCt15cdbb6c381154',
            'tariff_code'=>'NHIS-053-004',
            'description'=>'Arthrodesis',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>198,
            'identifier'=>'tAriFf-aCt15cdbb6c38c1ea',
            'tariff_code'=>'NHIS-053-005',
            'description'=>'Arthroplasty',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>199,
            'identifier'=>'tAriFf-aCt15cdbb6c396df7',
            'tariff_code'=>'NHIS-053-006',
            'description'=>'Arthorotomy (+synevectomy)',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>200,
            'identifier'=>'tAriFf-aCt15cdbb6c3a1d7e',
            'tariff_code'=>'NHIS-053-007',
            'description'=>'Bone Grafting',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>201,
            'identifier'=>'tAriFf-aCt15cdbb6c3ac8db',
            'tariff_code'=>'NHIS-053-008',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of Foot',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>202,
            'identifier'=>'tAriFf-aCt15cdbb6c3b78c6',
            'tariff_code'=>'NHIS-053-009',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Fore- Arm',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>203,
            'identifier'=>'tAriFf-aCt15cdbb6c3e23a5',
            'tariff_code'=>'NHIS-053-010',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Hand',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:43',
            'updated_at'=>'2019-05-15 05:50:43'
        ] );



        Tariff::create( [
            'id'=>204,
            'identifier'=>'tAriFf-aCt15cdbb6c406957',
            'tariff_code'=>'NHIS-053-011',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Leg',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>205,
            'identifier'=>'tAriFf-aCt15cdbb6c417811',
            'tariff_code'=>'NHIS-053-012',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Pectoral Girdle',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>206,
            'identifier'=>'tAriFf-aCt15cdbb6c422312',
            'tariff_code'=>'NHIS-053-013',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Pelvic Girdle',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>207,
            'identifier'=>'tAriFf-aCt15cdbb6c42d2fc',
            'tariff_code'=>'NHIS-053-014',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Ribs',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>208,
            'identifier'=>'tAriFf-aCt15cdbb6c437ef0',
            'tariff_code'=>'NHIS-053-015',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Thigh',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>209,
            'identifier'=>'tAriFf-aCt15cdbb6c442e26',
            'tariff_code'=>'NHIS-053-016',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Upper Arm',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>210,
            'identifier'=>'tAriFf-aCt15cdbb6c44dadd',
            'tariff_code'=>'NHIS-053-017',
            'description'=>'Open Reduction And Internal Fixation Of Fractures Of  Spinal Column',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>211,
            'identifier'=>'tAriFf-aCt15cdbb6c4781ea',
            'tariff_code'=>'NHIS-053-018',
            'description'=>'Osteoclasis, Internal Fixation Of Mal-union',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>212,
            'identifier'=>'tAriFf-aCt15cdbb6c483e7b',
            'tariff_code'=>'NHIS-053-019',
            'description'=>'Reconstruction Surgeries: Acromium, head of femur etc',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>213,
            'identifier'=>'tAriFf-aCt15cdbb6c498a66',
            'tariff_code'=>'NHIS-053-020',
            'description'=>'Surgical Repair Of Congenital Talipes Equanovarus/ Valgus',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>214,
            'identifier'=>'tAriFf-aCt15cdbb6c4a45bf',
            'tariff_code'=>'NHIS-053-021',
            'description'=>'Tendon Grafting',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>215,
            'identifier'=>'tAriFf-aCt15cdbb6c4af52a',
            'tariff_code'=>'NHIS-053-022',
            'description'=>'Tendon Transplant',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>216,
            'identifier'=>'tAriFf-aCt15cdbb6c4ba115',
            'tariff_code'=>'NHIS-053-023',
            'description'=>'Decompression of carpal tunnel syndrome',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>217,
            'identifier'=>'tAriFf-aCt15cdbb6c4ea024',
            'tariff_code'=>'NHIS-053-024',
            'description'=>'Tenoplasty',
            'parent_id'=>193,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:44',
            'updated_at'=>'2019-05-15 05:50:44'
        ] );



        Tariff::create( [
            'id'=>218,
            'identifier'=>'tAriFf-aCt15cdbb6c504608',
            'tariff_code'=>'NHIS-060-000',
            'description'=>'GENERAL SURGERY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>219,
            'identifier'=>'tAriFf-aCt15cdbb6c50f494',
            'tariff_code'=>'NHIS-061-000',
            'description'=>'Minor Procedures/surgeries',
            'parent_id'=>218,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>220,
            'identifier'=>'tAriFf-aCt15cdbb6c51a06f',
            'tariff_code'=>'NHIS-061-001',
            'description'=>'Adventious Burse - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>221,
            'identifier'=>'tAriFf-aCt15cdbb6c539b62',
            'tariff_code'=>'NHIS-061-002',
            'description'=>'Bakers Cyst - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>222,
            'identifier'=>'tAriFf-aCt15cdbb6c54568d',
            'tariff_code'=>'NHIS-061-003',
            'description'=>'Biopsy Of Oesophageal Mass',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>223,
            'identifier'=>'tAriFf-aCt15cdbb6c550656',
            'tariff_code'=>'NHIS-061-004',
            'description'=>'Biopsy of Prostate',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>224,
            'identifier'=>'tAriFf-aCt15cdbb6c55b1df',
            'tariff_code'=>'NHIS-061-005',
            'description'=>'Biopsy Of Tumour  Of Abdominal Wall',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>225,
            'identifier'=>'tAriFf-aCt15cdbb6c566186',
            'tariff_code'=>'NHIS-061-006',
            'description'=>'Bursa - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>226,
            'identifier'=>'tAriFf-aCt15cdbb6c582ec2',
            'tariff_code'=>'NHIS-061-007',
            'description'=>'Catheterization Of Urinary Bladder per session (up to three sessions\n annually)',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>227,
            'identifier'=>'tAriFf-aCt15cdbb6c58ed0c',
            'tariff_code'=>'NHIS-061-008',
            'description'=>'Cervial Lymphnodes - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>228,
            'identifier'=>'tAriFf-aCt15cdbb6c59988b',
            'tariff_code'=>'NHIS-061-009',
            'description'=>'Circumcision of the Grown Up',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>229,
            'identifier'=>'tAriFf-aCt15cdbb6c5a4825',
            'tariff_code'=>'NHIS-061-010',
            'description'=>'Debridement And Toilet of Wounds',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>230,
            'identifier'=>'tAriFf-aCt15cdbb6c5ba174',
            'tariff_code'=>'NHIS-061-011',
            'description'=>'Dermoid Cyst Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>231,
            'identifier'=>'tAriFf-aCt15cdbb6c5ea592',
            'tariff_code'=>'NHIS-061-012',
            'description'=>'Dissection Of Inguinal Nodes',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:45',
            'updated_at'=>'2019-05-15 05:50:45'
        ] );



        Tariff::create( [
            'id'=>232,
            'identifier'=>'tAriFf-aCt15cdbb6c62d497',
            'tariff_code'=>'NHIS-061-013',
            'description'=>'Dorsal Slit and Reduction of Paraphimosis',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:46',
            'updated_at'=>'2019-05-15 05:50:46'
        ] );



        Tariff::create( [
            'id'=>233,
            'identifier'=>'tAriFf-aCt15cdbb6c66a5e9',
            'tariff_code'=>'NHIS-061-014',
            'description'=>'Electrofulgaration of Condylomata Acuminata',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:46',
            'updated_at'=>'2019-05-15 05:50:46'
        ] );



        Tariff::create( [
            'id'=>234,
            'identifier'=>'tAriFf-aCt15cdbb6c684173',
            'tariff_code'=>'NHIS-061-015',
            'description'=>'Excision Of Breast Lump',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:46',
            'updated_at'=>'2019-05-15 05:50:46'
        ] );



        Tariff::create( [
            'id'=>235,
            'identifier'=>'tAriFf-aCt15cdbb6c6a6409',
            'tariff_code'=>'NHIS-061-016',
            'description'=>'Excision Of Intrascrostal Mass',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:46',
            'updated_at'=>'2019-05-15 05:50:46'
        ] );



        Tariff::create( [
            'id'=>236,
            'identifier'=>'tAriFf-aCt15cdbb6c6b77ea',
            'tariff_code'=>'NHIS-061-017',
            'description'=>'Excision of Neurofibroma',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:46',
            'updated_at'=>'2019-05-15 05:50:46'
        ] );



        Tariff::create( [
            'id'=>237,
            'identifier'=>'tAriFf-aCt15cdbb6c6cd1ea',
            'tariff_code'=>'NHIS-061-018',
            'description'=>'Excision Of Tophi',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:46',
            'updated_at'=>'2019-05-15 05:50:46'
        ] );



        Tariff::create( [
            'id'=>238,
            'identifier'=>'tAriFf-aCt15cdbb6c78d542',
            'tariff_code'=>'NHIS-061-019',
            'description'=>'Fibrodenoma - Unilateral',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:47',
            'updated_at'=>'2019-05-15 05:50:47'
        ] );



        Tariff::create( [
            'id'=>239,
            'identifier'=>'tAriFf-aCt15cdbb6c7c51a3',
            'tariff_code'=>'NHIS-061-020',
            'description'=>'Ganglion - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:47',
            'updated_at'=>'2019-05-15 05:50:47'
        ] );



        Tariff::create( [
            'id'=>240,
            'identifier'=>'tAriFf-aCt15cdbb6c80e4bd',
            'tariff_code'=>'NHIS-061-021',
            'description'=>'Ganglion - Small - Excision D ,',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>241,
            'identifier'=>'tAriFf-aCt15cdbb6c8225ce',
            'tariff_code'=>'NHIS-061-022',
            'description'=>'Ganglion (Dorsum of Both Wrist) - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>242,
            'identifier'=>'tAriFf-aCt15cdbb6c844990',
            'tariff_code'=>'NHIS-061-023',
            'description'=>'Ganglionectectomy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>243,
            'identifier'=>'tAriFf-aCt15cdbb6c8532fa',
            'tariff_code'=>'NHIS-061-024',
            'description'=>'Gastroduodenoscopy/ Endoscopies',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>244,
            'identifier'=>'tAriFf-aCt15cdbb6c868bf0',
            'tariff_code'=>'NHIS-061-025',
            'description'=>'Granuloma - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>245,
            'identifier'=>'tAriFf-aCt15cdbb6c88404b',
            'tariff_code'=>'NHIS-061-026',
            'description'=>'Granuloma Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>246,
            'identifier'=>'tAriFf-aCt15cdbb6c893125',
            'tariff_code'=>'NHIS-061-027',
            'description'=>'Herniotomy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>247,
            'identifier'=>'tAriFf-aCt15cdbb6c8a355e',
            'tariff_code'=>'NHIS-061-028',
            'description'=>'Incision And Drainage Of Abscess',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>248,
            'identifier'=>'tAriFf-aCt15cdbb6c8ac941',
            'tariff_code'=>'NHIS-061-029',
            'description'=>'Infected Bunion Foot - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>249,
            'identifier'=>'tAriFf-aCt15cdbb6c8b793a',
            'tariff_code'=>'NHIS-061-030',
            'description'=>'In-growing Toe Nail ( Excision )',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>250,
            'identifier'=>'tAriFf-aCt15cdbb6c8c135b',
            'tariff_code'=>'NHIS-061-031',
            'description'=>'Intercostals Drainage Insertion',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>251,
            'identifier'=>'tAriFf-aCt15cdbb6c8cec5c',
            'tariff_code'=>'NHIS-061-032',
            'description'=>'Lipectomy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>252,
            'identifier'=>'tAriFf-aCt15cdbb6c8e866e',
            'tariff_code'=>'NHIS-061-033',
            'description'=>'Liver/ Kidney/ Bone Marrow Biopsy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:48',
            'updated_at'=>'2019-05-15 05:50:48'
        ] );



        Tariff::create( [
            'id'=>253,
            'identifier'=>'tAriFf-aCt15cdbb6c909f63',
            'tariff_code'=>'NHIS-061-034',
            'description'=>'Lords Procedure (haemorrhoids)',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>254,
            'identifier'=>'tAriFf-aCt15cdbb6c91f8be',
            'tariff_code'=>'NHIS-061-035',
            'description'=>'Lumpectomy - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>255,
            'identifier'=>'tAriFf-aCt15cdbb6c936d5f',
            'tariff_code'=>'NHIS-061-036',
            'description'=>'Oeshophagoscopy for foreign body removal',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>256,
            'identifier'=>'tAriFf-aCt15cdbb6c95316c',
            'tariff_code'=>'NHIS-061-037',
            'description'=>'Paracentesis ( A/C Wash Out )',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>257,
            'identifier'=>'tAriFf-aCt15cdbb6c96b9df',
            'tariff_code'=>'NHIS-061-038',
            'description'=>'Pericardiocentesis',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>258,
            'identifier'=>'tAriFf-aCt15cdbb6c995fa2',
            'tariff_code'=>'NHIS-061-039',
            'description'=>'Pollicisation of Index Finger',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>259,
            'identifier'=>'tAriFf-aCt15cdbb6c9b2290',
            'tariff_code'=>'NHIS-061-040',
            'description'=>'Priapism, Shunt Procedure All Types',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>260,
            'identifier'=>'tAriFf-aCt15cdbb6c9c7c26',
            'tariff_code'=>'NHIS-061-041',
            'description'=>'Proctoscopy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>261,
            'identifier'=>'tAriFf-aCt15cdbb6c9d56e0',
            'tariff_code'=>'NHIS-061-042',
            'description'=>'Punch Biopsy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:49',
            'updated_at'=>'2019-05-15 05:50:49'
        ] );



        Tariff::create( [
            'id'=>262,
            'identifier'=>'tAriFf-aCt15cdbb6ca09fc4',
            'tariff_code'=>'NHIS-061-043',
            'description'=>'Rectal Dilation',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>263,
            'identifier'=>'tAriFf-aCt15cdbb6ca1cf8a',
            'tariff_code'=>'NHIS-061-044',
            'description'=>'Release of Chordae',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>264,
            'identifier'=>'tAriFf-aCt15cdbb6ca2d1f9',
            'tariff_code'=>'NHIS-061-045',
            'description'=>'Sebaceous Cyst - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>265,
            'identifier'=>'tAriFf-aCt15cdbb6ca3d87a',
            'tariff_code'=>'NHIS-061-046',
            'description'=>'Sigmoidoscopy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>266,
            'identifier'=>'tAriFf-aCt15cdbb6ca58aea',
            'tariff_code'=>'NHIS-061-047',
            'description'=>'Sinus - Excision',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>267,
            'identifier'=>'tAriFf-aCt15cdbb6ca68ec9',
            'tariff_code'=>'NHIS-061-048',
            'description'=>'Surgical Drainage In Haematoma Of Rectus Abdominis',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>268,
            'identifier'=>'tAriFf-aCt15cdbb6ca7914f',
            'tariff_code'=>'NHIS-061-049',
            'description'=>'Surgical Drainage of Anal Abscess',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>269,
            'identifier'=>'tAriFf-aCt15cdbb6cab120e',
            'tariff_code'=>'NHIS-061-050',
            'description'=>'Surgical Drainage Of Galactocoele',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>270,
            'identifier'=>'tAriFf-aCt15cdbb6cad835c',
            'tariff_code'=>'NHIS-061-051',
            'description'=>'Surgical release of Stenosing tenosinovitis',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:50',
            'updated_at'=>'2019-05-15 05:50:50'
        ] );



        Tariff::create( [
            'id'=>271,
            'identifier'=>'tAriFf-aCt15cdbb6cb0cb34',
            'tariff_code'=>'NHIS-061-052',
            'description'=>'Suture Of Major Wounds',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>272,
            'identifier'=>'tAriFf-aCt15cdbb6cb2506a',
            'tariff_code'=>'NHIS-061-053',
            'description'=>'Syndactysis',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>273,
            'identifier'=>'tAriFf-aCt15cdbb6cb35694',
            'tariff_code'=>'NHIS-061-054',
            'description'=>'Synovectomy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>274,
            'identifier'=>'tAriFf-aCt15cdbb6cb45943',
            'tariff_code'=>'NHIS-061-055',
            'description'=>'Testicular Biopsy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>275,
            'identifier'=>'tAriFf-aCt15cdbb6cb61266',
            'tariff_code'=>'NHIS-061-056',
            'description'=>'Varicocoelectomy',
            'parent_id'=>219,
            'amount'=>'20000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>276,
            'identifier'=>'tAriFf-aCt15cdbb6cb753fd',
            'tariff_code'=>'NHIS-062-000',
            'description'=>'Intermediate Procedures/surgeries',
            'parent_id'=>218,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>277,
            'identifier'=>'tAriFf-aCt15cdbb6cb85835',
            'tariff_code'=>'NHIS-062-001',
            'description'=>'Adenoidectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>278,
            'identifier'=>'tAriFf-aCt15cdbb6cb99b09',
            'tariff_code'=>'NHIS-062-002',
            'description'=>'Anal Fistulectomy Repair',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>279,
            'identifier'=>'tAriFf-aCt15cdbb6cba8cbd',
            'tariff_code'=>'NHIS-062-003',
            'description'=>'Anal Sphincteroplasty',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>280,
            'identifier'=>'tAriFf-aCt15cdbb6cbc98cb',
            'tariff_code'=>'NHIS-062-004',
            'description'=>'Anorectoplasty',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>281,
            'identifier'=>'tAriFf-aCt15cdbb6cbd99c4',
            'tariff_code'=>'NHIS-062-005',
            'description'=>'Appendicetomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:51',
            'updated_at'=>'2019-05-15 05:50:51'
        ] );



        Tariff::create( [
            'id'=>282,
            'identifier'=>'tAriFf-aCt15cdbb6cc0512b',
            'tariff_code'=>'NHIS-062-006',
            'description'=>'Bilateral Cutaneous Ureterostomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>283,
            'identifier'=>'tAriFf-aCt15cdbb6cc225de',
            'tariff_code'=>'NHIS-062-007',
            'description'=>'Bilateral Ureteoenterostomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>284,
            'identifier'=>'tAriFf-aCt15cdbb6cc342bb',
            'tariff_code'=>'NHIS-062-008',
            'description'=>'Branchial Fistula',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>285,
            'identifier'=>'tAriFf-aCt15cdbb6cc4c8fa',
            'tariff_code'=>'NHIS-062-009',
            'description'=>'Bronchial Cyst',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>286,
            'identifier'=>'tAriFf-aCt15cdbb6cc60a3a',
            'tariff_code'=>'NHIS-062-010',
            'description'=>'Bronchoscopy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>287,
            'identifier'=>'tAriFf-aCt15cdbb6cc7e981',
            'tariff_code'=>'NHIS-062-011',
            'description'=>'Cystic Hygroma Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>288,
            'identifier'=>'tAriFf-aCt15cdbb6cc894e6',
            'tariff_code'=>'NHIS-062-012',
            'description'=>'Cystourethroscopy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>289,
            'identifier'=>'tAriFf-aCt15cdbb6cc944b1',
            'tariff_code'=>'NHIS-062-013',
            'description'=>'Dissection Of Femoral Triangle',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>290,
            'identifier'=>'tAriFf-aCt15cdbb6cc9f145',
            'tariff_code'=>'NHIS-062-014',
            'description'=>'Drainage of Ischio Rectal Abscess',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>291,
            'identifier'=>'tAriFf-aCt15cdbb6ccb49e2',
            'tariff_code'=>'NHIS-062-015',
            'description'=>'Drainage of Psoas Abscess',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>292,
            'identifier'=>'tAriFf-aCt15cdbb6ccc247c',
            'tariff_code'=>'NHIS-062-016',
            'description'=>'Enterocele Or Vault Prolapse Repair',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>293,
            'identifier'=>'tAriFf-aCt15cdbb6ccdc8c8',
            'tariff_code'=>'NHIS-062-017',
            'description'=>'Epidedectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:52',
            'updated_at'=>'2019-05-15 05:50:52'
        ] );



        Tariff::create( [
            'id'=>294,
            'identifier'=>'tAriFf-aCt15cdbb6cd12132',
            'tariff_code'=>'NHIS-062-018',
            'description'=>'Evacuation of Scrotal Hematoma',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>295,
            'identifier'=>'tAriFf-aCt15cdbb6cd1fa97',
            'tariff_code'=>'NHIS-062-019',
            'description'=>'Excision Bronchial Sinus',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>296,
            'identifier'=>'tAriFf-aCt15cdbb6cd2fd23',
            'tariff_code'=>'NHIS-062-020',
            'description'=>'Excision Mammary Fistula',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>297,
            'identifier'=>'tAriFf-aCt15cdbb6cd3d62f',
            'tariff_code'=>'NHIS-062-022',
            'description'=>'Excision of Urethral Carbuncle',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>298,
            'identifier'=>'tAriFf-aCt15cdbb6cd4858d',
            'tariff_code'=>'NHIS-062-021',
            'description'=>'Excision Pilonidal Sinus',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>299,
            'identifier'=>'tAriFf-aCt15cdbb6cd5317a',
            'tariff_code'=>'NHIS-062-023',
            'description'=>'Excission of Haemangiomas',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>300,
            'identifier'=>'tAriFf-aCt15cdbb6cd5e124',
            'tariff_code'=>'NHIS-062-024',
            'description'=>'Facial Decompression',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>301,
            'identifier'=>'tAriFf-aCt15cdbb6cd68cbc',
            'tariff_code'=>'NHIS-062-025',
            'description'=>'Fibroadenoma - Bilateral',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>302,
            'identifier'=>'tAriFf-aCt15cdbb6cd73c78',
            'tariff_code'=>'NHIS-062-026',
            'description'=>'Fibroma - Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>303,
            'identifier'=>'tAriFf-aCt15cdbb6cd897b7',
            'tariff_code'=>'NHIS-062-027',
            'description'=>'Fissurectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>304,
            'identifier'=>'tAriFf-aCt15cdbb6cd94310',
            'tariff_code'=>'NHIS-062-028',
            'description'=>'Fistula In - Ano Repair',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>305,
            'identifier'=>'tAriFf-aCt15cdbb6cd9f312',
            'tariff_code'=>'NHIS-062-029',
            'description'=>'Fistula Repair',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>306,
            'identifier'=>'tAriFf-aCt15cdbb6cda9eb2',
            'tariff_code'=>'NHIS-062-030',
            'description'=>'Fistulectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>307,
            'identifier'=>'tAriFf-aCt15cdbb6cdb4e65',
            'tariff_code'=>'NHIS-062-031',
            'description'=>'Fulguration',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>308,
            'identifier'=>'tAriFf-aCt15cdbb6cdbf9f3',
            'tariff_code'=>'NHIS-062-032',
            'description'=>'Haemangioma - Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>309,
            'identifier'=>'tAriFf-aCt15cdbb6cdcaa5d',
            'tariff_code'=>'NHIS-062-033',
            'description'=>'Haemorhoidectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>310,
            'identifier'=>'tAriFf-aCt15cdbb6cde7679',
            'tariff_code'=>'NHIS-062-034',
            'description'=>'Herniorhaphies (all types)',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:53',
            'updated_at'=>'2019-05-15 05:50:53'
        ] );



        Tariff::create( [
            'id'=>311,
            'identifier'=>'tAriFf-aCt15cdbb6ce16331',
            'tariff_code'=>'NHIS-062-035',
            'description'=>'Hiatus Herniorrphaphy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>312,
            'identifier'=>'tAriFf-aCt15cdbb6ce3ad3b',
            'tariff_code'=>'NHIS-062-036',
            'description'=>'Hydrocoelectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>313,
            'identifier'=>'tAriFf-aCt15cdbb6ce505f6',
            'tariff_code'=>'NHIS-062-037',
            'description'=>'Inguinal Node (bulk dissection) axial',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>314,
            'identifier'=>'tAriFf-aCt15cdbb6ce5b632',
            'tariff_code'=>'NHIS-062-038',
            'description'=>'Injection Sclerotherapy Of Varicose Veins (minor)',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>315,
            'identifier'=>'tAriFf-aCt15cdbb6ce782ea',
            'tariff_code'=>'NHIS-062-039',
            'description'=>'Low Fistulectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>316,
            'identifier'=>'tAriFf-aCt15cdbb6ce84114',
            'tariff_code'=>'NHIS-062-040',
            'description'=>'Macindoe Procedure',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>317,
            'identifier'=>'tAriFf-aCt15cdbb6ce8ecc4',
            'tariff_code'=>'NHIS-062-041',
            'description'=>'Oesophagoscopy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>318,
            'identifier'=>'tAriFf-aCt15cdbb6ce99c8b',
            'tariff_code'=>'NHIS-062-042',
            'description'=>'Orchidectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>319,
            'identifier'=>'tAriFf-aCt15cdbb6cea490a',
            'tariff_code'=>'NHIS-062-043',
            'description'=>'Orchidopexy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>320,
            'identifier'=>'tAriFf-aCt15cdbb6cec16c1',
            'tariff_code'=>'NHIS-062-044',
            'description'=>'Papilloma Rectum - Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>321,
            'identifier'=>'tAriFf-aCt15cdbb6cecd35e',
            'tariff_code'=>'NHIS-062-045',
            'description'=>'Polypectomy (Cervical )',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>322,
            'identifier'=>'tAriFf-aCt15cdbb6ced82e0',
            'tariff_code'=>'NHIS-062-046',
            'description'=>'Rectal polyp',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>323,
            'identifier'=>'tAriFf-aCt15cdbb6cee2eb6',
            'tariff_code'=>'NHIS-062-047',
            'description'=>'Scrotal Swelling (Multiple) - Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:54',
            'updated_at'=>'2019-05-15 05:50:54'
        ] );



        Tariff::create( [
            'id'=>324,
            'identifier'=>'tAriFf-aCt15cdbb6cf1cdaa',
            'tariff_code'=>'NHIS-062-048',
            'description'=>'Skin Grafting',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>325,
            'identifier'=>'tAriFf-aCt15cdbb6cf2a789',
            'tariff_code'=>'NHIS-062-049',
            'description'=>'Submandibular Lymphs - Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>326,
            'identifier'=>'tAriFf-aCt15cdbb6cf44a6a',
            'tariff_code'=>'NHIS-062-050',
            'description'=>'Suprapubic Cystostomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>327,
            'identifier'=>'tAriFf-aCt15cdbb6cf507a7',
            'tariff_code'=>'NHIS-062-051',
            'description'=>'Surgery Of Torsion Of Spermatic Cord',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>328,
            'identifier'=>'tAriFf-aCt15cdbb6cf5b67f',
            'tariff_code'=>'NHIS-062-052',
            'description'=>'Surgical corrections of Duputytren\'s contracture',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>329,
            'identifier'=>'tAriFf-aCt15cdbb6cf78301',
            'tariff_code'=>'NHIS-062-053',
            'description'=>'Umbilical Sinus - Excision',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>330,
            'identifier'=>'tAriFf-aCt15cdbb6cf84226',
            'tariff_code'=>'NHIS-062-054',
            'description'=>'Vasectomy',
            'parent_id'=>276,
            'amount'=>'35000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>331,
            'identifier'=>'tAriFf-aCt15cdbb6cf8ecef',
            'tariff_code'=>'NHIS-063-000',
            'description'=>'Major Procedures/surgeries',
            'parent_id'=>218,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>332,
            'identifier'=>'tAriFf-aCt15cdbb6cf99cf1',
            'tariff_code'=>'NHIS-063-001',
            'description'=>'Abdominal Rectopexy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>333,
            'identifier'=>'tAriFf-aCt15cdbb6cfb3e0a',
            'tariff_code'=>'NHIS-063-002',
            'description'=>'Abdomino Perineal Resection',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>334,
            'identifier'=>'tAriFf-aCt15cdbb6cfbfc24',
            'tariff_code'=>'NHIS-063-003',
            'description'=>'Abdominoperineal Rectum Resection',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>335,
            'identifier'=>'tAriFf-aCt15cdbb6cfca865',
            'tariff_code'=>'NHIS-063-004',
            'description'=>'Abdomino-Perineal Resection',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>336,
            'identifier'=>'tAriFf-aCt15cdbb6cfd57f7',
            'tariff_code'=>'NHIS-063-005',
            'description'=>'Adrenalectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>337,
            'identifier'=>'tAriFf-aCt15cdbb6cff24ca',
            'tariff_code'=>'NHIS-063-006',
            'description'=>'Anal Pull Through',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:55',
            'updated_at'=>'2019-05-15 05:50:55'
        ] );



        Tariff::create( [
            'id'=>338,
            'identifier'=>'tAriFf-aCt15cdbb6d03710c',
            'tariff_code'=>'NHIS-063-007',
            'description'=>'Appendicular Abscess - Drainage',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>339,
            'identifier'=>'tAriFf-aCt15cdbb6d045b28',
            'tariff_code'=>'NHIS-063-008',
            'description'=>'Appendicular Perforation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>340,
            'identifier'=>'tAriFf-aCt15cdbb6d05069f',
            'tariff_code'=>'NHIS-063-009',
            'description'=>'Axillary Dissection Of Breast',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>341,
            'identifier'=>'tAriFf-aCt15cdbb6d05b66b',
            'tariff_code'=>'NHIS-063-010',
            'description'=>'Biopsy Of Retroperitoneal Tumor',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>342,
            'identifier'=>'tAriFf-aCt15cdbb6d075814',
            'tariff_code'=>'NHIS-063-011',
            'description'=>'Broad Ligament Haematoma',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>343,
            'identifier'=>'tAriFf-aCt15cdbb6d0816c1',
            'tariff_code'=>'NHIS-063-012',
            'description'=>'Burst Abdomen Obstruction',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>344,
            'identifier'=>'tAriFf-aCt15cdbb6d08c294',
            'tariff_code'=>'NHIS-063-013',
            'description'=>'Caecopexy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>345,
            'identifier'=>'tAriFf-aCt15cdbb6d0a647c',
            'tariff_code'=>'NHIS-063-014',
            'description'=>'Cavernospongiosum Shunt',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>346,
            'identifier'=>'tAriFf-aCt15cdbb6d0ba444',
            'tariff_code'=>'NHIS-063-015',
            'description'=>'Cholecystectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>347,
            'identifier'=>'tAriFf-aCt15cdbb6d0d9d4d',
            'tariff_code'=>'NHIS-063-016',
            'description'=>'Cholecystectomy & exploration',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>348,
            'identifier'=>'tAriFf-aCt15cdbb6d0e5b86',
            'tariff_code'=>'NHIS-063-017',
            'description'=>'Choledochal Cystojejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:56',
            'updated_at'=>'2019-05-15 05:50:56'
        ] );



        Tariff::create( [
            'id'=>349,
            'identifier'=>'tAriFf-aCt15cdbb6d11fa5b',
            'tariff_code'=>'NHIS-063-018',
            'description'=>'Choledocho Jejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>350,
            'identifier'=>'tAriFf-aCt15cdbb6d12d2df',
            'tariff_code'=>'NHIS-063-019',
            'description'=>'Choledochostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>351,
            'identifier'=>'tAriFf-aCt15cdbb6d1382ba',
            'tariff_code'=>'NHIS-063-020',
            'description'=>'Closure of Hollow Viscus Perforation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>352,
            'identifier'=>'tAriFf-aCt15cdbb6d154e71',
            'tariff_code'=>'NHIS-063-021',
            'description'=>'Colectomy-Partial Or Total',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>353,
            'identifier'=>'tAriFf-aCt15cdbb6d160de0',
            'tariff_code'=>'NHIS-063-022',
            'description'=>'Colon Reconstruction After Hartmann\'s Procedure',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>354,
            'identifier'=>'tAriFf-aCt15cdbb6d173a5a',
            'tariff_code'=>'NHIS-063-023',
            'description'=>'Colostomy Construction/Closure',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>355,
            'identifier'=>'tAriFf-aCt15cdbb6d1919f4',
            'tariff_code'=>'NHIS-063-024',
            'description'=>'Commando Operation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>356,
            'identifier'=>'tAriFf-aCt15cdbb6d1a3796',
            'tariff_code'=>'NHIS-063-025',
            'description'=>'Condilectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>357,
            'identifier'=>'tAriFf-aCt15cdbb6d1c5243',
            'tariff_code'=>'NHIS-063-026',
            'description'=>'Continent Ileostomy Pouch',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>358,
            'identifier'=>'tAriFf-aCt15cdbb6d1d71a8',
            'tariff_code'=>'NHIS-063-027',
            'description'=>'Corporosavenous Shunt',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:57',
            'updated_at'=>'2019-05-15 05:50:57'
        ] );



        Tariff::create( [
            'id'=>359,
            'identifier'=>'tAriFf-aCt15cdbb6d20492f',
            'tariff_code'=>'NHIS-063-028',
            'description'=>'Craniotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>360,
            'identifier'=>'tAriFf-aCt15cdbb6d232aa8',
            'tariff_code'=>'NHIS-063-029',
            'description'=>'Cricopharyngeal Myotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>361,
            'identifier'=>'tAriFf-aCt15cdbb6d240384',
            'tariff_code'=>'NHIS-063-030',
            'description'=>'Cystectomy Partial/Total',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>362,
            'identifier'=>'tAriFf-aCt15cdbb6d24af19',
            'tariff_code'=>'NHIS-063-031',
            'description'=>'Cystic/Fibrous Dysplasia',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>363,
            'identifier'=>'tAriFf-aCt15cdbb6d255eb9',
            'tariff_code'=>'NHIS-063-032',
            'description'=>'Cystolithotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>364,
            'identifier'=>'tAriFf-aCt15cdbb6d260a79',
            'tariff_code'=>'NHIS-063-033',
            'description'=>'Decortication',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>365,
            'identifier'=>'tAriFf-aCt15cdbb6d26ba26',
            'tariff_code'=>'NHIS-063-034',
            'description'=>'Diaphragmatic Hernia Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>366,
            'identifier'=>'tAriFf-aCt15cdbb6d27658b',
            'tariff_code'=>'NHIS-063-035',
            'description'=>'Dissection of The Mediastinium',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>367,
            'identifier'=>'tAriFf-aCt15cdbb6d2815fa',
            'tariff_code'=>'NHIS-063-036',
            'description'=>'Diverticulectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>368,
            'identifier'=>'tAriFf-aCt15cdbb6d2907f8',
            'tariff_code'=>'NHIS-063-037',
            'description'=>'Drainage of Gastric Abscess',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>369,
            'identifier'=>'tAriFf-aCt15cdbb6d2a0fab',
            'tariff_code'=>'NHIS-063-038',
            'description'=>'Drainage Of Hepatic Abscess',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>370,
            'identifier'=>'tAriFf-aCt15cdbb6d2a9f72',
            'tariff_code'=>'NHIS-063-039',
            'description'=>'Drainage of Subdiaphramatic Abscess',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>371,
            'identifier'=>'tAriFf-aCt15cdbb6d2b4dc9',
            'tariff_code'=>'NHIS-063-040',
            'description'=>'Drainage pericardial effusion',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>372,
            'identifier'=>'tAriFf-aCt15cdbb6d2bf9bd',
            'tariff_code'=>'NHIS-063-041',
            'description'=>'Duodenal Diverticulum',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>373,
            'identifier'=>'tAriFf-aCt15cdbb6d2d1c4d',
            'tariff_code'=>'NHIS-063-042',
            'description'=>'DuodenalJejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>374,
            'identifier'=>'tAriFf-aCt15cdbb6d2dd753',
            'tariff_code'=>'NHIS-063-043',
            'description'=>'Duodenectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>375,
            'identifier'=>'tAriFf-aCt15cdbb6d2e868b',
            'tariff_code'=>'NHIS-063-044',
            'description'=>'Ectopic Parathyroidectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:58',
            'updated_at'=>'2019-05-15 05:50:58'
        ] );



        Tariff::create( [
            'id'=>376,
            'identifier'=>'tAriFf-aCt15cdbb6d30e4bd',
            'tariff_code'=>'NHIS-063-045',
            'description'=>'Encephalocoele Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>377,
            'identifier'=>'tAriFf-aCt15cdbb6d32ffdc',
            'tariff_code'=>'NHIS-063-046',
            'description'=>'Enterostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>378,
            'identifier'=>'tAriFf-aCt15cdbb6d33d8d0',
            'tariff_code'=>'NHIS-063-047',
            'description'=>'Enterostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>379,
            'identifier'=>'tAriFf-aCt15cdbb6d34843f',
            'tariff_code'=>'NHIS-063-048',
            'description'=>'Excision Meckel\'s Diverticulum',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>380,
            'identifier'=>'tAriFf-aCt15cdbb6d353418',
            'tariff_code'=>'NHIS-063-049',
            'description'=>'Excision of liver Abscess',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>381,
            'identifier'=>'tAriFf-aCt15cdbb6d35df92',
            'tariff_code'=>'NHIS-063-050',
            'description'=>'Excision Of Lymphoedematous Lymph Tissues',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>382,
            'identifier'=>'tAriFf-aCt15cdbb6d368f2f',
            'tariff_code'=>'NHIS-063-051',
            'description'=>'Excision Of Pelvi-Rectal Fistula',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>383,
            'identifier'=>'tAriFf-aCt15cdbb6d373b1a',
            'tariff_code'=>'NHIS-063-052',
            'description'=>'Exploratory Laparatomy/Lysis Of Adhesions',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>384,
            'identifier'=>'tAriFf-aCt15cdbb6d382f6e',
            'tariff_code'=>'NHIS-063-053',
            'description'=>'Extensive (Small and Large) Bowel Resection and Anastomoses',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>385,
            'identifier'=>'tAriFf-aCt15cdbb6d39336f',
            'tariff_code'=>'NHIS-063-054',
            'description'=>'Fissurectomy and Haemorrhoidectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>386,
            'identifier'=>'tAriFf-aCt15cdbb6d3b6881',
            'tariff_code'=>'NHIS-063-055',
            'description'=>'Fissurectomy with Eversion of Sac -',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>387,
            'identifier'=>'tAriFf-aCt15cdbb6d3d0c4a',
            'tariff_code'=>'NHIS-063-056',
            'description'=>'Foreign Body Removal in Deep Region',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>388,
            'identifier'=>'tAriFf-aCt15cdbb6d3e065f',
            'tariff_code'=>'NHIS-063-057',
            'description'=>'Fundoplication',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>389,
            'identifier'=>'tAriFf-aCt15cdbb6d3ef727',
            'tariff_code'=>'NHIS-063-058',
            'description'=>'Gastrectomy- Partial/Total',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:50:59',
            'updated_at'=>'2019-05-15 05:50:59'
        ] );



        Tariff::create( [
            'id'=>390,
            'identifier'=>'tAriFf-aCt15cdbb6d41a334',
            'tariff_code'=>'NHIS-063-059',
            'description'=>'Gastroenterostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>391,
            'identifier'=>'tAriFf-aCt15cdbb6d4329c7',
            'tariff_code'=>'NHIS-063-060',
            'description'=>'Gastrojejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>392,
            'identifier'=>'tAriFf-aCt15cdbb6d4448cc',
            'tariff_code'=>'NHIS-063-061',
            'description'=>'Gastrotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>393,
            'identifier'=>'tAriFf-aCt15cdbb6d454db0',
            'tariff_code'=>'NHIS-063-062',
            'description'=>'Glossectomy-Partial/Total',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>394,
            'identifier'=>'tAriFf-aCt15cdbb6d46521c',
            'tariff_code'=>'NHIS-063-063',
            'description'=>'Grahams Operation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>395,
            'identifier'=>'tAriFf-aCt15cdbb6d476723',
            'tariff_code'=>'NHIS-063-064',
            'description'=>'Haemorrage of Small Intestine',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>396,
            'identifier'=>'tAriFf-aCt15cdbb6d481695',
            'tariff_code'=>'NHIS-063-065',
            'description'=>'Haemorroidectomy+ Fistulectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>397,
            'identifier'=>'tAriFf-aCt15cdbb6d48c245',
            'tariff_code'=>'NHIS-063-066',
            'description'=>'Heler\'s Procedure',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>398,
            'identifier'=>'tAriFf-aCt15cdbb6d49e1c7',
            'tariff_code'=>'NHIS-063-067',
            'description'=>'Hemi Glossectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>399,
            'identifier'=>'tAriFf-aCt15cdbb6d4c2674',
            'tariff_code'=>'NHIS-063-068',
            'description'=>'Hemi Mandibulectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>400,
            'identifier'=>'tAriFf-aCt15cdbb6d4d1a57',
            'tariff_code'=>'NHIS-063-069',
            'description'=>'Hemicolectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>401,
            'identifier'=>'tAriFf-aCt15cdbb6d4e0394',
            'tariff_code'=>'NHIS-063-070',
            'description'=>'Heminephrectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>402,
            'identifier'=>'tAriFf-aCt15cdbb6d4ef7d5',
            'tariff_code'=>'NHIS-063-071',
            'description'=>'Hemithyroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:00',
            'updated_at'=>'2019-05-15 05:51:00'
        ] );



        Tariff::create( [
            'id'=>403,
            'identifier'=>'tAriFf-aCt15cdbb6d50481a',
            'tariff_code'=>'NHIS-063-072',
            'description'=>'Hepatic Resection (lobectomy)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:01',
            'updated_at'=>'2019-05-15 05:51:01'
        ] );



        Tariff::create( [
            'id'=>404,
            'identifier'=>'tAriFf-aCt15cdbb6d544ab5',
            'tariff_code'=>'NHIS-063-073',
            'description'=>'Hepatic Segmentectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:01',
            'updated_at'=>'2019-05-15 05:51:01'
        ] );



        Tariff::create( [
            'id'=>405,
            'identifier'=>'tAriFf-aCt15cdbb6d56f051',
            'tariff_code'=>'NHIS-063-074',
            'description'=>'Herniorraphy and Hydrocelectomy Sac Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:01',
            'updated_at'=>'2019-05-15 05:51:01'
        ] );



        Tariff::create( [
            'id'=>406,
            'identifier'=>'tAriFf-aCt15cdbb6d5a0655',
            'tariff_code'=>'NHIS-063-075',
            'description'=>'Hydatid Cyst of Liver',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:01',
            'updated_at'=>'2019-05-15 05:51:01'
        ] );



        Tariff::create( [
            'id'=>407,
            'identifier'=>'tAriFf-aCt15cdbb6d5c1651',
            'tariff_code'=>'NHIS-063-076',
            'description'=>'Hydrocelectomy + Orchidectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:01',
            'updated_at'=>'2019-05-15 05:51:01'
        ] );



        Tariff::create( [
            'id'=>408,
            'identifier'=>'tAriFf-aCt15cdbb6d5dd8b8',
            'tariff_code'=>'NHIS-063-077',
            'description'=>'Hydrocelectomy+Hernioplasty - Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:01',
            'updated_at'=>'2019-05-15 05:51:01'
        ] );



        Tariff::create( [
            'id'=>409,
            'identifier'=>'tAriFf-aCt15cdbb6d601edf',
            'tariff_code'=>'NHIS-063-078',
            'description'=>'Hypospadiacs Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>410,
            'identifier'=>'tAriFf-aCt15cdbb6d61d0c3',
            'tariff_code'=>'NHIS-063-079',
            'description'=>'Ileostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>411,
            'identifier'=>'tAriFf-aCt15cdbb6d65e117',
            'tariff_code'=>'NHIS-063-080',
            'description'=>'Ileostomy Pouch Revison',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>412,
            'identifier'=>'tAriFf-aCt15cdbb6d696b88',
            'tariff_code'=>'NHIS-063-081',
            'description'=>'Ilieo Sigmoidostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>413,
            'identifier'=>'tAriFf-aCt15cdbb6d6ae69d',
            'tariff_code'=>'NHIS-063-082',
            'description'=>'Instestinal perforation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>414,
            'identifier'=>'tAriFf-aCt15cdbb6d6c5121',
            'tariff_code'=>'NHIS-063-083',
            'description'=>'Intestinal Obstruction',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>415,
            'identifier'=>'tAriFf-aCt15cdbb6d6d5747',
            'tariff_code'=>'NHIS-063-084',
            'description'=>'Intestinal Perforation (Resection Anastomosis)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>416,
            'identifier'=>'tAriFf-aCt15cdbb6d6e7669',
            'tariff_code'=>'NHIS-063-085',
            'description'=>'Intussusception Operation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:02',
            'updated_at'=>'2019-05-15 05:51:02'
        ] );



        Tariff::create( [
            'id'=>417,
            'identifier'=>'tAriFf-aCt15cdbb6d7074ff',
            'tariff_code'=>'NHIS-063-086',
            'description'=>'Jejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>418,
            'identifier'=>'tAriFf-aCt15cdbb6d74a245',
            'tariff_code'=>'NHIS-063-087',
            'description'=>'Laparascopic  Cholecystectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>419,
            'identifier'=>'tAriFf-aCt15cdbb6d77edbd',
            'tariff_code'=>'NHIS-063-088',
            'description'=>'Laparotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>420,
            'identifier'=>'tAriFf-aCt15cdbb6d7a0daa',
            'tariff_code'=>'NHIS-063-089',
            'description'=>'Laryngectomy & Pharyngeal Diverticulum   (Throat)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>421,
            'identifier'=>'tAriFf-aCt15cdbb6d7bd1a4',
            'tariff_code'=>'NHIS-063-090',
            'description'=>'Laryngectomy with Block Dissection (Throat)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>422,
            'identifier'=>'tAriFf-aCt15cdbb6d7cc471',
            'tariff_code'=>'NHIS-063-091',
            'description'=>'Laryngo Fissure (Throat)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>423,
            'identifier'=>'tAriFf-aCt15cdbb6d7dc971',
            'tariff_code'=>'NHIS-063-092',
            'description'=>'Laryngopharyngectomy (Throat)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:03',
            'updated_at'=>'2019-05-15 05:51:03'
        ] );



        Tariff::create( [
            'id'=>424,
            'identifier'=>'tAriFf-aCt15cdbb6d817c4f',
            'tariff_code'=>'NHIS-063-093',
            'description'=>'Ligation Of Hepatic/Left Gastric Splenic Artery',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:04',
            'updated_at'=>'2019-05-15 05:51:04'
        ] );



        Tariff::create( [
            'id'=>425,
            'identifier'=>'tAriFf-aCt15cdbb6d845b6b',
            'tariff_code'=>'NHIS-063-094',
            'description'=>'Local Resection Of Pelvic Tumour',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:04',
            'updated_at'=>'2019-05-15 05:51:04'
        ] );



        Tariff::create( [
            'id'=>426,
            'identifier'=>'tAriFf-aCt15cdbb6d89c80e',
            'tariff_code'=>'NHIS-063-095',
            'description'=>'Longitudinal Pancreaticojejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:04',
            'updated_at'=>'2019-05-15 05:51:04'
        ] );



        Tariff::create( [
            'id'=>427,
            'identifier'=>'tAriFf-aCt15cdbb6d8c51f6',
            'tariff_code'=>'NHIS-063-096',
            'description'=>'Lymphatic Channel Transplantation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:04',
            'updated_at'=>'2019-05-15 05:51:04'
        ] );



        Tariff::create( [
            'id'=>428,
            'identifier'=>'tAriFf-aCt15cdbb6d8e05cf',
            'tariff_code'=>'NHIS-063-097',
            'description'=>'Mastectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:04',
            'updated_at'=>'2019-05-15 05:51:04'
        ] );



        Tariff::create( [
            'id'=>429,
            'identifier'=>'tAriFf-aCt15cdbb6d9038e3',
            'tariff_code'=>'NHIS-063-098',
            'description'=>'Meckel\'s Diverticulectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>430,
            'identifier'=>'tAriFf-aCt15cdbb6d91a5ba',
            'tariff_code'=>'NHIS-063-099',
            'description'=>'Mesenteric Caval Anastomosis',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>431,
            'identifier'=>'tAriFf-aCt15cdbb6d94b320',
            'tariff_code'=>'NHIS-063-100',
            'description'=>'Mesenteric Cyst - Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>432,
            'identifier'=>'tAriFf-aCt15cdbb6d95e30a',
            'tariff_code'=>'NHIS-063-101',
            'description'=>'Microlaryngoscopic Surgery (microlaryngoscopy)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>433,
            'identifier'=>'tAriFf-aCt15cdbb6d972d1f',
            'tariff_code'=>'NHIS-063-102',
            'description'=>'Nephrectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>434,
            'identifier'=>'tAriFf-aCt15cdbb6d9830f0',
            'tariff_code'=>'NHIS-063-103',
            'description'=>'Nephrolithotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>435,
            'identifier'=>'tAriFf-aCt15cdbb6d9a6686',
            'tariff_code'=>'NHIS-063-104',
            'description'=>'Oddis Sphincteroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>436,
            'identifier'=>'tAriFf-aCt15cdbb6d9bc004',
            'tariff_code'=>'NHIS-063-105',
            'description'=>'Oesophageal , 2 & 3 Stage, Thoraco-Abdominal, Fistula Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>437,
            'identifier'=>'tAriFf-aCt15cdbb6d9cf00e',
            'tariff_code'=>'NHIS-063-106',
            'description'=>'Oesophageal Atresia And Tracheo-Oesophageal Fistula Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>438,
            'identifier'=>'tAriFf-aCt15cdbb6d9e81a6',
            'tariff_code'=>'NHIS-063-107',
            'description'=>'Oesophageal Substitution, Diverticulum Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:05',
            'updated_at'=>'2019-05-15 05:51:05'
        ] );



        Tariff::create( [
            'id'=>439,
            'identifier'=>'tAriFf-aCt15cdbb6da0cb83',
            'tariff_code'=>'NHIS-063-108',
            'description'=>'Oesophageal Transection',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>440,
            'identifier'=>'tAriFf-aCt15cdbb6da298c5',
            'tariff_code'=>'NHIS-063-109',
            'description'=>'Oesophagectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>441,
            'identifier'=>'tAriFf-aCt15cdbb6da47615',
            'tariff_code'=>'NHIS-063-110',
            'description'=>'Oesophagogastrectomy With Interposition Of Colonic/Jejunal\n       Segment',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>442,
            'identifier'=>'tAriFf-aCt15cdbb6da560bc',
            'tariff_code'=>'NHIS-063-111',
            'description'=>'Oesophagostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>443,
            'identifier'=>'tAriFf-aCt15cdbb6da6d5ce',
            'tariff_code'=>'NHIS-063-112',
            'description'=>'Oophorectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>444,
            'identifier'=>'tAriFf-aCt15cdbb6da85c16',
            'tariff_code'=>'NHIS-063-113',
            'description'=>'Orchidectomy + Herniorraphy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>445,
            'identifier'=>'tAriFf-aCt15cdbb6dab13a5',
            'tariff_code'=>'NHIS-063-114',
            'description'=>'Orchidopexy, with Circumsion, With Eversion of Sac, with Herniotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>446,
            'identifier'=>'tAriFf-aCt15cdbb6dad0283',
            'tariff_code'=>'NHIS-063-115',
            'description'=>'Pancreatic Cystectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>447,
            'identifier'=>'tAriFf-aCt15cdbb6daea12c',
            'tariff_code'=>'NHIS-063-116',
            'description'=>'Pancreaticoduodenectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:06',
            'updated_at'=>'2019-05-15 05:51:06'
        ] );



        Tariff::create( [
            'id'=>448,
            'identifier'=>'tAriFf-aCt15cdbb6db0f8ca',
            'tariff_code'=>'NHIS-063-117',
            'description'=>'Pancreaticojejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>449,
            'identifier'=>'tAriFf-aCt15cdbb6db2ffd2',
            'tariff_code'=>'NHIS-063-118',
            'description'=>'Parathyroidectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>450,
            'identifier'=>'tAriFf-aCt15cdbb6db4866a',
            'tariff_code'=>'NHIS-063-119',
            'description'=>'Parodectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>451,
            'identifier'=>'tAriFf-aCt15cdbb6db665e2',
            'tariff_code'=>'NHIS-063-120',
            'description'=>'Partial Pancreatectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>452,
            'identifier'=>'tAriFf-aCt15cdbb6db84f91',
            'tariff_code'=>'NHIS-063-121',
            'description'=>'Pelvic Abscess - Open Drainage',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>453,
            'identifier'=>'tAriFf-aCt15cdbb6db98c71',
            'tariff_code'=>'NHIS-063-122',
            'description'=>'Pelvic Evisceration',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>454,
            'identifier'=>'tAriFf-aCt15cdbb6dbc43d2',
            'tariff_code'=>'NHIS-063-123',
            'description'=>'Penectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>455,
            'identifier'=>'tAriFf-aCt15cdbb6dbd851b',
            'tariff_code'=>'NHIS-063-124',
            'description'=>'Penoplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:07',
            'updated_at'=>'2019-05-15 05:51:07'
        ] );



        Tariff::create( [
            'id'=>456,
            'identifier'=>'tAriFf-aCt15cdbb6dc049bc',
            'tariff_code'=>'NHIS-063-125',
            'description'=>'Pericardiectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>457,
            'identifier'=>'tAriFf-aCt15cdbb6dc1d2a4',
            'tariff_code'=>'NHIS-063-126',
            'description'=>'Pharyngectomy & Reconstruction - Total',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>458,
            'identifier'=>'tAriFf-aCt15cdbb6dc431d7',
            'tariff_code'=>'NHIS-063-127',
            'description'=>'Phytomatous Growth in the Scalp - Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>459,
            'identifier'=>'tAriFf-aCt15cdbb6dc55fbb',
            'tariff_code'=>'NHIS-063-128',
            'description'=>'Plastic Repair Of Bladder Neck',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>460,
            'identifier'=>'tAriFf-aCt15cdbb6dc6e674',
            'tariff_code'=>'NHIS-063-129',
            'description'=>'Pleurectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>461,
            'identifier'=>'tAriFf-aCt15cdbb6dc85d19',
            'tariff_code'=>'NHIS-063-130',
            'description'=>'Pleuropneumonectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>462,
            'identifier'=>'tAriFf-aCt15cdbb6dca65d0',
            'tariff_code'=>'NHIS-063-131',
            'description'=>'Pneumonectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>463,
            'identifier'=>'tAriFf-aCt15cdbb6dcbfac8',
            'tariff_code'=>'NHIS-063-132',
            'description'=>'Portocaval Shunt/Anastomosis',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>464,
            'identifier'=>'tAriFf-aCt15cdbb6dcefbaf',
            'tariff_code'=>'NHIS-063-133',
            'description'=>'Proctocolectomy , Ileostomy & Ileosttomy Pouch',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:08',
            'updated_at'=>'2019-05-15 05:51:08'
        ] );



        Tariff::create( [
            'id'=>465,
            'identifier'=>'tAriFf-aCt15cdbb6dd178d3',
            'tariff_code'=>'NHIS-063-134',
            'description'=>'Prolapsed Rectum Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>466,
            'identifier'=>'tAriFf-aCt15cdbb6dd227bd',
            'tariff_code'=>'NHIS-063-135',
            'description'=>'Prostatectomy (all types incl TURP)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>467,
            'identifier'=>'tAriFf-aCt15cdbb6dd404ec',
            'tariff_code'=>'NHIS-063-136',
            'description'=>'Pulmonary Embolectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>468,
            'identifier'=>'tAriFf-aCt15cdbb6dd4de44',
            'tariff_code'=>'NHIS-063-137',
            'description'=>'Pulmonary Resection',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>469,
            'identifier'=>'tAriFf-aCt15cdbb6dd589d0',
            'tariff_code'=>'NHIS-063-138',
            'description'=>'Pyelolithotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>470,
            'identifier'=>'tAriFf-aCt15cdbb6dd6399d',
            'tariff_code'=>'NHIS-063-139',
            'description'=>'Pyeloromyotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>471,
            'identifier'=>'tAriFf-aCt15cdbb6dd6e443',
            'tariff_code'=>'NHIS-063-140',
            'description'=>'Pyeloroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>472,
            'identifier'=>'tAriFf-aCt15cdbb6dd794b0',
            'tariff_code'=>'NHIS-063-141',
            'description'=>'Pyelotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>473,
            'identifier'=>'tAriFf-aCt15cdbb6dd84049',
            'tariff_code'=>'NHIS-063-142',
            'description'=>'Pyloroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>474,
            'identifier'=>'tAriFf-aCt15cdbb6dd8f028',
            'tariff_code'=>'NHIS-063-143',
            'description'=>'Radical Cystectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>475,
            'identifier'=>'tAriFf-aCt15cdbb6dd99b97',
            'tariff_code'=>'NHIS-063-144',
            'description'=>'Radical Mastectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>476,
            'identifier'=>'tAriFf-aCt15cdbb6dda4b84',
            'tariff_code'=>'NHIS-063-145',
            'description'=>'Radical Mastectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>477,
            'identifier'=>'tAriFf-aCt15cdbb6ddaf6d9',
            'tariff_code'=>'NHIS-063-146',
            'description'=>'Radical Neck Dissection - Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>478,
            'identifier'=>'tAriFf-aCt15cdbb6ddba6a2',
            'tariff_code'=>'NHIS-063-147',
            'description'=>'Radical Pancreatectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>479,
            'identifier'=>'tAriFf-aCt15cdbb6ddc5186',
            'tariff_code'=>'NHIS-063-148',
            'description'=>'Radical Prostatectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>480,
            'identifier'=>'tAriFf-aCt15cdbb6ddd0247',
            'tariff_code'=>'NHIS-063-149',
            'description'=>'Reconstruction Of The Ureter',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>481,
            'identifier'=>'tAriFf-aCt15cdbb6ddecf5d',
            'tariff_code'=>'NHIS-063-150',
            'description'=>'Rectopexy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:09',
            'updated_at'=>'2019-05-15 05:51:09'
        ] );



        Tariff::create( [
            'id'=>482,
            'identifier'=>'tAriFf-aCt15cdbb6de0a1a1',
            'tariff_code'=>'NHIS-063-151',
            'description'=>'Recto-Urethral Fistula Closure',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>483,
            'identifier'=>'tAriFf-aCt15cdbb6de14d8d',
            'tariff_code'=>'NHIS-063-152',
            'description'=>'Rectovesical Fistula Closure',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>484,
            'identifier'=>'tAriFf-aCt15cdbb6de2803f',
            'tariff_code'=>'NHIS-063-153',
            'description'=>'Renal Aneurysmectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>485,
            'identifier'=>'tAriFf-aCt15cdbb6de58a3f',
            'tariff_code'=>'NHIS-063-154',
            'description'=>'Renal Cystectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>486,
            'identifier'=>'tAriFf-aCt15cdbb6de6637f',
            'tariff_code'=>'NHIS-063-155',
            'description'=>'Renal Decapsulation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>487,
            'identifier'=>'tAriFf-aCt15cdbb6de7133b',
            'tariff_code'=>'NHIS-063-156',
            'description'=>'Renopelvic Lymphatectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>488,
            'identifier'=>'tAriFf-aCt15cdbb6de7be15',
            'tariff_code'=>'NHIS-063-157',
            'description'=>'Repair Of Bochidalek Diaphragmatic Congenital Defect',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>489,
            'identifier'=>'tAriFf-aCt15cdbb6de86e66',
            'tariff_code'=>'NHIS-063-158',
            'description'=>'Repair Of Bowel Perforations',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>490,
            'identifier'=>'tAriFf-aCt15cdbb6de91a27',
            'tariff_code'=>'NHIS-063-159',
            'description'=>'Repair of Common Bile Duct',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>491,
            'identifier'=>'tAriFf-aCt15cdbb6de9c9a6',
            'tariff_code'=>'NHIS-063-160',
            'description'=>'Repair Of Gastric Lacerations',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>492,
            'identifier'=>'tAriFf-aCt15cdbb6dea74c8',
            'tariff_code'=>'NHIS-063-161',
            'description'=>'Repair Of Oesophageal Lacerations',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>493,
            'identifier'=>'tAriFf-aCt15cdbb6deb24e2',
            'tariff_code'=>'NHIS-063-162',
            'description'=>'Repair Of Splenic Laceration',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>494,
            'identifier'=>'tAriFf-aCt15cdbb6debd031',
            'tariff_code'=>'NHIS-063-163',
            'description'=>'Resection Anastomosis (Large Intestine)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>495,
            'identifier'=>'tAriFf-aCt15cdbb6dec8018',
            'tariff_code'=>'NHIS-063-164',
            'description'=>'Resection Anastomosis (Small Intestine)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>496,
            'identifier'=>'tAriFf-aCt15cdbb6ded2bb2',
            'tariff_code'=>'NHIS-063-165',
            'description'=>'Resection Of Median Bar Obstruction',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>497,
            'identifier'=>'tAriFf-aCt15cdbb6deddb86',
            'tariff_code'=>'NHIS-063-166',
            'description'=>'Retroperitoneal Drainage Of Perinephric Abscess',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:10',
            'updated_at'=>'2019-05-15 05:51:10'
        ] );



        Tariff::create( [
            'id'=>498,
            'identifier'=>'tAriFf-aCt15cdbb6df0663e',
            'tariff_code'=>'NHIS-063-167',
            'description'=>'Retroperitoneal Tumor - Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>499,
            'identifier'=>'tAriFf-aCt15cdbb6df14e89',
            'tariff_code'=>'NHIS-063-168',
            'description'=>'Roux-En-Y Pancreatic Jejunostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>500,
            'identifier'=>'tAriFf-aCt15cdbb6df1fa52',
            'tariff_code'=>'NHIS-063-169',
            'description'=>'Salivary Gland - Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>501,
            'identifier'=>'tAriFf-aCt15cdbb6df2aa2a',
            'tariff_code'=>'NHIS-063-170',
            'description'=>'Segmental Resection Of Bladder Lesion',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>502,
            'identifier'=>'tAriFf-aCt15cdbb6df4c0bf',
            'tariff_code'=>'NHIS-063-171',
            'description'=>'Selective Vagotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>503,
            'identifier'=>'tAriFf-aCt15cdbb6df5e2db',
            'tariff_code'=>'NHIS-063-172',
            'description'=>'Sigmoid Diverticulum',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>504,
            'identifier'=>'tAriFf-aCt15cdbb6df68e48',
            'tariff_code'=>'NHIS-063-173',
            'description'=>'Simple closure - Peptic perforation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>505,
            'identifier'=>'tAriFf-aCt15cdbb6df73d40',
            'tariff_code'=>'NHIS-063-174',
            'description'=>'Splenectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>506,
            'identifier'=>'tAriFf-aCt15cdbb6df7e954',
            'tariff_code'=>'NHIS-063-175',
            'description'=>'Splenic Artery Aneurysmectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>507,
            'identifier'=>'tAriFf-aCt15cdbb6df89926',
            'tariff_code'=>'NHIS-063-176',
            'description'=>'Splenorhaphy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>508,
            'identifier'=>'tAriFf-aCt15cdbb6df944d4',
            'tariff_code'=>'NHIS-063-177',
            'description'=>'Stripping And Ligation Of Veins',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>509,
            'identifier'=>'tAriFf-aCt15cdbb6df9f412',
            'tariff_code'=>'NHIS-063-178',
            'description'=>'Subcutaneous Venous Omphalo Saphenous Shunt',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>510,
            'identifier'=>'tAriFf-aCt15cdbb6dfaa01e',
            'tariff_code'=>'NHIS-063-179',
            'description'=>'Submandibular Mass Excision + Reconstruction',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>511,
            'identifier'=>'tAriFf-aCt15cdbb6dfc6fd4',
            'tariff_code'=>'NHIS-063-180',
            'description'=>'Submandibular Sialoadenectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>512,
            'identifier'=>'tAriFf-aCt15cdbb6dfd2b1b',
            'tariff_code'=>'NHIS-063-181',
            'description'=>'Subtotal Thyroidectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>513,
            'identifier'=>'tAriFf-aCt15cdbb6dfddb25',
            'tariff_code'=>'NHIS-063-182',
            'description'=>'Super Selective Vagotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>514,
            'identifier'=>'tAriFf-aCt15cdbb6dfe8685',
            'tariff_code'=>'NHIS-063-183',
            'description'=>'Surgery Of Acute Intra Abdominal Vascular Disease',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:11',
            'updated_at'=>'2019-05-15 05:51:11'
        ] );



        Tariff::create( [
            'id'=>515,
            'identifier'=>'tAriFf-aCt15cdbb6e00e781',
            'tariff_code'=>'NHIS-063-184',
            'description'=>'Surgery Of Complications Of Diverticular Disease',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>516,
            'identifier'=>'tAriFf-aCt15cdbb6e01a3f9',
            'tariff_code'=>'NHIS-063-185',
            'description'=>'Surgery Of Complications Of Pancreatitis',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>517,
            'identifier'=>'tAriFf-aCt15cdbb6e0253b9',
            'tariff_code'=>'NHIS-063-186',
            'description'=>'Surgery Of Hepatic Trauma',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>518,
            'identifier'=>'tAriFf-aCt15cdbb6e02ff34',
            'tariff_code'=>'NHIS-063-187',
            'description'=>'Surgery Of Intestinal Obstruction',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>519,
            'identifier'=>'tAriFf-aCt15cdbb6e06293d',
            'tariff_code'=>'NHIS-063-188',
            'description'=>'Surgery Of Seminal Vessicle',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>520,
            'identifier'=>'tAriFf-aCt15cdbb6e0710cd',
            'tariff_code'=>'NHIS-063-189',
            'description'=>'Surgery Ofcomplications Of Appendicitis',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>521,
            'identifier'=>'tAriFf-aCt15cdbb6e08dffe',
            'tariff_code'=>'NHIS-063-190',
            'description'=>'Surgical Exploration For Anorchism',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>522,
            'identifier'=>'tAriFf-aCt15cdbb6e099c79',
            'tariff_code'=>'NHIS-063-191',
            'description'=>'Sympathectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>523,
            'identifier'=>'tAriFf-aCt15cdbb6e0a4c29',
            'tariff_code'=>'NHIS-063-192',
            'description'=>'Thoracectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>524,
            'identifier'=>'tAriFf-aCt15cdbb6e0af77d',
            'tariff_code'=>'NHIS-063-193',
            'description'=>'Thoracoplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>525,
            'identifier'=>'tAriFf-aCt15cdbb6e0cf1fd',
            'tariff_code'=>'NHIS-063-194',
            'description'=>'Thoracotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>526,
            'identifier'=>'tAriFf-aCt15cdbb6e0dae2e',
            'tariff_code'=>'NHIS-063-195',
            'description'=>'Thrombectomy By Forarty\'s Catheterisation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>527,
            'identifier'=>'tAriFf-aCt15cdbb6e0e5db0',
            'tariff_code'=>'NHIS-063-196',
            'description'=>'Thyroglossal Cysts And Fistula Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>528,
            'identifier'=>'tAriFf-aCt15cdbb6e0f085f',
            'tariff_code'=>'NHIS-063-197',
            'description'=>'Thyroid Lobectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:12',
            'updated_at'=>'2019-05-15 05:51:12'
        ] );



        Tariff::create( [
            'id'=>529,
            'identifier'=>'tAriFf-aCt15cdbb6e119556',
            'tariff_code'=>'NHIS-063-198',
            'description'=>'Thyroidectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>530,
            'identifier'=>'tAriFf-aCt15cdbb6e125249',
            'tariff_code'=>'NHIS-063-199',
            'description'=>'Thyroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>531,
            'identifier'=>'tAriFf-aCt15cdbb6e130241',
            'tariff_code'=>'NHIS-063-200',
            'description'=>'Total Pancreatectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>532,
            'identifier'=>'tAriFf-aCt15cdbb6e170313',
            'tariff_code'=>'NHIS-063-201',
            'description'=>'Total Proctocolectomy & Ileostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>533,
            'identifier'=>'tAriFf-aCt15cdbb6e17ec99',
            'tariff_code'=>'NHIS-063-202',
            'description'=>'Tracheal Resection',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>534,
            'identifier'=>'tAriFf-aCt15cdbb6e19e4e2',
            'tariff_code'=>'NHIS-063-203',
            'description'=>'Tracheal Stenosis (End to end Anastamosis) (Throat)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>535,
            'identifier'=>'tAriFf-aCt15cdbb6e1aa2cf',
            'tariff_code'=>'NHIS-063-204',
            'description'=>'Tracheoplasty (Throat)',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>536,
            'identifier'=>'tAriFf-aCt15cdbb6e1b4ec4',
            'tariff_code'=>'NHIS-063-205',
            'description'=>'Transcystotomy Excision',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>537,
            'identifier'=>'tAriFf-aCt15cdbb6e1bed89',
            'tariff_code'=>'NHIS-063-206',
            'description'=>'Transcystotomy Fulgaration',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>538,
            'identifier'=>'tAriFf-aCt15cdbb6e1dcb32',
            'tariff_code'=>'NHIS-063-207',
            'description'=>'Transcystotomy Lithotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>539,
            'identifier'=>'tAriFf-aCt15cdbb6e1e896c',
            'tariff_code'=>'NHIS-063-208',
            'description'=>'Transduodenal Choledochal Cystectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>540,
            'identifier'=>'tAriFf-aCt15cdbb6e1f349a',
            'tariff_code'=>'NHIS-063-209',
            'description'=>'Transduodenal Sphincteroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:13',
            'updated_at'=>'2019-05-15 05:51:13'
        ] );



        Tariff::create( [
            'id'=>541,
            'identifier'=>'tAriFf-aCt15cdbb6e229a9f',
            'tariff_code'=>'NHIS-063-210',
            'description'=>'Transoesophageal Variceligation',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>542,
            'identifier'=>'tAriFf-aCt15cdbb6e235766',
            'tariff_code'=>'NHIS-063-211',
            'description'=>'Transurethral Dessication Of Congenital Meatal Stenoses',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>543,
            'identifier'=>'tAriFf-aCt15cdbb6e26ac6f',
            'tariff_code'=>'NHIS-063-212',
            'description'=>'Transurethral Excision Of Bladder Lesion',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>544,
            'identifier'=>'tAriFf-aCt15cdbb6e2abe81',
            'tariff_code'=>'NHIS-063-213',
            'description'=>'Transurethral Fulguration Of Bladder Lesion',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>545,
            'identifier'=>'tAriFf-aCt15cdbb6e2b7a88',
            'tariff_code'=>'NHIS-063-214',
            'description'=>'Urerthra-Reconstruction/ Repair Of Prostatic/Membraneous Urethra',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>546,
            'identifier'=>'tAriFf-aCt15cdbb6e2c80fa',
            'tariff_code'=>'NHIS-063-215',
            'description'=>'Ureteral Reinplantation Into The Bladder',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>547,
            'identifier'=>'tAriFf-aCt15cdbb6e2ea435',
            'tariff_code'=>'NHIS-063-216',
            'description'=>'Ureterolithotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:14',
            'updated_at'=>'2019-05-15 05:51:14'
        ] );



        Tariff::create( [
            'id'=>548,
            'identifier'=>'tAriFf-aCt15cdbb6e307687',
            'tariff_code'=>'NHIS-063-217',
            'description'=>'Ureterosigmoidostomy With Rectal Bladder/Colostomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>549,
            'identifier'=>'tAriFf-aCt15cdbb6e316b42',
            'tariff_code'=>'NHIS-063-218',
            'description'=>'Uretherectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>550,
            'identifier'=>'tAriFf-aCt15cdbb6e34212e',
            'tariff_code'=>'NHIS-063-219',
            'description'=>'Urethroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>551,
            'identifier'=>'tAriFf-aCt15cdbb6e3818c6',
            'tariff_code'=>'NHIS-063-220',
            'description'=>'Urethrotomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>552,
            'identifier'=>'tAriFf-aCt15cdbb6e3ae98c',
            'tariff_code'=>'NHIS-063-221',
            'description'=>'Urethro-Vesicopexy, Combined Abdominal And Vaginal Approach',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>553,
            'identifier'=>'tAriFf-aCt15cdbb6e3ba713',
            'tariff_code'=>'NHIS-063-222',
            'description'=>'Uretro Vaginal Fistula Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>554,
            'identifier'=>'tAriFf-aCt15cdbb6e3c562e',
            'tariff_code'=>'NHIS-063-223',
            'description'=>'Uretro Vesical Fistula Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>555,
            'identifier'=>'tAriFf-aCt15cdbb6e3e7912',
            'tariff_code'=>'NHIS-063-224',
            'description'=>'Vagoplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>556,
            'identifier'=>'tAriFf-aCt15cdbb6e3f3987',
            'tariff_code'=>'NHIS-063-225',
            'description'=>'Vagotomy/Pyloroplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:15',
            'updated_at'=>'2019-05-15 05:51:15'
        ] );



        Tariff::create( [
            'id'=>557,
            'identifier'=>'tAriFf-aCt15cdbb6e40a0a9',
            'tariff_code'=>'NHIS-063-226',
            'description'=>'Vasoplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>558,
            'identifier'=>'tAriFf-aCt15cdbb6e426f7a',
            'tariff_code'=>'NHIS-063-227',
            'description'=>'Vein Patch Angioplasty',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>559,
            'identifier'=>'tAriFf-aCt15cdbb6e432c23',
            'tariff_code'=>'NHIS-063-228',
            'description'=>'Vesical Diverticulectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>560,
            'identifier'=>'tAriFf-aCt15cdbb6e43dc28',
            'tariff_code'=>'NHIS-063-229',
            'description'=>'Vesicovaginal Fistula Repair',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>561,
            'identifier'=>'tAriFf-aCt15cdbb6e49e4f3',
            'tariff_code'=>'NHIS-063-230',
            'description'=>'Volvous of Large Bowel',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>562,
            'identifier'=>'tAriFf-aCt15cdbb6e4b24de',
            'tariff_code'=>'NHIS-063-231',
            'description'=>'Vulvectomy',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>563,
            'identifier'=>'tAriFf-aCt15cdbb6e4d2fa4',
            'tariff_code'=>'NHIS-063-232',
            'description'=>'Warrens Shunt',
            'parent_id'=>331,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>564,
            'identifier'=>'tAriFf-aCt15cdbb6e4e5b3f',
            'tariff_code'=>'NHIS-063-233',
            'description'=>'Wound Debridement ( Under GA )',
            'parent_id'=>331,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>565,
            'identifier'=>'tAriFf-aCt15cdbb6e4f0b5c',
            'tariff_code'=>'NHIS-070-000',
            'description'=>'ENDOSCOPIC PROCEDURES',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:16',
            'updated_at'=>'2019-05-15 05:51:16'
        ] );



        Tariff::create( [
            'id'=>566,
            'identifier'=>'tAriFf-aCt15cdbb6e516a85',
            'tariff_code'=>'NHIS-071-001',
            'description'=>'Ablation of Endometriotic Spot',
            'parent_id'=>565,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>567,
            'identifier'=>'tAriFf-aCt15cdbb6e522938',
            'tariff_code'=>'NHIS-071-002',
            'description'=>'Adhesolysis',
            'parent_id'=>565,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>568,
            'identifier'=>'tAriFf-aCt15cdbb6e52d3ce',
            'tariff_code'=>'NHIS-071-003',
            'description'=>'Appendectomy',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>569,
            'identifier'=>'tAriFf-aCt15cdbb6e538416',
            'tariff_code'=>'NHIS-071-004',
            'description'=>'Cholecystectomy',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>570,
            'identifier'=>'tAriFf-aCt15cdbb6e55286f',
            'tariff_code'=>'NHIS-071-005',
            'description'=>'Cholecystectomy and Drainage of Liver abscess',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>571,
            'identifier'=>'tAriFf-aCt15cdbb6e566a4a',
            'tariff_code'=>'NHIS-071-006',
            'description'=>'Cholecystectomy with Excision of TO Mass',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>572,
            'identifier'=>'tAriFf-aCt15cdbb6e598e8e',
            'tariff_code'=>'NHIS-071-007',
            'description'=>'Cyst Aspiration',
            'parent_id'=>565,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>573,
            'identifier'=>'tAriFf-aCt15cdbb6e5c448a',
            'tariff_code'=>'NHIS-071-008',
            'description'=>'Endometria to Endometria Anastomosis',
            'parent_id'=>565,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>574,
            'identifier'=>'tAriFf-aCt15cdbb6e5d8278',
            'tariff_code'=>'NHIS-071-009',
            'description'=>'Fimbriolysis',
            'parent_id'=>565,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>575,
            'identifier'=>'tAriFf-aCt15cdbb6e5ee011',
            'tariff_code'=>'NHIS-071-010',
            'description'=>'Hemicolectomy',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:17',
            'updated_at'=>'2019-05-15 05:51:17'
        ] );



        Tariff::create( [
            'id'=>576,
            'identifier'=>'tAriFf-aCt15cdbb6e61ed89',
            'tariff_code'=>'NHIS-071-011',
            'description'=>'Hysterectomy with bilateral SalpingoOperectomy',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>577,
            'identifier'=>'tAriFf-aCt15cdbb6e632db2',
            'tariff_code'=>'NHIS-071-012',
            'description'=>'Incisional Hernia - Repair',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>578,
            'identifier'=>'tAriFf-aCt15cdbb6e642176',
            'tariff_code'=>'NHIS-071-013',
            'description'=>'Inguinal Hernia - Bilateral',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>579,
            'identifier'=>'tAriFf-aCt15cdbb6e6706f9',
            'tariff_code'=>'NHIS-071-014',
            'description'=>'Inguinal hernia - Unilateral',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>580,
            'identifier'=>'tAriFf-aCt15cdbb6e67ea9a',
            'tariff_code'=>'NHIS-071-015',
            'description'=>'Intestinal resection',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>581,
            'identifier'=>'tAriFf-aCt15cdbb6e69b958',
            'tariff_code'=>'NHIS-071-016',
            'description'=>'Myomectomy',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>582,
            'identifier'=>'tAriFf-aCt15cdbb6e6af791',
            'tariff_code'=>'NHIS-071-017',
            'description'=>'Oophrectomy',
            'parent_id'=>565,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>583,
            'identifier'=>'tAriFf-aCt15cdbb6e6d1e0d',
            'tariff_code'=>'NHIS-071-018',
            'description'=>'Ovarian Cystectomy',
            'parent_id'=>565,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>584,
            'identifier'=>'tAriFf-aCt15cdbb6e6eb496',
            'tariff_code'=>'NHIS-071-019',
            'description'=>'Perotionities',
            'parent_id'=>565,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:18',
            'updated_at'=>'2019-05-15 05:51:18'
        ] );



        Tariff::create( [
            'id'=>585,
            'identifier'=>'tAriFf-aCt15cdbb6e71c26b',
            'tariff_code'=>'NHIS-071-020',
            'description'=>'Repair of Ureterocele',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>586,
            'identifier'=>'tAriFf-aCt15cdbb6e728052',
            'tariff_code'=>'NHIS-071-021',
            'description'=>'Salpingo Ophrectomy',
            'parent_id'=>565,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>587,
            'identifier'=>'tAriFf-aCt15cdbb6e73acbd',
            'tariff_code'=>'NHIS-071-022',
            'description'=>'Salpingostomy',
            'parent_id'=>565,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>588,
            'identifier'=>'tAriFf-aCt15cdbb6e766410',
            'tariff_code'=>'NHIS-071-023',
            'description'=>'Uterine septum',
            'parent_id'=>565,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>589,
            'identifier'=>'tAriFf-aCt15cdbb6e773c75',
            'tariff_code'=>'NHIS-071-024',
            'description'=>'Varicocele - Bilateral',
            'parent_id'=>565,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>590,
            'identifier'=>'tAriFf-aCt15cdbb6e798e3d',
            'tariff_code'=>'NHIS-071-025',
            'description'=>'Varicocele - Unilateral',
            'parent_id'=>565,
            'amount'=>'45000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>591,
            'identifier'=>'tAriFf-aCt15cdbb6e7acc34',
            'tariff_code'=>'NHIS-080-000',
            'description'=>'OPTOMETRY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>592,
            'identifier'=>'tAriFf-aCt15cdbb6e7cf5af',
            'tariff_code'=>'592',
            'description'=>'Minor',
            'parent_id'=>591,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>593,
            'identifier'=>'tAriFf-aCt15cdbb6e7e079e',
            'tariff_code'=>'NHIS-081-001',
            'description'=>'Refraction',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:19',
            'updated_at'=>'2019-05-15 05:51:19'
        ] );



        Tariff::create( [
            'id'=>594,
            'identifier'=>'tAriFf-aCt15cdbb6e80e920',
            'tariff_code'=>'NHIS-081-002',
            'description'=>'Tonometry (Pulsair/Goldmann Applanation)',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>595,
            'identifier'=>'tAriFf-aCt15cdbb6e8226de',
            'tariff_code'=>'NHIS-081-003',
            'description'=>'Pupillary Dilation',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>596,
            'identifier'=>'tAriFf-aCt15cdbb6e844c85',
            'tariff_code'=>'NHIS-081-004',
            'description'=>'Indirect Ophthalmoscopy',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>597,
            'identifier'=>'tAriFf-aCt15cdbb6e860f94',
            'tariff_code'=>'NHIS-081-005',
            'description'=>'Indirect Ophthalmoscopy',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>598,
            'identifier'=>'tAriFf-aCt15cdbb6e885e55',
            'tariff_code'=>'NHIS-081-006',
            'description'=>'Visual Field Assessment',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>599,
            'identifier'=>'tAriFf-aCt15cdbb6e8abea3',
            'tariff_code'=>'NHIS-081-007',
            'description'=>'4 Minor ( Superfield Lenses ) Examination',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>600,
            'identifier'=>'tAriFf-aCt15cdbb6e8ba640',
            'tariff_code'=>'NHIS-081-008',
            'description'=>'Subconjuctival Injection',
            'parent_id'=>592,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>601,
            'identifier'=>'tAriFf-aCt15cdbb6e8e4f54',
            'tariff_code'=>'NHIS-081-000',
            'description'=>'OPHTHALMOLOGY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:20',
            'updated_at'=>'2019-05-15 05:51:20'
        ] );



        Tariff::create( [
            'id'=>602,
            'identifier'=>'tAriFf-aCt15cdbb6e903bf3',
            'tariff_code'=>'NHIS-091-000',
            'description'=>'Intermediate Procedures/surgeries',
            'parent_id'=>NULL,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:21',
            'updated_at'=>'2019-05-15 05:51:21'
        ] );



        Tariff::create( [
            'id'=>603,
            'identifier'=>'tAriFf-aCt15cdbb6e92c636',
            'tariff_code'=>'NHIS-091-001',
            'description'=>'Abscess Drainage of Lid',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:21',
            'updated_at'=>'2019-05-15 05:51:21'
        ] );



        Tariff::create( [
            'id'=>604,
            'identifier'=>'tAriFf-aCt15cdbb6e957cc3',
            'tariff_code'=>'NHIS-091-002',
            'description'=>'Anterior Chamber Reconstruction',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:21',
            'updated_at'=>'2019-05-15 05:51:21'
        ] );



        Tariff::create( [
            'id'=>605,
            'identifier'=>'tAriFf-aCt15cdbb6e99ba46',
            'tariff_code'=>'NHIS-091-003',
            'description'=>'Bowman\'s Cautery',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:21',
            'updated_at'=>'2019-05-15 05:51:21'
        ] );



        Tariff::create( [
            'id'=>606,
            'identifier'=>'tAriFf-aCt15cdbb6e9da0b7',
            'tariff_code'=>'NHIS-091-004',
            'description'=>'Buckle Removal',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:21',
            'updated_at'=>'2019-05-15 05:51:21'
        ] );



        Tariff::create( [
            'id'=>607,
            'identifier'=>'tAriFf-aCt15cdbb6ea0ce16',
            'tariff_code'=>'NHIS-091-005',
            'description'=>'Canaliculo Dacryocysto Rhinostomy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>608,
            'identifier'=>'tAriFf-aCt15cdbb6ea25f3d',
            'tariff_code'=>'NHIS-091-006',
            'description'=>'Capsulotomy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>609,
            'identifier'=>'tAriFf-aCt15cdbb6ea349e5',
            'tariff_code'=>'NHIS-092-002',
            'description'=>'Cataract + Pterygium',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>610,
            'identifier'=>'tAriFf-aCt15cdbb6ea4b358',
            'tariff_code'=>'NHIS-092-003',
            'description'=>'Cataract Removal - Bilateral',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>611,
            'identifier'=>'tAriFf-aCt15cdbb6ea73e8a',
            'tariff_code'=>'NHIS-092-001',
            'description'=>'Cataract Removal - Unilateral',
            'parent_id'=>601,
            'amount'=>'55000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>612,
            'identifier'=>'tAriFf-aCt15cdbb6ea97273',
            'tariff_code'=>'NHIS-091-007',
            'description'=>'Chalazion Excision',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>613,
            'identifier'=>'tAriFf-aCt15cdbb6eaad0dd',
            'tariff_code'=>'NHIS-092-004',
            'description'=>'Combined Cataract Extraction with Trabeculectomy',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>614,
            'identifier'=>'tAriFf-aCt15cdbb6eac5f81',
            'tariff_code'=>'NHIS-091-008',
            'description'=>'Conjuctival Laceration Repair',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>615,
            'identifier'=>'tAriFf-aCt15cdbb6eadb0f5',
            'tariff_code'=>'NHIS-092-005',
            'description'=>'Conjuctivectomy And Cryoapplication',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:22',
            'updated_at'=>'2019-05-15 05:51:22'
        ] );



        Tariff::create( [
            'id'=>616,
            'identifier'=>'tAriFf-aCt15cdbb6eb12302',
            'tariff_code'=>'NHIS-092-006',
            'description'=>'Corneal Grafting',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>617,
            'identifier'=>'tAriFf-aCt15cdbb6eb21a30',
            'tariff_code'=>'NHIS-092-007',
            'description'=>'Cryoretinopexy - Closed',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>618,
            'identifier'=>'tAriFf-aCt15cdbb6eb358b4',
            'tariff_code'=>'NHIS-092-008',
            'description'=>'Cxyoretinopexy - Open',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>619,
            'identifier'=>'tAriFf-aCt15cdbb6eb5b431',
            'tariff_code'=>'NHIS-091-009',
            'description'=>'Cyclocryoablation/Cyclocryotherapy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>620,
            'identifier'=>'tAriFf-aCt15cdbb6eb8f10f',
            'tariff_code'=>'NHIS-092-009',
            'description'=>'Dacrocystectomy With Pterygium - Excision',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>621,
            'identifier'=>'tAriFf-aCt15cdbb6eb9c76e',
            'tariff_code'=>'NHIS-092-010',
            'description'=>'Dacrocystorhinostomy',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>622,
            'identifier'=>'tAriFf-aCt15cdbb6ebafb71',
            'tariff_code'=>'NHIS-091-010',
            'description'=>'Dacryocystectomy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>623,
            'identifier'=>'tAriFf-aCt15cdbb6ebc531e',
            'tariff_code'=>'NHIS-091-011',
            'description'=>'Diode Laser Cycloablation',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>624,
            'identifier'=>'tAriFf-aCt15cdbb6ebdce33',
            'tariff_code'=>'NHIS-091-012',
            'description'=>'Diode Laser Panretinal Photocoagulation',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>625,
            'identifier'=>'tAriFf-aCt15cdbb6ebed1dd',
            'tariff_code'=>'NHIS-091-013',
            'description'=>'Ectropion Correction',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:23',
            'updated_at'=>'2019-05-15 05:51:23'
        ] );



        Tariff::create( [
            'id'=>626,
            'identifier'=>'tAriFf-aCt15cdbb6ec0955e',
            'tariff_code'=>'NHIS-091-014',
            'description'=>'Endoscopic Optic Nerve Decompression',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>627,
            'identifier'=>'tAriFf-aCt15cdbb6ec2ab42',
            'tariff_code'=>'NHIS-091-015',
            'description'=>'Endoscopic Optic Orbital Decompression',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>628,
            'identifier'=>'tAriFf-aCt15cdbb6ec3f89a',
            'tariff_code'=>'NHIS-091-016',
            'description'=>'Entropion And Ectropion Repairs',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>629,
            'identifier'=>'tAriFf-aCt15cdbb6ec6ba63',
            'tariff_code'=>'NHIS-092-011',
            'description'=>'Evisceration/Enucleation/Extenteration',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>630,
            'identifier'=>'tAriFf-aCt15cdbb6ec92e66',
            'tariff_code'=>'NHIS-092-012',
            'description'=>'Extracapsular Cataract Extraction',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>631,
            'identifier'=>'tAriFf-aCt15cdbb6eca3fdc',
            'tariff_code'=>'NHIS-091-017',
            'description'=>'Granuloma Excision (the eye)',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>632,
            'identifier'=>'tAriFf-aCt15cdbb6ecb51e9',
            'tariff_code'=>'NHIS-091-018',
            'description'=>'Intraocular Foreign Body Removal',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>633,
            'identifier'=>'tAriFf-aCt15cdbb6eccd8a7',
            'tariff_code'=>'NHIS-091-019',
            'description'=>'Iridectomy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>634,
            'identifier'=>'tAriFf-aCt15cdbb6ecddfa0',
            'tariff_code'=>'NHIS-091-020',
            'description'=>'IRIS Prolapse - Repair',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:24',
            'updated_at'=>'2019-05-15 05:51:24'
        ] );



        Tariff::create( [
            'id'=>635,
            'identifier'=>'tAriFf-aCt15cdbb6ed076ad',
            'tariff_code'=>'NHIS-092-013',
            'description'=>'Keratoplasty',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>636,
            'identifier'=>'tAriFf-aCt15cdbb6ed31e32',
            'tariff_code'=>'NHIS-091-021',
            'description'=>'Lacrimal probing and Syringing',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>637,
            'identifier'=>'tAriFf-aCt15cdbb6ed3f8f2',
            'tariff_code'=>'NHIS-092-014',
            'description'=>'Lensectomy',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>638,
            'identifier'=>'tAriFf-aCt15cdbb6ed58dc8',
            'tariff_code'=>'NHIS-091-022',
            'description'=>'Limbal Dermoid Removal',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>639,
            'identifier'=>'tAriFf-aCt15cdbb6ed711e9',
            'tariff_code'=>'NHIS-092-000',
            'description'=>'Major Procedures/surgeries',
            'parent_id'=>601,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>640,
            'identifier'=>'tAriFf-aCt15cdbb6ed8192d',
            'tariff_code'=>'NHIS-091-023',
            'description'=>'Membranectomy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>641,
            'identifier'=>'tAriFf-aCt15cdbb6ed91b22',
            'tariff_code'=>'NHIS-092-015',
            'description'=>'Paracentesis (A/C Washout)',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>642,
            'identifier'=>'tAriFf-aCt15cdbb6eda4dd0',
            'tariff_code'=>'NHIS-092-016',
            'description'=>'Penetrating Keratoplasty',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>643,
            'identifier'=>'tAriFf-aCt15cdbb6edaf8d3',
            'tariff_code'=>'NHIS-092-017',
            'description'=>'Perforating corneo - Scleral Injury',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>644,
            'identifier'=>'tAriFf-aCt15cdbb6edbf09e',
            'tariff_code'=>'NHIS-091-024',
            'description'=>'Pterigium + Conjunctival Autograft',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>645,
            'identifier'=>'tAriFf-aCt15cdbb6edd01e9',
            'tariff_code'=>'NHIS-091-025',
            'description'=>'Pterygium Excision',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>646,
            'identifier'=>'tAriFf-aCt15cdbb6ede2452',
            'tariff_code'=>'NHIS-092-018',
            'description'=>'Ptosis Repair',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:25',
            'updated_at'=>'2019-05-15 05:51:25'
        ] );



        Tariff::create( [
            'id'=>647,
            'identifier'=>'tAriFf-aCt15cdbb6ee011ea',
            'tariff_code'=>'NHIS-092-019',
            'description'=>'Radial Keratotomy',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>648,
            'identifier'=>'tAriFf-aCt15cdbb6ee15240',
            'tariff_code'=>'NHIS-091-026',
            'description'=>'Removal Of Foreign Bodies From Conjuctiva And Cornea',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>649,
            'identifier'=>'tAriFf-aCt15cdbb6ee2aa80',
            'tariff_code'=>'NHIS-092-020',
            'description'=>'Retinal Detachment Surgery',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>650,
            'identifier'=>'tAriFf-aCt15cdbb6ee50c65',
            'tariff_code'=>'NHIS-092-021',
            'description'=>'Scleral Buckling Procedures',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>651,
            'identifier'=>'tAriFf-aCt15cdbb6ee87c90',
            'tariff_code'=>'NHIS-092-022',
            'description'=>'Socket Reconstruction',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>652,
            'identifier'=>'tAriFf-aCt15cdbb6eea4b7c',
            'tariff_code'=>'NHIS-092-023',
            'description'=>'Squint Surgery',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>653,
            'identifier'=>'tAriFf-aCt15cdbb6eeb429b',
            'tariff_code'=>'NHIS-091-027',
            'description'=>'Syringing And Probing',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>654,
            'identifier'=>'tAriFf-aCt15cdbb6eec7fc6',
            'tariff_code'=>'NHIS-092-024',
            'description'=>'Trabeculectomy With Antimetabolites',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>655,
            'identifier'=>'tAriFf-aCt15cdbb6eed76fb',
            'tariff_code'=>'NHIS-092-025',
            'description'=>'Traumatic Cannalicular Repair',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>656,
            'identifier'=>'tAriFf-aCt15cdbb6eee7b38',
            'tariff_code'=>'NHIS-092-026',
            'description'=>'Traumatic Corneal And/Or Scleral Laceration Repair',
            'parent_id'=>601,
            'amount'=>'75000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:26',
            'updated_at'=>'2019-05-15 05:51:26'
        ] );



        Tariff::create( [
            'id'=>657,
            'identifier'=>'tAriFf-aCt15cdbb6ef07863',
            'tariff_code'=>'NHIS-091-028',
            'description'=>'Traumatic Lid Laceration Repair',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>658,
            'identifier'=>'tAriFf-aCt15cdbb6ef1ff04',
            'tariff_code'=>'NHIS-091-029',
            'description'=>'Tumor Excision From Lid',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>659,
            'identifier'=>'tAriFf-aCt15cdbb6ef402c4',
            'tariff_code'=>'NHIS-091-030',
            'description'=>'Tumours of IRIS',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>660,
            'identifier'=>'tAriFf-aCt15cdbb6ef84799',
            'tariff_code'=>'NHIS-091-031',
            'description'=>'Vitrectomy',
            'parent_id'=>601,
            'amount'=>'30000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>661,
            'identifier'=>'tAriFf-aCt15cdbb6efb9fc8',
            'tariff_code'=>'NHIS-092-027',
            'description'=>'Vitrectomy + Retinal Detachment',
            'parent_id'=>601,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>662,
            'identifier'=>'tAriFf-aCt15cdbb6efdb475',
            'tariff_code'=>'NHIS-092-027',
            'description'=>'Vitrectomy + Retinal Detachment',
            'parent_id'=>601,
            'amount'=>'100000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>663,
            'identifier'=>'tAriFf-aCt15cdbb6efed2a0',
            'tariff_code'=>'663',
            'description'=>'PSYCHIATRIC SERVICES',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:27',
            'updated_at'=>'2019-05-15 05:51:27'
        ] );



        Tariff::create( [
            'id'=>664,
            'identifier'=>'tAriFf-aCt15cdbb6f013151',
            'tariff_code'=>'NHIS-101-001',
            'description'=>'Electroconvulsive Therapy (Course of 6 sessions)',
            'parent_id'=>663,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>665,
            'identifier'=>'tAriFf-aCt15cdbb6f02abb9',
            'tariff_code'=>'NHIS-101-002',
            'description'=>'Electro-Narcosis (Course of 10 sessions)',
            'parent_id'=>663,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>666,
            'identifier'=>'tAriFf-aCt15cdbb6f052d3b',
            'tariff_code'=>'NHIS-101-003',
            'description'=>'Abreaction (Diagnostic and Forensic)',
            'parent_id'=>663,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>667,
            'identifier'=>'tAriFf-aCt15cdbb6f077f6f',
            'tariff_code'=>'NHIS-101-004',
            'description'=>'Comprehensive Psychiatric Assessment',
            'parent_id'=>663,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>668,
            'identifier'=>'tAriFf-aCt15cdbb6f08715c',
            'tariff_code'=>'NHIS-101-005',
            'description'=>'Psychometric Assessment, Scoring & Interpretation',
            'parent_id'=>663,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>669,
            'identifier'=>'tAriFf-aCt15cdbb6f096503',
            'tariff_code'=>'NHIS-101-006',
            'description'=>'Psychotherapies (Brief and others - Max: 10 sessions)',
            'parent_id'=>663,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>670,
            'identifier'=>'tAriFf-aCt15cdbb6f0a959c',
            'tariff_code'=>'NHIS-101-007',
            'description'=>'Behaviour Modifications',
            'parent_id'=>663,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>671,
            'identifier'=>'tAriFf-aCt15cdbb6f0c52df',
            'tariff_code'=>'NHIS-101-008',
            'description'=>'Sleep (REM) Deprivation Therapy',
            'parent_id'=>663,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>672,
            'identifier'=>'tAriFf-aCt15cdbb6f0d8919',
            'tariff_code'=>'NHIS-101-009',
            'description'=>'Electroencephalography',
            'parent_id'=>663,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>673,
            'identifier'=>'tAriFf-aCt15cdbb6f0effd8',
            'tariff_code'=>'NHIS-110-000',
            'description'=>'PAEDIATRICS',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:28',
            'updated_at'=>'2019-05-15 05:51:28'
        ] );



        Tariff::create( [
            'id'=>674,
            'identifier'=>'tAriFf-aCt15cdbb6f10cd62',
            'tariff_code'=>'NHIS-111-001',
            'description'=>'Critical Care (In ICU per day)',
            'parent_id'=>673,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>675,
            'identifier'=>'tAriFf-aCt15cdbb6f12e729',
            'tariff_code'=>'NHIS-111-002',
            'description'=>'Oxygen Therapy per day',
            'parent_id'=>673,
            'amount'=>'10000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>676,
            'identifier'=>'tAriFf-aCt15cdbb6f14307a',
            'tariff_code'=>'NHIS-111-003',
            'description'=>'Nebulistation per day',
            'parent_id'=>673,
            'amount'=>'2000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>677,
            'identifier'=>'tAriFf-aCt15cdbb6f186ddd',
            'tariff_code'=>'NHIS-111-004',
            'description'=>'Gastric Lavage',
            'parent_id'=>673,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>678,
            'identifier'=>'tAriFf-aCt15cdbb6f197705',
            'tariff_code'=>'NHIS-111-005',
            'description'=>'Aspirations/Paracentesis',
            'parent_id'=>673,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>679,
            'identifier'=>'tAriFf-aCt15cdbb6f1aa339',
            'tariff_code'=>'NHIS-111-006',
            'description'=>'Tissue Biopsies',
            'parent_id'=>673,
            'amount'=>'10000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>680,
            'identifier'=>'tAriFf-aCt15cdbb6f1cb986',
            'tariff_code'=>'NHIS-111-007',
            'description'=>'Lumbar Puncture',
            'parent_id'=>673,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>681,
            'identifier'=>'tAriFf-aCt15cdbb6f1e07ec',
            'tariff_code'=>'NHIS-111-008',
            'description'=>'Phototherapy per day',
            'parent_id'=>673,
            'amount'=>'1500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>682,
            'identifier'=>'tAriFf-aCt15cdbb6f1f3cce',
            'tariff_code'=>'NHIS-111-009',
            'description'=>'Incubator Care per day',
            'parent_id'=>673,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:29',
            'updated_at'=>'2019-05-15 05:51:29'
        ] );



        Tariff::create( [
            'id'=>683,
            'identifier'=>'tAriFf-aCt15cdbb6f20cd26',
            'tariff_code'=>'NHIS-111-010',
            'description'=>'Exchange Blood Transfusion',
            'parent_id'=>673,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>684,
            'identifier'=>'tAriFf-aCt15cdbb6f2267df',
            'tariff_code'=>'NHIS-111-011',
            'description'=>'Subdural Tap',
            'parent_id'=>673,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>685,
            'identifier'=>'tAriFf-aCt15cdbb6f240773',
            'tariff_code'=>'NHIS-112-000',
            'description'=>'Paediatric Surgery',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>686,
            'identifier'=>'tAriFf-aCt15cdbb6f265679',
            'tariff_code'=>'NHIS-112-001',
            'description'=>'Anal Dilatation',
            'parent_id'=>685,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>687,
            'identifier'=>'tAriFf-aCt15cdbb6f27c28f',
            'tariff_code'=>'NHIS-112-002',
            'description'=>'Rectal Polyp',
            'parent_id'=>685,
            'amount'=>'15000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>688,
            'identifier'=>'tAriFf-aCt15cdbb6f298131',
            'tariff_code'=>'NHIS-112-003',
            'description'=>'Anal Transposition for Ectopic Anus',
            'parent_id'=>685,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>689,
            'identifier'=>'tAriFf-aCt15cdbb6f2ae01f',
            'tariff_code'=>'NHIS-112-004',
            'description'=>'Hernia - Epigastric',
            'parent_id'=>685,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>690,
            'identifier'=>'tAriFf-aCt15cdbb6f2ba909',
            'tariff_code'=>'NHIS-112-005',
            'description'=>'Hernia - Umbilical',
            'parent_id'=>685,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>691,
            'identifier'=>'tAriFf-aCt15cdbb6f2c8230',
            'tariff_code'=>'NHIS-112-006',
            'description'=>'Hernia-Inguinal - Bilateral',
            'parent_id'=>685,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>692,
            'identifier'=>'tAriFf-aCt15cdbb6f2d2cee',
            'tariff_code'=>'NHIS-112-007',
            'description'=>'Hernia-Inguirial -Unilateral',
            'parent_id'=>685,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>693,
            'identifier'=>'tAriFf-aCt15cdbb6f2e2599',
            'tariff_code'=>'NHIS-112-008',
            'description'=>'Orchidopexy - Unilateral)',
            'parent_id'=>685,
            'amount'=>'25000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:30',
            'updated_at'=>'2019-05-15 05:51:30'
        ] );



        Tariff::create( [
            'id'=>694,
            'identifier'=>'tAriFf-aCt15cdbb6f305b36',
            'tariff_code'=>'NHIS-112-009',
            'description'=>'Abdomino Perioneal (Exomphalos)',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );



        Tariff::create( [
            'id'=>695,
            'identifier'=>'tAriFf-aCt15cdbb6f31b79e',
            'tariff_code'=>'NHIS-112-010',
            'description'=>'Chordee Correction',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );



        Tariff::create( [
            'id'=>696,
            'identifier'=>'tAriFf-aCt15cdbb6f327f5c',
            'tariff_code'=>'NHIS-112-011',
            'description'=>'Closure Colostomy',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );



        Tariff::create( [
            'id'=>697,
            'identifier'=>'tAriFf-aCt15cdbb6f332f95',
            'tariff_code'=>'NHIS-112-012',
            'description'=>'Colectomy',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );



        Tariff::create( [
            'id'=>698,
            'identifier'=>'tAriFf-aCt15cdbb6f3405fd',
            'tariff_code'=>'NHIS-112-013',
            'description'=>'Colon Transplant',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );



        Tariff::create( [
            'id'=>699,
            'identifier'=>'tAriFf-aCt15cdbb6f34b707',
            'tariff_code'=>'NHIS-112-014',
            'description'=>'Cystolithotomy',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );



        Tariff::create( [
            'id'=>700,
            'identifier'=>'tAriFf-aCt15cdbb6f36680e',
            'tariff_code'=>'NHIS-112-015',
            'description'=>'Oesophageal Atresia (Fistula)',
            'parent_id'=>685,
            'amount'=>'50000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:31',
            'updated_at'=>'2019-05-15 05:51:31'
        ] );


        Tariff::create( [
            'id'=>913,
            'identifier'=>'tAriFf-aCt15cdbb709632a5',
            'tariff_code'=>'NHIS-181-012',
            'description'=>'d) Alanine Aminotransferase (SGPT)',
            'parent_id'=>909,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:53',
            'updated_at'=>'2019-05-15 05:51:53'
        ] );



        Tariff::create( [
            'id'=>914,
            'identifier'=>'tAriFf-aCt15cdbb7098e53a',
            'tariff_code'=>'NHIS-181-013',
            'description'=>'e) Aspartate Aminotransferase (SGOT)',
            'parent_id'=>909,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:53',
            'updated_at'=>'2019-05-15 05:51:53'
        ] );



        Tariff::create( [
            'id'=>915,
            'identifier'=>'tAriFf-aCt15cdbb709d7bb9',
            'tariff_code'=>'NHIS-181-014',
            'description'=>'Total Protein',
            'parent_id'=>901,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:53',
            'updated_at'=>'2019-05-15 05:51:53'
        ] );



        Tariff::create( [
            'id'=>916,
            'identifier'=>'tAriFf-aCt15cdbb709eb9cd',
            'tariff_code'=>'NHIS-181-015',
            'description'=>'Albumin',
            'parent_id'=>901,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:53',
            'updated_at'=>'2019-05-15 05:51:53'
        ] );



        Tariff::create( [
            'id'=>917,
            'identifier'=>'tAriFf-aCt15cdbb70a0216a',
            'tariff_code'=>'NHIS-181-016',
            'description'=>'Globulin',
            'parent_id'=>901,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>918,
            'identifier'=>'tAriFf-aCt15cdbb70a22c76',
            'tariff_code'=>'NHIS-181-017',
            'description'=>'Acid Phosphatase (Total & Prostatic)Each',
            'parent_id'=>901,
            'amount'=>'900.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>919,
            'identifier'=>'tAriFf-aCt15cdbb70a32f4c',
            'tariff_code'=>'NHIS-181-018',
            'description'=>'Cholesterol',
            'parent_id'=>901,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>920,
            'identifier'=>'tAriFf-aCt15cdbb70a48c5e',
            'tariff_code'=>'NHIS-181-019',
            'description'=>'Triglyceride',
            'parent_id'=>901,
            'amount'=>'900.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>921,
            'identifier'=>'tAriFf-aCt15cdbb70a6ea87',
            'tariff_code'=>'NHIS-181-020',
            'description'=>'Amylase',
            'parent_id'=>901,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>922,
            'identifier'=>'tAriFf-aCt15cdbb70a7f0cf',
            'tariff_code'=>'NHIS-181-021',
            'description'=>'Fasting Blood Sugar',
            'parent_id'=>901,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>923,
            'identifier'=>'tAriFf-aCt15cdbb70aa9b16',
            'tariff_code'=>'NHIS-181-022',
            'description'=>'Random Blood Sugar',
            'parent_id'=>901,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:54',
            'updated_at'=>'2019-05-15 05:51:54'
        ] );



        Tariff::create( [
            'id'=>924,
            'identifier'=>'tAriFf-aCt15cdbb70b04052',
            'tariff_code'=>'NHIS-181-023',
            'description'=>'2-Hr Post Prandial Blood Sugar',
            'parent_id'=>901,
            'amount'=>'700.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:55',
            'updated_at'=>'2019-05-15 05:51:55'
        ] );



        Tariff::create( [
            'id'=>925,
            'identifier'=>'tAriFf-aCt15cdbb70b409c2',
            'tariff_code'=>'NHIS-181-024',
            'description'=>'Oral Glucose Tolerence Test ( GTT)',
            'parent_id'=>901,
            'amount'=>'1500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:55',
            'updated_at'=>'2019-05-15 05:51:55'
        ] );



        Tariff::create( [
            'id'=>926,
            'identifier'=>'tAriFf-aCt15cdbb70b5916a',
            'tariff_code'=>'NHIS-181-025',
            'description'=>'Uric Acid',
            'parent_id'=>901,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:55',
            'updated_at'=>'2019-05-15 05:51:55'
        ] );



        Tariff::create( [
            'id'=>927,
            'identifier'=>'tAriFf-aCt15cdbb70b7e16c',
            'tariff_code'=>'NHIS-181-026',
            'description'=>'Iron',
            'parent_id'=>901,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:55',
            'updated_at'=>'2019-05-15 05:51:55'
        ] );



        Tariff::create( [
            'id'=>928,
            'identifier'=>'tAriFf-aCt15cdbb70b92114',
            'tariff_code'=>'NHIS-181-027',
            'description'=>'Magnesium',
            'parent_id'=>901,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:55',
            'updated_at'=>'2019-05-15 05:51:55'
        ] );



        Tariff::create( [
            'id'=>929,
            'identifier'=>'tAriFf-aCt15cdbb70c0c1dd',
            'tariff_code'=>'NHIS-181-028',
            'description'=>'Creatine Phosphokinase (CPK)',
            'parent_id'=>901,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>930,
            'identifier'=>'tAriFf-aCt15cdbb70c24ccc',
            'tariff_code'=>'NHIS-181-029',
            'description'=>'Phosphate',
            'parent_id'=>901,
            'amount'=>'450.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>931,
            'identifier'=>'tAriFf-aCt15cdbb70c4518a',
            'tariff_code'=>'NHIS-181-030',
            'description'=>'Lactate Dehydrogenase (LDH)',
            'parent_id'=>901,
            'amount'=>'700.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>932,
            'identifier'=>'tAriFf-aCt15cdbb70c591c3',
            'tariff_code'=>'NHIS-181-031',
            'description'=>'CSF: Chloride',
            'parent_id'=>901,
            'amount'=>'450.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>933,
            'identifier'=>'tAriFf-aCt15cdbb70c81072',
            'tariff_code'=>'NHIS-181-032',
            'description'=>'CSF: Protein ( Total)',
            'parent_id'=>901,
            'amount'=>'450.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>934,
            'identifier'=>'tAriFf-aCt15cdbb70c9153f',
            'tariff_code'=>'NHIS-181-033',
            'description'=>'CSF: Glucose',
            'parent_id'=>901,
            'amount'=>'450.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>935,
            'identifier'=>'tAriFf-aCt15cdbb70cde06c',
            'tariff_code'=>'NHIS-181-034',
            'description'=>'Urinalysis',
            'parent_id'=>901,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>936,
            'identifier'=>'tAriFf-aCt15cdbb70cf0e9c',
            'tariff_code'=>'NHIS-181-035',
            'description'=>'Urea Clearance',
            'parent_id'=>901,
            'amount'=>'700.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:56',
            'updated_at'=>'2019-05-15 05:51:56'
        ] );



        Tariff::create( [
            'id'=>937,
            'identifier'=>'tAriFf-aCt15cdbb70d1d572',
            'tariff_code'=>'NHIS-181-036',
            'description'=>'Inorganic Phosphorus',
            'parent_id'=>901,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>938,
            'identifier'=>'tAriFf-aCt15cdbb70d2dbcf',
            'tariff_code'=>'NHIS-181-037',
            'description'=>'Prostatic Specific Antigen (PSA)',
            'parent_id'=>901,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>939,
            'identifier'=>'tAriFf-aCt15cdbb70d409b8',
            'tariff_code'=>'NHIS-181-038',
            'description'=>'a) Total',
            'parent_id'=>938,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>940,
            'identifier'=>'tAriFf-aCt15cdbb70d50ff3',
            'tariff_code'=>'NHIS-181-039',
            'description'=>'b) Free',
            'parent_id'=>938,
            'amount'=>'1500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>941,
            'identifier'=>'tAriFf-aCt15cdbb70d63dda',
            'tariff_code'=>'NHIS-181-040',
            'description'=>'Creatinine Clearance',
            'parent_id'=>901,
            'amount'=>'700.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>942,
            'identifier'=>'tAriFf-aCt15cdbb70d74486',
            'tariff_code'=>'NHIS-181-041',
            'description'=>'Glycocylated Heamoglobin',
            'parent_id'=>901,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>943,
            'identifier'=>'tAriFf-aCt15cdbb70d7efbe',
            'tariff_code'=>'NHIS-181-042',
            'description'=>'Pregnancy Test (a-b)',
            'parent_id'=>901,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>944,
            'identifier'=>'tAriFf-aCt15cdbb70d8e9bb',
            'tariff_code'=>'NHIS-181-043',
            'description'=>'a) Urine',
            'parent_id'=>943,
            'amount'=>'450.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>945,
            'identifier'=>'tAriFf-aCt15cdbb70dca09d',
            'tariff_code'=>'NHIS-181-044',
            'description'=>'b) Blood',
            'parent_id'=>943,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>946,
            'identifier'=>'tAriFf-aCt15cdbb70de6369',
            'tariff_code'=>'NHIS-181-045',
            'description'=>'calcium',
            'parent_id'=>901,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:57',
            'updated_at'=>'2019-05-15 05:51:57'
        ] );



        Tariff::create( [
            'id'=>947,
            'identifier'=>'tAriFf-aCt15cdbb70e0a855',
            'tariff_code'=>'NHIS-181-046',
            'description'=>'Hormonal Profiles (A –F )',
            'parent_id'=>901,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>948,
            'identifier'=>'tAriFf-aCt15cdbb70e15391',
            'tariff_code'=>'NHIS-181-047',
            'description'=>'a) Follicle Stimulating Hormone ( FSH)',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>949,
            'identifier'=>'tAriFf-aCt15cdbb70e259c3',
            'tariff_code'=>'NHIS-181-048',
            'description'=>'b) Luteinizing Hormone (LH)',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>950,
            'identifier'=>'tAriFf-aCt15cdbb70e3529a',
            'tariff_code'=>'NHIS-181-049',
            'description'=>'c) Prolactin',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>951,
            'identifier'=>'tAriFf-aCt15cdbb70e43867',
            'tariff_code'=>'NHIS-181-050',
            'description'=>'d) Progesterone',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>952,
            'identifier'=>'tAriFf-aCt15cdbb70e53aa3',
            'tariff_code'=>'NHIS-181-051',
            'description'=>'e) Testosterone',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>953,
            'identifier'=>'tAriFf-aCt15cdbb70e66bd2',
            'tariff_code'=>'NHIS-181-052',
            'description'=>'f) Oestradiol (E2)',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>954,
            'identifier'=>'tAriFf-aCt15cdbb70e806c3',
            'tariff_code'=>'NHIS-181-053',
            'description'=>'Molar Pregnancy (HCG-B )',
            'parent_id'=>947,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>955,
            'identifier'=>'tAriFf-aCt15cdbb70e92366',
            'tariff_code'=>'NHIS-181-054',
            'description'=>'Thyroid Screening (a-c)',
            'parent_id'=>901,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>956,
            'identifier'=>'tAriFf-aCt15cdbb70eb6aa3',
            'tariff_code'=>'NHIS-181-055',
            'description'=>'a) Triiodothyronine (T3)',
            'parent_id'=>955,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>957,
            'identifier'=>'tAriFf-aCt15cdbb70edfb16',
            'tariff_code'=>'NHIS-181-056',
            'description'=>'b) Thyroxine (T4)',
            'parent_id'=>955,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>958,
            'identifier'=>'tAriFf-aCt15cdbb70ef0f5c',
            'tariff_code'=>'NHIS-181-057',
            'description'=>'c) Thyroid Stimulating Hormones(TSH)',
            'parent_id'=>955,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:58',
            'updated_at'=>'2019-05-15 05:51:58'
        ] );



        Tariff::create( [
            'id'=>959,
            'identifier'=>'tAriFf-aCt15cdbb70f0a7bc',
            'tariff_code'=>'NHIS-181-058',
            'description'=>'Cardiac/Hypertensive Profile',
            'parent_id'=>901,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>960,
            'identifier'=>'tAriFf-aCt15cdbb70f1aad9',
            'tariff_code'=>'NHIS-181-059',
            'description'=>'Kidney Profile',
            'parent_id'=>901,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>961,
            'identifier'=>'tAriFf-aCt15cdbb70f2dc28',
            'tariff_code'=>'NHIS-181-060',
            'description'=>'Hepatic Profile',
            'parent_id'=>901,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>962,
            'identifier'=>'tAriFf-aCt15cdbb70f409fb',
            'tariff_code'=>'NHIS-181-061',
            'description'=>'Gamma-GT',
            'parent_id'=>901,
            'amount'=>'900.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>963,
            'identifier'=>'tAriFf-aCt15cdbb70f53c15',
            'tariff_code'=>'NHIS-181-100',
            'description'=>'HAEMATOLOGY & BLOOD GROUP SEROLOGY',
            'parent_id'=>901,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>964,
            'identifier'=>'tAriFf-aCt15cdbb70f63e1c',
            'tariff_code'=>'NHIS-181-101',
            'description'=>'Full Blood Count',
            'parent_id'=>963,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>965,
            'identifier'=>'tAriFf-aCt15cdbb70f79bdc',
            'tariff_code'=>'NHIS-181-102',
            'description'=>'Haemoglobin (HB)',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>966,
            'identifier'=>'tAriFf-aCt15cdbb70f89da5',
            'tariff_code'=>'NHIS-181-103',
            'description'=>'Packed Cell Volume (PCV)',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>967,
            'identifier'=>'tAriFf-aCt15cdbb70f9f400',
            'tariff_code'=>'NHIS-181-104',
            'description'=>'White Cell Count (WBC)',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:51:59',
            'updated_at'=>'2019-05-15 05:51:59'
        ] );



        Tariff::create( [
            'id'=>968,
            'identifier'=>'tAriFf-aCt15cdbb7100400c',
            'tariff_code'=>'NHIS-181-105',
            'description'=>'Differential White Cell Count (WBC-DIFF)',
            'parent_id'=>963,
            'amount'=>'450.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:00',
            'updated_at'=>'2019-05-15 05:52:00'
        ] );



        Tariff::create( [
            'id'=>969,
            'identifier'=>'tAriFf-aCt15cdbb7104355b',
            'tariff_code'=>'NHIS-181-106',
            'description'=>'Mean Corp. Hb Conc. (MCHC)',
            'parent_id'=>963,
            'amount'=>'250.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:00',
            'updated_at'=>'2019-05-15 05:52:00'
        ] );



        Tariff::create( [
            'id'=>970,
            'identifier'=>'tAriFf-aCt15cdbb7105f385',
            'tariff_code'=>'NHIS-181-107',
            'description'=>'Mean Cell Volume (MCV)',
            'parent_id'=>963,
            'amount'=>'250.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:00',
            'updated_at'=>'2019-05-15 05:52:00'
        ] );



        Tariff::create( [
            'id'=>971,
            'identifier'=>'tAriFf-aCt15cdbb71081c28',
            'tariff_code'=>'NHIS-181-108',
            'description'=>'Mean Cell Haemoglobin (MCH)',
            'parent_id'=>963,
            'amount'=>'250.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:00',
            'updated_at'=>'2019-05-15 05:52:00'
        ] );



        Tariff::create( [
            'id'=>972,
            'identifier'=>'tAriFf-aCt15cdbb71091f67',
            'tariff_code'=>'NHIS-181-109',
            'description'=>'Red Cell Count (RBC)',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:00',
            'updated_at'=>'2019-05-15 05:52:00'
        ] );



        Tariff::create( [
            'id'=>973,
            'identifier'=>'tAriFf-aCt15cdbb710ec038',
            'tariff_code'=>'NHIS-181-110',
            'description'=>'Reticulocyte Count',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:00',
            'updated_at'=>'2019-05-15 05:52:00'
        ] );



        Tariff::create( [
            'id'=>974,
            'identifier'=>'tAriFf-aCt15cdbb7112cbb4',
            'tariff_code'=>'NHIS-181-111',
            'description'=>'Platelets Count',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:01',
            'updated_at'=>'2019-05-15 05:52:01'
        ] );



        Tariff::create( [
            'id'=>975,
            'identifier'=>'tAriFf-aCt15cdbb71154e46',
            'tariff_code'=>'NHIS-181-112',
            'description'=>'Erythrocyte Sedimentation Rate (ESR)',
            'parent_id'=>963,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:01',
            'updated_at'=>'2019-05-15 05:52:01'
        ] );



        Tariff::create( [
            'id'=>976,
            'identifier'=>'tAriFf-aCt15cdbb71188b89',
            'tariff_code'=>'NHIS-181-113',
            'description'=>'Bleeding Time',
            'parent_id'=>963,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:01',
            'updated_at'=>'2019-05-15 05:52:01'
        ] );



        Tariff::create( [
            'id'=>977,
            'identifier'=>'tAriFf-aCt15cdbb711d90d1',
            'tariff_code'=>'NHIS-181-114',
            'description'=>'Clotting Time',
            'parent_id'=>963,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:01',
            'updated_at'=>'2019-05-15 05:52:01'
        ] );



        Tariff::create( [
            'id'=>978,
            'identifier'=>'tAriFf-aCt15cdbb7124fcfd',
            'tariff_code'=>'NHIS-181-115',
            'description'=>'Prothrombin Time (PT)',
            'parent_id'=>963,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:02',
            'updated_at'=>'2019-05-15 05:52:02'
        ] );



        Tariff::create( [
            'id'=>979,
            'identifier'=>'tAriFf-aCt15cdbb7128f56c',
            'tariff_code'=>'NHIS-181-116',
            'description'=>'Kaolin-Cephalin Clotting Time',
            'parent_id'=>963,
            'amount'=>'1200.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:02',
            'updated_at'=>'2019-05-15 05:52:02'
        ] );



        Tariff::create( [
            'id'=>980,
            'identifier'=>'tAriFf-aCt15cdbb712cf862',
            'tariff_code'=>'NHIS-181-117',
            'description'=>'Partial Prothrombin Time (PTT)',
            'parent_id'=>963,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:02',
            'updated_at'=>'2019-05-15 05:52:02'
        ] );



        Tariff::create( [
            'id'=>981,
            'identifier'=>'tAriFf-aCt15cdbb71321c75',
            'tariff_code'=>'NHIS-181-118',
            'description'=>'HB Genotype',
            'parent_id'=>963,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:03',
            'updated_at'=>'2019-05-15 05:52:03'
        ] );



        Tariff::create( [
            'id'=>982,
            'identifier'=>'tAriFf-aCt15cdbb71394bd9',
            'tariff_code'=>'NHIS-181-119',
            'description'=>'Blood Grouping (ABO & RH)',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:03',
            'updated_at'=>'2019-05-15 05:52:03'
        ] );



        Tariff::create( [
            'id'=>983,
            'identifier'=>'tAriFf-aCt15cdbb713e68b4',
            'tariff_code'=>'NHIS-181-120',
            'description'=>'Sickling Test',
            'parent_id'=>963,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:03',
            'updated_at'=>'2019-05-15 05:52:03'
        ] );



        Tariff::create( [
            'id'=>984,
            'identifier'=>'tAriFf-aCt15cdbb7143510b',
            'tariff_code'=>'NHIS-181-121',
            'description'=>'Direct Coomb\'s Test',
            'parent_id'=>963,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:04',
            'updated_at'=>'2019-05-15 05:52:04'
        ] );



        Tariff::create( [
            'id'=>985,
            'identifier'=>'tAriFf-aCt15cdbb714967da',
            'tariff_code'=>'NHIS-181-122',
            'description'=>'Indirect Coomb\'s Test',
            'parent_id'=>963,
            'amount'=>'800.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:04',
            'updated_at'=>'2019-05-15 05:52:04'
        ] );



        Tariff::create( [
            'id'=>986,
            'identifier'=>'tAriFf-aCt15cdbb714d9fdf',
            'tariff_code'=>'NHIS-181-123',
            'description'=>'Screening Of Donor Blood',
            'parent_id'=>963,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:04',
            'updated_at'=>'2019-05-15 05:52:04'
        ] );



        Tariff::create( [
            'id'=>987,
            'identifier'=>'tAriFf-aCt15cdbb7154144b',
            'tariff_code'=>'NHIS-181-124',
            'description'=>'Unit Of Screened   Rh-Positive Blood',
            'parent_id'=>963,
            'amount'=>'7000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:05',
            'updated_at'=>'2019-05-15 05:52:05'
        ] );



        Tariff::create( [
            'id'=>988,
            'identifier'=>'tAriFf-aCt15cdbb71591119',
            'tariff_code'=>'NHIS-181-125',
            'description'=>'Unit Of Screened Rh- Negative Blood',
            'parent_id'=>963,
            'amount'=>'10000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:05',
            'updated_at'=>'2019-05-15 05:52:05'
        ] );



        Tariff::create( [
            'id'=>989,
            'identifier'=>'tAriFf-aCt15cdbb715e0fcf',
            'tariff_code'=>'NHIS-181-126',
            'description'=>'Cross Match',
            'parent_id'=>963,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:05',
            'updated_at'=>'2019-05-15 05:52:05'
        ] );



        Tariff::create( [
            'id'=>990,
            'identifier'=>'tAriFf-aCt15cdbb716a4193',
            'tariff_code'=>'NHIS-181-127',
            'description'=>'Le Cells',
            'parent_id'=>963,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:06',
            'updated_at'=>'2019-05-15 05:52:06'
        ] );



        Tariff::create( [
            'id'=>991,
            'identifier'=>'tAriFf-aCt15cdbb716cb27c',
            'tariff_code'=>'NHIS-181-128',
            'description'=>'G-6-PD Screening',
            'parent_id'=>963,
            'amount'=>'2000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:06',
            'updated_at'=>'2019-05-15 05:52:06'
        ] );



        Tariff::create( [
            'id'=>992,
            'identifier'=>'tAriFf-aCt15cdbb71748f7f',
            'tariff_code'=>'NHIS-181-129',
            'description'=>'Osmotic Fragility',
            'parent_id'=>963,
            'amount'=>'800.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:07',
            'updated_at'=>'2019-05-15 05:52:07'
        ] );



        Tariff::create( [
            'id'=>993,
            'identifier'=>'tAriFf-aCt15cdbb7176cdcb',
            'tariff_code'=>'NHIS-181-130',
            'description'=>'Coagulation Profile',
            'parent_id'=>963,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:07',
            'updated_at'=>'2019-05-15 05:52:07'
        ] );



        Tariff::create( [
            'id'=>994,
            'identifier'=>'tAriFf-aCt15cdbb7178cd2e',
            'tariff_code'=>'NHIS-181-131',
            'description'=>'Bone Marrow Examination',
            'parent_id'=>963,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:07',
            'updated_at'=>'2019-05-15 05:52:07'
        ] );



        Tariff::create( [
            'id'=>995,
            'identifier'=>'tAriFf-aCt15cdbb717d24d3',
            'tariff_code'=>'NHIS-181-200',
            'description'=>'MICROBIOLOGY/PARASITOLOGY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:07',
            'updated_at'=>'2019-05-15 05:52:07'
        ] );



        Tariff::create( [
            'id'=>996,
            'identifier'=>'tAriFf-aCt15cdbb7181862f',
            'tariff_code'=>'NHIS-181-201',
            'description'=>'URINE:',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:08',
            'updated_at'=>'2019-05-15 05:52:08'
        ] );



        Tariff::create( [
            'id'=>997,
            'identifier'=>'tAriFf-aCt15cdbb7184518e',
            'tariff_code'=>'NHIS-181-202',
            'description'=>'a) Microscopy',
            'parent_id'=>996,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:08',
            'updated_at'=>'2019-05-15 05:52:08'
        ] );



        Tariff::create( [
            'id'=>998,
            'identifier'=>'tAriFf-aCt15cdbb7186e325',
            'tariff_code'=>'NHIS-181-203',
            'description'=>'b) Urinalysis',
            'parent_id'=>996,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:08',
            'updated_at'=>'2019-05-15 05:52:08'
        ] );



        Tariff::create( [
            'id'=>999,
            'identifier'=>'tAriFf-aCt15cdbb718e0219',
            'tariff_code'=>'NHIS-181-204',
            'description'=>'c) Culture & Sensitivity',
            'parent_id'=>996,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:08',
            'updated_at'=>'2019-05-15 05:52:08'
        ] );



        Tariff::create( [
            'id'=>1000,
            'identifier'=>'tAriFf-aCt15cdbb7193f5e5',
            'tariff_code'=>'NHIS-181-205',
            'description'=>'STOOL:',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:09',
            'updated_at'=>'2019-05-15 05:52:09'
        ] );



        Tariff::create( [
            'id'=>1001,
            'identifier'=>'tAriFf-aCt15cdbb719b4a03',
            'tariff_code'=>'NHIS-181-206',
            'description'=>'a) Microscopy R/E only',
            'parent_id'=>1000,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:09',
            'updated_at'=>'2019-05-15 05:52:09'
        ] );



        Tariff::create( [
            'id'=>1002,
            'identifier'=>'tAriFf-aCt15cdbb71a1a5f9',
            'tariff_code'=>'NHIS-181-207',
            'description'=>'b) Culture & Sensitivity',
            'parent_id'=>1000,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:10',
            'updated_at'=>'2019-05-15 05:52:10'
        ] );



        Tariff::create( [
            'id'=>1003,
            'identifier'=>'tAriFf-aCt15cdbb71b2777b',
            'tariff_code'=>'NHIS-181-208',
            'description'=>'c) Occult Blood-Fecal',
            'parent_id'=>1000,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:11',
            'updated_at'=>'2019-05-15 05:52:11'
        ] );



        Tariff::create( [
            'id'=>1004,
            'identifier'=>'tAriFf-aCt15cdbb71bab4f1',
            'tariff_code'=>'NHIS-181-209',
            'description'=>'BLOOD:',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:11',
            'updated_at'=>'2019-05-15 05:52:11'
        ] );



        Tariff::create( [
            'id'=>1005,
            'identifier'=>'tAriFf-aCt15cdbb71c8f55c',
            'tariff_code'=>'NHIS-181-210',
            'description'=>'a) Culture & Sensitivity',
            'parent_id'=>1004,
            'amount'=>'1500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:12',
            'updated_at'=>'2019-05-15 05:52:12'
        ] );



        Tariff::create( [
            'id'=>1006,
            'identifier'=>'tAriFf-aCt15cdbb71caa9d8',
            'tariff_code'=>'NHIS-181-211',
            'description'=>'b) Malaria Parasites',
            'parent_id'=>1004,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:12',
            'updated_at'=>'2019-05-15 05:52:12'
        ] );



        Tariff::create( [
            'id'=>1007,
            'identifier'=>'tAriFf-aCt15cdbb71cd3f93',
            'tariff_code'=>'NHIS-181-212',
            'description'=>'c) Microfilaria',
            'parent_id'=>1004,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:12',
            'updated_at'=>'2019-05-15 05:52:12'
        ] );



        Tariff::create( [
            'id'=>1008,
            'identifier'=>'tAriFf-aCt15cdbb71ce647a',
            'tariff_code'=>'NHIS-181-213',
            'description'=>'d) Trypanosomes',
            'parent_id'=>1004,
            'amount'=>'400.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:12',
            'updated_at'=>'2019-05-15 05:52:12'
        ] );



        Tariff::create( [
            'id'=>1009,
            'identifier'=>'tAriFf-aCt15cdbb71d05065',
            'tariff_code'=>'NHIS-181-214',
            'description'=>'SEMINAL FLUID:',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1010,
            'identifier'=>'tAriFf-aCt15cdbb71d1da7e',
            'tariff_code'=>'NHIS-181-215',
            'description'=>'a) Analysis',
            'parent_id'=>1009,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1011,
            'identifier'=>'tAriFf-aCt15cdbb71d40ff6',
            'tariff_code'=>'NHIS-181-216',
            'description'=>'b) Culture & Sensitivity',
            'parent_id'=>1009,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1012,
            'identifier'=>'tAriFf-aCt15cdbb71d734cd',
            'tariff_code'=>'NHIS-181-217',
            'description'=>'SPUTUM:',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1013,
            'identifier'=>'tAriFf-aCt15cdbb71d8f663',
            'tariff_code'=>'NHIS-181-218',
            'description'=>'a) Gram Stain',
            'parent_id'=>1012,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1014,
            'identifier'=>'tAriFf-aCt15cdbb71da5303',
            'tariff_code'=>'NHIS-181-219',
            'description'=>'b) Z.N stain for AFB',
            'parent_id'=>1012,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1015,
            'identifier'=>'tAriFf-aCt15cdbb71dc026f',
            'tariff_code'=>'NHIS-181-220',
            'description'=>'c) Culture & Sensitivity',
            'parent_id'=>1012,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1016,
            'identifier'=>'tAriFf-aCt15cdbb71dd601d',
            'tariff_code'=>'NHIS-181-221',
            'description'=>'C.S.F',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1017,
            'identifier'=>'tAriFf-aCt15cdbb71deb9c7',
            'tariff_code'=>'NHIS-181-222',
            'description'=>'a) Microscopy & Count',
            'parent_id'=>1016,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:13',
            'updated_at'=>'2019-05-15 05:52:13'
        ] );



        Tariff::create( [
            'id'=>1018,
            'identifier'=>'tAriFf-aCt15cdbb71e0a96a',
            'tariff_code'=>'NHIS-181-223',
            'description'=>'b) Gram Stain',
            'parent_id'=>1016,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1019,
            'identifier'=>'tAriFf-aCt15cdbb71e17700',
            'tariff_code'=>'NHIS-181-224',
            'description'=>'c) Culture & Sensitivity',
            'parent_id'=>1016,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1020,
            'identifier'=>'tAriFf-aCt15cdbb71e2a6a4',
            'tariff_code'=>'NHIS-181-225',
            'description'=>'SWABS- Pus, Wound, Throat, Eye, Ear, Urethral, Aspirates, HVS,\n        Endo-cervical e.t.c.',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1021,
            'identifier'=>'tAriFf-aCt15cdbb71e40243',
            'tariff_code'=>'NHIS-181-226',
            'description'=>'a) Microscopy',
            'parent_id'=>1020,
            'amount'=>'350.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1022,
            'identifier'=>'tAriFf-aCt15cdbb71e4dbb2',
            'tariff_code'=>'NHIS-181-227',
            'description'=>'b) Gram stain (where applicable)',
            'parent_id'=>1020,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1023,
            'identifier'=>'tAriFf-aCt15cdbb71e6618d',
            'tariff_code'=>'NHIS-181-228',
            'description'=>'c) Culture & Sensitivity',
            'parent_id'=>1020,
            'amount'=>'650.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1024,
            'identifier'=>'tAriFf-aCt15cdbb71e8e7a4',
            'tariff_code'=>'NHIS-181-229',
            'description'=>'SKIN:',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1025,
            'identifier'=>'tAriFf-aCt15cdbb71ec5c83',
            'tariff_code'=>'NHIS-181-230',
            'description'=>'a) Snip (microfilaria)',
            'parent_id'=>1024,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1026,
            'identifier'=>'tAriFf-aCt15cdbb71ee352e',
            'tariff_code'=>'NHIS-181-231',
            'description'=>'b) Microscopy (KOH mount)',
            'parent_id'=>1024,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:14',
            'updated_at'=>'2019-05-15 05:52:14'
        ] );



        Tariff::create( [
            'id'=>1027,
            'identifier'=>'tAriFf-aCt15cdbb71f0271b',
            'tariff_code'=>'NHIS-181-232',
            'description'=>'c) Scraping For Fungal Element (culture)',
            'parent_id'=>1024,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1028,
            'identifier'=>'tAriFf-aCt15cdbb71f1cdd7',
            'tariff_code'=>'NHIS-181-233',
            'description'=>'c) Heaf\'s Mantoux test',
            'parent_id'=>1024,
            'amount'=>'800.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1029,
            'identifier'=>'tAriFf-aCt15cdbb71f2dda8',
            'tariff_code'=>'NHIS-181-300',
            'description'=>'OTHER SEROLOGICAL TESTS',
            'parent_id'=>995,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1030,
            'identifier'=>'tAriFf-aCt15cdbb71f461bc',
            'tariff_code'=>'1029',
            'description'=>'Widal Test',
            'parent_id'=>1029,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1031,
            'identifier'=>'tAriFf-aCt15cdbb71f5bf55',
            'tariff_code'=>'NHIS-181-301',
            'description'=>'VDRL',
            'parent_id'=>1029,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1032,
            'identifier'=>'tAriFf-aCt15cdbb71f76f7a',
            'tariff_code'=>'NHIS-181-302',
            'description'=>'Rheumatiod Factor',
            'parent_id'=>1029,
            'amount'=>'500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1033,
            'identifier'=>'tAriFf-aCt15cdbb71f8961e',
            'tariff_code'=>'NHIS-181-303',
            'description'=>'Anti-Streptolysin O Titre (ASO Titre)',
            'parent_id'=>1029,
            'amount'=>'600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1034,
            'identifier'=>'tAriFf-aCt15cdbb71fc2ed4',
            'tariff_code'=>'NHIS-181-304',
            'description'=>'Hepatitis B Surface Antigen (HbsAg)',
            'parent_id'=>1029,
            'amount'=>'800.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1035,
            'identifier'=>'tAriFf-aCt15cdbb71fd07d1',
            'tariff_code'=>'NHIS-181-305',
            'description'=>'Hepatitis Confirmatory Test (Core Antigen)',
            'parent_id'=>1029,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1036,
            'identifier'=>'tAriFf-aCt15cdbb71fe39a0',
            'tariff_code'=>'NHIS-181-306',
            'description'=>'HIV Screening',
            'parent_id'=>1029,
            'amount'=>'1600.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1037,
            'identifier'=>'tAriFf-aCt15cdbb71ff3c1b',
            'tariff_code'=>'NHIS-181-307',
            'description'=>'HIV Confirmatory Test',
            'parent_id'=>1029,
            'amount'=>'4800.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:15',
            'updated_at'=>'2019-05-15 05:52:15'
        ] );



        Tariff::create( [
            'id'=>1038,
            'identifier'=>'tAriFf-aCt15cdbb72015829',
            'tariff_code'=>'NHIS-181-308',
            'description'=>'AIDS Screening:',
            'parent_id'=>1029,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1039,
            'identifier'=>'tAriFf-aCt15cdbb7202fe48',
            'tariff_code'=>'NHIS-181-309',
            'description'=>'a) CD4 Count',
            'parent_id'=>1038,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1040,
            'identifier'=>'tAriFf-aCt15cdbb72045960',
            'tariff_code'=>'NHIS-181-310',
            'description'=>'b) Viral load',
            'parent_id'=>1038,
            'amount'=>'5000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1041,
            'identifier'=>'tAriFf-aCt15cdbb72060a20',
            'tariff_code'=>'NHIS-181-311',
            'description'=>'Hepatitis C Antigen (HbcAg)',
            'parent_id'=>1029,
            'amount'=>'800.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1042,
            'identifier'=>'tAriFf-aCt15cdbb72073b77',
            'tariff_code'=>'NHIS-181-312',
            'description'=>'Serum Tuberculosis Antigen',
            'parent_id'=>1029,
            'amount'=>'2500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1043,
            'identifier'=>'tAriFf-aCt15cdbb7207c63d',
            'tariff_code'=>'NHIS-181-313',
            'description'=>'Chlamydia Antigen',
            'parent_id'=>1029,
            'amount'=>'2000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1044,
            'identifier'=>'tAriFf-aCt15cdbb7208cd31',
            'tariff_code'=>'NHIS-181-314',
            'description'=>'Herpes Simplex 1 & 11 Antigen',
            'parent_id'=>1029,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1045,
            'identifier'=>'tAriFf-aCt15cdbb720bc91d',
            'tariff_code'=>'NHIS-181-315',
            'description'=>'Toxoplasma Gondii',
            'parent_id'=>1029,
            'amount'=>'2750.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1046,
            'identifier'=>'tAriFf-aCt15cdbb720cb3b3',
            'tariff_code'=>'NHIS-181-316',
            'description'=>'Rubella',
            'parent_id'=>1029,
            'amount'=>'2000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1047,
            'identifier'=>'tAriFf-aCt15cdbb720dacb5',
            'tariff_code'=>'NHIS-181-317',
            'description'=>'Helicobacter Pylori',
            'parent_id'=>1029,
            'amount'=>'2750.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1048,
            'identifier'=>'tAriFf-aCt15cdbb720eb0a1',
            'tariff_code'=>'NHIS-181-318',
            'description'=>'Infectious Mononucleosis',
            'parent_id'=>1029,
            'amount'=>'2750.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:16',
            'updated_at'=>'2019-05-15 05:52:16'
        ] );



        Tariff::create( [
            'id'=>1049,
            'identifier'=>'tAriFf-aCt15cdbb7210513f',
            'tariff_code'=>'NHIS-181-319',
            'description'=>'C-Reactive Protein',
            'parent_id'=>1029,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1050,
            'identifier'=>'tAriFf-aCt15cdbb7211576d',
            'tariff_code'=>'NHIS-181-320',
            'description'=>'Alpha-Feto Protein (AFP)',
            'parent_id'=>1029,
            'amount'=>'3000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1051,
            'identifier'=>'tAriFf-aCt15cdbb72125a82',
            'tariff_code'=>'NHIS-181-321',
            'description'=>'Rhesus Factor Determination',
            'parent_id'=>1029,
            'amount'=>'1000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1052,
            'identifier'=>'tAriFf-aCt15cdbb721354c4',
            'tariff_code'=>'NHIS-181-322',
            'description'=>'Vanilyl Mandellic Acid (VMA)',
            'parent_id'=>1029,
            'amount'=>'2750.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1053,
            'identifier'=>'tAriFf-aCt15cdbb72143828',
            'tariff_code'=>'NHIS-181-400',
            'description'=>'HISTOLOGY/CYTOLOGY',
            'parent_id'=>NULL,
            'amount'=>'0.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1054,
            'identifier'=>'tAriFf-aCt15cdbb72153df6',
            'tariff_code'=>'NHIS-181-401',
            'description'=>'Tissue Biopsy',
            'parent_id'=>1053,
            'amount'=>'4500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1055,
            'identifier'=>'tAriFf-aCt15cdbb721614ef',
            'tariff_code'=>'NHIS-181-402',
            'description'=>'Lymph Nodes Biopsy',
            'parent_id'=>1053,
            'amount'=>'4500.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1056,
            'identifier'=>'tAriFf-aCt15cdbb72170fb6',
            'tariff_code'=>'NHIS-181-403',
            'description'=>'Pap Smear',
            'parent_id'=>1053,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1057,
            'identifier'=>'tAriFf-aCt15cdbb7217f232',
            'tariff_code'=>'NHIS-181-404',
            'description'=>'Fine Needle Aspiration',
            'parent_id'=>1053,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1058,
            'identifier'=>'tAriFf-aCt15cdbb7218f8f2',
            'tariff_code'=>'NHIS-181-403',
            'description'=>'Pap Smear',
            'parent_id'=>1053,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );



        Tariff::create( [
            'id'=>1059,
            'identifier'=>'tAriFf-aCt15cdbb721db9f3',
            'tariff_code'=>'NHIS-181-404',
            'description'=>'Fine Needle Aspiration',
            'parent_id'=>1053,
            'amount'=>'4000.00',
            'operator_user_id'=>NULL,
            'verify_id'=>NULL,
            'action'=>'pending',
            'created_at'=>'2019-05-15 05:52:17',
            'updated_at'=>'2019-05-15 05:52:17'
        ] );
    }
}
