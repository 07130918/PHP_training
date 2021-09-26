/*
AUTO_INCREMENT
*/
drop table test_db.test_table;

-- OK
create table test_db.test_table (
	key1 int auto_increment primary key
);

-- NG インデックスが設定されている必要あり
create table test_db.test_table (
	key1 int auto_increment
);

-- NG テーブルにつき一つのみ付与可能
create table test_db.test_table (
	key1 int auto_increment primary key,
	key2 int auto_increment unique
);

-- NG defaultは使用できない
create table test_db.test_table (
	key1 int auto_increment default 0 primary key
);

desc test_db.test_table;
