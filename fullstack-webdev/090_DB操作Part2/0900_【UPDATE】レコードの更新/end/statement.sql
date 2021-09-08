/*
レコードの更新
*/
update テーブル名 set 属性1 = 値1, ... where 条件

-- 在庫数を変更してみよう。

-- 更新前の確認
select * from test_db.txn_stocks
where shop_id = 1 and product_id = 1;

-- 在庫数を特定の値に変更(50)
update test_db.txn_stocks set amount = 50
where shop_id = 1 and product_id = 1;

-- 在庫数から 10 引く
update test_db.txn_stocks set amount = amount - 10
where shop_id = 1 and product_id = 1;

-- 外部キーの CASCADE の確認
-- 変更前確認
select * from test_db.txn_stocks;

-- 更新
update test_db.mst_shops set id = 10
where id = 1;

-- 戻しクエリ
update test_db.mst_shops set id = 1
where id = 10;

