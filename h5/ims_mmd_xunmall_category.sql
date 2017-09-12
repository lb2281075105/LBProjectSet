/*
Navicat MySQL Data Transfer

Source Server         : 127
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : m3

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-12 10:56:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ims_mmd_xunmall_category`
-- ----------------------------
DROP TABLE IF EXISTS `ims_mmd_xunmall_category`;
CREATE TABLE `ims_mmd_xunmall_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `name` varchar(30) NOT NULL COMMENT '类名',
  `parentid` int(10) unsigned NOT NULL,
  `orderno` int(10) unsigned NOT NULL COMMENT '排序',
  `uniacid` int(11) NOT NULL,
  `is_show` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ims_mmd_xunmall_category
-- ----------------------------
INSERT INTO `ims_mmd_xunmall_category` VALUES ('34', '研发类', '0', '2', '2', '0');
INSERT INTO `ims_mmd_xunmall_category` VALUES ('35', 'ph2p开发工程师', '34', '0', '2', '0');
INSERT INTO `ims_mmd_xunmall_category` VALUES ('36', '艺术类', '0', '5', '2', '0');
INSERT INTO `ims_mmd_xunmall_category` VALUES ('37', '123', '36', '1', '2', '0');
