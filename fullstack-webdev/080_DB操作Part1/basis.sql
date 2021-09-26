
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
-- テーブルの作成
create table test_db.test_table (
	id int(6) unsigned default 0 comment 'ID',
    val varchar(20) default 'hello' comment '値' -- 最後は,で終わらないように
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
