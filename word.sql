-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-03-12 14:52:13
-- 伺服器版本: 5.5.53
-- PHP 版本： 5.6.27

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
-- 資料表結構 `word`
--

DROP TABLE IF EXISTS `word`;
CREATE TABLE `word` (
  `add_time` datetime NOT NULL,
  `word` text NOT NULL,
  `mean` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表新增前先清除舊資料 `word`
--

TRUNCATE TABLE `word`;
--
-- 資料表的匯出資料 `word`
--

INSERT INTO `word` (`add_time`, `word`, `mean`, `note`) VALUES
('2017-03-12 22:31:47', 'bi9swm', '萌萌星美', '写作萌萌星美读作萌老板');

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
