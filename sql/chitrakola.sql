-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2020 at 05:01 AM
-- Server version: 5.6.49-cll-lve
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
-- Database: `chitrakola`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` bigint(20) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `category_id`, `artist_id`, `name`, `slug`, `code`, `price`, `size`, `year`, `media`, `order`, `description`, `status`, `featured`, `image`, `created_at`, `updated_at`) VALUES
(31, 1, 22, 'Cityscape - 1  | Sold', 'Cityscape - 1', '36', '30000.00', 'W20 x H20 Inches', '2020', 'Acrylic on Canvas', 2001, NULL, 1, 0, '1228.JPG', '2020-12-11 18:00:22', '2020-12-19 02:18:51'),
(32, 1, 22, 'Moonlit Horizon', 'Moonlit Horizon', '37', '30000.00', 'W20 x H20 Inches', '2020', 'Acrylic on Canvas', 202, NULL, 1, 0, '5420.JPG', '2020-12-11 18:02:26', '2020-12-19 02:18:38'),
(34, 36, 24, 'Freedom in the Days of Corona-1', 'Freedom in the Days of Corona-1', '1', 'Not for Sale', 'W90 x H75 cm', '2020', 'Acrylic on canvas', 100, NULL, 1, 0, '87785.jpg', '2020-12-12 18:18:00', '2020-12-19 02:18:15'),
(35, 36, 24, 'Freedom in the Days of Corona-2', 'Freedom in the Days of Corona-2', '2', '100000 BDT', 'W90 x H75 cm', '2020', 'Acrylic on canvas', 107, NULL, 1, 0, '87323.jpg', '2020-12-12 18:19:39', '2020-12-19 02:17:41'),
(36, 36, 24, 'Freedom in the Days of Corona-3', 'Freedom in the Days of Corona-3', '3', '100000', 'H90 x W75 cm', '2020', 'Acrylic on canvas', 106, NULL, 1, 0, '18853.jpg', '2020-12-12 18:21:31', '2020-12-19 02:17:28'),
(37, 36, 24, 'Freedom in the Days of Corona-4', 'Freedom in the Days of Corona-4', '4', '90000 BDT   /  1100 USD', 'W75 x H75 cm', '2020', 'Acrylic on canvas', 105, NULL, 1, 0, '79095.jpg', '2020-12-12 18:22:42', '2020-12-19 02:17:17'),
(38, 36, 24, 'Freedom in the Days of Corona-5', 'Freedom in the Days of Corona-5', '5', '90000 BDT', 'W75 x H75 cm', '2020', 'Acrylic on canvas', 103, NULL, 1, 0, '84269.jpg', '2020-12-12 18:23:58', '2020-12-19 02:17:04'),
(39, 36, 24, 'Freedom in the Days of Corona-6', 'Freedom in the Days of Corona-6', '6', '90000 BDT', 'W75 x H75 cm', '2020', 'Acrylic on canvas', 103, NULL, 1, 0, '51369.jpg', '2020-12-12 18:28:11', '2020-12-19 02:16:54'),
(40, 36, 24, 'Freedom in the Days of Corona-7', 'Freedom in the Days of Corona-7', '7', 'Not for Sale', 'W75 x H75 cm', '2020', 'Acrylic on canvas', 102, NULL, 1, 0, '39514.jpg', '2020-12-12 18:32:54', '2020-12-19 02:16:18'),
(41, 36, 24, 'Freedom in the Days of Corona-8', 'Freedom in the Days of Corona-8', '8', '90000 BDT   /  1100 USD', 'W75 x H75 cm', '2020', 'Acrylic on canvas', 101, NULL, 1, 0, '74607.jpg', '2020-12-12 18:36:08', '2020-12-19 02:15:50'),
(42, 40, 1, 'Robi by Artist Abdul Mannan', 'Robi', 'Alumni-1', 'Not Available', '42x30 Inches', '2020', 'Acrylic on Canvas', 1, NULL, 1, 0, '41897.png', '2020-12-18 22:12:07', '2020-12-19 02:25:56'),
(43, 40, 1, 'Beneath the Black Moon', 'Beneath the Black Moon', 'Almuni- 2', 'Not Available', '36 x 30 Inches', '2016', 'Acrylic on Canvas', 4, NULL, 1, 0, '84398.png', '2020-12-18 22:16:31', '2020-12-19 02:13:09'),
(44, 40, 1, 'Artwork of Artist Afroza Begum', 'Artwork of Artist Afroza Begum', 'Alumni- 3', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 15, NULL, 1, 0, '54128.png', '2020-12-18 22:22:00', '2020-12-19 02:12:46'),
(45, 40, 1, 'Artwork of AKM  Alamgir Haque', 'Artwork of AKM  Alamgir Haque', 'Alumni- 4', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 5, NULL, 1, 0, '76067.png', '2020-12-18 22:25:13', '2020-12-19 02:20:30'),
(46, 40, 1, 'Boshonto by Alpha Begum', 'Boshonto by Alpha Begum', 'Alumni- 5', 'Not Available', '30 x 24 Incs', 'Not Available', 'Oil on Canvas', 8, NULL, 1, 0, '89013.png', '2020-12-18 22:28:40', '2020-12-19 02:20:47'),
(47, 40, 1, 'Image by Artist F Rahman Bhutan', 'Image by Artist F Rahman Bhutan', 'Alumni- 6', 'Not Available', '24 x 30 Incs', '2020', 'Acrylic on Canvas', 2, NULL, 1, 0, '77828.png', '2020-12-18 22:30:32', '2020-12-18 22:54:54'),
(48, 40, 1, 'Mother - 3 by Artist Biswhajit Goswami', 'Mother - 3 by Artist Biswhajit Goswami', 'Alumni- 7', 'Not Available', '122 x 176 Cm', '2014', 'Mixed Media', 3, NULL, 1, 0, '60758.JPG', '2020-12-18 22:39:28', '2020-12-19 02:11:30'),
(49, 40, 1, 'In search of Roots by Artist Dulal Chandrow Gain', 'In search of Roots by Artist Dulal Chandrow Gain', 'Alumni- 7', 'Not Available', '30 x 36 Incs', '2019', 'Acrylic on Canvas', 7, NULL, 1, 0, '71881.png', '2020-12-18 22:51:37', '2020-12-19 02:12:26'),
(51, 40, 1, 'Coorona Tarua by Artist Fauzul Kabir', 'Panting Alumni', '10 A', 'Not Available', '66 x 60 Inches', '2020', 'Acrylic on canvas', 10, NULL, 1, 0, '96540.png', '2020-12-19 15:22:29', '2020-12-19 15:24:44'),
(52, 40, 1, 'Coorona Tarua by Artist Fauzul Kabir', 'Panting Alumni', '10 A', 'Not Available', '66 x 60 Inches', '2020', 'Acrylic on canvas', 10, NULL, 1, 0, '36693.png', '2020-12-19 15:23:45', '2020-12-19 15:24:35'),
(53, 37, 22, 'Electronics', 'iron', '+880', '315.00 fgfg', '24\'x24\'', '2018', 'TOILO RONG', 20, '<p>bn b&nbsp;</p>', 0, 0, 'images/default.jpg', '2020-12-20 17:48:52', '2020-12-20 17:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order` bigint(20) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `designation`, `phone`, `mail`, `image`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Default', 'default', 'no phone', 'nomail@gmail.com', 'images/default.jpg', 0, 1, '2020-12-06 12:10:54', '2020-12-06 12:12:54'),
(2, 'Artist and Sculptor Prof. Hamidzzaman Khan', 'Artist and Sculptor', '01720063', 'mety@gmail.com', '79299.jpg', 1, 1, '2020-11-28 10:33:48', '2020-12-10 15:52:25'),
(22, 'Architect and Artist Mostafa Khalid Palash', 'exercitationem', '(678) 631-7476', 'iokeefe@gmail.com', '67608.jpg', 1, 3, '2020-12-01 10:05:55', '2020-12-10 21:25:41'),
(24, 'Artist Prof. Mostafizul Haque', 'CEO at Google INC', '01934241244', 'me@gmail.com', '57640.jpg', 1, 3, '2020-12-06 12:12:35', '2020-12-10 15:55:59'),
(25, 'Artist Anisuzzaman', 'CEO at Google INC', '01934241244', 'me@gmail.com', '13026.JPG', 1, 5, '2020-12-09 13:02:19', '2020-12-10 19:56:32'),
(26, 'Artist Masud Ahmed', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '7429.jpg', 1, 17, '2020-12-10 16:33:28', '2020-12-10 21:50:20'),
(27, 'Artist Sadek Ahmed', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '23439.jpg', 1, 15, '2020-12-10 16:34:51', '2020-12-10 21:06:43'),
(28, 'Artist Karu Titas', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '57392.jpg', 1, 4, '2020-12-10 19:52:05', '2020-12-10 19:56:16'),
(29, 'Artist Preema Nazia Andaleeb', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '54317.jpg', 1, 9, '2020-12-10 19:55:42', '2020-12-10 21:11:44'),
(30, 'Artist Azmeer Hossain', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '69488.jpg', 1, 10, '2020-12-10 20:44:01', '2020-12-10 21:12:00'),
(31, 'Artist Najib Tareque', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '43981.jpg', 1, 6, '2020-12-10 20:53:26', '2020-12-10 20:54:15'),
(32, 'Artist Bipul Shah', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '59027.jpg', 1, 7, '2020-12-10 20:58:14', '2020-12-10 20:59:07'),
(33, 'Artist Gulshan Hossain', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '56995.jpg', 1, 8, '2020-12-10 21:04:24', '2020-12-10 21:05:40'),
(34, 'Artist Shaymal Biswas', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '34319.jpg', 1, 11, '2020-12-10 21:12:43', '2020-12-10 21:12:51'),
(35, 'Artist Golam Moshiur Rahman Chowdhury Rana', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '22459.jpg', 1, 12, '2020-12-10 21:14:19', '2020-12-10 21:14:42'),
(36, 'Artist Shohag Parvez', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '87248.jpg', 1, 16, '2020-12-10 21:16:37', '2020-12-10 21:17:38'),
(37, 'Artist Abdul Mannan', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '66534.jpg', 1, 2, '2020-12-10 21:25:17', '2020-12-10 21:25:30'),
(38, 'Artist Kamruzzoha', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '20302.jpg', 1, 25, '2020-12-10 21:30:46', '2020-12-11 13:00:40'),
(39, 'Artist Palash Datta', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '50040.jpg', 1, 20, '2020-12-10 21:53:25', '2020-12-11 13:06:14'),
(40, 'Artist Biplob Chakroborty', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '33075.jpg', 1, 21, '2020-12-10 21:55:52', '2020-12-11 13:05:45'),
(41, 'Md Kauser Hossain', 'Freelance artist', '017707054747', 'artistsadekahmed@gmail.com', '61079.jpg', 1, 16, '2020-12-11 12:59:28', '2020-12-11 13:07:45'),
(42, 'Artist Azmal Uddin', 'Freelance artist', '017707054747', 'artistsadekahmed@gmail.com', '10986.jpg', 1, 15, '2020-12-11 13:09:24', '2020-12-11 13:09:55'),
(43, 'Artist Ripon Kumar Das', 'Freelance artist', '017707054747', 'artistsadekahmed@gmail.com', '97321.JPG', 1, 9, '2020-12-11 18:20:35', '2020-12-11 18:27:53'),
(44, 'Artist and Sculptor Ivy Zaman', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '88446.jpg', 1, 4, '2020-12-12 17:46:23', '2020-12-12 17:47:30'),
(45, 'Artist Arafat Polash', 'Freelance Artist', '01770705474', 'artistsadekahmed@gmail.com', '83453.jpg', 1, 18, '2020-12-17 16:54:16', '2020-12-17 16:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `art_news`
--

CREATE TABLE `art_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `art_news`
--

INSERT INTO `art_news` (`id`, `user_id`, `heading`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'We Are The Leader In The Architectural', 'gfg fgfdg', 1, '44936.jpg', '2020-11-28 16:04:32', '2020-12-05 13:15:06'),
(2, 1, 'it is good', 'sdfvgd fdsg', 1, '52915.jpg', '2020-11-28 16:11:46', '2020-12-04 14:11:11'),
(3, 1, 'We Are The Leader In The Architectural', '<p><span style=\"font-weight: bold; color: #5f6368; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum</span><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight: bold; color: #5f6368; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem Ipsum</span><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">: usage</span><wbr style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><wbr style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><span style=\"font-weight: bold; color: #5f6368; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum</span><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It\'s also called placeholder (or filler) text.</span></p>', 1, '83627.jpg', '2020-11-30 16:23:42', '2020-12-04 14:11:13'),
(4, 1, 'dfd', '<p>dfd dfasdf fdsf</p>', 1, 'images/default.jpg', '2020-11-30 16:59:52', '2020-12-04 14:11:14'),
(5, 1, 'gh ghbgfh gh', '<p>gbgfvb fghgh</p>', 1, 'images/default.jpg', '2020-11-30 17:09:47', '2020-12-05 13:15:09'),
(6, 1, 'it is good', '<p>v v svf sfd</p>', 1, '73179.JPG', '2020-12-05 11:18:35', '2020-12-05 13:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `code`, `art_name`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(119, '36', 'Cityscape - 1  | Sold', 'Shakil Mehrab', 'sagormitro07@gmail.com', '01934241244', 'malibag', '2020-12-11 22:42:22', '2020-12-11 22:42:22'),
(117, '36', 'Cityscape - 1  | Sold', 'Shakil Mehrab', 'sagormitro07@gmail.com', '01934241244', 'malibag', '2020-12-11 22:13:36', '2020-12-11 22:13:36'),
(118, '37', 'Moonlit Horizon', 'Shakil Mehrab', 'sagormitro07@gmail.com', '01934241244', 'malibag', '2020-12-11 22:32:36', '2020-12-11 22:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `description` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `artist_id`, `name`, `slug`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Default', 'default', 'images/default.jpg', '<p><span style=\"color: #202124; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;\">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</span></p>', 0, '2020-12-06 12:33:28', '2020-12-06 13:06:15'),
(5, 1, 'Coming up _ Duet Exhibition', 'Coming up _ Duet Exhibition', '17267.png', NULL, 0, '2020-12-01 14:13:23', '2020-12-15 18:15:56'),
(22, 1, '3D and Virtual Group Exhibition \" Virtual VS Real \" |  Season -2 |  4-30 August 2020', '3D and Virtual Group Exhibition \" Virtual VS Real \" |  Season -2 |  4-30 August 2020', '39139.jpg', NULL, 1, '2020-12-02 07:32:01', '2020-12-11 17:20:57'),
(36, 1, 'Solo Exhibition of Artist Prof. Mostafizul Haque |  15 to 30 June 2020', 'Solo Exhibition of Artist Prof. Mostafizul Haque |  15 to 30 June 2020', '22892.jpg', NULL, 1, '2020-12-05 10:39:45', '2020-12-11 17:19:49'),
(37, 1, '3D and Virtual Group Exhibition  \"Virtual VS Real \" |  Season-1  | 10 - 31 May 2020', '3D and Virtual Group Exhibition  \"Virtual VS Real \" | Season-1 |  10 - 31 May 2020', '38749.jpg', NULL, 1, '2020-12-05 11:17:25', '2020-12-11 17:22:31'),
(39, 1, '3D and Virtual Group Exhibition \" Triumph of Death\"  | 16 - 24 OCT 2020', '3D and Virtual Group Exhibition \" Triumph of Death\"  | 16 - 24 OCT 2020', '3124.jpg', NULL, 1, '2020-12-06 12:27:57', '2020-12-11 17:23:21'),
(40, 1, 'Art Exhibition of Dhaka University Department of Drawing and Painting Alumni Association  | 16 to 31 December 2020', 'Dhaka University Department of Drawing and Painting Alumni Association Art Exhibition | 16 to 31 December 2020', '18448.jpg', NULL, 1, '2020-12-15 18:15:30', '2020-12-15 18:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_11_27_223040_create_categories_table', 8),
(5, '2020_11_28_001016_create_artists_table', 1),
(11, '2020_11_28_170836_create_art_table', 7),
(7, '2020_11_28_201257_create_slides_table', 3),
(8, '2020_11_28_205102_create_buyers_table', 4),
(9, '2020_11_28_214242_create_art_news_table', 5),
(10, '2020_11_29_144050_create_virtuals_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_heading` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `heading`, `sub_heading`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Only For Curious One', 'Come and See', '31447.JPG', '2020-11-28 14:43:36', '2020-12-04 12:31:50'),
(4, 'Why Dont You join with us', 'This saturday', '59861.JPG', '2020-12-03 04:41:59', '2020-12-04 12:31:03'),
(5, 'it is good and nice', 'Come and join', '49064.JPG', '2020-12-03 06:40:27', '2020-12-04 12:30:16'),
(6, 'Its Awesome', 'Next Friday', '42209.JPG', '2020-12-04 12:29:29', '2020-12-04 12:29:29'),
(7, 'Worlds Best Art', 'Find your one', '32245.JPG', '2020-12-04 12:32:25', '2020-12-04 12:32:25'),
(8, 'On This Friday', 'The greatest Exibition', '31479.JPG', '2020-12-04 12:33:09', '2020-12-04 12:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sadek Ahmed', 'artistsadekahmed@gmail.com', 1, NULL, '$2y$10$X8BuS5uYBR.aDG1DxTKf/ObsWfUqwCEMTp.bCEpFeU/ilCZM5ser2', 'ltq7PnA2zIyd4HZqjqp44I7dBn8yRsknjdR7ttNwjtlJUihvGBqaukEGVxF3', '2020-11-28 09:34:22', '2020-11-28 09:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `virtuals`
--

CREATE TABLE `virtuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'youtube',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `virtuals`
--

INSERT INTO `virtuals` (`id`, `heading`, `type`, `status`, `link`, `created_at`, `updated_at`) VALUES
(3, 'it is good', 'youtube', 1, 'https://www.youtube.com/embed/6Na7GSV9bVY?start=19', '2020-12-19 02:43:26', '2020-12-19 04:14:06'),
(4, 'We Are The Leader In The Architectural', 'facebook', 0, 'https://www.facebook.com/NASA/videos/304342987584093/', '2020-12-19 02:52:48', '2020-12-19 04:14:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `art_ibfk_1` (`artist_id`),
  ADD KEY `art_ibfk_2` (`category_id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_news`
--
ALTER TABLE `art_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `art_news_ibfk_1` (`user_id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `virtuals`
--
ALTER TABLE `virtuals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `art_news`
--
ALTER TABLE `art_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `virtuals`
--
ALTER TABLE `virtuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `art_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `art_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `art_news`
--
ALTER TABLE `art_news`
  ADD CONSTRAINT `art_news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
