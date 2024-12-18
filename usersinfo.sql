-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 10:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `ID` int(11) NOT NULL,
  `STUDENT_NUM` int(50) NOT NULL,
  `FULLNAME` varchar(25) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE_NUM` int(15) NOT NULL,
  `GENDER` varchar(25) NOT NULL,
  `COURSE` varchar(30) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `REG_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`ID`, `STUDENT_NUM`, `FULLNAME`, `EMAIL`, `PHONE_NUM`, `GENDER`, `COURSE`, `PASSWORD`, `REG_DATE`) VALUES
(1, 2022210257, 'John Pogi Dela Cruz', 'johnthegr8@pcu.edu.ph', 2147483647, 'Female', 'BSIT', '9456753', '0000-00-00 00:00:00'),
(2, 1923250242, 'Mama ko Del Omar', 'Omar@pcu.edu.ph', 5318008, 'Male', 'BSCS', '5234234', '0000-00-00 00:00:00'),
(3, 20233567, 'Klyde Humphrey Darion Cal', 'Klydepogi123@gmail.com', 9458700, 'Male', 'BSCRIM', '0', '0000-00-00 00:00:00'),
(20, 23234211, 'Klyde Humphrey Darion Cal', 'johnescueta26@gmail.com', 2147483647, 'Male', 'BSIT', '123123', '0000-00-00 00:00:00'),
(33, 123, 'kek caldo', 'johnescu32eta26@gmail.com', 2147483647, 'Male', 'BSIT', '123', '0000-00-00 00:00:00'),
(40, 1231515, 'Ichanpogi', 'ichan@mama.ph', 412423432, 'Female', 'BSIT', '123123123', '0000-00-00 00:00:00'),
(41, 20221567, 'Geisler Batombakal', 'Geistheg8@pcu.edu.ph', 870011111, 'Others', 'BSIT', '123123123', '0000-00-00 00:00:00'),
(42, 115130147, 'Kambs Cj Del Omar', 'kambs123@pcu.edu.ph', 2147483647, 'Others', 'BSIT', '0', '0000-00-00 00:00:00'),
(43, 12321312, 'adada', 'dfgsdfsfd@pcu.ph', 123, 'Male', 'BSIT', '0', '0000-00-00 00:00:00'),
(44, 12312313, 'John Omar', 'johnkirl221@gmail.com', 90123, 'Others', 'BSSS', '123123', '0000-00-00 00:00:00'),
(45, 2147483647, 'Christina Jennifer Lawren', 'kambs456@pcu.edu.ph', 2147483647, 'Others', 'BSITTTTTTTTTTT', 'kambs123123', '0000-00-00 00:00:00'),
(48, 123123, 'Student M. Surname', 'student@pcu.edu.ph', 2147483647, 'Male', 'BSCS', '123123123', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `STUDENT_NUM` (`STUDENT_NUM`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
