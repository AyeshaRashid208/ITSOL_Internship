-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 10:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutbannersections`
--

CREATE TABLE `aboutbannersections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutbannersections`
--

INSERT INTO `aboutbannersections` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '2022-07-17 07:43:18', '2022-07-17 07:43:18'),
(2, 'About Us', '2022-07-17 08:01:49', '2022-07-17 08:01:49'),
(3, 'About Us', '2022-07-17 08:03:17', '2022-07-17 08:03:17'),
(4, 'About Us', '2022-07-17 08:29:14', '2022-07-17 08:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `aboutexpertisesections`
--

CREATE TABLE `aboutexpertisesections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutexpertisesections`
--

INSERT INTO `aboutexpertisesections` (`id`, `name`, `description`, `hidden_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Expert Team', 'The Argument In Favorite Of Using Filler To Text Goes Some Thing Like This Top', 'feature-expert', '1657871539.feature.jpg', '2022-07-15 02:39:02', '2022-07-15 02:52:19'),
(2, 'Best Finance Brand', 'The Argument In Favorite Of Using Filler To Text Goes Some Thing Like This Top', 'feature-brand', '1657871614.1656608278.1656608062.feature-1.jpg', '2022-07-15 02:53:35', '2022-07-15 02:53:35'),
(3, 'Best Leadership Ideas', 'The Argument In Favorite Of Using Filler To Text Goes Some Thing Like This Top', 'feature-ideas', '1657871798.feature-2.jpg', '2022-07-15 02:56:38', '2022-07-15 02:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `aboutfourthsections`
--

CREATE TABLE `aboutfourthsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutfourthsections`
--

INSERT INTO `aboutfourthsections` (`id`, `message`, `title`, `description`, `first_heading`, `first_description`, `second_heading`, `second_description`, `third_heading`, `third_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WHY CHOOSE US', 'There are many companies ', 'Cookies are set through this site to recognise your repeat visits and prefe rences, serve more relevant ads, facilitate social sharing, and to violanal yse traffic.', 'Expert Team', 'The Argument In Favorite Of Using Filler To Text Goes Some Thing Like This Top', 'Best Finance Brand', 'The Argument In Favorite Of Using Filler To Text Goes Some Thing Like This Top', 'Best Leadership Ideas', 'The Argument In Favorite Of Using Filler To Text Goes Some Thing Like This Top', '1656608278.1656608062.feature-1.jpg', '2022-06-30 11:57:58', '2022-06-30 11:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `aboutsecondsections`
--

CREATE TABLE `aboutsecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutsecondsections`
--

INSERT INTO `aboutsecondsections` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'icon flaticon-chess', 'Business Growth', 'The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.', '2022-07-13 06:33:07', '2022-07-13 06:33:07'),
(2, 'icon flaticon-document-2', 'Strategy Process', 'The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.', '2022-07-13 06:33:33', '2022-07-13 06:33:33'),
(3, 'icon flaticon-banking', 'Finance Manage', 'The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.', '2022-07-13 06:34:11', '2022-07-13 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `aboutskills`
--

CREATE TABLE `aboutskills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutthirdsections`
--

CREATE TABLE `aboutthirdsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutthirdsections`
--

INSERT INTO `aboutthirdsections` (`id`, `message`, `heading`, `main_title`, `description`, `skill_one`, `skill_two`, `skill_three`, `created_at`, `updated_at`) VALUES
(1, 'WE ARE PIXER', 'we are happy to assist you all time moment', 'The purpose of lorem ipsum is to create', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.', 'HTML', 'PHP', 'CSS', '2022-06-30 10:44:19', '2022-06-30 10:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$UPXRbFmVS/TImbgd/PBBP.k/F5FpInOCqQM1cfxfSMDHBgmZr8O1m', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Creative to plan your business', '1656940514.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 08:15:14', '2022-07-04 08:15:14'),
(2, 'Creative to plan your business', '1656944389.image-3.png', 'Increase productivity with simple to-do app to manage your personal budgets.', '2022-07-04 09:19:49', '2022-07-04 09:19:49'),
(3, 'Creative to plan your business', '1656951617.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 11:20:17', '2022-07-04 11:20:17'),
(4, 'Creative to plan your business', '1656951682.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 11:21:23', '2022-07-04 11:21:23'),
(5, 'Creative to plan your business', '1656951987.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 11:26:27', '2022-07-04 11:26:27'),
(6, 'Creative to plan your business', '1656952189.1656951682.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 11:29:49', '2022-07-04 11:29:49'),
(7, 'Creative to plan your business', '1656952873.1656951682.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 11:41:13', '2022-07-04 11:41:13'),
(8, 'Creative to plan your buisness', '1657014577.1656951617.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-04 12:15:27', '2022-07-05 04:49:37'),
(9, 'Creative to plan your buisness', '1657033556.1657004342.1656951682.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-05 09:59:46', '2022-07-05 10:05:56'),
(10, 'Creative to plan your buisness', '1657034619.1657012930.1656951617.image-3.png', 'Increase productivity with simple to-do app. app to manage your personal budgets.', '2022-07-05 10:23:39', '2022-07-05 10:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `blogbanners`
--

CREATE TABLE `blogbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogbanners`
--

INSERT INTO `blogbanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Blog single', '2022-07-19 08:39:55', '2022-07-19 08:39:55'),
(2, 'Blog Single', '2022-07-19 08:40:10', '2022-07-19 08:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `bloglistbanners`
--

CREATE TABLE `bloglistbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloglistbanners`
--

INSERT INTO `bloglistbanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'blog list', '2022-07-17 09:24:00', '2022-07-17 09:24:00'),
(2, 'Blog list', '2022-07-17 09:28:02', '2022-07-17 09:28:02'),
(3, 'Blog single', '2022-07-19 08:36:22', '2022-07-19 08:36:22'),
(4, 'Blog list', '2022-07-19 08:38:20', '2022-07-19 08:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `name`, `title`, `fimage`, `one`, `two`, `image_one`, `image_two`, `heading`, `three`, `quote`, `catagory`, `tag_one`, `tag_two`, `tag_three`, `tag_four`, `created_at`, `updated_at`) VALUES
(1, 'July 24, 2019', 'Jhonny Rip', 'Thirty-two surrogate mothers charged with human trafficking towards fonting.', '1658151910.news-5.jpg', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more vant ads, facilitate social sharing, and to violanalyse traffic.Others wondered if the hand of od was at work over New York, heralding perhaps a new Pope, or the moment when Evangeli cals say true believers will be swept up, or \"raptured\", to heaven. When these electrons recombine with the excited atoms, returning them to their starting energy state, light is emitted.', 'When these electrons recombine with the excited atoms, returning them to their starting energy state, light is emitted. The colour of the light emitted depends on the type of atoms involved.', '1658151910.1658135951.news-9.jpg', '1658151910.1658135951.news-10.jpg', 'A Kentucky woman who was accused last year.', 'A blue colour is associated with oxygen atoms; pink/purple colours are associated with nitrogen atoms. Oxygen and nitrogen are the gases that dominate the air we breathe. licals say true believers will be swept up, or \"raptured\", to heaven. When these electrons recombine with the excited atoms, re turning them to their starting energy state, light is emitted.', 'What sort of men would think it is acceptable to subject a young girl to this level of brutality and violence? an attack like this in our communities and we must all work together.', 'Technology', 'Buisness', 'LifeStyle', 'Cloud', 'Technique', '2022-07-18 05:07:21', '2022-07-18 08:45:10'),
(2, 'July 25, 2019', 'Jhonny Rip', 'Top aide to possible contender forced to resign over creepy.', '1658151780.1657795637.1657793632.news-4.jpg', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to violanalyse traffic. Others wondered if the hand of God was at work over New York, heralding perhaps a new Pope, or the moment when Evangelicals say true believers will be swept up, or \"raptured\", to heaven.', NULL, '1658151780.1657726449.24.jpg', '1658151780.1657789986.7.jpg', 'A Kentucky woman who was accused last year.', 'A blue colour is associated with oxygen atoms; pink/purple colours are associated with nitrogen atoms.', 'What sort of men would think it is acceptable to subject a young girl to this level of brutality and violence? an attack like this in our communities and we must all work together.', 'Consulting', 'Buisness', 'LifeStyle', 'Cloud', NULL, '2022-07-18 08:34:21', '2022-07-18 08:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogsecondsections`
--

CREATE TABLE `blogsecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogsecondsections`
--

INSERT INTO `blogsecondsections` (`id`, `image`, `title`, `description`, `name`, `date`, `created_at`, `updated_at`) VALUES
(1, '1657795637.1657793632.news-4.jpg', 'Thirty-two surrogate mothers charged with human trafficking.', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic.Others wondered if the hand of God was at work over New York, heralding perhaps a new Pope, or the moment when Evangelicals say true believers will be swept up, or \"raptured\", to heaven.', 'Jhonny Rip', 'July 25, 2019', '2022-07-14 05:13:52', '2022-07-14 05:47:17'),
(2, '1657795996.news-5.jpg', 'Top aide to possible contender forced to resign over creepy.', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic. Others wondered if the hand of God was at work over New York, heralding perhaps a new Pope, or the moment when Evangelicals say true believers will be swept up, or \"raptured\", to heaven.', 'Jhonny Rip', 'July 25, 2019', '2022-07-14 05:53:16', '2022-07-14 05:53:16'),
(3, '1657796046.news-6.jpg', 'Chinese clients have been released after agreeing to keep.', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic.Others wondered if the hand of God was at work over New York, heralding perhaps a new Pope, or the moment when Evangelicals say true believers will be swept up, or \"raptured\", to heaven.', 'Jhonny Rip', 'July 25, 2019', '2022-07-14 05:54:06', '2022-07-14 05:54:06'),
(4, '1657799596.news-7.jpg', 'New York awe-struck as sky over Queens turns blue.', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic.Others wondered if the hand of God was at work over New York, heralding perhaps a new Pope, or the moment when Evangelicals say true believers will be swept up, or \"raptured\", to heaven.', 'Jhonny Rip', 'July 25, 2019', '2022-07-14 05:55:29', '2022-07-14 06:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `catagorys`
--

CREATE TABLE `catagorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagorys`
--

INSERT INTO `catagorys` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(1, 'Consulting', '2022-07-18 12:05:58', '2022-07-18 12:16:53'),
(2, 'Technology', '2022-07-18 12:06:07', '2022-07-18 12:06:07'),
(3, 'Life Style', '2022-07-18 12:18:21', '2022-07-18 12:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `message`, `username`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'It’s no secret that the digital industry is booming. From exciting startups to need ghor global and brands, companies are reaching out.', 'Riva Collins', 'dummyuser@gmail.com', 'www.madridista.esp', '2022-07-19 08:20:00', '2022-07-19 08:20:00'),
(2, 'It’s no secret that the digital industry is booming. From exciting startups to need ghor hmiu global and brands, companies are reaching out.', 'Obila Doe', 'dummyuser1@gmail.com', 'www.madridista.esp', '2022-07-19 08:28:20', '2022-07-19 08:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `contactbanners`
--

CREATE TABLE `contactbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactbanners`
--

INSERT INTO `contactbanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', '2022-07-17 10:33:49', '2022-07-17 10:33:49'),
(2, 'Contact Us', '2022-07-17 10:35:13', '2022-07-17 10:35:13'),
(3, 'Contact Us.', '2022-07-17 10:36:07', '2022-07-17 10:36:07'),
(4, 'Contact Us', '2022-07-17 10:40:14', '2022-07-17 10:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `street`, `state`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '131 dummy Street', 'United States', '+92 617 572 2000', 'support@its.com', '2022-07-17 11:10:13', '2022-07-17 11:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homebanners`
--

CREATE TABLE `homebanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeeightsections`
--

CREATE TABLE `homeeightsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeeightsections`
--

INSERT INTO `homeeightsections` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1657131143.2.png', '2022-07-06 13:12:23', '2022-07-06 13:12:23'),
(3, '1657131150.3.png', '2022-07-06 13:12:30', '2022-07-06 13:12:30'),
(4, '1657131161.4.png', '2022-07-06 13:12:41', '2022-07-06 13:12:41'),
(5, '1657131169.5.png', '2022-07-06 13:12:49', '2022-07-06 13:12:49'),
(6, '1657131278.1.png', '2022-07-06 13:14:38', '2022-07-06 13:14:38'),
(7, '1657131285.2.png', '2022-07-06 13:14:45', '2022-07-06 13:14:45'),
(8, '1657131292.3.png', '2022-07-06 13:14:52', '2022-07-06 13:14:52'),
(9, '1657131298.4.png', '2022-07-06 13:14:58', '2022-07-06 13:14:58'),
(10, '1657131304.5.png', '2022-07-06 13:15:04', '2022-07-06 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `homefifthsections`
--

CREATE TABLE `homefifthsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homefifthsections`
--

INSERT INTO `homefifthsections` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1657112900.1656580988.screenshot-1.jpg', '2022-07-06 08:08:20', '2022-07-06 08:08:20'),
(2, '1657115945.screenshot-2.jpg', '2022-07-06 08:59:05', '2022-07-06 08:59:05'),
(3, '1657116118.screenshot-3.jpg', '2022-07-06 09:01:58', '2022-07-06 09:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `homefourthsections`
--

CREATE TABLE `homefourthsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homefourthsections`
--

INSERT INTO `homefourthsections` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'icon flaticon-contact', 'Contact us First', 'Lorem ipsum dolor sit amet, csectetur adipis icing.', '2022-07-06 07:14:51', '2022-07-06 07:27:43'),
(2, 'icon flaticon-network-1', 'Consult with us', 'Lorem ipsum dolor sit amet, csectetur adipis icing.', '2022-07-06 07:34:45', '2022-07-06 07:34:45'),
(3, 'icon flaticon-target', 'Place Order', 'Lorem ipsum dolor sit amet, csectetur adipis icing.', '2022-07-06 07:36:08', '2022-07-06 07:36:08'),
(4, 'icon flaticon-banknote', 'Make Payment', 'Lorem ipsum dolor sit amet, csectetur adipis icing.', '2022-07-06 07:50:46', '2022-07-06 07:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `homesecondsections`
--

CREATE TABLE `homesecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesecondsections`
--

INSERT INTO `homesecondsections` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'icon flaticon-growth-1', 'Strategy & Planning', 'We\'re full services which means...', '2022-07-06 02:59:17', '2022-07-06 02:59:17'),
(2, 'icon flaticon-supermarket', 'Growth              Tracking', 'We’re full service which means...', '2022-07-06 03:00:04', '2022-07-13 09:47:28'),
(3, 'icon flaticon-target-1', 'Market Research', 'We’re full service which means...', '2022-07-06 03:07:52', '2022-07-06 04:57:31'),
(4, 'icon flaticon-monitor-1', 'Enterprice Consulting', 'We’re full service which means...', '2022-07-06 05:23:46', '2022-07-06 05:23:46'),
(5, 'icon flaticon-line-chart-1', 'Web Development', 'We’re full service which means.....', '2022-07-06 05:32:43', '2022-07-06 13:31:16'),
(6, 'icon flaticon-supermarket', 'Growth Tracking', 'We\'re full services which means...', '2022-07-13 09:27:19', '2022-07-13 09:27:19'),
(7, 'icon flaticon-line-chart-1', 'Web Development', 'We\'re full services which means...', '2022-07-13 09:27:39', '2022-07-13 09:27:39'),
(8, 'icon flaticon-growth-1', 'Strategy & Planning', 'We\'re full services which means...', '2022-07-13 09:28:12', '2022-07-13 09:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `homesevensections`
--

CREATE TABLE `homesevensections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesevensections`
--

INSERT INTO `homesevensections` (`id`, `image`, `title`, `author_image`, `name`, `time`, `created_at`, `updated_at`) VALUES
(2, '1657198792.news-1.jpg', 'Top aide to possible contender forced to resign over creepy.', '1657198792.author-4.jpg', 'Rio Smith', '10 hours ago', '2022-07-07 07:59:52', '2022-07-07 07:59:52'),
(3, '1657198839.news-2.jpg', 'Thirty-two surrogate mothers charged with human trafficking.', '1657198839.author-5.jpg', 'Jhonny Rip', '5 hours ago', '2022-07-07 08:00:40', '2022-07-07 08:00:40'),
(4, '1657198877.news-3.jpg', 'Chinese clients have been released after agreeing to keep.', '1657198877.author-6.jpg', 'Mong Wanzhou', '12 hours ago', '2022-07-07 08:01:17', '2022-07-07 08:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `homesixthsections`
--

CREATE TABLE `homesixthsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesixthsections`
--

INSERT INTO `homesixthsections` (`id`, `image`, `reviews`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, '1657126512.1657117514.author-7.jpg', 'Cookies are set through this site to recognize your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Frederic Anderson', 'President', '2022-07-06 09:25:14', '2022-07-06 11:55:12'),
(2, '1657128974.author-8.jpg', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Andrea Ramily', 'Founder', '2022-07-06 12:36:14', '2022-07-06 12:36:14'),
(3, '1657129095.1657129045.author-9.jpg', 'Cookies are set through this site to recognize your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Albert Chaucer', 'Co Founder', '2022-07-06 12:38:15', '2022-07-06 12:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `homethirdsections`
--

CREATE TABLE `homethirdsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_thr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_thr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homethirdsections`
--

INSERT INTO `homethirdsections` (`id`, `name`, `description`, `detail`, `title_one`, `desc_one`, `title_two`, `desc_two`, `title_thr`, `desc_thr`, `hidden_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fast Turnaround', 'We have digital experiences. With more than ten years of knowledge and expertise we design.', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.We do live art, illustration, web design, App design.', 'Solutions is the latest software Sigma?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'Machine learning shows potential to leverage?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'So some forward-looking CIOs are putting?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'prod-turnaround', '1657704061.devoted-1.png', '2022-07-13 04:21:01', '2022-07-13 04:21:01'),
(2, 'Award Winning', 'We have digital experiences. With more than ten years of knowledge and expertise we design.', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.We do live art, illustration, web design, App design.', 'Solutions is the latest software Sigma?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'Machine learning shows potential to leverage?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'So some forward-looking CIOs are putting?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'prod-award', '1657704247.03.png', '2022-07-13 04:24:07', '2022-07-13 04:24:07'),
(3, 'Elegant Design', 'We have digital experiences. With more than ten years of knowledge and expertise we design.', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.We do live art, illustration, web design, App design.', 'Solutions is the latest software Sigma?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'Machine learning shows potential to leverage?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'So some forward-looking CIOs are putting?', 'The argument in favor of using to filler text goes something is that anybody can do it.', 'prod-design', '1657704323.04.png', '2022-07-13 04:25:23', '2022-07-13 04:25:23');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_28_131655_create_banners_table', 2),
(6, '2022_06_28_131818_create_homesecondsections_table', 3),
(7, '2022_06_28_141347_create_homethirdsections_table', 4),
(8, '2022_06_28_143040_create_homefourthsections_table', 5),
(9, '2022_06_28_144539_create_homefifthsections_table', 6),
(10, '2022_06_28_145242_create_homesixthsections_table', 7),
(11, '2022_06_28_150317_create_aboutbannersections_table', 8),
(12, '2022_06_28_151822_create_aboutsecondsections_table', 9),
(13, '2022_06_28_152753_create_aboutthirdsections_table', 10),
(14, '2022_06_28_153332_create_aboutfourthsections_table', 11),
(15, '2022_06_29_134049_create_homethirdsections_table', 12),
(16, '2022_06_29_153121_create_homethirdsections_table', 13),
(17, '2022_06_29_161637_create_homethirdsections_table', 14),
(18, '2022_06_30_085704_create_homefourthsections_table', 15),
(19, '2022_06_30_091744_create_homefifthsections_table', 16),
(20, '2022_06_30_100445_create_homesixthsections_table', 17),
(21, '2022_06_30_104808_create_homesevensections_table', 18),
(22, '2022_06_30_153416_create_aboutthirdsections_table', 19),
(23, '2022_06_30_160824_create_aboutfourthsections_table', 20),
(24, '2022_07_01_093840_create_teambanners_table', 21),
(25, '2022_07_01_100126_create_teamsecondsections_table', 22),
(26, '2022_07_01_113745_create_teamthirdsections_table', 23),
(27, '2022_07_01_141225_create_testimonialbanners_table', 24),
(28, '2022_07_01_155532_create_testimonialsecondsections_table', 25),
(29, '2022_07_04_071632_create_servicebanners_table', 26),
(30, '2022_07_04_073109_create_servicesecondsections_table', 27),
(31, '2022_07_04_080402_create_servicethirdsections_table', 28),
(32, '2022_07_04_084455_create_servicefourthsections_table', 29),
(33, '2022_07_04_101237_create_portfoliothreebanners_table', 30),
(34, '2022_07_04_103239_create_portfoliothrsecondsections_table', 31),
(35, '2022_07_04_110846_create_portfoliobanners_table', 32),
(36, '2022_07_04_122154_create_banners_table', 33),
(37, '2022_07_04_130720_create_homebanners_table', 34),
(38, '2022_07_04_131043_create_banners_table', 35),
(39, '2022_07_05_122451_create_homesecondsections_table', 36),
(40, '2022_07_06_073929_create_homesecondsections_table', 37),
(41, '2022_07_06_075313_create_homesecondsections_table', 38),
(42, '2022_07_06_111822_create_homefourthsections_table', 39),
(43, '2022_07_06_130217_create_homefifthsections_table', 40),
(44, '2022_07_06_141432_create_homesixthsections_table', 41),
(45, '2022_07_06_175111_create_homeeightsections_table', 42),
(46, '2022_07_07_120916_create_homesevensections_table', 43),
(47, '2022_07_07_135341_create_homethirdsections_table', 44),
(48, '2022_07_13_090652_create_homethirdsections_table', 45),
(49, '2022_07_13_091349_create_homethirdsections_table', 46),
(50, '2022_07_13_120417_create_teamsecondsections_table', 47),
(51, '2022_07_13_132358_create_testimonialsecondsections_table', 48),
(52, '2022_07_13_151251_create_portfoliosecondsections_table', 49),
(53, '2022_07_13_153225_create_portfoliosecondsections_table', 50),
(54, '2022_07_14_090731_create_portfoliothirdsections_table', 51),
(55, '2022_07_14_095050_creat_blogsecondsections_table', 52),
(56, '2022_07_14_101123_creat_blogsecondsections_table', 53),
(57, '2022_07_15_072137_creat_aboutexpertisesections_table', 54),
(58, '2022_07_15_125541_create_servicesplans_table', 55),
(59, '2022_07_15_150550_create_portfoliogallerys_table', 56),
(60, '2022_07_17_110737_create_aboutskills_table', 57),
(61, '2022_07_17_141453_create_bloglistbanners_table', 57),
(62, '2022_07_17_152821_create_contactbanners_table', 58),
(63, '2022_07_17_155540_create_contactdetails_table', 59),
(64, '2022_07_18_082524_create_blogs_table', 60),
(65, '2022_07_18_165613_create_catagorys_table', 61),
(66, '2022_07_19_100744_create_tags_table', 62),
(67, '2022_07_19_131428_create_comments_table', 63),
(68, '2022_07_19_133459_create_blogbanners_table', 64),
(69, '2022_07_19_155113_create_admins_table', 65);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfoliobanners`
--

CREATE TABLE `portfoliobanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfoliobanners`
--

INSERT INTO `portfoliobanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Portfolio single', '2022-07-04 06:17:33', '2022-07-04 06:17:33'),
(2, 'Portfolio singl', '2022-07-17 09:36:35', '2022-07-17 09:36:35'),
(3, 'Portfolio single', '2022-07-17 09:36:52', '2022-07-17 09:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliogallerys`
--

CREATE TABLE `portfoliogallerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfoliogallerys`
--

INSERT INTO `portfoliogallerys` (`id`, `image`, `title`, `description`, `catagory`, `created_at`, `updated_at`) VALUES
(1, '1657899997.8.jpg', 'Content Strategy', 'DIGITAL marketing', 'consulting', '2022-07-15 10:16:39', '2022-07-15 10:46:37'),
(2, '1657898520.8.jpg', 'Social Ranking', 'PPC|SEO', 'buisness', '2022-07-15 10:22:00', '2022-07-15 10:22:00'),
(3, '1657898585.9.jpg', 'Social Engagement', 'Sustainability', 'consulting', '2022-07-15 10:23:05', '2022-07-15 10:23:05'),
(4, '1657898616.10.jpg', 'Technical SEO', 'SEO', 'buisness', '2022-07-15 10:23:36', '2022-07-15 10:23:36'),
(5, '1657898671.11.jpg', 'Plan Management', 'Planning', 'insurance', '2022-07-15 10:24:31', '2022-07-15 10:24:31'),
(6, '1657898714.12.jpg', 'Digital Analysis', 'Strategy', 'others', '2022-07-15 10:25:14', '2022-07-15 10:25:14'),
(7, '1657898733.12.jpg', 'Digital Analysis', 'Strategy', 'buisness', '2022-07-15 10:25:33', '2022-07-15 10:25:33'),
(8, '1657898770.13.jpg', 'Technical SEO', 'SEO', 'buisness', '2022-07-15 10:26:10', '2022-07-15 10:26:10'),
(9, '1657898798.14.jpg', 'Plan Management', 'Planning', 'finance', '2022-07-15 10:26:38', '2022-07-15 10:26:38'),
(10, '1657898833.15.jpg', 'Digital Analysis', 'Strategy', 'buisness', '2022-07-15 10:27:13', '2022-07-15 10:27:13'),
(11, '1657898888.16.jpg', 'Technical SEO', 'Planning', 'finance', '2022-07-15 10:28:08', '2022-07-15 10:28:08'),
(12, '1657898919.9.jpg', 'Software Development', 'Development', 'consulting', '2022-07-15 10:28:39', '2022-07-15 10:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliosecondsections`
--

CREATE TABLE `portfoliosecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfoliosecondsections`
--

INSERT INTO `portfoliosecondsections` (`id`, `image`, `title`, `description`, `catagory`, `client`, `date`, `website`, `created_at`, `updated_at`) VALUES
(1, '1657730810.24.jpg', 'Market Analysis', 'Dut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums ut, totams se aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae duis autems vell eums iriure dolors in hendrerit saep.\r\n\r\nEveniet in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut officiis.', 'Strategy.', 'Real Madrid C.F', '24/11/2017', 'www.madridista.esp', '2022-07-13 11:18:59', '2022-07-13 11:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliothirdsections`
--

CREATE TABLE `portfoliothirdsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfoliothirdsections`
--

INSERT INTO `portfoliothirdsections` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1657791628.7.jpg', 'Business Management', 'SUSTAINABILITY', '2022-07-14 04:13:06', '2022-07-14 04:40:28'),
(2, '1657791673.11.jpg', 'Digital Analysis', 'STRATEGY', '2022-07-14 04:41:13', '2022-07-14 04:41:13'),
(3, '1657791756.14.jpg', 'Fund Management', 'SUSTAINABILITY', '2022-07-14 04:42:36', '2022-07-14 04:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliothreebanners`
--

CREATE TABLE `portfoliothreebanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfoliothreebanners`
--

INSERT INTO `portfoliothreebanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Portfolio 3 Col', '2022-07-04 05:23:33', '2022-07-04 05:23:33'),
(2, 'Portfolio 3 Col.', '2022-07-17 09:40:37', '2022-07-17 09:40:37'),
(3, 'Portfolio 3 Col', '2022-07-17 09:40:50', '2022-07-17 09:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliothrsecondsections`
--

CREATE TABLE `portfoliothrsecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicebanners`
--

CREATE TABLE `servicebanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicebanners`
--

INSERT INTO `servicebanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Awesome services', '2022-07-04 02:26:01', '2022-07-04 02:26:01'),
(2, 'Awesome services.', '2022-07-17 10:03:27', '2022-07-17 10:03:27'),
(3, 'Awesome services', '2022-07-17 10:03:41', '2022-07-17 10:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `servicesecondsections`
--

CREATE TABLE `servicesecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicesecondsections`
--

INSERT INTO `servicesecondsections` (`id`, `message`, `heading`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'WE HELP YOU', 'Most prominent side is our devoted services fetures', '1656920393.image-1.png', 'Web Development', 'We’re full service which means...', '2022-07-04 02:39:53', '2022-07-04 02:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `servicesplans`
--

CREATE TABLE `servicesplans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `four` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hidden_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicesplans`
--

INSERT INTO `servicesplans` (`id`, `name`, `description`, `hidden_id`, `price`, `one`, `two`, `three`, `four`, `created_at`, `updated_at`, `hidden_name`) VALUES
(1, 'Basic Plan', 'The argument in favor of using to filler text goes something.', 'package-monthly', '$29 / monthly', '24/7 system monitoring', 'Security management', 'Secure finance backup', 'Remote support', '2022-07-15 08:10:08', '2022-07-15 08:10:08', NULL),
(2, 'Standard Plan', 'The argument in favor of using to filler text goes something.', 'package-monthly', '$49 / monthly', '24/7 system monitoring', 'Security management', 'Secure finance backup', 'Remote support', '2022-07-15 08:10:48', '2022-07-15 08:10:48', NULL),
(3, 'Extended Plan', 'The argument in favor of using to filler text goes something.', 'package-monthly', '$59 / monthly', '24/7 system monitoring', 'Security management', 'Secure finance backup', 'Remote support', '2022-07-15 08:11:23', '2022-07-15 08:11:23', NULL),
(4, 'Basic Plan', 'The argument in favor of using to filler text goes something.', 'package-yearly', '$29 / monthly', '24/7 system monitoring', 'Security management', 'Secure finance backup', 'Remote support', '2022-07-15 08:11:49', '2022-07-15 08:11:49', NULL),
(5, 'Standard Plan', 'The argument in favor of using to filler text goes something.', 'package-yearly', '$49 / monthly', '24/7 system monitoring', 'Security management', 'Secure finance backup', 'Remote support', '2022-07-15 08:12:05', '2022-07-15 08:12:05', NULL),
(6, 'Extended Plan', 'The argument in favor of using to filler text goes something.', 'package-yearly', '$59 / monthly', '24/7 system monitoring', 'Security management', 'Secure finance backup', 'Remote support', '2022-07-15 08:12:32', '2022-07-15 08:12:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Apps', '2022-07-19 05:12:36', '2022-07-19 05:12:36'),
(2, 'Cloud', '2022-07-19 05:15:27', '2022-07-19 05:15:27'),
(3, 'LifeStyle', '2022-07-19 05:15:35', '2022-07-19 05:15:35'),
(4, 'Hosting', '2022-07-19 05:15:42', '2022-07-19 05:15:42'),
(5, 'Buisness', '2022-07-19 05:15:47', '2022-07-19 05:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `teambanners`
--

CREATE TABLE `teambanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teambanners`
--

INSERT INTO `teambanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Team member', '2022-07-01 04:43:30', '2022-07-01 04:43:30'),
(2, 'Team members', '2022-07-17 09:43:59', '2022-07-17 09:43:59'),
(3, 'Team member', '2022-07-17 09:44:13', '2022-07-17 09:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `teamsecondsections`
--

CREATE TABLE `teamsecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamsecondsections`
--

INSERT INTO `teamsecondsections` (`id`, `image`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, '1657715394.1657715237.team-1.jpg', 'Suresh Bollom', 'Former Developer', '2022-07-13 07:13:53', '2022-07-13 07:29:54'),
(2, '1657719804.team-2.jpg', 'Alina Jia', 'Former Developer', '2022-07-13 08:43:24', '2022-07-13 08:43:24'),
(3, '1657715480.team-3.jpg', 'Domina Li', 'Designer', '2022-07-13 07:31:20', '2022-07-13 07:31:20'),
(4, '1657715504.team-4.jpg', 'Michael Scott', 'Former Developer', '2022-07-13 07:31:44', '2022-07-13 07:31:44'),
(5, '1657715524.1656672160.team-1.jpg', 'Suresh Bollom', 'Former Developer', '2022-07-13 07:32:04', '2022-07-13 07:32:04'),
(6, '1657715543.team-2.jpg', 'Alina Jia', 'Former Developer', '2022-07-13 07:32:23', '2022-07-13 07:32:23'),
(7, '1657715565.team-3.jpg', 'Domina Li', 'Designer', '2022-07-13 07:32:45', '2022-07-13 07:32:45'),
(8, '1657715577.team-4.jpg', 'Michael Scott', 'Former Developer', '2022-07-13 07:32:57', '2022-07-13 07:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `teamthirdsections`
--

CREATE TABLE `teamthirdsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamthirdsections`
--

INSERT INTO `teamthirdsections` (`id`, `message`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CONTACT US', 'You are interested to hire our team ?', 'Send us your email address, we will contact!', '2022-07-01 06:49:12', '2022-07-01 06:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonialbanners`
--

CREATE TABLE `testimonialbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonialbanners`
--

INSERT INTO `testimonialbanners` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Clients testimonial', '2022-07-01 09:51:28', '2022-07-01 09:51:28'),
(2, 'Clients testimonial.', '2022-07-17 09:47:11', '2022-07-17 09:47:11'),
(3, 'Clients testimonial', '2022-07-17 09:47:24', '2022-07-17 09:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `testimonialsecondsections`
--

CREATE TABLE `testimonialsecondsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonialsecondsections`
--

INSERT INTO `testimonialsecondsections` (`id`, `image`, `reviews`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, '1657720290.1657126488.1657117514.author-7.jpg', 'Cookies are set through this site to recognize your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Frederic Anderson', 'President', '2022-07-13 08:28:12', '2022-07-13 08:51:30'),
(2, '1657720558.author-8.jpg', 'Cookies are set through this site to recognize your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Andrea Ramily', 'Founder', '2022-07-13 08:55:58', '2022-07-13 08:55:58'),
(3, '1657720632.author-9.jpg', 'Cookies are set through this site to recognize your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Albert Chaucer', 'Co Founder', '2022-07-13 08:57:12', '2022-07-13 08:57:12'),
(4, '1657720760.1657126512.1657117514.author-7.jpg', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Frederic Anderson', 'President', '2022-07-13 08:58:06', '2022-07-13 08:59:20'),
(5, '1657720710.1657128974.author-8.jpg', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Andrea Ramily', 'Founder', '2022-07-13 08:58:30', '2022-07-13 08:58:30'),
(6, '1657720731.1657129045.author-9.jpg', 'Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.', 'Albert Chaucer', 'Co Founder', '2022-07-13 08:58:51', '2022-07-13 08:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutbannersections`
--
ALTER TABLE `aboutbannersections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutexpertisesections`
--
ALTER TABLE `aboutexpertisesections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutfourthsections`
--
ALTER TABLE `aboutfourthsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsecondsections`
--
ALTER TABLE `aboutsecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutskills`
--
ALTER TABLE `aboutskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutthirdsections`
--
ALTER TABLE `aboutthirdsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogbanners`
--
ALTER TABLE `blogbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloglistbanners`
--
ALTER TABLE `bloglistbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogsecondsections`
--
ALTER TABLE `blogsecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagorys`
--
ALTER TABLE `catagorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactbanners`
--
ALTER TABLE `contactbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homebanners`
--
ALTER TABLE `homebanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeeightsections`
--
ALTER TABLE `homeeightsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homefifthsections`
--
ALTER TABLE `homefifthsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homefourthsections`
--
ALTER TABLE `homefourthsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesecondsections`
--
ALTER TABLE `homesecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesevensections`
--
ALTER TABLE `homesevensections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesixthsections`
--
ALTER TABLE `homesixthsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homethirdsections`
--
ALTER TABLE `homethirdsections`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfoliobanners`
--
ALTER TABLE `portfoliobanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliogallerys`
--
ALTER TABLE `portfoliogallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliosecondsections`
--
ALTER TABLE `portfoliosecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliothirdsections`
--
ALTER TABLE `portfoliothirdsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliothreebanners`
--
ALTER TABLE `portfoliothreebanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliothrsecondsections`
--
ALTER TABLE `portfoliothrsecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicebanners`
--
ALTER TABLE `servicebanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesecondsections`
--
ALTER TABLE `servicesecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesplans`
--
ALTER TABLE `servicesplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teambanners`
--
ALTER TABLE `teambanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamsecondsections`
--
ALTER TABLE `teamsecondsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamthirdsections`
--
ALTER TABLE `teamthirdsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonialbanners`
--
ALTER TABLE `testimonialbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonialsecondsections`
--
ALTER TABLE `testimonialsecondsections`
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
-- AUTO_INCREMENT for table `aboutbannersections`
--
ALTER TABLE `aboutbannersections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutexpertisesections`
--
ALTER TABLE `aboutexpertisesections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aboutfourthsections`
--
ALTER TABLE `aboutfourthsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutsecondsections`
--
ALTER TABLE `aboutsecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aboutskills`
--
ALTER TABLE `aboutskills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aboutthirdsections`
--
ALTER TABLE `aboutthirdsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogbanners`
--
ALTER TABLE `blogbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloglistbanners`
--
ALTER TABLE `bloglistbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogsecondsections`
--
ALTER TABLE `blogsecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catagorys`
--
ALTER TABLE `catagorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactbanners`
--
ALTER TABLE `contactbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homebanners`
--
ALTER TABLE `homebanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeeightsections`
--
ALTER TABLE `homeeightsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `homefifthsections`
--
ALTER TABLE `homefifthsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homefourthsections`
--
ALTER TABLE `homefourthsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homesecondsections`
--
ALTER TABLE `homesecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homesevensections`
--
ALTER TABLE `homesevensections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homesixthsections`
--
ALTER TABLE `homesixthsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homethirdsections`
--
ALTER TABLE `homethirdsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfoliobanners`
--
ALTER TABLE `portfoliobanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfoliogallerys`
--
ALTER TABLE `portfoliogallerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfoliosecondsections`
--
ALTER TABLE `portfoliosecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfoliothirdsections`
--
ALTER TABLE `portfoliothirdsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfoliothreebanners`
--
ALTER TABLE `portfoliothreebanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfoliothrsecondsections`
--
ALTER TABLE `portfoliothrsecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicebanners`
--
ALTER TABLE `servicebanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicesecondsections`
--
ALTER TABLE `servicesecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicesplans`
--
ALTER TABLE `servicesplans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teambanners`
--
ALTER TABLE `teambanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teamsecondsections`
--
ALTER TABLE `teamsecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teamthirdsections`
--
ALTER TABLE `teamthirdsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonialbanners`
--
ALTER TABLE `testimonialbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonialsecondsections`
--
ALTER TABLE `testimonialsecondsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
