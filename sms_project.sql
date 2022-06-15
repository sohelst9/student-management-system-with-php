-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 10:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `parents_contact` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `class`, `shift`, `city`, `parents_contact`, `photo`, `datetime`) VALUES
(1, 'Sohel Ranassss', 936967, '5th', '2nd', 'sirajgong', '01775484658', '936967.jpg', '2019-10-29 20:17:38'),
(2, 'Amjad Shihab', 936945, '5th', '1st', 'Brahmanbaria', '01994037306', '936945.jpg', '2019-10-29 20:21:53'),
(3, 'Ahmmed Shakib', 936988, '5th', '2nd', 'Brahmanbaria', '01791794873', '936988.jpg', '2019-10-29 20:23:45'),
(4, 'Ahsun Ullah', 936978, '5th', '2nd', 'Brahmanbaria', '01725454778', '936978.jpg', '2019-10-29 20:24:47'),
(6, 'Ariful Haque Atik', 936971, '5th', '1st', 'Brahmanbaria', '01763833801', '936971.jpg', '2019-10-29 20:35:33'),
(7, 'Baijed Rana', 936989, '5th', '2nd', 'Cumilla', '01993410128', '936989.jpg', '2019-10-29 20:37:10'),
(8, 'Dhruba Biswas', 936983, '5th', '2nd', 'Narsingdi', '01745412365', '936983.jpg', '2019-10-29 20:38:57'),
(9, 'Hasibur Rahman', 936953, '5th', '2nd', 'Lakhsmipur', '01791794873', '936953.jpg', '2019-10-29 20:41:06'),
(16, 'Kamrul Shakil', 936972, '5th', '2nd', 'Brahmanbaria', '01354875421', '936972.jpg', '2019-11-03 19:42:44'),
(17, 'MD. Abu Siam', 936973, '5th', '1st', 'sirajgong', '01354875421', '936973.jpg', '2019-11-04 18:36:25'),
(18, 'sohag', 936947, '5th', '2nd', 'Mymensingh', '01745454545', '936947.jpg', '2019-11-10 08:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 'Sohel', 'sohelranasohel0@gmail.com', 'Sohel Rana', 'e436c52feb508c1280244eaa6e734ed1', 'Sohel Rana.jpg', 'active', '2019-11-09 09:12:39'),
(2, 'sohag', 'Sohag@gmail.com', 'Sohag Rana', '749ad6ae75fb781d79f0aeb1c4458db3', 'Sohag Rana.jpg', 'inactive', '2019-11-19 09:18:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
