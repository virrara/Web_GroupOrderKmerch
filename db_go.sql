-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_go`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `subject`, `message`) VALUES
(2, 'virra1315elfsj@gmail.com', 'REFUND', 'Hello! '),
(3, 'virra1315elfsj@gmail.com', 'REQ PO', 'Helooooo'),
(15, 'virrisesilver@gmail.com', 'TRY', 'Hellooo!!'),
(16, 'virra1315elfsj@gmail.com', 'Gone Away', 'Hello!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `tag_batch` int(225) NOT NULL,
  `tag_negara` text NOT NULL,
  `tag_resi` varchar(225) NOT NULL,
  `tag_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`tag_batch`, `tag_negara`, `tag_resi`, `tag_ket`) VALUES
(2, 'Japan', 'SJ5162413', '100000'),
(3, 'US', 'SH1628321', '345000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testi`
--

CREATE TABLE `tb_testi` (
  `id_tst` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_track`
--

CREATE TABLE `tb_track` (
  `kd_batch` int(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `no_resi` varchar(255) NOT NULL,
  `nm_order` varchar(255) NOT NULL,
  `track_sts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_track`
--

INSERT INTO `tb_track` (`kd_batch`, `negara`, `no_resi`, `nm_order`, `track_sts`) VALUES
(4, 'Korea', 'SJ123411133', 'SG 2022 - Super Junior', 'Sortir (Wharehouse KR)'),
(6, 'China', 'SJ3248637', '[Personal Order] - Hyuk PC', 'Arrived at wharehouse CN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(2, 'virrara', 'SJSKZ', 'Virrara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`tag_batch`);

--
-- Indexes for table `tb_testi`
--
ALTER TABLE `tb_testi`
  ADD PRIMARY KEY (`id_tst`);

--
-- Indexes for table `tb_track`
--
ALTER TABLE `tb_track`
  ADD PRIMARY KEY (`kd_batch`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `tag_batch` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_testi`
--
ALTER TABLE `tb_testi`
  MODIFY `id_tst` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_track`
--
ALTER TABLE `tb_track`
  MODIFY `kd_batch` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
