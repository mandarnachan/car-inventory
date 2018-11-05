-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 02:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_car_inv_man_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `id` int(11) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `manu_year` varchar(20) DEFAULT NULL,
  `reg_no` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `image_path_1` varchar(500) DEFAULT NULL,
  `image_path_2` varchar(500) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `craeted_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`id`, `manu_id`, `model_name`, `qty`, `color`, `manu_year`, `reg_no`, `note`, `image_path_1`, `image_path_2`, `deleted`, `craeted_date`, `modified_date`) VALUES
(1, 1, 'waganor', 1, 'red', '2017', '21231', 'test car', NULL, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'dasdas', 0, 'dasdas', '0', 'dasd', 'adasd', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, '', 0, '', '0', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'mandar', 0, 'blue', '2017', 'reg', 'test', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'dasdas', 0, 'dasdasd', '0', 'dasd', 'asdasda', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'dsaasd', 0, 'dasdasd', 'dasdas', 'dsa', 'dasdasd', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
