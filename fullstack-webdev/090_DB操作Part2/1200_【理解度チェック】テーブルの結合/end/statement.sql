/*
理解度チェック（テーブルの結合）

問１：
在庫テーブルと店舗テーブルをつなげて以下の表を
出力しましょう。
※ 店舗名を昇順で表示してください。

店舗名|商品ID|在庫数|
---|----|---|
店舗A|   2| 30|
店舗A|   1| 20|
店舗B|   3|100|
店舗B|   1| 80|
店舗B|   2|  0|
店舗C|   3| 60|
*/
select 
	ms.name "店舗名", ts.product_id "商品ID", ts.amount "在庫数"
from test_db.txn_stocks ts 
inner join test_db.mst_shops ms 
on ts.shop_id = ms.id
order by ms.name;

/*
問２：
問１のクエリに商品テーブルをさらに結合して以下の表を作成してください。
※複数のINNER JOINを使用する場合には以下のように記述します。
inner join テーブル1 on 結合条件
inner join テーブル2 on 結合条件

店舗名|商品名 |在庫数|
---|----|---|
店舗A|椅子  | 30|
店舗A|テーブル| 20|
店舗B|ベッド |100|
店舗B|椅子  |  0|
店舗B|テーブル| 80|
店舗C|ベッド | 60|
*/
select 
	ms.name "店舗名", mp.name "商品名", ts.amount "在庫数"
from test_db.txn_stocks ts 
inner join test_db.mst_shops ms 
on ts.shop_id = ms.id
inner join test_db.mst_products mp  
on ts.product_id = mp.id
order by ms.name;


/*
問３：
問２のクエリに都道府県テーブルをさらに結合して以下の表を作成してください。

店舗名|都道府県名|商品名 |在庫数|
---|-----|----|---|
店舗A|北海道  |椅子  | 30|
店舗A|北海道  |テーブル| 20|
店舗B|青森   |ベッド |100|
店舗B|青森   |椅子  |  0|
店舗B|青森   |テーブル| 80|
店舗C|岩手   |ベッド | 60|
*/
select 
	ms.name "店舗名", mpr.name "都道府県名", mp.name "商品名", ts.amount "在庫数"
from test_db.txn_stocks ts 
inner join test_db.mst_shops ms 
on ts.shop_id = ms.id
inner join test_db.mst_products mp  
on ts.product_id = mp.id
inner join test_db.mst_prefs mpr  
on mpr.id = ms.pref_id 
order by ms.name;

