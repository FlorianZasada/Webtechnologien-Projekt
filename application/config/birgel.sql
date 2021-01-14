-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Jan 2021 um 15:18
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `birgel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eventcards`
--

CREATE TABLE `eventcards` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `eventcards`
--

INSERT INTO `eventcards` (`id`, `title`, `description`, `image`, `created`, `userid`) VALUES
(3, 'Burg', 'Besuche die heftige Burg in Birgel', 'Wasserburg_Birgel.jpg', '2021-01-12 13:10:00', 2),
(9, 'Schickes Haus', 'Ein wirklich schickes Haus', 'Brigel_Haus2.jpg', '2021-01-13 10:14:24', 2),
(11, 'Wasserrad', 'Birgel hat echt ein Wasserrad?!?', 'Birgel-b2.jpg', '2021-01-14 10:17:04', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `verification_key`, `is_email_verified`, `is_admin`) VALUES
(2, 'admin', 'admin', 'a@a.de', '$2y$10$KERzUg0mS.sSOCCngYD2KeaCS41qKpQZLinese0TAWVh6v5vAAQcm', '7c523e41f379333340add6484e4efee3', 'yes', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `eventcards`
--
ALTER TABLE `eventcards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `eventcards`
--
ALTER TABLE `eventcards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `eventcards`
--
ALTER TABLE `eventcards`
  ADD CONSTRAINT `eventcards_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
