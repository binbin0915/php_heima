/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 22:59:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL COMMENT '省份或者城市名称',
  `pid` int(10) unsigned DEFAULT NULL COMMENT '省份的上一级的编号',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '河北省', '0', '0');
INSERT INTO `city` VALUES ('2', '山西省', '0', '0');
INSERT INTO `city` VALUES ('3', '河南省', '0', '0');
INSERT INTO `city` VALUES ('4', '四川省', '0', '0');
INSERT INTO `city` VALUES ('5', '石家庄', '1', '1');
INSERT INTO `city` VALUES ('6', '保定', '1', '0');
INSERT INTO `city` VALUES ('7', '太原市', '2', '1');
INSERT INTO `city` VALUES ('8', '大同市', '2', '0');
INSERT INTO `city` VALUES ('9', '郑州市', '3', '1');
INSERT INTO `city` VALUES ('10', '三门峡市', '3', '0');
INSERT INTO `city` VALUES ('11', '成都市', '4', '1');
INSERT INTO `city` VALUES ('12', '宜宾', '3', '0');
