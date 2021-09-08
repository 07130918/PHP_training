<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <?php
        $hashira = ['鱗滝左近次', '宇髄天元', '不死川実弥'];
        for ($i=0; $i < count($hashira); $i++) {
            echo "{$i}: $hashira[$i]";
            echo '</br>';
        }
        for ($i=1; $i < 10; $i++) {
            for ($j=1; $j < 10; $j++) {
                $x = $i * $j;
                echo "{$i} X {$j} = {$x}";
                echo '</br>';
            }
        }
    ?>
</body>
</html>
