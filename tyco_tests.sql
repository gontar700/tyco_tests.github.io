-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2017 at 12:02 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tyco_tests`
--

-- --------------------------------------------------------

--
-- Table structure for table `rent_car`
--

CREATE TABLE `rent_car` (
  `id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `car_type` int(1) NOT NULL,
  `model_type` int(1) NOT NULL,
  `full_name` text NOT NULL,
  `age` int(3) NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `i_driver` text NOT NULL,
  `driver_details` longtext NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent_car`
--

INSERT INTO `rent_car` (`id`, `from_date`, `to_date`, `car_type`, `model_type`, `full_name`, `age`, `phone_number`, `email`, `i_driver`, `driver_details`, `creation_time`, `update_time`) VALUES
(1, '2017-03-21', '2017-03-29', 2, 4, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', '', 'aaaaaaaa', '2017-03-21 08:50:28', '2017-03-21 08:50:28'),
(2, '2017-03-28', '2017-03-29', 1, 2, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', 'on', '', '2017-03-21 08:51:40', '2017-03-21 08:51:40'),
(3, '2017-03-22', '2017-04-26', 2, 3, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', '', 'aaaaaaaaaa', '2017-03-21 10:43:46', '2017-03-21 10:43:46'),
(4, '2017-03-22', '2017-04-26', 2, 3, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', '', 'aaaaaaaaaa', '2017-03-21 10:48:41', '2017-03-21 10:48:41'),
(5, '2017-03-22', '2017-04-26', 2, 3, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', '', 'aaaaaaaaaa', '2017-03-21 10:51:05', '2017-03-21 10:51:05'),
(6, '2017-03-22', '2017-04-26', 2, 3, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', '', 'aaaaaaaaaa', '2017-03-21 10:54:45', '2017-03-21 10:54:45'),
(7, '2017-03-22', '2017-04-26', 2, 3, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', '', 'aaaaaaaaaa', '2017-03-21 10:57:22', '2017-03-21 10:57:22'),
(8, '2017-03-21', '2017-03-28', 1, 1, 'Daniel Gontar', 34, '054-5887732', 'danielgontar@gmail.com', 'on', '', '2017-03-21 10:58:12', '2017-03-21 10:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent_car`
--
ALTER TABLE `rent_car`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent_car`
--
ALTER TABLE `rent_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;