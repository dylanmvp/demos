#1:创建库bbs
#2:创建表user(uid,uname,upwd,regtime 注册时间)
CREATE DATABASE bbs CHARSET=UTF8;
USE bbs;
CREATE TABLE user(
 uid   INT PRIMARY KEY AUTO_INCREMENT,
 uname VARCHAR(20),
 upwd  VARCHAR(32),
 regtime DATETIME
);