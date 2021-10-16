<?php
// 参考 https://zenn.dev/ad5/articles/60ca8edadc236f#discuss
function print_question_num(int $n): void {
    echo str_repeat('-', 30), "Question{$n}", str_repeat('-', 30), PHP_EOL;
}

// 問題1 ユーザマスタから取得した2次元配列 $in から、名前だけを取り出した配列を作ってください。
$in = [
    [
        'id' => 1,
        'code' => 'S1001',
        'name' => '山田',
    ],
    [
        'id' => 2,
        'code' => 'S1003',
        'name' => '鈴木',
    ],
    [
        'id' => 3,
        'code' => 'S1002',
        'name' => '佐藤',
    ],
];

print_question_num(1);
var_dump(array_column($in, 'name'));

// 問題2 ユーザマスタの1行を取得した連想配列 $in から、連想配列のキーのみを抽出した配列を作成してください。
$in = [
    'id' => 1,
    'code' => 'S1001',
    'name' => '山田',
    'pref' => 27,
];

print_question_num(2);
var_dump(array_keys($in));

// 問題3 $in は、ユーザマスタから取得した2次元配列です。ユーザコードをキー、名前を値とする連想配列に加工してください。
$in = [
    [
        'id' => 1,
        'code' => 'S1001',
        'name' => '山田',
    ],
    [
        'id' => 2,
        'code' => 'S1003',
        'name' => '鈴木',
    ],
    [
        'id' => 3,
        'code' => 'S1002',
        'name' => '佐藤',
    ],
];

print_question_num(3);
var_dump(array_column($in, 'name', 'code'));

// 問題4 $in1 は ユーザコード => 名前 の連想配列です。名前 $in2 をもとに該当するユーザコードを取得してください。
$in1 = [
    'S1001' => '山田',
    'S1002' => '鈴木',
    'S1003' => '佐藤',
];

$in2 = '鈴木';

print_question_num(4);
var_dump(array_search($in2, $in1));

// 問題5 $in1 はユーザコードの配列、 $in2 は名前の配列です。 ユーザコードをキー、名前を値とした連想配列を作成してください。
$in1 = ['S1001', 'S1002', 'S1003'];
$in2 = ['山田', '鈴木', '佐藤'];

print_question_num(5);
var_dump(array_combine($in1, $in2));

// 問題6 中身が全て $in1 で、要素数が $in2 個の配列を作ってください。
$in1 = 'x';
$in2 = 5;

print_question_num(6);
var_dump(array_fill(0, $in2, $in1));

// 問題7 配列 $in は自然数または null を含む配列です。 この配列から null を取り除いてください。 加工後の配列は、連番の添字配列となるようにしてください。
$in = [1, 2, null, 4, null, 6, 7];

print_question_num(7);
var_dump(array_values(array_filter($in)));

// 問題8 $in は文字列型の数字が入った配列です。 中身を全て整数型にしてください
$in = ['1', '2', '3', '4', '5'];

print_question_num(8);
var_dump(array_map('intval', $in));

// 問題9 $in はユーザマスタから取得した2次元配列です。 sex = 2 のレコードだけに絞ってください。
$in = [
    [
        'id' => 1,
        'name' => '山田',
        'sex' => 2,
    ],
    [
        'id' => 2,
        'name' => '鈴木',
        'sex' => 2,
    ],
    [
        'id' => 3,
        'name' => '佐藤',
        'sex' => 1,
    ],
    [
        'id' => 4,
        'name' => '小林',
        'sex' => 2,
    ],
    [
        'id' => 5,
        'name' => '伊藤',
        'sex' => 1,
    ],
];


print_question_num(9);
var_dump(array_filter($in, function ($el) {
    return $el['sex'] === 2;
}));

// 問題10 $in はユーザマスタから取得した2次元配列です。 誕生日を YYYY年M月D日 表記に変更してください。
$in = [
    [
        'id' => 1,
        'name' => '山田',
        'birthday' => '1980-01-01',
    ],
    [
        'id' => 2,
        'name' => '鈴木',
        'birthday' => '1985-02-14',
    ],
    [
        'id' => 3,
        'name' => '佐藤',
        'birthday' => '1990-12-31',
    ],
];

print_question_num(10);
var_dump(array_map(function($row) {
    $row['birthday'] = date('Y年n月j日', strtotime($row['birthday']));
    return $row;
}, $in));

// 問題11 $in はテーブル tbl に追加したいデータであり、カラム名 => 値 の連想配列となっています。 この配列からINSERT文を生成してください。
$in = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];

print_question_num(11);
$into = join(', ', array_keys($in));
$values = join(', ', array_values($in));
var_dump("INSERT INTO tbl({$into}) VALUES({$values})");

// 問題12 $in1 はユーザマスタから取得した2次元配列です。名前が $in2 であるレコードの、ユーザコードを取得してください。
$in1 = [
    [
        'id' => 1,
        'code' => 'S1001',
        'name' => '山田',
    ],
    [
        'id' => 2,
        'code' => 'S1003',
        'name' => '鈴木',
    ],
    [
        'id' => 3,
        'code' => 'S1002',
        'name' => '佐藤',
    ],
];

$in2 = '鈴木';

print_question_num(12);
$index = array_search($in2, array_column($in1, 'name'));
echo $in1[$index]['code'], PHP_EOL

?>
