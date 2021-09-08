/*
テーブルの内部結合（INNER JOIN）
*/
select * from テーブル１
inner join テーブル２
on テーブル１.値が一致する属性 = テーブル２.値が一致する属性;

-- 例
select
	ms.name "店舗名", mp.name "都道府県名"
from
	test_db.mst_shops ms 
inner join test_db.mst_prefs mp 
on ms.pref_id = mp.id;

-- where を使った結合
select
	ms.name "店舗名", mp.name "都道府県名"
from
	test_db.mst_shops ms,
    test_db.mst_prefs mp 
where ms.pref_id = mp.id;