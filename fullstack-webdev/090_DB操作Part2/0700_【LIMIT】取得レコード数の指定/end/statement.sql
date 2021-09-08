/**
 * 取得レコード数の指定
 */

-- 取得レコード数の限定
select * from test_db.txn_stocks
order by product_id desc,
shop_id asc
limit 2;

-- オフセット付き（0がデフォルト値）
-- オフセット, レコード数
select * from test_db.txn_stocks limit 1 offset 2;
select * from test_db.txn_stocks limit 2, 1;
