-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 12:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utem_file_sharing`
--

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploaded_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file_path`, `faculity_name`, `document_type`, `subject_name`, `description`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(6, '1659027804_Majed __ Electrical Engineer.pdf', '/storage/uploads/1659027804_Majed __ Electrical Engineer.pdf', 'FKEKK', 'Past years final projects', 'OOP 1', 'EER 1', 'Ah93', '2022-07-28 14:03:24', '2022-07-30 07:09:31'),
(7, '1659027997_PL_Data.csv', '/storage/uploads/1659027997_PL_Data.csv', 'FTMK', 'Past years quizes', 'Web application 1', 'Required', 'Ah93', '2022-07-28 14:06:37', '2022-07-30 07:00:35'),
(8, '1659028122_test.xlsx', '/storage/uploads/1659028122_test.xlsx', 'FPTT', 'Past years assignments', 'C++', 'Must Download', 'Ah93', '2022-07-28 14:08:42', '2022-08-01 06:48:00');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_06_28_123702_create_files_table', 1),
(16, '2022_07_13_163144_add_created_by_to_files_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('omar@f.com', '$2y$10$IcNlCV6RWZNku4p0fKybqOLuEyWou1g1gPhPtyavEZ/6fnJ4CpD3u', '2022-07-16 09:19:59'),
('ashiekh295@gmail.com', '$2y$10$Rpk4DFL1Pe.4u4dgRvK8ou7.3KJXQOpMa6FxWYDuZZOs9r2Sjbeua', '2022-07-16 09:20:25'),
('ashiekh295@gmail.com', 'jTKGzsrjM53XO90cEvsvQRZD5GYhV0b7sCLP0020fmUEk6CZV6Ly4iWzKzGK', '2022-07-30 12:31:50'),
('ashiekh295@gmail.com', 'hHI2Mt1xofGzeTzUTtAD25kgjQ6L5b27ULgSCRI0pgGXdzOnKPp4EBrTfKps', '2022-07-30 12:33:08'),
('ashiekh295@gmail.com', 'ZaP9WdZs1S5tt1exFRwuI5ManI1HfckGjiqk5aFnzJMCHAeZs1aNvfkNVLHp', '2022-07-30 12:36:56'),
('ashiekh295@gmail.com', 'SL0QmYPO8stVlH6gpqO51HC7Y11ffscrgdP7wsvowU5vNMwAlMtBIY1NfDZz', '2022-07-30 12:38:09'),
('ashiekh295@gmail.com', 'zByhGORS9EEiz0kOYdz4qypuR6C3yQwgvCXQSfcWlkmb82y27w7jLqsIYg2L', '2022-07-30 12:55:19'),
('ashiekh295@gmail.com', 'aMZAfugJlV51GpYO4mK9mETwYjpms9EeIF1EV7z5dX8iWkdEX7w8yxvrQaz0', '2022-07-30 13:44:58'),
('ashiekh295@gmail.com', 'ZjgbSAvlkI8Bz8KXyBnjsDAT0D9EhfKajbd9bNYg1Vp9Yil4eZmdHipnA3eK', '2022-07-30 13:54:10'),
('ashiekh295@gmail.com', 'GIetTFVjvfu1EolaAt3y6z3qdMGEVAvDzQf6yPNTemX6XKuG4tI0SNAj0PvE', '2022-07-30 13:54:43'),
('ashiekh295@gmail.com', '75b9SrCsnRwqaTQvMNWExwP9gRPwNQIldjxXJ4qYHqfNLQXAMEOVzlxW4Rj8', '2022-07-30 13:55:20'),
('ashiekh295@gmail.com', 'gSYAPPbvI4k95WUp2LLJF2DVOPjEsowhD4igtyBImOC4Ngnw4IeCOhTRhKsC', '2022-07-31 09:38:37'),
('ashiekh295@gmail.com', 'Sc9cvazH2vfxN1cYqm3I68TC8W0TekPfNRypw1WbSq9MR6DCi1ZrbfxivgSa', '2022-07-31 10:17:26'),
('ashiekh295@gmail.com', 'bCfMUaLhdLMC2wLGYJ45zBD2IcaqwawVZbYKnkMLj9THwf2x3cuV10z55UkW', '2022-07-31 10:39:31'),
('ashiekh295@gmail.com', 'Hp7aDooYu8MrXKI4GzyCkvotjA1vnURX9Y6gObkSyuyBt4u4ulYrMTO8upa7', '2022-07-31 10:40:02'),
('ashiekh295@gmail.com', 'L33Heyvl35JDdhTp07rEojUk3UpHAx9mYyfUFfDFdLba4ErHmaA1EYZOgHdC', '2022-07-31 10:40:59'),
('ashiekh295@gmail.com', 'pslIzcHCMNfm54TUzzL4tuqPkGXc9SiOeYcFT3qMuOVCc8p9FMSStv2vPQzJ', '2022-07-31 10:46:52'),
('ashiekh295@gmail.com', 'vLMr7voaSOtk5kmHB4W0S1ehUDsbPOsc5JcqHTmvgyiEkxf3Sxy8uTD5MOx0', '2022-07-31 10:48:36'),
('ashiekh295@gmail.com', 'uDL3EOGLUxIW4r7EGNJ42CLwJSA8VCClqHig6jdRYG4Nz4jTIdgPdgtKC6CL', '2022-07-31 10:51:06'),
('ashiekh295@gmail.com', 'A7k57KvhARHrcgDp4HfSNSULjqo4Xa7IbC1XHgbuXa6mUszCWutzqFgAf029', '2022-07-31 10:51:37'),
('ashiekh295@gmail.com', 'wtBMF5bqtnS0RsBQLOAJ3yhOqL2pjYFfhLeOf8w1PPAz6Ge54uoIPvWMIWqO', '2022-07-31 10:59:26'),
('ashiekh295@gmail.com', 'UOjjtQDwcJGW0HD4l88NNXf02JMwW2tpvZszadjexkP62U59CiMLqyzLRAZI', '2022-07-31 10:59:47'),
('ashiekh295@gmail.com', 'qQLw78QgnHe1xu7IBhdQF9IAWwOKLkaKuwktPttNKuPxfkC3Nskj0jUKNtRf', '2022-07-31 11:23:29'),
('ashiekh295@gmail.com', 'vjXsWWGfX0xJ1nUcri6v3mJGXCOUMCuHQFOFv70niWvxu07P8kDct8z58k6i', '2022-07-31 11:25:16'),
('ashiekh295@gmail.com', 'gD4ZnREnXXEZwePLXV1jVSpijaXLSTEY77LgnzA4rLYhNW0dN9OPro0bF50J', '2022-07-31 11:34:06'),
('ashiekh295@gmail.com', 'arU4yS7yd27OJK0JAJknHUvC8zNQYwUrnSFnT20vT1wCftOliqUh0GUoKgYL', '2022-07-31 11:44:20'),
('ashiekh295@gmail.com', 'to6hbcGQlxLtOkedX2vC9mEXroHmC8Zqg5JUf7nFZRmb2wsQXLUUBH9X74Vv', '2022-07-31 11:45:15'),
('ashiekh295@gmail.com', '9GjrrU9tB8jBRMXiA3pGnvxuyQFv9WXTxtV0ZLm082F8nKRvFnHrlkXcgzE9', '2022-07-31 11:46:37'),
('ashiekh295@gmail.com', 'VxDu8938qTd5BIJeMtvp2azX35ea4YHGzxyXy3zECaAcmm8lFnVi6kxzIPve', '2022-07-31 12:43:53'),
('ashiekh295@gmail.com', 'KXbhjcMKt4seg34r7m86XOLXPwh8QrOU8NYeLiTPLPbYpD0U8dC70grObDZs', '2022-07-31 12:44:40'),
('ashiekh295@gmail.com', 'yl88tlhfPToNjbJCT8SSZDVJ0Osv25bZezNzBXBWRMINCnxA9oMuHn7MCIC1', '2022-07-31 12:46:45'),
('ashiekh295@gmail.com', 'Yoy94dwUPblvzeq6L5keXnEHScVnMqgb60HDcagy6o2WRD56awIDGi4BMyZm', '2022-07-31 12:50:47'),
('ashiekh295@gmail.com', 'sEgStr0gz2WG1raAeQOBgwb6e4niCxpIPBySdblTWlw2o0qrZgH6zvbLVovd', '2022-07-31 12:52:13'),
('ashiekh295@gmail.com', 'JPB8SBqrIuHm5y8WmnFB5pOTi74uETwQVy0mQWG291C7ihLOInE0G3gIm7JT', '2022-07-31 12:52:44'),
('memo94@gmail.com', 'GrpBXBVv6N5a3WIgrw2eSJ4nIelUHR7BASR7LbBOcIuvINqDQIBXcBJ8DRgn', '2022-07-31 12:53:56'),
('ashiekh295@gmail.com', 'JCHCxbVdFgD7QB4WXjUknnI05GF1QyG1jTFEAiQtp2tXUOEf9Fpe0IoteJL2', '2022-07-31 13:18:36'),
('ashiekh295@gmail.com', 'donsPakwm5X67eRQ8VzwCZDs2tDlk6dSksyhZVGdCXvwXh5DT7xbaWregVJP', '2022-07-31 14:53:23'),
('moha89@gmail.com', 'UA8DiTFZAhVMGLbgFrvK5JjR4F72tEKpyv1geU7MkfKyvfdzviyPeizZ9l1k', '2022-07-31 16:13:30'),
('moha89@gmail.com', 'zWXreC6oNODqgNDjf6HJze7huMFBhL8FGLuk5v3ymbLQ4o2UfJaxhCFsoVI6', '2022-07-31 16:16:59'),
('moha89@gmail.com', 'kLN6kXGSIvzuxvCNmpXOGWhr77x5p6TI9ZUHCOE6JkEaUMsvZxFpy1lpP352', '2022-07-31 16:17:43'),
('moha89@gmail.com', '9j4anh2QrvC57ky2AEFYL29U6KmWy2WufE2W5NIT1tPZt5rVK84FdAv28r8k', '2022-07-31 16:18:30');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Ahmed Sheikh', 'ashiekh295@gmail.com', 'Ah93', NULL, '$2y$10$MCvfQ9euWHqLz44UKaM7IeGE8dQZBWG.jlmGMKRAYhuB40kBnkYM2', NULL, '2022-07-20 12:30:17', '2022-07-20 12:30:17'),
(10, 'musab mohamed', 'memo94@gmail.com', 'memo94', NULL, '$2y$10$lREHD8XquQFMAse.bH1yzOJ2IksnZ8hN5EjNBE1VWgPXa4PWGhhEy', NULL, '2022-07-23 10:01:26', '2022-07-23 10:01:26'),
(11, 'Mohamed', 'moha89@gmail.com', 'Moha89', NULL, '$2y$10$U5kHQTse1/xS0m/udN1rHerr177Vy./0RgYV51SuVBoh.axNw4ps.', NULL, '2022-07-30 08:17:35', '2022-07-31 16:10:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
