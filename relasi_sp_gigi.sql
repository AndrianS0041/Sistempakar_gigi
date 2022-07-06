-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2022 at 04:24 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_gigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jawaban`
--

CREATE TABLE `riwayat_jawaban` (
  `id_jawaban` int(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `Id_penyakit` int(11) NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(10) NOT NULL,
  `gejala` varchar(300) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`, `kode_gejala`) VALUES
(36, 'Tampak gigi susu', 'G1'),
(37, 'Gigi dewasa pengganti tumbuh ', 'G2'),
(38, 'Kegoyangan gigi susu (Negatif/Positif)', 'G3'),
(39, 'Tidak ada gejala', 'G4'),
(40, 'Gigi vital hidup', 'G5'),
(41, 'Dasar gigi terdapat jaringan kera berwarna kecoklatan', 'G6'),
(42, 'Tidak ada perubahan warna gigi', 'G7'),
(43, 'Permukaan gigi kasar', 'G8'),
(44, 'Makanan mudah tersangkut', 'G9'),
(45, 'Tidak ada rasa linu', 'G10'),
(46, 'Terasa sakit jika minum dingin, makan manis (sakit ≥1 menit)', 'G11'),
(47, 'Caries email (kerusakan lapisan email)', 'G12'),
(48, 'Sondasi negatif', 'G13'),
(49, 'Perkusi negatif', 'G14'),
(50, 'Tekanan negatif', 'G15'),
(51, 'Nyeri tajam', 'G16'),
(52, 'Sakit cukup lama ', 'G17'),
(53, 'Sakit hilang timbul', 'G18'),
(54, 'Terasa sakit tanpa rangsangan dingin/panas', 'G19'),
(55, 'Terasa sakit sampai belakang telinga', 'G20'),
(56, 'Kesulitan menujukkan gigi yang sakit', 'G21'),
(57, 'Lubang gigi mencapai pulpa', 'G22'),
(58, 'Terasa sakit jika minum dingin, panas dan makan manis (sakit ≤1 menit)', 'G23'),
(59, 'Caries mencapai dentin', 'G24'),
(60, 'Sondasi positif', 'G25'),
(61, 'Jaringan pulpa mati', 'G26'),
(62, 'Perubahan warna gigi', 'G27'),
(63, 'Sensitif terhadap rangsangan panas', 'G28'),
(64, 'Bau mulut', 'G29'),
(65, 'Abses bisa sakit/tidak', 'G30'),
(66, 'Terdapat benjolan kecil didalam dekat gigi yang sakit', 'G31'),
(67, 'Gigi tidak goyangg', 'G32'),
(68, 'Sakit saat mengunyah dan mengigit', 'G33'),
(69, 'Gusi berwarna kemerahan dan bengkak', 'G34'),
(70, 'Gusi mudah berdarah jika disentuh', 'G35'),
(71, 'Terasa gatal pada gusi disela-sela gigi', 'G36'),
(72, 'Nyeri intens', 'G37'),
(73, 'Gusi bengkak', 'G38'),
(74, 'Nyeri tanpa disentuh', 'G39'),
(75, 'Gigi goyang', 'G40'),
(76, 'Nyeri pada perkusi', 'G41'),
(77, 'Nyeri pada rahang', 'G42'),
(78, 'Sakit kepala berkepanjangan', 'G43'),
(79, 'Kesulitan membuka mulut', 'G44'),
(80, 'Demam ', 'G45'),
(81, 'Sakit disekitar gusi', 'G46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(60) NOT NULL,
  `penjelasan` varchar(5000) NOT NULL,
  `gejala` varchar(5000) NOT NULL,
  `penanganan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `penjelasan`, `gejala`, `penanganan`) VALUES
(14, 'P1', 'Persistensi Gigi', '', 'Tampak gigi susu.\r\nGigi dewasa pengganti tumbuh \r\nKegoyangan gigi susu (Negatif/Positif)', ''),
(15, 'P2', 'Arrested Gigi', '', 'Tidak ada gejala\r\nGigi vital hidup\r\nDasar gigi terdapat jaringan kera berwarna kecoklatan', ''),
(16, 'P3', 'Caries Dentin', 'Caries Dentin', 'Tidak ada perubahan warna gigi\r\nPermukaan gigi kasar\r\nMakanan mudah tersangkut\r\nTidak ada rasa linu\r\n', ''),
(17, 'P4', 'Iritasi Pulpa', '', 'Terasa sakit jika minum dingin, makan manis (sakit ≥1 menit)\r\nCaries email (kerusakan lapisan email)\r\nSondasi negatif\r\nPerkusi negatif\r\nTekanan negatif\r\n', ''),
(18, 'P5', 'Pulpitis', '', 'Nyeri tajam\r\nSakit cukup lama \r\nSakit hilang timbul\r\nTerasa sakit tanpa rangsangan dingin/panas\r\nTerasa sakit sampai belakang telinga\r\nKesulitan menujukkan gigi yang sakit\r\nLubang gigi mencapai pulpa\r\n', ''),
(19, 'P6', 'Hypermia Pulpa', '', 'Perkusi negatif\r\nTekanan negatif\r\nTerasa sakit jika minum dingin, panas dan makan manis (sakit ≤1 menit)\r\nCaries mencapai dentin\r\nSondasi positif\r\n', ''),
(20, 'P7', 'Nekrosis Pulpa', '', 'Tidak ada gejala\r\nJaringan pulpa mati\r\nPerubahan warna gigi\r\nSensitif terhadap rangsangan panas\r\nBau mulut\r\n', ''),
(21, 'P8', 'Abses Periapikal', '', 'Bau mulut\r\nAbses bisa sakit/tidak\r\nTerdapat benjolan kecil didalam dekat gigi yang sakit\r\nGigi tidak goyangg\r\n', ''),
(22, 'P9', 'Gingivitis', '', 'Bau mulut\r\nSakit saat mengunyah dan mengigit\r\nGusi berwarna kemerahan dan bengkak\r\nGusi mudah berdarah jika disentuh\r\nTerasa gatal pada gusi disela-sela gigi\r\nNyeri intens\r\n', ''),
(23, 'P10', 'Abses Periodental', '', 'Gusi bengkak\r\nNyeri tanpa disentuh\r\nGigi goyang\r\nNyeri pada perkusi\r\n', ''),
(24, 'P10', 'Impaksi Gigi', '', 'Gusi bengkak\r\nNyeri pada rahang\r\nSakit kepala berkepanjangan\r\nKesulitan membuka mulut\r\n', ''),
(25, 'P10', 'Akar Gigi Tertinggal', '', 'Bau mulut\r\nGusi berwarna kemerahan dan bengkak\r\nDemam \r\nSakit disekitar gusi\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(5) NOT NULL,
  `kode_rule` varchar(5) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(1000) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL,
  `kode_pasien` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` int(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(100) DEFAULT 'password123'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `kode_pasien`, `nama`, `email`, `hp`, `alamat`, `password`) VALUES
(1, 'P001', 'admin', 'admin@admin.com', 0, '', 'admin'),
(2, 'P002', 'user tes', 'tes@gmail.com', 123456789, 'Sleman', 'password'),
(11, 'P003', 'adwda', 'awdaw@gmail.com', 22222, '          1wdada', 'password123'),
(12, 'P004', 'adawdada', 'ggg@gmail.com', 16516, 'dadada          ', 'password123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `Id_penyakit` (`Id_penyakit`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  MODIFY `id_jawaban` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  ADD CONSTRAINT `riwayat_jawaban_ibfk_1` FOREIGN KEY (`Id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD CONSTRAINT `tb_rule_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_rule_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
