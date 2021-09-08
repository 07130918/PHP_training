/*
【理解度チェック】SELECT

以下の条件でレコードを取得するSQLを記述してみてください。
*/
-- mst_prefs
-- '北海道', '青森'のidを取得してみよう。
select id from test_db.mst_prefs
where name in ('北海道', '青森');

-- txn_stocks
-- amount が 60 ~ 80 のレコードのshop_idを取得してみよう。
select shop_id from test_db.txn_stocks
where amount between 60 and 80;

-- txn_stocks
-- amount が 50 以下のレコード数を取得してみよう。
select count(1) from test_db.txn_stocks
where amount <= 50;

-- mst_products
-- 商品名が '椅子' 以外のname属性の値を商品名というラベルで取得してみよう。
select name "商品名" from test_db.mst_products
where name <> '椅子';

-- txn_stocks
-- shop_idが2かつproduct_idが1のレコードの更新日時と更新者を取得してみよう。
select updated_at, updated_by from test_db.txn_stocks
where shop_id = 2 and product_id = 1;

-- txn_stocks
-- shop_idが2かつamountが70より大きい
-- または、shop_idが3かつamountが70より大きいレコードを取得してみよう。
select * from test_db.txn_stocks
where (shop_id = 2 or shop_id = 3)
and amount > 70;

-- mst_shops
-- 店舗名に A が含まれる店舗のpref_idを都道府県IDというラベル取得してみよう。
select pref_id "都道府県ID" from test_db.mst_shops
where name like '%A%';

-- txn_stocks
-- shop_id が 2 のレコードを在庫数（amount）が多い順に取得してみよう。
select * from test_db.txn_stocks
where shop_id = 2
order by amount desc;

-- txn_stocks
-- 在庫数が上から２番目に多いレコードを取得してみよう。
select * from test_db.txn_stocks
order by amount desc
limit 1 offset 1;
