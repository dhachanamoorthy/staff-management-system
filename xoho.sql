-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 11:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xoho`
--

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `c_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name_of_certificate` varchar(50) NOT NULL,
  `specialiazion` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `course_type` varchar(20) NOT NULL,
  `class_passed` varchar(20) NOT NULL,
  `authority_name` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `year_passed` int(11) NOT NULL,
  `certificate_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`c_id`, `emp_id`, `name_of_certificate`, `specialiazion`, `mark`, `course_type`, `class_passed`, `authority_name`, `duration`, `year_passed`, `certificate_no`) VALUES
(1, 10709, 'gaer', 'hreh', 22, 'full_time', 'ger', 'greg', '7', 2020, '09087');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `doj` date NOT NULL,
  `dept` varchar(50) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `cl` int(11) NOT NULL DEFAULT '0',
  `wh` int(11) NOT NULL DEFAULT '0',
  `loss` int(11) NOT NULL DEFAULT '0',
  `od` int(11) NOT NULL DEFAULT '0',
  `notify` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`staff_id`, `name`, `pic`, `email`, `dob`, `emp_id`, `gender`, `mobile`, `password`, `role`, `position`, `doj`, `dept`, `imagename`, `cl`, `wh`, `loss`, `od`, `notify`) VALUES
(17, 'Chinnasamy', NULL, 'pchinnasamyit@siet.ac.in', NULL, 10723, NULL, NULL, 'Y2hpbm5hMjQ=', NULL, 'assistant-professor', '0000-00-00', 'information_technology', '', 0, 0, 0, 0, 0),
(18, 'Ashok kumar', NULL, 'ashokkumar@siet.ac.in', NULL, 10705, NULL, NULL, 'MTIz', NULL, 'assistant-professor(sg)', '0000-00-00', 'information_technology', 'capture_20191121030356.png', 0, 0, 0, 0, 0),
(20, 'Praveena V', '10340.jpeg', 'vpraveena@siet.ac.in', '1990-04-11', 10340, 'female', '(763) 961-9988', 'MTIz', NULL, 'hod', '2018-10-31', 'information technology', '', 0, 0, 0, 0, 0),
(38, 'V. PRASATH KUMAR', NULL, 'prasathkumar@siet.ac.in', '0000-00-00', 10709, 'male', '9944523239', 'MTIz', NULL, 'assistant-professor', '1994-02-12', 'information_technology', 'assets/images/10709.jpeg', 0, 0, 0, 0, 0),
(41, 'Moorthy', '10702.jpeg', 'dhachanamoorthy3@gmail.com', '1999-03-12', 10702, 'male', '(763) 961-9985', 'MTIz', NULL, 'professor', '2019-03-21', 'information technology', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `emp_id` int(11) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `institution_address` varchar(40) NOT NULL,
  `type_post_held` varchar(40) NOT NULL,
  `date_taking_charge` date NOT NULL,
  `date_ending_charge` date NOT NULL,
  `salary` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`emp_id`, `designation`, `institution_address`, `type_post_held`, `date_taking_charge`, `date_ending_charge`, `salary`, `reason`) VALUES
(10709, 'Assistant Professor (SG)', 'erhre', 'Industrial', '2020-02-04', '2020-02-05', 0, 'eh');

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplications`
--

CREATE TABLE `leaveapplications` (
  `leave_id` int(10) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `type_of_leave` varchar(50) NOT NULL,
  `no_of_days` int(5) NOT NULL,
  `starts_from` date NOT NULL,
  `starts_from_session` varchar(5) NOT NULL,
  `ends_on` date NOT NULL,
  `ends_on_session` varchar(5) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `adjustment` varchar(200) NOT NULL,
  `hod` int(5) DEFAULT '0',
  `principal` int(2) NOT NULL DEFAULT '0',
  `notify` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveapplications`
--

INSERT INTO `leaveapplications` (`leave_id`, `emp_id`, `name`, `dept`, `position`, `type_of_leave`, `no_of_days`, `starts_from`, `starts_from_session`, `ends_on`, `ends_on_session`, `reason`, `adjustment`, `hod`, `principal`, `notify`) VALUES
(77, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-02-04', 'AM', '2020-03-04', 'AM', 'vsf', 'bdefd', 2, 2, 4),
(78, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 2, '2020-03-13', 'FN', '2020-03-15', 'FN', 'fw', 'fgw', 2, 2, 4),
(79, '10723', 'Chinnasamy', 'information_technology', '', 'Casual Leave', 1, '2020-03-14', 'FN', '2020-03-14', 'FN', 'Personal Work', 'Dr.S.WilsonPraksh\nMs.N.Sathya', 2, 2, 4),
(80, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 5, '2020-03-19', 'FN', '2020-03-24', 'FN', 'e2e', '3r2', 2, 2, 4),
(81, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 5, '2020-03-19', 'FN', '2020-03-24', 'FN', 'e2e', '3r2', 1, 0, 1),
(82, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'Chinnasamy', 1, 0, 1),
(83, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-18', 'FN', '2020-03-19', 'FN', 'Fever', 'Santhya', 1, 0, 1),
(84, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-21', 'FN', '2020-03-25', 'FN', 'Fever', 'Santhya', 1, 0, 1),
(85, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 5, '2020-03-20', 'FN', '2020-03-25', 'FN', 'Fever', 'Chinnasamy', 1, 0, 1),
(86, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Ashok Kumar', 1, 0, 1),
(87, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Ashok Kumar', 1, 0, 1),
(88, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Ashok Kumar', 1, 0, 1),
(89, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Ashok Kumar', 1, 0, 1),
(90, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Ashok Kumar', 2, 2, 4),
(91, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Ashok Kumar', 1, 0, 1),
(92, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 3, '2020-03-28', 'FN', '2020-03-31', 'FN', 'Fever', 'Sathya', 1, 0, 1),
(93, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-20', 'FN', '2020-03-21', 'FN', 'Fever', 'Wilson prakash', 1, 0, 1),
(94, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(95, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(96, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(97, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(98, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(99, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(100, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(101, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(102, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(103, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'Fever', 'ilson prakash', 1, 0, 1),
(104, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Seeee', 1, 0, 1),
(105, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Seeee', 1, 0, 1),
(106, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 1, '2020-03-21', 'FN', '2020-03-21', 'FN', 'Fever', 'Seeee', 1, 0, 1),
(107, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 3, '2020-03-28', 'FN', '2020-03-31', 'FN', 'Work', 'SDDD', 1, 0, 1),
(108, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(109, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(110, '10340', 'Praveena V', 'information_technology', '', 'Casual Leave', 3, '2020-03-28', 'FN', '2020-03-31', 'FN', 'fsfagv', 'bvagv', 1, 0, 1),
(111, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(112, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(113, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(114, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(115, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', -3, '2020-03-20', 'FN', '2020-03-17', 'FN', 'dfef', 'vbrf', 1, 0, 1),
(116, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'dffdsg', 'fdgdfg', 1, 0, 1),
(117, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-19', 'FN', '2020-03-20', 'FN', 'dffdsg', 'fdgdfg', 1, 0, 1),
(118, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(119, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(120, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(121, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(122, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(123, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(124, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(125, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(126, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(127, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(128, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(129, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(130, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(131, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(132, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(133, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 4, '2020-03-20', 'FN', '2020-03-24', 'FN', 'ASDFEF', 'GSDFGF', 1, 0, 1),
(134, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-17', 'FN', '2020-03-18', 'FN', 'Fever', 'Moorthy', 1, 0, 1),
(135, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-17', 'FN', '2020-03-18', 'FN', 'Fever', 'Moorthy', 1, 0, 1),
(136, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-17', 'FN', '2020-03-18', 'FN', 'Fever', 'Moorthy', 1, 0, 1),
(137, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-17', 'FN', '2020-03-18', 'FN', 'Fever', 'Moorthy', 1, 0, 1),
(138, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-17', 'FN', '2020-03-18', 'FN', 'Fever', 'Praveena V', 1, 0, 1),
(139, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-18', 'FN', '2020-03-19', 'FN', 'Fever', 'Moorthy', 1, 0, 1),
(140, '10709', 'V. PRASATH KUMAR', 'information_technology', '', 'Casual Leave', 1, '2020-03-18', 'FN', '2020-03-19', 'FN', 'Fever', 'Moorthy', 1, 0, 1),
(141, '', '', '', '', '', 0, '2020-06-01', 'undef', '2020-06-01', 'am', 'undefined', 'Nill', 0, 0, 0),
(142, '', '', '', '', '', 0, '2020-06-01', 'undef', '2020-06-01', 'am', 'undefined', 'Nill', 0, 0, 0),
(143, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(144, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(145, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(146, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(147, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(148, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(149, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(150, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0),
(151, '', '', '', '', '', 0, '0000-00-00', 'undef', '0000-00-00', 'am', 'undefined', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(40) NOT NULL,
  `no_of_emp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`dept_id`, `dept_name`, `no_of_emp`) VALUES
(1, 'aeronautical', 0),
(2, 'agriculture', 0),
(3, 'automobile', 0),
(4, 'bio_medical', 0),
(5, 'bio_technology', 0),
(6, 'cdc_non_tech', 0),
(7, 'cdc_tech', 0),
(8, 'chemistry', 0),
(9, 'civil', 0),
(10, 'cse', 0),
(11, 'ece', 0),
(12, 'eee', 0),
(13, 'food_tech', 0),
(14, 'information_technology', 0),
(15, 'management', 0),
(16, 'mechanical', 0),
(17, 'physics', 0),
(18, 'physical', 0),
(19, 'transport', 0),
(20, 'canteen', 0),
(21, 'library', 0),
(22, 'cleaning', 0),
(23, 'hostel', 0),
(24, 'english', 0),
(25, 'maths', 0),
(0, 'Jartan', 0),
(0, 'Jartan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) NOT NULL,
  `sender` int(10) NOT NULL,
  `receiver` int(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `sender`, `receiver`, `message`) VALUES
(103, 10340, 10709, 'Your Application  with ID-138 is successfully Approved'),
(104, 10340, 10709, 'Your Application  with ID-137 is successfully Approved'),
(105, 10340, 10709, 'Your Application  with ID-137 is successfully Approved'),
(106, 10709, 10701, ' from information_technologyDepartment has been requested leave for  Days'),
(108, 10340, 10709, 'Your Application  with ID-139 is successfully Approved'),
(109, 10709, 10701, 'V. PRASATH KUMAR from information_technologyDepartment has been requested leave for  Days'),
(111, 10340, 10709, 'Your Application  with ID-140 is successfully Approved'),
(112, 10709, 10701, 'V. PRASATH KUMAR from INFORMATION_TECHNOLOGY Department has been requested leave for  Days');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `p_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `journal_conference` varchar(15) NOT NULL,
  `national_international` varchar(15) NOT NULL,
  `publication_in` varchar(40) NOT NULL,
  `author_name` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `name_of_journal` varchar(40) NOT NULL,
  `volume` int(11) NOT NULL,
  `edition` varchar(40) NOT NULL,
  `pages` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `impact_portion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`p_id`, `emp_id`, `journal_conference`, `national_international`, `publication_in`, `author_name`, `title`, `name_of_journal`, `volume`, `edition`, `pages`, `year`, `impact_portion`) VALUES
(1, 10709, 'Journal', 'National', 'Scopus', 'hret', 'th', 'het', 3, 'erh', 2, 2020, '2');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `q_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `specialiazion` varchar(40) NOT NULL,
  `mark` varchar(40) NOT NULL,
  `course_type` varchar(40) NOT NULL,
  `class_passed` varchar(40) NOT NULL,
  `authority_name` varchar(40) NOT NULL,
  `duration` varchar(40) NOT NULL,
  `year_passed` int(4) NOT NULL,
  `certificate_no` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `whapplications`
--

CREATE TABLE `whapplications` (
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `leaveapplications`
--
ALTER TABLE `leaveapplications`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `leaveapplications`
--
ALTER TABLE `leaveapplications`
  MODIFY `leave_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
