#创建库
CREATE DATABASE crm CHARSET=UTF8;
USE crm;
#uid,uname,upwd,headpi,regtime 注册时间, logincount 
CREATE TABLE user(
 uid INT PRIMARY KEY AUTO_INCREMENT,
 uname VARCHAR(20) UNIQUE,
 upwd       VARCHAR(32),
 headpi     VARCHAR(50),
 regtime    DATETIME,
 logincount INT
);


