-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 05:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodstreamdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(10) NOT NULL,
  `donorID` int(10) NOT NULL,
  `hospitalID` int(10) NOT NULL,
  `donoCnt` varchar(255) NOT NULL,
  `apmtDate` date NOT NULL,
  `apmtTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `donorID`, `hospitalID`, `donoCnt`, `apmtDate`, `apmtTime`) VALUES
(12, 0, 0, 'Hospital Test', '2024-05-01', '01:33:00.000000'),
(16, 0, 0, 'Hospital Test', '2024-04-14', '16:18:00.000000'),
(17, 0, 0, 'Test Hospital', '2024-04-25', '12:22:00.000000'),
(18, 0, 0, 'hosdemo', '2024-05-01', '18:31:00.000000'),
(19, 0, 0, 'Hospital Test', '2024-04-27', '17:47:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donorID` int(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `bloodType` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `otherBloodType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorID`, `dateOfBirth`, `city`, `bloodType`, `gender`, `userID`, `otherBloodType`) VALUES
(1, '2001-01-02', 'citytest', 'AB+', 'Male', 2, '-'),
(2, '2011-01-20', 'None of your business', 'O+', 'Male', 6, '-'),
(3, '2024-04-15', 'demo city', '-', 'Male', 7, 'ABC'),
(4, '2019-01-26', 'city', '-', 'Male', 9, 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospitalID` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `regNum` varchar(255) NOT NULL,
  `opStat` varchar(255) NOT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospitalID`, `state`, `regNum`, `opStat`, `userID`) VALUES
(1, 'Selangor', '382084-X', 'Public', 3),
(2, 'Perak', '109238-SD', 'Private', 4),
(3, 'Selangor', '821*04-SE', 'Mix', 5),
(4, 'Selangor', 'HOS123f', 'Mix', 8),
(5, 'Selangor', 'abc987', 'Private', 10);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryID` int(10) NOT NULL,
  `bloodType` varchar(3) NOT NULL,
  `rhFactor` char(1) NOT NULL,
  `bloodComp` varchar(255) NOT NULL,
  `volume` double NOT NULL,
  `quantity` int(10) NOT NULL,
  `expDate` date NOT NULL,
  `hospitalID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestID` int(10) NOT NULL,
  `bloodType` varchar(3) NOT NULL,
  `rhFactor` char(1) NOT NULL,
  `bloodComp` varchar(255) NOT NULL,
  `volume` double NOT NULL,
  `quantity` int(10) NOT NULL,
  `urgencyLvl` varchar(255) NOT NULL,
  `requestDate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `hospitalID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `password`, `fullname`, `address`, `phoneNumber`, `userType`) VALUES
(1, 'testemail@email.com', 'testpassword', 'Test name', 'test address', 123234569, 'Donor'),
(2, 'fakeemail2@email.com', 'faker', 'fakename', 'definitely a fake address', 194853484, 'Donor'),
(3, 'testhospital1@email.com', 'testhospitalpw', 'Test Hospital', 'test, testadd', 128394756, 'Hospital'),
(4, 'testhospital2@email.com', 'testhospital2', 'Hospital Test', 'test2 address', 138497548, 'Hospital'),
(7, 'emaildemo@email.com', 'emaildemo', 'name demo', 'address demo', 128479830, 'Donor'),
(8, 'hosdemo@email.com', 'hosdemo', 'hosdemo', 'hosadd', 128474901, 'Hospital'),
(9, 'email2@email.com', 'email2', 'name2', 'address2', 123848038, 'Donor'),
(10, 'hospital@email.com', 'hospital', 'hospital', 'hospital', 148479382, 'Hospital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospitalID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospitalID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
