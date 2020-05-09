-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 07:25 PM
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
  `namaKec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idKec`, `namaKec`) VALUES
(1, 'Bojongloa Kaler'),
(2, 'Sukajadi'),
(3, 'Bojongloa Kidul'),
(4, 'Sumur'),
(5, 'Bandung Wetan'),
(6, 'Regol'),
(7, 'Astana Anyar'),
(8, 'Andir'),
(9, 'Antapani'),
(10, 'Arcamanik'),
(11, 'Babakan Ciparay'),
(12, 'Bandung Kidul'),
(13, 'Bandung Kulon'),
(14, 'Batununggal'),
(15, 'Buahbatu'),
(16, 'Cibeunying Kaler'),
(17, 'Cibeunying Kidul'),
(18, 'Cibiru'),
(19, 'Cicendo'),
(20, 'Cidadap'),
(21, 'Cinambo'),
(22, 'Coblong'),
(23, 'Gedebage'),
(24, 'Kiaracondong'),
(25, 'Lengkong'),
(26, 'Mandalajati'),
(27, 'Panyileukan'),
(28, 'Rancasari'),
(29, 'Sukasari'),
(30, 'Ujungberung');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `idKel` int(11) NOT NULL,
  `namaKel` varchar(50) NOT NULL,
  `idKec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`idKel`, `namaKel`, `idKec`) VALUES
(1, 'Kopo', 1),
(2, 'Sukagalih', 2),
(3, 'Mekarwangi', 3),
(4, 'Babakan Ciamis', 4),
(5, 'Cihapit', 5),
(6, 'Cigereleng', 6),
(7, 'Karanganyar', 7),
(8, 'Babakan Asih', 1),
(9, 'Babakan Tarogong', 1),
(10, 'Jamika', 1),
(11, 'Suka Asih', 1),
(12, 'Cipedes', 2),
(13, 'Pasteur', 2),
(14, 'Sukabungah', 2),
(15, 'Sukawarna', 2),
(16, 'Cibaduyut', 3),
(17, 'Cibaduyut Kidul', 3),
(18, 'Cibaduyut Wetan', 3),
(19, 'Kebon Lega', 3),
(20, 'Situsaeur', 3),
(21, 'Braga', 4),
(22, 'Kebonpisang', 4),
(23, 'Merdeka', 4),
(24, 'Citarum', 5),
(25, 'Tamansari', 5),
(26, 'Ancol', 6),
(27, 'Balonggede', 6),
(28, 'Ciateul', 6),
(29, 'Ciseureuh', 6),
(30, 'Pasirluyu', 6),
(31, 'Pungkur', 6),
(32, 'Cibadak', 7),
(33, 'Karasak', 7),
(34, 'Nyengseret', 7),
(35, 'Panjunan', 7),
(36, 'Pelindunghewan', 7),
(37, 'Campaka', 8),
(38, 'Ciroyom', 8),
(39, 'Dunguscariang', 8),
(40, 'Garuda', 8),
(41, 'Kebonjeruk', 8),
(42, 'Maleber', 8),
(43, 'Antapani Kidul', 9),
(44, 'Antapani Kulon', 9),
(45, 'Antapani Tengah', 9),
(46, 'Antapani Wetan', 9),
(47, 'Cisaranten Bina Harapan', 10),
(48, 'Cisaranten Endah', 10),
(49, 'Cisaranten Kulon', 10),
(50, 'Sukamiskin', 10),
(51, 'Babakan', 11),
(52, 'Babakanciparay', 11),
(53, 'Cirangrang', 11),
(54, 'Margahayu Utara', 11),
(55, 'Margasuka', 11),
(56, 'Sukahaji', 11),
(57, 'Batununggal', 12),
(58, 'Kujangsari', 12),
(59, 'Mengger', 12),
(60, 'Wates', 12),
(61, 'Caringin', 13),
(62, 'Cibuntu', 13),
(63, 'Cigondewah Kaler', 13),
(64, 'Cigondewah Kidul', 13),
(65, 'Cigondewah Rahayu', 13),
(66, 'Cijerah', 13),
(67, 'Gempolsari', 13),
(68, 'Warungmuncang', 13),
(69, 'Binong', 14),
(70, 'Cibangkong', 14),
(71, 'Gumuruh', 14),
(72, 'Kacapiring', 14),
(73, 'Kebongedang', 14),
(74, 'Kebonwaru', 14),
(75, 'Maleer', 14),
(76, 'Samoja', 14),
(77, 'Cijawura', 15),
(78, 'Jatisari', 15),
(79, 'Margasari', 15),
(80, 'Sekejati', 15),
(81, 'Cigadung', 16),
(82, 'Cihaeurgeulis', 16),
(83, 'Neglasari', 16),
(84, 'Sukaluyu', 16),
(85, 'Cicadas', 17),
(86, 'Cikutra', 17),
(87, 'Padasuka', 17),
(88, 'Pasirlayung', 17),
(89, 'Sukamaju', 17),
(90, 'Sukapada', 17),
(91, 'Cipadung', 18),
(92, 'Cisurupan', 18),
(93, 'Palasari', 18),
(94, 'Pasirbiru', 18),
(95, 'Arjuna', 19),
(96, 'Husen Sastranegara', 19),
(97, 'Pajajaran', 19),
(98, 'Pamoyanan', 19),
(99, 'Pasirkaliki', 19),
(100, 'Sukaraja', 19),
(101, 'Ciumbuleuit', 20),
(102, 'Hegarmanah', 20),
(103, 'Ledeng', 20),
(104, 'Babakan Penghulu', 21),
(105, 'Cisaranten Wetan', 21),
(106, 'Pakemitan', 21),
(107, 'Sukamulya', 21),
(108, 'Cipaganti', 22),
(109, 'Dago', 22),
(110, 'Lebakgede', 22),
(111, 'Lebaksiliwangi', 22),
(112, 'Sedangserang', 22),
(113, 'Sekeloa', 22),
(114, 'Cimincrang', 23),
(115, 'Cisaranten Kidul', 23),
(116, 'Rancabolang', 23),
(117, 'Rancanumpang', 23),
(118, 'Babakansari', 24),
(119, 'Babakansurabaya', 24),
(120, 'Cicaheum', 24),
(121, 'Compreng', 24),
(122, 'Kebongkangkung', 24),
(123, 'Kebunjayanti', 24),
(124, 'Sukapura', 24),
(125, 'Burangrang', 25),
(126, 'Cijagra', 25),
(127, 'Cikawao', 25),
(128, 'Lingkar Selatan', 25),
(129, 'Malabar', 25),
(130, 'Paledang', 25),
(131, 'Turangga', 25),
(132, 'Jatihandap', 26),
(133, 'Karangpamulang', 26),
(134, 'Pasir Impun', 26),
(135, 'Sindangjaya', 26),
(136, 'Cipadung Kidul', 27),
(137, 'Cipadung Kulon', 27),
(138, 'Cipadung Wetan', 27),
(139, 'Mekarmulya', 27),
(140, 'Cipamokolan', 28),
(141, 'Darwati', 28),
(142, 'Mahjahlega', 28),
(143, 'Mekar Jaya', 28),
(144, 'Gegerkalong', 29),
(145, 'Isola', 29),
(146, 'Sarijadi', 29),
(147, 'Sukarasa', 29),
(148, 'Cigending', 30),
(149, 'Pasanggrahan', 30),
(150, 'Pasirendah', 30),
(151, 'Pasirjati', 30),
(152, 'Pasirwangi', 30);

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
  `noKTP` varchar(16) NOT NULL,
  `noUnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksipengembalian`
--

INSERT INTO `transaksipengembalian` (`noTransaksi`, `waktu_pengembalian`, `noKTP`, `noUnik`) VALUES
(1, '2020-03-15 12:00:00', '3579762987600020', 1),
(2, '2020-03-17 15:00:00', '3928982789862000', 2),
(3, '2020-03-17 17:00:00', '3542349800002320', 3),
(4, '2020-03-19 19:00:00', '3579762987600020', 3),
(5, '2020-03-20 13:00:00', '3928982789862000', 3),
(6, '2020-03-22 12:00:00', '3928982789862000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksipenyewaan`
--

CREATE TABLE `transaksipenyewaan` (
  `noTransaksi` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `noKTP` varchar(16) NOT NULL,
  `noUnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksipenyewaan`
--

INSERT INTO `transaksipenyewaan` (`noTransaksi`, `waktu_mulai`, `noKTP`, `noUnik`) VALUES
(1, '2020-03-15 10:00:00', '3579762987600020', 1),
(2, '2020-03-17 14:00:00', '3928982789862000', 2),
(3, '2020-03-17 15:00:00', '3542349800002320', 3),
(4, '2020-03-19 17:00:00', '3579762987600020', 3),
(5, '2020-03-20 12:00:00', '3928982789862000', 3),
(6, '2020-03-22 11:00:00', '3928982789862000', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idKec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`idKel`),
  ADD KEY `fk_kec-kel` (`idKec`);

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
  ADD KEY `fk_sewa-balik` (`noTransaksi`),
  ADD KEY `fk_scooter-balik` (`noUnik`);

--
-- Indexes for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  ADD PRIMARY KEY (`noTransaksi`),
  ADD KEY `fk_ktp-sewa` (`noKTP`),
  ADD KEY `fk_scooter-sewa` (`noUnik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scooter`
--
ALTER TABLE `scooter`
  MODIFY `NoUnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  MODIFY `noTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_kec-kel` FOREIGN KEY (`idKec`) REFERENCES `kecamatan` (`idKec`);

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
  ADD CONSTRAINT `fk_scooter-balik` FOREIGN KEY (`noUnik`) REFERENCES `scooter` (`NoUnik`),
  ADD CONSTRAINT `fk_sewa-balik` FOREIGN KEY (`noTransaksi`) REFERENCES `transaksipenyewaan` (`noTransaksi`);

--
-- Constraints for table `transaksipenyewaan`
--
ALTER TABLE `transaksipenyewaan`
  ADD CONSTRAINT `fk_ktp-sewa` FOREIGN KEY (`noKTP`) REFERENCES `penyewa` (`NoKTP`),
  ADD CONSTRAINT `fk_scooter-sewa` FOREIGN KEY (`noUnik`) REFERENCES `scooter` (`NoUnik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
