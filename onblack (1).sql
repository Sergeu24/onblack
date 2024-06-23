-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 19 2024 г., 20:43
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `onblack`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboniment`
--

CREATE TABLE `aboniment` (
  `id` int NOT NULL,
  `theme` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `aboniment`
--

INSERT INTO `aboniment` (`id`, `theme`, `message`, `image`) VALUES
(25, 'ONBLACK START', 'Карта свободного посещения на 1 месяц', 'Тренировка_2.jpg'),
(26, 'ONBLACK ACTIVE', 'Карта свободного посещения на 3 месяца', 'Тренировка_3.jpg'),
(27, 'ONBLACK DYNAMIC', 'Карта свободного посещения на 6 месяцев', 'Тренировка_8.jpg'),
(28, 'ONBLACK ENERGY', 'Карта свободного посещения на 12 месяцев', 'Тренировка_11.jpg'),
(29, 'ONBLACK TEST DRIVE', 'Карта свободного посещения на 1 неделю', 'Тренировка_10.jpg'),
(30, 'ONBLACK', 'Карта персонального тренинга', 'Тренировка_13.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'Юртеев Сергей Дмитриевич', 'sergeu@gmail.com', '$2y$10$9eh48zrpcTbFstAcwMuiT.tZoG4TshaJeQnMZ6j4SQ6XtAP3kIuVO'),
(9, 'admin', 'admin@gmail.com', '$2y$10$apK7FvbAlxRsScXsbz5wv.1pL9Pa0qG3AB.pNXBuLXz..');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int NOT NULL,
  `theme` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id`, `theme`, `message`, `image`) VALUES
(4, 'Дополнительные услуги по оздоровлению и спорту', ' Разнообразные дополнительные услуги, например, массаж, сауна, бассейн или другие специализированные программы для улучшения здоровья и физической формы.', 'attractive-african-woman-enjoying-face-massage-in-spa-salon.jpg'),
(5, 'Аренда помещения тренажерного зала', 'Возможность аренды помещения тренажерного зала для проведения индивидуальных тренировок или групповых занятий.', '22.jpg'),
(7, 'Баскетбол', 'Занятие по баскетболу под руководством опытных тренеров, участие в соревнованиях и мероприятиях по данному виду спорта.', '11.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboniment`
--
ALTER TABLE `aboniment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboniment`
--
ALTER TABLE `aboniment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
