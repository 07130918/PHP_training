/*
ソート順の決定

order by 属性 [acs|desc]
asc : 昇順（デフォルト）, 小さい順
desc : 降順, でかい順
*/

-- 単一キーによるソート
select * from test_db.txn_stocks order by amount desc;

-- 条件付き, 複数キーでソート
select * from test_db.txn_stocks
where amount > 50
order by product_id, shop_id desc;
