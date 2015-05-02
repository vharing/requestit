-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2015 at 12:59 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `requestit`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS materials;

CREATE TABLE `materials` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `call_number` varchar(12) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `request_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `title`, `author`, `call_number`, `status`, `request_id`, `updated_at`, `created_at`) VALUES
(1, 'stuff', 'author', '321', 'Available', 2, '2015-03-01 00:00:00', '2015-03-17 00:00:00'),
(2, 'Big stuff', 'Author2', '543', 'Available', 2, '2015-03-05 00:00:00', '2015-03-18 00:00:00'),
(3, 'Impending Doom', 'Jack O. Vall', '6669', 'Available', 1, '2015-04-09 01:46:11', '2015-04-09 01:46:11'),
(4, 'Things and Such', 'Elanor Bigsby', '', 'Not Available', 1, '2015-04-09 01:46:14', '2015-04-09 01:46:14'),
(5, 'Hey Jude', 'Pauly M.', NULL, 'Available', 1, NULL, NULL),
(8, 'Hustle Bustle', 'Theo B. Low', NULL, 'Available', 3, NULL, NULL),
(9, 'How to put things off to the last minute.', 'Prof. Inaminute', NULL, 'Available', 4, NULL, NULL),
(10, 'Learn PHP Using Hieroglyphics', 'Faroh Mysk Riptowt', '666-24-7', NULL, 7, '2015-04-27 20:07:52', '2015-04-27 20:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS requests;

CREATE TABLE `requests` (
`id` int(11) NOT NULL,
  `date_requested` date DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `student_id` int(25) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `special_instr` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `date_requested`, `first_name`, `status`, `last_name`, `student_id`, `email`, `phone`, `special_instr`, `campus`, `updated_at`, `created_at`) VALUES
(1, '2015-03-15', 'Mark', 'Open', 'Koberlein', 99999, 'mkoberlein@gmail.com', '999-999-9999', NULL, 'main', NULL, '2015-03-15 00:00:00'),
(2, '2015-03-15', 'Melissa', 'Available', 'Koberlein', 88888, 'melkoberlein@gmail.com', '999-999-9999', 'Get her done.', 'main', NULL, '2015-03-15 00:00:00'),
(3, '2015-03-12', 'Monique', 'Open', 'Lamson', 66666, 'lamson@gmail.com', '999-999-9999', NULL, 'monroe', NULL, '2015-03-15 00:00:00'),
(4, '2015-03-13', 'Monique', 'Open', 'Lamson', 66666, 'lamson@gmail.com', '999-999-9999', NULL, 'southside', NULL, '2015-03-15 00:00:00'),
(5, NULL, '', 'Open', '', 0, '', '', '', 'Main', '2015-04-09 01:46:11', '2015-04-09 01:46:11'),
(6, NULL, '', 'Open', '', 0, '', '', '', 'Main', '2015-04-09 01:46:14', '2015-04-09 01:46:14'),
(7, '2015-05-01', 'A', NULL, 'B', 123, 'andrewb@rcn.com', '1231231234', 'Good luck!', 'Main', '2015-04-27 20:07:52', '2015-04-27 20:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `role`, `password`) VALUES
(1, 'testuser1', 'John', 'Smith', 'jsmith@abc.com', 'test dummy', 'password'),
(2, 'testuser2', 'Jane', 'Smith', 'jsmithyness@123.com', 'lab rat', 'password2'),
(3, 'testuser3', 'Jim', 'Smith', 'jimsmith@abc.com', 'test dummy2', 'password3'),
(4, 'testuser4', 'Joan', 'Smith', 'joansmithyness@123.com', 'lab rat4', 'password4'),
(5, 'Soundwave13', 'AJ', 'BBB', 'ajbisson@rcn.com', 'admin', 'password'),
(6, 'ajb', 'Andrew', 'Bisson', 'invalid', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
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
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
