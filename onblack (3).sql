-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2024 г., 16:07
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
  `theme` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `aboniment`
--

INSERT INTO `aboniment` (`id`, `theme`, `message`, `price`, `image`) VALUES
(25, 'ONBLACK START', 'Карта свободного посещения на 1 месяц', '2500', 'Тренировка_2.jpg'),
(26, 'ONBLACK ACTIVE', 'Карта свободного посещения на 3 месяца', '6000', 'Тренировка_3.jpg'),
(27, 'ONBLACK DYNAMIC', 'Карта свободного посещения на 6 месяцев', '10000', 'Тренировка_8.jpg'),
(28, 'ONBLACK ENERGY', 'Карта свободного посещения на 12 месяцев', '19000', 'Тренировка_11.jpg'),
(29, 'ONBLACK TEST DRIVE', 'Карта свободного посещения на 1 неделю', '99', 'Тренировка_10.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `additional_services`
--

CREATE TABLE `additional_services` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(18, 'Сергей', 'sergejurteev277@gmail.com', 'цйвацуацуацупафцу'),
(19, 'Сергей', 'sergejurteev277@gmail.com', 'цйвацуацуацупафцу'),
(20, 'Сергей', 'sergejurteev277@gmail.com', 'цйвацуацуацупафцу');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `review`, `created_at`) VALUES
(1, 'Сергей', 'sergejurteev277@gmail.com', 'wqfweag', '2024-06-23 12:17:16'),
(2, 'Сергей', 'sergejurteev277@gmail.com', 'dvevwevev', '2024-06-23 12:22:58'),
(3, 'Сергей', 'sergejurteev277@gmail.com', 'dgdfbfgngngx', '2024-06-23 12:24:29'),
(4, '5545', 'sergejurteev277@gmail.com', 'уцауцаааааааааааааааааааа', '2024-06-23 12:43:04'),
(5, '5545', 'sergejurteev277@gmail.com', 'уцауцаааааааааааааааааааа', '2024-06-23 12:43:25'),
(6, '5545', 'sergejurteev277@gmail.com', 'уцауцаааааааааааааааааааа', '2024-06-23 12:44:24'),
(7, 'ser geu', 'sergeu@gmail.com', '111111111111111111111111111111111111', '2024-06-23 12:45:19'),
(8, 'ser geu', 'sergeu@gmail.com', '3333333333333333333333333333333333333333333', '2024-06-23 12:45:41'),
(9, 'ser geu', 'sergeu@gmail.com', '3333333333333333333333333333333333333333333', '2024-06-23 12:46:11');

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `theme` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(100) NOT NULL
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
(31, 'admin', 'admin@gmail.com', '$2y$10$YixIHof33qLwgA0UMlT.OeM3wDcryN6J1ZPmYD4Rs3Xe9/lflwb22'),
(41, 'Юртеев Сергей Дмитриевичreg', 'sergejurteev277@gmail.com', '$2y$10$OyrqfYrffQioLGStvuNVIOWtUT5DWnQIhPS0qpsmgf5EOhLqt2X56'),
(42, 'Юртеев Сергей Дмитриевич', 'shepelev@gmal.com', '$2y$10$pvItKkhQhkiWevUwx9Ifb.o7K2jbOCyecRYDnhaSutimpvc/5VP9K'),
(43, 'Шепелев Владислав Николаевич', 'sergeu@gmail.com', '$2y$10$iH1zSKxV2P3x8EDvw1NwhOESazYCT0CBqdq/ae4LyimQNtxnLr18G');

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
-- Индексы таблицы `additional_services`
--
ALTER TABLE `additional_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `additional_services`
--
ALTER TABLE `additional_services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `additional_services`
--
ALTER TABLE `additional_services`
  ADD CONSTRAINT `additional_services_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
