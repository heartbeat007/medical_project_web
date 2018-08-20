-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2018 at 07:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `meeting_date` varchar(60) NOT NULL,
  `meeting_time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `phone`, `gender`, `catagory`, `date`, `comment`, `meeting_date`, `meeting_time`) VALUES
(1, 'mr.gibs', 'mrgibs@gmail.com', '12-2134-4235', 'male', 'Pathology', '12-34-123', 'afsaasgass', '', ''),
(2, 'mr.sorrow', 'sorrow@gmail.com', '3434-3434-23', 'male', 'Psychology', '12-434-24', 'sdfsdfdsfsf', '', ''),
(3, 'mrs.happy', 'happy@gmail.com', '45-4545-34', 'male', 'Emergency', '45-465-34', 'dfsdfsdfsdf', '', ''),
(4, 'md jonson', 'jonson@gmail.com', '45-56345-45', 'male', 'Neurology', '12-34-45', 'sfgsgsfgfgfg', '', ''),
(5, 'mrs tarin', 'tarin@gmail.com', '345-34545-3455', 'male', 'Psychology', '12-12-24', 'jhvjkgvckjv', '', ''),
(6, 'mr hafizur', 'hafizur@gmail.com', '234-234-3423', 'male', 'Pathology', '25-12-23', 'sdfdsfdsfsdf', '', ''),
(7, 'mrs kasem', 'kasem@gmail.com', '23-23-23', 'female', 'Neurology', '21-12-12', 'asdasddasdasdsadsad', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
