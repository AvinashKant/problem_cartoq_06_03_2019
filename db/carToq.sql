-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2019 at 09:10 PM
-- Server version: 10.2.18-MariaDB-1:10.2.18+maria~bionic-log
-- PHP Version: 7.2.11-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carToq`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_manager_tbl`
--

CREATE TABLE `ct_manager_tbl` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_dob` date NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_income` decimal(12,2) NOT NULL,
  `status` enum('1','2','3','') NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive,3-delete',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ct_user_tbl`
--

CREATE TABLE `ct_user_tbl` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_dob` date NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_income` decimal(12,2) NOT NULL,
  `status` enum('1','2','3','') NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive,3-delete',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_user_tbl`
--

INSERT INTO `ct_user_tbl` (`user_id`, `user_name`, `user_dob`, `user_email`, `user_address`, `user_income`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Avinash', '1964-09-16', 'avinah@gmail.com', 'noida', '888888.00', '1', '2019-03-06 21:09:56', '2019-03-06 21:09:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_manager_tbl`
--
ALTER TABLE `ct_manager_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ct_user_tbl`
--
ALTER TABLE `ct_user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct_manager_tbl`
--
ALTER TABLE `ct_manager_tbl`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ct_user_tbl`
--
ALTER TABLE `ct_user_tbl`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
