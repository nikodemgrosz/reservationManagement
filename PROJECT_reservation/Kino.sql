-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sty 03, 2024 at 01:00 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Kino`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Film`
--

CREATE TABLE `Film` (
  `FilmID` int(11) NOT NULL,
  `Tytul` varchar(255) NOT NULL,
  `Rezyser` varchar(100) DEFAULT NULL,
  `RokProdukcji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Film`
--

INSERT INTO `Film` (`FilmID`, `Tytul`, `Rezyser`, `RokProdukcji`) VALUES
(1, 'Film4', 'Rezyser4', 2020),
(2, 'Film5', 'Rezyser5', 2019),
(3, 'Film6', 'Rezyser6', 2022),
(4, 'Film7', 'Rezyser7', 2021),
(5, 'Film8', 'Rezyser8', 2023),
(6, 'Film9', 'Rezyser9', 2020),
(7, 'Film10', 'Rezyser10', 2021),
(8, 'Film11', 'Rezyser11', 2019),
(9, 'Film12', 'Rezyser12', 2022),
(10, 'Film13', 'Rezyser13', 2023),
(11, 'Film14', 'Rezyser14', 2021),
(12, 'Film15', 'Rezyser15', 2020),
(13, 'Film16', 'Rezyser16', 2022),
(14, 'Film17', 'Rezyser17', 2019),
(15, 'Film18', 'Rezyser18', 2020),
(16, 'Film19', 'Rezyser19', 2021),
(17, 'Film20', 'Rezyser20', 2023);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Rezerwacja`
--

CREATE TABLE `Rezerwacja` (
  `RezerwacjaID` int(11) NOT NULL,
  `FilmID` int(11) DEFAULT NULL,
  `SalaID` int(11) DEFAULT NULL,
  `DataGodzina` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Rezerwacja`
--

INSERT INTO `Rezerwacja` (`RezerwacjaID`, `FilmID`, `SalaID`, `DataGodzina`) VALUES
(53, 1, 1, '2022-01-10 18:30:00'),
(54, 2, 2, '2022-01-11 19:00:00'),
(55, 3, 3, '2022-01-12 20:15:00'),
(56, 4, 4, '2022-01-13 17:45:00'),
(57, 5, 5, '2022-01-14 21:00:00'),
(58, 6, 6, '2022-01-15 16:30:00'),
(59, 7, 7, '2022-01-16 18:45:00'),
(60, 8, 8, '2022-01-17 19:30:00'),
(61, 9, 9, '2022-01-18 20:00:00'),
(62, 10, 10, '2022-01-19 21:15:00'),
(63, 11, 11, '2022-01-20 17:30:00'),
(64, 12, 12, '2022-01-21 19:45:00'),
(65, 13, 13, '2022-01-22 20:30:00'),
(66, 14, 14, '2022-01-23 21:00:00'),
(67, 15, 15, '2022-01-24 18:15:00'),
(68, 16, 16, '2022-01-25 19:30:00'),
(69, 17, 17, '2022-01-26 20:45:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Sala`
--

CREATE TABLE `Sala` (
  `SalaID` int(11) NOT NULL,
  `NumerSali` int(11) NOT NULL,
  `LiczbaMiejsc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Sala`
--

INSERT INTO `Sala` (`SalaID`, `NumerSali`, `LiczbaMiejsc`) VALUES
(1, 4, 35),
(2, 5, 45),
(3, 6, 50),
(4, 7, 40),
(5, 8, 30),
(6, 9, 55),
(7, 10, 42),
(8, 11, 38),
(9, 12, 48),
(10, 13, 33),
(11, 14, 36),
(12, 15, 46),
(13, 16, 31),
(14, 17, 43),
(15, 18, 49),
(16, 19, 37),
(17, 20, 44);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Film`
--
ALTER TABLE `Film`
  ADD PRIMARY KEY (`FilmID`);

--
-- Indeksy dla tabeli `Rezerwacja`
--
ALTER TABLE `Rezerwacja`
  ADD PRIMARY KEY (`RezerwacjaID`),
  ADD KEY `FilmID` (`FilmID`),
  ADD KEY `SalaID` (`SalaID`);

--
-- Indeksy dla tabeli `Sala`
--
ALTER TABLE `Sala`
  ADD PRIMARY KEY (`SalaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Film`
--
ALTER TABLE `Film`
  MODIFY `FilmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Rezerwacja`
--
ALTER TABLE `Rezerwacja`
  MODIFY `RezerwacjaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `Sala`
--
ALTER TABLE `Sala`
  MODIFY `SalaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Rezerwacja`
--
ALTER TABLE `Rezerwacja`
  ADD CONSTRAINT `Rezerwacja_ibfk_1` FOREIGN KEY (`FilmID`) REFERENCES `Film` (`FilmID`),
  ADD CONSTRAINT `Rezerwacja_ibfk_2` FOREIGN KEY (`SalaID`) REFERENCES `Sala` (`SalaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
