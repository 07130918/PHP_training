/*
# 以下を設定すると実行されたクエリがログに出力されます。
mysqlに再度接続する場合その都度やる

set global general_log = 'on';
set global general_log_file = '/Applications/MAMP/logs/mysql_query.log';
# ログの確認
tail -f /Applications/MAMP/logs/mysql_query.log
*/

/*
受講前にクエリを流してください。
このセクションで利用するtest_phpdbデータベースを作成します。
*/
SET SESSION AUTOCOMMIT = 0;

--
-- Database: test_phpdb
--
-- DROP DATABASE test_phpdb;
CREATE DATABASE IF NOT EXISTS test_phpdb DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE test_phpdb;

/* ユーザーに権限の付与 */
CREATE USER IF NOT EXISTS 'test_user'@'localhost' IDENTIFIED BY 'pwd';
GRANT ALL ON test_phpdb.* TO 'test_user'@'localhost';

START TRANSACTION;

SET @editor = 'kota';

SET time_zone = "+09:00";

-- --------------------------------------------------------

CREATE TABLE mst_prefs (
  id int(2) UNSIGNED NOT NULL,
  name varchar(10) NOT NULL,
  delete_flg int(1) NOT NULL DEFAULT '0',
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_by varchar(20) NOT NULL
);

INSERT INTO mst_prefs (id, name, delete_flg, updated_by) VALUES
(1, '北海道', 0, @editor),
(2, '青森', 0, @editor),
(3, '岩手', 0, @editor),
(4, '山形', 0, @editor),
(5, '宮城', 0, @editor);

-- --------------------------------------------------------

CREATE TABLE mst_products (
  id int(10) UNSIGNED NOT NULL,
  name varchar(20) NOT NULL,
  delete_flg int(1) NOT NULL DEFAULT '0',
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_by varchar(20) NOT NULL
);

INSERT INTO mst_products (id, name, delete_flg, updated_by) VALUES
(1, 'テーブル', 0, @editor),
(2, '椅子', 1, @editor),
(3, 'ベッド', 0, @editor);

-- --------------------------------------------------------

CREATE TABLE mst_shops (
  id int(10) UNSIGNED NOT NULL,
  name varchar(50) NOT NULL,
  pref_id int(2) UNSIGNED NOT NULL,
  delete_flg int(1) NOT NULL DEFAULT '0',
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_by varchar(20) NOT NULL
);

INSERT INTO mst_shops (id, name, pref_id, delete_flg, updated_by) VALUES
(1, '店舗A', 1, 0, @editor),
(2, '店舗B', 2, 0, @editor),
(3, '店舗C', 3, 0, @editor);

-- --------------------------------------------------------

CREATE TABLE txn_stocks (
  product_id int(10) UNSIGNED NOT NULL,
  shop_id int(10) UNSIGNED NOT NULL,
  amount int(10) UNSIGNED NOT NULL,
  delete_flg int(1) NOT NULL DEFAULT '0',
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_by varchar(20) NOT NULL
);

INSERT INTO txn_stocks (product_id, shop_id, amount, delete_flg, updated_by) VALUES
(1, 1, 10, 0, @editor),
(2, 1, 80, 0, @editor),
(3, 1, 30, 0, @editor),
(1, 2, 100, 0, @editor),
(2, 2, 60, 0, @editor),
(3, 2, 50, 0, @editor),
(1, 3, 70, 0, @editor),
(2, 3, 90, 0, @editor),
(3, 3, 20, 0, @editor);

--
-- Indexes for dumped tables

ALTER TABLE mst_prefs
  ADD PRIMARY KEY (id);

ALTER TABLE mst_products
  ADD PRIMARY KEY (id);

ALTER TABLE mst_shops
  ADD PRIMARY KEY (id),
  ADD KEY fk_pref_id (pref_id);

ALTER TABLE txn_stocks
  ADD PRIMARY KEY (product_id,shop_id),
  ADD KEY fk_shop_id (shop_id);

-- AUTO_INCREMENT for dumped tables

ALTER TABLE mst_prefs
  MODIFY id int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE mst_products
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE mst_shops
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- Constraints for dumped tables

ALTER TABLE mst_shops
  ADD CONSTRAINT fk_pref_id FOREIGN KEY (pref_id) REFERENCES mst_prefs (id) ON UPDATE CASCADE;

ALTER TABLE txn_stocks
  ADD CONSTRAINT fk_product_id FOREIGN KEY (product_id) REFERENCES mst_products (id) ON UPDATE CASCADE,
  ADD CONSTRAINT fk_shop_id FOREIGN KEY (shop_id) REFERENCES mst_shops (id) ON UPDATE CASCADE;
COMMIT;
