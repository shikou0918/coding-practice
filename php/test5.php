<?php
// 練習1
// $test_takers = trim(fgets(STDIN));

// $test_taker_data = array();  // 受験者の情報を格納する二次元配列

// for ($i = 0; $i < $test_takers; $i++) {
//     $input_line = trim(fgets(STDIN));
//     list($division, $english, $math, $science, $language, $geography) = explode(" ", $input_line);

//     $test_taker_data[] = array(
//         'division' => $division,
//         'english' => intval($english),
//         'math' => intval($math),
//         'science' => intval($science),
//         'language' => intval($language),
//         'geography' => intval($geography)
//     );
// }

// $pass = 0;
// foreach ($test_taker_data as $data) {
//     if ($data['division'] == "s") {
//         if (array_sum($data) >= 350 && ($data['math'] + $data['science']) >= 160) {
//             $pass++;
//         }
//     }
//     if ($data['division'] == "l") {
//         if (array_sum($data) >= 350 && ($data['language'] + $data['geography']) >= 160) {
//             $pass++;
//         }
//     }
// }

// echo $pass . "\n";  // 通過した受験者の数を出力

// 練習2
$people = trim(fgets(STDIN));

// 所持しているボールの数
$balls = [];
for ($i = 0; $i < $people; $i++) {
    $balls[] = trim(fgets(STDIN));
}

// 何回パス回しをするか
$passes = trim(fgets(STDIN));

for ($i = 0; $i < $passes; $i++) {
    $input_line = trim(fgets(STDIN));
    list($from, $to, $number) = explode(" ", $input_line);
    if ($balls[$from - 1] < $number) {
        $balls[$to - 1] += $balls[$from - 1];
        $balls[$from - 1] = 0;
    } else {
        $balls[$to - 1] += $number;
        $balls[$from - 1] -= $number;
    }
}

foreach ($balls as $ball) {
    echo $ball . "\n";
}

// 練習3
<?php
// 当選番号を取得
$winningNumbers = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 購入枚数 N を取得
$N = intval(trim(fgets(STDIN)));

// 各くじについて処理
for ($i = 0; $i < $N; $i++) {
    // くじの数字を取得
    $ticketNumbers = array_map('intval', explode(' ', trim(fgets(STDIN))));

    // 当選した数字の数をカウント
    $matchCount = count(array_intersect($winningNumbers, $ticketNumbers));

    // 結果を出力
    echo $matchCount . "\n";
}
?>

?>
