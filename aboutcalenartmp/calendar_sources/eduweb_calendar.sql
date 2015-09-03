-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 11 Kwi 2013, 19:30
-- Wersja serwera: 5.1.66
-- Wersja PHP: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `eduweb_calendar`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` mediumtext COLLATE utf8_polish_ci NOT NULL,
  `event` longtext COLLATE utf8_polish_ci NOT NULL,
  `type` enum('regular','todo','appointment') COLLATE utf8_polish_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `events`
--

INSERT INTO `events` (`id`, `name`, `event`, `type`, `start_date`, `end_date`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Vestibulum eu tortor nisi. Mauris venenatis pretium condimentum. Curabitur sit amet mi in lacus varius sagittis ut vel nunc. Nulla eget arcu leo. Curabitur ut purus ut mauris facilisis mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque vulputate hendrerit ipsum, quis cursus eros sodales vitae. Curabitur nisi nisl, faucibus vehicula suscipit vel, rhoncus a elit. Duis imperdiet faucibus aliquam. Aenean ullamcorper luctus arcu vel dignissim. Nam vehicula vehicula malesuada. ', 'regular', '2013-04-08 18:44:09', '2013-04-12 13:23:32'),
(2, 'werty fsdfs ', 'sdf sdaf dsaf sadf sdffgdfgfdg34rgf sfwef dsxfEFRFDVSDsfg dfsgsdfb dfgdf vv dfvb dfvv ev dfvsdf dsf', 'todo', '2013-04-01 00:22:32', '2013-04-10 16:23:43'),
(3, 'Aenean viverra, metus ac lobortis lacinia, ligu', 'Cras semper bibendum sapien eu suscipit. In erat purus, congue et molestie id, rutrum sit amet purus. Aenean tempor eleifend aliquet. Ut cursus neque ut sapien lobortis et malesuada justo adipiscing. Pellentesque habitant morbi tristique senectus et netus et m', 'appointment', '2013-04-05 00:21:58', '2013-04-17 00:00:00'),
(4, 'Proin vitae est mauris, vitae euismod lacus', 'Vestibulum eu tortor nisi. Mauris venenatis pretium condimentum. Curabitur sit amet mi in lacus varius sagittis ut vel nunc. Nulla eget arcu leo. Curabitur ut purus ut mauris facilisis mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque vulputate hendrerit ipsum, quis cursus eros sodales vitae. Curabitur nisi nisl, faucibus vehicula suscipit vel, rhoncus a elit. Duis imperdiet faucibus aliquam. Aenean ullamcorper luctus arcu vel dignissim. Nam vehicula vehicula malesuada. ', 'todo', '2013-04-08 00:24:32', '2013-04-08 02:00:00'),
(5, 'Donec faucibus mattis sem et dignissim.', 'Proin vitae est mauris, vitae euismod lacus. Vivamus ullamcorper mauris dapibus quam viverra sed gravida urna ornare. Nullam porta, purus ac pellentesque interdum, diam turpis mattis nibh, ac placerat est felis non turpis. Nunc mi augue, mattis vel auctor non, convallis quis velit. Phasellus venenatis, tellus sit amet adipiscing varius, magna libero scelerisque mauris, vel consectetur mauris mauris vitae lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eu purus enim, at elementum lectus. Nam', 'regular', '2013-04-08 00:25:36', '2013-04-09 00:00:00');
