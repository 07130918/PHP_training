/*
テーブルの切り捨て

特徴：
- rollbackで戻せない
- deleteより高速
- where句は使用不可
- auto_incrementは初期値となる
*/
truncate [table] テーブル名
truncate test_db.mst_prefs;