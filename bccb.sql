-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 01:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bccb`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_performances`
--

CREATE TABLE `best_performances` (
  `perform_id` int(10) UNSIGNED NOT NULL,
  `b_clubName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_opClubName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_eventId` int(11) NOT NULL,
  `b_matchId` int(11) NOT NULL,
  `b_runs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_wickets` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_performances`
--

INSERT INTO `best_performances` (`perform_id`, `b_clubName`, `b_opClubName`, `b_eventId`, `b_matchId`, `b_runs`, `b_wickets`, `player_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'ff', 1, 1, '2', '2', 1, NULL, NULL),
(2, 'r', 'e', 1, 1, '12', '44', 6, NULL, NULL),
(3, 'Crowland crows', 'Kaunia oxes', 23, 23, '197', '7', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(20) NOT NULL,
  `club_name` varchar(20) NOT NULL,
  `date_of_establishment` date NOT NULL,
  `club_house` varchar(20) NOT NULL,
  `club_location` varchar(20) NOT NULL,
  `club_village` varchar(20) NOT NULL,
  `club_thana` varchar(20) NOT NULL,
  `club_district` varchar(20) NOT NULL,
  `club_postcode` varchar(20) NOT NULL,
  `president` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `date_of_establishment`, `club_house`, `club_location`, `club_village`, `club_thana`, `club_district`, `club_postcode`, `president`, `password`) VALUES
(1, 'sas', '2018-08-29', 'asa', 'sasa', 'sas', 'sas', 'asa', 'sasa', 'ffff', ''),
(2, 'rrr', '2018-08-29', 'rrr', 'rr', 'rr', 'rr', 'rr', 'rr', 'rr', '514f1b439f404f86f77090fa9edc96ce');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `club_id` int(20) NOT NULL,
  `club_name` varchar(20) NOT NULL,
  `fp_first_name` varchar(20) NOT NULL,
  `fp_middle_name` varchar(20) NOT NULL,
  `fp_last_name` varchar(20) NOT NULL,
  `fp_player_id` int(20) NOT NULL,
  `sp_first_name` varchar(20) NOT NULL,
  `sp_middle_name` varchar(20) NOT NULL,
  `sp_last_name` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `contract_amount` int(20) NOT NULL,
  `witness_one` varchar(20) NOT NULL,
  `witness_two` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`club_id`, `club_name`, `fp_first_name`, `fp_middle_name`, `fp_last_name`, `fp_player_id`, `sp_first_name`, `sp_middle_name`, `sp_last_name`, `designation`, `start_date`, `end_date`, `contract_amount`, `witness_one`, `witness_two`) VALUES
(2, 'rrr', 'Syed', 'Zubaer', 'Hasan', 1, 'ff', 'ff', 'ff', 'ff', '2018-08-09', '2018-08-31', 50000, 'ae', 'ae');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `edu_id` int(10) UNSIGNED NOT NULL,
  `degree_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inst_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`edu_id`, `degree_name`, `inst_name`, `board`, `year`, `result`, `player_id`, `created_at`, `updated_at`) VALUES
(1, 'uuu', 'fdfd', 'ff', '22', '22', 1, NULL, NULL),
(2, 'cc', 'cc', 'cc', '12', '1', 1, NULL, NULL),
(3, 'uuu', 'fdfdf', 'uuu', '201', '1', 1, NULL, NULL),
(4, 'uuu', 'as', 'as', '11', '11', 2, NULL, NULL),
(5, 'uuu', 'fdfd', 'uuu', '201', '12', 4, NULL, NULL),
(6, 'a', 'a', 'a', '44', '44', 5, NULL, NULL),
(7, 'q', 'q', 'q', '11', '21', 6, NULL, NULL),
(8, 'ssc', 'barisal zilla scholl,barisal', 'barisal', '2012', '5', 1, NULL, NULL);

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
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2018_08_07_054535_create_players_table', 1),
(44, '2018_08_07_054623_create_previous_histories_table', 1),
(45, '2018_08_07_054707_create_best_performances_table', 1),
(46, '2018_08_07_054733_create_educations_table', 1);

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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parmanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `player_sign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `f_name`, `m_name`, `l_name`, `father_name`, `mother_name`, `dob`, `image`, `present_address`, `parmanent_address`, `membership`, `club_id`, `player_sign`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Syed', 'Zubaer', 'Hasan', 'father name', 'mother name', '1997-08-12', 'public/images/R9P0pCoFpB1brPq1FAYK.jpg', '{\"t_houseNO\":\"420\",\"t_location\":\"lal wall\",\"t_village\":\"ansercamp\",\"t_thana\":\"mirpur\",\"t_district\":\"dhaka\",\"t_postCode\":\"1212\"}', '{\"p_houseNO\":\"420\",\"p_location\":\"lal wall\",\"p_village\":\"ansercamp\",\"p_thana\":\"mirpur\",\"p_district\":\"dhaka\",\"p_postCode\":\"1212\"}', 'Crolandian', 2, 'public/images/9aVZiSpo63VlZj7jPVrU.png', 'zuber@nsu.com', '4124bc0a9335c27f086f24ba207a4912', '2018-08-28 11:12:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `previous_histories`
--

CREATE TABLE `previous_histories` (
  `his_id` int(10) UNSIGNED NOT NULL,
  `p_clubName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_run` int(11) NOT NULL,
  `total_wicket` int(11) NOT NULL,
  `team_leader` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `previous_histories`
--

INSERT INTO `previous_histories` (`his_id`, `p_clubName`, `from`, `to`, `total_run`, `total_wicket`, `team_leader`, `player_id`, `created_at`, `updated_at`) VALUES
(1, 'fff', 'fff', 'fff', 121, 12, 0, 1, NULL, NULL),
(2, 'ffff', '1222', '1223', 111, 11, 0, 1, NULL, NULL),
(3, 'fffgg', '121', '1223', 1213, 11, 1, 1, NULL, NULL),
(4, 'fffffff', '1122', '1133', 1213, 11111, 1, 1, NULL, NULL),
(5, 'fffffff', '1122', '1133', 1213, 11111, 1, 1, NULL, NULL),
(6, 'ffff', '1122', '1133', 111, 111, 1, 4, NULL, NULL),
(7, 'a', '3', '4', 4, 4, 1, 5, NULL, NULL),
(8, 'a', '3', '4', 4, 4, 1, 6, NULL, NULL),
(9, 'Crowland crows', '2012', '1016', 8026, 420, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_performances`
--
ALTER TABLE `best_performances`
  ADD PRIMARY KEY (`perform_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`edu_id`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `previous_histories`
--
ALTER TABLE `previous_histories`
  ADD PRIMARY KEY (`his_id`);

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
-- AUTO_INCREMENT for table `best_performances`
--
ALTER TABLE `best_performances`
  MODIFY `perform_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `edu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `previous_histories`
--
ALTER TABLE `previous_histories`
  MODIFY `his_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
