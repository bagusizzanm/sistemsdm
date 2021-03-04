-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 02:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemsdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `idbank` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL,
  `norek` varchar(50) NOT NULL,
  `nama_rek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `id_pribadi` int(11) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `pend_terakhir` varchar(10) NOT NULL,
  `stts_kawin` varchar(50) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `no_npwp` int(50) NOT NULL,
  `email_tass` varchar(256) NOT NULL,
  `email_telu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_kel` int(11) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `tampat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `dokumen_kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kepegawaian`
--

CREATE TABLE `kepegawaian` (
  `id_kep` int(11) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `tanggal_rekrut` varchar(20) NOT NULL,
  `durasi_kerja` varchar(10) NOT NULL,
  `jab_fungsi` varchar(25) NOT NULL,
  `jab_struktur` varchar(25) NOT NULL,
  `lokasi_kerja` varchar(25) NOT NULL,
  `bpjs_kes` varchar(50) NOT NULL,
  `bpjs_ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pend` int(11) NOT NULL,
  `nama_institusi` varchar(50) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tgl_lulus` varchar(20) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `dokumen_ijazah` varchar(100) NOT NULL,
  `dokumen_nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`idbank`);

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id_pribadi`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  ADD PRIMARY KEY (`id_kep`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `idbank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id_pribadi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_kel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  MODIFY `id_kep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
