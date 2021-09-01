-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 04:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `concat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `class`, `subject`, `chapter`, `concat`) VALUES
(1, '9TH', 'SCIENCE', 'CH3', 'assets/img/uploads/jpeg'),
(2, '11TH', 'CHEMISTRY', 'CH3', 'assets/img/uploads/IMG_20170902_190318.jpg'),
(3, '10TH', 'SCIENCE', 'CH3', 'assets/img/uploads/IMG_20170902_190256.jpg'),
(4, '8TH', 'MATHEMATICS', 'CH2', 'assets/img/uploads/22459539_1657954100938938_8214890225247413769_o.jpg'),
(5, '11TH', 'CHEMISTRY', 'CH3', 'assets/img/uploads/22459539_1657954100938938_8214890225247413769_o.jpg'),
(6, '8TH', 'MATHEMATICS', 'CH10', 'assets/img/uploads/photo 001.jpg'),
(7, '1st', 'SCIENCE', 'CH3', 'assets/img/uploads/filesize.png'),
(8, '11TH', 'PHYSICS', 'CH2', 'assets/img/uploads/cal-all-options.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
