/*
条件句の設定
*/
-- = : 一致
select * from test_db.txn_stocks
where product_id = 1;

-- <>, != : 非一致
select * from test_db.txn_stocks
where product_id != 1;

-- >, >=, <, <= : 数値の比較
select * from test_db.txn_stocks
where amount >= 60;

-- A and B : A かつ B
select * from test_db.txn_stocks
where product_id = 1 and shop_id = 1;

-- A or B : A または B
select * from test_db.txn_stocks
where product_id = 1 or shop_id = 1;

-- () : 条件をくくる
select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1)
or (product_id = 2 and shop_id = 2);

-- like : %で部分一致検索
-- _とした場合には一文字に一致
select * from test_db.mst_shops
where name like '店%';

-- in : いずれかの値に一致
select * from test_db.mst_shops
where name in ('店舗A', '店舗B');

-- not in : いずれの値にも一致しない
select * from test_db.mst_shops
where name not in ('店舗A', '店舗B');

-- between A and B: A から B の値 
select * from test_db.txn_stocks
where amount between 60 and 100;

-- is not null : null以外に一致
select * from test_db.txn_stocks
where amount is not null;

-- is null : nullに一致
select * from test_db.txn_stocks
where amount is null;

-- null カラムを許容するようにテーブル定義変更
alter table test_db.txn_stocks
modify column amount int(10) unsigned -- not null;

-- null の値を持つレコードの挿入
insert into test_db.txn_stocks(product_id, shop_id, updated_by)
values (3,1, 'codemafia');
desc test_db.txn_stocks;

-- null の値を持つレコードの削除
delete from test_db.txn_stocks
where product_id = 3 and shop_id = 1;
