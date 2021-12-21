-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2020 at 05:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PID` int(11) NOT NULL,
  `Pname` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PID`, `Pname`, `price`) VALUES
(1, 'gym', 500),
(2, 'spa', 1000),
(3, 'cafe', 800);

-- --------------------------------------------------------

--
-- Table structure for table `PackageRes`
--

CREATE TABLE `PackageRes` (
  `PID` int(11) NOT NULL,
  `ResId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PackageRes`
--

INSERT INTO `PackageRes` (`PID`, `ResId`) VALUES
(1, 1),
(3, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `CheckInDate` date NOT NULL,
  `CheckOutDate` date NOT NULL,
  `TotalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `uid`, `CheckInDate`, `CheckOutDate`, `TotalAmount`) VALUES
(1, 3, '2019-10-15', '2019-10-18', 10000),
(2, 2, '2019-10-15', '2019-10-16', 12000),
(3, 2, '2019-10-15', '2019-10-20', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomNo` char(6) NOT NULL,
  `typeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomNo`, `typeID`) VALUES
('RID001', 1),
('RID002', 1),
('RID003', 2),
('RID004', 1),
('RID005', 2),
('RID006', 2),
('RID007', 2);

-- --------------------------------------------------------

--
-- Table structure for table `RoomRes`
--

CREATE TABLE `RoomRes` (
  `RoomNo` char(6) NOT NULL,
  `ResId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `RoomRes`
--

INSERT INTO `RoomRes` (`RoomNo`, `ResId`) VALUES
('RID001', 1),
('RID002', 3),
('RID003', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`id`, `type`, `price`) VALUES
(1, 'dulaxe', 10000),
(3, 'double', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Type` char(1) DEFAULT 'U',
  `FullName` varchar(100) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `MobileNo` varchar(10) DEFAULT NULL,
  `CredicardNo` char(16) DEFAULT NULL,
  `CardPin` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Type`, `FullName`, `UserName`, `Email`, `Password`, `MobileNo`, `CredicardNo`, `CardPin`) VALUES
(1, 'A', NULL, 'admin', NULL, 'Admin@123', NULL, NULL, NULL),
(2, 'U', 'Shihara Dilshan', 'shihara', 'it19058092@my.sliit.lk', 'It19058092#', '0750935556', '1234123412341234', '0000'),
(3, 'U', 'Umesha Indeevari', 'umesha', 'it19066844@my.sliit.lk', 'It19066844#', '0771022324', '1234123412341234', '0000'),
(4, 'U', 'Shiharaaaaa dilshan', 'ghostzio', 'nimshan2223zio@gmail.com', 'classified23', '0813848908', '3456345634563456', '1234'),
(6, 'U', 'shihara dilshan', 'qwert', 'nimsh222an23zio@gmail.com', '12345', '1234432123', '5555666677778888', '3456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PackageRes`
--
ALTER TABLE `PackageRes`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomNo`);

--
-- Indexes for table `RoomRes`
--
ALTER TABLE `RoomRes`
  ADD PRIMARY KEY (`RoomNo`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
