-- 取得レコード数の限定
select * from test_db.txn_stocks
order by product_id desc limit 2;

-- オフセット付き（0がデフォルト値）(開始位置の決定)
オフセットを省略した場合順番が逆になる点に注意(11,12行目は同じ結果になる)
select * from test_db.txn_stocks limit 4 offset 1;
select * from test_db.txn_stocks limit 1, 4;
