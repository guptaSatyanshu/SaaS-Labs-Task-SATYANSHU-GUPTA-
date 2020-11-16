-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 09:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autowork`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment log`
--

CREATE TABLE `appointment log` (
  `S.No.` int(4) NOT NULL,
  `Email of client` varchar(40) NOT NULL,
  `Appointment date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment log`
--

INSERT INTO `appointment log` (`S.No.`, `Email of client`, `Appointment date`) VALUES
(1, 'satyamcool26@gmail.com', '2020-11-19'),
(2, 'Satyanshu1710167@akgec.ac.in', '2020-11-10'),
(3, 'satyam1.2.3.26@gmail.com', '2020-11-20'),
(4, 'piyush12@gmail.com', '2020-11-18'),
(5, 'shubhangishrivas06@gmail.com', '2021-06-25'),
(6, 'satyam1.2.3.26@gmail.com', '2020-11-26'),
(7, 'satyam1.2.3.26@gmail.com', '2020-11-26'),
(8, 'satyamcool26@gmail.com', '2020-11-25'),
(9, 'satyam1.2.3.26@gmail.com', '2020-11-28'),
(10, 'piyush12@gmail.com', '2020-12-04'),
(11, 'Satyanshu1710167@akgec.ac.in', '2020-11-05'),
(12, 'shubhangishrivas06@gmail.com', '2020-11-30'),
(13, 'satyam1.2.3.26@gmail.com', '2020-11-14'),
(14, 'satyam1.2.3.26@gmail.com', '2020-11-14'),
(15, 'satyam1.2.3.26@gmail.com', '2020-12-06'),
(16, 'satyam1.2.3.26@gmail.com', '2020-12-06'),
(17, 'antarmann20@gmail.com', '2020-11-20'),
(18, 'piyush12@gmail.com', '2020-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `call log`
--

CREATE TABLE `call log` (
  `S.No.` int(4) NOT NULL,
  `Call made from` varchar(10) NOT NULL,
  `Call recieved to` varchar(10) NOT NULL,
  `Date of call` date NOT NULL,
  `Call Duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call log`
--

INSERT INTO `call log` (`S.No.`, `Call made from`, `Call recieved to`, `Date of call`, `Call Duration`) VALUES
(1, '7412589630', '2103456987', '2020-11-15', '00:00:00'),
(2, '1245789635', '4567891235', '0000-00-00', '13:00:00'),
(3, '1245789635', '4567891235', '0000-00-00', '13:00:00'),
(4, '2546981370', '4569871230', '0000-00-00', '23:45:00'),
(5, '7784873855', '9818819707', '0000-00-00', '01:49:00'),
(6, '778487855', '9451419899', '0000-00-00', '05:09:00'),
(7, '7784873855', '7007446318', '0000-00-00', '01:51:00'),
(8, '2145879630', '9854763210', '0000-00-00', '02:53:00'),
(9, '9874563210', '9563214870', '2020-11-28', '03:58:00'),
(10, '7784873855', '9415460252', '2020-11-21', '07:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `sms log`
--

CREATE TABLE `sms log` (
  `S.no.` int(4) NOT NULL,
  `Sender Contact` varchar(10) NOT NULL,
  `Reciever Contact` varchar(10) NOT NULL,
  `Date and Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms log`
--

INSERT INTO `sms log` (`S.no.`, `Sender Contact`, `Reciever Contact`, `Date and Time`) VALUES
(1, '7007446318', '7784873855', '2020-11-15 01:34:03'),
(2, '7412589632', '8459763278', '2020-11-15 02:04:35'),
(3, '7865412390', '7895463105', '2020-11-15 22:08:01'),
(17, '7784873855', '9194154602', '2020-11-16 22:46:38'),
(18, '9177848738', '9194154602', '2020-11-16 22:47:17'),
(19, '9177848738', '9194154602', '2020-11-16 22:47:37'),
(20, '9177848738', '9194154602', '2020-11-16 22:49:03'),
(21, '9170074463', '9177848738', '2020-11-16 22:49:25'),
(22, '9170074463', '9177848738', '2020-11-16 23:10:10'),
(23, '9170074463', '9177848738', '2020-11-16 23:10:27'),
(24, '9170074463', '9177848738', '2020-11-16 23:16:35'),
(25, '9170074463', '9177848738', '2020-11-16 23:17:09'),
(26, '91', '91', '2020-11-16 23:36:35'),
(27, '9198188197', '9194514198', '2020-11-16 23:50:45'),
(28, '9177848738', '9194154602', '2020-11-16 23:51:10'),
(29, '9112547896', '9114562398', '2020-11-17 00:01:49'),
(30, '9124516398', '9178459632', '2020-11-17 00:02:01'),
(31, '91', '91', '2020-11-17 00:04:08'),
(32, '91', '91', '2020-11-17 00:04:59'),
(33, '91', '91', '2020-11-17 00:05:12'),
(34, '91', '91', '2020-11-17 00:13:50'),
(35, '7784873855', '914560252', '2020-11-17 00:29:54'),
(36, '7784873855', '9191456025', '2020-11-17 00:32:10'),
(37, '7784738544', '9194514198', '2020-11-17 00:32:29'),
(38, '7845', '91', '2020-11-17 00:33:06'),
(39, '9874563210', '9184596123', '2020-11-17 00:35:51'),
(40, '7854963210', '9174568932', '2020-11-17 00:41:05'),
(41, '7007446318', '9177848738', '2020-11-17 01:44:51'),
(42, '7007446318', '9177848738', '2020-11-17 01:45:28'),
(43, '0369852147', '9174102589', '2020-11-17 01:53:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment log`
--
ALTER TABLE `appointment log`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `call log`
--
ALTER TABLE `call log`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `sms log`
--
ALTER TABLE `sms log`
  ADD PRIMARY KEY (`S.no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment log`
--
ALTER TABLE `appointment log`
  MODIFY `S.No.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `call log`
--
ALTER TABLE `call log`
  MODIFY `S.No.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sms log`
--
ALTER TABLE `sms log`
  MODIFY `S.no.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
