<?php
// 参考 https://zenn.dev/ad5/articles/60ca8edadc236f#discuss
function print_question_num(int $n): void {
    echo str_repeat('-', 30), "Question{$n}", str_repeat('-', 30), PHP_EOL;
}

// 問題1 ユーザマスタから取得した2次元配列 $in から、名前だけを取り出した配列を作ってください。
print_question_num(1);
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

var_dump(array_column($in, 'name'));

// 問題2 ユーザマスタの1行を取得した連想配列 $in から、連想配列のキーのみを抽出した配列を作成してください。
print_question_num(2);
$in = [
    'id' => 1,
    'code' => 'S1001',
    'name' => '山田',
    'pref' => 27,
];

var_dump(array_keys($in));

// 問題3 $in は、ユーザマスタから取得した2次元配列です。ユーザコードをキー、名前を値とする連想配列に加工してください。
print_question_num(3);
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

var_dump(array_column($in, 'name', 'code'));

// 問題4 $in1 は ユーザコード => 名前 の連想配列です。名前 $in2 をもとに該当するユーザコードを取得してください。
print_question_num(4);
$in1 = [
    'S1001' => '山田',
    'S1002' => '鈴木',
    'S1003' => '佐藤',
];

$in2 = '鈴木';

var_dump(array_search($in2, $in1));

// 問題5 $in1 はユーザコードの配列、 $in2 は名前の配列です。 ユーザコードをキー、名前を値とした連想配列を作成してください。
print_question_num(5);
$in1 = ['S1001', 'S1002', 'S1003'];
$in2 = ['山田', '鈴木', '佐藤'];

var_dump(array_combine($in1, $in2));

// 問題6 中身が全て $in1 で、要素数が $in2 個の配列を作ってください。
print_question_num(6);
$in1 = 'x';
$in2 = 5;

var_dump(array_fill(0, $in2, $in1));

// 問題7 配列 $in は自然数または null を含む配列です。 この配列から null を取り除いてください。 加工後の配列は、連番の添字配列となるようにしてください。
print_question_num(7);
$in = [1, 2, null, 4, null, 6, 7];

var_dump(array_values(array_filter($in)));

// 問題8 $in は文字列型の数字が入った配列です。 中身を全て整数型にしてください
print_question_num(8);
$in = ['1', '2', '3', '4', '5'];

var_dump(array_map('intval', $in));

// 問題9 $in はユーザマスタから取得した2次元配列です。 sex = 2 のレコードだけに絞ってください。
print_question_num(9);
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


var_dump(array_filter($in, function (array $el): bool {
    return $el['sex'] === 2;
}));

// 問題10 $in はユーザマスタから取得した2次元配列です。 誕生日を YYYY年M月D日 表記に変更してください。
print_question_num(10);
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

var_dump(array_map(function(array $row): array {
    $row['birthday'] = date('Y年n月j日', strtotime($row['birthday']));
    return $row;
}, $in));

// 問題11 $in はテーブル tbl に追加したいデータであり、カラム名 => 値 の連想配列となっています。 この配列からINSERT文を生成してください。
print_question_num(11);
$in = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];

$into = join(', ', array_keys($in));
$values = join(', ', array_values($in));
var_dump("INSERT INTO tbl({$into}) VALUES({$values})");

// 問題12 $in1 はユーザマスタから取得した2次元配列です。名前が $in2 であるレコードの、ユーザコードを取得してください。
print_question_num(12);
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

// array_searchはキーを返すためこの場合indexが返る
$index = array_search($in2, array_column($in1, 'name'));
echo $in1[$index]['code'], PHP_EOL;

// 問題13 スネークケースをパスカルケースに変換してください。
print_question_num(13);
$in = 'this_is_an_apple';

echo implode(array_map('ucfirst', explode('_', $in))), PHP_EOL;

// 問題14 $in はユーザマスタから取得した2次元配列です。 レコードに含まれる pref の値を全て重複なく抽出して、配列にしてください。また、作成した配列は、添字配列（連番キー）となるようにしてください。
print_question_num(14);
$in = [
    [
        'id' => 1,
        'name' => '山田',
        'pref' => 27,
    ],
    [
        'id' => 2,
        'name' => '鈴木',
        'pref' => 26,
    ],
    [
        'id' => 3,
        'name' => '佐藤',
        'pref' => 13,
    ],
    [
        'id' => 4,
        'name' => '小林',
        'pref' => 27,
    ],
    [
        'id' => 5,
        'name' => '伊藤',
        'pref' => 13,
    ],
];

var_dump(array_values(array_unique(array_column($in, 'pref'))));

// 問題15 $in1 は tbl テーブルの更新内容、 $in2 は更新対象のIDです。これらを元に UPDATE 文を作成してください。
print_question_num(15);
$in1 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];

$in2 = 99;

$set = join(',', array_map(function(string $key, int $value): string {
    return "{$key} = {$value}";
}, array_keys($in1), array_values($in1)));
var_dump("UPDATE tbl SET {$set} WHERE id = {$in2}");
?>
