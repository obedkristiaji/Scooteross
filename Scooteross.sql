-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 03:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scooteross`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idKec` int(11) NOT NULL,
  `namaKec` varchar(50) NOT NULL,
  `idKel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idKec`, `namaKec`, `idKel`) VALUES
(1, 'Bojongloa Kaler', 1),
(2, 'Sukajadi', 2),
(3, 'Bojongloa Kidul', 3),
(4, 'Sumur', 4),
(5, 'Bandung Wetan', 5),
(6, 'Regol', 6),
(7, 'Astana Anyar', 7);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `idKel` int(11) NOT NULL,
  `namaKel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`idKel`, `namaKel`) VALUES
(1, 'Kopo'),
(2, 'Sukagalih'),
(3, 'Mekarwangi'),
(4, 'Babakan Ciamis'),
(5, 'Cihapit'),
(6, 'Cigereleng'),
(7, 'Karanganyar');

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `noUnik` int(11) NOT NULL,
  `noTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`noUnik`, `noTransaksi`) VALUES
(1, 1),
(2, 2),
(3, 3),
(3, 4),
(3, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mengakses`
--

CREATE TABLE `mengakses` (
  `noKTP` varchar(16) NOT NULL,
  `noUnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengakses`
--

INSERT INTO `mengakses` (`noKTP`, `noUnik`) VALUES
('3509749254000000', 1),
('3309074509000010', 2),
('3309074509000010', 3),
('3509749254000000', 3),
('3509749254000000', 3),
('3309074509000010', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `KTP` varchar(16) NOT NULL,
  `NamaPengguna` varchar(150) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `IdRole` int(11) NOT NULL,
  `idKel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`KTP`, `NamaPengguna`, `Alamat`, `email`, `password`, `IdRole`, `idKel`) VALUES
('3309074509000010', 'Kimberly Natalia', 'Jalan Astana Anyar no 12 Bandung', 'Kimberly@gmail.com', 'user2', 3, 7),
('3457892345800030', 'Antony Budiman', 'Jalan Sukajadi no 112 Bandung', 'antony97@gmail.com', 'user3', 2, 2),
('3509749254000000', 'Vivian Cecilia', 'Jalan Kembar no 9 Bandung', 'VivianCel@gmail.com', 'user1', 3, 6),
('3982178934523000', 'Denny Setiadi', 'Jalan Kopo no 98 Bandung', 'denny@gmail.com', 'user4', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `NoKTP` varchar(16) NOT NULL,
  `NamaPenyewa` varchar(150) NOT NULL,
  `AlamatPenyewa` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idKel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`NoKTP`, `NamaPenyewa`, `AlamatPenyewa`, `email`, `idKel`) VALUES
('3542349800002320', 'Britney', 'Jalan Anggrek no 7 Bandung', 'Britney@gmail.com', 5),
('3579762987600020', 'Rani', 'Jalan Mekar Laksana no 11 Bandung', 'Rani@gmail.com', 3),
('3928982789862000', 'Keane', 'Jalan Merdeka no 5 Bandung', 'Keane@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `namaRole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `namaRole`) VALUES
(1, 'Admin'),
(2, 'Pimpinan'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `scooter`
--

CREATE TABLE `scooter` (
  `NoUnik` int(11) NOT NULL,
  `Warna` varchar(50) NOT NULL,
  `Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scooter`
--

INSERT INTO `scooter` (`NoUnik`, `Warna`, `Tarif`) VALUES
(1, 'Hijau', 20000),
(2, 'Biru', 20000),
(3, 'Kuning', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksipengembalian`
--

CREATE TABLE `transaksipengembalian` (
  `noTransaksi` int(11) NOT NULL,
  `waktu_pengembalian` datetime DEFAULT NULL,
  `noKTP` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksipengembalian`
--

INSERT INTO `transaksipengembalian` (`noTransaksi`, `waktu_pengembalian`, `noKTP`) VALUES
(1, '2020-03-15 12:00:00', '3579762987600020'),
(2, '2020-03-17 15:00:00', '3928982789862000'),
(3, '2020-03-17 17:00:00', '3542349800002320'),
(4, '2020-03-19 19:00:00', '3579762987600020'),
(5, '2020-03-20 13:00:00', '3928982789862000'),
(6, '2020-03-22 12:00:00', '3928982789862000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksipenyewaan`
--

CREATE TABLE `transaksipenyewaan` (
  `noTransaksi` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `noKTP` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksipenyewaan`
--

INSERT INTO `transaksipenyewaan` (`noTransaksi`, `waktu_mulai`, `noKTP`) VALUES
(1, '2020-03-15 10:00:00', '3579762987600020'),
(2, '2020-03-17 14:00:00', '3928982789862000'),
(3, '2020-03-17 15:00:00', '3542349800002320'),
(4, '2020-03-19 17:00:00', '3579762987600020'),
(5, '2020-03-20 12:00:00', '3928982789862000'),
(6, '2020-03-22 11:00:00', '3928982789862000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idKec`),
  ADD KEY `fk_kel-kec` (`idKel`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`idKel`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD KEY `fk_scooter-milik` (`noUnik`),
  ADD KEY `fk_balik-milik` (`noTransaksi`);

--
-- Indexes for table `mengakses`
--
ALTER TABLE `mengakses`
  ADD KEY `fk_ktp-akses` (`noKTP`),
  ADD KEY `fk_scooter-akses` (`noUnik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`KTP`),
  ADD KEY `fk_kel-peng` (`idKel`),
  ADD KEY `fk_role` (`IdRole`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`NoKTP`),
  ADD KEY `fk_kel-peny` (`idKel`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `scooter`
--
ALTER TABLE `scooter`
  ADD PRIMARY KEY (`NoUnik`);

--
-- Indexes for table `transaksipengembalian`
--
ALTER TABLE `transaksipengembalian`
  ADD KEY `fk_ktp-balik` (`noKTP`),
  ADD KEY `fk_sewa-balik` (`noTransaksi`);

--
-- Indexes for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  ADD PRIMARY KEY (`noTransaksi`),
  ADD KEY `fk_ktp-sewa` (`noKTP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scooter`
--
ALTER TABLE `scooter`
  MODIFY `NoUnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `fk_kel-kec` FOREIGN KEY (`idKel`) REFERENCES `kelurahan` (`idKel`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `fk_balik-milik` FOREIGN KEY (`noTransaksi`) REFERENCES `transaksipenyewaan` (`noTransaksi`),
  ADD CONSTRAINT `fk_scooter-milik` FOREIGN KEY (`noUnik`) REFERENCES `scooter` (`NoUnik`);

--
-- Constraints for table `mengakses`
--
ALTER TABLE `mengakses`
  ADD CONSTRAINT `fk_ktp-akses` FOREIGN KEY (`noKTP`) REFERENCES `pengguna` (`KTP`),
  ADD CONSTRAINT `fk_scooter-akses` FOREIGN KEY (`noUnik`) REFERENCES `scooter` (`NoUnik`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `fk_kel-peng` FOREIGN KEY (`idKel`) REFERENCES `kelurahan` (`idKel`),
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`IdRole`) REFERENCES `role` (`idRole`);

--
-- Constraints for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD CONSTRAINT `fk_kel-peny` FOREIGN KEY (`idKel`) REFERENCES `kelurahan` (`idKel`);

--
-- Constraints for table `transaksipengembalian`
--
ALTER TABLE `transaksipengembalian`
  ADD CONSTRAINT `fk_ktp-balik` FOREIGN KEY (`noKTP`) REFERENCES `penyewa` (`NoKTP`),
  ADD CONSTRAINT `fk_sewa-balik` FOREIGN KEY (`noTransaksi`) REFERENCES `transaksipenyewaan` (`noTransaksi`);

--
-- Constraints for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  ADD CONSTRAINT `fk_ktp-sewa` FOREIGN KEY (`noKTP`) REFERENCES `penyewa` (`NoKTP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
