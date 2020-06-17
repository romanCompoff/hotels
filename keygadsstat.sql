-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 29 2020 г., 17:48
-- Версия сервера: 5.5.64-MariaDB-cll-lve
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `santech`
--

-- --------------------------------------------------------

--
-- Структура таблицы `keygadsstat`
--

CREATE TABLE IF NOT EXISTS `keygadsstat` (
  `id` int(12) NOT NULL,
  `campaign` bigint(12) DEFAULT NULL,
  `content` int(15) DEFAULT NULL,
  `keyword` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_much` int(12) NOT NULL DEFAULT '1',
  `status` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `keygadsstat`
--
ALTER TABLE `keygadsstat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `keygadsstat`
--
ALTER TABLE `keygadsstat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
