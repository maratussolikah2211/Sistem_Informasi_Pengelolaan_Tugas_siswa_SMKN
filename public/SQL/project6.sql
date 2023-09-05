-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2023 pada 06.08
-- Versi server: 8.0.30
-- Versi PHP: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` char(36) NOT NULL,
  `id_guru` char(36) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `id_guru`, `nama_kelas`, `jurusan`, `created_at`, `updated_at`) VALUES
('7d4925df-2723-11ee-88c4-54e1ad1ad466', '99b16fd3-bca9-4d11-94a6-cb7d65c0e544', '10 B 2', 'ATP', '2023-07-20 17:33:07', '2023-07-20 12:09:34'),
('99b184ef-a3cd-44dd-ad44-c35605b983a0', '99b16fd3-bca9-4d11-94a6-cb7d65c0e544', 'Kelas 2 B', 'AKL', '2023-07-20 11:19:45', '2023-07-20 11:19:45'),
('99b53038-6922-44ae-8f7b-815e9d872d0a', '99b16fd3-bca9-4d11-94a6-cb7d65c0e544', 'coba', 'AKL', '2023-07-22 07:06:11', '2023-07-22 07:06:11'),
('99b53158-3f62-46c5-8b69-787f9af582c4', '99b16fd3-bca9-4d11-94a6-cb7d65c0e544', 'cobaa', 'AKL', '2023-07-22 07:09:19', '2023-07-22 07:09:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` char(36) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `id_guru` char(36) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `nama_materi`, `id_guru`, `created_at`, `updated_at`) VALUES
('99b1f739-27d1-4e28-b0a6-67e60f01a61b', 'contoh', '99b16fd3-bca9-4d11-94a6-cb7d65c0e544', '2023-07-20 16:39:19', '2023-07-20 16:39:19'),
('99b66d9f-28c1-4870-a13e-b4a3d435a71b', 'Keselamatan Praktek Kerja', '99b16fd3-bca9-4d11-94a6-cb7d65c0e544', '2023-07-22 21:53:42', '2023-07-22 21:53:42'),
('99b66dad-19bf-4a3f-ab56-236fc003c0a6', 'Praktek Kerja', '99b26f91-16a1-46c9-9110-47445463fe8a', '2023-07-22 21:53:51', '2023-07-22 21:53:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_siswa` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_tugas` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jawaban` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `benar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `salah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_kelas` char(36) NOT NULL,
  `nis` bigint NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `name`, `id_kelas`, `nis`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('99b1ee2f-eb80-469a-b540-efb3a5464fab', 'siswa1', '7d4925df-2723-11ee-88c4-54e1ad1ad466', 25135163, 'siswa1@gmail.com', '12345', NULL, '2023-07-20 16:14:03', '2023-07-20 16:14:03'),
('99b2575e-3e11-4878-88c5-594a2f7776ea', 'Malik', '7d4925df-2723-11ee-88c4-54e1ad1ad466', 123456, 'siswa2@gmail.com', '$2y$10$mTf55YwQ/pvnkJGH14cbsOQOVzgQrZNApeDb0JppV/Mg8Hj1F/OTm', NULL, '2023-07-20 21:08:10', '2023-07-20 21:08:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_materi` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_tugas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `id_materi`, `nama_tugas`, `dokumen`, `created_at`, `updated_at`) VALUES
('99b670b4-5bfe-436f-9e51-4e1ac15624c0', '99b66d9f-28c1-4870-a13e-b4a3d435a71b', 'Tugas Praktek 2', 'dokumen/dokumen_64bcb45b9a7d8.pdf', '2023-07-22 22:02:19', '2023-07-22 22:17:33'),
('99b67155-9a25-4dda-b53e-81c0ddd0fc36', '99b66dad-19bf-4a3f-ab56-236fc003c0a6', 'Tugas Praktek 1', 'dokumen/dokumen_64bcb4c54addc.pdf', '2023-07-22 22:04:05', '2023-07-22 22:04:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` bigint NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nip`, `email`, `alamat`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('99b15228-f41e-498c-b116-f40f94bc95c3', 'admin', 'Admin', 1234567890, 'contoh1@gmail.com', 'Jl. Makmur', '$2y$10$Of8/K523cHOb3gCFfjzoj.K0paY49wElHaHNqacJmpwQA5BzyyvJO', NULL, '2023-07-20 08:57:46', '2023-07-21 05:16:06'),
('99b16fd3-bca9-4d11-94a6-cb7d65c0e544', 'guru', 'Maratus', 1234567890, 'contoh2@gmail.com', 'Jl. Kuli', '$2y$10$115u5PFaxlxKaW2v7JMBU.XPOdH4LG3eKxvkrAvBZeW1WQPjAREvy', NULL, '2023-07-20 10:20:44', '2023-07-21 05:16:15'),
('99b1e35a-5904-44b9-b6db-43f86912947d', 'admin', 'Admin2', 12345678, 'contoh3@gmail.com', 'contoh', '$2y$10$FowVuSt0LSJKsljRPCoG4ueLv7s5GRP15/UrMx/8vOcEY0TBgPUfm', NULL, '2023-07-20 15:43:46', '2023-07-20 22:21:17'),
('99b26f91-16a1-46c9-9110-47445463fe8a', 'guru', 'Mar', 1234567890, 'contoh4@gmail.com', 'Jl. Jalan', '$2y$10$ZmcN4yOeTQHTRsMAnIjaD.QnPSrB2NcpudR99E.6Dew6Y9AR6BFS.', NULL, '2023-07-20 22:15:50', '2023-07-20 22:15:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
