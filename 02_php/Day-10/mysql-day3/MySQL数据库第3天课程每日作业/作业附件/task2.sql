/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 22:53:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(24) NOT NULL,
  `brand` varchar(12) NOT NULL,
  `cat_id` smallint(5) unsigned DEFAULT NULL,
  `price` float(7,2) NOT NULL DEFAULT '100.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `goods_name` (`goods_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '海尔k1', '海尔', '12', '2699.00');
INSERT INTO `goods` VALUES ('2', '格力n2', '格力', '12', '4500.00');
INSERT INTO `goods` VALUES ('3', '美的a1', '美的', '12', '3499.00');
INSERT INTO `goods` VALUES ('4', '格兰仕m2', '格兰仕', '12', '3599.00');
INSERT INTO `goods` VALUES ('5', '海尔x1', '海尔', '14', '999.00');
