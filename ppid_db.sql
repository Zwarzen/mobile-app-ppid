-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2022 pada 04.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid_db`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_18_110102_create_products_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` int(11) NOT NULL,
  `subjek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_info_diminta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_penggunaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_memperoleh_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_mendapat_salinan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_skpd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama`, `no_identitas`, `subjek`, `organisasi`, `alamat`, `kontak`, `detail_info_diminta`, `tujuan_penggunaan`, `cara_memperoleh_info`, `cara_mendapat_salinan`, `tujuan_skpd`, `date`, `image`, `created_at`, `updated_at`) VALUES
(13, 'User A', 7166, 'Subjek', 'Ormas', 'Jl. A no.20', 'test1@email.com', 'Rinci', 'Tujuan', 'Mendapat Salinan Informasi(Hard Copy/Soft Copy)', 'Pos', 'KOMINFO', '2022-07-21', '20220721031749.png', '2022-07-20 20:17:49', '2022-07-20 20:17:49'),
(14, 'User B', 9887, 'Penting', 'Ormas', 'Jl. B no.3', 'test2@email.com', 'Rinci', 'Digunakan', 'Melihat/Membaca/Mendengar/Mencatat', 'Pos', 'KOMINFO', '2022-07-21', '20220721034846.png', '2022-07-20 20:48:46', '2022-07-20 20:48:46'),
(15, 'User C', 1995, 'Subjek', 'Organisasi C', 'Jl. C no.12', '0823', 'Detail', 'digunakan', 'Melihat/Membaca/Mendengar/Mencatat', 'Kurir', 'PPID', '2022-07-21', '20220721035900.png', '2022-07-20 20:59:00', '2022-07-20 20:59:00'),
(16, 'User D', 1778, 'Subjek', 'PT. D', 'Jl. D no.11', 'test5@email.com', 'Rinci', 'Digunakan', 'Melihat/Membaca/Mendengar/Mencatat', 'Faximili', 'KOMINFO', '2022-07-27', '20220727020356.png', '2022-07-26 19:03:56', '2022-07-26 19:03:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
