-- = : 一致
select * from test_db.txn_stocks where product_id = 1;

-- <>, != : 非一致
select * from test_db.txn_stocks where product_id != 1;

-- >, >=, <, <= : 数値の比較
select * from test_db.txn_stocks where amount >= 60;

-- A and B : A かつ B
select * from test_db.txn_stocks where product_id = 1 and shop_id = 1;
-- A or B : A または B
select * from test_db.txn_stocks where product_id = 1 or shop_id != 1;

-- () : 条件をくくる
select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1) or (product_id = 2 and shop_id = 2);

-- like : %で部分一致検索
-- _とした場合には一文字に一致
select * from test_db.mst_shops where name like '店%A';

-- in : いずれかの値に一致, not in : いずれの値にも一致しない
select * from test_db.mst_shops where name in ('店舗A', '店舗B');
select * from test_db.mst_shops where name not in ('店舗A', '店舗B');

-- between A and B: A から B の値
select * from test_db.txn_stocks where amount between 60 and 100;

-- is not null : null以外に一致, is null : nullに一致
select * from test_db.txn_stocks where amount is not null;
select * from test_db.txn_stocks where amount is null;
