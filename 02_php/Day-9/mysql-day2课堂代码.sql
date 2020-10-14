创建一个表，具有int和tinyint类型（默认带符号），并使用数据测试：
create  table  zhengxing1(num1  int, num2  tinyint);
insert into zhengxing1(num1, num2) values(10, 10);//正确的数据
select * from zhengxing;
insert into zhengxing1(num1, num2) values(1000,1000);//错误的数据
		//错误的原因是：后一个1000超出了数据类型tinyint的范围

另一个演示：unsigned :
create  table  zhengxing2(num1  int unsigned, num2  tinyint unsigned);
insert into zhengxing2(num1, num2) values(10, 10);//正确的数据
insert into zhengxing2(num1, num2) values(-10, -10);//错误的数据
		//错误的原因：两个字段都设定了unsigned，只能是非负数


演示：
定义三个字段分别为float、double和decimal类型，
并都插入数字“123456789.123456789123456789”，显示结果。
create table xiaoshu1(x1 float, x2 double, x3 decimal(23, 14) );
insert into xiaoshu1(x1, x2, x3)values(123456789.123456789123456789, 123456789.123456789123456789,123456789.123456789123456789);
select * from xiaoshu1;


演示：
创建一个表，设定5个字段分别为上述类型，并插入相应的数据值后查看结果。
create table shijian1(
	t_time time,
	t_date date,
	t_datetime datetime,
	t_timestamp timestamp,
	t_year year
);
insert into shijian1(t_time, t_date, t_datetime, t_year)values
			('10:57:50','2018-7-29', '2008-8-8 20:0:0', '2008');
select * from shijian1;


insert into shijian1(t_time, t_date, t_datetime, t_year)values
			('10:57:50','2018-7-29', now() , '2008');


定义一个表，演示char和varchar的使用和区别：
create table char_varchar(
	id int auto_increment primary key,
	postcode char(6),
	user_name varchar(6)
);
insert into char_varchar( id, postcode, user_name) values
						(null, '100110', 'lisi1');

insert into char_varchar( postcode, user_name) values
						('120130', 'lisi2');
insert into char_varchar( postcode, user_name) values
						('120150', '罗马里奥');

下面给出非常规（非法）的数据情形：
insert into char_varchar( postcode, user_name) values
						('120130150', 'lisi3333');
insert into char_varchar( postcode, user_name) values
						('120140', 'lisi3333');
	以上两行都报错！

演示不足个数的情况：
insert into char_varchar( id, postcode, user_name) values
						(null, '110', 'ls4');
	//上一行也可以执行成功！但：
		//postcode字段的值仍然占6个字符
		//而user_name字段只真3个字符

思考题：
一个表中有一个字段为c1，其类型为char(10)，另有一个字段为c2，类型为varchar，问：
c2最多可以设置多长？最多可以存储多少个汉字？
1，一个表也有一个“最大字节长度的限制”，也是65532
2，则此时，c2最多可以设置65532-10 = 65522（长度设定）
3，如果c2中存储的全是英文字符，就可以存储65522个
4，如果存储中文：
	gbk：最多65522/2 = 32761个
	utf8：最多65522/3 = 21840个

//演示有关text类型和其他相关类型
create table article(	-- 文章表
	id int auto_increment primary key,
	title varchar(100), -- 标题
	author varchar(20),	-- 作者
	content text,
	pub_time datetime, -- 发布时间
	edit_time timestamp -- 更新时间
);
insert into article (title, author, content, pub_time) values
	('文章标题1','张三','文章内容1','2018-8-8 12:15:30');

insert into article (title, author, content, pub_time) values
	('文章标题2','张4','文章内容2', now() );


enum和set类型：
create table user3(
	id int auto_increment primary key,
	user_name varchar(20),
	user_pass char(32),
	edu enum('小学', '中学','大学'),	-- 单选项数据
	aihao set('篮球','排球','足球','中国足球') -- 多选选数据
);
insert into user3 (user_name, user_pass, edu, aihao)
			values('user1','123','小学','篮球');
insert into user3 (user_name, user_pass, edu, aihao)
			values('user2','123','中学','篮球,排球');

select * from user3;

使用索引号来插入数据：
insert into user3 (user_name, user_pass, edu, aihao)
			values('user3','123', 3 , 4 );

insert into user3 (user_name, user_pass, edu, aihao)
			values('user4','123', 3 , 5 );
			//5 代表1+4,也就是篮球和足球
insert into user3 (user_name, user_pass, edu, aihao)
			values('user5','123', 2 , 7 );
			//7 代表1+2+4,也就是篮球和足球

update user3 set aihao = 5 where id = 5;

//演示出错的代码（16是没有的，也从现有选项中无法构建）
insert into user3 (user_name, user_pass, edu, aihao)
			values('user4','123', 3 , 16 );


演示null/not null, default, primary key 三个字段属性：
create table shuxing_test1 (
	id int primary key,
	userName varchar(10) not null,
	sex enum('男','女')  default '男' not null,
	f4 float null	-- 其实null可以不写，因为每个字段默认就是null
);
数据测试如下：
insert into shuxing_test1(id, userName) values(1,'user1');
insert into shuxing_test1(id, userName, sex, f4) values(2,'user2','女',10000);
//下面演示错误的数据
1，跟primary 冲突：
insert into shuxing_test1(id, userName, sex, f4) values(1,'user3','男',20000);
2，跟 not null 冲突：
insert into shuxing_test1(id, userName,sex, f4)values(3, null, '男',15000);
insert into shuxing_test1(id,sex, f4)values(3, '男',15000);

//综合演示所有字段属性：
创建一个表，并用上以上所有字段属性。字段可包括：id,  kecheng,  keshi,  intro.
create table shuxing_test2(
	id int auto_increment primary key comment '编号值',
	kecheng varchar(20) not null unique key comment '课程名称，不能重复',
	keshi tinyint unsigned default 1 comment '课时',
	intro varchar(1000) comment '课程介绍，应该限制在1000个字符以内为妥'
);
insert into shuxing_test2  values(null, 'PHP', 6, 'web领域最流行的后端语言');

有关primary key 的进一步探讨：
1，主键的另一种设定方式：
create table tab1 (
	id int auto_increment, 
	name varchar(10),
	primary key(id)		-- 这就是主键的另一种设定方式！
	);

2，多字段主键的含义及设定：
数据样例（成绩表）：
学员id	科目	成绩
1		mysql	88
2		PHP		90
1		js		77
2 		mysql   85
这种情况，就需要设置“多字段主键”，具体做法如下：
create table  chengji (
	学员ID int,
	科目 varchar(20),
	成绩 tinyint unsigned,
	primary key(学员ID,科目)
);