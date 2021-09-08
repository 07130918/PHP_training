<?php
/**
 * DB操作クラスを作成（続き）
 * 
 * 例）店舗Aから店舗Cへ商品を転送する場合のトランザクション
 */
require_once 'datasource.php';

use db\DataSource;

try {
    $db = new DataSource;

    $product_id = 2;
    $from_shop_id = 1;
    $to_shop_id = 3;
    $amount = 10;

    $sql = '
        update txn_stocks
        set amount = amount + :amount
        where shop_id = :shop_id
        and product_id = :product_id
    ';

    $db->begin();

    $db->execute($sql, [
        ':amount' => $amount,
        ':shop_id' => $to_shop_id,
        ':product_id' => $product_id
    ]);

    $db->execute($sql, [
        ':amount' => -1 * $amount,
        ':shop_id' => $from_shop_id,
        ':product_id' => $product_id
    ]);

    $db->commit();
} catch (PDOException $e) {

    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $db->rollBack();
}
