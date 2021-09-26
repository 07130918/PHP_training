/*
制約の作成

create table テーブル名 (
    カラム名 データ型 列制約,
    表制約
);

- 表制約
表（テーブル）に対して行う制約
例）複合主キー、外部キー制約など

- 列制約
列に対して行う制約
例）NOT NULL 制約など

制約
UNIQUE: 一意制約
NOT NULL: NOT NULL制約
PRIMARY KEY: 主キー制約
FOREIGN KEY: 外部キー制約
CHECK: チェック制約 (MySQL8.0)
*/
create table test_table (
 id int not null default 0 comment 'ID',
 val varchar(20) unique comment '値'
);
