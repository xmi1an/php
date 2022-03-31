-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 09:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dharmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aid` int(11) NOT NULL,
  `ausername` varchar(20) NOT NULL,
  `apassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookcategory`
--

CREATE TABLE `bookcategory` (
  `bcno` int(11) NOT NULL,
  `bcategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `bno` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bpublication` varchar(50) NOT NULL,
  `bauthor` varchar(50) NOT NULL,
  `bedition` varchar(20) NOT NULL,
  `bphoto` varchar(100) NOT NULL,
  `bactualprice` int(11) NOT NULL,
  `bsellprice` int(11) NOT NULL,
  `bremark` varchar(200) NOT NULL,
  `bcno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookrequest`
--

CREATE TABLE `bookrequest` (
  `brid` int(11) NOT NULL,
  `srno` int(11) NOT NULL,
  `brno` int(11) NOT NULL,
  `bno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackmaster`
--

CREATE TABLE `feedbackmaster` (
  `fno` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `gno` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `gtype` varchar(20) NOT NULL,
  `grievance` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rno` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `uaddress` varchar(150) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `upassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rno`, `uname`, `utype`, `uaddress`, `contactno`, `email`, `upassword`) VALUES
(1, 'Dharmi Bhandari', 'seller', '302/D avadh residency-4', '1234567891', 'dharmi@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcategory`
--
ALTER TABLE `bookcategory`
  ADD PRIMARY KEY (`bcno`);

--
-- Indexes for table `feedbackmaster`
--
ALTER TABLE `feedbackmaster`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `grievance`
--
ALTER TABLE `grievance`
  ADD PRIMARY KEY (`gno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcategory`
--
ALTER TABLE `bookcategory`
  MODIFY `bcno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbackmaster`
--
ALTER TABLE `feedbackmaster`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grievance`
--
ALTER TABLE `grievance`
  MODIFY `gno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
