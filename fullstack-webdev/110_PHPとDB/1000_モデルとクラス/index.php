<?php
/**
 * モデルとクラス
 */
?>

<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    商品ID：<input type="text" name="product_id">
    <input type="submit">
</form>

<?php
require_once 'product.model.php';
require_once '../datasource.php';

use db\DataSource;
use model\ProductModel;

if (isset($_POST['product_id'])) {
    try {
        $id = $_POST['product_id'];
        $db = new DataSource();
        $sql = 'SELECT * FROM mst_products WHERE id = :id AND delete_flg != 1;';
        // $resultはクラスインスタンスになる
        $result = $db->selectOne($sql, [':id' => $id], DataSource::CLS, ProductModel::class);
        var_dump($result);

        if (!empty($result)) {
            $result->echoProductName();
        } else {
            echo "商品が見つかりません。";
        }
    } catch (PDOException $e) {
        echo '時間をおいて再度お試しください。' . '<br>';
    }
}
