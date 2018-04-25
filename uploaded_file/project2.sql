-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 07:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

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
  `company_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `company_contract_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `company_contract_sname` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `Major_ID`, `address`, `provice`, `contract`, `Tel`, `Note`, `company_type`, `company_name`, `company_contract_name`, `company_contract_sname`) VALUES
(39, 3, '6 115/51 ต.กะทู้, อ. กะทู้  ภูเก็ต 83120', 'ภูเก็ต', '0954138706,asdasdasd@asndjad.com', '0954138706', 'พัฒนาระบบของทางบริษัท โดยใช้ \r\n ภาษา javascript php ', 'COOP', 'testconpany.co.ltd;', 'babysisitername', 'babysisitersurname'),
(40, 3, 'asd', 'asd', 'asd', 'asd', 'asd', 'COOP', 'asdasd', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `company_position`
--

CREATE TABLE `company_position` (
  `Postion_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `Position_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Position_skill` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Position_desc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Position_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_position`
--

INSERT INTO `company_position` (`Postion_id`, `company_id`, `Position_name`, `Position_skill`, `Position_desc`, `Position_num`) VALUES
(2, 40, 'asdasd', 'asdasd', 'asdasd', 3),
(3, 39, 'test', 'test', 'test', 5);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Fac_ID` int(11) NOT NULL,
  `Faculty_name` varchar(50) NOT NULL,
  `Faculty_name_thai` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NameFac_sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Fac_ID`, `Faculty_name`, `Faculty_name_thai`, `NameFac_sub`) VALUES
(1, 'Technology and Enviroment', '', 'FTE'),
(2, 'International Study', '', 'FIS'),
(3, 'Computer of Engineering', '', 'COE'),
(4, 'College of Computing', '', 'COC');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `Major_ID` int(11) NOT NULL,
  `Major_name` varchar(200) NOT NULL,
  `Major_name_thai` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Fac_ID` int(11) NOT NULL,
  `NameMajor_sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`Major_ID`, `Major_name`, `Major_name_thai`, `Fac_ID`, `NameMajor_sub`) VALUES
(1, 'Environmental Technology and Management', '', 1, 'ETM'),
(2, 'Environmental Geoinformatics Technology \r\n', '', 1, 'GEO'),
(3, 'Software Engineering', '', 4, 'SE'),
(4, 'Information Technology', '', 4, 'IT'),
(5, 'Electronic Business', '', 4, 'E-Biz'),
(6, 'International Business China', '', 2, 'IBC'),
(7, 'Chinese Studies', '', 2, 'CNS'),
(8, 'International Business Korea', '', 2, 'IBK'),
(9, 'Thai Studies', '', 2, 'THS'),
(10, 'Korea Studies', '', 2, 'KRS'),
(11, 'European Studies', '', 2, 'EUS'),
(14, 'Computer of Engineering', '', 3, 'COE');

-- --------------------------------------------------------

--
-- Table structure for table `major_setting`
--

CREATE TABLE `major_setting` (
  `major_id` int(11) NOT NULL,
  `major_type` varchar(10) NOT NULL,
  `status_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `personnelID` int(11) DEFAULT NULL,
  `personnelID_monitor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major_setting`
--

INSERT INTO `major_setting` (`major_id`, `major_type`, `status_id`, `start_date`, `end_date`, `personnelID`, `personnelID_monitor`) VALUES
(1, 'internship', 1, '2018-04-02', '2018-04-29', NULL, NULL),
(1, 'internship', 2, '2018-04-26', '2018-04-29', NULL, NULL),
(1, 'internship', 5, '2018-04-29', '2019-04-12', NULL, NULL),
(3, 'COOP', 1, '2018-03-31', '2018-03-31', NULL, NULL),
(3, 'COOP', 2, '2018-03-31', '2018-03-31', NULL, NULL),
(3, 'COOP', 3, NULL, NULL, 999, 996),
(3, 'COOP', 5, '2018-03-31', '2018-03-31', NULL, NULL),
(3, 'internship', 1, '2018-04-21', '2018-04-22', NULL, NULL),
(3, 'internship', 2, '2018-04-21', '2018-04-22', NULL, NULL),
(3, 'internship', 3, NULL, NULL, 996, NULL),
(3, 'internship', 5, '2018-04-21', '2018-04-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(11) NOT NULL,
  `Topic` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `Topic`, `description`, `start_date`) VALUES
(1, 'hello', 'world world', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `personnelID` int(11) NOT NULL,
  `personnelName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `personnelSName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Position` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Fac_ID` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`personnelID`, `personnelName`, `personnelSName`, `Position`, `Fac_ID`, `title`, `password`) VALUES
(996, 'ratthakit', 'thanasakkulsiri', 'lecture', 4, 'MR.', '123'),
(998, 'world', 'hello', 'admin', 4, 'MR.', '321'),
(999, 'hello', 'world', 'lecture', 4, 'MR.', '123');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Request'),
(2, 'Choosing'),
(3, 'Approving'),
(4, 'Waiting'),
(5, 'RechoosingandRepair'),
(6, 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `status_history`
--

CREATE TABLE `status_history` (
  `std_status_id` int(11) NOT NULL,
  `STD_ID` int(11) NOT NULL,
  `status_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_student_company`
--

CREATE TABLE `status_student_company` (
  `status_student_company_id` int(11) NOT NULL,
  `status_student_company_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_student_company`
--

INSERT INTO `status_student_company` (`status_student_company_id`, `status_student_company_name`) VALUES
(0, 'waiting'),
(1, 'approved'),
(2, 'unapprove');

-- --------------------------------------------------------

--
-- Table structure for table `std_form_103_relative`
--

CREATE TABLE `std_form_103_relative` (
  `std_form_103_relative_id` int(11) NOT NULL,
  `relative_name` varchar(50) NOT NULL,
  `relative_sname` varchar(50) NOT NULL,
  `relative_Tel` varchar(15) NOT NULL,
  `STD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STD_ID` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `std_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `std_sname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0',
  `std_type` varchar(100) DEFAULT NULL,
  `std_tel` varchar(15) NOT NULL,
  `std_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STD_ID`, `major_id`, `std_name`, `std_sname`, `password`, `permission`, `std_type`, `std_tel`, `std_email`) VALUES
(3, 14, 'สมชาย', 'เกรียงศักดิ์', '123', 0, '1', '', ''),
(4, 4, 'ส้มโอ', 'อร่อยดี', '123', 0, '1', '0954138545', 'asmdasd@naksjnd.com'),
(5, 3, 'หิวข้าว', 'จัง', '123', 0, 'Internship', '', ''),
(1000, 3, 'test', 'test', '555', 0, 'Internship', '', ''),
(1001, 3, 'hello', 'world', '321', 0, 'COOP', '08589641', 'asdasdasd@asndjad.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_company`
--

CREATE TABLE `student_company` (
  `STD_ID` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `Time_select` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_student_company_id` int(11) NOT NULL DEFAULT '0',
  `Postion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_company`
--

INSERT INTO `student_company` (`STD_ID`, `company_id`, `Time_select`, `status_student_company_id`, `Postion_id`) VALUES
(1000, 40, '2018-04-17 00:36:57', 1, 2),
(1001, 39, '2018-04-19 01:07:06', 0, 3),
(1001, 40, '2018-04-19 01:06:44', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_form_103`
--

CREATE TABLE `student_form_103` (
  `Name_of_advisor` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Semester_GPA` varchar(5) NOT NULL,
  `Cumulative_GPA` varchar(5) NOT NULL,
  `Iden_cardNo` varchar(13) NOT NULL,
  `Issued_at` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Issued_date` date NOT NULL,
  `Expiry_date` date NOT NULL,
  `Race` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Nationality` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Religion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Place_of_birth` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Height` varchar(4) NOT NULL,
  `Weight` varchar(3) NOT NULL,
  `Chronical_disease` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Address_now` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Emergency_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Emergency_Sname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Emergency_relation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Emergency_Occupation` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Emergency_Placework` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Emergency_Address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Emergency_Tel` varchar(15) NOT NULL,
  `Emergency_E-mail` varchar(100) NOT NULL,
  `Father_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Father_sname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Father_age` int(11) NOT NULL,
  `Father_occupation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Father_Address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Father_Zipcode` varchar(8) NOT NULL,
  `Father_Tel` varchar(15) NOT NULL,
  `Father_Email` varchar(50) NOT NULL,
  `mother_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mother_sname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mother_age` int(11) NOT NULL,
  `mother_occupation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mother_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mother_Zipcode` varchar(8) NOT NULL,
  `mother_Tel` varchar(15) NOT NULL,
  `mother_Email` varchar(50) NOT NULL,
  `Parent_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Parent_sname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Parent_age` int(11) NOT NULL,
  `Parent_occupation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Parent_Address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Parent_Zipcode` varchar(8) NOT NULL,
  `Parent_Tel` varchar(15) NOT NULL,
  `Parent_Email` varchar(50) NOT NULL,
  `num_of_relative` int(11) NOT NULL,
  `num_are_you` int(11) NOT NULL,
  `Edu_pri_school` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Edu_pri_Provice` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_pri_YearAttend` varchar(5) NOT NULL,
  `Edu_pri_YearGraduate` varchar(5) NOT NULL,
  `Edu_pri_major` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_sec_school` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Edu_sec_Provice` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_sec_YearAttend` varchar(5) NOT NULL,
  `Edu_sec_YearGraduated` varchar(5) NOT NULL,
  `Edu_sec_major` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_high_school` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Edu_high_Provice` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_high_YearAttend` varchar(5) NOT NULL,
  `Edu_high_YearGraduated` varchar(5) NOT NULL,
  `Edu_high_major` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_uni` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Edu_uni_Provice` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Edu_uni_YearAttend` varchar(5) NOT NULL,
  `Edu_uni_Graduated` varchar(5) NOT NULL,
  `Edu_uni_major` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Pre_trained_YearFrom` varchar(5) NOT NULL,
  `Pre_trained_Yearto` varchar(5) NOT NULL,
  `Pre_trained_Position` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Pre_trained_Provice` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Pre_trained_Organization` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Career_objective1` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Career_objective2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Career_objective3` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Career_objective4` varchar(30) CHARACTER SET utf8 NOT NULL,
  `std_activity_1` varchar(30) CHARACTER SET utf8 NOT NULL,
  `std_activity_2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `std_activity_3` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Language_Eng_lis` varchar(5) NOT NULL,
  `Language_Eng_speak` varchar(5) NOT NULL,
  `Language_Eng_read` varchar(5) NOT NULL,
  `Language_Eng_writing` varchar(5) NOT NULL,
  `Language_CN_lis` varchar(5) NOT NULL,
  `Language_CN_speak` varchar(5) NOT NULL,
  `Language_CN_read` varchar(5) NOT NULL,
  `Language_CN_writing` varchar(5) NOT NULL,
  `Specail_ability_1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Specail_ability_2` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Specail_ability_3` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Other_skill_computer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Other_skill_sport` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Other_skill_Hobbies` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Drive_license_car` tinyint(1) NOT NULL,
  `Drive_license_motorCycle` tinyint(1) NOT NULL,
  `Explain_yourself` varchar(300) CHARACTER SET utf8 NOT NULL,
  `std_form_103_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_form_103`
--

INSERT INTO `student_form_103` (`Name_of_advisor`, `Semester_GPA`, `Cumulative_GPA`, `Iden_cardNo`, `Issued_at`, `Issued_date`, `Expiry_date`, `Race`, `Nationality`, `Religion`, `Date_of_birth`, `Place_of_birth`, `sex`, `Height`, `Weight`, `Chronical_disease`, `Address_now`, `Address`, `Emergency_name`, `Emergency_Sname`, `Emergency_relation`, `Emergency_Occupation`, `Emergency_Placework`, `Emergency_Address`, `Emergency_Tel`, `Emergency_E-mail`, `Father_name`, `Father_sname`, `Father_age`, `Father_occupation`, `Father_Address`, `Father_Zipcode`, `Father_Tel`, `Father_Email`, `mother_name`, `mother_sname`, `mother_age`, `mother_occupation`, `mother_address`, `mother_Zipcode`, `mother_Tel`, `mother_Email`, `Parent_name`, `Parent_sname`, `Parent_age`, `Parent_occupation`, `Parent_Address`, `Parent_Zipcode`, `Parent_Tel`, `Parent_Email`, `num_of_relative`, `num_are_you`, `Edu_pri_school`, `Edu_pri_Provice`, `Edu_pri_YearAttend`, `Edu_pri_YearGraduate`, `Edu_pri_major`, `Edu_sec_school`, `Edu_sec_Provice`, `Edu_sec_YearAttend`, `Edu_sec_YearGraduated`, `Edu_sec_major`, `Edu_high_school`, `Edu_high_Provice`, `Edu_high_YearAttend`, `Edu_high_YearGraduated`, `Edu_high_major`, `Edu_uni`, `Edu_uni_Provice`, `Edu_uni_YearAttend`, `Edu_uni_Graduated`, `Edu_uni_major`, `Pre_trained_YearFrom`, `Pre_trained_Yearto`, `Pre_trained_Position`, `Pre_trained_Provice`, `Pre_trained_Organization`, `Career_objective1`, `Career_objective2`, `Career_objective3`, `Career_objective4`, `std_activity_1`, `std_activity_2`, `std_activity_3`, `Language_Eng_lis`, `Language_Eng_speak`, `Language_Eng_read`, `Language_Eng_writing`, `Language_CN_lis`, `Language_CN_speak`, `Language_CN_read`, `Language_CN_writing`, `Specail_ability_1`, `Specail_ability_2`, `Specail_ability_3`, `Other_skill_computer`, `Other_skill_sport`, `Other_skill_Hobbies`, `Drive_license_car`, `Drive_license_motorCycle`, `Explain_yourself`, `std_form_103_id`) VALUES
('test', '4.00', '4.00', '1111111111111', 'tset', '2018-04-03', '2018-04-30', 'wmp', 'wmp', 'wmp', '2018-04-09', 'place', 'f', '155', '20', '-', '111/11', 'asd', 'asda', '', 'ada', 'student', '--', '-', '-', '', 'test', 'tset', 22, 'test', 'test', '8300', '-', 'mail@mail.com', 'test', 'tset', 22, 'test', '111', '83000', '-', 'mail@mail.com', 'test', 'tset', 22, 'test', 'test', '8300', '-', 'mail@mail.com', 2, 1, '', 'ภูเก็ต', '', '', '', '', 'ภูเก็ต', '', '', '', '', 'ภูเก็ต', '', '', '', '', 'ภูเก็ต', '', '', '', '', '', '', 'ภูเก็ต', '', '', '', '', '', 'tset', 'tset', 'tset', 'Fair', 'Good', 'Poor', 'Good', 'Fair', 'Good', 'Poor', 'Good', '', '', '', '', '', '', 0, 0, '', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `student_status`
--

CREATE TABLE `student_status` (
  `status` varchar(30) NOT NULL,
  `STD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_status`
--

INSERT INTO `student_status` (`status`, `STD_ID`) VALUES
('Choosing', 1000),
('request', 3),
('request', 4),
('Request', 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `Major_ID` (`Major_ID`);

--
-- Indexes for table `company_position`
--
ALTER TABLE `company_position`
  ADD PRIMARY KEY (`Postion_id`,`company_id`),
  ADD KEY `FK_company_postion` (`company_id`);

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
  ADD PRIMARY KEY (`major_id`,`major_type`,`status_id`),
  ADD KEY `FK_status` (`status_id`),
  ADD KEY `FK_personnelID` (`personnelID`),
  ADD KEY `FK_personnelID_monitor` (`personnelID_monitor`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`personnelID`),
  ADD KEY `Fac_ID` (`Fac_ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `status_history`
--
ALTER TABLE `status_history`
  ADD PRIMARY KEY (`std_status_id`,`STD_ID`),
  ADD KEY `FK_STD_ID` (`STD_ID`);

--
-- Indexes for table `status_student_company`
--
ALTER TABLE `status_student_company`
  ADD PRIMARY KEY (`status_student_company_id`);

--
-- Indexes for table `std_form_103_relative`
--
ALTER TABLE `std_form_103_relative`
  ADD PRIMARY KEY (`STD_ID`,`std_form_103_relative_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STD_ID`),
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `student_company`
--
ALTER TABLE `student_company`
  ADD PRIMARY KEY (`STD_ID`,`company_id`),
  ADD KEY `student_company_ibfk_2` (`company_id`),
  ADD KEY `Postion_id` (`Postion_id`),
  ADD KEY `status_student_company_id` (`status_student_company_id`);

--
-- Indexes for table `student_form_103`
--
ALTER TABLE `student_form_103`
  ADD UNIQUE KEY `std_form_103_id` (`std_form_103_id`);

--
-- Indexes for table `student_status`
--
ALTER TABLE `student_status`
  ADD KEY `STD_ID` (`STD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `company_position`
--
ALTER TABLE `company_position`
  MODIFY `Postion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `personnelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_position`
--
ALTER TABLE `company_position`
  ADD CONSTRAINT `FK_company_postion` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `major`
--
ALTER TABLE `major`
  ADD CONSTRAINT `major_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `major_setting`
--
ALTER TABLE `major_setting`
  ADD CONSTRAINT `FK_major` FOREIGN KEY (`major_id`) REFERENCES `major` (`Major_ID`),
  ADD CONSTRAINT `FK_personnelID` FOREIGN KEY (`personnelID`) REFERENCES `personnel` (`personnelID`),
  ADD CONSTRAINT `FK_personnelID_monitor` FOREIGN KEY (`personnelID_monitor`) REFERENCES `personnel` (`personnelID`),
  ADD CONSTRAINT `FK_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_3` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `status_history`
--
ALTER TABLE `status_history`
  ADD CONSTRAINT `status_history_ibfk_1` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`);

--
-- Constraints for table `std_form_103_relative`
--
ALTER TABLE `std_form_103_relative`
  ADD CONSTRAINT `std_form_103_relative_ibfk_2` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `major` (`Major_ID`);

--
-- Constraints for table `student_company`
--
ALTER TABLE `student_company`
  ADD CONSTRAINT `student_company_ibfk_1` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`),
  ADD CONSTRAINT `student_company_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company_position` (`company_id`),
  ADD CONSTRAINT `student_company_ibfk_3` FOREIGN KEY (`Postion_id`) REFERENCES `company_position` (`Postion_id`),
  ADD CONSTRAINT `student_company_ibfk_4` FOREIGN KEY (`status_student_company_id`) REFERENCES `status_student_company` (`status_student_company_id`);

--
-- Constraints for table `student_form_103`
--
ALTER TABLE `student_form_103`
  ADD CONSTRAINT `std_form_103_ibfk_1` FOREIGN KEY (`std_form_103_id`) REFERENCES `student` (`STD_ID`);

--
-- Constraints for table `student_status`
--
ALTER TABLE `student_status`
  ADD CONSTRAINT `student_status_ibfk_1` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STD_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
