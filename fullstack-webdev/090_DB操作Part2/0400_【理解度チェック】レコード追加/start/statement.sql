/*
以下のレコードを追加するinsert文を作成してみましょう。
※updated_atはレコード挿入日時です。

- mst_prefs
id|name|delete_flg|updated_at         |updated_by|
--|----|----------|-------------------|----------|
 1|北海道 |         0|2021-03-14 18:47:53|codemafia |
 2|青森  |         0|2021-03-14 18:47:53|codemafia |
 3|岩手  |         0|2021-03-14 18:47:53|codemafia |

- mst_shops
id|name|pref_id|delete_flg|updated_at         |updated_by|
--|----|-------|----------|-------------------|----------|
 1|店舗A |      1|         0|2021-03-14 18:47:53|codemafia |
 2|店舗B |      2|         0|2021-03-14 18:47:53|codemafia |
 3|店舗C |      3|         0|2021-03-14 18:47:53|codemafia |

- mst_products
id|name|delete_flg|updated_at         |updated_by|
--|----|----------|-------------------|----------|
 1|テーブル|         0|2021-03-14 18:47:53|codemafia |
 2|椅子  |         0|2021-03-14 18:47:53|codemafia |
 3|ベッド |         0|2021-03-14 18:47:53|codemafia |

- txn_stocks
product_id|shop_id|amount|delete_flg|updated_at         |updated_by|
----------|-------|------|----------|-------------------|----------|
         1|      1|    10|         0|2021-03-14 19:00:51|codemafia |
         1|      2|    80|         0|2021-03-14 19:00:51|codemafia |
         2|      1|    30|         0|2021-03-14 19:00:51|codemafia |
         2|      2|     0|         0|2021-03-14 19:00:51|codemafia |
         3|      2|   100|         0|2021-03-14 19:00:51|codemafia |
         3|      3|    60|         0|2021-03-14 19:00:51|codemafia |
         
*/
delete from test_db.mst_prefs;
delete from test_db.mst_shops;
delete from test_db.mst_products;
delete from test_db.txn_stocks;
-- auto_incrementの初期化
alter table test_db.mst_prefs auto_increment = 1;
-- auto_incrementの初期化
alter table test_db.mst_shops auto_increment = 1;


/* 都道府県テーブル */

/* 店舗テーブル */

/* 商品テーブル */

/* 在庫テーブル */
