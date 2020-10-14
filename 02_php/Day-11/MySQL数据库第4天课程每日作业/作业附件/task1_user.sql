/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 22:57:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` char(32) NOT NULL,
  `name` char(5) NOT NULL,
  `lastloginip` char(15) DEFAULT NULL,
  `lastlogintime` int(10) DEFAULT NULL,
  `addate` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '总李秘书', 'e10adc3949ba59abbe56e057f20f883e', '李青', '127.0.0.1', '1462235643', '1462235318');
INSERT INTO `user` VALUES ('2', '白大掌柜', '098f6bcd4621d373cade4e832627b4f6', '白瑜', '121.115.230.123', '1462235643', '1462235318');
INSERT INTO `user` VALUES ('3', '你丑啥', '098f6bcd4621d373cade4e832627b4f6', '郝帅', '121.115.230.124', '1462235643', '1462235318');
INSERT INTO `user` VALUES ('4', '政经', '098f6bcd4621d373cade4e832627b4f6', '郑经纶', '121.115.230.125', '1462235643', '1462235318');
