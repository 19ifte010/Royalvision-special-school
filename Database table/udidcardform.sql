-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalvison`
--

-- --------------------------------------------------------

--
-- Table structure for table `udidcardform`
--

CREATE TABLE `udidcardform` (
  `id` int(255) NOT NULL,
  `stdfirstname` varchar(30) NOT NULL,
  `stdlastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `markofindentity` text NOT NULL,
  `maritalstatus` varchar(10) NOT NULL,
  `f_m_g_name` varchar(30) NOT NULL,
  `f_m_g_occupation` varchar(30) NOT NULL,
  `f_m_g_education` varchar(30) NOT NULL,
  `f_m_g_income` varchar(30) NOT NULL,
  `aadharnumber` varchar(100) NOT NULL,
  `aadharcard` text NOT NULL,
  `disabilitycard` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `udidcardform`
--

INSERT INTO `udidcardform` (`id`, `stdfirstname`, `stdlastname`, `gender`, `age`, `dob`, `phonenumber`, `bloodgroup`, `markofindentity`, `maritalstatus`, `f_m_g_name`, `f_m_g_occupation`, `f_m_g_education`, `f_m_g_income`, `aadharnumber`, `aadharcard`, `disabilitycard`, `address`) VALUES
(11, 'Vinod', 'T.H', 'Male', 20, '2002-01-25', 8608301661, 'B-', 'A mole in neck and in hand', 'Married', 'T.R. Harinath', 'Offset Printing', 'BSC Physics', '100000', '2234 2345 2334 2345', 'upload/aadharcard/C1.jpg', 'upload/disabilitycard/C2.jpg', '12/9 Elango Street Ganapathy Nagar Villapuram Madurai-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `udidcardform`
--
ALTER TABLE `udidcardform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `udidcardform`
--
ALTER TABLE `udidcardform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
