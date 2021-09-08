-- セッション1用
start transaction;

update test_db.txn_stocks set amount = 500
where product_id = 1 and shop_id = 1;

update test_db.txn_stocks set amount = 500
where product_id = 1 and shop_id = 2;
commit;

-- 更新状態確認用クエリ
select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1)
or (product_id = 1 and shop_id = 2);

-- lock解除待ちの確認
select * from information_schema.innodb_lock_waits;

-- deadlockの確認
show engine innodb status;

