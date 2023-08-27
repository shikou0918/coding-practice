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

// // 練習2
// $people = trim(fgets(STDIN));

// // 所持しているボールの数
// $balls = [];
// for ($i = 0; $i < $people; $i++) {
//     $balls[] = trim(fgets(STDIN));
// }

// // 何回パス回しをするか
// $passes = trim(fgets(STDIN));

// for ($i = 0; $i < $passes; $i++) {
//     $input_line = trim(fgets(STDIN));
//     list($from, $to, $number) = explode(" ", $input_line);
//     if ($balls[$from - 1] < $number) {
//         $balls[$to - 1] += $balls[$from - 1];
//         $balls[$from - 1] = 0;
//     } else {
//         $balls[$to - 1] += $number;
//         $balls[$from - 1] -= $number;
//     }
// }

// foreach ($balls as $ball) {
//     echo $ball . "\n";
// }

// // 練習3
// // 当選番号を取得
// $winningNumbers = array_map('intval', explode(' ', trim(fgets(STDIN))));

// // 購入枚数 N を取得
// $N = intval(trim(fgets(STDIN)));

// // 各くじについて処理
// for ($i = 0; $i < $N; $i++) {
//     // くじの数字を取得
//     $ticketNumbers = array_map('intval', explode(' ', trim(fgets(STDIN))));

//     // 当選した数字の数をカウント
//     $matchCount = count(array_intersect($winningNumbers, $ticketNumbers));

//     // 結果を出力
//     echo $matchCount . "\n";
// }

// 練習4
// $input_line = trim(fgets(STDIN));
// list($x, $y) = explode(" ", $input_line);

// function calculateOnesDigit($score) {
//     // 文字列に分割した数字を一括で整数に変換し、それらの合計の一の位を求める
//     return array_sum(array_map('intval', str_split($score))) % 10;
// }

// $bob_ones_digit = calculateOnesDigit($x);
// $alice_ones_digit = calculateOnesDigit($y);

// if ($bob_ones_digit > $alice_ones_digit) {
//     $result = "Bob";
// } elseif ($bob_ones_digit < $alice_ones_digit) {
//     $result = "Alice";
// } else {
//     $result = "Draw";
// }

// echo $result;

// 練習4
// $days = trim(fgets(STDIN));

// $stock_price = [];
// for ($i = 0; $i < $days; $i++) {
//   $stock_price[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
// }

// $open = $stock_price[0][0];
// $close = $stock_price[$days - 1][1]; // 最後の日の終値を使用

// $max_high = $stock_price[0][2]; // 最初の日の高値を初期値として設定
// $min_low = $stock_price[0][3];  // 最初の日の安値を初期値として設定

// // 最高価格と最低価格を更新
// for ($i = 0; $i < $days; $i++) {
//     if ($stock_price[$i][2] > $max_high) {
//         $max_high = $stock_price[$i][2];
//     }
//     if ($stock_price[$i][3] < $min_low) {
//         $min_low = $stock_price[$i][3];
//     }
// }

// echo "$open $close $max_high $min_low\n";
// print_r($stock_price);

// 練習5
// 観光場所数
$places = intval(trim(fgets(STDIN)));

// 各観光地の滞在時間
$stay_time = [];
for ($i = 0; $i < $places; $i++) {
  $stay_time[] = intval(trim(fgets(STDIN)));
}

// 移動時間
$travel_time = [];
for ($i = 0; $i < $places; $i++) {
  $travel_time[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

// 訪れたい観光各所
$want_visit = intval(trim(fgets(STDIN)));

$want_visit_numbers = [];
for ($i = 0; $i < $want_visit; $i++) {
  $want_visit_numbers[] = intval(trim(fgets(STDIN)));
}

$total_time = 0;
$current_location = $want_visit[0]; // 初めての観光名所
foreach ($want_visit_numbers as $want_visit_number) {
    // 移動時間の合計
    $total_time += $travel_time[$current_location][$want_visit_number - 1];
    // 滞在時間の合計
    $total_time += $stay_time[$want_visit_number - 1];

    // 現在の場所を更新
    $current_location = $want_visit_number - 1;
}

echo $total_time . "\n";
?>
