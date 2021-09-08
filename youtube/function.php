<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
        function add($x, $y = 21) {
            $z = $x + $y;
            return $z;
        }

        $a = 10;
        $sum = add($a);
        echo $sum;
    ?>
</body>
</html>
