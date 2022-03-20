-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:29 PM
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
-- Table structure for table `llclgform`
--

CREATE TABLE `llclgform` (
  `llclg_id` int(255) NOT NULL,
  `stdfirstname` varchar(30) NOT NULL,
  `stdlastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `f_m_g_name` varchar(30) NOT NULL,
  `guardianwitness` varchar(30) NOT NULL,
  `witness` varchar(30) NOT NULL,
  `gurardianaadharnumber` varchar(50) NOT NULL,
  `guardianphonenumber` varchar(10) NOT NULL,
  `guardianmailid` varchar(30) NOT NULL,
  `maritalstatus` varchar(10) NOT NULL,
  `disabilitytype` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `aadharcard` text NOT NULL,
  `aadharcard_name` varchar(100) NOT NULL,
  `medicalcertificate` text NOT NULL,
  `medicalcertificate_name` varchar(100) NOT NULL,
  `consentcertificate` text NOT NULL,
  `consentcertificate_name` varchar(100) NOT NULL,
  `guardianphoto` text NOT NULL,
  `guardianphoto_name` varchar(100) NOT NULL,
  `combinedphoto` text NOT NULL,
  `combinedphoto_name` varchar(100) NOT NULL,
  `pwdphoto` text NOT NULL,
  `pwdphoto_name` varchar(100) NOT NULL,
  `disabilitycard` text NOT NULL,
  `disabilitycard_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `llclgform`
--

INSERT INTO `llclgform` (`llclg_id`, `stdfirstname`, `stdlastname`, `gender`, `email`, `dob`, `phonenumber`, `f_m_g_name`, `guardianwitness`, `witness`, `gurardianaadharnumber`, `guardianphonenumber`, `guardianmailid`, `maritalstatus`, `disabilitytype`, `address`, `aadharcard`, `aadharcard_name`, `medicalcertificate`, `medicalcertificate_name`, `consentcertificate`, `consentcertificate_name`, `guardianphoto`, `guardianphoto_name`, `combinedphoto`, `combinedphoto_name`, `pwdphoto`, `pwdphoto_name`, `disabilitycard`, `disabilitycard_name`) VALUES
(3, 'Vinod', 'T.H', 'M', 'vinodthumatti25@gmail.com', '2022-01-25', '8608301661', 'T.R. Harinath', 'xyz', 'abc', '1234 5678 9101', '6385501035', 'loosudeva@gmail.com', 'Unmarried', 'None', '12', 'upload/aadharcard/vinodthumatti25@gmail.com-SC Ques PG no.pdf', 'SC Ques PG no.pdf', 'upload/medicalcertificate/vinodthumatti25@gmail.com-SC Part c 16.pdf', 'SC Part c 16.pdf', 'upload/consentcertificate/vinodthumatti25@gmail.com-15 a tsp.pdf', '15 a tsp.pdf', 'upload/guardianphoto/vinodthumatti25@gmail.com-C1.jpg', 'C1.jpg', 'upload/combinedphoto/vinodthumatti25@gmail.com-C2.jpg', 'C2.jpg', 'upload/pwdphoto/vinodthumatti25@gmail.com-C3.jpg', 'C3.jpg', 'upload/disabilitycard/vinodthumatti25@gmail.com-C5.jpg', 'C5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `llclgform`
--
ALTER TABLE `llclgform`
  ADD PRIMARY KEY (`llclg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `llclgform`
--
ALTER TABLE `llclgform`
  MODIFY `llclg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
