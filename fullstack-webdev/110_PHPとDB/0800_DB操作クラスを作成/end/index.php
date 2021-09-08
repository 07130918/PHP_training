<?php
// DB操作クラスを作成
?>

<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    Shop ID: <input type="text" name="shop_id">
    <input type="submit" value="検索">
</form>

<?php
require_once 'datasource.php';

use db\DataSource;

if (isset($_POST['shop_id'])) {
    try {

        $shop_id = $_POST['shop_id'];

        $db = new DataSource();
        $result = $db->selectOne("select * from test_phpdb.mst_shops where id = :id;", [
            ':id' => $shop_id
        ]);
        

        if (!empty($result) && count($result) > 0) {
            echo "店舗名は[{$result['name']}]です。";
        } else {
            echo "店舗が見つかりません。";
        }
    } catch (PDOException $e) {
        echo 'エラーが発生しました。';
    }
}
?>