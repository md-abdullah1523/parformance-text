-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 08:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `b_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pbname` varchar(50) NOT NULL,
  `pbdate` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `edition` varchar(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `ncopy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`b_id`, `name`, `pbname`, `pbdate`, `sub`, `edition`, `isbn`, `ncopy`) VALUES
(7, 'add', 'mm', 'bbb', 'nmn', 'eerr', 12, 12),
(8, 'bbl', 'gfe', 'ggg', 'bve', 'yew', 33, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile` int(15) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `address`, `mobile`, `street`, `city`, `age`, `pass`) VALUES
(3, 'md abdullah43', 'mdabdullah.puc19@gmail.com', 'West bakolia,chawkbazar,chittagong, Bangladesh', 1865758319, 'West bakolia,chawkbazar,chittagong, Bangladesh', 'chittagong', '23', '123'),
(4, 'mamm', 'Effat@gmail.com', 'ctg', 16600, 'mc', 'ctg', '20', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
