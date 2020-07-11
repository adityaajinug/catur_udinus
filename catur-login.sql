-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2020 pada 12.27
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catur-login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `hari`, `tanggal`, `waktu`) VALUES
(5, 'Sabtu', '2020-08-08', '10:00:00'),
(6, 'Minggu', '2020-07-30', '08:45:00'),
(8, 'Minggu', '2020-07-12', '09:00:00'),
(9, 'Minggu', '2020-07-19', '09:00:00'),
(10, 'Sabtu', '2020-07-25', '08:00:00'),
(11, 'Minggu', '2020-07-26', '09:00:00'),
(12, 'Sabtu', '2020-07-26', '08:00:00'),
(13, 'Sabtu', '2020-08-01', '08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `fakultas` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `fakultas`, `prodi`, `email`, `bidang`, `password`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(15, 'A22.2019.02756', 'Aditya Ajie', 'Ilmu Komputer', 'Diploma III Teknik Informatika', 'udinuscatur@gmail.com', 'Publikasi Dokumentasi', '$2y$10$fUY3dgwasfpkqbmUZ6CGq.eBxxoRJ3WwEzbmI8xouU.K2dt/tdPvm', 1, 1, 1594291386, 'A22_2019_02756.jpg'),
(18, 'A11.2019.02788', 'Andre', 'Ilmu Komputer', 'Teknik Informatika', 'adg@gmail.com', 'Sekretaris', '$2y$10$Jm.XL.9GM/2A6sIVME.KUevfAT47Q8jbblta.IjhMI7Ok5dUKFs2K', 2, 1, 1594341960, 'default.jpg'),
(19, 'A12.2019.02756', 'Aditya Herlambang', 'Ilmu Komputer', 'Sistem Informasi', 'adit@gmail.com', 'Sekretaris', '$2y$10$t2sW76fNCh82zsK1UCAHf.Tv9caEkTf9PeS3QI.1tagiUPb1zp4Ou', 2, 1, 1594341994, 'default.jpg'),
(22, 'A13.2019.02788', 'Aji', 'Ilmu Komputer', 'Ilmu Komunikasi', 'adityaajinug@gmail.com', 'Perkap dan Perwasitan', '$2y$10$yyzwW0DqPzb3ZPN88pQrfu1E1rs4SuCOFN34eNmf3/.4I9sRziQvi', 2, 1, 1594389012, 'Logo_udinus1.jpg'),
(23, 'A15.2019.02793', 'Aditya Nugroho', 'Ilmu Komputer', 'Sistem Informasi', 'adityaajinug31@gmail.com', 'Sekretaris', '$2y$10$aFP3b8Uz3WnKoHQHr9XHneatDWuf7na.hEmFpuMjWf1aBhBgH4i8C', 2, 1, 1594393677, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 2, 2),
(6, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profile Saya', 'user', 'fas fa-fw fa-user', 1),
(5, 2, 'Edit Profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(6, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(7, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Data Anggota', 'admin/data_anggota', 'fas fa-fw fa-users', 1),
(11, 3, 'Tampil Menu & Submenu', 'menu/tampil', 'fas fa-fw fa-folder-plus', 1),
(13, 2, 'Ganti Password', 'user/ganti_password', 'fas fa-fw fa-key', 1),
(14, 2, 'Jadwal Latihan', 'user/jadwal', 'fas fa-fw fa-calendar-alt', 1),
(15, 1, 'Kelola Jadwal Latihan', 'admin/jadwal', 'fas fa-fw fa-calendar-plus', 1),
(20, 16, 'Data Anggota', 'catur/data', 'fas fa-fw fa-users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 NOT NULL,
  `token` varchar(128) CHARACTER SET utf8 NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
