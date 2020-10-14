<?php 




CREATE TABLE IF NOT EXISTS `user`(
	`id` int not null auto_increment primary key,
	`username` varchar(20),
	`password` char(32),
	`name` varchar(20),
	`tel` vaichar(15),
	`last_login_ip` char(15),
	`last_login_time` int(10),
	`login_times` int not null default 0,
	`status` smallint not null default 1,
	`role` tinyint not null default 0,
	`addate` int(10)
)ENGINE=MYISAM;

CREATE TABLE IF NOT EXISTS `links`(
		`id` smallint not null auto_increment primary key,
		`domain` varcahr(20),
		`url` varchar(100),
		`orderby` tinyint not null default 0
	)ENGINE=MYISAM;
















