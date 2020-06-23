-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июн 21 2020 г., 07:24
-- Версия сервера: 5.7.26
-- Версия PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `goods_id`, `comment`) VALUES
(1, 0, 'sdsdfsadf'),
(2, 3, 'sdsdfsadf'),
(3, 3, 'sdfsdf'),
(4, 1, 'sdfsdf'),
(5, 1, 'sdfsdf'),
(6, 1, 'sdfsdf'),
(7, 1, 'sdfsdf'),
(8, 1, 'sdfsdf'),
(9, 1, 'sdcsd'),
(10, 1, 'sdcsd'),
(11, 1, 'dfdfg'),
(12, 1, 'xvcvxc'),
(13, 1, 'xvcvxc'),
(14, 1, 'sdfs'),
(15, 1, 'sdfsdf'),
(16, 1, 'sdf'),
(17, 1, '111'),
(18, 1, '111'),
(19, 1, 'sdas'),
(20, 1, 'sdas'),
(21, 1, 'd'),
(22, 1, 'sdc'),
(23, 1, 'dfvdfv'),
(24, 1, '333'),
(25, 4, 'roomba'),
(26, 1, 'mmm'),
(27, 3, 'qwerty'),
(28, 3, 'qwerty'),
(29, 3, 'qwerty');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
