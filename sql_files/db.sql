-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 04:48 PM
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
  `concat` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `class`, `subject`, `chapter`, `concat`, `date`) VALUES
(1, '12', 'CHEMISTRY', 'CH7', 'assets/uploads/assignments/IT 401 Agile SD.pdf', '2021-09-18 20:46:17'),
(2, '12', 'BIOLOGY', 'CH7', 'assets/uploads/assignments/physics/IT 401 Agile SD.pdf', '2021-09-18 20:46:17'),
(3, '12', 'BUISNESS', 'CH3', 'assets/uploads/assignments/buisness/IT 401 Agile SD.pdf', '2021-09-18 20:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `classlink`
--

CREATE TABLE `classlink` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB ;

--
-- Dumping data for table `classlink`
--

INSERT INTO `classlink` (`id`, `class`, `subject`, `chapter`, `link`, `Date`) VALUES
(1, '12', 'CHEMISTRY', 'CH10', 'www.google.com', '0000-00-00 00:00:00'),
(2, '12', 'PHYSICS', 'CH3', 'www.facebook.colm', '0000-00-00 00:00:00'),
(3, '12', 'CHEMISTRY', 'CH8', 'www.tanvi.com', '2021-09-16 12:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `Name` varchar(21) DEFAULT NULL,
  `Ratings` varchar(19) DEFAULT NULL,
  `Comments` varchar(281) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `Name`, `Ratings`, `Comments`) VALUES
(2, 'adity singh', '5', 'Positive: Communication, Professionalism, Quality, Value ,    Best environment for tuition classes   '),
(3, 'Satya nayaran sharma', '5', 'best tuition'),
(4, 'taranpreet singh', '5', 'best tuition'),
(5, 'vasu gupta', '5', 'one of the best institute to get individual attention and concepts clearing'),
(6, 'shelly mittal', '5', 'good environment with friendly teachers'),
(7, 'deep shikha', '5', 'professionalism'),
(8, 'klever boy', '5', 'best institute for every kid'),
(9, 'sahil singh', '5', 'Yaaar kya btao sir ktine sweet hai and the way he teach maza aa jata hai...??'),
(10, 'shadow gaming', '5', 'coolest teacher ever I had ever seen'),
(11, 'shadow gamer', '5', 'superb teaching style'),
(12, 'rakhi sharma', '5', 'Best teacher ,I love the way he teach .He is so sweet and kind person .?'),
(13, 'prachi dahiya', '5', 'very good and friendly enviroment'),
(14, 'sana sharma', '5', 'best teacher I have ever seen'),
(15, 'anu kathuria', '5', 'Best institutions ever with cool and friendly environment....….????????'),
(16, 'sahil mishra', '5', 'One of the best tuition for students. Its environment is very positive. Especially faculties gives full support to the students even after completion of the course. I am really very very happy to be a part of Sumit Sharma Classes.'),
(17, 'alpha spidey YT', '5', 'Best Institute for every student.'),
(18, 'Preyan sharma', '5', 'one of the best educational institution'),
(19, 'AVI Somdutt', '5', 'Best tuition of your child\'s success'),
(20, 'Fitness 24', '5', 'best tuition classes'),
(21, 'Talwinder Singh', '5', 'One of the best institution for non med and medical.'),
(22, 'Gagan Preet', '5', 'Best tuition for all classes.'),
(23, '3122 Ayushi Dhiman', '5', 'best institution to get best result.'),
(24, 'kiara sharma', '5', 'getting very good grades after joining sumit sharma classes'),
(25, 'ritu sharma', '5', 'Best institute for result oriented students'),
(26, 'Trust water', '5', 'Best tuition service'),
(27, 'ajay saini', '5', 'best institute to get enrolled'),
(28, 'Tritiya Kumari', '5', 'Positive: Communication, Professionalism, Quality, Value'),
(29, 'Nanu Na', '5', 'Positive: Communication, Professionalism, Quality, Value'),
(30, 'Jai Sidhu', '5', 'One of the best teachers..'),
(31, 'Ranveer Saini', '5', 'Very qualified, hardworking and humble teachers..I am recommending s2c to all..'),
(32, 'samarth', '5', 'join here or nowhere.'),
(33, 'jasmeet kaur', '5', 'best institute for science'),
(34, 'Naresh Narwal', '5', 'Best institute for medical and non medical students'),
(35, 'Fiza Gupta', '5', 'Honestly i would highly recommend sumit sharma classes for classes 1st to 12th. This academy provide excellent education . Join to get gud grades!'),
(36, 'Pritpal Sidhu', '5', 'One of the best institute of this area. Enroll your child to get best result, with very nominal charges. Thanks for teaching.?'),
(37, 'mehak', '5', 'One of the best tuition, Getting very good result after joining S2C'),
(38, 'Jaisingh Jaisingh', '5', 'Positive: Communication, Professionalism, Quality, Value\nVery professional and hardworking teaching staff. Best place to get enrolled for tuition.'),
(39, 'Somnath Dey', '5', 'Best institution for medical and non medical'),
(40, 'DRAKE GAMING', '5', 'Very professional and interactive way of teaching at Sumit Sharma Classes.'),
(41, 'V Sharma Production', '5', 'One of the best institution with very dedicated and positive teachers'),
(42, 'Tejanshu Ranjha,1038', '5', 'Best institution ever seen, high class studies ,lucky to be a part of it'),
(43, 'Harshit Yadav', '5', 'I am student of this tution...iam achievig great results....very very good teachers and the way of learning is excellent...you should try here once..♥️♥️'),
(44, 'Kulwinder Kaur', '5', 'Best academics and classes.Thanking you for teaching us'),
(45, 'Aryan Rajput', '5', 'Very professional and helpful teachers with very positive environment.'),
(46, 'naren Tower', '5', 'one of the best institution'),
(47, 'Sanjeev kumar', '5', 'Best tuition with best teachers'),
(48, 'Joy Harrison', '5', 'One of the best institution with very supportive teaching staff.'),
(49, 'Shubhanki Shrivastava', '5', 'One of the best tuition for students. Its environment is very positive. Especially faculties gives full support to the students even after completion of the course.\nI am really very very happy to be a part of Sumit Sharma Classes.'),
(50, 'Shreya', '5', 'Best education al institute with very positive environment.'),
(51, 'ANIL SHARMA', '5', 'This coaching institute starts from basic and take the students to next level'),
(52, 'Gurman Jaura', '5', 'Most positive place for education'),
(53, 'Kunal Sharma', '5', 'Great place to study ,be y helpful faculty'),
(54, '74 Arpita Tyagi', '5', 'Best tuitions with very supportive faculty and positive enviroment.'),
(55, 'Suraj Rawat', '5', 'Very qualitative educational institution'),
(56, 'Srishti Pasrija', '5', 'The most innovative, enhanced learning I have got...\nEven the fabulous teachers with creative knowledge present with fenominal work....\nLove to be there..'),
(57, 'Pooja Sharma', '5', 'Very good place to get your child indulge with quality education.'),
(58, 'Tanvi Singla', '5', 'one of the best institute ever.. Professional teachers , friendly environment to study, one to one interaction, quality content deliver by the teachers. I personally recommend sumit sharma classes for those who believe in practical based knowlwdge and want to learn something good.'),
(59, 'Aashish Sharma', '5', 'Qualitative education....experienced teachers....And good guidance');

-- --------------------------------------------------------

--
-- Table structure for table `events_img`
--

CREATE TABLE `events_img` (
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB ;

--
-- Dumping data for table `events_img`
--

INSERT INTO `events_img` (`id`, `path`) VALUES
(4, './assets/img/events/22459539_1657954100938938_8214890225247413769_o.jpg'),
(5, './assets/img/events/matrix.png'),
(6, './assets/img/events/star.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `class` varchar(5) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `subject`, `class`, `token`, `status`) VALUES
(1, 'tanvi', 'singla', 'ts@gmail.com', '$2y$10$fizA9wETrXYDj8C37gFOFesCcOYz/LK8PB1shydaOlWq0SYAG1sg.', '1234567890', 'f', 'Physics, Chemistry, Mathematics', '12', 'e0dfd69f6ca04aedb21b9927fd7bbb', 'inactive'),
(2, 'admin', 'admin', 'admin@something.com', '$2y$10$pkUCpyz5KLDNOEuKfoeozeMsEKSxwfZlZxlD1O8tUaM8pjCnYV1W6', '9632587410', 'm', 'Physics, Chemistry, Mathematics', 'None', 'fb689d7703fa46cca73456da6ec4e2', 'inactive'),
(3, 'tanvi', 'singla', 'tanvi.boss@gmail.com', '$2y$10$8/zaoEcF5b84EIEcQCwQWeYSye/XHqf.J4B9uZVWNgM0TAVPtSbsK', '7896541111', 'f', 'Physics, Chemistry, Mathematics', '12', '8c1bf3ac93e3b1e9c2d7cbf97aadb4', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `concat` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB ;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`id`, `class`, `subject`, `chapter`, `concat`, `date`) VALUES
(1, '12', 'PHYSICS', 'CH5', 'assets/uploads/student/Screenshot 2021-09-16 102128.png', '2021-09-18 20:46:52'),
(2, '12', 'PHYSICS', 'CH4', 'assets/uploads/student/NewSyllabus_12352019122273617.pdf', '2021-09-18 20:46:52'),
(3, '12', 'PHYSICS', 'CH6', 'assets/uploads/student/NewSyllabus_11562018102363348.docx', '2021-09-18 20:46:52'),
(4, '12', 'PHYSICS', 'CH3', 'assets/uploads/student/NewSyllabus_1412202071278459.doc', '2021-09-18 20:46:52'),
(5, '12', 'CHEMISTRY', 'CH2', 'assets/uploads/student/128880450_2120236164774132_7601302196415656568_o.jpg', '2021-09-18 20:46:52'),
(6, '12', 'BIOLOGY', 'CH6', 'assets/uploads/student/NewSyllabus_233420207771623.pdf', '2021-09-18 20:46:52'),
(7, '12', 'MATHEMATICS', 'CH9', 'assets/uploads/student/NewSyllabus_11b239c7-41ef-45a1-9a1d-33417b1b97b0.pdf', '2021-09-18 20:46:52'),
(8, '12', 'CHEMISTRY', 'CH10', 'assets/uploads/student/NewSyllabus_2322202071032927.doc', '2021-09-18 20:46:52'),
(9, '12', 'CHEMISTRY', 'CH5', 'assets/uploads/student/NewSyllabus_195202072372421.docx', '2021-09-18 20:46:52'),
(10, '12', 'BUISNESS', 'CH2', 'assets/uploads/student/physicsNewSyllabus_13592019111400362.docx', '2021-09-18 20:46:52'),
(11, '12', 'BIOLOGY', 'CH3', 'assets/uploads/student/biologyNewSyllabus_1412202071278459.doc', '2021-09-18 20:46:52'),
(12, '11', 'ECONOMICS', 'CH5', 'assets/uploads/student/economics/Associate Analyst JD_USI Consulting.pdf', '2021-09-18 20:46:52'),
(13, '12', 'MATHEMATICS', 'CH4', 'assets/uploads/student/mathematics/IT 401 Agile SD.pdf', '2021-09-18 20:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_event` varchar(10) NOT NULL,
  `end_event` varchar(10) NOT NULL
) ENGINE=InnoDB ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `class`, `subject`, `day`, `start_event`, `end_event`) VALUES
(1, '12', 'MATHEMATICS', 'Monday', '8', '10'),
(2, '12', 'ENGLISH', 'Monday', '5', '4'),
(3, '12', 'ENGLISH', 'Monday', '5', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classlink`
--
ALTER TABLE `classlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_img`
--
ALTER TABLE `events_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classlink`
--
ALTER TABLE `classlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_img`
--
ALTER TABLE `events_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
