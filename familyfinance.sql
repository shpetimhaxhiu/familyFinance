-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 02:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `familyfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `EntryID` int(11) NOT NULL,
  `EntryDate` date NOT NULL,
  `EntryType` varchar(25) NOT NULL,
  `Value` double(13,4) NOT NULL,
  `RegisteredBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`EntryID`, `EntryDate`, `EntryType`, `Value`, `RegisteredBy`) VALUES
(1, '2018-04-21', 'Income', 25.7500, '2332'),
(2, '2018-03-23', 'Income', 320.7000, 'Shpetims Haxhiu'),
(3, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(4, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(5, '2018-03-03', 'Income', 335.7000, 'Shpetim Haxhiu'),
(6, '2018-03-03', 'Income', 25.7000, 'Florin Haxhiu'),
(7, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(8, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(9, '2018-03-03', 'Income', 25.7000, 'Gezim Haxhiu'),
(10, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(11, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(12, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(13, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(14, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(15, '2018-03-03', 'Income', 25.7000, 'Shpetim Haxhiu'),
(16, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(17, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(18, '2018-03-03', 'Income', 25.7000, 'Shpetim Haxhiu'),
(19, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(20, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(21, '2018-03-03', 'Income', 25.7000, 'Shpetim Haxhiu'),
(22, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(23, '2018-03-03', 'Income', 25.7000, 'Shpetim Haxhiu'),
(24, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(25, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(26, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(27, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(28, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(29, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(30, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(31, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(32, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(33, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(34, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(35, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(36, '2018-03-03', 'Expense', 25.7000, 'Shpetim Haxhiu'),
(37, '2018-04-08', 'Expense', 51.0000, 'Shpetim Haxhiu'),
(38, '2018-04-08', 'Expense', 51.0000, 'Shpetim Haxhiu'),
(39, '2018-04-08', 'Income', 20.0000, 'Shpetim Haxhiu'),
(40, '2018-04-08', 'Income', 20.0000, 'Shpetim Haxhiu'),
(41, '2018-04-08', 'Expense', 0.0000, ''),
(42, '2018-04-08', 'Expense', 0.0000, ''),
(43, '2018-04-08', 'Expense', 0.0000, ''),
(44, '2018-04-08', 'Expense', 0.0000, ''),
(45, '2018-04-08', 'Expense', 0.0000, ''),
(46, '2018-04-08', 'Expense', 0.0000, ''),
(47, '2018-04-08', 'Expense', 0.0000, ''),
(48, '2018-04-08', 'Expense', 0.0000, ''),
(49, '2018-04-08', 'Expense', 0.0000, ''),
(50, '2018-04-08', 'Expense', 0.0000, ''),
(51, '2018-04-08', 'Expense', 2.0000, '2'),
(52, '2018-04-08', 'Expense', 2.0000, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`EntryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `EntryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
