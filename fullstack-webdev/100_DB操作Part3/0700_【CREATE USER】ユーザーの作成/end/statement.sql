/*
ユーザーの確認と作成
*/
-- 現在ユーザーの確認
select user();
-- ユーザーの作成
create user {ユーザー名}@{接続元のホスト名} identified by 'password';
create user 'test_user'@'localhost' identified by 'pwd';
-- ユーザー一覧
select * from mysql.user;
