-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2023 at 05:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_1`
--

CREATE TABLE `registration_1` (
  `customer_id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` bigint(10) NOT NULL,
  `trainno` varchar(25) NOT NULL,
  `coach` varchar(25) NOT NULL,
  `seat` int(100) NOT NULL,
  `food_name` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `waterbottle` int(10) NOT NULL,
  `ord_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_information_1`
--

CREATE TABLE `seller_information_1` (
  `delivery_person_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `train_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_information_1`
--

INSERT INTO `seller_information_1` (`delivery_person_id`, `name`, `Number`, `Email`, `password`, `train_name`) VALUES
(1, 'gurukiran', 9900112233, 'gurukiran123@gmail.com', 'gurukiran', 'Manglore Express'),
(2, 'gagan', 9988776655, 'gagan234@gmail.com', 'gaganSL', 'Banglore Express'),
(3, 'abhishekterani', 7744112233, 'abhishekterani567@gmail.c', 'abhishekterani', 'Manglore Express'),
(19, 'parameesh h', 9902301254, 'paramesh765@gmail.com', 'paramesh999640', ''),
(20, 'jeevan H S', 9912345678, 'jeevanhs234@gmail.com', 'jeevan', ''),
(21, 'abhi', 995645, 'abhishek234@gmail.com', 'abhi', ''),
(22, 'jeevan', 99887766, 'jeevan123@gmail.com', 'jeevan123', ''),
(23, 'jeevan hs1', 998877, 'jeevanhs123@gmail.com', 'jeevanhs', ''),
(24, 'terani', 9988776655, 'terani123@gmail.com', 'terani', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_1`
--
ALTER TABLE `registration_1`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD KEY `number` (`number`);

--
-- Indexes for table `seller_information_1`
--
ALTER TABLE `seller_information_1`
  ADD PRIMARY KEY (`delivery_person_id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_1`
--
ALTER TABLE `registration_1`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_information`
--
ALTER TABLE `seller_information`
  MODIFY `delivery_person_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
