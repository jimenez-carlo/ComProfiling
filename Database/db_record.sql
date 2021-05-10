-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2021 at 07:47 AM
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
(75, 'admin', '', ' logged out.', '2020-11-11 14:56:56'),
(76, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-11 14:57:00'),
(77, 'Nurse', 'adminjoshua', ' logged out.', '2020-11-11 14:57:39'),
(78, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-11 14:58:10'),
(79, 'Nurse', 'adminjoshua', ' logged out.', '2020-11-11 15:14:38'),
(80, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-11 15:17:54'),
(81, 'Nurse', 'adminjoshua', ' logged out.', '2020-11-11 15:20:23'),
(82, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-20 10:29:13'),
(83, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:19:07'),
(84, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:32:35'),
(85, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:34:39'),
(86, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:35:19'),
(87, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:39:31'),
(88, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:42:22'),
(89, 'Nurse', 'adminjoshua', ' logged out.', '2020-11-20 12:44:12'),
(90, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-20 12:44:27'),
(91, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:45:15'),
(92, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:46:29'),
(93, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:46:46'),
(94, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 12:47:34'),
(95, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:07:29'),
(96, 'Nurse', 'adminjoshua', ' logged out.', '2020-11-20 13:09:01'),
(97, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-20 13:09:08'),
(98, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:09:22'),
(99, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:09:35'),
(100, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:10:32'),
(101, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:10:47'),
(102, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:16:46'),
(103, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:26:45'),
(104, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:32:40'),
(105, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:35:52'),
(106, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:36:53'),
(107, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:40:32'),
(108, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:42:49'),
(109, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:50:40'),
(110, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 13:54:27'),
(111, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 14:03:07'),
(112, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 14:06:25'),
(113, 'Nurse', 'adminjoshua', ' added a patient.', '2020-11-20 14:09:43'),
(114, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-27 18:08:12'),
(115, 'Nurse', 'adminjoshua', ' logged out.', '2020-11-27 18:09:24'),
(116, 'Nurse', 'adminjoshua', ' has logged in.', '2020-11-27 18:10:15'),
(117, 'admin', '', ' logged out.', '2021-01-03 09:52:29'),
(118, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-03 09:52:50'),
(119, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 09:54:33'),
(120, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:46:28'),
(121, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:47:24'),
(122, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:47:59'),
(123, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:48:14'),
(124, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:53:29'),
(125, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:53:43'),
(126, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 10:54:35'),
(127, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:01:33'),
(128, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:08:33'),
(129, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:18:43'),
(130, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:19:47'),
(131, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:29:50'),
(132, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:30:15'),
(133, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:31:19'),
(134, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:31:42'),
(135, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:32:26'),
(136, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:33:19'),
(137, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 11:33:25'),
(138, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:03:29'),
(139, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:05:36'),
(140, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:15:30'),
(141, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:16:45'),
(142, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:17:58'),
(143, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:20:04'),
(144, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 12:20:36'),
(145, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-03 13:13:15'),
(152, 'Nurse', 'adminjoshua', ' updated a patient information.', '2021-01-06 10:09:03'),
(153, 'Nurse', 'adminjoshua', ' updated a patient information.', '2021-01-06 10:12:31'),
(154, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-06 10:31:55'),
(155, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-06 10:31:55'),
(156, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-06 10:31:59'),
(157, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-06 10:31:59'),
(158, 'Nurse', 'adminjoshua', ' added a user.', '2021-01-06 10:50:48'),
(159, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-06 10:53:19'),
(160, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-06 10:55:32'),
(161, 'Nurse', 'adminjoshua', ' updated a patient information.', '2021-01-06 11:02:27'),
(162, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 14:48:58'),
(169, 'university nurse', 'admin', ' logged out.', '2021-01-13 15:15:26'),
(170, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 15:15:32'),
(171, 'Nurse', 'adminjoshua', ' deleted a user.', '2021-01-13 15:15:57'),
(172, 'Nurse', 'adminjoshua', ' added a user.', '2021-01-13 15:16:33'),
(173, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 15:17:24'),
(174, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:17:28'),
(175, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:18:12'),
(176, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 15:18:17'),
(177, 'Nurse', 'adminjoshua', ' deleted a user.', '2021-01-13 15:18:36'),
(178, 'Nurse', 'adminjoshua', ' added a user.', '2021-01-13 15:18:57'),
(179, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 15:19:04'),
(180, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 15:19:09'),
(181, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 15:19:16'),
(182, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:19:21'),
(183, 'Nurse', 'admin', ' added a user.', '2021-01-13 15:22:43'),
(184, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:22:55'),
(185, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:23:05'),
(186, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:24:01'),
(187, 'Doctor', 'admin1', ' has logged in.', '2021-01-13 15:24:06'),
(188, 'Doctor', 'admin1', ' logged out.', '2021-01-13 15:24:12'),
(189, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 15:24:26'),
(190, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 15:25:40'),
(191, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:25:44'),
(192, 'Nurse', 'admin', ' updated user profile.', '2021-01-13 15:26:10'),
(193, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:26:13'),
(194, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:26:17'),
(195, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:28:59'),
(196, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:51:53'),
(197, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:52:00'),
(198, 'Nurse', 'admin', ' has logged in.', '2021-01-13 15:52:29'),
(199, 'Nurse', 'admin', ' added a patient.', '2021-01-13 15:54:06'),
(200, 'Nurse', 'admin', ' added a user.', '2021-01-13 15:55:13'),
(201, 'Nurse', 'admin', ' logged out.', '2021-01-13 15:55:36'),
(202, 'Nurse', 'peter', ' has logged in.', '2021-01-13 15:56:04'),
(203, 'Nurse', 'peter', ' updated user profile.', '2021-01-13 15:56:44'),
(204, 'Nurse', 'peter', ' logged out.', '2021-01-13 15:56:50'),
(205, 'Nurse', 'peter', ' has logged in.', '2021-01-13 15:56:54'),
(206, 'Nurse', 'peter', ' logged out.', '2021-01-13 15:57:20'),
(207, 'Nurse', 'peter', ' has logged in.', '2021-01-13 15:57:31'),
(208, 'Nurse', 'peter', ' logged out.', '2021-01-13 16:39:58'),
(209, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 18:29:13'),
(210, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 18:29:17'),
(211, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 18:29:25'),
(212, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 18:30:20'),
(213, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-13 18:30:36'),
(214, 'Nurse', 'adminjoshua', ' logged out.', '2021-01-13 18:34:41'),
(215, 'Nurse', 'adminjoshua', ' has logged in.', '2021-01-17 14:32:45'),
(216, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-17 14:33:49'),
(217, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-17 14:33:49'),
(218, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-17 14:33:49'),
(219, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-17 14:33:55'),
(220, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-17 14:33:55'),
(221, 'Nurse', 'adminjoshua', ' deleted a patient information.', '2021-01-17 14:33:59'),
(222, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-17 14:35:12'),
(223, 'Nurse', 'adminjoshua', ' added a patient.', '2021-01-17 14:36:06');

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
  `studno` varchar(10000) NOT NULL,
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

INSERT INTO `tblpatients` (`ID`, `studno`, `name`, `sex`, `dateofbirth`, `religion`, `martialstatus`, `address`, `contactnum`, `age`, `placeofbirth`, `namewatcher`, `watchercontact`, `ralationwatcher`, `dt`) VALUES
(10, '1', 'PATRICK', 'MALE', 'AUGUST 24, 1999', 'ROMAN CATHOLIC', 'SINGLE', 'ANOLID MANGALDAN, PANGASINAN', '09123456789', 21, 'MANGALDAN', 'RICKY', '09111111111', 'FATHER', '2021-01-17 06:35:12'),
(11, '2', 'MICHAEL', 'MALE', 'JANUARY 1, 1998', 'MUSLIM', 'MARRIED', 'BINMALEY', '09222222222', 22, 'PANGASINAN', 'PEDRO', '11222222222', 'SON', '2021-01-17 06:36:06');

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
(10, 'adminjoshua', 'adminjoshua', 'Nurse', 'Joshua', 'Patrick', '12312321321'),
(13, 'admin', 'adminpatrick', 'Nurse', 'bagang', 'patrick', '09123456789'),
(14, 'admin1', 'patrick', 'Doctor', 'Joshua', 'Patrick', '12345678888'),
(15, 'peter', 'admin', 'Nurse', 'peter', 'dela cruz', '12345678888');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

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
-- AUTO_INCREMENT for table `tblsupply`
--
ALTER TABLE `tblsupply`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblvitals`
--
ALTER TABLE `tblvitals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
