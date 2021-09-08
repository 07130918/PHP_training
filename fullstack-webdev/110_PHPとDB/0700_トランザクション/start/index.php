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

} catch (PDOException $e) {

    echo 'エラーが発生しました。<br>';
    echo $e->getMessage();
   
}
