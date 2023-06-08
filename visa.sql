-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 12:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_profiles`
--

CREATE TABLE `agent_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos_received` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference1_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference1_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference1_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference1_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference2_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference2_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference2_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference2_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `students` int(11) NOT NULL DEFAULT 0,
  `contracts` int(11) NOT NULL DEFAULT 0,
  `revenue` int(11) NOT NULL DEFAULT 0,
  `commission` int(11) NOT NULL DEFAULT 0,
  `active_c` int(11) NOT NULL DEFAULT 0,
  `expired_c` int(11) NOT NULL DEFAULT 0,
  `signed_c` int(11) NOT NULL DEFAULT 0,
  `declined_c` int(11) NOT NULL DEFAULT 0,
  `interested` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `proposal_sent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `proposal_sent_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_received` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `document_received_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_issued` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `certificate_issued_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_sent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `agreement_sent_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_signed_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `agreement_signed_agent_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_signed_college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `agreement_signed_college_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_files` int(11) NOT NULL DEFAULT 0,
  `files_not_started` int(11) NOT NULL DEFAULT 0,
  `files_in_process` int(11) NOT NULL DEFAULT 0,
  `files_in_hold` int(11) NOT NULL DEFAULT 0,
  `files_canceled` int(11) NOT NULL DEFAULT 0,
  `files_finished` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `signed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `expired` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `declined` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `signed_fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signed_lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signed_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `college_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identities`
--

CREATE TABLE `identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `social_id` int(11) DEFAULT NULL,
  `third_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interested` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `not_interested_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_12_19_085244_create_agent_profiles_table', 1),
(4, '2018_12_19_085259_create_student_profiles_table', 1),
(5, '2018_12_20_065031_create_leads_table', 1),
(6, '2018_12_22_065134_create_visas_table', 1),
(7, '2018_12_26_064835_create_contracts_table', 1),
(8, '2018_12_26_211955_create_socials_table', 1),
(9, '2018_12_30_071204_create_identities_table', 1),
(10, '2019_01_16_181407_create_education_table', 1),
(11, '2019_01_19_082105_create_todos_table', 1);

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
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', NULL, '2023-06-07 13:37:44', '2023-06-07 13:37:44'),
(2, 'Youtube', NULL, '2023-06-07 13:37:44', '2023-06-07 13:37:44'),
(3, 'Twitter', NULL, '2023-06-07 13:37:44', '2023-06-07 13:37:44'),
(4, 'Instagram', NULL, '2023-06-07 13:37:44', '2023-06-07 13:37:44'),
(5, 'others', NULL, '2023-06-07 13:37:44', '2023-06-07 13:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `student_profiles`
--

CREATE TABLE `student_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `education_id` int(11) DEFAULT NULL,
  `agent_percentage` int(11) DEFAULT NULL,
  `social_id` int(11) DEFAULT NULL,
  `lead_id` int(11) DEFAULT NULL,
  `third_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_approved` int(11) NOT NULL DEFAULT 0,
  `visa_rejected` int(11) NOT NULL DEFAULT 0,
  `visa_re_applied` int(11) NOT NULL DEFAULT 0,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_issue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_expire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenth_percentage` int(11) NOT NULL,
  `twelveth_percentage` int(11) NOT NULL,
  `tenth_year` int(11) NOT NULL,
  `twelveth_year` int(11) NOT NULL,
  `tenth_board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twelveth_board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twelveth_stream` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuition_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `Loa_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_processing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `file_processed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `file_submission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `submission_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `approved_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_declined` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `declined_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reapply` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `refund` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `refund_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_ins_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_ins_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_ins_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_ins_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nd_ins_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nd_ins_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nd_ins_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nd_ins_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rd_ins_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rd_ins_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rd_ins_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rd_ins_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_received` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `document_received_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_letter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `offer_letter_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intake_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submission_to_visa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `submission_to_visa_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `date`, `time`, `activity`, `status`, `created_at`, `updated_at`) VALUES
(1, '2023-06-07', '09:10:00', 'Test', 2, '2023-06-07 15:24:09', '2023-06-07 15:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `admin`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shiva Sapra', 'ashishsapra7@gmail.com', NULL, 1, '$2y$10$hvGfrcpeLYrA1.9WD27HvOeBIkVB9csfvO9TQZvXk4lh1zm3hJMju', NULL, NULL, '2023-06-07 13:37:44', '2023-06-07 13:37:44'),
(2, 'Admin User', 'admin@gmail.com', NULL, 1, '$2y$10$OB1h.iOVpiKGIGxjo7GvNulM4lhnNFB5/DRAeuJt9tXCEHyrdmEQi', NULL, 'P0wLNY2DKyhpZxeBK5I8s35Mk5ghXaN8eRQjSsxkO1kONWoKjziC5GsjOXOZ', '2023-06-07 13:37:44', '2023-06-07 13:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `visas`
--

CREATE TABLE `visas` (
  `id` int(10) UNSIGNED NOT NULL,
  `travel_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `rejected` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `re_apply` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_profiles`
--
ALTER TABLE `agent_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_profiles`
--
ALTER TABLE `student_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visas`
--
ALTER TABLE `visas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_profiles`
--
ALTER TABLE `agent_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identities`
--
ALTER TABLE `identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_profiles`
--
ALTER TABLE `student_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visas`
--
ALTER TABLE `visas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
