<?php



//创建文章数据表article
CREATE TABLE IF NOT EXISTS `article`(
`id` int not null auto_increment primary key, #编号
`category_id` smallint, #文章分类ID
`user_id` smallint, #用户id
`title` varchar(30), #文章标题
`content` text, #文章内容
`orderby` tinyint not null default 0, #排序字段
`comment_count` int not null default 0, #评论数
`top` tinyint not null default 0, #是否置顶，1置顶，0不置顶
`read` int not null default 0, #阅读数
`praise` int not null default 0, #点赞数
`addate` int(10) #发布时间
)ENGINE=MyISAM;
