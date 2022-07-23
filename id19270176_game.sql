-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2022 at 03:23 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19270176_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `candycrush`
--

CREATE TABLE `candycrush` (
  `id_candycrush` int(3) NOT NULL,
  `id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candycrush`
--

INSERT INTO `candycrush` (`id_candycrush`, `id`, `nama`, `poin`, `tgl`) VALUES
(2, '2004212316396073', 'Rosses Codingz Djawz', '32', '2021-08-23'),
(3, '2004212316396073', 'Rosses Codingz Djawz', '25', '2021-08-17'),
(4, '2004212316396073', 'Rosses Codingz Djawz', '30', '2021-08-23 03:29:06'),
(5, '2004212316396073', 'Rosses Codingz Djawz', '27', '2021-08-30 08:10:41'),
(6, '118926607105648', 'Mitha Anjani', '1200', '2021-08-17 07:44:48'),
(7, '118926607105648', 'Mitha Anjani', '500', '2021-07-17 07:44:48'),
(8, '118926607105648', 'Mitha Anjani', '27', '2021-09-01 05:59:56'),
(9, '118926607105648', 'Mitha Anjani', '26', '2021-09-01 06:01:37'),
(10, '118926607105648', 'undefined', '6', '2021-09-01 06:11:52'),
(11, '118926607105648', 'Mitha Anjani', '37', '2021-09-01 06:13:13'),
(12, '118926607105648', 'Mitha Anjani', '21', '2021-09-01 06:21:39'),
(13, '118926607105648', 'Mitha Anjani', '27', '2021-09-01 06:23:48'),
(14, '118926607105648', 'Mitha Anjani', '16', '2021-09-01 06:28:38'),
(15, '118926607105648', 'Mitha Anjani', '31', '2021-09-01 06:33:01'),
(16, '118926607105648', 'Mitha Anjani', '38', '2021-09-01 06:36:23'),
(17, '118926607105648', 'Mitha Anjani', '28', '2021-09-01 06:38:57'),
(18, '118926607105648', 'Mitha Anjani', '22', '2021-09-01 06:45:08'),
(19, '118926607105648', 'Mitha Anjani', '22', '2021-09-01 06:45:09'),
(20, '118926607105648', 'Mitha Anjani', '24', '2021-09-01 06:46:01'),
(21, '118926607105648', 'Mitha Anjani', '21', '2021-09-01 06:51:20'),
(22, '118926607105648', 'Mitha Anjani', '29', '2021-09-01 06:53:45'),
(23, '118926607105648', 'Mitha Anjani', '28', '2021-09-01 06:56:10'),
(24, '118926607105648', 'undefined', '3', '2021-09-01 07:01:25'),
(25, '118926607105648', 'Mitha Anjani', '32', '2021-09-01 07:03:23'),
(26, '5007467599279906', 'Alvian Husni', '13', '2021-09-01 07:03:54'),
(27, '118926607105648', 'Mitha Anjani', '25', '2021-09-01 07:05:54'),
(28, '118926607105648', 'Mitha Anjani', '39', '2021-09-01 09:01:46'),
(29, '2004212316396073', 'Rosses Codingz Djawz', '34', '2021-09-06 11:07:42'),
(30, '118926607105648', 'Mitha Anjani', '33', '2021-09-06 11:10:18'),
(31, '1421532998221739', 'Nana Yaya', '50', '2021-09-06 11:24:55'),
(32, '1421532998221739', 'Nana Yaya', '43', '2021-09-06 12:52:57'),
(33, '2004212316396073', 'Rosses Codingz Djawz', 'undefined', '2021-09-07 01:45:34'),
(34, '2004212316396073', 'Rosses Codingz Djawz', '30', '2021-09-07 14:04:50'),
(35, '2004212316396073', 'Rosses Codingz Djawz', '3', '2021-09-07 14:23:26'),
(36, '118926607105648', 'Mitha Anjani', '44', '2021-09-07 14:28:47'),
(37, '2004212316396073', 'Rosses Codingz Djawz', '25', '2021-09-07 23:39:28'),
(38, '2004212316396073', 'Rosses Codingz Djawz', '37', '2021-09-07 23:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id_point` int(3) NOT NULL,
  `id` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`id_point`, `id`, `email`, `nama`, `poin`, `tgl`, `status`) VALUES
(7744, '4', 'muchammadfurqon.programer@gmail.com', 'Muchammad Furqon', '15', '2022-07-02 15:31:13', 'Active'),
(7745, '1', 'furqoncoding@gmail.com', 'furqon', '50', '2022-07-02 15:32:42', 'Active'),
(7746, '1', 'furqoncoding@gmail.com', 'furqon', '90', '2022-07-02 18:34:25', 'Active'),
(7747, '4', 'yerrun@gmail.com', 'Yerrun', '25', '2022-07-02 18:39:38', 'Active'),
(7748, '1', 'furqoncoding@gmail.com', 'furqon', '45', '2022-07-02 22:12:55', 'Active'),
(7749, '4', 'yerrun@gmail.com', 'Yerrun', '245', '2022-07-03 12:10:33', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `nik`, `level`) VALUES
(1, 'admin', 'admin', 'FURQON', '12345678', 'GM');

-- --------------------------------------------------------

--
-- Table structure for table `userfb`
--

CREATE TABLE `userfb` (
  `id_userfb` int(3) NOT NULL,
  `id` text COLLATE utf8_unicode_ci NOT NULL,
  `nama` text COLLATE utf8_unicode_ci NOT NULL,
  `poin` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpoint`
--

CREATE TABLE `userpoint` (
  `id_userpoint` int(3) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpoint`
--

INSERT INTO `userpoint` (`id_userpoint`, `username`, `password`, `kodepin`, `id`, `nama`) VALUES
(1, 'admin', 'admin', '123456', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candycrush`
--
ALTER TABLE `candycrush`
  ADD PRIMARY KEY (`id_candycrush`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `userfb`
--
ALTER TABLE `userfb`
  ADD PRIMARY KEY (`id_userfb`);

--
-- Indexes for table `userpoint`
--
ALTER TABLE `userpoint`
  ADD PRIMARY KEY (`id_userpoint`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candycrush`
--
ALTER TABLE `candycrush`
  MODIFY `id_candycrush` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7750;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userfb`
--
ALTER TABLE `userfb`
  MODIFY `id_userfb` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=787;

--
-- AUTO_INCREMENT for table `userpoint`
--
ALTER TABLE `userpoint`
  MODIFY `id_userpoint` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
