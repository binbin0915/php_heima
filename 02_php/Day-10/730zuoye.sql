create table share_bycle (
	id int auto_increment primary key,
	品牌 char(10) not null,
	成立时间 date
	押金 varchar(1000),
	是否有行李柜 char(10) not null,
	是否机械锁 char(10) not null,
	最小的, count(*) as 总数量, avg(price) as 平均价格;
	车体颜色 char(5) not null,
);
insert into share_bycle
	values(null,'ofo','黄色','押金99','机械锁','无','2015-6-1'),
	(null,'酷骑单车','绿色','押金298','电子锁','有','2016-11-1'),
	(null,'小蓝单车','蓝色','押金99','电子锁','有','2016-11-23'),
	(null,'永安行','黄蓝相间色','押金0','电子锁','无','2016-11-24');

	


select * from goods where goods_name in('海尔%','格力%','美的%')  and cat_id = 12 and price between 2500.00 and 3500.00;

select * from jx_goods where cat_id =14 and price between 6100 and 7699 order by price desc limit 8,4;

select * from jx_goods where cat_id =14 and price between 6100 and 7699 order by price desc limit 8,4;

select * from product order by price desc limit 0,3;

select * from product order by price desc;

select count(*) as 总预约数量,avg(reserve_num) as 平均预约数量，max(reserve_num) as 最多预约数量 from product;

select distinct chandi from product;

select max(price) as 最贵的, max(pro_id) as 最大的, min(price) as 最便宜的, 
	min(pro_id) as 最小的 min(reserve_num) as 最低预约数量 from jx_reserve;