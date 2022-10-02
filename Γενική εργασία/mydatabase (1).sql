-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 08 Ιαν 2020 στις 09:59:11
-- Έκδοση διακομιστή: 10.4.8-MariaDB
-- Έκδοση PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `mydatabase`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `myform1`
--

CREATE TABLE `myform1` (
  `telikhtimh` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `hlikia` int(20) NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `payment` varchar(40) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `myform1`
--

INSERT INTO `myform1` (`telikhtimh`, `username`, `password`, `name`, `email`, `hlikia`, `birth`, `address`, `payment`, `comment`) VALUES
(0, 'gg', 'ggg', 'χρηστος', 'axilleas@gmail.com', 13, '2019-12-05', 'gg', 'antikataboli', 'g'),
(0, 'kk', 'kk', 'χρηστος', 'xristoskitharistas@gmail.com', 13, '2019-12-10', 'AsaS', 'antikataboli', ''),
(0, 'rrf', 'frf', 'rf', 'xristoskitharistas@gmail.com', 19, '2019-12-05', 'frf', 'antikataboli', 'frfr'),
(0, 'hgvhg', 'ηηη', 'ξβλη', 'xristoskitharistas@gmail.com', 11, '2019-12-19', 'λκκλξκ', 'antikataboli', 'κξ΄θιηιπθ'),
(0, 'hgvhg', 'l', 'χρηστος', 'xristoskitharistas@gmail.com', 13, '2020-01-09', 'k', 'antikataboli', ''),
(0, 'hgvhg', 'kgyj', 'χρηστος', 'xristoskitharistas@gmail.com', 13, '2020-01-01', 'knljk', 'antikataboli', ',jn'),
(0, 'hgvhg', 'hlj', 'χρηστος', 'xristoskitharistas@gmail.com', 12, '2020-01-08', 'jk', 'antikataboli', 'jj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
