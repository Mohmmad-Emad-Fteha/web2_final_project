-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2026 at 02:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_detailes`
--

CREATE TABLE `booking_detailes` (
  `id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_place` varchar(255) NOT NULL,
  `booking_price` varchar(255) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `model_year` int(4) NOT NULL,
  `car_color` varchar(255) NOT NULL,
  `booking_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_detailes`
--

INSERT INTO `booking_detailes` (`id`, `user_id`, `username`, `user_phone`, `user_place`, `booking_price`, `car_name`, `model_year`, `car_color`, `booking_date`) VALUES
(13, 21, 'user', '591234567', 'الوسطى', '180$', 'BMW', 2022, 'white', '2026-07-29 To 2026-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `car_photo` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) NOT NULL,
  `model_year` int(4) NOT NULL,
  `car_color` varchar(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_photo`, `car_name`, `model_year`, `car_color`, `price`) VALUES
(17, 'CarsPhoto/bmw.jpg', 'BMW', 2022, 'white', 180),
(18, 'CarsPhoto/kia.jpg', 'KIA', 2018, 'white', 90),
(19, 'CarsPhoto/ferrari.jpg', 'Ferrari', 2025, 'red', 300),
(20, 'CarsPhoto/ford.jpg', 'Ford', 2024, 'blue', 200);

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(11) NOT NULL,
  `problem_title` varchar(255) NOT NULL,
  `problem` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `problem_title`, `problem`) VALUES
(1, 'عدم وجود سيارات كافية للإيجار', 'لقد لاحظت في موقعكم عدم وجود سيارات للإيجار ارجو ان يتم اضافة سيارات  \n    '),
(4, 'test ', 'test test test test \r\n        \r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `user_licence` varchar(255) DEFAULT NULL,
  `user_place` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0 CHECK (`role` in (0,1)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `user_photo`, `user_licence`, `user_place`, `role`, `created_at`) VALUES
(20, 'Admin', '595428506', 'admin@gmail.com', '$2y$10$AllMdI3.TuP6xiUo/iJuT.OxLHg8aUV6eTXqxUkUrGHwFWHTpGMTq', 'upload/userPhoto6a688f6fbdecb6.45565398.jpg', 'upload/userLicence6a688f6fbded22.49398230.png', 'غزة', 1, '2026-07-28 11:15:59'),
(21, 'user', '591234567', 'user@gmail.com', '$2y$10$xuVLsV7KHXSSXVj31CQhhecbCdWlNYh7cx/bT1dhV4j3vVNeCTDR2', 'upload/userPhoto6a6893f36ee758.91016340.png', 'upload/userLicence6a6893f36ee7a7.88353052.jpg', 'الوسطى', 0, '2026-07-28 11:35:15'),
(22, 'test', '561234567', 'test1@gmail.com', '$2y$10$QHKotvKViFr1wUoDNXJR9eonrTNkRO7wkyHz0lOfC.5L7RsBnyBbm', 'upload/userPhoto6a6894d15b7138.99092530.jpg', 'upload/userLicence6a6894d15b71a9.95016420.jpg', 'خانيونس', 0, '2026-07-28 11:38:57'),
(23, 'test 2', '591231234', 'test22@gmail.com', '$2y$10$oGpC4miw6ywcVjZZAd.8mub8v37zuM8DNHIPHsO4ZBdMZ5XmVZ7Na', 'upload/userPhoto6a68950fcffe49.89874787.jpg', 'upload/userLicence6a68950fd00017.04506494.jpg', 'غزة', 0, '2026-07-28 11:39:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detailes`
--
ALTER TABLE `booking_detailes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detailes`
--
ALTER TABLE `booking_detailes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
