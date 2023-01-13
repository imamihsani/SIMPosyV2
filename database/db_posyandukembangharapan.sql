-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 07:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `tb_balita`
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

--
-- Dumping data for table `tb_balita`
--

INSERT INTO `tb_balita` (`id_balita`, `nik`, `namabalita`, `anakdari`, `tgllahir`, `foto`, `riwayatpenyakit`, `jeniskelamin`, `bk`, `alamat`, `bpjs`, `tgldftrbalita`) VALUES
(1, '09876', 'Dede', 'Siti Khomsiah', '2023-01-04', 'baby.png', '-', 'laki-laki', 'tidak', 'Temon', 'tidak', '2023-01-04'),
(2, '765', 'Nana', 'Sri Welas', '2023-01-04', 'baby.png', '-', 'perempuan', 'Tidak', 'Sleman', 'tidak', '04-01-2023 14:3'),
(3, '54', 'ruy', 'Azna', '2023-01-04', 'baby.png', '-', 'laki-laki', 'Tidak', 'uy', 'ya', '04-01-2023 15:0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
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

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_ibu`, `nik`, `namaibu`, `nohp`, `tgllahir`, `foto`, `riwayatpenyakit`, `jumlahanakluarkandungan`, `statuskehamilan`, `statuspernikahan`, `alamat`, `pekerjaan`, `bpjs`, `tgldftr`) VALUES
(70, '1234098765', 'Sumarni', '088981234567', '2023-01-01', 'female.png', 'TBC', 1, 'mengandung', 'bersuami', 'Krobokan, Banguntapan', 'Wirausaha', 'ya', '01-01-2023 07:55:45'),
(71, '098711', 'sa', '11', '2022-10-12', 'female2.jpg', 'Tipes', 11, 'mengandung', 'bersuami', 'Afrika', 'Manajer Proyek', 'ya', '04-01-2023 15:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsulibu`
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

--
-- Dumping data for table `tb_konsulibu`
--

INSERT INTO `tb_konsulibu` (`id_ibu`, `namaibu`, `nik`, `keperluan`, `usiakandungan`, `tensidarah`, `beratbadan`, `keluhan`, `saran`, `statuskesehatanibu`, `obatibu`, `tanggalkonsul`) VALUES
(70, 'Sumarni', '1234098765', 'Cek Kandungan', '4', '109', '69', '-', 'Istirahat Cukup', 'Sehat', 'Susu Prenagen', '07-01-2023'),
(71, 'sa', '098711', 'Konsul KB', '-', '101', '55', 'Bercak di pipi', 'Kurangi pil', 'Sehat', '-', '07-01-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id_balita` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
