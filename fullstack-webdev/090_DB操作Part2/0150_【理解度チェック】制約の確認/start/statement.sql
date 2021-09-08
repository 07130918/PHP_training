/*
【理解度チェック】制約の確認
以下のクエリをそれぞれ流して制約によって
エラーとなることを確認してください。
*/
-- NOT NULL制約
insert into test_db.mst_prefs(name, updated_by) values (null, 'codemafia');

-- 主キー制約（UNIQUEキー制約）
insert into test_db.mst_prefs(id, name, updated_by) values (3, '岩手', 'codemafia');

-- 外部キー制約（restrict）
insert into test_db.mst_shops(name, pref_id, updated_by) values ('店舗A', 4, 'codemafia');
