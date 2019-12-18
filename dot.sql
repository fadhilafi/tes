-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 11:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dot`
--

-- --------------------------------------------------------

--
-- Table structure for table `m1_departemen`
--

CREATE TABLE `m1_departemen` (
  `id` int(11) NOT NULL,
  `kd_departemen` varchar(50) NOT NULL,
  `nama_departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1_departemen`
--

INSERT INTO `m1_departemen` (`id`, `kd_departemen`, `nama_departemen`) VALUES
(1, 'BDPRBM00001', 'HRD dan Kepegawaian'),
(2, 'BDPRBM00002', 'Purchasing'),
(3, 'BDPRBM00003', 'Inventory dan Warehouse'),
(4, 'BDPRBM00004', 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `m1_employe`
--

CREATE TABLE `m1_employe` (
  `id` int(11) NOT NULL,
  `em` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `title` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1_employe`
--

INSERT INTO `m1_employe` (`id`, `em`, `nama`, `salary`, `title`) VALUES
(1, 'SPPRBM0001', 'Pegawai Tetap', 300000, ''),
(2, 'SPPRBM0002', 'Pegawai Training', 280000, ''),
(3, 'SPPRBM0003', 'Pegawai Packing', 250000, ''),
(4, 'SPPRBM0004', 'Pegawai tester', 260000, ''),
(5, 'SPPRBM0005', 'Pilih Pegawai', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `m1_role`
--

CREATE TABLE `m1_role` (
  `id` int(11) NOT NULL,
  `kd_role` varchar(50) NOT NULL,
  `nama_role` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1_role`
--

INSERT INTO `m1_role` (`id`, `kd_role`, `nama_role`, `hak_akses`) VALUES
(1, 'RPRBM00001', 'Admin', 'Admin'),
(2, 'RPRBM00002', 'HRD', 'HRD'),
(3, 'RPRBM00003', 'Kepegawaian', 'Kepegawaian'),
(4, 'RPRBM00004', 'Inventory dan Warehouse', 'Inventory dan Warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `com` varchar(225) NOT NULL,
  `em` varchar(225) NOT NULL,
  `dep` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `com`, `em`, `dep`) VALUES
(1, 'fad', 'fad', 'das', 'adsad'),
(2, 'sdcsz', 'sdsadfsd', 'fddfe', 'ewfrewrwea');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `iduser` int(11) NOT NULL,
  `kd_role` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','gm','kepegawaian','pegawai','absen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`iduser`, `kd_role`, `nama`, `username`, `password`, `level`) VALUES
(1, 'RPRBM00001', 'Admin Bag Kepegawaian', 'dila', '123456', 'kepegawaian'),
(2, 'RPRBM00002', 'Kepala Bagian Purchasing', 'biw', '123456', 'pegawai'),
(3, 'RPRBM00003', 'General Manager', 'gm', '123456', 'gm'),
(4, 'RPRBM00004', 'absen', 'absen', 'absen', 'absen'),
(5, 'RPRBM00005', 'Kepala Bagian Sales', 'alex', 'alex', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` blob,
  `level` enum('admin','user','magang','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'admin', 'admin', 'komaldevadmin@gmail.com', NULL, 'admin'),
(2, 'briannehemia', 'qwerty123', 'briannehemia@gmail.com', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m1_departemen`
--
ALTER TABLE `m1_departemen`
  ADD PRIMARY KEY (`kd_departemen`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `m1_employe`
--
ALTER TABLE `m1_employe`
  ADD PRIMARY KEY (`em`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `m1_role`
--
ALTER TABLE `m1_role`
  ADD PRIMARY KEY (`kd_role`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nama`),
  ADD UNIQUE KEY `com` (`com`),
  ADD UNIQUE KEY `em` (`em`),
  ADD UNIQUE KEY `dep` (`dep`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `kd_role` (`kd_role`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m1_departemen`
--
ALTER TABLE `m1_departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m1_employe`
--
ALTER TABLE `m1_employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m1_role`
--
ALTER TABLE `m1_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
