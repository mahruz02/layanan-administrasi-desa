-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 09:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_kramatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `email`, `password`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'kramatan, wonosobo', 'admin@gmail.com', '$2y$10$qdgCAVYeIjdcsgtRqN.cpORHpV88U/TXp7WhwaU9qq.SRy1wCie.u', 'admin', NULL, NULL);

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
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id`, `id_warga`, `kepala_keluarga`, `no_kk_lama`, `status_kawin`, `pendidikan`, `keperluan`, `dokumen`, `status`, `created_at`, `updated_at`) VALUES
(5, '7', 'kuntullll', '897656567565', 'Duda/Janda', 'SMP/Sederajat', 'Cetak Ulang', 'ktp.png', 'Pending', '2022-12-24 02:56:24', '2022-12-24 02:56:45'),
(6, '1', 'ahmad', '0000000000000000', 'Menikah', 'SD/Sederajat', 'Pengajuan Baru', 'aa.jpg', 'Dokumen Kurang Jelas', '2022-12-24 11:36:22', '2022-12-24 13:03:46'),
(8, '1', 'lukman', '1111111111111111', 'Menikah', 'SD/Sederajat', 'Pengajuan Pembaharuan', 'doc.pdf', 'Pending', '2022-12-24 12:58:34', '2022-12-24 12:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id`, `id_warga`, `no_kk`, `keperluan`, `dokumen`, `status`, `created_at`, `updated_at`) VALUES
(3, '7', '203942394488', 'Cetak Ulang', 'ktp.png', 'Pending', '2022-12-24 02:48:09', '2022-12-24 02:55:23'),
(4, '1', '6661111111111111', 'Pengajuan Baru', 'qrcode_41375208_650133e9fd30a81d59b0858b3ecb3d59.png', 'Pending', '2022-12-24 04:40:44', '2022-12-24 13:01:40'),
(5, '1', '879879879879', 'Pengajuan Pembaharuan', 'foto.jpg', 'Diterima', '2022-12-24 05:34:06', '2022-12-24 12:49:07'),
(6, '1', '23423423423', 'Pengajuan Pembaharuan', 'foto.jpg', 'Pending', '2022-12-24 05:34:59', '2022-12-24 05:34:59'),
(7, '12', '090909090909090', 'Pengajuan Baru', 'aa.jpg', 'Pending', '2022-12-24 09:30:35', '2022-12-24 09:32:07'),
(8, '1', '1111111111111110', 'Pengajuan Pembaharuan', 'aa.jpg', 'Pending', '2022-12-24 12:57:08', '2022-12-24 12:57:39');

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
(5, '2022_12_09_081534_create_warga_table', 1),
(6, '2022_12_09_081549_create_admin_table', 1),
(7, '2022_12_09_081609_create_ktp_table', 1),
(8, '2022_12_09_081621_create_kk_table', 1),
(9, '2022_12_09_081634_create_sku_table', 1);

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
-- Table structure for table `sku`
--

CREATE TABLE `sku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sku`
--

INSERT INTO `sku` (`id`, `id_warga`, `keperluan`, `nama_usaha`, `alamat_usaha`, `dokumen`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Pengajuan Pembaharuan', 'makan enak', 'wonobungkah', 'foto.jpg', 'Dokumen Kurang Jelas', '2022-12-10 03:42:08', '2022-12-24 13:04:42'),
(5, '1', 'Pengajuan Baru', 'kang jaja', 'sdsd', 'pngwing.com.png', 'Pending', '2022-12-24 02:13:44', '2022-12-24 02:13:44'),
(6, '7', 'Pengajuan Pembaharuan', 'Massaq', 'Wonosoboq', 'ktp.png', 'Pending', '2022-12-24 02:57:17', '2022-12-24 02:58:29'),
(11, '1', 'Pengajuan Baru', 'kentang enak banget', 'Wonosobo', '391-559-SKL wisduawan ke 44.pdf', 'Pending', '2022-12-24 12:59:25', '2022-12-24 13:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama`, `nik`, `alamat`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'mahrus', '0000000000000000', 'kramatan, wonosobo', '123@gmail.com', '$2y$10$.dGXNxwriNT/6Lr0k5jWtOjXXmNykTp3kKHJwgLq2T2qhL/b76Z6y', '2022-12-09 02:22:41', '2022-12-24 12:42:04'),
(10, 'wapek', '1111111111111111', 'kresek  sinduagung rt 04 rw 01 selomerto wonosobo', 'e@e', '$2y$10$Wm1daNaOa5FwcBfXtiFA.ewarh42z7X9dart.z3kT5B.S4yh8hXMe', '2022-12-24 08:43:21', '2022-12-24 08:43:21'),
(11, 'rifai', '0000000000000000', 'kresek  sinduagung rt 04 rw 01 selomerto wonosobo', 'mahrus@gmail.com', '$2y$10$EiPmyIMuPyQt1Vx/GUc/K.jTs81/JrN.ZvnXDecQRjmabdOJbpaJK', '2022-12-24 08:56:58', '2022-12-24 08:56:58'),
(14, 'ibnu', '0000000000000000', 'kresek  sinduagung rt 04 rw 01 selomerto wonosobo', 'ibnu@gmail.com', '$2y$10$fmLDNon0ZBB3.FEzACn.iOld6BggSZjsWNkQUTbXM99WIeQFqThp6', '2022-12-24 13:02:46', '2022-12-24 13:02:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
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
-- Indexes for table `sku`
--
ALTER TABLE `sku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sku`
--
ALTER TABLE `sku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
