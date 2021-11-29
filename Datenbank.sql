-- phpMyAdmin SQL Dump
-- version 5.1.0
--
-- Erstellungszeit: 28. Nov 2021 um 23:54
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `testka`
--
CREATE DATABASE IF NOT EXISTS `testka` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testka`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `daten`
--

CREATE TABLE `daten` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `klasse` varchar(64) NOT NULL,
  `beschreibung` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `daten`
--
ALTER TABLE `daten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `daten`
--
ALTER TABLE `daten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
-- --------------------------------------------------------