/*
这是多行注释 
*/
-- 这是单行注释


总结有关数据库的常规操作：
创建数据库：
create  database  数据库名  charset  编码名（推荐utf8）；
显示所有数据库：
show  databases  ；
显示某个数据库的创建语句：
show  create  database  数据库名；
删除数据库：
drop  database  数据库名；
修改某个数据库（的字符集和排序规则）
alter  database  数据库名   charset  新字符集名称   collate  新校对规则名；
使用（进入/选择）数据库：
use  数据库名；

有关数据表的操作。

建表语法形式：
-- create  table  数据表名  （字段1， 字段2， ... ）[charset=字符集]  [type=表类型];
-- 其中 字段的形式为： 字段名  字段类型  [字段属性...]
create table table1 (id  int, name varchar(10),  sex  char(1), age  int );

-- 再建立一个表：
create  table  info (
	id  int,
	title  varchar(50),
	email varchar(20),
	content  text
	) 
	charset utf8
	engine MyIsam ;

查看表结构：
	desc  table1;

查看一个表的创建语句：
	 show create table info;


修改表：
	添加一个字段：
	alter  table  表名  add  字段名  字段类型  [字段属性...]  [after 某字段名 或first]；
	alter table  `table1` add  salary float;
	再添加一个字段：
	alter table  table1 add edu varchar(5) after age;

	修改salary 字段:
	alter  table table1  change salary gongzi int default 0;
	修改edu  字段（只该其特性，不改名字)
	alter  table  table1  modify edu varchar(10) after gongzi;

	修改表名：
	alter table  table1  rename user;

-- 数据操作：
	-- 数据插入：
	--insert into info (字段名列表....) values (对应值的列表);
	insert into info (id, title, email, content)
		values(1, '今天我们可以不上自习吗？', 'tianxiang@qq.com', '不可以！');
	insert into info (id, title, email, content)
		values(1, '明天我们要上 自习吗？', '1234567@qq.com', '必须！');
	insert into info (id, title, email)
		values(3, '标题3 自习吗？', '33333@qq.com');
	insert into info 
		values(4, '标题4 自习吗？', '4444@qq.com', '回复内容4');
	-- 数据查询：
	select * from info;
	select id, title, email, content from info;
	select id, title, email from info;
	select email, title, id from info;	

	数据删除：
	形式为： delete  from 表名  [where 条件]
	数据修改：
	形式为：update  表名  set  字段名1 = 新值1， 字段名2=新值2， ...  [where条件]；

介绍建表语句中的2个特别属性：
create table user2 (
		id  int auto_increment  primary key, 
		name varchar(10),  
		sex  char(1), 
		age  int ) charset utf8;
-- auto_increment用于整数类型，能让该字段按顺序“自动增长”
-- primary key用于表示（限定）该字段的值不能重复，并且作为“主要关键字”

insert into user2  values( null, '张三', '男', 18 )
insert into user2  values( null, '李四', '女', 20 )

insert into user2 (name, sex, age) values( '李5', '男', 21 )
insert into user2 (id,name, sex, age) values( 1, '李6', '男', 21 );