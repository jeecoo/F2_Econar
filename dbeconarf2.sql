-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 04:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeconarf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmovie`
--

CREATE TABLE `tblmovie` (
  `movieid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `duration` time(6) NOT NULL,
  `releasedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmovie`
--

INSERT INTO `tblmovie` (`movieid`, `title`, `genre`, `duration`, `releasedate`) VALUES
(1, 'Dune: Part Two', 'Science Fiction', '02:00:00.000000', '2024-10-20'),
(2, 'The Batman', 'Action, Crime, Drama', '02:55:00.000000', '2022-03-04'),
(3, 'Avatar: The Way of Water', 'Action, Adventure, Fantasy', '02:30:00.000000', '2024-12-16'),
(4, 'Jurassic World: Dominion', 'Action, Adventure, Sci-Fi', '02:10:00.000000', '2022-06-10'),
(5, 'Black Panther: Wakanda Forever', 'Action, Adventure, Drama', '02:25:00.000000', '2022-11-11'),
(6, 'dada', 'dada', '838:59:59.999999', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `accid` int(10) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`accid`, `emailadd`, `username`, `password`, `usertype`) VALUES
(8, 'leahbarbaso@gmail.com', 'leah', 'barabso', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `StudentID` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`StudentID`, `firstname`, `lastname`, `gender`) VALUES
(11, 'Leah', 'Barbaso', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmovie`
--
ALTER TABLE `tblmovie`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmovie`
--
ALTER TABLE `tblmovie`
  MODIFY `movieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `accid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `StudentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
