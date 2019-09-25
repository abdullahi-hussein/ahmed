-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2019 at 11:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(65) NOT NULL,
  `last_name` varchar(65) NOT NULL,
  `mobile` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `trn_date` varchar(65) NOT NULL,
  `added_by` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `mobile`, `email`, `trn_date`, `added_by`) VALUES
(2, 'Otieno', 'cheruto', '83283923', 'otieno@gmail.com', '2019-08-29', 'antoo'),
(4, 'Chris', 'Ribia', '083727', 'chris@ribia.com', '2019-08-29', 'antoo'),
(5, 'kamau', 'muthe', '84343403', 'anyw@gmail.com', '2019-08-29', 'antoo'),
(6, 'anthony', 'mwangi', '0707741793', 'anthony88@gmail.com', '2019-08-29', 'antoo'),
(8, 'John', 'muthe', '09309040834', 'muthe@gmail.com', '2019-08-29', 'antoo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password_` varchar(120) NOT NULL,
  `DOA` varchar(120) NOT NULL,
  `agent` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password_`, `DOA`, `agent`) VALUES
(1, 'antonnifo', 'antoo@gmail.com', '{1416c006118d23dbb81d58e19ee67242}', '2019-08-03', 'antoo'),
(3, 'Anthony', 'anthony88@gmail.com', '{1416c006118d23dbb81d58e19ee67242}', '2019-08-30', 'Anthony');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `vehicle_id` int(11) NOT NULL,
  `Reg_no` varchar(65) NOT NULL,
  `status_` varchar(65) NOT NULL,
  `engine_no` varchar(65) NOT NULL,
  `make` varchar(65) NOT NULL,
  `model` varchar(65) NOT NULL,
  `year_` varchar(65) NOT NULL,
  `color` varchar(65) NOT NULL,
  `customer_mail` varchar(65) NOT NULL,
  `customer_concern` varchar(65) NOT NULL,
  `arrival_date` varchar(65) NOT NULL,
  `delivery_date` varchar(65) NOT NULL,
  `added_by` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`vehicle_id`, `Reg_no`, `status_`, `engine_no`, `make`, `model`, `year_`, `color`, `customer_mail`, `customer_concern`, `arrival_date`, `delivery_date`, `added_by`) VALUES
(1, 'KAS 3236J', 'brought in', '983hhfce', 'toyota', 'sas', '26181', 'blue', '1', 'tire allignment', '2019-08-04', 'soon', 'antoo'),
(2, 'KAN293', 'brought in', '89743984mfn', 'toyota', 'nrjdjf', '2019', 'green', 'muthe@gmail.com', 'tire allignment', '2019-08-09', 'soon', 'antoo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
