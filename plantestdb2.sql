-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 28 Wrz 2015, 00:30
-- Wersja serwera: 5.6.25-0ubuntu0.15.04.1
-- Wersja PHP: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `plantestdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `godziny`
--

CREATE TABLE IF NOT EXISTS `godziny` (
`id` int(11) NOT NULL,
  `od` time NOT NULL,
  `do` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `godziny`
--

INSERT INTO `godziny` (`id`, `od`, `do`) VALUES
(1, '15:00:00', '16:00:00'),
(2, '16:00:00', '17:00:00'),
(3, '17:00:00', '18:00:00'),
(4, '18:00:00', '19:00:00'),
(5, '19:00:00', '20:00:00'),
(6, '20:00:00', '21:00:00'),
(7, '21:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
`id` int(11) NOT NULL,
  `data` date NOT NULL,
  `godz_id` int(11) NOT NULL,
  `zajecia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `plan`
--

INSERT INTO `plan` (`id`, `data`, `godz_id`, `zajecia_id`) VALUES
(2, '2011-01-11', 1, 1),
(4, '2011-01-11', 2, 1),
(5, '2011-01-12', 1, 1),
(9, '2011-01-11', 3, 1),
(10, '2011-01-11', 6, 2),
(11, '2011-01-11', 7, 2),
(12, '2015-09-03', 3, 2),
(14, '2015-09-03', 4, 1),
(15, '2015-09-03', 5, 2),
(16, '2015-09-03', 6, 2),
(17, '2015-09-03', 7, 2),
(19, '2015-09-03', 1, 1),
(20, '2015-09-03', 2, 1),
(25, '2015-09-07', 2, 1),
(26, '2015-09-07', 3, 2),
(27, '2015-09-08', 2, 1),
(28, '2015-09-08', 5, 2),
(29, '2015-09-09', 4, 1),
(30, '2015-09-09', 6, 1),
(31, '2015-09-16', 2, 1),
(32, '2015-09-16', 4, 2),
(33, '2015-09-17', 5, 1),
(34, '2015-09-17', 2, 2),
(37, '2015-09-18', 3, 1),
(38, '2015-09-18', 4, 1),
(39, '2015-09-27', 2, 1),
(40, '2015-09-27', 3, 3),
(41, '2015-09-28', 2, 1),
(42, '2015-09-28', 4, 1),
(43, '2015-09-28', 5, 2),
(44, '2015-09-28', 6, 3),
(45, '2015-09-28', 7, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan_user`
--

CREATE TABLE IF NOT EXISTS `plan_user` (
  `id_user` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `plan_user`
--

INSERT INTO `plan_user` (`id_user`, `id_plan`) VALUES
(1, 12),
(1, 15),
(1, 16),
(1, 33),
(1, 39),
(2, 12),
(2, 15),
(2, 16),
(2, 20),
(2, 31),
(2, 37),
(2, 38),
(3, 37),
(3, 38);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `Imie` varchar(20) NOT NULL,
  `haslo` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `Imie`, `haslo`) VALUES
(1, 'Kalka', ''),
(2, 'Julka', 'Julka'),
(3, 'aaa', 'aaa'),
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zajecia`
--

CREATE TABLE IF NOT EXISTS `zajecia` (
`id` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zajecia`
--

INSERT INTO `zajecia` (`id`, `nazwa`) VALUES
(1, 'zumba'),
(2, 'body latino'),
(3, 'pilates'),
(4, 'fat burning');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `godziny`
--
ALTER TABLE `godziny`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `data` (`data`,`godz_id`), ADD KEY `ForeignIn` (`godz_id`);

--
-- Indexes for table `plan_user`
--
ALTER TABLE `plan_user`
 ADD PRIMARY KEY (`id_user`,`id_plan`), ADD KEY `ForeignUser` (`id_user`), ADD KEY `ForeignIdPlan` (`id_plan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `zajecia`
--
ALTER TABLE `zajecia`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `godziny`
--
ALTER TABLE `godziny`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `plan`
--
ALTER TABLE `plan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `zajecia`
--
ALTER TABLE `zajecia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `plan`
--
ALTER TABLE `plan`
ADD CONSTRAINT `Foreign` FOREIGN KEY (`godz_id`) REFERENCES `godziny` (`id`);

--
-- Ograniczenia dla tabeli `plan_user`
--
ALTER TABLE `plan_user`
ADD CONSTRAINT `ForeignIdPlan` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`),
ADD CONSTRAINT `plan_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
