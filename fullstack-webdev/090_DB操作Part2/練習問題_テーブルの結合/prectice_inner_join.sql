/*
問１：
在庫テーブルと店舗テーブルをつなげて以下の表を
出力しましょう。
※ 店舗名を昇順で表示してください。
店舗名|商品ID|在庫数|
---|----|---|
店舗A|   2| 30|
...
*/

SELECT ms.name "店舗名", ts.product_id "商品ID", ts.amount "在庫数"
from test_db.txn_stocks ts
inner join test_db.mst_shops ms
on ms.id = ts.shop_id
order by ms.name;

/*
問２：
問１のクエリに商品テーブルをさらに結合して以下の表を作成してください。
店舗名|商品名 |在庫数|
---|----|---|
店舗A|椅子  | 30|
...
*/

SELECT ms.name "店舗名", mp.name "商品名", ts.amount "在庫数"
from test_db.txn_stocks ts
inner join test_db.mst_shops ms
on ms.id = ts.shop_id
inner join test_db.mst_products mp
on mp.id = ts.product_id
order by ms.name;

/*
問３：
問２のクエリに都道府県テーブルをさらに結合して以下の表を作成してください。

店舗名|都道府県名|商品名 |在庫数|
---|-----|----|---|
店舗A|北海道  |椅子  | 30|
...
*/

SELECT ms.name "店舗名", mp2.name "都道府県名", mp.name "商品名", ts.amount "在庫数"
from test_db.txn_stocks ts
inner join test_db.mst_shops ms
on ms.id = ts.shop_id
inner join test_db.mst_products mp
on mp.id = ts.product_id
inner join test_db.mst_prefs mp2
on ms.pref_id = mp2.id
order by ms.name;
