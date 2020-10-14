/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 22:55:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jx_goods`
-- ----------------------------
DROP TABLE IF EXISTS `jx_goods`;
CREATE TABLE `jx_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(24) NOT NULL,
  `brand` varchar(12) NOT NULL,
  `cat_id` smallint(5) unsigned DEFAULT NULL,
  `price` float(7,2) NOT NULL DEFAULT '100.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `goods_name` (`goods_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jx_goods
-- ----------------------------
INSERT INTO `jx_goods` VALUES ('1', 'dell 灵越7537', 'dell', '14', '7500.00');
INSERT INTO `jx_goods` VALUES ('2', 'apple macbook air', 'apple', '14', '6600.00');
INSERT INTO `jx_goods` VALUES ('3', '联想小新', 'lenovo', '14', '6299.00');
INSERT INTO `jx_goods` VALUES ('4', 'dell 燃7000', 'dell', '14', '6299.00');
INSERT INTO `jx_goods` VALUES ('5', '神舟战神z7', '神舟', '14', '7799.00');
INSERT INTO `jx_goods` VALUES ('6', '联想鼠标', 'lenove', '15', '145.00');
