-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2019 at 06:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbantrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(2) NOT NULL,
  `room_reservasi` varchar(20) NOT NULL,
  `nama_reservasi` varchar(100) NOT NULL,
  `nomor_reservasi` varchar(15) NOT NULL,
  `jml_org_reservasi` varchar(2) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `mulai_reservasi` time NOT NULL,
  `selesai_reservasi` time NOT NULL,
  `desc_reservasi` varchar(100) NOT NULL,
  `status_reservasi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_reservasi`, `room_reservasi`, `nama_reservasi`, `nomor_reservasi`, `jml_org_reservasi`, `tgl_reservasi`, `mulai_reservasi`, `selesai_reservasi`, `desc_reservasi`, `status_reservasi`) VALUES
(17, 'jakarta', 'Bahyu Sanciko', '6289682261128', '20', '2019-01-09', '09:57:00', '12:00:00', 'Internal', '2'),
(18, 'bandung', 'Bahyu Sanciko', '6289682261128', '10', '2019-01-09', '10:05:00', '11:05:00', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kd_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL DEFAULT '0',
  `username_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(200) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `level_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kd_user`, `nama_user`, `username_user`, `password_user`, `email_user`, `level_user`) VALUES
(11, 'Bahyu Sanciko', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'cbahyu@gmail.com', 'Manager'),
(12, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
