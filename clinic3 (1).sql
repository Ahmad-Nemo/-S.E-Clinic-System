-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2020 at 08:06 PM
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
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
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
  `UserID` int(11) NOT NULL,
  `MedicalID` int(11) NOT NULL,
  `CompanyID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`),
  KEY `MedicalID` (`MedicalID`),
  KEY `CompanyID` (`CompanyID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicalttt`
--

DROP TABLE IF EXISTS `medicalttt`;
CREATE TABLE IF NOT EXISTS `medicalttt` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `treatname` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

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
(9, 'fdgdfg'),
(10, 'Antinal');

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
(10, 'pending', 'ahmed', 'hisham', 'agjh@kjhla.com', 'AAaa123878', '54656546', '1998-02-06', 'male', 1),
(12, 'Approved', '', '', 'asd', 'asd', '', '0000-00-00', '', 3),
(18, 'Approved', 'ahmed', 'hisham', 'agjh@kjhla.com', 'Gamil123', '54656546', '1998-02-06', 'male', 1),
(19, 'Approved', 'ahmed', 'hisham', 'mil@hotmail.com', 'Gamil123', '54656546', '1998-10-11', 'male', 1),
(20, 'approve', 'Heba', 'hisham', 'mil@gmail.com', 'Gamil456', '54656546', '1997-02-03', 'female', 1),
(21, 'pending', 'H', 'hisham', 'mil@gmail.com', 'Gghrt123', '0213213', '0416-05-06', 'female', 1),
(22, 'Aproved', 'mohamed', 'mahmoud', 'mohamed@gmail.com', '8ff6ead570c5e56b42fb1e927036bc5346d749f5', '3165416611', '2020-05-18', 'male', 1),
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
-- Constraints for table `filling`
--
ALTER TABLE `filling`
  ADD CONSTRAINT `filling_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `filling_ibfk_2` FOREIGN KEY (`MedicalID`) REFERENCES `medicalttt` (`ID`),
  ADD CONSTRAINT `filling_ibfk_3` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`ID`);

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
