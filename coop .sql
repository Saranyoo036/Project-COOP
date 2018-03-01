-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 02:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminSName` varchar(50) NOT NULL,
  `auth_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adminName`, `adminSName`, `auth_id`) VALUES
(1, 'ratthakit', 'thanasakkulsiri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `auth_id` int(11) NOT NULL,
  `auth_type_id` int(11) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Username` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`auth_id`, `auth_type_id`, `creat_at`, `update_at`, `Username`, `Password`, `Email`) VALUES
(1, 1, '2018-02-01 07:36:26', '0000-00-00 00:00:00', 'admin', 'admin', '555@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `auth_type`
--

CREATE TABLE `auth_type` (
  `auth_type_id` int(11) NOT NULL,
  `auth_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_type`
--

INSERT INTO `auth_type` (`auth_type_id`, `auth_type_name`) VALUES
(0, 'teacher'),
(1, 'admin'),
(2, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Fac_ID` int(11) NOT NULL,
  `Faculty_name` varchar(50) NOT NULL,
  `NameFac_sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Fac_ID`, `Faculty_name`, `NameFac_sub`) VALUES
(1, 'Technology and Enviroment', 'FTE'),
(2, 'International Study', 'FIS'),
(3, 'Computer of Engineering', 'COE'),
(4, 'College of Computing', 'COC'),
(5, 'Hospitality and Tourism', 'FHT');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `Major_ID` int(11) NOT NULL,
  `Major_name` varchar(200) NOT NULL,
  `Fac_ID` int(11) NOT NULL,
  `NameMajor_sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`Major_ID`, `Major_name`, `Fac_ID`, `NameMajor_sub`) VALUES
(1, 'Environmental Technology and Management', 1, 'ETM'),
(2, 'Environmental Geoinformatics Technology \r\n', 1, 'GEO'),
(3, 'Software Engineering', 4, 'SE'),
(4, 'Information Technology', 4, 'IT'),
(5, 'Electronic Business', 4, 'E-Biz'),
(6, 'International Business China', 2, 'IBC'),
(7, 'Chinese Studies', 2, 'CNS'),
(8, 'International Business Korea', 2, 'IBK'),
(9, 'Thai Studies', 2, 'THS'),
(10, 'Korea Studies', 2, 'KRS'),
(11, 'European Studies', 2, 'EUS'),
(12, 'Hospitality Management', 5, 'HPM'),
(13, 'Tourism Management', 5, 'TRM'),
(14, 'Computer of Engineering', 3, 'COE');

-- --------------------------------------------------------

--
-- Table structure for table `major_setting`
--

CREATE TABLE `major_setting` (
  `setting_id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `SETTING_TYPE` varchar(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherID` int(11) NOT NULL,
  `TeacherName` varchar(50) NOT NULL,
  `TeacherSName` varchar(50) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `Major_ID` int(11) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`auth_id`),
  ADD KEY `auth_type_id` (`auth_type_id`);

--
-- Indexes for table `auth_type`
--
ALTER TABLE `auth_type`
  ADD PRIMARY KEY (`auth_type_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Fac_ID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`Major_ID`),
  ADD KEY `Fac_ID` (`Fac_ID`);

--
-- Indexes for table `major_setting`
--
ALTER TABLE `major_setting`
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`),
  ADD KEY `auth_id` (`auth_id`),
  ADD KEY `Major_ID` (`Major_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Fac_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `Major_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `authentication` (`auth_id`);

--
-- Constraints for table `authentication`
--
ALTER TABLE `authentication`
  ADD CONSTRAINT `authentication_ibfk_1` FOREIGN KEY (`auth_type_id`) REFERENCES `auth_type` (`auth_type_id`);

--
-- Constraints for table `major`
--
ALTER TABLE `major`
  ADD CONSTRAINT `major_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `major_setting`
--
ALTER TABLE `major_setting`
  ADD CONSTRAINT `major_setting_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `major` (`Major_ID`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`auth_id`) REFERENCES `authentication` (`auth_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`Major_ID`) REFERENCES `major` (`Major_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
