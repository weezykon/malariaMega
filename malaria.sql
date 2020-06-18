-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2020 at 02:47 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `m_d_id` int(11) NOT NULL,
  `m_d_email` varchar(50) NOT NULL,
  `m_d_password` varchar(200) NOT NULL,
  `m_d_firstname` varchar(50) NOT NULL,
  `m_d_lastname` varchar(50) NOT NULL,
  `m_d_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`m_d_id`, `m_d_email`, `m_d_password`, `m_d_firstname`, `m_d_lastname`, `m_d_date`) VALUES
(2, 'doctor@gmail.com', '55c3b5386c486feb662a0785f340938f518d547f', 'Doctor', 'One', '2020-06-15 13:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `m_dg_id` int(11) NOT NULL,
  `m_dg_name` text NOT NULL,
  `m_dg_active` tinyint(4) NOT NULL DEFAULT '1',
  `m_dg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`m_dg_id`, `m_dg_name`, `m_dg_active`, `m_dg_date`) VALUES
(1, 'Medicine 1', 1, '2020-06-15 14:23:21'),
(2, 'Medicine 2', 1, '2020-06-15 14:24:13'),
(3, 'Medicine 3', 0, '2020-06-15 14:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `m_p_id` int(11) NOT NULL,
  `m_p_firstname` varchar(50) NOT NULL,
  `m_p_lastname` varchar(50) NOT NULL,
  `m_p_email` varchar(50) NOT NULL,
  `m_p_password` varchar(200) NOT NULL,
  `m_p_phone` double DEFAULT NULL,
  `m_p_gender` varchar(10) NOT NULL,
  `m_p_age` double DEFAULT NULL,
  `m_p_active` tinyint(4) NOT NULL DEFAULT '1',
  `m_p_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`m_p_id`, `m_p_firstname`, `m_p_lastname`, `m_p_email`, `m_p_password`, `m_p_phone`, `m_p_gender`, `m_p_age`, `m_p_active`, `m_p_date`) VALUES
(1, 'Akinbode', 'Akinlolu', 'weezykon@gmail.com', '55c3b5386c486feb662a0785f340938f518d547f', NULL, 'Male', 99, 1, '2020-06-15 13:25:04'),
(2, 'Test', 'One', 'testone@gmail.com', '55c3b5386c486feb662a0785f340938f518d547f', NULL, 'Male', 25, 1, '2020-06-15 13:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `m_t_id` int(11) NOT NULL,
  `m_t_doctor` int(11) NOT NULL,
  `m_t_patient` int(11) NOT NULL,
  `m_t_fever` enum('low','mid','high') NOT NULL,
  `m_t_headache` enum('low','mid','high') NOT NULL,
  `m_t_nausea` enum('low','mid','high') NOT NULL,
  `m_t_vomitting` enum('low','mid','high') NOT NULL,
  `m_t_weakness` enum('low','mid','high') NOT NULL,
  `m_t_dizzyness` enum('low','mid','high') NOT NULL,
  `m_t_pain` enum('low','mid','high') NOT NULL,
  `m_t_appetite` enum('low','mid','high') NOT NULL,
  `m_t_malaria` tinyint(1) NOT NULL DEFAULT '0',
  `m_t_result` text NOT NULL,
  `m_t_drugs` text NOT NULL,
  `m_t_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`m_t_id`, `m_t_doctor`, `m_t_patient`, `m_t_fever`, `m_t_headache`, `m_t_nausea`, `m_t_vomitting`, `m_t_weakness`, `m_t_dizzyness`, `m_t_pain`, `m_t_appetite`, `m_t_malaria`, `m_t_result`, `m_t_drugs`, `m_t_date`) VALUES
(1, 2, 1, 'mid', 'low', 'low', 'low', 'low', 'low', 'low', 'low', 1, 'Malaria is Low', 'Medicine 1 Medicine 2', '2020-06-15 17:42:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`m_d_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`m_dg_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`m_p_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`m_t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `m_d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `m_dg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `m_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `m_t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
