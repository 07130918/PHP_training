/*
レコードの取得
*/
select 取得したい属性 [as label] from テーブル名 [as alias]

-- *: すべての属性を取得
select count(*) from test_db.mst_prefs;

-- count(*): レコード件数を取得
select count(*) from test_db.mst_prefs;
select count(1) from test_db.mst_prefs;

-- as: 列ラベルの変更（asは省略可能）
select id as "ID", name as "都道府県名" from test_db.mst_prefs;

-- 重複行確認用
insert into test_db.mst_prefs(name, updated_by) values ('北海道', 'codemafia');

-- distinct: 重複レコードを省く
select distinct name "都道府県名" from test_db.mst_prefs;

-- 重複行を省いた件数
select count(distinct name) from test_db.mst_prefs as mp 

