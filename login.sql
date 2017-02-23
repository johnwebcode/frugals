-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2016 at 06:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(22) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`) VALUES
(13, 'john', '', '', '527bd5b5d689e2c32ae974c6229ff785'),
(14, 'ravi@123', 'ravi', 'a', '636660db08005b8dccd284aae857c66e'),
(15, 'prem', '', '', '202cb962ac59075b964b07152d234b70'),
(16, '221', 'jo', 'a', '060ad92489947d410d897474079c1477'),
(17, '222', '', '', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(18, 'natu', 'john', 'a', '202cb962ac59075b964b07152d234b70'),
(19, 'ravi123', '', '', '202cb962ac59075b964b07152d234b70'),
(20, 'gopal', '', '', '202cb962ac59075b964b07152d234b70'),
(21, 'sidhu', '', '', '202cb962ac59075b964b07152d234b70'),
(22, 'jana', '', '', '202cb962ac59075b964b07152d234b70'),
(23, 'gg', '', '', 'b2f5ff47436671b6e533d8dc3614845d'),
(24, 'rav', 'ds', 'ds', '6226f7cbe59e99a90b5cef6f94f966fd'),
(25, 'as', 'sd', 'sgdf', 'f970e2767d0cfe75876ea857f92e319b'),
(26, 'sa', 'as', 'as', 'c12e01f2a13ff5587e1e9e4aedb8242d'),
(27, 'sas', 'as', 'as', 'a8a64cef262a04de4872b68b63ab7cd8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
