/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : bick

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-04-26 17:00:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bk_admin
-- ----------------------------
DROP TABLE IF EXISTS `bk_admin`;
CREATE TABLE `bk_admin` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `username` varchar(30) DEFAULT NULL COMMENT '管理员名称',
  `password` char(32) DEFAULT NULL COMMENT '密码',
  `role` mediumint(9) NOT NULL DEFAULT '0' COMMENT '是否管理员：1->是, 0->不是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_article
-- ----------------------------
DROP TABLE IF EXISTS `bk_article`;
CREATE TABLE `bk_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(60) DEFAULT NULL COMMENT '文章标题',
  `keywords` varchar(100) DEFAULT NULL COMMENT '文章关键词',
  `desc` varchar(255) DEFAULT NULL COMMENT '文章描述',
  `author` varchar(30) DEFAULT NULL COMMENT '文章作者',
  `pic` varchar(255) DEFAULT NULL COMMENT '文章缩略图',
  `content` text COMMENT '文章内容',
  `click` mediumint(9) DEFAULT '0' COMMENT '文章点击数',
  `zan` mediumint(9) DEFAULT '0' COMMENT '文章点赞数',
  `ptime` int(10) DEFAULT NULL COMMENT '文章发布时间',
  `cateid` mediumint(9) DEFAULT NULL COMMENT '所属分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `bk_auth_group`;
CREATE TABLE `bk_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：启用',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `bk_auth_group_access`;
CREATE TABLE `bk_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `bk_auth_rule`;
CREATE TABLE `bk_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` mediumint(9) NOT NULL DEFAULT '0',
  `level` tinyint(1) DEFAULT '0',
  `sort` int(5) DEFAULT '50',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_cate
-- ----------------------------
DROP TABLE IF EXISTS `bk_cate`;
CREATE TABLE `bk_cate` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `catename` varchar(30) DEFAULT NULL COMMENT '栏目名称',
  `type` tinyint(1) DEFAULT '1' COMMENT '栏目类型；1:文章列表；2：单页栏目;3:图片列表',
  `keywords` varchar(255) DEFAULT NULL COMMENT '栏目关键词',
  `desc` varchar(255) DEFAULT NULL COMMENT '栏目描述',
  `content` text COMMENT '栏目内容',
  `pid` mediumint(9) DEFAULT '0' COMMENT '上级栏目id',
  `sort` mediumint(9) DEFAULT '50' COMMENT '排序，数值越大越靠前',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_conf
-- ----------------------------
DROP TABLE IF EXISTS `bk_conf`;
CREATE TABLE `bk_conf` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '配置项ID',
  `cnname` varchar(50) DEFAULT NULL COMMENT '配置中文名',
  `enname` varchar(50) DEFAULT NULL COMMENT '配置英文名',
  `type` tinyint(1) DEFAULT '1' COMMENT '配置类型;1:文本框；2：多行文本；3：单选按钮;4：复选按钮;5：下拉菜单',
  `value` varchar(255) DEFAULT NULL COMMENT '配置值',
  `values` varchar(255) DEFAULT NULL COMMENT '配置可选值',
  `sort` smallint(6) DEFAULT '50' COMMENT '配置项排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bk_link
-- ----------------------------
DROP TABLE IF EXISTS `bk_link`;
CREATE TABLE `bk_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL COMMENT '友情链接标题',
  `desc` varchar(100) DEFAULT NULL COMMENT '友情链接描述',
  `url` varchar(100) DEFAULT NULL COMMENT '友情链接地址',
  `sort` mediumint(9) DEFAULT '50' COMMENT '友情链接排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
