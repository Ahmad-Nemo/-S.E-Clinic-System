-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2020 at 02:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic3`
--

-- --------------------------------------------------------

--
-- Table structure for table `commenting`
--

DROP TABLE IF EXISTS `commenting`;
CREATE TABLE IF NOT EXISTS `commenting` (
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reply` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Receit_Value` int(250) NOT NULL,
  `EmpCount` int(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `Name`, `Receit_Value`, `EmpCount`) VALUES
(1, '', 100, 10),
(6, 'OST', 100, 500),
(7, 'OST', 100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filling`
--

DROP TABLE IF EXISTS `filling`;
CREATE TABLE IF NOT EXISTS `filling` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `appointmenttype` varchar(255) NOT NULL,
  `pasthistory` varchar(255) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `investigation` varchar(255) NOT NULL,
  `pastmedicaltt` varchar(255) NOT NULL,
  `tempreature` int(255) NOT NULL,
  `BP` int(255) NOT NULL,
  `RR` int(255) NOT NULL,
  `SpO2` int(255) NOT NULL,
  `pulse` int(255) NOT NULL,
  `inspection` varchar(255) NOT NULL,
  `palpation` varchar(255) NOT NULL,
  `percussion` varchar(255) NOT NULL,
  `auscultation` varchar(255) NOT NULL,
  `medicalttt` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `improvement` varchar(255) NOT NULL,
  `noofcigarettes` int(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `otherdoc` varchar(255) NOT NULL,
  `Xray` varchar(255) NOT NULL,
  `Supported` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filling`
--

INSERT INTO `filling` (`ID`, `FirstName`, `LastName`, `age`, `Email`, `phoneno`, `gender`, `address`, `appointmenttype`, `pasthistory`, `smoking`, `investigation`, `pastmedicaltt`, `tempreature`, `BP`, `RR`, `SpO2`, `pulse`, `inspection`, `palpation`, `percussion`, `auscultation`, `medicalttt`, `diagnosis`, `improvement`, `noofcigarettes`, `duration`, `others`, `otherdoc`, `Xray`, `Supported`) VALUES
(1, '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', 'uploads/5eaf435c4954e2.60795385.png', 0),
(2, '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', 'uploads/5eaf4490571792.08471600.png', 0),
(3, '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', 'uploads/5eaf449ce90334.28372586.png', 0),
(5, '', '', 0, '', 0, 'male', '', '', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', 'uploads/5eaf45323a9eb5.42056245.png', 0),
(6, '', '', 0, '', 0, 'male', '', '', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', 'uploads/5eaf45578f9928.46321952.png', 0),
(7, '', '', 0, '', 0, 'male', '', '', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', '', 0),
(8, 'helllooooooooooooo', 'heloooooooooooooo', 0, 'asd', 0, 'male', '', '', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', '', 0),
(9, 'sad', 'asd', 0, 'gfd', 0, 'male', 'gf', '', 'gfd', 'Smoker', 'gf', 'treatasd', 0, 0, 0, 0, 0, 'gfd', 'gf', 'gf', 'gf', 'treatasd', 'gfd', '', 0, 'gfd', 'ghjfhg', '', 'uploads/5eaf4923aac6a5.88381826.png', 0),
(10, 'sad', 'asd', 0, 'gfd', 0, 'male', 'gf', 'Appointment', 'gfd', 'Smoker', 'gf', 'treatasd', 0, 0, 0, 0, 0, 'gfd', 'gf', 'gf', ' gf', 'treatasd', 'gfd', '', 0, 'gfd', 'ghjfhg', '', 'uploads/5eaf49b4228925.23956602.png', 0),
(11, 'ad', 'asda', 0, 'ads', 0, 'male', '', 'Appointment', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', '', 0),
(12, 'ad', 'asd', 0, 'asd', 0, 'male', '', 'Consultation', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', 'others/5eaf546e4c63b1.78906115.jpg', 'uploads/5eaf546e4c7628.94516762.png', 0),
(13, 'asd', 'asdasd', 0, '', 0, 'male', '', 'Consultation', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', 'others/5eaf5475147a75.41733974.', '', 0),
(14, 'asd', 'asdasd', 0, '', 0, 'male', '', 'Consultation', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', 'others/5eaf5577998fc4.51578192.', '0', 0),
(15, '', '', 0, '', 0, 'male', '', 'Consultation', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', 'others/5eaf5579a7df97.37368308.', '0', 0),
(16, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(17, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(18, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(19, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(20, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(21, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(22, '', '', 0, '', 0, 'male', '', 'Appointment', '', 'Smoker', '', 'antinal', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', 'a', '', '', 0),
(23, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(24, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(25, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(26, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(27, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(28, '', '', 0, '', 0, '', '', 'Appointment', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0),
(29, '', '', 0, '', 0, 'male', '', 'Appointment', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', '', 0),
(30, '', '', 0, '', 0, 'male', '', 'Appointment', '', 'Smoker', '', 'treatasd', 0, 0, 0, 0, 0, '', '', '', '', 'treatasd', '', '', 0, '', '', '', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicalttt`
--

DROP TABLE IF EXISTS `medicalttt`;
CREATE TABLE IF NOT EXISTS `medicalttt` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `treatname` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalttt`
--

INSERT INTO `medicalttt` (`ID`, `treatname`) VALUES
(1, 'treatasd'),
(2, 'hi'),
(3, 'hi'),
(5, 'asd'),
(6, 'asdasd'),
(7, 'hhi'),
(8, 'antinal'),
(9, 'fdgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

DROP TABLE IF EXISTS `qa`;
CREATE TABLE IF NOT EXISTS `qa` (
  `qa_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`qa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`qa_id`, `question`, `answer`) VALUES
(3, 'as', 'as'),
(26, 'ss', 'ss'),
(27, 'as', 'as'),
(40, 'new q', 'new a');

-- --------------------------------------------------------

--
-- Table structure for table `qa_manage`
--

DROP TABLE IF EXISTS `qa_manage`;
CREATE TABLE IF NOT EXISTS `qa_manage` (
  `qa_manage_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `qa_id` int(11) NOT NULL,
  PRIMARY KEY (`qa_manage_id`),
  KEY `qa_id` (`qa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qa_manage`
--

INSERT INTO `qa_manage` (`qa_manage_id`, `manager_id`, `qa_id`) VALUES
(0, 1976, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `datapp` date NOT NULL,
  `timemoh` varchar(255) NOT NULL,
  `PhoneNum` double NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `mess` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `usersid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `usersid` (`usersid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `Name`, `Email`, `datapp`, `timemoh`, `PhoneNum`, `Doctor`, `mess`, `company`, `usersid`) VALUES
(1, 'ay', 'ay', '2020-05-07', '', 90, 'ahmed', '90', 'mohamed', NULL),
(2, 'fghfgh', 'heba@jahks.com', '2020-05-22', '12:30am', 1111748662, 'ahmed', 'jk', 'OST', NULL),
(3, 'fghfgh', 'heba@jahks.com', '2020-05-15', '12:30am', 1111748662, 'ahmed', '', 'OST', NULL),
(4, 'ay', 'mohamed@gmail.com', '2020-05-29', '14:22', 12312312312, 'ahmed', '', 'OST', NULL),
(5, 'nmoghmds', 'wsadsad@gmail.com', '2020-05-28', '14:22', 5956562535275, 'ahmed', '2222', 'OST', NULL),
(6, 'zxczxc', 'wsadsad@gmail.com', '2020-05-23', '16:23', 123123123122, 'ahmed', 'asdasdas', 'OST', NULL),
(7, 'asdasdaqweg', 'wsadsad@gmail.com', '2020-05-21', '14:03', 12312312312, 'ahmed', 'serrwrf', 'OST', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phoneno` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `TypeID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `status`, `FirstName`, `LastName`, `Email`, `Password`, `Phoneno`, `DOB`, `gender`, `TypeID`) VALUES
(4, 'pending', 'ahmed', 'hisham', 'agjh@kjhla.com', 'add', '0122121231', '1998-10-12', 'male', 1),
(9, 'pending', 'ahmed', 'hisham', 'agjh@kjhla.com', 'AAaa123878', '54656546', '1998-02-06', 'male', 1),
(10, 'pending', 'ahmed', 'hisham', 'agjh@kjhla.com', 'AAaa123878', '54656546', '1998-02-06', 'male', 1),
(12, 'Approved', '', '', 'asd', 'asd', '', '0000-00-00', '', 3),
(18, 'Approved', 'ahmed', 'hisham', 'agjh@kjhla.com', 'Gamil123', '54656546', '1998-02-06', 'male', 1),
(19, 'Approved', 'ahmed', 'hisham', 'mil@hotmail.com', 'Gamil123', '54656546', '1998-10-11', 'male', 1),
(20, 'approve', 'Heba', 'hisham', 'mil@gmail.com', 'Gamil456', '54656546', '1997-02-03', 'female', 1),
(21, 'pending', 'H', 'hisham', 'mil@gmail.com', 'Gghrt123', '0213213', '0416-05-06', 'female', 1),
(22, 'aproved', 'mohamed', 'mahmoud', 'mohamed@gmail.com', '8ff6ead570c5e56b42fb1e927036bc5346d749f5', '3165416611', '2020-05-18', 'male', 1),
(23, 'aproved', 'mohamed', 'mahmoud', 'mohamed@gmail.com', '8ff6ead570c5e56b42fb1e927036bc5346d749f5', '3165416611', '2020-05-18', 'male', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commenting`
--
ALTER TABLE `commenting`
  ADD CONSTRAINT `commenting_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `qa_manage`
--
ALTER TABLE `qa_manage`
  ADD CONSTRAINT `qa_manage_ibfk_1` FOREIGN KEY (`qa_id`) REFERENCES `qa` (`qa_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
