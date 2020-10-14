//联合查询示例：
select * from join1
union
select * from join2;
-- 再来一个：
select id, f2 from join1
union
select id2,c2 from join2;

-- 演示“不消除重复行”的情形：
 select f1 from join1
union all
select c1 from join2;

-- 演示order 和limit的使用：
select id, f2 from join1
union
select id2,c2 from join2
order by id desc
limit 0,4;

-- 内连接查询：
SELECT * FROM `product` inner join product_type on product.protype_id = product_type.protype_id;
-- 也可以改写为：
SELECT * FROM product as p inner join product_type as t on p.protype_id = t.protype_id;

课堂练习：
找出所有价格大于5000的家用电器的商品的完整信息（含所属类别）;
SELECT * FROM product as p inner join product_type as t on p.protype_id = t.protype_id
where price > 5000 and protype_name = '家用电器';

上述需求稍作修改如下：
找出所有价格大于5000的家用电器的商品的名称，价格和品牌;
SELECT pro_name, price, pinpai 
	FROM product as p inner join product_type as t on p.protype_id = t.protype_id
	where price > 5000 and protype_name = '家用电器';

-- 演示左连接：
找出所有类别及各类别中的商品（需列出类别名称，商品名称，价格，品牌和产地）
select protype_name, pro_name, price, pinpai, chandi 
	from product_type as t left join product as p on p.protype_id = t.protype_id

-- 演示右连接：
找出所有用户及其订单信息（需列出用户id，用户名，订单号，订单总价，订单地址）
select user_info.user_id, user_name, order_id, order_total, order_addr
	from order_info  right join user_info on user_info.user_id = order_info.user_id;
上述语句，也可以写为如下形式，结果一样：
select user_info.user_id, user_name, order_id, order_total, order_addr
	from user_info  left join order_info on user_info.user_id = order_info.user_id;

-- 自连接演示：
select  a.area_name, b.area_name  from area as a  join  area as b  on a.parent_id = b.id;

需求稍作调整：
找出所有省份及其下属城市。
select province.area_name, city.area_name  
	from area as province join area as city on province.id = city.parent_id;
-- （如果还要包括不含下属城市的省级）；
select province.area_name, city.area_name  
	from area as province left join area as city on province.id = city.parent_id
	where province.parent_id = 0;



-- 子查询：
找出产品表中价格大于北京产地的产品平均价的所有产品。
select * from product where price > (
		#查询出北京产地所有产品的平均价
	select avg(price) from product where chandi='北京'
	);

课堂练习：
找出所有奢侈品！
	奢侈品的定义为：其价格超过贵重品的平均价！
		贵重品的定义为：超过所有商品的平均价！
select * from product where price > (
	#找出贵重品的平均价
	select avg(price) from product where price > (
		#去找出所有商品的平均价
		select avg(price) from product
	)
);


列子查询：
查出出产贵重商品（假设价格超过5000即为贵重商品）的那些产地的所有商品。
select * from product where chandi in(
	#找出出产贵重品的那些产地
	select chandi from product where price > 5000
);


-- 行子查询
找出跟单价最高的商品同品牌同产地的所有商品。
另一个分析思路：
1，先找出单价最高的商品的品牌和产地
	select pinpai, chandi from product where price = (
			select max(price) from product
		)
2, 然后，在上述“已知”的产地和品牌的情况，找同产地和品牌的“所有商品”
select * from product where row(pinpai, chandi) = (
	select pinpai, chandi from product where price = (
		select max(price) from product
	)
);


-- 表子查询：
查出商品价格大于4000的所有商品的数量和均价
#1先找出价格大于4000的所有商品：
select * from product where price > 4000;
#2将上述查询结果（是多行多列的）当做一个表（表子查询），
#去对这些数据求出总数量和均价
select count(*) as 总数, avg(price) as 平均价 from (
	select * from product where price > 4000
) as t;
当然，本需求，不用子查询，也可以实现，如下：
select count(*) as 总数, avg(price) as 平均价 from product where price>4000;

-- any的使用：
举例：找出在北京生产的但价格比在深圳生产的任一商品贵的商品。
select * from product where chandi = '北京' and price > any(
	#找出在深圳生产的所有产品的价格
	select price from product where chandi = '深圳'
);

-- all 的使用：
示例：找出在北京生产的但价格比在深圳生产的所有商品都贵的商品。
select * from product where chandi = '北京' and price > all(
	#找出在深圳生产的所有产品的价格
	select price from product where chandi = '深圳'
);

-- exists子查询 示例：
1，查询商品分类名称中带“电”字的所有商品；
select * from product where exists(
	select * from product_type where protype_name like '%电%' and product_type.protype_id = product.protype_id
);
2，查询联想品牌的产品都有哪些分类；
select * from product_type where exists(
	select * from product where pinpai = '联想' and product.protype_id = product_type.protype_id
);
特别注意：
通常，有意义exists子查询不能单独执行
对比：之前的4种子查询都可以单独执行


-- 用户管理：
创建用户：
create user 'user_for_all' identified by '123';