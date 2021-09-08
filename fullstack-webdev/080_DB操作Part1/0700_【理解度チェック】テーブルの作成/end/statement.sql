/**
 * ER図を元にテーブルを作成してみよう。
 * ※外部キーは次のレクチャーで作成します。
 */
use test_db;

create table products (
  id int(10) unsigned auto_increment primary key,
  name varchar(20) not null
);

create table prefs (
  id int(2) unsigned auto_increment primary key,
  name varchar(10) not null
);

create table shops (
  id int(10) unsigned auto_increment primary key,
  name varchar(50) not null,
  pref_id int(2) unsigned not null
);

create table stocks (
  product_id int unsigned,
  shop_id int unsigned,
  amount int unsigned not null,
  primary key (product_id, shop_id)
);

-- テーブル削除
drop table stocks;
drop table products;
drop table shops;
drop table prefs;

-- テーブルの確認
show create table stocks;