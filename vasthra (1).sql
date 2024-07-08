-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 01:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vasthra`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `descript`, `created_at`, `updated_at`) VALUES
(1, 'Vasthralaya', 'Its a big collection of all variety of dressess\r\nWe Introducing a new brand Vathra', NULL, '2024-05-04 03:18:08'),
(2, 'Meghnalaya', 'We introducing a new brand \"MEGNALAYA\". THe main attraction of this brand is the nature of cloth.\r\nIts a combination of Pavithra and Chanderi silks.', NULL, NULL),
(4, 'Meghamalhar', 'New traditional art in sarees. We introduce a new brand \"Meghamalhar\". Its a combination of art murals , white and pink color', NULL, '2024-05-30 03:58:49'),
(5, 'Sindoora silks', 'Most purpose of wedding seasons. Made the combination of red and pink.....', NULL, '2024-05-30 03:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL DEFAULT 'admin',
  `pass` varchar(255) NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogins`
--

INSERT INTO `adminlogins` (`id`, `user`, `pass`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'cart',
  `category` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `userid`, `productid`, `status`, `category`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, '3', '2', 'order', '6', '2', '11000', NULL, '2024-06-06 22:17:45'),
(2, '3', '3', 'order', '7', '2', '50000', NULL, '2024-06-06 22:17:45'),
(3, '3', '1', 'order', '5', '2', '17000', NULL, '2024-06-06 22:17:45'),
(6, '2', '2', 'order', '6', '2', '11000', NULL, '2024-06-10 05:29:36'),
(9, '1', '1', 'order', '5', '5', '42500', NULL, '2024-06-10 04:08:55'),
(10, '1', '2', 'order', '6', '3', '16500', NULL, '2024-06-10 04:08:55'),
(11, '1', '2', 'order', '6', '5', '27500', NULL, '2024-06-10 04:08:55'),
(15, '2', '3', 'order', '7', '2', '50000', NULL, '2024-06-10 05:29:36'),
(18, '2', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 05:29:36'),
(20, '1', '2', 'order', '6', '1', '5500', NULL, '2024-06-10 04:08:55'),
(21, '4', '1', 'order', '5', '3', '25500', NULL, '2024-06-11 04:20:25'),
(22, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(23, '4', '3', 'order', '7', '1', '25000', NULL, '2024-06-11 04:20:25'),
(24, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(25, '4', '4', 'order', '3', '1', '5500', NULL, '2024-06-11 04:20:25'),
(26, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(27, '1', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 04:08:55'),
(30, '1', '2', 'order', '6', '2', '11000', NULL, '2024-06-10 04:08:55'),
(31, '1', '3', 'order', '7', '1', '25000', NULL, '2024-06-10 04:08:55'),
(32, '1', '2', 'order', '6', '1', '5500', NULL, '2024-06-10 04:08:55'),
(34, '3', '1', 'order', '5', '1', '8500', NULL, '2024-06-06 22:17:45'),
(35, '3', '1', 'order', '5', '3', '25500', NULL, '2024-06-06 22:17:45'),
(36, '3', '3', 'order', '7', '2', '50000', NULL, '2024-06-06 22:17:45'),
(37, '3', '2', 'order', '6', '2', '11000', NULL, '2024-06-06 22:17:45'),
(38, '1', '4', 'order', '3', '3', '16500', NULL, '2024-06-10 04:08:55'),
(39, '3', '3', 'order', '7', '2', '50000', NULL, '2024-06-06 22:17:45'),
(40, '1', '2', 'order', '6', '3', '16500', NULL, '2024-06-10 04:08:55'),
(41, '1', '1', 'order', '5', '2', '17000', NULL, '2024-06-10 04:08:55'),
(42, '1', '1', 'order', '5', '4', '34000', NULL, '2024-06-10 04:08:55'),
(43, '1', '3', 'order', '7', '1', '25000', NULL, '2024-06-10 04:08:55'),
(44, '1', '4', 'order', '3', '3', '16500', NULL, '2024-06-10 04:08:55'),
(45, '1', '4', 'order', '3', '3', '16500', NULL, '2024-06-10 04:08:55'),
(46, '1', '2', 'order', '6', '2', '11000', NULL, '2024-06-10 04:08:55'),
(47, '1', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 04:08:55'),
(48, '1', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 04:08:55'),
(49, '4', '3', 'order', '7', '1', '25000', NULL, '2024-06-11 04:20:25'),
(50, '4', '1', 'order', '5', '3', '25500', NULL, '2024-06-11 04:20:25'),
(51, '4', '2', 'order', '6', '3', '16500', NULL, '2024-06-11 04:20:25'),
(52, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(53, '4', '1', 'order', '5', '1', '8500', NULL, '2024-06-11 04:20:25'),
(54, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(55, '4', '3', 'order', '7', '1', '25000', NULL, '2024-06-11 04:20:25'),
(56, '4', '1', 'order', '5', '1', '8500', NULL, '2024-06-11 04:20:25'),
(57, '4', '4', 'order', '3', '1', '5500', NULL, '2024-06-11 04:20:25'),
(58, '3', '3', 'order', '7', '1', '25000', NULL, '2024-06-06 22:17:45'),
(59, '3', '2', 'order', '6', '2', '11000', NULL, '2024-06-06 22:17:45'),
(60, '3', '4', 'order', '3', '1', '5500', NULL, '2024-06-06 22:17:45'),
(61, '3', '1', 'order', '5', '2', '17000', NULL, '2024-06-06 22:17:45'),
(62, '3', '2', 'order', '6', '1', '5500', NULL, '2024-06-06 22:17:45'),
(63, '3', '1', 'order', '5', '2', '17000', NULL, '2024-06-06 22:17:45'),
(64, '4', '3', 'order', '7', '1', '25000', NULL, '2024-06-11 04:20:25'),
(65, '4', '1', 'order', '5', '1', '8500', NULL, '2024-06-11 04:20:25'),
(66, '4', '4', 'order', '3', '1', '5500', NULL, '2024-06-11 04:20:25'),
(67, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(68, '4', '3', 'order', '7', '1', '25000', NULL, '2024-06-11 04:20:25'),
(69, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(70, '4', '1', 'order', '5', '2', '17000', NULL, '2024-06-11 04:20:25'),
(71, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(72, '4', '1', 'order', '5', '1', '8500', NULL, '2024-06-11 04:20:25'),
(73, '5', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 03:21:16'),
(74, '5', '2', 'order', '6', '1', '5500', NULL, '2024-06-10 03:21:16'),
(75, '5', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 03:21:16'),
(76, '5', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 03:21:16'),
(77, '5', '4', 'order', '3', '3', '16500', NULL, '2024-06-10 03:21:16'),
(78, '5', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 03:21:16'),
(79, '5', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 03:21:16'),
(80, '5', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 03:21:16'),
(81, '5', '4', 'order', '3', '2', '11000', NULL, '2024-06-10 03:21:16'),
(82, '5', '2', 'order', '6', '1', '5500', NULL, '2024-06-10 03:21:16'),
(83, '5', '4', 'order', '3', '1', '5500', NULL, '2024-06-10 03:21:16'),
(84, '5', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 03:21:16'),
(85, '5', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 03:21:16'),
(86, '5', '2', 'order', '6', '1', '5500', NULL, '2024-06-10 03:21:16'),
(87, '5', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 03:21:16'),
(88, '5', '2', 'order', '6', '1', '5500', NULL, '2024-06-10 03:21:16'),
(89, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25'),
(90, '4', '3', 'order', '7', '1', '25000', NULL, '2024-06-11 04:20:25'),
(91, '5', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 03:21:16'),
(92, '1', '6', 'order', '10', '1', '6500', NULL, '2024-06-10 04:08:55'),
(93, '1', '3', 'order', '7', '1', '25000', NULL, '2024-06-10 04:08:55'),
(94, '4', '1', 'order', '5', '1', '8500', NULL, '2024-06-11 04:20:25'),
(95, '4', '6', 'order', '10', '1', '6500', NULL, '2024-06-11 04:20:25'),
(96, '2', '1', 'order', '5', '1', '8500', NULL, '2024-06-10 05:29:36'),
(97, '4', '2', 'order', '6', '1', '5500', NULL, '2024-06-11 04:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catname` varchar(255) NOT NULL,
  `catimage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `catimage`, `created_at`, `updated_at`) VALUES
(1, 'Casuals', 'casual2.jpg', NULL, '2024-05-08 03:32:01'),
(2, 'Sundress', 'sundress1.jpg', NULL, '2024-05-23 03:45:24'),
(3, 'Cotton Wear', 'cottonwear1.jpg', NULL, '2024-05-08 03:36:39'),
(5, 'Sarees', 'kanchipuramsaree.jpg', NULL, NULL),
(6, 'silks variety1', 'pavithrasilks.jpg', NULL, NULL),
(7, 'Silks variety2', 'GREEN-KANCHI-CHANDERI-SILK-SAREE.jpeg', NULL, NULL),
(8, 'Kurthis', 'ajrakkurthis.jpg', NULL, NULL),
(9, 'Chanderi silks', 'chanderi11.jpg', NULL, '2024-05-30 04:09:36'),
(10, 'Gown', 'gown1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custname` varchar(255) NOT NULL,
  `custemail` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `custname`, `custemail`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Haridev P A', 'hari@gmail.com', 'Want to purchase sarees', NULL, NULL),
(2, 'Muhammed P K', 'mammad@gmail.com', 'Visited for wedding purchase, Wanted to purchase chikankari model dresses.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_04_060908_create_abouts_table', 2),
(5, '2024_05_06_060242_create_categories_table', 3),
(6, '2024_05_09_110305_create_products_table', 4),
(7, '2024_05_20_033734_create_contacts_table', 5),
(8, '2024_05_20_045040_create_userregs_table', 6),
(12, '2024_05_27_071224_create_carts_table', 7),
(13, '2024_05_28_054650_add_size_to_products', 8),
(14, '2024_05_29_102017_create_adminlogins_table', 9),
(15, '2024_06_07_102702_create_plceorders_table', 10),
(16, '2024_06_10_092917_add_custid_to_plceorders', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plceorders`
--

CREATE TABLE `plceorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientname` varchar(255) NOT NULL,
  `Grandtotal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plceorders`
--

INSERT INTO `plceorders` (`id`, `clientname`, `Grandtotal`, `created_at`, `updated_at`, `custid`) VALUES
(1, 'Veena Vani', '119500', NULL, NULL, ''),
(2, 'Aysha', '334500', NULL, NULL, ''),
(3, 'Veena Vani', '128000', NULL, NULL, ''),
(4, 'Veena Vani', '128000', NULL, NULL, ''),
(5, 'Bansuri', '343500', NULL, NULL, '1'),
(6, 'Aysha', '349500', NULL, NULL, '4'),
(7, 'Ambadi T K', '78000', NULL, NULL, '2'),
(8, 'Aysha', '355000', NULL, NULL, '4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `availstock` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pdescription`, `pcategory`, `pimage`, `price`, `stock`, `availstock`, `created_at`, `updated_at`, `size`) VALUES
(1, 'kanchipuram Saree', 'We introduce a new section for Kanchipuram sarees', '5', 'kanchipuramsaree.jpg', '8500', '1000', '700', NULL, NULL, ''),
(2, 'Pavithra silks', 'A new brand Pavithra..\r\npavithra bandan', '6', 'pavithrasilks.jpg', '5500', '5000', '2000', NULL, '2024-05-30 05:38:37', ''),
(3, 'Chanderi Silks', 'Grren coloured kanchipuram chanderi silks sarees', '7', 'GREEN-KANCHI-CHANDERI-SILK-SAREE.jpeg', '25000', '500', '250', NULL, NULL, ''),
(4, 'Ajrak Sarees', 'Light weight sarees.. Beautiful blue...', '3', 'ajraksarees.jpg', '5500', '2000', '980', NULL, '2024-05-30 05:38:55', ''),
(6, 'Women Gown', 'Navy blue silky gown . Silky lightweight material. With comfort party wear dress for all ladies.', '10', 'gown1.jpg', '6500', '100', '80', NULL, NULL, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1nf0Ceh0SNvFst4XUr59sD8E3qpSXG93z9jWLs7V', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQTZiQnU5VnZXeGlVdVhKU2VPZkJYNnFMQm9oaWlPVjl3QkNITjVPVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6InNlc3NpZCI7aTo2O3M6ODoic2Vzc25hbWUiO3M6MTM6IkF0aHVsIEtyaXNobmEiO30=', 1718163450),
('fHm3YWx8Tp4rL0fFgf6ENr0C6jztteUccG3OOISf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSUJKaWcwTUMzRVN2RnhVYTczYUtpT2hqRmFEV3g3ZndaOU1QUlFvVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRjYXJ0LzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6InNlc3NpZCI7aToyO3M6ODoic2Vzc25hbWUiO3M6MTA6IkFtYmFkaSBUIEsiO30=', 1718020236),
('jgRRMMFYxeDmDHWkfgPb8T1hE9n5VBUIRcqCq2YK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWlVuR0FWOUFDUUNQOXp1VVVodjZvTE02aUxjZllRQW1rbjFlZk9NdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6InNlc3NpZCI7aToxO3M6ODoic2Vzc25hbWUiO3M6NzoiQmFuc3VyaSI7fQ==', 1718336174),
('XO8ZOOVmnHp0ItVy0dL7NhjX2s7wj4riRo8JpIQm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRVl0U2tIWWdBYXVrRVM2eWtLUVZwZE5vNzlvWWdLRkI2VjJ4UlN2cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6InNlc3NpZCI7aTo2O3M6ODoic2Vzc25hbWUiO3M6MTM6IkF0aHVsIEtyaXNobmEiO30=', 1718100454);

-- --------------------------------------------------------

--
-- Table structure for table `userregs`
--

CREATE TABLE `userregs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cusname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userregs`
--

INSERT INTO `userregs` (`id`, `cusname`, `age`, `gender`, `place`, `phone`, `item`, `address`, `uname`, `passwd`, `created_at`, `updated_at`) VALUES
(1, 'Bansuri', '22', 'female', 'Kattakkada', '9632587852', 'Kanjipuram Saree', 'Kanjangad House\r\nKurumbathuruth, Vettinad P O', 'bansuri123', 'bansuri123', NULL, NULL),
(2, 'Ambadi T K', '26', 'male', 'Kottarakkara', '8574692351', 'Raymond suites', 'Kombanmedu Valley\r\nKollam', 'ambadikannan', 'ambadi123', NULL, NULL),
(3, 'Athira P V', '26', 'female', 'Kadavanthra', '9638528965', 'Daavani', 'Kolukkath House, Kavanthra P O , ernakulam', 'aathira', 'aathira', NULL, NULL),
(4, 'Aysha', '23', 'female', 'Ponakkattukara', '7458961234', 'Parddahh', 'Lambini House', 'aysha', 'aysha', NULL, NULL),
(5, 'Veena Vani', '27', 'female', 'Elamakkara', '9685742368', 'Partywear gown', 'Santhinilayam\r\nElamakkara', 'veena123', 'veena123', NULL, NULL),
(6, 'Athul Krishna', '20', 'male', 'Kanayannoor', '9658741236', 'Pyjama', 'Thaikottoor', 'athulvv', 'athulvv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `plceorders`
--
ALTER TABLE `plceorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `userregs`
--
ALTER TABLE `userregs`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `plceorders`
--
ALTER TABLE `plceorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userregs`
--
ALTER TABLE `userregs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
