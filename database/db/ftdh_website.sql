-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 11:40 AM
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
(1, 'Fiber To Deca Home\'s', 'what.png', 'FTDH or Fiber to Deca Homes is an exclusive brand name for all Fiber to the Home Internet and Cable TV Services for 8990 Housing Development projects throughout the Philippines as part of its amenities and facilities.', '2019-05-13 23:10:30', '2019-05-15 22:42:33'),
(2, 'Fast and Reliable Fiber Connection', 'fast.png', 'With our state of the art fiber network, we can guarantee a fast and reliable connection for our valued subscribers', '2019-04-25 18:01:18', '2019-04-25 18:01:18'),
(3, 'No Data Capping', 'unlimited.png', 'No monthly cap. No ISP Service throttling. Enjoy your Unlimited Fiber Connection to the fullest.', '2019-04-25 18:02:24', '2019-04-25 18:02:24'),
(4, '24/7 Standby Technical Support', 'technical.png', 'All of our 8990 FTDH Services are with standby 24/7 Technical Support. We are caaasaommited to provide strong fiber connection and quality 24/7 Technical Support Services.', '2019-04-28 22:37:03', '2019-05-02 02:00:43');

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
(2, 'download.jpg', '2019-05-07 18:37:32', '2019-05-15 22:41:47');

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `number` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email_address`, `number`, `message`, `created_at`, `updated_at`) VALUES
(23, 'jeh', 'jehca.monroid@gmail.com', 9436609952, 'pwede magpataod hahhahaha', '2019-05-06 22:27:30', '2019-05-06 22:27:30'),
(24, 'carlo', 'carlo@gmail.com', 91547814657, 'akin lang si terdes', '2019-05-08 23:50:49', '2019-05-08 23:50:49'),
(26, 'carlo', 'carlo@gmail.com', 9436609952, 'PLDT Ano na san na internet namin gusto kona mag facebook gigilna gigil na ako', '2019-05-16 19:19:05', '2019-05-16 19:19:05');

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
(1, 'HOME', 'slide', '2019-04-16 05:35:48', '2019-05-10 17:51:54'),
(2, 'ABOUT US', 'about_us', '2019-05-17 00:20:38', '2019-05-17 00:20:38'),
(3, 'PLANS AND PACKAGES', 'plan_and_packages', '2019-04-16 06:07:34', '2019-05-16 01:55:13'),
(4, 'PROMOS AND OFFERS', 'promo', '2019-04-16 06:07:34', '2019-05-16 01:55:22'),
(7, 'OUR SITES', 'our_sites', '2019-04-16 06:09:34', '2019-05-07 17:30:15'),
(8, 'CONTACTS', 'contact', '2019-05-07 17:29:14', '2019-05-07 17:29:14');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `created_at`, `updated_at`) VALUES
(1, 'QUADPLAY', '2019-05-08 07:07:54', '2019-05-08 07:07:54'),
(2, 'TRIPLEPLAY', '2019-05-08 07:07:54', '2019-05-08 07:07:54'),
(3, 'DOUBLEPLAY', '2019-05-08 07:08:04', '2019-05-08 07:08:04');

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
(15, '3', 'UNLI PLAN 2949', '2019-05-08 07:17:24', '2019-05-08 07:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `plan_and_packages`
--

CREATE TABLE `plan_and_packages` (
  `id` int(11) NOT NULL,
  `package_id` varchar(255) NOT NULL,
  `information` varchar(255) DEFAULT NULL,
  `plan_id` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_and_packages`
--

INSERT INTO `plan_and_packages` (`id`, `package_id`, `information`, `plan_id`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '(Internet + Wifi + Cable TV + IP Phone)', '1', 'Up to 2Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', 'Avail Now!', '2019-05-08 23:44:02', '2019-05-08 23:44:02'),
(2, '1', '(Internet + Wifi + Cable TV + IP Phone)', '2', 'Up to 3Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', 'Avail Now!', '2019-05-08 23:44:22', '2019-05-08 23:44:22'),
(3, '1', '(Internet + Wifi + Cable TV + IP Phone)', '3', 'Up to 4Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', 'Avail Now!', '2019-05-08 23:44:57', '2019-05-08 23:44:57'),
(4, '1', '(Internet + Wifi + Cable TV + IP Phone)', '4', 'Up to 5Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', 'Not Available!', '2019-05-08 23:45:18', '2019-05-09 00:45:28'),
(5, '1', '(Internet + Wifi + Cable TV + IP Phone)', '5', 'Up to 6Mbps Unlimited Fiber Internet + Wifi Cable TV IP Phone', 'Avail Now!', '2019-05-08 23:45:37', '2019-05-08 23:45:37'),
(6, '2', '(Internet + Wifi + Cable TV + IP Phone)', '6', 'Up to 2Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', 'Avail Now!', '2019-05-08 23:46:03', '2019-05-08 23:46:03'),
(7, '2', '(Internet + Wifi + Cable TV + IP Phone)', '7', 'Up to 3Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', 'Avail Now!', '2019-05-08 23:46:20', '2019-05-08 23:46:20'),
(8, '2', '(Internet + Wifi + Cable TV + IP Phone)', '8', 'Up to 4Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', 'Avail Now!', '2019-05-08 23:46:41', '2019-05-08 23:46:41'),
(9, '2', '(Internet + Wifi + Cable TV + IP Phone)', '9', 'Up to 5Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', 'Avail Now!', '2019-05-08 23:47:06', '2019-05-08 23:47:06'),
(10, '2', '(Internet + Wifi + Cable TV + IP Phone)', '10', 'Up to 6Mbps Unlimited Fiber Internet + Wifi Cable TV or IP Phone', 'Avail Now!', '2019-05-08 23:47:27', '2019-05-08 23:47:27'),
(11, '3', '(Internet + Wifi)', '11', 'Up to 2Mbps Unlimited Fiber Internet + Wifi', 'Avail Now!', '2019-05-08 23:48:04', '2019-05-08 23:48:04'),
(12, '3', '(Internet + Wifi)', '12', 'Up to 3Mbps Unlimited Fiber Internet + Wifi', 'Avail Now!', '2019-05-08 23:48:22', '2019-05-08 23:48:22'),
(13, '3', '(Internet + Wifi)', '13', 'Up to 4Mbps Unlimited Fiber Internet + Wifi', 'Not Available!', '2019-05-08 23:48:49', '2019-05-09 00:45:39'),
(14, '3', '(Internet + Wifi)', '14', 'Up to 5Mbps Unlimited Fiber Internet + Wifi', 'Avail Now!', '2019-05-08 23:49:10', '2019-05-08 23:49:10'),
(15, '3', '(Internet + Wifi)', '15', 'Up to 6Mbps Unlimited Fiber Internet + Wifi', 'Avail Now!', '2019-05-08 23:49:32', '2019-05-08 23:49:32');

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
  `filename` varchar(250) DEFAULT NULL,
  `promo` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_and_offers`
--

INSERT INTO `promo_and_offers` (`id`, `filename`, `promo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pay_Early_and_Win_Raffle_Promo.jpg', 'Pay early to win many prizes', 'Not-Available', '2019-04-28 18:59:03', '2019-04-28 18:59:03'),
(2, '28685445_350627302089565_4494645951998197760_n.jpg', 'Graduation Promo', 'Not Available!', '2019-05-09 01:41:14', '2019-05-09 01:41:14'),
(3, 'Back_to_School_Promo.jpg', 'avail na mo! may free pa!', 'Available', '2019-04-28 18:45:39', '2019-04-28 18:45:39');

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
(2, 'banner1.jpg', '2019-04-30 08:05:40', '2019-04-30 08:05:40'),
(3, 'banner.jpg', '2019-05-05 17:47:31', '2019-05-05 17:47:31');

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
(2, 'jehcamonroid', 'jehcamonroid@yahoo.com', NULL, '$2y$10$3W/pwIEdXIspkZwyEouWb./LTly5FvHLxl9yTn58feHpZh/FDKj1a', 'YRFQ9olszL8aSeq0nSWfI3dLsuFjPfZNUlZeUCAb7M0X5c9Atw2T85LIecaU', '2019-04-28 22:15:36', '2019-04-28 22:15:36'),
(3, 'admin', 'admin@admin.com', NULL, '$2y$10$3ehEuct3taSK8KZdxBmbS.skk5h/vQvgYskDouyAE71ontr.kd..i', 'O42OE6N1bgnHNV8PylP7OmXXZoOnvj9dm9C7LbE9QAa2xAswv0OemkMHaL3A', '2019-04-30 01:01:45', '2019-04-30 01:01:45');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `our_sites`
--
ALTER TABLE `our_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `plan_and_packages`
--
ALTER TABLE `plan_and_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo_and_offers`
--
ALTER TABLE `promo_and_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
