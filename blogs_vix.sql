-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 17.42
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs_vix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`, `excerpt`) VALUES
(17, 'Investree Ekspansi ke Thailand', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, velit vel quo molestias earum error, ab odio iure quisquam voluptatem placeat eveniet quos dolore! Ea dolore temporibus consequuntur, aut consequatur nam praesentium nulla illum dolores cupiditate cumque delectus, optio tenetur accusantium eveniet vel in dicta amet debitis! Et fugit, molestias laboriosam inventore nemo placeat dolorem asperiores, hic expedita porro tempora sapiente ratione numquam nam maxime dolores! Eos nostrum quidem aspernatur nisi vitae laudantium quam a recusandae consequuntur perferendis vero repellat in soluta asperiores qui tempore sapiente alias, sit fuga dolorum ex nesciunt corrupti? Cumque dicta asperiores eaque nam qui error!', 'v2oMu67OW5Rgfeif6AfGHRRGLRajsjb4dgASnKcY.jpg', 2, 2, '2023-06-29 23:14:54', '2023-06-29 23:14:54', 'Lorem ipsum dolor sit amet consectetur adipisicing...'),
(18, 'Profil Investree', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, velit vel quo molestias earum error, ab odio iure quisquam voluptatem placeat eveniet quos dolore! Ea dolore temporibus consequuntur, aut consequatur nam praesentium nulla illum dolores cupiditate cumque delectus, optio tenetur accusantium eveniet vel in dicta amet debitis! Et fugit, molestias laboriosam inventore nemo placeat dolorem asperiores, hic expedita porro tempora sapiente ratione numquam nam maxime dolores! Eos nostrum quidem aspernatur nisi vitae laudantium quam a recusandae consequuntur perferendis vero repellat in soluta asperiores qui tempore sapiente alias, sit fuga dolorum ex nesciunt corrupti? Cumque dicta asperiores eaque nam qui error!', 'SDBLgBZKiw1qBnuqFbGNYDMo9OswF3Ev0zNEEq9I.jpg', 3, 2, '2023-06-29 23:15:35', '2023-06-29 23:19:07', 'Lorem ipsum dolor sit amet consectetur adipisicing...'),
(19, 'Fullstack Engineer VIX Investree', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa excepturi, voluptas, eveniet possimus totam, unde quam ipsum doloribus sapiente sequi! Impedit ut rerum reiciendis amet ratione repellendus veniam sapiente optio nostrum voluptatum quasi sunt perferendis accusamus alias, voluptatem corporis architecto eaque culpa incidunt temporibus laudantium! Quaerat minus totam eveniet ipsam distinctio aliquid porro tenetur exercitationem placeat aperiam? Aliquid, totam numquam dicta vero voluptas quia magnam praesentium distinctio beatae quis officiis laborum iure corrupti soluta incidunt, quibusdam eum repudiandae dolores saepe nihil ducimus rerum. Omnis earum soluta placeat iste ab! Delectus, voluptate a nam nobis fugiat ea doloribus repellat laboriosam. Assumenda officiis ipsum, repellat porro sapiente atque at. Eveniet id est error accusantium quidem doloremque nemo porro totam, quisquam reiciendis illo animi omnis atque sint nam quis harum. Porro blanditiis fugit, ullam, molestiae eum voluptate facilis quisquam est accusantium soluta tempora iusto magni eius labore adipisci natus. Sint nulla vero rerum et dolores deserunt beatae placeat blanditiis tenetur, cumque ex ullam, veniam iste magnam pariatur architecto exercitationem illo ratione animi molestiae earum. Sequi repellendus perferendis unde, voluptatibus libero id atque voluptatem natus similique consectetur pariatur! Ducimus, reiciendis et nam, quo alias repellat nulla sapiente iusto culpa hic, exercitationem in ipsa?', 'forobk6e0PeFGE7WurSQQtQbjY8VPo9mpWdDs7yF.jpg', 1, 2, '2023-06-29 23:20:50', '2023-06-29 23:20:50', 'Lorem, ipsum dolor sit amet consectetur adipisicin...'),
(20, 'Rakamin Academy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa excepturi, voluptas, eveniet possimus totam, unde quam ipsum doloribus sapiente sequi! Impedit ut rerum reiciendis amet ratione repellendus veniam sapiente optio nostrum voluptatum quasi sunt perferendis accusamus alias, voluptatem corporis architecto eaque culpa incidunt temporibus laudantium! Quaerat minus totam eveniet ipsam distinctio aliquid porro tenetur exercitationem placeat aperiam? Aliquid, totam numquam dicta vero voluptas quia magnam praesentium distinctio beatae quis officiis laborum iure corrupti soluta incidunt, quibusdam eum repudiandae dolores saepe nihil ducimus rerum. Omnis earum soluta placeat iste ab! Delectus, voluptate a nam nobis fugiat ea doloribus repellat laboriosam. Assumenda officiis ipsum, repellat porro sapiente atque at. Eveniet id est error accusantium quidem doloremque nemo porro totam, quisquam reiciendis illo animi omnis atque sint nam quis harum. Porro blanditiis fugit, ullam, molestiae eum voluptate facilis quisquam est accusantium soluta tempora iusto magni eius labore adipisci natus. Sint nulla vero rerum et dolores deserunt beatae placeat blanditiis tenetur, cumque ex ullam, veniam iste magnam pariatur architecto exercitationem illo ratione animi molestiae earum. Sequi repellendus perferendis unde, voluptatibus libero id atque voluptatem natus similique consectetur pariatur! Ducimus, reiciendis et nam, quo alias repellat nulla sapiente iusto culpa hic, exercitationem in ipsa?', 'HTXMNOPxuz9j6OhrlMx6XiHuCnD9aWPJP7pP8vbU.png', 1, 4, '2023-06-29 23:22:52', '2023-06-29 23:22:52', 'Lorem, ipsum dolor sit amet consectetur adipisicin...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Programming', NULL, NULL),
(2, 'Keuangan', NULL, NULL),
(3, 'Personal', '2023-06-29 06:26:48', '2023-06-29 06:41:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2023_06_22_043232_create_sessions_table', 2),
(7, '2023_06_23_062447_create_articles_table', 3),
(8, '2023_06_23_073008_create_categories_table', 4),
(9, '2023_06_23_073230_create_categories_table', 5),
(10, '2023_06_27_132611_add_excerpt', 6),
(11, '2023_06_27_132958_add_excerpt', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fIYrKmUwGRxNH5wDsqZLta3pCbyvZ4T46C7wp512', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlBZNDFDd2dlR3VDdkZmNnZpbjI4cUN3RHJFbkhTVUNGYjNZOTE1VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1688138332),
('GOsi4maL1TIKWdHxbKr4WukeAlkAhtbrmAMXi1nM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlpObW00WEFpWkY2VTdhc0hyS3lJZGtPcFJMVHdhdlJGMnNaRlJnZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1688111596),
('HorJGGs3nWJyLJccjGLpmQU3KCs6atPlBKUMTKkF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjJLR2NsRUp6elJHOENQSVpOUG1qN1duUXlsRmtKbVhRY0lhb3U2bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1688139685),
('JZlAIENi5CdeShqcVjj6h0vxoDJH2Zgxh3YtYrHD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkdTWVBlRVFYQUpPUTl3Nzlob21NcGZNWnRHZ1h0S1ZPMExtVzZLSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iZXJhbmRhLzE4Ijt9fQ==', 1688109359);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aris adi pratam', 'arisa1515@gmail.com', NULL, '$2y$10$kuiIEZ3ZoXv40ZMxLkPw5eomWrJTwvgrZ1dEO47jJR41EZaofJm0u', NULL, NULL, NULL, NULL, '2023-06-21 20:46:04', '2023-06-21 20:46:04'),
(2, 'aris', 'aris@gmail.com', NULL, '$2y$10$UZ47wu0bopNi.UHY904/T.ZDsZr/P5RFvj/s9uAO4brbJveFpmtUy', NULL, NULL, NULL, NULL, '2023-06-21 20:46:47', '2023-06-21 20:46:47'),
(3, 'cimet', 'cimet@gmail.com', NULL, '$2y$10$sip32anJA.xfbSjQXh/7ceNsZ2YF8YC47Lv5bgi4ghxzxH0OLQGf2', NULL, NULL, NULL, NULL, '2023-06-23 03:02:05', '2023-06-23 03:02:05'),
(4, 'Aris Adi Pratama', 'sira@gmail.com', NULL, '$2y$10$SRL0yIwcEIa5fXvwYL8q4OOCW08Iu3p.6lre.XAjqLayMBjPStJIK', NULL, NULL, NULL, NULL, '2023-06-29 23:22:21', '2023-06-29 23:22:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
