/* 
character set(文字コード)
- utf8
3bytes
一部、表示できない文字が存在する。
 
- utf8mb4
4bytes
絵文字などにも対応。

※MySQL の今後のバージョンでは、utf8 が 4 バイトの utf8 になり、
3 バイトの utf8 を指定するときに utf8mb3 を示す必要が生じる可能性があります。

データベース、テーブル、カラムに設定可能
*/

-- Databaseの文字コード指定
create database utf8mb4_db
    character set 'utf8mb4';

-- テーブルへの設定
create table tbl_name() character set 'utf8mb4';

-- テストテーブルの作成
create table test_db.char_test(
  mb4 varchar(20) character set 'utf8mb4',
  mb3 varchar(20) character set 'utf8'
);

-- 絵文字を挿入
insert into test_db.char_test(mb4) values ('😄');
insert into test_db.char_test(mb3) values ('😄'); -- エラー発生
select * from test_db.char_test;

-- 確認が終わったら削除
drop table test_db.char_test;