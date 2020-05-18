-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 10:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prasindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` int(11) NOT NULL,
  `dp` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fullname`, `phone`, `email`, `created_at`, `updated_at`, `total`, `dp`, `email_verified_at`, `due_date`) VALUES
(6, 'asd', '12309123992', 'hosting@clevara.id', '2020-05-12 21:55:14', '2020-05-12 22:00:35', 37800000, 7560000, '2020-05-12 22:00:35', '2020-05-28'),
(7, 'robot', '1234567890123', 'admin@admin.com', '2020-05-13 14:43:36', '2020-05-13 14:43:52', 1400000, 280000, '2020-05-13 14:43:52', '2020-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `booking_cars`
--

CREATE TABLE `booking_cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_rent_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `booking_id` int(11) NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_cars`
--

INSERT INTO `booking_cars` (`id`, `car_rent_id`, `start_date`, `end_date`, `booking_id`, `days`, `created_at`, `updated_at`, `notes`) VALUES
(7, 2, '2020-06-13', '2020-06-20', 6, '7', '2020-05-12 21:55:14', '2020-05-12 21:55:14', NULL),
(8, 1, '2020-06-13', '2020-06-27', 7, '14', '2020-05-13 14:43:36', '2020-05-13 14:43:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_golves`
--

CREATE TABLE `booking_golves` (
  `id` int(10) UNSIGNED NOT NULL,
  `golf_package_id` int(11) NOT NULL,
  `pax` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_rents`
--

CREATE TABLE `car_rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_rents`
--

INSERT INTO `car_rents` (`id`, `fuel`, `capacity`, `transmission_type`, `price`, `category`, `available`, `created_at`, `updated_at`, `name`, `merk`) VALUES
(1, 'Diesel', '6Person', 'automatic', '100000', 1, 1, '2020-05-04 12:45:00', '2020-05-11 09:58:29', 'Toyota Innova', 'Toyota'),
(2, 'Gas', '6Person', 'automatic', '100000', 1, 1, '2020-05-11 09:47:00', '2020-05-11 09:58:22', 'Wuling Cortez', 'Wuling'),
(3, 'Bio Gas', '6Person', 'Manual', '500000', 1, 1, '2020-05-11 09:47:00', '2020-05-11 09:58:13', 'Renault TRIBER', 'Renault'),
(4, 'Gas', '6Person', 'automatic', '200000', 1, 1, '2020-05-11 09:48:00', '2020-05-11 09:58:04', 'Toyota Sienta', 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `car_rent_categories`
--

CREATE TABLE `car_rent_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_rent_categories`
--

INSERT INTO `car_rent_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Minibus', '2020-05-04 12:44:34', '2020-05-04 12:44:34'),
(2, 'Minivan', '2020-05-04 12:44:43', '2020-05-04 12:44:43'),
(3, 'Luxury Car', '2020-05-04 12:44:51', '2020-05-04 12:44:51'),
(4, 'Bus', '2020-05-04 12:44:59', '2020-05-04 12:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `car_rent_images`
--

CREATE TABLE `car_rent_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_rents_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_rent_images`
--

INSERT INTO `car_rent_images` (`id`, `car_rents_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Toyota Innova', 'car-rent-images\\May2020\\F2SVIRqExMDNqmG34XLn.png', '2020-05-04 12:46:00', '2020-05-11 09:53:18'),
(2, 2, 'Wuling Cortez', 'car-rent-images\\May2020\\uZmg1fZe0bDlJ7tQrT3Y.png', '2020-05-11 09:49:00', '2020-05-11 09:53:09'),
(3, 3, 'Renault TRIBER', 'car-rent-images\\May2020\\bFbDjIYOJIKsmRchiX6j.png', '2020-05-11 09:49:00', '2020-05-11 09:53:00'),
(4, 4, 'Toyota Sienta', 'car-rent-images\\May2020\\zm8ehlxtMXESh19tagQM.png', '2020-05-11 09:50:00', '2020-05-11 09:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(24, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(25, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(26, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(27, 5, 'car_rents_id', 'text', 'Car Rents Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(28, 5, 'name', 'text', 'Image Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(29, 5, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"thumbnail\",\"crop\":{\"width\":\"300\",\"height\":\"300\"}}]}', 5),
(30, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(31, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(32, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(33, 6, 'fuel', 'select_dropdown', 'Fuel', 1, 1, 1, 1, 1, 1, '{\"default\":\"diesel\",\"options\":{\"Diesel\":\"Diesel\",\"Gas\":\"Gas\",\"Bio Gas\":\"Bio Gas\",\"Electic\":\"Electric\"}}', 4),
(34, 6, 'capacity', 'select_dropdown', 'Capacity', 1, 1, 1, 1, 1, 1, '{\"default\":\"4Person\",\"options\":{\"4Person\":\"4 Person\",\"6Person\":\"6 Person\"}}', 5),
(35, 6, 'transmission_type', 'select_dropdown', 'Transmission Type', 1, 1, 1, 1, 1, 1, '{\"default\":\"automatic\",\"options\":{\"automatic\":\"Automatic\",\"Manual\":\"Manual\"}}', 6),
(36, 6, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 7),
(37, 6, 'category', 'text', 'Category', 1, 1, 1, 1, 1, 1, '{}', 8),
(38, 6, 'available', 'checkbox', 'Available', 1, 1, 1, 1, 1, 1, '{\"on\":\"Available\",\"off\":\"Not Available\",\"checked\":true}', 11),
(39, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(40, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(41, 6, 'car_rent_belongsto_car_rent_category_relationship', 'relationship', 'Car Category', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CarRentCategory\",\"table\":\"car_rent_categories\",\"type\":\"belongsTo\",\"column\":\"category\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(42, 6, 'car_rent_hasmany_car_rent_image_relationship', 'relationship', 'images', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CarRentImage\",\"table\":\"car_rent_images\",\"type\":\"hasMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(43, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(44, 5, 'car_rent_image_belongsto_car_rent_relationship', 'relationship', 'Car', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CarRent\",\"table\":\"car_rents\",\"type\":\"belongsTo\",\"column\":\"car_rents_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(45, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(46, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(47, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(48, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(49, 7, 'description', 'text_area', 'Description', 1, 1, 1, 1, 1, 1, '{}', 3),
(51, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(52, 8, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"thumbnail\",\"crop\":{\"width\":\"300\",\"height\":\"300\"}}]}', 2),
(53, 8, 'image_name', 'text', 'Image Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(54, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(55, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(56, 8, 'hotel_id', 'text', 'Hotel Id', 1, 1, 1, 1, 1, 1, '{}', 7),
(57, 8, 'hotel_image_belongsto_hotel_relationship', 'relationship', 'Image For Hotel', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Hotel\",\"table\":\"hotels\",\"type\":\"belongsTo\",\"column\":\"hotel_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(58, 7, 'location', 'text', 'Location', 1, 1, 1, 1, 1, 1, '{}', 5),
(59, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(60, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(61, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(62, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(63, 9, 'location', 'text', 'Location', 1, 1, 1, 1, 1, 1, '{}', 4),
(64, 9, 'description', 'text_area', 'Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(65, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(66, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(67, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(69, 12, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 5),
(70, 12, 'list', 'text_area', 'List (separate list by semicolon \" ; \")', 0, 1, 1, 1, 1, 1, '{}', 6),
(71, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(72, 13, 'day', 'text', 'Day', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: Day 1\"}', 2),
(73, 13, 'list', 'text_area', 'List (separate list by semicolon \" ; \")', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: hello; Worlds!\"}', 3),
(75, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(76, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(77, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(78, 14, 'image', 'image', 'Image (450x700 < 1mb)', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"450\",\"height\":null},\"quality\":\"70%\",\"upsize\":true}', 2),
(79, 14, 'image_name', 'text', 'Image Name', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: Hotel Santika Jakarta\"}', 3),
(80, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(81, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(83, 12, 'golf_include_belongsto_golf_relationship', 'relationship', 'golves', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Golf\",\"table\":\"golves\",\"type\":\"belongsTo\",\"column\":\"golves_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(84, 14, 'golf_include_image_belongsto_golf_relationship', 'relationship', 'golves', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Golf\",\"table\":\"golves\",\"type\":\"belongsTo\",\"column\":\"golves_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(85, 13, 'golf_daily_belongsto_golf_relationship', 'relationship', 'golves', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Golf\",\"table\":\"golves\",\"type\":\"belongsTo\",\"column\":\"golves_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(86, 9, 'recomended', 'checkbox', 'Recomended', 1, 1, 1, 1, 1, 1, '{\"on\":\"recomended\",\"off\":\"regular\",\"checked\":true}', 8),
(87, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(89, 15, 'hotel_id', 'text', 'Hotel Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(90, 15, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(91, 15, 'description', 'text_area', 'Description', 1, 1, 1, 1, 1, 1, '{}', 7),
(92, 15, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 8),
(93, 15, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 9),
(94, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(95, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(96, 15, 'golf_package_belongsto_hotel_relationship', 'relationship', 'hotels', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Hotel\",\"table\":\"hotels\",\"type\":\"belongsTo\",\"column\":\"hotel_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(97, 15, 'golf_package_belongsto_golf_relationship', 'relationship', 'golves', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Golf\",\"table\":\"golves\",\"type\":\"belongsTo\",\"column\":\"golves_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(98, 6, 'merk', 'text', 'Merk', 1, 1, 1, 1, 1, 1, '{}', 2),
(99, 7, 'category', 'select_dropdown', 'Category', 1, 1, 1, 1, 1, 1, '{\"default\":\"national\",\"options\":{\"national\":\"National\",\"international\":\"International\"}}', 6),
(100, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(101, 16, 'city', 'text', 'City', 1, 1, 1, 1, 1, 1, '{}', 2),
(102, 16, 'location', 'text', 'Location', 1, 1, 1, 1, 1, 1, '{}', 3),
(103, 16, 'category', 'select_dropdown', 'Category', 1, 1, 1, 1, 1, 1, '{\"default\":\"inbound\",\"options\":{\"inbound\":\"Inbound\",\"outbound\":\"Outbound\"}}', 4),
(104, 16, 'itinerary', 'text_area', 'Itinerary (list separate by semicolon \" ; \" ))', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: hello; worlds!\"}', 5),
(105, 16, 'favorite', 'checkbox', 'Favorite', 1, 1, 1, 1, 1, 1, '{\"on\":\"Favorite\",\"off\":\"Regular\",\"checked\":true}', 6),
(106, 16, 'recomended', 'checkbox', 'Recomended', 1, 1, 1, 1, 1, 1, '{\"on\":\"Recomended\",\"off\":\"Regular\",\"checked\":true}', 7),
(107, 16, 'hero_image', 'image', 'Hero Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true}', 8),
(108, 16, 'banner_image', 'image', 'Banner Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"thumbnail\",\"crop\":{\"width\":\"300\",\"height\":\"300\"}}]}', 9),
(109, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(110, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(111, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(112, 17, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"500\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"thumbnail\",\"crop\":{\"width\":\"300\",\"height\":\"300\"}}]}', 2),
(113, 17, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 3),
(114, 17, 'travel_id', 'text', 'Travel Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(115, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(116, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(117, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(118, 18, 'day', 'text', 'Day', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: day 1\"}', 2),
(119, 18, 'activities', 'text_area', 'Activities (List Separated by Semicolon \" ; \" )', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: Hello; Worlds!\"}', 3),
(120, 18, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true}', 4),
(121, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(122, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(123, 18, 'travel_id', 'text', 'Travel Id', 1, 1, 1, 1, 1, 1, '{}', 8),
(124, 17, 'travel_include_belongsto_travel_relationship', 'relationship', 'City Travel', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Travel\",\"table\":\"travels\",\"type\":\"belongsTo\",\"column\":\"travel_id\",\"key\":\"id\",\"label\":\"city\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(125, 18, 'travel_daily_belongsto_travel_relationship', 'relationship', 'City Travel', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Travel\",\"table\":\"travels\",\"type\":\"belongsTo\",\"column\":\"travel_id\",\"key\":\"id\",\"label\":\"city\",\"pivot_table\":\"car_rent_categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(126, 9, 'city', 'text', 'City', 1, 1, 1, 1, 1, 1, '{}', 3),
(127, 9, 'banner_image', 'image', 'Banner Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"thumbnail\",\"crop\":{\"width\":\"300\",\"height\":\"300\"}}]}', 7),
(128, 13, 'golves_id', 'text', 'Golves Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(129, 15, 'golves_id', 'text', 'Golves Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(130, 12, 'golves_id', 'text', 'Golves Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(131, 14, 'golves_id', 'text', 'Golves Id', 1, 1, 1, 1, 1, 1, '{}', 6),
(132, 9, 'itinerary', 'text_area', 'Itinerary (list separate by semicolon \" ; \" ))', 1, 1, 1, 1, 1, 1, '{\"description\":\"ex: Hello; Worlds!\"}', 6),
(133, 13, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true}', 4),
(134, 15, 'day', 'select_dropdown', 'Day', 1, 1, 1, 1, 1, 1, '{\"default\":\"2\",\"options\":{\"2\":\"2 Day\",\"3\":\"3 Day\",\"4\":\"4 Day\",\"5\":\"5 Day\",\"6\":\"6 Day\",\"7\":\"7 Day\",\"8\":\"8 Day\"}}', 5),
(135, 15, 'night', 'select_dropdown', 'Night', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"1 Night\",\"2\":\"2 Night\",\"3\":\"3 Night\",\"4\":\"4 Night\",\"5\":\"5 Night\",\"6\":\"6 Night\",\"7\":\"7 Night\"}}', 6),
(147, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(148, 20, 'fullname', 'text', 'Fullname', 1, 1, 1, 1, 1, 1, '{}', 2),
(149, 20, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 3),
(150, 20, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(151, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(152, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(153, 20, 'total', 'text', 'Total', 1, 1, 1, 1, 1, 1, '{}', 5),
(154, 20, 'dp', 'text', 'Dp', 1, 1, 1, 1, 1, 1, '{}', 6),
(155, 20, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 7),
(156, 20, 'due_date', 'text', 'Due Date', 1, 1, 1, 1, 1, 1, '{}', 10);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(4, 'car_rent_categories', 'car-rent-categories', 'Car Rent Category', 'Car Rent Categories', 'voyager-categories', 'App\\CarRentCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-05-04 12:29:49', '2020-05-04 12:29:49'),
(5, 'car_rent_images', 'car-rent-images', 'Car Rent Image', 'Car Rent Images', 'voyager-images', 'App\\CarRentImage', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-04 12:30:23', '2020-05-11 09:52:21'),
(6, 'car_rents', 'car-rents', 'Car Rent', 'Car Rents', 'voyager-truck', 'App\\CarRent', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-04 12:34:29', '2020-05-11 09:57:36'),
(7, 'hotels', 'hotels', 'Hotel', 'Hotels', 'voyager-company', 'App\\Hotel', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-10 08:05:26', '2020-05-11 10:28:41'),
(8, 'hotel_images', 'hotel-images', 'Hotel Image', 'Hotel Images', 'voyager-images', 'App\\HotelImage', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-10 08:06:56', '2020-05-11 10:30:38'),
(9, 'golves', 'golves', 'Golf', 'Golves', 'voyager-trophy', 'App\\Golf', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-10 09:28:27', '2020-05-11 14:12:39'),
(12, 'golf_includes', 'golf-includes', 'Golf Include', 'Golf Includes', 'voyager-bag', 'App\\GolfInclude', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-10 09:31:11', '2020-05-11 13:35:27'),
(13, 'golf_dailies', 'golf-dailies', 'Golf Daily', 'Golf Dailies', 'voyager-world', 'App\\GolfDaily', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-10 09:40:49', '2020-05-11 14:15:22'),
(14, 'golf_include_images', 'golf-include-images', 'Golf Include Image', 'Golf Include Images', NULL, 'App\\GolfIncludeImage', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-10 09:44:15', '2020-05-11 13:35:44'),
(15, 'golf_packages', 'golf-packages', 'Golf Package', 'Golf Packages', 'voyager-book', 'App\\GolfPackage', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-11 09:40:18', '2020-05-11 23:34:34'),
(16, 'travels', 'travels', 'Travel', 'Travels', 'voyager-paper-plane', 'App\\Travel', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-11 12:22:50', '2020-05-11 12:25:33'),
(17, 'travel_includes', 'travel-includes', 'Travel Include', 'Travel Includes', 'voyager-bag', 'App\\TravelInclude', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-11 12:25:13', '2020-05-11 12:28:19'),
(18, 'travel_dailies', 'travel-dailies', 'Travel Daily', 'Travel Dailies', 'voyager-world', 'App\\TravelDaily', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-11 12:27:29', '2020-05-11 12:29:05'),
(20, 'bookings', 'bookings', 'Booking', 'Bookings', 'voyager-news', 'App\\Booking', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-12 11:48:17', '2020-05-12 21:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `golf_dailies`
--

CREATE TABLE `golf_dailies` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `golves_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golf_dailies`
--

INSERT INTO `golf_dailies` (`id`, `day`, `list`, `golves_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Day 1', 'Hello; Worlds!', 4, '2020-05-11 13:35:56', '2020-05-11 13:35:56', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(2, 'Day 2', 'Hello; Worlds!', 4, '2020-05-11 13:36:06', '2020-05-11 13:36:06', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(3, 'Day 1', 'Hello; Worlds!', 3, '2020-05-11 13:36:17', '2020-05-11 13:36:17', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(4, 'Day 2', 'Hello; Worlds!', 3, '2020-05-11 13:36:26', '2020-05-11 13:36:26', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(5, 'Day 1', 'Hello; Worlds!', 2, '2020-05-11 13:36:35', '2020-05-11 13:36:35', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(6, 'Day 2', 'Hello; Worlds!', 2, '2020-05-11 13:36:44', '2020-05-11 13:36:44', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(7, 'Day 1', 'Hello; Worlds!', 1, '2020-05-11 13:36:52', '2020-05-11 13:36:52', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png'),
(8, 'Day 2', 'Hello; Worlds!', 1, '2020-05-11 13:37:00', '2020-05-11 14:16:26', 'golf-dailies\\May2020\\7oNJp0RUgJVsanpEg4V1.png');

-- --------------------------------------------------------

--
-- Table structure for table `golf_includes`
--

CREATE TABLE `golf_includes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `golves_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golf_includes`
--

INSERT INTO `golf_includes` (`id`, `created_at`, `updated_at`, `golves_id`, `description`, `list`) VALUES
(1, '2020-05-11 13:38:56', '2020-05-11 13:38:56', 4, 'Laboris laborum aliquip aliquip incididunt adipisicing consequat pariatur duis cupidatat incididunt excepteur dolore laborum sit. Amet duis incididunt voluptate nostrud qui sint labore non excepteur. Cillum anim labore irure consequat fugiat dolore duis culpa anim cupidatat elit irure. Nulla nostrud elit quis nostrud sit cupidatat aute sit excepteur nisi. Proident irure proident eiusmod voluptate velit aliquip velit est minim cillum consequat excepteur aliquip esse. Quis adipisicing commodo voluptate esse culpa.', '2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.'),
(2, '2020-05-11 13:39:21', '2020-05-11 13:39:21', 3, 'Laboris laborum aliquip aliquip incididunt adipisicing consequat pariatur duis cupidatat incididunt excepteur dolore laborum sit. Amet duis incididunt voluptate nostrud qui sint labore non excepteur. Cillum anim labore irure consequat fugiat dolore duis culpa anim cupidatat elit irure. Nulla nostrud elit quis nostrud sit cupidatat aute sit excepteur nisi. Proident irure proident eiusmod voluptate velit aliquip velit est minim cillum consequat excepteur aliquip esse. Quis adipisicing commodo voluptate esse culpa.', '2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.; 2 Rounds of golf in Bali.'),
(3, '2020-05-11 13:39:52', '2020-05-11 13:39:52', 2, 'Laboris laborum aliquip aliquip incididunt adipisicing consequat pariatur duis cupidatat incididunt excepteur dolore laborum sit. Amet duis incididunt voluptate nostrud qui sint labore non excepteur. Cillum anim labore irure consequat fugiat dolore duis culpa anim cupidatat elit irure. Nulla nostrud elit quis nostrud sit cupidatat aute sit excepteur nisi. Proident irure proident eiusmod voluptate velit aliquip velit est minim cillum consequat excepteur aliquip esse. Quis adipisicing commodo voluptate esse culpa.', '2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.'),
(4, '2020-05-11 13:40:15', '2020-05-11 13:40:15', 1, 'Laboris laborum aliquip aliquip incididunt adipisicing consequat pariatur duis cupidatat incididunt excepteur dolore laborum sit. Amet duis incididunt voluptate nostrud qui sint labore non excepteur. Cillum anim labore irure consequat fugiat dolore duis culpa anim cupidatat elit irure. Nulla nostrud elit quis nostrud sit cupidatat aute sit excepteur nisi. Proident irure proident eiusmod voluptate velit aliquip velit est minim cillum consequat excepteur aliquip esse. Quis adipisicing commodo voluptate esse culpa.', '2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.; 2 Night accomadition in Bali.');

-- --------------------------------------------------------

--
-- Table structure for table `golf_include_images`
--

CREATE TABLE `golf_include_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `golves_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golf_include_images`
--

INSERT INTO `golf_include_images` (`id`, `image`, `image_name`, `created_at`, `updated_at`, `golves_id`) VALUES
(1, 'golf-include-images\\May2020\\SGdng4RQsDUYd97AQQzi.png', 'include-1', '2020-05-11 13:41:43', '2020-05-11 13:41:43', 4),
(2, 'golf-include-images\\May2020\\B35L2wiMW5ujIL07ejaH.png', 'include-2', '2020-05-11 13:41:57', '2020-05-11 13:41:57', 4),
(3, 'golf-include-images\\May2020\\K2s9CSCCUJuaUc2rcEKw.png', 'include-1', '2020-05-11 13:42:20', '2020-05-11 13:42:20', 3),
(4, 'golf-include-images\\May2020\\ejCg7EsvcncHTDQ0k71k.png', 'include-2', '2020-05-11 13:42:37', '2020-05-11 13:42:37', 3),
(5, 'golf-include-images\\May2020\\uvTDo1eTZpMae3q0VhNa.png', 'include-1', '2020-05-11 13:42:49', '2020-05-11 13:42:49', 2),
(6, 'golf-include-images\\May2020\\9t1FOKVyypRnlLA2eaas.png', 'include-2', '2020-05-11 13:43:01', '2020-05-11 13:43:01', 2),
(7, 'golf-include-images\\May2020\\JOVQBBR28U1Lf5WNkc2r.png', 'include-1', '2020-05-11 13:44:56', '2020-05-11 13:44:56', 1),
(8, 'golf-include-images\\May2020\\ZAT2iVfjhI3OdnK0tEzs.png', 'include-2', '2020-05-11 13:45:12', '2020-05-11 13:45:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `golf_packages`
--

CREATE TABLE `golf_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `golves_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `day` tinyint(4) NOT NULL DEFAULT 2,
  `night` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golf_packages`
--

INSERT INTO `golf_packages` (`id`, `golves_id`, `hotel_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`, `day`, `night`) VALUES
(1, 1, 1, 'Package A', 'Price pergolfer Single', '6050000', 'golf-packages\\May2020\\aCrZRa56jrJXXnHyWU9k.png', '2020-05-11 23:25:34', '2020-05-11 23:25:34', 2, 1),
(2, 1, 2, 'Package A Double', 'Price pergolfer Twin sharing', '5400000', 'golf-packages\\May2020\\P4Ro9IC8rGspsGb8HLaj.png', '2020-05-11 23:26:32', '2020-05-11 23:26:32', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `golves`
--

CREATE TABLE `golves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recomended` tinyint(4) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `itinerary` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golves`
--

INSERT INTO `golves` (`id`, `created_at`, `updated_at`, `name`, `city`, `description`, `recomended`, `location`, `banner_image`, `itinerary`) VALUES
(1, '2020-05-11 13:22:00', '2020-05-11 14:13:26', 'Amazing Bali Golf Package', 'Bali', 'Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate.', 1, 'Indonesia', 'golves\\May2020\\7ZBY3hipMWjhZVh0sziu.png', 'hello; Worlds!'),
(2, '2020-05-11 13:23:00', '2020-05-11 14:13:09', 'New Kuta Golf', 'Bali', 'Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate.', 1, 'Indonesia', 'golves\\May2020\\iVo15vGvsAIed8wUsUKY.png', 'hello; Worlds!'),
(3, '2020-05-11 13:23:00', '2020-05-11 14:13:17', 'Mountain View Golf Club', 'West Java', 'Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate.', 1, 'Indonesia', 'golves\\May2020\\Q8QZeiG0SitSnx47DHGr.png', 'hello; Worlds!'),
(4, '2020-05-11 13:24:00', '2020-05-11 14:12:59', 'Bali National Golf', 'Bali', 'Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate.', 1, 'Indonesia', 'golves\\May2020\\CwEWIwBYlxV1hBRoQ4ds.png', 'hello; Worlds!');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `created_at`, `updated_at`, `name`, `description`, `location`, `category`) VALUES
(1, '2020-05-11 10:27:46', '2020-05-11 10:27:46', 'Hotel Santika', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal venue for every type of event, from intimate cocktail parties to grand banquets, as well as training sessions, board meetings and presentations.', 'Bali, Indonesia', 'national'),
(2, '2020-05-11 10:31:26', '2020-05-11 10:31:26', 'Hotel A', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Jakarta, Indonesia', 'national'),
(3, '2020-05-11 10:31:48', '2020-05-11 10:31:48', 'Hotel B', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Jakarta, Indonesia', 'national'),
(4, '2020-05-11 10:32:03', '2020-05-11 10:32:03', 'Hotel C', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Jakarta, Indonesia', 'national'),
(5, '2020-05-11 10:32:24', '2020-05-11 10:32:24', 'Hotel AA', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Tokyo, Japan', 'international'),
(6, '2020-05-11 10:32:46', '2020-05-11 10:32:46', 'Hotel BB', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Washington, United States', 'international'),
(7, '2020-05-11 10:33:07', '2020-05-11 10:33:07', 'Hotel CC', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Kuala Lumpur, Malaysia', 'international'),
(8, '2020-05-11 10:33:25', '2020-05-11 10:33:25', 'Hotel DD', 'With its distinctive yet unimposing Indonesian ambience, the hotel offers unsurpassed facilities, a choice of restaurants and friendly, helpful staff. Hotel Santika Premiere Slipi Jakarta is an ideal', 'Afrika', 'international');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE `hotel_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`id`, `image`, `image_name`, `created_at`, `updated_at`, `hotel_id`) VALUES
(1, 'hotel-images\\May2020\\WB53tN8FyL115SJgyNMr.png', 'Hotel Santika', '2020-05-11 10:30:59', '2020-05-11 10:30:59', 1),
(2, 'hotel-images\\May2020\\tbTexOwDlhc7xrn3pZXB.png', 'Hotel A', '2020-05-11 10:33:49', '2020-05-11 10:33:49', 2),
(3, 'hotel-images\\May2020\\Ba47gL3IChA8GsNofvlG.png', 'Hotel B', '2020-05-11 10:34:18', '2020-05-11 10:34:18', 3),
(4, 'hotel-images\\May2020\\wPVkrB3EsN9gLI7909xU.png', 'Hotel C', '2020-05-11 10:34:35', '2020-05-11 10:34:35', 4),
(5, 'hotel-images\\May2020\\x0nTRgkCvTeMZsAkiDpe.png', 'Hotel AA', '2020-05-11 10:34:49', '2020-05-11 10:34:49', 5),
(6, 'hotel-images\\May2020\\v4ne4IXwvlugkvraS82e.png', 'Hotel BB', '2020-05-11 10:35:02', '2020-05-11 10:35:02', 6),
(7, 'hotel-images\\May2020\\3z952lEckmHnWyoZplsp.png', 'Hotel CC', '2020-05-11 10:35:16', '2020-05-11 10:35:16', 7),
(8, 'hotel-images\\May2020\\DeR6YP7RkyyGfewiQqyw.png', 'Hotel DD', '2020-05-11 10:35:29', '2020-05-11 10:35:29', 8),
(9, 'hotel-images\\May2020\\Bsdm0ou5lqj6mAdG3Xvf.png', 'Hotel Santika', '2020-05-11 10:41:58', '2020-05-11 10:41:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-05-04 12:21:52', '2020-05-04 12:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-05-04 12:21:52', '2020-05-04 12:21:52', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2020-05-04 12:21:52', '2020-05-04 12:41:22', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-05-04 12:21:52', '2020-05-04 12:21:52', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-05-04 12:21:52', '2020-05-04 12:21:52', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2020-05-04 12:21:52', '2020-05-11 12:30:41', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-05-04 12:21:52', '2020-05-04 12:41:22', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-05-04 12:21:52', '2020-05-04 12:41:22', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-05-04 12:21:52', '2020-05-04 12:41:22', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-05-04 12:21:52', '2020-05-04 12:41:22', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2020-05-04 12:21:52', '2020-05-11 12:30:41', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-05-04 12:21:52', '2020-05-04 12:41:22', 'voyager.hooks', NULL),
(12, 1, 'Car Rent Categories', '', '_self', 'voyager-categories', NULL, 15, 3, '2020-05-04 12:29:49', '2020-05-04 12:41:28', 'voyager.car-rent-categories.index', NULL),
(13, 1, 'Car Rent Images', '', '_self', 'voyager-images', NULL, 15, 2, '2020-05-04 12:30:23', '2020-05-04 12:41:26', 'voyager.car-rent-images.index', NULL),
(14, 1, 'Car Rents', '', '_self', 'voyager-truck', NULL, 15, 1, '2020-05-04 12:34:29', '2020-05-04 12:41:23', 'voyager.car-rents.index', NULL),
(15, 1, 'Car Rent', '', '_self', 'voyager-truck', '#000000', NULL, 5, '2020-05-04 12:40:57', '2020-05-04 12:41:36', NULL, ''),
(16, 1, 'Hotels', '', '_self', 'voyager-company', '#000000', 18, 1, '2020-05-10 08:05:26', '2020-05-10 08:09:23', 'voyager.hotels.index', 'null'),
(17, 1, 'Hotel Images', '', '_self', 'voyager-images', NULL, 18, 2, '2020-05-10 08:06:56', '2020-05-10 08:09:24', 'voyager.hotel-images.index', NULL),
(18, 1, 'Hotels', '', '_self', 'voyager-company', '#000000', NULL, 6, '2020-05-10 08:09:14', '2020-05-10 08:10:16', NULL, ''),
(19, 1, 'Golves', '', '_self', 'voyager-trophy', NULL, 23, 1, '2020-05-10 09:28:27', '2020-05-10 09:53:11', 'voyager.golves.index', NULL),
(20, 1, 'Golf Includes', '', '_self', 'voyager-bag', NULL, 23, 3, '2020-05-10 09:31:11', '2020-05-10 09:53:17', 'voyager.golf-includes.index', NULL),
(21, 1, 'Golf Dailies', '', '_self', 'voyager-world', NULL, 23, 2, '2020-05-10 09:40:49', '2020-05-10 09:53:17', 'voyager.golf-dailies.index', NULL),
(22, 1, 'Golf Include Images', '', '_self', 'voyager-images', '#000000', 23, 4, '2020-05-10 09:44:15', '2020-05-10 09:53:13', 'voyager.golf-include-images.index', 'null'),
(23, 1, 'Golf', '', '_self', 'voyager-trophy', '#000000', NULL, 7, '2020-05-10 09:52:57', '2020-05-10 09:54:16', NULL, ''),
(24, 1, 'Golf Packages', '', '_self', 'voyager-book', NULL, NULL, 9, '2020-05-11 09:40:19', '2020-05-11 12:30:41', 'voyager.golf-packages.index', NULL),
(25, 1, 'Travels', '', '_self', 'voyager-paper-plane', NULL, 28, 1, '2020-05-11 12:22:50', '2020-05-11 12:30:22', 'voyager.travels.index', NULL),
(26, 1, 'Travel Includes', '', '_self', 'voyager-bag', NULL, 28, 2, '2020-05-11 12:25:14', '2020-05-11 12:30:24', 'voyager.travel-includes.index', NULL),
(27, 1, 'Travel Dailies', '', '_self', 'voyager-world', NULL, 28, 3, '2020-05-11 12:27:29', '2020-05-11 12:30:25', 'voyager.travel-dailies.index', NULL),
(28, 1, 'City Travel', '', '_self', 'voyager-paper-plane', '#000000', NULL, 8, '2020-05-11 12:30:14', '2020-05-11 12:30:36', NULL, ''),
(30, 1, 'Bookings', '', '_self', 'voyager-news', NULL, NULL, 12, '2020-05-12 11:48:17', '2020-05-12 11:48:17', 'voyager.bookings.index', NULL);

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
(2, '2016_01_01_000000_add_voyager_user_fields', 1),
(3, '2016_01_01_000000_create_data_types_table', 1),
(4, '2016_05_19_173453_create_menu_table', 1),
(5, '2016_10_21_190000_create_roles_table', 1),
(6, '2016_10_21_190000_create_settings_table', 1),
(7, '2016_11_30_135954_create_permission_table', 1),
(8, '2016_11_30_141208_create_permission_role_table', 1),
(9, '2016_12_26_201236_data_types__add__server_side', 1),
(10, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(11, '2017_01_14_005015_create_translations_table', 1),
(12, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(13, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(14, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(15, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(16, '2017_08_05_000000_add_group_to_settings_table', 1),
(17, '2017_11_26_013050_add_user_role_relationship', 1),
(18, '2017_11_26_015000_create_user_roles_table', 1),
(19, '2018_03_11_000000_add_user_settings', 1),
(20, '2018_03_14_000000_add_details_to_data_types_table', 1),
(21, '2018_03_16_000000_make_settings_value_nullable', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_05_04_174743_create_golves_table', 1),
(24, '2020_05_04_174808_create_car_rents_table', 1),
(25, '2020_05_04_174912_create_hotels_table', 1),
(26, '2020_05_04_180833_create_golf_includes_table', 1),
(27, '2020_05_04_180907_create_golf_pricings_table', 1),
(28, '2020_05_04_185713_create_car_rent_categories_table', 1),
(29, '2020_05_04_185913_create_car_rent_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(2, 'browse_bread', NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(3, 'browse_database', NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(4, 'browse_media', NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(5, 'browse_compass', NULL, '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(6, 'browse_menus', 'menus', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(7, 'read_menus', 'menus', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(8, 'edit_menus', 'menus', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(9, 'add_menus', 'menus', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(10, 'delete_menus', 'menus', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(11, 'browse_roles', 'roles', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(12, 'read_roles', 'roles', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(13, 'edit_roles', 'roles', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(14, 'add_roles', 'roles', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(15, 'delete_roles', 'roles', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(16, 'browse_users', 'users', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(17, 'read_users', 'users', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(18, 'edit_users', 'users', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(19, 'add_users', 'users', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(20, 'delete_users', 'users', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(21, 'browse_settings', 'settings', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(22, 'read_settings', 'settings', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(23, 'edit_settings', 'settings', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(24, 'add_settings', 'settings', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(25, 'delete_settings', 'settings', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(26, 'browse_hooks', NULL, '2020-05-04 12:21:53', '2020-05-04 12:21:53'),
(27, 'browse_car_rent_categories', 'car_rent_categories', '2020-05-04 12:29:49', '2020-05-04 12:29:49'),
(28, 'read_car_rent_categories', 'car_rent_categories', '2020-05-04 12:29:49', '2020-05-04 12:29:49'),
(29, 'edit_car_rent_categories', 'car_rent_categories', '2020-05-04 12:29:49', '2020-05-04 12:29:49'),
(30, 'add_car_rent_categories', 'car_rent_categories', '2020-05-04 12:29:49', '2020-05-04 12:29:49'),
(31, 'delete_car_rent_categories', 'car_rent_categories', '2020-05-04 12:29:49', '2020-05-04 12:29:49'),
(32, 'browse_car_rent_images', 'car_rent_images', '2020-05-04 12:30:23', '2020-05-04 12:30:23'),
(33, 'read_car_rent_images', 'car_rent_images', '2020-05-04 12:30:23', '2020-05-04 12:30:23'),
(34, 'edit_car_rent_images', 'car_rent_images', '2020-05-04 12:30:23', '2020-05-04 12:30:23'),
(35, 'add_car_rent_images', 'car_rent_images', '2020-05-04 12:30:23', '2020-05-04 12:30:23'),
(36, 'delete_car_rent_images', 'car_rent_images', '2020-05-04 12:30:23', '2020-05-04 12:30:23'),
(37, 'browse_car_rents', 'car_rents', '2020-05-04 12:34:29', '2020-05-04 12:34:29'),
(38, 'read_car_rents', 'car_rents', '2020-05-04 12:34:29', '2020-05-04 12:34:29'),
(39, 'edit_car_rents', 'car_rents', '2020-05-04 12:34:29', '2020-05-04 12:34:29'),
(40, 'add_car_rents', 'car_rents', '2020-05-04 12:34:29', '2020-05-04 12:34:29'),
(41, 'delete_car_rents', 'car_rents', '2020-05-04 12:34:29', '2020-05-04 12:34:29'),
(42, 'browse_hotels', 'hotels', '2020-05-10 08:05:26', '2020-05-10 08:05:26'),
(43, 'read_hotels', 'hotels', '2020-05-10 08:05:26', '2020-05-10 08:05:26'),
(44, 'edit_hotels', 'hotels', '2020-05-10 08:05:26', '2020-05-10 08:05:26'),
(45, 'add_hotels', 'hotels', '2020-05-10 08:05:26', '2020-05-10 08:05:26'),
(46, 'delete_hotels', 'hotels', '2020-05-10 08:05:26', '2020-05-10 08:05:26'),
(47, 'browse_hotel_images', 'hotel_images', '2020-05-10 08:06:56', '2020-05-10 08:06:56'),
(48, 'read_hotel_images', 'hotel_images', '2020-05-10 08:06:56', '2020-05-10 08:06:56'),
(49, 'edit_hotel_images', 'hotel_images', '2020-05-10 08:06:56', '2020-05-10 08:06:56'),
(50, 'add_hotel_images', 'hotel_images', '2020-05-10 08:06:56', '2020-05-10 08:06:56'),
(51, 'delete_hotel_images', 'hotel_images', '2020-05-10 08:06:56', '2020-05-10 08:06:56'),
(52, 'browse_golves', 'golves', '2020-05-10 09:28:27', '2020-05-10 09:28:27'),
(53, 'read_golves', 'golves', '2020-05-10 09:28:27', '2020-05-10 09:28:27'),
(54, 'edit_golves', 'golves', '2020-05-10 09:28:27', '2020-05-10 09:28:27'),
(55, 'add_golves', 'golves', '2020-05-10 09:28:27', '2020-05-10 09:28:27'),
(56, 'delete_golves', 'golves', '2020-05-10 09:28:27', '2020-05-10 09:28:27'),
(57, 'browse_golf_includes', 'golf_includes', '2020-05-10 09:31:11', '2020-05-10 09:31:11'),
(58, 'read_golf_includes', 'golf_includes', '2020-05-10 09:31:11', '2020-05-10 09:31:11'),
(59, 'edit_golf_includes', 'golf_includes', '2020-05-10 09:31:11', '2020-05-10 09:31:11'),
(60, 'add_golf_includes', 'golf_includes', '2020-05-10 09:31:11', '2020-05-10 09:31:11'),
(61, 'delete_golf_includes', 'golf_includes', '2020-05-10 09:31:11', '2020-05-10 09:31:11'),
(62, 'browse_golf_dailies', 'golf_dailies', '2020-05-10 09:40:49', '2020-05-10 09:40:49'),
(63, 'read_golf_dailies', 'golf_dailies', '2020-05-10 09:40:49', '2020-05-10 09:40:49'),
(64, 'edit_golf_dailies', 'golf_dailies', '2020-05-10 09:40:49', '2020-05-10 09:40:49'),
(65, 'add_golf_dailies', 'golf_dailies', '2020-05-10 09:40:49', '2020-05-10 09:40:49'),
(66, 'delete_golf_dailies', 'golf_dailies', '2020-05-10 09:40:49', '2020-05-10 09:40:49'),
(67, 'browse_golf_include_images', 'golf_include_images', '2020-05-10 09:44:15', '2020-05-10 09:44:15'),
(68, 'read_golf_include_images', 'golf_include_images', '2020-05-10 09:44:15', '2020-05-10 09:44:15'),
(69, 'edit_golf_include_images', 'golf_include_images', '2020-05-10 09:44:15', '2020-05-10 09:44:15'),
(70, 'add_golf_include_images', 'golf_include_images', '2020-05-10 09:44:15', '2020-05-10 09:44:15'),
(71, 'delete_golf_include_images', 'golf_include_images', '2020-05-10 09:44:15', '2020-05-10 09:44:15'),
(72, 'browse_golf_packages', 'golf_packages', '2020-05-11 09:40:19', '2020-05-11 09:40:19'),
(73, 'read_golf_packages', 'golf_packages', '2020-05-11 09:40:19', '2020-05-11 09:40:19'),
(74, 'edit_golf_packages', 'golf_packages', '2020-05-11 09:40:19', '2020-05-11 09:40:19'),
(75, 'add_golf_packages', 'golf_packages', '2020-05-11 09:40:19', '2020-05-11 09:40:19'),
(76, 'delete_golf_packages', 'golf_packages', '2020-05-11 09:40:19', '2020-05-11 09:40:19'),
(77, 'browse_travels', 'travels', '2020-05-11 12:22:50', '2020-05-11 12:22:50'),
(78, 'read_travels', 'travels', '2020-05-11 12:22:50', '2020-05-11 12:22:50'),
(79, 'edit_travels', 'travels', '2020-05-11 12:22:50', '2020-05-11 12:22:50'),
(80, 'add_travels', 'travels', '2020-05-11 12:22:50', '2020-05-11 12:22:50'),
(81, 'delete_travels', 'travels', '2020-05-11 12:22:50', '2020-05-11 12:22:50'),
(82, 'browse_travel_includes', 'travel_includes', '2020-05-11 12:25:14', '2020-05-11 12:25:14'),
(83, 'read_travel_includes', 'travel_includes', '2020-05-11 12:25:14', '2020-05-11 12:25:14'),
(84, 'edit_travel_includes', 'travel_includes', '2020-05-11 12:25:14', '2020-05-11 12:25:14'),
(85, 'add_travel_includes', 'travel_includes', '2020-05-11 12:25:14', '2020-05-11 12:25:14'),
(86, 'delete_travel_includes', 'travel_includes', '2020-05-11 12:25:14', '2020-05-11 12:25:14'),
(87, 'browse_travel_dailies', 'travel_dailies', '2020-05-11 12:27:29', '2020-05-11 12:27:29'),
(88, 'read_travel_dailies', 'travel_dailies', '2020-05-11 12:27:29', '2020-05-11 12:27:29'),
(89, 'edit_travel_dailies', 'travel_dailies', '2020-05-11 12:27:29', '2020-05-11 12:27:29'),
(90, 'add_travel_dailies', 'travel_dailies', '2020-05-11 12:27:29', '2020-05-11 12:27:29'),
(91, 'delete_travel_dailies', 'travel_dailies', '2020-05-11 12:27:29', '2020-05-11 12:27:29'),
(97, 'browse_bookings', 'bookings', '2020-05-12 11:48:17', '2020-05-12 11:48:17'),
(98, 'read_bookings', 'bookings', '2020-05-12 11:48:17', '2020-05-12 11:48:17'),
(99, 'edit_bookings', 'bookings', '2020-05-12 11:48:17', '2020-05-12 11:48:17'),
(100, 'add_bookings', 'bookings', '2020-05-12 11:48:17', '2020-05-12 11:48:17'),
(101, 'delete_bookings', 'bookings', '2020-05-12 11:48:17', '2020-05-12 11:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-05-04 12:21:52', '2020-05-04 12:21:52'),
(2, 'user', 'Normal User', '2020-05-04 12:21:52', '2020-05-04 12:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itinerary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favorite` tinyint(4) NOT NULL,
  `recomended` tinyint(4) NOT NULL,
  `hero_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `city`, `location`, `category`, `itinerary`, `favorite`, `recomended`, `hero_image`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta', 'Indonesia', 'inbound', 'Hello; Worlds!', 1, 1, 'travels\\May2020\\0dAhCjF2UyWlEkKblY9j.png', 'travels\\May2020\\O8HjyaYRMLPJoq32Gmlm.png', '2020-05-11 12:35:09', '2020-05-11 12:35:09'),
(2, 'Depok', 'Indonesia', 'inbound', 'Hello; Worlds!', 1, 1, 'travels\\May2020\\TLd3m15nePzXpEq15o3m.png', 'travels\\May2020\\4i1PNgn2Eb73w4s3N3mT.png', '2020-05-11 12:35:55', '2020-05-11 12:35:55'),
(3, 'Bogor', 'Indonesia', 'inbound', 'Hello; Worlds!', 1, 1, 'travels\\May2020\\QMA5xXShA37w3oLFQ5GC.png', 'travels\\May2020\\gj8ZJfPPa9U2Sfqa0ksD.png', '2020-05-11 12:36:19', '2020-05-11 12:36:19'),
(4, 'Bekasi', 'Indonesia', 'inbound', 'Hello; Worlds!', 1, 1, 'travels\\May2020\\k8yRdwFNPzawBfMzQOJH.png', 'travels\\May2020\\8MYOBrpePBmLZc4xbPaF.png', '2020-05-11 12:36:43', '2020-05-11 12:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `travel_dailies`
--

CREATE TABLE `travel_dailies` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `travel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_dailies`
--

INSERT INTO `travel_dailies` (`id`, `day`, `activities`, `image`, `created_at`, `updated_at`, `travel_id`) VALUES
(1, 'Day 1', 'Hello; Worlds!', 'travel-dailies\\May2020\\nBfa12yDCJvJd8hVUA3L.png', '2020-05-11 12:39:28', '2020-05-11 12:39:28', 1),
(2, 'Day 2', 'Hello; Worlds!', 'travel-dailies\\May2020\\rdt40GIttxdVG97wAOKZ.png', '2020-05-11 12:39:49', '2020-05-11 12:39:49', 1),
(3, 'Day 1', 'Hello; Worlds!', 'travel-dailies\\May2020\\j57d3OBQodSxhVtAQQXQ.png', '2020-05-11 12:40:12', '2020-05-11 12:40:12', 2),
(4, 'Day 2', 'Hello; Worlds!', 'travel-dailies\\May2020\\oI21yD5BozMiEO5iNpda.png', '2020-05-11 12:40:28', '2020-05-11 12:40:28', 2),
(5, 'Day 1', 'Hello; Worlds!', 'travel-dailies\\May2020\\TKMQ2Jn6K5m4w4qbcjYr.png', '2020-05-11 12:40:42', '2020-05-11 12:40:42', 3),
(6, 'Day 2', 'Hello; Worlds!', 'travel-dailies\\May2020\\P8rFiAo0x3Rt1CvBgzgk.png', '2020-05-11 12:40:59', '2020-05-11 12:40:59', 3),
(7, 'Day 1', 'Hello; Worlds!', 'travel-dailies\\May2020\\agOG9Nqu2bOllCrm6FhJ.png', '2020-05-11 12:41:23', '2020-05-11 12:41:23', 4),
(8, 'Day 2', 'Hello; Worlds!', 'travel-dailies\\May2020\\BKsronBODn96sshyRkz1.png', '2020-05-11 12:41:37', '2020-05-11 12:41:37', 4);

-- --------------------------------------------------------

--
-- Table structure for table `travel_includes`
--

CREATE TABLE `travel_includes` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `travel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_includes`
--

INSERT INTO `travel_includes` (`id`, `image`, `description`, `travel_id`, `created_at`, `updated_at`) VALUES
(1, 'travel-includes\\May2020\\YZ6tZWCcOwwYBOfqA0mB.png', 'Bantal', 1, '2020-05-11 12:37:44', '2020-05-11 12:37:44'),
(2, 'travel-includes\\May2020\\yURLq81Bklx87BKvVqik.png', 'Hotel', 2, '2020-05-11 12:37:57', '2020-05-11 12:37:57'),
(3, 'travel-includes\\May2020\\7qwDB3Iwo2kg18M2zXNp.png', 'Hotel', 3, '2020-05-11 12:38:14', '2020-05-11 12:38:14'),
(4, 'travel-includes\\May2020\\cNgJqmxAlBYWYakFYvVo.png', 'Hotel', 4, '2020-05-11 12:38:29', '2020-05-11 12:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$Qyr01qmTg.EfzjfnD/vDp.jN3BEcY2f5L0vpMfRC1sHTw2C1.ACfC', NULL, NULL, '2020-05-04 12:22:48', '2020-05-04 12:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_cars`
--
ALTER TABLE `booking_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_golves`
--
ALTER TABLE `booking_golves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_rents`
--
ALTER TABLE `car_rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_rent_categories`
--
ALTER TABLE `car_rent_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_rent_images`
--
ALTER TABLE `car_rent_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golf_dailies`
--
ALTER TABLE `golf_dailies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golf_includes`
--
ALTER TABLE `golf_includes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golf_include_images`
--
ALTER TABLE `golf_include_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golf_packages`
--
ALTER TABLE `golf_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golves`
--
ALTER TABLE `golves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_dailies`
--
ALTER TABLE `travel_dailies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_includes`
--
ALTER TABLE `travel_includes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking_cars`
--
ALTER TABLE `booking_cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_golves`
--
ALTER TABLE `booking_golves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_rents`
--
ALTER TABLE `car_rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_rent_categories`
--
ALTER TABLE `car_rent_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_rent_images`
--
ALTER TABLE `car_rent_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golf_dailies`
--
ALTER TABLE `golf_dailies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `golf_includes`
--
ALTER TABLE `golf_includes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `golf_include_images`
--
ALTER TABLE `golf_include_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `golf_packages`
--
ALTER TABLE `golf_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `golves`
--
ALTER TABLE `golves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel_images`
--
ALTER TABLE `hotel_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `travel_dailies`
--
ALTER TABLE `travel_dailies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `travel_includes`
--
ALTER TABLE `travel_includes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
