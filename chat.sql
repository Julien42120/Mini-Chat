-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 12, 2021 at 03:45 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `MSG`
--

CREATE TABLE `MSG` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `content` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MSG`
--

INSERT INTO `MSG` (`id`, `idUser`, `DateTime`, `content`) VALUES
(83, 41, '2021-03-10 15:00:53', 'Salut men'),
(102, 44, '2021-03-11 10:09:04', 'salut a vous '),
(120, 42, '2021-03-12 13:12:21', '😀 '),
(121, 42, '2021-03-12 13:16:42', '🤦 '),
(122, 42, '2021-03-12 14:21:13', '🐷 '),
(123, 42, '2021-03-12 14:32:40', '🏊🏼 '),
(124, 52, '2021-03-12 15:43:20', 'hhhhhh'),
(125, 52, '2021-03-12 15:43:28', '😋 ');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `AdresseIP` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `pseudo`, `DateTime`, `AdresseIP`, `password`, `color`) VALUES
(41, 'Max', '2021-03-10 14:44:25', '172.16.238.1', 'Max', '#29ce34'),
(42, 'Elea', '2021-03-10 20:45:33', '172.16.238.1', 'Elea', '#f9c0ca'),
(44, 'Ronan', '2021-03-10 20:46:17', '172.16.238.1', 'Ronan', '#b29125'),
(46, 'Susana', '2021-03-10 20:49:03', '172.16.238.1', 'Susana', '#ceb70c'),
(47, 'Florencia', '2021-03-10 20:50:38', '172.16.238.1', 'Florencia', '#c7c6ff'),
(48, 'Romain', '2021-03-10 20:50:55', '172.16.238.1', 'Romain', '#6ce85f'),
(49, 'Amilcar', '2021-03-10 20:51:36', '172.16.238.1', 'Amilcar', '#e5753d'),
(51, 'Hamza', '2021-03-10 20:52:16', '172.16.238.1', 'Hamza', '#a53d13'),
(52, 'Julien', '2021-03-10 20:52:27', '172.16.238.1', 'Julien', '#bad7ff'),
(74, 'toto', '2021-03-12 10:26:37', '172.16.238.1', 'toto', '#e2aa02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MSG`
--
ALTER TABLE `MSG`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_userId` (`idUser`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MSG`
--
ALTER TABLE `MSG`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `MSG`
--
ALTER TABLE `MSG`
  ADD CONSTRAINT `FK_userId` FOREIGN KEY (`idUser`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
