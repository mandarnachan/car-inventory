-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 10:58 AM
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
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manu_id`, `manu_name`, `created_date`) VALUES
(1, 'marut', '2018-11-06 05:58:56'),
(2, 'suzuki', '2018-11-06 05:59:02'),
(3, 'mahindra', '2018-11-06 05:59:21');

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
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`id`, `manu_id`, `model_name`, `qty`, `color`, `manu_year`, `reg_no`, `note`, `image_path_1`, `image_path_2`, `deleted`, `created_date`, `modified_date`) VALUES
(1, 1, 'dasdads', 0, 'dasdasd', 'dasdsa', 'dasdadas', '', 'uploads/subscription.png', 'uploads/', 0, '2018-11-06 11:45:20', '2018-11-06 09:37:02'),
(2, 2, 'i20', 0, 'blue', '2018', 'i202018', 'test', 'uploads/subscription.png', 'uploads/', 1, '2018-11-06 11:46:25', '2018-11-06 09:48:42'),
(3, 2, 'i20', 0, 'grey', '2018', 'i202018', 'test', 'uploads/subscription.png', 'uploads/', 0, '2018-11-06 11:47:13', '2018-11-06 09:45:18'),
(4, 3, 'scorpio', 0, 'white', '2018', 'SC2018', 'test', 'uploads/subscription.png', 'uploads/', 0, '2018-11-06 11:47:47', '2018-11-06 09:48:33'),
(5, 3, 'scorpio', 0, 'black', '2018', 'SC2018', 'test', 'uploads/subscription.png', 'uploads/', 1, '2018-11-06 11:47:54', '2018-11-06 09:50:14'),
(6, 3, 'KUV', 0, 'red', '2018', 'KUV2018', 'test', 'uploads/subscription.png', 'uploads/', 0, '2018-11-06 11:51:28', '2018-11-06 06:21:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
