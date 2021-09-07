<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP practice</title>
</head>
<body>
  <h3>
    <?php
      // string
      echo 'こんにちは、' . '文字列型です';
      echo '<br/>';
      $name = 'sato kota';
      echo $name;
      echo '<br/>';

      // int
      $result = 10 * 5 + 4 - 2 / 2;
      echo $result;
      echo '<br/>';
      echo $result + (10 % 3);
      echo '<br/>';

      // float
      echo 10.0 / 3.0;
      echo '<br/>';

      // bool
      echo TRUE || FALSE;
      echo TRUE or FALSE;
      echo '<br/>';
      // falseは出力されない
      echo TRUE && FALSE;
      echo TRUE and FALSE;

      // null
      $x = NULL;

      // キャスト演算
      var_dump(1);
      echo '<br/>';
      $x = (string) 10;
      var_dump($x);
      echo '<br/>';
      $x = (int) '10';
      var_dump($x);
    ?>
</h3>
</body>
</html>
