/*
テーブルの外部結合
LEFT [OUTER] JOINとRIGHT [OUTER] JOIN
FULL [OUTER] JOINについては説明しません。
*/

select * from 左テーブル
left join 右テーブル
on 左テーブル.値が一致する属性 = 右テーブル.値が一致する属性;

-- テストデータの挿入
insert into test_db.mst_prefs (id, name, updated_by)
values (4, '山形', 'codemafia'),
(5, '宮城', 'codemafia');

-- LEFT JOIN
select
	mp.name "都道府県名", ms.name "店舗名"
from
	test_db.mst_prefs mp 
left join test_db.mst_shops ms 
on ms.pref_id = mp.id;

-- RIGHT JOIN
select 
	mp.name "都道府県名", ms.name "店舗名" 
from 
	test_db.mst_shops ms
right join test_db.mst_prefs mp
on ms.pref_id = mp.id;



