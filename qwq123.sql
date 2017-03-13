-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2017 年 03 月 14 日 00:27
-- 伺服器版本: 5.5.48-log
-- PHP 版本： 7.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `word`
--

-- --------------------------------------------------------

--
-- 資料表結構 `classmate`
--

CREATE TABLE IF NOT EXISTS `classmate` (
  `id` smallint(6) NOT NULL,
  `namae` varchar(15) NOT NULL,
  `passwd` tinytext NOT NULL,
  `reg_time` datetime NOT NULL,
  `reg_ip` tinytext NOT NULL,
  `lastlog_time` datetime NOT NULL,
  `lastlog_ip` tinytext NOT NULL,
  `mail` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `classmate`
--

INSERT INTO `classmate` (`id`, `namae`, `passwd`, `reg_time`, `reg_ip`, `lastlog_time`, `lastlog_ip`, `mail`) VALUES
(0, 'Luobogao', 'qwq', '0000-00-00 00:00:00', '', '2017-03-14 00:24:40', '210.140.40.12', '');

-- --------------------------------------------------------

--
-- 資料表結構 `word`
--

CREATE TABLE IF NOT EXISTS `word` (
  `namae` varchar(15) NOT NULL,
  `add_time` datetime NOT NULL,
  `word` text NOT NULL,
  `mean` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `word`
--

INSERT INTO `word` (`namae`, `add_time`, `word`, `mean`, `note`) VALUES
('', '2017-03-12 22:31:47', 'bi9swm', '萌萌星美', '写作萌萌星美读作萌老板');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `classmate`
--
ALTER TABLE `classmate`
  ADD PRIMARY KEY (`namae`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- 資料表索引 `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`namae`),
  ADD UNIQUE KEY `add_time` (`add_time`),
  ADD KEY `add_time_2` (`add_time`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
