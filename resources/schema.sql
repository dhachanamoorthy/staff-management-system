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
-- Database: `staff-management-system`
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
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(40) NOT NULL,
  `no_of_emp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

