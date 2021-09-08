/*
テーブルの作成
*/
create table テーブル名 (
    カラム名 データ型 default デフォルト値 制約 comment 'コメント',
    ...,
    表制約
) ENGINE = [INNODB | MyISAM];
/*
データ型
INT: 整数値
FLOAT: 浮動小数点
※正の値に限定する場合は unsigned を使用。
DATETIME: 日時
TIMESTAMP: 日時
CHAR: 固定長文字列
VARCHAR: 可変長文字列
BLOB: バイナリデータ（画像や音声、動画など）

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
