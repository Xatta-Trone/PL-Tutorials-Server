<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'course_name' => 'Surveying',
                'slug' => 'ce103',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '4 Credit',
                'description' => 'Surveying ce103 4 Credit',
                'created_at' => '2018-06-21 16:49:55',
                'updated_at' => '2018-06-21 16:49:55',
            ),
            1 => 
            array (
                'id' => 2,
                'course_name' => 'Basic Electrical Technology',
                'slug' => 'eee165',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '3 credit',
                'description' => 'Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-21 16:51:01',
                'updated_at' => '2018-06-21 16:51:01',
            ),
            2 => 
            array (
                'id' => 3,
                'course_name' => 'English',
                'slug' => 'hum185',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '2 credit',
                'description' => 'English hum185 2 credit',
                'created_at' => '2018-06-21 16:51:30',
                'updated_at' => '2018-06-21 16:51:30',
            ),
            3 => 
            array (
                'id' => 4,
                'course_name' => 'Defferential Equations and Statistics',
                'slug' => 'math139',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '3 credit',
                'description' => 'Defferential Equations and Statistics math139 3 credit',
                'created_at' => '2018-06-21 16:52:43',
                'updated_at' => '2018-06-21 16:52:43',
            ),
            4 => 
            array (
                'id' => 5,
                'course_name' => 'Structure of Matter, Electricity and Magnetism and Modern Physics',
                'slug' => 'phy151',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '3 credit',
                'description' => 'Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit',
                'created_at' => '2018-06-21 16:53:14',
                'updated_at' => '2018-06-21 16:53:14',
            ),
            5 => 
            array (
                'id' => 6,
                'course_name' => 'Computer Aided Drafting',
                'slug' => 'ce102',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '1.5 credit',
                'description' => 'Computer Aided Drafting ce102 1.5 credit',
                'created_at' => '2018-06-21 16:53:44',
                'updated_at' => '2018-06-21 16:53:44',
            ),
            6 => 
            array (
                'id' => 7,
                'course_name' => 'Developing English Language Skills',
                'slug' => 'hum274',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '1.5 credit',
                'description' => 'Developing English Language Skills hum274 1.5 credit',
                'created_at' => '2018-06-21 16:54:12',
                'updated_at' => '2018-06-21 16:54:12',
            ),
            7 => 
            array (
                'id' => 8,
                'course_name' => 'Workshop Sessional',
                'slug' => 'shop132',
                'department_id' => 1,
                'level_term_id' => 2,
                'custom_message' => '1.5 credit',
                'description' => 'Workshop Sessional shop132 1.5 credit',
                'created_at' => '2018-06-21 16:54:52',
                'updated_at' => '2018-06-21 16:54:52',
            ),
            8 => 
            array (
                'id' => 9,
                'course_name' => 'Design of Concrete Structures II',
                'slug' => 'ce317',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '3 credit',
                'description' => 'Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-21 16:57:54',
                'updated_at' => '2018-06-21 16:57:54',
            ),
            9 => 
            array (
                'id' => 10,
                'course_name' => 'Design of Steel Structures',
                'slug' => 'ce319',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '3 credit',
                'description' => 'Design of Steel Structures ce319 3 credit',
                'created_at' => '2018-06-21 16:58:35',
                'updated_at' => '2018-06-21 16:58:35',
            ),
            10 => 
            array (
                'id' => 11,
                'course_name' => 'Environmental Engineering II',
                'slug' => 'ce333',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '4 credit',
                'description' => 'Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-21 16:59:14',
                'updated_at' => '2018-06-21 16:59:14',
            ),
            11 => 
            array (
                'id' => 12,
                'course_name' => 'Transportation Engineering I: Transportation Planning & Traffic Engineering',
                'slug' => 'ce351',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '3 credit',
                'description' => 'Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit',
                'created_at' => '2018-06-21 16:59:41',
                'updated_at' => '2018-06-21 16:59:41',
            ),
            12 => 
            array (
                'id' => 13,
                'course_name' => 'Open Channel Flow',
                'slug' => 'wre311',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '4 credit',
                'description' => 'Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-21 17:00:08',
                'updated_at' => '2018-06-21 17:00:08',
            ),
            13 => 
            array (
                'id' => 14,
                'course_name' => 'Concrete Structures Design Sessional I',
                'slug' => 'ce316',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '1.5 credit',
                'description' => 'Concrete Structures Design Sessional I ce316 1.5 credit',
                'created_at' => '2018-06-21 17:00:38',
                'updated_at' => '2018-06-21 17:00:38',
            ),
            14 => 
            array (
                'id' => 15,
                'course_name' => 'Steel Structures Design Sessional',
                'slug' => 'ce320',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '1.5 credit',
                'description' => 'Steel Structures Design Sessional ce320 1.5 credit',
                'created_at' => '2018-06-21 17:01:05',
                'updated_at' => '2018-06-21 17:01:05',
            ),
            15 => 
            array (
                'id' => 16,
                'course_name' => 'Open Channel Flow Sessional',
                'slug' => 'wre312',
                'department_id' => 1,
                'level_term_id' => 6,
                'custom_message' => '1.5 credit',
                'description' => 'Open Channel Flow Sessional wre312 1.5 credit',
                'created_at' => '2018-06-21 17:01:31',
                'updated_at' => '2018-06-21 17:01:31',
            ),
            16 => 
            array (
                'id' => 17,
                'course_name' => 'Numerical Methods',
                'slug' => 'ce205',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '2 credit',
                'description' => 'Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-21 17:10:37',
                'updated_at' => '2018-06-21 17:10:37',
            ),
            17 => 
            array (
                'id' => 18,
                'course_name' => 'Mechanics of Solids II',
                'slug' => 'ce213',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '3 credit',
                'description' => 'Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-21 17:11:01',
                'updated_at' => '2018-06-21 17:11:01',
            ),
            18 => 
            array (
                'id' => 19,
                'course_name' => 'Engineering Economics',
                'slug' => 'hum217',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '2 credit',
                'description' => 'Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-21 17:11:24',
                'updated_at' => '2018-06-21 17:11:24',
            ),
            19 => 
            array (
                'id' => 20,
                'course_name' => 'Applied Mathematics for Engineers',
                'slug' => 'ce207',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '3 credit',
                'description' => 'Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-21 17:11:48',
                'updated_at' => '2018-06-21 17:11:48',
            ),
            20 => 
            array (
                'id' => 21,
                'course_name' => 'Fluid Mechanics',
                'slug' => 'wre211',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '3 credit',
                'description' => 'Fluid Mechanics wre211 3 credit',
                'created_at' => '2018-06-21 17:12:15',
                'updated_at' => '2018-06-21 17:12:15',
            ),
            21 => 
            array (
                'id' => 22,
                'course_name' => 'Engineering Computation Sessional',
                'slug' => 'ce206',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '1.5 credit',
                'description' => 'Engineering Computation Sessional ce206 1.5 credit',
                'created_at' => '2018-06-21 17:12:52',
                'updated_at' => '2018-06-21 17:12:52',
            ),
            22 => 
            array (
                'id' => 23,
                'course_name' => 'Quantity Surveying',
                'slug' => 'ce208',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '1.5 credit',
                'description' => 'Quantity Surveying ce208 1.5 credit',
                'created_at' => '2018-06-21 17:13:13',
                'updated_at' => '2018-06-21 17:13:13',
            ),
            23 => 
            array (
                'id' => 24,
                'course_name' => 'Structural Mechanics and Materials Sessional',
                'slug' => 'ce212',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '1.5 credit',
                'description' => 'Structural Mechanics and Materials Sessional ce212 1.5 credit',
                'created_at' => '2018-06-21 17:13:40',
                'updated_at' => '2018-06-21 17:13:40',
            ),
            24 => 
            array (
                'id' => 25,
                'course_name' => 'Fluid Mechanics Sessional',
                'slug' => 'wre212',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => '1.5 credit',
                'description' => 'Fluid Mechanics Sessional wre212 1.5 credit',
                'created_at' => '2018-06-21 17:14:06',
                'updated_at' => '2018-06-21 17:14:06',
            ),
            25 => 
            array (
                'id' => 26,
                'course_name' => 'Analytic Mechanics',
                'slug' => 'ce101',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Analytic Mechanics ce101 ',
                'created_at' => '2018-06-22 00:27:32',
                'updated_at' => '2018-10-22 17:10:05',
            ),
            26 => 
            array (
                'id' => 27,
                'course_name' => 'Chemistry I',
                'slug' => 'chem103',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Chemistry I chem103 ',
                'created_at' => '2018-06-22 00:27:49',
                'updated_at' => '2018-07-10 01:50:34',
            ),
            27 => 
            array (
                'id' => 28,
                'course_name' => 'Differential and Integral Calculus, Matrices',
                'slug' => 'math137',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => '3 credit',
                'description' => 'Differential and Integral Calculus, Matrices math137 3 credit',
                'created_at' => '2018-06-22 00:28:46',
                'updated_at' => '2018-06-22 00:28:46',
            ),
            28 => 
            array (
                'id' => 29,
                'course_name' => 'Physical Optics, Waves and Oscillation, Heat and Thermodynamics',
                'slug' => 'phy101',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Physical Optics, Waves and Oscillation, Heat and Thermodynamics phy101 ',
                'created_at' => '2018-06-22 00:29:32',
                'updated_at' => '2018-06-22 00:29:32',
            ),
            29 => 
            array (
                'id' => 30,
                'course_name' => 'Sociology',
                'slug' => 'hum355',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Sociology hum355 ',
                'created_at' => '2018-06-22 00:29:56',
                'updated_at' => '2018-06-22 00:29:56',
            ),
            30 => 
            array (
                'id' => 31,
                'course_name' => 'Government',
                'slug' => 'hum375',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Government hum375 ',
                'created_at' => '2018-06-22 00:30:14',
                'updated_at' => '2018-06-22 00:30:14',
            ),
            31 => 
            array (
                'id' => 32,
                'course_name' => 'Civil Engineering Drawing',
                'slug' => 'ce100',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Civil Engineering Drawing ce100 ',
                'created_at' => '2018-06-22 00:30:35',
                'updated_at' => '2018-06-22 00:30:35',
            ),
            32 => 
            array (
                'id' => 33,
                'course_name' => 'Inorganic Quantitative Analysis',
                'slug' => 'chem114',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Inorganic Quantitative Analysis chem114 ',
                'created_at' => '2018-06-22 00:30:55',
                'updated_at' => '2018-06-22 00:30:55',
            ),
            33 => 
            array (
                'id' => 34,
                'course_name' => 'Physics Laboratory',
                'slug' => 'phy102',
                'department_id' => 1,
                'level_term_id' => 1,
                'custom_message' => NULL,
                'description' => 'Physics Laboratory phy102 ',
                'created_at' => '2018-06-22 00:31:15',
                'updated_at' => '2018-06-22 00:31:15',
            ),
            34 => 
            array (
                'id' => 35,
                'course_name' => 'Engineering Materials',
                'slug' => 'ce201',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Engineering Materials ce201 ',
                'created_at' => '2018-06-22 00:32:05',
                'updated_at' => '2018-06-22 00:32:05',
            ),
            35 => 
            array (
                'id' => 36,
                'course_name' => 'Engineering Geology and Geomorphology',
                'slug' => 'ce203',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Engineering Geology and Geomorphology ce203 ',
                'created_at' => '2018-06-22 00:32:22',
                'updated_at' => '2018-06-22 00:32:22',
            ),
            36 => 
            array (
                'id' => 37,
                'course_name' => 'Mechanics of Solids I',
                'slug' => 'ce211',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Mechanics of Solids I ce211 ',
                'created_at' => '2018-06-22 00:32:40',
                'updated_at' => '2018-06-22 00:32:40',
            ),
            37 => 
            array (
                'id' => 38,
                'course_name' => 'Accounting',
                'slug' => 'hum353',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Accounting hum353 ',
                'created_at' => '2018-06-22 00:32:58',
                'updated_at' => '2018-06-22 00:32:58',
            ),
            38 => 
            array (
                'id' => 39,
                'course_name' => 'Laplace Transform and Vector Analysis',
                'slug' => 'math237',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-22 00:33:19',
                'updated_at' => '2018-06-22 00:33:19',
            ),
            39 => 
            array (
                'id' => 40,
                'course_name' => 'Details of Construction',
                'slug' => 'ce200',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Details of Construction ce200 ',
                'created_at' => '2018-06-22 00:33:39',
                'updated_at' => '2018-06-22 00:33:39',
            ),
            40 => 
            array (
                'id' => 41,
                'course_name' => 'Materials Sessional',
                'slug' => 'ce202',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Materials Sessional ce202 ',
                'created_at' => '2018-06-22 00:33:54',
                'updated_at' => '2018-06-22 00:33:54',
            ),
            41 => 
            array (
                'id' => 42,
                'course_name' => 'Computer Programming Sessional',
                'slug' => 'ce204',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-22 00:34:25',
                'updated_at' => '2018-06-22 00:34:25',
            ),
            42 => 
            array (
                'id' => 43,
                'course_name' => 'Architectural, Engineering and Planning Appreciation',
                'slug' => 'ce210',
                'department_id' => 1,
                'level_term_id' => 3,
                'custom_message' => NULL,
                'description' => 'Architectural, Engineering and Planning Appreciation ce210 ',
                'created_at' => '2018-06-22 00:34:46',
                'updated_at' => '2018-06-22 00:34:46',
            ),
            43 => 
            array (
                'id' => 44,
                'course_name' => 'Professional Practices and Communication',
                'slug' => 'ce301',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Professional Practices and Communication ce301 ',
                'created_at' => '2018-06-22 00:35:13',
                'updated_at' => '2018-06-22 00:35:13',
            ),
            44 => 
            array (
                'id' => 45,
                'course_name' => 'Structural Analysis and Design I',
                'slug' => 'ce311',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Structural Analysis and Design I ce311 ',
                'created_at' => '2018-06-22 00:35:35',
                'updated_at' => '2018-06-22 00:35:35',
            ),
            45 => 
            array (
                'id' => 46,
                'course_name' => 'Design of Concrete Structures I',
                'slug' => 'ce315',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Design of Concrete Structures I ce315 ',
                'created_at' => '2018-06-22 00:35:52',
                'updated_at' => '2018-06-22 00:35:52',
            ),
            46 => 
            array (
                'id' => 47,
                'course_name' => 'Environmental Engineering I',
                'slug' => 'ce331',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Environmental Engineering I ce331 ',
                'created_at' => '2018-06-22 00:36:10',
                'updated_at' => '2018-06-22 00:36:10',
            ),
            47 => 
            array (
                'id' => 48,
                'course_name' => 'Principles of Soil Mechanics',
                'slug' => 'ce341',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-06-22 00:36:32',
                'updated_at' => '2018-06-22 00:36:32',
            ),
            48 => 
            array (
                'id' => 49,
                'course_name' => 'Professional Practices and Communication Sessional',
                'slug' => 'ce302',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Professional Practices and Communication Sessional ce302 ',
                'created_at' => '2018-06-22 00:36:52',
                'updated_at' => '2018-06-22 00:36:52',
            ),
            49 => 
            array (
                'id' => 50,
                'course_name' => 'Environmental Engineering Laboratory',
                'slug' => 'ce332',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Environmental Engineering Laboratory ce332 ',
                'created_at' => '2018-06-22 00:37:21',
                'updated_at' => '2018-06-22 00:37:21',
            ),
            50 => 
            array (
                'id' => 51,
                'course_name' => 'Geotechnical Engineering Laboratory',
                'slug' => 'ce342',
                'department_id' => 1,
                'level_term_id' => 5,
                'custom_message' => NULL,
                'description' => 'Geotechnical Engineering Laboratory ce342 ',
                'created_at' => '2018-06-22 00:37:41',
                'updated_at' => '2018-06-22 00:37:41',
            ),
            51 => 
            array (
                'id' => 52,
                'course_name' => 'Project planning and Construction Management',
                'slug' => 'ce401',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'description' => 'Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-06-22 00:38:47',
                'updated_at' => '2018-10-22 17:28:06',
            ),
            52 => 
            array (
                'id' => 53,
                'course_name' => 'Structural Analysis and Design II',
                'slug' => 'ce411',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'description' => 'Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-06-22 00:39:06',
                'updated_at' => '2018-10-22 17:28:34',
            ),
            53 => 
            array (
                'id' => 54,
                'course_name' => 'Foundation Engineering',
                'slug' => 'ce441',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'description' => 'Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'created_at' => '2018-06-22 00:39:24',
                'updated_at' => '2018-10-22 17:29:02',
            ),
            54 => 
            array (
                'id' => 55,
                'course_name' => 'Transportation Engineering II: Pavement Design and Railway Engineering',
                'slug' => 'ce451',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'description' => 'Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-06-22 00:39:45',
                'updated_at' => '2018-10-22 17:29:26',
            ),
            55 => 
            array (
                'id' => 56,
                'course_name' => 'Hydrology, Irrigation and Flood Management',
                'slug' => 'wre451',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'description' => 'Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-06-22 00:40:09',
                'updated_at' => '2018-10-22 17:29:51',
            ),
            56 => 
            array (
                'id' => 57,
                'course_name' => 'Transportation Engineering Sessional I: Highway Materials and Traffic Engineering Design',
                'slug' => 'ce452',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Testing and quality control of highway materials; bituminous mix
design; roadway traffic and capacity analysis; computer models and
application packages.',
                'description' => 'Transportation Engineering Sessional I: Highway Materials and Traffic Engineering Design ce452 Testing and quality control of highway materials; bituminous mix
design; roadway traffic and capacity analysis; computer models and
application packages.',
                'created_at' => '2018-06-22 00:40:25',
                'updated_at' => '2018-10-22 17:30:11',
            ),
            57 => 
            array (
                'id' => 58,
                'course_name' => 'Project and Thesis',
                'slug' => 'ce400',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Experimental and theoretical investigation of various topics in
structural engineering, environmental engineering, transportation
engineering and geotechnical engineering. Individual or group study
of one or more topics from any of the above fields. The students will
be required to submit thesis/project report at the end of the work.',
                'description' => 'Project and Thesis ce400 Experimental and theoretical investigation of various topics in
structural engineering, environmental engineering, transportation
engineering and geotechnical engineering. Individual or group study
of one or more topics from any of the above fields. The students will
be required to submit thesis/project report at the end of the work.',
                'created_at' => '2018-06-22 00:40:42',
                'updated_at' => '2018-10-22 17:30:36',
            ),
            58 => 
            array (
                'id' => 59,
                'course_name' => 'Practical Surveying',
                'slug' => 'ce104',
                'department_id' => 1,
                'level_term_id' => 4,
                'custom_message' => NULL,
                'description' => 'Practical Surveying ce104 ',
                'created_at' => '2018-06-22 00:41:16',
                'updated_at' => '2018-06-22 00:41:16',
            ),
            59 => 
            array (
                'id' => 60,
                'course_name' => 'Concrete Structures Design Sessional II',
                'slug' => 'ce410',
                'department_id' => 1,
                'level_term_id' => 7,
                'custom_message' => 'Computer applications in the analysis of buildings and PC girder
bridges; design of multistoried RCC frame residential building and
simple span PC girder bridge.',
                'description' => 'Concrete Structures Design Sessional II ce410 Computer applications in the analysis of buildings and PC girder
bridges; design of multistoried RCC frame residential building and
simple span PC girder bridge.',
                'created_at' => '2018-10-22 15:42:33',
                'updated_at' => '2018-10-22 15:42:33',
            ),
            60 => 
            array (
                'id' => 61,
                'course_name' => 'Project and Thesis',
                'slug' => 'ce400',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Project and Thesis ce400 ',
                'created_at' => '2019-06-08 19:57:43',
                'updated_at' => '2019-06-08 19:57:43',
            ),
            61 => 
            array (
                'id' => 62,
                'course_name' => 'Socio-economic Aspects of Development Projects',
                'slug' => 'ce403',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2019-06-08 19:58:01',
                'updated_at' => '2019-06-08 19:58:01',
            ),
            62 => 
            array (
                'id' => 63,
                'course_name' => 'Business and Career Development',
                'slug' => 'ce405',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Business and Career Development ce405 ',
                'created_at' => '2019-06-08 19:58:21',
                'updated_at' => '2019-06-08 19:58:21',
            ),
            63 => 
            array (
                'id' => 64,
                'course_name' => 'Introduction to Steel-Concrete Composite Structures',
                'slug' => 'ce413',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 19:59:06',
                'updated_at' => '2019-06-08 19:59:06',
            ),
            64 => 
            array (
                'id' => 65,
                'course_name' => 'Prestressed Concrete',
                'slug' => 'ce415',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 19:59:24',
                'updated_at' => '2019-06-08 19:59:24',
            ),
            65 => 
            array (
                'id' => 66,
                'course_name' => 'Introduction to Finite Element Method',
                'slug' => 'ce419',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 19:59:53',
                'updated_at' => '2019-06-08 19:59:53',
            ),
            66 => 
            array (
                'id' => 67,
                'course_name' => 'Dynamics of Structures',
                'slug' => 'ce421',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:00:09',
                'updated_at' => '2019-06-08 20:00:09',
            ),
            67 => 
            array (
                'id' => 68,
                'course_name' => 'Computer Aided Analysis and Design of Structures Sessional',
                'slug' => 'ce412',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Computer Aided Analysis and Design of Structures Sessional ce412 ',
                'created_at' => '2019-06-08 20:00:23',
                'updated_at' => '2019-06-08 20:00:23',
            ),
            68 => 
            array (
                'id' => 69,
                'course_name' => 'Solid and Hazardous Waste Management',
                'slug' => 'ce433',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2019-06-08 20:01:12',
                'updated_at' => '2019-06-08 20:01:12',
            ),
            69 => 
            array (
                'id' => 70,
                'course_name' => 'Environmental Pollution Management',
                'slug' => 'ce435',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:01:28',
                'updated_at' => '2019-06-08 20:01:28',
            ),
            70 => 
            array (
                'id' => 71,
                'course_name' => 'Environmental and Sustainable Management',
                'slug' => 'ce437',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Environmental and Sustainable Management ce437 ',
                'created_at' => '2019-06-08 20:01:41',
                'updated_at' => '2019-06-08 20:01:41',
            ),
            71 => 
            array (
                'id' => 72,
                'course_name' => 'Design of Water Supply, Sanitation and Sewerage Systems',
                'slug' => 'ce432',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Design of Water Supply, Sanitation and Sewerage Systems ce432 ',
                'created_at' => '2019-06-08 20:01:56',
                'updated_at' => '2019-06-08 20:01:56',
            ),
            72 => 
            array (
                'id' => 73,
                'course_name' => 'Earth Retaining Structures',
                'slug' => 'ce443',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Earth Retaining Structures ce443 ',
                'created_at' => '2019-06-08 20:02:13',
                'updated_at' => '2019-06-08 20:02:13',
            ),
            73 => 
            array (
                'id' => 74,
                'course_name' => 'Elementary Soil Dynamics',
                'slug' => 'ce445',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Elementary Soil Dynamics ce445 ',
                'created_at' => '2019-06-08 20:02:30',
                'updated_at' => '2019-06-08 20:02:30',
            ),
            74 => 
            array (
                'id' => 75,
                'course_name' => 'Soil-water Interaction',
                'slug' => 'ce447',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Soil-water Interaction ce447 ',
                'created_at' => '2019-06-08 20:02:42',
                'updated_at' => '2019-06-08 20:02:42',
            ),
            75 => 
            array (
                'id' => 76,
                'course_name' => 'Geotechnical Engineering Design Sessional',
                'slug' => 'ce442',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Geotechnical Engineering Design Sessional ce442 ',
                'created_at' => '2019-06-08 20:02:57',
                'updated_at' => '2019-06-08 20:02:57',
            ),
            76 => 
            array (
                'id' => 77,
                'course_name' => 'Transportation Engineering III: Traffic Engineering Design and Management',
                'slug' => 'ce453',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Transportation Engineering III: Traffic Engineering Design and Management ce453 ',
                'created_at' => '2019-06-08 20:03:24',
                'updated_at' => '2019-06-08 20:03:24',
            ),
            77 => 
            array (
                'id' => 78,
                'course_name' => 'Transportation Engineering IV: Pavement Management, Drainage and Airport',
                'slug' => 'ce455',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ',
                'created_at' => '2019-06-08 20:03:38',
                'updated_at' => '2019-06-08 20:03:38',
            ),
            78 => 
            array (
                'id' => 79,
                'course_name' => 'Transportation Engineering V: Urban Transportation Planning and Management',
                'slug' => 'ce457',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Transportation Engineering V: Urban Transportation Planning and Management ce457 ',
                'created_at' => '2019-06-08 20:03:51',
                'updated_at' => '2019-06-08 20:03:51',
            ),
            79 => 
            array (
                'id' => 80,
                'course_name' => 'Transportation Engineering Sessional II: Pavement Design and Traffic Studies',
                'slug' => 'ce454',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Transportation Engineering Sessional II: Pavement Design and Traffic Studies ce454 ',
                'created_at' => '2019-06-08 20:04:09',
                'updated_at' => '2019-06-08 20:04:09',
            ),
            80 => 
            array (
                'id' => 81,
                'course_name' => 'Flood Mitigation and Management',
                'slug' => 'wre405',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Flood Mitigation and Management wre405 ',
                'created_at' => '2019-06-08 20:04:32',
                'updated_at' => '2019-06-08 20:04:32',
            ),
            81 => 
            array (
                'id' => 82,
                'course_name' => 'Ground Water Engineering',
                'slug' => 'wre407',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Ground Water Engineering wre407 ',
                'created_at' => '2019-06-08 20:04:44',
                'updated_at' => '2019-06-08 20:04:44',
            ),
            82 => 
            array (
                'id' => 83,
                'course_name' => 'River Engineering',
                'slug' => 'wre409',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'River Engineering wre409 ',
                'created_at' => '2019-06-08 20:05:04',
                'updated_at' => '2019-06-08 20:05:04',
            ),
            83 => 
            array (
                'id' => 84,
                'course_name' => 'Hydraulic Structures',
                'slug' => 'wre411',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Hydraulic Structures wre411 ',
                'created_at' => '2019-06-08 20:05:18',
                'updated_at' => '2019-06-08 20:05:18',
            ),
            84 => 
            array (
                'id' => 85,
                'course_name' => 'Coastal Engineering',
                'slug' => 'wre413',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Coastal Engineering wre413 ',
                'created_at' => '2019-06-08 20:05:31',
                'updated_at' => '2019-06-08 20:05:31',
            ),
            85 => 
            array (
                'id' => 86,
                'course_name' => 'Water Resources Engineering Sessional',
                'slug' => 'wre412',
                'department_id' => 1,
                'level_term_id' => 8,
                'custom_message' => NULL,
                'description' => 'Water Resources Engineering Sessional wre412 ',
                'created_at' => '2019-06-08 20:05:44',
                'updated_at' => '2019-06-08 20:05:44',
            ),
            86 => 
            array (
                'id' => 87,
                'course_name' => 'Micro-Economics',
                'slug' => 'hum171',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '3.0',
                'description' => 'Micro-Economics hum171 3.0',
                'created_at' => '2022-04-19 21:03:55',
                'updated_at' => '2022-04-19 21:03:55',
            ),
            87 => 
            array (
                'id' => 88,
                'course_name' => 'English',
                'slug' => 'hum125',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '2.0',
                'description' => 'English hum125 2.0',
                'created_at' => '2022-04-19 21:04:34',
                'updated_at' => '2022-04-19 21:04:34',
            ),
            88 => 
            array (
                'id' => 89,
                'course_name' => 'Basic Environmental Chemistry',
                'slug' => 'chem123',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '3.0',
                'description' => 'Basic Environmental Chemistry chem123 3.0',
                'created_at' => '2022-04-19 21:04:54',
                'updated_at' => '2022-04-25 02:43:46',
            ),
            89 => 
            array (
                'id' => 90,
                'course_name' => 'Mathematics I',
                'slug' => 'math101',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '2.0',
                'description' => 'Mathematics I math101 2.0',
                'created_at' => '2022-04-19 21:05:12',
                'updated_at' => '2022-04-19 21:05:12',
            ),
            90 => 
            array (
                'id' => 91,
                'course_name' => 'Human Settlements Development',
                'slug' => 'plan111',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '3.0',
                'description' => 'Human Settlements Development plan111 3.0',
                'created_at' => '2022-04-19 21:05:33',
                'updated_at' => '2022-04-19 21:05:33',
            ),
            91 => 
            array (
                'id' => 92,
                'course_name' => 'Basic Design',
                'slug' => 'arch106',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '3.0',
                'description' => 'Basic Design arch106 3.0',
                'created_at' => '2022-04-19 21:06:02',
                'updated_at' => '2022-04-19 21:06:02',
            ),
            92 => 
            array (
                'id' => 93,
                'course_name' => 'Graphics for Planners',
                'slug' => 'arch116',
                'department_id' => 10,
                'level_term_id' => 9,
                'custom_message' => '3.0',
                'description' => 'Graphics for Planners arch116 3.0',
                'created_at' => '2022-04-19 21:06:18',
                'updated_at' => '2022-04-19 21:06:18',
            ),
            93 => 
            array (
                'id' => 94,
                'course_name' => 'Elements of Architecture',
                'slug' => 'arch145',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '2.0',
                'description' => 'Elements of Architecture arch145 2.0',
                'created_at' => '2022-04-19 21:06:42',
                'updated_at' => '2022-04-19 21:06:42',
            ),
            94 => 
            array (
                'id' => 95,
                'course_name' => 'Macro-Economics',
                'slug' => 'hum177',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '3.0',
                'description' => 'Macro-Economics hum177 3.0',
                'created_at' => '2022-04-19 21:07:00',
                'updated_at' => '2022-04-19 21:07:00',
            ),
            95 => 
            array (
                'id' => 96,
                'course_name' => 'Fundamentals of Planning',
                'slug' => 'plan113',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '2.0',
                'description' => 'Fundamentals of Planning plan113 2.0',
                'created_at' => '2022-04-19 21:07:20',
                'updated_at' => '2022-04-19 21:07:20',
            ),
            96 => 
            array (
                'id' => 97,
                'course_name' => 'Mathematics II',
                'slug' => 'math103',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '2.0',
                'description' => 'Mathematics II math103 2.0',
                'created_at' => '2022-04-19 21:07:38',
                'updated_at' => '2022-04-19 21:07:38',
            ),
            97 => 
            array (
                'id' => 98,
                'course_name' => 'Surveying and Cartography',
                'slug' => 'plan161',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '3.0',
                'description' => 'Surveying and Cartography plan161 3.0',
                'created_at' => '2022-04-19 21:07:55',
                'updated_at' => '2022-04-19 21:07:55',
            ),
            98 => 
            array (
                'id' => 99,
                'course_name' => 'Surveying and Cartography Workshop',
                'slug' => 'plan162',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '3.0',
                'description' => 'Surveying and Cartography Workshop plan162 3.0',
                'created_at' => '2022-04-19 21:08:13',
                'updated_at' => '2022-04-19 21:08:13',
            ),
            99 => 
            array (
                'id' => 100,
                'course_name' => 'Introduction to Computer Applications',
                'slug' => 'plan196',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '1.5',
                'description' => 'Introduction to Computer Applications plan196 1.5',
                'created_at' => '2022-04-19 21:08:29',
                'updated_at' => '2022-04-19 21:08:29',
            ),
            100 => 
            array (
                'id' => 101,
                'course_name' => 'Communication & Presentation Techniques Studio',
                'slug' => 'plan108',
                'department_id' => 10,
                'level_term_id' => 10,
                'custom_message' => '3.0',
                'description' => 'Communication & Presentation Techniques Studio plan108 3.0',
                'created_at' => '2022-04-19 21:08:45',
                'updated_at' => '2022-04-19 21:08:45',
            ),
            101 => 
            array (
                'id' => 102,
                'course_name' => 'Construction Materials',
                'slug' => 'ce209',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '2.0',
                'description' => 'Construction Materials ce209 2.0',
                'created_at' => '2022-04-19 21:09:06',
                'updated_at' => '2022-04-19 21:09:06',
            ),
            102 => 
            array (
                'id' => 103,
                'course_name' => 'Urban Planning Principles',
                'slug' => 'plan211',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '3.0',
                'description' => 'Urban Planning Principles plan211 3.0',
                'created_at' => '2022-04-19 21:09:22',
                'updated_at' => '2022-04-19 21:09:22',
            ),
            103 => 
            array (
                'id' => 104,
                'course_name' => 'Site and Area Planning',
                'slug' => 'plan217',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '3.0',
                'description' => 'Site and Area Planning plan217 3.0',
                'created_at' => '2022-04-19 21:09:44',
                'updated_at' => '2022-04-19 21:09:44',
            ),
            104 => 
            array (
                'id' => 105,
                'course_name' => 'Statistics for Planners I',
                'slug' => 'plan291',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '3.0',
                'description' => 'Statistics for Planners I plan291 3.0',
                'created_at' => '2022-04-19 21:10:04',
                'updated_at' => '2022-04-19 21:10:04',
            ),
            105 => 
            array (
                'id' => 106,
                'course_name' => 'Sociology',
                'slug' => 'hum179',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '3.0',
                'description' => 'Sociology hum179 3.0',
                'created_at' => '2022-04-19 21:10:19',
                'updated_at' => '2022-04-19 21:10:19',
            ),
            106 => 
            array (
                'id' => 107,
                'course_name' => 'Social and Physical Surveys',
                'slug' => 'plan204',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '3.0',
                'description' => 'Social and Physical Surveys plan204 3.0',
                'created_at' => '2022-04-19 21:10:34',
                'updated_at' => '2022-04-19 21:10:34',
            ),
            107 => 
            array (
                'id' => 108,
                'course_name' => 'Site and Area Planning Studio',
                'slug' => 'plan218',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '3.0',
                'description' => 'Site and Area Planning Studio plan218 3.0',
                'created_at' => '2022-04-19 21:10:49',
                'updated_at' => '2022-04-19 21:10:49',
            ),
            108 => 
            array (
                'id' => 109,
                'course_name' => 'Developing English Skills',
                'slug' => 'hum272',
                'department_id' => 10,
                'level_term_id' => 11,
                'custom_message' => '1.5',
                'description' => 'Developing English Skills hum272 1.5',
                'created_at' => '2022-04-19 21:11:05',
                'updated_at' => '2022-04-19 21:11:05',
            ),
            109 => 
            array (
                'id' => 110,
                'course_name' => 'Landscape Planning and Design',
                'slug' => 'arch233',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '2.0',
                'description' => 'Landscape Planning and Design arch233 2.0',
                'created_at' => '2022-04-19 21:11:26',
                'updated_at' => '2022-04-19 21:11:26',
            ),
            110 => 
            array (
                'id' => 111,
                'course_name' => 'Urban Planning Techniques',
                'slug' => 'plan215',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '3.0',
                'description' => 'Urban Planning Techniques plan215 3.0',
                'created_at' => '2022-04-19 21:11:41',
                'updated_at' => '2022-04-19 21:11:41',
            ),
            111 => 
            array (
                'id' => 112,
                'course_name' => 'GIS and Remote Sensing',
                'slug' => 'plan261',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '3.0',
                'description' => 'GIS and Remote Sensing plan261 3.0',
                'created_at' => '2022-04-19 21:11:57',
                'updated_at' => '2022-04-19 21:11:57',
            ),
            112 => 
            array (
                'id' => 113,
                'course_name' => 'Statistics for Planners II',
                'slug' => 'plan293',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => 'Prerequisite
Plan 291 3.0',
                'description' => 'Statistics for Planners II plan293 Prerequisite
Plan 291 3.0',
                'created_at' => '2022-04-19 21:12:21',
                'updated_at' => '2022-04-19 21:12:21',
            ),
            113 => 
            array (
                'id' => 114,
                'course_name' => 'Political Science and Local Government',
                'slug' => 'hum281',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '3.0',
                'description' => 'Political Science and Local Government hum281 3.0',
                'created_at' => '2022-04-19 21:12:39',
                'updated_at' => '2022-04-19 21:12:39',
            ),
            114 => 
            array (
                'id' => 115,
                'course_name' => 'Public Finance',
                'slug' => 'hum221',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '3.0',
                'description' => 'Public Finance hum221 3.0',
                'created_at' => '2022-04-19 21:12:56',
                'updated_at' => '2022-04-19 21:12:56',
            ),
            115 => 
            array (
                'id' => 116,
                'course_name' => 'Computer Applications in Planning',
                'slug' => 'plan296',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '3.0',
                'description' => 'Computer Applications in Planning plan296 3.0',
                'created_at' => '2022-04-19 21:13:11',
                'updated_at' => '2022-04-19 21:13:11',
            ),
            116 => 
            array (
                'id' => 117,
                'course_name' => 'Landscape Planning Studio',
                'slug' => 'arch226',
                'department_id' => 10,
                'level_term_id' => 12,
                'custom_message' => '3.0',
                'description' => 'Landscape Planning Studio arch226 3.0',
                'created_at' => '2022-04-19 21:13:29',
                'updated_at' => '2022-04-19 21:13:29',
            ),
            117 => 
            array (
                'id' => 118,
                'course_name' => 'Elements of Solid Mechanics',
                'slug' => 'ce327',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '3.0',
                'description' => 'Elements of Solid Mechanics ce327 3.0',
                'created_at' => '2022-04-19 21:14:07',
                'updated_at' => '2022-04-19 21:14:07',
            ),
            118 => 
            array (
                'id' => 119,
                'course_name' => 'Introduction to Water Resources Planning',
                'slug' => 'wre309',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '3.0',
                'description' => 'Introduction to Water Resources Planning wre309 3.0',
                'created_at' => '2022-04-19 21:14:23',
                'updated_at' => '2022-04-19 21:14:23',
            ),
            119 => 
            array (
                'id' => 120,
                'course_name' => 'Housing and Real Estate Development',
                'slug' => 'plan321',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '3.0',
                'description' => 'Housing and Real Estate Development plan321 3.0',
                'created_at' => '2022-04-19 21:14:41',
                'updated_at' => '2022-04-19 21:14:41',
            ),
            120 => 
            array (
                'id' => 121,
                'course_name' => 'Traffic and Transportation Study',
                'slug' => 'plan343',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '3.0',
                'description' => 'Traffic and Transportation Study plan343 3.0',
                'created_at' => '2022-04-19 21:14:59',
                'updated_at' => '2022-04-19 21:14:59',
            ),
            121 => 
            array (
                'id' => 122,
                'course_name' => 'Accounting',
                'slug' => 'hum225',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '2.0',
                'description' => 'Accounting hum225 2.0',
                'created_at' => '2022-04-19 21:15:23',
                'updated_at' => '2022-04-19 21:15:23',
            ),
            122 => 
            array (
                'id' => 123,
                'course_name' => 'Social Psychology',
                'slug' => 'hum271',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '2.0',
                'description' => 'Social Psychology hum271 2.0',
                'created_at' => '2022-04-19 21:15:40',
                'updated_at' => '2022-04-19 21:15:40',
            ),
            123 => 
            array (
                'id' => 124,
                'course_name' => 'Land Economics',
                'slug' => 'plan313',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '2.0',
                'description' => 'Land Economics plan313 2.0',
                'created_at' => '2022-04-19 21:15:53',
                'updated_at' => '2022-04-19 21:15:53',
            ),
            124 => 
            array (
                'id' => 125,
                'course_name' => 'Urban Planning Studio',
                'slug' => 'plan312',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '3.0',
                'description' => 'Urban Planning Studio plan312 3.0',
                'created_at' => '2022-04-19 21:16:12',
                'updated_at' => '2022-04-19 21:16:12',
            ),
            125 => 
            array (
                'id' => 126,
                'course_name' => 'GIS and Remote Sensing Studio',
                'slug' => 'plan362',
                'department_id' => 10,
                'level_term_id' => 13,
                'custom_message' => '3.0',
                'description' => 'GIS and Remote Sensing Studio plan362 3.0',
                'created_at' => '2022-04-19 21:16:28',
                'updated_at' => '2022-04-19 21:16:28',
            ),
            126 => 
            array (
                'id' => 127,
                'course_name' => 'Elements of Civil Engineering Structures',
                'slug' => 'ce363',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Elements of Civil Engineering Structures ce363 3.0',
                'created_at' => '2022-04-19 21:16:46',
                'updated_at' => '2022-04-25 02:44:01',
            ),
            127 => 
            array (
                'id' => 128,
                'course_name' => 'Rural Development Planning I',
                'slug' => 'plan331',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Rural Development Planning I plan331 3.0',
                'created_at' => '2022-04-19 21:17:03',
                'updated_at' => '2022-04-19 21:17:03',
            ),
            128 => 
            array (
                'id' => 129,
                'course_name' => 'Transportation Policy and Planning',
                'slug' => 'plan345',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Transportation Policy and Planning plan345 3.0',
                'created_at' => '2022-04-19 21:17:19',
                'updated_at' => '2022-04-19 21:17:19',
            ),
            129 => 
            array (
                'id' => 130,
                'course_name' => 'Regional Development Planning',
                'slug' => 'plan333',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Regional Development Planning plan333 3.0',
                'created_at' => '2022-04-19 21:17:38',
                'updated_at' => '2022-04-19 21:17:38',
            ),
            130 => 
            array (
                'id' => 131,
                'course_name' => 'Urban Design',
                'slug' => 'plan355',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Urban Design plan355 3.0',
                'created_at' => '2022-04-19 21:17:56',
                'updated_at' => '2022-04-19 21:17:56',
            ),
            131 => 
            array (
                'id' => 132,
                'course_name' => 'Neigh. Plan. and Community Development',
                'slug' => 'plan323',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Neigh. Plan. and Community Development plan323 3.0',
                'created_at' => '2022-04-19 21:18:14',
                'updated_at' => '2022-04-19 21:18:14',
            ),
            132 => 
            array (
                'id' => 133,
                'course_name' => 'Operations Research and Systems Analysis',
                'slug' => 'plan393',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Operations Research and Systems Analysis plan393 3.0',
                'created_at' => '2022-04-19 21:18:29',
                'updated_at' => '2022-04-19 21:18:29',
            ),
            133 => 
            array (
                'id' => 134,
                'course_name' => 'Programming Techniques',
                'slug' => 'plan396',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '2.0',
                'description' => 'Programming Techniques plan396 2.0',
                'created_at' => '2022-04-19 21:18:47',
                'updated_at' => '2022-04-19 21:18:47',
            ),
            134 => 
            array (
                'id' => 135,
                'course_name' => 'Rural Planning Studio',
                'slug' => 'plan332',
                'department_id' => 10,
                'level_term_id' => 14,
                'custom_message' => '3.0',
                'description' => 'Rural Planning Studio plan332 3.0',
                'created_at' => '2022-04-19 21:19:06',
                'updated_at' => '2022-04-19 21:19:06',
            ),
            135 => 
            array (
                'id' => 136,
                'course_name' => 'Project/Thesis',
                'slug' => 'plan400',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '2.0',
                'description' => 'Project/Thesis plan400 2.0',
                'created_at' => '2022-04-19 21:19:23',
                'updated_at' => '2022-04-19 21:19:23',
            ),
            136 => 
            array (
                'id' => 137,
                'course_name' => 'Project Evaluation and Management',
                'slug' => 'plan401',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Project Evaluation and Management plan401 3.0',
                'created_at' => '2022-04-19 21:19:37',
                'updated_at' => '2022-04-19 21:19:37',
            ),
            137 => 
            array (
                'id' => 138,
                'course_name' => 'Legal Basis of Planning',
                'slug' => 'plan403',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Legal Basis of Planning plan403 3.0',
                'created_at' => '2022-04-19 21:19:57',
                'updated_at' => '2022-04-19 21:19:57',
            ),
            138 => 
            array (
                'id' => 139,
                'course_name' => 'Environmental Planning and Management',
                'slug' => 'plan451',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Environmental Planning and Management plan451 3.0',
                'created_at' => '2022-04-19 21:20:09',
                'updated_at' => '2022-04-19 21:20:09',
            ),
            139 => 
            array (
                'id' => 140,
                'course_name' => 'Basic Environmental Engineering',
                'slug' => 'ce439',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Basic Environmental Engineering ce439 3.0',
                'created_at' => '2022-04-19 21:20:27',
                'updated_at' => '2022-04-19 21:20:27',
            ),
            140 => 
            array (
                'id' => 141,
                'course_name' => 'Planning of Tourism & Recreational Facilities',
                'slug' => 'plan417',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Planning of Tourism & Recreational Facilities plan417 3.0',
                'created_at' => '2022-04-19 21:20:46',
                'updated_at' => '2022-04-19 21:20:46',
            ),
            141 => 
            array (
                'id' => 142,
                'course_name' => 'Rural Devevlopment Planning II',
                'slug' => 'plan431',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Rural Devevlopment Planning II plan431 3.0',
                'created_at' => '2022-04-19 21:21:01',
                'updated_at' => '2022-04-19 21:21:01',
            ),
            142 => 
            array (
                'id' => 143,
                'course_name' => 'Transportation Planning Studio',
                'slug' => 'plan446',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Transportation Planning Studio plan446 3.0',
                'created_at' => '2022-04-19 21:21:18',
                'updated_at' => '2022-04-19 21:21:18',
            ),
            143 => 
            array (
                'id' => 144,
                'course_name' => 'Regional Planning Studio',
                'slug' => 'plan434',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => '3.0',
                'description' => 'Regional Planning Studio plan434 3.0',
                'created_at' => '2022-04-19 21:21:35',
                'updated_at' => '2022-04-19 21:21:35',
            ),
            144 => 
            array (
                'id' => 145,
                'course_name' => 'Internship',
                'slug' => 'plan470',
                'department_id' => 10,
                'level_term_id' => 15,
                'custom_message' => NULL,
                'description' => 'Internship plan470 ',
                'created_at' => '2022-04-19 21:21:47',
                'updated_at' => '2022-04-19 21:21:47',
            ),
            145 => 
            array (
                'id' => 146,
                'course_name' => 'Project/Thesis',
                'slug' => 'plan400',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '4.0',
                'description' => 'Project/Thesis plan400 4.0',
                'created_at' => '2022-04-19 21:22:09',
                'updated_at' => '2022-04-19 21:22:09',
            ),
            146 => 
            array (
                'id' => 147,
                'course_name' => 'Urban Management and Governance',
                'slug' => 'plan413',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Urban Management and Governance plan413 3.0',
                'created_at' => '2022-04-19 21:22:27',
                'updated_at' => '2022-04-19 21:22:27',
            ),
            147 => 
            array (
                'id' => 148,
                'course_name' => 'Development Planning',
                'slug' => 'plan405',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Development Planning plan405 3.0',
                'created_at' => '2022-04-19 21:22:43',
                'updated_at' => '2022-04-19 21:22:43',
            ),
            148 => 
            array (
                'id' => 149,
                'course_name' => 'Urban and Regional Economics',
                'slug' => 'plan407',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Urban and Regional Economics plan407 3.0',
                'created_at' => '2022-04-19 21:23:00',
                'updated_at' => '2022-04-19 21:23:00',
            ),
            149 => 
            array (
                'id' => 150,
                'course_name' => 'Planning of Utility and Municipal Services',
                'slug' => 'plan415',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Planning of Utility and Municipal Services plan415 3.0',
                'created_at' => '2022-04-19 21:23:15',
                'updated_at' => '2022-04-19 21:23:15',
            ),
            150 => 
            array (
                'id' => 151,
                'course_name' => 'Land Development and Management',
                'slug' => 'plan419',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Land Development and Management plan419 3.0',
                'created_at' => '2022-04-19 21:23:35',
                'updated_at' => '2022-04-19 21:23:35',
            ),
            151 => 
            array (
                'id' => 152,
                'course_name' => 'Environmental and Resource Economics',
                'slug' => 'plan453',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Environmental and Resource Economics plan453 3.0',
                'created_at' => '2022-04-19 21:23:52',
                'updated_at' => '2022-04-19 21:23:52',
            ),
            152 => 
            array (
                'id' => 153,
                'course_name' => 'Natural Hazards and Disaster Management',
                'slug' => 'plan471',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Natural Hazards and Disaster Management plan471 3.0',
                'created_at' => '2022-04-19 21:24:11',
                'updated_at' => '2022-04-19 21:24:11',
            ),
            153 => 
            array (
                'id' => 154,
                'course_name' => 'Project Planning Studio',
                'slug' => 'plan402',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '2.0',
                'description' => 'Project Planning Studio plan402 2.0',
                'created_at' => '2022-04-19 21:24:26',
                'updated_at' => '2022-04-19 21:24:26',
            ),
            154 => 
            array (
                'id' => 155,
                'course_name' => 'Participatory Planning Workshop',
                'slug' => 'plan412',
                'department_id' => 10,
                'level_term_id' => 16,
                'custom_message' => '3.0',
                'description' => 'Participatory Planning Workshop plan412 3.0',
                'created_at' => '2022-04-19 21:24:41',
                'updated_at' => '2022-04-19 21:24:41',
            ),
        ));
        
        
    }
}