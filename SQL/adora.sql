-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 10:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adora`
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(4, 'aaa', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', NULL, '5e86b6b4bd5701585886900.jpg', 0, '2020-04-02 22:38:22', NULL);

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
(1, NULL, 'safana@gmail.com', '1111111111', 'fhfg', 'dghfg', '2020-04-02 00:50:57', NULL),
(2, 'Safana Banu T.P', 'safanabanu@gmail.com', '66667777', 'sdgdgdf', 'dsgfh', '2020-04-02 00:51:28', NULL),
(3, 'sss', 'safana@gmail.com', '2345', 'dhgjk', 'gfhjkl', '2020-04-02 23:03:30', NULL),
(4, 'adsd', 's@gmail.com', '1111111111', 'fhmhgh', 'fghjmmgh', '2020-04-02 23:07:48', NULL),
(5, 'Safana Banu', 'safanabanu@gmail.com', '2345', 'tyiuti', 'tyii', '2020-04-02 23:09:04', NULL),
(6, 'Safana Banu', 'safana@gmail.com', '2345', 'sgfhjk', 'dghj', '2020-04-03 02:32:44', NULL),
(7, 'adsd', 'safana@gmail.com', '2345', 'xgchjk', 'fghjk', '2020-04-03 02:34:09', NULL),
(8, 'Safana Banu', 'safanabanu@gmail.com', '2345', 'fghjbk', 'sghjkl', '2020-04-03 02:47:45', NULL),
(9, 'sss', 's@gmail.com', '22', 'rgthjkl', 'rtghjk', '2020-04-03 02:48:01', NULL),
(10, 'adsd', 'safana@gmail.com', '2345', 'fghjk', 'dgfhjk', '2020-04-03 03:00:51', NULL),
(11, 'adsd', 's@gmail.com', '2345', 'gfhj', 'dgfhj', '2020-04-03 03:12:34', NULL),
(12, 'sss', 'safana@gmail.com', '111', 'gdhjkl', 'tryhjkl', '2020-04-03 03:14:37', NULL);

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
(1, 'ssss', '5e808f656a9401585483621.jpg', '2020-03-29 06:36:08', '2020-03-29 06:37:01'),
(2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '5e85bef2f13d61585823474.png', '2020-04-02 05:01:15', NULL),
(3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '5e85bf161dea91585823510.jpg', '2020-04-02 05:01:50', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casestudies`
--

INSERT INTO `casestudies` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(3, 'dgf', 'fdhf', 'fghfg', '<p><br></p>', '5e7f4ef5bbeaf1585401589.jpg', 0, '2020-03-27 19:49:49', '2020-03-31 01:22:28'),
(4, 'dggfbh', 'dfg', 'dy', '<p><br></p>', '5e8390d1c68691585680593.jpg', 0, '2020-03-31 01:19:53', '2020-03-31 01:22:19'),
(5, 'fsgff', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing a', NULL, '5e858ff88dc441585811448.jpg', 0, '2020-04-02 01:40:49', NULL);

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
(1, '5e85934d9f23a1585812301.png', '2020-04-02 01:55:01', NULL),
(2, '5e859358220f11585812312.png', '2020-04-02 01:55:12', NULL),
(3, '5e8593756e1d01585812341.jpg', '2020-04-02 01:55:41', NULL),
(4, '5e85c9f8aaaef1585826296.png', '2020-04-02 05:48:17', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consulting`
--

INSERT INTO `consulting` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(2, 'gdg', 'ghkg', 'ghk', NULL, '5e849a4b9dccd1585748555.jpg', 0, '2020-03-31 20:12:35', '2020-03-31 20:12:49'),
(3, 'sss', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing a', NULL, '5e85b6d4f1f511585821396.jpg', 0, '2020-04-02 04:26:37', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracting`
--

INSERT INTO `contracting` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(2, 'rrr', 'gh', 'ghj', NULL, '5e849a9c7b78a1585748636.jpg', 0, '2020-03-31 20:13:56', NULL),
(3, 'ttt', 'Lorem Ipsum is simply dummy text', 'It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout. The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters, as oppose', NULL, '5e85b8f3c3bfa1585821939.jpg', 0, '2020-04-02 04:35:40', NULL);

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
(4, '5e859fad6f3d91585815469.png', '2020-04-02 02:47:49', NULL),
(5, '5e859fb75801d1585815479.png', '2020-04-02 02:47:59', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_automation`
--

INSERT INTO `it_automation` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(1, 'tyy', 'qqqqqqqq', 'sdgs', '<p>dfsfsd</p>', '5e80da4a5c4681585502794.jpg', 0, '2020-03-28 23:56:35', '2020-03-28 23:59:48'),
(2, 'gfffg', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing a', NULL, '5e85b45b517ed1585820763.jpg', 0, '2020-04-02 04:16:07', NULL);

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
  `resume` text NOT NULL,
  `filename` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_vacancy_form`
--

INSERT INTO `job_vacancy_form` (`id`, `name`, `email`, `phone`, `applyingfor`, `resume`, `filename`, `created_at`, `updated_at`) VALUES
(1, NULL, 'safanabanu@gmail.com', '1111111111', '1111111111', '5e8627b186c671585850289.pdf', 'safanabanu.pdf', '2020-04-02 00:28:09', NULL),
(2, 'Safana Banu', 'safana@gmail.com', '66667777', 'dfghjkdfghj', '5e862a8848d2d1585851016.pdf', 'safanabanu.pdf', '2020-04-02 00:40:16', NULL),
(3, 'Safana Banu', 'safana@gmail.com', '2345', 'awrwse', '5e86ef80483bc1585901440.pdf', 'safanabanu.pdf', '2020-04-03 02:40:40', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(10, 'ccc', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', '<p><div class=\"row images_list mt-5 justify-content-center\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; justify-content: center !important; margin-top: 3rem !important; color: rgb(33, 37, 41); font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div class=\"row mt-5 summernote_text\" style=\"box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; margin-top: 3rem !important; color: rgb(33, 37, 41); font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"col-md-12\" style=\"box-sizing: border-box; position: relative; width: 1140px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%;\"><h4 class=\"font-weight-bold pb-2\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 700 !important; line-height: 1.2; font-size: 1.5rem; padding-bottom: 0.5rem !important;\">It is a long established fact that</h4><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 16px; font-weight: 500; color: rgb(114, 114, 114); text-align: justify; line-height: 28px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 16px; font-weight: 500; color: rgb(114, 114, 114); text-align: justify; line-height: 28px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p><ul class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;\"><li style=\"box-sizing: border-box;\">It is a long established fact that</li><li style=\"box-sizing: border-box;\">It is a long established</li><li style=\"box-sizing: border-box;\">It is a long</li></ul></div></div>', '5e85c42531ec01585824805.png', 0, '2020-04-02 05:23:25', '2020-04-03 00:05:25'),
(11, 'bbb', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', NULL, '5e86cc11b8ff71585892369.jpg', 0, '2020-04-03 00:09:31', NULL),
(12, 'aaa', 'Ab esse perspiciatis', 'Lorem Ipsum is simply dummy text of the printing a', NULL, '5e86ccb1f347f1585892529.jpg', 0, '2020-04-03 00:12:10', NULL),
(13, 'lorem-ipsum-is-simply-dummy-text', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', '<p>dddddd</p>', '5e86d72ee0a6b1585895214.png', 0, '2020-04-03 00:56:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newthoughts`
--

INSERT INTO `newthoughts` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(4, 'gghh', 'Ab esse perspiciatis', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', '<p>saefrhffgutyuyuouipljhkjhgqwreewytifhopjhgcfzxvbnnmafghjkytfd</p>', '5e857f3179ad91585807153.jpg', 0, '2020-04-02 00:29:14', '2020-04-03 01:33:11'),
(5, 'hhhh', 'Ab esse perspiciatis', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', NULL, '5e8581e3a86681585807843.jpg', 0, '2020-04-02 00:40:44', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoingprojects`
--

INSERT INTO `ongoingprojects` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(2, 'ffdff', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, '5e8584952f6c91585808533.jpg', 0, '2020-04-02 00:52:13', NULL),
(3, 'yyyy', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', NULL, '5e8584cbedb181585808587.jpg', 0, '2020-04-02 00:53:08', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(2, 'hghh', 'qqq', 'fed', '<p>edaf</p>', '5e81b36aae9b11585558378.jpg', 0, '2020-03-30 03:22:58', '2020-03-30 03:23:13'),
(3, 'hhhh', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', NULL, '5e85bdd2233e11585823186.jpg', 0, '2020-04-02 04:56:26', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_responsabilities`
--

INSERT INTO `social_responsabilities` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(4, 'gggg', 'fgj', 'fjgj', '<p><br></p>', '5e8386547eab11585677908.jpg', 0, '2020-03-31 00:35:08', '2020-03-31 00:35:16'),
(5, 'hhhh', 'hgf', 'jhb', NULL, '5e84a0771252a1585750135.jpg', 0, '2020-03-31 20:38:55', NULL),
(6, 'gfgghh', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing a', NULL, '5e85a1370f3621585815863.jpg', 0, '2020-04-02 02:54:23', NULL);

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
(1, 'Safana Banu', 'php', '5e859842487d01585813570.jpg', '2020-04-02 02:16:10', NULL),
(2, 'shahad', 'CMO', '5e8598ab31c7c1585813675.png', '2020-04-02 02:17:56', NULL),
(3, 'Shad Tharuvara', 'Business Consultant', '5e863655a9cb81585854037.jpg', '2020-04-02 01:30:40', NULL),
(4, 'Midhun Punathil', 'Consultant –Oman', '5e8636ae8fb081585854126.jpg', '2020-04-02 01:32:07', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trading`
--

INSERT INTO `trading` (`id`, `seo_url`, `title`, `description`, `summary`, `image`, `knowmore_button`, `created_at`, `updated_at`) VALUES
(2, 'fggg', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', NULL, '5e85bc974ea801585822871.jpg', 0, '2020-04-02 04:51:11', NULL);

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
(1, 'Safana Banu', 'safanabanu@gmail.com', NULL, '$2y$10$VzLjenHahBKqskS7xC8fhumujl38kbmC2KTZVW7/TUA2qVgj4uae6', NULL, NULL, '2020-03-31 01:24:13');

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
-- Indexes for table `it_automation`
--
ALTER TABLE `it_automation`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `become_partner_form`
--
ALTER TABLE `become_partner_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `casestudies`
--
ALTER TABLE `casestudies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consulting`
--
ALTER TABLE `consulting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contracting`
--
ALTER TABLE `contracting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_of_companies`
--
ALTER TABLE `group_of_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `it_automation`
--
ALTER TABLE `it_automation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_vacancy_form`
--
ALTER TABLE `job_vacancy_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `landing`
--
ALTER TABLE `landing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newthoughts`
--
ALTER TABLE `newthoughts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ongoingprojects`
--
ALTER TABLE `ongoingprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_responsabilities`
--
ALTER TABLE `social_responsabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trading`
--
ALTER TABLE `trading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
