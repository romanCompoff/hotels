-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2020 г., 23:57
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `smaker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gadsstat`
--

CREATE TABLE `gadsstat` (
  `id` int(12) NOT NULL,
  `TS` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastTS` timestamp NOT NULL DEFAULT current_timestamp(),
  `utm_source` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_content` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_term` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT 'нет',
  `callMethod` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT 'нет',
  `profit` int(5) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gadsstat`
--

INSERT INTO `gadsstat` (`id`, `TS`, `lastTS`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_content`, `utm_term`, `device`, `position`, `status`, `callMethod`, `profit`, `quantity`, `phone`) VALUES
(25, '2020-04-21 13:03:33', '2020-04-21 13:03:33', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', 'Успешно', 'Нет', NULL, NULL, NULL),
(26, '2020-04-21 13:04:30', '2020-04-21 13:04:30', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', 'Нет', 'Нет', NULL, NULL, NULL),
(27, '2020-04-21 13:05:30', '2020-04-21 13:05:30', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', 'Нет', 'Нет', NULL, NULL, NULL),
(28, '2020-04-21 13:08:47', '2020-04-21 13:08:47', '', '', '', '', '', '', '', 'Нет', 'Нет', NULL, NULL, NULL),
(29, '2020-04-21 13:24:12', '2020-04-21 13:24:12', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', 'Нет', 'Нет', NULL, NULL, NULL),
(30, '2020-04-21 14:03:03', '2020-04-21 14:03:03', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', 'Нет', 'Нет', NULL, NULL, NULL),
(31, '2020-04-21 19:19:12', '2020-04-21 19:19:12', '', '', '', '', '', '', '', 'Нет', 'Нет', NULL, NULL, NULL),
(32, '2020-04-21 19:20:03', '2020-04-21 19:20:03', '', '', '', '', '', '', '', 'Нет', 'Нет', NULL, NULL, NULL),
(33, '2020-04-21 19:30:49', '2020-04-21 19:30:49', '', '', '', '', '', '', '', 'Нет', 'Нет', NULL, NULL, NULL),
(34, '2020-04-21 20:45:37', '2020-04-21 20:45:37', '', '', '', '', '', '', '', 'нет', 'Нет', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gadsstat`
--
ALTER TABLE `gadsstat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gadsstat`
--
ALTER TABLE `gadsstat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
