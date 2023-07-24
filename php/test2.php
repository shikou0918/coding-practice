<?php
// 練習1
// 渋滞は車間距離Mメートルから→100メートルまで定義
// 車の台数N→1000台まで
// $input_line = trim(fgets(STDIN));
// list($number_cars, $congestion_distance) = explode(" ", $input_line);


// // $number_carsの数-1回だけ標準入力を行う
// for ($i = 1; $i < $number_cars; $i++) {
//   $car_distance = trim(fgets(STDIN)); // 改行を取り除く

//   // 距離が$congestion_distance以下の場合のみ合計に加算
//   if ($car_distance <= $congestion_distance) {
//       $totalDistance += $car_distance;
//   }
// }

// echo $totalDistance;

// 練習2
// $input_line = trim(fgets(STDIN));
// list($number_applicants, $present_a, $present_b) = explode(" ", $input_line);

// // 結果を保存する配列を初期化
// $results = [];

// for ($i = 1; $i <= $number_applicants; $i++) {
//     $output = '';

//     // Aの倍数かつBの倍数の場合は'AB'を追加
//     if ($i % $present_a === 0 && $i % $present_b === 0) {
//         $output .= 'AB';
//     }
//     // Aの倍数の場合は'A'を追加
//     elseif ($i % $present_a === 0) {
//         $output .= 'A';
//     }
//     // Bの倍数の場合は'B'を追加
//     elseif ($i % $present_b === 0) {
//         $output .= 'B';
//     }
//     // どちらにも当てはまらない場合は'N'を追加
//     else {
//         $output .= 'N';
//     }

//     // 結果を配列に追加
//     $results[] = $output;
// }

// // 結果を改行区切りで出力
// echo implode("\n", $results) . "\n";

// 練習3
// $number_elevator = trim(fgets(STDIN));
// $total_floors_to_move = 0;
// $prev_floors_to_move = 1; // 最初の入力は1階として扱う

// for ($i = 1; $i <= $number_elevator; $i++) {
//     $floors_to_move = trim(fgets(STDIN));

//     // 直前の入力との差を計算して合計に加算
//     $diff = abs($floors_to_move - $prev_floors_to_move);
//     $total_floors_to_move += $diff;

//     // 直前の入力を更新
//     $prev_floors_to_move = $floors_to_move;
// }

// echo $total_floors_to_move . "\n";

// 練習4
// $handle_name = trim(fgets(STDIN));
// $charactersToRemove = array('a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O');
// $result = str_replace($charactersToRemove, '', $handle_name);
// echo $result;

// 練習5
// $input_line = trim(fgets(STDIN));
// list($charge_balance, $boarding_count) = explode(" ", $input_line);

// $results = [];
// $total_points = 0;

// for ($i = 1; $i <= $boarding_count; $i++) {
//     $fare = trim(fgets(STDIN));
//     $point = $fare * 0.1;

//     if ($fare <= $total_points) {
//       $total_points -= $fare;
//     } else {
//       $charge_balance -= $fare;
//       $total_points += $point;
//     }

//     $result = $charge_balance . ' ' . $total_points; // $charge_balance_resultと$point_resultを半角スペースで連結
//     $results[] = $result;
// }

// echo implode("\n", $results) . "\n";

$input_line = trim(fgets(STDIN));
$results = []; // 結果を格納するための配列

for ($i = 1; $i <= $input_line; $i++) {
    $number = trim(fgets(STDIN));
    $number  = intval($number);
    $total = 0; // 各数の約数の和を計算するための変数

    for ($j = 1; $j < $number; $j++) {
        if ($number % $j === 0) {
            // $j は $number の約数なので、その値を約数の和に加算する
            $total += $j;
        }
    }

    if ($number === $total) {
        $output = 'perfect';
    } elseif ($number -1 === $total) {
        $output = 'nearly';
    } else {
        $output = 'neither';
    }

    // 結果を配列に追加
    $results[] = $output;
}

// 結果を表示
echo implode("\n", $results) . "\n";


?>
