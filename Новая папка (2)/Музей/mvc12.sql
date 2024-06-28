-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 28 2024 г., 19:48
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc12`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exhibit`
--

CREATE TABLE `exhibit` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `exhibit`
--

INSERT INTO `exhibit` (`id`, `title`, `desc`, `quantity`) VALUES
(1, 'дадаа', 'ненененененене', 1),
(2, 'ненене', 'ДАДАДАДДАДДА', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `inventory_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `inventory`
--

INSERT INTO `inventory` (`id`, `title`, `quantity`, `inventory_date`) VALUES
(2, 'дадаа', 1, '0000-00-00'),
(3, 'паувуымв', 0, '0000-00-00'),
(4, 'ненене', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `email`, `password`, `role`) VALUES
(1, 'user1', '9ZIuGsWu0Lm6vmz-G44LjSPyu4Ml6qmk', '$2y$13$D769Uv4tD0mUQQNmNB8ogeA4SDD4fgQLML4zokOwFIxyDd2MkGuk.', 'user1@mail.ru', '', 0),
(2, 'user2', 'BndzpRFsaHKqy8u35ULRHRbpHJsZgyg3', '$2y$13$Raii3gWndMMRKOTlwOdNS.mtNIzCCAnxbzj6MTwol5Ab33Ayt4mYG', 'user2@mail.ru', '', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exhibit`
--
ALTER TABLE `exhibit`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `exhibit`
--
ALTER TABLE `exhibit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
