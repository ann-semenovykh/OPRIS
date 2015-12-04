-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2015 г., 20:37
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mov_book_sys`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking_seats`
--

CREATE TABLE IF NOT EXISTS `booking_seats` (
  `id_session` int(11) DEFAULT NULL,
  `id_seat` int(11) DEFAULT NULL,
  `stat` enum('free','reserved','ordered') DEFAULT 'free',
  `id_user` int(11) DEFAULT NULL,
  `reserve_time` datetime DEFAULT NULL,
  KEY `FK_booking_seats_session` (`id_session`),
  KEY `FK_booking_seats_seats` (`id_seat`),
  KEY `FK_booking_seats_users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Зарезервированные и свободные места';

--
-- Дамп данных таблицы `booking_seats`
--

INSERT INTO `booking_seats` (`id_session`, `id_seat`, `stat`, `id_user`, `reserve_time`) VALUES
(1, 1, 'free', NULL, NULL),
(1, 2, 'free', NULL, NULL),
(1, 3, 'free', NULL, NULL),
(1, 4, 'free', NULL, NULL),
(1, 5, 'free', NULL, NULL),
(1, 6, 'free', NULL, NULL),
(1, 7, 'free', NULL, NULL),
(1, 8, 'free', NULL, NULL),
(1, 9, 'free', NULL, NULL),
(1, 10, 'free', NULL, NULL),
(1, 11, 'free', NULL, NULL),
(1, 12, 'free', NULL, NULL),
(1, 13, 'free', NULL, NULL),
(1, 14, 'free', NULL, NULL),
(1, 15, 'free', NULL, NULL),
(1, 16, 'free', NULL, NULL),
(1, 17, 'free', NULL, NULL),
(1, 18, 'free', NULL, NULL),
(1, 19, 'free', NULL, NULL),
(1, 20, 'free', NULL, NULL),
(1, 21, 'free', NULL, NULL),
(1, 22, 'free', NULL, NULL),
(2, 1, 'free', NULL, NULL),
(2, 2, 'free', NULL, NULL),
(2, 3, 'free', NULL, NULL),
(2, 4, 'free', NULL, NULL),
(2, 5, 'free', NULL, NULL),
(2, 6, 'free', NULL, NULL),
(2, 7, 'free', NULL, NULL),
(2, 8, 'free', NULL, NULL),
(2, 9, 'free', NULL, NULL),
(2, 10, 'free', NULL, NULL),
(2, 11, 'free', NULL, NULL),
(2, 12, 'free', NULL, NULL),
(2, 13, 'free', NULL, NULL),
(2, 14, 'free', NULL, NULL),
(2, 15, 'free', NULL, NULL),
(2, 16, 'free', NULL, NULL),
(2, 17, 'free', NULL, NULL),
(2, 18, 'free', NULL, NULL),
(2, 19, 'free', NULL, NULL),
(2, 20, 'free', NULL, NULL),
(2, 21, 'free', NULL, NULL),
(2, 22, 'free', NULL, NULL),
(3, 1, 'free', NULL, NULL),
(3, 2, 'free', NULL, NULL),
(3, 3, 'free', NULL, NULL),
(3, 4, 'free', NULL, NULL),
(3, 5, 'free', NULL, NULL),
(3, 6, 'free', NULL, NULL),
(3, 7, 'free', NULL, NULL),
(3, 8, 'free', NULL, NULL),
(3, 9, 'free', NULL, NULL),
(3, 10, 'free', NULL, NULL),
(3, 11, 'free', NULL, NULL),
(3, 12, 'free', NULL, NULL),
(3, 13, 'free', NULL, NULL),
(3, 14, 'free', NULL, NULL),
(3, 15, 'free', NULL, NULL),
(3, 16, 'free', NULL, NULL),
(3, 17, 'free', NULL, NULL),
(3, 18, 'free', NULL, NULL),
(3, 19, 'free', NULL, NULL),
(3, 20, 'free', NULL, NULL),
(3, 21, 'free', NULL, NULL),
(3, 22, 'free', NULL, NULL),
(6, 1, 'free', NULL, NULL),
(6, 2, 'free', NULL, NULL),
(6, 3, 'free', NULL, NULL),
(6, 4, 'free', NULL, NULL),
(6, 5, 'free', NULL, NULL),
(6, 6, 'free', NULL, NULL),
(6, 7, 'free', NULL, NULL),
(6, 8, 'free', NULL, NULL),
(6, 9, 'free', NULL, NULL),
(6, 10, 'free', NULL, NULL),
(6, 11, 'free', NULL, NULL),
(6, 12, 'free', NULL, NULL),
(6, 13, 'free', NULL, NULL),
(6, 14, 'free', NULL, NULL),
(6, 15, 'free', NULL, NULL),
(6, 16, 'free', NULL, NULL),
(6, 17, 'free', NULL, NULL),
(6, 18, 'free', NULL, NULL),
(6, 19, 'free', NULL, NULL),
(6, 20, 'free', NULL, NULL),
(6, 21, 'free', NULL, NULL),
(6, 22, 'free', NULL, NULL),
(4, 23, 'free', NULL, NULL),
(4, 24, 'free', NULL, NULL),
(4, 25, 'free', NULL, NULL),
(4, 26, 'free', NULL, NULL),
(4, 27, 'free', NULL, NULL),
(4, 28, 'free', NULL, NULL),
(4, 29, 'free', NULL, NULL),
(4, 30, 'free', NULL, NULL),
(4, 31, 'free', NULL, NULL),
(4, 32, 'free', NULL, NULL),
(4, 33, 'free', NULL, NULL),
(4, 34, 'free', NULL, NULL),
(4, 35, 'free', NULL, NULL),
(4, 36, 'free', NULL, NULL),
(4, 37, 'free', NULL, NULL),
(4, 38, 'free', NULL, NULL),
(5, 23, 'free', NULL, NULL),
(5, 24, 'free', NULL, NULL),
(5, 25, 'free', NULL, NULL),
(5, 26, 'free', NULL, NULL),
(5, 27, 'free', NULL, NULL),
(5, 28, 'free', NULL, NULL),
(5, 29, 'free', NULL, NULL),
(5, 30, 'free', NULL, NULL),
(5, 31, 'free', NULL, NULL),
(5, 32, 'free', NULL, NULL),
(5, 33, 'free', NULL, NULL),
(5, 34, 'free', NULL, NULL),
(5, 35, 'free', NULL, NULL),
(5, 36, 'free', NULL, NULL),
(5, 37, 'free', NULL, NULL),
(5, 38, 'free', NULL, NULL),
(9, 23, 'free', NULL, NULL),
(9, 24, 'free', NULL, NULL),
(9, 25, 'free', NULL, NULL),
(9, 26, 'free', NULL, NULL),
(9, 27, 'free', NULL, NULL),
(9, 28, 'free', NULL, NULL),
(9, 29, 'free', NULL, NULL),
(9, 30, 'free', NULL, NULL),
(9, 31, 'free', NULL, NULL),
(9, 32, 'free', NULL, NULL),
(9, 33, 'free', NULL, NULL),
(9, 34, 'free', NULL, NULL),
(9, 35, 'free', NULL, NULL),
(9, 36, 'free', NULL, NULL),
(9, 37, 'free', NULL, NULL),
(9, 38, 'free', NULL, NULL),
(7, 39, 'free', NULL, NULL),
(8, 39, 'free', NULL, NULL),
(10, 39, 'free', NULL, NULL),
(7, 40, 'free', NULL, NULL),
(7, 41, 'free', NULL, NULL),
(7, 42, 'free', NULL, NULL),
(7, 43, 'free', NULL, NULL),
(7, 44, 'free', NULL, NULL),
(7, 45, 'free', NULL, NULL),
(7, 46, 'free', NULL, NULL),
(7, 47, 'free', NULL, NULL),
(8, 40, 'free', NULL, NULL),
(8, 41, 'free', NULL, NULL),
(8, 42, 'free', NULL, NULL),
(8, 43, 'free', NULL, NULL),
(8, 44, 'free', NULL, NULL),
(8, 45, 'free', NULL, NULL),
(8, 46, 'free', NULL, NULL),
(8, 47, 'free', NULL, NULL),
(10, 40, 'free', NULL, NULL),
(10, 41, 'free', NULL, NULL),
(10, 42, 'free', NULL, NULL),
(10, 43, 'free', NULL, NULL),
(10, 44, 'free', NULL, NULL),
(10, 45, 'free', NULL, NULL),
(10, 46, 'free', NULL, NULL),
(10, 47, 'free', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `id_hall` int(11) NOT NULL AUTO_INCREMENT,
  `stat` enum('VIP','малый','большой') NOT NULL,
  `name` char(20) DEFAULT NULL,
  `descr` char(255) DEFAULT NULL,
  PRIMARY KEY (`id_hall`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Зал кинотеатра' AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `hall`
--

INSERT INTO `hall` (`id_hall`, `stat`, `name`, `descr`) VALUES
(1, 'большой', '1', '4 ряда по 4 места + 5 ряд 6 мест = 22 места'),
(2, 'малый', '2', '4 ряда по 4 места = 16 мест'),
(3, 'VIP', 'Черный', '3 ряда по 3 места = 9 мест');

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id_mov` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `age` int(11) NOT NULL,
  `genre` set('фантастика','приключения','триллер','драма','комедия','ужасы','биография','история','мелодрама') NOT NULL,
  `rateKP` char(200) NOT NULL,
  `ratelmdb` float NOT NULL,
  `trailer` char(200) NOT NULL,
  `rateMPA` enum('G','PG','PG-13','R','NC-17') DEFAULT NULL,
  `abstract` text NOT NULL,
  `director` char(50) NOT NULL,
  `actors` char(200) NOT NULL,
  `year` year(4) NOT NULL DEFAULT '2015',
  `time` int(11) NOT NULL,
  `poster` char(200) NOT NULL,
  `country` set('США','Россия','Франция','Великобритания','Исландия') NOT NULL DEFAULT 'США',
  PRIMARY KEY (`id_mov`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Таблица фильмов' AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id_mov`, `name`, `age`, `genre`, `rateKP`, `ratelmdb`, `trailer`, `rateMPA`, `abstract`, `director`, `actors`, `year`, `time`, `poster`, `country`) VALUES
(1, 'Марсианин', 16, 'фантастика,приключения', '0', 0, '', 'PG-13', 'Марсианская миссия «Арес-3» в процессе работы была вынуждена экстренно покинуть планету из-за надвигающейся песчаной бури. Инженер и биолог Марк Уотни получил повреждение скафандра во время песчаной бури. Сотрудники миссии, посчитав его погибшим, эвакуировались с планеты, оставив Марка одного.', 'Ридли Скотт', 'Мэтт Дэймон, Кейт Мара, Джессика Честейн,Кристен Уит, Себастьян Стэн, Шон Бин', 2015, 141, 'template\\default\\images\\4.jpg', 'США'),
(2, 'Эверест', 12, 'приключения,триллер,драма,биография,история', '', 0, '', 'PG-13', 'Эверест — великая неприступная гора, покорить вершину которой мечтают многие профессиональные альпинисты. Одна из экспедиций на ее вершину закончилась настоящей трагедией, однако этот факт не останавливает отважных альпинистов.', 'Бальтасар Кормакур', 'Джейсон Кларк, Джош Бролин, Джейк Джиленхол, Сэм Уортингтон, Джон Хоукс, Майкл Келли, Кира Найтли', 2015, 121, 'template\\default\\images\\6.jpg', 'США'),
(4, 'Без границ', 12, 'комедия,мелодрама', '', 0, '', NULL, 'События картины начинаются в московском аэропорту, откуда главные герои отправляются в захватывающие путешествия к живописным горным долинам Армении, утопающим в зелени улочкам Тбилиси и праздничным огням новогодней Москвы навстречу любви — яркой и страстной, наивной и нелепой, трогательной и грустной, счастливой и безрассудной, которая не знает границ и условностей, возраста и национальностей.', 'Карен Оганесян', 'Инна Чурикова, Олег Басилашвили, Александр Адабашьян, Анна Чиповская, Иван Янковский', 2015, 90, 'template\\default\\images\\5.jpg', 'США');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `date` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_seat` int(11) DEFAULT NULL,
  KEY `FK_orders_users` (`id_user`),
  KEY `FK_orders_seats` (`id_seat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Сделанные заказы';

-- --------------------------------------------------------

--
-- Структура таблицы `seats`
--

CREATE TABLE IF NOT EXISTS `seats` (
  `id_seat` int(11) NOT NULL AUTO_INCREMENT,
  `numseries` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL,
  `id_hall` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_seat`),
  KEY `id_hall` (`id_hall`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Места в зале' AUTO_INCREMENT=48 ;

--
-- Дамп данных таблицы `seats`
--

INSERT INTO `seats` (`id_seat`, `numseries`, `num`, `id_hall`) VALUES
(1, 1, 2, 1),
(2, 1, 1, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 2, 1, 1),
(6, 2, 2, 1),
(7, 2, 3, 1),
(8, 2, 4, 1),
(9, 3, 4, 1),
(10, 3, 3, 1),
(11, 3, 2, 1),
(12, 3, 1, 1),
(13, 4, 1, 1),
(14, 4, 2, 1),
(15, 4, 3, 1),
(16, 4, 4, 1),
(17, 5, 4, 1),
(18, 5, 3, 1),
(19, 5, 2, 1),
(20, 5, 1, 1),
(21, 5, 5, 1),
(22, 5, 6, 1),
(23, 1, 1, 2),
(24, 1, 2, 2),
(25, 1, 3, 2),
(26, 1, 4, 2),
(27, 2, 4, 2),
(28, 2, 3, 2),
(29, 2, 4, 2),
(30, 2, 1, 2),
(31, 3, 1, 2),
(32, 3, 2, 2),
(33, 3, 3, 2),
(34, 3, 4, 2),
(35, 4, 1, 2),
(36, 4, 2, 2),
(37, 4, 3, 2),
(38, 4, 4, 2),
(39, 1, 1, 3),
(40, 1, 2, 3),
(41, 1, 3, 3),
(42, 2, 3, 3),
(43, 2, 2, 3),
(44, 2, 1, 3),
(45, 3, 1, 3),
(46, 3, 2, 3),
(47, 3, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `id_mov` int(11) DEFAULT NULL,
  `id_hall` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id_session`),
  KEY `FK_session_hall` (`id_hall`),
  KEY `FK_session_movies` (`id_mov`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Сеанс фильма' AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`id_session`, `id_mov`, `id_hall`, `time`, `price`) VALUES
(1, 1, 1, '2015-12-02 22:45:00', 100),
(2, 1, 1, '2015-12-02 12:45:00', 100),
(3, 4, 1, '2015-12-02 22:45:00', 100),
(4, 4, 2, '2015-12-02 23:40:00', 100),
(5, 2, 2, '2015-12-03 22:30:00', 250),
(6, 1, 1, '2015-12-03 20:00:00', 150),
(7, 4, 3, '2015-12-03 20:00:00', 150),
(8, 4, 3, '2015-12-03 10:00:00', 120),
(9, 1, 2, '2015-12-03 20:00:00', 300),
(10, 2, 3, '2015-12-03 21:50:00', 150);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `surname` char(50) NOT NULL,
  `birthdate` date NOT NULL,
  `account_name` char(20) NOT NULL,
  `pashash` char(10) NOT NULL,
  `email` char(30) NOT NULL,
  `phonenum` char(11) NOT NULL,
  `pasquestion` enum('Y','N') NOT NULL,
  `pasanswerhash` char(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Зарегистрированные пользователи в системе' AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `birthdate`, `account_name`, `pashash`, `email`, `phonenum`, `pasquestion`, `pasanswerhash`) VALUES
(1, '', '', '0000-00-00', 'admin', '', '', '', 'Y', ''),
(2, '', '', '0000-00-00', 'admin', '', '', '', 'Y', ''),
(3, 'Иван', 'Иванов', '1985-11-01', 'admin', '', '', '', 'Y', '');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking_seats`
--
ALTER TABLE `booking_seats`
  ADD CONSTRAINT `FK_booking_seats_seats` FOREIGN KEY (`id_seat`) REFERENCES `seats` (`id_seat`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_booking_seats_session` FOREIGN KEY (`id_session`) REFERENCES `session` (`id_session`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_booking_seats_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_seats` FOREIGN KEY (`id_seat`) REFERENCES `seats` (`id_seat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `FK_seats_hall` FOREIGN KEY (`id_hall`) REFERENCES `hall` (`id_hall`);

--
-- Ограничения внешнего ключа таблицы `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `FK_session_hall` FOREIGN KEY (`id_hall`) REFERENCES `hall` (`id_hall`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_session_movies` FOREIGN KEY (`id_mov`) REFERENCES `movies` (`id_mov`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
