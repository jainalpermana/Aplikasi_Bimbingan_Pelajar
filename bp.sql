-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 09:16 AM
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
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `identifikasi`
--

CREATE TABLE `identifikasi` (
  `id` int(11) NOT NULL,
  `hari_tanggal` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jenis_masalah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identifikasi`
--

INSERT INTO `identifikasi` (`id`, `hari_tanggal`, `nama`, `kelas`, `jenis_masalah`, `created_at`, `updated_at`) VALUES
(7, '2018-04-29', 'IMAM', 'XII RPL 2', 'Pribadi', '2018-04-29 20:29:12', '2018-04-29 20:48:07'),
(8, '2018-04-30', 'ASEP', 'XII AKA 2', 'Umum', '2018-04-29 20:29:36', '2018-04-29 20:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `masalahverifikasi`
--

CREATE TABLE `masalahverifikasi` (
  `id` int(11) NOT NULL,
  `tgl_verifikasi` varchar(100) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `rekomendasi` varchar(255) NOT NULL,
  `sasaran_mutu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalahverifikasi`
--

INSERT INTO `masalahverifikasi` (`id`, `tgl_verifikasi`, `uraian`, `hasil`, `rekomendasi`, `sasaran_mutu`, `created_at`, `updated_at`) VALUES
(1, '2018-04-04', 'asdsa', 'Tidak', 'asdas', 'asdas', '2018-04-29 19:12:57', '2018-04-29 21:15:45'),
(2, '2018-04-30', 'Naonlah', 'Ya', 'dsada', 'sadas', '2018-04-29 19:25:18', '2018-04-29 19:25:18'),
(3, '2018-04-30', 'bagus', 'Ya', 'pisan', 'pinter', '2018-04-29 21:03:20', '2018-04-29 21:03:20'),
(4, '2018-04-30', 'Siswa bermasalah', 'Ya', 'apa aja', 'Tuntas', '2018-04-29 23:14:13', '2018-04-29 23:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `masalah_tindakan`
--

CREATE TABLE `masalah_tindakan` (
  `id` int(11) NOT NULL,
  `identifikasi_id` int(11) NOT NULL,
  `masalahverifikasi_id` int(11) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalah_tindakan`
--

INSERT INTO `masalah_tindakan` (`id`, `identifikasi_id`, `masalahverifikasi_id`, `tindakan`, `hasil`, `created_at`, `updated_at`) VALUES
(19, 8, 0, 'hadeh', 'Ya', '2018-04-29 21:24:36', '2018-04-29 21:40:09'),
(21, 7, 0, 'kabur', 'Tidak', '2018-04-29 21:25:52', '2018-04-29 21:25:52'),
(22, 8, 0, 'maling', 'Ya', '2018-04-29 21:26:03', '2018-04-29 21:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_02_03_024525_create_siswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', '$2y$10$1OJ.l3MlxeQo3ZacqqAUmOdjNKFOhCfAFnEj7h98Piru7kytWe5iC', 'WkfJePSxuTkdQarYookwKovkpEmxN7ygpHV73IMoEK2kmAhyHGu065LxL4PO', '2018-02-20 00:31:44', '2018-04-29 23:14:28'),
(3, 'admin231', 'admin321', '$2y$10$6V/KScAO2BMfuC2uP5fjB.EqtWOtS9f3YJgk6BdmINZ.H2qNi2KTm', '0psdohWu9Cp7AE78Oo7g0nbXQAtAflyCGSsGDth2Fp4QfXXV224aL4YulrzD', '2018-02-20 00:59:09', '2018-02-20 00:59:12'),
(4, 'ganteng', 'ganteng123', '$2y$10$c6RYaSHGM8im8mBSCY70sujIMJkioffacjYj/IiFix2PqAgZHoiDe', NULL, '2018-04-09 21:10:14', '2018-04-09 21:10:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identifikasi`
--
ALTER TABLE `identifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masalahverifikasi`
--
ALTER TABLE `masalahverifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masalah_tindakan`
--
ALTER TABLE `masalah_tindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identifikasi`
--
ALTER TABLE `identifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `masalahverifikasi`
--
ALTER TABLE `masalahverifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `masalah_tindakan`
--
ALTER TABLE `masalah_tindakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
