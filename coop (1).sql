-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 11:48 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
  `adminName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `adminSName` varchar(50) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
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
  `Username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(16) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`auth_id`, `auth_type_id`, `creat_at`, `update_at`, `Username`, `Password`, `Email`) VALUES
(1, 1, '2018-02-01 07:36:26', '0000-00-00 00:00:00', 'admin', 'admin', '555@hotmail.com'),
(2, 2, '2018-02-15 09:20:37', '0000-00-00 00:00:00', 'max', 'max', 'sjasdh@gmail.com'),
(4, 2, '2018-02-21 13:18:20', '0000-00-00 00:00:00', 'qq', 'qq', 'asdasd'),
(5, 0, '2018-02-21 21:30:16', '0000-00-00 00:00:00', 'new', 'new', 'asdas'),
(6, 0, '2018-02-22 11:06:15', '0000-00-00 00:00:00', 'wwww', 'wwww', 'asd');

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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `Major_ID` int(11) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `provice` varchar(60) CHARACTER SET utf8 NOT NULL,
  `contract` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Tel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Note` varchar(200) CHARACTER SET utf8 NOT NULL,
  `company_type` varchar(20) NOT NULL,
  `company_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `Major_ID`, `address`, `provice`, `contract`, `Tel`, `Note`, `company_type`, `company_name`) VALUES
(16, 3, 'เลขที่อยู่ rty กอก เมือง ภก 83000', 'ภก', '-,adasd@sd.com', '-', 'gfnfgh', 'Internship', 'eiei'),
(19, 3, '555/55 - ในเมือง เมือง NST(nakhon si thammarat) 55555', 'NST(nakhon si thammarat)', '-email.cas@ff.com', 'Tel:000-0000000', ' --- ', 'COOP', 'x.ltd.;'),
(21, 1, 'address_num street kwang sub_district district postcode', 'district', 'fax,mail', 'tel', 'about', 'COOP', 'test_name'),
(22, 3, 'เลขที่อยู่ ถนน/ตรอก/ซอย แขวง/ตำบล เขต/อำเภอ จังหวัด รหัสไปรษณีย์', 'จังหวัด', 'Fax:Fax:Fax:หมายเลขโทรสาร(แฟกซ์), EMAIL:test@t.com', 'Tel:Tel:Tel:หมายเลขโทรศัพท์', 'รายละเอียด', 'COOP', 'บริษัท'),
(23, 3, '222/22 - ตำบล เมือง อะไรไม่รู้ 55555', 'อะไรไม่รู้', '-,email.m@mail.com', '0777777777', 'asdasd', 'COOP', 'ก.จำกัด');

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
(4, 'College of Computing', 'COC');

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
(14, 'Computer of Engineering', 3, 'COE');

-- --------------------------------------------------------

--
-- Table structure for table `major_news`
--

CREATE TABLE `major_news` (
  `Major_news_id` int(11) NOT NULL,
  `Major_ID` int(11) NOT NULL,
  `Major_news_type` varchar(50) NOT NULL,
  `topic_news` varchar(100) NOT NULL,
  `description_news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STD_ID` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `std_psuid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STD_ID`, `major_id`, `auth_id`, `std_psuid`) VALUES
(1, 3, 2, '5730213028');

-- --------------------------------------------------------

--
-- Table structure for table `student_form_103`
--

CREATE TABLE `student_form_103` (
  `std_form_103_id` int(11) NOT NULL,
  `STD_ID` int(11) NOT NULL,
  `std_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_form_103`
--

INSERT INTO `student_form_103` (`std_form_103_id`, `STD_ID`, `std_name`) VALUES
(1, 1, 'รัฐกิตติ์');

-- --------------------------------------------------------

--
-- Table structure for table `student_form_202`
--

CREATE TABLE `student_form_202` (
  `std_form_202_id` int(11) NOT NULL,
  `STD_ID` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_form_202_internship`
--

CREATE TABLE `student_form_202_internship` (
  `std_form_202_intern_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `STD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_staus`
--

CREATE TABLE `student_staus` (
  `std_status_id` int(11) NOT NULL,
  `std_form_103_id` int(11) NOT NULL,
  `std_type` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_staus`
--

INSERT INTO `student_staus` (`std_status_id`, `std_form_103_id`, `std_type`, `status`) VALUES
(1, 1, 'COOP', 'choosing');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherID` int(11) NOT NULL,
  `TeacherName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TeacherSName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `auth_id` int(11) NOT NULL,
  `Major_ID` int(11) NOT NULL,
  `Position` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Fac_ID` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Status` enum('Assign','Not-assign') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherID`, `TeacherName`, `TeacherSName`, `auth_id`, `Major_ID`, `Position`, `Fac_ID`, `title`, `Status`) VALUES
(3, 'cecw', 'sfsdf', 4, 3, 'sdfsdf', 4, 'scvsvd', 'Assign'),
(4, 'asd', 'asda', 5, 3, 'asdasd', 4, 'vav', 'Assign'),
(5, 'ทดสอบ', 'เทเบิล', 6, 3, '-', 4, 'นาย', 'Assign');

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
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `Major_ID` (`Major_ID`);

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
-- Indexes for table `major_news`
--
ALTER TABLE `major_news`
  ADD PRIMARY KEY (`Major_news_id`),
  ADD KEY `Major_ID` (`Major_ID`);

--
-- Indexes for table `major_setting`
--
ALTER TABLE `major_setting`
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STD_ID`),
  ADD KEY `major_id` (`major_id`),
  ADD KEY `auth_id` (`auth_id`);

--
-- Indexes for table `student_form_103`
--
ALTER TABLE `student_form_103`
  ADD PRIMARY KEY (`std_form_103_id`),
  ADD KEY `STD_ID` (`STD_ID`);

--
-- Indexes for table `student_form_202`
--
ALTER TABLE `student_form_202`
  ADD PRIMARY KEY (`std_form_202_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `STD_ID` (`STD_ID`);

--
-- Indexes for table `student_form_202_internship`
--
ALTER TABLE `student_form_202_internship`
  ADD PRIMARY KEY (`std_form_202_intern_id`),
  ADD KEY `STD_ID` (`STD_ID`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `student_staus`
--
ALTER TABLE `student_staus`
  ADD PRIMARY KEY (`std_status_id`),
  ADD KEY `std_form_103_id` (`std_form_103_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`),
  ADD KEY `auth_id` (`auth_id`),
  ADD KEY `Major_ID` (`Major_ID`),
  ADD KEY `Fac_ID` (`Fac_ID`);

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
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Fac_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `Major_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `major_news`
--
ALTER TABLE `major_news`
  MODIFY `Major_news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_form_103`
--
ALTER TABLE `student_form_103`
  MODIFY `std_form_103_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_form_202`
--
ALTER TABLE `student_form_202`
  MODIFY `std_form_202_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_form_202_internship`
--
ALTER TABLE `student_form_202_internship`
  MODIFY `std_form_202_intern_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_staus`
--
ALTER TABLE `student_staus`
  MODIFY `std_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`Major_ID`) REFERENCES `major` (`Major_ID`);

--
-- Constraints for table `major`
--
ALTER TABLE `major`
  ADD CONSTRAINT `major_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `major_news`
--
ALTER TABLE `major_news`
  ADD CONSTRAINT `major_news_ibfk_1` FOREIGN KEY (`Major_ID`) REFERENCES `major` (`Major_ID`);

--
-- Constraints for table `major_setting`
--
ALTER TABLE `major_setting`
  ADD CONSTRAINT `major_setting_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `major` (`Major_ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `major` (`Major_ID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`auth_id`) REFERENCES `authentication` (`auth_id`);

--
-- Constraints for table `student_form_103`
--
ALTER TABLE `student_form_103`
  ADD CONSTRAINT `student_form_103_ibfk_1` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`);

--
-- Constraints for table `student_form_202`
--
ALTER TABLE `student_form_202`
  ADD CONSTRAINT `student_form_202_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `student_form_202_ibfk_2` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`);

--
-- Constraints for table `student_form_202_internship`
--
ALTER TABLE `student_form_202_internship`
  ADD CONSTRAINT `student_form_202_internship_ibfk_1` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`),
  ADD CONSTRAINT `student_form_202_internship_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `student_staus`
--
ALTER TABLE `student_staus`
  ADD CONSTRAINT `student_staus_ibfk_1` FOREIGN KEY (`std_form_103_id`) REFERENCES `student_form_103` (`std_form_103_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`auth_id`) REFERENCES `authentication` (`auth_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`Major_ID`) REFERENCES `major` (`Major_ID`),
  ADD CONSTRAINT `teacher_ibfk_3` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
