#创建库 tarena 编码 utf8
CREATE DATABASE tarena CHARSET=UTF8;
USE tarena;
#创建表 msg    留言表  
#编号/姓名/内容/邮件/发表留言时间
CREATE TABLE msg(
  id INT PRIMARY KEY AUTO_INCREMENT,
  uname  VARCHAR(20),
  content VARCHAR(200),
  email  VARCHAR(20),
  ctime  DATETIME
);


