-- 前準備
create table if not exists test_phpdb.important_data (
    id int(10) unsigned auto_increment primary key
);

insert into test_phpdb.important_data values 
(),(),(),(),(),(),(),(),(),(),();

select * from test_phpdb.important_data;