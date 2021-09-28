-- 構文
-- 2つのテーブルを結合した際に両テーブルに存在するレコードを返す
-- テーブルの内部結合
select * from テーブル１
inner join テーブル２
on テーブル１.値が一致する属性 = テーブル２.値が一致する属性;

SELECT ms.id, ms.name "店舗名", ms.pref_id, mp.name "都道府県"
from test_db.mst_shops ms
inner join test_db.mst_prefs mp
on ms.pref_id = mp.id;

SELECT ms.id, ms.name "店舗名", ms.pref_id, mp.name "都道府県"
from test_db.mst_shops ms, test_db.mst_prefs mp
WHERE ms.pref_id = mp.id;
