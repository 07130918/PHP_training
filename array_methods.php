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

?>
