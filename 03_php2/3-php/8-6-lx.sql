create table article(
	id int auto_increment primary key,
	title varchar(20),
	author char(5),
	content text,
	pub_time datetime,
	edit_time timestamp
);

insert into article(title,author,content,pub_time)
	values('什么书','什么作者','我也知道为什么是这个名字，
		你就将就着看吧','2018-8-6 21：00：00');

insert into article(id,title,author,content,pub_time)
	values(null,'这是什么','你才','你随便想着就是内容',now());