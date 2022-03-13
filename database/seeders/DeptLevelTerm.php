<?php

namespace Database\Seeders;

use App\Models\Admin\Course;
use App\Models\Admin\LevelTerm;
use Illuminate\Database\Seeder;
use App\Models\Admin\Department;
use Illuminate\Support\Facades\DB;

class DeptLevelTerm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Civil Engineering',
            'code' => '04',
            'slug' => 'ce',
            'image' => 'ce_04.png'
        ]);



        $ltSQL = "
INSERT INTO `level_terms` (`id`, `name`, `slug`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Level 1 Term 1', '1-1', 1, NULL, NULL),
(2, 'Level 1 Term 2', '1-2', 1, NULL, NULL),
(3, 'Level 2 Term 1', '2-1', 1, NULL, NULL),
(4, 'Level 2 Term 2', '2-2', 1, NULL, NULL),
(5, 'Level 3 Term 1', '3-1', 1, NULL, NULL),
(6, 'Level 3 Term 2', '3-2', 1, NULL, NULL),
(7, 'Level 4 Term 1', '4-1', 1, NULL, NULL),
(8, 'Level 4 Term 2', '4-2', 1, NULL, NULL);";

        DB::statement($ltSQL);



        $courseSql = "INSERT INTO `courses` (`id`, `course_name`, `slug`, `department_id`, `level_term_id`, `custom_message`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Surveying', 'ce103', 1, 2, '4 Credit', 'Surveying ce103 4 Credit', '2018-06-21 07:49:55', '2018-06-21 07:49:55'),
(2, 'Basic Electrical Technology', 'eee165', 1, 2, '3 credit', 'Basic Electrical Technology eee165 3 credit', '2018-06-21 07:51:01', '2018-06-21 07:51:01'),
(3, 'English', 'hum185', 1, 2, '2 credit', 'English hum185 2 credit', '2018-06-21 07:51:30', '2018-06-21 07:51:30'),
(4, 'Defferential Equations and Statistics', 'math139', 1, 2, '3 credit', 'Defferential Equations and Statistics math139 3 credit', '2018-06-21 07:52:43', '2018-06-21 07:52:43'),
(5, 'Structure of Matter, Electricity and Magnetism and Modern Physics', 'phy151', 1, 2, '3 credit', 'Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit', '2018-06-21 07:53:14', '2018-06-21 07:53:14'),
(6, 'Computer Aided Drafting', 'ce102', 1, 2, '1.5 credit', 'Computer Aided Drafting ce102 1.5 credit', '2018-06-21 07:53:44', '2018-06-21 07:53:44'),
(7, 'Developing English Language Skills', 'hum274', 1, 2, '1.5 credit', 'Developing English Language Skills hum274 1.5 credit', '2018-06-21 07:54:12', '2018-06-21 07:54:12'),
(8, 'Workshop Sessional', 'shop132', 1, 2, '1.5 credit', 'Workshop Sessional shop132 1.5 credit', '2018-06-21 07:54:52', '2018-06-21 07:54:52'),
(9, 'Design of Concrete Structures II', 'ce317', 1, 6, '3 credit', 'Design of Concrete Structures II ce317 3 credit', '2018-06-21 07:57:54', '2018-06-21 07:57:54'),
(10, 'Design of Steel Structures', 'ce319', 1, 6, '3 credit', 'Design of Steel Structures ce319 3 credit', '2018-06-21 07:58:35', '2018-06-21 07:58:35'),
(11, 'Environmental Engineering II', 'ce333', 1, 6, '4 credit', 'Environmental Engineering II ce333 4 credit', '2018-06-21 07:59:14', '2018-06-21 07:59:14'),
(12, 'Transportation Engineering I: Transportation Planning & Traffic Engineering', 'ce351', 1, 6, '3 credit', 'Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit', '2018-06-21 07:59:41', '2018-06-21 07:59:41'),
(13, 'Open Channel Flow', 'wre311', 1, 6, '4 credit', 'Open Channel Flow wre311 4 credit', '2018-06-21 08:00:08', '2018-06-21 08:00:08'),
(14, 'Concrete Structures Design Sessional I', 'ce316', 1, 6, '1.5 credit', 'Concrete Structures Design Sessional I ce316 1.5 credit', '2018-06-21 08:00:38', '2018-06-21 08:00:38'),
(15, 'Steel Structures Design Sessional', 'ce320', 1, 6, '1.5 credit', 'Steel Structures Design Sessional ce320 1.5 credit', '2018-06-21 08:01:05', '2018-06-21 08:01:05'),
(16, 'Open Channel Flow Sessional', 'wre312', 1, 6, '1.5 credit', 'Open Channel Flow Sessional wre312 1.5 credit', '2018-06-21 08:01:31', '2018-06-21 08:01:31'),
(17, 'Numerical Methods', 'ce205', 1, 4, '2 credit', 'Numerical Methods ce205 2 credit', '2018-06-21 08:10:37', '2018-06-21 08:10:37'),
(18, 'Mechanics of Solids II', 'ce213', 1, 4, '3 credit', 'Mechanics of Solids II ce213 3 credit', '2018-06-21 08:11:01', '2018-06-21 08:11:01'),
(19, 'Engineering Economics', 'hum217', 1, 4, '2 credit', 'Engineering Economics hum217 2 credit', '2018-06-21 08:11:24', '2018-06-21 08:11:24'),
(20, 'Applied Mathematics for Engineers', 'ce207', 1, 4, '3 credit', 'Applied Mathematics for Engineers ce207 3 credit', '2018-06-21 08:11:48', '2018-06-21 08:11:48'),
(21, 'Fluid Mechanics', 'wre211', 1, 4, '3 credit', 'Fluid Mechanics wre211 3 credit', '2018-06-21 08:12:15', '2018-06-21 08:12:15'),
(22, 'Engineering Computation Sessional', 'ce206', 1, 4, '1.5 credit', 'Engineering Computation Sessional ce206 1.5 credit', '2018-06-21 08:12:52', '2018-06-21 08:12:52'),
(23, 'Quantity Surveying', 'ce208', 1, 4, '1.5 credit', 'Quantity Surveying ce208 1.5 credit', '2018-06-21 08:13:13', '2018-06-21 08:13:13'),
(24, 'Structural Mechanics and Materials Sessional', 'ce212', 1, 4, '1.5 credit', 'Structural Mechanics and Materials Sessional ce212 1.5 credit', '2018-06-21 08:13:40', '2018-06-21 08:13:40'),
(25, 'Fluid Mechanics Sessional', 'wre212', 1, 4, '1.5 credit', 'Fluid Mechanics Sessional wre212 1.5 credit', '2018-06-21 08:14:06', '2018-06-21 08:14:06'),
(26, 'Analytic Mechanics', 'ce101', 1, 1, NULL, 'Analytic Mechanics ce101 ', '2018-06-21 15:27:32', '2018-10-22 08:10:05'),
(27, 'Chemistry I', 'chem103', 1, 1, NULL, 'Chemistry I chem103 ', '2018-06-21 15:27:49', '2018-07-09 16:50:34'),
(28, 'Differential and Integral Calculus, Matrices', 'math137', 1, 1, '3 credit', 'Differential and Integral Calculus, Matrices math137 3 credit', '2018-06-21 15:28:46', '2018-06-21 15:28:46'),
(29, 'Physical Optics, Waves and Oscillation, Heat and Thermodynamics', 'phy101', 1, 1, NULL, 'Physical Optics, Waves and Oscillation, Heat and Thermodynamics phy101 ', '2018-06-21 15:29:32', '2018-06-21 15:29:32'),
(30, 'Sociology', 'hum355', 1, 1, NULL, 'Sociology hum355 ', '2018-06-21 15:29:56', '2018-06-21 15:29:56'),
(31, 'Government', 'hum375', 1, 1, NULL, 'Government hum375 ', '2018-06-21 15:30:14', '2018-06-21 15:30:14'),
(32, 'Civil Engineering Drawing', 'ce100', 1, 1, NULL, 'Civil Engineering Drawing ce100 ', '2018-06-21 15:30:35', '2018-06-21 15:30:35'),
(33, 'Inorganic Quantitative Analysis', 'chem114', 1, 1, NULL, 'Inorganic Quantitative Analysis chem114 ', '2018-06-21 15:30:55', '2018-06-21 15:30:55'),
(34, 'Physics Laboratory', 'phy102', 1, 1, NULL, 'Physics Laboratory phy102 ', '2018-06-21 15:31:15', '2018-06-21 15:31:15'),
(35, 'Engineering Materials', 'ce201', 1, 3, NULL, 'Engineering Materials ce201 ', '2018-06-21 15:32:05', '2018-06-21 15:32:05'),
(36, 'Engineering Geology and Geomorphology', 'ce203', 1, 3, NULL, 'Engineering Geology and Geomorphology ce203 ', '2018-06-21 15:32:22', '2018-06-21 15:32:22'),
(37, 'Mechanics of Solids I', 'ce211', 1, 3, NULL, 'Mechanics of Solids I ce211 ', '2018-06-21 15:32:40', '2018-06-21 15:32:40'),
(38, 'Accounting', 'hum353', 1, 3, NULL, 'Accounting hum353 ', '2018-06-21 15:32:58', '2018-06-21 15:32:58'),
(39, 'Laplace Transform and Vector Analysis', 'math237', 1, 3, NULL, 'Laplace Transform and Vector Analysis math237 ', '2018-06-21 15:33:19', '2018-06-21 15:33:19'),
(40, 'Details of Construction', 'ce200', 1, 3, NULL, 'Details of Construction ce200 ', '2018-06-21 15:33:39', '2018-06-21 15:33:39'),
(41, 'Materials Sessional', 'ce202', 1, 3, NULL, 'Materials Sessional ce202 ', '2018-06-21 15:33:54', '2018-06-21 15:33:54'),
(42, 'Computer Programming Sessional', 'ce204', 1, 3, NULL, 'Computer Programming Sessional ce204 ', '2018-06-21 15:34:25', '2018-06-21 15:34:25'),
(43, 'Architectural, Engineering and Planning Appreciation', 'ce210', 1, 3, NULL, 'Architectural, Engineering and Planning Appreciation ce210 ', '2018-06-21 15:34:46', '2018-06-21 15:34:46'),
(44, 'Professional Practices and Communication', 'ce301', 1, 5, NULL, 'Professional Practices and Communication ce301 ', '2018-06-21 15:35:13', '2018-06-21 15:35:13'),
(45, 'Structural Analysis and Design I', 'ce311', 1, 5, NULL, 'Structural Analysis and Design I ce311 ', '2018-06-21 15:35:35', '2018-06-21 15:35:35'),
(46, 'Design of Concrete Structures I', 'ce315', 1, 5, NULL, 'Design of Concrete Structures I ce315 ', '2018-06-21 15:35:52', '2018-06-21 15:35:52'),
(47, 'Environmental Engineering I', 'ce331', 1, 5, NULL, 'Environmental Engineering I ce331 ', '2018-06-21 15:36:10', '2018-06-21 15:36:10'),
(48, 'Principles of Soil Mechanics', 'ce341', 1, 5, NULL, 'Principles of Soil Mechanics ce341 ', '2018-06-21 15:36:32', '2018-06-21 15:36:32'),
(49, 'Professional Practices and Communication Sessional', 'ce302', 1, 5, NULL, 'Professional Practices and Communication Sessional ce302 ', '2018-06-21 15:36:52', '2018-06-21 15:36:52'),
(50, 'Environmental Engineering Laboratory', 'ce332', 1, 5, NULL, 'Environmental Engineering Laboratory ce332 ', '2018-06-21 15:37:21', '2018-06-21 15:37:21'),
(51, 'Geotechnical Engineering Laboratory', 'ce342', 1, 5, NULL, 'Geotechnical Engineering Laboratory ce342 ', '2018-06-21 15:37:41', '2018-06-21 15:37:41'),
(52, 'Project planning and Construction Management', 'ce401', 1, 7, 'Project planning and evaluation; feasibility reports; cash flows, pay\r\nback period, internal rate of return; benefit-cost ratio; cost-benefit\r\nanalysis case studies;\r\nPlanning and scheduling, PERT, CPM; resource scheduling; linear\r\nprogramming and application.90\r\nPrinciples of management; construction management: principles,\r\nproject organization, methods and practices, technology,\r\nmanagement of materials and equipments, site management, contracts\r\nand specifications, inspection and quality control, safety, economy.\r\nConflict management; psychology in administration: human factors\r\nin management; human resource management.\r\nDemand forecasting; inventory control; stores management;\r\nprocurement; legal issues in construction; environmental regulations.', 'Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay\r\nback period, internal rate of return; benefit-cost ratio; cost-benefit\r\nanalysis case studies;\r\nPlanning and scheduling, PERT, CPM; resource scheduling; linear\r\nprogramming and application.90\r\nPrinciples of management; construction management: principles,\r\nproject organization, methods and practices, technology,\r\nmanagement of materials and equipments, site management, contracts\r\nand specifications, inspection and quality control, safety, economy.\r\nConflict management; psychology in administration: human factors\r\nin management; human resource management.\r\nDemand forecasting; inventory control; stores management;\r\nprocurement; legal issues in construction; environmental regulations.', '2018-06-21 15:38:47', '2018-10-22 08:28:06'),
(53, 'Structural Analysis and Design II', 'ce411', 1, 7, 'Analysis of statically indeterminate beams and frames by moment\r\ndistribution, consistent deformation/flexibility and stiffness methods;\r\nalgorithms for implementing direct stiffness method in computer;\r\ninfluence lines of statically indeterminate beams and frames.', 'Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment\r\ndistribution, consistent deformation/flexibility and stiffness methods;\r\nalgorithms for implementing direct stiffness method in computer;\r\ninfluence lines of statically indeterminate beams and frames.', '2018-06-21 15:39:06', '2018-10-22 08:28:34'),
(54, 'Foundation Engineering', 'ce441', 1, 7, 'Soil investigation techniques; types of foundations; bearing capacity\r\nof shallow and deep foundations; settlement and distortion of\r\nfoundations; design and construction of footings, rafts and piles;\r\nslope stability analyses.', 'Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity\r\nof shallow and deep foundations; settlement and distortion of\r\nfoundations; design and construction of footings, rafts and piles;\r\nslope stability analyses.', '2018-06-21 15:39:24', '2018-10-22 08:29:02'),
(55, 'Transportation Engineering II: Pavement Design and Railway Engineering', 'ce451', 1, 7, 'Pavement materials: bituminous binders, cement, aggregates,\r\nembankment material, soil stabilization; mix design methods; low\r\ncost roads; flexible and rigid pavement: pavement components and\r\nfunctions, pavement design and construction, road maintenance;\r\nrailway engineering: general requirements, rolling stock and tracks,\r\nstations and yards, points and crossings, signaling, maintenance\r\noperations.', 'Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,\r\nembankment material, soil stabilization; mix design methods; low\r\ncost roads; flexible and rigid pavement: pavement components and\r\nfunctions, pavement design and construction, road maintenance;\r\nrailway engineering: general requirements, rolling stock and tracks,\r\nstations and yards, points and crossings, signaling, maintenance\r\noperations.', '2018-06-21 15:39:45', '2018-10-22 08:29:26'),
(56, 'Hydrology, Irrigation and Flood Management', 'wre451', 1, 7, 'Hydrologic cycle; hydrologic measurement: precipitation, evaporation\r\nand stream flow; hydrographs; plant-soil-water relationship;\r\nconsumptive use and estimation of irrigation water requirements;\r\nmethods of irrigation; quality of irrigation water; problems of\r\nirrigated land; flood and its management.', 'Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation\r\nand stream flow; hydrographs; plant-soil-water relationship;\r\nconsumptive use and estimation of irrigation water requirements;\r\nmethods of irrigation; quality of irrigation water; problems of\r\nirrigated land; flood and its management.', '2018-06-21 15:40:09', '2018-10-22 08:29:51'),
(57, 'Transportation Engineering Sessional I: Highway Materials and Traffic Engineering Design', 'ce452', 1, 7, 'Testing and quality control of highway materials; bituminous mix\r\ndesign; roadway traffic and capacity analysis; computer models and\r\napplication packages.', 'Transportation Engineering Sessional I: Highway Materials and Traffic Engineering Design ce452 Testing and quality control of highway materials; bituminous mix\r\ndesign; roadway traffic and capacity analysis; computer models and\r\napplication packages.', '2018-06-21 15:40:25', '2018-10-22 08:30:11'),
(58, 'Project and Thesis', 'ce400', 1, 7, 'Experimental and theoretical investigation of various topics in\r\nstructural engineering, environmental engineering, transportation\r\nengineering and geotechnical engineering. Individual or group study\r\nof one or more topics from any of the above fields. The students will\r\nbe required to submit thesis/project report at the end of the work.', 'Project and Thesis ce400 Experimental and theoretical investigation of various topics in\r\nstructural engineering, environmental engineering, transportation\r\nengineering and geotechnical engineering. Individual or group study\r\nof one or more topics from any of the above fields. The students will\r\nbe required to submit thesis/project report at the end of the work.', '2018-06-21 15:40:42', '2018-10-22 08:30:36'),
(59, 'Practical Surveying', 'ce104', 1, 4, NULL, 'Practical Surveying ce104 ', '2018-06-21 15:41:16', '2018-06-21 15:41:16'),
(60, 'Concrete Structures Design Sessional II', 'ce410', 1, 7, 'Computer applications in the analysis of buildings and PC girder\r\nbridges; design of multistoried RCC frame residential building and\r\nsimple span PC girder bridge.', 'Concrete Structures Design Sessional II ce410 Computer applications in the analysis of buildings and PC girder\r\nbridges; design of multistoried RCC frame residential building and\r\nsimple span PC girder bridge.', '2018-10-22 06:42:33', '2018-10-22 06:42:33'),
(61, 'Project and Thesis', 'ce400', 1, 8, NULL, 'Project and Thesis ce400 ', '2019-06-08 10:57:43', '2019-06-08 10:57:43'),
(62, 'Socio-economic Aspects of Development Projects', 'ce403', 1, 8, NULL, 'Socio-economic Aspects of Development Projects ce403 ', '2019-06-08 10:58:01', '2019-06-08 10:58:01'),
(63, 'Business and Career Development', 'ce405', 1, 8, NULL, 'Business and Career Development ce405 ', '2019-06-08 10:58:21', '2019-06-08 10:58:21'),
(64, 'Introduction to Steel-Concrete Composite Structures', 'ce413', 1, 8, NULL, 'Introduction to Steel-Concrete Composite Structures ce413 ', '2019-06-08 10:59:06', '2019-06-08 10:59:06'),
(65, 'Prestressed Concrete', 'ce415', 1, 8, NULL, 'Prestressed Concrete ce415 ', '2019-06-08 10:59:24', '2019-06-08 10:59:24'),
(66, 'Introduction to Finite Element Method', 'ce419', 1, 8, NULL, 'Introduction to Finite Element Method ce419 ', '2019-06-08 10:59:53', '2019-06-08 10:59:53'),
(67, 'Dynamics of Structures', 'ce421', 1, 8, NULL, 'Dynamics of Structures ce421 ', '2019-06-08 11:00:09', '2019-06-08 11:00:09'),
(68, 'Computer Aided Analysis and Design of Structures Sessional', 'ce412', 1, 8, NULL, 'Computer Aided Analysis and Design of Structures Sessional ce412 ', '2019-06-08 11:00:23', '2019-06-08 11:00:23'),
(69, 'Solid and Hazardous Waste Management', 'ce433', 1, 8, NULL, 'Solid and Hazardous Waste Management ce433 ', '2019-06-08 11:01:12', '2019-06-08 11:01:12'),
(70, 'Environmental Pollution Management', 'ce435', 1, 8, NULL, 'Environmental Pollution Management ce435 ', '2019-06-08 11:01:28', '2019-06-08 11:01:28'),
(71, 'Environmental and Sustainable Management', 'ce437', 1, 8, NULL, 'Environmental and Sustainable Management ce437 ', '2019-06-08 11:01:41', '2019-06-08 11:01:41'),
(72, 'Design of Water Supply, Sanitation and Sewerage Systems', 'ce432', 1, 8, NULL, 'Design of Water Supply, Sanitation and Sewerage Systems ce432 ', '2019-06-08 11:01:56', '2019-06-08 11:01:56'),
(73, 'Earth Retaining Structures', 'ce443', 1, 8, NULL, 'Earth Retaining Structures ce443 ', '2019-06-08 11:02:13', '2019-06-08 11:02:13'),
(74, 'Elementary Soil Dynamics', 'ce445', 1, 8, NULL, 'Elementary Soil Dynamics ce445 ', '2019-06-08 11:02:30', '2019-06-08 11:02:30'),
(75, 'Soil-water Interaction', 'ce447', 1, 8, NULL, 'Soil-water Interaction ce447 ', '2019-06-08 11:02:42', '2019-06-08 11:02:42'),
(76, 'Geotechnical Engineering Design Sessional', 'ce442', 1, 8, NULL, 'Geotechnical Engineering Design Sessional ce442 ', '2019-06-08 11:02:57', '2019-06-08 11:02:57'),
(77, 'Transportation Engineering III: Traffic Engineering Design and Management', 'ce453', 1, 8, NULL, 'Transportation Engineering III: Traffic Engineering Design and Management ce453 ', '2019-06-08 11:03:24', '2019-06-08 11:03:24'),
(78, 'Transportation Engineering IV: Pavement Management, Drainage and Airport', 'ce455', 1, 8, NULL, 'Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ', '2019-06-08 11:03:38', '2019-06-08 11:03:38'),
(79, 'Transportation Engineering V: Urban Transportation Planning and Management', 'ce457', 1, 8, NULL, 'Transportation Engineering V: Urban Transportation Planning and Management ce457 ', '2019-06-08 11:03:51', '2019-06-08 11:03:51'),
(80, 'Transportation Engineering Sessional II: Pavement Design and Traffic Studies', 'ce454', 1, 8, NULL, 'Transportation Engineering Sessional II: Pavement Design and Traffic Studies ce454 ', '2019-06-08 11:04:09', '2019-06-08 11:04:09'),
(81, 'Flood Mitigation and Management', 'wre405', 1, 8, NULL, 'Flood Mitigation and Management wre405 ', '2019-06-08 11:04:32', '2019-06-08 11:04:32'),
(82, 'Ground Water Engineering', 'wre407', 1, 8, NULL, 'Ground Water Engineering wre407 ', '2019-06-08 11:04:44', '2019-06-08 11:04:44'),
(83, 'River Engineering', 'wre409', 1, 8, NULL, 'River Engineering wre409 ', '2019-06-08 11:05:04', '2019-06-08 11:05:04'),
(84, 'Hydraulic Structures', 'wre411', 1, 8, NULL, 'Hydraulic Structures wre411 ', '2019-06-08 11:05:18', '2019-06-08 11:05:18'),
(85, 'Coastal Engineering', 'wre413', 1, 8, NULL, 'Coastal Engineering wre413 ', '2019-06-08 11:05:31', '2019-06-08 11:05:31'),
(86, 'Water Resources Engineering Sessional', 'wre412', 1, 8, NULL, 'Water Resources Engineering Sessional wre412 ', '2019-06-08 11:05:44', '2019-06-08 11:05:44');";


        DB::statement($courseSql);
    }
}
