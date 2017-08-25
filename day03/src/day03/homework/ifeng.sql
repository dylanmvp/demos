#创建数据库ifeng
#创建表news(nid,title,content,pubtime)
#gbk utf8...
CREATE DATABASE ifeng CHARSET=UTF8;
USE ifeng;
CREATE TABLE news(
 nid INT PRIMARY KEY AUTO_INCREMENT,
 title    VARCHAR(50),
 content  VARCHAR(800),
 pubtime  DATETIME
);

INSERT INTO news VALUES(null,'hi','hi',now());