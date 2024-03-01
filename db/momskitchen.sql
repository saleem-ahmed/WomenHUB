-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2022 at 12:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Sabzi', '2022-08-30 00:30:45', '2022-08-30 00:30:45'),
(2, 'Rice', '2022-08-30 00:30:47', '2022-08-30 00:30:47'),
(3, 'Soups', '2022-08-30 00:30:50', '2022-08-30 00:30:50'),
(4, 'Daal', '2022-08-30 00:30:54', '2022-08-30 00:30:54'),
(5, 'Ghoost', '2022-08-30 00:48:00', '2022-08-30 00:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(15,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_free` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `dish_name`, `user_id`, `description`, `price`, `image`, `is_free`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Biryani', 1, 'Mazadar spicy home made biryani', 280.00, 'biryani_1661837655.jpg', 0, '2022-08-30 00:34:15', '2022-08-30 00:34:15', 2),
(2, 'Rajma', 1, 'Lobia daal', 200.00, 'lobia_1661837698.webp', 0, '2022-08-30 00:34:58', '2022-08-30 00:34:58', 4),
(3, 'Mix Vagitable', 1, 'Mix vegetable', 150.00, 'sabzi_1661837737.jpg', 0, '2022-08-30 00:35:37', '2022-08-30 00:35:37', 1),
(4, 'Vegetable Soup', 1, 'Mix vegetable soup', 120.00, 'soup_1661837785.jpeg', 0, '2022-08-30 00:36:25', '2022-08-30 00:36:25', 3),
(5, 'Mutton', 1, 'Mutton', 300.00, 'mutton_1661838547.cms', 0, '2022-08-30 00:49:07', '2022-08-30 00:49:07', 5),
(6, 'Chicken Haleem', 3, 'test', 150.00, 'chicken haleem_1661838875.jpg', 0, '2022-08-30 00:54:35', '2022-08-30 00:54:35', 5),
(7, 'Aloo matar', 3, 'Test', 140.00, 'aloomatar_1661839238.jpg', 0, '2022-08-30 01:00:38', '2022-08-30 01:00:38', 1),
(8, 'chicken kadai', 3, 'test', 160.00, 'Chicken kadai_1661839883.jpg', 0, '2022-08-30 01:11:23', '2022-08-30 01:11:23', 5),
(9, 'Sabzi mix', 3, 'test', 160.00, 'sabzi_1661839906.jpg', 0, '2022-08-30 01:11:46', '2022-08-30 01:11:46', 1),
(10, 'Lobia', 3, 'test', 150.00, 'lobia_1661839928.jpg', 0, '2022-08-30 01:12:08', '2022-08-30 01:12:08', 4),
(11, 'daal chawal', 3, 'test', 150.00, 'lobiachawal_1661839952.jpg', 0, '2022-08-30 01:12:32', '2022-08-30 01:12:32', 2),
(12, 'Sabzi soup', 3, 'test', 130.00, 'sabzisuop_1661839985.jpeg', 0, '2022-08-30 01:13:05', '2022-08-30 01:13:05', 3),
(13, 'Biryanii', 4, 'Biryani', 280.00, 'biryani_1661852219.jpg', 0, '2022-08-30 04:36:59', '2022-08-30 04:36:59', 2);

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
(5, '2022_08_29_052110_create_category_table', 1),
(6, '2022_08_29_060407_create_dishes_table', 1),
(7, '2022_08_29_085059_create_order_masters_table', 1),
(8, '2022_08_29_094556_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_master_id` bigint(20) UNSIGNED NOT NULL,
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_master_id`, `dish_id`, `day`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Mon', 2, 1, '2022-08-30 07:29:11', '2022-08-30 07:29:11'),
(2, 1, 10, 'Tue', 2, 1, '2022-08-30 07:29:36', '2022-08-30 07:29:36'),
(3, 1, 3, 'Wed', 2, 1, '2022-08-30 07:29:59', '2022-08-30 07:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_masters`
--

CREATE TABLE `order_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `rating` double(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_masters`
--

INSERT INTO `order_masters` (`id`, `customer_id`, `no_of_people`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, 0.00, '2022-08-30 07:28:45', '2022-08-30 07:28:45');

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
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kitchen_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `kitchen_name`, `location`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Sobia', 'sobia@gmail.com', '$2y$10$z/CJGnDGXsqQQD5AYa4ZHOMW9csor6L/jz6rmKZDRk6agIpAo5cRy', '+923415603673', 'Mom\'s Kitchen', 'Sonikot, Gilgit', 'chef', '2022-08-30 00:30:24', '2022-08-30 00:30:24'),
(2, 'Farhan Faqir', 'farhanfaqir29963@gmail.com', '$2y$10$2EeCF6rhEXA0vncyfVFrruDbnjx6H8mCYD3M3x9kMsgbHhPMc3Dca', '+923415603673', NULL, 'Sonikot, Gilgit', 'customer', '2022-08-30 00:38:12', '2022-08-30 00:38:12'),
(3, 'Khushi', 'khushi@gmail.com', '$2y$10$wPAWvrueYuaoVIMFex8hvumwGSH769N5mNiUKL9DZdjWW2xdRqnX.', '03554509998', 'Khan\'s Kitchen', 'Oshikhandass Gilgit', 'chef', '2022-08-30 00:41:34', '2022-08-30 00:41:34'),
(4, 'Kulsoom Tehseen', 'kulsoom@gmail.com', '$2y$10$NfFikkbOT71cYcA5LD32jOLZFaRyfPOL730eSTiztabFx2beV0suS', '1234567890', 'Kulsoom\'s Kitchen', 'Danyore', 'chef', '2022-08-30 04:35:03', '2022-08-30 04:35:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dishes_dish_name_unique` (`dish_name`),
  ADD KEY `dishes_user_id_foreign` (`user_id`),
  ADD KEY `dishes_category_id_foreign` (`category_id`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_master_id_foreign` (`order_master_id`),
  ADD KEY `order_details_dish_id_foreign` (`dish_id`);

--
-- Indexes for table `order_masters`
--
ALTER TABLE `order_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_masters_customer_id_foreign` (`customer_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_masters`
--
ALTER TABLE `order_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dishes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_dish_id_foreign` FOREIGN KEY (`dish_id`) REFERENCES `dishes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_order_master_id_foreign` FOREIGN KEY (`order_master_id`) REFERENCES `order_masters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_masters`
--
ALTER TABLE `order_masters`
  ADD CONSTRAINT `order_masters_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
