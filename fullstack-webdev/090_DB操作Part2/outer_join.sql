-- 条件に当てはまる2つのテーブルのすべてのレコードを返す
-- FULL[OUTER]JOIN MySQLにこの機能は無い
-- テーブル外部結合 LEFT OUTER JOIN と RIGHT OUTER JOIN
select * from 左テーブル
left join 右テーブル
on 左テーブル.値が一致する属性 = 右テーブル.値が一致する属性;


SELECT * from test_db.mst_prefs;

insert into test_db.mst_prefs (name, updated_by) value
('山形', 'satokota'),
('沖縄', 'satokota');

SELECT * from test_db.mst_prefs mp
left join test_db.mst_shops ms
on ms.pref_id = mp.id;
