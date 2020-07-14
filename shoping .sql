-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 11 2020 г., 06:33
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shoping`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop_category`
--

CREATE TABLE `shop_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keywords` text CHARACTER SET utf8 NOT NULL,
  `submenu_id` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shop_category`
--

INSERT INTO `shop_category` (`id`, `name`, `keywords`, `submenu_id`) VALUES
(9, 'null', '', 'null'),
(10, 'shoes', '', 'mens'),
(11, 'shoes', '', 'womens'),
(12, 'fitnes', '', 'sport'),
(13, 'toys', '', 'baby'),
(16, 'phone', '', 'texnika'),
(17, 'Gardn', '', 'household'),
(18, 'kitchn', '', 'household'),
(19, 'santexnika', '', 'household'),
(20, 'clothes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolorum architecto, ducimus corporis necessitatibus error earum consequatur quam! Inventore tempora sapiente laborum aliquam consectetur quidem ratione, harum delectus minima rem?', 'mens'),
(21, 'clothes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolorum architecto, ducimus corporis necessitatibus error earum consequatur quam! Inventore tempora sapiente laborum aliquam consectetur quidem ratione, harum delectus minima rem?', 'womens'),
(22, 'hunt', '', 'null');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_category_submenu`
--

CREATE TABLE `shop_category_submenu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keywords` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shop_category_submenu`
--

INSERT INTO `shop_category_submenu` (`id`, `name`, `keywords`) VALUES
(2, 'null', ''),
(3, 'mens', ''),
(5, 'womens', ''),
(6, 'sport', ''),
(7, 'baby', ''),
(8, 'household', ''),
(9, 'texnika', '');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_menu`
--

CREATE TABLE `shop_menu` (
  `id` int(11) NOT NULL,
  `uz_name` varchar(255) NOT NULL,
  `ru_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_menu`
--

INSERT INTO `shop_menu` (`id`, `uz_name`, `ru_name`, `en_name`) VALUES
(1, 'Bosh sahifa', '', 'Home '),
(2, 'Savdo', '', 'Shop '),
(3, 'Bog\'lanish ', '', 'Contact ');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_product`
--

CREATE TABLE `shop_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `narx` float NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 NOT NULL,
  `chegirma` enum('1','0') CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `keyword` text CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shop_product`
--

INSERT INTO `shop_product` (`id`, `name`, `content`, `narx`, `status`, `chegirma`, `img`, `img1`, `img2`, `keyword`, `category_id`) VALUES
(1, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '2.jpg', '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(2, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(3, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(4, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(5, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(6, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(7, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(8, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(9, 'ko\'ylak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 100000, '1', '0', '1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aspernatur consequatur, architecto veniam accusamus impedit maxime suscipit sunt maiores voluptates ipsum quasi quod natus debitis illum tempore id, corporis iusto!', 9),
(10, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(11, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 10),
(12, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 10),
(13, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 10),
(14, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 10),
(15, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(16, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 13),
(17, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 13),
(18, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 13),
(19, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 13),
(20, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(21, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(22, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 9),
(23, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 9),
(24, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 9),
(25, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 9),
(26, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(27, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(28, 'paypoq', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 5000, '1', '0', 'pa.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 20),
(29, 'kiyim', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid, neque repellat tenetur eum obcaecati reiciendis ipsum enim reprehenderit vitae perferendis natus voluptates laborum officiis iure pariatur qui, quos, eos!', 50000, '1', '0', 'k.jpg', '1.jpg', 'pa.jpg', '', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `shop_user`
--

CREATE TABLE `shop_user` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shop_user`
--

INSERT INTO `shop_user` (`id`, `username`, `email`, `password`, `auth_key`) VALUES
(1, 'admin', 'admin@gmai.com', 'admin', NULL),
(2, 'user', 'user@gmail.com', 'user', NULL),
(3, 'kun', 'kun@gmail.com', 'kun', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `shop_zakaz`
--

CREATE TABLE `shop_zakaz` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `soni` int(11) NOT NULL,
  `pro_narx` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shop_zakaz`
--

INSERT INTO `shop_zakaz` (`id`, `pro_name`, `pro_id`, `user_id`, `soni`, `pro_narx`) VALUES
(6, 'ko\'ylak', 1, 2, 1, 100000),
(7, 'ko\'ylak', 3, 2, 1, 100000),
(8, 'ko\'ylak', 5, 2, 1, 100000),
(9, 'ko\'ylak', 6, 2, 1, 100000),
(10, 'paypoq', 16, 3, 1, 5000),
(11, 'paypoq', 15, 3, 1, 5000),
(12, 'paypoq', 14, 3, 1, 5000),
(13, 'ko\'ylak', 1, 3, 1, 100000),
(14, 'ko\'ylak', 2, 3, 15, 100000),
(20, 'ko\'ylak', 1, 1, 10, 100000),
(21, 'ko\'ylak', 3, 1, 1, 100000),
(22, 'paypoq', 11, 1, 1, 5000),
(23, 'ko\'ylak', 2, 1, 1, 100000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Индексы таблицы `shop_category_submenu`
--
ALTER TABLE `shop_category_submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `shop_menu`
--
ALTER TABLE `shop_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_product`
--
ALTER TABLE `shop_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Индексы таблицы `shop_user`
--
ALTER TABLE `shop_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Индексы таблицы `shop_zakaz`
--
ALTER TABLE `shop_zakaz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `shop_category_submenu`
--
ALTER TABLE `shop_category_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `shop_menu`
--
ALTER TABLE `shop_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `shop_product`
--
ALTER TABLE `shop_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `shop_user`
--
ALTER TABLE `shop_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `shop_zakaz`
--
ALTER TABLE `shop_zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `shop_category`
--
ALTER TABLE `shop_category`
  ADD CONSTRAINT `shop_category_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `shop_category_submenu` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shop_product`
--
ALTER TABLE `shop_product`
  ADD CONSTRAINT `shop_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shop_zakaz`
--
ALTER TABLE `shop_zakaz`
  ADD CONSTRAINT `shop_zakaz_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `shop_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_zakaz_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `shop_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
