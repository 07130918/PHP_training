/*
ユーザー定義変数
セッション内でのみ有効
@変数名 で使用可能
*/
set @s_id = 2;

-- 条件を絞りnameの値を@s_nameに格納する際の書き方
select @s_name := name from test_db.mst_shops ms
where ms.id = @s_id;

select @s_name;
