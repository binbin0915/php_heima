/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 22:54:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jx_reserve`
-- ----------------------------
DROP TABLE IF EXISTS `jx_reserve`;
CREATE TABLE `jx_reserve` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '预约编号',
  `uid` int(10) unsigned NOT NULL COMMENT '用户编号',
  `reserve_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '预约数量',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jx_reserve
-- ----------------------------
INSERT INTO `jx_reserve` VALUES ('1', '1000', '2', '2017-06-12 12:00:00');
INSERT INTO `jx_reserve` VALUES ('2', '1001', '4', '2017-06-12 12:00:00');
INSERT INTO `jx_reserve` VALUES ('3', '1002', '1', '2017-06-12 12:00:00');
INSERT INTO `jx_reserve` VALUES ('4', '1009', '2', '2017-06-12 12:00:00');
INSERT INTO `jx_reserve` VALUES ('5', '1011', '12', '2017-06-12 12:00:00');
INSERT INTO `jx_reserve` VALUES ('6', '1014', '3', '2017-06-12 12:00:00');
