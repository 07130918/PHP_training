<?php 
/**
 * SessionとCookieの理解度チェック
 * 
 * index.phpに訪問するたびに訪問回数が
 * １ずつ増える処理を実装してみてください。
 * 
 * Session、Cookieの二つのパターンで実装してみましょう。
 * 
 * １回目
 * 訪問回数は 1 回目です。
 * 
 * ２回目
 * 訪問回数は 2 回目です。
 * 
 */

// Sessionを使った場合
session_start();
if(isset($_SESSION['VISIT_COUNT'])) {
    // 2回目以降の訪問時
    $_SESSION['VISIT_COUNT']++;
} else {
    // 1回目の訪問時
    $_SESSION['VISIT_COUNT'] = 1;
}
?>
<h1>訪問回数は <?php echo $_SESSION['VISIT_COUNT']; ?> 回目です。</h1>

<?php 
// Cookieを使った場合
$visit_count = 1;
if(isset($_COOKIE['VISIT_COUNT'])) {
    // 2回目以降の訪問時
    $visit_count = $_COOKIE['VISIT_COUNT'] + 1;
}
setcookie('VISIT_COUNT', $visit_count);
?>
<h1>訪問回数は <?php echo $visit_count; ?> 回目です。</h1>
