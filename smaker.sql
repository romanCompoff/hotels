-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 12 2020 г., 08:11
-- Версия сервера: 5.5.64-MariaDB-cll-lve
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `allhotels` (
  `id` int(12) NOT NULL,
  `heading` text NOT NULL,
  `preview` text NOT NULL,
  `img1` varchar(112) NOT NULL DEFAULT 'slide1.jpg',
  `img2` varchar(112) NOT NULL DEFAULT 'slide2.jpg',
  `img3` varchar(112) NOT NULL DEFAULT 'slide3.jpg',
  `img4` varchar(112) DEFAULT 'slide4.jpg',
  `price` varchar(112) DEFAULT NULL,
  `isOn` varchar(3) DEFAULT 'ON',
  `orderHotels` int(12) DEFAULT NULL,
  `new` int(12) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `preview` text,
  `img_1` varchar(155) DEFAULT 'slide1.jpg',
  `img_2` varchar(155) DEFAULT 'slide2.jpg',
  `img_3` varchar(155) DEFAULT 'slide3.jpg',
  `img_4` varchar(155) DEFAULT 'slide4.jpg',
  `is_ON` varchar(3) NOT NULL DEFAULT 'ON'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `site_configs`
--

CREATE TABLE IF NOT EXISTS `site_configs` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) DEFAULT 'banner.jpg',
  `siteName` varchar(100) DEFAULT NULL,
  `menu1` varchar(100) DEFAULT NULL,
  `menu2` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `phoneNumber2` varchar(20) DEFAULT NULL,
  `heading1` text,
  `words1` text,
  `heading2` text,
  `words2` text,
  `adress` varchar(500) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `qqq` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `site_configs`
--

INSERT INTO `site_configs` (`id`, `banner`, `siteName`, `menu1`, `menu2`, `phoneNumber`, `phoneNumber2`, `heading1`, `words1`, `heading2`, `words2`, `adress`, `email`, `qqq`) VALUES
(1, 'banner.jpg', 'Сайт для вас!', 'Цены', 'Контакты', '+7 (920) 4 555 200', '', 'О разработчике', 'Я являюсь частным разработчиком сайтов.\r\nЕсли вам нужен сайт, блог, лэндинг, или какие-то вэб-приложения - предлагаю вам свои услуги по разработке.\r\n\r\nЦены демократичные, ибо работаю один, как частное лицо- потому не кормлю различные офисы, менеджеров, начальников и прочих товарищей.\r\n\r\nПомимо разработки так же можете обращаться по поддержке, или расширению проекта. Стараюсь делать все на совесть и нацелен на долгосрочное сотрудничество с заказчиками.\r\n\r\nВозможны варианты с рекламой в интернете.\r\n', 'Стоимость сайта', 'На данный момент разрабатываю сайты действительно по смешным ценам. К тому же это не сайты на конструкторах, которые предлагает большинство разработчиков, потому за них вам не придется платить никакой абонентской платы, кроме аренды хостинга и домена. К тому же, при необходимости можно будет создать нужные именно вам формы добавления и редактирования данных на странице.', 'Работаю по всей России удаленно', 's1te@bk.ru', NULL);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
