/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : bycle

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-26 22:58:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `aid` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `uid` tinyint(4) NOT NULL COMMENT '用户id',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `hits` smallint(6) NOT NULL DEFAULT '0' COMMENT '单击率',
  `addate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', '奥巴马和普京见面冷漠握手', '12000', '2016-11-21 22:22:03');
INSERT INTO `article` VALUES ('2', '1', '张亚勤:教育为百度战略中重要垂直领域 未来重点建设教育云', '100', '2016-11-21 22:21:49');
INSERT INTO `article` VALUES ('3', '2', '陈伟霆迪丽热巴热恋？双方否认：都是朋友', '152', '2016-11-21 22:12:38');
INSERT INTO `article` VALUES ('4', '2', '三星宣布在中国大陆召回全部Note7', '15421', '2016-10-18 07:14:23');
INSERT INTO `article` VALUES ('5', '2', 'iPhone自动关机或因劣质电源适配器', '45', '2016-11-21 22:20:06');
INSERT INTO `article` VALUES ('6', '3', '飞机里为什么不能使用手机', '212', '2016-11-21 22:13:21');
INSERT INTO `article` VALUES ('7', '3', '习近平主席在金砖国家领导人会晤上的重要讲话', '554', '2016-10-18 07:19:00');
INSERT INTO `article` VALUES ('8', '4', '“小马云”走红：家中访客轮番上场 受邀参演电影', '45', '2016-11-21 22:16:49');
INSERT INTO `article` VALUES ('9', '5', '扬我国威！华为夺日本Android平板第一', '4554', '2016-11-21 22:17:33');
INSERT INTO `article` VALUES ('10', '5', '5G新势力崛起！华为已经拿到船票', '455', '2016-11-21 22:18:56');
