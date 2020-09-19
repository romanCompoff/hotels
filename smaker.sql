-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 19 2020 г., 17:44
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
-- Структура таблицы `allhotels`
--

CREATE TABLE `allhotels` (
  `id` int(12) NOT NULL,
  `heading` text NOT NULL,
  `preview` text NOT NULL,
  `price` varchar(112) DEFAULT NULL,
  `orderHotels` int(12) DEFAULT NULL,
  `new` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `preview` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(34, '2020-04-21 20:45:37', '2020-04-21 20:45:37', '', '', '', '', '', '', '', 'нет', 'Нет', NULL, NULL, NULL),
(35, '2020-04-21 21:01:54', '2020-04-21 21:01:54', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(36, '2020-04-25 17:59:17', '2020-04-25 17:59:17', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(37, '2020-04-25 17:59:22', '2020-04-25 17:59:22', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(38, '2020-04-25 20:31:36', '2020-04-25 20:31:36', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(39, '2020-04-25 20:54:00', '2020-04-25 20:54:00', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(40, '2020-04-25 20:54:04', '2020-04-25 20:54:04', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(41, '2020-04-25 20:54:15', '2020-04-25 20:54:15', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(42, '2020-04-25 21:21:21', '2020-04-25 21:21:21', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(43, '2020-04-28 06:40:29', '2020-04-28 06:40:29', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(44, '2020-04-28 06:41:14', '2020-04-28 06:41:14', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(45, '2020-04-28 06:41:30', '2020-04-28 06:41:30', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(46, '2020-04-28 07:00:33', '2020-04-28 07:00:33', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(47, '2020-04-28 07:00:42', '2020-04-28 07:00:42', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(48, '2020-04-28 08:06:52', '2020-04-28 08:06:52', '', '', '', '', '', '', '', 'нет', 'нет', NULL, NULL, NULL),
(49, '2020-04-28 08:07:43', '2020-04-28 08:07:43', '', '', '', '', 'adfdsfsd', '', '', 'нет', 'нет', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `keygadsstat`
--

CREATE TABLE `keygadsstat` (
  `id` int(7) NOT NULL,
  `campaign` int(12) DEFAULT NULL,
  `content` int(15) DEFAULT NULL,
  `keyword` varchar(150) NOT NULL DEFAULT 'нет ключа',
  `method` varchar(33) DEFAULT NULL,
  `how_much` int(12) DEFAULT 1,
  `status` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `keygadsstat`
--

INSERT INTO `keygadsstat` (`id`, `campaign`, `content`, `keyword`, `method`, `how_much`, `status`) VALUES
(9, 0, NULL, '0', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `site_configs`
--

CREATE TABLE `site_configs` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) DEFAULT 'banner.jpg',
  `siteName` varchar(100) DEFAULT NULL,
  `menu1` varchar(100) DEFAULT NULL,
  `menu2` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `phoneNumber2` varchar(20) DEFAULT NULL,
  `heading1` text DEFAULT NULL,
  `words1` text DEFAULT NULL,
  `heading2` text DEFAULT NULL,
  `words2` text DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `site_configs`
--

INSERT INTO `site_configs` (`id`, `banner`, `siteName`, `menu1`, `menu2`, `phoneNumber`, `phoneNumber2`, `heading1`, `words1`, `heading2`, `words2`, `adress`, `email`, `title`, `description`) VALUES
(1, 'banner.jpg', 'Сайт для вас!', 'Цены', 'Контакты', '+7 (920) 4 555 200', '', 'О разработчике', 'Я являюсь частным разработчиком сайтов.\r\nЕсли вам нужен сайт, блог, лэндинг, или какие-то вэб-приложения - предлагаю вам свои услуги по разработке.\r\n\r\nЦены демократичные, ибо работаю один, как частное лицо- потому не кормлю различные офисы, менеджеров, начальников и прочих товарищей.\r\n\r\nПомимо разработки так же можете обращаться по поддержке, или расширению проекта. Стараюсь делать все на совесть и нацелен на долгосрочное сотрудничество с заказчиками.\r\n\r\nВозможны варианты с рекламой в интернете.\r\n', 'Стоимость сайта', 'На данный момент разрабатываю сайты действительно по смешным ценам. К тому же это не сайты на конструкторах, которые предлагает большинство разработчиков, потому за них вам не придется платить никакой абонентской платы, кроме аренды хостинга и домена. К тому же, при необходимости можно будет создать нужные именно вам формы добавления и редактирования данных на странице.', 'Работаю по всей России удаленно', 's1te@bk.ru', 'Разработка сайтов и рекламы', 'Хотите купить сайт, или создать сайт по индивидуальному заказу? Звоните мне');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `allhotels`
--
ALTER TABLE `allhotels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gadsstat`
--
ALTER TABLE `gadsstat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `keygadsstat`
--
ALTER TABLE `keygadsstat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_configs`
--
ALTER TABLE `site_configs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `allhotels`
--
ALTER TABLE `allhotels`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `gadsstat`
--
ALTER TABLE `gadsstat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `keygadsstat`
--
ALTER TABLE `keygadsstat`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
