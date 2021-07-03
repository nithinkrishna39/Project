-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 07:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phototherapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `time_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `h_r` int(11) NOT NULL,
  `spo2` float NOT NULL,
  `kg` float NOT NULL,
  `temp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`time_date`, `h_r`, `spo2`, `kg`, `temp`) VALUES
('2021-05-12 13:58:02', 72, 75.2, 100.24, 35),
('2021-05-16 17:07:43', 68, 66, 13, 28.38),
('2021-05-16 17:08:32', 0, 97, 11, 28.5),
('2021-05-16 17:09:11', 0, 60, 11, 28.44),
('2021-05-16 17:09:52', 0, 0, 11, 28.69),
('2021-05-16 17:10:23', 0, 60, 22, 28.81),
('2021-05-16 17:10:54', 68, 69, 22, 28.69),
('2021-05-16 17:11:25', 75, 77, 22, 28.62),
('2021-05-16 17:11:56', 0, 60, 51, 28.62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`time_date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
