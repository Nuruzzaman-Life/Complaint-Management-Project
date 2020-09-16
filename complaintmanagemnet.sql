-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 11:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaintmanagemnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `ComplaintID` varchar(200) NOT NULL,
  `UserID` varchar(200) NOT NULL,
  `Catagory` varchar(200) NOT NULL,
  `Year` int(11) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`ComplaintID`, `UserID`, `Catagory`, `Year`, `Status`) VALUES
('001', 'Nuruzzaman01', 'Sells', 2020, 'Unprocessed'),
('006', 'Nuruzzaman01', 'Price', 2020, 'Processed'),
('002', 'Life2302', 'Service', 2018, 'Processed'),
('003', 'rifat007', 'Sells', 2020, 'Unprocessed'),
('004', 'koushik89', 'Dresscode', 1998, 'Unprocessed'),
('005', 'joy99', 'Sells', 2020, 'Processed'),
('007', 'shakib75', 'Price', 2020, 'Processed'),
('008', 'keya14', 'Sells', 2019, 'Unprocessed'),
('009', 'thefizz', 'Service', 2017, 'Processed'),
('010', 'leoMessi', 'Management', 2020, 'Unprocessed'),
('011', 'iamlife', 'Price', 2020, 'Unprocessed'),
('012', 'akhiahamed', 'Sells', 2020, 'Processed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
