<?php
/**
 * 理解度チェック（画面とDB操作クラス）
 * 
 * 以下のフォームで飛んできたproduct_idで商品テーブル（mst_products）を検索して
 * 画面上に文字を表示してください。
 * 
 * ※ DataSourceクラスを使用してください。
 * 
 * 商品が存在する場合
 * -> 商品名は[{商品名}]です。
 * 
 * 商品が存在しない場合
 * -> 一致する商品が見つかりません。
 * 
 * レコードは存在するが、delete_flg が 1 の場合
 * -> 一致する商品が見つかりません。
 * 
 * DB操作で例外が発生した場合
 * -> 時間をおいて再度お試しください。
 */
?>

<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    商品ID：<input type="text" name="product_id">
    <input type="submit">
</form>

<?php
