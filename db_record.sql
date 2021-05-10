-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2021 at 01:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `ID` int(11) NOT NULL,
  `userlevel` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `action` varchar(200) NOT NULL,
  `dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`ID`, `userlevel`, `username`, `action`, `dt`) VALUES
(291, 'Admin', 'Lando', ' logged out.', '2021-04-21 15:25:59'),
(292, 'Admin', 'Lando', ' has logged in.', '2021-04-21 15:26:04'),
(293, 'Admin', 'Lando', ' logged out.', '2021-04-21 15:34:28'),
(294, 'Admin', 'Lando', ' has logged in.', '2021-04-21 15:35:47'),
(295, 'Admin', 'Lando', ' logged out.', '2021-04-21 15:35:51'),
(296, 'Admin', 'Lando', ' has logged in.', '2021-04-21 17:09:04'),
(297, 'Admin', 'Lando', ' logged out.', '2021-04-21 17:15:39'),
(298, 'Admin', 'Lando', ' has logged in.', '2021-05-03 10:14:28'),
(299, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:10:31'),
(300, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:11:02'),
(301, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:11:35'),
(302, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:12:20'),
(303, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:12:31'),
(304, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:12:38'),
(305, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:12:44'),
(306, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:13:51'),
(307, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:22:37'),
(308, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:23:30'),
(309, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:32:47'),
(310, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:50:49'),
(311, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:51:21'),
(312, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 16:52:07'),
(313, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 17:01:22'),
(314, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 17:01:48'),
(315, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 17:05:28'),
(316, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 17:16:46'),
(317, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 17:17:25'),
(318, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 17:18:24'),
(319, 'Admin', 'Lando', ' added a patient.', '2021-05-03 18:02:57'),
(320, 'Admin', 'Lando', ' deleted a patient information.', '2021-05-03 18:04:19'),
(321, 'Admin', 'Lando', ' deleted a patient information.', '2021-05-03 18:04:19'),
(322, 'Admin', 'Lando', ' deleted a patient information.', '2021-05-03 18:06:53'),
(323, 'Admin', 'Lando', ' added a patient.', '2021-05-03 18:08:01'),
(324, 'Admin', 'Lando', ' deleted a patient information.', '2021-05-03 18:08:11'),
(325, 'Admin', 'Lando', ' added a patient.', '2021-05-03 18:09:01'),
(326, 'Admin', 'Lando', ' updated a patient information.', '2021-05-03 18:33:29'),
(327, 'Admin', 'Lando', ' logged out.', '2021-05-03 18:33:39'),
(328, 'Admin', 'Lando', ' has logged in.', '2021-05-03 18:49:21'),
(329, 'Admin', 'Lando', ' logged out.', '2021-05-03 18:51:10'),
(330, 'Admin', 'Lando', ' has logged in.', '2021-05-03 18:55:00'),
(331, 'Admin', 'Lando', ' logged out.', '2021-05-03 19:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicine`
--

CREATE TABLE `tblmedicine` (
  `ID` int(11) NOT NULL,
  `brandname` varchar(200) NOT NULL,
  `genericname` varchar(1000) NOT NULL,
  `dosage` varchar(200) NOT NULL,
  `expiration_date` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicine`
--

INSERT INTO `tblmedicine` (`ID`, `brandname`, `genericname`, `dosage`, `expiration_date`, `description`, `quantity`, `dt`) VALUES
(45, 'BIOFLU', 'PARACETAMOL PHENYLEPHRINE HCI', '650MG', 'DECEMBER 2030', 'ASKHGFJFN', '81', '2019/04/03 02:13:06pm'),
(46, 'REXIDOL', 'UNILAB', '500MG', 'SEPTEMBER 2019', 'SFSDFD', '89', '2019/04/03 02:12:05pm'),
(47, 'BIOGESIC', 'TYLENOL', '650MG', 'JANUARY 2020', 'YFGDSJ', '9', '2019/04/05 05:20:00pm'),
(52, 'DIATABS', 'LOPERAMIDE', '500MG', 'FEBRUARY 2021', 'HFGJAS', '0', '2019/04/03 02:10:52pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(11) NOT NULL,
  `studno` varchar(5000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `age` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `classification` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `year` varchar(200) NOT NULL,
  `dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatients`
--

CREATE TABLE `tblpatients` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `martialstatus` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contactnum` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `placeofbirth` varchar(250) NOT NULL,
  `namewatcher` varchar(250) NOT NULL,
  `watchercontact` varchar(250) NOT NULL,
  `ralationwatcher` varchar(434) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpatients`
--

INSERT INTO `tblpatients` (`ID`, `name`, `sex`, `dateofbirth`, `religion`, `martialstatus`, `address`, `contactnum`, `age`, `placeofbirth`, `namewatcher`, `watchercontact`, `ralationwatcher`, `dt`) VALUES
(10, 'PATRICK', 'MALE', 'AUGUST 24, 1999', 'ROMAN CATHOLIC', 'SINGLE', 'ANOLID MANGALDAN, PANGASINAN', '09123456789', 21, 'MANGALDAN', 'RICKY', '09111111111', 'FATHER', '2021-01-17 06:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblsocial`
--

CREATE TABLE `tblsocial` (
  `ID` int(100) NOT NULL,
  `idnumber` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `age` int(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `civil` varchar(40) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `housenumber` int(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `educattain` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `timedate` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsocial`
--

INSERT INTO `tblsocial` (`ID`, `idnumber`, `lastname`, `firstname`, `middlename`, `age`, `gender`, `civil`, `birthdate`, `birthplace`, `religion`, `housenumber`, `contact`, `email`, `occupation`, `educattain`, `status`, `timedate`) VALUES
(10, '1', 'bagang', 'patrick', 'Louis', 21, 'MALE', 'Single', 'august 24, 1999', 'pampanga', 'pampanga', 318, '09123456789', 'pjbgng.24@gmail.com', 'none', 'HIGH SCHOOL GRADUATE', '4PS', '2021-05-03 18:09:01'),
(11, '1', 'bagang', 'patrick', 'Louis', 21, 'MALE', 'Married', 'august 24, 1999', 'pampanga', 'pampanga', 318, '09123456789', 'pjbgng.24@gmail.com', 'none', 'ELEMENTARY', '4PS', '2021-05-03 18:26:11'),
(12, '1', 'bagang', 'patrick', 'Louis', 21, 'MALE', 'Widow', 'august 24, 1999', 'pampanga', 'pampanga', 318, '09123456789', 'pjbgng.24@gmail.com', 'none', 'ELEMENTARY', '4PS', '2021-05-03 18:26:41'),
(13, '1', 'bagang', 'patrickk', 'Louis', 21, 'MALE', 'Single', 'august 24, 1999', 'pampanga', 'pampanga', 318, '09123456789', 'pjbgng.24@gmail.com', 'none', 'ELEMENTARY', '4PS', '2021-05-03 18:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblsupply`
--

CREATE TABLE `tblsupply` (
  `ID` int(11) NOT NULL,
  `brandname` varchar(500) NOT NULL,
  `genericname` varchar(500) NOT NULL,
  `expiration_date` varchar(500) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `dt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupply`
--

INSERT INTO `tblsupply` (`ID`, `brandname`, `genericname`, `expiration_date`, `quantity`, `description`, `dt`) VALUES
(8, 'ELASTIC BANDAGE', 'FSDFSDF', 'JANUARY 2023', '10', 'DFDSFDSFSDF', 2019),
(9, 'BAND-AID', 'SDFD', 'SEPTEMBER 2019', '11', 'FDDSFDSFDSSDSFDSFDDFS\r\n', 2019),
(10, 'PACKS COTTON BALLS', 'AFDF', 'SEPT 2019', '10', 'ADAA   SDFDSFDSFDD', 2019),
(13, 'WHITE FLOWER', 'JSDBKD', 'FEBRUARY 2021', '3', 'JSDHDSADAS', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userlevel` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `username`, `password`, `userlevel`, `lastname`, `firstname`, `contact`) VALUES
(16, 'Lando', '1234', 'Admin', 'Pimentel', 'Andrei', '09274270750'),
(18, 'Patrick', '1234', 'Brgy. Heatlh Worker', 'Bagang', 'Patrick', '0922222222');

-- --------------------------------------------------------

--
-- Table structure for table `tblvitals`
--

CREATE TABLE `tblvitals` (
  `ID` int(11) NOT NULL,
  `studno` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `blood` varchar(500) NOT NULL,
  `pulse` varchar(500) NOT NULL,
  `respiration` varchar(500) NOT NULL,
  `temperature` varchar(500) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `medname` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `month` varchar(200) NOT NULL,
  `classification` varchar(200) NOT NULL,
  `dt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvitals`
--

INSERT INTO `tblvitals` (`ID`, `studno`, `name`, `blood`, `pulse`, `respiration`, `temperature`, `complaint`, `medname`, `quantity`, `month`, `classification`, `dt`) VALUES
(1, '789562', 'JOSE RIZAL', '120/80', '50', '25', '37', 'JSFHKJDDSFHSFHd', 'BAND-AID', '1', 'March', 'TEACHING', '2019/03/31 Mar 04:08:18pm'),
(6, '9864510654', 'ALIYAH DRES', '120/80', '80', '85', '37', ';DFMKDSMF', 'MEDICOL', '1', 'April', 'STUDENT', '2019/04/01 Apr 07:48:17pm'),
(7, '9864510654', 'ALIYAH DRES', '120/70', '90', '89', '37', 'LDFKD', 'BIOGESIC', '1', 'April', 'STUDENT', '2019/04/06 Apr 06:21:31pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmedicine`
--
ALTER TABLE `tblmedicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatients`
--
ALTER TABLE `tblpatients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsocial`
--
ALTER TABLE `tblsocial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsupply`
--
ALTER TABLE `tblsupply`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvitals`
--
ALTER TABLE `tblvitals`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `tblmedicine`
--
ALTER TABLE `tblmedicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tblpatients`
--
ALTER TABLE `tblpatients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblsocial`
--
ALTER TABLE `tblsocial`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblsupply`
--
ALTER TABLE `tblsupply`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblvitals`
--
ALTER TABLE `tblvitals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
