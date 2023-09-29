-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 08:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Id` int(11) NOT NULL,
  `salerid` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(25) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Id`, `salerid`, `name`, `author`, `price`, `quantity`) VALUES
(1, 'Sid55001', 'The Chronicles of Narnia', 'C.S. Lewis', '664', 20),
(2, 'Sid5501', 'Twilight', 'Stephenie Meyer', '559', 17),
(3, 'Sid5509', 'Titanic', 'J.Tolkien', '848', 15),
(4, 'Sid55002', 'A Thousand Splendid Suns', 'Diane Hoh', '454', 14),
(5, 'Sid55001', 'The Outsiders', 'Khaled Hosseini', '548', 17),
(6, 'Sid55005', 'Red Queen', 'S. E.Hinton', '874', 13),
(7, 'Sid55012', 'Harry Potter', 'Victoria Aveyard', '833', 18),
(8, 'Sid55011', 'Avishapta Atma', 'Mostaque Ahamed', '748', 15),
(9, 'Sid55003', 'The Notebook', 'J. K. Rowling', '844', 12),
(10, 'Sid55019', 'Victoria Aveyard', 'Nicholas Sparks', '355', 27);

-- --------------------------------------------------------

--
-- Table structure for table `cartndel`
--

CREATE TABLE `cartndel` (
  `id` int(11) NOT NULL,
  `odid` int(11) NOT NULL,
  `cname` varchar(11) NOT NULL,
  `dadd` varchar(30) NOT NULL,
  `phn` int(11) NOT NULL,
  `pmethod` varchar(20) NOT NULL,
  `dstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartndel`
--

INSERT INTO `cartndel` (`id`, `odid`, `cname`, `dadd`, `phn`, `pmethod`, `dstatus`) VALUES
(1, 1055, 'Sadnam', '96,Uttara,Dhaka', 1712344521, 'COD', 'pending'),
(2, 1056, 'Hamad', '96,Mirpur,Dhaka', 1715522521, 'COD', 'pending'),
(3, 1057, 'Sakib', '11,Gulshan,Dhaka', 1524200041, 'Online', 'pending'),
(4, 1059, 'Tanzid', '86,Uttara', 1712344521, 'Online', 'pending'),
(5, 1065, 'Riyad', '11,Banani, Dhaka', 1646100014, 'Online', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `delivary`
--

CREATE TABLE `delivary` (
  `id` int(11) NOT NULL,
  `dbid` int(11) NOT NULL,
  `salary` varchar(6) NOT NULL,
  `sstatus` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivary`
--

INSERT INTO `delivary` (`id`, `dbid`, `salary`, `sstatus`) VALUES
(1, 5505, '9900', 'no'),
(2, 55051, '10000', 'no'),
(3, 55052, '11000', 'no'),
(5, 11, '111', 'no'),
(6, 12, '111', 'no'),
(7, 13, '111', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `phn` varchar(20) NOT NULL,
  `prlink` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `username`, `pass`, `name`, `dob`, `gender`, `address`, `phn`, `prlink`, `email`, `photo`) VALUES
(1, '', '123', '', '2021-12-08', 'Male', '', 'null', NULL, 'as.sufian6@gmail.com', '../image/defult.png'),
(2, 'AbuSufian', '123', 'Sufian Tanzid', '2021-12-03', 'Male', 'H-15,R-03, Sector: 06, Uttara', 'null', NULL, 'as.sufian6@gmail.com', '../View/Image/161335665_2496569997318031_8138658848522658092_n.jpg'),
(3, 'Sufian', '123', 'Sufian Tanzid', '2021-12-08', 'Male', 'H-15,R-03, Sector: 06, Uttara', 'null', NULL, 'as.sufian6@gmail.com', '../View/Image/116266734_2330139873961045_5669083625218852416_n.jpg'),
(4, 'Sufian1', '123', 'Sufian Tanzid', '2021-12-03', 'Male', 'H-15,R-03, Sector: 06, Uttara', 'null', '', 'sufian6@gmail.com', '../image/defult.png'),
(5, 'Sufian2', '123', 'Mohammad Abu Sufian', '2021-12-08', 'Male', 'Khan Paradise, Uttara, Dhaka', 'null', '', 'as.sufian6@gmail.com', '../image/defult.png'),
(8, 'MdAbuSufian', '123', 'Sufian', '2021-12-05', 'Male', 'Khan Paradise, Uttara, Dhaka', 'null', '', 'abusufiantanzid@gmail.com', '../View/Image/161335665_2496569997318031_8138658848522658092_n.jpg'),
(9, 'masufian', '123', 'MA Sufian', '1999-10-30', 'Male', '13 D, Khan Paradise, Uttara', 'null', '', 'abusufiantanzid@gmail.com', '../image/defult.png'),
(11, '147', '123', 'Abu Sayeed Parves ', '2021-07-27', 'Male', 'H-15,R-03, Sector: 06, Uttara', 'null', '', 'parves70@gmail.com', '../Image/defult.png'),
(12, 'parves', '123', 'Abu Sayeed Parves', '1996-08-06', 'Male', 'Stuttgart, Germany', 'null', '', 'asparves@gmail.com', '.../View/Image/defult.png'),
(13, '123', '123', 'gw', '2021-12-31', 'Male', 'wfwwf', 'null', '', 'wdfw@cv.com', '../View/Image/defult.png'),
(14, '121', '123', 'dfdfdfdfb', '2021-12-08', 'Male', 'dbgd', 'null', '', 's@gmail.com', '..../View/Image/defult.png'),
(17, '159', '123', 'Sufian', '2021-12-16', 'Male', 'fgn', 'null', '', 'a@gmail.com', '../View/Image/defult.png'),
(18, '111', '123', 'hdfbg', '2021-12-23', 'Male', 'cdz', 'null', '', 'as6@gmail.com', '../View/Image/bsdjc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cartndel`
--
ALTER TABLE `cartndel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivary`
--
ALTER TABLE `delivary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cartndel`
--
ALTER TABLE `cartndel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivary`
--
ALTER TABLE `delivary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
