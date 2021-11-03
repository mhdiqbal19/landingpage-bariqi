-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 09:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bariqi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `telepon`, `email`, `alamat`) VALUES
(1, '0812-7881-3689', 'mail@bariqi.id', 'Jl. Retno Dumilah No.56B, Prenggan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55172.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `link` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `isi`, `link`, `gambar`) VALUES
(1, 'Sistem Penggajian PT Sinergi Visi Utama', 'Web based AppsIFRS adalah aplikasi Management equipment pada Refinery unit pertamina, Based on mandays.Skills : Laravel', 'sinergi.co.id', 'sinergi.jpeg'),
(2, 'Bank Syariah Mandiri - SER\r\n', 'Web based Apps, Mobile apps Android & iOS\r\n\r\nSER (service excelent report) adalah aplikasi management report activity BSM seluruh Indoneisa.\r\n\r\nSkills : Nude Js, Vue Js, Slime, Java', '', 'mandiri.png'),
(3, 'PT Tugu Asuransi Pratama Indonesia - TWA\r\n', 'Web based Apps, Mobile apps Android & iOS\r\n\r\nTWA.PTM.Cargo adalah aplikasi yang mencatat data transaksi dari deklarasi sertifikat asuransi kargo yang ada di lingkungan Pertamina Group.\r\n\r\nSkills : DotNet, Java Native, Swift Native', '', 'tugu.png');

-- --------------------------------------------------------

--
-- Table structure for table `teknologi`
--

CREATE TABLE `teknologi` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teknologi`
--

INSERT INTO `teknologi` (`id`, `judul`, `gambar`) VALUES
(6, 'Php', '6.png'),
(7, 'S', '1.png'),
(8, 'Java', '2.png'),
(9, 'JQuery', '3.png'),
(10, 'Laravel', '5.png'),
(11, 'JS', '4.png'),
(12, 'V', '7.png'),
(13, 'Fluter', '8.png'),
(14, 'W', ''),
(15, 'Kotlin', '10.png'),
(16, 'Ubuntu', '11.png'),
(17, 'Mate', '12.png'),
(18, 'Apple', '13.png'),
(19, 'E', '14.png'),
(20, 'Docker', '15.png'),
(21, 'Laba-Laba', '16.png'),
(22, 'CN', '17.png'),
(23, 'GO', '18.png'),
(24, 'DIG', '19.png'),
(25, 'O', '20.png'),
(26, 'Rail', '22.png'),
(29, 'OS', '211.png');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `id` int(11) NOT NULL,
  `isi1` varchar(200) NOT NULL,
  `isi2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`id`, `isi1`, `isi2`) VALUES
(3, 'Bariqi.id adalah salah satu karya terbaik anak bangsa, yang bergerak dibidang pengembangan perangkat lunak, dibawah PT. AGHNA PARTNERSHIP KONSULTAN. ', 'Salah satu tujuan kami menciptakan Software yang berkualitas, aman, sesuai dengan kebutuhan perusahaan, Programmer yang berpengalaman dengan menggunakan Teknologi ter up to date, dan berasal dari kampus, Putra/Putri lulusan terbaik di Indonesia maupun Luar Negeri, mampu menyelesaikan Aplikasi dengan baik dan tepat waktu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknologi`
--
ALTER TABLE `teknologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teknologi`
--
ALTER TABLE `teknologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
