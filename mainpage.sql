-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Cze 2021, 22:11
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mjanicki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mainpage`
--

CREATE TABLE `mainpage` (
  `id` int(11) DEFAULT NULL,
  `news1` varchar(255) DEFAULT NULL,
  `news2` varchar(255) DEFAULT NULL,
  `news3` varchar(255) DEFAULT NULL,
  `news4` varchar(255) DEFAULT NULL,
  `special1` varchar(255) DEFAULT NULL,
  `special2` varchar(255) DEFAULT NULL,
  `special3` varchar(255) DEFAULT NULL,
  `special4` varchar(255) DEFAULT NULL,
  `special5` varchar(255) DEFAULT NULL,
  `content1` varchar(255) DEFAULT NULL,
  `content2` varchar(255) DEFAULT NULL,
  `content3` varchar(255) DEFAULT NULL,
  `content4` varchar(255) DEFAULT NULL,
  `content5` varchar(255) DEFAULT NULL,
  `button1` varchar(255) DEFAULT NULL,
  `button2` varchar(255) DEFAULT NULL,
  `button3` varchar(255) DEFAULT NULL,
  `button4` varchar(255) DEFAULT NULL,
  `button5` varchar(255) DEFAULT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `featured1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `mainpage`
--

INSERT INTO `mainpage` (`id`, `news1`, `news2`, `news3`, `news4`, `special1`, `special2`, `special3`, `special4`, `special5`, `content1`, `content2`, `content3`, `content4`, `content5`, `button1`, `button2`, `button3`, `button4`, `button5`, `featured`, `featured1`) VALUES
(1, 'News 1 ', 'News 2', 'News 3', 'News 4', 'Special title treatment', 'Special title treatment', 'Special title treatment', 'Special title treatment', 'Special title treatment', 'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', 'Go somewhere', 'Go somewhere', 'Go somewhere', 'Go somewhere', 'More', 'Featured', '2 days ago');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
