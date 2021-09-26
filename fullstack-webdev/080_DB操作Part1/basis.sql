CREATE database test_db;

CREATE table test_db.test_table(
	id int(6) unsigned default 0 comment 'ID',
	val varchar(20) default 'hello' comment'値'
);


use test_db;
desc test_table;
show full columns from test_table;
show CREATE table test_table ;
SELECT DATABASE();

DROP table test_db.test_table;
