delete from test_db.mst_products;
delete from test_db.mst_shops;
delete from test_db.txn_stocks;
delete from test_db.mst_prefs;

-- auto_incrementの初期化
alter table mst_prefs auto_increment = 1;
alter table mst_shops auto_increment = 1;
alter table mst_products auto_increment = 1;

insert into test_db.mst_prefs(name, updated_by) values
('北海道', 'kota'),
('青森', 'kota'),
('岩手', 'kota');

select * from test_db.mst_prefs;

insert into test_db.mst_shops(name, pref_id, updated_by) values
('店舗A', 1, 'kota'),
('店舗B', 2, 'kota'),
('店舗C', 3, 'kota');

select * from test_db.mst_shops;

insert into test_db.mst_products(name, updated_by) values
('テーブル', 'kota'),
('椅子', 'kota'),
('ベッド', 'kota');

select * from test_db.mst_products;

insert into test_db.txn_stocks(product_id, shop_id, amount, updated_by) values
(1, 1, 10, 'kota'),
(1, 2, 80, 'kota'),
(2, 1, 30, 'kota'),
(2, 2, 0, 'kota'),
(3, 2, 100, 'kota'),
(3, 3, 60, 'kota');

select * from test_db.txn_stocks;
