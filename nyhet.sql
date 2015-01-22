-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 jan 2015 kl 14:50
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
-- Tabellstruktur `nyhet`
--

CREATE TABLE IF NOT EXISTS `nyhet` (
`id` int(11) NOT NULL,
  `flode` varchar(999) NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rubrik` varchar(35) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumpning av Data i tabell `nyhet`
--

INSERT INTO `nyhet` (`id`, `flode`, `datum`, `rubrik`) VALUES
(79, 'ASD', '2015-01-22 14:42:38', ''),
(80, 'ASD', '2015-01-22 14:42:38', ''),
(81, 'ASD', '2015-01-22 14:42:38', ''),
(82, 'ASD', '2015-01-22 14:42:38', ''),
(83, 'ASD', '2015-01-22 14:42:38', ''),
(84, 'FDGAGFDSAGHFDA', '2015-01-22 14:42:38', ''),
(85, 'ASDF', '2015-01-22 14:42:38', ''),
(86, 'ASFD', '2015-01-22 14:42:38', '');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `nyhet`
--
ALTER TABLE `nyhet`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `nyhet`
--
ALTER TABLE `nyhet`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
