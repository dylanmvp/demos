
(1) CREATE 指令
作用:创建一个库或者创建一张表
#1.1: 创建一个指令库
标准语法:
CREATE DATABASE 库名;
示例
CREATE DATABASE web1704;
#标准稳定指令
CREATE DATABASE web1704a CHARSET=UTF8;  
#练习:创建指定库,要示指定编码为utf8
#     web1704b web1704c; 
#常见错误
1:库名、表名、列名{英文或英数}不要中文或者空格或者特殊字$#
2:mysql坑 
  html/css/js/php/nodes/   UTF-8  
  mysql                    utf8
3:1064 错误(语句写错了)
4:mysql中sql语句不区分大小写
  CREATE DATABASE web1704b CHARSET=UTF8;
  CREATE DATABASE web1704c CHARSET=UTF8;

#与创建库相关指令
#SHOW DATABASES;  #查询当前mysql中所有库名
#USE  库名称;     #进入指定库中


#1.2: 创建一个数据表
标准语法:
CREATE TABLE 表名(
  列名称1  列类型,
  列名称2  列类型,
  ...
  列名称n  列类型
);
注意事项
(1):每一张表属于某个库一定先进入某个库
(2):列名称 (英文数字)不要中文空格
(3):列类型
  int           整型范围(-21亿~21亿)
  varchar(n)    字符串n个字符(数字，字母，中文)
  datetime      日期 年月日时分秒
  double(m,n)   浮点小数m总长度n其中包括n位小数

示例:
学生表(stu)
学生编号(id) 学生姓名(name) 学生年龄(age)
1001         东东           26
1002         旭旭           18

雇员表(emp)
雇员编号(eid)雇员姓名(ename)出生日期(bdate)工资(sal)
1001          东东          1990-10-10    10000.00
1002          旭旭          2000-10-10    10000.50
USE web1704c;
CREATE TABLE stu(
 id   INT,
 name VARCHAR(20),
 age  INT
);
CREATE TABLE emp(
 eid   INT,
 ename VARCHAR(20),
 bdate DATETIME,
 sal   DOUBLE(10,2)
);

#与创建表相关指令
 SHOW TABLES;     #查询当前库中所有表名
 DESC 表名;       #查询表结构

1:进入web1704b库中
2:创建二张表
  a:学生表(编号，姓名，年龄)
  b:班级表(编号，班级名称，班级人数)
USE web1704b;
CREATE TABLE stu(
  id INT,
  name VARCHAR(20),
  age  INT
);
CREATE TABLE t_clazz(
  id INT,
  name VARCHAR(20),
  num  INT
);






2:DROP 删除库或者删除表
#注意:非常谨慎一旦删除很难恢复
标准语法
 (1):删除库 DROP DATABASE 库名;
 (2):删除表 DROP TABLE    表名;
示例:
 DROP DATABASE web1704;
 USE  web1704b;
 DROP TABLE stu;




3:向表中添加记录(一行数据)
  标准语法:
  INSERT INTO 表名 VALUES(值1,值2,...);
  示例:
  web1704c库/stu/(id/name/age)
  USE web1704c;
  
  INSERT INTO stu VALUES(1001,'tom',21);
  INSERT INTO stu VALUES(1002,'JERRY',18);
  INSERT INTO stu VALUES(1003,'tom');
  INSERT INTO stu VALUES(1005,'tom',18);
  
  #查询刚添加记录是否成功
   SELECT * FROM stu;  #查询stu表中所有记录

  练习:向web1704c库中emp雇员表添加5条记录
   eid   | int(11)
   ename | varchar(20)
   bdate | datetime
   sal   | double(10,2)

INSERT INTO emp VALUES(10,'tom2','2000-01-10',19000.00);
INSERT INTO emp VALUES(11,'tom3','2000-02-10',29000.00);
INSERT INTO emp VALUES(12,'tom4','2000-03-10',39000.00);
INSERT INTO emp VALUES(13,'tom5','2000-04-10',49000.00);
INSERT INTO emp VALUES(14,'tom6','2000-05-10',59000.00);

  注意事项
  (1)字符串列和日期类型列值要加单引号
  (2)SQL指令不区分大小写，习惯关键字大写，
     库名、表名、列名小写
  (3)所有语句必须以分号结尾

4:更新表中记录
  标准语法
  UPDATE 表名 SET 列1=值1,列2=值2.. WHERE 条件;

  示例1：所有雇员工资涨10%
  UPDATE emp SET sal=sal*1.1;
  示例2：工资涨10%条件 雇工工资小于40000 5%
  UPDATE emp SET sal=sal*1.05 WHERE sal<40000;
  练习1:所有雇员工资降 5%
  UPDATE emp SET sal=sal*0.95;
  练习2:所有雇员工资涨 2%条件 10000-25000
  UPDATE emp SET sal=sal*1.02
  WHERE sal>=10000 and sal<=25000;
  练习3:添加一条记录雇员表(emp) 
  INSERT INTO emp VALUES(100,"tom100",'2000-01-01',19000);
  id:100 name:tom100 bdate:2000-01-01 sal:19000
  练习4:更新工资涨5%同时出生日期 2001-01-01
  条件编号=100
  UPDATE emp SET sal=sal*1.05,bdate='2001-01-01'
  WHERE eid = 100;
5:删除表中记录
  ###删除记录很难恢复
  标准语法:
  DELETE FROM 表名 WHERE 条件;
  示例:
  DELETE FROM emp WHERE eid = 100;


总结SQL指令  
CREATE
 CREATE DATABASE 库名 CHARSET=UTF8;
 USE 库名;
 CREATE TABLE 表名(列名 类型,列名 类型,...)
DROP
 DROP DATABASE 库名;
 DROP TABLE 表名;
INSERT
 INSERT INTO 表名  VALUES();
UPDATE
 UPDATE 表名  SET 列名=新值,列名=新值  WHERE...
DELETE
 DELETE FROM 表名 WHERE ...


6:查询表中记录
标准语法:
SELECT 列名1,列名2,...
FROM 表名
WHERE 条件
ORDER BY 列名 #排序

1:查询所有记录
SELECT ename,salary FROM emp;
SELECT eid,ename,sex,salary,bdate,did FROM emp;
SELECT * FROM emp;
2:查询员工姓名，薪水，薪水涨20%结果
SELECT ename,salary,salary*1.2 FROM emp;
3:查询所有员工信息，条件薪水大于20000
SELECT * FROM emp WHERE salary>15000;
4:更新雇员工资
  UPDATE emp SET salary = salary*1.3
  WHERE eid=1 OR eid=3 OR eid=5;
  UPDATE emp SET salary = salary*1.3
  WHERE eid in(1,3,5);
5:查询所有雇员信息,条件部门10 工资大于20000
  SELECT * FROM emp
  WHERE did=10 AND salary>20000;
6:查询所有雇员信息，按薪水排序;
  SELECT * FROM emp  ORDER BY salary;
  SELECT * FROM emp  ORDER BY salary DESC;
7:函数   now();      获取当前日期时间
         max(列名);  获取当前列中最大值
	 min(列名);  获取当前列中最小值
         avg(列名);  获取当前列平均值
	 sum(列名);  获取当前列合计
	 count(列名);获取当前列中数据个数
