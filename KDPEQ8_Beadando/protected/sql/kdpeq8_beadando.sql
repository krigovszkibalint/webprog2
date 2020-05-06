-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3308
-- Létrehozás ideje: 2020. Máj 04. 11:25
-- Kiszolgáló verziója: 8.0.18
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kdpeq8_beadando`
--
CREATE DATABASE IF NOT EXISTS `kdpeq8_beadando` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `kdpeq8_beadando`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `bio` varchar(150) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `permission` int(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `bio`, `permission`) VALUES
(1, 'krigovszki.balint', 'krigovszki.balint@gmail.com', 'e4e277cb53cfb4f3f07dc98454f4fc9b45b23a3d', 'Ez egy nagyon legit bio ami csak azért ilyen hosszú hogy megnézzem mennyi helyet foglal banánoslecsó lekváros szalámival meg hasonló finomságok', 1),
(2, 'TesztElek', 'tesztelek@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', 0),
(4, 'akos', 'krigovszki@gmail.com', '48748463d1fd1b8b1e98331f087187031fb6449c', '', 0),
(5, 'tothbela99', 'tothbela99@gmail.com', 'd51b6a593776bafbed753bc466fa7af99e558947', '', 0),
(6, 'admin', 'admin@gmail.com', 'e4e277cb53cfb4f3f07dc98454f4fc9b45b23a3d', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
