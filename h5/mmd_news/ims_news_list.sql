/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50621
 Source Host           : localhost
 Source Database       : mmm

 Target Server Type    : MySQL
 Target Server Version : 50621
 File Encoding         : utf-8

 Date: 09/27/2017 01:05:21 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `ims_news_list`
-- ----------------------------
DROP TABLE IF EXISTS `ims_news_list`;
CREATE TABLE `ims_news_list` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `iphone` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `wechat` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `introduce` varchar(200) NOT NULL,
  `codeIcon` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `ims_news_list`
-- ----------------------------
BEGIN;
INSERT INTO `ims_news_list` VALUES ('1', 'jcson', 'http://baidu.netd', '', '', '', '', '', '', ''), ('3', 'jcson', '', '哈哈哈', 'images/4/2017/09/y4m0yB0323GIBZpy40B048mYn80n3b.jpg', '17078075655', 'lb2281075105', '济南市绝地反击', '快捷酒店', 'images/4/2017/09/M4eQPk1ePYeE54eOMmFXfyqdoqd4O6.jpg');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
