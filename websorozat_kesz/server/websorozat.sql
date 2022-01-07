-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Dec 07. 10:59
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `websorozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `feltoltesek`
--

CREATE TABLE `feltoltesek` (
  `id` int(11) NOT NULL,
  `vidcim` text COLLATE utf8_hungarian_ci NOT NULL,
  `tipus` text COLLATE utf8_hungarian_ci NOT NULL,
  `sorozatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `feltoltesek`
--

INSERT INTO `feltoltesek` (`id`, `vidcim`, `tipus`, `sorozatid`) VALUES
(1, 'MURDER DRONES: PILOT', 'pilot', 3),
(2, 'MURDER DRONES [Official Trailer]', 'előzetes', 3),
(3, 'Nice Corpse House My Guy', 'jelenet', 3),
(4, 'Meet The Team', 'jelenet', 3),
(5, 'Meta Runner Season 1 Movie', 'film', 1),
(6, 'Meta Runner Season 2 (Official Trailer)', 'előzetes', 1),
(7, 'SUNSET PARADISE (Official Trailer)', 'előzetes', 2),
(8, 'EP 1: Hard Reset', 'epizód', 1),
(9, 'EP 2: Firewall', 'epizód', 1),
(10, 'EP 3: Unreal Engines', 'epizód', 1),
(11, 'EP 4: Transfer Student', 'epizód', 1),
(12, 'EP 5: Heart to Heart', 'epizód', 1),
(13, 'EP 6: Hack and Slash', 'epizód', 1),
(14, 'EP 7: Friendly Fire', 'epizód', 1),
(15, 'EP 8: Soft Lock', 'epizód', 1),
(16, 'EP 9: Nightmare Mode', 'epizód', 1),
(17, 'EP 10: Fatal Error', 'epizód', 1),
(18, 'SUNSET PARADISE - EP 1: PILOT', 'pilot', 2),
(19, 'EP 2: The Silence of the Yams', 'epizód', 2),
(20, 'EP 3: Reservoir Cats', 'epizód', 2),
(21, 'EP 4: Cat-sino Royale', 'epizód', 2),
(22, 'EP 5: The Funk and the Furious', 'epizód', 2),
(23, 'EP 6: Saturday Night Funkin\'', 'epizód', 2),
(24, 'EP 7: What Comes Next.', 'epizód', 2),
(25, 'EP 8: Mad Meggy', 'epizód', 2),
(26, 'EP 9: All Fall Down', 'epizód', 2),
(27, 'EP 10: Rebirth (FINALE)', 'epizód', 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `sorozat`
--

CREATE TABLE `sorozat` (
  `id` int(11) NOT NULL,
  `sorozatcim` text COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `sorozat`
--

INSERT INTO `sorozat` (`id`, `sorozatcim`) VALUES
(1, 'Meta Runner'),
(2, 'Sunset Paradise'),
(3, 'Murder Drones');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `feltoltesek`
--
ALTER TABLE `feltoltesek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sorozatid` (`sorozatid`);

--
-- A tábla indexei `sorozat`
--
ALTER TABLE `sorozat`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `feltoltesek`
--
ALTER TABLE `feltoltesek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT a táblához `sorozat`
--
ALTER TABLE `sorozat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `feltoltesek`
--
ALTER TABLE `feltoltesek`
  ADD CONSTRAINT `feltoltesek_ibfk_1` FOREIGN KEY (`sorozatid`) REFERENCES `sorozat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
