-- 子テーブルの削除
delete from test_db.mst_shops;

-- 子テーブルから参照されているレコードが存在しない状態で
-- 親テーブルが削除可能となる。
delete from test_db.mst_prefs;

-- レコードの確認
select * from test_db.mst_prefs;
select * from test_db.mst_shops;

-- テーブル定義の確認
show create table test_db.mst_shops;
