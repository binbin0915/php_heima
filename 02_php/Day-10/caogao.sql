create table char_varchar(
	id int auto_increment primary key,
	postcode char(6),
	user_name varchar(6)
);
insert into char_varchar(
	id,postcode,user_name)values(null,'100100','laoshi');
insert into char_varchar(
	postcode,user_name)values('123456','我俏丽吗');

insert into char_varchar(
	postcode,user_name)values('789','wo');
//虽然可以执行成功，但是字数不够的情况下依旧占了同样大的位置。
//user_name字段占了3个字符，是真的，没有像postcode一样占6个。

insert into char_varchar(
	postcode,user_name)values('123456789','我是我自己啊啊啊啊啊');
nsert into char_varchar(
	postcode,user_name)values('123456789',   '我是我自己啊啊啊啊啊');
//上面这两行都是报错的语句，第一条是因为字符串的长度超出了规定的长度。
//后面这一行是因为字符串中间不能有空隙，不然系统也同样会报错。



create table article(
	id int auto_increment primary key,
	user_name varchar(20),
	user_pass char(32),
	edu enum('小学','中学','大学'),
	interest set('足球','篮球','乒乓球','排球','溜溜球')
	);
insert into article(
	user_name,user_pass,edu,interest)values('张三','123456','2','足球');



//这里没什么重要的地方，但是标点符号和字母的大小写和书写一定要规范。

select * from product where price > 5000 and pinpai = '联想';
select * from product where 


//查询各个品牌的产品平均价格。
select pinpai, avg(price) from product group by pinpai;

//查询各个产品的数量，平均价，最高价，最低价。
select chandi, count(*) as 数量, avg(price) as 平均价, max(price) as 最高价, min(price) as 最低价 from `product` group by chandi;

//查询产品表中的产品总数；
select count(*) 产品总数量 from product;

//查询出产品表中联想品牌的产品总数。
select 








