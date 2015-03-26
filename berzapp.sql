-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 26 mars 2015 kl 14:50
-- Serverversion: 5.6.20
-- PHP-version: 5.6.3

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
  `rubrik` varchar(35) NOT NULL,
  `flode` varchar(999) NOT NULL,
  `filnamn` varchar(999) NOT NULL,
  `tid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumpning av Data i tabell `nyhet`
--

INSERT INTO `nyhet` (`id`, `rubrik`, `flode`, `filnamn`, `tid`) VALUES
(20, 'HEHEH', 'kasdklasdj', '602229778.jpg', '2015-03-26 13:06:34'),
(22, 'Lalalalalala', 'ASJDNADKS', '1095201864.jpg', '2015-03-26 13:36:42');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
