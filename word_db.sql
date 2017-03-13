-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2017 年 03 月 13 日 23:09
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
CREATE DATABASE IF NOT EXISTS `word` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `word`;

-- --------------------------------------------------------

--
-- 資料表結構 `classmate`
--

CREATE TABLE IF NOT EXISTS `classmate` (
  `id` smallint(6) NOT NULL,
  `namae` tinytext NOT NULL,
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
(0, 'Luobogao', 'qwq', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `word`
--

CREATE TABLE IF NOT EXISTS `word` (
  `user_id` smallint(6) NOT NULL,
  `add_time` datetime NOT NULL,
  `word` text NOT NULL,
  `mean` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `word`
--

INSERT INTO `word` (`user_id`, `add_time`, `word`, `mean`, `note`) VALUES
(0, '2017-03-12 22:31:47', 'bi9swm', '萌萌星美', '写作萌萌星美读作萌老板');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `word`
--
ALTER TABLE `word`
  ADD UNIQUE KEY `add_time` (`add_time`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
