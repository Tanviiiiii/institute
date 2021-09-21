-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 10:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `concat` varchar(255) NOT NULL
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `classlink`
--

CREATE TABLE `classlink` (
  `id` int(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `link` text NOT NULL
); ENGINE=InnoDB;



--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `class` varchar(5) NOT NULL
) ENGINE=InnoDB;



-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `concat` varchar(255) NOT NULL
) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `timings` varchar(255) NOT NULL
) ENGINE=InnoDB;


--
-- Dumping data for table `timetable`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
