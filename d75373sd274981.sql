-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Okt 22, 2019 kell 01:59 PL
-- Serveri versioon: 10.1.38-MariaDB
-- PHP versioon: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `d75373sd274981`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `consultation`
--

CREATE TABLE `consultation` (
  `consID` int(11) NOT NULL,
  `consname` varchar(100) DEFAULT NULL,
  `consdesc` varchar(250) DEFAULT NULL,
  `teacher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Andmete tõmmistamine tabelile `consultation`
--

INSERT INTO `consultation` (`consID`, `consname`, `consdesc`, `teacher`) VALUES
(1, 'Testing Cons', 'Consultation for Testing topic, provided by Vasiliy Strelcov!', 8);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `registrations`
--

CREATE TABLE `registrations` (
  `regID` int(11) NOT NULL,
  `consID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `teachID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Andmete tõmmistamine tabelile `registrations`
--

INSERT INTO `registrations` (`regID`, `consID`, `userID`, `teachID`) VALUES
(1, 1, 7, 8);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `name`, `E-mail`) VALUES
(1, 'jadaun', '$2y$10$rHL3bapZkJN7P3cYG8EazefKWRKutRS0ON0yqwfxDgKEcJpqwAHfy', '2019-10-22 09:27:06', '', ''),
(7, 'Difictly', '$2y$10$Xw36k2c7EGR4r7WWuaJnceEJKqxR/cv.6O3pnbfQaB5Rv5.XfGbXa', '2019-10-22 09:50:38', 'Danil Gritsenko', ''),
(8, 'vasya', '$2y$10$D3bkJmcHD0PdAS5m.oXOm.aWdLMGu.l0K0zyJMu9gkO9aQJbPqYvG', '2019-10-22 10:09:53', 'Vasiliy Strelcov', ''),
(9, 'WHOAMI', '$2y$10$GqQGXGDj3SMSg2wxjfrKC.agLTWr/9FFOYPaL65xhv3HZxNRvcSBa', '2019-10-22 12:52:27', 'Vladimir Trohhalev', '');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consID`);

--
-- Indeksid tabelile `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`regID`);

--
-- Indeksid tabelile `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabelile `registrations`
--
ALTER TABLE `registrations`
  MODIFY `regID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabelile `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
