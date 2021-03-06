/*
主キーの作成
1つのテーブルにつき1つの主キーのみ作成可能。
1意の値であること。NOT NULLであること。
*/

-- 単一主キー
create table test_db.test_table (
	key1 int(6) PRIMARY KEY
);

-- 複合主キー(2つの値を使い１つのレコードが特定できること)
create table test_db.test_table (
	key1 int(6),
	key2 int(6),
    PRIMARY key pk1(key1, key2) --表制約
);
