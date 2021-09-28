SELECT * from test_db.txn_stocks order by amount desc;

-- mst_prefs
-- '北海道', '青森'のidを取得してみよう。
select id from test_db.mst_prefs WHERE (name = '北海道') or (name = '青森');
select id from test_db.mst_prefs WHERE name in ('北海道', '青森');

-- txn_stocks
-- amount が 60 ~ 80 のレコードのshop_idを取得してみよう。
select shop_id from test_db.txn_stocks WHERE (amount <= 80) and (amount >= 60);
select shop_id from test_db.txn_stocks WHERE amount BETWEEN 60 and 80;

-- txn_stocks
-- amount が 50 以下のレコード数を取得してみよう。
SELECT count(*) from test_db.txn_stocks WHERE amount <= 50;

-- mst_products
-- 商品名が '椅子' 以外のname属性の値を商品名というラベルで取得してみよう。
SELECT name as '商品名' from test_db.mst_products where name != '椅子';

-- txn_stocks
-- shop_idが2かつproduct_idが1のレコードの更新日時と更新者を取得してみよう。
SELECT updated_at, updated_by from test_db.txn_stocks where shop_id = 1 and product_id = 1;

-- txn_stocks
-- shop_idが2かつamountが70より大きい
-- または、shop_idが3かつamountが70より大きいレコードを取得してみよう。
SELECT * from test_db.txn_stocks WHERE (shop_id = 2 or shop_id = 3) and amount > 70;

-- mst_shops
-- 店舗名に A が含まれる店舗のpref_idを都道府県IDというラベル取得してみよう。
SELECT pref_id as '都道府県ID' from test_db.mst_shops WHERE name like '%A%';

-- txn_stocks
-- shop_id が 2 のレコードを在庫数（amount）が多い順に取得してみよう。
SELECT * from test_db.txn_stocks WHERE shop_id = 2 order by amount desc;

-- txn_stocks
-- 在庫数が上から２番目に多いレコードを取得してみよう。
SELECT * from test_db.txn_stocks order by amount desc limit 1 offset 1;
