<?php
/**
 * トランザクション
 * 
 * 例）店舗Aから店舗Cへ商品を転送する場合のトランザクション
 */
try {

    $user = 'test_user';
    $pwd = 'pwd';
    $host = 'localhost';
    $dbName = 'test_phpdb';
    $dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
    $conn = new PDO($dsn, $user, $pwd);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $product_id = 2;
    $from_shop_id = 1;
    $to_shop_id = 3;
    $amount = 10;

    $pst = $conn->prepare('
        update txn_stocks
        set amount = amount + :amount
        where shop_id = :shop_id
        and product_id = :product_id
    ');

    $conn->beginTransaction();

    $pst->execute([
        ':amount' => $amount,
        ':shop_id' => $to_shop_id,
        ':product_id' => $product_id
    ]);

    $pst->execute([
        ':amount' => -1 * $amount,
        ':shop_id' => $from_shop_id,
        ':product_id' => $product_id
    ]);

    $conn->commit();

} catch (PDOException $e) {

    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $conn->rollBack();
}
