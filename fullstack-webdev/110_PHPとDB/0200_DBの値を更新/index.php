<?php
/**
 * DBの値を更新
 */
$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// データ更新
// exec: 影響を受けたレコード数が戻り値になる
$result = $conn->exec('UPDATE mst_prefs SET name = "福島" WHERE id = 5');

echo '<pre>';
print_r($result);
echo '</pre>';

$conn = null;
