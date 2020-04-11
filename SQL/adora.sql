-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2020 at 11:38 AM
-- Server version: 10.2.25-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strahost_adora`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'general-terms-conditions', 'General Terms & Conditions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard<br></p>', '5e8c526a53ada1586254442.jpg', 1, NULL, NULL, '2020-04-07 04:44:04', NULL),
(2, 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-lorem-ipsum-has-been-the-i', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard<br></p>', '5e8c52a13a18b1586254497.jpg', 1, NULL, NULL, '2020-04-07 04:44:57', '2020-04-07 05:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `become_partner_form`
--

CREATE TABLE `become_partner_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `become_partner_form`
--

INSERT INTO `become_partner_form` (`id`, `name`, `email`, `phone`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sabique', 'sabiquehiltop@gmail.com', '9846398798', 'malappuram', 'testst sttst', '2020-04-06 20:59:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Proserv ,A brand with Multi skilled Labours Focusing Small  Works of Carpentry, fabrication ,electrical ,Tiling ,painting plumbing,welding  and  Maintenance Services', '5e8e80990904c1586397337.jpeg', '2020-04-06 20:53:59', '2020-04-09 08:55:37'),
(2, 'SailorERP ,A Series of software Products from Adora Group ,Mainly focusing in ERP, Accounting ,Billing Software', '5e8e7eec388321586396908.jpeg', '2020-04-06 20:54:31', '2020-04-09 08:48:28'),
(3, 'Juxtapose : An Initiative from Adora Group for Advertising and Graphic Design', '5e8e8174c1b2a1586397556.png', '2020-04-09 08:59:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_pdf_files`
--

CREATE TABLE `business_pdf_files` (
  `id` int(11) NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bus_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_pdf_files`
--

INSERT INTO `business_pdf_files` (`id`, `filename`, `pdf_file`, `bus_type`) VALUES
(1, NULL, NULL, 'it_automation'),
(2, NULL, NULL, 'consulting'),
(3, NULL, NULL, 'contracting'),
(4, NULL, NULL, 'trading'),
(5, NULL, NULL, 'operations');

-- --------------------------------------------------------

--
-- Table structure for table `casestudies`
--

CREATE TABLE `casestudies` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casestudies`
--

INSERT INTO `casestudies` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(6, 'it-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable', 'It is a long established fact that a reader will be distracted by the readable', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</span><br></p>', '5e88adaf9750a1586015663.jpg', 1, NULL, NULL, '2020-04-03 22:24:23', NULL),
(7, 'it-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable-content-of-a-page-whe', 'OYO Fathima Palace Kottakkal', 'Premium Hotel Project', '<p><br></p>', '5e8e7d13707631586396435.png', 1, NULL, NULL, '2020-04-03 22:24:53', '2020-04-09 09:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '5e8e84e64af2b1586398438.png', '2020-04-05 21:13:41', '2020-04-09 09:13:58'),
(2, '5e8e84ced1c9c1586398414.jpg', '2020-04-05 21:13:57', '2020-04-09 09:13:34'),
(3, '5e8e84ba552a81586398394.jpg', '2020-04-05 21:14:04', '2020-04-09 09:13:14'),
(4, '5e8e848b6a9dc1586398347.png', '2020-04-05 21:14:09', '2020-04-09 09:12:27'),
(5, '5e8e83f2eeb7d1586398194.png', '2020-04-05 21:14:25', '2020-04-09 09:09:54'),
(6, '5e8e842b744c31586398251.jpg', '2020-04-09 09:10:51', NULL),
(7, '5e8e84fe03d331586398462.jpg', '2020-04-09 09:14:22', NULL),
(8, '5e8e8512e917e1586398482.jpg', '2020-04-09 09:14:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consulting`
--

CREATE TABLE `consulting` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contracting`
--

CREATE TABLE `contracting` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_of_companies`
--

CREATE TABLE `group_of_companies` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_of_companies`
--

INSERT INTO `group_of_companies` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, '5e8c5194570dd1586254228.png', '2020-04-07 04:40:28', NULL),
(4, '5e8c519e806891586254238.png', '2020-04-07 04:40:38', NULL),
(5, '5e8c51a5924c81586254245.png', '2020-04-07 04:40:45', NULL),
(6, '5e8c51abb80821586254251.png', '2020-04-07 04:40:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `slider_id` int(11) DEFAULT NULL,
  `table_name` varchar(25) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `slider_id`, `table_name`, `image`) VALUES
(51, 2, 'awards', '5e8d9601a1b2b1586337281.jpg'),
(56, 4, 'ongoingprojects', '5e8edfc4974671586421700.jpeg'),
(57, 4, 'ongoingprojects', '5e8edfd89feeb1586421720.jpeg'),
(58, 3, 'it_automation', '5e9142907bd441586578064.jpg'),
(63, 1, 'social_responsabilities', '5e915f617fb0c1586585441.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `it_automation`
--

CREATE TABLE `it_automation` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_automation`
--

INSERT INTO `it_automation` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'it-automation', 'CCTV Surveillance System Installation & monitoring', 'Project and Leasing contract for CCTV monitoring', '<p>CCTV (Closed-circuit television) monitoring is essential in ensuring the security of a property. Having CCTV cameras or even signs that warn about CCTV monitoring in visible places prevents vandalism and burglary. CCTV monitoring can also improve the safety of the people working in the premises. Typical CCTV-monitored premises include lobbies, entrances, IT rooms, loading bays and parking lots. \r\n</p><p>When making plans for a CCTV monitoring system, one has to take into account the technical requirements in terms of lighting and other conditions as well as the relevant regulation. For that reason one should always leave the planning and implementation to a professional. Regular maintenance will ensure that client equipment functions without problems throughout its entire life.\r\n</p><p>We are a vendor-independent system supplier and , we have a product portfolio that covers the needs of our clients today and also is future-proof and cost-effective over time. We have vendors such as: Lenel OnGuard, Mirasys NUUO, Prism, Indigo Vision, Milestone Bosch, Axis, Sony, Samsung, Panasonic, Pelco, Dahua and Teleste, \r\n</p><p>\r\n</p><p>\r\n</p><h1><b style=\"background-color: rgb(255, 255, 0);\">Our offering</b></h1><p>\r\n</p><ul><li>Advisory Services\r\n</li><li>Design and Engineering: planning of CCTV systems\r\n</li><li>Project Execution: installation of CCTV systems \r\n</li><li>Technical Maintenance: repair and maintenance of CCTV systems\r\n</li><li>Retail of CCTV monitoring systems\r\n</li><li>Hosted video solutions\r\n</li></ul><h1><b><span style=\"background-color: rgb(255, 255, 0);\">Leasing contract for CCTV monitoring</span>\r\n</b></h1><p>Our offering also includes CCTV monitoring services at a fixed monthly price. The contract covers the equipment, spare parts, on-site repair and annual maintenance.\r\n</p><p><br></p>', '5e913b76a0ab91586576246.jpg', 1, NULL, NULL, '2020-04-07 06:58:41', '2020-04-11 10:39:22'),
(2, 'wb-designing', 'IT Infrastructure Design and Consulting', 'Design, build and manage telecommunications infrastructure for reliable connectivity', '<p>Structured cabling provides the critical backbone of a communication system. Adora Infosolutions (AIS) understands the complex issues involved in planning, installing and maintaining network communication systems. With our expertise and experience, AIS provides our customers with the commitment that the telecommunications infrastructure, no matter how complex, will be designed, constructed and installed to meet current and future requirements.\r\n</p><h1><b style=\"background-color: rgb(255, 255, 0);\">Infrastructure Design and Consulting\r\n</b></h1><ul><li>Structured cabling system design\r\n</li><li>BICSI/RCDD expertise\r\n</li><li>Preparation of structured cabling specifications\r\n</li><li>Development of bid specifications and RFP packages\r\n</li><li>Planning, budgeting and engineering review\r\n</li><li>Construction plan review for EIA/TIA standard compliance\r\n</li><li>Database development for cable management</li></ul><h2></h2><h1><b style=\"background-color: rgb(255, 255, 0);\">Structured Cabling Installation</b></h1><ul><li>Installation of copper and fiber optic cable\r\n</li><li>Installation of air-blown fiber systems (eABF)\r\n</li><li>Installation of wiring racks, cabinets and patch panels\r\n</li><li>Manufacturer certified installers offering OEM-extended warranties\r\n</li><li>Cable certification and compliance testing\r\n</li><li>Project management services</li></ul>', '5e913642996da1586574914.jpg', 1, NULL, NULL, '2020-04-07 07:00:22', '2020-04-11 10:41:26'),
(3, 'intercom-system-epabx-services', 'Intercom system & Epabx Services', 'All Brand Complete Solution Provider', '<p></p><h1><b>Intercom system &amp; Epabx Services\r\n</b></h1><div>The Electronic Private Automatic Branch Exchange is a complex in-house telephone switching system. This includes choice of wireless epabx services of all brands and prompts after sales and service.\r\n</div><div>Types of EPABX Systems\r\n</div><div>EPABX enables easier communication in an organization. It is very useful office equipment through which multiple line extensions can be given from a single telephonic line. Different phone users can be managed from a single business phone line. The services of office equipment suppliers can be availed to make use of EPABX systems.\r\n</div><h1><b style=\"background-color: rgb(255, 255, 0);\">EPABX Systems &amp;Types \r\n</b></h1><div>EPABX stands for Electronic Private Automatic Branch Exchange. There are 4 different types of EPABX systems based on the technology involved.\r\n</div><div>1. Analog PBX\r\n</div><div>• Uses “phone–box” system through which many phones are connected through phone lines.\r\n</div><div>• Requires a person to operate the switchboard controlling the calls.\r\n</div><div>• Companies providing service – Nortel, Toshiba, Panasonic.\r\n</div><div>2. Digital PBX\r\n</div><div>• Sound converted to digital signal and sent on a channel through circuit switching.\r\n</div><div>• It is the way contemporary phone companies adopt to connect to callers.\r\n</div><div>• Companies providing service - Uniphone Telecommunications, Rexon Technology and Panasonic.\r\n</div><div>3. IP PBX\r\n</div><div>• Phones are equipped with a network interface card and integrated into a network of phones.\r\n</div><div>• These are newer and less used than some of the older PBX systems.\r\n</div><div>• They are easily maintained, allow for applications to be added to them, and manage multiple simultaneous calls on a single network. As Voice over IP technology becomes more popular, these easy-to-maintain systems are being used more.\r\n</div><div>• A variant of IP PBX, called SIP PBX, exists which is used for multimedia communications on the same network.\r\n</div><div>• Service provider companies - 3Com, Inter-Tel and Cisco.\r\n</div><div>4. Hybrid PBX\r\n</div><div>• It is a digital PBX with IP PBX capabilities.\r\n</div><div>• Popular, as it allows users to have the best of both worlds.\r\n</div><div>• Older phones without a network chip can still be used, but they can also be upgraded to include network chips if the funds for an upgrade become available.\r\n</div><div>• Service provider companies - Toshiba, Inter-Tel, and Mitel.\r\n</div><div>The choice of the EPABX type has to be based on office needs and price affordability.\r\n</div><div>EPABX Manufacturers \r\n</div><div>In India, Multi-National Companies (MNC) as well as Domestic companies are key players in the business phone market. They are involved in manufacturing and supplying the EPABX system needs for organizations. The various companies can thus be categorized into two. The list goes thus.\r\n</div><h1><span style=\"background-color: rgb(255, 255, 0);\">MNC EPABX Manufacturers\r\n</span></h1><div>1. AVAYA GlobalConnect\r\n</div><div>• Biggest MNC PBX player in India.\r\n</div><div>• Own dealer network all over India.\r\n</div><div>2. Samsung\r\n</div><div>• Manufacture and sell in India.\r\n</div><div>• HCL is the distributor in India.\r\n</div><div>• All kinds of PBX – from analog to digital.\r\n</div><div>3. Alcatel\r\n</div><div>• Sells through dealers and value added resellers all over India.\r\n</div><div>• Various EPABX systems available.\r\n</div><div>4. AASTRA\r\n</div><div>• Sells through HCL Infosystem Ltd.\r\n</div><div>• Dealership all over India.\r\n</div><div>5. Siemens\r\n</div><div>• Sells through their subsidiary - Siemens India.\r\n</div><div>• Also have own dealer network for EPABX systems.\r\n</div><div>6. Panasonic\r\n</div><div>• Sell through own network.\r\n</div><div>7. Tadiran Telecom\r\n</div><div>• Israel based MNC.\r\n</div><div>• Dealers are HCL Infosystem and BPL telecom.\r\n</div><div>8. Karrel\r\n</div><div>• US based MNC\r\n</div><div>• Sell through Intellicon Pvt. Limited, based in Ahmedabad.\r\n</div><div>9. NEC\r\n</div><div>• Sell through tie up with Syntel, Arbind Mills Telecom division.\r\n</div><div>Indian EPABX Manufacturers\r\n</div><div>1. Coral Telecom\r\n</div><div>• Biggest PBX Company in India.\r\n</div><div>• Sell products ranging from small analog PBX to large VoIP based switches.\r\n</div><div>• Large clients are BSNL, Indian Railways, government departments, Public Sector units, Defence forces.\r\n</div><div>2. Accord\r\n</div><div>• Based in Meerut.\r\n</div><div>3. Matrix\r\n</div><div>• Second largest Indian PBX Company.\r\n</div><div>4. Centrex Telecom\r\n</div><div>• Hyderabad based company.\r\n</div><div>• Mainly manufacture low end analog PABX systems.\r\n</div><div>5. Crystal Digital Concepts\r\n</div><div>• Manufacture and sell analog and digital PBX systems with GSM connectivity.\r\n</div><div>6. Syntel Telecom\r\n</div><div>• Telecom division of Arbind Mills Limited.\r\n</div><div>• Manufacture smaller PBX machines.\r\n</div><div>• Have tied up with NEC for high end PBX systems.\r\n</div><h1><span style=\"background-color: rgb(255, 255, 0);\"><b>PBX functions\r\n</b></span></h1><div>Functionally, the PBX performs four main call processing duties:\r\n</div><div>Establishing connections (circuits) between the telephone sets of two users (e.g. mapping a dialed number to a physical phone, ensuring the phone isn\'t already busy)\r\n</div><div>Maintaining such connections as long as the users require them (i.e. channelling voice signals between the users) \r\n</div><div>Disconnecting those connections as per the user\'s requirement\r\n</div><div>Providing information for accounting purposes (e.g. metering calls)\r\n</div><div>In addition to these basic functions, PBXs offer many other calling features and capabilities, with different manufacturers providing different features in an effort to differentiate their products. Common capabilities include (manufacturers may have a different name for each capability):\r\n</div><div>Auto attendant\r\n</div><div>Auto dialing\r\n</div><div>Automatic call distributor\r\n</div><div>Automated directory services (where callers can be routed to a given employee by keying or speaking the letters of the employee\'s name)\r\n</div><div>Automatic ring back\r\n</div><div>Call accounting\r\n</div><div>Call blocking\r\n</div><div>Call forwarding on busy or absence\r\n</div><div>Call park\r\n</div><div>Call pick-up\r\n</div><div>Call transfer\r\n</div><div>Call waiting\r\n</div><div>Camp-on\r\n</div><div>Conference call\r\n</div><div>Custom greetings\r\n</div><div>Customised Abbreviated dialing (Speed Dialing)\r\n</div><div>Busy Override\r\n</div><div>Direct Inward Dialing\r\n</div><div>Direct Inward System Access (DISA) (the ability to access internal features from an outside telephone line)\r\n</div><div>Do not disturb (DND)\r\n</div><div>Follow-me, also known as find-me: Determines the routing of incoming calls. The exchange is configured with a list of numbers for a person. When a call is received for that person, the exchange routes it to each number on the list in turn until either the call is answered or the list is exhausted (at which point the call may be routed to a voice mail system).\r\n</div><div>Interactive voice response\r\n</div><div>Music on hold\r\n</div><div>Night service\r\n</div><div>Public address voice paging\r\n</div><div>Shared message boxes (where a department can have a shared voicemail box)\r\n</div><div>Voice mail\r\n</div><div>Voice message broadcasting\r\n</div><div>Welcome Message\r\n</div><div>\r\n</div><div><b><br></b></div>', '5e91404cd56611586577484.jpg', 1, NULL, NULL, '2020-04-11 10:58:04', '2020-04-11 11:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobvacancies`
--

CREATE TABLE `jobvacancies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `jobtype` varchar(12) NOT NULL,
  `location` varchar(250) NOT NULL,
  `summary` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobvacancies`
--

INSERT INTO `jobvacancies` (`id`, `title`, `jobtype`, `location`, `summary`, `created_at`, `update_at`) VALUES
(1, 'Web Designer', 'fulltime', 'Malappuram', '<p>malappuram district new job opening</p>', '2020-04-04 21:38:03', NULL),
(2, 'Developer', 'parttime', 'Calicut', '<p>dgdfgdfggdgdggdg dsffgdfgdfgdfgf</p>', '2020-04-04 21:38:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy_form`
--

CREATE TABLE `job_vacancy_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `applyingfor` text NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `resume` text NOT NULL,
  `filename` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_vacancy_form`
--

INSERT INTO `job_vacancy_form` (`id`, `name`, `email`, `phone`, `applyingfor`, `job_title`, `resume`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'sabique', 'sabiquehiltop@gmail.com', '9846398798', 'testests segsdgdsds', 'Web Designer', '5e8c8ec36b85a1586269891.pdf', 'Sabique-CV-2019_.pdf', '2020-04-06 21:01:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(15, '8-years-of-journey-a-passion-for-problem-solving', '8+ Years of Journey, A passion for problem solving', 'Our passion drives creativity and innovation, creating bold solutions for our clients.', NULL, '5e881b7e739e21585978238.png', 0, NULL, NULL, '2020-04-04 00:00:38', NULL),
(16, 'mrms-app-for-easy-partner-communication-and-transaction', 'Do More Business With MRMS App !', 'App for Business partnership', NULL, '5e8e6cbaa7c701586392250.jpg', 1, NULL, NULL, '2020-04-03 21:00:07', '2020-04-09 19:32:13'),
(17, 'general-terms-conditions', 'Coronavirus disease (COVID-19) outbreak', 'Getting your workplace ready in case COVID-19 arrives in your community', '<p><b>Develop a contingency and business continuity plan for an outbreak in the communities where your business operates</b>.<br></p><ul><li>The plan will help prepare your organisation for the possibility of an outbreak of COVID-19 in its workplaces or community. It may also be valid for other health emergencies.</li><li>The plan should address how to keep your business running even if a significant number of employees, contractors and suppliers cannot come to your place of business – either due to local restrictions on travel or because they are ill.</li><li>Inform your employees and their representatives as well as your contractors about the plan and make sure they are aware of what they need to do – or not do – under the plan. Emphasise key points such as the importance of staying away from work even if they have only mild symptoms or have had to take simple medication (e.g. paracetamol, ibuprofen) which may mask the symptoms.</li><li>Be sure your plan addresses sick leave arrangements (see #Certifying absence from work), and the mental health and social consequences of a case of COVID-19 in the workplace or in the community and offer information and support.</li><li>For small and medium-sized businesses without in-house occupational health support, consult the information available online from your occupational health service, public health and labour authorities in advance of any emergency. Consult any guidance given by your sectoral organisations (employers’ associations, chambers of commerce, sectoral social services).</li></ul>', '5e8e727b447921586393723.jpg', 1, NULL, NULL, '2020-04-03 21:01:32', '2020-04-09 19:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newthoughts`
--

CREATE TABLE `newthoughts` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newthoughts`
--

INSERT INTO `newthoughts` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(10, 'it-is-a-long-established-fact-that-a-reader-will-be-distracted', 'Multi Skilled Professional Labour\'s Training College', 'A single Labour can Do your Electrification Work,Ceiling Work ,Carpenter Work ,Fabrication Work and Painting Work', '<p><br></p>', '5e8e77aef19e91586395054.jpg', 1, NULL, NULL, '2020-04-03 22:21:08', '2020-04-09 08:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `ongoingprojects`
--

CREATE TABLE `ongoingprojects` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoingprojects`
--

INSERT INTO `ongoingprojects` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(4, 'it-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable', 'OYO Fathima Palace Expansion Project', '14 Rooms OYO Property', '<p><b>About Us\r\n</b></p><p>Adora was founded on 12th December 2011 at Kamala Building, Annie Hall Road Near Railway station Calicut by three colleagues of Hewlet Peckard(HP) service division,Mohammed Shad,Harish PA and Abdul Jaleel.The name Adora means gift and was suggested by HP service division senior engineer Mr.Baburaj which is derived from the word \'adorable’. Adora Started as small business of computer and printer service. Six months later Abdul Jaleel <span style=\"background-color: rgb(255, 255, 0);\">resigned from Adora team and we shrank into two but we got some corporate projects in 2012.Thus Adora became an end to end IT ser</span>vice provider by providing all IT related services to the public sector and corporate companies like India post,Bsnl, Indian railway, LSGD and DOKA GMBh. Then soon our business reached in Oman, Dubai and Saudi Arabia. In 2014 Harish PA resigned and the company was led by Mohammed Shad. Adora became managing partner during this period and completed several projects and maintenance contracts of India post,Doka,Wipro and nationalised banks.In 2014 Adora launched its first  sub brand ‘SailorERP’ software .In 2016 Mohammed Naseem joined as business consultant.Later he started software consultancy at Bahrain named Adora Ghanawi softwares. Adora became ISO certified in 2017 and in the same year Adora became OYO authorized vendor.Thus we took huge leaps into success. Adora became a turnkey contractor with 10+ subcontractors and 50+ labourers. The company slogan changed from Let\'s grow with technology into Featuring new methods. In 2017 Abid Pulikkal joined as project Manager for Interior Projects. In 2018 he completed his first Turnkey Project at Oyo property in Calicut airport, Malappuram .Soon he focused on interior projects and completed several projects including projects of Indigo Airways and Several OYO Rooms. In 2020 We launched one more brand ‘Proserv’ exclusive for all in one maintenance ,small and home works ,Our team opened an Administrative office of Adora Group at Karippur, near Calicut airport to manage all our firms which includes Adora Infosolutions ,Adora Contracting Co ,Adora Interior Solutions ,Famsum Ventures (P) Ltd. Now we are continuing our journey through the innovative path to \r\n</p><p><br></p>', '5e8e762c4efbe1586394668.jpg', 1, NULL, NULL, '2020-04-03 22:23:34', '2020-04-09 15:48:44'),
(5, 'general-terms-conditions', 'OYO Sapphire Residency', '16 Room Premium Hotel Turnkey Project', '<p><br></p>', '5e8e753ba50fa1586394427.jpeg', 0, NULL, NULL, '2020-04-05 22:34:10', '2020-04-09 08:07:07'),
(6, 'famsum-international-recreation-club', 'FAMSUM : International Recreation Club', 'Setting up an International master Club for Contecting Touring and adventure activities, Arts, Sports Recreation Programs', '<p>Hosting Clubs \r\n</p><p>•	Sports Clubs\r\n</p><p>•	Adventure Clubs \r\n</p><p>•	Touring Clubs \r\n</p><p>•	Agro Farming Clubs\r\n</p><p>•	Birds and animals Clubs\r\n</p><p>•	Photography Clubs\r\n</p><p>•	Health Care Clubs\r\n</p><p>•	Art Clubs\r\n</p><p>•	Food Club\r\n</p><p><br></p>', '5e8e76f18617a1586394865.jpeg', 0, NULL, NULL, '2020-04-09 08:14:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_responsabilities`
--

CREATE TABLE `social_responsabilities` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_responsabilities`
--

INSERT INTO `social_responsabilities` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'youth-day-august-2018', 'COVID-19 Outbreak: Homemade Face Mask Campaign', 'As efforts to contain the spread of COVID-19 continue and with critical shortages of Personal Protective Equipment', '<h1><b style=\"background-color: rgb(255, 255, 0);\">Masks - Fabric Ties</b>&nbsp;</h1><p>Materials\r\n</p><p>2 pieces of tightly woven cotton fabric (examples: clean pillow cases or 100% cotton t-shirts). Cut to 9” X 6” (Adult) or 7 ½” X 5” (Child).\r\n</p><p>Bias tape (either ½\" or 7/8\" as available) OR fabric\r\n</p><p>Tie Preparation\r\n</p><p>Bias tape: Four (4) 16” pieces of bias tape per mask\r\n</p><p>Fabric: Cut four (4) strips 2\" wide by 16\" long per mask</p>', '5e9150aebc6ab1586581678.jpg', 1, NULL, NULL, '2020-04-08 03:41:51', '2020-04-11 12:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Naseem Nanakkal', 'Consultant - Bahrain', '5e8c4f7adce9d1586253690.jpg', '2020-04-07 04:31:30', NULL),
(4, 'Midhun Punathil', 'Consultant –Oman', '5e8c4f9ddc73c1586253725.jpg', '2020-04-07 04:32:05', NULL),
(5, 'Harish PA', 'Project Manager PWD', '5e8c4faf80de71586253743.jpg', '2020-04-07 04:32:23', NULL),
(6, 'Abid Pulikkal', 'Project Manager – Interior', '5e8c4fbe0f6af1586253758.jpg', '2020-04-07 04:32:38', NULL),
(7, 'Shad Tharuvara', 'Business Consultant', '5e8c50124a1b51586253842.jpg', '2020-04-07 04:32:54', '2020-04-07 04:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `trading`
--

CREATE TABLE `trading` (
  `id` int(11) NOT NULL,
  `seo_url` text DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `summary` longtext DEFAULT NULL,
  `image` text NOT NULL,
  `knowmore_button` int(11) NOT NULL DEFAULT 0,
  `button_name` varchar(150) DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sabique', 'sabiquehiltop@gmail.com', NULL, '$2y$10$snUnJXe3UQWPmpsO4Ldyje6eAxbctRqJtYsoTXOAqN7eo3qOLZqxy', NULL, NULL, '2020-04-08 02:24:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `become_partner_form`
--
ALTER TABLE `become_partner_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_pdf_files`
--
ALTER TABLE `business_pdf_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casestudies`
--
ALTER TABLE `casestudies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consulting`
--
ALTER TABLE `consulting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracting`
--
ALTER TABLE `contracting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_of_companies`
--
ALTER TABLE `group_of_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_automation`
--
ALTER TABLE `it_automation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobvacancies`
--
ALTER TABLE `jobvacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancy_form`
--
ALTER TABLE `job_vacancy_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newthoughts`
--
ALTER TABLE `newthoughts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongoingprojects`
--
ALTER TABLE `ongoingprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `social_responsabilities`
--
ALTER TABLE `social_responsabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trading`
--
ALTER TABLE `trading`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `become_partner_form`
--
ALTER TABLE `become_partner_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_pdf_files`
--
ALTER TABLE `business_pdf_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `casestudies`
--
ALTER TABLE `casestudies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consulting`
--
ALTER TABLE `consulting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contracting`
--
ALTER TABLE `contracting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_of_companies`
--
ALTER TABLE `group_of_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `it_automation`
--
ALTER TABLE `it_automation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobvacancies`
--
ALTER TABLE `jobvacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_vacancy_form`
--
ALTER TABLE `job_vacancy_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `landing`
--
ALTER TABLE `landing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newthoughts`
--
ALTER TABLE `newthoughts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ongoingprojects`
--
ALTER TABLE `ongoingprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_responsabilities`
--
ALTER TABLE `social_responsabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trading`
--
ALTER TABLE `trading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
