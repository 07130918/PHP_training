<?php
print_r($_POST['account']);
$account = $_POST['account'];
$id = $account['id'];
$name = $account['name'];
$pwd = $account['pwd'];

echo '<br/>';
echo $id;
echo '<br/>';
echo $name;
echo '<br/>';
echo $pwd;
?>
