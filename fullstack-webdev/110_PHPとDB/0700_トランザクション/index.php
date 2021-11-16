<?php
/**
 * トランザクション
 * 例）店舗Aから店舗Cへ商品を転送する場合のトランザクション
 * データの不整合が起こらないために必要(例えば合計在庫数が合うように)
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

    $product_id = 3;
    $from_shop_id = 1;
    $to_shop_id = 3;
    $amount = 10;

    $conn->beginTransaction();

    $pst = $conn->prepare('
        UPDATE txn_stocks
        SET amount = amount + :amount
        WHERE shop_id = :shop_id
        AND product_id = :product_id
    ');

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
    echo 'コミット完了<br>';

} catch (PDOException $e) {

    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
    $conn->rollBack();

}
