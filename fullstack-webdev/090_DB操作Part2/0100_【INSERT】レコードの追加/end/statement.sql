/*
レコードの追加

文字列はシングルクォート(')、ダブルクオート(")どちらも可能。
※ バッククォート(`)は予約語のエスケープとして使用。
   データベース名、テーブル名、属性名として予約語を使用する際に使用。

予約語一覧
https://dev.mysql.com/doc/refman/5.6/ja/reserved-words.html

注意）主キーが重複するレコードはエラーとなる。

*/

-- 単一レコードの挿入
insert into テーブル名(属性１, 属性２) values (値１, 値２);

-- 複数レコードの挿入
insert into テーブル名(属性１, 属性２) values (値１, 値２),
(値１, 値２),
(値１, 値２),
(値１, 値２);

insert into test_db.mst_prefs(name, updated_by) values ('北海道', 'codemafia');

insert into 
    test_db.mst_prefs(name, updated_by) 
values 
    ('山形', 'codemafia'),
    ('青森', 'codemafia');

-- MST_PREFSにid = 4のレコードがないため外部キー制約エラー
insert into test_db.mst_shops(name, pref_id, updated_by) values ('店舗A', 4, 'codemafia');

-- 属性の確認
show full columns from test_db.mst_shops;