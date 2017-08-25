CREATE DATABASE weiduomei CHARSET=UTF8;
USE weiduomei;
CREATE TABLE caketype(
 tid  INT PRIMARY KEY AUTO_INCREMENT,
 tname VARCHAR(20)
);
INSERT INTO caketype VALUES(null,'巧克力');
INSERT INTO caketype VALUES(null,'水果');
INSERT INTO caketype VALUES(null,'芝士');

CREATE TABLE cake(
 cid  INT PRIMARY KEY AUTO_INCREMENT,
 cname VARCHAR(20),
 price DOUBLE(10,2),
 pic   VARCHAR(20),
 tid   INT
);
INSERT INTO cake VALUES(null,'巧1',101,'01.jpg',1);
INSERT INTO cake VALUES(null,'巧2',102,'02.jpg',1);
INSERT INTO cake VALUES(null,'巧3',103,'03.jpg',1);
INSERT INTO cake VALUES(null,'巧4',104,'04.jpg',1);
INSERT INTO cake VALUES(null,'水1',105,'05.jpg',2);
INSERT INTO cake VALUES(null,'水2',106,'06.jpg',2);
INSERT INTO cake VALUES(null,'芝1',100,'07.jpg',3);




