-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 11:11 AM
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
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Name`, `Address`, `Mobile`, `NIC`, `Email`, `Password`) VALUES
(12, 'Sanuji', 'Negombo', 312299739, '123456789065', 'abc@gmail.com', '123456'),
(18, 'abc', '8', 728492190, '123456789012', 'dd1@gmail.com', '123456'),
(19, 'fgrf ', 'a', 712345678, '234678901211', 'ddh@gmail.com', '123456'),
(22, 'Jayani  ', 'f', 761390745, '123456789012', 'abc@gmail.com', '1234567'),
(26, 'Sanuji', 'f', 713445678, '208394729212', 'sanujisandanima@gmail.com', '123456'),
(30, 'abc', 'gn', 712345678, '208394729212', 'xyz@email.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `carMake` varchar(30) NOT NULL,
  `carModel` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `fuelType` varchar(10) NOT NULL,
  `transmission` varchar(10) NOT NULL,
  `vehicleImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `carMake`, `carModel`, `price`, `fuelType`, `transmission`, `vehicleImage`) VALUES
(1, 'Toyota', 'Vezel', 12, 'Petrol', 'Auto', 'premio.jpeg'),
(2, 'Honda', 'Vezel', 2, 'Petrol', 'Auto', 'vezel.jpeg'),
(3, 'Susuki', 'Alto', 2, 'Petrol', 'Manual', 'susuki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
