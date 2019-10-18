-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: d75373.mysql.zonevs.eu
-- Loomise aeg: Okt 18, 2019 kell 12:23 PL
-- Serveri versioon: 10.2.27-MariaDB-log
-- PHP versioon: 7.2.18

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
-- Tabeli struktuur tabelile `consultations`
--

CREATE TABLE `consultations` (
  `consID` int(11) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `constime` datetime DEFAULT NULL,
  `teacher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `consultationsReg`
--

CREATE TABLE `consultationsReg` (
  `regid` int(11) NOT NULL,
  `consID` int(11) DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `teacherID` int(11) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `consultationsRoles`
--

CREATE TABLE `consultationsRoles` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `consultationsRoles`
--

INSERT INTO `consultationsRoles` (`roleID`, `roleName`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `consultationsUser`
--

CREATE TABLE `consultationsUser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `roleid` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`consID`);

--
-- Indeksid tabelile `consultationsReg`
--
ALTER TABLE `consultationsReg`
  ADD PRIMARY KEY (`regid`);

--
-- Indeksid tabelile `consultationsRoles`
--
ALTER TABLE `consultationsRoles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indeksid tabelile `consultationsUser`
--
ALTER TABLE `consultationsUser`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT tabelile `consultations`
--
ALTER TABLE `consultations`
  MODIFY `consID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabelile `consultationsReg`
--
ALTER TABLE `consultationsReg`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabelile `consultationsRoles`
--
ALTER TABLE `consultationsRoles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT tabelile `consultationsUser`
--
ALTER TABLE `consultationsUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabelile `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
