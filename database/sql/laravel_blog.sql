-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2023 at 05:10 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pearline Lockman', 'prof-charlene-zieme-jr', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(2, 'Dr. Betty Wehner IV', 'mr-rigoberto-lind', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(3, 'Sebastian Kohler', 'prof-lily-bruen-i', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(4, 'Madaline Marquardt II', 'blaze-gibson', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(5, 'Maxwell Gleason', 'aurore-robel', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(6, 'Miss Cecile Batz', 'miss-nayeli-rice-iv', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(7, 'Miss Alejandra Johnson', 'esteban-nicolas', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(8, 'Lois Schowalter PhD', 'mr-norwood-heller', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(9, 'Mose Torphy', 'vivianne-jacobs-md', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(10, 'Prof. Audie Dickinson PhD', 'jeanne-hickle', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_08_102401_create_categories_table', 1),
(6, '2023_01_09_171531_create_tags_table', 1),
(7, '2023_01_10_060356_create_posts_table', 1),
(8, '2023_01_15_055317_create_settings_table', 1),
(9, '2023_01_15_155645_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_title_unique` (`title`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instragram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reddit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyroght` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `image`, `description`, `facebook`, `twiter`, `instragram`, `reddit`, `email`, `copyroght`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Example.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Copyright © 2023 All rights reserved | This template is made\r\n             with  by Colorlib---Downloaded from Themeslab', NULL, NULL, '2023-03-10 10:28:23', '2023-03-10 10:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Juston Paucek III', 'rashad-lockman', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(2, 'Nathanael Kling', 'arlo-wilderman', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(3, 'Alison Bailey', 'grant-kemmer', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(4, 'Joshuah Osinski', 'blaze-hand', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(5, 'Dr. Eusebio Predovic', 'esther-hoppe', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(6, 'Payton Larson', 'nikko-buckridge', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(7, 'Mrs. Ruthe Gusikowski Jr.', 'ms-beatrice-schuster-md', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(8, 'Samantha Osinski I', 'josh-boyer', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(9, 'Jaydon Windler', 'sheridan-watsica', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(10, 'Ms. Brandyn Bode', 'clemens-mueller', NULL, '2023-03-10 10:28:25', '2023-03-10 10:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `description`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mridul', 'mridul9650@gmail.com', '2023-03-10 10:28:24', '$2y$10$gn0zMzY1D1r2UCYtBulNQeDXWJoCZ.2Me35nasbznsxdn3S790juG', NULL, NULL, NULL, '7nwnS6QarcBNQ8ATtznAKdigcSsndqvzJBH0txaQbgFYr4mTJOrxY8az7dhW', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(2, 'Selena Koss Jr.', 'lynn68@example.org', '2023-03-10 10:28:24', '$2y$10$L56f1tfncEDh8qicvsbbRea6fKqVPOvqX71Bv1NmbBVGYxyIY00SK', NULL, NULL, NULL, 'mEqzj5fHDr', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(3, 'Polly Schamberger', 'saul55@example.net', '2023-03-10 10:28:24', '$2y$10$HYFUI3FscXXFOoTTBbaB9uPD4EEjJfmpmYeau4v3Xwo8quep2touG', NULL, NULL, NULL, 'kifdNw4Pk7', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(4, 'Allie Schimmel', 'gay.romaguera@example.com', '2023-03-10 10:28:24', '$2y$10$axhcD3odm2ZNj.7AtNjiPOVSsz1vq7bzvv4wgt5Q1/cGVVTjbadYC', NULL, NULL, NULL, 'B7ZKAQvG6G', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(5, 'Mr. Shad Harber I', 'ngoyette@example.org', '2023-03-10 10:28:24', '$2y$10$guP126U9RP4ucfikWoCa0.m3eJuvbmKk.W55mZJpubrM8/yfMh0mC', NULL, NULL, NULL, 'NcJwPxSYU3', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(6, 'Joesph Shanahan', 'harvey.delores@example.org', '2023-03-10 10:28:24', '$2y$10$JKjwnxAo88wF3eMb0SCu3uMTiUtgA7mjlqe94tIkbq0qIhbnFD0GO', NULL, NULL, NULL, 'hO3W4OsnRT', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(7, 'Riley Prohaska DDS', 'allene.ebert@example.org', '2023-03-10 10:28:24', '$2y$10$Mjip11BiOlR1yfL3LqQiJOkv8RY5m1.PbPqfZXZFuBvWWUbfXE0m.', NULL, NULL, NULL, 'bNKiI85Q5P', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(8, 'Verner Lind', 'giovani.hansen@example.net', '2023-03-10 10:28:25', '$2y$10$/wsadUf.NPzeSeaFRu51FeNk0q5eycjqwJZwbjPFeqXkoteKFsjsG', NULL, NULL, NULL, 'oD0zET5uM4', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(9, 'Herminia O\'Conner', 'johnson.ratke@example.net', '2023-03-10 10:28:25', '$2y$10$9ag1n.71.aDfjKvy77YiKuprrKKotSWAVCzrBZsnurF1tG4WvFP26', NULL, NULL, NULL, 'Gz84FFAliS', '2023-03-10 10:28:25', '2023-03-10 10:28:25'),
(10, 'Merle Smith', 'walsh.bell@example.net', '2023-03-10 10:28:25', '$2y$10$H7X3hMPzFZKjcItU.auMHelEbtZ1wMMb3xXO3VEvX4yhu9PY/tr2e', NULL, NULL, NULL, 'XaqqcbEau8', '2023-03-10 10:28:25', '2023-03-10 10:28:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
