-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 06 2024 г., 10:02
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `textovarorg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `product_price` int(11) NOT NULL,
  `telephone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `order_date`, `product_price`, `telephone`) VALUES
(3, 3, '0000-00-00 00:00:00', 0, ''),
(4, 4, '0000-00-00 00:00:00', 0, ''),
(5, 5, '0000-00-00 00:00:00', 0, ''),
(6, 3, '0000-00-00 00:00:00', 0, ''),
(7, 3, '0000-00-00 00:00:00', 0, ''),
(8, 3, '0000-00-00 00:00:00', 0, ''),
(9, 3, '2024-02-21 14:59:46', 0, ''),
(10, 3, '0000-00-00 00:00:00', 0, ''),
(11, 0, '0000-00-00 00:00:00', 0, ''),
(12, 3, '0000-00-00 00:00:00', 0, ''),
(13, 3, '2024-02-21 15:15:05', 0, ''),
(14, 3, '2024-02-21 15:18:25', 1000, ''),
(15, 5, '2024-02-21 15:18:48', 5001, ''),
(16, 3, '2024-02-22 09:12:35', 1000, ''),
(17, 3, '2024-02-22 09:13:24', 1000, ''),
(18, 5, '2024-02-22 10:02:09', 5001, ''),
(19, 3, '2024-03-04 12:28:27', 1000, ''),
(20, 3, '2024-03-04 14:15:32', 1000123, ''),
(21, 6, '2024-03-05 15:17:39', 0, '+79676633096'),
(22, 6, '2024-03-05 15:18:36', 0, '+79676633096'),
(23, 6, '2024-03-05 15:30:04', 0, '+79676633096'),
(24, 6, '2024-03-05 15:45:13', 123, ''),
(25, 6, '2024-03-05 15:45:18', 123, ''),
(26, 6, '2024-03-05 15:46:43', 123, '+79676633096');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(3, 'машина', 'фывофыовлдфыовдлфыовфлдывофдлыводлфывофлыдвфыо', '1000123', 'uploads/2.jpg'),
(4, '1231231', '1221qweqweweqwewqeqw', '1231', 'uploads/Принтер.jpg.webp'),
(5, 'стиралкайцйуйц', '123321йцуйцуйцуйц', '500112312', 'uploads/a-bouquet-of-peonies-on-transparent-background-png-clipart_88754-450.avif'),
(6, '123', 'цдлавпцулиадцуоиадшулцарфжуларфцудоарфдуцшаилфоцуаирдфлцоиадфоиудфац', '123', 'uploads/brother_printer_01.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `rolles`
--

CREATE TABLE `rolles` (
  `user` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rolles`
--

INSERT INTO `rolles` (`user`, `admin`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `serviceorders`
--

CREATE TABLE `serviceorders` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `telephone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `serviceorders`
--

INSERT INTO `serviceorders` (`id`, `service_id`, `total_price`, `order_date`, `telephone`) VALUES
(4, 7, '1231', '2024-02-22 10:00:01', ''),
(5, 8, '1231', '2024-02-22 10:00:25', ''),
(6, 7, '1231', '2024-03-04 12:27:34', ''),
(7, 7, '1231', '2024-03-05 16:01:48', '+79676633096'),
(8, 7, '1231', '2024-03-05 20:44:35', '+79676633096'),
(9, 7, '1231', '2024-03-05 20:45:35', '+79676633091'),
(10, 7, '1231', '2024-03-05 20:45:54', '+79676633091'),
(11, 7, '1231', '2024-03-05 20:46:26', '89282467136');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `bigdescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `bigdescription`) VALUES
(7, 'IT аутсорсинг', 'Обслуживание компьютерной инфраструктуры и торгового оборудования.', '1231', 'uploads/e63ac07ddb3bda49708fe77cf11b7322.jpg', 'Обслуживание компьютеров (рабочие станции, ноутбуки, моноблоки)\r\nОбслуживание офисной техники (МФУ, принтеры, сканеры, телефонные аппараты, ИБП)\r\nОбслуживание и администрирование программного обеспечения\r\nОбслуживание серверного оборудования (серверы и си'),
(8, 'Юрий', 'qweqweqweqw', '1231', 'uploads/e984da4a06d0d6f09db6b240c533e907.jpg', 'qwewqeqweqweqweqweq');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL,
  `telephone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `password`, `role`, `telephone`) VALUES
(45, 'Vova Kornev', 'zoxan@mail.ru', '$2y$10$89iKPzEX5V48sqEE0.OMb.5WpNp2fXT00dltDSbOTXXmwmhXPBgoS', 'admin', ''),
(46, 'Vova Kornev', 'zoxan1@mail.ru', '$2y$10$DVMZI8ctJwP55ZWcGGQmEu5noV8aauYFsbiKBhdpdLhYnrpsAKiCK', 'user', '+79676633096');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rolles`
--
ALTER TABLE `rolles`
  ADD PRIMARY KEY (`user`);

--
-- Индексы таблицы `serviceorders`
--
ALTER TABLE `serviceorders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `rolles`
--
ALTER TABLE `rolles`
  MODIFY `user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `serviceorders`
--
ALTER TABLE `serviceorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
