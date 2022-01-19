-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 08:40 PM
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
-- Database: `dptravel_online_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(950) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'a', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idcategory`, `name`) VALUES
(1, 'English'),
(2, 'Maths'),
(3, 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idCourse` int(11) NOT NULL,
  `Instructer_idInstructer` int(11) NOT NULL,
  `Course_Name` varchar(450) DEFAULT NULL,
  `Discription` varchar(900) DEFAULT NULL,
  `Duration` varchar(45) DEFAULT NULL,
  `Hours` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `No_of_Video` varchar(45) DEFAULT NULL,
  `Status` varchar(45) NOT NULL DEFAULT '1',
  `Introduction_Video_Path` varchar(945) NOT NULL,
  `sub_category_idsub_category` int(11) NOT NULL,
  `sub_category_category_idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idCourse`, `Instructer_idInstructer`, `Course_Name`, `Discription`, `Duration`, `Hours`, `Price`, `No_of_Video`, `Status`, `Introduction_Video_Path`, `sub_category_idsub_category`, `sub_category_category_idcategory`) VALUES
(1, 5, 'English', '1', '1', '1', '1', '1', '1', '2 minute video of funny moments.mp4', 1, 1),
(2, 5, 'Tamil', 'ddddddddd', '10', '10', '10', '10', '1', 'The Bicycle Boy - 2 min Short Film - YouTube.mkv', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE `course_content` (
  `idCourse_Content` int(11) NOT NULL,
  `Course_idCourse` int(11) NOT NULL,
  `Content_Discription` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_content`
--

INSERT INTO `course_content` (`idCourse_Content`, `Course_idCourse`, `Content_Discription`) VALUES
(1, 1, '1'),
(2, 2, '10');

-- --------------------------------------------------------

--
-- Table structure for table `course_downloads`
--

CREATE TABLE `course_downloads` (
  `idCourse_Downloads` int(11) NOT NULL,
  `Path` varchar(450) DEFAULT NULL,
  `Course_Videos_idCourse_Videos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_downloads`
--

INSERT INTO `course_downloads` (`idCourse_Downloads`, `Path`, `Course_Videos_idCourse_Videos`) VALUES
(1, 'YouCan.lk  Student List.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `idCourse_Videos` int(11) NOT NULL,
  `Course_idCourse` int(11) NOT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Number` varchar(45) DEFAULT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `Discription` varchar(1000) DEFAULT NULL,
  `Video_length` varchar(45) DEFAULT NULL,
  `Watch_Count` varchar(45) DEFAULT '0',
  `View_Days_Count` varchar(45) DEFAULT '0',
  `Video_path` varchar(500) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `Pay_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_videos`
--

INSERT INTO `course_videos` (`idCourse_Videos`, `Course_idCourse`, `Type`, `Number`, `Title`, `Discription`, `Video_length`, `Watch_Count`, `View_Days_Count`, `Video_path`, `duration`, `Pay_type`) VALUES
(1, 1, 'one', '1', '1', '1', '1', '0', '0', '2 minute video of funny moments.mp4', '1', 'half'),
(2, 1, '2', '2', 'nouns - 2', '2', '2', '0', '0', 'Free English song. Download and use it..mp4', '2', 'full'),
(3, 2, 'one', '3', 'tamil-01', '20', '20', '0', '0', 'The Bicycle Boy - 2 min Short Film - YouTube.mkv', '20', 'half'),
(4, 2, 'two', '4', 'tamil-02', '30', '30', '0', '0', 'How to Learn English in 5 Minutes.mp4', '30', 'full'),
(5, 2, '3', '5', 'tamil-03', '60', '60', '0', '0', '2 minute video of funny moments.mp4', '60', 'full'),
(6, 2, 'hi', '6', 'hi', '8', '8', '0', '0', 'How to Learn English in 5 Minutes.mp4', '8', 'Half'),
(7, 2, 'kk', '7', 'kk', '48', '48', '0', '0', '2 minute video of funny moments.mp4', '48', 'full');

-- --------------------------------------------------------

--
-- Table structure for table `instructer`
--

CREATE TABLE `instructer` (
  `idInstructer` int(11) NOT NULL,
  `category_idcategory` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Full_Name` varchar(45) DEFAULT NULL,
  `Description` varchar(900) DEFAULT NULL,
  `Photo_Path` varchar(45) DEFAULT NULL,
  `Contact_No` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `NIC_no` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(950) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructer`
--

INSERT INTO `instructer` (`idInstructer`, `category_idcategory`, `Name`, `Full_Name`, `Description`, `Photo_Path`, `Contact_No`, `Email`, `NIC_no`, `username`, `password`) VALUES
(5, 1, 'K Williams', 'K Williams', 'gdg', '../../custom/img/instructorImg/AddAcademicYrA', '4175276774', 'rusira.pathum20@gmail.com', 'dddddddddn', 'rusirapathum', 'fpvvqk&ap-');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `idLog` int(11) NOT NULL,
  `Student_idStudent` int(11) NOT NULL,
  `Date` varchar(45) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL,
  `Device` varchar(45) DEFAULT NULL,
  `Activity_Type` varchar(450) DEFAULT NULL,
  `Discription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`idLog`, `Student_idStudent`, `Date`, `Time`, `Device`, `Activity_Type`, `Discription`) VALUES
(1, 2, '2021-03-10', '02:32:10pm', 'Laptop', 'Student Register', NULL),
(2, 1, '2021-03-10', '02:37:12pm', 'Laptop', 'Student Login', NULL),
(3, 2, '2021-03-10', '02:38:07pm', 'Laptop', 'Student Login', NULL),
(4, 1, '2021-03-10', '02:56:03pm', 'Laptop', 'Student Login', NULL),
(5, 1, '2021-03-10', '02:57:50pm', 'Laptop', 'Student Login', NULL),
(6, 1, '2021-03-10', '02:58:50pm', 'Laptop', 'Student Login', NULL),
(7, 1, '2021-03-10', '03:02:37pm', 'Laptop', 'Student Login', NULL),
(8, 1, '2021-03-10', '03:03:49pm', 'Laptop', 'Student Login', NULL),
(9, 1, '2021-03-10', '03:05:02pm', 'Laptop', 'Student Login', NULL),
(10, 2, '2021-03-10', '03:07:39pm', 'Laptop', 'Student Login', NULL),
(11, 2, '2021-03-10', '03:24:43pm', 'Laptop', 'Student Login', NULL),
(12, 2, '2021-03-10', '03:31:57pm', 'Laptop', 'Student Login', NULL),
(13, 2, '2021-03-10', '03:34:50pm', 'Laptop', 'Student Login', NULL),
(14, 1, '2021-03-10', '04:40:53pm', 'Laptop', 'Student Login', NULL),
(15, 1, '2021-03-10', '04:41:52pm', 'Laptop', 'Student Login', NULL),
(16, 1, '2021-03-10', '04:52:31pm', 'Laptop', 'Student Login', NULL),
(17, 2, '2021-03-10', '05:10:20pm', 'Laptop', 'Student Login', NULL),
(18, 2, '2021-03-10', '05:13:00pm', 'Laptop', 'Student Login', NULL),
(19, 2, '2021-03-10', '05:26:43pm', 'Laptop', 'Student Login', NULL),
(20, 1, '2021-03-10', '05:26:58pm', 'Laptop', 'Student Login', NULL),
(21, 1, '2021-03-11', '10:30:26am', 'Laptop', 'Student Login', NULL),
(22, 2, '2021-03-11', '10:35:22am', 'Laptop', 'Student Login', NULL),
(23, 1, '2021-03-11', '10:43:33am', 'Laptop', 'Student Login', NULL),
(24, 1, '2021-03-11', '11:45:30am', 'Laptop', 'Student Login', NULL),
(25, 1, '2021-03-11', '11:58:58am', 'Laptop', 'Student Login', NULL),
(26, 1, '2021-03-11', '12:20:38pm', 'Laptop', 'Student Login', NULL),
(27, 1, '2021-03-11', '12:37:46pm', 'Laptop', 'Student Login', NULL),
(28, 1, '2021-03-11', '12:38:38pm', 'Laptop', 'Student Login', NULL),
(29, 1, '2021-03-11', '12:54:33pm', 'Laptop', 'Student Login', NULL),
(30, 1, '2021-03-11', '03:18:06pm', 'Laptop', 'Student Login', NULL),
(31, 1, '2021-03-11', '05:19:22pm', 'Laptop', 'Student Login', NULL),
(32, 1, '2021-03-11', '05:22:57pm', 'Laptop', 'Student Login', NULL),
(33, 1, '2021-03-11', '05:31:36pm', 'Laptop', 'Student Login', NULL),
(34, 1, '2021-03-12', '10:28:06am', 'Laptop', 'Student Login', NULL),
(35, 1, '2021-03-12', '10:35:33am', 'Laptop', 'Student Login', NULL),
(36, 1, '2021-03-12', '10:37:55am', 'Laptop', 'Student Login', NULL),
(37, 1, '2021-03-12', '11:19:35am', 'Laptop', 'Student Login', NULL),
(38, 1, '2021-03-12', '11:21:19am', 'Laptop', 'Student Login', NULL),
(39, 1, '2021-03-12', '11:22:34am', 'Laptop', 'Student Login', NULL),
(40, 1, '2021-03-12', '11:23:01am', 'Laptop', 'Student Login', NULL),
(41, 1, '2021-03-12', '11:23:46am', 'Laptop', 'Student Login', NULL),
(42, 1, '2021-03-12', '11:24:23am', 'Laptop', 'Student Login', NULL),
(43, 1, '2021-03-12', '11:25:15am', 'Laptop', 'Student Login', NULL),
(44, 1, '2021-03-12', '11:37:12am', 'Laptop', 'Student Login', NULL),
(45, 2, '2021-03-13', '10:40:18pm', 'Laptop', 'Student Login', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idStudent` int(11) NOT NULL,
  `Frist_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Full_Name` varchar(45) DEFAULT NULL,
  `Contact_no1` varchar(45) DEFAULT NULL,
  `Contact_no2` varchar(45) DEFAULT NULL,
  `Birth_day` varchar(45) DEFAULT NULL,
  `Address_line1` varchar(45) DEFAULT NULL,
  `Address_line2` varchar(45) DEFAULT NULL,
  `Address_line3` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Guardian_Name` varchar(45) DEFAULT NULL,
  `Guardian_CNo` varchar(45) DEFAULT NULL,
  `Guardian_Email` varchar(45) DEFAULT NULL,
  `User_name` varchar(45) DEFAULT NULL,
  `Password` varchar(950) DEFAULT NULL,
  `img_path` varchar(950) DEFAULT NULL,
  `register_date` varchar(50) NOT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idStudent`, `Frist_Name`, `Last_Name`, `Full_Name`, `Contact_no1`, `Contact_no2`, `Birth_day`, `Address_line1`, `Address_line2`, `Address_line3`, `City`, `Guardian_Name`, `Guardian_CNo`, `Guardian_Email`, `User_name`, `Password`, `img_path`, `register_date`, `status`) VALUES
(1, 'Rusira', 'Pathum', 'Rusira', '0362255568', '0362255568', '2021-03-02', '150/15, Pahathgama', '150/15', 'Pahathgama', 'Hanwalle', '', '', '', 'rusira.pathum20@gmail.com', '123', '../admin/custom/img/studentImg/IMG_20201020_225292.jpg', '2021-03-08', '0'),
(2, 'K', 'Williams', 'K Williams', '0362255568', '4175276774', '2021-03-23', '108 Tannin Trace Rd', '108 Tannin Trace Rd', 'Pahathgama', 'Branson', 'lihinikaduwa', '0362255568', 'rusira.pathum20@gmail.com', 'rusira.pathum20@gmail.com', '321', '../admin/custom/img/studentImg/IMG_20201020_225302.jpg', '2021-03-10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_has_course`
--

CREATE TABLE `student_has_course` (
  `ID` int(11) NOT NULL,
  `Student_idStudent` int(11) NOT NULL,
  `Course_idCourse` int(11) NOT NULL,
  `Payment_type` varchar(50) NOT NULL,
  `Start_date` varchar(45) DEFAULT NULL,
  `Expire_date` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT '1',
  `Review_Comment` varchar(1000) DEFAULT NULL,
  `Feedback_rate` varchar(45) DEFAULT NULL,
  `comment_date` varchar(50) NOT NULL,
  `toShow` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_has_course`
--

INSERT INTO `student_has_course` (`ID`, `Student_idStudent`, `Course_idCourse`, `Payment_type`, `Start_date`, `Expire_date`, `Status`, `Review_Comment`, `Feedback_rate`, `comment_date`, `toShow`) VALUES
(1, 1, 1, 'full', '2021-03-11', '2021-04-11', '1', 'Good Video', NULL, '2000-May-10', '1'),
(2, 2, 1, 'full', '2021-03-11', '2021-04-11', '1', 'Bad Video', NULL, '2020-May-01', '1'),
(3, 2, 2, 'full', '2021-03-10', '2022-01-10', '1', 'x hddkjhjks dkjadihdkj dkahihadiha dkadhaihda kdahdiahd kjddkldjf kjncffan kjajbf hdahd kkhd knhkah kahihadiha dkadhaihda kdahdiahd kjddkldjf kjncffan kjajbf hdahd kkhd knhkahn', NULL, '2020-May-10', '1'),
(4, 1, 2, 'full', '2021-03-11', '2022-01-11', '1', 'Nice video', NULL, '2021-March-11', '1'),
(5, 1, 1, 'full', '2021-03-11', '2021-04-11', '1', NULL, NULL, '', NULL),
(6, 1, 2, 'full', '2021-03-02', '2022-01-02', '1', NULL, NULL, '', NULL),
(7, 2, 1, 'full', '2021-03-11', '2021-04-11', '1', NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_has_course_videos`
--

CREATE TABLE `student_has_course_videos` (
  `Course_Videos_idCourse_Videos` int(11) NOT NULL,
  `Student_has_Course_ID` int(11) NOT NULL,
  `Start_date_Time` varchar(45) NOT NULL,
  `Expire_Date_Time` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_has_course_videos`
--

INSERT INTO `student_has_course_videos` (`Course_Videos_idCourse_Videos`, `Student_has_Course_ID`, `Start_date_Time`, `Expire_Date_Time`, `Status`) VALUES
(1, 1, '2021-03-10', '2021-03-03', '0'),
(1, 2, '2021-03-10', '2021-03-11', '0'),
(1, 5, '2021-03-12', '2021-03-13', '1'),
(1, 7, '-', '-', '1'),
(2, 1, '2021-03-10', '2021-03-02', '0'),
(2, 2, '2021-03-10', '2021-03-12', '0'),
(2, 5, '2021-03-11', '2021-03-13', '1'),
(2, 7, '-', '-', '1'),
(3, 3, '2021-03-10', '2021-03-30', '1'),
(3, 4, '2021-03-10', '2021-03-30', '1'),
(3, 6, '2021-03-12', '2021-04-01', '1'),
(4, 3, '2021-03-10', '2021-04-09', '1'),
(4, 4, '2021-03-10', '2021-04-09', '1'),
(4, 6, '2021-03-12', '2021-04-11', '1'),
(5, 3, '2021-03-10', '2021-05-09', '1'),
(5, 4, '2021-03-11', '2021-05-10', '1'),
(5, 6, '2021-03-12', '2021-05-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `idsub_category` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `category_idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`idsub_category`, `name`, `category_idcategory`) VALUES
(1, 'Sub english', 1),
(2, 'Sub Maths', 2),
(3, 'Sub Tamil', 3);

-- --------------------------------------------------------

--
-- Table structure for table `video_uplod`
--

CREATE TABLE `video_uplod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_uplod`
--

INSERT INTO `video_uplod` (`id`, `name`, `video`) VALUES
(1, 'video1', 'intro_video.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idCourse`,`sub_category_idsub_category`,`sub_category_category_idcategory`),
  ADD KEY `fk_Course_Instructer` (`Instructer_idInstructer`),
  ADD KEY `fk_Course_sub_category1` (`sub_category_idsub_category`,`sub_category_category_idcategory`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`idCourse_Content`),
  ADD KEY `fk_Course_Content_Course1` (`Course_idCourse`);

--
-- Indexes for table `course_downloads`
--
ALTER TABLE `course_downloads`
  ADD PRIMARY KEY (`idCourse_Downloads`),
  ADD KEY `fk_Course_Downloads_Course1` (`Course_Videos_idCourse_Videos`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`idCourse_Videos`),
  ADD KEY `fk_Course_Videos_Course1` (`Course_idCourse`);

--
-- Indexes for table `instructer`
--
ALTER TABLE `instructer`
  ADD PRIMARY KEY (`idInstructer`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idLog`),
  ADD KEY `fk_Log_Student1` (`Student_idStudent`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idStudent`);

--
-- Indexes for table `student_has_course`
--
ALTER TABLE `student_has_course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Student_has_Course_Course1` (`Course_idCourse`),
  ADD KEY `fk_Student_has_Course_Student1` (`Student_idStudent`);

--
-- Indexes for table `student_has_course_videos`
--
ALTER TABLE `student_has_course_videos`
  ADD PRIMARY KEY (`Course_Videos_idCourse_Videos`,`Student_has_Course_ID`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`idsub_category`,`category_idcategory`),
  ADD KEY `fk_sub_category_category1` (`category_idcategory`);

--
-- Indexes for table `video_uplod`
--
ALTER TABLE `video_uplod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `idCourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `idCourse_Content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_downloads`
--
ALTER TABLE `course_downloads`
  MODIFY `idCourse_Downloads` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `idCourse_Videos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructer`
--
ALTER TABLE `instructer`
  MODIFY `idInstructer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_has_course`
--
ALTER TABLE `student_has_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `idsub_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_uplod`
--
ALTER TABLE `video_uplod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
