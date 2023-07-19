-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2023 at 04:55 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stema1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cells`
--

DROP TABLE IF EXISTS `cells`;
CREATE TABLE IF NOT EXISTS `cells` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `quality_of_collection_bags_cleanness` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_of_needles` double(3,1) DEFAULT NULL,
  `satellite_bag` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clots` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_weight` double(5,1) DEFAULT NULL,
  `volume` double(4,1) DEFAULT NULL,
  `prewbcsx109l` double(9,6) DEFAULT NULL,
  `pre_%cd+45/34` double(9,6) DEFAULT NULL,
  `pre_viability_of_tnc` double(9,6) DEFAULT NULL,
  `post_wbcsx109/l` double(9,6) DEFAULT NULL,
  `result` char(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_sent_date` date DEFAULT NULL,
  `pre_vaiblity_teqniqe` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_vaiblity_results` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_count_of_viable_cell` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_dilution_factor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_average_viable_cd34_cd45_positive_cell_percentage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_average_viable_absolute_cd34_positive_cell_count` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_average_viable_cd34_positive_cell_percentage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_count_of_cd34_positive_cell_preprocessing` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_vaiblity_teqniqe` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_vaiblity_results` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_count_of_viable_cell` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_dilution_factor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_average_viable_cd34_cd45_positive_cell_percentage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_average_viable_absolute_cd34_positive_cell_count` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_average_viable_cd34_positive_cell_percentage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_count_of_cd34_positive_cell_preprocessing` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_performed_by` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_freezing_time` time DEFAULT NULL,
  `end_freezing_time` time DEFAULT NULL,
  `injection_start_time` time DEFAULT NULL,
  `injection_end_time` time DEFAULT NULL,
  `start_temperature` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_point_temperature` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donar_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cells`
--

INSERT INTO `cells` (`id`, `quality_of_collection_bags_cleanness`, `num_of_needles`, `satellite_bag`, `clots`, `net_weight`, `volume`, `prewbcsx109l`, `pre_%cd+45/34`, `pre_viability_of_tnc`, `post_wbcsx109/l`, `result`, `sample_type`, `sample_sent_date`, `pre_vaiblity_teqniqe`, `pre_vaiblity_results`, `pre_count_of_viable_cell`, `pre_dilution_factor`, `pre_average_viable_cd34_cd45_positive_cell_percentage`, `pre_average_viable_absolute_cd34_positive_cell_count`, `pre_average_viable_cd34_positive_cell_percentage`, `pre_count_of_cd34_positive_cell_preprocessing`, `post_vaiblity_teqniqe`, `post_vaiblity_results`, `post_count_of_viable_cell`, `post_dilution_factor`, `approved_status`, `post_average_viable_cd34_cd45_positive_cell_percentage`, `post_average_viable_absolute_cd34_positive_cell_count`, `post_average_viable_cd34_positive_cell_percentage`, `post_count_of_cd34_positive_cell_preprocessing`, `test_performed_by`, `start_freezing_time`, `end_freezing_time`, `injection_start_time`, `injection_end_time`, `start_temperature`, `end_point_temperature`, `donar_id`, `created_at`, `updated_at`) VALUES
(1, '2', 0.0, '1', '0', 109.0, 103.0, 13.000000, 0.800000, 90.000000, 38.700000, '1', 'CordTissue', '2023-02-22', '7AAD', '23', '12', '44', '23', '12', '12', '1232', '7AAD', '123', '43', '45', 'Approved', '12', '34', '23', '123', '2', '01:41:00', '02:42:00', '14:42:00', '15:43:00', '14', '12', NULL, '2023-05-30 18:40:31', '2023-05-30 18:40:31'),
(2, '2', 0.0, '1', '0', 140.0, 132.0, 8.600000, 0.400000, 92.000000, 34.200000, '1', 'CordTissue', '2023-02-12', '7AAD', '23', '12', '44', '23', '12', '12', '1232', '7AAD', '123', '43', '45', 'Approved', '12', '34', '23', '123', '2', '14:44:00', '14:44:00', '14:44:00', '14:44:00', '14', '12', NULL, '2023-05-30 18:43:00', '2023-05-30 18:43:00'),
(3, '1', 0.0, '1', '0', 120.0, 113.0, 9.678755, 6.325009, 82.328578, 28.173926, '1', 'CordBlood', '2222-02-22', '7AAD', '23', '12', '44', '23', '12', '12', '1232', 'TrepanBlue', '123', '43', '45', 'Approved', '12', '34', '23', '123', '2', '14:47:00', '15:48:00', '14:47:00', '14:47:00', '14', '12', NULL, '2023-05-30 18:46:02', '2023-05-30 18:46:02'),
(4, '1', 0.0, '1', '0', 112.0, 106.0, 7.600000, 0.600000, 90.000000, 23.000000, '1', 'AmnioticFluid', '2222-02-22', 'TrepanBlue', '23', '12', '44', '23', '12', '12', '1232', 'TrepanBlue', '123', '43', '45', 'Approved', '12', '34', '23', '123', '2', '14:49:00', '14:49:00', '14:49:00', '13:48:00', '14', '12', NULL, '2023-05-30 18:47:56', '2023-05-30 18:47:56'),
(5, '3', 5.0, '1', '0', 112.0, 12.0, 23.000000, 8.000000, 19.000000, 3.000000, '0', 'CordBlood', '1222-02-11', '7AAD', '23', '12', '44', '23', '12', '12', '1232', 'TrepanBlue', '123', '43', '45', 'Rejected', '12', '34', '23', '123', '2', '13:55:00', '14:56:00', '02:55:00', '13:55:00', '14', '12', NULL, '2023-05-30 18:54:51', '2023-05-30 18:54:51'),
(6, '1', 1.0, '1', '1', 112.0, 103.0, 23.000000, 0.800000, 90.000000, 38.700000, '1', 'CordTissue', '2023-06-04', '7AAD', '23', '12', '44', '23', '12', '12', '1232', '7AAD', '123', '43', '45', 'Rejected', '12', '34', '23', '123', '2', '04:35:00', '04:33:00', '04:34:00', '04:34:00', '14', '12', 22, '2023-06-08 10:34:09', '2023-06-08 10:34:09'),
(7, '1', 1.0, '1', '1', 112.0, 103.0, 13.000000, 0.800000, 90.000000, 38.700000, '1', 'CordTissue', '2222-02-22', 'TrepanBlue', '23', '12', '44', '4', '4', '12', '1232', 'TrepanBlue', '123', '43', '45', 'Rejected', '12', '34', '23', '123', '2', '05:07:00', '05:06:00', '05:06:00', '05:06:00', '14', '12', 7, '2023-06-08 11:06:35', '2023-06-08 11:06:35'),
(8, '1', 1.0, '1', '1', 109.0, 103.0, 23.000000, 0.800000, 90.000000, 38.700000, '1', 'CordTissue', '3222-02-22', '7AAD', '23', '12', '44', '23', '12', '4', '1232', '7AAD', '123', '43', '45', 'Rejected', '12', '34', '23', '123', '2', '22:24:00', '22:27:00', '10:25:00', '02:29:00', '14', '12', 8, '2023-06-16 04:25:12', '2023-06-16 04:25:12'),
(9, '1', 1.0, '1', '1', 112.0, 103.0, 23.000000, 0.800000, 90.000000, 38.700000, '1', 'CordTissue', '4422-02-04', '7AAD', '23', '12', '44', '23', '12', '4', '22', '7AAD', '123', '43', '45', 'Rejected', '12', '34', '23', '123', '2', '14:22:00', '07:54:00', '21:54:00', '07:56:00', '14', '12', 9, '2023-06-16 13:54:59', '2023-06-16 13:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
CREATE TABLE IF NOT EXISTS `collections` (
  `id` int NOT NULL AUTO_INCREMENT,
  `donar_id` int NOT NULL,
  `cord_length` varchar(191) NOT NULL,
  `placental_weight` varchar(191) NOT NULL,
  `cord_pathology` varchar(191) NOT NULL,
  `three_vesseles` varchar(191) NOT NULL,
  `answer` text NOT NULL,
  `infectious_diseases` varchar(191) DEFAULT NULL,
  `NeonatalApgarScore10m` varchar(191) NOT NULL,
  `NeonatalApgarScore1m` varchar(191) DEFAULT NULL,
  `order_birth` varchar(191) NOT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `head_circum` varchar(191) DEFAULT NULL,
  `chest` varchar(191) DEFAULT NULL,
  `umbilical_stupm` varchar(191) NOT NULL,
  `birth_weight` varchar(191) NOT NULL,
  `blod_group` varchar(191) DEFAULT NULL,
  `rh` varchar(191) DEFAULT NULL,
  `dysmorphic_child` varchar(191) DEFAULT NULL,
  `fetal_anomalies` varchar(191) DEFAULT NULL,
  `fetal_distress` varchar(191) DEFAULT NULL,
  `doctor_name` varchar(191) NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `delivery_time` time(6) DEFAULT NULL,
  `manufturing_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `cpu_date` date DEFAULT NULL,
  `sent_by` varchar(191) NOT NULL,
  `temp_room` int NOT NULL,
  `collection_statues` varchar(191) NOT NULL,
  `cpu_bank_time` time(6) DEFAULT NULL,
  `cpu_bank_date` date DEFAULT NULL,
  `time_defrence` varchar(191) NOT NULL,
  `placenta_free_trauma` varchar(191) NOT NULL,
  `problems_collection` varchar(191) NOT NULL,
  `lot_number` varchar(191) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `donar_id`, `cord_length`, `placental_weight`, `cord_pathology`, `three_vesseles`, `answer`, `infectious_diseases`, `NeonatalApgarScore10m`, `NeonatalApgarScore1m`, `order_birth`, `gender`, `head_circum`, `chest`, `umbilical_stupm`, `birth_weight`, `blod_group`, `rh`, `dysmorphic_child`, `fetal_anomalies`, `fetal_distress`, `doctor_name`, `delivery_date`, `delivery_time`, `manufturing_date`, `expiry_date`, `cpu_date`, `sent_by`, `temp_room`, `collection_statues`, `cpu_bank_time`, `cpu_bank_date`, `time_defrence`, `placenta_free_trauma`, `problems_collection`, `lot_number`, `created_at`, `updated_at`) VALUES
(3, 7, 'sss', 'sss', 'ss', 'yes', 'ssssssss', 'yes', 'sss', 'sss', 'sss', 'male', 'ssss', 'sss', '22', '222', 'AB', 'Positive', 'yes', 'yes', 'yes', 'zzz', '2023-05-09', '14:06:00.000000', '2023-05-15', '2023-05-20', '2023-05-04', 'ssss', 1, 'Failed', '12:02:00.000000', '2023-05-17', '2', 'yes', 'yes', '2', '2023-05-08 17:02:38.000000', '2023-05-08 17:02:38.000000'),
(4, 20, '22', '22 gm', '22', 'yes', 'ssssssss', 'yes', 'sssss22', '22xc', '22', 'male', 'ssss', 'sss', '22', '222', 'A', 'Positive', 'yes', 'no', 'yes', 'ssdd', '2023-05-17', '14:08:00.000000', '2023-05-15', '2023-05-16', '2023-05-09', 'ssss', 2, 'Successfully', '12:05:00.000000', '2023-05-17', '2d', 'yes', 'yes', '2', '2023-05-08 17:05:31.000000', '2023-05-08 17:05:31.000000'),
(5, 21, '22', '22gm', '22', 'yes', 'ssssssss', 'yes', '223ss', 'sss', 'sss', 'male', 'ssss', 'sss', '22', '222', 'A', 'Positive', 'yes', 'yes', 'yes', 'zzz', '2023-05-10', '12:08:00.000000', '2023-05-17', '2023-05-23', '2023-05-10', 'ssss', 22, 'Successfully', '12:09:00.000000', '2023-05-10', '2', 'yes', 'yes', '2', '2023-05-08 17:09:11.000000', '2023-05-08 17:09:11.000000'),
(6, 22, '22', '222', 'saaa', 'yes', 'ssssssss', 'yes', '222', '22xc', '1111', 'male', '2222', '222', '22', '222', 'B', 'Positive', 'yes', 'yes', 'yes', 'aaaa', '2023-05-17', '21:44:00.000000', '2023-05-14', '2023-05-18', '2023-05-20', 'ssss', 3, 'Successfully', '22:44:00.000000', '2023-05-17', 'AAAASXSS', 'yes', 'yes', '2', '2023-05-16 14:44:49.000000', '2023-05-16 14:44:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `donar_id` int NOT NULL,
  `phone` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_address` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_address` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `donar_id`, `phone`, `mobile`, `first_address`, `second_address`, `created_at`, `updated_at`) VALUES
(4, 7, '01012551601', '05611111111', 'aaaa', 'aaaa', '2023-04-19 19:57:59', '2023-04-19 19:57:59'),
(5, 8, '01012551601', '01012551601', 'aaaa', 'aaaa', '2023-04-23 11:24:37', '2023-04-23 11:24:37'),
(6, 9, '01012551601', '01012551601', 'aaaa', 'aaaa', '2023-04-23 12:03:25', '2023-04-23 12:03:25'),
(7, 10, '05478775194', NULL, 'aaaa', 'aaaa', '2023-04-23 12:04:52', '2023-04-23 12:04:52'),
(8, 11, '11', '22', 'ee', 'rr', '2023-04-23 12:05:59', '2023-04-23 12:05:59'),
(9, 12, NULL, NULL, NULL, NULL, '2023-04-23 12:07:01', '2023-04-23 12:07:01'),
(10, 13, '0547877519', '01012551601', 'aaaa', NULL, '2023-04-23 12:16:17', '2023-04-23 12:16:17'),
(11, 14, NULL, NULL, NULL, NULL, '2023-04-23 14:17:05', '2023-04-23 14:17:05'),
(12, 15, '05478775194', '05611111111', 'aaaa', NULL, '2023-04-23 14:19:25', '2023-04-23 14:19:25'),
(13, 16, '01012551601', NULL, 'aaaa', 'aaaa', '2023-04-25 10:29:53', '2023-04-25 10:29:53'),
(14, 17, '0547877519', '01012551601', 'aaaa', 'aaaa', '2023-04-25 10:31:49', '2023-04-25 10:31:49'),
(15, 18, '01012551601', '01012551601', 'aaaa', 'aaaa', '2023-05-07 19:28:24', '2023-05-07 19:28:24'),
(16, 19, '01012551601', '01012551601', 'aaaa', 'aaaa', '2023-05-08 16:29:22', '2023-05-08 16:29:22'),
(17, 20, '01012551601', '01012551601', 'aaaa', 'aaaa', '2023-05-08 17:03:48', '2023-05-08 17:03:48'),
(18, 21, '01012551601', '01012551601', 'aaaa', 'aaaa', '2023-05-08 17:07:35', '2023-05-08 17:07:35'),
(19, 22, '01012551601', '01012551601', NULL, NULL, '2023-05-16 14:40:02', '2023-05-16 14:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `cpus`
--

DROP TABLE IF EXISTS `cpus`;
CREATE TABLE IF NOT EXISTS `cpus` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `donar_id` int NOT NULL,
  `hospital_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_number` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_type` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stem_sells` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donar_consest` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donar_agreement` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_image` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cpus`
--

INSERT INTO `cpus` (`id`, `donar_id`, `hospital_name`, `hospital_number`, `donation_type`, `stem_sells`, `donar_consest`, `donar_agreement`, `unit_image`, `created_at`, `updated_at`) VALUES
(7, 8, 'ssss', '1111', 'Private', 'Cord_blood', 'to5teGs6wJdkOWXHhCg18suYR6q32rY3SMdXm7nb.png', 'xtTYL1NbSxRKu8FwmNG8ztrXwWPy7iPrw32yM4a4.png', 's8n1ugh7ADXCZreyCrgPufnqmELjgt6zB7PFYowN.png', '2023-04-23 11:24:30', '2023-04-23 11:24:30'),
(6, 7, 'hospital1', '44444', 'Public', 'Cord_tissue', 'xevMdBkeb7uNYAzSPmFg7Es1vi1LFtUvs6njQEZw.png', 'IQkrnrgvaixpLHeN6E02OeWMUOwYfE5wOGlViWra.png', 'gJJb2dFGckLG0CHadDjalh9SopmNsxVKa95ywv7r.png', '2023-04-19 19:57:52', '2023-04-19 19:57:52'),
(8, 9, 'hospital 2', '33333', 'Private', 'Cord_tissue', 'iExk3pdjUJa622rqwIEI5tId2lU0OtU2UDUBHkQb.png', 'yu184NNaauK8lUKkqQuVHmMQOTRpKeaSsVBYBXaF.png', 'lL3UTfFqX815DMnOEKhaVHpqmwoDRb1YoMMRvX5X.png', '2023-04-23 12:03:19', '2023-04-23 12:03:19'),
(9, 10, 'hospital1', '4444', 'Public', 'Cord_blood', 'sLGhus5oT1SSyZEXED0eonlW4254Z9A3vR2XseFY.png', 'vWHIFgi1TMo2rE4VgVxxeXEimFj4UZsG7auSYyrf.png', 'vjEH0pOrAKQyGL2qXaLanrTQaHFhTqeENSHHgC0E.png', '2023-04-23 12:04:46', '2023-04-23 12:04:46'),
(10, 11, 'hospital 2', '4444444', 'Private', 'Cord_tissue', 'wSwHunZXaRUoSs2OBWyDtmMJimFCxuKFsGhavBhU.png', 'Q7Jf0pUr85NGIQEkPs2SGZgdzHsA2XAvmjkbFnft.png', 'ur9i5Fm03mCs7u6wMDzbaekrBwCisiWb1y8hHOaP.png', '2023-04-23 12:05:57', '2023-04-23 12:05:57'),
(11, 12, 'hospital1', '33333', 'Private', 'Cord_blood', 'TOTLoh0gLH2snNB1DbKQGYG872Pq8eLw9vqhvdgy.png', 'RwQp8SUFYxC0NMpaYqRh4PWeueJICMDuq0osJJsA.png', '3J4KmfHV8cJhYYIA2jlsynYoc97MEcmU0DiFW4nL.png', '2023-04-23 12:06:59', '2023-04-23 12:06:59'),
(12, 13, 'hospital 2', '22222', 'Private', 'Cord_blood', 'M3oSqD9CcouTcwFPupZyeUYVrh6a1bpWT44sKknG.png', 'u7WII5eLuwfF8fSUXrXk6vk0waDd2GUoozWdsCGk.png', 'dcB57de4TSc5RzAQgQNJxGHtoOhQ4XZrORQQhV4G.png', '2023-04-23 12:16:12', '2023-04-23 12:16:12'),
(13, 15, 'ssss', '333333', 'Public', 'Cord_tissue', 'vtaZ6YXMWCyc4tbCIvl6voIbBbf9gV0z0T6GhMso.png', 'tVfx1P2F1pJJwgjE15KQK07yvpATQyjqtPMdmjog.png', 'c5TGOY9aNNelBnOVOw0fmlIilrHuyqldLsYnYGZl.png', '2023-04-23 14:19:49', '2023-04-23 14:19:49'),
(14, 16, 'hospital1', '33', 'Public', 'Cord_blood', 'OOhwWdfIwWoCA3fiINXQNO8g8K1INrkqp7iU8n7F.png', 'cVb8LKNVqGxX1KYVwUBTa7K5gtXqyLVOKHB3gKKM.png', 'q6XZQ0i9tR4q5Hbunu5bbDqcGn4AiGox9oxvVvyd.png', '2023-04-25 10:30:16', '2023-04-25 10:30:16'),
(15, 17, 'hospital1', '4444', 'Private', 'Cord_blood', 'YtLKK07CLSCI6vNRc2NER8XASMIfWCL0t8faLukr.png', 'wN5KiEkQzQN0n5Pj6c6pn9OR38IE2XSEmQn8Cecr.png', 'G6lyCdAtbkXgjElAm5wIhejuFCfO6xB0tXMZw7ip.png', '2023-04-25 10:32:07', '2023-04-25 10:32:07'),
(16, 18, 'ssss', '2222', 'Public', 'Cord_tissue', '02UTGzOtCUbFnFM0IwpTHjj9wmtg5wi4QKdZaXOc.png', 'G8dEu25Mby8UktPrX1cnNiIQSTtMQTFM3T8QfHFH.png', 'QYttYqHe2CZ33gZH3SgaLQEKdvoGbt3O8oIwFC1S.png', '2023-05-07 19:28:42', '2023-05-07 19:28:42'),
(17, 19, 'ssss', '222', 'Public', 'Cord_tissue', 'EBWfDEkMvxFExveMDFMOgK3WZG6W6ruj6zXoknEv.png', 'fqqhhWrBHMADJB5Fwzsu1I00wts6CXgO5m1lgsp4.png', 'I8C0W9B5KO5tMXJJX9u8CPaFrMslnncRQoTDVF0h.png', '2023-05-08 16:29:40', '2023-05-08 16:29:40'),
(18, 20, 'ssss', '222', 'Public', 'Cord_tissue', 'u90nUKzY16MiDrK3pf4e2jS6IyZRgzaly6mo3mkd.png', 'c6MRKIhygwEpIO4V21k5G7gm9iNt5boYoAHEWVxj.png', 'qnXl1iZjbkiE9pk7kYK1oqD4G1STnnishXSb1fkb.png', '2023-05-08 17:04:05', '2023-05-08 17:04:05'),
(19, 21, 'ssss', '222', 'Private', 'Cord_blood', 'CgWOuSNvIXvj2Wnq9Udw1zR9OtxXyK783Qkkq6kH.png', 'VhdIENMbt8GMQxDfnMFBSArkRvXUmCftd0vtrk7B.png', 'tvRfztKWfbIWEpFYLl1CGA66rHxeyXPncYh4qljO.png', '2023-05-08 17:08:05', '2023-05-08 17:08:05'),
(20, 22, 'ssaaasaa', '223333', 'Public', 'Cord_tissue', 'RjMVhG42OxJ7qQibXih9ghR3okyTUcX3W5L2xuWC.png', '778xBlifX9ZiEEMaSiK4ZTDC1CrWyh6XrCtMVXtC.png', 'xxeqMIyuU3FaHiOxXDQLflC26LgkU7azwAWcXpBi.png', '2023-05-16 14:41:16', '2023-05-16 14:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

DROP TABLE IF EXISTS `donars`;
CREATE TABLE IF NOT EXISTS `donars` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nurse_id` int NOT NULL,
  `mother_name_ar` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_en` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `rh` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rh_first_system` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rh_second_system` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miner_group` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` int DEFAULT '0',
  `pending` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`id`, `nurse_id`, `mother_name_ar`, `mother_name_en`, `national_id`, `nationality`, `region`, `blood_group`, `date`, `rh`, `rh_first_system`, `rh_second_system`, `miner_group`, `result`, `start`, `pending`, `created_at`, `updated_at`) VALUES
(7, 2, 'ساره محمد', 'sara mohamed', '222222222', 'egyptian', 'elzamalek', 'B', '2023-04-18', 'Positive', 'c', 'c', 'sssss', 'wwww', 1, 0, '2023-04-19 19:57:30', '2023-06-08 11:06:35'),
(8, 2, 'رنا محمد', 'rana mohamed', '2222', 'egyptian', 'elzamalek', 'B', '2023-04-28', 'Positive', 'c', 'c', 'sssss', 'wwww', 1, 0, '2023-04-23 11:24:07', '2023-06-16 04:25:12'),
(9, 2, 'نيره محمد', 'naira mohamed', '3333', 'egyptian', 'elzamalek', 'B', '2023-04-25', 'Positive', 'c', 'C', 'sssss', 'wwww', 0, 0, '2023-04-23 12:02:56', '2023-06-16 13:54:59'),
(10, 2, 'ياسمين محمود', 'yasmin mahmoud', '222222', 'egyptian', 'elzamalek', 'A', '2023-04-13', 'RH', NULL, 'RH_system2', NULL, NULL, 1, 1, '2023-04-23 12:04:31', '2023-04-23 12:07:16'),
(11, 2, 'سمر احمد', 'samar ccc', '2222', NULL, NULL, 'B', NULL, 'RH', NULL, 'RH_system2', NULL, NULL, 0, 1, '2023-04-23 12:05:40', '2023-04-23 12:05:40'),
(12, 2, 'رنيا كريم', 'rania kemo', '2222', 'egyptian', 'elzamalek', 'B', NULL, 'RH', NULL, 'RH_system2', NULL, NULL, 0, 1, '2023-04-23 12:06:45', '2023-04-23 12:06:45'),
(13, 2, 'ليلي احمد', 'laila ahmed', '55555555', 'egyptian', 'elzamalek', 'AB', '2023-04-18', 'Negative', NULL, 'RH_system2', NULL, NULL, 0, 1, '2023-04-23 12:15:55', '2023-04-23 12:15:55'),
(14, 2, 'ام سامي', 'om samy', '2222', 'egyptian', 'elzamalek', 'B', '2023-04-24', 'RH', NULL, 'RH_system2', NULL, NULL, 0, 1, '2023-04-23 14:16:59', '2023-04-23 14:16:59'),
(15, 2, 'رنيا رامي', 'rania ramy', '2222333', 'egyptian', 'elzamalek', 'B', NULL, 'RH', NULL, 'RH_system2', NULL, NULL, 1, 1, '2023-04-23 14:19:19', '2023-04-23 14:20:05'),
(16, 2, 'sss', 'sssssss', '2222', 'egyptian', NULL, 'AB', NULL, 'RH', NULL, 'RH_system2', NULL, NULL, 0, 1, '2023-04-25 10:29:37', '2023-04-25 10:29:37'),
(17, 2, 'رنيا سامي', 'rania samy', '222233333', 'egyptian', NULL, 'B', NULL, 'RH', NULL, 'RH_system2', NULL, NULL, 0, 1, '2023-04-25 10:31:41', '2023-04-25 10:31:41'),
(18, 2, 'haneen', 'om samy', '2222', 'egyptian', 'elzamalek', 'B', '2023-05-24', 'Positive', 'c', 'C', 'sssss', 'wwww', 0, 1, '2023-05-07 19:28:15', '2023-05-07 19:28:15'),
(19, 2, 'sss', 'om samy', '2222', 'egyptian', NULL, 'A', '2023-05-19', 'RH', 'C', 'C', 'sssss', 'wwww', 0, 1, '2023-05-08 16:29:15', '2023-05-08 16:29:15'),
(20, 2, 'ليلي', 'lila', '2222', 'egyptian', 'elzamalek', 'B', '2023-05-18', 'Positive', 'c', 'C', 'sssss', 'wwww', 0, 1, '2023-05-08 17:03:41', '2023-05-08 17:03:41'),
(21, 2, 'سوزان', 'suzan', '222', 'egyptian', 'elzamalek', 'A', '2023-05-18', 'Positive', 'D', 'C', 'sssss', 'wwww', 0, 1, '2023-05-08 17:07:28', '2023-05-08 17:07:28'),
(22, 2, 'منار', 'manar', '888888', 'egyptian', 'elzamalek', 'B', '2023-05-18', 'Positive', 'D', 'C', 'aa', 'aaaa', 0, 1, '2023-05-16 14:39:09', '2023-05-16 14:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2023_03_23_121639_create_roles_table', 1),
(27, '2023_04_24_004749_alter_users_table', 1),
(28, '2023_05_01_142735_create_cells_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-05-27 16:45:33', '2023-05-27 16:45:33'),
(2, 'doctor', '2023-05-27 16:45:33', '2023-05-27 16:45:33'),
(3, 'nurse', '2023-05-27 16:45:33', '2023-05-27 16:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_nationalid_unique` (`nationalid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `nationalid`, `gender`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'stema', 'Stema', 'Team', 'stema5240@gmail.com', '30005201205626', 'female', '£££', NULL, '$2y$10$hjImaqkB81Tk7UXs0EVDT.R2pmtT3qjawvuGKHzPshk9QXoc2Slhq', NULL, '2023-05-27 16:45:38', '2023-05-27 16:45:38', 1),
(2, 'omar', 'omar', 'harb', 'omartalaatharb@gmail.com', '30109241200635', 'male', NULL, NULL, '$2y$10$GpcmLnx67HBdqytf.B.Yvu6lNBUCY7VzFG3naNakY5KHaQp6wbEoG', NULL, '2023-05-27 16:46:41', '2023-06-16 13:07:41', 2),
(3, 'nurse1', 'nurse', 'nursee', 'nurse@gmail.com', '121111111111', 'female', NULL, NULL, '$2y$10$TOKnZzn1IAKQAF8HlEgONujg6AQUsw2ep8Xk5BjI/IPD2LKj0D3Du', NULL, '2023-06-02 17:57:22', '2023-06-02 17:57:22', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
