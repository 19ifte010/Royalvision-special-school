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
-- Table structure for table `specialschool`
--

CREATE TABLE `specialschool` (
  `id` int(100) NOT NULL,
  `std_first_name` varchar(30) NOT NULL,
  `std_last_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `f_m_g_name` varchar(30) NOT NULL,
  `disability_type` varchar(255) NOT NULL,
  `disability_percentage` int(11) NOT NULL,
  `address` text NOT NULL,
  `developmental_delay` varchar(10) NOT NULL,
  `assistance_requires` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialschool`
--

INSERT INTO `specialschool` (`id`, `std_first_name`, `std_last_name`, `gender`, `age`, `dob`, `phone_number`, `f_m_g_name`, `disability_type`, `disability_percentage`, `address`, `developmental_delay`, `assistance_requires`) VALUES
(1, 'Vinod', 'T.H', 'Male', 20, '2002-01-25', 8608301661, 'T.R. Harinath', 'None', 0, '12/9 Elango Street Ganapathy Nagar Villapuram Madurai', 'No', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `specialschool`
--
ALTER TABLE `specialschool`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `specialschool`
--
ALTER TABLE `specialschool`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
