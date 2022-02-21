-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 03:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dt` date NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`id`, `name`, `phone`, `description`, `dt`, `email`) VALUES
(2, 'ahmad ali ', '00971988727472', 'i need consult about opening  new company in car trading', '2021-04-12', 'ahmad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post`, `image`, `dt`) VALUES
(4, 'dsada', 'dsadas', 'slide05.jpg', '2021-04-10 01:05:29'),
(8, 'adammmmmm', 'jxdkkkkkkkkkk', 'pic01.jpg', '2021-04-10 14:58:21'),
(9, 'test', 'is to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.\r\nis to be a globally admired and locally trusted Citizenship by Investment partner by ensuring every client receives the world-class service we believe they deserve.', 'pic01.jpg', '2021-04-12 23:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin', 'admin'),
(2, 'adam', 'adam@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
