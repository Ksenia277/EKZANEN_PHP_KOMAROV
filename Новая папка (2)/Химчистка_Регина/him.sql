-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 28 2024 г., 23:49
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
-- База данных: `him`
--

-- --------------------------------------------------------

--
-- Структура таблицы `type_service`
--

CREATE TABLE `type_service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `type_service`
--

INSERT INTO `type_service` (`id`, `title`) VALUES
(1, 'Стирка'),
(2, 'Отбеливание'),
(3, 'Выглажка');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'Ivan', 'n@mail.ru', '46f94c8de14fb36680850768ff1b7f2a'),
(5, 'Ivan', 'asd@mail.ru', '76d80224611fc919a5d54f0ff9fba446'),
(6, 'Fff', 'qwe@mail.ru', '7815696ecbf1c96e6894b779456d330e');

-- --------------------------------------------------------

--
-- Структура таблицы `users_application`
--

CREATE TABLE `users_application` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type_service_id` int(11) NOT NULL,
  `date_receipt` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users_application`
--

INSERT INTO `users_application` (`id`, `fio`, `description`, `type_service_id`, `date_receipt`, `price`, `status`) VALUES
(9, 'SADF', 'asdasd', 2, '2024-06-30 03:43:00', 150, 'Выполнено'),
(10, 'ываываыв', 'ываыва', 2, '2024-06-30 04:47:00', 123, 'Выполнено');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_application`
--
ALTER TABLE `users_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_service_id` (`type_service_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users_application`
--
ALTER TABLE `users_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_application`
--
ALTER TABLE `users_application`
  ADD CONSTRAINT `users_application_ibfk_1` FOREIGN KEY (`type_service_id`) REFERENCES `type_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
