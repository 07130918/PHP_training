<?php 
// print_r($_POST['account']);
$account = $_POST['account'];
$id = $account['id'];
$name = $account['name'];
$pwd = $account['pwd'];
echo $id, $name, $pwd;
?>