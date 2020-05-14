-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3308
-- Létrehozás ideje: 2020. Máj 13. 23:53
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `images`
--

INSERT INTO `images` (`id`, `image`, `uploaded_by`) VALUES
(1, '41f0e248b124ee7ed61a165746c2746c36b66f50_00.jpg', ''),
(8, '0253ba5dd57ce3306f710b3ce7243a34.jpg', '11'),
(9, '124171.jpg', '11'),
(10, 'KOTOR2Nihilus.jpg', '12'),
(13, '124171423535.jpg', '12'),
(14, 'avatar.jpg', '1'),
(15, '74623.jpg', '1'),
(16, 'n0WkLpb.jpg', '1'),
(17, '41f0e248b124ee7ed61a165746c2746c36b66f50_00.jpg', '13'),
(18, 'letöltés.jpg', '13'),
(19, 'profile15415.PNG', '15'),
(20, '1bccc78816d9af12bf390bc0adbbed96.jpg', '15'),
(21, 'bainebloodhoof.PNG', '16'),
(22, '963d281b3894d0079575c6de0e791b71.jpg', '16'),
(23, 'thumb-1920-400140.jpg', '16'),
(24, '178339-mulgore.jpg', '16'),
(25, 'obiwan.PNG', '17'),
(26, 'dMcIUD.jpg', '17'),
(27, 'visor.PNG', '18'),
(28, '2153672.jpg', '18'),
(29, 'thumb-1920-718707.jpg', '18'),
(30, 'art.PNG', '19'),
(31, '59e44788a6d027b190ce14db7361c27b7e59cc47.jpeg', '19'),
(32, 'tumblr_87ed2f51d2c737b53663bd452b4f3022_09db0bb4_1280.jpg', '19');

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
  `upload_date` date NOT NULL,
  `uploaded_by` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `description`, `upload_date`, `uploaded_by`) VALUES
(1, 'star-wars-art321321 1920x1080.jpg', 'Delta Squad', 'I wonder what the weather\'s like on Kamino right now.', '2020-05-11', '1'),
(4, '54211.jpg', 'Clone Troopers', 'Phase 1 and 2 clone troopers', '2020-04-30', '1'),
(6, 'wallpapersden.com_star-wars-the-rise-of-skywalker_1920x1080.jpg', 'Kylo Ren vs Rey', 'wallpapersden.com', '2020-05-01', '1'),
(7, '8-83107_largest-collection-of-star-wars-wallpapers-for-free.jpg', 'Star Wars Collage', 'Collage', '2020-04-28', '1'),
(8, '124131.jpg', 'Star Wars', 'The Force Awakens', '2020-05-09', '1'),
(9, 'JediTemple00-2400x1200-784013996319.jpg', 'Jedi Temple', 'Jedi Temple on Coruscant', '2020-05-07', '1'),
(10, 'planet_space_stars_128150_2560x1440.jpg', 'Planet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-04-26', '13'),
(11, '496831.jpg', 'Millennium Falcon', 'You\'ve never heard of the Millennium Falcon?', '2020-05-06', '1'),
(17, '648221.jpg', 'Stormtroopers', 'Stormtroopers description', '2020-05-09', '1'),
(21, 'autumn_forest_park_128379_1920x1080.jpg', 'Autumn', '“It looked like the world was covered in a cobbler crust of brown sugar and cinnamon.”', '2020-05-02', '15'),
(23, 'landscapes forest 1920x1080 wallpaper_www.miscellaneoushi.com_38.jpg', 'Woods', 'A really nice picture taken in the woods.', '2020-04-17', '15'),
(24, 'Free-download-landscape-ocean-beach-HD-Desktop-Wallpaper-HD-.jpg', 'Beach', 'A really nice TOTALLY NOT PHOTOSHOPPED photo of a beach.', '2020-03-07', '15'),
(25, 'kRSbHZ.jpg', 'Lake', 'Just trying to fill the page with content', '2020-04-22', '15'),
(26, '2103215.jpg', 'Swamp', 'What are you doing in my swamp?', '2020-05-01', '15'),
(27, 'dce2kqo-65588796-52c3-406c-8e00-1ce3a13fda82.jpg', 'Baine Bloodhoof', 'A picture of me :)', '2020-05-10', '16'),
(28, 'wp2183899.jpg', 'Druid', 'Photo of a restoration druid.', '2020-05-08', '16'),
(29, 'world-of-warcraft-tauren-wow.jpg', 'Tauren', 'A tauren hunter gazing into the sunset.', '2020-05-02', '16'),
(30, 'Q9SjU4QA9lm-5-_TabmcpyRfRJ3Ktk9iLuGi3jquyR0.jpg', 'Tauren Druid', 'A tauren druid in the forest.', '2020-04-25', '16'),
(31, '2fAQu6.jpg', 'Mustafar', 'A short trip to Mustafar', '2020-01-18', '17'),
(32, '9oC7GB.jpg', 'Jedi Temple', 'Inside the Jedi Temple on Coruscant', '2020-04-18', '17'),
(33, 'Millennium-Falcon-Over-Tatooine-wallpapers-in-2019-Star-.jpg', 'Tatooine', 'Sand.', '2020-05-03', '17'),
(34, 'dce36077003c4ada4367d0cc0f26b2dd.jpg', 'Ranger', 'Ranger on Blood Covenant', '2020-02-07', '18'),
(35, 'quake-champions-wallpaper-best-of-nyx-quake-champions-4k-8k-wallpapers-hd-wallpapers-for-you-of-quake-champions-wallpaper.jpg', 'Nyx', 'Nyx from Quake Champions.', '2020-05-01', '18'),
(36, 'landscape_art_moon_127187_1920x1080.jpg', 'Landscape', 'Totally my own work.', '2020-05-10', '19'),
(37, '9644.jpg', 'Rainy day', 'More landscape.', '2020-03-12', '19'),
(38, '1920x1080_px_Colorful_digital_art_landscape_mountains-1422103.jpg', 'Colorful land', 'Even more landscape.', '2020-05-04', '19'),
(39, '38-389303_wallpaper-pair-sunset-landscape-romance-art-sunset-landscape.jpg', 'Autumn Sunset', 'A picture of a couple and their cat in the sunset.', '2020-05-03', '19'),
(40, '6dacadb34405a12b385efe2a69721329.jpg', 'Fantasy Landscape', 'Icy landscape', '2020-01-14', '19');

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
  `bio` varchar(210) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'A felhasználó még nem tett közzé bemutatkozó szöveget a profilján',
  `permission` int(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile`, `cover`, `bio`, `permission`) VALUES
(1, 'krigovszki.balint', 'krigovszki.balint@gmail.com', 'e4e277cb53cfb4f3f07dc98454f4fc9b45b23a3d', 'n0WkLpb.jpg', '74623.jpg', '“I wanted to be Master of the Sith and ruler of the galaxy. But that destiny was not mine, Revan. It might have been yours, perhaps . . . but never mine. And in the end, as the darkness takes me, I am nothing.”', 1),
(2, 'TesztElek', 'tesztelek@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', '', '', 0),
(7, 'permissionworkspls', 'permissionworkpls@ty.com', 'ccff0860425699a9f52654eb33d8d519cce20801', '', '', '', 1),
(10, 'user3986', 'user3986@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', '', '1c1qh s8Pz pCau Llhc 3Z3 qxP3P f8JKUs SSjfobjG Q48qm Rt3NC moyJr9 1hM93Iih qWhXXqf RtaWtzi 408a9 reIxy O5w wIBI 8fCsep be MavoKZYU s5I9oTcaN xr7s0Vm', 1),
(11, 'TesztElek3', 'tesztelek3@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '0253ba5dd57ce3306f710b3ce7243a34.jpg', '124171.jpg', '\"Fighting a war tests a soldier’s skills, defending his home tests a soldier’s heart.\"', 1),
(12, 'Darth Nihilus', 'sithlord1@korriban.com', 'ece5465119f1c05e34e629268887566997621c36', 'KOTOR2Nihilus.jpg', '124171423535.jpg', '“Evil is a word used by the ignorant and the weak. The dark side is about survival. It’s about unleashing your inner power. It glorifies the strength of the individual.”', 1),
(13, 'teszt0511', 'teszt0511@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '41f0e248b124ee7ed61a165746c2746c36b66f50_00.jpg', 'letöltés.jpg', 'A felhasználó még nem tett közzé bemutatkozó szöveget a profilján', 1),
(14, 'adminteszt', 'adminteszt@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '', '', 2),
(15, 'photographer', 'photographer@yahoo.com', '9ce9b6ec6aadf67c216323baff5ccd9295471354', 'profile15415.PNG', '1bccc78816d9af12bf390bc0adbbed96.jpg', '“Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything.”', 1),
(16, 'Baine Bloodhoof', 'baine@thunderbluff.taur-ahe', '3bd5febfa6613f634b4f8ad16bb3f1a4fbe19afe', 'bainebloodhoof.PNG', '178339-mulgore.jpg', 'Greetings young one, and welcome to Thunder Bluff. You\'ll find safe refuge from the burdens of the world here.', 1),
(17, 'Obi-Wan Kenobi', 'obiwankenobi@jedicouncil.com', 'e4005f5151d3e475df8e1de9130b76f899c37c5e', 'obiwan.PNG', 'dMcIUD.jpg', 'If you define yourself by the power to take life, the desire to dominate, to possess…then you have nothing.', 1),
(18, 'quakepro', 'quakepro@gmail.com', '3da34ad3d19c0943a822929946b4a368c7b84edc', 'visor.PNG', 'thumb-1920-718707.jpg', 'Visor is an enigma who says nothing about his past, letting his weapons do all his talking for him.', 1),
(19, 'graphicsdesign', 'graphicsdesign01@gmail.com', '85bf98024248834ce70f0d72b35cd868efc92bd8', 'art.PNG', 'tumblr_87ed2f51d2c737b53663bd452b4f3022_09db0bb4_1280.jpg', '“There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for.” ', 1),
(21, 'user197', 'user197@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', '', 'A felhasználó még nem tett közzé bemutatkozó szöveget a profilján', 0),
(22, 'user872', 'user872@gmail.com', 'acfbf9a342f8a26df95b47ce1716516ccba0ec24', '', '', 'A felhasználó még nem tett közzé bemutatkozó szöveget a profilján', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
