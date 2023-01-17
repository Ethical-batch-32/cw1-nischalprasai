-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 11:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image_voult`
--

-- --------------------------------------------------------

--
-- Table structure for table `anish`
--

CREATE TABLE `anish` (
  `anish` varchar(30) DEFAULT NULL,
  `image_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anish`
--

INSERT INTO `anish` (`anish`, `image_url`) VALUES
('anish', 'IMG-63b2645e635482.72710089.png'),
('anish', 'IMG-63b264665e5465.80480235.png'),
('anish', 'IMG-63b26474632f54.21285293.png'),
('anish', 'IMG-63b51c87500bb1.81602209.png');

-- --------------------------------------------------------

--
-- Table structure for table `hfh`
--

CREATE TABLE `hfh` (
  `hfh` varchar(30) DEFAULT NULL,
  `image_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nischal`
--

CREATE TABLE `nischal` (
  `nischal` varchar(30) DEFAULT NULL,
  `image_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nischal`
--

INSERT INTO `nischal` (`nischal`, `image_url`) VALUES
('nischal', 'IMG-63c11d1b4be909.62527950.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `username`, `password`, `time`) VALUES
(12, 'anish', 'anish@gmail.com', 'anish', '456', '2023-01-02 10:38:22'),
(13, 'nischal', 'prasainischal16@gmail.com', 'nischal', '123456', '2023-01-13 14:42:32'),
(14, 'shawot', 'ssp3193@gmail.com', 'shawot', '100', '2023-01-13 15:37:23'),
(15, 'ppt', 'vf123@gmail.com', 'hfh', '55', '2023-01-13 17:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `shawot`
--

CREATE TABLE `shawot` (
  `shawot` varchar(30) DEFAULT NULL,
  `image_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shawot`
--

INSERT INTO `shawot` (`shawot`, `image_url`) VALUES
('shawot', 'IMG-63c129f659bbf9.29284841.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
