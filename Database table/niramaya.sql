-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:30 PM
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
-- Table structure for table `niramaya`
--

CREATE TABLE `niramaya` (
  `niramaya_id` int(255) NOT NULL,
  `stdfirstname` varchar(30) NOT NULL,
  `stdlastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `maritalstatus` varchar(10) NOT NULL,
  `f_m_g_name` varchar(30) NOT NULL,
  `guardianrelation` varchar(30) NOT NULL,
  `nominee` varchar(30) NOT NULL,
  `BPL` varchar(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `niramaya`
--

INSERT INTO `niramaya` (`niramaya_id`, `stdfirstname`, `stdlastname`, `gender`, `dob`, `phonenumber`, `maritalstatus`, `f_m_g_name`, `guardianrelation`, `nominee`, `BPL`, `address`) VALUES
(1, 'Vinod', 'T.H', 'Male', '2022-02-06', '8608301661', 'Unmarried', 'T.R. Harinath', 'Therla', 'Therla', 'Yes', '12/9 Elango Street Ganapathy Nagar Villapuram Madurai-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niramaya`
--
ALTER TABLE `niramaya`
  ADD PRIMARY KEY (`niramaya_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niramaya`
--
ALTER TABLE `niramaya`
  MODIFY `niramaya_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
