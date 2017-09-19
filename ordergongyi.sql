-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-09-19 05:23:50
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=227 ;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `type`, `author`, `mark`, `title`, `keywords`, `text`, `time`) VALUES
(0025, 1, '0', 2, '才2', '才', '擦UC啊u', '0000-00-00 00:00:00'),
(0026, 2, '0', 1, '才3', '才', '擦UC啊u', '0000-00-00 00:00:00'),
(0208, 0, '奥德悦生活公益平台', 1, '用爱心为学子换取助学金', '爱心，助学金', '&lt;p style=&quot;line-height: 1.75em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;span style=&quot;color: rgb(15, 15, 15); background-color: rgb(255, 255, 255); font-family: 宋体, SimSun;&quot;&gt;为深入弘扬沂蒙精神，传递社会爱心，帮助经济困难的大学生顺利完成学业，奥德集团在2012年制定了第一个“五年助学计划”，即自2012年起至2016年连续五年，每年在全市选择30名新录取的贫困大学生给予经济资助，为每名大学生提供总额为17000元助学金，直至该大学生顺利完成学业。五年来，奥德集团严格按照“五年计划”实施资助，共资助三区九县的161名贫困大学生，资助金额达272万元。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;/ordergongyi/article/20170909/1504946807525418.jpg&quot; title=&quot;1504946807525418.jpg&quot; alt=&quot;001.jpg&quot; width=&quot;665&quot; height=&quot;344&quot; style=&quot;width: 665px; height: 344px;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;2017年根据林凡连董事长资助人数和资助金额都要增长的意见，响应习近平总书记关于“要做好教育扶贫，不能让孩子输在起跑线上”的指示精神，集团又制订了第二个“五年精准助学计划”，即从2017年到2021年，为迎接党的十九大胜利召开、向建党一百周年献礼，计划在三区九县资助220名贫困大学生。每名大学生助学金总额提升到18000元，其中第一、二学年5000元，从第三年每年资助4000元，直至该大学生顺利完成学业。预计捐资近500万元。&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;自活动开展以来，为将助学活动开展的深入、扎实、持续、有效，奥德集团以旗下互联网社区服务平台“奥德悦生活”为载体，充分利用奥德悦生活的互联网优势，搭建“奥德悦生活·公益平台”专题网站，全方位报道精准助学活动。实施“手机网上充燃气送爱心”活动，奥德燃气居民用户可以通过奥德悦生活APP或微信公众号在线充值燃气费，获赠慈善爱心，直接参与到捐资助学计划中。奥德悦生活是奥德集团打造的互联网社区生活服务平台，包括燃气在线缴费、社区电商等基础服务以及社区综合服务、文化旅游、公益平台等增值服务。&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;/ordergongyi/article/20170909/1504946974925570.png&quot; title=&quot;1504946974925570.png&quot; alt=&quot;002.png&quot; width=&quot;607&quot; height=&quot;324&quot; style=&quot;width: 607px; height: 324px;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;同时，集团设立了“助学办公室”，建立了QQ群，几年来，助学办与受助学生常沟通、勤交流，保持日常联系，掌握学生的思想动态，关心了解他们的学习生活情况。目前，受助的2012级和2013级60名大学生已经顺利毕业，据了解，有10人考取了国家机关事业单位，11人考取了研究生，23人参加了工作，4人选择了自主创业，8人复习准备考取研究生。今年的助学活动是我们第二个“五年精准助学计划”的第一批学生，捐助的对象是临沂市2017年被高校录取、家庭困难、品学兼优的部分大学生，分别来自临沭、莒南和河东区。本次受资助30名新生，是在市教育局学生资助管理中心、市工商联、市光彩事业促进会、市慈善总会和有关县区教体局的指导和参与下实施的。在这里，希望在座的大学生要树立远大的理想，把社会各界的关爱，化为奋发学习的动力，在逆境中奋进，珍惜来之不易的学习机会，好好学习，刻苦上进，掌握真本领，成为有用之才，将来更好地回馈家庭和社会。&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;奥德集团的发展得益于各级领导和社会各界的支持与帮助。饮水思源，奥德集团积极履行社会责任，回报社会，并将慈善事业作为系统工程深入实施，以实际行动弘扬“精准扶贫、回馈社会”的精神。作为企业，我们只是奉献了一点爱心，帮助家庭困难的大学生实现人生梦想，也希望更多的企业和个人关注公益事业，参与到扶贫助学活动中来！&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;', '2017-09-16 09:19:18'),
(0028, 3, '0', 1, '才4', '才', '擦UC啊u', '0000-00-00 00:00:00'),
(0001, 0, '奥德悦生活公益平台', 1, '用爱心为贫困学子换取助学金', '爱心,助学金', '&lt;p style=&quot;line-height: 1.75em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;为深入弘扬沂蒙精神，传递社会爱心，帮助经济困难的大学生顺利完成学业，奥德集团在2012年制定了第一个“五年助学计划”，即自2012年起至2016年连续五年，每年在全市选择30名新录取的贫困大学生给予经济资助，为每名大学生提供总额为17000元助学金，直至该大学生顺利完成学业。五年来，奥德集团严格按照“五年计划”实施资助，共资助三区九县的161名贫困大学生，资助金额达272万元。&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;/ordergongyi/article/20170909/1504946807525418.jpg&quot; title=&quot;1504946807525418.jpg&quot; alt=&quot;001.jpg&quot; width=&quot;665&quot; height=&quot;344&quot; style=&quot;width: 665px; height: 344px;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); line-height: 1.75em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;2017年根据林凡连董事长资助人数和资助金额都要增长的意见，响应习近平总书记关于“要做好教育扶贫，不能让孩子输在起跑线上”的指示精神，集团又制订了第二个“五年精准助学计划”，即从2017年到2021年，为迎接党的十九大胜利召开、向建党一百周年献礼，计划在三区九县资助220名贫困大学生。每名大学生助学金总额提升到18000元，其中第一、二学年5000元，从第三年每年资助4000元，直至该大学生顺利完成学业。预计捐资近500万元。&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;自活动开展以来，为将助学活动开展的深入、扎实、持续、有效，奥德集团以旗下互联网社区服务平台“奥德悦生活”为载体，充分利用奥德悦生活的互联网优势，搭建“奥德悦生活·公益平台”专题网站，全方位报道精准助学活动。实施“手机网上充燃气送爱心”活动，奥德燃气居民用户可以通过奥德悦生活APP或微信公众号在线充值燃气费，获赠慈善爱心，直接参与到捐资助学计划中。奥德悦生活是奥德集团打造的互联网社区生活服务平台，包括燃气在线缴费、社区电商等基础服务以及社区综合服务、文化旅游、公益平台等增值服务。&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;/ordergongyi/article/20170909/1504946974925570.png&quot; title=&quot;1504946974925570.png&quot; alt=&quot;002.png&quot; width=&quot;607&quot; height=&quot;324&quot; style=&quot;width: 607px; height: 324px;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;同时，集团设立了“助学办公室”，建立了QQ群，几年来，助学办与受助学生常沟通、勤交流，保持日常联系，掌握学生的思想动态，关心了解他们的学习生活情况。目前，受助的2012级和2013级60名大学生已经顺利毕业，据了解，有10人考取了国家机关事业单位，11人考取了研究生，23人参加了工作，4人选择了自主创业，8人复习准备考取研究生。今年的助学活动是我们第二个“五年精准助学计划”的第一批学生，捐助的对象是临沂市2017年被高校录取、家庭困难、品学兼优的部分大学生，分别来自临沭、莒南和河东区。本次受资助30名新生，是在市教育局学生资助管理中心、市工商联、市光彩事业促进会、市慈善总会和有关县区教体局的指导和参与下实施的。在这里，希望在座的大学生要树立远大的理想，把社会各界的关爱，化为奋发学习的动力，在逆境中奋进，珍惜来之不易的学习机会，好好学习，刻苦上进，掌握真本领，成为有用之才，将来更好地回馈家庭和社会。&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; line-height: 30px; color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;奥德集团的发展得益于各级领导和社会各界的支持与帮助。饮水思源，奥德集团积极履行社会责任，回报社会，并将慈善事业作为系统工程深入实施，以实际行动弘扬“精准扶贫、回馈社会”的精神。作为企业，我们只是奉献了一点爱心，帮助家庭困难的大学生实现人生梦想，也希望更多的企业和个人关注公益事业，参与到扶贫助学活动中来！&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(15, 15, 15); font-family: &amp;quot;Helvetica Neue&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;', '2017-09-16 09:18:59'),
(0024, 3, '0', 1, '才1', '才', '擦UC啊u', '0000-00-00 00:00:00'),
(0000, 0, NULL, 0, '', '404', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;img src=&quot;/ordergongyi/article/20170914/1505354974539833.jpg&quot; title=&quot;1505354974539833.jpg&quot; alt=&quot;2fdda3cc7cd98d10b262fca2233fb80e7aec90eb_看图王.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', NULL),
(0210, 1, '1', 1, '11', '1', '1', '0000-00-00 00:00:00'),
(0211, 1, '1', 1, '12', '1', '1', '0000-00-00 00:00:00'),
(0212, 1, '1', 1, '13', '1', '1', '0000-00-00 00:00:00'),
(0213, 1, '1', 1, '14', '1', '1', '0000-00-00 00:00:00'),
(0214, 2, '1', 2, '15', '1', '1', '0000-00-00 00:00:00'),
(0215, 1, '1', 2, '16', '1', '1', '0000-00-00 00:00:00'),
(0216, 0, '1', 1, '17', '1', '&lt;p&gt;1&lt;/p&gt;', '2017-09-19 08:51:02'),
(0217, 1, '1', 1, '18', '1', '1', '0000-00-00 00:00:00'),
(0218, 1, '1', 1, '19', '1', '1', '0000-00-00 00:00:00'),
(0219, 1, '1', 2, '20', '1', '1', '0000-00-00 00:00:00'),
(0220, 1, '1', 1, '21', '1', '1', '0000-00-00 00:00:00'),
(0221, 3, '1', 2, '22', '1', '1', '0000-00-00 00:00:00'),
(0222, 1, '1', 1, '23', '1', '1', '0000-00-00 00:00:00'),
(0223, 1, '1', 2, '24', '1', '1', '0000-00-00 00:00:00'),
(0224, 1, '1', 1, '25', '1', '1', '0000-00-00 00:00:00'),
(0225, 0, '225', 2, '225', '225', '&lt;p&gt;225&lt;/p&gt;', '2017-09-19 08:49:46');

-- --------------------------------------------------------

--
-- 表的结构 `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` tinyint(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '标识',
  `type` tinyint(1) unsigned NOT NULL COMMENT '类型',
  `type_id` tinyint(4) unsigned zerofill NOT NULL COMMENT '类型内部ID',
  `imgaddr` varchar(300) CHARACTER SET utf8 NOT NULL COMMENT '图片链接地址',
  `text` varchar(300) CHARACTER SET utf8 DEFAULT NULL COMMENT '文字描述',
  `link` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '文章链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `carousel`
--

INSERT INTO `carousel` (`id`, `type`, `type_id`, `imgaddr`, `text`, `link`) VALUES
(0001, 1, 0001, '/ordergongyi/article/20170912/20170912oXOcIM.jpg', '关注寒门学子，开展公益助学，奥德燃气一直在努力', 'http://localhost/ordergongyi/home/article/article.php?article=0001'),
(0002, 1, 0002, '/ordergongyi/article/20170912/20170912qHZHnD.jpg', '人生之善莫过于助人，助人之德莫过于助学', ''),
(0003, 1, 0003, '/ordergongyi/article/20170912/20170912zoWn3d.jpg', '奉献爱心，收获希望', ''),
(0004, 1, 0004, '/ordergongyi/article/20170912/20170912Wpoxf6.jpg', '让贫苦的学子能在更广阔的世界翱翔，实现自己的人生价值', ''),
(0005, 1, 0005, '/ordergongyi/article/20170912/20170912ZY5olk.jpg', '赠人玫瑰，手有余香', ''),
(0006, 2, 0001, '/ordergongyi/article/20170912/20170912vmEdqP.png', '扶一株春蕾，争一分春光，助一名学子，赢一片希望', ''),
(0007, 2, 0002, '/ordergongyi/article/20170912/201709129hRix6.png', '弘扬社会公益慈善精神，传递扶贫济困大爱情怀', ''),
(0008, 2, 0003, '/ordergongyi/article/20170912/20170912clsklt.png', '受助学生代表表示，努力学习，争取早日回报社会，将爱心传递下去', ''),
(0009, 2, 0004, '/ordergongyi/article/20170912/201709121iW9NC.png', '十年树木百年树人，百年大计教育为本', ''),
(0010, 2, 0005, '/ordergongyi/article/20170912/20170912JlMSJm.png', '一滴水，也许微不足道，但汇聚成河就足以让荒漠变成绿洲！', ''),
(0011, 2, 0006, '/ordergongyi/article/20170912/201709120Mpaoa.png', '众多的爱心汇聚，可以改变寒门学子一生的命运', ''),
(0012, 3, 0001, '/ordergongyi/article/20170912/20170912jjMJgA.jpg', '赠人玫瑰，手留余香；奉献爱心，收获希望。希望通过持续进行的公益助学活动，尽绵薄之力改变更多学子的命运。未来的日子，奥德将一如既往坚持回报社会，承担社会应有责任，继续参与公益慈善事业，努力将公益之行常态化。', ''),
(0013, 3, 0002, '/ordergongyi/article/20170912/2017091282ws30.jpg', '每年都会有这么一群寒门学子，他们渴望知识，埋头苦读，但是高额的学杂费对于他们的家庭来说无疑是沉重的负担，不少有志青年迫于生活的压力无心读书甚至辍学。关注寒门学子，开展公益助学，奥德集团一直在努力。', ''),
(0014, 3, 0003, '/ordergongyi/article/20170912/20170912RO3LIz.jpg', '一滴水，也许微不足道，但汇聚成河就足以让荒漠变成绿洲！一份爱心也许力量有限，但无数颗爱心汇成爱的海洋，就能让这些贫苦的学子挺起自信的脊梁去奋力成就梦想！', ''),
(0015, 3, 0004, '/ordergongyi/article/20170912/20170912CutmOx.jpg', '十年树木百年树人，百年大计教育为本。人才培养不仅是国家使命，也是企业义不容辞的社会责任。每一个有责任心、有爱心的企业理应在社会人才培养上发挥其应有的作用，承担其应尽的义务。', ''),
(0016, 3, 0005, '/ordergongyi/article/20170912/20170912m1Etrw.jpg', '在未来的日子，奥德悦生活将一如既往坚持回报社会，承担社会应有责任，继续参与公益慈善事业，努力将公益之行常态化。希望有更多爱心人士加入公益助学活动，让贫苦的学子能在更广阔的世界翱翔，实现自己的人生价值！', ''),
(0017, 4, 0001, '/ordergongyi/article/20170912/20170912cAH3S1.png', '', '');

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
(1001, 'orderkj', 'orderkj666');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
