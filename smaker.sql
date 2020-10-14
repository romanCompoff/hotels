-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 14 2020 г., 17:35
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `pageName` text NOT NULL DEFAULT 'index'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `allhotels`
--

INSERT INTO `allhotels` (`id`, `heading`, `preview`, `price`, `pageName`) VALUES
(42, 'Заголовок отеля', 'Описаниеcxz', '2 500', ''),
(46, 'ddsafsda', 'Описаниеsad f', 'aasdf', 'samy-krutoy-material');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `preview` text DEFAULT NULL,
  `pageName` text NOT NULL DEFAULT 'index'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `preview`, `pageName`) VALUES
(64, 'Описаниеа sd', 'ON'),
(70, 'Описание hdg', 'ON'),
(71, 'Описание hdg cd', 'ON'),
(77, 'Описание fasd', 'novaya-stranica');

-- --------------------------------------------------------

--
-- Структура таблицы `editordata`
--

CREATE TABLE `editordata` (
  `id` int(12) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorText` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pageName` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `editordata`
--

INSERT INTO `editordata` (`id`, `title`, `description`, `editorText`, `pageName`) VALUES
(93, 'Как отключить кэширование картинок на сервере? Или может посоветуете что-то другое?', 'Разработка сайта недорого от частного мастера. Ведение интернет рекламы', '<p>gsad</p>\r\n\r\n<p>sdag</p>\r\n\r\n<p>asdfg</p>\r\n\r\n<p>sadg</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'fypayp'),
(95, 'Сайты по смешным ценам', 'Разработка вэб приложений и сайтов. Частник', '<p>пыр</p>\r\n\r\n<p>dsfasd павфрпарпао опа ag fa dfsg</p>\r\n\r\n<p>ываыф пррвпраорвпыр as gadfh dah adsg sw</p>\r\n\r\n<p>пыр</p>\r\n\r\n<p>dsfasd павфрпарпао опа ag fa dfsg</p>\r\n\r\n<p>ываыф пррвпраорвпыр as gadfh dah adsg sw</p>\r\n\r\n<p>пыр</p>\r\n\r\n<p>dsfasd павфрпарпао опа ag fa dfsg</p>\r\n\r\n<p>ываыф пррвпраорвпыр as gadfh dah adsg sw</p>\r\n\r\n<p>пыр</p>\r\n\r\n<p>dsfasd павфрпарпао опа ag fa dfsg</p>\r\n\r\n<p>ываыф пррвпраорвпыр as gadfh dah adsg sw</p>\r\n\r\n<p>пыр</p>\r\n\r\n<p>dsfasd павфрпарпао опа ag fa dfsg</p>\r\n\r\n<p>ываыф пррвпраорвпыр as gadfh dah adsg sw<img alt=\"\" src=\"/img/img-editor/images/22.jpg\" style=\"margin:10px; width:50%\" />gfghgfdh</p>\r\n\r\n<p>fdgsdfgh</p>\r\n\r\n<p>dgfdsgdfg</p>\r\n', 'samy-krutoy-material'),
(96, 'Сайты по смешным ценам', 'Разработка сайта недорого от частного мастера. Ведение интернет рекламы', '<p>asdasd</p>\r\n', 'qwe'),
(97, 'Новая страница для проверки роутера', 'Описание новой страницы', '<p>sdafdsafasd</p>\r\n', 'novaya-stranica');

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(12) NOT NULL,
  `text` text NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `text`, `userName`) VALUES
(116, ' fdasfd asfasd  ', 'fsdafds');

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
  `status` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callMethod` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit` int(5) DEFAULT NULL,
  `1` int(12) DEFAULT NULL,
  `2` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gadsstat`
--

INSERT INTO `gadsstat` (`id`, `TS`, `lastTS`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_content`, `utm_term`, `device`, `position`, `status`, `callMethod`, `profit`, `1`, `2`) VALUES
(25, '2020-04-21 13:03:33', '2020-04-21 13:03:33', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', NULL, NULL, NULL, NULL, NULL),
(26, '2020-04-21 13:04:30', '2020-04-21 13:04:30', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', NULL, NULL, NULL, NULL, NULL),
(27, '2020-04-21 13:05:30', '2020-04-21 13:05:30', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', NULL, NULL, NULL, NULL, NULL),
(28, '2020-04-21 13:08:47', '2020-04-21 13:08:47', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(29, '2020-04-21 13:24:12', '2020-04-21 13:24:12', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', NULL, NULL, NULL, NULL, NULL),
(30, '2020-04-21 14:03:03', '2020-04-21 14:03:03', 'google', 'cpc', '{campaignid}', '{creative}', '{keyword}', 'b', 'position', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `hotelsheader`
--

CREATE TABLE `hotelsheader` (
  `hotelName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rusName` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hotelsheader`
--

INSERT INTO `hotelsheader` (`hotelName`, `rusName`, `content`) VALUES
('nazvanie-otelya2', 'Название отеля2', 'описание нового отеля');

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
(1, 'banner.jpg', 'Сайт для вас!', 'Стоимость', 'Контакты', '+7 (920) 4 555 200', '', 'О разработчике', 'Я являюсь частным разработчиком сайтов.\r\nЕсли вам нужен сайт, блог, лэндинг, или какие-то вэб-приложения - предлагаю вам свои услуги по разработке.\r\n\r\nЦены демократичные, ибо работаю один, как частное лицо- потому не кормлю различные офисы, менеджеров, начальников и прочих товарищей.\r\n\r\nПомимо разработки так же можете обращаться по поддержке, или расширению проекта. Стараюсь делать все на совесть и нацелен на долгосрочное сотрудничество с заказчиками.\r\n\r\nВозможны варианты с рекламой в интернете.\r\n', 'Стоимость сайта', 'На данный момент разрабатываю сайты действительно по смешным ценам. К тому же это не сайты на конструкторах, которые предлагает большинство разработчиков, потому за них вам не придется платить никакой абонентской платы, кроме аренды хостинга и домена. К тому же, при необходимости можно будет создать нужные именно вам формы добавления и редактирования данных на странице.', 'Работаю по всей России удаленно', 's1te@bk.ru', 'Сайты по смешным ценам ', 'Разработка сайта недорого от частного мастера. Ведение интернет рекламы. Звоните разработчику сайтов');

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
-- Индексы таблицы `editordata`
--
ALTER TABLE `editordata`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gadsstat`
--
ALTER TABLE `gadsstat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hotelsheader`
--
ALTER TABLE `hotelsheader`
  ADD UNIQUE KEY `hotelName` (`hotelName`);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT для таблицы `editordata`
--
ALTER TABLE `editordata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT для таблицы `gadsstat`
--
ALTER TABLE `gadsstat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
