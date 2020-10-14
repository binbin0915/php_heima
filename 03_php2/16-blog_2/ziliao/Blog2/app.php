<?php




//创建友情链接数据表links
CREATE TABLE IF NOT EXISTS `links`(
`id` smallint not null auto_increment primary key, #编号
`domain` varchar(20), #网站名称
`url` varchar(100), #网站地址
`orderby` tinyint not null default 0 #排序字段
)ENGINE=MyISAM;