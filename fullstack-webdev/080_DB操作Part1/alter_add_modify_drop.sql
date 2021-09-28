/**
 * データベースの作成
 */
-- DB作成
create database test_db;
-- DB削除
DROP table test_db.test_table;

/*
テーブルの作成
*/
create table テーブル名 (
    カラム名 データ型 default デフォルト値 制約 comment 'コメント',
    ...,
    表制約
) ENGINE = [INNODB | MyISAM];
/*
制約
UNIQUE: 一意制約
NOT NULL: NOT NULL制約
CHECK: チェック制約
PRIMARY KEY: 主キー制約
FOREIGN KEY: 外部キー制約
*/
-- primaryはnot null かつ uniqueみたいなもの
-- テーブルの作成
create table test_db.test_table (
	key1 int auto_increment primary key,
    val varchar(20) UNIQUE default 'hello' comment '値' -- 最後は,で終わらないように
);

-- テーブル定義表示
-- アクティブなDBの切り替え
use test_db;
-- useを書かない場合desc文などにはdatabase名から書く
-- desc test_db.test_table;
desc test_table;
show full columns from test_table;
show CREATE table test_table ;
-- アクティブなDBの確認
SELECT DATABASE();

/*
テーブル定義の変更
*/
alter table test_db.test_table
add column key2 varchar(20) not null,
add column key3 varchar(20) not null;

alter table test_db.test_table
add column key4 varchar(20) after key2;

alter table test_db.test_table
add column key5 varchar(20) first;

alter table test_db.test_table
modify column key5 int not null;

alter table test_db.test_table
modify column key1 int(11) NOT NULL;

alter table test_db.test_table
drop column key5;

alter table test_db.test_table
drop primary key;

show create table test_db.test_table;
