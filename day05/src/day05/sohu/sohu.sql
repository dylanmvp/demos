#创建库
CREATE DATABASE sohu CHARSET=UTF8;
#进入库
USE sohu;
#创建表
CREATE TABLE user(
 uid   INT PRIMARY KEY AUTO_INCREMENT,
 uname VARCHAR(20) UNIQUE,
 upwd  VARCHAR(32)
);
#添加三条记录
INSERT INTO user VALUES(null,'tom','123');
INSERT INTO user VALUES(null,'jerry','123');
INSERT INTO user VALUES(null,'james','123');
