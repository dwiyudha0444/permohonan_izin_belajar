-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2025 at 03:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_bekerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jejang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lulus_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tugas_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_opd` bigint UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `email_verified_at`, `password`, `nip`, `tgl_lahir`, `jenis_kelamin`, `pangkat`, `tmt`, `jabatan`, `lokasi_bekerja`, `jejang_pendidikan`, `lulus_pendidikan`, `tugas_pekerjaan`, `peguruan_tinggi`, `jurusan`, `alamat`, `id_opd`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yumee', 'test@gmail.com', NULL, '$2y$10$gG44ho.f./idWrwQTAdzhuyNUwmAHKv81NUt1Wu1F3.iKZWN.hVxe', '123', '2025-01-31', 'Laki-laki', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'Universitas Muria Kudus', 'Sisitem Informasi', 'Gondosari Gebog Kudus', 16, NULL, '2024-11-13 20:43:14', '2025-01-15 20:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` bigint UNSIGNED NOT NULL,
  `id_users` bigint UNSIGNED DEFAULT NULL,
  `peguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_ajuan` date DEFAULT NULL,
  `ijazah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transkip_nilai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penilaian_prestasi_kerja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_persetujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_balasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `id_users`, `peguruan_tinggi`, `jurusan`, `alamat`, `tgl_ajuan`, `ijazah`, `transkip_nilai`, `penilaian_prestasi_kerja`, `jadwal_pendidikan`, `status`, `keterangan`, `surat_persetujuan`, `surat_balasan`, `created_at`, `updated_at`) VALUES
(11, 3, 'Universitas Muria Kudus', 'Sisitem Informasi', 'Gondosari', '2025-02-20', 'ijazah_1736996240.png', 'transkip_nilai_1736996240.png', 'penilaian_prestasi_kerja_1736996240.png', 'jadwal_1736996240.png', 'terverifikasi', 's', NULL, 'surat_balasan_1736996613.png', '2025-01-15 19:52:00', '2025-01-15 20:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(29, '2019_08_19_000000_create_failed_jobs_table', 1),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(31, '2024_11_04_031530_create_admin', 1),
(32, '2024_11_06_061548_create_berkas', 1),
(33, '2024_11_11_032139_create_monitoring', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` bigint UNSIGNED NOT NULL,
  `id_users` bigint UNSIGNED DEFAULT NULL,
  `transkip_nilai_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transkip_nilai_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transkip_nilai_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transkip_nilai_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `id_users`, `transkip_nilai_1`, `transkip_nilai_2`, `transkip_nilai_3`, `transkip_nilai_4`, `ptn`, `created_at`, `updated_at`) VALUES
(1, 1, 'transkip_nilai_1_1731466787.jpg', 'transkip_nilai_2_1731466787.jpg', 'transkip_nilai_3_1731466787.jpg', 'transkip_nilai_4_1731466787.jpg', 'Universitas Muria Kudus', '2024-11-12 19:59:47', NULL),
(2, 1, 'transkip_nilai_1_1731939455.jpg', 'transkip_nilai_2_1731939455.jpg', 'transkip_nilai_3_1731939455.jpg', 'transkip_nilai_4_1731939455.jpg', 'Universitas Muria Kudus', '2024-11-18 13:17:35', NULL),
(3, 3, 'transkip_nilai_1_1732937650.png', '', '', '', 'UNS', '2024-11-29 20:34:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbopd`
--

CREATE TABLE `tbopd` (
  `id` bigint UNSIGNED NOT NULL,
  `opd` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbopd`
--

INSERT INTO `tbopd` (`id`, `opd`, `created_at`, `updated_at`) VALUES
(1, 'BAPPEDA', NULL, NULL),
(2, 'BKPSDM', NULL, NULL),
(3, 'BPPKAD', NULL, NULL),
(4, 'BPBD', NULL, NULL),
(5, 'BPS', NULL, NULL),
(6, 'BPN', NULL, NULL),
(7, 'RSUD dr. Loekmono Hadi', NULL, NULL),
(8, 'Kantor Kesbangpol', NULL, NULL),
(9, 'Satuan Polisi Pamong Praja', NULL, NULL),
(10, 'Inspektorat', NULL, NULL),
(11, 'Dinas Pendidikan, Kepemudaan, dan Olahraga', NULL, NULL),
(12, 'Dinas Kebudayaan dan Pariwisata', NULL, NULL),
(13, 'Dinas Kesehatan', NULL, NULL),
(14, 'Dinas SP3AP2KB', NULL, NULL),
(15, 'Dinas Pemberdayaan Masyarakat dan Desa', NULL, NULL),
(16, 'Dinas Kependudukan dan Pencatatan Sipil', NULL, NULL),
(17, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu P', NULL, NULL),
(18, 'Dinas Tenaga Kerja, Perindustrian, Koperasi dan UK', NULL, NULL),
(19, 'Dinas Perdagangan', NULL, NULL),
(20, 'Dinas Komunikasi dan Informatika', NULL, NULL),
(21, 'Dinas Perhubungan', NULL, NULL),
(22, 'Dinas Pekerjaan Umum dan Penataan Ruang', NULL, NULL),
(23, 'Dinas Perumahan, Kawasan Permukiman dan Lingkungan', NULL, NULL),
(24, 'Dinas Pertanian dan Pangan', NULL, NULL),
(25, 'Dinas Kearsipan dan Perpustakaan', NULL, NULL),
(26, 'Bagian Umum Setda', NULL, NULL),
(27, 'Bagian Tata Pemerintahan Setda', NULL, NULL),
(28, 'Bagian Hukum Setda', NULL, NULL),
(29, 'Bagian Perekonomian Setda', NULL, NULL),
(30, 'Bagian Pengendalian Pembangunan Setda', NULL, NULL),
(31, 'Bagian Kesejahteraan Masyarakat Setda', NULL, NULL),
(32, 'Bagian Organisasi Setda', NULL, NULL),
(33, 'Bagian Perlengkapan dan Keuangan Setda', NULL, NULL),
(34, 'Staf Ahli Bidang Pemerintahan, Hukum, dan Politik', NULL, NULL),
(35, 'Staf Ahli Bidang Ekonomi, Pembangunan, dan Kemasya', NULL, NULL),
(36, 'Staf Ahli Bidang Keuangan dan SDM', NULL, NULL),
(37, 'Kecamatan Kota Kudus', NULL, NULL),
(38, 'Kecamatan Jati', NULL, NULL),
(39, 'Kecamatan Undaan', NULL, NULL),
(40, 'Kecamatan Bae', NULL, NULL),
(41, 'Kecamatan Dawe', NULL, NULL),
(42, 'Kecamatan Gebog', NULL, NULL),
(43, 'Kecamatan Kaliwungu', NULL, NULL),
(44, 'Kecamatan Jekulo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_bekerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jejang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lulus_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tugas_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_opd` bigint UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nip`, `tgl_lahir`, `jenis_kelamin`, `pangkat`, `tmt`, `jabatan`, `lokasi_bekerja`, `jejang_pendidikan`, `lulus_pendidikan`, `tugas_pekerjaan`, `peguruan_tinggi`, `jurusan`, `alamat`, `id_opd`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ina', '2020@example.com', NULL, '$2y$10$6zJZgNarj/.shYPXtEUQPu1f/tLuX7EoS1KSaEPDgG7aUHTUS4VT6', '12344', '2024-11-13', '', 'dw', 'd', 'd', 'd', 'd', 'dsd', 'd', NULL, NULL, NULL, NULL, NULL, '2024-11-18 21:04:30', '2024-11-18 21:50:31'),
(3, 'ina', '20202@gmail.com', NULL, '$2y$10$/x0rh/HQZpoEDrul2DNGK.gxo75npi1K4Koz3BciSuViY2KY5FwNa', '1234', '2024-11-21', 'Perempuan', 'AA', 'aa', 'aa', 'Kudu', 'S1', 'S1', 'p', 'Universitas Muria Kudus', 'Sisitem Informasi', 'Gondosari', 17, NULL, '2024-11-19 22:05:47', '2025-01-15 20:12:15'),
(4, 'ina', '202222202@gmail.com', NULL, '$2y$10$mBlAQZgXeTYrnJp3OaVj.eFy9o3owpwe4YfP0TiK51nd5yenDt.BG', '12345', '2024-11-11', '', 'dw', 'd', 'aa', 'd', 'd', 'dsd', 'd', 'UNS', 'SI', 'KUDUS', 18, NULL, '2024-11-19 22:27:40', '2024-11-20 00:16:02'),
(5, 'aku', 'pemilik@example.com', NULL, '$2y$10$r4W7dVIdBeuQH87QoCLfBuoagVJP.ilTPeeOcWswmYXOQZaKBwol6', '878787878', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-29 20:44:15', '2024-11-29 20:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`),
  ADD UNIQUE KEY `admin_nip_unique` (`nip`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

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
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbopd`
--
ALTER TABLE `tbopd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nip_unique` (`nip`),
  ADD KEY `id_opd` (`id_opd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbopd`
--
ALTER TABLE `tbopd`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_opd`) REFERENCES `tbopd` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD CONSTRAINT `monitoring_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_opd`) REFERENCES `tbopd` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
