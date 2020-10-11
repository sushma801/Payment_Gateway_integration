-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 03:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `Name` varchar(500) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `pin` varchar(11) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`Name`, `card_no`, `month`, `year`, `cvv`, `pin`, `balance`) VALUES
('ANUPAMMA', '4200001211173000', 12, 2031, '117', '1975', 49.98),
('SHREYA SRIVASTAVA', '4201002210183400', 8, 2025, '118', '1999', 6958.78),
('ROHIT VERMA', '4201303044001171', 11, 2030, '030', '1994', 1467.9),
('VAISHNAVI GUPTA', '4202030300111180', 11, 2030, '202', '1995', 50468.87),
('SUMIT SINGH', '4202405050603302', 2, 2025, '402', '1992', 2792.78),
('SUSHMA KUMARI SHAW', '4296007325031107', 7, 2025, '073', '2020', 56440.58),
('SUMAN KUMARI SHAW', '4296007526041208', 8, 2026, '075', '1989', 67400.89),
('SAHIL SHAW', '4296010840268800', 1, 2031, '108', '2120', 9200),
('RAKESH RAJBHAR', '4302800140069026', 6, 2030, '302', '1995', 1800),
('SHIVANI SINGH', '4402900119712100', 1, 2029, '781', '2001', 500.89);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `company` varchar(400) NOT NULL,
  `account_No` varchar(18) NOT NULL,
  `ifsc_no` varchar(11) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`company`, `account_No`, `ifsc_no`, `balance`) VALUES
('HappyWorld', '0000001234568033', 'GBNA0512345', 1611960.67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD UNIQUE KEY `card_no` (`card_no`),
  ADD UNIQUE KEY `cvv` (`cvv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
