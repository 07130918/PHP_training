/*
TIMESTAMPとDATETIMEの違い
- TIMESTAMP
4 bytes
'1970-01-01 00:00:01' UTC to '2038-01-09 03:14:07'
タイムゾーンを考慮

- DATETIME
5 bytes(旧バージョンでは8bytes)
'1000-01-01 00:00:00' to '9999-12-31 23:59:59' 
タイムゾーンを考慮しない（DBの移行が考えられる場合には重要）
*/
-- 
create table test_date (
    dt datetime,
    ts timestamp
);

-- タイムゾーンの確認
select @@session.time_zone;

-- 現在時刻を挿入
insert into test_date values(now(), now());

-- レコードの確認
select * from test_date;

-- タイムゾーンの変更
set session time_zone = "+09:00";
