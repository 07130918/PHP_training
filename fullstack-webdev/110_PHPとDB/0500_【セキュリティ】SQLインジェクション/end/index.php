<?php 
// SQLインジェクション
?>

<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    Shop ID: <input type="text" name="shop_id">
    <input type="submit" value="検索">
</form>

<?php 
if(isset($_POST['shop_id'])) {
    
    $shop_id = $_POST['shop_id'];

    $user = 'test_user';
    $pwd = 'pwd';
    $host = 'localhost';
    $dbName = 'test_phpdb';
    $dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
    $conn = new PDO($dsn, $user, $pwd);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pst = $conn->prepare("select * from test_phpdb.mst_shops where id = :id;");
    $pst->bindValue(':id', $shop_id, PDO::PARAM_INT);
    $pst->execute();
    $result = $pst->fetch();

    if(count($result) > 0) {
        echo "店舗名は[{$result['name']}]です。";
    }
}
 ?>