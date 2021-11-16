<?php

$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * 問１：
 * 店舗Cの全ての商品の在庫数に+10を足し合わせる
*/
try {
    $updateRows = $conn->exec('UPDATE txn_stocks SET amount = amount + 10 WHERE shop_id = 3');
    print_r($updateRows);
} catch (PDOException $e) {
    echo $e->getMessage() . '<br>';
}
echo '<br>';

/**
 * 問２：
 * 店舗Dを以下のように追加してください。
 */
/**
 * name: '店舗D'
 * pref_id: 4
*/
// try {
//     $conn->exec("
//         INSERT INTO mst_shops(id, name, pref_id, updated_at, updated_by) VALUES (4, '店舗D', 4, NOW(), 'kota')
//     ");
// } catch (PDOException $e) {
//     echo $e->getMessage() . '<br>';
// }

/**
 * 問３：
 * 店舗Aの椅子の在庫数を取得してください。
 * idを直接指定するのではなく動的に捉えられるようにする
*/
try {
    $pst = $conn->query("
    SELECT ts.amount FROM txn_stocks ts
    INNER JOIN mst_shops ms
    ON ms.id = ts.shop_id
    INNER JOIN mst_products mp
    ON mp.id = ts.product_id
    WHERE ms.name = '店舗A' AND mp.name = '椅子'
    ");

    $result = $pst->fetchAll();
    print_r($result);
} catch (PDOException $e) {
    echo $e->getMessage() . '<br>';
}
