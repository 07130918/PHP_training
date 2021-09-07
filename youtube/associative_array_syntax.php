<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
    <?php
        $hashira = [
            '水柱' => '鱗滝左近次',
            '音柱' => '宇髄天元',
            '風柱' => '不死川実弥'
        ];
        echo $hashira['水柱'];
        echo '<br/>';
        $hashira['水柱'] = '冨岡義勇';
        echo $hashira['水柱'];
        echo '<br/>';

        $hashira['炎柱'] = '煉獄杏寿郎';
        echo $hashira['炎柱'];
        echo '<br/>';

        var_dump($hashira);
        echo '<br/>';
        echo '<br/>';

        // phpに配列の概念はなく全て連想配列,ただしkeyがint型の連番の場合省略可能
        $names = ['佐藤', '久保木'];
        $names[] = '小久保';
        array_push($names, '大木', '野原');
        var_dump($names);
        echo '<br/>';

        // array_mergeは非破壊的
        $b = ['高橋', '本多', '川崎'];
        $names_merged = array_merge($names, $b);
        var_dump($names_merged);
        echo '<br/>';
        var_dump($names);
        echo '<br/>';

        array_unshift($names, '清水', '岡本');
        var_dump($names);
        echo '<br/>';

        var_dump(array_shift($names));
        echo '<br/>';

        var_dump($names);
        echo '<br/>';

        var_dump(array_pop($names));
        echo '<br/>';
        var_dump($names);
        ?>
</body>
</html>
