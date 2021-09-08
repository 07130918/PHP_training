/*
ソート順の決定

order by 属性 [acs|desc]
asc : 昇順（デフォルト）
desc : 降順
*/

-- 単一キーによるソート
select * from test_db.txn_stocks
order by amount desc;

-- 条件付き
select * from test_db.txn_stocks
where amount > 50
order by product_id desc, shop_id asc;

-- 複数キーによるソート
select * from test_db.txn_stocks
order by product_id desc, shop_id asc;

