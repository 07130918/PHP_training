<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
        $hashira = ['鱗滝左近次', '宇髄天元', '不死川実弥'];
        foreach ($hashira as $value) {
            echo "{$value}";
            echo '</br>';
        }
        echo '</br>';

        $hashira = ['鱗滝左近次', '宇髄天元', '不死川実弥'];
        foreach ($hashira as $key => $value) {
            echo "{$key}番目: {$value}";
            echo '</br>';
        }
        echo '</br>';

        $hashira = [
            '水柱' => '鱗滝左近次',
            '音柱' => '宇髄天元',
            '風柱' => '不死川実弥'
        ];
        foreach ($hashira as $key => $value) {
            echo "{$key}!!!: {$value}";
            echo '</br>';
        }
    ?>
</body>
</html>
