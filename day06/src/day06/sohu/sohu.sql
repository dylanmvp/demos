USE sohu;
CREATE TABLE news(
 nid     INT PRIMARY KEY AUTO_INCREMENT,
 title   VARCHAR(200),
 content VARCHAR(2000),
 pubtime DATETIME,
 viewcount BIGINT
);
INSERT INTO news VALUES(null,'h1','h1',now(),0);
INSERT INTO news VALUES(null,'h2','h1',now(),0);
INSERT INTO news VALUES(null,'h3','h1',now(),0);
INSERT INTO news VALUES(null,'h4','h1',now(),0);
INSERT INTO news VALUES(null,'h5','h1',now(),0);
INSERT INTO news VALUES(null,'h6','h1',now(),0);
INSERT INTO news VALUES(null,'h7','h1',now(),0);
INSERT INTO news VALUES(null,'h8','h1',now(),0);
INSERT INTO news VALUES(null,'h9','h1',now(),0);
INSERT INTO news VALUES(null,'h10','h1',now(),0);

