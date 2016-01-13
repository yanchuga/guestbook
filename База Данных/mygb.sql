-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2016 г., 14:06
-- Версия сервера: 5.1.73-community-log
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mygb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `name`, `email`, `date`, `url`, `text`) VALUES
(4, 'Rima', 'Rima@gmail.com', '2016-01-05', 'www.Rima.com', 'Thank you a lot!'),
(5, 'Anna', 'Anna@gmail.com', '2016-01-05', 'www.Anna.com', 'Thank you a lot!'),
(6, 'Janet', 'Janet@gmail.com', '2016-01-05', 'www.Janet.com', 'Thank you a lot!'),
(7, 'Olga', 'Olga@gmail.com', '2016-01-05', 'www.Olga.com', 'Thank you a lot!'),
(8, 'Inna', 'Inna@gmail.com', '2016-01-05', 'www.Inna.com', 'Thank you a lot!'),
(9, 'Stepan', 'Stepan@gmail.com', '2016-01-05', 'www.Stepan.com', 'Thank you a lot!'),
(10, 'Jenny', 'Jenny@gmail.com', '2016-01-05', 'www.Jenny.com', 'Thank you a lot!'),
(11, 'Thomas', 'Thomas@gmail.com', '2016-01-05', 'www.Thomas.com', 'Thank you a lot!'),
(12, 'Thomas', 'Thomas@gmail.com', '2016-01-05', 'www.Thomas.com', 'Thank you a lot!'),
(13, 'Vera', 'Vera@gmail.com', '2016-01-05', 'www.Vera.com', 'Thank you a lot!'),
(14, 'Collin', 'Collin@gmail.com', '2016-01-05', 'www.Collin.com', 'Thank you a lot!'),
(15, 'Joe', 'Joe@gmail.com', '2016-01-05', 'www.Joe.com', 'Thank you a lot!'),
(16, 'Vlad', 'Vlad@gmail.com', '2016-01-05', 'www.Vlad.com', 'Thank you a lot!'),
(17, 'Kristina', 'Kristina@gmail.com', '2016-01-05', 'www.Kristina.com', 'Thank you a lot!'),
(18, 'Lola', 'Lola@gmail.com', '2016-01-05', 'www.Lola.com', 'Thank you a lot!'),
(19, 'Vika', 'Vika@gmail.com', '2016-01-05', 'www.Vika.com', 'Thank you a lot!'),
(20, 'Xenia', 'Xenia@gmail.com', '2016-01-05', 'www.Xenia.com', 'Thank you a lot!'),
(21, 'Ganz', 'Ganz@gmail.com', '2016-01-13', 'www.Ganz.com', 'Thank you a lot!');

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE IF NOT EXISTS `userlist` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'pass12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
