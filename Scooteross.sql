-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 04:44 PM
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
-- Table structure for table `datapengguna`
--

CREATE TABLE `datapengguna`(
  `id` int(11) NOT NULL,
  `NamaPengguna` varchar(150) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `KTP` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idKel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Dumping data for table `datapengguna`
--

INSERT INTO `datapengguna` (`id`, `NamaPengguna`, `Alamat`, `Role`, `KTP`, `email`, `idKel`) VALUES
(1, 'Vivian Cecilia', 'Jalan Kembar no 9 Bandung', 'Operator', '3509749254000000', 'VivianCel@gmail.com', '6'),
(2, 'Kimberly Natalia', 'Jalan Astana Anyar no 12 Bandung', 'Operator', '3309074509000010', 'Kimberly@gmail.com', '7'),
(3, 'Antony Budiman', 'Jalan Sukajadi no 112 Bandung', 'Pimpinan Taman', '3457892345800030', 'antony97@gmail.com', '2'),
(4, 'Denny Setiadi', 'Jalan Kopo no 98 Bandung', 'Admin', '3982178934523000', 'denny@gmail.com', '1');

--
-- Table structure for table `datascooter`
--

CREATE TABLE `datascooter` (
  `NoUnik` int(11) NOT NULL,
  `Warna` varchar(50) NOT NULL,
  `Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datascooter`
--

INSERT INTO `datascooter` (`NoUnik`, `Warna`, `Tarif`) VALUES
(1, 'Hijau', 20000),
(2, 'Biru', 20000),
(3, 'Kuning', 20000);

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
(1, 'Bojongloa Kaler',1),
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
-- Table structure for table `mengedit`
--

CREATE TABLE `mengedit` (
  `noKTP` varchar(16) NOT NULL, -- no KTP pengguna yang memiliki role admin
  `noUnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengedit`
--

INSERT INTO `mengedit` (`noKTP`, `noUnik`) VALUES
('3982178934523000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menyewakan`
--

CREATE TABLE `menyewakan` (
  `noKTP` varchar(16) NOT NULL, -- no KTP pengguna yang memiliki role petugas / operator
  `noUnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menyewakan`
--

INSERT INTO `menyewakan` (`noKTP`, `noUnik`) VALUES
('3509749254000000', 1),
('3309074509000010', 2),
('3309074509000010', 3),
('3509749254000000', 3),
('3509749254000000', 3),
('3309074509000010', 2);

-- --------------------------------------------------------

--
-- Table structure for table `datapenyewa`
--

CREATE TABLE `datapenyewa` (
  `NoKTP` varchar(16) NOT NULL,
  `NamaPenyewa` varchar(50) NOT NULL,
  `AlamatPenyewa` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idKel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapenyewa`
--

INSERT INTO `datapenyewa` (`NoKTP`, `NamaPenyewa`, `AlamatPenyewa`, `email`, `idKel`) VALUES
('3542349800002320', 'Britney', 'Jalan Anggrek no 7 Bandung', 'Britney@gmail.com', 5),
('3579762987600020', 'Rani', 'Jalan Mekar Laksana no 11 Bandung', 'Rani@gmail.com', 3),
('3928982789862000', 'Keane', 'Jalan Merdeka no 5 Bandung', 'Keane@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaksipengembalian`
--

CREATE TABLE `transaksipengembalian` (
  `noTransaksi` int(11) NOT NULL,
  `waktu_pengembalian` datetime NOT NULL,
  `noKTP` varchar(16) NOT NULL -- no KTP penyewa
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
  `noKTP` varchar(16) NOT NULL -- no KTP penyewa
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
-- Indexes for table `datapengguna`
--
ALTER TABLE `datapengguna`
  ADD PRIMARY KEY (`KTP`),
  ADD KEY `fk_kelPengguna` (`idKel`);

--
-- Indexes for table `datascooter`
--
ALTER TABLE `datascooter`
  ADD PRIMARY KEY (`NoUnik`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idKec`),
  ADD KEY `fk_kelKec` (`idKel`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`idKel`),

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD KEY `fk_scooter` (`noUnik`),
  ADD KEY `fk_kembali` (`noTransaksi`);

--
-- Indexes for table `mengedit`
--
ALTER TABLE `mengedit`
  ADD KEY `fk_KTPadminPengguna` (`noKTP`),
  ADD KEY `fk_scooterEdit` (`noUnik`);

--
-- Indexes for table `menyewakan`
--
ALTER TABLE `menyewakan`
  ADD KEY `fk_KTPpetugaspengguna` (`noKTP`),
  ADD KEY `fk_scooterSewa` (`noUnik`);

--
-- Indexes for table `datapenyewa`
--
ALTER TABLE `datapenyewa`
  ADD PRIMARY KEY (`NoKTP`),
  ADD KEY `fk_kelPenyewa` (`idKel`);

--
-- Indexes for table `transaksipengembalian`
--
ALTER TABLE `transaksipengembalian`
  ADD PRIMARY KEY (`noTransaksi`),
  ADD KEY `fk_KTPbalik` (`noKTP`);

--
-- Indexes for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  ADD PRIMARY KEY (`noTransaksi`),
  ADD KEY `fk_KTPsewa` (`noKTP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datascooter`
--
ALTER TABLE `datascooter`
  MODIFY `NoUnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapengguna`
--
ALTER TABLE `datapengguna`
  ADD CONSTRAINT `fk_kelPengguna` FOREIGN KEY (`idKel`) REFERENCES `kelurahan` (`idKel`);

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `fk_kec` FOREIGN KEY (`idKel`) REFERENCES `kelurahan` (`idKel`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `fk_kembali` FOREIGN KEY (`noTransaksi`) REFERENCES `transaksipengembalian` (`noTransaksi`),
  ADD CONSTRAINT `fk_scooter` FOREIGN KEY (`noUnik`) REFERENCES `datascooter` (`NoUnik`),
  ADD CONSTRAINT `fk_sewa` FOREIGN KEY (`noTransaksi`) REFERENCES `transaksipenyewaan` (`noTransaksi`);

--
-- Constraints for table `mengedit`
--
ALTER TABLE `mengedit` -- untuk pengguna yang memiliki role admin
  ADD CONSTRAINT `fk_KTPadminPengguna` FOREIGN KEY (`noKTP`) REFERENCES `datapengguna` (`noKTP`),
  ADD CONSTRAINT `fk_scooterEdit` FOREIGN KEY (`noUnik`) REFERENCES `datascooter` (`NoUnik`);

--
-- Constraints for table `menyewakan`
--
ALTER TABLE `menyewakan` -- untuk pengguna yang memiliki role petugas / operator
  ADD CONSTRAINT `fk_KTPpetugasPengguna` FOREIGN KEY (`noKTP`) REFERENCES `datapengguna` (`noKTP`),
  ADD CONSTRAINT `fk_scooterSewa` FOREIGN KEY (`noUnik`) REFERENCES `datascooter` (`NoUnik`);

--
-- Constraints for table `datapenyewa`
--
ALTER TABLE `datapenyewa`
  ADD CONSTRAINT `fk_kecPenyewa` FOREIGN KEY (`idKel`) REFERENCES `kelurahan` (`idKel`);

--
-- Constraints for table `transaksipengembalian`
--
ALTER TABLE `transaksipengembalian`
  ADD CONSTRAINT `fk_KTPbalik` FOREIGN KEY (`noKTP`) REFERENCES `datapenyewa` (`NoKTP`);

--
-- Constraints for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  ADD CONSTRAINT `fk_KTPsewa` FOREIGN KEY (`noKTP`) REFERENCES `datapenyewa` (`NoKTP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
