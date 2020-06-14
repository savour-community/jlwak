-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-06-14 00:26:35
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `jlwak`
--

-- --------------------------------------------------------

--
-- 表的结构 `sp_auth`
--

CREATE TABLE `sp_auth` (
  `auth_id` int(10) UNSIGNED NOT NULL COMMENT '权限ID',
  `auth_name` varchar(20) NOT NULL COMMENT '权限名称',
  `auth_pid` smallint(6) NOT NULL COMMENT '父ID',
  `auth_c` varchar(32) NOT NULL COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL COMMENT '操作方法',
  `auth_path` varchar(32) DEFAULT NULL COMMENT '全路径',
  `auth_level` int(10) NOT NULL DEFAULT '0' COMMENT '权限等级'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限表';

--
-- 转存表中的数据 `sp_auth`
--

INSERT INTO `sp_auth` (`auth_id`, `auth_name`, `auth_pid`, `auth_c`, `auth_a`, `auth_path`, `auth_level`) VALUES
(1, '权限管理', 0, 'Auth', '', '1', 0),
(2, '权限列表', 1, 'Auth', 'showlist', '1-3', 1),
(121, '管理员列表', 1, 'Manager', 'showlist', '1-121', 1),
(122, '角色列表', 1, 'Role', 'showlist', '1-122', 1),
(123, '添加管理员', 1, 'Manager', 'tianjia', '1-123', 1),
(142, '解决方案列表', 141, 'Solution', 'show_list', '141-142', 1),
(141, '解决方案管理', 0, 'Solution', '', '141', 0),
(127, '产品管理', 0, 'Product', '', '127', 0),
(129, '产品列表', 127, 'Product', 'showlist', '127-129', 1),
(130, '添加产品', 127, 'Product', 'tianjia', '127-130', 1),
(140, '添加新闻', 138, 'News', 'tianjia', '138-140', 1),
(138, '新闻管理', 0, 'News', '', '138', 0),
(139, '新闻列表', 138, 'News', 'show_list', '138-139', 1),
(137, '修改产品', 127, 'Product', 'upd_product', '127-137', 1);

-- --------------------------------------------------------

--
-- 表的结构 `sp_develop`
--

CREATE TABLE `sp_develop` (
  `id` int(6) UNSIGNED NOT NULL COMMENT '主键ID',
  `period` varchar(32) DEFAULT NULL COMMENT '时间段',
  `detail` text COMMENT '发展详情',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `upd_time` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻表';

-- --------------------------------------------------------

--
-- 表的结构 `sp_manager`
--

CREATE TABLE `sp_manager` (
  `mg_id` int(10) UNSIGNED NOT NULL,
  `mg_name` varchar(32) NOT NULL COMMENT '管理员姓名',
  `mg_pwd` varchar(32) NOT NULL COMMENT '密码',
  `mg_time` int(11) NOT NULL COMMENT '添加日期',
  `role_id` tinyint(3) NOT NULL COMMENT '角色ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理员表';

--
-- 转存表中的数据 `sp_manager`
--

INSERT INTO `sp_manager` (`mg_id`, `mg_name`, `mg_pwd`, `mg_time`, `role_id`) VALUES
(95, 'admin', '123456', 1587215212, 96),
(94, 'shijiang', '123456', 1587215099, 94);

-- --------------------------------------------------------

--
-- 表的结构 `sp_news`
--

CREATE TABLE `sp_news` (
  `id` int(6) UNSIGNED NOT NULL COMMENT '主键ID',
  `title` varchar(32) DEFAULT NULL COMMENT '新闻标题',
  `excerpt` text COMMENT '新闻摘要',
  `content` text COMMENT '新闻内容',
  `view` int(11) DEFAULT NULL COMMENT '查看次数',
  `author` varchar(16) NOT NULL DEFAULT 'jlwak' COMMENT '新闻作者',
  `news_b_tx` varchar(128) DEFAULT NULL COMMENT '新闻大图',
  `news_s_tx` varchar(128) DEFAULT NULL COMMENT '新闻小图',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `upd_time` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻表';

--
-- 转存表中的数据 `sp_news`
--

INSERT INTO `sp_news` (`id`, `title`, `excerpt`, `content`, `view`, `author`, `news_b_tx`, `news_s_tx`, `add_time`, `upd_time`) VALUES
(1, 'sd', 'sdds', '        dsdsds', NULL, 'sdds', 'logo.png', NULL, 1592063377, 1592063377);

-- --------------------------------------------------------

--
-- 表的结构 `sp_product`
--

CREATE TABLE `sp_product` (
  `id` int(6) UNSIGNED NOT NULL COMMENT '主键ID',
  `product_name` varchar(32) DEFAULT NULL COMMENT '产品名字',
  `product_profile` text COMMENT '产品简介',
  `product_b_tx` varchar(128) DEFAULT NULL COMMENT '产品大图',
  `product_s_tx` varchar(128) DEFAULT NULL COMMENT '产品小图',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `upd_time` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品表';

--
-- 转存表中的数据 `sp_product`
--

INSERT INTO `sp_product` (`id`, `product_name`, `product_profile`, `product_b_tx`, `product_s_tx`, `add_time`, `upd_time`) VALUES
(5, 'aa', 'ss', './jlwakImg/2020-06-13/5ee4f7d9c5714.png', './jlwakImg/2020-06-13/s_5ee4f7d9c5714.png', 1592063961, 1592063961),
(4, 'ddd', 'dddd', './jlwakImg/2020-06-13/5ee4f02bb705a.png', './jlwakImg/2020-06-13/s_5ee4f02bb705a.png', 1592061995, 1592061995);

-- --------------------------------------------------------

--
-- 表的结构 `sp_role`
--

CREATE TABLE `sp_role` (
  `role_id` int(10) UNSIGNED NOT NULL COMMENT '角色ID',
  `role_name` varchar(32) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(32) DEFAULT NULL COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '控制器-操作'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色表';

--
-- 转存表中的数据 `sp_role`
--

INSERT INTO `sp_role` (`role_id`, `role_name`, `role_auth_ids`, `role_auth_ac`) VALUES
(94, '总经理', '1,2,121,122,123', 'Auth-showlist,Manager-showlist,Role-showlist,Manager-tianjia'),
(95, '经理', '1,2,121,122,123', 'Auth-showlist,Manager-showlist,Role-showlist,Manager-tianjia'),
(96, '管理员', '1,2,121,122,123', 'Auth-showlist,Manager-showlist,Role-showlist,Manager-tianjia');

-- --------------------------------------------------------

--
-- 表的结构 `sp_solution`
--

CREATE TABLE `sp_solution` (
  `id` int(6) UNSIGNED NOT NULL COMMENT '主键ID',
  `sol_name` varchar(32) DEFAULT NULL COMMENT '解决方案名字',
  `sol_profile` text COMMENT '解决方案简介',
  `sol_b_tx` varchar(128) DEFAULT NULL COMMENT '解决方案大图',
  `sol_s_tx` varchar(128) DEFAULT NULL COMMENT '解决方案小图',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `upd_time` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='解决方案表';

--
-- 转存表中的数据 `sp_solution`
--

INSERT INTO `sp_solution` (`id`, `sol_name`, `sol_profile`, `sol_b_tx`, `sol_s_tx`, `add_time`, `upd_time`) VALUES
(1, 's', '是', './jlwakImg/2020-06-14/5ee4fdf57ab0c.png', './jlwakImg/2020-06-14/s_5ee4fdf57ab0c.png', 1592065525, 1592065525);

--
-- 转储表的索引
--

--
-- 表的索引 `sp_auth`
--
ALTER TABLE `sp_auth`
  ADD PRIMARY KEY (`auth_id`);

--
-- 表的索引 `sp_develop`
--
ALTER TABLE `sp_develop`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `sp_manager`
--
ALTER TABLE `sp_manager`
  ADD PRIMARY KEY (`mg_id`);

--
-- 表的索引 `sp_news`
--
ALTER TABLE `sp_news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `sp_product`
--
ALTER TABLE `sp_product`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `sp_role`
--
ALTER TABLE `sp_role`
  ADD PRIMARY KEY (`role_id`);

--
-- 表的索引 `sp_solution`
--
ALTER TABLE `sp_solution`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `sp_auth`
--
ALTER TABLE `sp_auth`
  MODIFY `auth_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '权限ID', AUTO_INCREMENT=143;

--
-- 使用表AUTO_INCREMENT `sp_develop`
--
ALTER TABLE `sp_develop`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID';

--
-- 使用表AUTO_INCREMENT `sp_manager`
--
ALTER TABLE `sp_manager`
  MODIFY `mg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- 使用表AUTO_INCREMENT `sp_news`
--
ALTER TABLE `sp_news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `sp_product`
--
ALTER TABLE `sp_product`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID', AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `sp_role`
--
ALTER TABLE `sp_role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '角色ID', AUTO_INCREMENT=97;

--
-- 使用表AUTO_INCREMENT `sp_solution`
--
ALTER TABLE `sp_solution`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `sp_costomer` (
  `id` int(6) UNSIGNED NOT NULL COMMENT '主键ID',
  `name` varchar(32) DEFAULT NULL COMMENT '产品名字',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `upd_time` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品表';