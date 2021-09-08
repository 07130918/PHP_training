<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetition</title>
</head>
<body>
    <?php
        $ary = [12, 13, 56, 33, -1, 56];

        $message = '負の値は含まれていません';
        for ($i=0; $i < count($ary); $i++) {
            if ($ary[$i] === 13) {
                continue;
            }
            if ($ary[$i] < 0) {
                $message = '負の値が含まれています';
                break;
            }
            echo $ary[$i];
            echo '</br>';
        }
        echo $message;
        echo '</br>';
        echo '</br>';

        $i = 0;
        while($i < count($ary)) {
            if ($ary[$i] < 0) {
                echo '負の値が来たため処理を終えます';
                break;
            }
            echo "{$ary[$i]}は正の値です";
            echo '</br>';
            $i++;
        }
    ?>
</body>
</html>
