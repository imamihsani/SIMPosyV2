-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2023 pada 13.32
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
-- Database: `db_posyandukembangharapan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_balita`
--

CREATE TABLE `tb_balita` (
  `id_balita` int(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `namabalita` varchar(200) NOT NULL,
  `anakdari` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `riwayatpenyakit` varchar(100) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `bk` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bpjs` text NOT NULL,
  `tgldftrbalita` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` int(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `riwayatpenyakit` varchar(50) NOT NULL,
  `jumlahanakluarkandungan` int(2) NOT NULL,
  `statuskehamilan` text NOT NULL,
  `statuspernikahan` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `bpjs` text NOT NULL,
  `tgldftr` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsulbalita`
--

CREATE TABLE `tb_konsulbalita` (
  `id_balita` varchar(255) NOT NULL,
  `namabalita` varchar(200) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `anakdari` varchar(100) NOT NULL,
  `usiamingguke` varchar(100) NOT NULL,
  `beratbadan` varchar(100) NOT NULL,
  `panjangbadan` varchar(200) NOT NULL,
  `lingkarkepala` varchar(200) NOT NULL,
  `lingkarlengan` varchar(200) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `statuskesehatanbalita` varchar(200) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `vitamin_obat` varchar(255) NOT NULL,
  `tanggalkonsul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsulibu`
--

CREATE TABLE `tb_konsulibu` (
  `id_ibu` int(20) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `usiakandungan` varchar(20) NOT NULL,
  `tensidarah` varchar(255) DEFAULT NULL,
  `beratbadan` varchar(100) DEFAULT NULL,
  `keluhan` varchar(500) DEFAULT NULL,
  `saran` varchar(300) DEFAULT NULL,
  `statuskesehatanibu` varchar(50) DEFAULT NULL,
  `obatibu` varchar(255) DEFAULT NULL,
  `tanggalkonsul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(30) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indeks untuk tabel `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id_balita` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
