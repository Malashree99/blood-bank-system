-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 09:20 AM
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
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_reg`
--

CREATE TABLE `acc_reg` (
  `id` int(50) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `phn` bigint(50) NOT NULL,
  `age` int(15) NOT NULL,
  `b_grp` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor_reg`
--

CREATE TABLE `donor_reg` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `phn` bigint(15) NOT NULL,
  `age` int(5) NOT NULL,
  `b_grp` varchar(5) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_reg`
--

INSERT INTO `donor_reg` (`id`, `name`, `adress`, `phn`, `age`, `b_grp`, `ename`, `password`) VALUES
(9, 'gfdgd', 'frerrw', 11245, 14, 'A', 'fgfdgdr@gmail.com', 'bbhb'),
(10, 'gfdgd', 'biusxhsiodj', 222222, 71, 'B+', 'patilvaishnavi@gmail.com', 'xcfhgkjb'),
(11, 'gfdgd', 'erewrw', 888888, 15, 'AB-', 'fgfdgdr@gmail.com', 'bbjhbjgjhbj'),
(12, 'mla', 'gfdgd', 99999, 15, 'B+', 'bdawijweiew@mmm', 'aaaaa'),
(13, 'gfdgd', 'frerrw', 333333, 15, 'O-', 'bdawijweiew@mmm', '123456'),
(14, 'gfdgd', 'frerrw', 333333, 15, 'A+', 'bdawijweiew@mmm', '12459');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `feedback` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`) VALUES
(3, 'mamammmskksksisisis'),
(4, 'mamammmskksksisisis'),
(5, 'mmalsjdkld');

-- --------------------------------------------------------

--
-- Table structure for table `send_req`
--

CREATE TABLE `send_req` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phn` bigint(12) NOT NULL,
  `blood_req` varchar(22) NOT NULL,
  `when_req` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_req`
--

INSERT INTO `send_req` (`id`, `name`, `phn`, `blood_req`, `when_req`, `email`, `details`) VALUES
(6, 'poiuhgfvbnm,', 1111111, 'A+', '0000-00-00', 'malapatil99@gmail.com', 'opertion is going on'),
(7, 'poiuhgfvbnm,', 1111111, 'A+', '0000-00-00', 'malapatil99@gmail.com', 'opertion is going on'),
(8, 'poiuhgfvbnm,', 11111111111, 'AB-', '0014-12-12', 'fgfdgdr@gmail.com', 'vnbjmkjhloipi'),
(9, 'poiuhgfvbnm,', 123456, 'AB+', '2019-05-02', 'nnnm@gmail.com', 'opertion is going on');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `Ename` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mbl` bigint(50) NOT NULL,
  `adress` int(250) NOT NULL,
  `entrydate` date NOT NULL,
  `entrytime` varchar(100) NOT NULL,
  `enteredby` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Ename`, `Password`, `name`, `mbl`, `adress`, `entrydate`, `entrytime`, `enteredby`, `position`) VALUES
(1, 'malapatil99@gmail.com', 'Mala@1234', 'MALASHREE', 0, 0, '0000-00-00', '', '', 'admin'),
(2, 'malapatil99@gmail.com', 'njhgf', '', 0, 0, '0000-00-00', '', '', ''),
(3, 'fgfdgdr@gmail.com', 'aaaaaa', '', 0, 0, '0000-00-00', '', '', ''),
(4, 'fgfdgdr@gmail.com', 'bnamjaiauoi', '', 0, 0, '0000-00-00', '', '', ''),
(5, 'patilvaishnavi@gmail.com', 'mnmnjkjkjkj', '', 0, 0, '0000-00-00', '', '', ''),
(6, 'fgfdgdr@gmail.com', 'mmhmh', '', 0, 0, '0000-00-00', '', '', ''),
(7, 'nnnm@gmail.com', 'nnkhi', '', 0, 0, '0000-00-00', '', '', ''),
(8, 'nnnm@gmail.com', 'mmmmmm', '', 0, 0, '0000-00-00', '', '', ''),
(9, 'fgfdgdr@gmail.com', 'mmmmmm', '', 0, 0, '0000-00-00', '', '', ''),
(10, 'fgfdgdr@gmail.com', 'mmmmm', '', 0, 0, '0000-00-00', '', '', ''),
(11, 'mmmmm@gamil.com', 'mmmlalalalalalal', '', 0, 0, '0000-00-00', '', '', ''),
(12, 'malapatil99@gmail.com', 'mmmmmmmmmm', '', 0, 0, '0000-00-00', '', '', ''),
(13, 'patilvaishnavi@gmail.com', 'mala1234', '', 0, 0, '0000-00-00', '', '', ''),
(14, 'fgfdgdr@gmail.com', 'mmmalala', '', 0, 0, '0000-00-00', '', '', ''),
(15, 'malapatil99@gmail.com', 'mama', '', 0, 0, '0000-00-00', '', '', ''),
(16, 'malapatil99@gmail.com', 'mama', '', 0, 0, '0000-00-00', '', '', ''),
(17, 'mmmmmmmmm@gmail.com', '1234', '', 0, 0, '0000-00-00', '', '', ''),
(18, 'mmmmmmmmm@gmail.com', '1222222', '', 0, 0, '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_reg`
--
ALTER TABLE `acc_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_reg`
--
ALTER TABLE `donor_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_req`
--
ALTER TABLE `send_req`
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
-- AUTO_INCREMENT for table `acc_reg`
--
ALTER TABLE `acc_reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_reg`
--
ALTER TABLE `donor_reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `send_req`
--
ALTER TABLE `send_req`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
