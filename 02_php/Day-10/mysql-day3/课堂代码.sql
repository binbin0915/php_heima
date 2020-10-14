
distinct关键字的使用：
它能消除“重复行”
select distinct user_name, user_pass from user3;

where 子句练习题：
1，查出价格大于5000的联想品牌的商品
select * from product where price > 5000 and pinpai = '联想';
2，查出天津产地的所有商品
select * from product where chandi = '天津';
3，查出类型id（protype_id）为3的并且价格大于等于3000小于等于10000的商品
select * from product where protype_id = 3 and price >=3000 and price <= 10000;

-- like查询：
-- 找出产品名称中包含“电视”的产品
select * from product where pro_name like '%电视%';

-- between范围限定运算符：
-- 找出product表中商品价格在5000-10000之间的商品
select * from product where price between 5000 and 10000;
-- 其实，它相当于：
select * from product where price>=5000 and price<=10000;

-- in运算符：
-- 找出产地为天津或北京的所有商品
select * from product where chandi in('天津','北京');
-- 其也相当于：
select * from product where chandi ='天津' or chandi='北京';

-- is运算符：
-- 只用于两个情况： is null ,  is  not  null
select * from shuxing_test1 where f4 is null;
-- 注意：
-- 	不能写成： f4 = null
select * from shuxing_test1 where f4 is not null;

-- 分组的基本理解：
SELECT pinpai, count(*) as 数量, avg(price) as 平均价, max(price) as 最高价, 
	min(price), sum(price) as 价格之和 FROM `product` group by pinpai

示例1：
查询出各个品牌的产品的平均价。
select pinpai, avg(price)  from product  group by pinpai; 

示例2：
查询出各个产地的产品数量、平均价，最高价，最低价。
SELECT chandi, count(*) as 数量, avg(price) as 平均价, max(price) as 最高价, 
	min(price)  FROM `product` group by chandi

示例3：
查询出产品表中的产品总数。
select count(*) as 产品总数量 from product;

示例4：
查询出产品表中联想品牌的产品总数。
select count(*) as 总数 from product where pinpai = '联想';

多条件分组：
将product表中的所有商品以品牌和产地进行分组，并求出每一组的数量
select pinpai, chandi, count(*) as 数量 from product group by pinpai, chandi;

-- having的应用：
-- 查询出品牌平均价超过5000的所有品牌的平均价，最高价，以及产品的数量。
select pinpai,avg(price) as 平均价, max(price) as 最高价, 
	count(*) as 数量 from product group by pinpai having avg(price) > 5000;

--查询出价格超过3000的所有产品的品牌平均价超过5000所有品牌的平均价，最高价，以及产品的数量
select pinpai, avg(price) as 平均价 from product where price > 3000 group by pinpai having 平均价>5000;

演示order by的使用：
示例1： 对所有产品按价格从高到低进行排序；
select * from product order by price desc;

--对所有品牌的平均价按从高到低的顺序进行排序，并列出品牌名和平均价。
select pinpai, avg(price) as 平均价 from product group by pinpai order by 平均价 desc ;

limit 演示：
示例1：取出商品表中价格最高的3个商品，并按倒序排列出来。

limit 应用：翻页原理：
limit子句常常用于网页的“翻页功能”。
假设总的数据行数为9，每页显示2行（条），则：
查看第1页：  select  *  from  product  limit  0,  2;
查看第2页：  select  *  from  product  limit  2,  2;
查看第3页：  select  *  from  product  limit  4,  2;
.....
查看第n页：  select  *  from  product  limit  (n-1)*2,  2;

--insert into ... select 语句：
insert into user3 (user_name, user_pass) select name, '456' as pass from user2;

insert 语句的set语法形式：
insert into user3 set user_name='user6', user_pass='123', edu=2, aihao=3 ;


