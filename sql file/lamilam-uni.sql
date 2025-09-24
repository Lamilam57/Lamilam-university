-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 06:28 PM
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
-- Database: `lamilam-uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'lamilam', 'admin', '$2y$10$1aiDNhes.KdyO5Cdl/v0rOEtFoel24TW4RYPg5n49prBRchlNZhEK');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `code`) VALUES
(1, 'Introduction to English Language 1', 'ENG111'),
(2, 'Introduction to English Language 2', 'ENG112'),
(3, 'Introduction to Computer Science 1', 'CSC111'),
(4, 'Introduction to Computer Science 2', 'CSC112'),
(5, 'Introduction to computing   ', 'COM 111'),
(6, 'Introduction to Digital Electronics ', 'COM 112'),
(7, 'Introduction to Programming ', 'COM 113'),
(8, 'Statistics for Computing 1  ', 'COM 114'),
(9, 'Computer application packages I ', 'COM 115'),
(10, 'Logic and Linear Algebra   ', 'MTH 111'),
(11, 'Use of English I ', 'GNS 101'),
(12, 'Citizenship Education I ', 'GNS 127'),
(13, 'Programming using C Language  2   ', 'COM 121'),
(14, 'Introduction to Internet ', 'COM 122'),
(15, 'Programming Language using Java I ', 'COM 123'),
(16, 'Data structure and Algorithms  ', 'COM 124'),
(17, 'Introduction to Systems Analysis and Design', 'COM 125'),
(18, 'PC Upgrade & Maintenance   ', 'COM 126'),
(19, 'Citizenship Education II    ', 'GNS 128'),
(20, 'Communication in English ', 'GNS 102'),
(21, 'Practice of Entrepreneurship', 'EED 126'),
(22, 'Research Methods ', 'GNS 228'),
(23, 'Religion, Faith and Believe', 'GNS 100'),
(24, 'Programming Language using Java II', 'COM 211'),
(25, 'Introduction to systems  Programming ', 'COM 212'),
(26, 'Unified Modelling Language (UML)', 'COM  213'),
(27, 'Computer Systems Troubleshooting ', 'COM 214'),
(28, 'Computer Application  Packages II', 'COM 215'),
(29, 'Statistics for Computing II   ', 'COM 216'),
(30, 'SIWES ', 'SIW  219'),
(31, 'Use of  English II   ', 'GNS 201'),
(32, 'Practice of Entrepreneurship ', 'EED 216'),
(33, 'Basic Computer Networking  ', 'COM 221'),
(34, 'Seminar on Computer and Society ', 'COM 222'),
(35, 'Basic Hardware Maintenance ', 'COM 223'),
(36, 'Management Information system ', 'COM 224'),
(37, 'Web Technology   ', 'COM 225'),
(38, 'File Organisation and Management ', 'COM 226'),
(39, 'Communication in English II ', 'GNS 204'),
(40, 'Project  ', 'COM 227');

-- --------------------------------------------------------

--
-- Table structure for table `course_schedule`
--

CREATE TABLE `course_schedule` (
  `id` int(11) NOT NULL,
  `department` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_schedule`
--

INSERT INTO `course_schedule` (`id`, `department`, `level`, `semester`, `course_code`, `course_unit`) VALUES
(1, '50QU', 'ND 1', 1, 'ENG111', 2),
(2, '29PH', 'ND 1', 1, 'COM 111', 3),
(3, '29PH', 'ND 1', 1, 'COM 112', 3),
(4, '29PH', 'ND 1', 1, 'COM 113', 4),
(5, '29PH', 'ND 1', 1, 'COM 114', 2),
(6, '29PH', 'ND 1', 1, 'COM 115', 3),
(7, '29PH', 'ND 1', 1, 'MTH 111', 2),
(8, '29PH', 'ND 1', 1, 'GNS 101', 2),
(9, '29PH', 'ND 1', 1, 'GNS 127', 2),
(10, '29PH', 'ND 1', 2, 'COM 121', 3),
(11, '29PH', 'ND 1', 2, 'COM 122', 3),
(12, '29PH', 'ND 1', 2, 'COM 123', 3),
(13, '29PH', 'ND 1', 2, 'COM 124', 3),
(14, '29PH', 'ND 1', 2, 'COM 125', 3),
(15, '29PH', 'ND 1', 2, 'COM 126', 3),
(16, '29PH', 'ND 1', 2, 'GNS 128', 2),
(17, '29PH', 'ND 1', 2, 'GNS 102', 2),
(18, '29PH', 'ND 1', 2, 'EED 126', 2),
(19, '29PH', 'ND 1', 2, 'GNS 228', 2),
(20, '29PH', 'ND 1', 1, 'GNS 100', 1),
(21, '29PH', 'ND 2', 1, 'COM 211', 4),
(22, '29PH', 'ND 2', 1, 'COM 212', 2),
(23, '29PH', 'ND 2', 1, 'COM  213', 3),
(24, '29PH', 'ND 2', 1, 'COM 214', 3),
(25, '29PH', 'ND 2', 1, 'COM 215', 3),
(26, '29PH', 'ND 2', 1, 'COM 216', 2),
(27, '29PH', 'ND 2', 1, 'SIW  219', 4),
(28, '29PH', 'ND 2', 1, 'GNS 201', 2),
(29, '29PH', 'ND 2', 1, 'EED 216', 2),
(30, '29PH', 'ND 2', 2, 'COM 221', 3),
(31, '29PH', 'ND 2', 2, 'COM 222', 2),
(32, '29PH', 'ND 2', 2, 'COM 223', 2),
(33, '29PH', 'ND 2', 2, 'COM 224', 2),
(34, '29PH', 'ND 2', 2, 'COM 225', 3),
(35, '29PH', 'ND 2', 2, 'COM 226', 2),
(36, '29PH', 'ND 2', 2, 'GNS 204', 2),
(37, '29PH', 'ND 2', 2, 'COM 227', 6);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(25) NOT NULL,
  `hod` varchar(25) DEFAULT NULL,
  `program` text NOT NULL,
  `f_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `code`, `hod`, `program`, `f_code`) VALUES
(1, 'Department of English Language', '50QU', '', 'English Language', '62JV'),
(2, 'Department of Computer Science', '29PH', '', 'B.Sc Computer Science', '16WM');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `code` varchar(25) NOT NULL,
  `name` text NOT NULL,
  `dean` varchar(50) DEFAULT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `code`, `name`, `dean`, `address`) VALUES
(1, '60TJ', 'Faculty of Education', '', 'Lagos'),
(2, '62JV', 'Faculty of Management Science', '', 'Lagos'),
(3, '16WM', 'Communication and Information Science', '', 'Lagos'),
(13, 'FG67', 'AGRICULTURE', '', 'ABEOKUTA'),
(14, 'GH56', 'SCIENCE AND TECHNOLOGY', '', 'OGUN'),
(15, '', 'GENERAL STUDIES', '', 'OYO');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first`, `last`, `username`, `email`, `password`) VALUES
(1, 'olamide', 'ola', 'lamilam', 'olamidola36372@gmail.com', '$2y$10$ExlYlDhFjPdDI5CRZqIvIeMEmNQu8BKTb.q7R9sSEmlkLYziDCaOi'),
(2, 'eniola', 'ola', 'eniola', 'eniolaola16@gmail.com', '$2y$10$4HAmfARoXxaUILztQhxKc.BW.JxeexRgFPOnjFhIZRY3YJ7rTFbdq'),
(3, 'success', 'ola', 'success', 'success@gmail.com', '$2y$10$x1zKBMjDApd271G7vG62feJXaF6nFptK6AI0PfRZw7zVRPXrixysO');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_registration`
--

CREATE TABLE `student_course_registration` (
  `matric_no` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `d_title` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `session` varchar(50) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `unit` int(1) DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course_registration`
--

INSERT INTO `student_course_registration` (`matric_no`, `semester`, `d_title`, `level`, `session`, `course_code`, `unit`, `score`) VALUES
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 111', 3, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 112', 3, 90),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 113', 3, 65),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 114', 3, 54),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 115', 4, 27),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'MTH 111', 2, 46),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'GNS 101', 3, 84),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'GNS 127', 2, 37),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'GNS 100', 2, 87),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 211', 2, 79),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 212', 1, 68),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM  213', 4, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 214', 2, 75),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 215', 3, 43),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'COM 216', 3, 70),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'SIW  219', 3, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'GNS 201', 2, 41),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2021/2022', 'EED 216', 4, 80),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'COM 111', 3, 98),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'COM 113', 3, 76),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'GNS 127', 4, 54),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'COM 211', 2, 64),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'COM 212', 3, 75),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'COM 215', 2, 57),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'SIW  219', 2, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2022/2023', 'EED 216', 2, NULL),
('22/29PH190', 2, 'Department of Computer Science', 'ND 1', '2021/2022', 'COM 121', 3, NULL),
('22/29PH190', 2, 'Department of Computer Science', 'ND 1', '2021/2022', 'COM 122', 3, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM 111', 3, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM 112', 3, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM 113', 4, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM 211', 2, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM 212', 3, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM  213', 2, NULL),
('22/29PH106', 1, 'Department of Computer Science', 'ND 2', '2023/2024', 'COM 214', 2, NULL),
('22/29PH190', 2, 'Department of Computer Science', 'ND 1', '2023/2024', 'COM 121', 3, NULL),
('22/29PH190', 2, 'Department of Computer Science', 'ND 1', '2023/2024', 'COM 122', 3, NULL),
('22/29PH190', 2, 'Department of Computer Science', 'ND 1', '2023/2024', 'COM 123', 3, NULL),
('22/29PH190', 2, 'Department of Computer Science', 'ND 1', '2023/2024', 'COM 124', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_parent_nok`
--

CREATE TABLE `student_parent_nok` (
  `id` int(11) NOT NULL,
  `matric_no` varchar(20) DEFAULT NULL,
  `reg_number` varchar(20) DEFAULT NULL,
  `male_first` varchar(50) NOT NULL,
  `male_last` varchar(50) NOT NULL,
  `male_maiden` varchar(50) NOT NULL,
  `male_email` varchar(50) NOT NULL,
  `male_number` varchar(20) NOT NULL,
  `male_religion` varchar(30) NOT NULL,
  `male_occupation` varchar(50) NOT NULL,
  `male_address` text NOT NULL,
  `male_lga` text NOT NULL,
  `male_state` varchar(50) NOT NULL,
  `male_nation` varchar(50) NOT NULL,
  `female_first` varchar(50) NOT NULL,
  `female_last` varchar(50) NOT NULL,
  `female_maiden` varchar(50) NOT NULL,
  `female_email` varchar(50) NOT NULL,
  `female_number` varchar(20) NOT NULL,
  `female_religion` int(30) NOT NULL,
  `female_occupation` int(50) NOT NULL,
  `female_address` text NOT NULL,
  `female_lga` text NOT NULL,
  `female_state` varchar(50) NOT NULL,
  `female_nation` varchar(50) NOT NULL,
  `nok_first` varchar(50) NOT NULL,
  `nok_last` varchar(50) NOT NULL,
  `nok_maiden` varchar(50) NOT NULL,
  `nok_email` varchar(50) NOT NULL,
  `nok_number` varchar(20) NOT NULL,
  `nok_religion` varchar(30) NOT NULL,
  `nok_occupation` varchar(50) NOT NULL,
  `nok_address` text NOT NULL,
  `nok_lga` text NOT NULL,
  `nok_state` varchar(50) NOT NULL,
  `nok_nation` varchar(50) NOT NULL,
  `new_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_parent_nok`
--

INSERT INTO `student_parent_nok` (`id`, `matric_no`, `reg_number`, `male_first`, `male_last`, `male_maiden`, `male_email`, `male_number`, `male_religion`, `male_occupation`, `male_address`, `male_lga`, `male_state`, `male_nation`, `female_first`, `female_last`, `female_maiden`, `female_email`, `female_number`, `female_religion`, `female_occupation`, `female_address`, `female_lga`, `female_state`, `female_nation`, `nok_first`, `nok_last`, `nok_maiden`, `nok_email`, `nok_number`, `nok_religion`, `nok_occupation`, `nok_address`, `nok_lga`, `nok_state`, `nok_nation`, `new_id`) VALUES
(1, '22/50QU95', '5251234641WE', 'olasoji', 'Ola', 'Ola', 'olasoji.ola@gmail.com', '08057081973', 'Christianity', 'Lecturer', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 'Christiana', 'Ola', 'Alao', 'omolara72@gmail.com', '08152532157', 0, 0, 'Lagos', 'Ife North', 'Ogun', 'Nigeria', 'olasoji', 'ola', 'ola', 'olasoji.ola@gmail.com', '08057081973', 'Christianity', 'Lecturer', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 1),
(2, '22/29PH190', '42435365641TY', 'olasoji', 'Ola', 'Ola', 'olasoji.ola@gmail.com', '08057081973', 'Christianity', 'Lecturer', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 'Christiana', 'Ola', 'Alao', 'omolara72@gmail.com', '08152532157', 0, 0, 'Lagos', 'Ife North', 'Ogun', 'Nigeria', 'olasoji', 'ola', 'ola', 'olasoji.ola@gmail.com', '08057081973', 'Christianity', 'Lecturer', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 2),
(3, '22/29PH106', '35535355641SD', 'olasoji', 'Ola', 'Ola', 'olasoji.ola@gmail.com', '08057081973', 'Christianity', 'Lecturer', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 'Christiana', 'Ola', 'Alao', 'omolara72@gmail.com', '08152532157', 0, 0, 'Lagos', 'Ife North', 'Ogun', 'Nigeria', 'olasoji', 'ola', 'ola', 'olasoji.ola@gmail.com', '08057081973', 'Christianity', 'Lecturer', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_payment`
--

CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `matric_no` varchar(20) DEFAULT NULL,
  `transaction_id` varchar(20) DEFAULT NULL,
  `f_name` text DEFAULT NULL,
  `d_name` text DEFAULT NULL,
  `paid` varchar(25) DEFAULT NULL,
  `receipt` varchar(25) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `new_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_payment`
--

INSERT INTO `student_payment` (`id`, `first`, `last`, `matric_no`, `transaction_id`, `f_name`, `d_name`, `paid`, `receipt`, `type`, `status`, `date`, `new_id`) VALUES
(1, 'olamide', 'ola', '22/50QU95', 'Payment-1', 'Faculty of Education', 'Department of English Language', '20000', '23456', 'Part', 'Paid', '2022-08-06', 1),
(2, 'eniola', 'ola', '22/29PH190', 'Payment-138', 'Communication and Information Science', 'Department of Computer Science', '50000', '09876', 'Full', 'Paid', '2022-08-10', 2),
(3, 'success', 'ola', '22/29PH106', 'Payment-133', 'Communication and Information Science', 'Department of Computer Science', '50000', '12345', 'Full', 'Paid', '2022-08-11', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `matric_no` varchar(20) DEFAULT NULL,
  `reg_number` varchar(20) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `dob` varchar(25) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `program` text DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `f_code` varchar(10) DEFAULT NULL,
  `d_code` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `lga` text DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `new_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `first`, `last`, `matric_no`, `reg_number`, `level`, `dob`, `image`, `program`, `religion`, `email`, `f_code`, `d_code`, `gender`, `status`, `phone`, `address`, `lga`, `state`, `nation`, `new_id`) VALUES
(1, 'olamide', 'ola', '22/50QU95', '5251234641WE', 'ND 1', '2002-06-22', 'Studentolamide57782.jpg', 'English Language', 'Christianity', 'olamidola36372@gmail.com', '60TJ', '50QU', 'Male', 'Single', '08143832578', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 1),
(2, 'eniola', 'ola', '22/29PH190', '42435365641TY', 'ND 1', '2003-06-20', 'Studenteniola8582.jpg', 'B.Sc Computer Science', 'Christianity', 'eniolaola16@gmail.com', '16WM', '29PH', 'Female', 'Single', '08123456789', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 2),
(3, 'success', 'ola', '22/29PH106', '35535355641SD', 'ND 2', '2010-04-10', 'Studentsuccess46958.jpg', 'B.Sc Computer Science', 'Christianity', 'success@gmail.com', '16WM', '29PH', 'Male', 'Single', '08143832578', 'Lagos', 'Ife North', 'Osun', 'Nigeria', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_waec_result`
--

CREATE TABLE `student_waec_result` (
  `id` int(11) NOT NULL,
  `matric_no` varchar(20) DEFAULT NULL,
  `reg_number` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `subject_1` varchar(20) DEFAULT NULL,
  `result_1` int(11) DEFAULT NULL,
  `subject_2` varchar(20) DEFAULT NULL,
  `result_2` int(11) DEFAULT NULL,
  `subject_3` varchar(20) DEFAULT NULL,
  `result_3` int(11) DEFAULT NULL,
  `subject_4` varchar(20) DEFAULT NULL,
  `result_4` int(11) DEFAULT NULL,
  `subject_5` varchar(20) DEFAULT NULL,
  `result_5` int(11) DEFAULT NULL,
  `subject_6` varchar(20) DEFAULT NULL,
  `result_6` int(11) DEFAULT NULL,
  `subject_7` varchar(20) DEFAULT NULL,
  `result_7` int(11) DEFAULT NULL,
  `subject_8` varchar(20) DEFAULT NULL,
  `result_8` int(11) DEFAULT NULL,
  `subject_9` varchar(20) DEFAULT NULL,
  `result_9` int(11) DEFAULT NULL,
  `new_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_waec_result`
--

INSERT INTO `student_waec_result` (`id`, `matric_no`, `reg_number`, `year`, `type`, `subject_1`, `result_1`, `subject_2`, `result_2`, `subject_3`, `result_3`, `subject_4`, `result_4`, `subject_5`, `result_5`, `subject_6`, `result_6`, `subject_7`, `result_7`, `subject_8`, `result_8`, `subject_9`, `result_9`, `new_id`) VALUES
(1, '22/50QU95', '5251234641WE', '2018', 'GCE', 'English', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'English', 0, 1),
(2, '22/29PH190', '42435365641TY', '2019', 'NECO', 'English', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'English', 0, 2),
(3, '22/29PH106', '35535355641SD', '2018', 'WAEC', 'English', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'Mathematics', 0, 'English', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `t_code` varchar(25) NOT NULL,
  `age` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `f_code` varchar(25) DEFAULT NULL,
  `d_code` varchar(15) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `dean` varchar(25) NOT NULL,
  `hod` varchar(25) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_schedule`
--
ALTER TABLE `course_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_parent_nok`
--
ALTER TABLE `student_parent_nok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment`
--
ALTER TABLE `student_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_waec_result`
--
ALTER TABLE `student_waec_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `course_schedule`
--
ALTER TABLE `course_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_parent_nok`
--
ALTER TABLE `student_parent_nok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_waec_result`
--
ALTER TABLE `student_waec_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
