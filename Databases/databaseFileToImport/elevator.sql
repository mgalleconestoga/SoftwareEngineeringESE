-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2023 at 10:50 AM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevator`
--

-- --------------------------------------------------------

--
-- Table structure for table `CAN_subNetwork`
--

CREATE TABLE `CAN_subNetwork` (
  `CAN_nodeID` int UNSIGNED NOT NULL,
  `CAN_status` tinyint NOT NULL,
  `CAN_currentFloor` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `elevatorNetwork`
--

CREATE TABLE `elevatorNetwork` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `nodeID` int UNSIGNED NOT NULL,
  `status` tinyint NOT NULL,
  `currentFloor` tinyint NOT NULL,
  `requestedFloor` tinyint NOT NULL,
  `otherInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `elevatorNetwork`
--

INSERT INTO `elevatorNetwork` (`date`, `time`, `nodeID`, `status`, `currentFloor`, `requestedFloor`, `otherInfo`) VALUES
('2026-01-20', '24:02:20', 1, 1, 1, 1, 'na'),
('2027-01-23', '23:02:20', 2, 1, 1, 1, 'na'),
('2024-05-12', '12:05:18', 4, 1, 1, 1, 'na'),
('2025-05-11', '11:04:18', 5, 1, 1, 1, 'na'),
('2021-03-01', '10:04:18', 6, 1, 1, 1, 'na'),
('2020-03-01', '10:03:18', 7, 1, 1, 1, 'na'),
('2020-02-01', '09:03:18', 8, 1, 1, 1, 'na'),
('2022-04-01', '08:03:18', 9, 1, 1, 1, 'na'),
('2026-01-02', '11:11:01', 16, 1, 1, 2, 'hi there you'),
('2023-06-13', '14:27:24', 17, 1, 1, 2, 'hi there you'),
('2023-06-13', '14:27:26', 18, 1, 1, 2, 'hi there you'),
('2023-06-13', '14:27:28', 19, 1, 1, 2, 'hi there you'),
('2023-06-13', '14:27:31', 20, 1, 1, 2, 'hi there you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CAN_subNetwork`
--
ALTER TABLE `CAN_subNetwork`
  ADD KEY `CAN_nodeID` (`CAN_nodeID`);

--
-- Indexes for table `elevatorNetwork`
--
ALTER TABLE `elevatorNetwork`
  ADD PRIMARY KEY (`nodeID`),
  ADD UNIQUE KEY `time` (`time`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elevatorNetwork`
--
ALTER TABLE `elevatorNetwork`
  MODIFY `nodeID` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CAN_subNetwork`
--
ALTER TABLE `CAN_subNetwork`
  ADD CONSTRAINT `CAN_subNetwork_ibfk_1` FOREIGN KEY (`CAN_nodeID`) REFERENCES `elevatorNetwork` (`nodeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
