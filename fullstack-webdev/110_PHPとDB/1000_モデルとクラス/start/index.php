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
require_once 'datasource.php';

use db\DataSource;

if(isset($_POST['product_id'])) {
    try {
        
        $product_id = $_POST['product_id'];

        $db = new DataSource();

        $result = $db->selectOne('
            select * from mst_products where id = :id and delete_flg <> 1;
        ', [':id' => $product_id]);

        if(!empty($result)) {
            echo "商品名は[{$result['name']}]です。";
        } else {
            echo '一致する商品が見つかりません。';
        }

    } catch(PDOException $e) {
        echo '時間をおいて再度お試しください。';
    }
}