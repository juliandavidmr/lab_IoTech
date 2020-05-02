-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 07:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iotech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE `proyecto` (
  `id` bigint(20) NOT NULL,
  `nombreEmpresa` varchar(255) NOT NULL,
  `nit` varchar(100) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `propuesta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombreEmpresa`, `nit`, `telefono`, `email`, `propuesta`) VALUES
(1, 'Empresa', '3123432-4324', 'Bogotá', 'anlijudavid@gmail.com', 'vvvvvvvvvv'),
(2, 'OtraEmpresa', 'ddd', 'Bogotá', 'anlijudavid@gmail.com', 'dddd'),
(3, 'OtraEmpresa', 'ddd', 'Bogotá', 'anlijudavid@gmail.com', 'dddd'),
(4, 'Bizagi', 'H', 'Hola', 'julian.mora@bizagi.com', 'The addslashes() function is different from addcslashes() function accepts specified characters before which be want to add slashes but the addslashes() function doesnot accepts any character in parameters, rather it adds slashes before some specified characters.'),
(5, 'Shared Module', '3122-43233', 'Bogotá', 'anlijudavid@gmail.com', 'Create the reducer function. Inside this function, we modify the state in a pure way — we don’t mutate properties directly on the state. Whenever we want to print out the next output, invoked by the NEXT action, we increment the counter and create the message. Inside the switch statement, the default case is very important. When the reducer retrieves an action it isn’t responsible for (every reducer gets invoked by any action), we return the state as is. Without the default return case, the state would become undefined.');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(0, 'test', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
