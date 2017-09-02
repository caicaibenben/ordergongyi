-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-09-02 10:38:57
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ordergongyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '编号',
  `type` tinyint(1) unsigned DEFAULT NULL COMMENT '类型',
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  `mark` tinyint(1) unsigned DEFAULT NULL COMMENT '标志',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `keywords` varchar(200) DEFAULT NULL COMMENT '关键字',
  `text` text COMMENT '文章',
  `time` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `type`, `author`, `mark`, `title`, `keywords`, `text`, `time`) VALUES
(0002, 1, '2', 1, '4', '5', '&lt;p&gt;3防守打法第三方粉色发&lt;img src=&quot;/ordergongyi/article/image/20170901/1504257871101826.jpeg&quot; title=&quot;1504257871101826.jpeg&quot; alt=&quot;1504148274875.jpeg&quot;/&gt;多撒大东方&lt;/p&gt;', '2017-09-01 17:24:51'),
(0001, 1, '3', 1, '3', '3', '&lt;p&gt;3&lt;/p&gt;', '2017-09-01 10:09:10'),
(0003, 1, '11212', 12, '121212', '121212', '12121212', '2017-09-27 09:22:23'),
(0004, 3, '32', 1, '2', '2', '&lt;p&gt;313&lt;/p&gt;', '2017-09-01 17:30:37');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(4) unsigned NOT NULL COMMENT '编号',
  `username` varchar(30) DEFAULT NULL COMMENT '用户名',
  `userpwd` varchar(30) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`userid`, `username`, `userpwd`) VALUES
(1001, 'admin', '123'),
(1002, 'cai', '123'),
(1003, '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
