/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 23:00:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_goods`
-- ----------------------------
DROP TABLE IF EXISTS `tb_goods`;
CREATE TABLE `tb_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL COMMENT '产品分类编号',
  `name` varchar(20) NOT NULL COMMENT '产品名称',
  `market_price` float NOT NULL COMMENT '市场价格',
  `base_price` float NOT NULL COMMENT '产品进价',
  `ads` varchar(200) DEFAULT NULL COMMENT '产品宣传语',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='产品信息表';

-- ----------------------------
-- Records of tb_goods
-- ----------------------------
INSERT INTO `tb_goods` VALUES ('1', '1', '小米note', '2999', '2799', '一面科技，一面艺术');
INSERT INTO `tb_goods` VALUES ('2', '1', '小米mix', '3699', '3499', '不只是一块屏幕,而是通往未来世界的门');
INSERT INTO `tb_goods` VALUES ('3', '2', '华为nova', '2599', '2399', '我的手机，我漂亮');
INSERT INTO `tb_goods` VALUES ('4', '2', '华为P9', '3888', '3688', '瞬间, 定格视界的角度');
INSERT INTO `tb_goods` VALUES ('5', '3', '三星note7', '6488', '6288', '炸天');
INSERT INTO `tb_goods` VALUES ('6', '3', '三星s7 edge', '5888', '5688', '不一样的色彩');
INSERT INTO `tb_goods` VALUES ('7', '4', 'iphone7', '5388', '5188', '7，在此。');
INSERT INTO `tb_goods` VALUES ('8', '4', 'iphone7 plus', '6388', '6088', '不只是大');
