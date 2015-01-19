-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 19 jan 2015 kl 10:56
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `berzapp`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `flode`
--

CREATE TABLE IF NOT EXISTS `flode` (
  `nyhet` varchar(999) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumpning av Data i tabell `flode`
--

INSERT INTO `flode` (`nyhet`, `id`) VALUES
('Hallå! Idag börjar det nya schemat! Woop.', 1),
('ads', 2),
('hgjfadsjkhaf', 3),
('sagdsdhhaj', 4),
('asdfasdf', 5),
('asdfasdf', 6),
('asdfasdf', 7),
('asdasd', 8),
('asdasd', 9),
('asdasd', 10),
('asdasd', 11),
('asdasd', 12),
('asdasd', 13),
('asdasd', 14),
('asdasd', 15);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `flode`
--
ALTER TABLE `flode`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `flode`
--
ALTER TABLE `flode`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
