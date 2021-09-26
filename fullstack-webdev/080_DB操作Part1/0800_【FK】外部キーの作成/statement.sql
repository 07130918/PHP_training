/*
外部キーの作成
see https://dev.mysql.com/doc/refman/5.6/ja/create-table-foreign-keys.html

注意）
- 型情報は合わせる
- インデックスの自動付与
（すでに有効なキーが存在する場合には作成しない。
　例：複合主キーの一番最初はインデックスが作成されない。）

ON DELETE: レコードが削除された際のアクション
ON UPDATE: レコードが更新された際のアクション

CASCADE:
親テーブルの行を削除または更新し、子テーブル内の一致する行を自動的に削除または更新します。

RESTRICT:
親テーブルに対する削除または更新操作を拒否します。
ON DELETE または ON UPDATE 句を省略することと同義。
*/

-- 外部キーの作成
alter table テーブル名
add constraint 制約名（※削除する際に使用）
foreign key (対象のキー名)
      references 親テーブル名(テーブルキー名)
      on update cascade 
      on delete restrict; -- 省略可

alter table shops
add constraint fk_pref_id
  foreign key(pref_id)
  references prefs (id)
  on update cascade

alter table stocks
add constraint fk_product_id
  foreign key(product_id)
  references products (id)
  on update cascade,
add constraint fk_shop_id
  foreign key(shop_id)
  references shops (id)
  on update cascade;

-- 外部キーの削除
alter table テーブル名
    drop foreign key 制約名;

-- 外部キーの確認
show create table stocks;