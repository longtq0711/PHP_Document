CREATE DATABASE IF NOT EXISTS db_shop;
CREATE TABLE tbl_cate(
id_cate INT(11) AUTO_INCREMENT,
name_cate VARCHAR(100),
date_cate DATETIME,
status_cate TINYINT(4),
PRIMARY KEY(id_cate)
);
CREATE TABLE tbl_product(
id INT(11) AUTO_INCREMENT,
id_cate INT(11),
name VARCHAR(100),
price FLOAT,
description TEXT,
date_create DATETIME,
status TINYINT(4),
PRIMARY KEY(id),
FOREIGN KEY(id_cate) REFERENCES tbl_cate(id_cate)
);
INSERT INTO tbl_cate VALUES
(1, ''Đồng hồ Tissot'', ''2019-08-02 20:42:35'', 1),
(2, ''Đồng hồ Citizen'', ''2019-09-02 10:32:23'', 1),
(3, ''Đồng hồ Calvin Klein'', ''2019-07-02 20:42:35'', 1),
(4, ''Đồng hồ Hamilton'', ''2019-06-02 20:42:35'', 1),
(5, ''Đồng hồ Rolex'', ''2019-05-02 20:42:35'', 1);

INSERT INTO tbl_product VALUES(
1,1,''Đồng hồ Tissot'',1000000,''Đồng hồ'',''2020-08-02 20:42:35'',1),
(
2,2,''Đồng hồ Citizen'',2000000,''Đồng hồ'',''2020-07-02 20:42:35'',1),
(
3,3,''Đồng hồ Calvin Klein'',3000000,''Đồng hồ'',''2020-06-02 20:42:35'',1),
(
4,4,''Đồng hồ Hamilton'',4000000,''Đồng hồ'',''2020-05-02 20:42:35'',1),
(
5,5,''Đồng hồ Rolex'',5000000,''Đồng hồ'',''2020-04-02 20:42:35'',1)