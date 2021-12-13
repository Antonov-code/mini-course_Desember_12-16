-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2021 г., 13:32
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mini-course`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(26, 'uploaded_images/61b72e7ac03fe.png'),
(27, 'uploaded_images/61b72e7b21bca.jpg'),
(28, 'uploaded_images/61b72e7b77dec.png'),
(29, 'uploaded_images/61b72e793e820.png'),
(30, 'uploaded_images/61b72e798d53b.png'),
(31, 'uploaded_images/61b72e79ed605.jpg'),
(32, 'uploaded_images/61b72e7a88d66.png'),
(33, 'uploaded_images/61b72e7ac03fe.png'),
(34, 'uploaded_images/61b72e7b21bca.jpg'),
(35, 'uploaded_images/61b72e7b77dec.png'),
(36, 'uploaded_images/61b72e7be5845.jpg'),
(37, 'uploaded_images/61b72e793e820.png'),
(38, 'uploaded_images/61b72e798d53b.png'),
(39, 'uploaded_images/61b72e79ed605.jpg'),
(40, 'uploaded_images/61b72e7a88d66.png'),
(41, 'uploaded_images/61b72e7ac03fe.png'),
(42, 'uploaded_images/61b72e7b21bca.jpg'),
(43, 'uploaded_images/61b72e7b77dec.png'),
(44, 'uploaded_images/61b72e7be5845.jpg'),
(45, 'uploaded_images/61b72e7ca3eba.png'),
(46, 'uploaded_images/61b72e793e820.png'),
(47, 'uploaded_images/61b72e798d53b.png'),
(48, 'uploaded_images/61b72e79ed605.jpg'),
(49, 'uploaded_images/61b72e7a88d66.png'),
(50, 'uploaded_images/61b72e7ac03fe.png'),
(51, 'uploaded_images/61b72e7b21bca.jpg'),
(52, 'uploaded_images/61b72e7b77dec.png'),
(53, 'uploaded_images/61b72e7be5845.jpg'),
(54, 'uploaded_images/61b72e7ca3eba.png'),
(56, 'uploaded_images/61b72ee6893a6.jpg'),
(58, 'uploaded_images/61b72fa3a623d.jpg'),
(59, 'uploaded_images/61b7320234523.jpg'),
(60, 'uploaded_images/61b7324749160.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `job_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `twitter_link_href` varchar(255) CHARACTER SET utf8 NOT NULL,
  `twitter_link_text` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_link_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_link_text` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_alt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `status`, `name`, `job_title`, `twitter_link_href`, `twitter_link_text`, `email_link_title`, `email_link_text`, `image_alt`, `image`) VALUES
(1, 'active', 'Sunny A.', 'Lead Author', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'Mail', '#', 'Sunny A.', 'img/default.jpg'),
(2, 'banned', 'Jos K.', 'Partner & Contributor', 'https://twitter.com/@atlantez', '@atlantez', 'Mail', '#', 'Jos K.', 'img/default.jpg'),
(3, 'active', 'Jovanni L.', 'Partner & Contributor', 'https://twitter.com/@lodev09', '@lodev09', 'Mail', '#', 'Jovanni L.', 'img/default.jpg'),
(4, 'active', 'Roberto R.', 'Partner & Contributor', 'https://twitter.com/@sildur', '@sildur', 'Mail', '#', 'Roberto R.', 'img/default.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `text`) VALUES
(1, 'yfktydkfyu,fyu,yf'),
(2, '12131254353456236134'),
(3, 'укокнлы'),
(4, ''),
(5, ''),
(6, '123'),
(7, '231643613'),
(8, 'vrtjetyjetyj');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, '123', '123'),
(2, '1234jeyt', '$2y$10$Kc8nyYpxbnSGITmAdIiM4.CLi9w6.eOzNudVSieNQpmCdSgJrnce2'),
(3, '', '$2y$10$YWPglRc/hdS/8iKAq09YZ.PhV13z52xjghAT7/Gu47qeRB11xLkBi'),
(4, '12452443b', '$2y$10$q2L5vsiAbXtKjheMvmAoTOB/Rej904EAVidMgCh0fUwBALhBGqlHm'),
(5, 'yv45u', '$2y$10$xLuub71I6p1BuJt0f7S9EeGtwDBnAfSTfhYQXEKmOXeBsfQ5Ra5tO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
