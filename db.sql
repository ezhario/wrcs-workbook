-- 
-- Структура таблицы `users`
-- 

CREATE TABLE `users` (
	`id` int(11) NOT NULL auto_increment,
	`user` varchar(100) NULL,
	`pass` varchar(100) NULL,
	`role_id` int(1) NOT NULL,
	`fio` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

-- 
-- Дамп данных таблицы `users`
-- 

INSERT INTO `users` VALUES (1, 'admin', 'admin', '1', 'Репин Никита Ильич');

-- --------------------------------------------------------

-- 
-- Структура таблицы `count`
-- 

CREATE TABLE `count` (
	`id` int(11) NOT NULL auto_increment,
	`user_id` int(11) NOT NULL,
	`reg_date` int(14) NOT NULL,
	`time_in` int(14) NOT NULL,
	`time_out` int(14) NOT NULL,
	`who_reg` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 AUTO_INCREMENT=46;

	