-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 01:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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

CREATE TABLE `commenting` (
  `comment_id` int(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reply` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Receit_Value` int(250) NOT NULL,
  `EmpCount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `Name`, `Receit_Value`, `EmpCount`) VALUES
(1, 'abbas ebn fernas', 10, 100),
(6, 'OST', 0, 20),
(8, 'WHO', 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filling`
--

CREATE TABLE `filling` (
  `ID` int(255) NOT NULL,
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
  `CompanyID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filling`
--

INSERT INTO `filling` (`ID`, `FirstName`, `LastName`, `age`, `Email`, `phoneno`, `gender`, `address`, `appointmenttype`, `pasthistory`, `smoking`, `investigation`, `pastmedicaltt`, `tempreature`, `BP`, `RR`, `SpO2`, `pulse`, `inspection`, `palpation`, `percussion`, `auscultation`, `medicalttt`, `diagnosis`, `improvement`, `noofcigarettes`, `duration`, `others`, `otherdoc`, `Xray`, `Supported`, `UserID`, `MedicalID`, `CompanyID`) VALUES
(1, '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0, 18, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicalttt`
--

CREATE TABLE `medicalttt` (
  `ID` int(255) NOT NULL,
  `treatname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NID` int(100) NOT NULL,
  `Writing` text NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NID`, `Writing`, `Title`) VALUES
(78, 'Due to current pandemic we decided close the clinic for a week starting from tomorrow.', 'Announcement from Dr.Hisham.'),
(79, 'All nurses must wear hand gloves and face masks at all time during working hours for a better hygiene.', 'Important instructions for nurses.'),
(80, 'Companies supporting our clinic has increased by 21 company in a year, providing us with necessary equipment for surgery.  ', 'Company Statistics Report.');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `qa_id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `qa_manage` (
  `qa_manage_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `qa_id` int(11) NOT NULL
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

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `datapp` date NOT NULL,
  `timemoh` varchar(255) NOT NULL,
  `PhoneNum` double NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `mess` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `usersid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phoneno` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `TypeID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `status`, `FirstName`, `LastName`, `Email`, `Password`, `Phoneno`, `DOB`, `gender`, `TypeID`) VALUES
(18, 'Approved', 'Ahmed', 'Mostafa', 'Ahmad@yahoo.com', 'ahmad1!111A', '01016262177', '2020-05-19', '0', 3),
(19, 'Approved', 'ahmed', 'hisham', 'mil@hotmail.com', 'Gamil123', '54656546', '1998-10-11', '0', 1),
(21, 'pending', 'H', 'hisham', 'mil@gmail.com', 'Gghrt123', '0213213', '0416-05-06', '0', 1),
(22, 'Aproved', 'mohamed', 'mahmoud', 'mohamed@gmail.com', '8ff6ead570c5e56b42fb1e927036bc5346d749f5', '3165416611', '2020-05-18', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commenting`
--
ALTER TABLE `commenting`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `filling`
--
ALTER TABLE `filling`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `MedicalID` (`MedicalID`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Indexes for table `medicalttt`
--
ALTER TABLE `medicalttt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`qa_id`);

--
-- Indexes for table `qa_manage`
--
ALTER TABLE `qa_manage`
  ADD PRIMARY KEY (`qa_manage_id`),
  ADD KEY `qa_id` (`qa_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `usersid` (`usersid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commenting`
--
ALTER TABLE `commenting`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filling`
--
ALTER TABLE `filling`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicalttt`
--
ALTER TABLE `medicalttt`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
