/*
インデックスとオプティマイザ

- インデックス
インデックスを使用することで高速に処理を完了できる。

- インデックスが使用されるケース
値の比較(<)や等価(=)
like '文字%'
表の結合時
order by によるソート

- オプティマイザ
実際にどのようにしてレコードを取得するかを決定する制御。
- インデックスを使うかどうか。
- データの件数や偏り、またはテーブルのカラム数によっても挙動が変わる。
*/
use test_db;
create table test_index (
    id int auto_increment primary key,
    val1 int(8),
    val2 int(8),
    val3 int(8),
    val4 int(8)
);
-- val1にインデックスを追加
alter table test_index add index idx_val1(val1);

-- テーブル定義確認
show create table test_index;

-- ダミーレコード挿入用プロシージャ
delimiter $$
create procedure insert_dummy_data(mx int)
begin
  declare i int default 0;
  while i < mx do
    insert into test_db.test_index(val1, val2, val3, val4)
    values (ceil(rand() * 1e8),ceil(rand() * 1e8),ceil(rand() * 1e8),ceil(rand() * 1e8));
    set i = i + 1;
  end while;
end $$
delimiter ;
-- 削除用：drop procedure insert_dummy_data;

-- 再挿入の際に使用
truncate test_db.test_index;

-- ダミーデータ挿入
call insert_dummy_data(10);

-- 件数確認
select count(1) from test_index;

-- 実行計画取得
select * from test_index where val1 > 5;
-- type all: フルスキャン インデックスが使われていない状態
-- type range: インデックスが使用されている状態
