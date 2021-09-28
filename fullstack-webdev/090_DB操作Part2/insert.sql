-- 単一レコードの挿入
insert into テーブル名(属性１, 属性２) values (値１, 値２);

-- 複数レコードの挿入
insert into テーブル名(属性１, 属性２) values (値１, 値２),
(値１, 値２),
(値１, 値２),
(値１, 値２);

show full columns from test_db.mst_prefs;

-- レコードの挿入は親テーブルから
INSERT into test_db.mst_prefs(name, updated_by) values ('北海道', 'kota');

INSERT into test_db.mst_prefs(name, updated_by) values ('東京', 'google'),
('青森', 'sato');

