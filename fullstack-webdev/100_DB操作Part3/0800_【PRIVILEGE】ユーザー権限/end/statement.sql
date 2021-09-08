/*
ユーザー権限の付与
*/
-- 権限の確認
show grants for test_user@localhost;

-- 権限の付与
grant {権限名} on {対象のDBオブジェクト} to {ユーザー};
grant all on test_db.* to 'test_user'@'localhost';
grant update, insert on test_db.* to 'test_user'@'localhost';
grant create, alter on test_db.* to 'test_user'@'localhost';
-- 権限の削除
revoke all on test_db.* from 'test_user'@'localhost';
-- ユーザーの削除
drop user 'test'@'%';