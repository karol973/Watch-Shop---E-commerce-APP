-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2022, 00:11
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products_case`
--

CREATE TABLE `products_case` (
  `id_item` int(11) NOT NULL,
  `name_item` varchar(55) COLLATE utf8_polish_ci NOT NULL,
  `price` varchar(55) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products_case`
--

INSERT INTO `products_case` (`id_item`, `name_item`, `price`) VALUES
(1, 'Case1', '365.00'),
(2, 'Case2', '325.00'),
(3, 'Case3', '413.50');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products_strap`
--

CREATE TABLE `products_strap` (
  `id_item` int(11) NOT NULL,
  `name_item` varchar(55) COLLATE utf8_polish_ci NOT NULL,
  `price` varchar(55) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products_strap`
--

INSERT INTO `products_strap` (`id_item`, `name_item`, `price`) VALUES
(1, 'Strap1', '150.00'),
(2, 'Strap2', '325.00'),
(3, 'Strap3', '413.50'),
(4, 'Strap4', '122.00'),
(5, 'Strap5', '258.50'),
(6, 'Strap6', '378.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'karol', '8fa14cdd754f91cc6554c9e71929cce7', 'karolek973@wp.pl'),
(2, 'karol', '5a23d9c560b54f45fa158e234acef1ad', 'przybyszkarol97@gmail.com'),
(3, 'karol', '90372b4844fe6c942a6103f04ec40813', 'karolek9733@wp.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products_case`
--
ALTER TABLE `products_case`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeksy dla tabeli `products_strap`
--
ALTER TABLE `products_strap`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `products_case`
--
ALTER TABLE `products_case`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `products_strap`
--
ALTER TABLE `products_strap`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
