/*
実践的なテーブル構成
■ トランザクションテーブルとマスタテーブルの識別

- トランザクションテーブル
アプリからデータを頻繁に挿入、更新するようなテーブル。
エントリーテーブルとも呼ぶ。

例）オーダー情報、顧客情報、請求情報など

先頭にENT, TXN, TRNなどを付ける場合が多い。

- マスタテーブル
参照値を保持する用のテーブル。
アプリからは基本的に値を挿入、変更しない。

例）商品一覧、店舗一覧など

先頭にMSTとつけることが多い。
　
■ 論理削除フラグの導入(delete_flg)
レコードの有効性を識別するためのフラグ

例）delete_flg = 1の場合には無効レコードとして扱う。

■ 更新日、更新者の導入(updated_at, updated_by)
レコードがいつ、誰によって変更されたのかの証跡を保持するための属性

■ 外部キー制約はつける場合とつけない場合がある
*/
use test_db;

drop table stocks;
drop table products;
drop table shops;
drop table prefs;

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
  pref_id int(2) unsigned not null,
  constraint fk_pref_id
    foreign key(pref_id)
    references prefs (id)
    on update cascade 
);

create table stocks (
  product_id int unsigned,
  shop_id int unsigned,
  amount int unsigned not null,
  primary key (product_id, shop_id),
  constraint fk_product_id
    foreign key (product_id)
    references products (id)
    on update cascade,
  constraint fk_shop_id
    foreign key (shop_id)
    references shops (id)
    on update cascade
);

