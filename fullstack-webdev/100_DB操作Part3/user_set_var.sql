/*
ユーザー定義変数
セッション内でのみ有効
@変数名 で使用可能
*/
set @s_id = 2;

select @s_name := name from test_db.mst_shops ms 
where ms.id = @s_id;

select @s_name;