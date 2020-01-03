-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 11:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftdh_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `details` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `details`, `created_at`, `updated_at`) VALUES
(1, 'FTDH or Fiber to Deca Homes is an exclusive brand name for all Fiber to the Home Internet and Cable TV Services for 8990 Housing Development projects throughout the Philippines as part of its amenities and facilities.', '2019-07-15 23:27:46', '2019-07-15 23:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `image`, `details`, `created_at`, `updated_at`) VALUES
(2, 'Fast and Reliable Fiber Connection', 'fast.png', 'With our state of the art fiber network, we can guarantee a fast and reliable connection for our valued subscribers', '2019-04-25 18:01:18', '2019-04-25 18:01:18'),
(3, 'No Data Capping', 'unlimited.png', 'No monthly cap. No ISP Service throttling. Enjoy your Unlimited Fiber Connection to the fullest.', '2019-04-25 18:02:24', '2019-04-25 18:02:24'),
(5, '24/7 STANDBY TECHNICAL SUPPORT', 'technical.png', 'All of our 8990 FTDH xcfefdeServices are with standby 24/7 Technical Support. We are committed to provide strong fiber connections and quality 24/7 Technical Support Services.', '2019-05-21 19:34:04', '2019-07-15 01:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `created_at`, `updated_at`) VALUES
(3, 'light.png', '2019-06-10 23:50:10', '2019-07-15 16:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Plan', '2019-05-08 04:12:40', '2019-05-08 04:12:40'),
(2, 'Packages', '2019-05-08 04:12:40', '2019-05-08 04:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_image` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `name_image`, `message`, `created_at`, `updated_at`) VALUES
(2, 'eddie', 'customer8.png', 'Excellent customer service; very reliable in attending my technical concerns. No hassle and they are just one call away. I would highly recommend their services to my family and friends.', '2019-06-24 00:56:18', '2019-06-10 20:01:08'),
(3, 'carlo', 'customer1.png', 'Excellent support. I was having an issue with their internet connection. I emailed support and had an answer and a solution within a half hour. Top notch!', '2019-06-24 00:56:22', '2019-06-10 18:50:32'),
(4, 'cindy', 'avatar-F.png', 'They have very accommodating staff. They attend to your concerns promptly and as best as they can. Keep up the good work. Thanks!', '2019-06-18 01:32:57', '2019-06-17 17:32:57'),
(5, 'jehca', 'customer9.png', 'Excellent customer service, you can rely to them at any time of the day with very accommodating staffs. Two thumbs up!', '2019-06-24 00:56:34', '2019-06-10 20:07:08'),
(6, 'mayseal', 'seal.png', 'Certainly a good company with accommodating staffs and teams.Very much satisfied with the services and products they offer.', '2019-06-24 00:56:28', '2019-06-13 00:29:58'),
(7, 'april', 'customer6.png', 'bravo!', '2019-06-24 00:56:40', '2019-06-10 23:01:46'),
(8, 'clarisse', 'groot.png', 'excellent award!', '2019-06-27 03:55:46', '2019-06-26 19:55:46'),
(9, 'Mark', 'avatar-M.png', 'I really admire their employee so biga', '2019-07-12 05:36:44', '2019-07-11 21:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email_address`, `subject`, `number`, `message`, `date_time`, `created_at`, `updated_at`) VALUES
(24, 'jehca', 'jehcamonroid@yahoo.com', 'hehe', 9424346724, 'redhorse!', '2019-07-11 09:11:09', '2019-07-10 17:11:09', '2019-07-10 17:11:09'),
(25, 'eddiemar', 'eddiemar@yahoo.com', 'huhu', 9176657842, 'santa claus', '2019-07-11 13:49:47', '2019-07-10 21:49:47', '2019-07-10 21:49:47'),
(26, 'cindy', 'baculi@yahoo.com', 'esperidion', 94243123444, 'baculiiiiii', '2019-07-11 13:53:18', '2019-07-10 21:53:18', '2019-07-10 21:53:18'),
(27, 'mayseal', 'lauron@yahoo.com', 'sorry!', 922456789, 'okey fine', '2019-07-11 13:55:18', '2019-07-10 21:55:18', '2019-07-10 21:55:18'),
(28, 'wesley', 'wesley@yahoo.com', 'heh', 123456, 'he', '2019-07-11 17:21:45', '2019-07-11 01:21:45', '2019-07-11 01:21:45'),
(30, 'Jenilyn', 'Gumahin@yahoo.com', 'dayleeeee!', 987456, 'alquilos!!!!!!!', '2019-07-15 10:31:05', '2019-07-14 18:31:05', '2019-07-14 18:31:05'),
(31, 'hoysad', 'Admin@admin.com', 'hoysad', 977243064577, 'hoysad', '2019-07-16 09:31:57', '2019-07-15 17:31:57', '2019-07-15 17:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `messenger` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `address`, `number`, `messenger`, `created_at`, `updated_at`) VALUES
(1, 'Rm 208 Krizia Bldg. Gorordo Avenue Cebu City', '639436609952', 'https://www.messenger.com/t/193250221160608', '2019-07-15 22:29:26', '2019-07-15 22:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '[\"download.jpg\"]', '2019-04-26 17:42:41', '2019-04-26 17:42:41'),
(2, '[\"download.jpg\"]', '2019-04-26 17:44:03', '2019-04-26 17:44:03'),
(3, '[\"download.jpg\"]', '2019-04-26 17:49:54', '2019-04-26 17:49:54'),
(4, '[\"slider3.jpg\"]', '2019-04-26 18:19:44', '2019-04-26 18:19:44'),
(5, '[\"slider3.jpg\"]', '2019-04-26 18:21:40', '2019-04-26 18:21:40'),
(6, '[\"slider2.jpg\"]', '2019-04-26 18:23:12', '2019-04-26 18:23:12'),
(7, '[\"slider4.png\"]', '2019-04-26 19:03:23', '2019-04-26 19:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_12_051802_create_about_us_table', 2),
(4, '2019_04_12_054716_create_products_table', 3),
(5, '2019_04_24_062844_plans', 4),
(6, '2019_04_24_071242_packages', 5),
(7, '2019_04_27_013438_create_forms_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` int(11) NOT NULL,
  `nav_name` varchar(100) NOT NULL,
  `nav_code` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `nav_name`, `nav_code`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'video-section', '2019-06-20 19:39:22', '2019-07-02 23:29:57'),
(2, 'ABOUT\r\n', 'about-us-section', '2019-06-20 19:27:07', '2019-06-20 19:27:07'),
(3, 'PLANS AND PACKAGES', 'plans-and-packages', '2019-06-20 19:26:27', '2019-07-02 23:32:27'),
(4, 'PROMO AND OFFERS', 'team-section', '2019-06-20 19:27:42', '2019-07-10 18:39:57'),
(5, 'SUBSCRIBER', 'our-client', '2019-06-10 21:19:35', '2019-06-20 18:51:47'),
(6, 'BLOG', 'blog-section', '2019-05-20 18:15:01', '2019-06-10 21:20:06'),
(7, 'CONTACTS', 'contact-section', '2019-06-20 19:32:53', '2019-06-20 19:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `our_sites`
--

CREATE TABLE `our_sites` (
  `id` int(11) NOT NULL,
  `name_of_site` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_sites`
--

INSERT INTO `our_sites` (`id`, `name_of_site`, `address`, `number`, `created_at`, `updated_at`) VALUES
(3, 'Urban Deca Homes Tipolo', 'Tipolo, Mandaue City, Cebu', 9162208639, '2019-05-07 05:02:12', '2019-05-06 21:02:12'),
(5, 'Urban Deca Homes Campville', 'Cupang, Muntinlupa City', 9166058784, '2019-05-06 21:04:19', '2019-05-06 21:04:19'),
(6, 'Urban Deca Homes Pavia Resort Residences', 'Pavia, Iloilo', 9055409504, '2019-05-10 19:51:02', '2019-05-10 19:51:02'),
(7, 'Urban Deca Homes Tisa', 'Tisa, Cebu City', 9324299473, '2019-05-11 04:08:48', '2019-05-06 21:00:51'),
(8, 'Urban Deca Homes Hampton', 'Imus, Cavite', 9322003960, '2019-05-13 17:31:26', '2019-05-13 17:31:26'),
(9, 'Urban Deca Homes Hernan Cortes', 'Kasambagan, Cebu City', 9429762731, '2019-05-13 17:32:29', '2019-05-13 17:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `data_filter` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `data_filter`, `class`, `created_at`, `updated_at`) VALUES
(1, 'QUADPLAY', '.data_quad', 'data_quad', '2019-05-22 01:55:56', '2019-05-08 07:07:54'),
(2, 'TRIPLEPLAY', '.data_triple', 'data_triple', '2019-05-22 01:57:39', '2019-05-08 07:07:54'),
(3, 'DOUBLEPLAY', '.data_double', 'data_double', '2019-05-22 01:57:45', '2019-05-08 07:08:04'),
(4, 'CABLE TV', '.data_cable', 'data_cable', '2019-05-22 01:57:50', '2019-05-21 16:00:00'),
(5, 'IP CAMERA', '.data_camera', 'data_camera', '2019-05-22 01:57:55', '2019-05-22 01:36:15'),
(6, 'IP PHONE', '.data_phone', 'data_phone', '2019-05-22 01:58:00', '2019-05-21 16:00:00'),
(7, 'PREPAID INTERNET', '.data_prepaid', 'data_prepaid', '2019-05-22 01:58:06', '2019-05-21 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner`, `created_at`, `updated_at`) VALUES
(10, 'gak.png', '2019-07-16 00:20:11', '2019-07-16 00:20:11'),
(11, 'globe.png', '2019-07-16 00:20:20', '2019-07-16 00:20:20'),
(12, 'itechrar.png', '2019-07-16 00:20:28', '2019-07-16 00:20:28'),
(13, 'jpsolar.png', '2019-07-16 00:20:36', '2019-07-16 00:20:36'),
(14, 'l_solar.png', '2019-07-16 00:20:48', '2019-07-16 00:20:48'),
(15, 'sevenseven.png', '2019-07-16 00:20:58', '2019-07-16 00:20:58'),
(17, 'shvtlogo.png', '2019-07-16 00:21:09', '2019-07-16 00:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `package_id` varchar(50) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `package_id`, `plan_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'UNLI PLAN 2279', '2019-05-08 07:14:22', '2019-05-08 07:14:22'),
(2, '1', 'UNLI PLAN 2779', '2019-05-08 07:14:22', '2019-05-08 07:14:22'),
(3, '1', 'UNLI PLAN 3229', '2019-05-08 07:14:47', '2019-05-08 07:14:47'),
(4, '1', 'UNLI PLAN 3629', '2019-05-08 07:14:47', '2019-05-08 07:14:47'),
(5, '1', 'UNLI PLAN 3979', '2019-05-08 07:15:18', '2019-05-08 07:15:18'),
(6, '2', 'UNLI PLAN 1699', '2019-05-08 07:15:18', '2019-05-08 07:15:18'),
(7, '2', 'UNLI PLAN 2199', '2019-05-08 07:15:38', '2019-05-08 07:15:38'),
(8, '2', 'UNLI PLAN 2649', '2019-05-08 07:15:38', '2019-05-08 07:15:38'),
(9, '2', 'UNLI PLAN 3049', '2019-05-08 07:16:03', '2019-05-08 07:16:03'),
(10, '2', 'UNLI PLAN 3399', '2019-05-08 07:16:03', '2019-05-08 07:16:03'),
(11, '3', 'UNLI PLAN 1249', '2019-05-08 07:16:21', '2019-05-08 07:16:21'),
(12, '3', 'UNLI PLAN 1749', '2019-05-08 07:17:07', '2019-05-08 07:17:07'),
(13, '3', 'UNLI PLAN 2199', '2019-05-08 07:17:07', '2019-05-08 07:17:07'),
(14, '3', 'UNLI PLAN 2599', '2019-05-08 07:17:24', '2019-05-08 07:17:24'),
(15, '3', 'UNLI PLAN 2949', '2019-05-08 07:17:24', '2019-05-08 07:17:24'),
(16, '7', 'PREPAID INTERNET', '2019-05-24 03:37:45', '2019-05-24 03:37:45'),
(17, '7', 'PREPAID INTERNET', '2019-05-24 03:37:45', '2019-05-24 03:37:45'),
(18, '7', 'PREPAID INTERNET', '2019-05-24 03:38:16', '2019-05-24 03:38:16'),
(19, '7', 'PREPAID INTERNET', '2019-05-24 03:38:16', '2019-05-24 03:38:16'),
(20, '5', 'Analog', '2019-05-24 03:38:23', '2019-05-24 03:38:23'),
(21, '5', 'IP', '2019-05-24 03:38:23', '2019-05-24 03:38:23'),
(22, '4', 'Cable', '2019-05-24 03:41:29', '2019-05-24 03:41:29'),
(23, '6', 'IP PHONE', '2019-05-24 03:55:33', '2019-05-24 03:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `plan_and_packages`
--

CREATE TABLE `plan_and_packages` (
  `id` int(11) NOT NULL,
  `package_id` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `plan_image` varchar(255) NOT NULL,
  `plan_id` varchar(255) NOT NULL,
  `details` varchar(650) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_and_packages`
--

INSERT INTO `plan_and_packages` (`id`, `package_id`, `information`, `plan_image`, `plan_id`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '(Internet + Wifi + Cable TV + IP Phone)', 'quadplay 1.png', '1', 'Up to 2Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', '5 Choices', '2019-05-08 23:44:02', '2019-05-08 23:44:02'),
(2, '1', '(Internet + Wifi + Cable TV + IP Phone)', 'quadplay 2.png', '2', 'Up to 3Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', '5 Choices', '2019-05-08 23:44:22', '2019-05-08 23:44:22'),
(3, '1', '(Internet + Wifi + Cable TV + IP Phone)', 'quadplay 3.png', '3', 'Up to 4Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', '5 Choices', '2019-05-08 23:44:57', '2019-05-08 23:44:57'),
(4, '1', '(Internet + Wifi + Cable TV + IP Phone)', 'quadplay 4.png', '4', 'Up to 5Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', '5 Choices', '2019-05-08 23:45:18', '2019-05-09 00:45:28'),
(5, '1', '(Internet + Wifi + Cable TV + IP Phone)', 'quadplay 5.png', '5', 'Up to 6Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', '5 Choices', '2019-05-08 23:45:37', '2019-05-08 23:45:37'),
(6, '2', '(Internet + Wifi + Cable TV + IP Phone)', 'tripleplay 1.png', '6', 'Up to 2Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', '5 Choices', '2019-05-08 23:46:03', '2019-05-08 23:46:03'),
(7, '2', '(Internet + Wifi + Cable TV + IP Phone)', 'tripleplay 2.png', '7', 'Up to 3Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', '5 Choices', '2019-05-08 23:46:20', '2019-05-08 23:46:20'),
(8, '2', '(Internet + Wifi + Cable TV + IP Phone)', 'tripleplay 3.png', '8', 'Up to 4Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', '5 Choices', '2019-05-08 23:46:41', '2019-05-08 23:46:41'),
(9, '2', '(Internet + Wifi + Cable TV + IP Phone)', 'tripleplay 4.png', '9', 'Up to 5Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', '5 Choices', '2019-05-08 23:47:06', '2019-05-08 23:47:06'),
(10, '2', '(Internet + Wifi + Cable TV + IP Phone)', 'tripleplay 5.png', '10', 'Up to 6Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', '5 Choices', '2019-05-08 23:47:27', '2019-05-08 23:47:27'),
(11, '3', '(Internet + Wifi)', 'doubleplay 1.png', '11', 'Up to 2Mbps Unlimited Fiber Internet + Wifi', '5 Choices', '2019-05-08 23:48:04', '2019-05-08 23:48:04'),
(12, '3', '(Internet + Wifi)', 'doubleplay 2.png', '12', 'Up to 3Mbps Unlimited Fiber Internet + Wifi', '5 Choices', '2019-05-08 23:48:22', '2019-05-08 23:48:22'),
(13, '3', '(Internet + Wifi)', 'doubleplay 3.png', '13', 'Up to 4Mbps Unlimited Fiber Internet + Wifi', '5 Choices', '2019-05-08 23:48:49', '2019-05-21 18:52:46'),
(14, '3', '(Internet + Wifi)', 'doubleplay 4.png', '14', 'Up to 5Mbps Unlimited Fiber Internet + Wifi', '5 Choices', '2019-05-08 23:49:10', '2019-05-08 23:49:10'),
(15, '3', '(Internet + Wifi)', 'doubleplay 5.png', '15', 'Up to 6Mbps Unlimited Fiber Internet + Wifi', '5 Choices', '2019-05-08 23:49:32', '2019-05-08 23:49:32'),
(17, '7', 'PREPAID INTERNET', 'internet_1day.png', '16', 'AVAILABLE AT URBAN DECA HOMES TISA ONLY', '4 Choices', '2019-05-22 09:12:55', '2019-05-22 09:12:55'),
(18, '7', 'PREPAID INTERNET', 'internet_3days.png', '17', 'AVAILABLE AT URBAN DECA HOMES TISA ONLY', '4 Choices', '2019-05-22 09:12:55', '2019-05-22 09:12:55'),
(19, '7', 'PREPAID INTERNET', 'internet_1week.png', '18', 'AVAILABLE AT URBAN DECA HOMES TISA ONLY', '4 Choices', '2019-05-22 09:12:55', '2019-05-22 09:12:55'),
(20, '7', 'PREPAID INTERNET', 'internet_1month.png', '19', 'AVAILABLE AT URBAN DECA HOMES TISA ONLY', '4 Choices', '2019-05-22 09:12:55', '2019-05-22 09:12:55'),
(21, '5', 'ANALOG', 'AnalogCamera.png', '20', '  SEC/G4KITM Indoor Camera (1pc)\r\n\r\n  SEC/G4KITM Outdoor Camera (1pc)\r\n\r\n  Coaxial cable w/ power adapter (2 rolls)\r\n\r\n  1TB Surveillance Hard Disk Drive (1pc)\r\n\r\n  DVR 4 Channels (1pc)\r\n\r\n  1:4 Splitter (1pc)', '2 Choices', '2019-05-22 09:19:04', '2019-05-22 09:19:04'),
(22, '5', 'IP', 'IPCamera.png', '21', 'IP Camera (1pc)\r\n\r\n 1m UTP Cable CAT6 (1pc)\r\n\r\n 32GB Micro SD Card (1 pc)\r\n\r\n Installation Materials (1 set)\r\n\r\n  (Tox and Screws, Bolt and Nut, Cable Tie)', '2 Choices', '2019-05-22 09:19:04', '2019-05-22 09:19:04'),
(23, '4', 'Cable', 'TV.png', '22', 'NEW & IMPROVED  CABLE TV PLAN', '1 Choices', '2019-05-23 19:53:52', '2019-05-23 20:54:43'),
(24, '6', 'IP PHONE', 'IPPhone.png', '23', 'IP PHONE  FREE SETUP AND CONFIGURATION  Available in Tripleplay (Internet + WiFi + IP Phone) and  Quadplay (Internet + WiFi + Cable TV + IP Phone)  bundles.', '1 Choices', '2019-05-23 19:55:59', '2019-05-23 19:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `detail`, `created_at`, `updated_at`) VALUES
(1, '\"FTDH or Fiber to Deca Homes is an exclusive brand name for all Fiber to the Home Internet and Cable TV Services for 8990 Housing Development projects throughout the Philippines as part of its amenities and facilities.\"', '2019-04-23 17:10:43', '2019-04-23 17:11:28'),
(2, '\"Fast and Reliable\r\nFiber Connection\r\nWith our state of the art fiber network, we can guarantee a fast and reliable connection for our valued subscribers.\"', '2019-04-23 17:10:51', '2019-04-23 17:10:51'),
(3, '\"No Data Capping\r\nNo monthly cap. No ISP Service throttling. Enjoy your Unlimited Fiber Connection to the fullest.\"', '2019-04-23 17:11:22', '2019-04-23 17:11:22'),
(4, '\"24/7 Standby\r\nTechnical Support\r\nAll of our 8990 FTDH Services are with standby 24/7 Technical Support. We are commited to provide strong fiber connection and quality 24/7 Technical Support Services.\"', '2019-04-23 17:11:38', '2019-04-23 17:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `promo_and_offers`
--

CREATE TABLE `promo_and_offers` (
  `id` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `promo` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL,
  `paragraph` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_and_offers`
--

INSERT INTO `promo_and_offers` (`id`, `filename`, `promo`, `status`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, '54278060_563079677510992_2622294842373308416_n.png', 'CCTV Camera Package', 'Available', 'Subscribe to any #8990FTDH Fiber Internet Plans and get additional 2 MBPS on top of your current subscription for 2 Months and FREE INSTALLATION when you purchase any CCTV Camera Package.\r\n\r\nThis offer is available at all 8990 FTDH Branches nationwide. For inquiries, feel free to visit our Data Centers or contact us at our hotline numbers.', '2019-04-28 18:59:03', '2019-06-24 19:17:45'),
(2, '58430333_582177412267885_2949694822048333824_n.png', 'Intercom in Urban Deca', 'Available', 'Concerns on security, maintenance facilities, property management, or simply your need to communicate? Look no farther, 8990 FTDH intercom can help! For details, feel free to visit our Data Centers or contact us at our hotline numbers.', '2019-05-09 01:41:14', '2019-07-15 21:46:33'),
(3, '49585736_526917794460514_2589491093347237888_n.png', 'Smart DECA HOMES', 'Available', 'Convert your home to Smart Deca Homes now!\r\n\r\nTransitioning to a smarter home can improve your control over every aspect of how your house operates, and increase the safety and accessibility of it as well. Additionally, you can reap the benefits of a more efficient home, leading to savings in your energy and upkeep costs!\r\n\r\nFor inquiries, feel free to visit our 8990 FTDH Data Centers or contact us at our hotline numbers.', '2019-04-28 18:45:39', '2019-06-03 22:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image_slide` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_slide`, `created_at`, `updated_at`) VALUES
(20, 'banner.jpg', '2019-06-03 18:58:03', '2019-06-03 18:58:03'),
(21, 'cover.jpg', '2019-06-20 17:26:59', '2019-06-20 17:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'eddie', 'eddiemar.tagaro@gmail.com', NULL, '$2y$10$KRz/8eGjRuQiK7wdQyrsTu37lanE0JMWZJrOBR9oyy5mZOcpFyge.', 'lVlzvKhDZ9Qbxp8b8DIbWkLA3zWCgIPz33tRZe05jvJ6Aih9BZYAwysn5Y7v', '2019-04-23 16:25:45', '2019-04-23 16:25:45'),
(2, 'jehcamonroid', 'jehcamonroid@yahoo.com', NULL, '$2y$10$3W/pwIEdXIspkZwyEouWb./LTly5FvHLxl9yTn58feHpZh/FDKj1a', 'Z4piAkJ3aW6QARkrUVldE7V0nbfoXGTZ8DhV1tLWPVAtrgti73JxnmA7vqj3', '2019-04-28 22:15:36', '2019-04-28 22:15:36'),
(3, 'Admin', 'admin@admin.com', NULL, '$2y$10$jYm9daWCf5Pf3KndyiHSC.J.MQxqOoXROZtvDwLwgu8.719KfkwmK', 'PSfurL8u2dGwVAMAjddsOJFBosqrPBQnnWcJOQuMsTkPQp1rA4t9RvZuke9d', '2019-07-11 18:17:45', '2019-07-11 18:17:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_sites`
--
ALTER TABLE `our_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_and_packages`
--
ALTER TABLE `plan_and_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_and_offers`
--
ALTER TABLE `promo_and_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_sites`
--
ALTER TABLE `our_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `plan_and_packages`
--
ALTER TABLE `plan_and_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo_and_offers`
--
ALTER TABLE `promo_and_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
