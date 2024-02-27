-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 08:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracast`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestnoveles`
--

CREATE TABLE `bestnoveles` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `rank` tinyint(1) NOT NULL,
  `author` varchar(100) NOT NULL,
  `published` int(11) NOT NULL,
  `isbn13` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestnoveles`
--

INSERT INTO `bestnoveles` (`id`, `title`, `rank`, `author`, `published`, `isbn13`) VALUES
(1, 'A House for Mr. Biswas', 0, 'V.S. Naipaul', 1992, '9780140186048'),
(2, 'A Handful of Dust', 0, 'Evelyn Waugh', 1951, '9780140008227'),
(3, 'A Death in the Family', 0, 'James Agee', 1985, '9780553270112'),
(4, 'A Dance to the Music of Time', 0, 'Anthony Powell', 1971, '9780434599196'),
(5, 'A Clockwork Orange', 0, 'Anthony Burgess', 1986, '9780393312836');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES
(1, 'Ideja za godisnji odmor', 1),
(2, 'Ideja za sledeci projekat', 2),
(3, 'Podsetnik za posao', 1),
(4, 'Dizajn za novi blog post', 2),
(7, 'Novi note ', 1),
(8, 'Jos jedan note ', 1),
(9, 'Pregledati knjigu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(1, 'Dejan', 'zile028@gmail.com'),
(2, 'David', 'zdejan028@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestnoveles`
--
ALTER TABLE `bestnoveles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
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
-- AUTO_INCREMENT for table `bestnoveles`
--
ALTER TABLE `bestnoveles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
