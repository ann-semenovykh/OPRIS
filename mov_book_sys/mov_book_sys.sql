-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 02 2015 г., 19:11
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
-- Структура таблицы `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `id_hall` int(11) NOT NULL AUTO_INCREMENT,
  `stat` enum('VIP','small','big') NOT NULL,
  PRIMARY KEY (`id_hall`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Зал кинотеатра' AUTO_INCREMENT=1 ;

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
(1, 'Марсианин', 16, 'фантастика,приключения', '0', 0, '', 'PG-13', 'Марсианская миссия «Арес-3» в процессе работы была вынуждена экстренно покинуть планету из-за надвигающейся песчаной бури. Инженер и биолог Марк Уотни получил повреждение скафандра во время песчаной бури. Сотрудники миссии, посчитав его погибшим, эвакуировались с планеты, оставив Марка одного.', 'Ридли Скотт', 'Мэтт Дэймон, Кейт Мара, Джессика Честейн,Кристен Уит, Себастьян Стэн, Шон Бин', 2015, 141, '', 'США'),
(2, 'Эверест', 12, 'приключения,триллер,драма,биография,история', '', 0, '', 'PG-13', 'Эверест — великая неприступная гора, покорить вершину которой мечтают многие профессиональные альпинисты. Одна из экспедиций на ее вершину закончилась настоящей трагедией, однако этот факт не останавливает отважных альпинистов.', 'Бальтасар Кормакур', 'Джейсон Кларк, Джош Бролин, Джейк Джиленхол, Сэм Уортингтон, Джон Хоукс, Майкл Келли, Кира Найтли', 2015, 121, '', 'США'),
(4, 'Без границ', 12, 'комедия,мелодрама', '', 0, '', NULL, 'События картины начинаются в московском аэропорту, откуда главные герои отправляются в захватывающие путешествия к живописным горным долинам Армении, утопающим в зелени улочкам Тбилиси и праздничным огням новогодней Москвы навстречу любви — яркой и страстной, наивной и нелепой, трогательной и грустной, счастливой и безрассудной, которая не знает границ и условностей, возраста и национальностей.', 'Карен Оганесян', 'Инна Чурикова, Олег Басилашвили, Александр Адабашьян, Анна Чиповская, Иван Янковский', 2015, 90, '', 'США');

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
  `numseries` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `stat` enum('free','reserved','ordered') NOT NULL,
  PRIMARY KEY (`id_seat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Места в кинотеатре' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `seats_in_hall`
--

CREATE TABLE IF NOT EXISTS `seats_in_hall` (
  `id_hall` int(11) DEFAULT NULL,
  `id_seat` int(11) DEFAULT NULL,
  KEY `FK__hall` (`id_hall`),
  KEY `FK__seats` (`id_seat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Места в зале';

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id_mov` int(11) DEFAULT NULL,
  `id_hall` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `price` float DEFAULT NULL,
  KEY `FK_session_movies` (`id_mov`),
  KEY `FK_session_hall` (`id_hall`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Сеанс фильма';

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
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Зарегистрированные пользователи в системе' AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `birthdate`, `account_name`, `pashash`, `email`, `phonenum`) VALUES
(1, '', '', '0000-00-00', 'admin', '', '', ''),
(2, '', '', '0000-00-00', 'admin', '', '', ''),
(3, 'Иван', 'Иванов', '1985-11-01', 'admin', '', '', '');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_seats` FOREIGN KEY (`id_seat`) REFERENCES `seats` (`id_seat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `seats_in_hall`
--
ALTER TABLE `seats_in_hall`
  ADD CONSTRAINT `FK__hall` FOREIGN KEY (`id_hall`) REFERENCES `hall` (`id_hall`),
  ADD CONSTRAINT `FK__seats` FOREIGN KEY (`id_seat`) REFERENCES `seats` (`id_seat`);

--
-- Ограничения внешнего ключа таблицы `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `FK_session_hall` FOREIGN KEY (`id_hall`) REFERENCES `hall` (`id_hall`),
  ADD CONSTRAINT `FK_session_movies` FOREIGN KEY (`id_mov`) REFERENCES `movies` (`id_mov`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
