<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Syntax</title>
</head>
<body>
    <?php
        $x = 100;
        if ($x == '100') {
            echo '暗黙の型変換';
        }
        echo '</br>';

        if ($x === '100') {
            echo '厳密比較演算子';
        } elseif ($x === 99) {
            echo '$xは９９です';
        } else {
            if ($x % 2 === 0) {
                echo '偶数です';
                echo '</br>';
            }
            echo "厳密比較演算子 100 !== '100'";
        }
    ?>
</body>
</html>
