create database job_db_student charset utf8;   //创建数据库；
show databases;   //查看新建的数据库；
create table job_tb_student(
	id int auto_increment primary key,
	student_name char(15),
	sex enum('男','女') default '男' not null,
	age char(4),
	subject char(10),
	graduation_time datetime
);
alter table job_tb_student add tel char(11) after subject;
alter table job_tb_student add burn_place char(20) after graduation_time;

create database easy_dbresume charset utf8;  //创建数据库;
create table easy_tbresume(
	id int auto_increment primary key,
	student_name sanllint(15) unique key,
	sex enum('男','女','保密'),
	age samllint(4) default '21' not null,
	edu enum('初中','高中','大专','本科','研究生'),
	interest set('足球','篮球','排球','乒乓球'),
	self_description text,
	graduated_school char(12),
	graduation_time datetime,
	brithplace char(20)	
);