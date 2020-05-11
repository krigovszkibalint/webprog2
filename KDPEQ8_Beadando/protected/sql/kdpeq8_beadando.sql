-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3308
-- Létrehozás ideje: 2020. Máj 11. 05:40
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
-- Tábla szerkezet ehhez a táblához `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `uploaded_by` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `images`
--

INSERT INTO `images` (`id`, `image`, `uploaded_by`) VALUES
(1, '41f0e248b124ee7ed61a165746c2746c36b66f50_00.jpg', ''),
(8, '0253ba5dd57ce3306f710b3ce7243a34.jpg', '11'),
(9, '124171.jpg', '11');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `title` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `uploaded_by` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `description`, `uploaded_by`) VALUES
(1, 'quake-1585708309409-8586.jpg', 'Quake', 'Quake wallpaper', '1');

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
  `profile` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `cover` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `bio` varchar(150) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'A felhasználó még nem tett közzé bemutatkozó szöveget a profilján',
  `permission` int(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile`, `cover`, `bio`, `permission`) VALUES
(1, 'krigovszki.balint', 'krigovszki.balint@gmail.com', 'e4e277cb53cfb4f3f07dc98454f4fc9b45b23a3d', '', '', 'Ez egy nagyon legit bio ami csak azért ilyen hosszú hogy megnézzem mennyi helyet foglal banánoslecsó lekváros szalámival meg hasonló finomságok', 1),
(2, 'TesztElek', 'tesztelek@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', '', '', 0),
(4, 'akos', 'krigovszki@gmail.com', '48748463d1fd1b8b1e98331f087187031fb6449c', '', '', '', 0),
(5, 'tothbela99', 'tothbela99@gmail.com', 'd51b6a593776bafbed753bc466fa7af99e558947', '', '', '', 0),
(6, 'admin', 'admin@gmail.com', 'e4e277cb53cfb4f3f07dc98454f4fc9b45b23a3d', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(7, 'permissionworkspls', 'permissionworkpls@ty.com', 'ccff0860425699a9f52654eb33d8d519cce20801', '', '', '', 1),
(8, 'aa123', 'aa321@gmail.com', 'd9a7b43d50ac7e36de03e0336b56a223a640aa8b', '', '', 'A felhasználó még nem tett közzé bemutatkozó szöveget a profilján', 1),
(9, 'user5723', 'user5723@gmail.com', '79dbd1fa6563c5ae0f5e6a7df6dcc1ee5c02e281', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(10, 'user3986', 'user3986@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', '', '1c1qh s8Pz pCau Llhc 3Z3 qxP3P f8JKUs SSjfobjG Q48qm Rt3NC moyJr9 1hM93Iih qWhXXqf RtaWtzi 408a9 reIxy O5w wIBI 8fCsep be MavoKZYU s5I9oTcaN xr7s0Vm', 1),
(11, 'TesztElek3', 'tesztelek3@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '0253ba5dd57ce3306f710b3ce7243a34.jpg', '124171.jpg', '\"Fighting a war tests a soldier’s skills, defending his home tests a soldier’s heart.\"', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
