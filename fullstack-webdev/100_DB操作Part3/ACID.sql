/*
【ACID特性】トランザクション
*/

start transaction;

insert into test_db.txn_stocks(product_id, shop_id, amount, updated_by)
values (1, 3, 20, 'kota');

update test_db.txn_stocks set amount = 1000
where product_id = 1 and shop_id = 1;

-- 成功
commit;

-- 失敗
rollback;

-- セッションB
select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1)
or (product_id = 1 and shop_id = 3);

/*
一言：
auto commit は商用環境ではＯＦＦにしておこう。
set autocommit = 0;
*/
