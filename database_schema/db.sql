-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 14 2014 г., 06:37
-- Версия сервера: 5.6.12
-- Версия PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `reservationsystem`
--
CREATE DATABASE IF NOT EXISTS `sklad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sklad`;

-- --------------------------------------------------------

--
-- Структура таблицы `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `accessory_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `accessory_name` varchar(85) NOT NULL,
  `accessory_quantity` tinyint(2) unsigned DEFAULT NULL,
  `legacyid` char(16) DEFAULT NULL,
  PRIMARY KEY (`accessory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `accessories`
--

INSERT INTO `accessories` (`accessory_id`, `accessory_name`, `accessory_quantity`, `legacyid`) VALUES
(1, 'ÐžÐŸÐ¢Ð˜ÐšÐ: CANON 100 mm macro', 2, NULL),
(3, 'ÐžÐŸÐ¢Ð˜ÐšÐ: CANON 50 mm F=1:1,2 ', 1, NULL),
(4, 'ÐžÐŸÐ¢Ð˜ÐšÐ: CANON 50 mm macro F=1:2,5', 3, NULL),
(5, 'ÐžÐŸÐ¢Ð˜ÐšÐ: CANON 35 mm F=1:1,4', 1, NULL),
(6, 'ÐžÐŸÐ¢Ð˜ÐšÐ: CANON 28 mm F=1:2,8', 1, NULL),
(7, 'ÐžÐŸÐ¢Ð˜ÐšÐ: CANON 24-105 mm', 1, NULL),
(8, 'Ð—Ð’Ð£Ðš: Sennheiser (Ð¿ÐµÑ‚Ð»Ð¸Ñ‡Ð½Ñ‹Ð¹)', 2, NULL),
(9, 'Ð—Ð’Ð£Ðš: Sennheiser (Ñ€ÑƒÑ‡Ð½Ð¾Ð¹)', 2, NULL),
(10, 'Ð—Ð’Ð£Ðš: Audio-Technica (Ð¿ÑƒÑˆÐºÐ°)', 2, NULL),
(11, 'Ð—Ð’Ð£Ðš: Rode (Ð½Ð°Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð½Ñ‹Ð¹)', 4, NULL),
(12, 'ÐžÐŸÐžÐ Ð«: Ð¨Ñ‚Ð°Ñ‚Ð¸Ð²Ð½Ð°Ñ ÑÐ¸ÑÑ‚ÐµÐ¼Ð° Sachtler FSB-6 SOOM', 2, NULL),
(13, 'ÐžÐŸÐžÐ Ð«: Ð¨Ñ‚Ð°Ñ‚Ð¸Ð² Vinten Pro Touch', 2, NULL),
(14, 'ÐžÐŸÐžÐ Ð«: Ð¨Ñ‚Ð°Ñ‚Ð¸Ð² Libec', 1, NULL),
(15, 'ÐžÐŸÐžÐ Ð«: ÐœÐ¾Ð½Ð¾Ð¿Ð¾Ð´ Ñ Ð³Ð¾Ð»Ð¾Ð²ÐºÐ¾Ð¹ Manfrotto MVM500A', 2, NULL),
(16, 'ÐžÐŸÐžÐ Ð«: Ð¡Ð»Ð°Ð¹Ð´ÐµÑ€ Edelkrone (Ñ€Ð°Ð±Ð¾Ñ‡Ð¸Ð¹ Ñ…Ð¾Ð´ 60 ÑÐ¼.)', 1, NULL),
(17, 'ÐžÐŸÐžÐ Ð«: Ð¡Ð»Ð°Ð¹Ð´ÐµÑ€ Slidecamera (Ñ€Ð°Ð±Ð¾Ñ‡Ð¸Ð¹ Ñ…Ð¾Ð´ 50 ÑÐ¼.)', 1, NULL),
(18, 'ÐžÐŸÐžÐ Ð«: Ð¡Ð»Ð°Ð¹Ð´ÐµÑ€ Slidecamera (Ñ€Ð°Ð±Ð¾Ñ‡Ð¸Ð¹ Ñ…Ð¾Ð´ 100 ÑÐ¼.)', 1, NULL),
(19, 'Ð¡Ð’Ð•Ð¢: Ð¡Ð²ÐµÑ‚Ð¸Ð»ÑŒÐ½Ð¸Ðº Ð½Ð°ÐºÐ°Ð¼ÐµÑ€Ð½Ñ‹Ð¹ Swit', 3, NULL),
(20, 'Ð¡Ð’Ð•Ð¢: Ð¡Ð²ÐµÑ‚Ð¸Ð»ÑŒÐ½Ð¸Ðº ÐºÐ¾Ð»ÑŒÑ†ÐµÐ²Ð¾Ð¹ F&amp;amp;V', 2, NULL),
(21, 'Ð¡Ð’Ð•Ð¢: Led Panel F&amp;amp;amp;V Ñ ÐºÐ¾Ñ€Ñ€ÐµÐºÑ†Ð¸ÐµÐ¹ Ð¢', 5, NULL),
(22, 'Ð¡Ð’Ð•Ð¢: Led Panel F&amp;amp;amp;V Ð±ÐµÐ· ÐºÐ¾Ñ€Ñ€ÐµÐºÑ†Ð¸Ð¸ Ð¢', 3, NULL),
(23, 'Ð¡Ð’Ð•Ð¢: ÐÐ´Ð°Ð¿Ñ‚ÐµÑ€ F&amp;amp;V VM-15 V-mount Ñ ÐºÐ°Ð±ÐµÐ»ÐµÐ¼', 7, NULL),
(24, 'Ð¡Ð’Ð•Ð¢: Ð¡Ñ‚Ð¾Ð¹ÐºÐ° Manfrotto', 2, NULL),
(25, 'Ð¡Ð’Ð•Ð¢: Ð¡Ñ‚Ð¾Ð¹ÐºÐ° Dedolight', 4, NULL),
(26, 'ÐœÐ¾Ð½Ð¸Ñ‚Ð¾Ñ€  TVLogic', 4, NULL),
(27, 'Ð Ð°Ñ†Ð¸Ñ  Vector', 4, NULL),
(28, 'Ð­ÐšÐ˜ÐŸÐ˜Ð ÐžÐ’ÐšÐ: ÐšÐ¾Ñ„Ñ€ KATA OMB-76', 2, NULL),
(29, 'Ð­ÐšÐ˜ÐŸÐ˜Ð ÐžÐ’ÐšÐ: ÐšÐ¾Ñ„Ñ€ KATA LW-99  PL ROLLING ORGANIZER', 2, NULL),
(30, 'Ð­ÐšÐ˜ÐŸÐ˜Ð ÐžÐ’ÐšÐ: ÐšÐ¾Ñ„Ñ€ IANIRO LIGHTING EQUIPMENT', 1, NULL),
(31, 'Ð­ÐšÐ˜ÐŸÐ˜Ð ÐžÐ’ÐšÐ: ÐšÐµÐ¹Ñ Ð¶ÐµÑÑ‚ÐºÐ¸Ð¹', 2, NULL),
(32, 'Ð­ÐšÐ˜ÐŸÐ˜Ð ÐžÐ’ÐšÐ: Ð”Ð¾Ð¶Ð´ÐµÐ²Ð¸Ðº ALMI', 4, NULL),
(33, 'Ð­ÐšÐ˜ÐŸÐ˜Ð ÐžÐ’ÐšÐ: Ð—Ð¸Ð¼Ð½Ð¸Ðº ALMI', 4, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `account_activation`
--

CREATE TABLE IF NOT EXISTS `account_activation` (
  `account_activation_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `activation_code` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`account_activation_id`),
  UNIQUE KEY `activation_code_2` (`activation_code`),
  KEY `activation_code` (`activation_code`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `announcementid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `announcement_text` text NOT NULL,
  `priority` mediumint(8) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`announcementid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `blackout_instances`
--

CREATE TABLE IF NOT EXISTS `blackout_instances` (
  `blackout_instance_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `blackout_series_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`blackout_instance_id`),
  KEY `start_date` (`start_date`),
  KEY `end_date` (`end_date`),
  KEY `blackout_series_id` (`blackout_series_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `blackout_series`
--

CREATE TABLE IF NOT EXISTS `blackout_series` (
  `blackout_series_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `title` varchar(85) NOT NULL,
  `description` text,
  `owner_id` mediumint(8) unsigned NOT NULL,
  `resource_id` mediumint(8) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  PRIMARY KEY (`blackout_series_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `custom_attributes`
--

CREATE TABLE IF NOT EXISTS `custom_attributes` (
  `custom_attribute_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `display_label` varchar(50) NOT NULL,
  `display_type` tinyint(2) unsigned NOT NULL,
  `attribute_category` tinyint(2) unsigned NOT NULL,
  `validation_regex` varchar(50) DEFAULT NULL,
  `is_required` tinyint(1) unsigned NOT NULL,
  `possible_values` text,
  `sort_order` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`custom_attribute_id`),
  KEY `attribute_category` (`attribute_category`),
  KEY `display_label` (`display_label`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `custom_attribute_values`
--

CREATE TABLE IF NOT EXISTS `custom_attribute_values` (
  `custom_attribute_value_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `custom_attribute_id` mediumint(8) unsigned NOT NULL,
  `attribute_value` text NOT NULL,
  `entity_id` mediumint(8) unsigned NOT NULL,
  `attribute_category` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`custom_attribute_value_id`),
  KEY `custom_attribute_id` (`custom_attribute_id`),
  KEY `entity_category` (`entity_id`,`attribute_category`),
  KEY `entity_attribute` (`entity_id`,`custom_attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `dbversion`
--

CREATE TABLE IF NOT EXISTS `dbversion` (
  `version_number` double unsigned NOT NULL DEFAULT '0',
  `version_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbversion`
--

INSERT INTO `dbversion` (`version_number`, `version_date`) VALUES
(2.1, '2014-01-09 06:21:45'),
(2.2, '2014-01-09 06:21:45'),
(2.3, '2014-01-09 06:21:45'),
(2.4, '2014-01-09 06:21:45');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `admin_group_id` smallint(5) unsigned DEFAULT NULL,
  `legacyid` char(16) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  KEY `admin_group_id` (`admin_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `group_resource_permissions`
--

CREATE TABLE IF NOT EXISTS `group_resource_permissions` (
  `group_id` smallint(5) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`resource_id`),
  KEY `group_id` (`group_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `group_roles`
--

CREATE TABLE IF NOT EXISTS `group_roles` (
  `group_id` smallint(8) unsigned NOT NULL,
  `role_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`),
  KEY `group_id` (`group_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `layouts`
--

CREATE TABLE IF NOT EXISTS `layouts` (
  `layout_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `timezone` varchar(50) NOT NULL,
  PRIMARY KEY (`layout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `layouts`
--

INSERT INTO `layouts` (`layout_id`, `timezone`) VALUES
(2, 'Europe/Moscow');

-- --------------------------------------------------------

--
-- Структура таблицы `quotas`
--

CREATE TABLE IF NOT EXISTS `quotas` (
  `quota_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `quota_limit` decimal(7,2) unsigned NOT NULL,
  `unit` varchar(25) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `resource_id` smallint(5) unsigned DEFAULT NULL,
  `group_id` smallint(5) unsigned DEFAULT NULL,
  `schedule_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`quota_id`),
  KEY `resource_id` (`resource_id`),
  KEY `group_id` (`group_id`),
  KEY `schedule_id` (`schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `reminder_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `sendtime` datetime NOT NULL,
  `refnumber` text NOT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `reminders_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_accessories`
--

CREATE TABLE IF NOT EXISTS `reservation_accessories` (
  `series_id` int(10) unsigned NOT NULL,
  `accessory_id` smallint(5) unsigned NOT NULL,
  `quantity` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`series_id`,`accessory_id`),
  KEY `accessory_id` (`accessory_id`),
  KEY `series_id` (`series_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation_accessories`
--

INSERT INTO `reservation_accessories` (`series_id`, `accessory_id`, `quantity`) VALUES
(3, 16, 1),
(3, 18, 1),
(4, 3, 1),
(4, 5, 1),
(4, 6, 1),
(4, 7, 1),
(4, 16, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_files`
--

CREATE TABLE IF NOT EXISTS `reservation_files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `series_id` int(10) unsigned NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `file_type` varchar(15) NOT NULL,
  `file_size` varchar(45) NOT NULL,
  `file_extension` varchar(10) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `series_id` (`series_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `reservation_files`
--

INSERT INTO `reservation_files` (`file_id`, `series_id`, `file_name`, `file_type`, `file_size`, `file_extension`) VALUES
(1, 4, 'kitchen_cam2.jpeg', 'image/jpeg', '496174', 'jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_instances`
--

CREATE TABLE IF NOT EXISTS `reservation_instances` (
  `reservation_instance_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `reference_number` varchar(50) NOT NULL,
  `series_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reservation_instance_id`),
  KEY `start_date` (`start_date`),
  KEY `end_date` (`end_date`),
  KEY `reference_number` (`reference_number`),
  KEY `series_id` (`series_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `reservation_instances`
--

INSERT INTO `reservation_instances` (`reservation_instance_id`, `start_date`, `end_date`, `reference_number`, `series_id`) VALUES
(1, '2014-01-09 10:00:00', '2014-01-09 11:00:00', '52ce6f7e4b180', 1),
(2, '2014-01-14 01:00:00', '2014-01-14 12:00:00', '52d530a20d7d1', 2),
(3, '2014-01-28 16:00:00', '2014-01-28 17:00:00', '52e7cc07ea29a', 3),
(4, '2014-02-13 02:00:00', '2014-02-13 03:00:00', '52fb90822b05d', 4),
(5, '2014-02-12 03:00:00', '2014-02-12 04:00:00', '52fb941c48d54', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_reminders`
--

CREATE TABLE IF NOT EXISTS `reservation_reminders` (
  `reminder_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `series_id` int(10) unsigned NOT NULL,
  `minutes_prior` int(10) unsigned NOT NULL,
  `reminder_type` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `series_id` (`series_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_resources`
--

CREATE TABLE IF NOT EXISTS `reservation_resources` (
  `series_id` int(10) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  `resource_level_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`series_id`,`resource_id`),
  KEY `resource_id` (`resource_id`),
  KEY `series_id` (`series_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation_resources`
--

INSERT INTO `reservation_resources` (`series_id`, `resource_id`, `resource_level_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(2, 4, 2),
(3, 3, 1),
(3, 8, 2),
(3, 10, 2),
(4, 3, 1),
(4, 8, 2),
(5, 7, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_series`
--

CREATE TABLE IF NOT EXISTS `reservation_series` (
  `series_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `title` varchar(85) NOT NULL,
  `description` text,
  `allow_participation` tinyint(1) unsigned NOT NULL,
  `allow_anon_participation` tinyint(1) unsigned NOT NULL,
  `type_id` tinyint(2) unsigned NOT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  `repeat_type` varchar(10) DEFAULT NULL,
  `repeat_options` varchar(255) DEFAULT NULL,
  `owner_id` mediumint(8) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  PRIMARY KEY (`series_id`),
  KEY `type_id` (`type_id`),
  KEY `status_id` (`status_id`),
  KEY `reservations_owner` (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `reservation_series`
--

INSERT INTO `reservation_series` (`series_id`, `date_created`, `last_modified`, `title`, `description`, `allow_participation`, `allow_anon_participation`, `type_id`, `status_id`, `repeat_type`, `repeat_options`, `owner_id`, `legacyid`) VALUES
(1, '2014-01-09 09:44:30', '2014-01-09 13:44:40', 'Ð¢ÐµÑÑ‚Ð¾Ð²Ñ‹Ð¹ Ð¿Ñ€Ð¾ÐµÐºÑ‚', '', 0, 0, 1, 2, 'none', '', 2, NULL),
(2, '2014-01-14 12:42:10', NULL, 'fsdfasdf', '', 0, 0, 1, 1, 'none', '', 1, NULL),
(3, '2014-01-28 15:26:00', NULL, 'Ð¹Ñ†Ñƒ', '', 0, 0, 1, 1, 'none', '', 2, NULL),
(4, '2014-02-12 15:17:22', NULL, 'Ð¢ÐµÑÑ‚Ð¾Ð²Ñ‹Ð¹ Ð¿Ñ€Ð¾ÐµÐºÑ‚', '', 0, 0, 1, 1, 'none', '', 1, NULL),
(5, '2014-02-12 15:32:44', NULL, 'wer', '', 0, 0, 1, 1, 'none', '', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_statuses`
--

CREATE TABLE IF NOT EXISTS `reservation_statuses` (
  `status_id` tinyint(2) unsigned NOT NULL,
  `label` varchar(85) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation_statuses`
--

INSERT INTO `reservation_statuses` (`status_id`, `label`) VALUES
(1, 'Created'),
(2, 'Deleted'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_types`
--

CREATE TABLE IF NOT EXISTS `reservation_types` (
  `type_id` tinyint(2) unsigned NOT NULL,
  `label` varchar(85) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation_types`
--

INSERT INTO `reservation_types` (`type_id`, `label`) VALUES
(1, 'Reservation'),
(2, 'Blackout');

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_users`
--

CREATE TABLE IF NOT EXISTS `reservation_users` (
  `reservation_instance_id` int(10) unsigned NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reservation_user_level` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`reservation_instance_id`,`user_id`),
  KEY `reservation_instance_id` (`reservation_instance_id`),
  KEY `user_id` (`user_id`),
  KEY `reservation_user_level` (`reservation_user_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation_users`
--

INSERT INTO `reservation_users` (`reservation_instance_id`, `user_id`, `reservation_user_level`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 2, 1),
(4, 1, 1),
(5, 1, 1),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resource_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `location` varchar(85) DEFAULT NULL,
  `contact_info` varchar(85) DEFAULT NULL,
  `description` text,
  `notes` text,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `min_duration` int(11) DEFAULT NULL,
  `min_increment` int(11) DEFAULT NULL,
  `max_duration` int(11) DEFAULT NULL,
  `unit_cost` decimal(7,2) DEFAULT NULL,
  `autoassign` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `requires_approval` tinyint(1) unsigned NOT NULL,
  `allow_multiday_reservations` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `max_participants` mediumint(8) unsigned DEFAULT NULL,
  `min_notice_time` int(11) DEFAULT NULL,
  `max_notice_time` int(11) DEFAULT NULL,
  `image_name` varchar(50) DEFAULT NULL,
  `schedule_id` smallint(5) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `admin_group_id` smallint(5) unsigned DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  `allow_calendar_subscription` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`resource_id`),
  UNIQUE KEY `public_id` (`public_id`),
  KEY `schedule_id` (`schedule_id`),
  KEY `admin_group_id` (`admin_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `resources`
--

INSERT INTO `resources` (`resource_id`, `name`, `location`, `contact_info`, `description`, `notes`, `isactive`, `min_duration`, `min_increment`, `max_duration`, `unit_cost`, `autoassign`, `requires_approval`, `allow_multiday_reservations`, `max_participants`, `min_notice_time`, `max_notice_time`, `image_name`, `schedule_id`, `legacyid`, `admin_group_id`, `public_id`, `allow_calendar_subscription`, `sort_order`) VALUES
(1, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ 1 Ð—Ð•Ð›Ð•ÐÐ«Ð™', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’ ÑÐ¾ÑÑ‚Ð°Ð²Ðµ:\nÐšÐ°Ð¼ÐºÐ¾Ñ€Ð´ÐµÑ€  SONY NEX FS700 (511543)\nMetabones (Ð”Ð)\nÐŸÐ»Ð¾Ñ‰Ð°Ð´ÐºÐ°  SACHTLER (Ð”Ð)\nÐ’Ð¸Ð·Ð¸Ñ€-Ð¾ÐºÑƒÐ»ÑÑ€ (ÐÐ•Ð¢)\nÐœÐ¸ÐºÑ€Ð¾Ñ„Ð¾Ð½ Ð½Ð°Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð½Ñ‹Ð¹  ECM-XM1 (Ð”Ð)\nÐ—Ð°Ñ€ÑÐ´Ð½Ð¾-Ð¿Ð¸Ñ‚Ð°ÑŽÑ‰ÐµÐµ ÑƒÑÑ‚Ñ€Ð¾Ð¹ÑÑ‚Ð²Ð¾ (Ð”Ð)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  16 - 35 (4813053)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  24 - 70 (115007409)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  70 - 200 (360814)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  50 (381976)\nÐ Ð°Ð´Ð¸Ð¾Ð¿ÐµÑ‚Ð»Ð¸Ñ‡ÐºÐ° SENNHEISER 100 G3 (\nREC: 4322047736 \nTRM:4322083023\n)\nÐÐ°ÑƒÑˆÐ½Ð¸ÐºÐ¸ (Ð”Ð)\nÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ Ð´Ð»Ñ ÑƒÑ…Ð¾Ð´Ð° Ð·Ð° Ð¾Ð¿Ñ‚Ð¸ÐºÐ¾Ð¹ (Ð”Ð)\nÐ¡ÑƒÐ¼ÐºÐ° (KATA OMB-74)\nÐ¨Ñ‚Ð°Ñ‚Ð¸Ð² SACHTLER FSB6 (0407  A13  9589)\nMARUMI C-PL 82mm (2ÑˆÑ‚.)\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 1),
(2, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ 2 Ð–Ð•Ð›Ð¢Ð«Ð™', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’ ÑÐ¾ÑÑ‚Ð°Ð²Ðµ:\nÐšÐ°Ð¼ÐºÐ¾Ñ€Ð´ÐµÑ€  SONY NEX FS700 (510863)\nMetabones (Ð”Ð)\nÐŸÐ»Ð¾Ñ‰Ð°Ð´ÐºÐ°  SACHTLER (Ð”Ð)\nÐ’Ð¸Ð·Ð¸Ñ€-Ð¾ÐºÑƒÐ»ÑÑ€ (Ð”Ð)\nÐœÐ¸ÐºÑ€Ð¾Ñ„Ð¾Ð½ Ð½Ð°Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð½Ñ‹Ð¹  ECM-XM1 (Ð”Ð)\nÐ—Ð°Ñ€ÑÐ´Ð½Ð¾-Ð¿Ð¸Ñ‚Ð°ÑŽÑ‰ÐµÐµ ÑƒÑÑ‚Ñ€Ð¾Ð¹ÑÑ‚Ð²Ð¾ (ÐÐ•Ð¢)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  16 - 35 (4831140)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  24 - 70 (100005432)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  70 - 200 (356091)\nÐ Ð°Ð´Ð¸Ð¾Ð¿ÐµÑ‚Ð»Ð¸Ñ‡ÐºÐ° SENNHEISER 100 G3 (\nREC: 4322047733 \nTRM: 4322083020\n)\nÐÐ°ÑƒÑˆÐ½Ð¸ÐºÐ¸ (ÐÐ•Ð¢)\nÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ Ð´Ð»Ñ ÑƒÑ…Ð¾Ð´Ð° Ð·Ð° Ð¾Ð¿Ñ‚Ð¸ÐºÐ¾Ð¹ (Ð”Ð)\nÐ¡ÑƒÐ¼ÐºÐ° (Ð”Ð)\nÐ¨Ñ‚Ð°Ñ‚Ð¸Ð² SACHTLER FSB6 (0407  C12  8586)\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 1),
(3, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ 3 Ð ÐžÐ—ÐžÐ’Ð«Ð™', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’ ÑÐ¾ÑÑ‚Ð°Ð²Ðµ:\nÐšÐ°Ð¼ÐºÐ¾Ñ€Ð´ÐµÑ€  SONY NEX FS700 (510929)\nMetabones (Ð”Ð)\nÐŸÐ»Ð¾Ñ‰Ð°Ð´ÐºÐ°  SACHTLER (Ð”Ð)\nÐ’Ð¸Ð·Ð¸Ñ€-Ð¾ÐºÑƒÐ»ÑÑ€ (ÐÐ•Ð¢)\nÐœÐ¸ÐºÑ€Ð¾Ñ„Ð¾Ð½ Ð½Ð°Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð½Ñ‹Ð¹  ECM-XM1 (Ð”Ð)\nÐ—Ð°Ñ€ÑÐ´Ð½Ð¾-Ð¿Ð¸Ñ‚Ð°ÑŽÑ‰ÐµÐµ ÑƒÑÑ‚Ñ€Ð¾Ð¹ÑÑ‚Ð²Ð¾ (ÐÐ•Ð¢)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  16 - 35 (4815022)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² TAMRON  24 - 70 (A007  016717)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  70 - 200 (361330)\nÐ Ð°Ð´Ð¸Ð¾Ð¿ÐµÑ‚Ð»Ð¸Ñ‡ÐºÐ° SENNHEISER 100 G3 (\nREC: 4322047732 \nTRM: 4322083016\n)\nÐÐ°ÑƒÑˆÐ½Ð¸ÐºÐ¸ (ÐÐ•Ð¢)\nÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ Ð´Ð»Ñ ÑƒÑ…Ð¾Ð´Ð° Ð·Ð° Ð¾Ð¿Ñ‚Ð¸ÐºÐ¾Ð¹ (Ð”Ð)\nÐ¡ÑƒÐ¼ÐºÐ° (Ð”Ð)\nÐ¨Ñ‚Ð°Ñ‚Ð¸Ð² SACHTLER FSB6 (0407  L12  9515)\nMARUMI C-PL 82mm (Ð”Ð)\nMARUMI UV 77mm (Ð”Ð)\n\n\n\n\n\n', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 2),
(4, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ 4 Ð“ÐžÐ›Ð£Ð‘ÐžÐ™', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’ ÑÐ¾ÑÑ‚Ð°Ð²Ðµ:\nÐšÐ°Ð¼ÐºÐ¾Ñ€Ð´ÐµÑ€  SONY NEX FS700 (511120)\nMetabones (Ð”Ð)\nÐŸÐ»Ð¾Ñ‰Ð°Ð´ÐºÐ°  SACHTLER (Ð”Ð)\nÐ’Ð¸Ð·Ð¸Ñ€-Ð¾ÐºÑƒÐ»ÑÑ€ (Ð”Ð)\nÐœÐ¸ÐºÑ€Ð¾Ñ„Ð¾Ð½ Ð½Ð°Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð½Ñ‹Ð¹  ECM-XM1 (Ð”Ð)\nÐ—Ð°Ñ€ÑÐ´Ð½Ð¾-Ð¿Ð¸Ñ‚Ð°ÑŽÑ‰ÐµÐµ ÑƒÑÑ‚Ñ€Ð¾Ð¹ÑÑ‚Ð²Ð¾ (ÐÐ•Ð¢)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  16 - 35 (4655335)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  24 - 70 (115009827)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² CANON  70 - 200 (333755)\nÐ Ð°Ð´Ð¸Ð¾Ð¿ÐµÑ‚Ð»Ð¸Ñ‡ÐºÐ° SENNHEISER 100 G3 (\nREC: 4322047737 \nTRM: 4322083021\n)\nÐÐ°ÑƒÑˆÐ½Ð¸ÐºÐ¸ (Ð”Ð)\nÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ Ð´Ð»Ñ ÑƒÑ…Ð¾Ð´Ð° Ð·Ð° Ð¾Ð¿Ñ‚Ð¸ÐºÐ¾Ð¹ (Ð”Ð)\nÐ¡ÑƒÐ¼ÐºÐ° (KATA OMB-74)\nÐ¨Ñ‚Ð°Ñ‚Ð¸Ð² SACHTLER FSB6 (0407  L12  9516)\n\n\n', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 3),
(5, 'Ð‘ÐµÐ· ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚Ð°', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’Ñ‹Ð±Ð¸Ñ€Ð°Ñ‚ÑŒ ÑÑ‚Ð¾ ÐµÑÐ»Ð¸ Ð½Ðµ Ñ‚Ñ€ÐµÐ±ÑƒÐµÑ‚ÑÑ ÐºÐ°ÐºÐ¾Ð¹-Ð»Ð¸Ð±Ð¾ ÐºÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ Ð¾Ð±Ð¾Ñ€ÑƒÐ´Ð¾Ð²Ð°Ð½Ð¸Ñ', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 0),
(6, 'Ð¤Ð¾Ñ‚Ð¾ÐºÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ Ð¡-09', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’ ÑÐ¾ÑÑ‚Ð°Ð²Ðµ:\nÐ¤Ð¾Ñ‚Ð¾ÐºÐ°Ð¼ÐµÑ€Ð° CANON EOS 60D (580330597)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² TAMRON 24 - 70 (A007 016672)\nÐšÑ€Ñ‹ÑˆÐºÐ° Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð²Ð° Ð¿ÐµÑ€ÐµÐ´Ð½ÑÑ\nÐšÐ°Ð±ÐµÐ»ÑŒ MicroUSB - 3xRCA (Ð”Ð)\nÐÐ´Ð°Ð¿Ñ‚ÐµÑ€ Ð¿Ð¸Ñ‚Ð°Ð½Ð¸Ñ ÑÐµÑ‚ÐµÐ²Ð¾Ð¹ (Ð”Ð)\nÐ‘Ð°Ñ‚Ð°Ñ€ÐµÑ Ð°ÐºÐºÑƒÐ¼ÑƒÐ»ÑÑ‚Ð¾Ñ€Ð½Ð°Ñ\nÐ¡ÑƒÐ¼ÐºÐ° LOWEPRO (Ð”Ð)\n\n\n\n', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 4),
(7, 'Ð¤Ð¾Ñ‚Ð¾ÐºÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ C-10', 'Ð¡ÐºÐ»Ð°Ð´ ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð³. ÐœÐ¾ÑÐºÐ²Ð°, ÑƒÐ». ÐŸÑ€Ð°Ð²Ð´Ñ‹ 24/3. Ð¢ÐµÐ». +7(495)7878726', 'Ð’ ÑÐ¾ÑÑ‚Ð°Ð²Ðµ:\nÐ¤Ð¾Ñ‚Ð¾ÐºÐ°Ð¼ÐµÑ€Ð° CANON EOS 60D (580444406)\nÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð² TAMRON 17-50 (B005  046716)\nÐšÑ€Ñ‹ÑˆÐºÐ° Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð²Ð° Ð¿ÐµÑ€ÐµÐ´Ð½ÑÑ\nÐšÐ°Ð±ÐµÐ»ÑŒ MicroUSB - 3xRCA (Ð”Ð)\nÐÐ´Ð°Ð¿Ñ‚ÐµÑ€ Ð¿Ð¸Ñ‚Ð°Ð½Ð¸Ñ ÑÐµÑ‚ÐµÐ²Ð¾Ð¹ (Ð”Ð)\nÐ‘Ð°Ñ‚Ð°Ñ€ÐµÑ Ð°ÐºÐºÑƒÐ¼ÑƒÐ»ÑÑ‚Ð¾Ñ€Ð½Ð°Ñ\nÐ¡ÑƒÐ¼ÐºÐ° LOWEPRO (Ð”Ð)\n\n\n', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 5),
(8, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ GoPro 1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 7),
(9, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ GoPro 2', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 8),
(10, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ GoPro 3', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 9),
(11, 'ÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ‚ GoPro 4', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` tinyint(2) unsigned NOT NULL,
  `name` varchar(85) DEFAULT NULL,
  `role_level` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `role_level`) VALUES
(1, 'Group Admin', 1),
(2, 'Application Admin', 2),
(3, 'Resource Admin', 3),
(4, 'Schedule Admin', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `saved_reports`
--

CREATE TABLE IF NOT EXISTS `saved_reports` (
  `saved_report_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `report_name` varchar(50) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `report_details` varchar(500) NOT NULL,
  PRIMARY KEY (`saved_report_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `schedule_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `isdefault` tinyint(1) unsigned NOT NULL,
  `weekdaystart` tinyint(2) unsigned NOT NULL,
  `daysvisible` tinyint(2) unsigned NOT NULL DEFAULT '7',
  `layout_id` mediumint(8) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  `allow_calendar_subscription` tinyint(1) NOT NULL DEFAULT '0',
  `admin_group_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`schedule_id`),
  UNIQUE KEY `public_id` (`public_id`),
  KEY `layout_id` (`layout_id`),
  KEY `schedules_groups_admin_group_id` (`admin_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `name`, `isdefault`, `weekdaystart`, `daysvisible`, `layout_id`, `legacyid`, `public_id`, `allow_calendar_subscription`, `admin_group_id`) VALUES
(1, 'ÐžÐ¡ÐÐžÐ’ÐÐžÐ• Ð ÐÐ¡ÐŸÐ˜Ð¡ÐÐÐ˜Ð•', 1, 1, 7, 2, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `time_blocks`
--

CREATE TABLE IF NOT EXISTS `time_blocks` (
  `block_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(85) DEFAULT NULL,
  `end_label` varchar(85) DEFAULT NULL,
  `availability_code` tinyint(2) unsigned NOT NULL,
  `layout_id` mediumint(8) unsigned NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `day_of_week` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`block_id`),
  KEY `layout_id` (`layout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `time_blocks`
--

INSERT INTO `time_blocks` (`block_id`, `label`, `end_label`, `availability_code`, `layout_id`, `start_time`, `end_time`, `day_of_week`) VALUES
(23, NULL, NULL, 1, 2, '00:00:00', '01:00:00', NULL),
(24, NULL, NULL, 1, 2, '01:00:00', '02:00:00', NULL),
(25, NULL, NULL, 1, 2, '02:00:00', '03:00:00', NULL),
(26, NULL, NULL, 1, 2, '03:00:00', '04:00:00', NULL),
(27, NULL, NULL, 1, 2, '04:00:00', '05:00:00', NULL),
(28, NULL, NULL, 1, 2, '05:00:00', '06:00:00', NULL),
(29, NULL, NULL, 1, 2, '06:00:00', '07:00:00', NULL),
(30, NULL, NULL, 1, 2, '07:00:00', '08:00:00', NULL),
(31, NULL, NULL, 1, 2, '08:00:00', '09:00:00', NULL),
(32, NULL, NULL, 1, 2, '09:00:00', '10:00:00', NULL),
(33, NULL, NULL, 1, 2, '10:00:00', '11:00:00', NULL),
(34, NULL, NULL, 1, 2, '11:00:00', '12:00:00', NULL),
(35, NULL, NULL, 1, 2, '12:00:00', '13:00:00', NULL),
(36, NULL, NULL, 1, 2, '13:00:00', '14:00:00', NULL),
(37, NULL, NULL, 1, 2, '14:00:00', '15:00:00', NULL),
(38, NULL, NULL, 1, 2, '15:00:00', '16:00:00', NULL),
(39, NULL, NULL, 1, 2, '16:00:00', '17:00:00', NULL),
(40, NULL, NULL, 1, 2, '17:00:00', '18:00:00', NULL),
(41, NULL, NULL, 1, 2, '18:00:00', '19:00:00', NULL),
(42, NULL, NULL, 1, 2, '19:00:00', '20:00:00', NULL),
(43, NULL, NULL, 1, 2, '20:00:00', '21:00:00', NULL),
(44, NULL, NULL, 1, 2, '21:00:00', '22:00:00', NULL),
(45, NULL, NULL, 1, 2, '22:00:00', '23:00:00', NULL),
(46, NULL, NULL, 1, 2, '23:00:00', '00:00:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(85) DEFAULT NULL,
  `lname` varchar(85) DEFAULT NULL,
  `username` varchar(85) DEFAULT NULL,
  `email` varchar(85) NOT NULL,
  `password` varchar(85) NOT NULL,
  `salt` varchar(85) NOT NULL,
  `organization` varchar(85) DEFAULT NULL,
  `position` varchar(85) DEFAULT NULL,
  `phone` varchar(85) DEFAULT NULL,
  `timezone` varchar(85) NOT NULL,
  `language` varchar(10) NOT NULL,
  `homepageid` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastlogin` datetime DEFAULT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `legacypassword` varchar(32) DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  `allow_calendar_subscription` tinyint(1) NOT NULL DEFAULT '0',
  `default_schedule_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `public_id` (`public_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `email`, `password`, `salt`, `organization`, `position`, `phone`, `timezone`, `language`, `homepageid`, `date_created`, `last_modified`, `lastlogin`, `status_id`, `legacyid`, `legacypassword`, `public_id`, `allow_calendar_subscription`, `default_schedule_id`) VALUES
(1, 'ÐœÐ°Ñ‚ÑŽÑˆÐ¸Ð½', 'Ð’ÑÑ‡ÐµÑÐ»Ð°Ð²', 'hard_admin', 'musicman_08@mail.ru', 'da627d09e83634aee010bd6ab10c28ad64320a59', '0ee16724', 'ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð®Ð½Ð¸Ð¾Ð½', 'Ð’Ð¸Ð´ÐµÐ¾Ð¸Ð½Ð¶ÐµÐ½ÐµÑ€', '8-915-167-54-35', 'Europe/Moscow', 'en_us', 1, '2014-01-09 06:22:45', '2014-02-12 10:44:06', '2014-02-12 14:44:06', 1, NULL, NULL, '52ce40427e745', 0, NULL),
(2, 'user', 'user', 'user', 'matuishin@gmail.com', 'fcbb71cc10f028c190b45a0580c656699c1eaf00', '33ba5336', '', '', '', 'Europe/Moscow', 'en_us', 2, '2014-01-09 09:43:04', '2014-02-11 12:20:42', '2014-02-11 16:20:42', 1, NULL, NULL, '52ce6f469ea4f', 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user_email_preferences`
--

CREATE TABLE IF NOT EXISTS `user_email_preferences` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `event_category` varchar(45) NOT NULL,
  `event_type` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`,`event_category`,`event_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user_email_preferences`
--

INSERT INTO `user_email_preferences` (`user_id`, `event_category`, `event_type`) VALUES
(1, 'reservation', 'approved'),
(1, 'reservation', 'created'),
(1, 'reservation', 'deleted'),
(1, 'reservation', 'updated'),
(2, 'reservation', 'approved'),
(2, 'reservation', 'created'),
(2, 'reservation', 'deleted'),
(2, 'reservation', 'updated');

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`user_id`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user_resource_permissions`
--

CREATE TABLE IF NOT EXISTS `user_resource_permissions` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  `permission_id` tinyint(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`,`resource_id`),
  KEY `user_id` (`user_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_resource_permissions`
--

INSERT INTO `user_resource_permissions` (`user_id`, `resource_id`, `permission_id`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(2, 8, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user_session`
--

CREATE TABLE IF NOT EXISTS `user_session` (
  `user_session_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `last_modified` datetime NOT NULL,
  `session_token` varchar(50) NOT NULL,
  `user_session_value` text NOT NULL,
  PRIMARY KEY (`user_session_id`),
  KEY `user_session_user_id` (`user_id`),
  KEY `user_session_session_token` (`session_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `user_statuses`
--

CREATE TABLE IF NOT EXISTS `user_statuses` (
  `status_id` tinyint(2) unsigned NOT NULL,
  `description` varchar(85) DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_statuses`
--

INSERT INTO `user_statuses` (`status_id`, `description`) VALUES
(1, 'Active'),
(2, 'Awaiting'),
(3, 'Inactive');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `account_activation`
--
ALTER TABLE `account_activation`
  ADD CONSTRAINT `account_activation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blackout_instances`
--
ALTER TABLE `blackout_instances`
  ADD CONSTRAINT `blackout_instances_ibfk_1` FOREIGN KEY (`blackout_series_id`) REFERENCES `blackout_series` (`blackout_series_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`admin_group_id`) REFERENCES `groups` (`group_id`);

--
-- Ограничения внешнего ключа таблицы `group_resource_permissions`
--
ALTER TABLE `group_resource_permissions`
  ADD CONSTRAINT `group_resource_permissions_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_resource_permissions_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `group_roles`
--
ALTER TABLE `group_roles`
  ADD CONSTRAINT `group_roles_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `quotas`
--
ALTER TABLE `quotas`
  ADD CONSTRAINT `quotas_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quotas_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quotas_ibfk_3` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_accessories`
--
ALTER TABLE `reservation_accessories`
  ADD CONSTRAINT `reservation_accessories_ibfk_1` FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`accessory_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_accessories_ibfk_2` FOREIGN KEY (`series_id`) REFERENCES `reservation_series` (`series_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_files`
--
ALTER TABLE `reservation_files`
  ADD CONSTRAINT `reservation_files_ibfk_1` FOREIGN KEY (`series_id`) REFERENCES `reservation_series` (`series_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_instances`
--
ALTER TABLE `reservation_instances`
  ADD CONSTRAINT `reservations_series` FOREIGN KEY (`series_id`) REFERENCES `reservation_series` (`series_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_reminders`
--
ALTER TABLE `reservation_reminders`
  ADD CONSTRAINT `reservation_reminders_ibfk_1` FOREIGN KEY (`series_id`) REFERENCES `reservation_series` (`series_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_resources`
--
ALTER TABLE `reservation_resources`
  ADD CONSTRAINT `reservation_resources_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_resources_ibfk_2` FOREIGN KEY (`series_id`) REFERENCES `reservation_series` (`series_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_series`
--
ALTER TABLE `reservation_series`
  ADD CONSTRAINT `reservations_owner` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_status` FOREIGN KEY (`status_id`) REFERENCES `reservation_statuses` (`status_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_type` FOREIGN KEY (`type_id`) REFERENCES `reservation_types` (`type_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_users`
--
ALTER TABLE `reservation_users`
  ADD CONSTRAINT `reservation_users_ibfk_1` FOREIGN KEY (`reservation_instance_id`) REFERENCES `reservation_instances` (`reservation_instance_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `admin_group_id` FOREIGN KEY (`admin_group_id`) REFERENCES `groups` (`group_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`schedule_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `saved_reports`
--
ALTER TABLE `saved_reports`
  ADD CONSTRAINT `saved_reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_groups_admin_group_id` FOREIGN KEY (`admin_group_id`) REFERENCES `groups` (`group_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`layout_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `time_blocks`
--
ALTER TABLE `time_blocks`
  ADD CONSTRAINT `time_blocks_ibfk_1` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`layout_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `user_statuses` (`status_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_email_preferences`
--
ALTER TABLE `user_email_preferences`
  ADD CONSTRAINT `user_email_preferences_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_groups`
--
ALTER TABLE `user_groups`
  ADD CONSTRAINT `user_groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_groups_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_resource_permissions`
--
ALTER TABLE `user_resource_permissions`
  ADD CONSTRAINT `user_resource_permissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_resource_permissions_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resource_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_session`
--
ALTER TABLE `user_session`
  ADD CONSTRAINT `user_session_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
